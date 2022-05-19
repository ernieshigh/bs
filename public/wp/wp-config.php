<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'testbs' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'XCiGZ, p?f+`((zV}_O7,n3AU}J<7#7,x363LaL0&rfd]_B7N/A3O3cecG]m5qJy' );
define( 'SECURE_AUTH_KEY',  'Rq}gWe%G7@a>G;_G^Kd;;}w2$A3`004OXM3g4pGimkEQB<M%x&k@0Kp}`nWf3y.p' );
define( 'LOGGED_IN_KEY',    'O7!2(@r|EC8xQH@{x&/`W,vWa}te@j89n`[AY_u$iMFe@=ZJ6sl.4;/<4uv|Xklr' );
define( 'NONCE_KEY',        'J[n&S5x@ginU&~n4OP=IcmVZ~r+u;/QOkciwjO_eS5=!:Vf(|T`~HU}O+98yl4V%' );
define( 'AUTH_SALT',        'y&Y}KAiNm{J(<&o:CqAsD@,GNgw*|Z:UAS-W@cIVN,tb}qG`rur>LqQ&PpVxJNRT' );
define( 'SECURE_AUTH_SALT', 'Ioi,ep1Q2S:ScNXEU9es^}ff|zUc]I-GJ>%8-/C+FF0+mTR7k)XfUegFz]y:^_1R' );
define( 'LOGGED_IN_SALT',   '^!VTC$`BN=(,Dd_m&)|jcYz|]d()U_ !<8ab9JDz6j]1K]@De7$9g{@*LNN?`#eF' );
define( 'NONCE_SALT',       ':ohtfE?fc7-<@iy%AT|sZ}pN0y*Bj|A5/`<xLT:#w@db.BF.6W#etu6m<`{k*H|h' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */

 define( 'WP_DEBUG', true );
 define( 'WP_DEBUG_DISPLAY', false);
 define( 'WP_DEBUG_LOG', true );
 define( 'WP_DISABLE_FATAL_ERROR_HANDLER', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
