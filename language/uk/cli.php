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

if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'CLI_APCU_CACHE_NOTICE'				=> 'Кеш APCu потрібно очищати через панель адміністрування.',

	'CLI_CONFIG_CANNOT_CACHED'			=> 'Встановіть цей параметр, якщо налаштування конфігурації змінюється занадто часто, щоб ефективно кешуватися.',
	'CLI_CONFIG_CURRENT'				=> 'Поточне значення конфігурації, використовуйте 0 і 1 для булевих значень',
	'CLI_CONFIG_DELETE_SUCCESS'			=> 'Налаштування %s успішно видалено.',
	'CLI_CONFIG_NEW'					=> 'Нове значення конфігурації, використовуйте 0 і 1 для булевих значень',
	'CLI_CONFIG_NOT_EXISTS'				=> 'Налаштування %s не існує',
	'CLI_CONFIG_OPTION_NAME'			=> 'Назва параметра конфігурації',
	'CLI_CONFIG_PRINT_WITHOUT_NEWLINE'	=> 'Встановіть цей параметр, якщо значення слід виводити без нового рядка в кінці.',
	'CLI_CONFIG_INCREMENT_BY'			=> 'Величина для збільшення',
	'CLI_CONFIG_INCREMENT_SUCCESS'		=> 'Налаштування %s успішно збільшено',
	'CLI_CONFIG_SET_FAILURE'			=> 'Не вдалося встановити налаштування %s',
	'CLI_CONFIG_SET_SUCCESS'			=> 'Налаштування %s успішно встановлено',

	'CLI_DESCRIPTION_CRON_LIST'					=> 'Виводить список готових і неготових завдань cron.',
	'CLI_DESCRIPTION_CRON_RUN'					=> 'Запускає всі готові завдання cron.',
	'CLI_DESCRIPTION_CRON_RUN_ARGUMENT_1'		=> 'Назва завдання для запуску',
	'CLI_DESCRIPTION_DB_LIST'					=> 'Показує всі встановлені та доступні міграції.',
	'CLI_DESCRIPTION_DB_MIGRATE'				=> 'Оновлює базу даних, застосовуючи міграції.',
	'CLI_DESCRIPTION_DB_REVERT'					=> 'Скасовує міграцію.',
	'CLI_DESCRIPTION_DELETE_CONFIG'				=> 'Видаляє параметр конфігурації',
	'CLI_DESCRIPTION_DISABLE_EXTENSION'			=> 'Вимикає вказане розширення.',
	'CLI_DESCRIPTION_ENABLE_EXTENSION'			=> 'Вмикає вказане розширення.',
	'CLI_DESCRIPTION_FIND_MIGRATIONS'			=> 'Знаходить міграції, від яких ніщо не залежить.',
	'CLI_DESCRIPTION_FIX_LEFT_RIGHT_IDS'		=> 'Відновлює деревоподібну структуру форумів і модулів.',
	'CLI_DESCRIPTION_GET_CONFIG'				=> 'Отримує значення параметра конфігурації',
	'CLI_DESCRIPTION_INCREMENT_CONFIG'			=> 'Збільшує цілочисельне значення параметра конфігурації',
	'CLI_DESCRIPTION_LIST_EXTENSIONS'			=> 'Показує всі розширення в базі даних і файловій системі.',

	'CLI_DESCRIPTION_OPTION_ENV'				=> 'Назва середовища.',
	'CLI_DESCRIPTION_OPTION_SAFE_MODE'			=> 'Запустити в безпечному режимі (без розширень).',
	'CLI_DESCRIPTION_OPTION_SHELL'				=> 'Запустити оболонку.',

	'CLI_DESCRIPTION_PURGE_EXTENSION'			=> 'Повністю видаляє вказане розширення.',

	'CLI_DESCRIPTION_REPARSER_LIST'						=> 'Показує типи тексту, які можна повторно обробити.',
	'CLI_DESCRIPTION_REPARSER_AVAILABLE'				=> 'Доступні обробники повторного парсингу:',
	'CLI_DESCRIPTION_REPARSER_REPARSE'					=> 'Повторно обробляє збережений текст за допомогою поточних служб text_formatter.',
	'CLI_DESCRIPTION_REPARSER_REPARSE_ARG_1'			=> 'Тип тексту для повторної обробки. Залиште порожнім, щоб обробити все.',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_DRY_RUN'		=> 'Не зберігати жодних змін; лише вивести, що відбудеться',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_FORCE_BBCODE'	=> 'Повторно обробити всі BBCode без винятку. Зверніть увагу, що будь-які раніше вимкнені BBCode буде повторно оброблено, увімкнено та повністю відображено.',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_MIN'	=> 'Найменший ID запису для обробки',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_MAX'	=> 'Найбільший ID запису для обробки',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_SIZE'	=> 'Приблизна кількість записів для одночасної обробки',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RESUME'		=> 'Почати повторну обробку з місця, де завершилося останнє виконання',

	'CLI_DESCRIPTION_SET_ATOMIC_CONFIG'					=> 'Встановлює значення параметра конфігурації, лише якщо старе значення збігається з поточним',
	'CLI_DESCRIPTION_SET_CONFIG'						=> 'Встановлює значення параметра конфігурації',

	'CLI_DESCRIPTION_THUMBNAIL_DELETE'					=> 'Видалити всі наявні мініатюри.',
	'CLI_DESCRIPTION_THUMBNAIL_GENERATE'				=> 'Згенерувати всі відсутні мініатюри.',
	'CLI_DESCRIPTION_THUMBNAIL_RECREATE'				=> 'Перестворити всі мініатюри.',

	'CLI_DESCRIPTION_UPDATE_CHECK'					=> 'Перевірити, чи форум актуальний.',
	'CLI_DESCRIPTION_UPDATE_CHECK_ARGUMENT_1'		=> 'Назва розширення для перевірки (якщо all, перевіряються всі розширення)',
	'CLI_DESCRIPTION_UPDATE_CHECK_OPTION_CACHE'		=> 'Запустити команду перевірки з кешем.',
	'CLI_DESCRIPTION_UPDATE_CHECK_OPTION_STABILITY'	=> 'Запустити команду з вибором перевірки лише стабільних чи нестабільних версій.',

	'CLI_DESCRIPTION_UPDATE_HASH_BCRYPT'		=> 'Оновлює застарілі хеші паролів на хешовані за допомогою bcrypt.',

	'CLI_ERROR_INVALID_STABILITY' => '"%s" має бути встановлено на "stable" або "unstable".',

	'CLI_DESCRIPTION_USER_ACTIVATE'				=> 'Активувати (або деактивувати) обліковий запис користувача.',
	'CLI_DESCRIPTION_USER_ACTIVATE_USERNAME'	=> 'Ім’я користувача облікового запису для активації.',
	'CLI_DESCRIPTION_USER_ACTIVATE_DEACTIVATE'	=> 'Деактивувати обліковий запис користувача',
	'CLI_DESCRIPTION_USER_ACTIVATE_ACTIVE'		=> 'Користувач вже активний.',
	'CLI_DESCRIPTION_USER_ACTIVATE_INACTIVE'	=> 'Користувач вже неактивний.',
	'CLI_DESCRIPTION_USER_ADD'					=> 'Додати нового користувача.',
	'CLI_DESCRIPTION_USER_ADD_OPTION_USERNAME'	=> 'Ім’я користувача нового користувача',
	'CLI_DESCRIPTION_USER_ADD_OPTION_PASSWORD'	=> 'Пароль нового користувача',
	'CLI_DESCRIPTION_USER_ADD_OPTION_EMAIL'		=> 'Email-адреса нового користувача',
	'CLI_DESCRIPTION_USER_ADD_OPTION_NOTIFY'	=> 'Надіслати новому користувачу лист активації облікового запису (не надсилається за замовчуванням)',
	'CLI_DESCRIPTION_USER_DELETE'				=> 'Видалити обліковий запис користувача.',
	'CLI_DESCRIPTION_USER_DELETE_USERNAME'		=> 'Ім’я користувача, якого потрібно видалити',
	'CLI_DESCRIPTION_USER_DELETE_ID'			=> 'Видалити облікові записи користувачів за ID.',
	'CLI_DESCRIPTION_USER_DELETE_ID_OPTION_ID'	=> 'ID користувачів, яких потрібно видалити',
	'CLI_DESCRIPTION_USER_DELETE_OPTION_POSTS'	=> 'Видалити всі повідомлення користувача. Без цього параметра повідомлення користувача буде збережено.',
	'CLI_DESCRIPTION_USER_RECLEAN'				=> 'Повторно очистити імена користувачів.',

	'CLI_EXTENSION_DISABLE_FAILURE'		=> 'Не вдалося вимкнути розширення %s',
	'CLI_EXTENSION_DISABLE_SUCCESS'		=> 'Розширення %s успішно вимкнено',
	'CLI_EXTENSION_DISABLED'			=> 'Розширення %s не увімкнено',
	'CLI_EXTENSION_ENABLE_FAILURE'		=> 'Не вдалося увімкнути розширення %s',
	'CLI_EXTENSION_ENABLE_SUCCESS'		=> 'Розширення %s успішно увімкнено',
	'CLI_EXTENSION_ENABLED'				=> 'Розширення %s вже увімкнено',
	'CLI_EXTENSION_NOT_EXIST'			=> 'Розширення %s не існує',
	'CLI_EXTENSION_NAME'				=> 'Назва розширення',
	'CLI_EXTENSION_PURGE_FAILURE'		=> 'Не вдалося повністю видалити розширення %s',
	'CLI_EXTENSION_PURGE_SUCCESS'		=> 'Розширення %s успішно повністю видалено',
	'CLI_EXTENSION_UPDATE_FAILURE'		=> 'Не вдалося оновити розширення %s',
	'CLI_EXTENSION_UPDATE_SUCCESS'		=> 'Розширення %s успішно оновлено',
	'CLI_EXTENSION_NOT_FOUND'			=> 'Розширень не знайдено.',
	'CLI_EXTENSION_NOT_ENABLEABLE'		=> 'Розширення %s неможливо увімкнути.',
	'CLI_EXTENSIONS_AVAILABLE'			=> 'Доступно',
	'CLI_EXTENSIONS_DISABLED'			=> 'Вимкнено',
	'CLI_EXTENSIONS_ENABLED'			=> 'Увімкнено',

	'CLI_FIXUP_FIX_LEFT_RIGHT_IDS_SUCCESS'		=> 'Деревоподібну структуру форумів і модулів успішно відновлено.',
	'CLI_FIXUP_UPDATE_HASH_BCRYPT_SUCCESS'		=> 'Застарілі хеші паролів успішно оновлено до bcrypt.',

	'CLI_MIGRATION_NAME'					=> 'Назва міграції, включно з простором імен (використовуйте прямі скісні риски замість зворотних, щоб уникнути проблем).',
	'CLI_MIGRATIONS_AVAILABLE'				=> 'Доступні міграції',
	'CLI_MIGRATIONS_INSTALLED'				=> 'Встановлені міграції',
	'CLI_MIGRATIONS_ONLY_AVAILABLE'		    => 'Показувати лише доступні міграції',
	'CLI_MIGRATIONS_EMPTY'                  => 'Міграцій немає.',

	'CLI_REPARSER_REPARSE_REPARSING'		=> 'Повторна обробка %1$s (діапазон %2$d..%3$d)',
	'CLI_REPARSER_REPARSE_REPARSING_START'	=> 'Повторна обробка %s...',
	'CLI_REPARSER_REPARSE_SUCCESS'			=> 'Повторну обробку успішно завершено',

	// In all the case %1$s is the logical name of the file and %2$s the real name on the filesystem
	// eg: big_image.png (2_a51529ae7932008cf8454a95af84cacd) generated.
	'CLI_THUMBNAIL_DELETED'		=> '%1$s (%2$s) видалено.',
	'CLI_THUMBNAIL_DELETING'	=> 'Видалення мініатюр',
	'CLI_THUMBNAIL_SKIPPED'		=> '%1$s (%2$s) пропущено.',
	'CLI_THUMBNAIL_GENERATED'	=> '%1$s (%2$s) згенеровано.',
	'CLI_THUMBNAIL_GENERATING'	=> 'Генерування мініатюр',
	'CLI_THUMBNAIL_GENERATING_DONE'	=> 'Всі мініатюри перегенеровано.',
	'CLI_THUMBNAIL_DELETING_DONE'	=> 'Всі мініатюри видалено.',

	'CLI_THUMBNAIL_NOTHING_TO_GENERATE'	=> 'Немає мініатюр для генерування.',
	'CLI_THUMBNAIL_NOTHING_TO_DELETE'	=> 'Немає мініатюр для видалення.',

	'CLI_USER_ADD_SUCCESS'			=> 'Користувача %s успішно додано.',
	'CLI_USER_DELETE_CONFIRM'		=> 'Ви впевнені, що бажаєте видалити «%s»? [y/N]',
	'CLI_USER_DELETE_ID_CONFIRM'	=> 'Ви впевнені, що бажаєте видалити ID користувачів «%s»? [y/N]',
	'CLI_USER_DELETE_ID_SUCCESS'	=> 'ID користувачів успішно видалено.',
	'CLI_USER_DELETE_ID_START'		=> 'Видалення користувачів за ID',
	'CLI_USER_DELETE_NONE'			=> 'Жодного користувача не видалено за ID.',
	'CLI_USER_RECLEAN_START'		=> 'Повторне очищення імен користувачів',
	'CLI_USER_RECLEAN_DONE'			=> [
		0	=> 'Повторне очищення завершено. Жодне ім’я користувача не потребувало очищення.',
		1	=> 'Повторне очищення завершено. Очищено %d ім’я користувача.',
		2	=> 'Повторне очищення завершено. Очищено %d імені користувача.',
		3	=> 'Повторне очищення завершено. Очищено %d імен користувачів.',
	],
));

// Additional help for commands.
$lang = array_merge($lang, array(
	'CLI_HELP_CRON_RUN'			=> $lang['CLI_DESCRIPTION_CRON_RUN'] . ' За бажанням ви можете вказати назву завдання cron, щоб запустити лише його.',
	'CLI_HELP_USER_ACTIVATE'	=> 'Активуйте обліковий запис користувача або деактивуйте його за допомогою параметра <info>--deactivate</info>.
Щоб додатково надіслати користувачу лист активації, використовуйте параметр <info>--send-email</info>.',
	'CLI_HELP_USER_ADD'			=> 'Команда <info>%command.name%</info> додає нового користувача:
Якщо цю команду запущено без параметрів, вам буде запропоновано ввести їх.
Щоб додатково надіслати листа новому користувачу, використовуйте параметр <info>--send-email</info>.',
	'CLI_HELP_USER_RECLEAN'		=> 'Повторне очищення імен користувачів перевірить усі збережені імена користувачів і переконається, що очищені версії також збережено. Очищені імена користувачів мають форму без урахування регістру, нормалізовану у NFC та перетворену на ASCII.',
));
