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
define( 'DB_NAME', 'wp_htmlToWP' );

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
define( 'AUTH_KEY',         '4Fm/2ohO([wI[~hJ77Dais`z_l`3[/W>#l+ZeGK.]`r?K6CM8/E5Zn)<w`5!]XL*' );
define( 'SECURE_AUTH_KEY',  ')e&S>YmHvGFh0;qZp(C.?5AKX6n_BNEC,$zuC)zW/4s2+se$CFlEb9,cnpK@?JBn' );
define( 'LOGGED_IN_KEY',    'srfcbT?gqgkpfDE]@r`C,[1ySRhwqb}((%=j=H-guVGj<*#]kw8 ,rO%I*ebR$w5' );
define( 'NONCE_KEY',        ']MNI].E}dp*L&KcZ2V9<8|qL~f3Pyk@l=rU[$/(>l$7V`_A4l@2G,JZ)~L1@y2^f' );
define( 'AUTH_SALT',        '8_a4c!KW!dQD&1F0TUw<RVlYFTqywD* 2.i?..RCpr7EJCn,Njrnme)NVRm3$pSj' );
define( 'SECURE_AUTH_SALT', '<f^1;,hs]/1Hn4_O{77$E^*,p%7OzSL&z3AEGRp~.R eahkzXoZ9v`K^7q(4]7Rp' );
define( 'LOGGED_IN_SALT',   'O6dFiQGNW_=1lD .mBxSjGb+0e>v`g$4roNx06m{6UxiC?.%J1O=lQlZkOjdj3AB' );
define( 'NONCE_SALT',       'GS|6:@0~<j9Js.f(-isme?$aw[WGXO<SqWM-,Tt:Rs0IviBGsj4bXhk-l*3S~%C:' );

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
