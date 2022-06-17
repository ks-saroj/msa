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


// ** MySQL settings - You can get this info from your web host ** //

/** The name of the database for WordPress */

define( 'DB_NAME', "msa" );


/** MySQL database username */

define( 'DB_USER', "root" );


/** MySQL database password */

define( 'DB_PASSWORD', "p@SSw0rd!#" );


/** MySQL hostname */

define( 'DB_HOST', "localhost" );


/** Database charset to use in creating database tables. */

define( 'DB_CHARSET', 'utf8mb4' );


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

define( 'AUTH_KEY',         'E{nA52/;dBi,-.rca$Ygu/8n)j`$G>f</r])XX,e}FofmNRvuJ#u}EnV)a>Wcu/[' );

define( 'SECURE_AUTH_KEY',  'tFog7}e~zlz<%W}9i*F@*dcJTwkL(VH~ `x9tA<:x(/helZqL _o*1L]+C2*_E-N' );

define( 'LOGGED_IN_KEY',    'zP^+vj.j}{q7dNOc5DEP*K+K;D*p8@;i-OppxX0X%cUfA[Hf,{,Ew$r:)s~D5Ok.' );

define( 'NONCE_KEY',        '#OY@LF~]:q2)_f)+x!+FGN4. .F=:Ib}T<>]v$$-`B~M<HgrMIPaXN Cs8mFOGL]' );

define( 'AUTH_SALT',        '(>&c_q3EaH&uP$ KX_TtS9gjzia-m!b^|a+q`0~le1Q%E%ugn7)4lSXOx3wKnE2j' );

define( 'SECURE_AUTH_SALT', 'L6fFxdz@ZA9&JQU ax:R<KZ:YNS5b#^$WbN99~DjHF:QFi:zSUJ3fslqf-J%;J0o' );

define( 'LOGGED_IN_SALT',   '23e+NPa&fXEEWVPh%iJL&RRsju2X#RFU3l(jVH4RHFqBYgD Y?UZhKeq{e<~f.[:' );

define( 'NONCE_SALT',       '}vXl4fUlMbtW~6X]`U~#|%yF$rrR+>0D*]X2)PW4Lx|fYIv8vgQ;j-S6?S>l;3!Z' );


/**#@-*/


/**

 * WordPress database table prefix.

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

//TODO:: need to change to false

define( 'WP_DEBUG', true );


/* Add any custom values between this line and the "stop editing" line. */




/* That's all, stop editing! Happy publishing. */


/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) ) {

	define( 'ABSPATH', __DIR__ . '/' );

}


/** Sets up WordPress vars and included files. */

require_once ABSPATH . 'wp-settings.php';

