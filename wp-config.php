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
define( 'DB_NAME', 'thexboxshow' );

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
define( 'AUTH_KEY',         'JC_lP<)9|r(O+!SSx47ylKx@$5:9(R`#{j[4_cUf&g1K~>adYCqHh`Vs/$uh!Ib&' );
define( 'SECURE_AUTH_KEY',  'V7k0HtX3lDH(>2CRuEkP:DZ@F&[hoQU@(6`1Cbhg!9~zXF!sMGw(gTGj7==7X4St' );
define( 'LOGGED_IN_KEY',    'SqlPIbBI)>BTX2jz-+M6:QO8m6?C=5GRFbVCbOlJ`M*qF0oyS:)Yig+l@n%uUP!A' );
define( 'NONCE_KEY',        'oaVfEu}aH7c)#L?vl khy  )pH,Wa!oPV!Bg#GQ#gg*6UhQGRaHa9lZMjCsMPHg0' );
define( 'AUTH_SALT',        '[8]+Sofm*kX/{^]x$9i^J,zR+vWw_JPZ)n>]E!z gB(@nIR;Fc7+}^A30P.0!$~%' );
define( 'SECURE_AUTH_SALT', '/=ZsMvE7Q?JQ9EGmteS^0(#{E~Fc;:W{mOO~VkLq%}n@1au2L*W}6Vu8O.?0<zee' );
define( 'LOGGED_IN_SALT',   'F%0W0}UyE;cBs~OB TM!)T9tfyUaJX<7}Ym.1st*KTJJX8MN&X:na*,C}nM8&Krc' );
define( 'NONCE_SALT',       'a2j^Xj/NN5$IYO&M$LzQ~}z6 w:|;Hn@[|2Lo@1H.&2)qC~Gx36;#(qs2Nt,Cl<(' );

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
