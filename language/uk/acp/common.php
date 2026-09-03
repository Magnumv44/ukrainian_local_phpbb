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

// Common
$lang = array_merge($lang, array(
	'ACP_ADMINISTRATORS'		=> 'Адміністратори',
	'ACP_ADMIN_LOGS'			=> 'Журнал адміністратора',
	'ACP_ADMIN_ROLES'			=> 'Ролі адміністратора',
	'ACP_ATTACHMENTS'			=> 'Вкладення',
	'ACP_ATTACHMENT_SETTINGS'	=> 'Налаштування вкладень',
	'ACP_AUTH_SETTINGS'			=> 'Автентифікація',
	'ACP_AUTOMATION'			=> 'Автоматизація',
	'ACP_AVATAR_SETTINGS'		=> 'Налаштування аватарів',

	'ACP_BACKUP'				=> 'Резервне копіювання',
	'ACP_BAN'					=> 'Блокування',
	'ACP_BAN_EMAILS'			=> 'Заблокувати email',
	'ACP_BAN_IPS'				=> 'Заблокувати IP',
	'ACP_BAN_USERNAMES'			=> 'Заблокувати користувачів',
	'ACP_BBCODES'				=> 'BBCode',
	'ACP_BOARD_CONFIGURATION'	=> 'Конфігурація форуму',
	'ACP_BOARD_FEATURES'		=> 'Функції форуму',
	'ACP_BOARD_MANAGEMENT'		=> 'Керування форумом',
	'ACP_BOARD_SETTINGS'		=> 'Налаштування форуму',
	'ACP_BOTS'					=> 'Павуки/Роботи',

	'ACP_CAPTCHA'				=> 'CAPTCHA',

	'ACP_CAT_CUSTOMISE'			=> 'Налаштувати',
	'ACP_CAT_DATABASE'			=> 'База даних',
	'ACP_CAT_DOT_MODS'			=> 'Розширення',
	'ACP_CAT_FORUMS'			=> 'Форуми',
	'ACP_CAT_GENERAL'			=> 'Загальні',
	'ACP_CAT_MAINTENANCE'		=> 'Обслуговування',
	'ACP_CAT_PERMISSIONS'		=> 'Права',
	'ACP_CAT_POSTING'			=> 'Публікація',
	'ACP_CAT_STYLES'			=> 'Стилі',
	'ACP_CAT_SYSTEM'			=> 'Система',
	'ACP_CAT_USERGROUP'			=> 'Користувачі та групи',
	'ACP_CAT_USERS'				=> 'Користувачі',
	'ACP_CLIENT_COMMUNICATION'	=> 'Комунікація з клієнтами',
	'ACP_COOKIE_SETTINGS'		=> 'Налаштування cookie',
	'ACP_CONTACT'				=> 'Сторінка контактів',
	'ACP_CONTACT_SETTINGS'		=> 'Налаштування сторінки контактів',
	'ACP_CRITICAL_LOGS'			=> 'Журнал помилок',
	'ACP_CUSTOM_PROFILE_FIELDS'	=> 'Користувацькі поля профілю',

	'ACP_DATABASE'				=> 'Керування базою даних',
	'ACP_DISALLOW'				=> 'Заборона',
	'ACP_DISALLOW_USERNAMES'	=> 'Заборонити імена користувачів',

	'ACP_EMAIL_SETTINGS'		=> 'Налаштування email',
	'ACP_EXTENSION_GROUPS'		=> 'Керування групами розширень вкладень',
	'ACP_EXTENSION_MANAGEMENT'	=> 'Керування розширеннями',
	'ACP_EXTENSIONS'			=> 'Керування розширеннями',

	'ACP_FORUM_BASED_PERMISSIONS'	=> 'Права на основі форуму',
	'ACP_FORUM_LOGS'				=> 'Журнали форуму',
	'ACP_FORUM_MANAGEMENT'			=> 'Керування форумами',
	'ACP_FORUM_MODERATORS'			=> 'Модератори форуму',
	'ACP_FORUM_PERMISSIONS'			=> 'Права форуму',
	'ACP_FORUM_PERMISSIONS_COPY'	=> 'Копіювати права форуму',
	'ACP_FORUM_ROLES'				=> 'Ролі форуму',

	'ACP_GENERAL_CONFIGURATION'		=> 'Загальна конфігурація',
	'ACP_GENERAL_TASKS'				=> 'Загальні завдання',
	'ACP_GLOBAL_MODERATORS'			=> 'Глобальні модератори',
	'ACP_GLOBAL_PERMISSIONS'		=> 'Загальні права',
	'ACP_GROUPS'					=> 'Групи',
	'ACP_GROUPS_FORUM_PERMISSIONS'	=> 'Права груп на форуми',
	'ACP_GROUPS_MANAGE'				=> 'Керування групами',
	'ACP_GROUPS_MANAGEMENT'			=> 'Керування групами',
	'ACP_GROUPS_PERMISSIONS'		=> 'Права груп',
	'ACP_GROUPS_POSITION'			=> 'Керування розташуванням груп',

	'ACP_HELP_PHPBB'			=> 'Підтримати phpBB',

	'ACP_ICONS'					=> 'Значки тем',
	'ACP_ICONS_SMILIES'			=> 'Значки тем/смайли',
	'ACP_INACTIVE_USERS'		=> 'Неактивні користувачі',
	'ACP_INDEX'					=> 'Головна ПА',

	'ACP_JABBER_SETTINGS'		=> 'Налаштування Jabber',

	'ACP_LANGUAGE'				=> 'Керування мовами',
	'ACP_LANGUAGE_PACKS'		=> 'Мовні пакети',
	'ACP_LOAD_SETTINGS'			=> 'Налаштування навантаження',
	'ACP_LOGGING'				=> 'Журналювання',

	'ACP_MAIN'					=> 'Головна ПА',

	'ACP_MANAGE_ATTACHMENTS'			=> 'Керування вкладеннями',
	'ACP_MANAGE_ATTACHMENTS_EXPLAIN'	=> 'Тут ви можете переглядати список і видаляти файли, вкладені до повідомлень та особистих повідомлень.',

	'ACP_MANAGE_EXTENSIONS'		=> 'Керування розширеннями вкладень',
	'ACP_MANAGE_FORUMS'			=> 'Керування форумами',
	'ACP_MANAGE_RANKS'			=> 'Керування званнями',
	'ACP_MANAGE_REASONS'		=> 'Керування причинами скарг/відхилень',
	'ACP_MANAGE_USERS'			=> 'Керування користувачами',
	'ACP_MASS_EMAIL'			=> 'Масовий лист',
	'ACP_MESSAGES'				=> 'Повідомлення',
	'ACP_MESSAGE_SETTINGS'		=> 'Налаштування особистих повідомлень',
	'ACP_MODULE_MANAGEMENT'		=> 'Керування модулями',
	'ACP_MOD_LOGS'				=> 'Журнал модератора',
	'ACP_MOD_ROLES'				=> 'Ролі модератора',

	'ACP_NO_ITEMS'				=> 'Елементів ще немає.',

	'ACP_ORPHAN_ATTACHMENTS'	=> 'Осиротілі вкладення',

	'ACP_PERMISSIONS'			=> 'Права',
	'ACP_PERMISSION_MASKS'		=> 'Маски прав',
	'ACP_PERMISSION_ROLES'		=> 'Ролі прав',
	'ACP_PERMISSION_TRACE'		=> 'Трасування прав',
	'ACP_PHP_INFO'				=> 'Інформація PHP',
	'ACP_POST_SETTINGS'			=> 'Налаштування публікацій',
	'ACP_PRUNE_FORUMS'			=> 'Очищення форумів',
	'ACP_PRUNE_USERS'			=> 'Очищення користувачів',
	'ACP_PRUNING'				=> 'Очищення',

	'ACP_QUICK_ACCESS'			=> 'Швидкий доступ',

	'ACP_RANKS'					=> 'Звання',
	'ACP_REASONS'				=> 'Причини скарг/відхилень',
	'ACP_REGISTER_SETTINGS'		=> 'Налаштування реєстрації користувачів',

	'ACP_RESTORE'				=> 'Відновлення',

	'ACP_FEED'					=> 'Керування стрічками',
	'ACP_FEED_SETTINGS'			=> 'Налаштування стрічок',

	'ACP_SEARCH'				=> 'Конфігурація пошуку',
	'ACP_SEARCH_INDEX'			=> 'Пошуковий індекс',
	'ACP_SEARCH_SETTINGS'		=> 'Налаштування пошуку',

	'ACP_SECURITY_SETTINGS'		=> 'Налаштування безпеки',
	'ACP_SERVER_CONFIGURATION'	=> 'Конфігурація сервера',
	'ACP_SERVER_SETTINGS'		=> 'Налаштування сервера',
	'ACP_SIGNATURE_SETTINGS'	=> 'Налаштування підписів',
	'ACP_SMILIES'				=> 'Смайли',
	'ACP_STYLE_MANAGEMENT'		=> 'Керування стилями',
	'ACP_STYLES'				=> 'Стилі',
	'ACP_STYLES_CACHE'			=> 'Очистити кеш',
	'ACP_STYLES_INSTALL'		=> 'Встановити стилі',

	'ACP_SUBMIT_CHANGES'		=> 'Надіслати зміни',

	'ACP_TEMPLATES'				=> 'Шаблони',
	'ACP_THEMES'				=> 'Теми',

	'ACP_UPDATE'					=> 'Оновлення',
	'ACP_USERS_FORUM_PERMISSIONS'	=> 'Права користувачів на форуми',
	'ACP_USERS_LOGS'				=> 'Журнали користувачів',
	'ACP_USERS_PERMISSIONS'			=> 'Права користувачів',
	'ACP_USER_ATTACH'				=> 'Вкладення',
	'ACP_USER_AVATAR'				=> 'Аватар',
	'ACP_USER_FEEDBACK'				=> 'Відгук',
	'ACP_USER_GROUPS'				=> 'Групи',
	'ACP_USER_MANAGEMENT'			=> 'Керування користувачами',
	'ACP_USER_OVERVIEW'				=> 'Огляд',
	'ACP_USER_PERM'					=> 'Права',
	'ACP_USER_PREFS'				=> 'Налаштування',
	'ACP_USER_PROFILE'				=> 'Профіль',
	'ACP_USER_RANK'					=> 'Звання',
	'ACP_USER_ROLES'				=> 'Ролі користувача',
	'ACP_USER_SECURITY'				=> 'Безпека користувача',
	'ACP_USER_SIG'					=> 'Підпис',
	'ACP_USER_WARNINGS'				=> 'Попередження',

	'ACP_VC_SETTINGS'					=> 'Протидія спам-ботам',
	'ACP_VC_CAPTCHA_DISPLAY'			=> 'Перегляд зображення CAPTCHA',
	'ACP_VERSION_CHECK'					=> 'Перевірити оновлення',
	'ACP_VIEW_ADMIN_PERMISSIONS'		=> 'Переглянути адміністративні права',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS'	=> 'Переглянути права модерування форуму',
	'ACP_VIEW_FORUM_PERMISSIONS'		=> 'Переглянути права на основі форуму',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS'	=> 'Переглянути права глобального модерування',
	'ACP_VIEW_USER_PERMISSIONS'			=> 'Переглянути права на основі користувача',

	'ACP_WORDS'					=> 'Цензура слів',

	'ACTION'				=> 'Дія',
	'ACTIONS'				=> 'Дії',
	'ACTIVATE'				=> 'Активувати',
	'ADD'					=> 'Додати',
	'ADMIN'					=> 'Адміністрування',
	'ADMIN_INDEX'			=> 'Головна адміністрування',
	'ADMIN_PANEL'			=> 'Панель адміністрування',

	'ADM_LOGOUT'			=> 'Вихід&nbsp;з&nbsp;ПА',
	'ADM_LOGGED_OUT'		=> 'Ви успішно вийшли з панелі адміністрування',

	'BACK'					=> 'Назад',

	'CONTAINER_EXCEPTION' => 'Під час побудови контейнера phpBB сталася помилка через встановлене розширення. З цієї причини всі розширення тимчасово вимкнено. Будь ласка, спробуйте очистити кеш форуму. Всі розширення буде автоматично повторно увімкнено, щойно помилку контейнера буде виправлено. Якщо ця помилка триває, будь ласка, відвідайте <a href="https://www.phpbb.com/support">phpBB.com</a> для отримання підтримки.',
	'EXCEPTION' => 'Виняток',

	'COLOUR_SWATCH'			=> 'Веб-безпечний зразок кольору',
	'CONFIG_UPDATED'		=> 'Конфігурацію успішно оновлено.',
	'CRON_LOCK_ERROR'		=> 'Не вдалося отримати блокування cron.',
	'CRON_NO_SUCH_TASK'		=> 'Не вдалося знайти завдання cron «%s».',
	'CRON_NO_TASK'			=> 'Наразі немає завдань cron, які потрібно виконати.',
	'CRON_NO_TASKS'			=> 'Завдань cron не знайдено.',
	'CSV_INVALID'			=> 'Надане розділене комою налаштування «%1$s» недійсне. Значення мають бути розділені лише комою, без початкових чи кінцевих роздільників.',
	'CURRENT_VERSION'		=> 'Поточна версія',

	'DEACTIVATE'				=> 'Деактивувати',
	'DIRECTORY_DOES_NOT_EXIST'	=> 'Введений шлях «%s» не існує.',
	'DIRECTORY_NOT_DIR'			=> 'Введений шлях «%s» не є текою.',
	'DIRECTORY_NOT_WRITABLE'	=> 'Введений шлях «%s» недоступний для запису.',
	'DISABLE'					=> 'Вимкнути',
	'DOWNLOAD'					=> 'Завантажити',
	'DOWNLOAD_AS'				=> 'Завантажити як',
	'DOWNLOAD_STORE'			=> 'Завантажити або зберегти файл',
	'DOWNLOAD_STORE_EXPLAIN'	=> 'Ви можете напряму завантажити файл або зберегти його у своїй теці <samp>store/</samp>.',
	'DOWNLOADS'					=> 'Завантаження',

	'EDIT'					=> 'Редагувати',
	'ENABLE'				=> 'Увімкнути',
	'EXPORT_DOWNLOAD'		=> 'Завантажити',
	'EXPORT_STORE'			=> 'Зберегти',

	'GENERAL_OPTIONS'		=> 'Загальні параметри',
	'GENERAL_SETTINGS'		=> 'Загальні налаштування',
	'GLOBAL_MASK'			=> 'Загальна маска прав',

	'INSTALL'				=> 'Встановити',
	'IP'					=> 'IP користувача',
	'IP_HOSTNAME'			=> 'IP-адреси або імена хостів',

	'LATEST_VERSION'		=> 'Остання версія',
	'LOAD_NOTIFICATIONS'			=> 'Показувати сповіщення',
	'LOAD_NOTIFICATIONS_EXPLAIN'	=> 'Показувати список сповіщень на кожній сторінці (зазвичай у шапці).',
	'LOGGED_IN_AS'			=> 'Ви увійшли як:',
	'LOGIN_ADMIN'			=> 'Щоб адмініструвати форум, вам потрібно бути автентифікованим користувачем.',
	'LOGIN_ADMIN_CONFIRM'	=> 'Щоб адмініструвати форум, вам потрібно повторно автентифікувати себе.',
	'LOGIN_ADMIN_SUCCESS'	=> 'Ви успішно автентифікувалися, і зараз вас буде перенаправлено до панелі адміністрування.',
	'LOOK_UP_FORUM'			=> 'Оберіть форум',
	'LOOK_UP_FORUMS_EXPLAIN'=> 'Ви можете обрати більше одного форуму.',

	'MANAGE'				=> 'Керування',
	'MENU_TOGGLE'			=> 'Сховати або показати бічне меню',
	'MORE'					=> 'Більше',			// Not used at the moment
	'MORE_INFORMATION'		=> 'Докладніше »',
	'MOVE_DOWN'				=> 'Перемістити вниз',
	'MOVE_UP'				=> 'Перемістити вгору',

	'NOTIFY'				=> 'Сповіщення',
	'NO_ADMIN'				=> 'Вам не дозволено адмініструвати цей форум.',
	'NO_EMAILS_DEFINED'		=> 'Дійсних email-адрес не знайдено.',
	'NO_FILES_TO_DELETE'	=> 'Вкладення, обрані вами для видалення, не існують.',
	'NO_PASSWORD_SUPPLIED'	=> 'Вам потрібно ввести свій пароль, щоб отримати доступ до панелі адміністрування.',

	'OFF'					=> 'Вимкнено',
	'ON'					=> 'Увімкнено',

	'PARSE_BBCODE'						=> 'Обробляти BBCode',
	'PARSE_SMILIES'						=> 'Обробляти смайли',
	'PARSE_URLS'						=> 'Обробляти посилання',
	'PERMISSIONS_TRANSFERRED'			=> 'Права передано',
	'PERMISSIONS_TRANSFERRED_EXPLAIN'	=> 'Наразі ви маєте права від %1$s. Ви можете переглядати форум з правами цього користувача, але не можете отримати доступ до панелі адміністрування, оскільки права адміністратора не було передано. Ви можете <a href="%2$s"><strong>повернутися до свого набору прав</strong></a> у будь-який час.',
	'PROCEED_TO_ACP'					=> '%sПерейти до ПА%s',

	'RELEASE_ANNOUNCEMENT'		=> 'Оголошення',
	'REMIND'							=> 'Нагадати',
	'REPARSE_LOCK_ERROR'				=> 'Повторна обробка вже виконується іншим процесом.',
	'RESYNC'							=> 'Синхронізувати',

	'RUNNING_TASK'			=> 'Виконання завдання: %s.',
	'SELECT_ANONYMOUS'		=> 'Обрати анонімного користувача',
	'SELECT_OPTION'			=> 'Оберіть варіант',

	'SETTING_TOO_LOW'		=> 'Надане значення для налаштування «%1$s» замале. Мінімальне допустиме значення — %2$d.',
	'SETTING_TOO_BIG'		=> 'Надане значення для налаштування «%1$s» завелике. Максимальне допустиме значення — %2$d.',
	'SETTING_TOO_LONG'		=> 'Надане значення для налаштування «%1$s» задовге. Максимальна допустима довжина — %2$d.',
	'SETTING_TOO_SHORT'		=> 'Надане значення для налаштування «%1$s» закоротке. Мінімальна допустима довжина — %2$d.',

	'SHOW_ALL_OPERATIONS'	=> 'Показати всі операції',

	'TASKS_NOT_READY'			=> 'Неготові завдання:',
	'TASKS_READY'			=> 'Готові завдання:',
	'TOTAL_SIZE'			=> 'Загальний розмір',

	'UCP'					=> 'Панель керування користувача',
	'URL_INVALID'			=> 'Надана URL-адреса для налаштування «%1$s» недійсна.',
	'URL_SCHEME_INVALID'	=> 'Надана схема «%2$s» в розділеному комою налаштуванні «%1$s» недійсна. Схема має починатися з латинського символу, за яким йдуть буквено-цифрові символи, дефіси чи крапки.',
	'USERNAMES_EXPLAIN'		=> 'Розмістіть кожне ім’я користувача в окремому рядку.',
	'USER_CONTROL_PANEL'	=> 'Панель керування користувача',

	'UPDATE_NEEDED'			=> 'Форум не актуальний.',
	'UPDATE_NOT_NEEDED'		=> 'Форум актуальний.',
	'UPDATES_AVAILABLE'		=> 'Доступні оновлення:',

	'WARNING'				=> 'Попередження',
));

