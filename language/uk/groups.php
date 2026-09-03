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
	'ALREADY_DEFAULT_GROUP'		=> 'Обрана група вже є вашою основною групою.',
	'ALREADY_IN_GROUP'			=> 'Ви вже є учасником обраної групи.',
	'ALREADY_IN_GROUP_PENDING'	=> 'Ви вже надіслали запит на вступ до обраної групи.',

	'CANNOT_JOIN_GROUP'			=> 'Ви не можете приєднатися до цієї групи. Ви можете вступати лише до відкритих і вільно відкритих груп.',
	'CANNOT_RESIGN_GROUP'		=> 'Ви не можете вийти з цієї групи. Ви можете виходити лише з відкритих і вільно відкритих груп.',
	'CHANGED_DEFAULT_GROUP'		=> 'Основну групу успішно змінено.',

	'GROUP_AVATAR'						=> 'Аватар групи',
	'GROUP_CHANGE_DEFAULT'				=> 'Ви впевнені, що бажаєте змінити своє основне членство на групу «%s»?',
	'GROUP_CLOSED'						=> 'Закрита',
	'GROUP_DESC'						=> 'Опис групи',
	'GROUP_HIDDEN'						=> 'Прихована',
	'GROUP_INFORMATION'					=> 'Інформація про групу',
	'GROUP_IS_CLOSED'					=> 'Це закрита група, нові учасники можуть приєднатися лише за запрошенням лідера групи.',
	'GROUP_IS_FREE'						=> 'Це вільно відкрита група, всі нові учасники вітаються.',
	'GROUP_IS_HIDDEN'					=> 'Це прихована група, лише учасники цієї групи можуть переглядати її склад.',
	'GROUP_IS_OPEN'						=> 'Це відкрита група, учасники можуть подати заявку на вступ.',
	'GROUP_IS_SPECIAL'					=> 'Це спеціальна група, спеціальними групами керують адміністратори форуму.',
	'GROUP_JOIN'						=> 'Приєднатися до групи',
	'GROUP_JOIN_CONFIRM'				=> 'Ви впевнені, що бажаєте приєднатися до обраної групи?',
	'GROUP_JOIN_PENDING'				=> 'Запит на приєднання до групи',
	'GROUP_JOIN_PENDING_CONFIRM'		=> 'Ви впевнені, що бажаєте надіслати запит на приєднання до обраної групи?',
	'GROUP_JOINED'						=> 'Ви успішно приєдналися до обраної групи.',
	'GROUP_JOINED_PENDING'				=> 'Запит на членство в групі успішно надіслано. Будь ласка, зачекайте, поки лідер групи схвалить ваше членство.',
	'GROUP_LIST'						=> 'Керування користувачами',
	'GROUP_MEMBERS'						=> 'Учасники групи',
	'GROUP_NAME'						=> 'Назва групи',
	'GROUP_OPEN'						=> 'Відкрита',
	'GROUP_RANK'						=> 'Звання групи',
	'GROUP_RESIGN_MEMBERSHIP'			=> 'Вийти з групи',
	'GROUP_RESIGN_MEMBERSHIP_CONFIRM'	=> 'Ви впевнені, що бажаєте вийти з обраної групи?',
	'GROUP_RESIGN_PENDING'				=> 'Скасувати очікуваний запит на членство',
	'GROUP_RESIGN_PENDING_CONFIRM'		=> 'Ви впевнені, що бажаєте скасувати ваш запит на очікуване членство в обраній групі?',
	'GROUP_RESIGNED_MEMBERSHIP'			=> 'Вас успішно видалено з обраної групи.',
	'GROUP_RESIGNED_PENDING'			=> 'Ваш запит на очікуване членство успішно скасовано для обраної групи.',
	'GROUP_TYPE'						=> 'Тип групи',
	'GROUP_UNDISCLOSED'					=> 'Прихована група',
	'FORUM_UNDISCLOSED'					=> 'Модерування прихованих форумів',

	'LOGIN_EXPLAIN_GROUP'	=> 'Вам потрібно увійти, щоб переглянути інформацію про групу.',

	'NO_LEADERS'					=> 'Ви не є лідером жодної групи.',
	'NOT_LEADER_OF_GROUP'			=> 'Неможливо виконати запитану дію, оскільки ви не є лідером обраної групи.',
	'NOT_MEMBER_OF_GROUP'			=> 'Неможливо виконати запитану дію, оскільки ви не є учасником обраної групи, або ваше членство ще не схвалено.',
	'NOT_RESIGN_FROM_DEFAULT_GROUP'	=> 'Вам не дозволено виходити з вашої основної групи.',

	'PRIMARY_GROUP'		=> 'Основна група',

	'REMOVE_SELECTED'		=> 'Видалити обране',

	'USER_GROUP_CHANGE'			=> 'З групи «%1$s» до групи «%2$s»',
	'USER_GROUP_DEMOTE'			=> 'Понизити лідерство',
	'USER_GROUP_DEMOTE_CONFIRM'	=> 'Ви впевнені, що бажаєте понизити лідера обраної групи?',
	'USER_GROUP_DEMOTED'		=> 'Ваше лідерство успішно понижено.',
));
