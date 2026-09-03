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

/**
*	EXTENSION-DEVELOPERS PLEASE NOTE
*
*	You are able to put your permission sets into your extension.
*	The permissions logic should be added via the 'core.permissions' event.
*	You can easily add new permission categories, types and permissions, by
*	simply merging them into the respective arrays.
*	The respective language strings should be added into a language file, that
*	start with 'permissions_', so they are automatically loaded within the ACP.
*/

$lang = array_merge($lang, array(
	'ACL_CAT_ACTIONS'		=> 'Дії',
	'ACL_CAT_CONTENT'		=> 'Вміст',
	'ACL_CAT_FORUMS'		=> 'Форуми',
	'ACL_CAT_MISC'			=> 'Різне',
	'ACL_CAT_PERMISSIONS'	=> 'Права',
	'ACL_CAT_PM'			=> 'Особисті повідомлення',
	'ACL_CAT_POLLS'			=> 'Опитування',
	'ACL_CAT_POST'			=> 'Повідомлення',
	'ACL_CAT_POST_ACTIONS'	=> 'Дії з повідомленнями',
	'ACL_CAT_POSTING'		=> 'Публікація',
	'ACL_CAT_PROFILE'		=> 'Профіль',
	'ACL_CAT_SETTINGS'		=> 'Налаштування',
	'ACL_CAT_TOPIC_ACTIONS'	=> 'Дії з темами',
	'ACL_CAT_USER_GROUP'	=> 'Користувачі та групи',
));

// User Permissions
$lang = array_merge($lang, array(
	'ACL_U_VIEWPROFILE'	=> 'Може переглядати профілі, список учасників і список онлайн',
	'ACL_U_CHGNAME'		=> 'Може змінювати ім’я користувача',
	'ACL_U_CHGPASSWD'	=> 'Може змінювати пароль',
	'ACL_U_CHGEMAIL'	=> 'Може змінювати email-адресу',
	'ACL_U_CHGAVATAR'	=> 'Може змінювати аватар',
	'ACL_U_CHGGRP'		=> 'Може змінювати основну групу користувачів',
	'ACL_U_CHGPROFILEINFO'	=> 'Може змінювати інформацію полів профілю',

	'ACL_U_ATTACH'		=> 'Може додавати вкладення',
	'ACL_U_DOWNLOAD'	=> 'Може завантажувати файли',
	'ACL_U_SAVEDRAFTS'	=> 'Може зберігати чернетки',
	'ACL_U_CHGCENSORS'	=> 'Може вимикати цензуру слів',
	'ACL_U_SIG'			=> 'Може використовувати підпис',
	'ACL_U_EMOJI'		=> 'Може використовувати емодзі та символи форматованого тексту в назві теми',

	'ACL_U_SENDPM'		=> 'Може надсилати особисті повідомлення',
	'ACL_U_MASSPM'		=> 'Може надсилати особисті повідомлення кільком користувачам',
	'ACL_U_MASSPM_GROUP'=> 'Може надсилати особисті повідомлення групам',
	'ACL_U_READPM'		=> 'Може читати особисті повідомлення',
	'ACL_U_PM_EDIT'		=> 'Може редагувати власні особисті повідомлення',
	'ACL_U_PM_DELETE'	=> 'Може видаляти особисті повідомлення з власної теки',
	'ACL_U_PM_FORWARD'	=> 'Може пересилати особисті повідомлення',
	'ACL_U_PM_EMAILPM'	=> 'Може надсилати особисті повідомлення поштою',
	'ACL_U_PM_PRINTPM'	=> 'Може друкувати особисті повідомлення',
	'ACL_U_PM_ATTACH'	=> 'Може додавати вкладення в особистих повідомленнях',
	'ACL_U_PM_DOWNLOAD'	=> 'Може завантажувати файли в особистих повідомленнях',
	'ACL_U_PM_BBCODE'	=> 'Може використовувати BBCode в особистих повідомленнях',
	'ACL_U_PM_SMILIES'	=> 'Може використовувати смайли в особистих повідомленнях',
	'ACL_U_PM_IMG'		=> 'Може використовувати тег BBCode [img] в особистих повідомленнях',
	'ACL_U_PM_FLASH'	=> 'Може використовувати тег BBCode [flash] в особистих повідомленнях',

	'ACL_U_SENDEMAIL'	=> 'Може надсилати листи',
	'ACL_U_SENDIM'		=> 'Може надсилати миттєві повідомлення',
	'ACL_U_IGNOREFLOOD'	=> 'Може ігнорувати обмеження частоти',
	'ACL_U_HIDEONLINE'	=> 'Може приховувати статус онлайн',
	'ACL_U_VIEWONLINE'	=> 'Може бачити прихованих користувачів онлайн',
	'ACL_U_SEARCH'		=> 'Може шукати на форумі',
));

