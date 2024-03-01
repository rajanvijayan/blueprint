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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          '1:LkMA4p.+0#@W_m/7Sz( 3e_ad[,=Y4p-4B6VlPUVQUhrm1n~6R?@{vv0N7RM4l' );
define( 'SECURE_AUTH_KEY',   '7W)v+kj^%[Pa,PX8*5mCOGo)P@}np!E,uOu~k,Anw*:T54+(shMcT><D6?:&9|),' );
define( 'LOGGED_IN_KEY',     '=t%ZzkSA<9TYx8)}(VuMRxi&E%/wNvr^*?5zd9XV-q` Ncg@F/1<OSUhnn2X6n#c' );
define( 'NONCE_KEY',         'R*`m#8rM4qWa8=l)U>&Lia]6}3*5)6=3?ip<V/Bb^ ]Ae 0){_4oM?emDU<=p!%e' );
define( 'AUTH_SALT',         ';^d~tY*#Vr^?kK3/sz1M)/d.~:kqnXv@K;^X3fBI!rov|; odsc,h BDR*:%o@Hf' );
define( 'SECURE_AUTH_SALT',  'u.D*.a^@J60~%`Ny!hj,6h~D2^Drx!Ey;^$=bmg`@1S<<!qHm_=EZKdxX2jY@5hB' );
define( 'LOGGED_IN_SALT',    'Q/O~8d4jOVIxZHXh^h#O)cV/}?TiqS|?teb{i_(Z2c8_t8 Z X@h<u[WLwR2seQ7' );
define( 'NONCE_SALT',        'zv%2HjH!],9=Qgv-b:?OC5[?#lm<n8*>**f<}dw|QOAOjb&;lRbeg hDc;6uSMu4' );
define( 'WP_CACHE_KEY_SALT', '}`24:O$jl]&;4H$%m>/V.;4MA>Ge?$N9l]0=1Sb%!*s^{E%`~3Ut%t:!|v6<)-)c' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
