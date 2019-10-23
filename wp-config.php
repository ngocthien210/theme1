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
define( 'DB_NAME', 'theme1' );

/** MySQL database username */
define( 'DB_USER', 'theme1' );

/** MySQL database password */
define( 'DB_PASSWORD', '12345678' );

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
define( 'AUTH_KEY',         'R?|Ly6_ZNKU-aYPYzMY%0Y>7EavMy-RyT<Cqu8[W.Yc 9uD`uM9[s,-yG~E4f*Yx' );
define( 'SECURE_AUTH_KEY',  ' G]Eyo(&myixoU3.SEkQ+SCqs-1>l&1#O.Rp-3CULsd0lW#qT5!#AV25x:.Yuin[' );
define( 'LOGGED_IN_KEY',    'YO`4!Y*M%S)IE?L1Z.W]7:g^,[Za}#28cNE!FYMo26a9w&@%iWjoj()+*+:HRAb{' );
define( 'NONCE_KEY',        '9YMN%GrYa%_x~a1b6H4}4E$Bm*]`3_I_fd%#YWi$EvG^Y>=A)R4p9zAjixJ#7SM/' );
define( 'AUTH_SALT',        '8~(UUUu[~7e^p)J4YQHB@N#aS 81%_J$=(PD9CaTfP6ZFz<0 kO@q/?l xoqZb)U' );
define( 'SECURE_AUTH_SALT', 'xDJ8uF6G&bLOO&I`xC6P3YlmD!*gq,WWT4] V0p7{Q*l1ZYmLXIJ`I<){2l!nix]' );
define( 'LOGGED_IN_SALT',   '5JbF4Os?y)N((/;.eM|Je&9gV*mUYJA}&|CUpcDTxb9YT /%QNyXuYZ$t_8w/JB:' );
define( 'NONCE_SALT',       ' ~3^3[s7.ev0MQH!/3R0 EjQMrO0]Hqt`E}N>0Am&*(h1Le/3NDvEq?6?]IxjjIQ' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
