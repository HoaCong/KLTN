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
define( 'DB_NAME', 'shoes' );

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
define( 'AUTH_KEY',         '!0i_&[AJOsjP((pI@7wcU8pu[}Q@Sz*:OX?p7kXMGw1kaH{LH.hgsro2JS1hQ{sD' );
define( 'SECURE_AUTH_KEY',  ']1n5Gk(bJazOI@BxWWUp0<MGUkV:tL9t9fb:SD!X/(8Hn{T$%#&obcVt^*zQRYY}' );
define( 'LOGGED_IN_KEY',    '-k%[p1bYuNbP6h}J>,2~y~q.z7(9Vfe:e(r+^jl4_6T}nieqO)rm}]UFZ9bq7A.M' );
define( 'NONCE_KEY',        'WW.oJ?:MQd<LNZt@>5{3eN%v$td,^F07]{Iu>:XY!y<*%`2PK=-e/!1g.G33Q]Cd' );
define( 'AUTH_SALT',        '?3KMWu:,lW,H_U?c},~Ic~=,x%f> TkZHxXxLpv5TdE(K<6cnq/p4x 3 Xm[8k%)' );
define( 'SECURE_AUTH_SALT', 'c7v&Myf+B,sZ=47{*ovhmP23`#?SF:/|_w(s.;8.i n2:UT7t:~M&-6)xU-u/CX<' );
define( 'LOGGED_IN_SALT',   's s62XuNQ2]!)GL>Zb&D$?< ~`k&c;$0w$PT+8948Et.I7J!ZN1aQ+!$tM_HLIwu' );
define( 'NONCE_SALT',       ':7ozw}0{%tOX#eWnjL,iwqL[=;M,Qw Zef@1y9V{L@<.l}tu]..hs?OLXVGfu[2)' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'shoe_';

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
