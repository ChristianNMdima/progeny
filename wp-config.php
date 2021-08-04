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
define( 'DB_NAME', 'vmprogenydb' );

/** MySQL database username */
define( 'DB_USER', 'vmprogenyuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Md1m@1990' );

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
define( 'AUTH_KEY',         'Vi0Nrp (BqdaY0vx;,]Zq]#NMAT)Gh!X%XqO25mFrY(QBUJepc4n}r#{3v>V-us9' );
define( 'SECURE_AUTH_KEY',  'B_n6o{9PZGL]w6]WmWM=n!h4DnI]W)R%I9oqr1KsT=!q%:;U_vpQ(0ERsLl$/z!G' );
define( 'LOGGED_IN_KEY',    '_y=F6A:X-4(*m ,D`Yt?;O?FX&Stv{;| a8-pi)W9;Jle]uxC9^]8UFlDj%SG-#2' );
define( 'NONCE_KEY',        '8D?C7%yv>GzXLv-QvxX(zSRgCV!Ly.MfxoR[y4jO8P,9H)81gpH:gOCFu6_S8gdP' );
define( 'AUTH_SALT',        'HQ36.on9}K49-J?~CZ 9J.M[[zBZ}hss|Wx.IDsPtsHuoHj@r7n|WLqUe[eQnQWg' );
define( 'SECURE_AUTH_SALT', 'OrOetRFt7!5|T`^(.L+m Kbx>g[Kt*qnt{NCtR)-|W_7ICwUzeIE.Hb[y;@;P^#=' );
define( 'LOGGED_IN_SALT',   'fp>6n|-(:Fp3CbnjDAuV63/xkLHmrl<ys0=[!WhH:=gKUxPMjmu)?vNphKvX6k(3' );
define( 'NONCE_SALT',       ' &^{R/6b^HezS$!jWbY}ilUtT7^on[THWiI@GKi^X.@avu;h$kUupLj8qVFFX=E-' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'vm_';

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
