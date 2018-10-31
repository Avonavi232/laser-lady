<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'laserlady');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '123QWEasd');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Cs^S!I$]Kb6gbB4*R L<w|i0hRPpGF%-JL)LAP&~%L7QtrJ7yN:L>Ikn_gwbkg.3');
define('SECURE_AUTH_KEY',  't(s{12eN.+OFYdkLrb}Ge]80Ex< NY>OweE[sT~f9??$iu|e.k{4O7sGoUqzaL/X');
define('LOGGED_IN_KEY',    '|,k<^EB~aI5gN|2KE_#W~TdQGg=XoELF4&@i3*<R>0.:{1jAgmlG|?g-3&[~NG?0');
define('NONCE_KEY',        'f,bd`sD4po:e5hx{j-Xy[3;LZ7P%0wiH(i]QS}y=NTYU{X]4t|+i{L62Q!1Dk5vo');
define('AUTH_SALT',        'mq#WYPJMHZCqWQcUkpU*Pc=Gmju_8^78^6}dlrFP-9rRqf?b|z?Cv|{[M@D`.HhV');
define('SECURE_AUTH_SALT', '4 8,6(jHW72r$N;([s%AC+;B[UA2Tri{-01%=3wr-((jTH3d@sDDg|%=K`Cc{hX}');
define('LOGGED_IN_SALT',   ']bi-KQPm5<k8CTFhFIK>3:(a`,VPC^rq@dIBXxnc9&w{kD)[0e`vN.*|XX!k*5M&');
define('NONCE_SALT',       '`Fl-W@8qg1BS38+l<mmf~jZL&uv&l5&-0H)@<98wg9a?*0$%O9_Ww%lTUD+h@70v');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
