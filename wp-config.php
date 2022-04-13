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
define( 'DB_NAME', 'base' );

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
define( 'AUTH_KEY',         '1.7?R]J4<{j*&+r !t?<R;Eriz+@vf)/$ID!7YU[5s(LbfXIVSyaB;0`tCMp9b~P' );
define( 'SECURE_AUTH_KEY',  'C2F%~$ZA~]jj/J/88WUIZ$C`k}cC!Jt{M~@w|yAVA>6cl@WkxkyxkSVMt[},K`-Z' );
define( 'LOGGED_IN_KEY',    '(Tz_Es7ayM]G8Ww.Fapu*]z^D&3%~C/Cw=`JUNlOR`s^nGf|+W&MLu.k[HVQGJ`z' );
define( 'NONCE_KEY',        'p6kytPFeM)EE0zSt`8OC.8FjXHq=Z_+2%>)D|Q:38/qF;,}E9jlZ[`?l_/?j ?8U' );
define( 'AUTH_SALT',        'QkCsp/_&Jl&8]X*X1r[LP?*b1n]e.t&o5kjXO5?le$4*bxjqW1`~+qh2@,U!HDp#' );
define( 'SECURE_AUTH_SALT', '4m`?-($hBkYm-bp_u>Td`G3bX2pK^>VQ5pR5oUZ<A=&k2.$& ym$;!e&s}TMf{8V' );
define( 'LOGGED_IN_SALT',   '4rVZ6SWdfTjC8>c:78JIm3[/8xU!6(2sxx:zn1/?c_L/~JVH%}coj~I[va1mFt=_' );
define( 'NONCE_SALT',       'L<:VM0^9el0Wcyg~ *dYAk]_<9!vH|1:n~_PW3xX !V|}hyx.{}BWfxg2fhSoyd8' );

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
