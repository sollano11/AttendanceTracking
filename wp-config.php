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
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '@UEtB.6ANFfTa9|w^DD5w;IC5Qnrgd[:uzSO[/ K+_V~+v/p1G#X2=9.(5z_P{Ge' );
define( 'SECURE_AUTH_KEY',  '4u}F_i&A2+BL^Ga_5YV],8|7oO.FXW0&0li29Ci2/!xyJa].z1}36@]3MF=f1E[N' );
define( 'LOGGED_IN_KEY',    'FALz_h!YA8/Vl-qcYF-B%1|Uy$Sp-X7)7[A`)D>$wL}t`~ppSq[Ssa1_8R=0<*&.' );
define( 'NONCE_KEY',        '>513t9tlUki}:hU,;+urtnaFQc+&pG2G[NI}vM$XQ>^]^gkxdI6 ~cTYz:U?UA#q' );
define( 'AUTH_SALT',        'fmT`mp6xAC%s?Zjsp(PjSkmRjN2{,>`Up.8h^;ZJKx}t&+D5yU+6!+Rw3k0Bqf(.' );
define( 'SECURE_AUTH_SALT', 'zNcR?R_,f$d{*Qig|(&`~_|Z(U7ZYGiPM$?|o:#T*DgecpI]!PKIu#(w%7)`]fhC' );
define( 'LOGGED_IN_SALT',   'PXC62T4h,OAWGfR>tB00D+Yz.6uUBrNB>shG$s=UuRF?nSM^0Eo+Q:yLSMT9GO<#' );
define( 'NONCE_SALT',       'eM|w~13yaYwPP2j|9py>)}%N(GQnJv]zpU9k6Ei>5As:Ed@*T^W`7.Id.FU3P1#+' );

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
