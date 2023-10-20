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


define('AUTH_KEY',         'Evowzecy1nyZ74Ihobkb0+OtqLkivisXAeVQZgigB7sfpOJrvXOOpeAS2wlMIia37d1s/pHLd07bkMkHGieGwg==');
define('SECURE_AUTH_KEY',  'UgV9scAyjSHAjP5xZyaONw2bmQVeX7mIA6BjKrpbZM4YFD+/zxf9WQveNjtGG1y5AxuE+SqML+NPQ2qnpbF9OQ==');
define('LOGGED_IN_KEY',    'beBTYmGaLtThaOY3ccYjkK2xrnpO9oj0T22Ic3OdDl3cVea1KDPxaZgLFts57c7RqMKA/pMghRGphJrbJ+ZbNQ==');
define('NONCE_KEY',        'pLfACjEAlDBfRGyVH7pzRvg1gCP8UcJOJgKeMIyVPvCgTfyJlao1Jp/1Ns9GiJHakz5YRYyMY3o3aqMY3BD7vA==');
define('AUTH_SALT',        'OwPk8SfKxwj676JrxsB8xHA+PFuj3wM63qq4jIATJ/U9tYRykw9xZPr1UmREvo5NhL8uXePsxMe6AC5KocviqQ==');
define('SECURE_AUTH_SALT', 'OATBW2rtaKPd2D2m/osBnk59sk4DnYgKufvekRG4xWkyXMJddq70qKoihcoenXNzeNqqIo/74Ia9at6eeBHRpA==');
define('LOGGED_IN_SALT',   'mD1w+jgwqqlKMs1a9Afna25qhRadzFw1WTRhEyS7ZCQaIbtvC4L4qcfZGLP0axR2NerIpZ/5H6gr1+gTkK5jBQ==');
define('NONCE_SALT',       'M7MWFfu9GcfZ7CA1SClycUMKI984QvKVO8SIREqonMlRoWRxlxMN92hgArlfwVOrkbmQCinx0WHPN8bLH4sdxQ==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
