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
define( 'FS_METHOD', 'direct' );
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'company' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         'X.n)=pa29ku,`]aJHJyRG/bIiMk+EdvF !a`6Oec[q=DS%hYFDnyLx)N=*-:@`QJ' );
define( 'SECURE_AUTH_KEY',  ':&]s^~:rKE.`G&f[%d+`S,.YdsBc+}z{a*Q16M}[:(A*PdCL38 4aE)qz7OZ~>sQ' );
define( 'LOGGED_IN_KEY',    'Wh:ZC^yx%}W$=4W8(]M>v>bT,oU<uIZgIFg)5DEFl1WUad*A=0Q?tZ?hXWl^)ZEF' );
define( 'NONCE_KEY',        '%_IZ2$a=hR6+{;0{cudM.1ZaV$`f-P2oA9f(-L>7}TodN;yI=~wybl{~HSyUSX+#' );
define( 'AUTH_SALT',        'dUUlN%ig/$,w:Bxra#SibLVM^)MCt=c1qrXDsev4vU9qG2FeXD _*t&Qw<+q/DhH' );
define( 'SECURE_AUTH_SALT', 'j!%s`<T*4?goM8G|m(VGqE|$WPf7f$$Lrt.V</e-#FX_XvhsYB0:$ytvGpCHe_9$' );
define( 'LOGGED_IN_SALT',   'L0Pq%wh}0&n;VR,UftOGCo)a+t<]Fg8F&##DAUPQMr,F%`Ake{/M}j>>WL){AGC}' );
define( 'NONCE_SALT',       '-[<(I+4u|!>,c:1{a4*F3UGZ%H&O*(RE$(UwNy{ k&0]asa&8Gd%7v?/G|~GH8a!' );

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
