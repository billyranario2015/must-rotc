<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'db_blog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'X7rezF#--]RB;AdS;R$s}5u%^Z2}Lh(PFt8O?S2{5^TM)sc[5-1k+f--W4j<weQ$');
define('SECURE_AUTH_KEY',  '&roPN4=Z@b11$&AA.OCqFY6+Gvw;M`mKF6TV-JE7|vw/*P|-Nsw=--r13G{Z8^KX');
define('LOGGED_IN_KEY',    '8YZ8+|%pL85;AHxO!_#A[BKP]#uw^Ls:qMZ;fOv5rWC+K p}P^; tg|}{nh-2X5w');
define('NONCE_KEY',        'QNc6&BQ`bt*^e i:$x#%g,]^kIy15DX]J_ w i-JbqdMr[:{|=;,pFAT_N~tHc)G');
define('AUTH_SALT',        'PC_eQL6:HVT<Q.Nn(Y6pFABg#ZI4&&Jo |zO+D&_@Y ?oJF8!eoj<@wL|R1%vga:');
define('SECURE_AUTH_SALT', 'unw>?}fvMvsFALg.wsv5`BKLw(t%&_.!<os8!r*9H/d} vnsYG?L|^do(<o0MK^w');
define('LOGGED_IN_SALT',   'g|0#H%CTd)LuxsRGma,#M-$>>|=)q;_Uvz-|*P/(uQ{0c:+Rxq3//Ro|Y1exU}($');
define('NONCE_SALT',       'ISs?1 %2Q+j2ueEw{/|NcLCw.C]d4&9vV23M,.gT_j<tlcl#s+H-__w%o^0F8.%r');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
