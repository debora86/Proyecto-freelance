<?php 
/*
Plugin Name: Slider
Descripcion: Añadir imagenes para un slider
Version: 1.0.0
Author: Debora Guzman
Text Domain
*/
// Register Custom Post Type




 
define( 'BOOTSTRAP_SLIDER_VERSION', '0.0.1' );
define( 'BOOTSTRAP_SLIDER_MINIMUM_WP_VERSION', '4.5.3' );
define( 'BOOTSTRAP_SLIDER_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
 
if ( is_admin() || ( defined( 'WP_CLI' ) && WP_CLI ) ) {
    require_once( BOOTSTRAP_SLIDER_PLUGIN_DIR . 'bootstrap-slider.php' );
    add_action( 'init', 'slider_bootstrap' );
}
