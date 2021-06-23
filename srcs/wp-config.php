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
define('DB_NAME', 'wordpress');

/** Имя пользователя MySQL */
define('DB_USER', 'admin');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'admin');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'G]-_L-:*fLA|. +gzq_f%N(@+D.oi#40OdUMui7C{T) RgjS*KRtUsub+Pvtq@y.');
define('SECURE_AUTH_KEY',  'DHO>IC_|d>j+H0FlsboaEDYnj6g3)3Uz-1kC<Fbd?<ZQX81u>y(T8w7Mqw*KBNg)');
define('LOGGED_IN_KEY',    '}2IoDL-+Z78`_6}120_ndV2 jB.^]_Jy7_x/V4pX[{1KaF!P+SgnRZJU7,ms&/UO');
define('NONCE_KEY',        'T1hged_E=-fa/n+Ky|iN2X9,<X:*0DpAKy6G+O3)U=ry|f51Fpt{r7Y[I-RfAcD|');
define('AUTH_SALT',        'a9G5N)-H7+6pK Kz Qp]+*=Bewwbw4WM-DF`xlGT8 Mo .bK&>(5n`_#P>^sX)v7');
define('SECURE_AUTH_SALT', '^iNvI_t/gu~=4Ro;KY`fD-e2Rr+XVf<V@&%_Flx4{}x?<{$sN^T5e}+6*zdaSD2U');
define('LOGGED_IN_SALT',   '/-<pT2tcYxps@+ Ntd3dFqbJ~BWQE38a;&-W^2We%XSh|+S|+5E9=o@>G&ooJtR!');
define('NONCE_SALT',       ';ZA3|dk5([&#+lK0%dhLRb2-[)ptk/30@,J-;++h#+}tz-FMy2*e8(6L dj6-,ek');

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
