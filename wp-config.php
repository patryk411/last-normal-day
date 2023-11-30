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
define( 'DB_NAME', 'lastnormal_db' );

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
define( 'AUTH_KEY',         'rUO`<Ivpe-hj8/dT/APH9}3{ k%JiB!UE*d *TrPyknw@uq*TE3[R!zU<mdRII}/' );
define( 'SECURE_AUTH_KEY',  'N(5*O,l J 8H4TVju6Q3BJ%FMTKLbD6li|*Tw3Bbdvcxp&$4Sm9Gf*-L:r}p<d,G' );
define( 'LOGGED_IN_KEY',    'n%xn<JA*]S)GG[/Cg}_`z8)#IdTuoILq]mYSV6ALpPo[((=}>YL_aV?c.Yvn<(><' );
define( 'NONCE_KEY',        '=bW=xC^#qtmT Rv3!~GSDl0/PyZ~;.vd`vm1)k]^9mmPo)uGS[OJ4U7Rcr6B?ay3' );
define( 'AUTH_SALT',        'OV,oq=tFy6>Nc%m !0dRO[xC@tu7Z{At4LXZ$Rs`4xo8.D-V_#*K=y/Q9{U-s>Q}' );
define( 'SECURE_AUTH_SALT', 'L0dWu)@yMY/,AyNvs o}+neK)`1)=jLDa4.tYiJR^3:C]m{KAhv_=mqCK,EF+=gg' );
define( 'LOGGED_IN_SALT',   'ClMj)o6FS=AmZXAG[ imtf:<V}h7X=gf,q3y  5f{Q6aF<j9rIOBEqI= wo}Dc{b' );
define( 'NONCE_SALT',       'txy52Jo#xFaMKWo1E +As8nt8h]gFQiit[1` GTcH6C$7e(@2jLrj2H(~9M$s0wq' );

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
