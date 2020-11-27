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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'lkjhPOIUY' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         'nufhmp*kjtznzFJ`6GsjO90p-7vn<nbLS-Th,1VTU{GZbzhF<6kPgsGHmSxXiwT ' );
define( 'SECURE_AUTH_KEY',  'owYQ-aC-O$kI(bT!khefv?:;YI:Dw14{Un}T}RokM$AK<TWjXG3[7,8DR~Z.RhVr' );
define( 'LOGGED_IN_KEY',    'tp6uv*x?5%$E,eSmqG3M8KktASMCF[7@b=wLq o@GTNG$ky2(Hq@4n|PV4K`3 TN' );
define( 'NONCE_KEY',        'BBC<NG@JQ^/wv`pRHe9Q(}>Q,ED0iTBct;wqweBU9;3ey*h@}6yZ.%9VfvdtAY-q' );
define( 'AUTH_SALT',        '&Px1^CZVU:]Tv!LVZR]aW[VZSL(gV]Ac/R617dUSA[wt5.3S-D6ZG1Ty;0f{X@[h' );
define( 'SECURE_AUTH_SALT', '/~!6kmSn8?M4l.w@XRgka$=z$~,[eH},@IXc@HeZvU[`3!DRg6ymTg JY2a5n*0c' );
define( 'LOGGED_IN_SALT',   'Hy p?N?!jD3<67ykoaV~m,1PbuZ@LQZ$5@:n0`@}T6K0e!XxW_FFeP-uAy2 (2GL' );
define( 'NONCE_SALT',       ']-NjL_v]8N^<jU:aMsl2hyl/:[Of{B2,ie|,>.q#gqM+F-FcK`=@)}/r/=N~?Px8' );

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

