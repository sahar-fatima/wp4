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
define( 'DB_NAME', 'pTOoPuuxj8' );

/** MySQL database username */
define( 'DB_USER', 'pTOoPuuxj8' );

/** MySQL database password */
define( 'DB_PASSWORD', '81dqbjmMAe' );

/** MySQL hostname */
define( 'DB_HOST', 'remotemysql.com' );

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
define( 'AUTH_KEY',         'kQdQdUDu!=j9Kwd!e&DMo24I?5,trGz37%mOOrjYt^<g5#h A+e6JtDIf-A{HAHE' );
define( 'SECURE_AUTH_KEY',  ')UY*&Z>Lc9/Jn7w!^P`pp6p~ DKKauVgJb~tD5+j3D&qNE.6rclO CRi !jf8g*H' );
define( 'LOGGED_IN_KEY',    'PZ)gBP_OL+:aF~a:B4>[K T}j:,w:_*(13H78sKa`rs[My$P `|xNVALj[6J&e2n' );
define( 'NONCE_KEY',        'Or?GkD}=5H;I0W=OOM?n6*6_!R2#LD,VW~fKNi(n&XgHc)NiLbrNB>h/+qK,1t2[' );
define( 'AUTH_SALT',        'LwD:^T}%8;C]:IP<{,rJ+*ym<c`tY8H>cl;^!8^6OAKvtp>]W0Q m) zkv/>CffP' );
define( 'SECURE_AUTH_SALT', '!SM,(F; cZN2S;t{g2myAbGR}viDLgapEu_2ES!;YCHtFpH?<9*C()G;]:(C&$Jt' );
define( 'LOGGED_IN_SALT',   '!]_J)7=dnXS ym5M{bm,hzF8I<:sOpmW059wnB?s8bS/wEif)m<%0<XDBAp0*bj5' );
define( 'NONCE_SALT',       '=zQ/xH~Ts^~.rqRc+l_|cI3Iw?[S/^L?}%Eq!I[D8KvCbxB^U.J-jH~}.VXsb{6G' );

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
