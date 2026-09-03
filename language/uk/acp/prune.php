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

// User pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_USERS_EXPLAIN'	=> 'Цей розділ дозволяє видаляти чи деактивувати користувачів вашого форуму. Облікові записи можна фільтрувати різними способами: за кількістю повідомлень, останньою активністю тощо. Критерії можна поєднувати, щоб звузити коло облікових записів, на які впливатиме дія. Наприклад, ви можете видалити користувачів з менш ніж 10 повідомленнями, які також були неактивні після 2002-01-01. Використовуйте * як символ підстановки для текстових полів. Крім того, ви можете повністю пропустити вибір критеріїв, ввівши список користувачів (кожен в окремому рядку) у текстове поле. Будьте обережні з цим інструментом! Після видалення користувача скасувати цю дію неможливо.',

	'CRITERIA'				=> 'Критерії',

	'DEACTIVATE_DELETE'			=> 'Деактивувати або видалити',
	'DEACTIVATE_DELETE_EXPLAIN'	=> 'Оберіть, чи деактивувати користувачів, чи видалити їх повністю. Зверніть увагу, видалених користувачів неможливо відновити!',
	'DELETE_USERS'				=> 'Видалити',
	'DELETE_USER_POSTS'			=> 'Видалити повідомлення видалених користувачів',
	'DELETE_USER_POSTS_EXPLAIN' => 'Видаляє повідомлення, надіслані видаленими користувачами, не має ефекту, якщо користувачів деактивовано.',

	'JOINED_EXPLAIN'			=> 'Введіть дату у форматі <kbd>РРРР-ММ-ДД</kbd>. Ви можете використати обидва поля, щоб вказати інтервал, або залишити одне порожнім для відкритого діапазону дат.',

	'LAST_ACTIVE_EXPLAIN'		=> 'Введіть дату у форматі <kbd>РРРР-ММ-ДД</kbd>. Введіть <kbd>0000-00-00</kbd>, щоб видалити користувачів, які ніколи не входили, умови <em>До</em> та <em>Після</em> будуть проігноровані.',

	'POSTS_ON_QUEUE'			=> 'Повідомлення, що очікують схвалення',
	'PRUNE_USERS_GROUP_EXPLAIN'	=> 'Обмежити користувачами в обраній групі.',
	'PRUNE_USERS_GROUP_NONE'	=> 'Всі групи',
	'PRUNE_USERS_LIST'				=> 'Користувачі для видалення',
	'PRUNE_USERS_LIST_DELETE'		=> 'З обраними критеріями видалення користувачів буде видалено наступні облікові записи. Ви можете виключити окремих користувачів зі списку видалення, знявши позначку біля їхнього імені користувача.',
	'PRUNE_USERS_LIST_DEACTIVATE'	=> 'З обраними критеріями видалення користувачів буде деактивовано наступні облікові записи. Ви можете виключити окремих користувачів зі списку деактивації, знявши позначку біля їхнього імені користувача.',

	'SELECT_USERS_EXPLAIN'		=> 'Введіть тут конкретні імена користувачів. Вони матимуть пріоритет над критеріями вище. Засновників неможливо видалити.',

	'USER_DEACTIVATE_SUCCESS'	=> 'Обраних користувачів успішно деактивовано.',
	'USER_DELETE_SUCCESS'		=> 'Обраних користувачів успішно видалено.',
	'USER_PRUNE_FAILURE'		=> 'Жоден користувач не відповідає обраним критеріям.',

	'WRONG_ACTIVE_JOINED_DATE'	=> 'Введена дата неправильна, очікується формат <kbd>РРРР-ММ-ДД</kbd>.',
));

// Forum Pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_FORUMS_EXPLAIN'	=> 'Це видалить будь-яку тему, у якій не публікували повідомлень і яку не переглядали протягом вказаної вами кількості днів. Якщо ви не введете число, буде видалено всі теми. За замовчуванням це не видалятиме теми з опитуваннями, що ще тривають, а також не видалятиме закріплені теми й оголошення.',

	'FORUM_PRUNE'		=> 'Очищення форуму',

	'NO_PRUNE'			=> 'Жодного форуму не очищено.',

	'SELECTED_FORUM'	=> 'Обраний форум',
	'SELECTED_FORUMS'	=> 'Обрані форуми',

	'POSTS_PRUNED'					=> 'Повідомлень очищено',
	'PRUNE_ANNOUNCEMENTS'			=> 'Очистити оголошення',
	'PRUNE_FINISHED_POLLS'			=> 'Очистити завершені опитування',
	'PRUNE_FINISHED_POLLS_EXPLAIN'	=> 'Видаляє теми з опитуваннями, які завершилися.',
	'PRUNE_FORUM_CONFIRM'			=> 'Ви впевнені, що бажаєте очистити обрані форуми з вказаними налаштуваннями? Після видалення відновити очищені повідомлення й теми неможливо.',
	'PRUNE_NOT_POSTED'				=> 'Днів з останньої публікації',
	'PRUNE_NOT_VIEWED'				=> 'Днів з останнього перегляду',
	'PRUNE_OLD_POLLS'				=> 'Очистити старі опитування',
	'PRUNE_OLD_POLLS_EXPLAIN'		=> 'Видаляє теми з опитуваннями, у яких не голосували протягом вказаної кількості днів з часу повідомлення.',
	'PRUNE_STICKY'					=> 'Очистити закріплені теми',
	'PRUNE_SUCCESS'					=> 'Очищення форумів успішно виконано.',

	'TOPICS_PRUNED'		=> 'Тем очищено',
));
