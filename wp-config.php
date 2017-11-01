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
define('DB_NAME', 'kmMidterm');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         ')]<1s8[<?IU (:uT-G=ny&)d@H.ynRqM!&}m(~-4D:[P)&r;m&J+C]C=g MG8y3;');
define('SECURE_AUTH_KEY',  '{1^sMp4{Iz)(@ Yh].Yn%Yq$NyHVJs(5hql3&D[cEA@q Nlqsh ^^z(^1uMt&%XQ');
define('LOGGED_IN_KEY',    '|6^I5q68PH:@.Y.Q;{nxgt_FjPbA_^1eGB6Pl?:9*# ?E./Grj.N)EycC|k<W8k)');
define('NONCE_KEY',        'O$}kMRS 0I8x U^lAi 5Dm zT^ZAL>6<cu+|h00q4$~!#<CA82/binp/MW{tthR5');
define('AUTH_SALT',        '-aH>fn_.L0tk,/az?zVj@}&*W;ze&BGmqq-DYIY<j.@$X|-ovw9vAnj2|c5Q{ZR_');
define('SECURE_AUTH_SALT', '(_nvvj5,~5Nup/=Uwhi(C8 z]mOixA!%wa%v4A/J@Vvt*Vw_U6tq:ZUgN&m/Ovt>');
define('LOGGED_IN_SALT',   '8J<RV7~d<3n<uxBWj&x9W7x> 5!Gr1G6n6Av4.*&F?XXn8rX_{6+s<{4C{BeEP2l');
define('NONCE_SALT',       '}*tCZ|$`%1G5/o~)ixR5b..>B>j$X1WBRm$8G_PL,wzA$z)eWr=lQz&Y`&ndM=Fy');

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

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
