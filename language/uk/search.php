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
	'ALL_AVAILABLE'			=> 'Усі доступні',
	'ALL_RESULTS'			=> 'Усі результати',

	'DISPLAY_RESULTS'		=> 'Показувати результати як',

	'FOUND_SEARCH_MATCHES'		=> array(
		1	=> 'Знайдено %d збіг',
		2	=> 'Знайдено %d збіги',
		3	=> 'Знайдено %d збігів',
	),
	'FOUND_MORE_SEARCH_MATCHES'		=> array(
		1	=> 'Знайдено більше ніж %d збіг',
		2	=> 'Знайдено більше ніж %d збіги',
		3	=> 'Знайдено більше ніж %d збігів',
	),

	'GLOBAL'				=> 'Загальне оголошення',

	'IGNORED_TERMS'			=> 'проігноровано',
	'IGNORED_TERMS_EXPLAIN'	=> 'Наступні слова у вашому пошуковому запиті було проігноровано, оскільки вони є занадто поширеними: <strong>%s</strong>.',

	'JUMP_TO_POST'			=> 'Перейти до повідомлення',

	'LOGIN_EXPLAIN_EGOSEARCH'	=> 'Форум вимагає, щоб ви були зареєстровані та увійшли, щоб переглядати власні повідомлення.',
	'LOGIN_EXPLAIN_UNREADSEARCH'=> 'Форум вимагає, щоб ви були зареєстровані та увійшли, щоб переглядати непрочитані повідомлення.',
	'LOGIN_EXPLAIN_NEWPOSTS'	=> 'Форум вимагає, щоб ви були зареєстровані та увійшли, щоб переглядати нові повідомлення з часу вашого останнього відвідування.',

	'MAX_NUM_SEARCH_KEYWORDS_REFINE'	=> array(
		1	=> 'Ви вказали забагато слів для пошуку. Будь ласка, не вводьте більше %1$d слова.',
		2	=> 'Ви вказали забагато слів для пошуку. Будь ласка, не вводьте більше %1$d слів.',
		3	=> 'Ви вказали забагато слів для пошуку. Будь ласка, не вводьте більше %1$d слів.',
	),

	'NO_KEYWORDS'			=> 'Вам потрібно вказати щонайменше одне слово для пошуку. Кожне слово має складатися щонайменше з %s та містити не більше %s символів, не враховуючи символи підстановки.',
	'NO_RECENT_SEARCHES'	=> 'Останнім часом пошуків не виконувалося.',
	'NO_SEARCH'				=> 'На жаль, вам не дозволено використовувати систему пошуку.',
	'NO_SEARCH_RESULTS'		=> 'Відповідних збігів не знайдено.',
	'NO_SEARCH_LOAD'		=> 'На жаль, наразі ви не можете скористатися пошуком. На сервері високе навантаження. Будь ласка, спробуйте пізніше.',
	'NO_SEARCH_TIME'		=> array(
		1	=> 'На жаль, наразі ви не можете скористатися пошуком. Будь ласка, спробуйте ще раз через %d секунду.',
		2	=> 'На жаль, наразі ви не можете скористатися пошуком. Будь ласка, спробуйте ще раз через %d секунди.',
		3	=> 'На жаль, наразі ви не можете скористатися пошуком. Будь ласка, спробуйте ще раз через %d секунд.',
	),
	'NO_SEARCH_UNREADS'		=> 'На жаль, пошук непрочитаних повідомлень вимкнено на цьому форумі.',
	'WORD_IN_NO_POST'		=> 'Повідомлень не знайдено, оскільки слово <strong>%s</strong> не міститься в жодному повідомленні.',
	'WORDS_IN_NO_POST'		=> 'Повідомлень не знайдено, оскільки слова <strong>%s</strong> не містяться в жодному повідомленні.',

	'POST_CHARACTERS'		=> 'символів повідомлень',
	'PHRASE_SEARCH_DISABLED'	=> 'Пошук за точною фразою не підтримується на цьому форумі.',

	'RECENT_SEARCHES'		=> 'Останні пошуки',
	'RESULT_DAYS'			=> 'Обмежити результати попередніми',
	'RESULT_SORT'			=> 'Сортувати результати за',
	'RETURN_FIRST'			=> 'Показати перші',
	'RETURN_FIRST_EXPLAIN'	=> 'Встановіть 0, щоб показати повідомлення повністю.',
	'GO_TO_SEARCH_ADV'	=> 'Перейти до розширеного пошуку',

	'SEARCHED_FOR'				=> 'Використаний пошуковий запит',
	'SEARCHED_TOPIC'			=> 'Тема пошуку',
	'SEARCHED_QUERY'			=> 'Пошуковий запит',
	'SEARCH_ALL_TERMS'			=> 'Шукати за всіма термінами або використати запит як введено',
	'SEARCH_ANY_TERMS'			=> 'Шукати за будь-якими термінами',
	'SEARCH_AUTHOR'				=> 'Пошук за автором',
	'SEARCH_AUTHOR_EXPLAIN'		=> 'Використовуйте * як символ підстановки для часткових збігів.',
	'SEARCH_FIRST_POST'			=> 'Лише перше повідомлення теми',
	'SEARCH_FORUMS'				=> 'Шукати у форумах',
	'SEARCH_FORUMS_EXPLAIN'		=> 'Оберіть форум або форуми, у яких бажаєте шукати. Підфоруми пошукуються автоматично, якщо ви не вимкнете «пошук у підфорумах» нижче.',
	'SEARCH_IN_RESULTS'			=> 'Шукати серед цих результатів',
	'SEARCH_KEYWORDS_EXPLAIN'	=> 'Поставте <strong>+</strong> перед словом, яке обов’язково має бути знайдене, і <strong>-</strong> перед словом, яке не повинно зустрічатися. Помістіть список слів, розділених <strong>|</strong>, у дужки, якщо достатньо знайти лише одне з них. Використовуйте * як символ підстановки для часткових збігів.',
	'SEARCH_MSG_ONLY'			=> 'Лише текст повідомлення',
	'SEARCH_OPTIONS'			=> 'Параметри пошуку',
	'SEARCH_QUERY'				=> 'Пошуковий запит',
	'SEARCH_SUBFORUMS'			=> 'Пошук у підфорумах',
	'SEARCH_TITLE_MSG'			=> 'Теми повідомлень і текст повідомлень',
	'SEARCH_TITLE_ONLY'			=> 'Лише заголовки тем',
	'SEARCH_WITHIN'				=> 'Шукати серед',
	'SORT_ASCENDING'			=> 'За зростанням',
	'SORT_AUTHOR'				=> 'Автор',
	'SORT_DESCENDING'			=> 'За спаданням',
	'SORT_FORUM'				=> 'Форум',
	'SORT_POST_SUBJECT'			=> 'Тема повідомлення',
	'SORT_TIME'					=> 'Час повідомлення',
	'SPHINX_SEARCH_FAILED'		=> 'Помилка пошуку: %s',
	'SPHINX_SEARCH_FAILED_LOG'	=> 'На жаль, пошук виконати не вдалося. Докладнішу інформацію про цю помилку записано в журнал помилок.',

	'TOO_FEW_AUTHOR_CHARS'	=> array(
		1	=> 'Вам потрібно вказати щонайменше %d символ імені автора.',
		2	=> 'Вам потрібно вказати щонайменше %d символи імені автора.',
		3	=> 'Вам потрібно вказати щонайменше %d символів імені автора.',
	),
));
