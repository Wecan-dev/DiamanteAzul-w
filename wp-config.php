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
define( 'DB_NAME', 'db_diamante' );

/** MySQL database username */
define( 'DB_USER', 'adminwecan' );

/** MySQL database password */
define( 'DB_PASSWORD', '_*8gTYWqM9FHU' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
define( 'FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '-:4B2JpV18bFkZ42GgyS-N=eskMOKqoBjajidYe<bW&-@.:M.X0ik:iy@LlVG23G' );
define( 'SECURE_AUTH_KEY',  ',S68bLx!sii~5CB/c=-fc{TX4vmXm)4PnelcbzRkR5tf fZw#=;O1}uBV!W:ZT`N' );
define( 'LOGGED_IN_KEY',    'jbh5~;%0t=WsNv 4dC8Dc.UvXfaciusyG=t&qI6znkCD}0;(l#,8:#OIyght(l(Z' );
define( 'NONCE_KEY',        'Sr n+^0-R:u8K%3Bq6VebfiLCwO2ooTd@c0~~C6~K^akN9NmrlX/ |gt7bh!JN$1' );
define( 'AUTH_SALT',        ']S62PgUU=vH6l=86Y6klR>^@<DepqZCdzM5+_3jKG]{$B.kBee5&WT}DAk|r 240' );
define( 'SECURE_AUTH_SALT', 'yW1q.Svf0b$q@y{vt=l1o$K9_]f93W|7,B&>[kX pcs6g1o%`%m[a#MAAC>((xwt' );
define( 'LOGGED_IN_SALT',   '%wGduEP ]M^FxCh]hcS5]K=W,>8)&B=8=U>*O7o<AfP9@UMWy^mqcm~xS-A.Tw)k' );
define( 'NONCE_SALT',       'O}2IL>/%3!PY6VhnyZ%QMvjsPHZm6Snf$Q 8fHCNLUJ4Tj~J&y~*oH->3#M|fy8N' );

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
