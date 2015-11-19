<?php
# Database Configuration
define( 'WP_CACHE', TRUE ); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/nas/wp/www/cluster-1297/bats/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define( 'DB_NAME', 'wp_bats' );
define( 'DB_USER', 'bats' );
define( 'DB_PASSWORD', 'BpxbQy679Gdg3LMK' );
define( 'DB_HOST', '127.0.0.1' );
define( 'DB_HOST_SLAVE', '127.0.0.1' );
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'wp_';

# Security Salts, Keys, Etc
define('AUTH_KEY', '|i%-@OLHIk-<gxS-v(R|fy#h9b-c|TEi)+pQhFb<B|wC=}DD.z=7,QmQi082v0:q');
define('SECURE_AUTH_KEY', '}QCh}U&<}Sk<JN<~B)04/8,-2%T^Dag(aK]x$=4J`vO6mxp WkM`+c~Pxm`Si%-k');
define('LOGGED_IN_KEY', 'z&Y#`eC2B,Ej%1NGS~dk|m8aZ6|!LBb/tm5~XcXj/H]WFv|aCCV%!Ew+:#g[G^+S');
define('NONCE_KEY', 'R|[>he&llC~FpGZzt;6{^2|&`(??+6uvysT])3$Z:9UB$03Vv[}=^c{_,liNRW_f');
define('AUTH_SALT',        'fQGJ=|Hg7bbM:+8`y|gf?)iA]MMN`6&sIccdbK]{:}oFnZxq+MZL!v)|WD-?*zBB');
define('SECURE_AUTH_SALT', '^]ky*n8d7,-343-B.Wy,xR6;0nVSxy-:8UpsE0C}AM*$>hg+5x>;v|,[V;s_X,|-');
define('LOGGED_IN_SALT',   '*9{kH.3iwK/jC8%o/=bR0|p`sSjo9R2i*p=b{s$>wQEL(pl0TFw-2B|+!`zMi|+*');
define('NONCE_SALT',       ',~x)e4R=7;$+0dvT|~93UA*LsT*Nv}jY5Ozh6 4a0s+(6@Bn`F+@hZQlr>o?/qDS');


# Localized Language Stuff


define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'bats' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'PWP_ROOT_DIR', '/nas/wp' );

define( 'WPE_APIKEY', '73ab7873ded748e1df506549b907695b477314c3' );

define( 'WPE_FOOTER_HTML', "" );

define( 'WPE_CLUSTER_ID', '41163' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

define( 'WPE_CDN_DISABLE_ALLOWED', true );

define( 'DISALLOW_FILE_EDIT', FALSE );

define( 'DISALLOW_FILE_MODS', FALSE );

define( 'DISABLE_WP_CRON', false );

define( 'WPE_FORCE_SSL_LOGIN', false );

define( 'FORCE_SSL_LOGIN', false );

/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/

define( 'WPE_EXTERNAL_URL', false );

define( 'WP_POST_REVISIONS', FALSE );

define( 'WPE_WHITELABEL', 'wpengine' );

define( 'WP_TURN_OFF_ADMIN_BAR', false );

define( 'WPE_BETA_TESTER', false );

umask(0002);

$wpe_cdn_uris=array ( );

$wpe_no_cdn_uris=array ( );

$wpe_content_regexs=array ( );

$wpe_all_domains=array ( 0 => 'www.improv.org', 1 => 'bats.wpengine.com', 2 => 'improv.org', );

$wpe_varnish_servers=array ( 0 => 'pod-41163', );

$wpe_ec_servers=array ( );

$wpe_largefs=array ( );

$wpe_netdna_domains=array ( );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( );

$wpe_special_ips=array ( 0 => '45.79.136.153', );

$wpe_netdna_domains_secure=array ( );

define( 'WPE_CACHE_TYPE', 'generational' );

define( 'WPE_LBMASTER_IP', '45.79.136.153' );

define( 'WPE_SFTP_PORT', 2222 );
define('WPLANG','');

# WP Engine ID


# WP Engine Settings






# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH . 'wp-settings.php');

$_wpe_preamble_path = null; if(false){}
