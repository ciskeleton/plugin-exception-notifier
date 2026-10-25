<?php

/**
 * Plugin Information File
 *
 * Provides metadata for the Exception Notifier plugin, allowing plugin
 * manager and marketplace to identify, display, and manage it.
 *
 * @package     CiSkeleton\Plugins
 * @subpackage  ExceptionNotifier
 * @category    Debug
 * @author      Kader Bouyakoub <bkader[at]mail[dot]com>
 * @copyright   2018-present, Kader Bouyakoub
 * @license     MIT
 * @link        https://opensource.org/license/mit
 *
 * SPDX-License-Identifier: MIT
 */

return [
	// Info
	'name' => 'Exception Notifier',
	'description' => 'Listens for uncaught PHP exceptions and automatically emails detailed reports to the site administrator.',
	'version' => '0.0.1',
	'version_id' => 1,
	'repository' => 'https://github.com/ciskeleton/plugin-exception-notifier',

	// Presentation.
	'icon' => 'triangle-exclamation',
	'icon_fg' => '#ffffff',
	'icon_bg' => '#c23b22',

	// Author.
	'author' => [
		'name' => Platform::AUTHOR,
		'url' => Platform::AUTHOR_URL,
	],

	// License.
	'license' => [
		'name' => 'MIT',
		'url' => 'https://opensource.org/license/mit',
	],

	// Translations.
	'translations' => [
		// Arabic
		'arabic' => [
			'name' => 'مُخطِر الاستثناءات',
			'description' => 'يراقب استثناءات PHP غير الملتقطة ويرسل تلقائيًا تقارير مفصلة عبر البريد الإلكتروني إلى مسؤول الموقع.',
		],

		// Armenian
		'armenian' => [
			'name' => 'Բացառությունների ծանուցիչ',
			'description' => 'Հետևում է չբռնված PHP բացառություններին և ավտոմատ կերպով մանրամասն հաշվետվություններ է ուղարկում կայքի ադմինիստրատորին։',
		],

		// Azerbaijani
		'azerbaijani' => [
			'name' => 'İstisna Bildiricisi',
			'description' => 'Tutulmamış PHP istisnalarını izləyir və ətraflı hesabatları avtomatik olaraq sayt administratoruna e-poçtla göndərir.',
		],

		// Bengali
		'bengali' => [
			'name' => 'এক্সেপশন নোটিফায়ার',
			'description' => 'ধরা না পড়া PHP এক্সেপশনগুলোর জন্য নজর রাখে এবং স্বয়ংক্রিয়ভাবে সাইট অ্যাডমিনিস্ট্রেটরকে বিস্তারিত রিপোর্ট ইমেইল করে।',
		],

		// Brazilian Portuguese
		'brazilian' => [
			'name' => 'Notificador de Exceções',
			'description' => 'Monitora exceções PHP não tratadas e envia automaticamente relatórios detalhados por e-mail ao administrador do site.',
		],

		// Bulgarian
		'bulgarian' => [
			'name' => 'Известяване за изключения',
			'description' => 'Проследява неуловени PHP изключения и автоматично изпраща подробни отчети по имейл на администратора на сайта.',
		],

		// Catalan
		'catalan' => [
			'name' => 'Notificador d’excepcions',
			'description' => 'Vigila les excepcions de PHP no capturades i envia automàticament informes detallats per correu electrònic a l’administrador del lloc.',
		],

		// Simplified Chinese
		'chinese' => [
			'name' => '异常通知器',
			'description' => '监听未捕获的 PHP 异常，并自动将详细报告通过电子邮件发送给网站管理员。',
		],

		// Croatian
		'croatian' => [
			'name' => 'Obavještavatelj o iznimkama',
			'description' => 'Prati neuhvaćene PHP iznimke i automatski šalje detaljna izvješća e-poštom administratoru stranice.',
		],

		// Czech
		'czech' => [
			'name' => 'Upozornění na výjimky',
			'description' => 'Sleduje nezachycené PHP výjimky a automaticky zasílá podrobné zprávy e-mailem správci webu.',
		],

		// Danish
		'danish' => [
			'name' => 'Undtagelsesmelder',
			'description' => 'Overvåger ufangede PHP-undtagelser og sender automatisk detaljerede rapporter via e-mail til webstedets administrator.',
		],

		// Dutch
		'dutch' => [
			'name' => 'Uitzonderingsmelder',
			'description' => 'Houdt onopgevangen PHP-uitzonderingen in de gaten en e-mailt automatisch gedetailleerde rapporten naar de sitebeheerder.',
		],

		// Estonian
		'estonian' => [
			'name' => 'Erindite teavitaja',
			'description' => 'Jälgib püüdmata PHP erindeid ja saadab automaatselt üksikasjalikud aruanded e-posti teel saidi administraatorile.',
		],

		// Filipino
		'filipino' => [
			'name' => 'Tagapag-abiso ng Exception',
			'description' => 'Sinusubaybayan ang mga hindi nahuling PHP exception at awtomatikong nag-e-email ng detalyadong ulat sa administrador ng site.',
		],

		// Finnish
		'finnish' => [
			'name' => 'Poikkeusilmoittaja',
			'description' => 'Seuraa kiinniottamattomia PHP-poikkeuksia ja lähettää automaattisesti yksityiskohtaiset raportit sähköpostitse sivuston ylläpitäjälle.',
		],

		// French
		'french' => [
			'name' => 'Notificateur d’exceptions',
			'description' => 'Surveille les exceptions PHP non interceptées et envoie automatiquement des rapports détaillés par e-mail à l’administrateur du site.',
		],

		// Georgian
		'georgian' => [
			'name' => 'გამონაკლისების შემტყობინებელი',
			'description' => 'აკვირდება დაუჭერელ PHP გამონაკლისებს და ავტომატურად აგზავნის დეტალურ ანგარიშებს ელფოსტით საიტის ადმინისტრატორთან.',
		],

		// German
		'german' => [
			'name' => 'Ausnahme-Benachrichtiger',
			'description' => 'Überwacht nicht abgefangene PHP-Ausnahmen und sendet automatisch detaillierte Berichte per E-Mail an den Website-Administrator.',
		],

		// Greek
		'greek' => [
			'name' => 'Ειδοποιητής εξαιρέσεων',
			'description' => 'Παρακολουθεί μη καταγεγραμμένες εξαιρέσεις PHP και στέλνει αυτόματα λεπτομερείς αναφορές μέσω e-mail στον διαχειριστή του ιστότοπου.',
		],

		// Hindi
		'hindi' => [
			'name' => 'एक्सेप्शन नोटिफायर',
			'description' => 'अनपकड़े गए PHP एक्सेप्शन पर नज़र रखता है और स्वचालित रूप से साइट एडमिनिस्ट्रेटर को विस्तृत रिपोर्ट ईमेल करता है।',
		],

		// Hungarian
		'hungarian' => [
			'name' => 'Kivétel-értesítő',
			'description' => 'Figyeli az el nem kapott PHP kivételeket, és automatikusan részletes jelentéseket küld e-mailben az oldal adminisztrátorának.',
		],

		// Indonesian
		'indonesian' => [
			'name' => 'Pemberitahu Pengecualian',
			'description' => 'Memantau pengecualian PHP yang tidak tertangkap dan secara otomatis mengirim laporan terperinci melalui email kepada administrator situs.',
		],

		// Italian
		'italian' => [
			'name' => 'Notificatore di Eccezioni',
			'description' => 'Monitora le eccezioni PHP non gestite e invia automaticamente report dettagliati via e-mail all’amministratore del sito.',
		],

		// Japanese
		'japanese' => [
			'name' => '例外通知ツール',
			'description' => 'キャッチされていない PHP の例外を監視し、詳細なレポートを自動的にサイト管理者にメールで送信します。',
		],

		// Khmer
		'khmer' => [
			'name' => 'ឧបករណ៍ជូនដំណឹងកំហុសលើកលែង',
			'description' => 'តាមដានករណីលើកលែង (exceptions) របស់ PHP ដែលមិនបានចាប់ និងផ្ញើរបាយការណ៍លម្អិតដោយស្វ័យប្រវត្តិទៅកាន់អ្នកគ្រប់គ្រងគេហទំព័រតាមអ៊ីមែល។',
		],

		// Korean
		'korean' => [
			'name' => '예외 알림기',
			'description' => '처리되지 않은 PHP 예외를 감지하고 상세한 보고서를 사이트 관리자에게 자동으로 이메일로 보냅니다.',
		],

		// Latvian
		'latvian' => [
			'name' => 'Izņēmumu paziņotājs',
			'description' => 'Uzrauga neuztvertus PHP izņēmumus un automātiski nosūta detalizētus pārskatus pa e-pastu vietnes administratoram.',
		],

		// Lithuanian
		'lithuanian' => [
			'name' => 'Išimčių pranešėjas',
			'description' => 'Stebi nesugautas PHP išimtis ir automatiškai siunčia išsamias ataskaitas el. paštu svetainės administratoriui.',
		],

		// Malay
		'malay' => [
			'name' => 'Pemberitahu Pengecualian',
			'description' => 'Memantau pengecualian PHP yang tidak ditangkap dan secara automatik menghantar e-mel laporan terperinci kepada pentadbir laman.',
		],

		// Marathi
		'marathi' => [
			'name' => 'अपवाद सूचक',
			'description' => 'न पकडलेल्या PHP अपवादांवर लक्ष ठेवतो आणि साइट प्रशासकाला आपोआप तपशीलवार अहवाल ईमेल करतो.',
		],

		// Norwegian
		'norwegian' => [
			'name' => 'Unntaksvarsler',
			'description' => 'Overvåker ufangede PHP-unntak og sender automatisk detaljerte rapporter på e-post til nettstedets administrator.',
		],

		// Persian
		'persian' => [
			'name' => 'اعلام‌کننده استثنا',
			'description' => 'استثناهای شناسایی‌نشده PHP را رصد می‌کند و به‌طور خودکار گزارش‌های دقیق را از طریق ایمیل برای مدیر سایت ارسال می‌کند.',
		],

		// Polish
		'polish' => [
			'name' => 'Powiadamiacz o wyjątkach',
			'description' => 'Monitoruje nieobsłużone wyjątki PHP i automatycznie wysyła szczegółowe raporty e-mailem do administratora witryny.',
		],

		// European Portuguese
		'portuguese' => [
			'name' => 'Notificador de Exceções',
			'description' => 'Monitoriza exceções PHP não tratadas e envia automaticamente relatórios detalhados por e-mail ao administrador do site.',
		],

		// Romanian
		'romanian' => [
			'name' => 'Notificator de excepții',
			'description' => 'Monitorizează excepțiile PHP necapturate și trimite automat prin e-mail rapoarte detaliate administratorului site-ului.',
		],

		// Russian
		'russian' => [
			'name' => 'Уведомитель об исключениях',
			'description' => 'Отслеживает необработанные исключения PHP и автоматически отправляет подробные отчёты по электронной почте администратору сайта.',
		],

		// Serbian (Latin)
		'serbian' => [
			'name' => 'Obaveštavač o izuzecima',
			'description' => 'Prati neuhvaćene PHP izuzetke i automatski šalje detaljne izveštaje putem e-pošte administratoru sajta.',
		],

		// Slovak
		'slovak' => [
			'name' => 'Oznamovač výnimiek',
			'description' => 'Sleduje nezachytené PHP výnimky a automaticky zasiela podrobné správy e-mailom správcovi webu.',
		],

		// Slovenian
		'slovenian' => [
			'name' => 'Obveščevalnik o izjemah',
			'description' => 'Spremlja neujete PHP izjeme in samodejno pošilja podrobna poročila po e-pošti skrbniku spletnega mesta.',
		],

		// Spanish
		'spanish' => [
			'name' => 'Notificador de Excepciones',
			'description' => 'Supervisa las excepciones de PHP no capturadas y envía automáticamente informes detallados por correo electrónico al administrador del sitio.',
		],

		// Swahili
		'swahili' => [
			'name' => 'Kijulishi cha Hitilafu',
			'description' => 'Hufuatilia hitilafu za PHP ambazo hazijashughulikiwa na kutuma kiotomatiki ripoti za kina kwa barua pepe kwa msimamizi wa tovuti.',
		],

		// Swedish
		'swedish' => [
			'name' => 'Undantagsavisering',
			'description' => 'Övervakar ofångade PHP-undantag och skickar automatiskt detaljerade rapporter via e-post till webbplatsens administratör.',
		],

		// Traditional Chinese
		'taiwanese' => [
			'name' => '例外通知工具',
			'description' => '監聽未被捕捉的 PHP 例外，並自動將詳細報告以電子郵件寄送給網站管理員。',
		],

		// Tamil
		'tamil' => [
			'name' => 'விதிவிலக்கு அறிவிப்பாளர்',
			'description' => 'பிடிக்கப்படாத PHP விதிவிலக்குகளைக் கண்காணித்து, விரிவான அறிக்கைகளை தானாகவே தள நிர்வாகிக்கு மின்னஞ்சல் செய்கிறது.',
		],

		// Thai
		'thai' => [
			'name' => 'ตัวแจ้งเตือนข้อยกเว้น',
			'description' => 'คอยตรวจจับข้อยกเว้น (exception) ของ PHP ที่ไม่ได้ถูกจัดการ และส่งรายงานโดยละเอียดทางอีเมลไปยังผู้ดูแลเว็บไซต์โดยอัตโนมัติ',
		],

		// Turkish
		'turkish' => [
			'name' => 'İstisna Bildiricisi',
			'description' => 'Yakalanmamış PHP istisnalarını izler ve ayrıntılı raporları otomatik olarak site yöneticisine e-posta ile gönderir.',
		],

		// Ukrainian
		'ukrainian' => [
			'name' => 'Сповіщувач про винятки',
			'description' => 'Відстежує необроблені винятки PHP і автоматично надсилає детальні звіти електронною поштою адміністратору сайту.',
		],

		// Urdu
		'urdu' => [
			'name' => 'ایکسیپشن نوٹیفائر',
			'description' => 'نظر انداز شدہ PHP ایکسیپشنز پر نظر رکھتا ہے اور خودکار طور پر تفصیلی رپورٹس سائٹ ایڈمنسٹریٹر کو ای میل کرتا ہے۔',
		],

		// Vietnamese
		'vietnamese' => [
			'name' => 'Trình thông báo ngoại lệ',
			'description' => 'Theo dõi các ngoại lệ PHP chưa được xử lý và tự động gửi email báo cáo chi tiết cho quản trị viên trang web.',
		],
	],
];
