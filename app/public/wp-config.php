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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'oFcLKkDvZMdMpKGEBqKIQBuEEjg5UlJ2T+pL7BKAo/jHpPfnAz3Ffu5ZKyZJW8zfoH3BIrTY4hPyzIH53SQYHw==');
define('SECURE_AUTH_KEY',  '51LH1v+olJ8qwMQWOELkLUS9mzwTFYZFnRZIYq7zHSDBV+XEpkasqyyAx+lQj81x/wJ4dBlehaw/UJ7/B+t6uQ==');
define('LOGGED_IN_KEY',    'WHYQ8sIftr8FArwjfeU+VLjlwr0RSR0Tlij6xX0Ejw0jYVvp7NCbyGW9SadLPJIELQjqFcACIjFQzMWYjRkDMA==');
define('NONCE_KEY',        'gYp0Xun9IPO1JFSBlnXEn+MAeCjxUpCJsdQLMV9hFceWA64/r/CSgIZx6sca+vW7z8i6MBRt0OFWKIPa5jG+wg==');
define('AUTH_SALT',        'DHsMiiF4NO3ndq6ca7Cs9ej5tYftRvrII5Wq40k+WhPysxVfjkyqvEg5ivQnuwma0LbNuUphypy4ksDzWGt90Q==');
define('SECURE_AUTH_SALT', '+J1fX/Az3mTjn5stn28L2y+VY1y2nxUbfbwQc/ozI5nixBwYGnQq6fKjY82UHKAQFtf0QeRt/h/lwxQUBDI1Dw==');
define('LOGGED_IN_SALT',   'p68G+COYNaMxLrcuTcTA4m8IML35jTnvKjkm6izybPtBFqTE+FzdNOhbtFlp4BBbz47luSacMl6xA1OTUPp5dg==');
define('NONCE_SALT',       'FMod7cM0chGoAODAnd+0YEXW5fEXJINczDQXCsL2K0LTM/AKw8DLNAm+ZexCWt3SVG3jh7qa7ztSrqBrM7eWjQ==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
