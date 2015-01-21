<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'localhowtogardnerwp');

/** MySQL database username */
define('DB_USER', 'steve');

/** MySQL database password */
define('DB_PASSWORD', 'steve123');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '{ucA7JQrI%A.Z5x<42p7TU=6AAt+6`=Mdru$FVLo<j,+3`po/R~$y)p{kPZ7qWtZ');
define('SECURE_AUTH_KEY',  ',uV@?%_a,%`(Ar4qe|p$q~9~Jw/H_#hzD*l,pV0c1})1|mEW(U*t}vS`RO =?n=J');
define('LOGGED_IN_KEY',    'a0(MVA,xIRd]]OxDC?Knbsp,]D@`)lwP#[[_5zvwK/h>8 8*wBSP-jK<O~!7rk*W');
define('NONCE_KEY',        '*qsNHB #-^i S3va$zncmB*$0W*=LzA/`m5J{/c`Ke{-( sk`16Gn+s`/Lry?A(k');
define('AUTH_SALT',        'u,@dNqYMiV8=&pJ*_g|waQ#OtKeiu5u7`TvFIXf,NBZn^.72!<BG]+0fNY&ON`tb');
define('SECURE_AUTH_SALT', 'O(4y}N#8Y5BS2vP_j5&;(o|W*?#w,Sr#.IrD8>a|GW#^;;-ZOP;2$#/(V^,xv)7<');
define('LOGGED_IN_SALT',   '}[3r*/LUf*5*%m3M{Hpd_s]M*35X4kD8}Fw}?6vw^:r3DB6wzwUk]}62MaJ]_Ox+');
define('NONCE_SALT',       'a|2^uRkUBo/(pPA0Afl$~11)c}KkndHq;sD7_/_8{u{*<nM2fO9S^.T+CMCo5i-b');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'newhtgwp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
