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
define( 'DB_NAME', 'ecommerce' );

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
define( 'AUTH_KEY',         'V)5B $jQ(q|h~ZrlB|fu2t{h+%3& /M7k&^^Nv)FYJ+@Inw@07mlj/WVoZ:WZ!G&' );
define( 'SECURE_AUTH_KEY',  'FcpMo2)Fw=7r<7_aPXPQ-:X=?7qRZXbeFl.KP>4|D3b+=YB+:,W;Ab}x,jl:*S>h' );
define( 'LOGGED_IN_KEY',    'jGje2EBdrxy4k&;nI5%4:`#UMVx&PVPAaOHd~H!.0&xm3uC/evg5[K$YtN{H&yg0' );
define( 'NONCE_KEY',        '!s>jD:A!T~nYovv?E7FnMzC9;J=Yyac=.,5dCf;ZtY[K<3HPgY+NQ3[wPlSYONeK' );
define( 'AUTH_SALT',        'o~XEZfI*9PG%WK3h?l@0FHR5E`scEHh)R@jqIb0bnL^rzyM#&O1<1vrbSj.#w>wH' );
define( 'SECURE_AUTH_SALT', '-TSJTu0}V:5,BE@R*kom{dhV*+U_N%RQ|Air2ID,Af_gSwC3m$*]2%vq>=B2O3*k' );
define( 'LOGGED_IN_SALT',   'iZODb ;>6PPup>l~>Y}*zW,zIt|,2nhE$D0!KpE>e+=}$R99]oriQ$rdY3mD!wCn' );
define( 'NONCE_SALT',       '$(O|~joE>[0k6ly_Ol|T@c^?RVLSi9vqv8l[$3-6weq&9^^God&Dey;~:jLESSO^' );

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
