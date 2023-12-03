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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'balkangaming_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '0hq_YMT*/3P4UtA;S9}&$hY-FGeQl)#LM)yG3aW[PyxPi&(wGR>nzLWIq;ldRi0-' );
define( 'SECURE_AUTH_KEY',  '.kr`[PsJ)vhwj +u?=!/Fz,x0;2mF{R2q)ySbd=waP{$jIdi$u)L}65+SQ{T6Rg1' );
define( 'LOGGED_IN_KEY',    'nVBYcb1n60@@(VR1hj}Fc1=Sl]M|8j5P %VI/)Tg=Y?kaa1(G1&TvuCRa$0UbQQM' );
define( 'NONCE_KEY',        'aCFF^ul#chm[tn`KxnI+)i{Z@-5zjR`_]Kx8rK!1Ls7ao98E7pyE;[UwY<#:-~p-' );
define( 'AUTH_SALT',        '3kZ_~h#L!OioH?`#K%XVDNCcss+*Iu2sqGo)})O1=cX(`;>U:u;:8I*c#l|VRTr^' );
define( 'SECURE_AUTH_SALT', '}H#9T0Y]cbMz0!P=D}s?}ST;p3R$c/9^KufKqV(B$MEjh#W_<eaH8^*WU%,9v07}' );
define( 'LOGGED_IN_SALT',   'a~;/?@)E~}{q}[AyWQo&/I%xYt2SN!1Q/Up;xF+V1p[4^71 R&W{}ATUj`PI`!bK' );
define( 'NONCE_SALT',       'B,z$cVRna164=0hjmQMiBSBG58Wm/2X0g;BA@oEXIVU}Bs8f^~}L52&Zwbtg*w@|' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
