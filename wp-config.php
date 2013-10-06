<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'aevum');

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
define('AUTH_KEY',         '*)AwcgovV9gXk-;wYeUAJS%58j5);?M]V33Mb!S[Tj!3v.*B95N$uswKwNYl:=W(');
define('SECURE_AUTH_KEY',  'WyQm8@XifFBqKargx%ZX_,x,$j-r%)ht2h(?.F*Y]kfv)}~&3ksP$#W,BiMie7h1');
define('LOGGED_IN_KEY',    'fu:uq*M54Lhf8gc+YKYR@{3&6V.LumVu8NKQP<>2-[HW0$;. IgH7o?W38&WTL-|');
define('NONCE_KEY',        'HI5dax/aVyvZTrGyF!!DgpEMD)U7Yfuo&05Y}-zTLSB<$:aeFu^-{Bs*9vf,h]UG');
define('AUTH_SALT',        '|e*DiVfgcCYZ}$>HuZGzTz2a[Yjav),mp=!1H;G)7AU^Xz>>B~<eLJD=UpnBktRY');
define('SECURE_AUTH_SALT', '4}sibLnFU=-g2]rTmi6js`os|9IZOEh|GapqAZ*g2L+)^J0!qJfT,5~2Mn+|.6gM');
define('LOGGED_IN_SALT',   '5(=ys)j-i64s.`{f*V1JtC-MZW0:ZY%/X~bj5O:W(>fQoKqPS=h>fO&Q+=+$VEQ&');
define('NONCE_SALT',       '||Yszb*eJ8(/pvR,l]q21.;NwWB)j@,_4cYEX5l{0eH7tgL|eU~h_A! jAv$HM*[');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'av_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
