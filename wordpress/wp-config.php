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
define( 'AUTH_KEY',         '8@BSdN&TiM.F-eb_Zj.[vOS`3@KLRYuffz6cd$==;{@(:YvD|&KpL]ahQj;SEa*4' );
define( 'SECURE_AUTH_KEY',  '70.|<HlsO.z>zod6NW|GMT^@C-oq:|^.HY?JqNc!ef#(GL`1^T^sK9GfU_~O,%s[' );
define( 'LOGGED_IN_KEY',    'EEM{RT(*m) 7pwANvDX &J(+0=g6&-b~w6P7rc^0_:Ir{ECsbfCs$l/8vc*$>uPT' );
define( 'NONCE_KEY',        '[=A4^v1,9Rw$)vY> %zb?p a>,5XXO{xvUC@i=Y(-9QCqpAxg-)^k%{LschuP$g>' );
define( 'AUTH_SALT',        '{=Q-)+L? [1yO(D}]rl/8AN3A`Pcr4EH81:lM_DqBYB1)sdl/L Smh>V`{2[r#&A' );
define( 'SECURE_AUTH_SALT', 'ROGQbq9g/YvAe+v3l:mxgX2UEsy}w NRA0K0$[>EkPV5R 0|,tOKi{=gsGO!OtVS' );
define( 'LOGGED_IN_SALT',   'e|ALRKM7BHbU~[|sI:,N561kb9RZ9t RgKf4g!t?XCn(?4>ry)K^Yot:KcvGlZG3' );
define( 'NONCE_SALT',       'lwjG~!Jq;LXJ}f,.]Ll`.<v;uPd9qSWE!8/qK(*?b@GsJQp|)~<ut6FTDe#}v4m|' );

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
