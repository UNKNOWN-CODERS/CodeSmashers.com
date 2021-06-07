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
define( 'DB_NAME', 'Coder1' );

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
define( 'AUTH_KEY',         '2m?}<N 8z#YifbZd0d.Xfqk7~sR8ZttF,lCBG&#Vk.$V?yw]o;!v*QA>D5z$T20&' );
define( 'SECURE_AUTH_KEY',  'AOkFTix4PsvbaQ|gKbv@mCbky0-eW2cB@jlO,kydoqk-zOC/A0omE_w#rGXeHEZ*' );
define( 'LOGGED_IN_KEY',    '$9|y0Sb$:-+wmZi}~pu$PGx/^=zHIHog6R{K4K:|k=k>GC=%@W1b@b0AEW:qsG+J' );
define( 'NONCE_KEY',        '*S;_h+K3By(aZuQzuU9y~y?}OH#p0mM2v>GK7UX_c,5B?#1TP 8ZS/ lq3l+JC1s' );
define( 'AUTH_SALT',        'n!L:6`f;vhkkM=.]~h#{SFKah=bb~P?olj ea&VYmn+yc6_*l5DY5,qi/f5&W+#~' );
define( 'SECURE_AUTH_SALT', 'md9u.9Ww>+ 8*X_65Z&z5v!nahOgt<?( dmH*Ns+PwlX#bVp/P5kDSjim2iE#qCV' );
define( 'LOGGED_IN_SALT',   '^kd)]C|Jv%0:qsl4k/XZ$Lk!16qEZ5sKJx4b)5>[vU^ZxDiI$5eBk_<&wWj8|v-4' );
define( 'NONCE_SALT',       'N7(~4x CKa)&66m28cm Ye{Fj1}CKBFh-6XD|C #%Md|lJEcz=Ody?`<(UqBJ(LL' );

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
