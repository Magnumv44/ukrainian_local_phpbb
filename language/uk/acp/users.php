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
	'ADMIN_SIG_PREVIEW'		=> 'Перегляд підпису',
	'AT_LEAST_ONE_FOUNDER'	=> 'Ви не можете змінити цього засновника на звичайного користувача. На цьому форумі має бути увімкнено щонайменше одного засновника. Якщо ви бажаєте змінити статус засновника цього користувача, спочатку підвищіть іншого користувача до засновника.',

	'BAN_ALREADY_ENTERED'	=> 'Це блокування вже було успішно додано раніше. Список блокувань не оновлено.',
	'BAN_SUCCESSFUL'		=> 'Блокування успішно додано.',

	'CANNOT_BAN_ANONYMOUS'			=> 'Вам не дозволено блокувати анонімний обліковий запис. Права для анонімних користувачів можна встановити на вкладці «Права».',
	'CANNOT_BAN_FOUNDER'			=> 'Вам не дозволено блокувати облікові записи засновників.',
	'CANNOT_BAN_YOURSELF'			=> 'Вам не дозволено блокувати самого себе.',
	'CANNOT_DEACTIVATE_BOT'			=> 'Вам не дозволено деактивувати облікові записи ботів. Будь ласка, натомість деактивуйте бота на сторінці ботів.',
	'CANNOT_DEACTIVATE_FOUNDER'		=> 'Вам не дозволено деактивувати облікові записи засновників.',
	'CANNOT_DEACTIVATE_YOURSELF'	=> 'Вам не дозволено деактивувати власний обліковий запис.',
	'CANNOT_FORCE_REACT_BOT'		=> 'Вам не дозволено примусово реактивувати облікові записи ботів. Будь ласка, натомість реактивуйте бота на сторінці ботів.',
	'CANNOT_FORCE_REACT_FOUNDER'	=> 'Вам не дозволено примусово реактивувати облікові записи засновників.',
	'CANNOT_FORCE_REACT_YOURSELF'	=> 'Вам не дозволено примусово реактивувати власний обліковий запис.',
	'CANNOT_REMOVE_ANONYMOUS'		=> 'Ви не можете видалити обліковий запис гостя.',
	'CANNOT_REMOVE_FOUNDER'			=> 'Вам не дозволено видаляти облікові записи засновників.',
	'CANNOT_REMOVE_YOURSELF'		=> 'Вам не дозволено видаляти власний обліковий запис.',
	'CANNOT_SET_FOUNDER_IGNORED'	=> 'Ви не можете підвищити проігнорованих користувачів до засновників.',
	'CANNOT_SET_FOUNDER_INACTIVE'	=> 'Вам потрібно активувати користувачів, перш ніж підвищувати їх до засновників, лише активовані користувачі можуть бути підвищені.',
	'CONFIRM_EMAIL_EXPLAIN'			=> 'Вам потрібно вказати це лише, якщо ви змінюєте email-адресу користувача.',

	'DELETE_POSTS'			=> 'Видалити повідомлення',
	'DELETE_USER'			=> 'Видалити користувача',
	'DELETE_USER_EXPLAIN'	=> 'Зверніть увагу, видалення користувача остаточне, його неможливо відновити. Непрочитані особисті повідомлення, надіслані цим користувачем, буде видалено, і вони стануть недоступні їхнім отримувачам.',

	'FORCE_REACTIVATION_SUCCESS'	=> 'Примусову реактивацію успішно виконано.',
	'FOUNDER'						=> 'Засновник',
	'FOUNDER_EXPLAIN'				=> 'Засновники мають усі права адміністратора та ніколи не можуть бути заблоковані, видалені чи змінені учасниками, які не є засновниками.',

	'GROUP_APPROVE'					=> 'Схвалити учасника',
	'GROUP_DEFAULT'					=> 'Зробити групу основною для учасника',
	'GROUP_DELETE'					=> 'Видалити учасника з групи',
	'GROUP_DEMOTE'					=> 'Понизити лідера групи',
	'GROUP_PROMOTE'					=> 'Підвищити до лідера групи',

	'IP_WHOIS_FOR'			=> 'IP whois для %s',

	'LAST_ACTIVE'			=> 'Остання активність',

	'MOVE_POSTS_EXPLAIN'	=> 'Будь ласка, оберіть форум, до якого ви бажаєте перемістити всі повідомлення цього користувача.',

	'NO_SPECIAL_RANK'		=> 'Особливе звання не призначено',
	'NO_WARNINGS'			=> 'Попереджень немає.',
	'NOT_MANAGE_FOUNDER'	=> 'Ви спробували керувати користувачем зі статусом засновника. Лише засновникам дозволено керувати іншими засновниками.',

	'QUICK_TOOLS'			=> 'Швидкі інструменти',

	'REGISTERED'			=> 'Зареєстровано',
	'REGISTERED_IP'			=> 'Зареєстровано з IP',
	'RETAIN_POSTS'			=> 'Зберегти повідомлення',

	'SELECT_FORM'			=> 'Обрати форму',
	'SELECT_USER'			=> 'Обрати користувача',

	'USER_ADMIN'					=> 'Керування користувачем',
	'USER_ADMIN_ACTIVATE'			=> 'Активувати обліковий запис',
	'USER_ADMIN_ACTIVATED'			=> 'Користувача успішно активовано.',
	'USER_ADMIN_AVATAR_REMOVED'		=> 'Аватар успішно видалено з облікового запису користувача.',
	'USER_ADMIN_BAN_EMAIL'			=> 'Заблокувати за email',
	'USER_ADMIN_BAN_EMAIL_REASON'	=> 'Email-адресу заблоковано через керування користувачами',
	'USER_ADMIN_BAN_IP'				=> 'Заблокувати за IP',
	'USER_ADMIN_BAN_IP_REASON'		=> 'IP заблоковано через керування користувачами',
	'USER_ADMIN_BAN_NAME_REASON'	=> 'Ім’я користувача заблоковано через керування користувачами',
	'USER_ADMIN_BAN_USER'			=> 'Заблокувати за іменем користувача',
	'USER_ADMIN_DEACTIVATE'			=> 'Деактивувати обліковий запис',
	'USER_ADMIN_DEACTIVED'			=> 'Користувача успішно деактивовано.',
	'USER_ADMIN_DEL_ATTACH'			=> 'Видалити всі вкладення',
	'USER_ADMIN_DEL_AVATAR'			=> 'Видалити аватар',
	'USER_ADMIN_DEL_OUTBOX'			=> 'Очистити вихідні ОП',
	'USER_ADMIN_DEL_POSTS'			=> 'Видалити всі повідомлення',
	'USER_ADMIN_DEL_SIG'			=> 'Видалити підпис',
	'USER_ADMIN_EXPLAIN'			=> 'Тут ви можете змінити інформацію про своїх користувачів та певні специфічні параметри.',
	'USER_ADMIN_FORCE'				=> 'Примусова реактивація',
	'USER_ADMIN_LEAVE_NR'			=> 'Видалити з новозареєстрованих',
	'USER_ADMIN_MOVE_POSTS'			=> 'Перемістити всі повідомлення',
	'USER_ADMIN_SIG_REMOVED'		=> 'Підпис успішно видалено з облікового запису користувача.',
	'USER_ATTACHMENTS_REMOVED'		=> 'Всі вкладення, надіслані цим користувачем, успішно видалено.',
	'USER_AVATAR_NOT_ALLOWED'		=> 'Аватар не може бути показаний, оскільки аватари заборонено.',
	'USER_AVATAR_UPDATED'			=> 'Дані аватара користувача успішно оновлено.',
	'USER_AVATAR_TYPE_NOT_ALLOWED'	=> 'Поточний аватар не може бути показаний, оскільки його тип заборонено.',
	'USER_CUSTOM_PROFILE_FIELDS'	=> 'Користувацькі поля профілю',
	'USER_DELETED'					=> 'Користувача успішно видалено.',
	'USER_GROUP_ADD'				=> 'Додати користувача до групи',
	'USER_GROUP_NORMAL'				=> 'Визначені користувачем групи, учасником яких є користувач',
	'USER_GROUP_PENDING'			=> 'Групи, у яких користувач перебуває в режимі очікування',
	'USER_GROUP_SPECIAL'			=> 'Наперед визначені групи, учасником яких є користувач',
	'USER_LIFTED_NR'				=> 'Статус новозареєстрованого користувача успішно видалено.',
	'USER_NO_ATTACHMENTS'			=> 'Немає вкладених файлів для показу.',
	'USER_NO_POSTS_TO_DELETE'			=> 'У користувача немає повідомлень для збереження чи видалення.',
	'USER_OUTBOX_EMPTIED'			=> 'Вихідні особисті повідомлення користувача успішно очищено.',
	'USER_OUTBOX_EMPTY'				=> 'Вихідні особисті повідомлення користувача вже були порожні.',
	'USER_OVERVIEW_UPDATED'			=> 'Дані користувача оновлено.',
	'USER_POSTS_DELETED'			=> 'Всі повідомлення, надіслані цим користувачем, успішно видалено.',
	'USER_POSTS_MOVED'				=> 'Повідомлення користувача успішно переміщено до цільового форуму.',
	'USER_PREFS_UPDATED'			=> 'Налаштування користувача оновлено.',
	'USER_PROFILE'					=> 'Профіль користувача',
	'USER_PROFILE_UPDATED'			=> 'Профіль користувача оновлено.',
	'USER_RANK'						=> 'Звання користувача',
	'USER_RANK_UPDATED'				=> 'Звання користувача оновлено.',
	'USER_SIG_UPDATED'				=> 'Підпис користувача успішно оновлено.',
	'USER_WARNING_LOG_DELETED'		=> 'Інформація недоступна. Можливо, запис журналу видалено.',
	'USER_TOOLS'					=> 'Базові інструменти',
));
