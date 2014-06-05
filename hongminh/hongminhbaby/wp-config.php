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
define('AUTH_KEY',         'Of$D4lLOQJ5,.avOm#C/<8?N:4w5/!+xAvU.?8(,nB3+@3k|+.4%uQ~,$hoH(+lV');
define('SECURE_AUTH_KEY',  'mELE7i&q-}d|gjX7~_07$ehqGYb$FVI>Zh#:ssMOi*+x[.e(%U ~(1$vcx|^Qo6]');
define('LOGGED_IN_KEY',    '%5KUv-A},i~-/X-{Pt@.xE}sDO*/kuyiS#Sz`l|T},gC9XtOQ)8^$zs;%U@>YC{+');
define('NONCE_KEY',        'f]@SKc*8z+92{`PKl&cGW)Z|vq+XZ&ejI0hWc1{%0[t{`OW|7~%]#sFt$|,nI6`?');
define('AUTH_SALT',        'bl9iNd|O=[GoyR50|!T-&|9+}o}EksI+V8H8[zh[0,x{j$qv=M~V76lYkNn)j^[.');
define('SECURE_AUTH_SALT', 'PVb{,C;6yWo-Wo*Iw2|P~|t=[Og=@:w<#n@B%0l; 8s9!y|.MzE=@]jzQ+CGRG7-');
define('LOGGED_IN_SALT',   'E^Jek ooHTDi+-eP%JN`|L%9S!b}x{ vv7)2PO&G-IwieEJy^&OZr[{20|!:l5cp');
define('NONCE_SALT',       '{DthyazT?L7}+~~]@1vXPJz<l|T0C>%;^ttrRg=vp%u,owI5iR;NEgAAN{}%!Fi>');

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
