<?php
/**
 *
 * VigLink extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2014 phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 * Ukrainian translation by Magnum (magnumblog.space)
 *
 */

/**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'ACP_VIGLINK_SETTINGS'			=> 'Налаштування VigLink',
	'ACP_VIGLINK_SETTINGS_EXPLAIN'	=> 'VigLink — це стороння служба, яка непомітно монетизує посилання, опубліковані користувачами вашого форуму, без будь-яких змін для користувацького досвіду. Коли користувачі натискають на ваші вихідні посилання на товари чи послуги та щось купують, продавці сплачують VigLink комісію, частину якої буде передано проєкту phpBB. Обираючи увімкнути VigLink і жертвуючи прибуток проєкту phpBB, ви підтримуєте нашу організацію з відкритим кодом і забезпечуєте нашу подальшу фінансову стабільність.',
	'ACP_VIGLINK_SETTINGS_CHANGE'	=> 'Ви можете змінити ці налаштування в будь-який час у панелі «<a href="%1$s">Налаштування VigLink</a>».',
	'ACP_VIGLINK_SUPPORT_EXPLAIN'	=> 'Вас більше не буде перенаправлено на цю сторінку, щойно ви надішлете бажані параметри нижче, натиснувши кнопку «Надіслати».',
	'ACP_VIGLINK_ENABLE'			=> 'Увімкнути VigLink',
	'ACP_VIGLINK_ENABLE_EXPLAIN'	=> 'Вмикає використання служб VigLink.',
	'ACP_VIGLINK_EARNINGS'			=> 'Отримувати власний прибуток (за бажанням)',
	'ACP_VIGLINK_EARNINGS_EXPLAIN'	=> 'Ви можете отримувати власний прибуток, зареєструвавши обліковий запис VigLink Convert.',
	'ACP_VIGLINK_DISABLED_PHPBB'	=> 'Служби VigLink вимкнено phpBB.',
	'ACP_VIGLINK_CLAIM'				=> 'Отримати ваш прибуток',
	'ACP_VIGLINK_CLAIM_EXPLAIN'		=> 'Ви можете отримувати прибуток вашого форуму від монетизованих посилань VigLink, замість того, щоб жертвувати прибуток проєкту phpBB. Щоб керувати налаштуваннями свого облікового запису, зареєструйте обліковий запис «VigLink Convert», натиснувши «Обліковий запис Convert».',
	'ACP_VIGLINK_CONVERT_ACCOUNT'	=> 'Обліковий запис Convert',
	'ACP_VIGLINK_NO_CONVERT_LINK'	=> 'Не вдалося отримати посилання на обліковий запис VigLink Convert.',
));
