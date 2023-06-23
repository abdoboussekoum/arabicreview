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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Project-Wp' );

/** Database username */
define( 'DB_USER', 'Project-Wp' );

/** Database password */
define( 'DB_PASSWORD', '64U9RBGc6$jY?_#' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         'Q{E:309P{OvoPAPj;$:4KKuS-;w-2Z/R{,TqpKfH`]U|S]S.8`2}VB92jhD}$=BL');
define('SECURE_AUTH_KEY',  'vqbM/~wTU}Vz-k7-ih0%|<mrGR-B-O38$+kJ&&~p<k|9F[t~p:ZmobR0^t_c_g(.');
define('LOGGED_IN_KEY',    '@G;XUa(%|_hLIlk/@Svw_#,4|<8]/zX*::{}cYgB^ZPJfFc>b!SMNTz44 1X<P y');
define('NONCE_KEY',        'GCJHjI(28@:;>hkeGSd/qDQwg_)#M;7_rmdf66seRvS`r.|Qe/I%-94oJ+a`l?7s');
define('AUTH_SALT',        'F$+Y-3SAlUmfH|w^g5S_!-PT7BNI9:uMCN.;= ~K5yC{2t4g-H<3E-*v%j?2EJu[');
define('SECURE_AUTH_SALT', 'Hgxgi0y-j![QSvYdIW8L)FG0k[lzEEW|!PH!#UDwMZ D=]c>HkIn>Rx^-sM,+AcT');
define('LOGGED_IN_SALT',   '_,d5uGnL?!(e/k<NFr;tEs- yuc)9@ZPuH5iQSFL^Rojq$#wjVll=lhN|v+Kp4-e');
define('NONCE_SALT',       'J$IE8)Db)I)MViQR=fQJt$LKpB<R-+gaCDdy3_+i)L!hx2uG-O cYy lmuOj*NNL');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ProjecT_612wP_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
