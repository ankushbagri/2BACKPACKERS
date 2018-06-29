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
define('DB_NAME', 'ankush');

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
define('AUTH_KEY',         '5:;{SnZ&pJPn,laOER;<z(ka%wiPGS&,BGG%_9t]{dX&mfp^W7*)(Bt{.(]Ba1>P');
define('SECURE_AUTH_KEY',  'lMme:O~nJ@GbSb_gYq jyP!TtzwVz5%I69%Mi++WL+L{8Qwrz-=sK6r@J>1@:cg3');
define('LOGGED_IN_KEY',    'Z?-tr[bf0Y_d?r^/!9Nswkj#+;7u&Nd#NAh`=#7jp2Y`>Z*&}xPL0*$W(49n>/EO');
define('NONCE_KEY',        'xf7+AKav#L_2K5gXLUxE8}ylx3mxi-yg(Y``9>Lx8~`Z8ti?#CcCtyfe3v[xPoT3');
define('AUTH_SALT',        'h`Nd ]Im7|x^i{C,p{R(pEyvYFh!ym5eY!vc.9xw%xjvC1=si#5[V(E@?WbSiopj');
define('SECURE_AUTH_SALT', 'ra #%Gvw R^FEt=>4h)RXCn4P+Z#[r77Y=r:=J#57`8q3&.TQWd~5DpunUv2yb33');
define('LOGGED_IN_SALT',   'OcG-t1H9H=n^YTt.A%Xq16euE{o66B=?8@K;%S0T~ypRKa~5c>WJPr@o&Jy;RvO_');
define('NONCE_SALT',       'nX|p8|GHbCSMxPBu$qL.,ptB-mOZ<%c^aIEQt2_$rEJ`8P e50BjsCBANwF8sb]k');

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
