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
define('DB_NAME', 'hmbb');

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
define('AUTH_KEY',         'p(ywd`%}%m08XC,BiVbIE_$))8(L7&_b7EE+y-98nq&]WE)dS,Y-N41+9Ej|C95S');
define('SECURE_AUTH_KEY',  'YdULG)=ZkCA`|-,35XzbD%]k]6!|dC1yfB#i6rZKGnNn&-u%y$A|E72*x_&Xov#f');
define('LOGGED_IN_KEY',    '1hS}-OGcGIvTQ-%M>F@p_:>mH[PH#x:i@i<bMZ`nnPD)$A./@k&e/8+YU8%mc:NX');
define('NONCE_KEY',        'jXn?NL`Y9|Q;rvS<~PNHZZ~+VW[|ok1@|+A;|?zIW}E|[d,$Hl~L#K)VA}~4}3T>');
define('AUTH_SALT',        '[HCg-9uYui8)RW/$_:c}iU:z`_%:-xq1[j~kW1jY*K4ZC=LBo/AgTi[Vg6ErFHuz');
define('SECURE_AUTH_SALT', '|hx8pFg4HcXpz|>c*#:(M{TbgTna /N+(V[SZ[x;@L N-iF,.Z@[MD*O=e{.N}V~');
define('LOGGED_IN_SALT',   'G8{citI;fC2+R[H)2^*^|R2!-^M7LfS3}~GW|5$}9Nm=&yWz($}_/e?Y.).A3mYO');
define('NONCE_SALT',       '9w[/G-ri#jk-wuXOlBoj|nOizoN{F9HS_S$_;PoPA%DLf QOapD>ku?]68M%@vrw');

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
