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
define( 'DB_NAME', 'mywordpress_pauican' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         '2m5ET7zW*N4G8*{*q6.`+SH<_HLtsX2edOWaEtHTU:M1}]oaR64I7C9Xvb*u?LbJ' );
define( 'SECURE_AUTH_KEY',  '<d1as3I><rzG9d</HASlh^w8-@l}JGv*b}PZ59}D=p:=rL=Tbi5Zwfe4^jX:WT0W' );
define( 'LOGGED_IN_KEY',    '@{qRnmLf/.l3e2F/(k{7_NIO{^eF*a8}ct{}%O31`CliY!wKUm~YbFi)Vf[O:}{2' );
define( 'NONCE_KEY',        ':qM$uvI7ey3%3!NmNs^:c[mx~fH,TBjS|)r[edB*apqb^ExbW_O[WRR|9n^A79IN' );
define( 'AUTH_SALT',        ',V`^Nv:z puJCxP{p{r?Xd?bsdXy^9@FDq^SP[jY@JwTJArsm_+L}zFOYq?-]-D4' );
define( 'SECURE_AUTH_SALT', 'qDTHo?pB;A_l~C!/N.,!|2a^/.lI*[BE#GjcU.RZYd(<)QYTM~l?25jV3Cv0|Q/A' );
define( 'LOGGED_IN_SALT',   '*nbiI,eSkfPuY5zqZ;W8$=$^3 =[n]7mho-Jtl@1U}}Ab4<y gHC@MkGp;2I*jem' );
define( 'NONCE_SALT',       '{i@N+DX5JwfFhb6<h3u}Y-zN:t.4/Q`WX3wYe-cP}@QUB;$M~b=rA,U!uQLXcl2[' );

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
