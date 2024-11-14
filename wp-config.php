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
define( 'WP_AUTO_UPDATE_CORE', true );


define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/clientdata/apache-www/e/m/emovietickets.com.au/www/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'wordpress_emovietickets_com_au');

/** MySQL database username */
define('DB_USER', 'myword3088');

/** MySQL database password */
define('DB_PASSWORD', 'SDMJoYRi');

/** MySQL hostname */
define('DB_HOST', 'mysql-5.emovietickets.com.au');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/** Memory Limit */
define('WP_MEMORY_LIMIT', '96M');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'jy|TLo@VdZNEEBe6/5ZM@+_8*_3$8sG+Rl~kY&{t=~Skaz5gP.Reg[z ZRLsQ7Qm');
define('SECURE_AUTH_KEY',  '9iR^n?e Y1:148Y`WTotJ1h{R$wE$KK+LcSkf:JUZSDpn6C6?ZI-kmm $g9[|d6^');
define('LOGGED_IN_KEY',    'S]?UiiXwd}%k^#iI4wL;i|Gap4SO,(pj/LNemceH|L(>b/*aUh#,%}P{bRk~|c*[');
define('NONCE_KEY',        '4Rk*iSw|9mD![lI=J{ddydBYz,xH>l0LHK}ptix;/9.W.)$[+89|^{[#YsvnENK)');
define('AUTH_SALT',        'O4}=|eyfk(8sH[xo>cFE45@oejd5U0#$Px_c!Y-%Zg/K2>!Ae>N.q`KH=]S>fBc:');
define('SECURE_AUTH_SALT', '-=Ztn#_WD(n^eiDsZ1r}76i8vgd%%ISMvwKK$k;9BE<UBygkjV/<.p_l=m2DKET&');
define('LOGGED_IN_SALT',   'sOc`Y[JDfPi-gu{YDidl0NchZ>yk=LbD>>dJ)#-Jn38*N,4uL1XXLQC-:k|oywEB');
define('NONCE_SALT',       '@5TdtGtr217F0PmBC2!xyO<44diV>}7j2+DO-SW73^X%jmoGGo[KJyXB]FmXRz3+');

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
define( 'force_SSL', false );

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
