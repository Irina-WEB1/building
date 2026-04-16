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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'building-shop_db' );

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
define( 'AUTH_KEY',         '@e.M7906iWm%v( P.`AF70Z nw-)^HmN$=2yt7^W9m~|n YGu33XI.X0SLW%h42<' );
define( 'SECURE_AUTH_KEY',  'f9vy7QW)k5l>X*ni;c|C@yO?3z_.B*xet+ticv+P-){P,&KXg<@{S=f^0jCZn8jV' );
define( 'LOGGED_IN_KEY',    'MG7Mf6}rb>3rCMb~7Y)(,;*@j[Vik-r%~3:xbs*Gm,&>{H=5pP_bt7LS:f`Z{qWo' );
define( 'NONCE_KEY',        '~zHij}Q@Id3Kw9MJYR/S9wS&beo1f9Hu=,6y#4d@ohDUz=FB%2|@d6%31WT|^wX&' );
define( 'AUTH_SALT',        'W}k>|f+co*bdIRyuO/kH0HmJVa~B.iCz4QZrCV#X~UQ&ZN<I}c:6>Lm5[)}qX*@q' );
define( 'SECURE_AUTH_SALT', '}Qwg<4$glvBPR3@N;5EHyyq=n$%3_:,3v5i=R4IZq_AH49*xM.~C=(M`#<$vUOX)' );
define( 'LOGGED_IN_SALT',   'yTHk{>jI;dBm+u)@U~H&n`5}Bqa()Hn~iM@5d>|a[rw?5l*Da^M9DM?U;||JBk|S' );
define( 'NONCE_SALT',       'UjEd3/=^T>)r;z9X*V4kX1@m-iTQ3+Oj%)[K]m<YE uEu/5cb=Xen;`w}rQl5lOS' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
