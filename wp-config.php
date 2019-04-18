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
define( 'DB_NAME', 'captain-coder_db' );

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
define( 'AUTH_KEY',         '!s#ak[O8?)+N)`y67]vhi/O`?er..Iu!2[v-N#JdB^CfYqx~GFJ5,ae8 h^zb{f#' );
define( 'SECURE_AUTH_KEY',  'En}> B84~Z//YMnk$!Kc<]}AEG].]~Iim>/7SqX2a<s^z5G[h%6{^m;3==J:#d)+' );
define( 'LOGGED_IN_KEY',    '9`XfX]Lf]a6h;N&*qdVAf~OS|0TE4!Vj[)n5VR7Hj<_>?Z_NL;c$+jH-P.=Hn~uq' );
define( 'NONCE_KEY',        'bKTNKDB;SmDUCY!kwb9$md_(jy`m3@*2Zp,y!?Ko]F&:GRf.)AAK2)W9s@$hrcQB' );
define( 'AUTH_SALT',        'v!T+xJ)&d._by;X}T55Xi ?*;nZ^4No7yb2>[wuaEh cs2Blh;@%!l]uh_DSo2^4' );
define( 'SECURE_AUTH_SALT', 'n5_&E  !UQh0n/9CusF>ptxbm4}SGW/{T{1pqfET7)60[9pA0BX>dX(W;,|c $?o' );
define( 'LOGGED_IN_SALT',   'nF{VN3YzH)rczB37|P2a]rTwH&=IMiK8x.Af}D!`xZBpsS/uyOA]_wrC~d0@r*YW' );
define( 'NONCE_SALT',       'Fq2;#~Mfb+njZ+af!$gu%-<J+1?rH3l]@u6nm#@vt)Qj.*as3os!^!5w@;Vi.LQ+' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
