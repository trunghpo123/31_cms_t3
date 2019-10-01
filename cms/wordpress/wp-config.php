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
define( 'DB_NAME', 'cms' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
define('SCRIPT_DEBUG', true);
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '$M;hC|7Kqx,>X)}$P`M*lu3}!P!9*^Vxx^4w>GH0s:{jf] |,u|v_}g)_ip&Er3&' );
define( 'SECURE_AUTH_KEY',  '[ULBne-MQs-VhRFRal:PM>}zvptBbkjl1<SGscA=tku&O93AH%o--=k=Lu7{7Ypl' );
define( 'LOGGED_IN_KEY',    '#6tN~J!ZbPwI!].O.nhjd{]M@dqY=n+n] BTQ2p-r-|.8vKeQ[PrP{wVuq^~wN:a' );
define( 'NONCE_KEY',        'Qb9A772g=qn=p?vcG n%{(:Ztz nO<N=6a,m$`xg1-(%,WY.=7Kb>b`E3-in{E(.' );
define( 'AUTH_SALT',        ':Se&YM)J{QL.I>/k[0y]?:Sv0w+Eq[;{Y#9#mHOC)Z)`D_[iCQ8+3S 4*;723ZIf' );
define( 'SECURE_AUTH_SALT', 'rYbX8?9RgdyR!|VH_.+M}{S0n}u~H>pba~)*7}W2(&z.z84m`]6l}wC9u4|lLG?g' );
define( 'LOGGED_IN_SALT',   ' %8zADa| @}r^R`+c;fI9]CET94t[BGpLo?wnoB)p c^gy@QI6l`P&iCbsoF%kIZ' );
define( 'NONCE_SALT',       't|RrQo<{FF U<Q.u4Yy+hrZ(1Qe=yI1ILU|vH=dSRW+5>_jMvSe8%[g/1,94s}:N' );

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