// PHP info
$lang = array_merge($lang, array(
	'ACP_PHP_INFO_EXPLAIN'	=> 'Ця сторінка містить інформацію про версію PHP, встановлену на цьому сервері. Вона включає деталі завантажених модулів, доступних змінних і налаштувань за замовчуванням. Ця інформація може бути корисною під час діагностики проблем. Будь ласка, майте на увазі, що деякі хостинг-компанії обмежують, яку інформацію показано тут з міркувань безпеки. Радимо не розголошувати жодних деталей з цієї сторінки, окрім випадків, коли про це просять <a href="https://www.phpbb.com/about/team/">офіційні учасники команди</a> на форумах підтримки.',

	'NO_PHPINFO_AVAILABLE'	=> 'Не вдалося визначити інформацію про вашу конфігурацію PHP. Функцію phpinfo() вимкнено з міркувань безпеки.',
));

// Logs
$lang = array_merge($lang, array(
	'ACP_ADMIN_LOGS_EXPLAIN'	=> 'Тут перелічено всі дії, виконані адміністраторами форуму. Ви можете сортувати за іменем користувача, датою, IP чи дією. Якщо у вас є відповідні права, ви також можете очищати окремі операції або весь журнал.',
	'ACP_CRITICAL_LOGS_EXPLAIN'	=> 'Тут перелічено дії, виконані самим форумом. Цей журнал надає вам інформацію, яку можна використати для вирішення конкретних проблем, наприклад недоставку листів. Ви можете сортувати за іменем користувача, датою, IP чи дією. Якщо у вас є відповідні права, ви також можете очищати окремі операції або весь журнал.',
	'ACP_MOD_LOGS_EXPLAIN'		=> 'Тут перелічено всі дії, виконані з форумами, темами й повідомленнями, а також дії, виконані модераторами щодо користувачів, включно з блокуванням. Ви можете сортувати за іменем користувача, датою, IP чи дією. Якщо у вас є відповідні права, ви також можете очищати окремі операції або весь журнал.',
	'ACP_USERS_LOGS_EXPLAIN'	=> 'Тут перелічено всі дії, виконані користувачами або щодо користувачів (скарги, попередження та примітки користувача).',
	'ALL_ENTRIES'				=> 'Всі записи',

	'DISPLAY_LOG'	=> 'Показувати записи за попередні',

	'NO_ENTRIES'	=> 'Записів журналу за цей період немає.',

	'SORT_IP'		=> 'IP-адреса',
	'SORT_DATE'		=> 'Дата',
	'SORT_ACTION'	=> 'Дія журналу',
));

