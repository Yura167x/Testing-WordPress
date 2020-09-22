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
define( 'DB_NAME', 'test-wp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'DvE8SA0ytfU^}hca 0KKA/h]Vhsg25jlEz:w9ej?<SWsL0[1Y3k?dF*56`<Yp IX' );
define( 'SECURE_AUTH_KEY',  '@i;,KG<C9OPc?WS tnG3g,gcT|m#r^zx*vA<0awfWkKM^/+GmHV~K[,AE@?As9[G' );
define( 'LOGGED_IN_KEY',    '(co E2%Q%^D,71756M@X`ce`->-BPO?%[{7-;{KhPT4YC+AOvh:4z:O^xt)o;(0e' );
define( 'NONCE_KEY',        ':bT-&1,n5k`)Z3GSc5*F`s9ZgJGc&`?i2#s6Tl1]R+ESD/Vg@4YOW:(Rzd}*@$qs' );
define( 'AUTH_SALT',        ':u>6Perw;B$zyvgXluRH} Jg==~e?J$^X0/dQ9cJgh;1,-x:p9XXK]X<-nsJMrwh' );
define( 'SECURE_AUTH_SALT', '}0E7G[L&,#g> R0od&&/t^IgSV8[9ck/opL}Ez,wLNJ7k02HTpAcwqvb8s~[}OzD' );
define( 'LOGGED_IN_SALT',   'LEe0l&c=!yP(/.x]ej}by?gCGIsO[qOV7%!j<kFAs)%faZ!9@j+^s#(`GO/g2I{T' );
define( 'NONCE_SALT',       '^V&3-qBaZJt**KSw,<TbV>vH`!,fPh.N%GvF+xZ-$UDG--Kp{6ISBUQ?.~+qS%Xm' );

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
