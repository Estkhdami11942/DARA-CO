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
define( 'DB_NAME', 'daratrad_dstjtngf' );

/** MySQL database username */
define( 'DB_USER', 'daratrad_msrmeas' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Kx6ne[u(HSob' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '{td#WWh,-OlMd`&brEi54VZ{z).?f$.ZUx~r?W,81WcwGKv {Sp=t8nf{]=N|wH@' );
define( 'SECURE_AUTH_KEY',  '{/3Z[/8f3:8AmD4c+h0ynI8z~u-DG *.=x]-#D:~E9pwS,SCdxeW`Tf|^59/d?.g' );
define( 'LOGGED_IN_KEY',    ';C}]}j%-V3Y*^R+Sn-jlaX)z|XLS;?Vj^zn9v 7VU%8h/9p1kr}7SZxf9.[+g}T<' );
define( 'NONCE_KEY',        '(?4brm( aI704I<bMx[f?qAF{)Kd}1~!A`|HN>ji8=ipw>*7mFiVm7+ XPd>({>*' );
define( 'AUTH_SALT',        'TILIxD^2Zw]9+PfS9&,kqYx@*=1|>@d2RmPI1.T^%.S.<0<y1Rdj0m>^!6pc/5:5' );
define( 'SECURE_AUTH_SALT', '5(`gg#Rx#`}Kss=d,?z):O!`/RQZ_cv/`#hD#msW<FN9,z)eP*zuevw7GmKjUn{U' );
define( 'LOGGED_IN_SALT',   'oOVJHrmj(nr]G-mqqNg(YPN6/jY N(yq=0t2O,wQwnI&C2>m#bDOpCaBRW7GE~/k' );
define( 'NONCE_SALT',       '^B{IsnJUvDRi/J<H]MQVD?%,HkpojZJ?D+!xQ>Rs/<!A_M?1&xW #{K3<H6HZK(S' );

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
