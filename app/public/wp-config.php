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
define( 'AUTH_KEY',          'Ae[ulck#?$$0k:tongFZQ$8C))q0MjY<zRP.]_ex<m76/G;_*.TU1~QTrhIV# =2' );
define( 'SECURE_AUTH_KEY',   'fft[R>ux702],;)7ZX`6)L{=^?Mtv$}x0sv4+ t1AJaeMH9ZnDc,CzMX~n/P[5@G' );
define( 'LOGGED_IN_KEY',     'v3n=N:;uR`?6NmETU5.qJ6`c|e(JgIDU+Z 262#L>TK]qj:9fZ~kBUKnL@,*`c$o' );
define( 'NONCE_KEY',         'uZ!s~pU3g_,H!{N)RYWB~1 !<u)(H%gtxh+Jq/c; %p6p7j%:{/4.5#]jB!bQStK' );
define( 'AUTH_SALT',         '5/d3UC196_qy-0lS^wl_#:*vd &8o%4GdS3+9Yt).aM33Rk>RgQM;EE}ho8;FUIt' );
define( 'SECURE_AUTH_SALT',  '>FrdLSPH=<Ef+]L!9$if uM,-mw/:c9hxPgyB%rD$pBLXVQCUnzMq8TYT<5p(CTj' );
define( 'LOGGED_IN_SALT',    '93A1rw)tGLeuVcR)d}8jfa`P8*iucESj/@#XU)CJ VDND*-4R2o-;n.tv[>(j+=?' );
define( 'NONCE_SALT',        'n9)<Fa-bCcn#Bg  D1=3Um@u`NTkKID`HE/m|,Jk!d%EbSZW`X] /9}sGhy^nW1Y' );
define( 'WP_CACHE_KEY_SALT', ' ?nGv0hN$-75{l)0Ex7]GE~ETy1DV@N&l2kgnF%N}?EydW>=5+peA1<ue,1{T-#.' );


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
