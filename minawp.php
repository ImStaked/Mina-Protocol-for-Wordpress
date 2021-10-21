<?php

/**
 * Plugin Name: Mina Protocol for Wordpress
 * Plugin URI: https://github.com/ImStaked/Mina-Protocol-for-Wordpress
 * Description: Make my life easier.....
 * Version: 0.0.1
 * Author: ImStaked
 * Author URI: http://imstaked.com
 */

defined( 'ABSPATH' ) || die( 'MINA or DIE' );

// Include everything
include (dirname(__FILE__) . '/mina-include-all.php');

# Doc: https://developer.wordpress.org/reference/functions/register_activation_hook/
function minawp_activate() {

    add_option( 'Activated_Plugin', 'minawp' );
  
    /* activation code here */
  }
  register_activation_hook( __FILE__, 'minawp_activate' );
  
  function load_plugin() {
  
      if ( is_admin() && get_option( 'Activated_Plugin' ) == 'Plugin-Slug' ) {
  
          delete_option( 'Activated_Plugin' );
  
          /* do stuff once right after activation */
          // example: add_action( 'init', 'my_init_function' );
      }
  }
  
add_action( 'admin_init', 'load_plugin' );



// Is there more??????

?>
