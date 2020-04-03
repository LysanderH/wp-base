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
define( 'DB_NAME', 'wp-base' );

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
define( 'AUTH_KEY',         '014hH~)Ze,[KB[#Ga-TKeZ5_Ue)NhvV./DHg#[C}z|#Mq53b=vk|MGAxHq46zoLP' );
define( 'SECURE_AUTH_KEY',  'w&086YT<u *jnBQKF_.K)Qxq`Q9+W3)T9`R8C(P5M|?<ao8e4*Y)(`eW5F>95HKu' );
define( 'LOGGED_IN_KEY',    'jeErfu7I R] ~S+sl@8A.]gnWG[=bQFkqWZo|]|p/S!R;,p:0lV9%9%k:2GPXJT[' );
define( 'NONCE_KEY',        'iV|qt![# wa|;qXDUy{$l.0tBv?O0;YBfw%m]qUH-BHx4ef{(pTH2E7U8N4!uSH$' );
define( 'AUTH_SALT',        'GlKhVZ:Q:tDkUX+dSi*|P[5JfaYP3uSc$x_Tr@S}b!/8~1c;pUD9&kG&X5BCZiIm' );
define( 'SECURE_AUTH_SALT', '~C8q@-[Gl$qi[qwJ/ PiS_:UAe Le`Ur^Z?(c65/+E(Q{ru;y ;:Yu<e|~I{uRv^' );
define( 'LOGGED_IN_SALT',   'Z%pyrd~jM*.yXhv](#@On0iCf2:Wtr=~I=EFB9wMENnybyDZ#:FOri%TQP]Ff~u`' );
define( 'NONCE_SALT',       'e*t/-oE@j%0Z$ 7=}3.C8ux(j]PiTtuj7^|fba-KXD2^FRtod>5Tz:K;,O|1=P2Y' );

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
