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
if ( file_exists( dirname( __FILE__ ) . '/local-config.php' ) ) {
	include( dirname( __FILE__ ) . '/local-config.php' );
} else {
	/** The name of the database for WordPress */
	define('DB_NAME', 'wpvoice');

	/** MySQL database username */
	define('DB_USER', 'root');

	/** MySQL database password */
	define('DB_PASSWORD', 'root');

	/** MySQL hostname */
	define('DB_HOST', 'localhost');

	/** Database Charset to use in creating database tables. */
	define('DB_CHARSET', 'utf8');

	/** The Database Collate type. Don't change this if in doubt. */
	define('DB_COLLATE', '');
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'JT!&NNO|A&P3 IALH:NA3^VW|5JS`ou(cR[E#V4>Xq|!;6= |m+p/u V5t<!7Y1p');
define('SECURE_AUTH_KEY',  'P%6C@,T}IzQn]zlQpS{_o5v_@35RTP#sV]U:G8cB[k{Wk=C^M--IHpRB%4I]@-t ');
define('LOGGED_IN_KEY',    ';ml]:Y3]`IU3+$?H|-|kZKH*Ir[2U)a:-d&o}AF#%)2PTuh+PC/#jaV#d1r!<#z(');
define('NONCE_KEY',        ';0n#dNO18JI62W=7U2w`hPY+1AKLSu&j.suGkty9<Z &,9)+D)$+]D>Fr0LM5|E/');
define('AUTH_SALT',        'L8#s-YSkh&accBgxTW0&}p>t{s0BvO|<|pCpG?x8E Fiu^if}XP_4}(=]`;M36YP');
define('SECURE_AUTH_SALT', '] ~b`t|DMi+|)z9zQ/*cS$`#Vz?*-9[V+8c8Pu[s%Y4<b> oozM)l>6,c@DYLHU&');
define('LOGGED_IN_SALT',   'F-.|DT|+KAB^<=q(Wxp*oBD9sj*F(Cv9{ ,H$)XO6+}<smW8>d5~XkiX|n97j5!.');
define('NONCE_SALT',       '-HRa^|8oJAvE2MT}TaX%5s_*k([EXe@WI+g[Y-7ny9|CfEsO[:5cKDdWL|K31G)O');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