// Index page
$lang = array_merge($lang, array(
	'ADMIN_INTRO'				=> 'Дякуємо, що обрали phpBB як рішення для вашого форуму. Цей екран надає вам швидкий огляд усієї різноманітної статистики вашого форуму. Посилання ліворуч на цьому екрані дозволяють контролювати кожен аспект роботи вашого форуму. Кожна сторінка міститиме інструкції з використання інструментів.',
	'ADMIN_LOG'					=> 'Записані дії адміністратора',
	'ADMIN_LOG_INDEX_EXPLAIN'	=> 'Тут наведено огляд останніх п’яти дій, виконаних адміністраторами форуму. Повну копію журналу можна переглянути через відповідний пункт меню або перейшовши за посиланням нижче.',
	'AVATAR_DIR_SIZE'			=> 'Розмір теки аватарів',

	'BOARD_STARTED'		=> 'Форум запущено',
	'BOARD_VERSION'		=> 'Версія форуму',

	'DATABASE_SERVER_INFO'	=> 'Сервер бази даних',
	'DATABASE_SIZE'			=> 'Розмір бази даних',

	// Environment configuration checks, mbstring related
	'ERROR_MBSTRING_FUNC_OVERLOAD'					=> 'Перевантаження функцій налаштовано неправильно',
	'ERROR_MBSTRING_FUNC_OVERLOAD_EXPLAIN'			=> '<var>mbstring.func_overload</var> має бути встановлено на 0 або 4. Ви можете перевірити поточне значення на сторінці <samp>Інформація PHP</samp>.',
	'ERROR_MBSTRING_ENCODING_TRANSLATION'			=> 'Прозоре кодування символів налаштовано неправильно',
	'ERROR_MBSTRING_ENCODING_TRANSLATION_EXPLAIN'	=> '<var>mbstring.encoding_translation</var> має бути встановлено на 0. Ви можете перевірити поточне значення на сторінці <samp>Інформація PHP</samp>.',
	'ERROR_MBSTRING_HTTP_INPUT'						=> 'Перетворення вхідних символів HTTP налаштовано неправильно',
	'ERROR_MBSTRING_HTTP_INPUT_EXPLAIN'				=> '<var>mbstring.http_input</var> має залишатися порожнім. Ви можете перевірити поточне значення на сторінці <samp>Інформація PHP</samp>.',
	'ERROR_MBSTRING_HTTP_OUTPUT'					=> 'Перетворення вихідних символів HTTP налаштовано неправильно',
	'ERROR_MBSTRING_HTTP_OUTPUT_EXPLAIN'			=> '<var>mbstring.http_output</var> має залишатися порожнім. Ви можете перевірити поточне значення на сторінці <samp>Інформація PHP</samp>.',
	'ERROR_DEFAULT_CHARSET'							=> 'Кодування за замовчуванням налаштовано неправильно',
	'ERROR_DEFAULT_CHARSET_EXPLAIN'					=> '<var>default_charset</var> має бути встановлено на <samp>UTF-8</samp>. Ви можете перевірити поточне значення на сторінці <samp>Інформація PHP</samp>.',

	'FILES_PER_DAY'		=> 'Вкладень на день',
	'FORUM_STATS'		=> 'Статистика форуму',

	'GZIP_COMPRESSION'	=> 'Стиснення GZip',

	'NO_SEARCH_INDEX'	=> 'Обраний пошуковий бекенд не має пошукового індексу.<br />Будь ласка, створіть індекс для «%1$s» у розділі %2$sпошукового індексу%3$s.',
	'NOT_AVAILABLE'		=> 'Недоступно',
	'NUMBER_FILES'		=> 'Кількість вкладень',
	'NUMBER_POSTS'		=> 'Кількість повідомлень',
	'NUMBER_TOPICS'		=> 'Кількість тем',
	'NUMBER_USERS'		=> 'Кількість користувачів',
	'NUMBER_ORPHAN'		=> 'Осиротілі вкладення',

	'PHP_VERSION'		=> 'Версія PHP',
	'PHP_VERSION_OLD'	=> 'Версія PHP на цьому сервері (%1$s) більше не підтримуватиметься майбутніми версіями phpBB. Мінімальна необхідна версія — PHP %2$s. %3$sДеталі%4$s',

	'POSTS_PER_DAY'		=> 'Повідомлень на день',

	'PURGE_CACHE'			=> 'Очистити кеш',
	'PURGE_CACHE_CONFIRM'	=> 'Ви впевнені, що бажаєте очистити кеш?',
	'PURGE_CACHE_EXPLAIN'	=> 'Очищує всі елементи, пов’язані з кешем, включно з будь-якими кешованими файлами шаблонів чи запитами.',
	'PURGE_CACHE_SUCCESS'	=> 'Кеш успішно очищено.',

	'PURGE_SESSIONS'			=> 'Очистити всі сеанси',
	'PURGE_SESSIONS_CONFIRM'	=> 'Ви впевнені, що бажаєте очистити всі сеанси? Це виведе з системи всіх користувачів.',
	'PURGE_SESSIONS_EXPLAIN'	=> 'Очищує всі сеанси. Це виведе з системи всіх користувачів шляхом очищення таблиці сеансів.',
	'PURGE_SESSIONS_SUCCESS'	=> 'Сеанси успішно очищено.',

	'RESET_DATE'					=> 'Скинути дату запуску форуму',
	'RESET_DATE_CONFIRM'			=> 'Ви впевнені, що бажаєте скинути дату запуску форуму?',
	'RESET_DATE_SUCCESS'				=> 'Дату запуску форуму скинуто',
	'RESET_ONLINE'					=> 'Скинути рекорд найбільшої кількості онлайн',
	'RESET_ONLINE_CONFIRM'			=> 'Ви впевнені, що бажаєте скинути лічильник найбільшої кількості користувачів онлайн?',
	'RESET_ONLINE_SUCCESS'				=> 'Рекорд найбільшої кількості онлайн скинуто',
	'RESYNC_POSTCOUNTS'				=> 'Синхронізувати кількість повідомлень',
	'RESYNC_POSTCOUNTS_EXPLAIN'		=> 'Враховуватимуться лише наявні повідомлення. Очищені повідомлення не будуть підраховані.',
	'RESYNC_POSTCOUNTS_CONFIRM'		=> 'Ви впевнені, що бажаєте синхронізувати кількість повідомлень?',
	'RESYNC_POSTCOUNTS_SUCCESS'			=> 'Кількість повідомлень синхронізовано',
	'RESYNC_POST_MARKING'			=> 'Синхронізувати позначені крапкою теми',
	'RESYNC_POST_MARKING_CONFIRM'	=> 'Ви впевнені, що бажаєте синхронізувати позначені крапкою теми?',
	'RESYNC_POST_MARKING_EXPLAIN'	=> 'Спочатку знімає позначки з усіх тем, а потім коректно позначає теми, у яких була будь-яка активність протягом останніх шести місяців.',
	'RESYNC_POST_MARKING_SUCCESS'	=> 'Позначені крапкою теми синхронізовано',
	'RESYNC_STATS'					=> 'Синхронізувати статистику',
	'RESYNC_STATS_CONFIRM'			=> 'Ви впевнені, що бажаєте синхронізувати статистику?',
	'RESYNC_STATS_EXPLAIN'			=> 'Перераховує загальну кількість повідомлень, тем, користувачів і файлів.',
	'RESYNC_STATS_SUCCESS'			=> 'Статистику синхронізовано',
	'RUN'							=> 'Запустити зараз',

	'STATISTIC'					=> 'Статистика',
	'STATISTIC_RESYNC_OPTIONS'	=> 'Синхронізувати або скинути статистику',

	'TIMEZONE_INVALID'	=> 'Обраний вами часовий пояс недійсний.',
	'TIMEZONE_SELECTED'	=> '(наразі обрано)',
	'TOPICS_PER_DAY'	=> 'Тем на день',

	'UPLOAD_DIR_SIZE'	=> 'Розмір надісланих вкладень',
	'USERS_PER_DAY'		=> 'Користувачів на день',

	'VALUE'							=> 'Значення',
	'VERSIONCHECK_FAIL'				=> 'Не вдалося отримати інформацію про останню версію.',
	'VERSIONCHECK_FORCE_UPDATE'		=> 'Перевірити версію знову',
	'VERSION_CHECK'					=> 'Перевірка версії',
	'VERSION_CHECK_EXPLAIN'			=> 'Перевіряє, чи актуальне ваше встановлення phpBB.',
	'VERSIONCHECK_INVALID_ENTRY'	=> 'Інформація про останню версію містить непідтримуваний запис.',
	'VERSIONCHECK_INVALID_URL'		=> 'Інформація про останню версію містить недійсну URL-адресу.',
	'VERSIONCHECK_INVALID_VERSION'	=> 'Інформація про останню версію містить недійсну версію.',
	'VERSION_NOT_UP_TO_DATE_ACP'	=> 'Ваше встановлення phpBB не актуальне.<br />Нижче наведено посилання на оголошення про випуск, яке містить додаткову інформацію, а також інструкції з оновлення.',
	'VERSION_NOT_UP_TO_DATE_TITLE'	=> 'Ваше встановлення phpBB не актуальне.',
	'VERSION_UP_TO_DATE_ACP'		=> 'Ваше встановлення phpBB актуальне. Наразі оновлень немає.',
	'VIEW_ADMIN_LOG'				=> 'Переглянути журнал адміністратора',
	'VIEW_INACTIVE_USERS'			=> 'Переглянути неактивних користувачів',

	'WELCOME_PHPBB'			=> 'Ласкаво просимо до phpBB',
	'WRITABLE_CONFIG'		=> 'Ваш файл конфігурації (config.php) наразі доступний для запису будь-ким. Ми наполегливо радимо змінити права доступу на 640 або принаймні на 644 (наприклад: <a href="http://en.wikipedia.org/wiki/Chmod" rel="external">chmod</a> 640 config.php).',
));

