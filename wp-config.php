<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'cjdecart_wo0124');

/** MySQL database username */
define('DB_USER', 'cjdecart_wo0124');

/** MySQL database password */
define('DB_PASSWORD', 'fsDRlwmKcHRD');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY', 'kYv=yQ}ui@es*myg*CjqYmO$zC^Pg<[OofGW(d*|ZtOTgd?yy>|Cu]tXw&Po&@Gpu}?[h];f!^eiz/PGQL<VeAb<}SL_$e{iEwBoA|vhmHkX%ut(xo/V!cCVbp$Pnu/;');
define('SECURE_AUTH_KEY', '-Y%+Eo|[udWETLy>Qol!JfbM!*]+t)h;+Dr;xjo[Sl(rBXT?Ht/-*vluky=T/A+s;<X?*K|jomMTPEd>;a}x+/phdLu?BH*$[?FFJ_ZYsyWd|{hR=Wg/nULQ{)snmzdN');
define('LOGGED_IN_KEY', 'OPq>*OB?ODF||nr@+}*DEp_Y;z@ZWHAV?T|$dmM?SbQbZR/LPuXVz@;|D(mlhfW<opIPg$Jx%Jj{^qn$tZ};&L$zGM_y]WLiBfmKnt<N]+bn={YUxq<MpZBC@=yG|YOB');
define('NONCE_KEY', 'ikqWENS_^v>[HKqy!mtLILSym;SF}[g&cytNSK+L=NG>JUtPxd}bi/%]NE/SGBkB|Y|LZJk?u&rQe[/Lgp[?LA@l$W{IjmaqVecjLUS[B[XzfEM/skt{^PUtmZ)Ynf<_');
define('AUTH_SALT', 'xMcw(gfqw&ebeeiFETtA*&/hbHucv}qYV_sW-okfWjWR({YuKzN/W}VDky=cUJ*Pdzl$%U_l%*XD[L|{bNtOYoedwRHaWqo*Y&=HPdbm^s&ZrkKO[)J&b;vpgzb*d--W');
define('SECURE_AUTH_SALT', '^Y=fB^)])D*j$IhVl![a_ZY%/hwOYLiif+b+g;S{}bhLVu>G-Ua=ya<->x}(stBhGGHPhGFe[tom<i[YyT|ySFOPuNUB&)ZZBYSgUvn(a*L!&%taEy>xCTOt@f>-fwbR');
define('LOGGED_IN_SALT', '+o%ROq$PvuDL{?EeeEGJTnOc}HW=MT_|_y|wkgjjEus<%L?feR_[[MrRhnzOu{>co=)MCowuP!!x_uPVRzvqD=dz{Tj%KVU($DYNG*_%srtK=cS-^t@&TSvw][oi$PIE');
define('NONCE_SALT', 't)>!w>Ot||KF+GIAVEsw]NK=Y&?ROZ^>;fOj{q+/BY_+dLFfHvfP_*f{l]J]O;)wqZPlBo!_e*^e*<q*L@uUtCh?L(lq|>_THfsO?m-B%[j|cgDPRLS_E)(RhGGREwjo');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_cysf_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

/**
 * Include tweaks requested by hosting providers.  You can safely
 * remove either the file or comment out the lines below to get
 * to a vanilla state.
 */
if (file_exists(ABSPATH . 'hosting_provider_filters.php')) {
	include('hosting_provider_filters.php');
}
