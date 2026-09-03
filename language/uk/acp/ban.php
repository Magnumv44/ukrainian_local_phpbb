<?php
/**
*
* This file is part of the Ukrainian Language Pack
* for the phpBB Forum Software.
*
* @copyright (c) 2026 Magnum <https://magnumblog.space>
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

// Banning
$lang = array_merge($lang, array(
	'1_HOUR'		=> '1 година',
	'30_MINS'		=> '30 хвилин',
	'6_HOURS'		=> '6 годин',

	'ACP_BAN_EXPLAIN'	=> 'Тут ви можете керувати блокуванням користувачів за іменем, IP чи email-адресою. Ці методи запобігають доступу користувача до будь-якої частини форуму. За бажанням ви можете вказати коротку (максимум 3000 символів) причину блокування. Її буде показано в журналі адміністратора. Також можна вказати тривалість блокування. Якщо ви бажаєте, щоб блокування закінчилося конкретного дня, а не через встановлений період часу, оберіть <span style="text-decoration: underline;">До -&gt;</span> для тривалості блокування та введіть дату у форматі <kbd>РРРР-ММ-ДД</kbd>.',

	'BAN_EXCLUDE'			=> 'Виключити з блокування',
	'BAN_LENGTH'			=> 'Тривалість блокування',
	'BAN_REASON'			=> 'Причина блокування',
	'BAN_GIVE_REASON'		=> 'Причина, показана заблокованому',
	'BAN_UPDATE_SUCCESSFUL'	=> 'Список блокувань успішно оновлено.',
	'BANNED_UNTIL_DATE'		=> 'до %s', // Example: "until Mon 13.Jul.2009, 14:44"
	'BANNED_UNTIL_DURATION'	=> '%1$s (до %2$s)', // Example: "7 days (until Tue 14.Jul.2009, 14:44)"

	'EMAIL_BAN'					=> 'Заблокувати одну чи кілька email-адрес',
	'EMAIL_BAN_EXCLUDE_EXPLAIN'	=> 'Увімкніть це, щоб виключити введену email-адресу з усіх поточних блокувань.',
	'EMAIL_BAN_EXPLAIN'			=> 'Щоб вказати кілька email-адрес, вводьте кожну з нового рядка. Для часткового збігу адрес використовуйте * як символ підстановки, напр. <samp>*@hotmail.com</samp>, <samp>*@*.domain.tld</samp> тощо.',
	'EMAIL_NO_BANNED'			=> 'Заблокованих email-адрес немає',
	'EMAIL_UNBAN'				=> 'Розблокувати або скасувати виключення email',
	'EMAIL_UNBAN_EXPLAIN'		=> 'Ви можете розблокувати (або скасувати виключення) кількох email-адрес одночасно, використовуючи відповідну комбінацію миші та клавіатури для вашого комп’ютера й браузера. Виключені email-адреси виділено.',

	'IP_BAN'					=> 'Заблокувати одну чи кілька IP-адрес',
	'IP_BAN_EXCLUDE_EXPLAIN'	=> 'Увімкніть це, щоб виключити введену IP-адресу з усіх поточних блокувань.',
	'IP_BAN_EXPLAIN'			=> 'Щоб вказати кілька різних IP-адрес або імен хостів, вводьте кожне з нового рядка. Щоб вказати діапазон IP-адрес, розділіть початок і кінець дефісом (-), щоб вказати символ підстановки, використовуйте «*».',
	'IP_HOSTNAME'				=> 'IP-адреси або імена хостів',
	'IP_NO_BANNED'				=> 'Заблокованих IP-адрес немає',
	'IP_UNBAN'					=> 'Розблокувати або скасувати виключення IP',
	'IP_UNBAN_EXPLAIN'			=> 'Ви можете розблокувати (або скасувати виключення) кількох IP-адрес одночасно, використовуючи відповідну комбінацію миші та клавіатури для вашого комп’ютера й браузера. Виключені IP-адреси виділено.',

	'LENGTH_BAN_INVALID'		=> 'Дата має бути у форматі <kbd>РРРР-ММ-ДД</kbd>.',

	'OPTIONS_BANNED'			=> 'Заблоковано',
	'OPTIONS_EXCLUDED'			=> 'Виключено',

	'PERMANENT'		=> 'Назавжди',

	'UNTIL'						=> 'До',
	'USER_BAN'					=> 'Заблокувати одного чи кількох користувачів за іменем',
	'USER_BAN_EXCLUDE_EXPLAIN'	=> 'Увімкніть це, щоб виключити введених користувачів з усіх поточних блокувань.',
	'USER_BAN_EXPLAIN'			=> 'Ви можете заблокувати кількох користувачів одночасно, вводячи кожне ім’я з нового рядка. Скористайтеся інструментом <span style="text-decoration: underline;">Знайти учасника</span>, щоб автоматично знайти та додати одного чи кількох користувачів.',
	'USER_NO_BANNED'			=> 'Заблокованих імен користувачів немає',
	'USER_UNBAN'				=> 'Розблокувати або скасувати виключення користувачів за іменем',
	'USER_UNBAN_EXPLAIN'		=> 'Ви можете розблокувати (або скасувати виключення) кількох користувачів одночасно, використовуючи відповідну комбінацію миші та клавіатури для вашого комп’ютера й браузера. Виключених користувачів виділено.',
));
