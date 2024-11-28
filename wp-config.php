<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'website_nadiya' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'x!V`sy&NQ1WK=E*Dp)3O*Awyzl[U4<RRkd-<V`6_t(Y}m[w0>F*sm,lG<.X`y9MS' );
define( 'SECURE_AUTH_KEY',  'u{Op!5v$zd]Qg6(Y#J8QtJ(5|^wsLPE0YC]x=j[p8,xOZB,7x/=83:nk*Z0t(#Ia' );
define( 'LOGGED_IN_KEY',    'lI$#t~a!)]6eCgaSt^w{m#bB:g0;0U 9Z%USFgBbOJruVvnlf(/OBrr~qh&a6WB0' );
define( 'NONCE_KEY',        'c(/_b=6t>^4(+@KCo?0vn0o|_Pg6{H9}L:NN*n(Cik7-hj<U=H63OF]:Gg5b4<Py' );
define( 'AUTH_SALT',        '_2?j*?,Sc|M],o*J8U#ZDR:}y!)[t*sUX#LBa6$UPQOa#;@}Tj$:foQ`2#i|<(5]' );
define( 'SECURE_AUTH_SALT', 'Uz?pA@#7c@4RT*U8HzycupNLFkpYl,~CrA1=.=?%CO<l_#hX&0xC<lOEis]a=XS&' );
define( 'LOGGED_IN_SALT',   '9DP?1m[k7zLq!{^*T)Nw3Xh~2Rv01X;HZwQ~vP:eW!ppHBH2vb#d^Y67bShV+$Wi' );
define( 'NONCE_SALT',       ']D0=:C3SwZ(Iru7CKlIhl,Zh9IQVj]/JKp1Bs$/,[?l3yPZxfzKDPLM`vxDA.5Rs' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
