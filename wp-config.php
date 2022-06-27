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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'bl_orA@873VnnfvbI)2:xP7DVowXy$8-}US{Ovv=ti13tMMTY!t`l|<Cm_4yy>.@' );
define( 'SECURE_AUTH_KEY',  '&!Sax97Du1pxsYjTjt|Rv~Lg?I ##vvtvxExpako>m?=Pz)]uzF~OtiPUrP%HeXc' );
define( 'LOGGED_IN_KEY',    'd8V1T0>EmZ.H*n|<0R!@y#)^*i+W)/wqx/1*S?8.o,pL+d~^S@q`eg!Mu90}rxF/' );
define( 'NONCE_KEY',        'f$4m5Hi_7/i6Z08/|Z=@3~[,G9i|+|wwp`wc0:Y>T(zbPXY{VvJ8:PM}vT;Q|*WS' );
define( 'AUTH_SALT',        'Y>ujA -eFYd^AI#w@]=er5Ap5c4J7{L0w|[CUhaJYo=SDwlhD|~YOB~jNxgD2B6s' );
define( 'SECURE_AUTH_SALT', '+;;uI,bP$fN_>3&HFEJm}CiUeRKf05wCl7)%Lo[FsTNKy7_ii ,h<`mE~r=j$}j>' );
define( 'LOGGED_IN_SALT',   'mzC#5HQp>^bfP-FPFAr=Z-YR4|73*&^q,(mP8<VP{<!_D}j:j.t(,KV}0{^LOB7o' );
define( 'NONCE_SALT',       '~t])A##6WA,*$l0XO%UavjR}|+~IE`#P;f1`rZ57xuN.KXlAd%+)K4gdpI2GM{z:' );

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