// Inactive Users
$lang = array_merge($lang, array(
	'INACTIVE_DATE'					=> 'Дата деактивації',
	'INACTIVE_REASON'				=> 'Причина',
	'INACTIVE_REASON_MANUAL'		=> 'Обліковий запис деактивовано адміністратором',
	'INACTIVE_REASON_PROFILE'		=> 'Дані профілю змінено',
	'INACTIVE_REASON_REGISTER'		=> 'Новозареєстрований обліковий запис',
	'INACTIVE_REASON_REMIND'		=> 'Примусова реактивація облікового запису',
	'INACTIVE_REASON_UNKNOWN'		=> 'Невідомо',
	'INACTIVE_USERS'				=> 'Неактивні користувачі',
	'INACTIVE_USERS_EXPLAIN'		=> 'Це список користувачів, які зареєструвалися, але чиї облікові записи неактивні. Ви можете активувати, видалити або нагадати (надіславши лист) цим користувачам, якщо бажаєте.',
	'INACTIVE_USERS_EXPLAIN_INDEX'	=> 'Це список останніх 10 зареєстрованих користувачів з неактивними обліковими записами. Облікові записи неактивні або тому, що активацію облікового запису було увімкнено в налаштуваннях реєстрації користувачів і облікові записи цих користувачів ще не активовано, або тому, що ці облікові записи було деактивовано. Повний список доступний за посиланням нижче, звідки ви можете активувати, видалити або нагадати (надіславши лист) цим користувачам, якщо бажаєте.',

	'NO_INACTIVE_USERS'	=> 'Неактивних користувачів немає',

	'SORT_INACTIVE'		=> 'Дата деактивації',
	'SORT_LAST_VISIT'	=> 'Останнє відвідування',
	'SORT_REASON'		=> 'Причина',
	'SORT_REG_DATE'		=> 'Дата реєстрації',
	'SORT_LAST_REMINDER'=> 'Останнє нагадування',
	'SORT_REMINDER'		=> 'Нагадування надіслано',

	'USER_IS_INACTIVE'		=> 'Користувач неактивний',
));

// Help support phpBB page
$lang = array_merge($lang, array(
	'EXPLAIN_SEND_STATISTICS'	=> 'Будь ласка, надішліть інформацію про конфігурацію вашого сервера й форуму до phpBB для статистичного аналізу. Всю інформацію, яка могла б ідентифікувати вас чи ваш вебсайт, видалено — дані повністю <strong>анонімні</strong>. Ми базуємо рішення щодо майбутніх версій phpBB на цій інформації. Статистику оприлюднюють. Ми також ділимося цими даними з проєктом PHP — мовою програмування, якою написано phpBB.',
	'EXPLAIN_SHOW_STATISTICS'	=> 'За допомогою кнопки нижче ви можете переглянути всі змінні, які буде передано.',
	'DONT_SEND_STATISTICS'		=> 'Повернутися до ПА, якщо ви не бажаєте надсилати статистичну інформацію до phpBB.',
	'GO_ACP_MAIN'				=> 'Перейти до початкової сторінки ПА',
	'HIDE_STATISTICS'			=> 'Сховати деталі',
	'SEND_STATISTICS'			=> 'Надіслати статистику',
	'SEND_STATISTICS_LONG'		=> 'Надіслати статистичну інформацію',
	'SHOW_STATISTICS'			=> 'Показати деталі',
	'THANKS_SEND_STATISTICS'	=> 'Дякуємо за надання вашої інформації.',
	'FAIL_SEND_STATISTICS'		=> 'phpBB не вдалося надіслати статистику',
));

