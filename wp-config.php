<?php
define( 'WP_CACHE', true );
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u303005222_j734s' );

/** Database username */
define( 'DB_USER', 'u303005222_17AMa' );

/** Database password */
define( 'DB_PASSWORD', 'R32yhdsMld' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'OR:{l0*u.S23z>dDZ,@ln3pScph}?93>xLENF-zhff,&oTTagh<t[{&-JOn/1!C&' );
define( 'SECURE_AUTH_KEY',   'LkSm>Y&WV-(/H%FYJ!;?ztk!4Ax|uPSqGhxi#Nn_Krv3S~tt`}KKV,#%@^dpK%3~' );
define( 'LOGGED_IN_KEY',     '>,|wik;m]T2!UTiIjfqz 0;a; A)|ghUH-ZRYy &?of?l`ty1U}sA|bKk%</DV<F' );
define( 'NONCE_KEY',         'z*qA?E^`PrQG/u+ER4$z3bO7lxHY#zt@KkC)+N{PP,wR|LfoXb{hmim=oI5lGg:F' );
define( 'AUTH_SALT',         's,eu>XhQt` -L7T&>nEZw5e$;7.&OIN;Q!,ZvdoU)6j/#DF}&FfBv28XMfZYYjt*' );
define( 'SECURE_AUTH_SALT',  'X9y5_FVUCj+nC@d9yeTriV#}W0[nG33PiS1 0h@?wOZkwMLTArAXyckRg^DhuF74' );
define( 'LOGGED_IN_SALT',    'gfk41e_gf|`%#vs~|(eJvAWbJ<{)r}KV@= RSPt6.|YX;pal?zf8xqoHhP<W,j~E' );
define( 'NONCE_SALT',        '6ss:|J:xR!R(T=S>F1K#j<e#<4_3?Z4u9b<*1%tl}W^ #)5*&5G5Hyjj7.CS/)mV' );
define( 'WP_CACHE_KEY_SALT', '= A$DaqmSX?4**he9}<TUWUZo,t,=L?u[ST%c1x@*fk|![[d#@C4Wcxd;h`0Rf0v' );


/**#@-*/

/**
 * WordPress database table prefix.
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


/* Add any custom values between this line and the "stop editing" line. */



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
