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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',         'Al[.3T[z_e#JBipps!]e-k)h39S<b7o-%Z]7?WY]jmOuxZ}oR< I-Mgrw?53RwSQ' );
define( 'SECURE_AUTH_KEY',  'b9@}Pq6u^{<_;6XP/m?w?flCA+bd `Jm+<;Xa#Y.c1wI=V/yZQW(!gC)6I;zflL`' );
define( 'LOGGED_IN_KEY',    'uE#3WF46V I%VSeY4eEm0km`tMc6TZvQA mcB)-xh4,hVI5{U&@}s ^pUzbmE D5' );
define( 'NONCE_KEY',        '3QiaWLpCEy,[yxb|!@=NzfVoP}@7<j]d&_e&0sc&U5I?Pa$b1]~LJ=H}aN?G],3g' );
define( 'AUTH_SALT',        'is(r5<0c=!@IX.-8`x&)[qcL(Xns,PbU.*h&nZ/nVZbC-8pRd :pOd.:0UtDhp9Z' );
define( 'SECURE_AUTH_SALT', '=YsOauYYf{!npw*^va~EhjbT>uQGlBg97SoZ%a!f?3B,;bxFq2dx;%$ 1e_$j>]Q' );
define( 'LOGGED_IN_SALT',   'GME/r*/:SIQhw4TEo&:S3s[HF:y$qJ()szYH6,.SRw(uMq#7LgWJi.~XzXtFl^: ' );
define( 'NONCE_SALT',       '~ewmkA;^<9%qovIQ.qQ]kERxdi-V<XpA|eVk-otSWa$pd!8W/jW*=z=>a fP0Qoh' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
