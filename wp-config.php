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
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/Users/Ass & Shen/Local Sites/chic-dressing/app/public/wp-content/plugins/wp-super-cache/' );
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


define('AUTH_KEY',         '34jljxVEJmzWZ/Jy7yi7LGGscqri/Sw/0qdgxppbctF/eDipDSNBnmQyM/eQ57hJlNlCjXYmPBJ/OmpILjf+HA==');
define('SECURE_AUTH_KEY',  'InIavhU8fygqkY6MvuRzPL/God7M1UMsmT4wkOOQK+o4jgqsQdY2fgtacEAMTvk+Cqa8FREZHxW6OCtnxKgbzw==');
define('LOGGED_IN_KEY',    'lMYhXayyZrLZE2HjsECwVHNsbYfravfCIJvhlG2dBUOxbfRRlVsrHO68kpB/4x58wHEcuOZPH/e3T5sXSOg+bA==');
define('NONCE_KEY',        'Uco17KDEbh5AkOB4v8Qwz0CtqwtHva9pEkECE/ILGJHNgsBcsQGw5we6skkbcx4HhZ49urqT807IBjAjIIoF9w==');
define('AUTH_SALT',        'NL/cfUFCG5MwkZdQsaXhw+sas5xURzm1dUNn3LbtqK4599/VEKU7lQOvbGwh0oB/0vLUB7q+BE5//WqN1xsWVg==');
define('SECURE_AUTH_SALT', 'krg8np+bHTsg/1hxM0RSAyuuymDog6zjF2aZqA+UXYMkr72CC0MLzt5rv9hcjowrDOBTVW6mBt9xkf/rE9WG3w==');
define('LOGGED_IN_SALT',   'qUl41P4xNgXNcmOCpvJQh5GCCRyGBbfX8zUychScercpaEGHqrNConTyMXsYq1I6KLODH8vZkoxzigCQcFQ3BA==');
define('NONCE_SALT',       'Pf39tsedahwBP63c3UM+0TZGqZW6aZ4pM08qbxlmAdeXx7Kb0cSz27tQ6DoxiX1fdm6RMenR2dgjlErX//cNQw==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
