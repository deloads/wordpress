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
define( 'DB_NAME', 'hello_kitty' );

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
define( 'AUTH_KEY',         'MxXQ7rT)LKKkRZ^m2Cu SB#4dO0~M:TGDl?+BU(1>]/N}rTe7ty}v2dA_N1f{Q^)' );
define( 'SECURE_AUTH_KEY',  'Oj.Zvo^$<_+oCS[J;&WfZ4K3+ydg_WVOZ<SIFui`OI0iOQ;#0mp5*^?f|evIt}oc' );
define( 'LOGGED_IN_KEY',    '&n$6O|p Hr-^LDHJ|&i`>6h.oW2UG@YL]ue8Ptq!E!Z#49L?xc~//vevolB(IQmh' );
define( 'NONCE_KEY',        '%|+m?7) x|SLs8aUfX_]^MS[;oe940g-} :lHb8!01$#-Qd@f1ml:7.2XWRY}W9S' );
define( 'AUTH_SALT',        '9GR&50%b,nf9JA: VSvDQ2l8.m5PdB)bXKxb6%#eP57@y!of3i?bp`]#o{Q:Nd(r' );
define( 'SECURE_AUTH_SALT', ':T|lXE~K<YGN,P)JQ_9w)W]s%bxEd@P=VfEd<({@R!KTXvt6k]1 f-jUpuHiW${5' );
define( 'LOGGED_IN_SALT',   '#gxDxZmb9kTyY=l!m-YTb^+zH1=g1>=zE42qwC$$3Q}7^Kq-1V_B&u5K4d=7T?6/' );
define( 'NONCE_SALT',       'cjH?ZS#O/fA*u<^o:XaD!A{Fa;&hNkOZ.Pge^95UR?+m52N2X{_U7WV),VuVVO~a' );

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
