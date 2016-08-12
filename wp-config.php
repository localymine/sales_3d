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
define('DB_NAME', 'sales_3d');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'hUU==AbGl5n<T-UpaS@:kIUdF=5AQ)YPLwS_9kZd]}A2H/IJVdM.l4uz$yp>=)D=');
define('SECURE_AUTH_KEY',  'mdsu)j`gX{Y)r01$-;~.fPVHOm|04!B3x12)+[L]C3&7 V8}u#&gK-<b/)tXa<{7');
define('LOGGED_IN_KEY',    '-TTyy355dhnN-(H7s^;anVl9!,wW(%]8XVMnJGI/CWc9O_To|{H i]],[qBz]b>m');
define('NONCE_KEY',        '$JX(pk[Lo2HUD1VNnv+<6@K^qedV!N}BOnz+dL>rofALHq}V%eLE]YTGBe)iu^^B');
define('AUTH_SALT',        'g1D9sA~TjuvfK4vs@J>jL:5iV0Ztr/*{N4)%VED-{[{+QJFbNQZGaK4$Ec&;j]v.');
define('SECURE_AUTH_SALT', '>,fWX_Y#=JPEQxu+tK4XB,&A4hz8=C1 Z{~n{y>](p/:zZ#V/#tcKn-&n!ZE={p#');
define('LOGGED_IN_SALT',   '=D&kBod;I+k#$GAZ[Z5,Wf$Mhr9b{@;`F3q_S5eim|XAfnoM5ZMnF56,hv*=={Nn');
define('NONCE_SALT',       'cLURp[D4|Eiy=r}HDK#q6(c~]5ie_WAc_*?!3iVYsrBDv!<l)wMK>5B2Ma&mV1qH');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */
//define('WP_ALLOW_MULTISITE', true);
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'sales_3d.localhost');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
