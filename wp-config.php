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
define('DB_NAME', 'wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123456');

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
define('AUTH_KEY',         'kJ#xoBXWRCQ!<{R5CNzHLyW6e*S<]L?Yhup!e|p?LgV[8UmR(qVcCtHbecl5X)5:');
define('SECURE_AUTH_KEY',  '6#UBKCECvco.T)J8`~P?<E>?kB6=d@QK!dgQSX2[EjPPsRq,Fgmtc4u0H<P2lt,D');
define('LOGGED_IN_KEY',    'z#k K{5K#sE)vvJp5|N2{+MZ6;Bc!K_N;;-cN~6Sm bx9Oy= O@MqUxD y/=1iN[');
define('NONCE_KEY',        ':oVOJ|Aajm/5IQt?n@b_|}9R%PIl+6 R#^&J<Ks7;ZF.=(1r+4RV=:hyCxuVp;>o');
define('AUTH_SALT',        'z(rm-B?a<FWJ]HoQIQR5$Ej6Rt5t?5=mSR1gn#VP;qrU:XL{bE)jf<lC9+b]ZJ#2');
define('SECURE_AUTH_SALT', 'zRkGY*Gemgo$@DHZ@#bAyl^j0dcI=H%IgV@5LJF/|nUoXh,pH;,V%4l&W|F&669h');
define('LOGGED_IN_SALT',   '6I<(Qlb-8J-Tw}DKlrvTsQ% #z=vYtcfPjqrq/-|:z*J*{rVc0gMB|1d,!~/NW4`');
define('NONCE_SALT',       'qubBc{s`[7 {w2/w.G$%O6T^>:G;Rb?ffgP1JC|1D39Ke9V |+T weswR8e1ik51');
define('FS_METHOD', 'direct');

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
