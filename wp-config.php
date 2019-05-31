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
define( 'DB_NAME', 'safir' );

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
define( 'AUTH_KEY',         'E(@/m+%DlLea|0PCJ/t2&e=)Q*cG}IC.T2j?*;G^{l1AmR#X7kDnb{=|KDp)a6=j' );
define( 'SECURE_AUTH_KEY',  ':Q9[1[X=&djNs5CjOU9)FN_SmjRh[yB[aj?/-M5dv3)!<`P8CE!rc7c!%2Ri;6Dq' );
define( 'LOGGED_IN_KEY',    '/X=^lBGvQx30lrk<GsTfkyrO._7d@A;LW|A4:^H7x`EGw0,s~Q+#oT0 `#^cH$_b' );
define( 'NONCE_KEY',        'Ug02i%Ne&;#a!&?8J*NIom;s4rOJQIfmKm$5T4[NGP]27[_518Y;{F<g&?}>H+j@' );
define( 'AUTH_SALT',        'O!lUH4RjrZcSf@s08ZNW4rQ:d8Eid?+]GdO] ):4 -l;JPVqn97I+qzEZDhzw`al' );
define( 'SECURE_AUTH_SALT', '=/*Bz/Ab8S2f$Rl,_8{up6zs_KHY[t/hdAfM=g/h{w}$q-Kv(l*GZ,|UdDh`tE.<' );
define( 'LOGGED_IN_SALT',   'T90`%+<0&./N^V`}p.e+58-j0ygs:mbV>K.lv|XYIuDGBS&ip.6MSH2I`qp?l1Yl' );
define( 'NONCE_SALT',       'QVvvm~r]( EqR?iHP@mh2kN3)]DuZxoOBu:fERlGSot,F^D(5^HR1V{<*i4.a&}@' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 's4f_';

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
