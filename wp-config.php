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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Portfolio_db' );

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
define( 'AUTH_KEY',         'C,zE_&x{.b>Ne[BU!>K3:my8==|>%j{U~ 88SU^ JhS)9CfRmE[yJc|k{lCPFYFZ' );
define( 'SECURE_AUTH_KEY',  'HxlDObzT]#.)asD5x1op]t4R2P8<Hu5;Oqz6<{}g&L/^PxKaih/:APd@#M*q%A;*' );
define( 'LOGGED_IN_KEY',    'QfffZ%}0g-]1GVR2kT1L)h12OG|F/xoa+A2l!VJo2kwY_>slOOff@PN>RC8Fo>_V' );
define( 'NONCE_KEY',        'h+Xt^a5_2&EZ_&IV)#R~r6fySoMR5 5Pa5jo|b@2H4dq b<wSK.aD8Ci7B$?JB?Z' );
define( 'AUTH_SALT',        'Jf[fhud[%w_?lQ85JJN2&r;db8Vn!F7)24=%A>~8YP5F_QjS9)2R]Hmk61I=abIX' );
define( 'SECURE_AUTH_SALT', 'N^aT{2/nUB{VE1k.B9k]R^BI3zUI]mr]YK1G%>qDky]&xz[]8Z6f_% tlc&_NGCV' );
define( 'LOGGED_IN_SALT',   '5|-A^[FaB.`|o B`;`0*Br_JrQ/ +N@}z[si^tYZ7P6W2zqS;6wt|n![7{.Ik0N%' );
define( 'NONCE_SALT',       '?cb])Y>3e7$2V,3O8~`AoY$0S60JPVa7qGpIuf:4FT<pF6{k)%N^YIp` rU-[%AB' );

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
