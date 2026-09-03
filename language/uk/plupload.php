<?php
/**
*
* This file is part of the Ukrainian Language Pack
* for the phpBB Forum Software.
*
* @copyright (c) 2026 Magnum <https://magnumblog.space>
* @copyright (c) 2010-2013 Moxiecode Systems AB
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
	'PLUPLOAD_ADD_FILES'		=> 'Додати файли',
	'PLUPLOAD_ADD_FILES_TO_QUEUE'	=> 'Додайте файли до черги завантаження та натисніть кнопку «Почати».',
	'PLUPLOAD_ALREADY_QUEUED'	=> '%s вже присутній у черзі.',
	'PLUPLOAD_CLOSE'			=> 'Закрити',
	'PLUPLOAD_DRAG'				=> 'Перетягніть файли сюди.',
	'PLUPLOAD_DUPLICATE_ERROR'	=> 'Помилка дублювання файлу.',
	'PLUPLOAD_DRAG_TEXTAREA'	=> 'Ви також можете додавати файли, перетягуючи їх у поле повідомлення.',
	'PLUPLOAD_ERR_INPUT'		=> 'Не вдалося відкрити вхідний потік.',
	'PLUPLOAD_ERR_MOVE_UPLOADED'	=> 'Не вдалося перемістити завантажений файл.',
	'PLUPLOAD_ERR_OUTPUT'		=> 'Не вдалося відкрити вихідний потік.',
	'PLUPLOAD_ERR_FILE_TOO_LARGE'	=> 'Файл завеликий:',
	'PLUPLOAD_ERR_FILE_COUNT'	=> 'Помилка кількості файлів.',
	'PLUPLOAD_ERR_FILE_INVALID_EXT'	=> 'Неприпустиме розширення файлу:',
	'PLUPLOAD_ERR_RUNTIME_MEMORY'	=> 'Недостатньо доступної пам’яті під час виконання.',
	'PLUPLOAD_ERR_UPLOAD_URL'	=> 'URL для завантаження може бути неправильним або не існує.',
	'PLUPLOAD_EXTENSION_ERROR'	=> 'Помилка розширення файлу.',
	'PLUPLOAD_FILE'				=> 'Файл: %s',
	'PLUPLOAD_FILE_DETAILS'		=> 'Файл: %s, розмір: %d, максимальний розмір файлу: %d',
	'PLUPLOAD_FILENAME'			=> 'Назва файлу',
	'PLUPLOAD_FILES_QUEUED'		=> '%d файлів у черзі',
	'PLUPLOAD_GENERIC_ERROR'	=> 'Загальна помилка.',
	'PLUPLOAD_HTTP_ERROR'		=> 'Помилка HTTP.',
	'PLUPLOAD_IMAGE_FORMAT'		=> 'Формат зображення неправильний або не підтримується.',
	'PLUPLOAD_INIT_ERROR'		=> 'Помилка ініціалізації.',
	'PLUPLOAD_IO_ERROR'			=> 'Помилка вводу-виводу.',
	'PLUPLOAD_NOT_APPLICABLE'	=> 'Н/Д',
	'PLUPLOAD_SECURITY_ERROR'	=> 'Помилка безпеки.',
	'PLUPLOAD_SELECT_FILES'		=> 'Вибрати файли',
	'PLUPLOAD_SIZE'				=> 'Розмір',
	'PLUPLOAD_SIZE_ERROR'		=> 'Помилка розміру файлу.',
	'PLUPLOAD_STATUS'			=> 'Статус',
	'PLUPLOAD_START_UPLOAD'		=> 'Почати завантаження',
	'PLUPLOAD_START_CURRENT_UPLOAD'	=> 'Почати завантаження черги',
	'PLUPLOAD_STOP_UPLOAD'		=> 'Зупинити завантаження',
	'PLUPLOAD_STOP_CURRENT_UPLOAD'	=> 'Зупинити поточне завантаження',
	// Note: This string is formatted independently by plupload and so does not
	// use the same formatting rules as normal phpBB translation strings
	'PLUPLOAD_UPLOADED'			=> 'Завантажено %d/%d файлів',
));
