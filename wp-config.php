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
define('DB_NAME', 'portfolio_bdd');

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
define('AUTH_KEY',         'uaja$;b+t<1b_{Wav7h1;wI|{^S0+BKS{$i}]}eL3}6m>6m9a?2TQCAaWI*<1_6b');
define('SECURE_AUTH_KEY',  'FJ}8mXumSmXFs)$$Koiwuj8xD+gdY%iR%};B5z|BbTauau-Ikic_fyu&!F>g&^mS');
define('LOGGED_IN_KEY',    '9Bw+w{P`t?wHu2k51!8l!C~DDLvF*M1<[>FXH<a-Hf71<{I.Opq0PpLU<#SB}SD|');
define('NONCE_KEY',        'i<f`]a.g0=L(g HK6bcx;{u<O( HF_eQz6juE^E(OoVD;{s0jT= #QgSo[YABV6x');
define('AUTH_SALT',        'y~S1N.rM|5fCaZ:1u4V$&<S=PDk}%Fe[H_ BKH[UA|DVt<U`~}PBB +;3;n?fUct');
define('SECURE_AUTH_SALT', 'SWR!k4A0)3N^$jWzD,JX+9dCl?V4qW{I`-Vw2 %86dKHdFILD?[Q(4n[4U?Q0qN5');
define('LOGGED_IN_SALT',   '?:-wekJ|$u@j+hjhL<=ccn,JW4.,c+yt@lT5h637{i%o{}-WvJrneK,bh5TEkXjj');
define('NONCE_SALT',       '!.:a*}tzd^ z>(Sj)iA]?a~ m<kUNol]]^G01bibt{P{EIe(ze))&h IcN|p:.AC');

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
