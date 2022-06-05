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

// * MySQL settings - You can get this info from your web host * //
/** The name of the database for WordPress */
define('DB_NAME', 'saveinvest');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
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
define('AUTH_KEY',         'N{.A?JBF~37mH.%G-s( vc-{&666q~r#DdQ7m#d$%85|ZCtQ 6rxA=d[CI,3h=6^');
define('SECURE_AUTH_KEY',  '^ihjx3wvL^D28?hbkCM]-;|.9^Ux5HodGc[/?ixb%)A9&jK;hs%@1q.;LKS%seoJ');
define('LOGGED_IN_KEY',    '5gPa_gvT+ai8}aWlMgu{@Q+-}%orAys9y@-F21!.a2A=1DEAkuk_6#X3+B^K528H');
define('NONCE_KEY',        ':@nwonJ._shb$%f2Prh+#As`!L@Cn+[lahu8jV}`3EcLQq^C0,[MPH%F)=_-&gxw');
define('AUTH_SALT',        'fBC=dV|jxYn E>)}MPK}5I4g39ZT>n#}n78>M%YAC n,}`;N%b|U8|vqwDS3H|,d');
define('SECURE_AUTH_SALT', 'ShIZyRc=-S% $sUMeV*Ks>A8VdI:O?qnZ)JO94^@_cE1}6SNoZPdbyoV;&ZJ-&G@');
define('LOGGED_IN_SALT',   '8* JgXrF `1N_R5EBDz$wtK6z86)gD2$j2&aAt!PiG1+s @,OqTq.<q8?BwPwS_#');
define('NONCE_SALT',       '+d/4z== .;&)~S=I]&d%{[LE}`gd/sl7WqjC3F3!b4CSS;6oS|)VEK|,*Q1BZ+p(');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'xl_';

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
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
