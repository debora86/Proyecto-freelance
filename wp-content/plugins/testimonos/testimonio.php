<?php // testimoniales
/*
Plugin Name: testimonios
Descripcion: Añade Post y  Types al sitio
Version: 1.0.0
Author: Debora Guzman
Text Domain:Debora
*/
function gymfitness_testimoniales() {

	$labels = array(
		'name'                  => _x( 'Testimoniales', 'Post Type General Name', 'gymfitness' ),
		'singular_name'         => _x( 'Testimonial', 'Post Type Singular Name', 'gymfitness' ),
		'menu_name'             => __( 'Testimoniales', 'gymfitness' ),
		'name_admin_bar'        => __( 'Testimonial', 'gymfitness' ),
		'archives'              => __( 'Archivo', 'gymfitness' ),
		'attributes'            => __( 'Atributos', 'gymfitness' ),
		'parent_item_colon'     => __( 'Testimonial Padre', 'gymfitness' ),
		'all_items'             => __( 'Todas Las Testimoniales', 'gymfitness' ),
		'add_new_item'          => __( 'Agregar Testimonial', 'gymfitness' ),
		'add_new'               => __( 'Agregar Testimonial', 'gymfitness' ),
		'new_item'              => __( 'Nueva Testimonial', 'gymfitness' ),
		'edit_item'             => __( 'Editar Testimonial', 'gymfitness' ),
		'update_item'           => __( 'Actualizar Testimonial', 'gymfitness' ),
		'view_item'             => __( 'Ver Testimonial', 'gymfitness' ),
		'view_items'            => __( 'Ver Testimoniales', 'gymfitness' ),
		'search_items'          => __( 'Buscar Testimonial', 'gymfitness' ),
		'not_found'             => __( 'No Encontrado', 'gymfitness' ),
		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'gymfitness' ),
		'featured_image'        => __( 'Imagen Destacada', 'gymfitness' ),
		'set_featured_image'    => __( 'Guardar Imagen destacada', 'gymfitness' ),
		'remove_featured_image' => __( 'Eliminar Imagen destacada', 'gymfitness' ),
		'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'gymfitness' ),
		'insert_into_item'      => __( 'Insertar en Testimonial', 'gymfitness' ),
		'uploaded_to_this_item' => __( 'Agregado en Testimonial', 'gymfitness' ),
		'items_list'            => __( 'Lista de Testimoniales', 'gymfitness' ),
		'items_list_navigation' => __( 'Navegación de Testimoniales', 'gymfitness' ),
		'filter_items_list'     => __( 'Filtrar Testimoniales', 'gymfitness' ),
	);
	$args = array(
		'label'                 => __( 'Testimoniales', 'gymfitness' ),
		'description'           => __( 'Testimoniales para el Sitio Web', 'gymfitness' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 8,
        'menu_icon'             => 'dashicons-editor-quote',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'testimoniales', $args );

}
add_action( 'init', 'gymfitness_testimoniales', 0 );