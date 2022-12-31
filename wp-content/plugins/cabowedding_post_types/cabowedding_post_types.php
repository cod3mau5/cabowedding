<?php
/*
*   Plugin Name: Cabo Wedding - Post Types
*   Plugin URI:
*   Description: Añade Post Types al sitio Cabo Wedding
*   Version: 1.0.0
*   Author: codemau5
*   Author URI: https://codemau5.com
*   Text Domain: cabowedding
*/

if(!defined('ABSPATH')) die();
// Register Custom Post Type
function cabowedding_testimoniales() {

	$labels = [
		'name'                  => _x( 'Testimoniales', 'Post Type General Name', 'cabowedding' ),
		'singular_name'         => _x( 'Testimonial', 'Post Type Singular Name', 'cabowedding' ),
		'menu_name'             => __( 'Testimoniales', 'cabowedding' ),
		'name_admin_bar'        => __( 'Testimonial', 'cabowedding' ),
		'archives'              => __( 'Archivo', 'cabowedding' ),
		'attributes'            => __( 'Atributos', 'cabowedding' ),
		'parent_item_colon'     => __( 'Testimonial Padre', 'cabowedding' ),
		'all_items'             => __( 'Todos Los Testimoniales', 'cabowedding' ),
		'add_new_item'          => __( 'Agregar Testimonial', 'cabowedding' ),
		'add_new'               => __( 'Agregar Testimonial', 'cabowedding' ),
		'new_item'              => __( 'Nueva Testimonial', 'cabowedding' ),
		'edit_item'             => __( 'Editar Testimonial', 'cabowedding' ),
		'update_item'           => __( 'Actualizar Testimonial', 'cabowedding' ),
		'view_item'             => __( 'Ver Testimonial', 'cabowedding' ),
		'view_items'            => __( 'Ver Testimoniales', 'cabowedding' ),
		'search_items'          => __( 'Buscar Testimonial', 'cabowedding' ),
		'not_found'             => __( 'No Encontrado', 'cabowedding' ),
		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'cabowedding' ),
		'featured_image'        => __( 'Imagen Destacada', 'cabowedding' ),
		'set_featured_image'    => __( 'Guardar Imagen destacada', 'cabowedding' ),
		'remove_featured_image' => __( 'Eliminar Imagen destacada', 'cabowedding' ),
		'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'cabowedding' ),
		'insert_into_item'      => __( 'Insertar en Testimonial', 'cabowedding' ),
		'uploaded_to_this_item' => __( 'Agregado en Testimonial', 'cabowedding' ),
		'items_list'            => __( 'Lista de Testimoniales', 'cabowedding' ),
		'items_list_navigation' => __( 'Navegación de Testimoniales', 'cabowedding' ),
		'filter_items_list'     => __( 'Filtrar Testimoniales', 'cabowedding' ),
	];
	$args = [
		'label'                 => __( 'Testimoniales', 'cabowedding' ),
		'description'           => __( 'Testimoniales para el Sitio Web', 'cabowedding' ),
		'labels'                => $labels,
		'supports'              => [ 'title', 'editor', 'thumbnail' ],
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
		];
	register_post_type( 'testimoniales', $args );

}
add_action( 'init', 'cabowedding_testimoniales', 0 );

?>