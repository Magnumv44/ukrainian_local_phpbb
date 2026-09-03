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
	$lang = [];
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

$lang = array_merge($lang, [
	'RECAPTCHA_LANG'				=> 'uk',

	'CAPTCHA_RECAPTCHA'				=> 'reCaptcha v2',
	'CAPTCHA_RECAPTCHA_V3'			=> 'reCaptcha v3',

	'RECAPTCHA_INCORRECT'				=> 'Введене вами рішення неправильне',
	'RECAPTCHA_NOSCRIPT'				=> 'Будь ласка, увімкніть JavaScript у своєму браузері, щоб завантажити перевірку.',
	'RECAPTCHA_NOT_AVAILABLE'			=> 'Щоб використовувати reCaptcha, вам потрібно створити обліковий запис на <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'RECAPTCHA_INVISIBLE'				=> 'Ця CAPTCHA насправді невидима. Щоб переконатися, що вона працює, у правому нижньому куті цієї сторінки має з’явитися невеликий значок.',
	'RECAPTCHA_V3_LOGIN_ERROR_ATTEMPTS'	=> 'Ви перевищили максимально дозволену кількість спроб входу.<br>Окрім імені користувача та пароля, для перевірки вашого сеансу буде використано невидиму reCAPTCHA v3.',

	'RECAPTCHA_PUBLIC'				=> 'Ключ сайту',
	'RECAPTCHA_PUBLIC_EXPLAIN'		=> 'Ключ reCAPTCHA вашого сайту. Ключі можна отримати на <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>. Будь ласка, використовуйте reCAPTCHA v2 &gt; тип «Невидимий значок reCAPTCHA».',
	'RECAPTCHA_V3_PUBLIC_EXPLAIN'	=> 'Ключ reCAPTCHA вашого сайту. Ключі можна отримати на <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>. Будь ласка, використовуйте reCAPTCHA v3.',
	'RECAPTCHA_PRIVATE'				=> 'Секретний ключ',
	'RECAPTCHA_PRIVATE_EXPLAIN'		=> 'Секретний ключ reCAPTCHA. Ключі можна отримати на <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>. Будь ласка, використовуйте reCAPTCHA v2 &gt; тип «Невидимий значок reCAPTCHA».',
	'RECAPTCHA_V3_PRIVATE_EXPLAIN'	=> 'Секретний ключ reCAPTCHA. Ключі можна отримати на <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>. Будь ласка, використовуйте reCAPTCHA v3.',

	'RECAPTCHA_V3_DOMAIN'				=> 'Домен запиту',
	'RECAPTCHA_V3_DOMAIN_EXPLAIN'		=> 'Домен, з якого завантажується скрипт і який використовується для перевірки запиту.<br>Використовуйте <samp>recaptcha.net</samp>, якщо <samp>google.com</samp> недоступний.',

	'RECAPTCHA_V3_METHOD'				=> 'Метод запиту',
	'RECAPTCHA_V3_METHOD_EXPLAIN'		=> 'Метод, що використовується для перевірки запиту.<br>Вимкнені варіанти недоступні у вашому налаштуванні.',
	'RECAPTCHA_V3_METHOD_CURL'			=> 'cURL',
	'RECAPTCHA_V3_METHOD_POST'			=> 'POST',
	'RECAPTCHA_V3_METHOD_SOCKET'		=> 'Сокет',

	'RECAPTCHA_V3_THRESHOLD_DEFAULT'			=> 'Поріг за замовчуванням',
	'RECAPTCHA_V3_THRESHOLD_DEFAULT_EXPLAIN'	=> 'Використовується, коли жодна з інших дій не застосовна.',
	'RECAPTCHA_V3_THRESHOLD_LOGIN'				=> 'Поріг для входу',
	'RECAPTCHA_V3_THRESHOLD_POST'				=> 'Поріг для повідомлення',
	'RECAPTCHA_V3_THRESHOLD_REGISTER'			=> 'Поріг для реєстрації',
	'RECAPTCHA_V3_THRESHOLD_REPORT'				=> 'Поріг для скарги',
	'RECAPTCHA_V3_THRESHOLDS'					=> 'Пороги',
	'RECAPTCHA_V3_THRESHOLDS_EXPLAIN'			=> 'reCAPTCHA v3 повертає оцінку (<samp>1.0</samp> — дуже ймовірно, що це людина, <samp>0.0</samp> — дуже ймовірно, що це бот). Тут ви можете встановити мінімальну оцінку для кожної дії.',
	'EMPTY_RECAPTCHA_V3_REQUEST_METHOD'			=> 'reCAPTCHA v3 потребує вказати, який доступний метод використовувати для перевірки запиту.',
]);
