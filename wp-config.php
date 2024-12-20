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
define( 'DB_NAME', 'myshop' );

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
define( 'AUTH_KEY',         '*LUj8g,L8D#f${M/iU6Q}-<tCxr`+DG=)Kw4:r?J{L#|;@SOm`AI7+_z#erJ*&k%' );
define( 'SECURE_AUTH_KEY',  '2=P:$7/6JxvI .8B`dS/$l_,_odk?7-B!S).%U1xoa5ZH+s9}^<}.@[#a67j46#[' );
define( 'LOGGED_IN_KEY',    '`pRd,gQX=3AZW_)@X?,B3FW(tw`KOSHdAW9US&2)d:T!EL2q~3uFc`Uv+6%%la~r' );
define( 'NONCE_KEY',        'Nz 16WgRh+Ehv@*B|>biggi*Y+h2]YI9Lz9ZwVm.p$3bziYc~h|1&)Ku_LKKc#33' );
define( 'AUTH_SALT',        'S?||5Mm|tZX`Uz5)>pkb5r_4JhC@2&]R>6l1F{kqMp-=7Wd=fBSqb.Wgxl3v=$qG' );
define( 'SECURE_AUTH_SALT', 'jy~Y9V?DU;5i D-~J?.ZDR87UcbNbR`HfZSiUF@|YmO=~]CSNR|11/fNP})CZb)>' );
define( 'LOGGED_IN_SALT',   'u(nO0F/$=]w<s|=(/v>iH]Q{X}mK~I>(Cze[r,DX&ZBLK%Q=FT/EWQ9NT~}{rB8%' );
define( 'NONCE_SALT',       'q]HRsIovxBXhR6xxsHmm|6+rD+w<eN<>0!#4a]qb/?w?zo~TXteoCM10*2L5(d8_' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
