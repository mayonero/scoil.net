<?php
/*
   Plugin Name: Divi Icons
   Plugin URI: http://diviicons.b3multimedia.ie/
   Description: Divi Icons Free version adds 360 custom line icons to the Divi Builder.
   Version: 1.2
   Author: b3multimedia
   Author URI: http://b3multimedia.ie/
   License: GPL2
   Text Domain: b3diviicon
*/
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
define( 'B3F_PLUGIN_URL', plugin_dir_url( __FILE__) );
define( 'B3F_PLUGIN_PATH',plugin_dir_path( __FILE__ ) );
define( 'B3F_PLUGIN_BASENAME',plugin_basename( __FILE__ ) );
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
add_action( 'plugins_loaded','b3free_plugin_load' );
add_action( 'init', 'b3free_icon_load' );
add_filter( 'body_class', 'b3free_fb_body_class' );
add_filter( 'admin_body_class', 'b3free_bfb_body_class' );
function b3free_fb_body_class( $classes )
{
	$classes[] = ' b3-icon-pro ';
	return $classes;
}
function b3free_bfb_body_class( $classes )
{
	$classes .= ' b3-icon-pro ';
	if ( is_plugin_active('divi-holiday-icons/divi-holiday-icons.php')){ 
		$classes .= ' b3-icon-holiday ';
	}
	return $classes;
}
if ( !is_plugin_active('divi-icons-pro/divi-icons-pro.php')){ 
	add_filter('all_icons', 'b3free_lists');
}
function b3diviicon_add_plugin_row_meta($links, $file) {
    if ($file === plugin_basename(__FILE__)) {
        $links['support'] = sprintf('<a href="%s" target="_blank"> %s </a>', 'https://diviicons.b3multimedia.ie/', __('Go Pro', 'b3diviicon'));
    }
    return $links;
}

