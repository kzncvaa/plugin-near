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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'near_plugin' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'wD ]-:Sg|U0__=JX&m8c[Z=|d1VJ;5FT=9385Yx%pFo&QcNUX(C>:;e3UfPk$J=P' );
define( 'SECURE_AUTH_KEY',  '%hS./Q7I6n}`l]J n>;|M%0$T?!Y3qHWhOo_:m-bd4&ik,N)#ymMlun7gPLT8(0G' );
define( 'LOGGED_IN_KEY',    '[UO!5)[-Zw[])xkI7kxBZ&u2lTvYQNXX=5zZY/:Ej^cY6BRXks`aDXD/I$i}:3(m' );
define( 'NONCE_KEY',        'Zy/N1[WGmGur5&I=+P,3fe}-I=rN5:I(bKQlX31q&.4<AY!{~-mf`Y@oU;y-o9Bc' );
define( 'AUTH_SALT',        '%F^=q#E^&+ ^8cI8`{T}gQ1!WAqf2FOqAu;#d-O.<qUn=ffHKd}O#RuO--U#HB{w' );
define( 'SECURE_AUTH_SALT', 'k;o%1.rbN8w34{AY6FmyY=J9[m%s8f56vc>4ep{Vz2OY|7rme,Mur<,xg$_m[`Ac' );
define( 'LOGGED_IN_SALT',   'Sr/y1HE-Lwy`&P0yUu$7Ny}`3E<tQ9b9jrFo~.pafrpkdNfZgtYj!GAGoSQ}=:Dq' );
define( 'NONCE_SALT',       '6L]VOdJ0FPj1??TIVf)w3nbEExeg<-Ci.#P&ZD cV9ihV -I?8:+Ds-9bH`fBO*[' );

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
