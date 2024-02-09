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
define( 'DB_NAME', 'initialsbv_db' );

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
define( 'AUTH_KEY',         'cEISuf,^Rn89zD|,@j(+j^!$C7_}ij06LTU|A2=N[w3K+7m:d:]XO9*}*$KcFpns' );
define( 'SECURE_AUTH_KEY',  '3s@c,o|JAwFYqkAY58(DQTn?hozXg:%2n9.f+v3}Tf[!X+p+{7$V*[h:If{)3d|:' );
define( 'LOGGED_IN_KEY',    'g6tFr4;4C`OO}>rLh{Eia/p0xd2QuC?`7gV{fl;ANnOns$CAv:4E?t_I*KOx@l[c' );
define( 'NONCE_KEY',        'GM[@.WWA+`wWVW*i]nx#]oF&IC6f{hxr6oaH#RxP|gs<&my=*3AGj=]^RFi~v?gn' );
define( 'AUTH_SALT',        'G@nZoWJ~=3H9SY<R?QOU9]t?dkS[l?z=Rk2Kup`nc&5k@t{ga[8/vGD.@cJkKPf{' );
define( 'SECURE_AUTH_SALT', 'P#vnr Slz7@9$x`)X#w~`(,8tX&;$ThwjjRgYv#wZ6N$OPenZGPV82kr6|!eIWh(' );
define( 'LOGGED_IN_SALT',   'gO>f4jG$Q7+v(<I+6~7?l!a[l{*FGTYH[K3JXgrZwF8$(rB>TG;S~eo6P{-G/]X.' );
define( 'NONCE_SALT',       '8>]hW}4)l8BgNT`ag`WC#m>qwUQGS9*6Ye)8<#msXR3mvAXfC)y#vZA@ML)bz}#l' );

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
