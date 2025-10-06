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
define( 'DB_NAME', 'wordpress_tango' );

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
define( 'AUTH_KEY',         '>KB@~7]+>Dgxu^xg{b?q}C?f<KB2!YJTj}b+?>k THWp@G0aNE8:1t Q+%V.~MSC' );
define( 'SECURE_AUTH_KEY',  'G-^LU1!C6!~V1!q5CJp6yN{#8K2n~^xJY4;4RmjAE]%-PWPUbB9:@@(YP&Ya^;N8' );
define( 'LOGGED_IN_KEY',    '`>W DE*e}c>4erQXx>%3kqI|+*V:pf<}`rexQ5Hds~Wjhs7z0V@48o_9_gCA%Y?z' );
define( 'NONCE_KEY',        '?r+/lLcHaTcQ`l_^?H}- ts&4A-VQal?+aul @Ms+4Z$%|5eDYOtrPO!`BZi~djK' );
define( 'AUTH_SALT',        'o57DJ+}T+IZYEeeQ?o#!M%!90e11G2v]}Xl^j7wD]xR6[IK:/V4J5VN=w;vG?5+#' );
define( 'SECURE_AUTH_SALT', '*u!n.~?}Ah~bP#_XL&<fJh9DVgk^aoISp/afVYSi8w)PVz}e8_fd.CA_q.x~1o1$' );
define( 'LOGGED_IN_SALT',   'DEjV+LOYr36 L}m4q6/Haj_Xrq^AKkAzlmZNleJ%1KMND~4i!6A#>^lVuVSS4%<>' );
define( 'NONCE_SALT',       '{G$7&N^uV%&0dt6uu(~.n>fn#ap>+=jOQ8`HSWC;X-4TJt}<?DR<&^cI|?sbGnY[' );

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
