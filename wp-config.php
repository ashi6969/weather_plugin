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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'weather' );

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
define( 'AUTH_KEY',         '<z|-_Vy/2p.TnCH bf0(Ht^B4=RC gJDR*j9s/1q2^Fi-spiudILt.tEiDl*}mjV' );
define( 'SECURE_AUTH_KEY',  '{3u7wr D*OdcXBjPMR*y&-oE!fKCY&hcmgG|Vj*f{0P_bev4+JM7S%;n a6Y&d%%' );
define( 'LOGGED_IN_KEY',    'kRP~%Xnz/;~b9);qCl^Tp7^{4gXz0n{by`8Fq^oOySx 5T$GpJVuWcI93&O9D(Jk' );
define( 'NONCE_KEY',        'OL#o$J`&83hG;U$ktk{=Q0xQ,vZ5,veG7PV&Y5(_x=Dg,;:0|eCztvbX/F$*OjJQ' );
define( 'AUTH_SALT',        ']k03s[(SfUPM]Y~VTz~Q/PO~VRKL2u]Vx6?K-j.[hY$0X&L<]VV/x^VhS7ejE}Fl' );
define( 'SECURE_AUTH_SALT', '4f7hU[5EjCgBQd1dr=rL1h*e.J@KUd[qzbkM>$l*HC`c.f04hkGfLCo~_[9}>UZ%' );
define( 'LOGGED_IN_SALT',   '%|YPQR.Jcy1sqTXIN)_0.:q-4:FU#7Cb;.Li|zzWC|fZUK-29-li?EA5)xVgXR%#' );
define( 'NONCE_SALT',       '6Ovyw_?U</bq6Sla:b|(m5,gY=TpQpoZU]Q6ib%iqOhB{N&/wR6DMzR)$HJ@Qihx' );

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
