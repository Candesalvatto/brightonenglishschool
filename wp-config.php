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
define( 'DB_NAME', 'bd_proyectouno' );

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
define( 'AUTH_KEY',         'K5>)+(-D&`%ehe0sP_tne~&T>5~ae{-It5f8=?$ mX>-#lxzv]EC *~Lv<OW@b80' );
define( 'SECURE_AUTH_KEY',  'O18_Ck(4K<.(%f>WCPv(KqoP]9kqfE={GiY>X~WIf9/s{a^64N`ew`R?a.Emys#U' );
define( 'LOGGED_IN_KEY',    '9FG3]J`vY5(D$r!8s+G 8+7-,DmlGY4+![iZL[b.DV21F>YzcU2Tqg_8E+$Z_{Of' );
define( 'NONCE_KEY',        '#f,Ty;7RV3fJgIF%Z24f=pjwtlty{cwAUgd</:pr?A[|J^7?6| R,$w8`-.k+NY`' );
define( 'AUTH_SALT',        'r2!&Sfm}NrC7Lgl8%p`gT/1geGSK0n$G0<IwWi/[Z=PWbMRWXa8-&HU?&>,3vSFN' );
define( 'SECURE_AUTH_SALT', 'ptU,={^U;|*o>G>[Vm,-B4)[;f@ f%o{j=OKr8nQ;9@!nC2t~zHdp*]?GMbz C=b' );
define( 'LOGGED_IN_SALT',   'Fsth>LloCH-fEi:TcE|WjQsc*6No+cgZQ@Tv4Ewto_lHeDG6bv- Dr|RaiCid[1&' );
define( 'NONCE_SALT',       '*ZY[hf?Yi=,%BbZ&qd-:w;kAK9QI;&&0q2%+#zwAv{]LL/w9F8L[5X+{b%32`qp;' );

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
