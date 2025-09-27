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
define( 'DB_NAME', 'dallascaley_info' );

/** Database username */
define( 'DB_USER', 'biff' );

/** Database password */
define( 'DB_PASSWORD', '!FuckThatGuy99' );

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
define( 'AUTH_KEY',         '.E=_+n,bu/mca3(ua+/n*2vHT*%z}>LoQ5n2s/Hf0O8vNOQa@5~KsX/ws.76*U< ' );
define( 'SECURE_AUTH_KEY',  'Th+hcaUpiCp]Fr7_4I_#B&_msiTSLQ^Q?Zi:+bR6MzA%$X;AP~FOY9j?sK4f-;+k' );
define( 'LOGGED_IN_KEY',    'a?&c8h{@y_0QrA2;n| V%3b8TnE;2xn*1?DH_E|fu?:d|7A6W6D<djh?cszmExmY' );
define( 'NONCE_KEY',        'LV~e)^T*d:6 dSTco8Mn6EMFS8t~e(lv=[JtV&0e_fegg+74t_rdJ1&I-_hIqeJ^' );
define( 'AUTH_SALT',        '#.zdkhmZmY).~plE:rU.6LXE;|Q {Bq@8Zz+e<)7Ze]Og-yJ8z{[Me&4F&Gf2L-o' );
define( 'SECURE_AUTH_SALT', 'afz:Ywx,`v~jr]jcV,[NxPgtAXQ+aDgZs1{-4dedt)pEjSY/HJ&2+e3Kb=t@5`t4' );
define( 'LOGGED_IN_SALT',   'NMq1ZtMmm#+qH017%RE&+j{;xp75ga*& G?>hiasaT6Br>tFf&me;;la&#$3#p^o' );
define( 'NONCE_SALT',       'DlX;N4:_.0ZvEh[QgT4U:mgZ8d}`9_;bYu%37SAl@=D/y<5|<ZZo{Nw~Vbfq*g_t' );

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
