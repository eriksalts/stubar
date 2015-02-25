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
define('DB_NAME', 'stubar_Y68tU');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'StubarBathroomKitchen8989');

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
define('AUTH_KEY',         '}k+ZsB$o=pAkrZFy7[+]YX-+!(1*R7tJ8f^JZq2S40hanD-m[bi8&s~k+L(7AU+9');
define('SECURE_AUTH_KEY',  'a5M;-:yR|aCRZ4(1;5Pw{%iY))4Kqin~2UU2G&CpTRNGcL-mOTG6^6FOC2)vAdAl');
define('LOGGED_IN_KEY',    ',_dPoxXW }i/S7@[?} iR-/N<wYKR-D&&`3*?<-]_IJV2aOz]f@H.#81+nZID:9r');
define('NONCE_KEY',        'EY},HrW3|Zu#+&4k-x%cjuMnt7H!,4v<]1>C)X3@-C4h0A~v0OYrJIS)^b-&l^>9');
define('AUTH_SALT',        ',+I=.b!|t_Z5Yb^p,fBf2-e_ObpC%Ro4#OKEmhxSSI,,scM6_~Q+!eg]^t~7drH&');
define('SECURE_AUTH_SALT', 'uSK {n+E8-|GpRNZc/VVR&TzHkHBs7;P&F/l||E<XwpfKL|3Qi~aZTbEb|oA@+uW');
define('LOGGED_IN_SALT',   '/QHt/M|N>C0q|[Or/+r>lc?%8e)#QstN5kwV<V5PCsez`2.rQ3y~rgClV_)aT+i ');
define('NONCE_SALT',       'PTx9|kRqngRJ<T7aF_&;S963J3I|tUc*+a`HYS;[DJ-3owdwp&inUu&r|Oy4bot&');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'Y68tUwp_';

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
define('WP_ALLOW_REPAIR', true);

