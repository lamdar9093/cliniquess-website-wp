<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', getenv('DB_NAME') ?: 'clinique_db' );

/** Database username */
define( 'DB_USER', getenv('DB_USER') ?: 'tech_clinique' );

/** Database password */
define( 'DB_PASSWORD', getenv('DB_PASSWORD') ?: '' );

/** Database hostname */
define( 'DB_HOST', getenv('DB_HOST') ?: 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
//define( 'AUTH_KEY',         'put your unique phrase here' );
//define( 'SECURE_AUTH_KEY',  'put your unique phrase here' );
//define( 'LOGGED_IN_KEY',    'put your unique phrase here' );
//define( 'NONCE_KEY',        'put your unique phrase here' );
//define( 'AUTH_SALT',        'put your unique phrase here' );
//define( 'SECURE_AUTH_SALT', 'put your unique phrase here' );
//define( 'LOGGED_IN_SALT',   'put your unique phrase here' );
//define( 'NONCE_SALT',       'put your unique phrase here' );
define('AUTH_KEY',         'D2:l$^$fMadHbElT9jRZ<ew~pmC8`?n@`-daHJ)~lT-S[vVWk(}&L7 Sq%7zV*jo');
define('SECURE_AUTH_KEY',  'Xz`*c.pu-?-2y=%;4T2UArj19!yaHjy|^(_ChhfH3U0Q4r~BA.gpQ^BrYB(+rgP9');
define('LOGGED_IN_KEY',    'a`o(|b&(:SJs%,-kH551u[n0FWYu-ZX8|v1&H B} Kb/+@wc@,7$L*yH-{+{.Sa3');
define('NONCE_KEY',        'zSl?:o%DT%j:4hYB|4l3g)|o|H=ZOTT|%?y-3-Z*qr>sMl? c[=aJmmo+*Gd!Dvk');
define('AUTH_SALT',        '0rK$di/93<~{}O5-(f6Y+b(-1HXX}z^uSL&O(>i5Qgw6IuBREqI>8ZLJ~do=,Abw');
define('SECURE_AUTH_SALT', '8=B`:WmhazcOu<t9^w-0`W<x,$b4eL*V1s+o:me%83CJ0#<uzfI2f*X2k$Cu2eCx');
define('LOGGED_IN_SALT',   'bm%nwnd5^R~%Ns)QpHlUdtlj|zM2<-3F7;chf?a8_Gd^NW`>7$B}rNz*+v+ /|H[');
define('NONCE_SALT',       'eD|/g<>2%%ipTmv+._v(f$?9:CSr~vI:Ys;^KD*:zq<$+SPmBk_W?hG5K0<>g$KX');
/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */

//define('WP_HOME','https://cliniquess.ca');
//define('WP_SITEURL','https://cliniquess.ca');
define('FS_METHOD','direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
