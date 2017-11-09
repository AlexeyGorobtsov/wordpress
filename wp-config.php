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
define('DB_NAME', 'geekbrains');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '|TTpN#]3[MGSZS]^wx@;}2*[/UFtBdaRk#?C+:bTRxWi{.hJKwyS4Gfx~^HCQ_x1');
define('SECURE_AUTH_KEY',  's+j_z>5VEUVv&8Tg<FQC<(LcD;38([gkSibw|-PznLe>~?<$-.;H;N;B>M9[eW k');
define('LOGGED_IN_KEY',    'MbDOpnKwpDLT8P+ck;[u+g+I%T2 /}3RX,h!TI^G]b_kxn39*`|t=Op7}eBGRj+7');
define('NONCE_KEY',        '*PB=qZ,s?v/C!{4_6x|&%e4.t7D&4q,Tf+H/gobCrlh-dQn%O`? q|.:D*:hLj2j');
define('AUTH_SALT',        'aL oCf<:DzP:DMSW>6sn;H`jRqjQRg>wp%3; @go%jVwjnOdbdh-];:it7FzaImj');
define('SECURE_AUTH_SALT', '5Hg~`j>CX*G)i!&nkx*b5W1lW-~.hIHPF8C{OQ-BH4)g<{6V(r{@zVXM&.%-[~GG');
define('LOGGED_IN_SALT',   'dSVU?IbEmSV:, .-Ro;hfiryxFkO]xXiQ--w4[xmo|c+43%-k!r%z6mc=XPI7o&0');
define('NONCE_SALT',       '%Ep-+wUEReHvL+X,5kvrw/YS2#OPUqlr~t,_27mw=H-Pb.F:gxvz$cyHEda.H[>f');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'geek_';

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
