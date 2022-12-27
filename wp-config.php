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
define( 'DB_NAME', 'exemplesite' );

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
define( 'AUTH_KEY',         '$FiF(^B5qFXGBF^JBu,Ro&NGfa*~*Q~1wMJYBX5TN3;]6MP}g&k`0R;}1,j6~7!I' );
define( 'SECURE_AUTH_KEY',  '1/ ~9TGzfi^RFfOp~){h)Va3WpOb?d_w]0c>9o[mk`<&Ct>BvqU?2,Tuf;m;v_=3' );
define( 'LOGGED_IN_KEY',    'HdrP8L0Q]t%w-R)c #e|8,Vq.NhhJE%A,j-Hgb|[f2!u)k@j{ Vf7qDQ4(E$eQFS' );
define( 'NONCE_KEY',        'nG$dm:ipDJFv{wtZ7p!m1r9Bo&aw[mBSQmOWd73mvo/{]FVtCU 1xG#K~VZ6Y8uA' );
define( 'AUTH_SALT',        'DIxh-y!zjhoNc::0};{EJSbJ8:pB)]Xi#+OY1:4OY&^n2K[o@xS0dS(3]+~RCE3|' );
define( 'SECURE_AUTH_SALT', 'N:_Eep{]U0@#i2S>KQ-5>S b?B@ikH{1#.wU]w>80H8AWlp :/aO:?ECzR$gW5Ly' );
define( 'LOGGED_IN_SALT',   '1y1{|)9!!W15!E.Ip/zG0!@u#5m>*mG)`JX$?(8ZJxw2Pf}sX)zT0su*-)r1^};<' );
define( 'NONCE_SALT',       'DCSS(;p%) xWM;CdqT06VG[y$yB|f|C :-6JsA+t0`QEUIdHC>#%;&L2$&xD66Fy' );

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
