<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ram_cyan_club' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '{[<%QFXu5;{II]kADGkQ_*]C07p[:x~U^v,}Fh`oC*]2[qXlQ^2&7Inv/OJhJ3)!' );
define( 'SECURE_AUTH_KEY',  '/x{uC6V9a*.4:A8&?3F^`TJCTuf3.^r;ybLzbG1jOf5VPND`<SQF{ZZAYCIo0?j<' );
define( 'LOGGED_IN_KEY',    'uQI> 6=@HaPKDZQk<GZWTI/a1x3,X@pXD<MPXa8Oo/hJW?i_A.VG0+>{iy$7$M!^' );
define( 'NONCE_KEY',        'eKtzVc+bN.N8,uzg$H04SmiV^]{@z,NtRW0g|>7Kv`_R]ap$bN+!54En!$qBmmMK' );
define( 'AUTH_SALT',        'v6iSS`/naCrYQSd8&Fe$m4Sq$t~~{0fBs3X}yxH.%2!6eXUd))L7+]0,&c]d*}jM' );
define( 'SECURE_AUTH_SALT', 'oF}9;}U]g46CNdfiPaZe5.MB9_&|*lo5T>M-k?FW2@vwY#8kizvaBI-z(O3Go-A6' );
define( 'LOGGED_IN_SALT',   '*TC(c?Enp/Xaa:|V&:`lw<!/L[6Ds3~R+.1lq04EgPTsxfB&NR4:D0 /{tp_|_Lo' );
define( 'NONCE_SALT',       '^b%3?{En$T;()9[-2XYd&@r|gyn{TN0*6}`{T5yT2/PG;`ParrA|n:p E!cj=;ks' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
