<?php
define( 'WP_CACHE', true );

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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'francosl_wp729' );

/** Database username */
define( 'DB_USER', 'francosl_wp729' );

/** Database password */
define( 'DB_PASSWORD', '4-G[7TpSH6' );

/** Database hostname */
define( 'DB_HOST', 'sdb-73.hosting.stackcp.net' );

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
define( 'AUTH_KEY',         'qxyajks1zsurb705yvgvuwtt6qdalirztm6imllkbeqdewcggzypqya8pjsf6n6e' );
define( 'SECURE_AUTH_KEY',  'olw4ti2d0vtyunrhozqftqjiwmn3lmowa64oagvfarpzmyzjcpeorgcvst2jnlql' );
define( 'LOGGED_IN_KEY',    'vbpr1gccsulijjec5d3w0auvnyws9lp4xbf4bvkjxndqoujcdmmmxuonzqbyf9pg' );
define( 'NONCE_KEY',        'zizjpnnygf6z61m2awaupvnvayna6ri2yxm69zyvj8jasjeolgdoktry5oy37fz6' );
define( 'AUTH_SALT',        'd0w8hcvsada0cl1lvlztknu2lngoyt7cf4uxswmapuu3g4dyxkjsr7f5zvjfrzcw' );
define( 'SECURE_AUTH_SALT', 'yzoaqlgrdrpcyamgwzhujwq6fiiiypvrvgwjyfjtsvcplznnopaozjjegccusjp6' );
define( 'LOGGED_IN_SALT',   '5nw1jmsrjrdehhhfu92ir9a9nm72bswpc1hj3drmg7apz5szef375qr3fwuhnt5j' );
define( 'NONCE_SALT',       'ixeioxatfjbkfwsnxgeinawaa8qdwydkj0znaytaicbf2lp1cjadavewb1megb9t' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wppg_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */

/** Disable the built-in theme/plugin file editor so a stolen admin login cannot be used to inject PHP. */
define( 'DISALLOW_FILE_EDIT', true );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
