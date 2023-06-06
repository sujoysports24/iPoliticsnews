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
define( 'DB_NAME', 'iPoliticsnews' );

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
define( 'AUTH_KEY',         'n?c>V~$i2:-~q~=A#(Ok@?|jC<L!n N>}sGo,(_[:3oNP*xLK>T_4~kB`)!drdXA' );
define( 'SECURE_AUTH_KEY',  '0}+:Ln#?2QRBb<Nscku0K=Z7t<#-t|=9/D,m;XOz/EtZW:([9pKOwuUR@l#atR8{' );
define( 'LOGGED_IN_KEY',    '0x}xRaL?oE%;.WQX^L D,r,m#+Pi@_e~jRr/P&oreVRJ[d/7;JBK2pr=d0VAuES-' );
define( 'NONCE_KEY',        'txTRn9(QPbAkO*)EUW*+]sn^)E0oTUZ w^uO)B^jy~5fkxO?wu@~:x4UD thmx~<' );
define( 'AUTH_SALT',        'i*@DngY8{Rs$v3Dvj1CL:nkBmIlUXZ`61C2h+y:u|xr6UMD(ZJKJp1bX-GzV+)=o' );
define( 'SECURE_AUTH_SALT', ':%}AXh:G(E/CLG&}j`6}oH{%8In4}h)T |MEUSVqHti&W{Ev5D,8>2,!I.LWF8c@' );
define( 'LOGGED_IN_SALT',   'HaG9a@uhyf4sa%dUy~5 kwIG7+OLVSi_c)3eJK1tY4Iyb8O3pxMPmjmA>aNKJWdd' );
define( 'NONCE_SALT',       ';>?[Igaz]Pa~HX;/ M Qa}K~eqfB:j8aRA~o3QEuo6Vv2:YdY=8A8`|9lZ$<RlVL' );

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
