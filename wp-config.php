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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'hoaiphu');

/** MySQL database username */
define('DB_USER', 'HoaiPhu');

/** MySQL database password */
define('DB_PASSWORD', '123456');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '<lWzbMt!4QV:/>&j;#Mjr_&wW{m!BMbS@GK;AvXAn1^6=.?uJH )E#M)NqIq8Zl<');
define('SECURE_AUTH_KEY',  ')p=*ye0-moj0->h~%CLh]#,=Dvq7[=]8,M{|oYLfmXa9Jr]Qg5$eiZKNS{Mz3876');
define('LOGGED_IN_KEY',    '7Dv=q(dY=vSm2&Vj0MO,&TiAEdfayV7]s`6Jh#4fo}3+#}j|qLxmQx7D9cbQ;U_]');
define('NONCE_KEY',        'z.)aNpk$3/nK,;:i^B [XmWp} Z]|.=<!]=6WH-aeFGpyyMk9c~e{OXA@!NmXqT?');
define('AUTH_SALT',        'PI^p+`sFM.[VzK]+TP6VzW7iClNgCymn~*3VId&%@AV{Omk*dK)$4$0c!MlBI3`M');
define('SECURE_AUTH_SALT', 'Hs4XJw:|-[2D g=`vzD/s=mk %c[1lyQy.3[S<wh$Tf/^2`.@^t[U#R3.]yO~4[&');
define('LOGGED_IN_SALT',   'f*Aiz9gZiMYOaYp9SeP+:3>pwpX)CTxYF`e-U^9WdOw<sT9oF?)J/cn2ir}4Zl<i');
define('NONCE_SALT',       '2bI>)h)>d[F=;Zg;KY6X|KxD0Zl#X2|9Yth#mddY.Ron +XvX,`%ROSp)7Z2x4`q');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