// Forum Permissions
$lang = array_merge($lang, array(
	'ACL_F_LIST'		=> 'Може бачити форум',
	'ACL_F_LIST_TOPICS' => 'Може бачити теми',
	'ACL_F_READ'		=> 'Може читати форум',
	'ACL_F_SEARCH'		=> 'Може шукати у форумі',
	'ACL_F_SUBSCRIBE'	=> 'Може підписуватися на форум',
	'ACL_F_PRINT'		=> 'Може друкувати теми',
	'ACL_F_EMAIL'		=> 'Може надсилати теми поштою',
	'ACL_F_BUMP'		=> 'Може піднімати теми',
	'ACL_F_USER_LOCK'	=> 'Може закривати власні теми',
	'ACL_F_DOWNLOAD'	=> 'Може завантажувати файли',
	'ACL_F_REPORT'		=> 'Може скаржитися на повідомлення',

	'ACL_F_POST'		=> 'Може створювати нові теми',
	'ACL_F_STICKY'		=> 'Може публікувати закріплені теми',
	'ACL_F_ANNOUNCE'	=> 'Може публікувати оголошення',
	'ACL_F_ANNOUNCE_GLOBAL'	=> 'Може публікувати загальні оголошення',
	'ACL_F_REPLY'		=> 'Може відповідати в темах',
	'ACL_F_EDIT'		=> 'Може редагувати власні повідомлення',
	'ACL_F_DELETE'		=> 'Може назавжди видаляти власні повідомлення',
	'ACL_F_SOFTDELETE'	=> 'Може умовно видаляти власні повідомлення<br /><em>Модератори, які мають право схвалення повідомлень, можуть відновлювати умовно видалені повідомлення.</em>',
	'ACL_F_IGNOREFLOOD' => 'Може ігнорувати обмеження частоти',
	'ACL_F_POSTCOUNT'	=> 'Збільшувати лічильник повідомлень<br /><em>Зверніть увагу, це налаштування впливає лише на нові повідомлення.</em>',
	'ACL_F_NOAPPROVE'	=> 'Може публікувати без схвалення',

	'ACL_F_ATTACH'		=> 'Може додавати вкладення',
	'ACL_F_ICONS'		=> 'Може використовувати значки тем/повідомлень',
	'ACL_F_BBCODE'		=> 'Може використовувати BBCode',
	'ACL_F_FLASH'		=> 'Може використовувати тег BBCode [flash]',
	'ACL_F_IMG'			=> 'Може використовувати тег BBCode [img]',
	'ACL_F_SIGS'		=> 'Може використовувати підписи',
	'ACL_F_SMILIES'		=> 'Може використовувати смайли',

	'ACL_F_POLL'		=> 'Може створювати опитування',
	'ACL_F_VOTE'		=> 'Може голосувати в опитуваннях',
	'ACL_F_VOTECHG'		=> 'Може змінювати наявний голос',
));

// Moderator Permissions
$lang = array_merge($lang, array(
	'ACL_M_EDIT'		=> 'Може редагувати повідомлення',
	'ACL_M_DELETE'		=> 'Може назавжди видаляти повідомлення',
	'ACL_M_SOFTDELETE'	=> 'Може умовно видаляти повідомлення<br /><em>Модератори, які мають право схвалення повідомлень, можуть відновлювати умовно видалені повідомлення.</em>',
	'ACL_M_APPROVE'		=> 'Може схвалювати й відновлювати повідомлення',
	'ACL_M_REPORT'		=> 'Може закривати й видаляти скарги',
	'ACL_M_CHGPOSTER'	=> 'Може змінювати автора повідомлення',

	'ACL_M_MOVE'	=> 'Може переміщувати теми',
	'ACL_M_LOCK'	=> 'Може закривати теми',
	'ACL_M_SPLIT'	=> 'Може розділяти теми',
	'ACL_M_MERGE'	=> 'Може об’єднувати теми',

	'ACL_M_INFO'		=> 'Може переглядати деталі повідомлень',
	'ACL_M_WARN'		=> 'Може видавати попередження',
	'ACL_M_PM_REPORT'	=> 'Може закривати й видаляти скарги на особисті повідомлення',
	'ACL_M_BAN'			=> 'Може керувати блокуваннями',
));

