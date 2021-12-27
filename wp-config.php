<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
// /** The name of the database for WordPress */
// define( 'DB_NAME', 'd568qjgmi29ksc' );

// /** MySQL database username */
// define( 'DB_USER', 'prjyjuceufyhuo' );

// /** MySQL database password */
// define( 'DB_PASSWORD', '3a65e609ace0af28ac53b3047f5bcd4c2662af8267871cc0e5666db4f42dc3bc' );

// /** MySQL hostname */
// define( 'DB_HOST', 'ec2-3-89-214-80.compute-1.amazonaws.com:5432' );

// /** Database charset to use in creating database tables. */
// define( 'DB_CHARSET', 'utf8mb4' );

// /** The database collate type. Don't change this if in doubt. */
// define( 'DB_COLLATE', '' );

// ** Heroku Postgres settings - from Heroku Environment ** //
$db = parse_url($_ENV["DATABASE_URL"]);

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', trim($db["path"],"/"));

/** MySQL database username */
define('DB_USER', $db["user"]);

/** MySQL database password */
define('DB_PASSWORD', $db["pass"]);

/** MySQL hostname */
define('DB_HOST', $db["host"]);

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'mj|{5hjv}aAtdBMUh^{F@p(F3)ikw4wN{A`,h}nX2ZBmu%%j;X=>C>MqErJn[kw9' );
define( 'SECURE_AUTH_KEY',  'B$u:7TjXv}n&FAJK5&:C#?6*1*42HjEsIGZ;@*MtD)N8yQCxV?qe*:$<~ldsOXX[' );
define( 'LOGGED_IN_KEY',    'fn~0sA,>Eb{7mcCfgYQN;*tD`c98Q$<hd/T.L-utFA_N(u !B3i|#Iccu7f>4k T' );
define( 'NONCE_KEY',        'CN`G;dzEB9D&g|YLO@_&]>vF{m-5#tfY<-/c%E6t+-l!Y#DIkPl3Eog:d1-y,@|q' );
define( 'AUTH_SALT',        'LCoog!EDu~iXszsx2~0,YF@>~kk4O~v@4l7EeX&79PCcm/~,eDu+./C!|[lP[.h~' );
define( 'SECURE_AUTH_SALT', '58~6es0%k4zZ5^r $U(.t]OGeC?WKPb(,)X!7Iw:^$>^#^KiYGFEW2J 5Xa30=_F' );
define( 'LOGGED_IN_SALT',   'vOf@%VV.?h*SAEnh%^Ufq;[r3`j(yqN24t}XXu8Z={#Lqv&7Z6H.@R(_Snc^jWf>' );
define( 'NONCE_SALT',       '0!MUGYbM:e$j~Hh*DptV5&vK|bOS`wd~*Np_sC(ik2k@$H,XgEN6MyV#oc/R8Y&2' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
