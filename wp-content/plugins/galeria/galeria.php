<?php 
// Register Custom Post Type
function galeria_iglesia() {

	$labels = array(
		'name'                  => _x( 'galeria', 'Post Type General Name', 'galeria_iglesia' ),
		'singular_name'         => _x( 'galeria', 'Post Type Singular Name', 'galeria_iglesia' ),
		'menu_name'             => __( 'Galeria', 'galeria_iglesia' ),
		'name_admin_bar'        => __( 'galeria', 'galeria_iglesia' ),
		'archives'              => __( 'Imagen Archives', 'galeria_iglesia' ),
		'attributes'            => __( 'Elemento Attributes', 'galeria_iglesia' ),
		'parent_item_colon'     => __( 'Parent Item:', 'galeria_iglesia' ),
		'all_items'             => __( 'todas las Galerias', 'galeria_iglesia' ),
		'add_new_item'          => __( 'agregar Imagen', 'galeria_iglesia' ),
		'add_new'               => __( 'añade nueva', 'galeria_iglesia' ),
		'new_item'              => __( 'Nueva Imagen', 'galeria_iglesia' ),
		'edit_item'             => __( 'editar Imagen', 'galeria_iglesia' ),
		'update_item'           => __( 'actualizar Imagen', 'galeria_iglesia' ),
		'view_item'             => __( 'Ver Imagen', 'galeria_iglesia' ),
		'view_items'            => __( 'Ver Imagen', 'galeria_iglesia' ),
		'search_items'          => __( 'Buscar Imagen', 'galeria_iglesia' ),
		'not_found'             => __( 'Not found', 'galeria_iglesia' ),
		'not_found_in_trash'    => __( 'No encontrado en papelera', 'galeria_iglesia' ),
		'featured_image'        => __( 'Imagen principal', 'galeria_iglesia' ),
		'set_featured_image'    => __( 'no destacadas', 'galeria_iglesia' ),
		'remove_featured_image' => __( 'destacada no', 'galeria_iglesia' ),
		'use_featured_image'    => __( 'no destacada', 'galeria_iglesia' ),
		'insert_into_item'      => __( 'Insert into item', 'galeria_iglesia' ),
		'uploaded_to_this_item' => __( 'cargar imagenes', 'galeria_iglesia' ),
		'items_list'            => __( 'Items list', 'galeria_iglesia' ),
		'items_list_navigation' => __( 'Items list navigation', 'galeria_iglesia' ),
		'filter_items_list'     => __( 'Filtrar elementos de las listas', 'galeria_iglesia' ),
	);
	$args = array(
		'label'                 => __( 'galeria', 'galeria_iglesia' ),
		'description'           => __( 'galeria para todas', 'galeria_iglesia' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'custom-fields' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 61,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'galeria_iglesia', $args );

}
add_action( 'init', 'galeria_iglesia', 0 );