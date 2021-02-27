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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'gal_base' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'r~rsnWKN 8m~ne9r$@ ^b[#,@)D6!K(}$S+T}>$/R)?1e?>?c$dOQ%#/.9w]w!iV' );
define( 'SECURE_AUTH_KEY',  ',EufwNE)e.KKj*bz</Hn;HfJ.%@T-K*,$Xn.X$B|wKQ!N-U{+%OonZz/8KyTV? 5' );
define( 'LOGGED_IN_KEY',    '`%3C2bkz%V|fL7^AZ/3}O7y*lPqSbmXNTbWX;3e40}Y^o`#$Svh{qSR5f=S2PBhj' );
define( 'NONCE_KEY',        'pz$ur*}jPI+!`fi<PuDp{*AHplU).^JfofxiSiaS1 t*gRxqS}d@ duUvuRx*)}|' );
define( 'AUTH_SALT',        'kVf(<h~?c:Yat$%LR@Ga@V@Xv<_7R=},w1@#t87[(|xToqGI({Eh.&TVU(o%n&[?' );
define( 'SECURE_AUTH_SALT', '%e$*Wvn2[mTkpQUIQF?`W`:Qu-&h;kZ_Wi/Yf$`tkMVkcilVj,m{dhKk(O}N]2of' );
define( 'LOGGED_IN_SALT',   ' 0a>O4*0gNztu X<?,Wkv~oJG+uc%.NJw*^6=LJM|S2ip2-@Ibeft4@F+7_LiB:a' );
define( 'NONCE_SALT',       'fz`0PdMJe7h?N7$so<Y~xANv&i3Vqs@V$K];6N]#_,+5eU{TsY4q;oZx(zl`}U$ ' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
