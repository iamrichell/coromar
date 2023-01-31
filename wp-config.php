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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'coromar' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'j_^p/yf8_XPIrI}|J*6J;[e$QGK;9vaUEsc&t.w(txJy}mO6^r/<YXB+9o9|YIs!' );
define( 'SECURE_AUTH_KEY',  'v,^ckPv&X 5@1/y4fU6@<1|GGN`t9T9pE`>5p%`#yi*XAU*Tj_Q=lY__^xb/nfO8' );
define( 'LOGGED_IN_KEY',    'NHt>y2[/boHLa{AvY:I+|4l[N-qGV9ptd?EU@`hT#1VNbPXg-c6({b]5{^{8&<c}' );
define( 'NONCE_KEY',        ';qb+/Mpb#?Ln~A&N]H$s=RShGJ`V}i}S.# =HE?{~>;2 0?9RJBCFPw844$kntmv' );
define( 'AUTH_SALT',        ',<(,7#1CnzR:~EY4p&qb[F7k3s@IXZyLt(,/|@ktIyU17hEpV-e!)xpIQ7HtN`p ' );
define( 'SECURE_AUTH_SALT', '7)tWL|Ax:%}*_rT{94]S.Y{] Efjdf4>4g.u|,kfIl{GSRnBmDJ?#U.vsN{-g_/b' );
define( 'LOGGED_IN_SALT',   'Zfy,~Q|Jgosf`xP,^%pK6HZr|g}L2E+NE?F{zi.<FSPK+,u.+#;<}q8CruV#i1+1' );
define( 'NONCE_SALT',       'zN/HtBO}%8px<?jOiFC,|7Y#.CE_<7BIce}[dudgM[:$*[4G(wqYg^*{;{=OHKyI' );

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
