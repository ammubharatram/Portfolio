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
define( 'DB_NAME', 'repo_db' );

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
define( 'AUTH_KEY',         'r.c+3Ue%mp0|sac$@zo+F^wvOHVj6iLY}whukLcX<7#bA<!Dq,/mP~W*;EiSPG]7' );
define( 'SECURE_AUTH_KEY',  'XAHydM3fI,SlvNX7203H}#dBgo^`0;ZIgrc{a^,2lK~&PeZ3Zy*tMRIjg3!ZsLcU' );
define( 'LOGGED_IN_KEY',    'i{zs>?=,xk0|V++%/0x/YO+V^9TCCd|gihcW!{u!`J]vj2Zw0*IU 6<l.B0t w$ ' );
define( 'NONCE_KEY',        '2l9]wLtchfPS&y5!?5[2]M4!85[YEI[-$]4)w&BzD-KSoPQO,w!#-O{{OH6E0Dfd' );
define( 'AUTH_SALT',        'fRDp[ZEA{6pFkXH]VUN4L+LC^ }M)v?>`sZxzrV}3eBv).tJVyGwS8pGIor305vf' );
define( 'SECURE_AUTH_SALT', '5`9,|% N{wM})yc18T<rIi0Fb5rd8v/c@?zstb1kJC<,u#$QYb_fov!{Gm])msim' );
define( 'LOGGED_IN_SALT',   ' >)ugq`I[hp#xlh:jAA]T<Wl,|j_A&jdZu,.UuEJ`VtL^h9nfv5bq?EhU[0nmGcC' );
define( 'NONCE_SALT',       'FLt3PU9 Hq~G w8 t5;xO*M3nA!A[/_lu=[b2U/P^Z)VFU7ue|v9T]#oO!/!m)FY' );

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
