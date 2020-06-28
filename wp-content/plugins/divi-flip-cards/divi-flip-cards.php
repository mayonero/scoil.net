<?php
/*
Plugin Name: Divi Flip Cards
Plugin URI: https://flipcards.b3multimedia.ie  
Description: The Ultimate Divi Plugin for Creating Beautiful and Interactive Content Boxes
Version: 1.1.2
Author: B3 Multimedia Solutions      
Author URI: https://www.b3multimedia.ie
*/

// API Intergation
if ( ! class_exists( 'B3DFC_License_Plugin' ) ) {
  require_once( dirname(__FILE__) . '/lib/dfc-license.php' );
}
// Load the API Key library if it is not already loaded. Must be placed in the root plugin file.
if (  class_exists( 'B3DFC_License_Plugin' ) ) {
  $flip_lib = new B3DFC_License_Plugin( __FILE__, '161774', '1.1.2', 'plugin', 'https://b3multimedia.ie/', 'Divi Flip Cards' );
}


if ( ! function_exists( 'difc_initialize_extension' ) ):
/**
 * Creates the extension's main class instance.
 *
 * @since 1.0.0
 */
function difc_initialize_extension() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/DiviFlipCards.php';
}
add_action( 'divi_extensions_init', 'difc_initialize_extension' );
endif;

function difc_admin_styles(){
	    wp_enqueue_style( 'difc-admin-style',plugin_dir_url( __FILE__) .'styles/style-admin.min.css', array(), 1.0);
}
add_action( 'admin_enqueue_scripts', 'difc_admin_styles' );

function difc_frontend_styles(){
	    wp_enqueue_script( 'difc-frontend-style',plugin_dir_url( __FILE__) .'scripts/tilt.jquery.min.js', array(), 1.0 , true);
}
add_action( 'wp_enqueue_scripts', 'difc_frontend_styles' );

function ClearLocalCacheButton() { ?>
	<a href="#" onclick="ClearLocalCache()" class="et-pb-layout-buttons et-pb-layout-buttons-cache" title="Clear Cache">
		<span>Clear Cache</span>
	</a>

    <script type="text/javascript">
        // Move Button to Divi Tabs
        jQuery(window).load(function(){
           jQuery(".et-pb-layout-buttons-cache").insertAfter(jQuery(".et-pb-layout-buttons-clear"));
        });
    	function ClearLocalCache() {
            // Clear Storage and Alert User
            alert("Local storage has been cleared. Update the page now.");
            window.localStorage.clear()
        }
    </script>
<?php }
add_action('admin_footer', 'ClearLocalCacheButton');

function divi_ext_et_fb_app_src( $tag, $handle, $src ) {
  if ( in_array( $handle, array( 'react', 'react-dom' ) ) ) {
    return str_replace( 'data-et-vb-app-src=', 'src=', $tag );
  }
  return $tag;
}
add_filter( 'script_loader_tag', 'divi_ext_et_fb_app_src', 99, 3 );
?>