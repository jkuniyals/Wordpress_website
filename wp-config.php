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
define( 'AUTH_KEY',         '2T>y(~(|fWYM;t1ft={D8)inP.%f/fH3XBE,[a^^>+T8ARY*041ATy+XBY>)E aG' );
define( 'SECURE_AUTH_KEY',  'Jvza46GS7&Q@bZy{yw;zAzC@?V7@aJ(S;fb`c0gNU_#e}Ae-6pAV~(@>@M9pqI!.' );
define( 'LOGGED_IN_KEY',    'g`G=P,^UyszcwAyQ[rtIY;}EVFUJqVl4]|FMiU6-+jM,oK@/^i:YNuZ6h)oT[ZmQ' );
define( 'NONCE_KEY',        'zy]lZ3i<B!=|4^ 9*QY!$/gZinuaj9[x8XwCwY<<-|+4e/J#uRovVB!S ;a;8X@r' );
define( 'AUTH_SALT',        'Rx8mNN6u|P%|+$F[k!*2YNk5KjBpJ8EO9(x4MdL/,M{+;Z<lJnXRZ$t-.=iU}~p`' );
define( 'SECURE_AUTH_SALT', '1AeDFew_%[D<Ug?0L]DLoS%vTBOiauFtiSvk)#RI`N$!Z^9=|C(wGS$x{(P8|>un' );
define( 'LOGGED_IN_SALT',   'q|#!LaopiP[uc+vfAY7Y$KTyf(gu<X ),,muUbif43&40[8~:4FzRS_MH% ~+V8A' );
define( 'NONCE_SALT',       'DX*e~h1&6G83lvSwUl6TxYwW$K8yc<cxHL^_W.dwE`xP}2E(Ay7nmuf2HYc6REE[' );

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
