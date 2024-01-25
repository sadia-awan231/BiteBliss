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
define( 'DB_NAME', 'website' );

/** Database username */
define( 'DB_USER', 'website' );

/** Database password */
define( 'DB_PASSWORD', 'website' );

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
define( 'AUTH_KEY',         'qjg;~1[&Kt>lCX}>C7pltu9T~w%:]M oiw|g7RSwrtJP9&f@1?!vsv$FpK!3CA[j' );
define( 'SECURE_AUTH_KEY',  'G(lfCfv[udVd&)Yc3Sv! %3p=jTva_x_82@g0qdWQmc-h&w7{(^Xz8ewuzuhjX_z' );
define( 'LOGGED_IN_KEY',    'Pt){gQWboJapv4/(^,?B=l/Wim|:aXO V(Ocgo^Sba)s*^HEf`3| H^Xa F&GE9m' );
define( 'NONCE_KEY',        ']z?5Kl(k3 J~A8k,N~0OU=r3~0=#GmEOd9WC-wx!TqmcQBH.9)Vcn]W5nBZ7Q7b~' );
define( 'AUTH_SALT',        '1Jl-<g6&4NXHlov[AQA(x0.ljC3]>KKnlILoKcn}~g81y5]DIjaFlIBypkSejbpF' );
define( 'SECURE_AUTH_SALT', 'u&rw(eh]Z|fsOTC&kqG9~RZ;pf^dfvDdc;eu`}B*:)8i^vUrPsK(>s$9!U{.4j@M' );
define( 'LOGGED_IN_SALT',   'ug>Uf+3e.?@`1@J)Ae ?~3/X]-uFLF$xzd@[V<wCridslkP%{3BSC L6ljY{lD5:' );
define( 'NONCE_SALT',       'mW1@k.Q/-X{N:ZZsBgTWR$Qw^ZB/TfToN((53{L|!<tmJ_](/xA-[X-vBr3~/0A6' );

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
