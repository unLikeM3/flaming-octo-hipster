<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'nights');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Super123!');

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
define('AUTH_KEY',         'V OL1aA9x[owjsG:Fu!VUxpV+EgSzE_4z]<X$ox25bzR}!pi<nL[`~sMf6LP{0]a');
define('SECURE_AUTH_KEY',  '{Rpv)L&:LV .#SzON}qi LJfvQ.|Yu0Wlu9s+K59O!,ZCB2epThlxKDJY<Yc>Ed(');
define('LOGGED_IN_KEY',    '# f^+sS<`8-nTZn.AGu|9F>egnHrT,8v1$//? DK$~N>R~f;K5+jMR:Mj@1(5EdX');
define('NONCE_KEY',        'Z<Uu5fZY0?_^Xta4rv7Y9Gn!wj+/4u[VlD<]55YRGsM},*+dE0/1T9g]uivhmZVv');
define('AUTH_SALT',        'Q&/vz9Y,0CG%-c_bK`#MsGM?e+U+Smv;~`XBh^`EU8rdPe>{m*!QE9=h1pVd:C4^');
define('SECURE_AUTH_SALT', '|N`p.,v~]sYLj}!pPV0dx] _r{>mh#p}#~9DZU)/84ov(v/2AVa|UytM9u-Q+ro;');
define('LOGGED_IN_SALT',   'h/Tq9lx29%uJeP7O,i|]a omp#iA-t<`oztb<8WU@3t4t07REH[+`(pUbYK n{R<');
define('NONCE_SALT',       'l#7C^cv^e%j;w~JQ-@GKs:(BBBx*fM1RP|nlegXK;&{8W6MA&]:x5(k.gznYF%^#');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = '_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
