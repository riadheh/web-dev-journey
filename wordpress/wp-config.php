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
define('DB_NAME', 'riadh');

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
define('AUTH_KEY',         '(($3J7]!h)+IOhJ/vG(^!+6E44Xe%|k=BrtiG%dxFF/zP)6nf8f.X-=C{sP$FR./');
define('SECURE_AUTH_KEY',  '?vq|qNFJ!qGYJ&zl$Zfz_q0Oz^7]!}<;4,dH>>,ghAw?2VRjBP vT/AzuOYq=&{`');
define('LOGGED_IN_KEY',    '1|we1_j&&jD50-}uO&!|/~mq8+V_>z^E!8Jd5-z`u6KgtH1TcW3^p1v~FkhP(:NU');
define('NONCE_KEY',        '2ADm=D44@(Ux|0`jr6E.BCqek6W~3 o+$V$)=li_gZ<L>**q($PT<6)-v:B$w{ER');
define('AUTH_SALT',        'ks(w`8T=)BG?#$q%Z}c^coSW`8Gq4!6bS,`2OQA K6KA%LnCw-/192fd?w<R~_h_');
define('SECURE_AUTH_SALT', 'h(O5BA>iQ36SWX{J3{V=NmSV#4Ma`#i7}FSTeQ^I7o?190-#14B1B@FP/& 3. p@');
define('LOGGED_IN_SALT',   'd[ZazG}V89|no+&#C3`#74g,GslY/9e~8mH53,SyEKx^;yU%34Y|]Uy2&,f;);F9');
define('NONCE_SALT',       'Cpk:LRGc6(5Yv;];Hz]{:~.BN/ZqyL^5nf:N|.C1r6J2b,%g ;I=!.gsynf<!fj!');

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
