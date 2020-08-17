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
define( 'DB_NAME', 'samee' );

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
define( 'AUTH_KEY',         'Z1d,ym|-!lV|B@-3EIyTEm?RHNu5_pWZ%$Z|P=)Sq`/SWEXtUpS$F` |V8MHJ^2d' );
define( 'SECURE_AUTH_KEY',  '}Y  <4s2~0?c/wKwU~/cC(e5DdW^PhuvDrHYOcYP!p.X,lgv4$,PFl?5JImy^; s' );
define( 'LOGGED_IN_KEY',    'Kj19[z _g[Y{<f9?Z<Pe}@kVNsH(;;o_^o3%Vsc9*spazKqQZO j_uIBdW7@IwHj' );
define( 'NONCE_KEY',        '5#Qd9uh[&B%j%K`R^zu0 |g:RahS;P!h:Y ]ide)&no8 LT3Rk5YiT*.AF;0W,yM' );
define( 'AUTH_SALT',        '*AUaQFWX&BOI0i5K@A[El4bv9!gn68a+._*cZ&tEzp4Zc8AR}+.Ou;$)I?V@OI:@' );
define( 'SECURE_AUTH_SALT', 'rr4#;pC8&iYeH*Xp*[G@BvBH~70jHd=sz=g6pi@U]VWU Y#Z1<_?A&?k!C4n!sdu' );
define( 'LOGGED_IN_SALT',   '+,Y`FZht?t(=*`@^E%;@&Q8$xdML_8p:#z*B0]yzUb7%Ld;sl9=.MZoyem+oW1(!' );
define( 'NONCE_SALT',       'HYvP`9Cl.C%{v4d!6yr$Z!{?1t$-u%lfbScES!%VLj_#kC$n$&yjqGAgePB)K{(R' );

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
