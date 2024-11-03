<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         ' TPjp7=j6][X|6a4V%35Cn,t_UP7wQl_`i~){:`W;=RJ9A HZ+nNazGSs#M:&^NE' );
define( 'SECURE_AUTH_KEY',  'hKY:Cv%f&`5SprxB-M)4HLKi.(?h}yT=$FHb]4RqZ:+w--Vu{>|&}!v[tE*tEx#(' );
define( 'LOGGED_IN_KEY',    '0!O[ w/?I}R7Em@UayihYl2#!-`}B`9{(]Oj(zJD=>Gc*p}jF]`U{XCW`}-Up3[^' );
define( 'NONCE_KEY',        '!5{o+EnLHG7$ZHbnB`@y#cr!vg.&AKim{c6Gt_?|z:]0al&4>gGn=cuT#aB=U@sZ' );
define( 'AUTH_SALT',        '-Q:d&eCYa3m X7M ``ejgEY(2L4-|U%F#7+Q~`g:{H_~Wz;pYCefU[tf.g.`h6 e' );
define( 'SECURE_AUTH_SALT', '9db(OtzH4h]ZTr:X:do}~1NR2<[qQvQq-rH0L/jN@<[t/d*X2m8y_V~T#V<lq?`j' );
define( 'LOGGED_IN_SALT',   '516H|tn(|2)AarL~Q;^!RP*ri%Ud-^9~k_zm=pvcBbuhTUOk1v_f&mb-KYhWQq&y' );
define( 'NONCE_SALT',       'wrQ2;j6*=/z`sK>IZB<24J;Cd`t 6ptIXShbk~GiQ^6*gAZD+l&|en${:s1i}`l=' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
