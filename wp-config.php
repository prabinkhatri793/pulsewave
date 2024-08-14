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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'pulsewave' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',          '/A=b%avh5=*(!.oFNP|k1_^13zUyJ-N2#{zROo (~G~NZo^OAwQzQh&uo?h}t;_=' );
define( 'SECURE_AUTH_KEY',   'Ik M/RCWK=5-261kxp{OkPQ _>DeY<*aVnYumTg?dnT<LDbQ7Xp8@yw=4urg`=K|' );
define( 'LOGGED_IN_KEY',     'zXwgG,1e)?*[6r Sc@tM KMWdc;}~0_&ZglyA$`U%xf+Hv!;JD.<ZvVxUt0e:MF>' );
define( 'NONCE_KEY',         'Rme5iP;heXU|<(AsmebsAw0vw(d1h$^+e-kjf_M5oqd,YM%hEL[Xlq.HwH:HI]2k' );
define( 'AUTH_SALT',         '_:|}lK?pglo-lVNe^ o$v+R)ruyeM+M}J[7?]h,X t6>Ug1(U7}q2[<IcOv8%cD~' );
define( 'SECURE_AUTH_SALT',  'VTm:B[F6=ZzsGBf}y&J!up1TCIT||lBPIH(>L^tw-Dl:6#:% J}/]~~XI.op9864' );
define( 'LOGGED_IN_SALT',    'j3uP`mGJQr]:Cp8?qc4-k*P*j.vZz<!adf2nCieb$ka{7dy1vCFN?MtB!=C9K/0%' );
define( 'NONCE_SALT',        '&uf~0=!@wrx[UGhWu5T/fwmm{n`br<=1sok=&ti`v8n-xtXG[aeFdsd/c+[jn=tf' );
define( 'WP_CACHE_KEY_SALT', '1!BZ#yUZ./g;SUup9UjxGx:w>#Fw^QBj@wm_g%C[80Vjx_yJ)l^A5z8+<fAj`nIB' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */

/** Increase upload file size limit */
ini_set('upload_max_filesize', '2000M');
ini_set('post_max_size', '2000M');
ini_set('max_execution_time', '300');


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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', true);


/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
