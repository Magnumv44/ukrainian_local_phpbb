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
	'ABOUT_USER'			=> 'Профіль',
	'ACTIVE_IN_FORUM'		=> 'Найактивніший форум',
	'ACTIVE_IN_TOPIC'		=> 'Найактивніша тема',
	'ADD_FOE'				=> 'Додати до недругів',
	'ADD_FRIEND'			=> 'Додати до друзів',
	'AFTER'					=> 'Після',

	'ALL'					=> 'Всі',

	'BEFORE'				=> 'До',

	'CC_SENDER'				=> 'Надіслати копію цього листа собі.',
	'CONTACT_ADMIN'			=> 'Зв’язатися з адміністратором форуму',

	'DEST_LANG'				=> 'Мова',
	'DEST_LANG_EXPLAIN'		=> 'Оберіть відповідну мову (якщо доступна) для отримувача цього повідомлення.',

	'EDIT_PROFILE'			=> 'Редагувати профіль',

	'EMAIL_BODY_EXPLAIN'	=> 'Це повідомлення буде надіслано як звичайний текст, не додавайте HTML чи BBCode. Зворотною адресою цього листа буде вказано вашу email-адресу.',
	'EMAIL_DISABLED'		=> 'На жаль, усі функції, пов’язані з надсиланням листів, вимкнено.',
	'EMAIL_SENT'			=> 'Лист надіслано.',
	'EMAIL_TOPIC_EXPLAIN'	=> 'Це повідомлення буде надіслано як звичайний текст, не додавайте HTML чи BBCode. Зверніть увагу, що інформація про тему вже включена до повідомлення. Зворотною адресою цього листа буде вказано вашу email-адресу.',
	'EMPTY_ADDRESS_EMAIL'	=> 'Вам потрібно вказати дійсну email-адресу отримувача.',
	'EMPTY_MESSAGE_EMAIL'	=> 'Вам потрібно ввести повідомлення для надсилання.',
	'EMPTY_MESSAGE_IM'		=> 'Вам потрібно ввести повідомлення для надсилання.',
	'EMPTY_NAME_EMAIL'		=> 'Вам потрібно ввести справжнє ім’я отримувача.',
	'EMPTY_SENDER_EMAIL'	=> 'Вам потрібно вказати дійсну email-адресу.',
	'EMPTY_SENDER_NAME'		=> 'Вам потрібно вказати ім’я.',
	'EMPTY_SUBJECT_EMAIL'	=> 'Вам потрібно вказати тему листа.',
	'EQUAL_TO'				=> 'Дорівнює',

	'FIND_USERNAME_EXPLAIN'	=> 'Використовуйте цю форму для пошуку конкретних учасників. Вам не обов’язково заповнювати всі поля. Для збігу часткових даних використовуйте * як символ підстановки. При введенні дат використовуйте формат <kbd>РРРР-ММ-ДД</kbd>, наприклад <samp>2004-02-29</samp>. Використовуйте прапорці, щоб позначити одне чи кілька імен користувачів (кілька імен можуть бути прийняті залежно від самої форми), і натисніть кнопку «Обрати позначені», щоб повернутися до попередньої форми.',
	'FLOOD_EMAIL_LIMIT'		=> 'Наразі ви не можете надіслати ще один лист. Будь ласка, спробуйте пізніше.',

	'GROUP_LEADER'			=> 'Лідер групи',

	'HIDE_MEMBER_SEARCH'	=> 'Сховати пошук учасників',

	'IM_ADD_CONTACT'		=> 'Додати контакт',
	'IM_DOWNLOAD_APP'		=> 'Завантажити застосунок',
	'IM_JABBER'				=> 'Зверніть увагу, що користувачі могли обрати не отримувати небажані миттєві повідомлення.',
	'IM_JABBER_SUBJECT'		=> 'Це автоматичне повідомлення, будь ласка, не відповідайте на нього! Повідомлення від користувача %1$s на %2$s.',
	'IM_MESSAGE'			=> 'Ваше повідомлення',
	'IM_NAME'				=> 'Ваше ім’я',
	'IM_NO_DATA'			=> 'Для цього користувача немає придатної контактної інформації.',
	'IM_NO_JABBER'			=> 'На жаль, пряме надсилання повідомлень користувачам Jabber не підтримується на цьому форумі. Вам знадобиться клієнт Jabber, встановлений у вашій системі, щоб зв’язатися з отримувачем вище.',
	'IM_RECIPIENT'			=> 'Отримувач',
	'IM_SEND'				=> 'Надіслати повідомлення',
	'IM_SEND_MESSAGE'		=> 'Надіслати повідомлення',
	'IM_SENT_JABBER'		=> 'Ваше повідомлення до %1$s успішно надіслано.',
	'IM_USER'				=> 'Надіслати миттєве повідомлення',

	'LAST_ACTIVE'				=> 'Остання активність',
	'LESS_THAN'					=> 'Менше ніж',
	'LIST_USERS'				=> array(
		1	=> '%d користувач',
		2	=> '%d користувачі',
		3	=> '%d користувачів',
	),
	'LOGIN_EXPLAIN_TEAM'		=> 'Форум вимагає, щоб ви були зареєстровані та увійшли, щоб переглянути список команди.',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> 'Форум вимагає, щоб ви були зареєстровані та увійшли, щоб отримати доступ до списку учасників.',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> 'Форум вимагає, щоб ви були зареєстровані та увійшли, щоб шукати користувачів.',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'Форум вимагає, щоб ви були зареєстровані та увійшли, щоб переглядати профілі.',

	'MANAGE_GROUP'			=> 'Керування групою',
	'MORE_THAN'				=> 'Більше ніж',

	'NO_CONTACT_FORM'		=> 'Форму зв’язку з адміністратором форуму вимкнено.',
	'NO_CONTACT_PAGE'		=> 'Сторінку зв’язку з адміністратором форуму вимкнено.',
	'NO_EMAIL'				=> 'Вам не дозволено надсилати листи цьому користувачу.',
	'NO_VIEW_USERS'			=> 'Вам не дозволено переглядати список учасників або профілі.',

	'ORDER'					=> 'Порядок',
	'OTHER'					=> 'Інше',

	'POST_IP'				=> 'Надіслано з IP/домену',

	'REAL_NAME'				=> 'Ім’я отримувача',
	'RECIPIENT'				=> 'Отримувач',
	'REMOVE_FOE'			=> 'Видалити з недругів',
	'REMOVE_FRIEND'			=> 'Видалити з друзів',

	'SELECT_MARKED'			=> 'Обрати позначені',
	'SELECT_SORT_METHOD'	=> 'Обрати спосіб сортування',
	'SENDER_EMAIL_ADDRESS'	=> 'Ваша email-адреса',
	'SENDER_NAME'			=> 'Ваше ім’я',
	'SEND_ICQ_MESSAGE'		=> 'Надіслати повідомлення ICQ',
	'SEND_IM'				=> 'Миттєві повідомлення',
	'SEND_JABBER_MESSAGE'	=> 'Надіслати повідомлення Jabber',
	'SEND_MESSAGE'			=> 'Повідомлення',
	'SEND_YIM_MESSAGE'		=> 'Надіслати повідомлення YIM',
	'SORT_EMAIL'			=> 'Email',
	'SORT_LAST_ACTIVE'		=> 'Остання активність',
	'SORT_POST_COUNT'		=> 'Кількість повідомлень',

	'USERNAME_BEGINS_WITH'	=> 'Ім’я користувача починається з',
	'USER_ADMIN'			=> 'Керування користувачем',
	'USER_BAN'				=> 'Блокування',
	'USER_FORUM'			=> 'Статистика користувача',
	'USER_LAST_REMINDED'	=> array(
		0		=> 'Нагадувань наразі не надсилалося',
		1		=> 'Надіслано %1$d нагадування<br />» %2$s',
		2		=> 'Надіслано %1$d нагадування<br />» %2$s',
	),
	'USER_ONLINE'			=> 'Онлайн',
	'USER_PRESENCE'			=> 'Присутність на форумі',
	'USERS_PER_PAGE'		=> 'Користувачів на сторінці',

	'VIEWING_PROFILE'		=> 'Перегляд профілю - %s',
	'VIEW_FACEBOOK_PROFILE'	=> 'Переглянути профіль Facebook',
	'VIEW_SKYPE_PROFILE'	=> 'Переглянути профіль Skype',
	'VIEW_TWITTER_PROFILE'	=> 'Переглянути профіль Twitter',
	'VIEW_YOUTUBE_PROFILE'	=> 'Переглянути профіль YouTube',
));
