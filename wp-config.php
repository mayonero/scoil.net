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
// define( 'DB_NAME', 'digi_wordpress' );
define( 'DB_NAME', 'db_into' );

/** MySQL database username */
//define( 'DB_USER', 'vitorzortea' );
define( 'DB_USER', 'db_into' );

/** MySQL database password */
//define( 'DB_PASSWORD', 'vitorzorteaPass123' );
define( 'DB_PASSWORD', 'dfsDSFS7y5#fsd' );

/** MySQL hostname */
//define( 'DB_HOST', 'localhost' );
define( 'DB_HOST', 'db_into.mysql.dbaas.com.br' );

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
define( 'AUTH_KEY',         'O.y^S{%^xRY~p`<aPix-T!y(4c Q`IFu~Q%KTuLrB.o%HNnT$))xNckt6?R.M(D+' );
define( 'SECURE_AUTH_KEY',  ' U[LQ}*0zpH3yjfc8w_sW>+o<xr~2As*(Xkr+ yfh>/@waj?NA3K(#AQxmRN;C@_' );
define( 'LOGGED_IN_KEY',    '4&r#?tM_/N/*qI1-JHOnZB`:In{u@SaYLFUN7QDJrg)8|<`Be,9hpdZbaL#tZ{h=' );
define( 'NONCE_KEY',        'FT)/++~rPEW7ec@&n&*^O>k$]U>C,U10RY-O8]Zl)5]C#.FqW<Flw.G}#G#m`5F)' );
define( 'AUTH_SALT',        '$8Zj=)ho{SF5Pxf71LQ^ (-23ezm{=:$#R m%|i9dbMKp>4gnL:p8WU0 e#>3%=n' );
define( 'SECURE_AUTH_SALT', 'N}R$ r@7T^t&zXB-DbMc/ % izzJn05])ARlKK>6Po`M_.H}dO6kOaG|,ZMS{Wor' );
define( 'LOGGED_IN_SALT',   '.!}6FM6:a:gf nSTeQEqSTm84X=F|xQ]5cguE@p.m@KPY#:jU3l|Ez;?%s(G5TJn' );
define( 'NONCE_SALT',       '&cxf1Ytn^$&Us#B{a J5?T,*5;4plU;Jfu|aW]jfH}hz71&G^***y41Hr^3^7?hQ' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
//$table_prefix = 'wp_';
$table_prefix = 'in_';

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