// Admin Permissions
$lang = array_merge($lang, array(
	'ACL_A_BOARD'		=> 'Може змінювати налаштування форуму/перевіряти оновлення',
	'ACL_A_SERVER'		=> 'Може змінювати налаштування сервера/з’єднання',
	'ACL_A_JABBER'		=> 'Може змінювати налаштування Jabber',
	'ACL_A_PHPINFO'		=> 'Може переглядати налаштування php',

	'ACL_A_FORUM'		=> 'Може керувати форумами',
	'ACL_A_FORUMADD'	=> 'Може додавати нові форуми',
	'ACL_A_FORUMDEL'	=> 'Може видаляти форуми',
	'ACL_A_PRUNE'		=> 'Може очищувати форуми',

	'ACL_A_ICONS'		=> 'Може змінювати значки тем/повідомлень і смайли',
	'ACL_A_WORDS'		=> 'Може змінювати цензуру слів',
	'ACL_A_BBCODE'		=> 'Може визначати теги BBCode',
	'ACL_A_ATTACH'		=> 'Може змінювати налаштування, пов’язані з вкладеннями',

	'ACL_A_USER'		=> 'Може керувати користувачами<br /><em>Це також включає перегляд агента браузера користувачів у списку онлайн.</em>',
	'ACL_A_USERDEL'		=> 'Може видаляти/очищувати користувачів',
	'ACL_A_GROUP'		=> 'Може керувати групами',
	'ACL_A_GROUPADD'	=> 'Може додавати нові групи',
	'ACL_A_GROUPDEL'	=> 'Може видаляти групи',
	'ACL_A_RANKS'		=> 'Може керувати званнями',
	'ACL_A_PROFILE'		=> 'Може керувати користувацькими полями профілю',
	'ACL_A_NAMES'		=> 'Може керувати забороненими іменами',
	'ACL_A_BAN'			=> 'Може керувати блокуваннями',

	'ACL_A_VIEWAUTH'	=> 'Може переглядати маски прав',
	'ACL_A_AUTHGROUPS'	=> 'Може змінювати права для окремих груп',
	'ACL_A_AUTHUSERS'	=> 'Може змінювати права для окремих користувачів',
	'ACL_A_FAUTH'		=> 'Може змінювати клас прав форуму',
	'ACL_A_MAUTH'		=> 'Може змінювати клас прав модератора',
	'ACL_A_AAUTH'		=> 'Може змінювати клас прав адміністратора',
	'ACL_A_UAUTH'		=> 'Може змінювати клас прав користувача',
	'ACL_A_ROLES'		=> 'Може керувати ролями',
	'ACL_A_SWITCHPERM'	=> 'Може використовувати права інших',

	'ACL_A_STYLES'		=> 'Може керувати стилями',
	'ACL_A_EXTENSIONS'	=> 'Може керувати розширеннями',
	'ACL_A_VIEWLOGS'	=> 'Може переглядати журнали',
	'ACL_A_CLEARLOGS'	=> 'Може очищувати журнали',
	'ACL_A_MODULES'		=> 'Може керувати модулями',
	'ACL_A_LANGUAGE'	=> 'Може керувати мовними пакетами',
	'ACL_A_EMAIL'		=> 'Може надсилати масові листи',
	'ACL_A_BOTS'		=> 'Може керувати ботами',
	'ACL_A_REASONS'		=> 'Може керувати причинами скарг/відхилень',
	'ACL_A_BACKUP'		=> 'Може створювати резервні копії/відновлювати базу даних',
	'ACL_A_SEARCH'		=> 'Може керувати пошуковими бекендами й налаштуваннями',
));
