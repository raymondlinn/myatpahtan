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
define('DB_NAME', 'myatpahtan');

/** MySQL database username */
define('DB_USER', 'raymondlinn');

/** MySQL database password */
define('DB_PASSWORD', '2jordan3');

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
define('AUTH_KEY',         'X}:O`E)4DbAe(OMdFVKm2(Hr#C6PNagW(YrG[66Dsw~Mfd77rTgC:mW!fM-0_,~k');
define('SECURE_AUTH_KEY',  ')-u#i{ffV&_~yc{h/{S_ysVQ>4/G4(T*=~(AoG4<R5~A?Zd%$8/K@/4=#WBV+eyp');
define('LOGGED_IN_KEY',    'c[914luWME&;PrQ]jDhizf*[/rq/pQ,S+,t&ITr.R!7_Qi5k-74e-l^ t&|:OLmU');
define('NONCE_KEY',        'm{m`NW)L27bPU)g6<D~^IK1>-)78qQ5$@[@|{?QLk[}|ElKFx+/sM>)Q%WbFeK-w');
define('AUTH_SALT',        'eQbM2Do<eM:EfF!5I2)PVcdpxPXjaWr.qb0y>jM l7Y5T+D]q@SikC8S3`?hOjp4');
define('SECURE_AUTH_SALT', 'A{&u<JH0QgX`nrs^j[i[`&JupDFkrma?3:Onzn1JIOAdG>gbA;3RZK#hoEqN^z&4');
define('LOGGED_IN_SALT',   'Av=-<k^>4plly[r=G*&N3n_+gqG:VWJ>Ta+VyB[#0j-#WZ{%Q/H$-GaEZ!0@?sEt');
define('NONCE_SALT',       'eQ_-tS~eD0Lg/2?=phEg!#t&ofUdsx4w<i#,c5nQ?[m_R/el^{);5evL8I[~.~Q)');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mp_';

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

define('FS_METHOD', 'direct');
