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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'kahYF8l7bRoYz6MwlT15l1LzeLcXZd+jQr5qCZib+HnGRuIoHo0bhomYT9guaoikQ+UQeqtSieYROGByLhjn1g==');
define('SECURE_AUTH_KEY',  'asyub2f8tyzhNZpJ4F9LJPK/6Ao29nQgbkxTbZdU+OoNjlHAOeEAFv0YSHSpsYzltYkm735nLG859VSb/5sCIQ==');
define('LOGGED_IN_KEY',    'boO1v1sJrzXcKFxlNlzz4W50tYtyZHeaztEP32SHCIBhNX1IUclwo1E5YWcLFoJZHLHenTbtmHkx/PAIeYMvww==');
define('NONCE_KEY',        'pIvaXCKpLiSSA8tinCQCNV5GC5Az+dN6Fdv3FiamfetWtTcQmmhxYoar+w09hvBIkwjh6qUFsx4jpOnTQU8//g==');
define('AUTH_SALT',        'rOVqMKPF6vdeDP5zh6ULbGTiqVGBEIXwtKzSuTK9DV8WYhjwbvmFxBE0VWvPLXrF6IpJUwqBUWtucSnYmS5U6g==');
define('SECURE_AUTH_SALT', 'AHUh93++DYIgOh+SzxfGssJMjuVqBLmrCM00ZxoAS0LK6ttKbywdX8zkIsGeKoPLR0j2WGLg2rK8O10u/Ps24g==');
define('LOGGED_IN_SALT',   'tQ263HuwQS3V7pOPeJzwd+7MJzSs2caIMMKU+OuCBfjPcaJfP48w4y5jhgVJaPdR/jYFSRVWlOzN5nc2DElZgg==');
define('NONCE_SALT',       'pyP4B6frVk3sJPYI2644psrihjmgR7gBTPQBb2TH3+2jlXWvIU7kz7HBFHg/QbX4I1NxQM1sFH03qG0oEwk9zg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
