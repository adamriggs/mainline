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
define('DB_NAME', 'rare_signals');

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
define('AUTH_KEY',         '%K4XJJTLTe)Jh=xqhaL[wLqz &m&@JyDI&,_4gERCo7k3RIJWvc]-|)-P[|Ef?r@');
define('SECURE_AUTH_KEY',  ';gQq!r?cAEVf1#Qf$D?lfM%uAgL%>]76fsl*S51|crTloxygRzMYL,2$oDESy<6J');
define('LOGGED_IN_KEY',    '[#Ald`rd&Dr&K8Ed:YjyKeSCFFzFRU9RE9S]~FXp^% fx]zt0O?B*&Sy.S=:[aYm');
define('NONCE_KEY',        ')hB0VuM+s` s?%tytlft9{<_i$zu?#?y$Gx3@d&5V,XD?poY6F%A`70[[j0JxWpo');
define('AUTH_SALT',        '>B-M:snwlQA3piY;5a[U!7jV05$Zp?{FcSg>5I2@OM{8>eqyBY<LA/v+]+1:_6}z');
define('SECURE_AUTH_SALT', 'l~,;DH|]~qGT{OM_;reC<vFf+gGl2jY&k4*?H)<%RHujbt9j)N=iEI;{:m$gGL@b');
define('LOGGED_IN_SALT',   'zJwJ`jI(bvYkygSVG~xgwpK+F#Qu^XsC7A+)$V[LHPdx83 XRk){_|^4~&xu0?U2');
define('NONCE_SALT',       '-b|cLK V2T=S|y6!u*&4v8g,;7N4);fO6gFfa|OtypzGHo5%ct[|K$q501WN}Cy(');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'rare_';

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
