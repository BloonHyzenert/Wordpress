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
define( 'DB_NAME', 'ITAkademy' );

/** MySQL database username */
define( 'DB_USER', 'itakademy' );

/** MySQL database password */
define( 'DB_PASSWORD', '17_4k4d3my' );

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
define( 'AUTH_KEY',         'EJ`DEMlMw.<pO=g)`mPm:2~P%.6l=`o.1tOR6V5IGv|Aqdc<MS!UiR}Y?!`pYbH.' );
define( 'SECURE_AUTH_KEY',  'Q7.VB91nf}p+z.(8c8DEABkuq#kKzqA_&RWDW+*=z}2U#o.0;Jzmy/y: =tAHAMl' );
define( 'LOGGED_IN_KEY',    '-.Ac97EJCnTgKN,m`:+W egVVeWK|JY.oY.aMQ5%f@]0oZ[^!yuXL^^kw<$_!oG6' );
define( 'NONCE_KEY',        'z{(tJP`23Gj})?WEO Yp8|D{(v03;znO^eeZ4A;]EUM{Ihy[*m190}g]`]@[;9e/' );
define( 'AUTH_SALT',        'R10m(Gt%1?R_(xY>c f:00$8#=hb6LZL,c3,Fp0I^S34<nH)jAHtihr^!K>`rH@Y' );
define( 'SECURE_AUTH_SALT', 'MQ2F5arbukpR>f8UtaEin~R^@c`7wDAeV7AG^)7oA/:L~uhM4(=T5fdTzuBSf([l' );
define( 'LOGGED_IN_SALT',   't[he8.w,9*,I`~+4V[Gvp[N$*`^u+ufe9DZpAk66v;Wy(0!sm5E(<Svv(WW;%*l8' );
define( 'NONCE_SALT',       'GW/d?fG{w)<keGxR 1`Y;x_y{M)*N<fsyF_Irc>F~K7jYD-yFPCeY+,C(SE_&cx_' );

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
