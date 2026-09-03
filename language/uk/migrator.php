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
	'CONFIG_NOT_EXIST'					=> 'Налаштування конфігурації "%s" неочікувано не існує.',

	'GROUP_NOT_EXIST'					=> 'Група "%s" неочікувано не існує.',

	'MIGRATION_APPLY_DEPENDENCIES'		=> 'Застосування залежностей %s.',
	'MIGRATION_DATA_DONE'				=> 'Дані встановлено: %1$s; Час: %2$.2f с.',
	'MIGRATION_DATA_IN_PROGRESS'		=> 'Встановлення даних: %1$s; Час: %2$.2f с.',
	'MIGRATION_DATA_RUNNING'			=> 'Встановлення даних: %s.',
	'MIGRATION_EFFECTIVELY_INSTALLED'	=> 'Міграцію вже фактично встановлено (пропущено): %s',
	'MIGRATION_EXCEPTION_ERROR'			=> 'Під час обробки запиту сталася помилка та було викинуто виняток. Зміни, зроблені до виникнення помилки, за можливості скасовано, проте вам варто перевірити форум на наявність помилок.',
	'MIGRATION_NOT_FULFILLABLE'			=> 'Міграцію "%1$s" неможливо виконати, відсутня міграція "%2$s".',
	'MIGRATION_NOT_INSTALLED'			=> 'Міграцію "%s" не встановлено.',
	'MIGRATION_NOT_VALID'				=> '%s не є коректною міграцією.',
	'MIGRATION_SCHEMA_DONE'				=> 'Схему встановлено: %1$s; Час: %2$.2f с.',
	'MIGRATION_SCHEMA_IN_PROGRESS'		=> 'Встановлення схеми: %1$s; Час: %2$.2f с.',
	'MIGRATION_SCHEMA_RUNNING'			=> 'Встановлення схеми: %s.',

	'MIGRATION_REVERT_DATA_DONE'		=> 'Дані скасовано: %1$s; Час: %2$.2f с.',
	'MIGRATION_REVERT_DATA_IN_PROGRESS'	=> 'Скасування даних: %1$s; Час: %2$.2f с.',
	'MIGRATION_REVERT_DATA_RUNNING'		=> 'Скасування даних: %s.',
	'MIGRATION_REVERT_SCHEMA_DONE'		=> 'Схему скасовано: %1$s; Час: %2$.2f с.',
	'MIGRATION_REVERT_SCHEMA_IN_PROGRESS'	=> 'Скасування схеми: %1$s; Час: %2$.2f с.',
	'MIGRATION_REVERT_SCHEMA_RUNNING'	=> 'Скасування схеми: %s.',

	'MIGRATION_INVALID_DATA_MISSING_CONDITION'		=> 'Міграція некоректна. У помічнику умовного оператора відсутня умова.',
	'MIGRATION_INVALID_DATA_MISSING_STEP'			=> 'Міграція некоректна. У помічнику умовного оператора відсутній коректний виклик кроку міграції.',
	'MIGRATION_INVALID_DATA_CUSTOM_NOT_CALLABLE'	=> 'Міграція некоректна. Не вдалося викликати користувацьку функцію.',
	'MIGRATION_INVALID_DATA_UNKNOWN_TYPE'			=> 'Міграція некоректна. Виявлено невідомий тип інструменту міграції.',
	'MIGRATION_INVALID_DATA_UNDEFINED_TOOL'			=> 'Міграція некоректна. Виявлено невизначений інструмент міграції.',
	'MIGRATION_INVALID_DATA_UNDEFINED_METHOD'		=> 'Міграція некоректна. Виявлено невизначений метод інструменту міграції.',

	'MODULE_ERROR'						=> 'Під час створення модуля сталася помилка: %s',
	'MODULE_EXISTS'						=> 'Модуль вже існує: %s',
	'MODULE_EXIST_MULTIPLE'				=> 'Уже існує декілька модулів із зазначеною назвою батьківського модуля: %s. Спробуйте використати ключі before/after, щоб уточнити розташування модуля.',
	'MODULE_INFO_FILE_NOT_EXIST'		=> 'Відсутній обов’язковий файл інформації про модуль: %2$s',
	'MODULE_NOT_EXIST'					=> 'Необхідний модуль не існує: %s',

	'PARENT_MODULE_FIND_ERROR'			=> 'Неможливо визначити ідентифікатор батьківського модуля: %s',
	'PERMISSION_NOT_EXIST'				=> 'Налаштування прав "%s" неочікувано не існує.',

	'ROLE_ASSIGNED_NOT_EXIST'			=> 'Роль прав, призначена групі "%1$s", неочікувано не існує. ID ролі: "%2$s"',
	'ROLE_NOT_EXIST'					=> 'Роль прав "%s" неочікувано не існує.',
));
