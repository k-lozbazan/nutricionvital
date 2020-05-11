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
define( 'DB_NAME', 'nutricionvirtual' );

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
define( 'AUTH_KEY',         'em/#WBNJ<_V|^^Z|v2WdBLJvKwSd*s)2}IB((2E dfGC|V)CfU&O)-wmg{u;t*}/' );
define( 'SECURE_AUTH_KEY',  '4>cl/Yu58xUe`tY+CH&J6cnR# 3J1yG>S/8W5:&G$fiwz=Wi,K-qZHdA{s/UW]$x' );
define( 'LOGGED_IN_KEY',    'sH#AcI^,LI$nWDTBbI`5BJ&2DxSdeJ:3-lb$AVqGw~]KlK8TIK/UjAVdR# j5BfX' );
define( 'NONCE_KEY',        'ZP$p.tvL# I.T-l&f*2.{9*uC-;4yM7W&}5smA:??d4%cK>)3xi26QB(rjOkeu^L' );
define( 'AUTH_SALT',        '2>E V6ZL,rIAYa0%B*M5/g8C&zME`}:yrk%+3b/N32FiQldtqz z)4K,5<#/NL=%' );
define( 'SECURE_AUTH_SALT', ':l/&( aqO&Bw{seynl#>}*`>~i%|+>x;[,:*hc|}ubM%CW?lB&`&R#.ic^3,o5p%' );
define( 'LOGGED_IN_SALT',   'X<KEI0F40~+t(vq_[%7grow?j-T%HHXkh$AH(Vq*MPJ#33frWu|8n]Ime_~)G!a0' );
define( 'NONCE_SALT',       'Q`$^V^ceIedt,4@JjD?RygOc&1<QB{Vx*Tx`w)Ly`e%#l/Ym#rlcH]PUhD}S+/05' );

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
