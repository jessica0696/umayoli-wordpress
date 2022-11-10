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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'jsswebco_jBEp4w10' );

/** Database username */
define( 'DB_USER', 'jsswebco_jBEp4w10' );

/** Database password */
define( 'DB_PASSWORD', 'Vq1dIDDZ0dkxkCYG' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '`0Z .w?w,N#:ZaxQ%<-Le^#Ps$fWxm2Bx&Hqm1Z0hM)hQO%4*`)k;&;YlkDn;xq/' );
define( 'SECURE_AUTH_KEY',   '-JSDn0<G8_b-qK|e$~{@N/:oMVV2[s&6Rc~4|(kv;J(99WwQnZbfN5dM6DwYB=Z6' );
define( 'LOGGED_IN_KEY',     'y@?p9X:h!s,Y$/wTSh_S|s;I=#>QOtBXd_p&2d sE1FVwmq:rNekVz0<qzL|+*(.' );
define( 'NONCE_KEY',         's<Ep)bS)5 Sy-Qj:kL(k8;PL!%l,v?6Z,dLV$xv~5FgV#;:OIe@<?gZiqe;2!{L7' );
define( 'AUTH_SALT',         'N]WX?wUMdl]hKZAwmQ#fbHAT)V[wa4:ak&h9[a`Zx>$tvDs}]dq(ZuP}sw;xayd|' );
define( 'SECURE_AUTH_SALT',  'BCXIVM#ns8VY||lflmP /rYdS.m#pl&`Llgw$eu5BwT(V.Z3gwN3NhixE=`!Pk%h' );
define( 'LOGGED_IN_SALT',    'YW+}qL%guv7YxyyP?1R.J}I4wT)#XdqQ9LJ&.^471k}FGb>I_AtQ5YYF7tvQL$)f' );
define( 'NONCE_SALT',        '6z,6FpCqaXg^PZW7SRfg|$UL{13T*E+ , r$e(bcRic=LK0EQ~<2<E_D}3S[vT?1' );
define( 'WP_CACHE_KEY_SALT', 'w@Q)kI>pj}YJ&)+ZPe/M6j]mA+j[ bi;vK|p-T#=m?cpDjrisV9:ePr.iNj~lleF' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'w47fa_';

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



define( 'WPLANG', 'es_ES' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
