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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'default' );

/** MySQL database username */
define( 'DB_USER', 'user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'user' );

/** MySQL hostname */
define( 'DB_HOST', 'db' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '6ezNZf1=-Ec1oXy@)g9t%,jD,^{GF&djE*kM{IiDAxY_u ^@Z$rq*?P1+zS7!Ix/' );
define( 'SECURE_AUTH_KEY',  '| ?n8>I X(5R+s2^S+Xki qD/zD,-0uHtpQ4~AS|r8${o:s59m6qY<JQ[fHWD,hq' );
define( 'LOGGED_IN_KEY',    'R@`l~_3^z`QPGDluA98+z7U[%]T5ySBA4Uk@QLSm+PBf%]g9X J3mrBd?hPhi.>d' );
define( 'NONCE_KEY',        'lS=*[nd%h1Eq&gjls#JwMvgTWLvzXI8Ny>!V#H|t[^g~~?^q#)1Q;9NmPBhX[##A' );
define( 'AUTH_SALT',        '|mN-YfpW;l9&Gd5zfSaN6eWdN}]WnohvWA?Pc`RKeTY5Q]B?SN1/3}H.[6OE<t86' );
define( 'SECURE_AUTH_SALT', '@.NqV|1vfi8E:F//&tFEdmbGcUekdkEY#rVIb0sE9MxH(v]h&8@6KJ0F?N>3[np/' );
define( 'LOGGED_IN_SALT',   '<y2-^KmCzD7pAW]W/EZlxP}X:p }y&<aswTbg,c8f}(/lx`kw=5EJm[p[N=:DK0I' );
define( 'NONCE_SALT',       ')5}kAhS.-H$.pWL6qhIH@<`}` H |[=d$Wl>u2oC-6`#T]&;/ sNAwQ?%xHd^(*O' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
