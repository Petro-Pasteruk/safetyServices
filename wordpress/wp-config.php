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
define( 'DB_NAME', 'wp' );

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
define( 'AUTH_KEY',         'MA.R&#)4 /qf}np/!Hh10tmu!(D5qk_0M&[*!s^/YypFrWm$jt;i:i%!ROI@Ebuz' );
define( 'SECURE_AUTH_KEY',  ')(=m!HlS3VY@C)G@WxPBX2-LYg&rDq3AU!kND[Kh{VbbDa!,W0iQf2qyXK#CkY#z' );
define( 'LOGGED_IN_KEY',    'B][ms9$aG#[VT,W!?YJ{~-*@d-YjE&w=eHC`wx&F{pesFO1KFTc|i6m1[zWPJVYs' );
define( 'NONCE_KEY',        '3)504YLc44ECoEZp-_VNtx.2|LB#/nz~Sl%(q:c[+`&H%cs9Sgbm/~#-<wpzyhYW' );
define( 'AUTH_SALT',        'lfzh^_KF[` >`O470@>9wNoq8cs0tS@BBpG^BCTi?x!ZG),#d|/ ?VqQ}ngk>a*|' );
define( 'SECURE_AUTH_SALT', '}qFMCbM%e)3i`q8{c7]R[KW_ iUj|+~l9K3KgCnOS#4<iD0}f_|dICdWbDUVEDbK' );
define( 'LOGGED_IN_SALT',   'hr GU`E*&u^2SE9g[3E9NPUffZiU~zsT;3JM)hg7:Fe|~rQ%e OrOWY*2Q]zX*U(' );
define( 'NONCE_SALT',       'tv3>X5z^JA4koLQ.y<M=~jJBzE:wnd*vHF:e195Gh6!_poJede:riZX4{q(vr74<' );

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
