<?php 
/*
Plugin Name: Galeria de imagenes
Descripcion: Añadir una Galeria imagenes
Version: 1.0.0
Author: Debora Guzman
Text Domain
*/
// Register Custom Post Type




 
define( 'GALERIA_VERSION', '0.0.1' );
define( 'GALERIA_WP_VERSION', '4.5.3' );
define( 'GALERIA_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
 
if ( is_admin() || ( defined( 'WP_CLI' ) && WP_CLI ) ) {
    require_once( GALERIA_PLUGIN_DIR . 'galeria.php' );
    add_action( 'init', 'galeria_iglesia' );
}