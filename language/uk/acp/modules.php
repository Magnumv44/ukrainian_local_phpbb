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

$lang = array_merge($lang, array(
	'ACP_MODULE_MANAGEMENT_EXPLAIN'	=> 'Тут ви можете керувати всіма видами модулів. Зверніть увагу, ПА має трирівневу структуру меню (Категорія -> Категорія -> Модуль), тоді як інші розділи мають дворівневу структуру меню (Категорія -> Модуль), яку потрібно зберігати. Також майте на увазі, що ви можете самі себе заблокувати, якщо вимкнете чи видалите модулі, відповідальні за саме керування модулями.',
	'ADD_MODULE'					=> 'Додати модуль',
	'ADD_MODULE_CONFIRM'			=> 'Ви впевнені, що бажаєте додати обраний модуль з обраним режимом?',
	'ADD_MODULE_TITLE'				=> 'Додати модуль',

	'CANNOT_REMOVE_MODULE'	=> 'Не вдалося видалити модуль, він має призначені дочірні елементи. Будь ласка, видаліть або перемістіть всі дочірні елементи, перш ніж виконати цю дію.',
	'CATEGORY'				=> 'Категорія',
	'CHOOSE_MODE'			=> 'Оберіть режим модуля',
	'CHOOSE_MODE_EXPLAIN'	=> 'Оберіть використовуваний режим модуля.',
	'CHOOSE_MODULE'			=> 'Оберіть модуль',
	'CHOOSE_MODULE_EXPLAIN'	=> 'Оберіть файл, який викликає цей модуль.',
	'CREATE_MODULE'			=> 'Створити новий модуль',

	'DEACTIVATED_MODULE'	=> 'Деактивований модуль',
	'DELETE_MODULE'			=> 'Видалити модуль',
	'DELETE_MODULE_CONFIRM'	=> 'Ви впевнені, що бажаєте видалити цей модуль?',

	'EDIT_MODULE'			=> 'Редагувати модуль',
	'EDIT_MODULE_EXPLAIN'	=> 'Тут ви можете ввести специфічні налаштування модуля.',

	'HIDDEN_MODULE'			=> 'Прихований модуль',

	'MODULE'					=> 'Модуль',
	'MODULE_ADDED'				=> 'Модуль успішно додано.',
	'MODULE_DELETED'			=> 'Модуль успішно видалено.',
	'MODULE_DISPLAYED'			=> 'Модуль показано',
	'MODULE_DISPLAYED_EXPLAIN'	=> 'Якщо ви не бажаєте показувати цей модуль, але хочете його використовувати, встановіть «ні».',
	'MODULE_EDITED'				=> 'Модуль успішно відредаговано.',
	'MODULE_ENABLED'			=> 'Модуль увімкнено',
	'MODULE_LANGNAME'			=> 'Мовна назва модуля',
	'MODULE_LANGNAME_EXPLAIN'	=> 'Введіть показувану назву модуля. Використовуйте мовну константу, якщо назва береться з мовного файлу.',
	'MODULE_TYPE'				=> 'Тип модуля',

	'NO_CATEGORY_TO_MODULE'	=> 'Не вдалося перетворити категорію на модуль. Будь ласка, видаліть/перемістіть усі дочірні елементи, перш ніж виконати цю дію.',
	'NO_MODULE'				=> 'Модуль не знайдено.',
	'NO_MODULE_ID'			=> 'ID модуля не вказано.',
	'NO_MODULE_LANGNAME'	=> 'Мовну назву модуля не вказано.',
	'NO_PARENT'				=> 'Немає батьківського',

	'PARENT'				=> 'Батьківський',
	'PARENT_NO_EXIST'		=> 'Батьківський елемент не існує.',

	'SELECT_MODULE'			=> 'Оберіть модуль',
));
