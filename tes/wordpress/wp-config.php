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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'ErHM>.Pnqp#wqXGqR<(S/U _i[s@O,d,VrMwj9lKN[-Y&Fjx*Svi(_jQ@K-]|<#}' );
define( 'SECURE_AUTH_KEY',  'cQ8)2*Mf-lgQjRi0.*K70<jy=&.1 j+oMjfR9e]RY&KW)+7Z!yzsqai!qahfr<Fr' );
define( 'LOGGED_IN_KEY',    '/y9-uv/.U<qoJvv+,n(.-A58nz-+svrzYx5F3UoHTCep2r]CvS*2m$]?GYzn~Nc&' );
define( 'NONCE_KEY',        'fpW]btS3xDWKo6!0nDR,N$nvK|<mt8K!%t`*JXuyJ|;PeDEq`z:c8wQ=~-=sc87&' );
define( 'AUTH_SALT',        'WwryL~]b5RY`a.|I3L.1ay&?)M&pCIRJbcFCIfsD!=rP/PUh|8KdAZHBQuRE?tLd' );
define( 'SECURE_AUTH_SALT', 'X_*],PT));2bLjy3lUIFh7T}rm8qWg. %+6rP/JJc*kG8aWcl~C1CZEm+|6Fpd>6' );
define( 'LOGGED_IN_SALT',   'II:yoOQ#c>Ju@r7 muH<Sc!X?hfi#tajnT=B0GC W/_zSgJd5NF{YH4FLE0c*r*y' );
define( 'NONCE_SALT',       '6]<8(=-CM`.04;Q+%1-f^`f-^@Y2QBSO}e]ia5MMr~}8I7*ZVli%rZq2YvVbCGe#' );

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
