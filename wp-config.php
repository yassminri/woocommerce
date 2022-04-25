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
define( 'DB_NAME', 'bdmonsite' );

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
define( 'AUTH_KEY',         '9T$fTPg<yoQ( $_B+i9uVoPP]1Cq$3c wl_La9jH:*R/$t(6G:S23NG>-0XFq/_R' );
define( 'SECURE_AUTH_KEY',  'Z9@{yGZL.u/}5Wt8%n+l(_=$|YCX*7eV<.<_Vi0 zHiZd@.DbR$u(toa>HfgGHCp' );
define( 'LOGGED_IN_KEY',    'G(e]zJGiyH0n|2PEH8R9t@sqRs:][bJw@&On>|!1,b8)H1G ;rt-N(C[267D75/g' );
define( 'NONCE_KEY',        'Zv2Fw|K=co!vWD,pD(gL2}-}<Foydri&Nnq/Y:VVRd/3UfAdTXl;;YeEo9a_#n>.' );
define( 'AUTH_SALT',        ',`qI4y9>7S=p|+}1w&.?S,*)1$xF9v(ZK{b!]WlpHt_lT{<s0hRLD?;V<0H6(@*`' );
define( 'SECURE_AUTH_SALT', 'ms+[}$FG2#:2Y*)];a%@ad$LW=8BS)8~I~FEI*N/XSB10$8k-rpv(5)B6QH{^#En' );
define( 'LOGGED_IN_SALT',   '+=?2$c}%^;x+Ir?UXJVNG{(M=:ig~]<8SW]<hi>P}x3<MIx%UW0ju{q|-mM ^BrF' );
define( 'NONCE_SALT',       'PhWRr`qhn%q@@p|bk^Lu[|k_UUQzu+ioi,e_YUSb!P<<]I*r(<^F7X]E=uS*)OAD' );

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
