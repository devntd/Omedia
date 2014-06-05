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
define('DB_NAME', 'hongminhbaby');

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
define('AUTH_KEY',         'yv5N}.){}XAx+Z/!P%8<!j+eQ G,n|S&ht++}57>9^Ey`d`F 8FMW>5M`Cdbn;}_');
define('SECURE_AUTH_KEY',  ';s?y7]!/ag6Q&-%O :&oLqab8Tznx[&>GSGt.BD.IP!VA]|ey{04$^NFp.scE2v)');
define('LOGGED_IN_KEY',    '~_4Zva~q58&!*|0-]z4`dzXZcId1,vwS5&uuK1U$,h. G{?wZfV57|/{6}a.7JaO');
define('NONCE_KEY',        'ntP|<Yt<,k0i-0GK2yFl)%kS(u[1u*3?]a8O:u9]vJb}r_A-{7fFKz-beIv|@If5');
define('AUTH_SALT',        'wAmd[yCK`HWtn~(Av:Pu0ImuC7-R*-l~r=`#[(G!ajuyTDq<-3anskg3G&ZMm+H-');
define('SECURE_AUTH_SALT', 'BuMJ92+2Ee$:O !`%,Q68]&uTG)-|]bm/--4UBQzyMDH v+];!{<i?YO+mU|invs');
define('LOGGED_IN_SALT',   'Kv?KQeX{e(AX!!8U~)IZ^4eQcU~,9,wDeuLo.>WGB%P 20>sYP)Ra7*4df[RA|ik');
define('NONCE_SALT',       '*ZW4q%-,z/OY6T+/^/i?q(~1m-2|a)W:Z/DZN+I83PA@DIgD,UFBd?[(nKpm|#?r');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
