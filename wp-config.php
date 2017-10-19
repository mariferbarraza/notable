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
define('DB_NAME', 'wp_marifer');

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
define('AUTH_KEY',         'U5L4e~b[+;:y_OXC}uSM3~S}#~&yvFZllQa0l3klr^9`s!jr:@%appu(Gnh[hI]B');
define('SECURE_AUTH_KEY',  '26%`1#?U.)aaJ)iE48c)9v.COFe0|(Ze8e+e7}&W-`1 a,$;_bdW5@kIN,dK;pQK');
define('LOGGED_IN_KEY',    'GC-2-kK9n`j N+t{9)c9YJ&%(@8uxagf5.zZ`U+GY*@U($sK,ILYQfj&v1C7Dt2K');
define('NONCE_KEY',        '*~zowY+X?aQVJ(DBJ=t.Ks h*/Mm}JSyx7q_15Gxuyy>{2r6BG!_.-eDw/Up3h0t');
define('AUTH_SALT',        '=gBzo:Rn`[yqVtm.rXGxJ>GRg%@,EG8}8?82Z<qk~|YIVM6x{tN>A)Y8~Q5EypXM');
define('SECURE_AUTH_SALT', 'Y2TfQ-dYLnU~p;WPfZ~V7xunc|[5/Oj?&++b4M/,Z_I80KQ[@tyTqJSdl) :C<.=');
define('LOGGED_IN_SALT',   '#-V< _LHkricvAev6M8Dh,_= md/!iQPV@mYsEaQ29yMWZ8#i~9dJ6_]Eb7SC8&9');
define('NONCE_SALT',       'QXF/4=]ITEh ]F}kuD_b/I{u~]Mr;Na`zKUm)Jzc6EWhq/{4$Zy$]>!R`5!4/?{(');

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
