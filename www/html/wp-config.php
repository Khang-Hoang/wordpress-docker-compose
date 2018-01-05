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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123456');

/** MySQL hostname */
define('DB_HOST', 'mysql');

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
define('AUTH_KEY',         '6fPG}cU.sc^L`IH4KAjoU$K.^rKOW6i3$J<NG6x8_Lf{?r|97}FXMG37ww@kypu`');
define('SECURE_AUTH_KEY',  '>w%goC+A{=%t}p(e!1yqPa3v5pt@)VGN?T&nFiW*0Fp]4<?on;Nz)OzB*G!BQ)?Q');
define('LOGGED_IN_KEY',    'C|dF+ZbrL{?uL6.q@=c@%-/b8E3Ex`QJ=%Xq[|bI7,m* ?saw9dY3*3Hu&M)KJcK');
define('NONCE_KEY',        '=faj|fE68zl5I~MoQQ#&>mB2r(~];XSy~>yjVIJ$qji6;HJJ.bZe;V/{xt(lElZr');
define('AUTH_SALT',        '2OV{%v@DD:}I*!(`d{BO7IE[%z^LE}{:#ZJo:&&R@T 8j/B8CdYlO=])kgL@L6Y|');
define('SECURE_AUTH_SALT', 'rxH8[)&5-aF7RCuk~55e|mEV&ngmhQY8/x[<`]p|YM(&:LBtdr8cT 6FLLm0Z/|I');
define('LOGGED_IN_SALT',   '*{G}[M5TPVuKVYrB.`z9pAu%3bw,R,3gxd+DjodhA22HgD*oP`gjC1y6B.xRAD!q');
define('NONCE_SALT',       'E%bl04RH;{kSF)R3+cL,Z_!j-Xz|RxyY.mMqQ$?#o+14Q1p#4U5Hk7V$;~H!/:M8');

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
