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
define( 'DB_NAME', 'bootstrap2wordpress' );

/** MySQL database username */
define( 'DB_USER', 'bootman' );

/** MySQL database password */
define( 'DB_PASSWORD', 'koliko' );

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
define( 'AUTH_KEY',         '1h(fnrKuudUu)O8c[(T*=^2$yqTqppP6]`;^Sp-791E>P%VUQmh$@%}hbIb<#=[B' );
define( 'SECURE_AUTH_KEY',  ' n TL)8}X=y[3m8*}=,>m`yffRrW1E%o/XPF:^f:bzb*&[!7Jl#rTb`zD.YzbE.h' );
define( 'LOGGED_IN_KEY',    'kI0pjwhNo0~|-3CbeaGbHVH*u=VuWv:FV4cBcu<;iEhJU8M#X%P~3y~k%}hb,-Fd' );
define( 'NONCE_KEY',        'a 8TufqL:_2Ni0?.RGi=c19s@Bll2=PhCWu5E+M?J.!b=</3VuD-bC<X<01e$LCa' );
define( 'AUTH_SALT',        '/A6 ,QoVQTfx-=bWhgs((JENL%1<kl`ckHV`:?lJVL!e4G0[}tS~qv_j$2#*a-gV' );
define( 'SECURE_AUTH_SALT', 'c)8LhN;>t+/]BZ#ccl#x@2J/6JA>*XRJgHx3E%!s$qdm03kFk+n0mZ@A0N.&q[os' );
define( 'LOGGED_IN_SALT',   'b4ZTq9|zSWUtOCNbT,?&q;><g_fIZB /1$b|-Nd@ I,=sV77EMMCZs_r|y<y|Q=-' );
define( 'NONCE_SALT',       'BW0=s%*yP<XB!ou=&x6{aKGg,Fnow*3eB Ns<2uj 3xC,aaA)PkGfn ncfMP:UUN' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'b2w_';

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
