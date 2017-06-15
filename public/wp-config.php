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
define('DB_NAME', 'TCC');

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
define('AUTH_KEY',         'pC^V<2hl6.%1zB.AX; m@h<s?_VKAiD+49;Bw7<%`k[E=:LQs#!_EriU=u9?1FzI');
define('SECURE_AUTH_KEY',  '?<.L5dy$*)LQT/.rj^y?mN+?=rLd/5HhsGl[0pEGH$UXE`]5rx?E@CFnvZCt)ZUf');
define('LOGGED_IN_KEY',    '4b3h7TcrCo#:ZyC,mh< q4d#,u`}&c2f5G}v~B=haR%0 `Z5JD#S)w3m.G1Wq{D)');
define('NONCE_KEY',        '2sk .v&tH;*P@!p8_RgJv2yESZ+|=dzl76hM*>kmc)Gh$FATAe>jY~ W Wr%yi|x');
define('AUTH_SALT',        'Fhd!$!$n`>D_:ka^X8]h13he6[lkc,7F/:ldnc!iMjR+_`7Ww*/os;WlF|)jO<Z%');
define('SECURE_AUTH_SALT', '=C@VCFV%L#mBESB!yNr;/A@;cXoz&4#[VxPbZ;nR%/L.(y.X{MaCSuX]w`ino[``');
define('LOGGED_IN_SALT',   '8+xf|_#LHunHQ i*aIZC+,4O..}!q|eBYDlq%&>w$Ym7DB;m_XMGY>y^1SR_.RnX');
define('NONCE_SALT',       '#Ad<U-;/]^2`a&-nprYAWFMX$$n]O5SV<@htZ (ngk`a6T.R-~bNb.c*wbxx(F>0');

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
