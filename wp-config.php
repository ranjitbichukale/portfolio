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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portfolio' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'eVF[OGh^O_Y^[,tsS}f6e97L.X$-y#YQH/d7(e+%,c!XHiVt4( ]4R@QGD7>#T.`' );
define( 'SECURE_AUTH_KEY',  '_](<ny+-_g{]vhoD9# }$^n&=?08 rntmTrU:)F%Z#AjdD:,!mXsC:z;Cejtp+T/' );
define( 'LOGGED_IN_KEY',    'j=5h>G$)vhwsLSo!)dOLL#>mU,<:OAiVL4[(hl;FZo$C7(TY-$B`pE0;7:lu@e<]' );
define( 'NONCE_KEY',        'x$IH@[JOb8YT9;hlApj6~Z _48Gf(Fro{.%Z|X@(xTIob`g#C^35U^64BwcpvDSV' );
define( 'AUTH_SALT',        '`q>BZrBA40sdELiSmKAlZl^^<Of6y]=V(Pc6jvPg~.bnf~@OB=dGBkib:{+u8N+7' );
define( 'SECURE_AUTH_SALT', '1d|ah]/h}NoZ;?@K#M`et]bb#.+W_$naHEu,Lzh`+&@| XLT{k8^>E(2=6qZ-5S3' );
define( 'LOGGED_IN_SALT',   'b4]a=r3K-E:(Q=OL63*U^o.`qC@?ZxSL!*2,Fp!zrO?pjBn.*AdVs<}f>K1x_dbM' );
define( 'NONCE_SALT',       '~m3N,Crt$[7@;h/!z:`S-|q0?ZWRfn(o=sydu:&QM4h(<$-D0!wFpf]/2d<Dag&a' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
