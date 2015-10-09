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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'Qx0iZuVw0P');

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
define('AUTH_KEY',         'bj~dqoWvLWybl>pP:MM|NPx+sXq`S|uH@U.ND@(X#i`fHYBxGQxL&hf?VP.,$Dx@');
define('SECURE_AUTH_KEY',  'B.B.TW>Ez,-W~wJjZ5(l?zpN,B#,dRxwQ33GnTrAZn_^szR.5.n|W!*0Am?Bkne1');
define('LOGGED_IN_KEY',    'D[  #&5|6g9PB`uS/-pQ+}?)b:wF{G.p^lP+WpSFBMHd+PI`zqw#/JPFy!3;|1!B');
define('NONCE_KEY',        'avE?Pz0Qn]&Ny^QiocF8qs]8`nVrTcl*ews=NsDk7jWy#r-u97oHq:/Jfi3D*az`');
define('AUTH_SALT',        '4Xo`s,[Prg1N3jzPXR^U-**Z~LlfM~,h%,2yE:gg6d_6_|0FVz?Dcm<B[xRp%$%@');
define('SECURE_AUTH_SALT', '`Sm_%49m UJ|o]55]wfp!d$)9`n2b78z&rRiWl2wZ1ivK`wnJ<hB-cnaB:PqbknT');
define('LOGGED_IN_SALT',   '0ah=%Hu0K#viDwqx+?@1y5313OcLU)kPHOq+)3-,w@ceJI`6}rQ(tVuuwl w-q_W');
define('NONCE_SALT',       '`W^3|El%e_&#`A%+-N5D1.sr<Q8@,S1f4m1daCJ->K$j@w)Gie&-DUh5RH:[a8#:');

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
