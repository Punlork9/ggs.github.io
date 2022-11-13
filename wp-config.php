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
define( 'DB_NAME', 'ggs' );

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
define( 'AUTH_KEY',         '{Y9S64IHIIGM,16pboJ(bbp6>NAAO|86`(zlT=5(A;*AxZWg`_JNq(P%dj*}bn>S' );
define( 'SECURE_AUTH_KEY',  '>nVB2I&HaK3SRotmV#llH5Vh*6pUFU_NY{{4qR%PW(|r~!;x5-.%5s`W!`#eGcPZ' );
define( 'LOGGED_IN_KEY',    '7&zx]8wFoF(:0ox}#2/Wg;He:~<+`>lEmQ,YfyV@0YVAdU+Ary1 $yK8@c9v<U`Q' );
define( 'NONCE_KEY',        'QDw;C%b?W6]8]a..&>OMNa,Ab%y]tO_6=s{9*fQcj`|mTX&[XlW&r3]_bi-g-htQ' );
define( 'AUTH_SALT',        'GQO6Yk(?(o<i#Kgpe-+Rd3LBk8lp70yD2M6R1^~$dWg}lk!xO/|Zx=d:~4L+1IXe' );
define( 'SECURE_AUTH_SALT', 'yTc4Ht>v_|67n,#goV[W+<b?kSN|0i0&O%UfL+Qj?F(YuVhh-@)-OyRe6B#*nV*/' );
define( 'LOGGED_IN_SALT',   'j}uvr+]B+A?q#PpW&W3nuMz5qTfB3u4tEK+gmKrn() I7Lb?BklF=lBe2IMUKWwI' );
define( 'NONCE_SALT',       'i0,]twiC282BcEK#,#B,{O%llM/;K}PCZ8Boh#Y6O>s}ClXKc)[bMVWgE{5mBp53' );

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
