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
define( 'DB_NAME', 'db_portfolio' );

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
define( 'AUTH_KEY',         'fwH0-48xM/n$>cKZ=n9-ErUJ5sPZ>-ZPA!O9Iu$8vZEk1KgXekwnfn$hE{+.[;:,' );
define( 'SECURE_AUTH_KEY',  'O1~Y3?yL(-/>4782!<SG%^hXy-$o[RI(dP}ELU6rRM-{L&?[SlUY+_0u(fQ?{%:]' );
define( 'LOGGED_IN_KEY',    '7S}z~%vm>dcC_>o+RabumpmMhZ}b;+.OY0h,q3scs>5sC8x@]atx/!/AqnFdV8l|' );
define( 'NONCE_KEY',        'U8j M0c]Vpi+Bs=o9HPr}qZ0QxX(xW-rnId:]h[>Y9P9whYuaY)HEvE&] C/A~0j' );
define( 'AUTH_SALT',        'D>F0 EFP[&9[. ~NIj/.5[!ALORxMStEI^46H8/4YWq=d!r:~zF*ifCMwD%*|4<]' );
define( 'SECURE_AUTH_SALT', '~hdar~UybFX)X{8_aRmvMnAk!lOs9gMUuwGW|<#.5N(U8B%(8OtI&y9+AmfD0jbG' );
define( 'LOGGED_IN_SALT',   '$KJ~!LUle,4SV(Kpdy*lF7N/=fTlTBh9hDP9<X~MNq?KCi9i2i)Z%ALX:<4./)o!' );
define( 'NONCE_SALT',       'eK|>8S&xQrc`tE-Lcka>[Rc>x,}70J&q?P6o6(c5rCH1sv]`2fVl]iXTCp])/Of5' );

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
