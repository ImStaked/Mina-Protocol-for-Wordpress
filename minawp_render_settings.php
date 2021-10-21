<?php

/**
 * 
 * Mina for Wordpress
 * 
 */


defined( 'ABSPATH' ) || die( 'MINA or DIE' );

// Include everything
include (dirname(__FILE__) . '/mina-include-all.php');

/**
 * 
 * Plugin Settings use Wordpress Settings API
 * More Details :-->  https://developer.wordpress.org/plugins/settings/settings-api/
 * 
 */

add_action( 'admin_init', 'mina_admin_init' );
function mina_admin_init() 
{
    add_settings_section( 'general_settings', '', 'mina_render_general_settings_section', 'mina_settings' );
    add_settings_section( 'mina_api_settings', '', 'mina_render_api_settings_section', 'mina_api_settings' );
    register_setting( 'general_settings', 'delete_db_tables_on_uninstall', 'sanitize_text_field');
    register_setting( 'general_settings', 'block_producer', 'sanitize_text_field');
    register_setting( 'general_settings', 'fee', 'sanitize_text_field');
    register_setting( 'mina_api_settings', ',mina_api_url', 'mina_api_url_validate');
	
}









































































































































// Render the admin page
function mina_render_options_page() {
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
###########??????????????????############# Testing 
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
}
