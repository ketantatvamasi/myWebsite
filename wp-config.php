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
define( 'DB_NAME', 'mywebsite' );

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
define( 'AUTH_KEY',         '&RB9>v$V#YDzbf4*[F06[%%t`*A@P${.c*zj~ZU2n>~W!bJQ?R=E3$!(?bS4aZ_,' );
define( 'SECURE_AUTH_KEY',  'Kvv`b8Y+dcl!w2F97sTnC%{O5$R{A?lDr8nMln@pA_IkBxZt^ZuP)S|^l-R~~N<Z' );
define( 'LOGGED_IN_KEY',    '[0V}EE!c|D3|cAj!9]q)2VN[!G.f#TLbBI|_<wPZA`:qgnD}_o76,l^5%L0RYYi.' );
define( 'NONCE_KEY',        'hg^2TczJkQDJ,9<;MxeUAv=7S6~>Tz-Q!RzAT2TQ0kPgYHSO8ryid30%6]eA4*?6' );
define( 'AUTH_SALT',        'XhI*nm~&:h.RmpSh74A4ThdD5>}/M0?@%~MU3}:#| =KqPZ0jUl4DO%k+!hf-P%1' );
define( 'SECURE_AUTH_SALT', 'XP%XtP~aDD<7jd,e~:.OIFI^q(D%m<JGhbR7n5Elp*-<n%{*pT;~ ^DGbGv7+&p3' );
define( 'LOGGED_IN_SALT',   '3Ie~BU>?,c}X.vB=.MJEpE*<70I980}9SH)`>99,?N6bWxQjB5!At(Mfle6oGh01' );
define( 'NONCE_SALT',       '`o/3Sf1I)PpuUt(cgw3}3sTc }QIO$TBgJzob)Y;3F4,hdLMb_3p%bC3t(&Oo,PU' );

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
