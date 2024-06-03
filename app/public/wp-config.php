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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          '(3FVE.:^L{hr4O[&cvm&I=}nc6<HXl~nTQS2<FpjqPU-{?[wRbNEO05s8g%{cz~u' );
define( 'SECURE_AUTH_KEY',   '1k5)Yx%@Y-qzWl:Qy74H4ctFBUF_{MZYW,xcVOK*8{zOxp+_fvMQ9v1G1l7 F?Ti' );
define( 'LOGGED_IN_KEY',     'pvH^VKF}QjS>QDgAZUM0brp><K;KLBy{~yJFu!_Bd<=J_%JH!1jYqh`Gn!vE1Ts4' );
define( 'NONCE_KEY',         'Y7$f~GrOW>Xf~B]SV]]DI_w0RSNV1 J&VYN42xSv7{uzUct0(2I[AH`TE79Dl{X&' );
define( 'AUTH_SALT',         '=ughA/=|$(M|xr_GOJRf<CT];fhUEJ_Z(j3~|_e%E-Of:{VMM7&$`Tl}{hr<PX/G' );
define( 'SECURE_AUTH_SALT',  'Tr3s@LbmRJV|o@c8oK0]B?zY76t_0S,@! Ej3gW!G$c@#R1g@H`nr4l>y*?vC>Y3' );
define( 'LOGGED_IN_SALT',    '@x:<iX8O)cpJ@06j@RXCNkBCgMW9R=h3TpQaJ. eb3ekn+l}psv_+|JPzoyBx]sB' );
define( 'NONCE_SALT',        'Yo*P[gTmq k5mp2jX8+-Z0:&jq*QDP?QaC Yq2$2Lxt0^V=toCUFFk8{d&88&^s+' );
define( 'WP_CACHE_KEY_SALT', '#SV*,cWl|yKUaf/4 <fAlAKLmE] bfgU(I]+#y9A]v8|1Llf@a?OyuJK,8;jitbh' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
