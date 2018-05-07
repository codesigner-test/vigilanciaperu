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
define('DB_NAME', 'bd_vigperu_001');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '%P!YlFR:^R]y-LWLo g.-)Ex+m7esYJ2.be+Ke<?ddHkI5Q}K):~!kMFsQ[1@V0|');
define('SECURE_AUTH_KEY',  '%:@AFZ_*shu0@sIH];63_ELm^m-` )u2<t(3UdYkk:%BfHTI8U175~m,bwl&?e)y');
define('LOGGED_IN_KEY',    'Z{pv>*i.W +:i8T;^f}>jMuwB:QXY_WMQ]=ema/-Sy8kmyG=woLfJEp oy:w[o4c');
define('NONCE_KEY',        'r75274VWJk9^|<9v`_ce-ovCY7>)vI06#$DD|Z)v&8]gT!;B3(:s5B(d(&R>?^D%');
define('AUTH_SALT',        'xE6S*/#`A}]B#d}5?:;X[QW]1BdD9C@c~{,=`[9m>=DNs(QpVT_gX+kvY9X-n:qv');
define('SECURE_AUTH_SALT', '*f=.g>XeOO(-WzZ!KN5]b#wg)]802nmQ3N|zObfOCDj~TtTQRuU-NC<~<4/p`E:{');
define('LOGGED_IN_SALT',   'CxvvBU}#A;I_nL/7qQ]M{/7CjO@$ne%:W/^>gyJe&G^.LWn}+dvY*j<dB2Le_m={');
define('NONCE_SALT',       'QeQ UYp|!L7y@3Nm@5O?!WjpX;wTS?9pCPK2/sv2HK[Oj9xv<KgJ A>S1PqluB}I');

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
