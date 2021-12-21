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
define( 'DB_NAME', 'examen-wp-noelia' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Usqpj=Z$' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'wnx9M81V2BxhQp2cMEfQHzLEVCFpsUGhPUlZtVdtOJlIhdGOX4JbHNUDRLyJWJbr' );
define( 'SECURE_AUTH_KEY',  'mnbl5aN8Vqt1CK5sPL22lHjOp1XWvvzbskDGkLJnBQxAE1x4xqQ2sLdAwxAZE3uP' );
define( 'LOGGED_IN_KEY',    'kAkkqnZHCRRYaX7hQuB2cpxBSdqIlVpAkBIqtfF4extc2UP7RO5mwZcgsnqQcYCw' );
define( 'NONCE_KEY',        'iOtkMBbhjieXIa87Rcb157LplpTvbmeZbTN0BJBISdpNnP80cdhHAdbWodgGJUJd' );
define( 'AUTH_SALT',        'WJcB9lWKtaGYybOGnQdis67E0exvuLo9UkPJMOBbuj0GA6EZ081iwOh6SIVDpCZC' );
define( 'SECURE_AUTH_SALT', 'ERxh47nnslufBDruck5aPLrZCIKbd4fWFgNQoPbKbzAZWlXUZUM2tJNhHVDspUno' );
define( 'LOGGED_IN_SALT',   'h4MZyCf7YzGNYrQn7AYLsMS0W0AF6esMqhFWu7lOWb9SoMGj1kmxQagJDGjbk0Yn' );
define( 'NONCE_SALT',       'nH0L2PMZjDMiUwLDLYbThT80KD8PKrGumABLvspGKauj7Hyv6uGbU36vgUiLxfnN' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
