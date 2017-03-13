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
define('DB_NAME', 'chanmomoroom');

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
define('AUTH_KEY',         't8<l]%13sO|!e<KZ=N2)8>En;0tq~ShKp9g!oa0nLhU.lK!Rvfg,bD #i$A. )ji');
define('SECURE_AUTH_KEY',  '(e&r>sW~MJ(vT}:PB !q>8Vunr]U8DAgCT^~#[W_0Lw}Iw poU2]$6B0{X^g5Y|t');
define('LOGGED_IN_KEY',    '7d dvba-FQO(XY)sbx|ke@BE}i7$ct@Ku+VjhybO4ANQ C-~*yG-IKIiNTsAAu%Q');
define('NONCE_KEY',        'iloX!h/,)81${P,{KhQXu-xA*H!Q^b`1H!;DLS0fw? fMxDy2~nJp/ZMgL5r6Ky/');
define('AUTH_SALT',        'LwU@]!o?kRAY |xTaQ91wTr$JB&p0m6i0 k0b%o;/vu@}~o0w^H?0Evr+);JL$Md');
define('SECURE_AUTH_SALT', 'e9hUnL53 b9h<{lHVoBZ-S<PIM:(;jtG`&e!K(r,zcBKU_6jZHHF60M9=28O0s~i');
define('LOGGED_IN_SALT',   ':}E>lWrB.<SU/`^=lOC+R3ec<bsjEh,dgXKBZApqg$r*5AXVPZAU#bx$XvWdN8K@');
define('NONCE_SALT',       '2P[.Rs~1bxhn/QBp(;39ndf*WQ&<zR}1X#y|f_f7IHvQBRUM@[vcIV33>M~r?*!@');

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
