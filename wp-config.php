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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp' );
/** MySQL database username */
define( 'DB_USER',getenv('DB_USER') );
/** MySQL database password */
define( 'DB_PASSWORD',getenv('DB_PASS') );
/** MySQL hostname */
define( 'DB_HOST',getenv('DB_HOST') );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '4QyF$+k#+d&. iD%GV82wd:qF.iwicwa5V3Z (,k.w[.^bw~LR/-/&PFd4cs&{y1' );
define( 'SECURE_AUTH_KEY',  'j[C6X3[vxStP/*j=cJk#lR4(YWIyh&O<)1FW7v]SD?cWj`O]>4!DCsM}3pj=xG:!' );
define( 'LOGGED_IN_KEY',    '9FjX$xk$7c)0,>H]!YPahm<ReS(?zdbye.=p QjE >JV9exw!?=UgGB.VmYk6:-X' );
define( 'NONCE_KEY',        '5{DR%13aS6v)vcoVYntc2Won*BqEnstZZ(7X4sNr3h]UGPgUF`*,@mY(KKwt;3#0' );
define( 'AUTH_SALT',        'x5EH!H1u=PuJBg2!k99o$N3UB!]t33kxuKQH)#6VNByn!-I4LlVD/^I&7mN?PuZ!' );
define( 'SECURE_AUTH_SALT', 'p:.T9o8gQ9n;;s@>8zWSwS[:HXlqI>BOA%gA<vYFrjIS${`y6#i I]!K{=btk~M-' );
define( 'LOGGED_IN_SALT',   '*)s[i=MR?|Me/$#r7j|`V(Sigm t^x;A&w`;6!0oiA07hpAP@<P=|Jx^ZY0L|8_S' );
define( 'NONCE_SALT',       'me@A&xc<&XqB4tC9l(Oe<Wridq3`djv_XE$c7eT&Dft@2m_OI6UgAtcd%aT,Uvz.' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
