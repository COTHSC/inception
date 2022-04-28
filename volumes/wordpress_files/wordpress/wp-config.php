<?php
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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'jean' );

/** Database password */
define( 'DB_PASSWORD', '1' );

/** Database hostname */
define( 'DB_HOST', 'db:3306' );

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
define( 'AUTH_KEY',          'i_V2N<zt0<zjRXb6NBa)5KEy_Jec?/%lbO;[|`h,uNMp&AMC]KT.~s{|S]Zl-rzR' );
define( 'SECURE_AUTH_KEY',   'F`9>?|f<IytcBa!ll!#z bZG37w(3s4LY$-,T@t?IRae +?EU5F.5<S(ga%</[Cw' );
define( 'LOGGED_IN_KEY',     '?&2@-U0Q@1o@39j(G+ ,cNNia.nm4*df~./fqoC]tM5FStzr&?6]Z~PB]lr-`tNn' );
define( 'NONCE_KEY',         'Ybp6L^sf8j$:Ar3v(7E/m9Yb-* %Y;ycI*U~Ij@x{ZMOLNLw=c[VW#Kl?hbN?s^ ' );
define( 'AUTH_SALT',         '3gxFx.#9{~z[QAIG_@AO:6|F)srq/#r~]87([eD6[QM1iCa~mnB|57mw7Yd]>c?#' );
define( 'SECURE_AUTH_SALT',  '::di9094tmYeGH(qO|VVpUDu} wR|T)s,iKo7S[/*DRj`+DgmnNBG$L(9)2(QIw}' );
define( 'LOGGED_IN_SALT',    'llboI>qOaBEG Jc;f`6r+}VmVwR|9ql/O&L!&pik.@%wj47Kg5M9?>x%QMgbKo^d' );
define( 'NONCE_SALT',        'b5BsU}g:kT3ldZDidJj+kRlGfVFB}42f)6FL+{~E2z11hhZ1N++n<1pbO=w(*Z?X' );
define( 'WP_CACHE_KEY_SALT', 'bH2T08nlMoin|a0C8QKbb)My;u{FkDO3%/E2ylzF6w:hR__DpeKYBI)8:XG}Q~ep' );


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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
