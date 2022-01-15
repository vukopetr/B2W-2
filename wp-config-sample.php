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
define('AUTH_KEY',         'gTk*b<}F~YjtG;[/DLrPM-z|^|dY8-4=>4dayPx>f?>jx.hM?X2(u*RDoT>?;)F|');
define('SECURE_AUTH_KEY',  '[07W3f1x1Emu]f8NGgKYp--qd$^jJuB|u!=5p#zSz-;@#*e<>t<3z.Hg(2Y|BHY0');
define('LOGGED_IN_KEY',    'Y!-Kukd#MX11.r`ABu.-A+]eUc-)~{@F-~Q=Dc{6NjIS<63(L/(6%Ee<ZwV1>bSi');
define('NONCE_KEY',        'DB=ni!N.4&FJmOFs7O-kE+q+8J+aQVn$&OAv+ d?YTj<LB=cL,1o[:O+Vo=#}V_K');
define('AUTH_SALT',        '(~+_u;t>D2wbx)JB_`7+v`N-IMztG69k>9Y|K~xvnQUX)=UP)oqu9&DjyNnp62jL');
define('SECURE_AUTH_SALT', 'h6R+x?JGjsw4@9V5?=QI5<gj<`i=-AQ8[U7%D6/#+uRW|y#92yHV|$z5|w&]VFWf');
define('LOGGED_IN_SALT',   'K8#YJ&hr7$m/8L[|Q`uiEk;iF79PSOIf.arofh#~m^h:*2a8zEsw3%<=:K`cb{Ia');
define('NONCE_SALT',       '<hZ)E>sU-F7IynQ(&Dl9L7+7IDf->wd8t-Kh%t)C?#j/}+eq|slNa7.@SW{-LZ#u');

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
