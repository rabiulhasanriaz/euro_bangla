<?php
define('WP_CACHE', false);
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
define( 'DB_NAME', 'u148486399_8RaoE' );

/** MySQL database username */
define( 'DB_USER', 'u148486399_IYmIe' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wUVSM6Ha07' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'zUTjl}E,R-)U&lzjSo`g$<;*0~RI.PYK&qAS`txWKQ%%Q}b5^n,R+#z/#S[<3g~7' );
define( 'SECURE_AUTH_KEY',   'eR %0G@d1|:oaZ7ozE@P8eVYRzf?{lE0WQT*7|DDhR-o?s|MVKb^#n9T3eqydgso' );
define( 'LOGGED_IN_KEY',     'JcH&H|ih/G%|Q%gIh2OE3{G[_g8(ix@UFx~ReqxRkr&X]Ncbb/=LcW#];G*0Ada*' );
define( 'NONCE_KEY',         'azaJ!s3Vj8(N=-e*4f[EXtql2wDs<zjMH,B2,-t$}LR gmY&l2i sAbcS?Tl^:$1' );
define( 'AUTH_SALT',         'i>}BY@Y2iQO>!w+*D$vpsJ|M/G.#lZa=WqC7zu,-fQNbU|`7huS~ ~QF%R:#vsf(' );
define( 'SECURE_AUTH_SALT',  '78eO-`` Is58|/99@x_A=/}/G+3FJ>FJ v=&eq=,Qrua~QSd,U}pIzdm-e&:MHf^' );
define( 'LOGGED_IN_SALT',    'sB_e-Nz-BzNhjUik.8qNv)_-;s~n:BR+TKF:.mSip-4ZPV%sXagBZ`)H ^z8sH:S' );
define( 'NONCE_SALT',        'pt.>Iv+x&4Ir/w }&[.bULD&JQEICK(@nj9b(rw6{D[*C5PrWWFk>3JG;s<Bwz<x' );
define( 'WP_CACHE_KEY_SALT', '*PM<VZ;24&p+s8xr|aw1Bv>H&p?A/xkXoY|R$CWZ?dBhW-]@3lf4K]e610H?^:g@' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
