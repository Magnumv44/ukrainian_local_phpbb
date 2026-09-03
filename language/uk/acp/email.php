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

// Email settings
$lang = array_merge($lang, array(
	'ACP_MASS_EMAIL_EXPLAIN'		=> 'Тут ви можете надіслати листом повідомлення або всім своїм користувачам, або всім користувачам конкретної групи, <strong>у яких увімкнено параметр отримання масових листів</strong>. Для цього лист буде надіслано на вказану email-адресу адміністрування, з прихованою копією для всіх отримувачів. За замовчуванням до одного такого листа включається лише 20 отримувачів, для більшої кількості отримувачів буде надіслано більше листів. Якщо ви надсилаєте лист великій групі людей, будь ласка, будьте терплячі після надсилання і не зупиняйте сторінку на півдорозі. Масове розсилання листів зазвичай займає багато часу, вас буде повідомлено, коли скрипт завершить роботу.',
	'ALL_USERS'						=> 'Всі користувачі',

	'COMPOSE'				=> 'Написати',

	'EMAIL_SEND_ERROR'		=> 'Під час надсилання листа сталася одна або кілька помилок. Будь ласка, перевірте %sжурнал помилок%s для отримання детальних повідомлень про помилки.',
	'EMAIL_SENT'			=> 'Це повідомлення надіслано.',
	'EMAIL_SENT_QUEUE'		=> 'Це повідомлення поставлено в чергу для надсилання.',

	'LOG_SESSION'			=> 'Записувати сеанс розсилки в критичний журнал',

	'SEND_IMMEDIATELY'		=> 'Надіслати негайно',
	'SEND_TO_GROUP'			=> 'Надіслати групі',
	'SEND_TO_USERS'			=> 'Надіслати користувачам',
	'SEND_TO_USERS_EXPLAIN'	=> 'Введення тут імен скасує будь-яку обрану вище групу. Вводьте кожне ім’я користувача з нового рядка.',

	'MAIL_BANNED'			=> 'Надсилати листи заблокованим користувачам',
	'MAIL_BANNED_EXPLAIN'	=> 'Надсилаючи масовий лист групі, тут ви можете обрати, чи отримають лист також заблоковані користувачі.',
	'MAIL_HIGH_PRIORITY'	=> 'Високий',
	'MAIL_LOW_PRIORITY'		=> 'Низький',
	'MAIL_NORMAL_PRIORITY'	=> 'Звичайний',
	'MAIL_PRIORITY'			=> 'Пріоритет листа',
	'MASS_MESSAGE'			=> 'Ваше повідомлення',
	'MASS_MESSAGE_EXPLAIN'	=> 'Зверніть увагу, ви можете вводити лише звичайний текст. Все форматування буде видалено перед надсиланням.',

	'NO_EMAIL_MESSAGE'		=> 'Вам потрібно ввести повідомлення.',
	'NO_EMAIL_SUBJECT'		=> 'Вам потрібно вказати тему для свого повідомлення.',
));
