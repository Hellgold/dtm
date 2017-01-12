<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'usr_web251_1');

/** MySQL database username */
define('DB_USER', 'web251');

/** MySQL database password */
define('DB_PASSWORD', 'uzGXsb6f');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
//define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
//define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'UgKskl|83;j0iUktYg:_rELi&+!S9cK7]/wSxR-gr+N!V,or^_92wGkIL{v~@F)T');
define('SECURE_AUTH_KEY',  'rRfE]r Rzsofe8HuOHlM{kq9>8268.<HO{7prBJoPzot<of>wjx1xv CzQ<dN/We');
define('LOGGED_IN_KEY',    'JsJYQO(~*$<90e78nUf}t-vj`5:|wMju*^K-kk^SQr$<`+_+}bgQIJ.eCUSk|0{X');
define('NONCE_KEY',        'Z}GhR9YB9a#0h|A)U*@_Tjo)q|^y`0anYf.V,n/!mT(Ouue(Q.C53Nq:| vpZtFS');
define('AUTH_SALT',        'R&3:!0N]Q2)o4]8:>5c3T2Kd<I[@e[HF|w |Zm|[#2E5>:ikQGKz|!F*yJ7WicP8');
define('SECURE_AUTH_SALT', '7BD~Pz|5D9,jT4rRHt2-UWzm3JKa;uQc=R3EtYXJ7v8J!tP|}Zaj|}UP@|4B~*qM');
define('LOGGED_IN_SALT',   ' O;haCtKyxaf*y8C}j!$mWcTj|+mP7M+w/7+[3v76=(mp}.oRV!$i(Ug3Ib5^pUU');
define('NONCE_SALT',       '0|pwpjP?CYz|%v`|W7*{T9pdwM@|DXy.+M/|-ib^2J2kmAww |+t{O2|bmsIF=GX');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'tm_';

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
