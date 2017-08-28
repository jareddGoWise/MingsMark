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
define('DB_NAME', 'brodysig_cms');

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
define('AUTH_KEY',         '%V8+}(B[EzUor@R6UWBK9OP105Ai0GMy{qwgIez__--rvmV6z;Vl%[$Y)wY?4xD~');
define('SECURE_AUTH_KEY',  'K<KU 6y#*YZnBz6KLJg?yhL$9vTujB&uqVbWI@yKc,Q%F]4padTt^{]0&&k8b/;5');
define('LOGGED_IN_KEY',    '|VB6BrG(YP,5%N]F<p@g$n5idI]qM_%a$S*O@QN`&{`jP!TO|4a:R@8OmlR<$O&l');
define('NONCE_KEY',        'A~;~Oh)>oYYf z1o8]q:Pr,YNEV-qkJj{H zx5Lnz TgDr@4!*#@nW1_[dRX@?Io');
define('AUTH_SALT',        'qTr:0}i_|[[.wZ%;,dj^YhTyowpy-YZN(LEDIK9SsOE9_Xbrl3lF6ZX~Bw>hrD!.');
define('SECURE_AUTH_SALT', 'rX7/wKLteDTQM}5EI#ceJcP}X%>pYz#]ERY:_+UyiF1{Gv@_P55DSJS$}`~yWk-h');
define('LOGGED_IN_SALT',   '=or5S~T2^2$SVlRqNw{p.a<TfevcMU?;Ar^]uEo,a!m-t?-8C<d|.(QHM_yTxGe#');
define('NONCE_SALT',       '&pf e zZb)p3Uwb`jg@hv8@)-c5*K!WBZc)WX3qhY}QWevz=7R?Gs,-!:>TYb,A>');
define('WP_HOME','http://localhost/mingsmark');
define('WP_SITEURL','http://localhost/mingsmark');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'brodyweb_';

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

