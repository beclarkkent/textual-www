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
define('DB_NAME', 'wp_textual');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'rQr-KT^.C{csE3M;P#a4_Z]Kc^AQO:9X->E|s?)iOY~h8 o9&L[h4~g:Z]X<h}$U');
define('SECURE_AUTH_KEY',  '!>pJl+AF7gT@Tz&P[]J<QPPu0G4xfn2r1`)nf%xz`I<@-6XV{fa^[g# [ioKGQZ%');
define('LOGGED_IN_KEY',    'B3g%ocV81jPEW,5e8cPFV_UHjD@gZ^NoEzw4##%UnubnD=4?A{p]M}m1j&cuev*4');
define('NONCE_KEY',        '[c}E>!V0&Va=>L,|ABxb?E`i<k-=c@;h7#ZU6O62Kw+]DQOq#5`X*X5NL]*7jtA+');
define('AUTH_SALT',        '3}=nDg`b/#f;Z,g8bgDSzqV3-t>oN>*UMaianAH|=hA_1!z.&2Svu1Dk40qlR|[(');
define('SECURE_AUTH_SALT', '6meiF{TyC*~ YKe{,&3%}Z|&(oA_lM=v)zG~rmnCtHgY7S%<yHI2La[v5))r%$ m');
define('LOGGED_IN_SALT',   'EtpHb[s#u%N>6]l_:[)y3T^V^;Wbk`Lm4aWJNuLP.<,8pc>S)6f}`#Oobtf$lf{?');
define('NONCE_SALT',       '$R`Kgbz?B8DT+&hB`T->|c{[${h5@hDr&-Ub&pt.gUwp.0mZ-w;d>J/he$X9Mg<U');

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
//define( 'WP_ALLOW_REPAIR', true );
