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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Fodology' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'Ij uOksEt!.-V9mq2=O- .ilA@z^mi/ky0x}~M,vh.y0Jq*1][k&6>2e_){T-|&Z' );
define( 'SECURE_AUTH_KEY',  'VVWST]{4m^L;]Jc*plc4[;|Z=1{E~w:CHk@pY3^GSh;0w|dW,5d#~1Ji|=JO$Cv(' );
define( 'LOGGED_IN_KEY',    'j^$-|oki,=~j+nB+1|[Nc:2IQ`}$8m(vu$G7d6g7!U#w37LRk:Qou 3`=Dn?vYAk' );
define( 'NONCE_KEY',        '$0i$GP/|K9Z|)Lebw*(n_n$LN+EHdbiDJ~8sWxC]PKDsxc!fb5PGAlnRtqNt=KP_' );
define( 'AUTH_SALT',        'h^@Nei9Fgq9Lj=(4*+fQHYs5_.u;y.0H |`0]$K]Doa+60rb55kxnFBP?~%ArI=^' );
define( 'SECURE_AUTH_SALT', 'H 2LjFt=]YXZ.Y|hM%k z/h[+|;tiKIZx3e/Pfs`MEtY&~J(^B=2Xyh&(=QrQ ~I' );
define( 'LOGGED_IN_SALT',   '9J^? ?VC[|AnZ3?wO{bR`E707S{)Pj;%T>%XpC^NQs+#Uk,XNp /{*)Wcwz{YQF|' );
define( 'NONCE_SALT',       '+cM:;B@pdWa`aFyD@@V5$6|cAQM>rhB_#sl3m`ldBlwyNDumUbD8f!,cCCo,BpH@' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'fd_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
