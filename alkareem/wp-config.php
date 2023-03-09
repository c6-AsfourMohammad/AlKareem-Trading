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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'alkareem' );

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
define( 'AUTH_KEY',         'a}riGq[0e=@S]a``:e1GG@?%Z6(;DR0:ApOK70?>R_A`Nu~L5%Wd2-b_5f*B28@%' );
define( 'SECURE_AUTH_KEY',  ',(]~7mnHl{)t`:;dbh@jpMk9TE.q7FVw&x~AGppv7t/ga`s[b[?.di<~&)Gd2LB@' );
define( 'LOGGED_IN_KEY',    'z,yiL?U5.L}<mq}d/:OMB0-O*Od6|B*B7,UpY<Y=4W8d|J[4.n>{F_H+m9B~S0m&' );
define( 'NONCE_KEY',        'h+V}. d_Kr:-C*<J{q{D#-pV/a%rX|/4#:2`:`v~_Eh!em>77<6.gMD&wU)?o?K@' );
define( 'AUTH_SALT',        'Wx,k3f<hpy.I3mtH4dFLyT2#k?b/ilJs VIf6+n!aZ7&EX~Iz<GRXB|b$GZ,.M@}' );
define( 'SECURE_AUTH_SALT', '&OpIPL[EW92V$cO-?3uW38nrSS>s@r{?7=23R`|0q2w&7MpBvwy.1;8rNK0HG.w>' );
define( 'LOGGED_IN_SALT',   'Vp$MRIR5/`ex}lym?d:I2MG^AHs6T_rtmBYKSLey`6Y)x4[J,i:b`}8SD[>Lt6f|' );
define( 'NONCE_SALT',       'KaF3=W`A&RV&.O(M2KOQq,&}cHYFn#X(JmZhNW]`3z6!C-?ZbL22v*c/5L0iwXB ' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
