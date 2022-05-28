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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '1%q q-9{1gv./KJ+|t.d6}CPByU:M^ZW!zcVQ9:Gza1HXGAlPjV`,O%J%KyJuQPY' );
define( 'SECURE_AUTH_KEY',  ',C)ODbRH|90]~mSZ2dT)dB1:{ wYF/+)V<H#_5S~ bh>[4}(z(WmQt]1Kum7V_w0' );
define( 'LOGGED_IN_KEY',    '+k)4`6~CEw&@*qN3Q&vJ8rT;/@t*/lVl`G5Bs8+])p^<MYR 2>S_7G#.(5NQ}<H_' );
define( 'NONCE_KEY',        'pW>2tUMX)):OJQITF[&?Bl`f T,w{wjT.p=lti64n jYh379@MvHGh(Wk|KHzRH(' );
define( 'AUTH_SALT',        'BJP %%d*@0ww[.(yrd[AV]_mj0YMeL1GGBT7Kw{P]{ID;v07Uv~)F5bm9WJd$V01' );
define( 'SECURE_AUTH_SALT', ')]j<C:-(]V$eLW-I60X-LD9+AtTdGns<l~* 0:fi#65{804yv%+u.[o(xa,S7Zzg' );
define( 'LOGGED_IN_SALT',   'P!e|iSHBm3rQ[-eJ*/#d{]b6_BS& zSpP{,GZ#JB;@yop;~LIJ:MI[Weqv`BOTYH' );
define( 'NONCE_SALT',       'r-wuHy2d,#H!>JekJjz&H->a.@<hM#m:C NFFs& %4k)9rN!sX)slAaY/@SfH6j>' );

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
