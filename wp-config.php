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
define( 'DB_NAME', 'debs' );

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
define( 'AUTH_KEY',         ',M!x3a/k/G0_%gg42dNx%q]aP_o2VCL3Iq9j*-v6KzU/pA b!zpLfZCtbn{lX%nt' );
define( 'SECURE_AUTH_KEY',  '8VfP.>v}/.m7rRSK[);a;*nSh+TW`kV8%]7dk%?:eyP?;XdR&uB<M`koKqL*y GJ' );
define( 'LOGGED_IN_KEY',    'DsGR=mjg?d,[9Gs5n39KN.q.Q+70=MvTv22C[ kZ9gq<I,$sYj~<K*<%Qe.XC%eM' );
define( 'NONCE_KEY',        '#EL;hKUb$X`vC5xn{ssTX{W38}|;3{,HJ44<ojBERvsFm3& =AAXYGB`lc&NtTf!' );
define( 'AUTH_SALT',        '*-MEz^IG59Ps3A5UeL?$qU5g<?[;T0:]uj&p+UmNJ+vZ&e2j8NsK4e65-]k=<46v' );
define( 'SECURE_AUTH_SALT', '_`ORo(/13g~(YSDsaJ!%mp6TK}C~7]&S7C6vgRF)]&<ceT?|LAJuub8y{S?HVL-L' );
define( 'LOGGED_IN_SALT',   'B7llld`6B)-o9s?wmBc;<N40)ioTxZBe!NT6f1/OPxl@ eZ}!@_okauoy`R>Kw01' );
define( 'NONCE_SALT',       'D-7B]6SG{HkwX#T}j]V]70y^iTM~ljtvE+H|Y[xOkG:_tNIZ,qz#[R9j}m1=a_r]' );

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
