<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'mysql');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '$=%]iI9eB$|k@*=:Miw2B*`sh|D+.w4?|SP~XXs^1#RD0.{,jN3d~AhCzZT6LkZz');
define('SECURE_AUTH_KEY',  'O$i,2[Lp%4oM2Oy04N]f#gX?N~&#C{~rY|Cw<[cz7X5ZN@88n;QQ0!UeN0OiAp.!');
define('LOGGED_IN_KEY',    'zT(f}/#H-:Ikak)7J}<@mLLcaN_s5sRpa@.x35^+kH0DH|dE_>p{8xF>;B3K3K@K');
define('NONCE_KEY',        '>=t}HfIS?R^j$mbktJRnMHZ8#no> QWpVqo|9iB8/;@|3Ee5@Dh-EMR^-K^mK#;x');
define('AUTH_SALT',        'ucY_tj&xU07+ $<,^( W7+]D)_oaD?LrEz4-y(>[49Zf#LQx*fitW-#u}]B-1DKZ');
define('SECURE_AUTH_SALT', 'x;5&6b5L!OD`:*hg+&Ina3^I+g3$+%!QbNMlk;N*B;KkO:u%J+}( hVBsO<q&}%B');
define('LOGGED_IN_SALT',   '@uh1RxvunH+@B,F?}YA)-`34/:u.pW:^M#=>E?r?HcxMq~~`>ppjc&D]@.eh=,_k');
define('NONCE_SALT',       'vpOLF|NsAAd B4<?n5>Oq$0&^B&/upEm,V &8)%$v34 v;]_Lk/,3/G}=wje[K-O');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
