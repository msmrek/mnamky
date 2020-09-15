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
define( 'DB_NAME', 'mnamky' );

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
define( 'AUTH_KEY',         'HTJV04r^k!9*0#D+g+k0iffXP#@bcJKHTz1`hAzuhdyYCz:[IlN?TzwvZdt%W^j/' );
define( 'SECURE_AUTH_KEY',  ',_?/+[:s,5WW:Orj t}#>1bspZQ0D*u9nyFy1BNMgW}Sp4&WmWY~:4:st$![hjvT' );
define( 'LOGGED_IN_KEY',    '4AC)aTF(P9YWa)qi#fZsM-gRs8Nb%a(%qp}x+[~,I/%p|Z?>Tr%3DtJ;Bd/:_s@+' );
define( 'NONCE_KEY',        'r;)HkrgXSI7~cVoL?:jEgF]6P6jm.Z56e$rsnqYVI:2Do|fawyAS(^iN}2pw5C]n' );
define( 'AUTH_SALT',        'b>5.423kTBbD-3wJ)SmJ5+.Ga>RO)y2.lSYaZhbT~0&D3>%@I;mH1rlAB|!uk3d6' );
define( 'SECURE_AUTH_SALT', '65?x<R]s .@k*0m-lXhGfXV11^*>+j@CdzJJmV6oXM 6=Hkcd_1n=:JyPZok@1wh' );
define( 'LOGGED_IN_SALT',   'kq|ie<$pxlvRDn&UW^6eogOxE;TUo}O0TQ5eHKCi2&]_PaMF-K/_<kOF/?L17iD1' );
define( 'NONCE_SALT',       '$xF[JGEQR>wevV37t=Ca#=avxvo4RqwTsRH-wf`}@@mJzB?ic@r~z;WsP|:dHph?' );

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
