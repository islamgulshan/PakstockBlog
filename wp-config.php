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
define( 'DB_NAME', 'pakstock_live' );

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
define( 'AUTH_KEY',         'h8E5%>bH`,<O/_Tdxo3q1#g ({T1G7!}hht8s+PD}v%8_)2foy)va?@VKcnXyC*3' );
define( 'SECURE_AUTH_KEY',  'RGy+`ODHvd0Q!OS^8~(Q)KOb3c;>P7;~hq/w_X19T@)?[SR|}C4-1R<iIT##^+jG' );
define( 'LOGGED_IN_KEY',    'r[98l6+,^`2[o&>vLId3f%#ceRML1wmTEdoL!O02OK 0*YLFUY [l6a28fo1MeY=' );
define( 'NONCE_KEY',        'r~g6q%W-g9Y7x)H82-MQ/{{DZ>:RQEhh]TN_$:X-Vp5)zF&!?w=W}?lS:92_LC.d' );
define( 'AUTH_SALT',        '6}^mGTP Haa6CW:5=sM3D6rbpFxU?2orF?@rne|=Q`<zgD<kP~63JZDX!3qv,&SM' );
define( 'SECURE_AUTH_SALT', 'g*j=/Rm9H^n0hf?+@Rc9i_6cP-+Hopql)pN6^H>UKg!;Jo$oGOhP.!AeyODf*H<W' );
define( 'LOGGED_IN_SALT',   'DyP}=V,>EWL(kMlP#X$K6vZ-0p*@W>jI^c*>Y188g,n8fobTRztkav[-F=z{69C^' );
define( 'NONCE_SALT',       ')^YeOpv1(,MLv=g~kX+tx^ao6vT4FE<ORP)]_@ux<LXsq=JeYds{Hsz,qSS7z8;n' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ps_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
