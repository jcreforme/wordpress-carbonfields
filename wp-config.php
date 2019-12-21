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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpressuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '8%j/hGyHECQ 4Rvh%xdm>Z${z7}|$u_qXKo`v).6j@ZEJte:mo|vhz^-$|[D,PW;');
define('SECURE_AUTH_KEY',  '$kJh::/w-coZq:N$[^hlG~m/qw]YC i#6!]S?D+Yg*5WsH&9jn6IbDRM`P0)(a=a');
define('LOGGED_IN_KEY',    ')D__X<96d>tP-{PH^Q,Lh4ZNKb)zN:oC&w|.Z,[N+Ay-6$W:+o}zaREl|h]av;1v');
define('NONCE_KEY',        '6T!+!^mUvljUi(OD+9k9h/Y. t/FQO4s.hjZykDod1,D}`XF$(NN;k (-z-|X>hT');
define('AUTH_SALT',        '33)?$=!7+,B~{yC8vaQ|,D)-p[2k#S-k9%nMv-94mjm|pC%4g%]/}4+h*?OH_lcO');
define('SECURE_AUTH_SALT', '5X(||?}2^p&0>QFA.AoW+9Ms^H(r=IW;Sd0hl$lnB{,5;UMT sy|U+()W+CoX*!U');
define('LOGGED_IN_SALT',   'L<E_xQ3>oEfIkp*:NC#XXXL8nwK{fYMrtFa-_mX:aO$8Xrb:AV~xhWdQmxOTHf}S');
define('NONCE_SALT',       ')<EN0pm)KJak3qkjo=D-%$h5fK@h# +,-f.@+3J_{]H;j.;Ov3$V=~?VNPQ+H-3|');
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

define('FS_METHOD', 'direct');
