<?php

/**
 * Exception Notifier
 *
 * Listens for uncaught PHP exceptions and automatically emails detailed
 * reports to the site administrator. This plugin helps maintain visibility
 * into runtime issues that might otherwise go unnoticed in production.
 *
 * Features:
 * - Hooks into the `php_exception` event for global exception coverage.
 * - Prevents email flooding with built-in de-duplication and hourly throttling.
 * - Generates smart, context-rich email messages with request data.
 * - Logs duplicate and throttled events for transparent diagnostics.
 *
 * Intended for production environments to ensure timely error awareness
 * without overwhelming the administrator’s inbox. For development setups,
 * CiSkeleton native error display remains preferable.
 *
 * @package     CiSkeleton\Hooks
 * @subpackage  ExceptionNotifier
 * @category    Debug
 * @author      Kader Bouyakoub <bkader[at]mail[dot]com>
 * @copyright   2018-present, Kader Bouyakoub
 * @license     MIT
 * @link        https://opensource.org/license/mit
 * @hook        `post_controller_constructor`
 */

if (!CI_LIVE) return;

once_action('post_controller_constructor', static function ($ci) {
	$ci->hooks->once('php_exception', static function ($severity, $message, $filepath, $line) use ($ci) {
		// Exit if message is empty
		if (empty($message)) {
			return;
		}

		// --- Start of [Duplicate Errors] ---
		// Generate error hash:
		$error_string = $severity.'|'.$message.'|'.$filepath.'|'.$line;
		$error_hash = md5($error_string);
		$error_cache_key = 'exception_email_'.$error_hash;

		// Load cache driver in case missing.
		isset($ci->cache) || $ci->load->driver('cache');

		// Check for duplicate error:)
		if ($ci->cache->file->get($error_cache_key)) {
			// Instead of sending again, log the repetition.
			log_message('error', 'Duplicate exception detected and skipped: '.$message);
			return;
		}

		// Save this error hash for 1 hour.
		$ci->cache->save($error_cache_key, true, HOUR_IN_SECONDS);
		// --- End of [Duplicate Errors] ---

		// --- Start of [Throttle mechanism] ---
		$throttle_key = 'throttle.exception.cache';
		$max_emails_per_hour = 10;
		$current = $ci->cache->file->get($throttle_key);

		if ($current !== false) {
			if ($current >= $max_emails_per_hour) {
				log_message('error', 'Exception email skipped due to throttle limit.');
				return;
			}
			$ci->cache->file->save($throttle_key, $current + 1, HOUR_IN_SECONDS);
		} else {
			$ci->cache->file->save($throttle_key, 1, HOUR_IN_SECONDS);
		}
		// --- End of [Throttle mechanism] ---

		// Make sure to load "email" library if not already loaded.
		isset($ci->email) || $ci->load->library('email');

		// Start of [Smart subject]
		$datetime = date('Y-m-d H:i:s', CI_REQUEST_TIME);
		$short_message = wordwrap(trim(str_replace(["\n", "\r"], ' ', $message)), 50);
		$short_message = strtok($short_message, "\n"); // Take only first line
		$subject = 'PHP Error: '.(strlen($short_message) > 50 ? substr($short_message, 0, 50).'...' : $short_message);
		// End of [Smart subject]
		$ip_address = ip_address();

		// Pretty error content
		$content = <<<EOT
Date: {$datetime}
Severity: {$severity}
Message: {$message}
File Path: {$filepath}
Line: {$line}
User IP: {$ip_address}
User Agent: {$ci->input->user_agent()}
Request URL: {$ci->input->server('REQUEST_URI')}
EOT;

		// Proceed with email info.
		$ci->email
			->from($ci->config->item('server_email'))
			->to($ci->config->item('admin_email'))
			->subject($subject)
			->message($content);

		// Failed to send email?
		if (!$ci->email->send()) {
			log_message('error', 'Error sending exception email: '.$ci->email->print_debugger(['headers']));
		}
	});
});
