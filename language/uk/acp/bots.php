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

// Bot settings
$lang = array_merge($lang, array(
	'BOTS'				=> 'Керування ботами',
	'BOTS_EXPLAIN'		=> '«Боти», «павуки» чи «краулери» — це автоматизовані агенти, які найчастіше використовуються пошуковими системами для оновлення своїх баз даних. Оскільки вони рідко коректно використовують сеанси, вони можуть спотворювати кількість відвідувачів, збільшувати навантаження, а іноді неправильно індексувати сайти. Тут ви можете визначити особливий тип користувача, щоб подолати ці проблеми.',
	'BOT_ACTIVATE'		=> 'Активувати',
	'BOT_ACTIVE'		=> 'Бот активний',
	'BOT_ADD'			=> 'Додати бота',
	'BOT_ADDED'			=> 'Нового бота успішно додано.',
	'BOT_AGENT'			=> 'Збіг агента',
	'BOT_AGENT_EXPLAIN'	=> 'Рядок, що збігається з агентом браузера бота, часткові збіги дозволені.',
	'BOT_DEACTIVATE'	=> 'Деактивувати',
	'BOT_DELETED'		=> 'Бота успішно видалено.',
	'BOT_EDIT'			=> 'Редагувати ботів',
	'BOT_EDIT_EXPLAIN'	=> 'Тут ви можете додати або редагувати наявний запис бота. Ви можете визначити рядок агента та/або одну чи кілька IP-адрес (чи діапазон адрес) для збігу. Будьте обережні, визначаючи рядки агентів чи адреси для збігу. Ви також можете вказати стиль і мову, якою бот переглядатиме форум. Це може дозволити вам зменшити використання трафіку, встановивши простий стиль для ботів. Не забудьте встановити відповідні права для спеціальної групи користувачів «Боти».',
	'BOT_LANG'			=> 'Мова бота',
	'BOT_LANG_EXPLAIN'	=> 'Мова, яку бачить бот під час перегляду.',
	'BOT_LAST_VISIT'	=> 'Останнє відвідування',
	'BOT_IP'			=> 'IP-адреса бота',
	'BOT_IP_EXPLAIN'	=> 'Часткові збіги дозволені, розділяйте адреси комою.',
	'BOT_NAME'			=> 'Назва бота',
	'BOT_NAME_EXPLAIN'	=> 'Використовується лише для вашої власної інформації.',
	'BOT_NAME_TAKEN'	=> 'Це ім’я вже використовується на вашому форумі і не може бути використане для бота.',
	'BOT_NEVER'			=> 'Ніколи',
	'BOT_STYLE'			=> 'Стиль бота',
	'BOT_STYLE_EXPLAIN'	=> 'Стиль форуму, використовуваний ботом.',
	'BOT_UPDATED'		=> 'Наявного бота успішно оновлено.',

	'ERR_BOT_AGENT_MATCHES_UA'	=> 'Вказаний вами агент бота подібний до того, який ви наразі використовуєте. Будь ласка, скоригуйте агента для цього бота.',
	'ERR_BOT_NO_IP'				=> 'Вказані вами IP-адреси недійсні, або не вдалося визначити ім’я хосту.',
	'ERR_BOT_NO_MATCHES'		=> 'Вам потрібно вказати щонайменше агент або IP для збігу цього бота.',

	'NO_BOT'		=> 'Бота з вказаним ID не знайдено.',
	'NO_BOT_GROUP'	=> 'Не вдалося знайти спеціальну групу ботів.',
));
