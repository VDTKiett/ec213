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
define( 'DB_NAME', 'ec213' );

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
define( 'AUTH_KEY',         '[BwPch0ZvJW0[=R+t1fLvQOFKKscQ~f@VVuDu5,^ZY(Bu1eVl@vX}.{)VgyU{9{7' );
define( 'SECURE_AUTH_KEY',  'z 0G 84C|^lh4^X#C-Nck`hAZGXx%OZdPXM3hzq(t~I*%93K6j>OOCT&*p vT>9F' );
define( 'LOGGED_IN_KEY',    '^P_iQ_G1{..6Uh33lHVa!tC#}us4|sGh=409N:#X!tv)d&`sQ@<HAm7gn(:D+NpD' );
define( 'NONCE_KEY',        '{|Z0k7c3+7k+SaL=*IduigV=/^?QMAp)uy?7R0ZYAIk5-~%9ZlZ+LsN8.[(?>:YV' );
define( 'AUTH_SALT',        '<AMT29.Vl Gq~reMv$<mH.n_94eNg8maD-FaXRzv3:Af+!0XD_;[p]C<Svmf|D;5' );
define( 'SECURE_AUTH_SALT', ' [Vr>6_/3 @{mp`?XS;&<$^u5}$(IgN7M4o>GF$.T7Wc2G0wSSA>I{B@s<:P}kyE' );
define( 'LOGGED_IN_SALT',   'i{%k7XGVjWStFTWAD8fk/>Dw k)*WN2`e#I^)(7wd9~iQ>lS|*l}J<fR_P;H*!bY' );
define( 'NONCE_SALT',       'B)yY+d/gaxPC* Gr)SHj79;%PQrJgQDF_l%J]YJNIyNhtfZ-&i6zX[aG ={G8E`1' );

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
