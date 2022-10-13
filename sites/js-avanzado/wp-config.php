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
define( 'DB_NAME', 'wp_api_db' );

/** Database username */
define( 'DB_USER', 'user' );

/** Database password */
define( 'DB_PASSWORD', '123' );

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
define( 'AUTH_KEY',         '[m#]ub*qqS#<o~/.{#:TF06=_X9)[hJ1-@m5Ymln+Bb}ZXfq.XQC]D:8r^7]wxML' );
define( 'SECURE_AUTH_KEY',  'sHdr(eDQ!3BsBKe~x`@`htVQb!8*0<t4jDXB9UD9Y;y~m)Ng=2QP;Z_2KU4c]6di' );
define( 'LOGGED_IN_KEY',    '!#dhK?Y Q:F;A46ZFKn)!RCRI!m;Il19Nj51uhm]SJh+0}JHaCZ0tYjEHfovF xY' );
define( 'NONCE_KEY',        'M?MEV|yWx;[KH4ghBt@]%A dxt.c?j}+VHD8#_:uh(cXAjH@z:j57BuzBOv5+Ht*' );
define( 'AUTH_SALT',        'T0W0r]Y4v8ME~}0Q`G2;hSH7{h(M!mH9`Xi^GlJJ*K/8_G}n|.;zd{5Yq5kHA[D|' );
define( 'SECURE_AUTH_SALT', '~x4GBRCG?LI.a<LOR>ZhJW^0fdLw@(4I7xAe5MjD@,K]bzr!TThCHwCi<C^Nk!3x' );
define( 'LOGGED_IN_SALT',   '8GM`<8p6#6S(?GyI<wz>ZlKkaYF6lzVgh,v,5yJKs[e.`W=I]RQX-dI5!]nEvvqC' );
define( 'NONCE_SALT',       'qA~r_<<AZ>NYDI>XAiPpuyX=SOHpos*[^dB2Uk;wFduS1]td2<MtmQgK5R_eXNWR' );

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
