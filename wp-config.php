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
define( 'DB_NAME', 'wordpressdata' );

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

define( 'AUTH_KEY',         'wz9Evk745k5- @ZSMN)Ied<;@<)tFGRv]#Ad:,KZKcc5(_QAXUlyHmTFM[V`q1;X' );
define( 'SECURE_AUTH_KEY',  'vv>U+_(%K%gZTBr?N>3mdya4|oovw=);%sEbDWGDn`7zIx:@_A8sF[M=}B$OiTm=' );
define( 'LOGGED_IN_KEY',    'qG:pk!IG7pR!Fjj?JY_p>3O?}w[>:B9<mxO4.j#.yK8+~G;Kv3})Dr<){D7E=CS$' );
define( 'NONCE_KEY',        'b;rt3>_?)(Z*xF|?vV51v.nCFc81*eOrL>,Fl)&Ki=Qg){?Y7fH7Uc_^XFQrn-%l' );
define( 'AUTH_SALT',        'qP3hC)80#~M3WFBY]C01zW>_QXFF8>k{=F9V[wk1;Nr${)tvpicQCbvLXS-[<SdC' );
define( 'SECURE_AUTH_SALT', 'qMTosCt9=F0eLh.~rZ1P~2a<(Nm5N%*yol?M,~!8x--tbC]$.pxxZ`}2X}@/=%#j' );
define( 'LOGGED_IN_SALT',   'E&HwQ5>en]#/*sG!&yngg[P~eO;IpNUuwQ}Yr[$p_ZHGF(9;=^nzYV2[B5O0_$9H' );
define( 'NONCE_SALT',       '`r-lZeSgGSq+@)u=e[v{2hq2I63!a}6*i9ED3(KW~Q%iWY_d.[u%|*`FiF*Q{3a6' );

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
