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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          '+6VcN@3:L:pOw_G3))^pxO8gdxyP2HLOR[|t4~?$717f#U9nlZJ&YACJ:XL=Umgu' );
define( 'SECURE_AUTH_KEY',   'C|lJc<7TP}91?MZb+&*7faiyC3n7G+@br^q$(@HHgP9#vHiB?~)QWfrK9^r3w{Jg' );
define( 'LOGGED_IN_KEY',     'a@M2oDc>*=F}V@DB[bCN;F/Jw!@q0U-m80w:-)[htM^O3NdUT$CNrWO7d)|x<-LA' );
define( 'NONCE_KEY',         'R0~|=PW(~2QY5z>Z0u{]f.A tJ,(? DlX2PQzxi@6G_@8%inQ+^)QSov3IgI~.or' );
define( 'AUTH_SALT',         '1Tatydz.GsgI/VMv1@iZ+fbLOI ^$q%sDO%}uw;MMHgR$R~#|sLdJ5+@ccm40qQx' );
define( 'SECURE_AUTH_SALT',  'niF#E4Vi/Obo}l:a1Ml`7FQ-:PH[B|@/&9J8}lLq.+(&:^O[ Qu24[[`+(9JXbo@' );
define( 'LOGGED_IN_SALT',    '7IRX32Ejda^)N40h%Z.hBc)5(w-[B{yoks0ag!/mz]OG<Ay~&Otbt=T*ENKq}zAa' );
define( 'NONCE_SALT',        'r`b>SAncS]Uow;`gyF!]nQ1px@==pk&Zd.)3n; +90q7;zQmQkoSI&zYs{Fl+fR ' );
define( 'WP_CACHE_KEY_SALT', 'Tcw<kLSRp`5lj1NJtey3)pSHB=bO]X-AQk80C,Xf{A=lG0t|%pE~tlDDgwVrE3^[' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'JETPACK_DEV_DEBUG', True );
define( 'WP_DEBUG', True );
define( 'FORCE_SSL_ADMIN', False );
define( 'SAVEQUERIES', False );

// Additional PHP code in the wp-config.php
// These lines are inserted by VCCW.
// You can place additional PHP code here!


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
