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
define( 'DB_NAME', 'orderh2l_wp777' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhos' );

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
define( 'AUTH_KEY',         '5pb4udxbufpb0jcl0w90nkdjzxcc7ti2j007xxwdokm2pkcfxnshw3vg72ikfa3k' );
define( 'SECURE_AUTH_KEY',  '52xk2gzqfuhvuqhxe3hbcmblas83nz8otkrrs0obrxxcdog0ro3it6dcir1gpbsv' );
define( 'LOGGED_IN_KEY',    'uh6sfh5qjeprdyseiz6pc77sm9qyn3frj3kiiq0mfm91kezyq1ywe8sj6pbjhqig' );
define( 'NONCE_KEY',        'd1wwb5idib9zu0hyuftiuhuff4zgykfa7huy0nlccy9aeuw6klsf5asxr5x4bdmk' );
define( 'AUTH_SALT',        'weehddfjhd2qwkth5syknhumdir86qxssokenmmslsjv2zgxifxnxmom62pr7yb7' );
define( 'SECURE_AUTH_SALT', '5qggr4m65xr0nwaxky9qunxp3weyguis1yrbow6qyfofe1myusumulacjzzvg3gd' );
define( 'LOGGED_IN_SALT',   'kherejp9hwhf9cylzpxme5bevbmtjgenqccabq6vzohm6bemviwky82iz9klxdfi' );
define( 'NONCE_SALT',       'p9z8agdtvcphvmyemdbwcibue4qpszqruy0iockxajq0we3doeg0yj3hvvypq7ya' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpd2_';

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
