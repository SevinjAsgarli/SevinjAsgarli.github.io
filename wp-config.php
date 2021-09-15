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
define( 'DB_NAME', 'wordpress melnouse' );

/** MySQL database username */
define( 'DB_USER', 'SevinjAsgarli' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Sevinc2020' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'k?,+<.2 5sy =&t8<6D]}Ma0pM]BD`v#2!mUW>^eF{$kNfw`9lZubZZTQ-7V|m6O' );
define( 'SECURE_AUTH_KEY',  ']RG*prP0+l<k!Y]CeCDAs7Il@g=~#6.*ZqdzL5xl$Z(T]x8OcnHYp5SOXb:NC4Dw' );
define( 'LOGGED_IN_KEY',    '[t]ibjSFR (=KIyf}(]nUM1aR^V4+hem&cP[;(J_P3e^E_@AM$Y]^8UI#I^19h~.' );
define( 'NONCE_KEY',        '9a|m_DS*ctK*`VE_t.&Y1s5)l+T,%J#2AaN0ia@:7QoK9#0WVu>md<p..xsk7G;?' );
define( 'AUTH_SALT',        '>3c|&`kp9HJAll(v8rtJX1HK%>Y=s3Lq1(C&-@jhNE=s#[3H0~zWv{S_jT.PbS8_' );
define( 'SECURE_AUTH_SALT', 'ZyOfdD:.d;BMs#?Z6T:HZ/Yyequg{}pP~j,Zai4Fl]bAbsE*>1AW@FJ]%:5HHSJS' );
define( 'LOGGED_IN_SALT',   'Mn{%y=DKA3!mDa,t}[uJ*,xww+PB$ytoyE2!5w^JFjn)Se>0|BdB8dKQsnj7af^|' );
define( 'NONCE_SALT',       ';*[yvc/^R.pwB.vQ[MyT7(3h=75/+G^?,d#zdxq!,D; .H:Jc:BHkl`1r_;q/RF|' );

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
