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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'woundcheckdb' );

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
define( 'AUTH_KEY',         'OJx.F^{x4~Ve1n{5qR=b%0dUpIYXnj8Ix>4nosDQKl]gcla.Ps_m&d]Fh#31H<1{' );
define( 'SECURE_AUTH_KEY',  '~y{zF`!3QaGm~,b>rMLUmzqK]+7FU`&|o?ps{x3Z&Cvd/#G7-fu@.vqQM@m0Wp0;' );
define( 'LOGGED_IN_KEY',    'L1LjSBw%;gu$%|l/a,g*,}kQiXf!5[ldJb4uAdVa(J3:R!$/)c8UE}v5PcoaG&zv' );
define( 'NONCE_KEY',        '3A)>[}(j*U#4a[y HC(qzN,Oyo=u!_ORsh@i]#oB=~fc0!dpD>N, )X%gEPh/2wY' );
define( 'AUTH_SALT',        '!jcL$H1wq~,re@x_fCAT@:p.z-s!Umk_%Yh*H8;PO!*h #t+)F3e,7#JQx>FA$!A' );
define( 'SECURE_AUTH_SALT', '>&rOBl_.LbY0gwA+$%,1>Wb9k}v$=TtM`2l=go}CL1LZ{ ,H3d6d;m^*Ki[_kC:/' );
define( 'LOGGED_IN_SALT',   'QG^BbKIEC?%pEyAg^CGK{(`SN`xKK^Mi{}lG?7c1.F/!8,jum9cQwL|{<>2$IwQ3' );
define( 'NONCE_SALT',       '!8}Z!kq lWLKbF~YFpUo3L:^jucGpV<::<QhAN*xO~*`g|*uqnXwxNgxxDf^~/|v' );

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
