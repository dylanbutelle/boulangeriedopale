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
/** The name of the database for WordPress */
define( 'DB_NAME', 'boulangeriedopale' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '> ^`V*,P6YYXhALOIU,rN 0a@4|I+_z}V=IyHAOT`gcSe]ey0<nLpBbV]1.o!6O]' );
define( 'SECURE_AUTH_KEY',  'I?Swiwwn8b]Yf@`e&,p#7/8ie{$v9vIYd&1$;<tOUDjBPF{mjS+q_k]ilj nX?Jv' );
define( 'LOGGED_IN_KEY',    '2(,v[Q:.!B:KpP~uI:3zBZYspW3IVN%Y%wKw#}D-vK>gT8_}}YZay7/+>%_c:&~/' );
define( 'NONCE_KEY',        'S(%Izw]{Aar_M$I]HBX+Xl{CQFX3Ce{qI[Ae-t _)ath@bv]}v|<bCv1E0x}0DPu' );
define( 'AUTH_SALT',        '<~943B51?wwb04p3r5bwOabi<Af^GXXEzqo#)coMH^[g`[Ga[Ctqs}~ZSQr(xY*!' );
define( 'SECURE_AUTH_SALT', '0e$m#/0QFW?8Dn8:|2%M`{y=3UNN=RB`>CZdjmv5m9:^/x oaLqTU2J0Q[0JDz2F' );
define( 'LOGGED_IN_SALT',   ' 05HHl*ULy:MLy2#]+D i-_2&h=>VcwZ;&5Gt~W|(MxAWtq30yj5Sxi.S3lzKfk)' );
define( 'NONCE_SALT',       '6uD,wA(Lcb vw|HkOfMh:!1_2NmaS9),Hrd}py6GIGPxx5PEOr#9LP)N=z=_{?zx' );

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
