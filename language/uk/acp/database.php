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

// Database Backup/Restore
$lang = array_merge($lang, array(
	'ACP_BACKUP_EXPLAIN'	=> 'Тут ви можете створити резервну копію всіх даних, пов’язаних з phpBB. Отриманий архів буде збережено у вашій теці <samp>store/</samp>. Залежно від конфігурації вашого сервера ви можете стиснути файл в одному з кількох форматів.',
	'ACP_RESTORE_EXPLAIN'	=> 'Це виконає повне відновлення всіх таблиць phpBB зі збереженого файлу. Якщо ваш сервер це підтримує, ви можете використати текстовий файл, стиснений у gzip чи bzip2, і його буде автоматично розпаковано. <strong>УВАГА</strong>: це перезапише будь-які наявні дані. Відновлення може зайняти багато часу для обробки, будь ласка, не залишайте цю сторінку, доки процес не завершиться. Резервні копії зберігаються в теці <samp>store/</samp>, і передбачається, що їх створено функцією резервного копіювання phpBB. Відновлення резервних копій, створених не вбудованою системою, може працювати або не працювати.',

	'BACKUP_DELETE'			=> 'Файл резервної копії успішно видалено.',
	'BACKUP_INVALID'		=> 'Обраний файл резервної копії недійсний.',
	'BACKUP_NOT_SUPPORTED'	=> 'Обраний тип резервної копії не підтримується',
	'BACKUP_OPTIONS'		=> 'Параметри резервного копіювання',
	'BACKUP_SUCCESS'		=> 'Файл резервної копії успішно створено.',
	'BACKUP_TYPE'			=> 'Тип резервної копії',

	'DATABASE'			=> 'Утиліти бази даних',
	'DATA_ONLY'			=> 'Лише дані',
	'DELETE_BACKUP'		=> 'Видалити резервну копію',
	'DELETE_SELECTED_BACKUP'	=> 'Ви впевнені, що бажаєте видалити обрану резервну копію?',
	'DESELECT_ALL'		=> 'Зняти позначення з усіх',
	'DOWNLOAD_BACKUP'	=> 'Завантажити резервну копію',

	'FILE_TYPE'			=> 'Тип файлу',
	'FILE_WRITE_FAIL'	=> 'Не вдалося записати файл до теки зберігання.',
	'FULL_BACKUP'		=> 'Повна',

	'RESTORE_FAILURE'		=> 'Файл резервної копії може бути пошкоджений.',
	'RESTORE_OPTIONS'		=> 'Параметри відновлення',
	'RESTORE_SELECTED_BACKUP'	=> 'Ви впевнені, що бажаєте відновити з обраної резервної копії?',
	'RESTORE_SUCCESS'		=> 'Базу даних успішно відновлено.<br /><br />Ваш форум має повернутися до стану, в якому він був на момент створення резервної копії.',

	'SELECT_ALL'			=> 'Обрати все',
	'SELECT_FILE'			=> 'Оберіть файл',
	'START_BACKUP'			=> 'Почати резервне копіювання',
	'START_RESTORE'			=> 'Почати відновлення',
	'STORE_AND_DOWNLOAD'	=> 'Зберегти та завантажити',
	'STORE_LOCAL'			=> 'Зберегти файл локально',

	'TABLE_SELECT'		=> 'Вибір таблиці',
	'TABLE_SELECT_ERROR'=> 'Вам потрібно обрати щонайменше одну таблицю.',
));
