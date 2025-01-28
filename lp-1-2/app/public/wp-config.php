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
define( 'AUTH_KEY',          'a=_ba=!n``T%n& W$LR4.]vY!,YNlS.>1H+@iDjhJ{Nvca+OUB,ymvN^|DH}qKX|' );
define( 'SECURE_AUTH_KEY',   'D>>l(<?kEJ):[bNhz7YKmz:36>.XCv:!QsmLcG&SX97-X*?Kmf,8(w%<sH8InT]`' );
define( 'LOGGED_IN_KEY',     '7ea3K-dDF@uN3:|#2`6?qI)/Qww6c$,G*S91NY@Vk1Vb%c^JXR9B+.x3q->|+>w2' );
define( 'NONCE_KEY',         'puL%qSE,wc8^L!ddb0li}e~onbl)34sk#Ul<Y6 p_0r<}UvqMe8d],u30Pq!?3X}' );
define( 'AUTH_SALT',         'MQagSAB<00=ZQNh(L,O*2R:=&sW5+[J(FyU6`Yv1)G421}K05b0=uWJ(S9JK-AnM' );
define( 'SECURE_AUTH_SALT',  'g~=`1J;<-<A}ZDQ#rBA+<u+JwZ@)o+5<]k@eCJh1#nC9UF&1w(qWyj&U@z/Dh7l+' );
define( 'LOGGED_IN_SALT',    'E5CQ?H8L;,QwY,eJ0G]lAO>F6K{D4t0t&7%Ly=n5yd95o8@m5dT7E[eK)T|Ul1.%' );
define( 'NONCE_SALT',        '.EsoE!(|e/! pjM_Go)<{grlrmDQ YPw axrEfw&h:U:_N9,6gU(,jrmu(J`7^ .' );
define( 'WP_CACHE_KEY_SALT', '_&*`ph.Uo~}{YY=0!d^Pu1 t6@$i].,4&O]rm[U:{}o9Y.*MFLzI%,`AJ`HL_@|/' );


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
