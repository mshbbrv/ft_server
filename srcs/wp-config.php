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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'thjonelldb' );

/** MySQL database username */
define( 'DB_USER', 'thjonell' );

/** MySQL database password */
define( 'DB_PASSWORD', 'thjonell' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '53=SOZ--R[<cma]0#q]C[<0ui}u8L&fGg-J%zM@:8A-;3RP5_`r+^B$ydhK{DHao');
define('SECURE_AUTH_KEY',  '%s)JBd8Kk6mFS0#-1BToOi^s yELmjCx|TF9p(L|PKRWM[|6UP2(agukc!=.CC<r');
define('LOGGED_IN_KEY',    '[(]6483>uG[xE|EZvU.71Cdl-U`E|bV;4;M4=-^~ %Do>F`M3%8#`vP.SI*S4yTS');
define('NONCE_KEY',        ':B-[(/$M4FY4ud(qy%epOHD?l8aw>VB-dFZ?ik2}bk&opO+&,}?z9CrKGh8I*{K1');
define('AUTH_SALT',        '-Q;O:@c_Rq+Ow^S9)~/FAL!{oCHV2v#]{t,lr]|4=WCM)WWepI>0B->|2F)D):xV');
define('SECURE_AUTH_SALT', 'BqgV>h&v_74Kc9$wn7`a8`f:+etf|q/)9 ,9B&v1_Mg9aR`Rble/#N$I-1}O+3eY');
define('LOGGED_IN_SALT',   'jR7:<3Dp2DO|vAIq9VH8~ALs~f7]SkuXKD:Ly2N1>C7j[9w*+Mx*C#C+7TALeHg>');
define('NONCE_SALT',       'X*x3.,~uMG}#=$Te/_-3an%i(enosHF>u3XwFy:+fSt3tJ0Q[qi/&Uo@-{XPDF?A');

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
