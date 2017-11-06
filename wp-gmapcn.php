<?php
/*
Plugin Name: Google Map CN
Plugin URI:  http://github.com/tr4nch/wp-gmapcn
Description: Google Map China version for WordPress
Version:     1.0
Author:      Tranch
Author URI:  http://tranch.me
License:     GPLv2
License URI: License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

function gmapcn_shortcode( $atts, $content = null ) {
	$a = shortcode_atts( array(
		'api_key' => '',
		'lat'     => 0,
		'lng'     => 0,

		'container' => 'body',
		'title'     => null,
		'zoom'      => 4
	), $atts );

	$iw_content = wp_slash( str_replace( array( "\r\n", "\r", "\n" ), ' ', trim( $content ) ) );
	$api_key    = get_option( 'gmapcn_api_key' );
	
	require_once __DIR__ . '/page_script.php';
	
	return ob_get_clean();
}

function gmapcn_create_menu() {
	add_menu_page( 'Google Map (CN) Options', 'Google Map (CN)', 'administrator', __FILE__, 'gmapcn_settings_page' );
	add_action( 'admin_init', 'gmapcn_register_settings' );
}

function gmapcn_register_settings() {
	register_setting( 'gmapcn_settings-group', 'gmapcn_api_key' );
}

function gmapcn_settings_page() {
	return include_once __DIR__ . '/settings.php';
}

function gmapcn_add_settings_link( $links ) {
	$filename      = implode( '/', array_map( 'basename', array( __DIR__, __FILE__ ) ) );
	$settings_link = "<a href='options-general.php?page=$filename'>" . __( 'Settings' ) . '</a>';
	array_push( $links, $settings_link );

	return $links;
}

function gmapcn_activation() {
	register_uninstall_hook( __FILE__, 'gmapcn_uninstall' );
}

function gmapcn_uninstall() {
	delete_option( 'gmapcn_api_key' );
}

add_action( 'admin_menu', 'gmapcn_create_menu' );
add_shortcode( 'gmapcn', 'gmapcn_shortcode' );
add_filter( "plugin_action_links_" . plugin_basename( __FILE__ ), 'gmapcn_add_settings_link' );
register_activation_hook( __FILE__, 'gmapcn_activation' );
