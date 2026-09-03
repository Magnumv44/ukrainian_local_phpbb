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
	'APPROVE'								=> 'Схвалити',
	'ATTACHMENT'						=> 'Вкладення',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> 'Функціонал вкладень вимкнено.',

	'BOOKMARK_ADDED'		=> 'Тему успішно додано до закладок.',
	'BOOKMARK_ERR'			=> 'Не вдалося додати тему до закладок. Будь ласка, спробуйте ще раз.',
	'BOOKMARK_REMOVED'		=> 'Тему успішно видалено із закладок.',
	'BOOKMARK_TOPIC'		=> 'Додати тему до закладок',
	'BOOKMARK_TOPIC_REMOVE'	=> 'Видалити із закладок',
	'BUMPED_BY'				=> 'Востаннє піднято користувачем %1$s %2$s.',
	'BUMP_TOPIC'			=> 'Підняти тему',

	'DELETE_TOPIC'			=> 'Видалити тему',
	'DELETED_INFORMATION'	=> 'Видалено користувачем %1$s %2$s',
	'DISAPPROVE'					=> 'Відхилити',
	'DOWNLOAD_NOTICE'		=> 'Ви не маєте необхідних прав для перегляду файлів, вкладених до цього повідомлення.',

	'EDITED_TIMES_TOTAL'	=> array(
		1	=> 'Востаннє редаговано користувачем %2$s %3$s, редаговано %1$d раз.',
		2	=> 'Востаннє редаговано користувачем %2$s %3$s, редаговано %1$d рази.',
		3	=> 'Востаннє редаговано користувачем %2$s %3$s, редаговано %1$d разів.',
	),
	'EMAIL_TOPIC'			=> 'Надіслати тему поштою',
	'ERROR_NO_ATTACHMENT'	=> 'Обране вкладення більше не існує.',

	'FILE_NOT_FOUND_404'	=> 'Файл <strong>%s</strong> не існує.',
	'FORK_TOPIC'			=> 'Скопіювати тему',
	'FULL_EDITOR'			=> 'Повний редактор і перегляд',

	'LINKAGE_FORBIDDEN'		=> 'Вам не дозволено переглядати, завантажувати або посилатися на цей сайт.',
	'LOGIN_NOTIFY_TOPIC'	=> 'Вас було сповіщено про цю тему, будь ласка, увійдіть, щоб переглянути її.',
	'LOGIN_VIEWTOPIC'		=> 'Форум вимагає, щоб ви були зареєстровані та увійшли, щоб переглянути цю тему.',

	'MAKE_ANNOUNCE'				=> 'Змінити на «Оголошення»',
	'MAKE_GLOBAL'				=> 'Змінити на «Загальне»',
	'MAKE_NORMAL'				=> 'Змінити на «Звичайна тема»',
	'MAKE_STICKY'				=> 'Змінити на «Закріплена»',
	'MAX_OPTIONS_SELECT'		=> array(
		1	=> 'Ви можете обрати <strong>%d</strong> варіант',
		2	=> 'Ви можете обрати до <strong>%d</strong> варіантів',
	),
	'MISSING_INLINE_ATTACHMENT'	=> 'Вкладення <strong>%s</strong> більше не доступне',
	'MOVE_TOPIC'				=> 'Перемістити тему',

	'NO_ATTACHMENT_SELECTED'=> 'Ви не обрали вкладення для завантаження чи перегляду.',
	'NO_NEWER_TOPICS'		=> 'У цьому форумі немає новіших тем.',
	'NO_OLDER_TOPICS'		=> 'У цьому форумі немає старіших тем.',
	'NO_UNREAD_POSTS'		=> 'У цій темі немає нових непрочитаних повідомлень.',
	'NO_VOTE_OPTION'		=> 'Вам потрібно вказати варіант для голосування.',
	'NO_VOTES'				=> 'Голосів немає',
	'NO_AUTH_PRINT_TOPIC'	=> 'Вам не дозволено друкувати теми.',

	'POLL_ENDED_AT'			=> 'Опитування завершилося %s',
	'POLL_RUN_TILL'			=> 'Опитування триває до %s',
	'POLL_VOTED_OPTION'		=> 'Ви проголосували за цей варіант',
	'POST_DELETED_RESTORE'	=> 'Це повідомлення видалено. Його можна відновити.',
	'PRINT_TOPIC'			=> 'Версія для друку',

	'QUICK_MOD'				=> 'Швидкі інструменти модератора',
	'QUICKREPLY'			=> 'Швидка відповідь',

	'REPLY_TO_TOPIC'		=> 'Відповісти в темі',
	'RESTORE'				=> 'Відновити',
	'RESTORE_TOPIC'			=> 'Відновити тему',
	'RETURN_POST'			=> '%sПовернутися до повідомлення%s',

	'SUBMIT_VOTE'			=> 'Проголосувати',

	'TOPIC_TOOLS'			=> 'Інструменти теми',
	'TOTAL_VOTES'			=> 'Всього голосів',

	'UNLOCK_TOPIC'			=> 'Розблокувати тему',

	'VIEW_INFO'				=> 'Деталі повідомлення',
	'VIEW_NEXT_TOPIC'		=> 'Наступна тема',
	'VIEW_PREVIOUS_TOPIC'	=> 'Попередня тема',
	'VIEW_QUOTED_POST'		=> 'Переглянути цитоване повідомлення',
	'VIEW_RESULTS'			=> 'Переглянути результати',
	'VIEW_TOPIC_POSTS'		=> array(
		1	=> '%d повідомлення',
		2	=> '%d повідомлення',
		3	=> '%d повідомлень',
	),
	'VIEW_UNREAD_POST'		=> 'Перше непрочитане повідомлення',
	'VOTE_SUBMITTED'		=> 'Ваш голос зараховано.',
	'VOTE_CONVERTED'		=> 'Зміна голосів не підтримується для конвертованих опитувань.',

));
