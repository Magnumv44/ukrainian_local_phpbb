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
	'CAPTCHA_QA'				=> 'Питання й відповідь',
	'CONFIRM_QUESTION_EXPLAIN'	=> 'Це питання є засобом захисту від автоматичного надсилання форм спам-ботами.',
	'CONFIRM_QUESTION_WRONG'	=> 'Ви дали неправильну відповідь на питання.',
	'CONFIRM_QUESTION_MISSING'	=> 'Не вдалося отримати питання для перевірки. Будь ласка, зверніться до адміністратора форуму.',

	'QUESTION_ANSWERS'			=> 'Відповіді',
	'ANSWERS_EXPLAIN'			=> 'Будь ласка, введіть правильні відповіді на питання, по одній в рядку.',
	'CONFIRM_QUESTION'			=> 'Питання',

	'ANSWER'					=> 'Відповідь',
	'EDIT_QUESTION'				=> 'Редагувати питання',
	'QUESTIONS'					=> 'Питання',
	'QUESTIONS_EXPLAIN'			=> 'Для кожної форми, де увімкнено плагін «Питання й відповідь», користувачам буде поставлено одне з визначених тут питань. Щоб використовувати цей плагін, потрібно задати хоча б одне питання мовою за замовчуванням. Ці питання мають бути простими для вашої аудиторії, але недоступними для бота, здатного скористатися пошуком Google™. Достатньо одного якісного питання. Якщо ви почнете отримувати спам-реєстрації, питання варто змінити. Увімкніть сувору перевірку, якщо відповідь залежить від регістру символів, пунктуації чи пробілів.',
	'QUESTION_DELETED'			=> 'Питання видалено',
	'QUESTION_LANG'				=> 'Мова',
	'QUESTION_LANG_EXPLAIN'		=> 'Мова, якою написано це питання та відповіді на нього.',
	'QUESTION_STRICT'			=> 'Сувора перевірка',
	'QUESTION_STRICT_EXPLAIN'	=> 'Увімкніть, щоб враховувати регістр символів, пунктуацію та пробіли.',

	'QUESTION_TEXT'				=> 'Питання',
	'QUESTION_TEXT_EXPLAIN'		=> 'Питання, яке буде показане користувачу.',

	'QA_ERROR_MSG'				=> 'Будь ласка, заповніть усі поля та введіть щонайменше одну відповідь.',
	'QA_LAST_QUESTION'			=> 'Ви не можете видалити всі питання, поки плагін активний.',
));
