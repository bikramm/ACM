<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'wordpress1');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'k<f5lY|>h V-L-BlxNT*n>egV}j>Lc/g=(8.I@N&eG63vo@yJK?vP?|*s8.9s&zV');
define('SECURE_AUTH_KEY',  '@-NY.c/^o7~KqC5@<*Y{-!gT/s5[,bc`v7p|xz+A!l,WKK)=5o--/am.|c7?hDW1');
define('LOGGED_IN_KEY',    '@.amedq?5vq,V;|EsDI,YE[f(aQ=B~.I{&dn,T}<Rgm#0_OTV(LmQ}  0zl]n@D.');
define('NONCE_KEY',        'mPwa8f}-ESC_yK|h]*WM.,{s}}iv]QP,Nkq=/4nO`4U&dkCUT%^n3*c:AIS!*b |');
define('AUTH_SALT',        'ALj]:+~VK8CwEaY<@hRUF%IyIU,L8/GH>Thh.V|z]HC1=`ts..u,]kc*5:>fz|_R');
define('SECURE_AUTH_SALT', '-+URhhAapq!0``pl*yve3QbS_1-`EXE[|63o&a5o}}qL<`S;:o5Cgq(Y]}E6nu[9');
define('LOGGED_IN_SALT',   '9z5Ebi-RZfG!:BXb@^||1*9a62Zss@OwQ}+^b-n}~&/4[_+t^RnvS4:4,J?PY:}$');
define('NONCE_SALT',       '+Jay?awK|@?2#Emf+7ieD~v:iFqM@.A@3|1D1fd-,|oGY<>Ub1x~BSe z=OY1oM|');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ACM_';

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
