<?php
# Database Configuration
define( 'DB_NAME', 'wp_nasiolcopynz' );
define( 'DB_USER', 'nasiolcopynz' );
define( 'DB_PASSWORD', '-CaT4nEh_uESEkTmbg_c' );
define( 'DB_HOST', '127.0.0.1:3306' );
define( 'DB_HOST_SLAVE', '127.0.0.1:3306' );
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'wp_';

# Security Salts, Keys, Etc
define('AUTH_KEY',         '?+y+VT_d?%Af/}~a!?8vrV+hHP($f9+X@$yR;5C`:erkB`n^|A&[D@?*swb-CO/{');
define('SECURE_AUTH_KEY',  '|:&Lkw;+=)~gjFF4R}NKT?E)c$(~qqab?[!68lKNGvyg~ ,oES-||KKN6[e@O.Q.');
define('LOGGED_IN_KEY',    'dG-Pc1nX;4qA`wJn-?_Fov|h6+%VH} /]pr4&,Cf,P,Q#BXarKE(FB58j;q%ceD|');
define('NONCE_KEY',        '3%!F?ikY7/H-n3448H$Z$>HUx{3FEm8KF<!&ix%KmNUelHC*vkYSEpb:BG5v?Q=q');
define('AUTH_SALT',        'IWWX)Fwk5R@J-eIG>:>)({@bmT=7HC|F70cjzrvv?r-pafrD-2&5D/3V$)|5+G0/');
define('SECURE_AUTH_SALT', 'wYmScHI~R`OI+} !^tHATzuK1VnN~_8~/VwtNX?~5`nmbEL<y:]:<cW+H8iu,m[M');
define('LOGGED_IN_SALT',   'i*R[w`TVGd-4w{6rubdE$6&!K>t_2*&uj^DP&F!vP( LQ</{i(u_XU$(Ir&|U<c6');
define('NONCE_SALT',       'MB_cE%Khq2bh3=.V_s+fPe=Yn0txgKXU~a95Wb{t|,PQ(BSD|H~wGL$p;bsk.+8v');


# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'nasiolcopynz' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

umask(0002);

define( 'WPE_APIKEY', 'b21a83582ed0af76129d34d26c6ecaa474d937de' );

define( 'WPE_CLUSTER_ID', '159771' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

define( 'WPE_SFTP_PORT', 2222 );

define( 'WPE_SFTP_ENDPOINT', '' );

define( 'WPE_LBMASTER_IP', '' );

define( 'WPE_CDN_DISABLE_ALLOWED', true );

define( 'DISALLOW_FILE_MODS', FALSE );

define( 'DISALLOW_FILE_EDIT', FALSE );

define( 'DISABLE_WP_CRON', false );

define( 'WPE_FORCE_SSL_LOGIN', false );

define( 'FORCE_SSL_LOGIN', false );

/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/

define( 'WPE_EXTERNAL_URL', false );

define( 'WP_POST_REVISIONS', FALSE );

define( 'WPE_WHITELABEL', 'wpengine' );

define( 'WP_TURN_OFF_ADMIN_BAR', false );

define( 'WPE_BETA_TESTER', false );

$wpe_cdn_uris=array ( );

$wpe_no_cdn_uris=array ( );

$wpe_content_regexs=array ( );

$wpe_all_domains=array ( 0 => 'nasiolcopynz.wpengine.com', );

$wpe_varnish_servers=array ( 0 => 'pod-159771', );

$wpe_special_ips=array ( 0 => '35.197.161.209', );

$wpe_netdna_domains=array ( );

$wpe_netdna_domains_secure=array ( );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( 'default' =>  array ( 0 => 'unix:///tmp/memcached.sock', ), );
define('WPLANG','');

# WP Engine ID


# WP Engine Settings






# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', __DIR__ . '/');
require_once(ABSPATH . 'wp-settings.php');
