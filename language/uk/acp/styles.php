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
	$lang = [];
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

$lang = array_merge($lang, [
	'ACP_STYLES_EXPLAIN'						=> 'Тут ви можете керувати стилями, доступними на вашому форумі.<br>Зверніть увагу, ви не можете видалити стиль «<strong>prosilver</strong>», оскільки він є основним і батьківським стилем phpBB за замовчуванням.',

	'CANNOT_BE_INSTALLED'						=> 'Неможливо встановити',
	'CONFIRM_UNINSTALL_STYLES'					=> 'Ви впевнені, що бажаєте видалити обрані стилі?',
	'COPYRIGHT'									=> 'Авторське право',

	'DEACTIVATE_DEFAULT'						=> 'Ви не можете деактивувати стиль за замовчуванням.',
	'DELETE_FROM_FS'							=> 'Видалити з файлової системи',
	'DELETE_STYLE_FILES_FAILED'					=> 'Помилка видалення файлів для стилю "%s".',
	'DELETE_STYLE_FILES_SUCCESS'				=> 'Файли для стилю "%s" видалено.',
	'DETAILS'									=> 'Деталі',

	'INHERITING_FROM'							=> 'Успадковується від',
	'INSTALL_STYLE'								=> 'Встановити стиль',
	'INSTALL_STYLES'							=> 'Встановити стилі',
	'INSTALL_STYLES_EXPLAIN'					=> 'Тут ви можете встановлювати нові стилі.<br>Якщо ви не можете знайти конкретний стиль у списку нижче, переконайтеся, що стиль вже встановлено. Якщо він не встановлений, перевірте, чи його коректно завантажено.',
	'INVALID_STYLE_ID'							=> 'Недійсний ID стилю.',

	'NO_MATCHING_STYLES_FOUND'					=> 'Жоден стиль не відповідає вашому запиту.',
	'NO_UNINSTALLED_STYLE'						=> 'Невстановлених стилів не виявлено.',

	'PURGED_CACHE'								=> 'Кеш очищено.',

	'REQUIRES_STYLE'							=> 'Цей стиль вимагає встановлення стилю "%s".',

	'STYLE_ACTIVATE'							=> 'Активувати',
	'STYLE_ACTIVE'								=> 'Активний',
	'STYLE_DEACTIVATE'							=> 'Деактивувати',
	'STYLE_DEFAULT'								=> 'Зробити стилем за замовчуванням',
	'STYLE_DEFAULT_CHANGE_INACTIVE'				=> 'Вам потрібно активувати стиль, перш ніж зробити його стилем за замовчуванням.',
	'STYLE_ERR_INVALID_PARENT'					=> 'Недійсний батьківський стиль.',
	'STYLE_ERR_NAME_EXIST'						=> 'Стиль з такою назвою вже існує.',
	'STYLE_ERR_STYLE_NAME'						=> 'Вам потрібно вказати назву для цього стилю.',
	'STYLE_INSTALLED'							=> 'Стиль "%s" встановлено.',
	'STYLE_INSTALLED_RETURN_INSTALLED_STYLES'	=> 'Повернутися до списку встановлених стилів',
	'STYLE_INSTALLED_RETURN_UNINSTALLED_STYLES'	=> 'Встановити ще стилі',
	'STYLE_NAME'								=> 'Назва стилю',
	'STYLE_NAME_RESERVED'						=> 'Стиль "%s" неможливо встановити, оскільки ця назва зарезервована.',
	'STYLE_NOT_INSTALLED'						=> 'Стиль "%s" не було встановлено.',
	'STYLE_PATH'								=> 'Шлях стилю',
	'STYLE_UNINSTALL'							=> 'Видалити',
	'STYLE_UNINSTALL_DEPENDENT'					=> 'Стиль "%s" неможливо видалити, оскільки він має один або кілька дочірніх стилів.',
	'STYLE_UNINSTALLED'							=> 'Стиль "%s" успішно видалено.',
	'STYLE_PHPBB_VERSION'						=> 'Версія phpBB',
	'STYLE_USED_BY'								=> 'Використовується (включно з ботами)',
	'STYLE_VERSION'								=> 'Версія стилю',

	'UNINSTALL_PROSILVER'						=> 'Ви не можете видалити стиль «prosilver».',
	'UNINSTALL_DEFAULT'							=> 'Ви не можете видалити стиль за замовчуванням.',

	'BROWSE_STYLES_DATABASE'					=> 'Переглянути базу даних стилів',
]);
