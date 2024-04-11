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
define( 'DB_NAME', 'local' );

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
define( 'AUTH_KEY',          '=Gef-~PP4x{.}/*$ds0b=>T(CYWVc$Wz6$CZf!4.0&%J,<IC#pVrZWQ!h_k!2:(#' );
define( 'SECURE_AUTH_KEY',   '<B~6)yRvB]eqDSCu{wtxS,XWjNvO;=<-ORYso~LMt=ykoy<RY^knrFIe%.bC, Qr' );
define( 'LOGGED_IN_KEY',     ')ggK8;7Wxiq025: 9PVfq}Y%qj9w1kp5[`,:-h^G@VCQ68~6JsI4_cIYObKbK~>X' );
define( 'NONCE_KEY',         '4dDA7S7aPjl;P{b_g`#l%5o#1@4W,?vIbBu&9m4tZK/-h[Ah{KP&ebCohl}j~*ON' );
define( 'AUTH_SALT',         '(/Q.7qS:^j!k`(60<Y?ga{uL7v>H(}eofwlELU!vk0)&]?@-Wv?@X-A42NO@Frr_' );
define( 'SECURE_AUTH_SALT',  'n 7x2$r82UhkPY5w7s_@AM4:,_DG1`OD*V1VZhrO*&So_;`YqDYi4^QQ3N:D4@%.' );
define( 'LOGGED_IN_SALT',    'wL-o%nHRP!rie[/Ec}/w$T]l1SK?nePiU1&hIv}&w)rNljW=_Og0>f%(!]TKg.|N' );
define( 'NONCE_SALT',        '-BUNlnP?fJ].vjxY5t9rz55d N%<)?6i@}Vd:xIj4,$Yi=??d*:IZOvq}?.+tUwT' );
define( 'WP_CACHE_KEY_SALT', 'hfpg{NMk74_%<|Y.rc-YpzQh?j1, ;7y^|99RBa}?ZD:xb[r#N32IMzC}P45>^:<' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
