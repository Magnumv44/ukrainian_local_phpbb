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

if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'EXTENSION'					=> 'Розширення',
	'EXTENSIONS'				=> 'Розширення',
	'EXTENSIONS_ADMIN'			=> 'Менеджер розширень',
	'EXTENSIONS_EXPLAIN'		=> 'Менеджер розширень — це інструмент вашого форуму phpBB, який дозволяє керувати статусами всіх ваших розширень і переглядати інформацію про них.',
	'EXTENSION_INVALID_LIST'	=> 'Розширення «%s» недійсне.<br />%s<br /><br />',
	'EXTENSION_NOT_AVAILABLE'	=> 'Обране розширення недоступне для цього форуму, будь ласка, перевірте, що ваші версії phpBB та PHP дозволені (див. сторінку деталей).',
	'EXTENSION_DIR_INVALID'		=> 'Обране розширення має недійсну структуру тек і не може бути увімкнене.',
	'EXTENSION_NOT_ENABLEABLE'	=> 'Обране розширення неможливо увімкнути, будь ласка, перевірте вимоги розширення.',
	'EXTENSION_NOT_INSTALLED'	=> 'Розширення %s недоступне. Будь ласка, перевірте, чи ви встановили його коректно.',

	'DETAILS'				=> 'Деталі',

	'EXTENSIONS_NOT_INSTALLED'	=> 'Невстановлені розширення',
	'EXTENSIONS_DISABLED'		=> 'Вимкнені розширення',
	'EXTENSIONS_ENABLED'		=> 'Увімкнені розширення',

	'EXTENSION_DELETE_DATA'	=> 'Видалити дані',
	'EXTENSION_DISABLE'		=> 'Вимкнути',
	'EXTENSION_ENABLE'		=> 'Увімкнути',

	'EXTENSION_DELETE_DATA_EXPLAIN'	=> 'Видалення даних розширення видаляє всі його дані та налаштування. Файли розширення зберігаються, тому його можна знову увімкнути.',
	'EXTENSION_DISABLE_EXPLAIN'		=> 'Вимкнення розширення зберігає його файли, дані та налаштування, але видаляє будь-який функціонал, доданий цим розширенням.',
	'EXTENSION_ENABLE_EXPLAIN'		=> 'Увімкнення розширення дозволяє вам використовувати його на своєму форумі.',

	'EXTENSION_DELETE_DATA_IN_PROGRESS'	=> 'Дані розширення наразі видаляються. Будь ласка, не залишайте та не оновлюйте цю сторінку, доки процес не завершиться.',
	'EXTENSION_DISABLE_IN_PROGRESS'	=> 'Розширення наразі вимикається. Будь ласка, не залишайте та не оновлюйте цю сторінку, доки процес не завершиться.',
	'EXTENSION_ENABLE_IN_PROGRESS'	=> 'Розширення наразі вмикається. Будь ласка, не залишайте та не оновлюйте цю сторінку, доки процес не завершиться.',

	'EXTENSION_DELETE_DATA_SUCCESS'	=> 'Дані розширення успішно видалено',
	'EXTENSION_DISABLE_SUCCESS'		=> 'Розширення успішно вимкнено',
	'EXTENSION_ENABLE_SUCCESS'		=> 'Розширення успішно увімкнено',

	'EXTENSION_NAME'			=> 'Назва розширення',
	'EXTENSION_ACTIONS'			=> 'Дії',
	'EXTENSION_OPTIONS'			=> 'Параметри',
	'EXTENSION_INSTALL_HEADLINE'=> 'Встановлення розширення',
	'EXTENSION_INSTALL_EXPLAIN'	=> '<ol>
			<li>Завантажте розширення з бази даних розширень phpBB</li>
			<li>Розпакуйте розширення та завантажте його до теки <samp>ext/</samp> вашого форуму phpBB</li>
			<li>Увімкніть розширення тут, у Менеджері розширень</li>
		</ol>',
	'EXTENSION_UPDATE_HEADLINE'	=> 'Оновлення розширення',
	'EXTENSION_UPDATE_EXPLAIN'	=> '<ol>
			<li>Вимкніть розширення</li>
			<li>Видаліть файли розширення з файлової системи</li>
			<li>Завантажте нові файли</li>
			<li>Увімкніть розширення</li>
		</ol>',
	'EXTENSION_REMOVE_HEADLINE'	=> 'Повне видалення розширення з вашого форуму',
	'EXTENSION_REMOVE_EXPLAIN'	=> '<ol>
			<li>Вимкніть розширення</li>
			<li>Видаліть дані розширення</li>
			<li>Видаліть файли розширення з файлової системи</li>
		</ol>',

	'EXTENSION_DELETE_DATA_CONFIRM'	=> 'Ви впевнені, що бажаєте видалити дані, пов’язані з «%s»?<br /><br />Це видалить усі його дані й налаштування, і цю дію неможливо скасувати!',
	'EXTENSION_DISABLE_CONFIRM'		=> 'Ви впевнені, що бажаєте вимкнути розширення «%s»?',
	'EXTENSION_ENABLE_CONFIRM'		=> 'Ви впевнені, що бажаєте увімкнути розширення «%s»?',
	'EXTENSION_FORCE_UNSTABLE_CONFIRM'	=> 'Ви впевнені, що бажаєте примусово використовувати нестабільну версію?',

	'RETURN_TO_EXTENSION_LIST'	=> 'Повернутися до списку розширень',

	'EXT_DETAILS'			=> 'Деталі розширення',
	'DISPLAY_NAME'			=> 'Відображувана назва',
	'CLEAN_NAME'			=> '«Чиста» назва',
	'TYPE'					=> 'Тип',
	'DESCRIPTION'			=> 'Опис',
	'VERSION'				=> 'Версія',
	'HOMEPAGE'				=> 'Домашня сторінка',
	'PATH'					=> 'Шлях до файлу',
	'TIME'					=> 'Час випуску',
	'LICENSE'				=> 'Ліцензія',

	'REQUIREMENTS'			=> 'Вимоги',
	'PHPBB_VERSION'			=> 'Версія phpBB',
	'PHP_VERSION'			=> 'Версія PHP',
	'AUTHOR_INFORMATION'	=> 'Інформація про автора',
	'AUTHOR_NAME'			=> 'Ім’я',
	'AUTHOR_EMAIL'			=> 'Email',
	'AUTHOR_HOMEPAGE'		=> 'Домашня сторінка',
	'AUTHOR_ROLE'			=> 'Роль',

	'NOT_UP_TO_DATE'		=> '%s не актуальне',
	'UP_TO_DATE'			=> '%s актуальне',
	'ANNOUNCEMENT_TOPIC'	=> 'Оголошення про випуск',
	'DOWNLOAD_LATEST'		=> 'Завантажити версію',
	'NO_VERSIONCHECK'		=> 'Інформацію про перевірку версії не надано.',

	'VERSIONCHECK_FORCE_UPDATE_ALL'		=> 'Повторно перевірити всі версії',
	'FORCE_UNSTABLE'					=> 'Завжди перевіряти нестабільні версії',
	'EXTENSIONS_VERSION_CHECK_SETTINGS'	=> 'Налаштування перевірки версії',

	'BROWSE_EXTENSIONS_DATABASE'		=> 'Переглянути базу даних розширень',

	'META_FIELD_NOT_SET'	=> 'Обов’язкове мета-поле %s не встановлено.',
	'META_FIELD_INVALID'	=> 'Мета-поле %s недійсне.',
));
