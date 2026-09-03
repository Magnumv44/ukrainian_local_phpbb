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
	'ACP_FILES'						=> 'Мовні файли адміністрування',
	'ACP_LANGUAGE_PACKS_EXPLAIN'	=> 'Тут ви можете встановлювати/видаляти мовні пакети. Мовний пакет за замовчуванням позначено зірочкою (*).',

	'DELETE_LANGUAGE_CONFIRM'		=> 'Ви впевнені, що бажаєте видалити «%s»?',

	'INSTALLED_LANGUAGE_PACKS'		=> 'Встановлені мовні пакети',

	'LANGUAGE_DETAILS_UPDATED'			=> 'Дані мови успішно оновлено.',
	'LANGUAGE_PACK_ALREADY_INSTALLED'	=> 'Цей мовний пакет вже встановлено.',
	'LANGUAGE_PACK_DELETED'				=> 'Мовний пакет «%s» успішно видалено. Всім користувачам, які використовували цю мову, встановлено мову форуму за замовчуванням.',
	'LANGUAGE_PACK_DETAILS'				=> 'Дані мовного пакета',
	'LANGUAGE_PACK_INSTALLED'			=> 'Мовний пакет «%s» успішно встановлено.',
	'LANGUAGE_PACK_CPF_UPDATE'			=> 'Мовні рядки користувацьких полів профілю скопійовано з мови за замовчуванням. Будь ласка, змініть їх за потреби.',
	'LANGUAGE_PACK_ISO'					=> 'ISO',
	'LANGUAGE_PACK_LOCALNAME'			=> 'Локальна назва',
	'LANGUAGE_PACK_NAME'				=> 'Назва',
	'LANGUAGE_PACK_NOT_EXIST'			=> 'Обраного мовного пакета не існує.',
	'LANGUAGE_PACK_USED_BY'				=> 'Використовується (включно з ботами)',
	'LANGUAGE_VARIABLE'					=> 'Мовна змінна',
	'LANG_AUTHOR'						=> 'Автор мовного пакета',
	'LANG_ENGLISH_NAME'					=> 'Англійська назва',
	'LANG_ISO_CODE'						=> 'Код ISO',
	'LANG_LOCAL_NAME'					=> 'Локальна назва',

	'MISSING_LANG_FILES'		=> 'Відсутні мовні файли',
	'MISSING_LANG_VARIABLES'	=> 'Відсутні мовні змінні',

	'NO_FILE_SELECTED'				=> 'Ви не вказали мовний файл.',
	'NO_LANG_ID'					=> 'Ви не вказали мовний пакет.',
	'NO_REMOVE_DEFAULT_LANG'		=> 'Ви не можете видалити мовний пакет за замовчуванням.<br />Якщо ви бажаєте видалити цей мовний пакет, спочатку змініть мову форуму за замовчуванням.',
	'NO_UNINSTALLED_LANGUAGE_PACKS'	=> 'Невстановлених мовних пакетів немає',

	'THOSE_MISSING_LANG_FILES'			=> 'Наступні мовні файли відсутні в мовній теці «%s»',
	'THOSE_MISSING_LANG_VARIABLES'		=> 'Наступні мовні змінні відсутні в мовному пакеті «%s»',

	'UNINSTALLED_LANGUAGE_PACKS'	=> 'Невстановлені мовні пакети',

	'BROWSE_LANGUAGE_PACKS_DATABASE'	=> 'Переглянути базу даних мовних пакетів',
));
