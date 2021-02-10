<?php 


function slider_bootstrap() {

  $labels = array(
    'name'                  => _x( 'Sliders', 'Post Type General Name', 'slider' ),
    'singular_name'         => _x( 'Slider', 'Post Type Singular Name', 'slider' ),
    'menu_name'             => __( 'Sliders', 'slider' ),
    'name_admin_bar'        => __( 'Slider', 'slider' ),
    'archives'              => __( 'Archives', 'slider' ),
    'attributes'            => __( 'Attributes', 'slider' ),
    'parent_item_colon'     => __( 'Padre Slider:', 'slider' ),
    'all_items'             => __( 'All slider', 'slider' ),
    'add_new_item'          => __( 'Agregar Nuevo slider', 'slider' ),
    'add_new'               => __( 'Agregar slider', 'slider' ),
    'new_item'              => __( 'Nuevo slider', 'slider' ),
    'edit_item'             => __( 'Editar Slider', 'slider' ),
    'update_item'           => __( 'Actualizar Slider', 'slider' ),
    'view_item'             => __( 'Vista de Diapositiva', 'slider' ),
    'view_items'            => __( 'Vista de Sliders', 'slider' ),
    'search_items'          => __( 'Buscar Slider', 'slider' ),
    'not_found'             => __( 'Not found', 'slider' ),
    'not_found_in_trash'    => __( 'Not found in Trash', 'slider' ),
    'featured_image'        => __( 'Featured Image', 'slider' ),
    'set_featured_image'    => __( 'Set featured image', 'slider' ),
    'remove_featured_image' => __( 'Remove featured image', 'slider' ),
    'use_featured_image'    => __( 'Use as featured image', 'slider' ),
    'insert_into_item'      => __( 'Insertar un Slider', 'slider' ),
    'uploaded_to_this_item' => __( 'agregar este Slider', 'slider' ),
    'items_list'            => __( 'Items list', 'slider' ),
    'items_list_navigation' => __( 'Slider list navigation', 'slider' ),
    'filter_items_list'     => __( 'Filter Slider list', 'slider' ),
  );
  $args = array(
    'label'                 => __( 'slider', 'slider' ),
    'description'           => __( 'imagenes para cabezera de slider home', 'slider' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor','thumbnail','revisions','page-attributes' ),
    'hierarchical'          => true,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 60,
    'menu_icon'             => 'dashicons-video-alt3',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'page',
  );
  register_post_type( 'slider', $args );

}
add_action( 'init', 'slider_bootstrap', 0 );



