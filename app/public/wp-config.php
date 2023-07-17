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


define('AUTH_KEY',         '4Bn4p+EIASxLoNSIisB9EraAX8TKh4OsZMJAWIl2W610y9fAK8iYvUqZU3DkpRE3HUjnReQFIXO18TL0z5FlpQ==');
define('SECURE_AUTH_KEY',  '2OBSylZT8ewz3250ANIcx9pVkpwDH50/asPoTN2HcqEU6ryjWLjVSgNM52c0O7y2d/bc1TCdHFAXYOG0Mh5wwg==');
define('LOGGED_IN_KEY',    'Ll60dIyvEoBwul3RMz+x+sf5NaMJHIqJKvPB9K/M4u85w08mGk1Xa1m9TXW3Ix5GoyJT5msgcHPLPJnnro66YA==');
define('NONCE_KEY',        '6S/Er7cUyGE1B679n7ceZdkg79F+A6292484rafyv63i+5Roh4P4AJaGAVFv/o1Aaj8GWOP0ymcOsKlhcLUDog==');
define('AUTH_SALT',        'yJG5k65AZYv5pkYjLe8R3UEc6b8TpKyBnmijHQQW7rMYTiFRxMtCGZFDU8zt9rUls9qLvPHXTK4pVRIXdthhDg==');
define('SECURE_AUTH_SALT', 'fLY52Sjm68X4EYOR5sNEuKEyf5oWDF6FGGnvXotbiFAqviF6RSWwzIANhryRh/IJ6SOHkL+xCZ1rBDCzDfrYog==');
define('LOGGED_IN_SALT',   'Q52vs/nyWlTxum+DO8Lzw1NT4GB1neR7u1HVX1EfGy42GKY1050grB/apVZ6GD1cE3bAC8E1vW9AwByE1zaw+Q==');
define('NONCE_SALT',       'xnaZ4YhZalz+/CmyGPfa6kYYp9cEU0eeyeHqqnUUqxU1XvE4NCy1xBfJGRW14SuCI0/OLXnLKtBNZYOXHo1iCQ==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