// Log Entries
$lang = array_merge($lang, array(
	'LOG_ACL_ADD_USER_GLOBAL_U_'		=> '<strong>Додано або відредаговано права користувача для користувачів</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_U_'		=> '<strong>Додано або відредаговано права користувача для груп</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_M_'		=> '<strong>Додано або відредаговано права глобального модератора для користувачів</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_M_'		=> '<strong>Додано або відредаговано права глобального модератора для груп</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_A_'		=> '<strong>Додано або відредаговано права адміністратора для користувачів</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_A_'		=> '<strong>Додано або відредаговано права адміністратора для груп</strong><br />» %s',

	'LOG_ACL_ADD_ADMIN_GLOBAL_A_'		=> '<strong>Додано або відредаговано адміністраторів</strong><br />» %s',
	'LOG_ACL_ADD_MOD_GLOBAL_M_'			=> '<strong>Додано або відредаговано глобальних модераторів</strong><br />» %s',

	'LOG_ACL_ADD_USER_LOCAL_F_'			=> '<strong>Додано або відредаговано доступ користувачів до форуму</strong> %1$s<br />» %2$s',
	'LOG_ACL_ADD_USER_LOCAL_M_'			=> '<strong>Додано або відредаговано доступ модератора форуму для користувачів</strong> %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_F_'		=> '<strong>Додано або відредаговано доступ груп до форуму</strong> %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_M_'		=> '<strong>Додано або відредаговано доступ модератора форуму для груп</strong> %1$s<br />» %2$s',

	'LOG_ACL_ADD_MOD_LOCAL_M_'			=> '<strong>Додано або відредаговано модераторів</strong> для %1$s<br />» %2$s',
	'LOG_ACL_ADD_FORUM_LOCAL_F_'		=> '<strong>Додано або відредаговано права форуму</strong> для %1$s<br />» %2$s',

	'LOG_ACL_DEL_ADMIN_GLOBAL_A_'		=> '<strong>Видалено адміністраторів</strong><br />» %s',
	'LOG_ACL_DEL_MOD_GLOBAL_M_'			=> '<strong>Видалено глобальних модераторів</strong><br />» %s',
	'LOG_ACL_DEL_MOD_LOCAL_M_'			=> '<strong>Видалено модераторів</strong> з %1$s<br />» %2$s',
	'LOG_ACL_DEL_FORUM_LOCAL_F_'		=> '<strong>Видалено права користувача/групи на форум</strong> з %1$s<br />» %2$s',

	'LOG_ACL_TRANSFER_PERMISSIONS'		=> '<strong>Права передано від</strong><br />» %s',
	'LOG_ACL_RESTORE_PERMISSIONS'		=> '<strong>Власні права відновлено після використання прав від</strong><br />» %s',

	'LOG_ADMIN_AUTH_FAIL'		=> '<strong>Невдала спроба входу адміністратора</strong>',
	'LOG_ADMIN_AUTH_SUCCESS'	=> '<strong>Успішний вхід адміністратора</strong>',

	'LOG_ATTACHMENTS_DELETED'	=> '<strong>Видалено вкладення користувача</strong><br />» %s',

	'LOG_ATTACH_EXT_ADD'		=> '<strong>Додано або відредаговано розширення вкладень</strong><br />» %s',
	'LOG_ATTACH_EXT_DEL'		=> '<strong>Видалено розширення вкладень</strong><br />» %s',
	'LOG_ATTACH_EXT_UPDATE'		=> '<strong>Оновлено розширення вкладень</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_ADD'	=> '<strong>Додано групу розширень</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_EDIT'	=> '<strong>Відредаговано групу розширень</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_DEL'	=> '<strong>Видалено групу розширень</strong><br />» %s',
	'LOG_ATTACH_FILEUPLOAD'		=> '<strong>Осиротілий файл завантажено до повідомлення</strong><br />» ID %1$d - %2$s',
	'LOG_ATTACH_ORPHAN_DEL'		=> '<strong>Осиротілі файли видалено</strong><br />» %s',

	'LOG_BAN_EXCLUDE_USER'	=> '<strong>Користувача виключено з блокування</strong> з причини «<em>%1$s</em>»<br />» %2$s',
	'LOG_BAN_EXCLUDE_IP'	=> '<strong>IP виключено з блокування</strong> з причини «<em>%1$s</em>»<br />» %2$s',
	'LOG_BAN_EXCLUDE_EMAIL' => '<strong>Email виключено з блокування</strong> з причини «<em>%1$s</em>»<br />» %2$s',
	'LOG_BAN_USER'			=> '<strong>Користувача заблоковано</strong> з причини «<em>%1$s</em>»<br />» %2$s',
	'LOG_BAN_IP'			=> '<strong>IP заблоковано</strong> з причини «<em>%1$s</em>»<br />» %2$s',
	'LOG_BAN_EMAIL'			=> '<strong>Email заблоковано</strong> з причини «<em>%1$s</em>»<br />» %2$s',
	'LOG_UNBAN_USER'		=> '<strong>Блокування користувача скасовано</strong><br />» %s',
	'LOG_UNBAN_IP'			=> '<strong>Блокування IP скасовано</strong><br />» %s',
	'LOG_UNBAN_EMAIL'		=> '<strong>Блокування email скасовано</strong><br />» %s',

	'LOG_BBCODE_ADD'		=> '<strong>Додано новий BBCode</strong><br />» %s',
	'LOG_BBCODE_EDIT'		=> '<strong>Відредаговано BBCode</strong><br />» %s',
	'LOG_BBCODE_DELETE'		=> '<strong>Видалено BBCode</strong><br />» %s',
	'LOG_BBCODE_CONFIGURATION_ERROR'	=> '<strong>Помилка під час налаштування BBCode</strong>: %1$s<br />» %2$s',

	'LOG_BOT_ADDED'		=> '<strong>Додано нового бота</strong><br />» %s',
	'LOG_BOT_DELETE'	=> '<strong>Видалено бота</strong><br />» %s',
	'LOG_BOT_UPDATED'	=> '<strong>Наявного бота оновлено</strong><br />» %s',

	'LOG_CLEAR_ADMIN'		=> '<strong>Журнал адміністратора очищено</strong>',
	'LOG_CLEAR_CRITICAL'	=> '<strong>Журнал помилок очищено</strong>',
	'LOG_CLEAR_MOD'			=> '<strong>Журнал модератора очищено</strong>',
	'LOG_CLEAR_USER'		=> '<strong>Журнал користувача очищено</strong><br />» %s',
	'LOG_CLEAR_USERS'		=> '<strong>Журнали користувачів очищено</strong>',

	'LOG_CONFIG_ATTACH'			=> '<strong>Змінено налаштування вкладень</strong>',
	'LOG_CONFIG_AUTH'			=> '<strong>Змінено налаштування автентифікації</strong>',
	'LOG_CONFIG_AVATAR'			=> '<strong>Змінено налаштування аватарів</strong>',
	'LOG_CONFIG_COOKIE'			=> '<strong>Змінено налаштування cookie</strong>',
	'LOG_CONFIG_EMAIL'			=> '<strong>Змінено налаштування email</strong>',
	'LOG_CONFIG_FEATURES'		=> '<strong>Змінено функції форуму</strong>',
	'LOG_CONFIG_LOAD'			=> '<strong>Змінено налаштування навантаження</strong>',
	'LOG_CONFIG_MESSAGE'		=> '<strong>Змінено налаштування особистих повідомлень</strong>',
	'LOG_CONFIG_POST'			=> '<strong>Змінено налаштування публікацій</strong>',
	'LOG_CONFIG_REGISTRATION'	=> '<strong>Змінено налаштування реєстрації користувачів</strong>',
	'LOG_CONFIG_FEED'			=> '<strong>Змінено налаштування стрічок синдикації</strong>',
	'LOG_CONFIG_SEARCH'			=> '<strong>Змінено налаштування пошуку</strong>',
	'LOG_CONFIG_SECURITY'		=> '<strong>Змінено налаштування безпеки</strong>',
	'LOG_CONFIG_SERVER'			=> '<strong>Змінено налаштування сервера</strong>',
	'LOG_CONFIG_SETTINGS'		=> '<strong>Змінено налаштування форуму</strong>',
	'LOG_CONFIG_SIGNATURE'		=> '<strong>Змінено налаштування підписів</strong>',
	'LOG_CONFIG_VISUAL'			=> '<strong>Змінено налаштування протидії спам-ботам</strong>',

	'LOG_APPROVE_TOPIC'			=> '<strong>Тему схвалено</strong><br />» %s',
	'LOG_BUMP_TOPIC'			=> '<strong>Користувач підняв тему</strong><br />» %s',
	'LOG_DELETE_POST'			=> '<strong>Видалено повідомлення «%1$s», написане «%2$s», з наступної причини</strong><br />» %3$s',
	'LOG_DELETE_SHADOW_TOPIC'	=> '<strong>Видалено тему-тінь</strong><br />» %s',
	'LOG_DELETE_TOPIC'			=> '<strong>Видалено тему «%1$s», написану «%2$s», з наступної причини</strong><br />» %3$s',
	'LOG_FORK'					=> '<strong>Тему скопійовано</strong><br />» з %s',
	'LOG_LOCK'					=> '<strong>Тему закрито</strong><br />» %s',
	'LOG_LOCK_POST'				=> '<strong>Повідомлення заблоковано</strong><br />» %s',
	'LOG_MERGE'					=> '<strong>Повідомлення об’єднано</strong> в тему<br />» %s',
	'LOG_MOVE'					=> '<strong>Тему переміщено</strong><br />» з %1$s до %2$s',
	'LOG_MOVED_TOPIC'			=> '<strong>Тему переміщено</strong><br />» %s',
	'LOG_PM_REPORT_CLOSED'		=> '<strong>Скаргу на ОП закрито</strong><br />» %s',
	'LOG_PM_REPORT_DELETED'		=> '<strong>Скаргу на ОП видалено</strong><br />» %s',
	'LOG_POST_APPROVED'			=> '<strong>Повідомлення схвалено</strong><br />» %s',
	'LOG_POST_DISAPPROVED'		=> '<strong>Повідомлення «%1$s», написане «%3$s», відхилено з наступної причини</strong><br />» %2$s',
	'LOG_POST_EDITED'			=> '<strong>Повідомлення «%1$s», написане «%2$s», відредаговано з наступної причини</strong><br />» %3$s',
	'LOG_POST_RESTORED'			=> '<strong>Повідомлення відновлено</strong><br />» %s',
	'LOG_REPORT_CLOSED'			=> '<strong>Скаргу закрито</strong><br />» %s',
	'LOG_REPORT_DELETED'		=> '<strong>Скаргу видалено</strong><br />» %s',
	'LOG_RESTORE_TOPIC'			=> '<strong>Відновлено тему «%1$s», написану</strong><br />» %2$s',
	'LOG_SOFTDELETE_POST'		=> '<strong>Умовно видалено повідомлення «%1$s», написане «%2$s», з наступної причини</strong><br />» %3$s',
	'LOG_SOFTDELETE_TOPIC'		=> '<strong>Умовно видалено тему «%1$s», написану «%2$s», з наступної причини</strong><br />» %3$s',
	'LOG_SPLIT_DESTINATION'		=> '<strong>Розділені повідомлення переміщено</strong><br />» до %s',
	'LOG_SPLIT_SOURCE'			=> '<strong>Повідомлення розділено</strong><br />» з %s',

	'LOG_TOPIC_APPROVED'		=> '<strong>Тему схвалено</strong><br />» %s',
	'LOG_TOPIC_RESTORED'		=> '<strong>Тему відновлено</strong><br />» %s',
	'LOG_TOPIC_DISAPPROVED'		=> '<strong>Тему «%1$s», написану «%3$s», відхилено з наступної причини</strong><br />» %2$s',
	'LOG_TOPIC_RESYNC'			=> '<strong>Лічильники теми синхронізовано</strong><br />» %s',
	'LOG_TOPIC_TYPE_CHANGED'	=> '<strong>Тип теми змінено</strong><br />» %s',
	'LOG_UNLOCK'				=> '<strong>Тему відкрито</strong><br />» %s',
	'LOG_UNLOCK_POST'			=> '<strong>Повідомлення розблоковано</strong><br />» %s',

	'LOG_DISALLOW_ADD'		=> '<strong>Додано заборонене ім’я користувача</strong><br />» %s',
	'LOG_DISALLOW_DELETE'	=> '<strong>Видалено заборонене ім’я користувача</strong>',

	'LOG_DB_BACKUP'			=> '<strong>Резервна копія бази даних</strong>',
	'LOG_DB_DELETE'			=> '<strong>Резервну копію бази даних видалено</strong>',
	'LOG_DB_RESTORE'		=> '<strong>Резервну копію бази даних відновлено</strong>',

	'LOG_DOWNLOAD_EXCLUDE_IP'	=> '<strong>IP/ім’я хоста виключено зі списку завантаження</strong><br />» %s',
	'LOG_DOWNLOAD_IP'			=> '<strong>IP/ім’я хоста додано до списку завантаження</strong><br />» %s',
	'LOG_DOWNLOAD_REMOVE_IP'	=> '<strong>IP/ім’я хоста видалено зі списку завантаження</strong><br />» %s',

	'LOG_ERROR_JABBER'		=> '<strong>Помилка Jabber</strong><br />» %s',
	'LOG_ERROR_EMAIL'		=> '<strong>Помилка email</strong><br />» %s',
	'LOG_ERROR_CAPTCHA'		=> '<strong>Помилка CAPTCHA</strong><br />» %s',

	'LOG_FORUM_ADD'							=> '<strong>Створено новий форум</strong><br />» %s',
	'LOG_FORUM_COPIED_PERMISSIONS'			=> '<strong>Скопійовано права форуму</strong> з %1$s<br />» %2$s',
	'LOG_FORUM_DEL_FORUM'					=> '<strong>Форум видалено</strong><br />» %s',
	'LOG_FORUM_DEL_FORUMS'					=> '<strong>Форум і його підфоруми видалено</strong><br />» %s',
	'LOG_FORUM_DEL_MOVE_FORUMS'				=> '<strong>Форум видалено, підфоруми переміщено</strong> до %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS'				=> '<strong>Форум видалено, повідомлення переміщено</strong> до %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_FORUMS'		=> '<strong>Форум і його підфоруми видалено, повідомлення переміщено</strong> до %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_MOVE_FORUMS'	=> '<strong>Форум видалено, повідомлення переміщено</strong> до %1$s <strong>і підфоруми</strong> до %2$s<br />» %3$s',
	'LOG_FORUM_DEL_POSTS'					=> '<strong>Форум і його повідомлення видалено</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_FORUMS'			=> '<strong>Форум, його повідомлення й підфоруми видалено</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_MOVE_FORUMS'		=> '<strong>Форум і його повідомлення видалено, підфоруми переміщено</strong> до %1$s<br />» %2$s',
	'LOG_FORUM_EDIT'						=> '<strong>Дані форуму відредаговано</strong><br />» %s',
	'LOG_FORUM_MOVE_DOWN'					=> '<strong>Форум переміщено</strong> %1$s <strong>нижче</strong> %2$s',
	'LOG_FORUM_MOVE_UP'						=> '<strong>Форум переміщено</strong> %1$s <strong>вище</strong> %2$s',
	'LOG_FORUM_SYNC'						=> '<strong>Форум повторно синхронізовано</strong><br />» %s',

	'LOG_GENERAL_ERROR'	=> '<strong>Сталася загальна помилка</strong>: %1$s <br />» %2$s',

	'LOG_GROUP_CREATED'		=> '<strong>Створено нову групу користувачів</strong><br />» %s',
	'LOG_GROUP_DEFAULTS'	=> '<strong>Групу «%1$s» зроблено основною для учасників</strong><br />» %2$s',
	'LOG_GROUP_DELETE'		=> '<strong>Групу користувачів видалено</strong><br />» %s',
	'LOG_GROUP_DEMOTED'		=> '<strong>Лідерів понижено в групі користувачів</strong> %1$s<br />» %2$s',
	'LOG_GROUP_PROMOTED'	=> '<strong>Учасників підвищено до лідера в групі користувачів</strong> %1$s<br />» %2$s',
	'LOG_GROUP_REMOVE'		=> '<strong>Учасників видалено з групи користувачів</strong> %1$s<br />» %2$s',
	'LOG_GROUP_UPDATED'		=> '<strong>Дані групи користувачів оновлено</strong><br />» %s',
	'LOG_MODS_ADDED'		=> '<strong>Додано нових лідерів до групи користувачів</strong> %1$s<br />» %2$s',
	'LOG_USERS_ADDED'		=> '<strong>Додано нових учасників до групи користувачів</strong> %1$s<br />» %2$s',
	'LOG_USERS_APPROVED'	=> '<strong>Користувачів схвалено в групі користувачів</strong> %1$s<br />» %2$s',
	'LOG_USERS_PENDING'		=> '<strong>Користувачі надіслали запит на приєднання до групи «%1$s» і потребують схвалення</strong><br />» %2$s',

	'LOG_IMAGE_GENERATION_ERROR'	=> '<strong>Помилка під час створення зображення</strong><br />» Помилка в %1$s у рядку %2$s: %3$s',

	'LOG_INACTIVE_ACTIVATE'	=> '<strong>Неактивних користувачів активовано</strong><br />» %s',
	'LOG_INACTIVE_DELETE'	=> '<strong>Неактивних користувачів видалено</strong><br />» %s',
	'LOG_INACTIVE_REMIND'	=> '<strong>Листи-нагадування надіслано неактивним користувачам</strong><br />» %s',
	'LOG_INSTALL_CONVERTED'	=> '<strong>Конвертовано з %1$s до phpBB %2$s</strong>',
	'LOG_INSTALL_INSTALLED'	=> '<strong>Встановлено phpBB %s</strong>',

	'LOG_IP_BROWSER_FORWARDED_CHECK'	=> '<strong>Перевірку IP/браузера/X_FORWARDED_FOR сеансу не пройдено</strong><br />»IP користувача «<em>%1$s</em>» перевірено проти IP сеансу «<em>%2$s</em>», рядок браузера користувача «<em>%3$s</em>» перевірено проти рядка браузера сеансу «<em>%4$s</em>», а рядок X_FORWARDED_FOR користувача «<em>%5$s</em>» перевірено проти рядка X_FORWARDED_FOR сеансу «<em>%6$s</em>».',

	'LOG_JAB_CHANGED'			=> '<strong>Обліковий запис Jabber змінено</strong>',
	'LOG_JAB_PASSCHG'			=> '<strong>Пароль Jabber змінено</strong>',
	'LOG_JAB_REGISTER'			=> '<strong>Обліковий запис Jabber зареєстровано</strong>',
	'LOG_JAB_SETTINGS_CHANGED'	=> '<strong>Налаштування Jabber змінено</strong>',

	'LOG_LANGUAGE_PACK_DELETED'		=> '<strong>Мовний пакет видалено</strong><br />» %s',
	'LOG_LANGUAGE_PACK_INSTALLED'	=> '<strong>Мовний пакет встановлено</strong><br />» %s',
	'LOG_LANGUAGE_PACK_UPDATED'		=> '<strong>Дані мовного пакета оновлено</strong><br />» %s',
	'LOG_LANGUAGE_FILE_REPLACED'	=> '<strong>Мовний файл замінено</strong><br />» %s',
	'LOG_LANGUAGE_FILE_SUBMITTED'	=> '<strong>Мовний файл надіслано та розміщено в теці зберігання</strong><br />» %s',

	'LOG_MASS_EMAIL'		=> '<strong>Масовий лист надіслано</strong><br />» %s',

	'LOG_MCP_CHANGE_POSTER'	=> '<strong>Змінено автора в темі «%1$s»</strong><br />» з %2$s на %3$s',

	'LOG_MODULE_DISABLE'	=> '<strong>Модуль вимкнено</strong><br />» %s',
	'LOG_MODULE_ENABLE'		=> '<strong>Модуль увімкнено</strong><br />» %s',
	'LOG_MODULE_MOVE_DOWN'	=> '<strong>Модуль переміщено вниз</strong><br />» %1$s нижче %2$s',
	'LOG_MODULE_MOVE_UP'	=> '<strong>Модуль переміщено вгору</strong><br />» %1$s вище %2$s',
	'LOG_MODULE_REMOVED'	=> '<strong>Модуль видалено</strong><br />» %s',
	'LOG_MODULE_ADD'		=> '<strong>Модуль додано</strong><br />» %s',
	'LOG_MODULE_EDIT'		=> '<strong>Модуль відредаговано</strong><br />» %s',

	'LOG_A_ROLE_ADD'		=> '<strong>Роль адміністратора додано</strong><br />» %s',
	'LOG_A_ROLE_EDIT'		=> '<strong>Роль адміністратора відредаговано</strong><br />» %s',
	'LOG_A_ROLE_REMOVED'	=> '<strong>Роль адміністратора видалено</strong><br />» %s',
	'LOG_F_ROLE_ADD'		=> '<strong>Роль форуму додано</strong><br />» %s',
	'LOG_F_ROLE_EDIT'		=> '<strong>Роль форуму відредаговано</strong><br />» %s',
	'LOG_F_ROLE_REMOVED'	=> '<strong>Роль форуму видалено</strong><br />» %s',
	'LOG_M_ROLE_ADD'		=> '<strong>Роль модератора додано</strong><br />» %s',
	'LOG_M_ROLE_EDIT'		=> '<strong>Роль модератора відредаговано</strong><br />» %s',
	'LOG_M_ROLE_REMOVED'	=> '<strong>Роль модератора видалено</strong><br />» %s',
	'LOG_U_ROLE_ADD'		=> '<strong>Роль користувача додано</strong><br />» %s',
	'LOG_U_ROLE_EDIT'		=> '<strong>Роль користувача відредаговано</strong><br />» %s',
	'LOG_U_ROLE_REMOVED'	=> '<strong>Роль користувача видалено</strong><br />» %s',

	'LOG_PLUPLOAD_TIDY_FAILED'		=> '<strong>Не вдалося відкрити %1$s для очищення, перевірте права доступу.</strong><br />Виняток: %2$s<br />Трасування: %3$s',

	'LOG_PROFILE_FIELD_ACTIVATE'	=> '<strong>Поле профілю активовано</strong><br />» %s',
	'LOG_PROFILE_FIELD_CREATE'		=> '<strong>Поле профілю додано</strong><br />» %s',
	'LOG_PROFILE_FIELD_DEACTIVATE'	=> '<strong>Поле профілю деактивовано</strong><br />» %s',
	'LOG_PROFILE_FIELD_EDIT'		=> '<strong>Поле профілю змінено</strong><br />» %s',
	'LOG_PROFILE_FIELD_REMOVED'		=> '<strong>Поле профілю видалено</strong><br />» %s',

	'LOG_PRUNE'					=> '<strong>Форуми очищено</strong><br />» %s',
	'LOG_AUTO_PRUNE'			=> '<strong>Форуми автоочищено</strong><br />» %s',
	'LOG_PRUNE_SHADOW'		=> '<strong>Теми-тіні автоочищено</strong><br />» %s',
	'LOG_PRUNE_USER_DEAC'		=> '<strong>Користувачів деактивовано</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_DEL'	=> '<strong>Користувачів очищено, повідомлення видалено</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_ANON'	=> '<strong>Користувачів очищено, повідомлення збережено</strong><br />» %s',

	'LOG_PURGE_CACHE'			=> '<strong>Кеш очищено</strong>',
	'LOG_PURGE_SESSIONS'		=> '<strong>Сеанси очищено</strong>',

	'LOG_RANK_ADDED'		=> '<strong>Додано нове звання</strong><br />» %s',
	'LOG_RANK_REMOVED'		=> '<strong>Звання видалено</strong><br />» %s',
	'LOG_RANK_UPDATED'		=> '<strong>Звання оновлено</strong><br />» %s',

	'LOG_REASON_ADDED'		=> '<strong>Додано причину скарги/відхилення</strong><br />» %s',
	'LOG_REASON_REMOVED'	=> '<strong>Причину скарги/відхилення видалено</strong><br />» %s',
	'LOG_REASON_UPDATED'	=> '<strong>Причину скарги/відхилення оновлено</strong><br />» %s',

	'LOG_REFERER_INVALID'		=> '<strong>Перевірку реферера не пройдено</strong><br />»Реферером було «<em>%1$s</em>». Запит відхилено, а сеанс завершено.',
	'LOG_RESET_DATE'			=> '<strong>Дату запуску форуму скинуто</strong>',
	'LOG_RESET_ONLINE'			=> '<strong>Рекорд найбільшої кількості онлайн скинуто</strong>',
	'LOG_RESYNC_FILES_STATS'	=> '<strong>Статистику файлів синхронізовано</strong>',
	'LOG_RESYNC_POSTCOUNTS'		=> '<strong>Кількість повідомлень користувачів синхронізовано</strong>',
	'LOG_RESYNC_POST_MARKING'	=> '<strong>Позначені крапкою теми синхронізовано</strong>',
	'LOG_RESYNC_STATS'			=> '<strong>Статистику повідомлень, тем і користувачів синхронізовано</strong>',

	'LOG_SEARCH_INDEX_CREATED'	=> '<strong>Створено пошуковий індекс для</strong><br />» %s',
	'LOG_SEARCH_INDEX_REMOVED'	=> '<strong>Видалено пошуковий індекс для</strong><br />» %s',
	'LOG_SPHINX_ERROR'			=> '<strong>Помилка Sphinx</strong><br />» %s',

	'LOG_SPAMHAUS_OPEN_RESOLVER'		=> 'Spamhaus не дозволяє запити з використанням відкритого резолвера. Перевірку чорного списку вимкнено. Докладнішу інформацію див. на https://www.spamhaus.com/product/help-for-spamhaus-public-mirror-users/.',
	'LOG_SPAMHAUS_VOLUME_LIMIT'			=> 'Перевищено ліміт обсягу запитів Spamhaus. Перевірку чорного списку вимкнено. Докладнішу інформацію див. на https://www.spamhaus.com/product/help-for-spamhaus-public-mirror-users/.',

	'LOG_STYLE_ADD'				=> '<strong>Додано новий стиль</strong><br />» %s',
	'LOG_STYLE_DELETE'			=> '<strong>Стиль видалено</strong><br />» %s',
	'LOG_STYLE_EDIT_DETAILS'	=> '<strong>Стиль відредаговано</strong><br />» %s',
	'LOG_STYLE_EXPORT'			=> '<strong>Стиль експортовано</strong><br />» %s',

	// @deprecated 3.1
	'LOG_TEMPLATE_ADD_DB'			=> '<strong>Додано новий набір шаблонів до бази даних</strong><br />» %s',
	// @deprecated 3.1
	'LOG_TEMPLATE_ADD_FS'			=> '<strong>Додано новий набір шаблонів у файловій системі</strong><br />» %s',
	'LOG_TEMPLATE_CACHE_CLEARED'	=> '<strong>Видалено кешовані версії файлів шаблону в наборі шаблонів <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_DELETE'			=> '<strong>Набір шаблонів видалено</strong><br />» %s',
	'LOG_TEMPLATE_EDIT'				=> '<strong>Відредаговано набір шаблонів <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_EDIT_DETAILS'		=> '<strong>Дані шаблону відредаговано</strong><br />» %s',
	'LOG_TEMPLATE_EXPORT'			=> '<strong>Набір шаблонів експортовано</strong><br />» %s',
	// @deprecated 3.1
	'LOG_TEMPLATE_REFRESHED'		=> '<strong>Набір шаблонів оновлено</strong><br />» %s',

	// @deprecated 3.1
	'LOG_THEME_ADD_DB'			=> '<strong>Додано нову тему до бази даних</strong><br />» %s',
	// @deprecated 3.1
	'LOG_THEME_ADD_FS'			=> '<strong>Додано нову тему у файловій системі</strong><br />» %s',
	'LOG_THEME_DELETE'			=> '<strong>Тему видалено</strong><br />» %s',
	'LOG_THEME_EDIT_DETAILS'	=> '<strong>Дані теми відредаговано</strong><br />» %s',
	'LOG_THEME_EDIT'			=> '<strong>Відредаговано тему <em>%1$s</em></strong>',
	'LOG_THEME_EDIT_FILE'		=> '<strong>Відредаговано тему <em>%1$s</em></strong><br />» Змінено файл <em>%2$s</em>',
	'LOG_THEME_EXPORT'			=> '<strong>Тему експортовано</strong><br />» %s',
	// @deprecated 3.1
	'LOG_THEME_REFRESHED'		=> '<strong>Тему оновлено</strong><br />» %s',

	'LOG_UPDATE_DATABASE'	=> '<strong>Базу даних оновлено з версії %1$s до версії %2$s</strong>',
	'LOG_UPDATE_PHPBB'		=> '<strong>phpBB оновлено з версії %1$s до версії %2$s</strong>',

	'LOG_USER_ACTIVE'		=> '<strong>Користувача активовано</strong><br />» %s',
	'LOG_USER_BAN_USER'		=> '<strong>Користувача заблоковано через керування користувачами</strong> з причини «<em>%1$s</em>»<br />» %2$s',
	'LOG_USER_BAN_IP'		=> '<strong>IP заблоковано через керування користувачами</strong> з причини «<em>%1$s</em>»<br />» %2$s',
	'LOG_USER_BAN_EMAIL'	=> '<strong>Email заблоковано через керування користувачами</strong> з причини «<em>%1$s</em>»<br />» %2$s',
	'LOG_USER_DELETED'		=> '<strong>Користувача видалено</strong><br />» %s',
	'LOG_USER_DEL_ATTACH'	=> '<strong>Видалено всі вкладення, надіслані користувачем</strong><br />» %s',
	'LOG_USER_DEL_AVATAR'	=> '<strong>Аватар користувача видалено</strong><br />» %s',
	'LOG_USER_DEL_OUTBOX'	=> '<strong>Вихідні повідомлення користувача очищено</strong><br />» %s',
	'LOG_USER_DEL_POSTS'	=> '<strong>Видалено всі повідомлення, надіслані користувачем</strong><br />» %s',
	'LOG_USER_DEL_SIG'		=> '<strong>Підпис користувача видалено</strong><br />» %s',
	'LOG_USER_INACTIVE'		=> '<strong>Користувача деактивовано</strong><br />» %s',
	'LOG_USER_MOVE_POSTS'	=> '<strong>Повідомлення користувача переміщено</strong><br />» повідомлення «%1$s» до форуму «%2$s»',
	'LOG_USER_NEW_PASSWORD'	=> '<strong>Пароль користувача змінено</strong><br />» %s',
	'LOG_USER_REACTIVATE'	=> '<strong>Примусова реактивація облікового запису користувача</strong><br />» %s',
	'LOG_USER_REMOVED_NR'	=> '<strong>Статус новозареєстрованого видалено з користувача</strong><br />» %s',

	'LOG_USER_UPDATE_EMAIL'	=> '<strong>Користувач «%1$s» змінив email</strong><br />» з «%2$s» на «%3$s»',
	'LOG_USER_UPDATE_NAME'	=> '<strong>Ім’я користувача змінено</strong><br />» з «%1$s» на «%2$s»',
	'LOG_USER_USER_UPDATE'	=> '<strong>Дані користувача оновлено</strong><br />» %s',

	'LOG_USER_ACTIVE_USER'		=> '<strong>Обліковий запис користувача активовано</strong>',
	'LOG_USER_DEL_AVATAR_USER'	=> '<strong>Аватар користувача видалено</strong>',
	'LOG_USER_DEL_SIG_USER'		=> '<strong>Підпис користувача видалено</strong>',
	'LOG_USER_FEEDBACK'			=> '<strong>Додано відгук про користувача</strong><br />» %s',
	'LOG_USER_GENERAL'			=> '<strong>Запис додано:</strong><br />» %s',
	'LOG_USER_INACTIVE_USER'	=> '<strong>Обліковий запис користувача деактивовано</strong>',
	'LOG_USER_LOCK'				=> '<strong>Користувач закрив власну тему</strong><br />» %s',
	'LOG_USER_MOVE_POSTS_USER'	=> '<strong>Всі повідомлення переміщено до форуму</strong>» %s',
	'LOG_USER_REACTIVATE_USER'	=> '<strong>Примусова реактивація облікового запису користувача</strong>',
	'LOG_USER_UNLOCK'			=> '<strong>Користувач відкрив власну тему</strong><br />» %s',
	'LOG_USER_WARNING'			=> '<strong>Додано попередження користувачу</strong><br />» %s',
	'LOG_USER_WARNING_BODY'		=> '<strong>Цьому користувачу видано наступне попередження</strong><br />» %s',

	'LOG_USER_GROUP_CHANGE'			=> '<strong>Користувач змінив основну групу</strong><br />» %s',
	'LOG_USER_GROUP_DEMOTE'			=> '<strong>Користувача понижено з лідерів у групі користувачів</strong><br />» %s',
	'LOG_USER_GROUP_JOIN'			=> '<strong>Користувач приєднався до групи</strong><br />» %s',
	'LOG_USER_GROUP_JOIN_PENDING'	=> '<strong>Користувач приєднався до групи й потребує схвалення</strong><br />» %s',
	'LOG_USER_GROUP_RESIGN'			=> '<strong>Користувач вийшов з членства в групі</strong><br />» %s',

	'LOG_WARNING_DELETED'		=> '<strong>Попередження користувача видалено</strong><br />» %s',
	'LOG_WARNINGS_DELETED'		=> array(
		1 => '<strong>Попередження користувача видалено</strong><br />» %1$s',
		2 => '<strong>Видалено %2$d попереджень користувача</strong><br />» %1$s',
	),
	'LOG_WARNINGS_DELETED_ALL'	=> '<strong>Всі попередження користувача видалено</strong><br />» %s',

	'LOG_WORD_ADD'			=> '<strong>Додано цензуроване слово</strong><br />» %s',
	'LOG_WORD_DELETE'		=> '<strong>Цензуроване слово видалено</strong><br />» %s',
	'LOG_WORD_EDIT'			=> '<strong>Цензуроване слово відредаговано</strong><br />» %s',

	'LOG_EXT_ENABLE'	=> '<strong>Розширення увімкнено</strong><br />» %s',
	'LOG_EXT_DISABLE'	=> '<strong>Розширення вимкнено</strong><br />» %s',
	'LOG_EXT_PURGE'		=> '<strong>Дані розширення видалено</strong><br />» %s',
	'LOG_EXT_UPDATE'	=> '<strong>Розширення оновлено</strong><br />» %s',
));
