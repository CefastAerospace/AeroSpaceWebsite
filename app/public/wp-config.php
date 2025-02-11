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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          'R]q!{h/x}C`18tM_3#KB6{`o+;asQlIdi=;u!>hXn~k^}U|1v7@_dyk*0#@@X3=T' );
define( 'SECURE_AUTH_KEY',   'WQlDvu`6yuJ1@@%ek$Z!vs*C^FnYh:LaKJnlPgL)EN4muk*+#8=%>XFNj}+2>)aC' );
define( 'LOGGED_IN_KEY',     '<$VkrXciSS$$?:Eq7f&2pHJz*cK:uIE-NN e [ SzxGkodq-Uso@KVe&hsF08>q|' );
define( 'NONCE_KEY',         'rxrRxUz*xm!89Va{7>BA A)4Y/oSg>f#aq_yR@r12{YsHCfHWgCCikJJd?i&KhF&' );
define( 'AUTH_SALT',         '}%,TfFXpg?|U<d>-,v5HV9~6`^Y(`,]N{v{LOG;p;vlg@Ve!IJ!IFF#s,>j,9YI]' );
define( 'SECURE_AUTH_SALT',  'pobaA_LO[NU<Kq,6NQimx>nU.y zCBB}vzmZ0 @ojB]J]rKHyDxBHcKyUW*T/CEb' );
define( 'LOGGED_IN_SALT',    'haXD:L7#qNoN;$@7Ic-e;_nw(4An$&YPO_>XE&;q2zb{owC(_FH%$714f>$h=Pu&' );
define( 'NONCE_SALT',        '+*u3f(2ac<Yr:I|$W0X?t#;-A)Z=iDa#-(GS_p%`WVmiY6n~[D=$A>w&~ehX+B~r' );
define( 'WP_CACHE_KEY_SALT', 'Jb.gCE*,*mBiY_l1~Ij<S6Yj^WTB/w8gokY{arO7P`y;Y7YuoHyf2]5CcI:|w:DT' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
