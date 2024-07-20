<?php
define( 'JETPACK_DEV_DEBUG', true );
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
define( 'DB_NAME', 'electrostore' );

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
define( 'AUTH_KEY',         'hL30g$CYs*5n+9HRv@[r`x1zJhfG8F%g5bbZ34=p(Dr3j{;!&cHP0[RDjLF>|a&O' );
define( 'SECURE_AUTH_KEY',  'ivM#?;!DLgA@nTR%JUE~s)x($CIP]cZUub]9-bG!m=uKIm;~}m+t9W:zeKY,w96_' );
define( 'LOGGED_IN_KEY',    '[^G?)O/Pvc-9MMCHs}pvQGpc7fdjhN6PEvyDZn$ C9Y;:y9ZX##}kz#t^3M@xG_t' );
define( 'NONCE_KEY',        '&JvN[;/ZI~{PadVPvE$m.>IMO_#O0WZVt_S5}b[<xC%9B]V[9DLCq$gE-o;vzsZy' );
define( 'AUTH_SALT',        '79?GWz0dFkfi!EX&B&DhXA( Iot2c(MF8=R]uO@Y0YrDHqA{6;aq#.2 !LZE-#(I' );
define( 'SECURE_AUTH_SALT', 'D^mw.~XQ,?r <{32V15D^E}%5w!Hk44{@}E)gF eKXnSgc]xmkF>vc<:0V&R^;(g' );
define( 'LOGGED_IN_SALT',   'sdo;xU?iaAzgyx#~Nx$@kjUh:R[;r9fYij&X[7;M5FSspOCnVVpcNJ@935)F96Wx' );
define( 'NONCE_SALT',       'BUMtDA9<46Y_r^pB]~R`=Qf`uk# >a@<YWDnx>r{8fiiuHWf9%heQ%ue#!1y0R.2' );

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
