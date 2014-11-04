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
 
// Include local configuration
if (file_exists(dirname(__FILE__) . '/local-config.php')) {
	include(dirname(__FILE__) . '/local-config.php');
}

// Global DB config
if (!defined('DB_NAME')) {
	define('DB_NAME', 'roa');
}
if (!defined('DB_USER')) {
	define('DB_USER', 'root');
}
if (!defined('DB_PASSWORD')) {
	define('DB_PASSWORD', 'root');
}
if (!defined('DB_HOST')) {
	define('DB_HOST', 'localhost');
}

/** Database Charset to use in creating database tables. */
if (!defined('DB_CHARSET')) {
	define('DB_CHARSET', 'utf8');
}

/** The Database Collate type. Don't change this if in doubt. */
if (!defined('DB_COLLATE')) {
	define('DB_COLLATE', '');
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Re%5gc0%.w?JU!q6k95@*a 4jT3|}|HX:b5f@|1S8s[W($o_T|t{~:W0^@z.iOc ');
define('SECURE_AUTH_KEY',  '3~`ODdK;Qs*nuVVuSYJuw4C)O-.Dz5+Z23RwpL(TUKbGcYFE$W[^=Mtygcu+oyn_');
define('LOGGED_IN_KEY',    '7e@fRj>LsWZ(jZm8JxTeZ1yurUH5rz&/gxdob-]4WD-$18K3DfD+7ZkOE+61j<WA');
define('NONCE_KEY',        '.rzs^/8N[5Z5>xon]N-|4b(uTVQv~_<qQ1YAkQ-1 Ohs+7KTX%uXO-%jC~9W%0$m');
define('AUTH_SALT',        'm0~`J(q1Z0*lIxqk!^LH8Fam7x>gT< ,haKebSq`X,tSlWg`EO_RQ6;Efx3L6/.H');
define('SECURE_AUTH_SALT', 'Kf|_TS-_2%v-Ym|K2^CI;+smeFdS1NO4r3xRL++-x2Z?<RBRIq/]WT|_vhSOc{va');
define('LOGGED_IN_SALT',   '-XJE9S9lkx|Hls<qJF}TV*~W!yIq1_8wEd)j<uP1[,agYP(aLc[Xb>`9!L-4$v @');
define('NONCE_SALT',       '~;PGRS/D(i;(0{`A[$o8Kifq-.5t4yLoOeEv]<~[Ao*1F,kW00^:hOQ/C9}&)MF+');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'roa_';

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
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
