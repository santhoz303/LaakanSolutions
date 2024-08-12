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
define( 'DB_NAME', 'laakandb' );

/** Database username */
define( 'DB_USER', 'devpklaakan' );

/** Database password */
define( 'DB_PASSWORD', 'Ls02' );

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
define('AUTH_KEY',         'T29-6*InzKy+JKL2Y0~d#C!6qE?+=_W@xSx*tj?2m^S]e~!fg{TB_CcOfbiRbAMX');
define('SECURE_AUTH_KEY',  '6z#Km e( M+/r!2X=afdKY|@r%py$7(Y@fM|%!?9g*>C~9Lai@Gew06 3rb9>+mO');
define('LOGGED_IN_KEY',    'R9[>`<pn!<H5 dynl& w6dj~MKa[V,Bf+Wt.`V=!?M8S6LU?8+|EW8TH<r](^Z,H');
define('NONCE_KEY',        'E(cUJyddjGq@fh]`7AnwGhru]h4Hy:wd]QDM}]r7-XIID?YfF>-2e6V[z6V m4zD');
define('AUTH_SALT',        '5V{RB9mH}>R;T]*3|qA,(}xTj+ns-g6|B8]-#*W%Now=$A+)@fJzMx7#K*is?OS5');
define('SECURE_AUTH_SALT', '0H,}R[^Hp3?_q&q#)i+IK2!<-95{h2>MA@+.ztNA$)?-s.CUG<9ZTJeRqKYUU}?7');
define('LOGGED_IN_SALT',   '66]J{eyLO/?z+k5}^6Ij6vC/~+9)<]A-A8LD.9[3.tf<n8Aapq_ME9S+2Q[!+T-f');
define('NONCE_SALT',       'Ac2=lG,TZf!h*FXPFyCDl@@sr3r^W^tx0#4LZ)8UF*T!/E37li_z<jhuM*z7uXE1');

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
