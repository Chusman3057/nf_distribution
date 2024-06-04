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
define( 'DB_NAME', 'nf_distributions' );

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
define( 'AUTH_KEY',         'K%!Rj@T&_J`ff;gL]pyK{|DTuJyr>QJ*E}sk5-dZmx2yavWD$Xwyyt:;Pl:E^RYo' );
define( 'SECURE_AUTH_KEY',  '>|bZF8+P#)%[c#eY,l]P];Amhj1ARl8!<IF.uHq2O}7~0;eBl+pF31{7lXJZ0]o4' );
define( 'LOGGED_IN_KEY',    'tf.hdwgg9W4H~T:Mbi63(/ND[wQ9!g|9-BbhDv}Q^Z%E 3eZqFSead[6[.`= pI6' );
define( 'NONCE_KEY',        'Fe`&eP%u3fuZKus8$_}d+&RZq}Kz+)M/}==YLi[|q*T:qI=Bfp~FK+j8<*2.XEL|' );
define( 'AUTH_SALT',        'L,S@C^rS0&@MT;itjah30j|x/%3.E@rjkwUUp9`X^pG.D[.;oF%  YK7L8pF6iOp' );
define( 'SECURE_AUTH_SALT', '1}~0:NHkx.tM(0uF.6vZ4[g|HTl3x:RtH_}VOFR_5!4hI8/9sm~3nrc3L~lQDg8}' );
define( 'LOGGED_IN_SALT',   'JnJ20g-|9F}g>fhO^1un1B}ho?Y6xXKg@90;w<DK~/GCg f34ybW^v[}Fv4qmyu=' );
define( 'NONCE_SALT',       ')<;qtd2-oK#xv_oKnr6PjYzK!<.,[kTL*J.@-8D[}:XP|1(>O}pJFY^JS+#Xfds>' );

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
