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
define( 'DB_NAME', 'wordpress_cms' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
/*
define( 'AUTH_KEY',         'put your unique phrase here' );
define( 'SECURE_AUTH_KEY',  'put your unique phrase here' );
define( 'LOGGED_IN_KEY',    'put your unique phrase here' );
define( 'NONCE_KEY',        'put your unique phrase here' );
define( 'AUTH_SALT',        'put your unique phrase here' );
define( 'SECURE_AUTH_SALT', 'put your unique phrase here' );
define( 'LOGGED_IN_SALT',   'put your unique phrase here' );
define( 'NONCE_SALT',       'put your unique phrase here' );*/
define('AUTH_KEY',         'aP2=ITbrx-(,n|.+F%bQ^IFVXnN<@V`GdZ]{|iV{MC)Yo:.aqN:H#XheF#o7`ki{');
define('SECURE_AUTH_KEY',  'Ht>ZG3pu.&6*D(M|_={&q=)jb_A#eB3#Y,+1-uN(+!C1uE9a~P$pgD%+gufam$0C');
define('LOGGED_IN_KEY',    'mKA=v-+7FY};+0p:{zJ{i1&9$(Sf+nX=xv(/-C<XFS,Io6]Oob}Yv$V5}Z?-rU0j');
define('NONCE_KEY',        'NJD~J]F #Sc68F+r>pc`+pe-x#fF&5AZX:Belx&luFC<nFw(,WB]WrbLR+fCd]<W');
define('AUTH_SALT',        '?K8k4}x;8bv|UDXMMr 0ctifwGcmNcqO:F$xIdP<<S~;4Nn6*U5!e?cHtPNy1Q+U');
define('SECURE_AUTH_SALT', '65ZU)ZPJ~+_>y8J_j.Bi^<Ke|}2?s!TU|--j<B3d{=.%!~JQ$41i7K?-%{ChQiE>');
define('LOGGED_IN_SALT',   'o6<D{#-C@#(M5F~U,(@@OX`6u`k0b{,{LE*O?/z}X@Y5T,Z&T@P33y-&[Y)+4tM;');
define('NONCE_SALT',       'Fo^pWh`cY-A#66Yr4m$T/:nw-w 0CX|>aCie|-&(,qauY-UR>/E=+M9bJ@SaU-zk');

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
