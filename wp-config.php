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
define( 'DB_NAME', 'webbanhang_wp' );

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
define( 'AUTH_KEY',         '~n&],F%=i>L;yf`-{ZPpaVv#M 2|F_o0ZoJ)}&0m]e;@}-$. 9[f<eh>?8$PIF8[' );
define( 'SECURE_AUTH_KEY',  'm_T X)a94lxA,oSTm9^I@d<^8z4N3|L!)n(BMB^w([}>Q49AzP25fpD&|Can3x/>' );
define( 'LOGGED_IN_KEY',    'pxZ~h+lT`ynC~~WN4-O^V:n4/3!AI.9Gf^NfwL%!2Y}B[^KV;|S-30K4T/YX1Kxn' );
define( 'NONCE_KEY',        ')D8IrFXH!mb?}}Q7eP@It8a<|6y*r0C61^&a|6.XS4K$ht=$n`&G4WY4$!^=RNeJ' );
define( 'AUTH_SALT',        'F4g;@A-XdsjVTK;1d!VQ&mbj8est WvfE=j:?>XZH|W+d.!G7HmWh83%o|6Q6xmt' );
define( 'SECURE_AUTH_SALT', 'Kn}36hCRx-gj,*Lqo:/`,>3S=|^EpsgWs1wAqk-]FJO_:1SIR@?+SjPxK}Z_*JO=' );
define( 'LOGGED_IN_SALT',   ']$WP1O*YCWPhR/f%QG/qmJEQb{*JGfbb}SFADYM>~:.YBHpwhhvGbh&gz$|p*!yv' );
define( 'NONCE_SALT',       'U#=r$8~YqB8F=8Ox0mr=732>}gr[PR=>#aCdT2_ QaSB<E0(pmSCP1;8%=,$@z{(' );

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
