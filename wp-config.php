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
define( 'DB_NAME', 'restaurant' );

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
define( 'AUTH_KEY',         '}d/d7YNdNMRiw9XAW/1_FAugh$`V?y@m/e=B~X?KHN=)FSd708/lGzO}r)s~L,e<' );
define( 'SECURE_AUTH_KEY',  'L Utk!x1oU%m2`JGngc;{GL[ZUvu~/Qv}B_)yJ%v?pYx_4f &,#L~y)+IugjvT}K' );
define( 'LOGGED_IN_KEY',    '1--m8FVSb4GxkLL[HCIH}:b>e:ZwRl@dK{7^.$B}z$-;4`[mRx0&{%/midioHD~H' );
define( 'NONCE_KEY',        '5Me}JyMwvv4 F~u)_5idd%D5@>2sO5Zads,uSdH@CM|c%H+)FJC:UM1Zd5F(3k=q' );
define( 'AUTH_SALT',        '#byS-e.hF%3dlG.ep-A%iqJ+[aW,zns:{%1Mvqf#vy;ffHXr1KBYS[Q[2OO!Z%r8' );
define( 'SECURE_AUTH_SALT', 'H,^zZ>VRwaMB%k!B5~DFF~#rIxeAzIO]qND]ShTDB*%=ITr:`-qLxz1~G0F +NP6' );
define( 'LOGGED_IN_SALT',   'iAQCYRom42ZJLS0?og*qmxvt{a71;o#y`{bc^-iTWev4&Gu k_={h!eJx{1KmrhF' );
define( 'NONCE_SALT',       'P*>*E2WGxw|WKdI3:(X3-LA@@v@vgju M3?,z*UOteA<7<J!G?.f$z]^ZV4;+4Ou' );

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
