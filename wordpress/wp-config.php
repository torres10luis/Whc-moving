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
define('DB_NAME', 'whc-moving');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '(-T>.q7:}Yq;8zL926;V:Yv2V4*q%=zg,.^89Pb+t8Tq*x~X,19PJEd*yt)C@(n2');
define('SECURE_AUTH_KEY',  'p;U3Pt-o$X,j/L>NZVWP-,9YJNu]_zn) Kd][t;Djqt}n 50nN1L/}n kw0_A*9o');
define('LOGGED_IN_KEY',    '-?_]5jVV<SzxI<.gz2+YEux2)HAdKkm!yWXIwOmB:Q./RLzRp&_:yKq/&XHI8ym6');
define('NONCE_KEY',        'dIbJfW)7XO5zx>_f0pA(VAH-E?XsQ<6fG5#sJEw@Cwp;wf22FL,3T>S?tM~&4@58');
define('AUTH_SALT',        'Pnv92B#M$0yB@u:i8[IWlt$b{!YB}}SCQzjNjx@m4p7[} }cNJtiV_I%eSz,va[T');
define('SECURE_AUTH_SALT', '.(0EV15a&i|NX%3y(b?Rc]1VsdyW~ JmCLvFBSEF?dbz?7zi6OH[T)4(W<RHof5k');
define('LOGGED_IN_SALT',   'Kg&i;DM@>G3(-%xy$U<%@HV8P45WfvrJ1!{0N47[.}S4|:fnAZJ!}Kk?uj2{3_eA');
define('NONCE_SALT',       '!{m)K{%%eB1|d)xU.zUqoer|T}9iK VpArJ`@6yRb,gZqYY@x?.-uVTDuwgmQu{4');

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