add_filter('plugin_row_meta', 'b3diviicon_add_plugin_row_meta', 10, 2);
function b3free_plugin_load()
{
	if ( !is_plugin_active('divi-icons-pro/divi-icons-pro.php')){ 
		add_action('admin_enqueue_scripts', 'b3free_admin_enqueue', 9999);
		add_action("epanel_render_maintabs", 'b3free_epanel_tab');
		add_action("et_epanel_changing_options", 'b3free_epanel_fields');
		add_action( 'wp_enqueue_scripts', 'b3free_enqueue_script' );
	}
}
function b3free_admin_enqueue() {
	wp_enqueue_style('b3icon_admin_free', B3F_PLUGIN_URL .'assets/css/b3icon_admin_free.css', array(), NULL);
	$divi_b3icon_line = et_get_option('divi_b3icon_line','on');
	if ( $divi_b3icon_line == 'on' && $divi_b3icon_line != '' ){ 
		wp_enqueue_style('b3line_font_free', B3F_PLUGIN_URL .'assets/css/b3line_font_free.css', array(), NULL);
		wp_enqueue_style('b3_ie7_free', B3F_PLUGIN_URL .'assets/css/b3_ie7_free.css', array(), NULL);	
		wp_enqueue_script( 'b3_ie7-js_free', B3F_PLUGIN_URL .'assets/js/b3-ie7_free.js', array(), '1.0.0' ,true );	
	}
	wp_enqueue_script( 'b3icons_admin-free-js', B3F_PLUGIN_URL .'assets/js/b3icons_admin_free.js', array(), '1.0.0' ,true );	

}
function b3free_enqueue_script() {
	$divi_b3icon_line = et_get_option('divi_b3icon_line','on');
	if ( $divi_b3icon_line == 'on' && $divi_b3icon_line != '' ){ 
		wp_enqueue_style('b3line_font', B3F_PLUGIN_URL .'assets/css/b3line_font_free.css', array(), NULL);
		wp_enqueue_style('b3_ie7', B3F_PLUGIN_URL .'assets/css/b3_ie7_free.css', array(), NULL);	
		wp_enqueue_script( 'b3_ie7-js', B3F_PLUGIN_URL .'assets/js/b3-ie7_free.js', array(), '1.0.0' ,true );	
	}
	wp_enqueue_style('b3_frontend_font', B3F_PLUGIN_URL .'assets/css/b3_frontend_free.css', array(), NULL);
	$divi_b3icon_line = et_get_option('divi_b3icon_line','on');
	wp_enqueue_script( 'b3iconsfree-js', B3F_PLUGIN_URL .'assets/js/b3icons_free.js', array(), '1.0.0' ,true );
}
function b3free_epanel_tab(){
  b3free_epanel_fields();?><li><a href="#wrap-b3iconsfree"><?php _e( 'Divi Icons','b3diviicon'); ?></a></li><?php
}
function b3free_epanel_fields(){
  global $epanelMainTabs, $themename, $shortname, $options;
  $options[] = array( "name" => "wrap-b3iconsfree","type" => "contenttab-wrapstart",);
  $options[] = array( "type" => "subnavtab-start",);
   $options[] = array(
    "name" => "b3iconsfree-1",
    "type" => "subnav-tab",
    "desc" => esc_html__("General", $themename)
  );
  $options[] = array("type" => "subnavtab-end",);
  $options[] = array("name" => "b3iconsfree-1","type" => "subcontent-start",);
  $options[] = array(
	'name' => esc_html__('', $themename),
	'desc' => '',
	"type" => "callback_function",
	"function_name" => 'b3icons_notice',
   );
   
   if ( is_plugin_active('divi-holiday-icons/divi-holiday-icons.php')){ 
   $options[] = array(
		'name' 	=> esc_html__('Holiday Icons', $themename),
		'id' 	=> $shortname . '_b3holidayicon_line',
		'type' 	=> 'checkbox2',
        'std' 	=> 'on',
		'desc' 	=> esc_html__('360 brand new and pixel perfect custom holiday icons for your Divi website.', $themename),
  );
  }
  $options[] = array(
		'name' 	=> esc_html__('360 Custom Line Style Icons', $themename),
		'id' 	=> $shortname . '_b3icon_line',
		'type' 	=> 'checkbox2',
        'std' 	=> 'on',
		'desc' 	=> esc_html__('360 brand new and pixel perfect custom line icons for your Divi website.', $themename),
  );
  $options[] = array(
	'name' => esc_html__('Font Awesome Icons', $themename),
	'desc' => 'FontAwesome Icons are not available in a free version of Divi Icons plugin. <a href="https://diviicons.b3multimedia.ie/" target="_blank">Upgrade your license</a> to add over 2400 Icons to the Divi Builder Now!',
	"type" => "callback_function",
	"function_name" => 'b3icons_image',
   );
   
   $options[] = array(
	'name' => esc_html__('Google Material Icons', $themename),
	'desc' => 'Google Material Icons are not available in a free version of Divi Icons plugin. <a href="https://diviicons.b3multimedia.ie/" target="_blank">Upgrade your license</a> to add over 2400 Icons to the Divi Builder Now!',
	"type" => "callback_function",
	"function_name" => 'b3icons_image',
   );
   
  $options[] = array("name" => "b3iconsfree-1","type" => "subcontent-end",);
  $options[] = array("name" => "wrap-b3icons","type" => "contenttab-wrapend",);
}
function b3icons_image(){
	echo '<div tooltip="Not available in a free version. Upgrade your license to add over 2400 icons to your Divi Builder!" flow="right" href="https://diviicons.b3multimeida.ie"><img class="not_available" src="'.B3F_PLUGIN_URL .'assets/img/onoff.png" alt="Not available in a free version"/></div>';
}
function b3icons_notice(){
echo '<div class="info"><i class="et-pb-icon">&#xe061;</i>You are using a free version of Divi Icons plugin. To enable all icons and functionality please <a href="https://diviicons.b3multimedia.ie/" target="_blank">upgarde your license.</a></div>';
}
function b3free_icon_load() {
   if ( !is_plugin_active('divi-icons-pro/divi-icons-pro.php')){ 
		require B3F_PLUGIN_PATH.'/lib/et-icon-list-free.php';
		add_filter('et_pb_font_icon_symbols', 'b3_et_icons_list_free',900 );
		// B3 Custom Line
		$divi_b3icon_line = et_get_option('divi_b3icon_line','on');
		if ( $divi_b3icon_line == 'on' && $divi_b3icon_line != '' ){
			add_filter('et_pb_font_icon_symbols', 'b3_line_icons_list_free',998 );
			require B3F_PLUGIN_PATH.'/lib/b3line-icon-list-free.php';
		}
		if ( is_plugin_active('divi-holiday-icons/divi-holiday-icons.php')){ 
			// B3 Custom Holiday
			$divi_b3holidayicon_line = et_get_option('divi_b3holidayicon_line','on');
			if ( $divi_b3holidayicon_line == 'on' && $divi_b3holidayicon_line != '' ){
					add_filter('et_pb_font_icon_symbols', 'b3free_holiday_icons_list_free',998 );
					require B3F_PLUGIN_PATH.'/lib/b3holiday-icon-list-free.php';
			}
		}
	}
}
function b3free_lists( $font_icon )
{
	 if ( !is_plugin_active('divi-icons-pro/divi-icons-pro.php')){ 

		if( b3_check_isjson_free( $font_icon ) ) :
			$icon = json_decode( $font_icon, true );
			$symbol_data = explode( '|', $icon );
			$icon = $symbol_data[0] . '-' . $symbol_data[2];
		else :
			$icon = $font_icon;	
		endif;
		return $icon;
	}
}
function b3_check_isjson_free( $string )
{
   return  is_array( json_decode( $string, true ) ) && is_string( $string ) && ( json_last_error() == JSON_ERROR_NONE ) ? true : false;
}
if ( ! function_exists( 'et_pb_process_font_icon' ) ) :
function et_pb_process_font_icon( $font_icon, $symbols_function = 'default' )
{
	if ( 1 !== preg_match( "/^%%/", trim( $font_icon ) ) ) {
		return $font_icon;
	}
	$icon_index   = (int) str_replace( '%', '', $font_icon );
	$icon_symbols = 'default' === $symbols_function ? et_pb_get_font_icon_symbols() : call_user_func( $symbols_function );
	$font_icon    = isset( $icon_symbols[ $icon_index ] ) ? $icon_symbols[ $icon_index ] : '';
	
	$font_icon = apply_filters( 'all_icons', $font_icon );
	return $font_icon;
}
endif;
if ( ! function_exists( 'et_pb_get_font_icon_list_items' ) ) :
function et_pb_get_font_icon_list_items() {
	$output = '';
	$symbols = et_pb_get_font_icon_symbols();
	foreach ( $symbols as $symbol ) {
		if (strpos($symbol, 'icon_quotations_alt2') !== false) {
			$symbol_data = explode( '~|', $symbol );
		}else{
			$symbol_data = explode( '|', $symbol );
		}
		if( is_customize_preview() ) :
				if( $symbol_data[0] === 'et') :
					$output .= sprintf( '<li data-icon=\'%1$s\'></li>', esc_attr( $symbol_data[2] ) );	
				endif;
		else :
			 	 $output .= sprintf( '<li data-icon=\'%1$s\' data-iconname=\'%2$s\'  data-iconfamily=\'%3$s\' title=\'%2$s\'  class="b3-custom-icon-%3$s b3customicon"></li>', $symbol_data[2], $symbol_data[1], $symbol_data[0]);
		endif;
	}
	return $output;
}
endif;