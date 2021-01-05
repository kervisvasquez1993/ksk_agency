<?php
// Registrar Custom Post Type
function ksk_agency_post_type() {

	$labels = array(
		'name'                  => _x( 'Portafolio', 'Post Type General Name', 'ksk_agency' ),
		'singular_name'         => _x( 'Proyecto', 'Post Type Singular Name', 'ksk_agency' ),
		'menu_name'             => __( 'Portafolio', 'ksk_agency' ),
		'name_admin_bar'        => __( 'Proyecto', 'ksk_agency' ),
		'archives'              => __( 'Archivo', 'ksk_agency' ),
		'attributes'            => __( 'Atributos', 'ksk_agency' ),
		'parent_item_colon'     => __( 'Proyecto Padre', 'ksk_agency' ),
		'all_items'             => __( 'Todos los Proyectos', 'ksk_agency' ),
		'add_new_item'          => __( 'Agregar Proyecto', 'ksk_agency' ),
		'add_new'               => __( 'Agregar Proyecto', 'ksk_agency' ),
		'new_item'              => __( 'Nueva Proyecto', 'ksk_agency' ),
		'edit_item'             => __( 'Editar Proyecto', 'ksk_agency' ),
		'update_item'           => __( 'Actualizar Proyecto', 'ksk_agency' ),
		'view_item'             => __( 'Ver Proyecto', 'ksk_agency' ),
		'view_items'            => __( 'Ver Portafolio', 'ksk_agency' ),
		'search_items'          => __( 'Buscar Proyecto', 'ksk_agency' ),
		'not_found'             => __( 'No Encontrado', 'ksk_agency' ),
		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'ksk_agency' ),
		'featured_image'        => __( 'Imagen Destacada', 'ksk_agency' ),
		'set_featured_image'    => __( 'Guardar Imagen destacada', 'ksk_agency' ),
		'remove_featured_image' => __( 'Eliminar Imagen destacada', 'ksk_agency' ),
		'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'ksk_agency' ),
		'insert_into_item'      => __( 'Insertar en Proyecto', 'ksk_agency' ),
		'uploaded_to_this_item' => __( 'Agregado en Proyecto', 'ksk_agency' ),
		'items_list'            => __( 'Lista de Portafolio', 'ksk_agency' ),
		'items_list_navigation' => __( 'Navegación de Portafolio', 'ksk_agency' ),
		'filter_items_list'     => __( 'Filtrar Portafolio', 'ksk_agency' ),
	);
	$args = array(
		'label'                 => __( 'Proyecto', 'ksk_agency' ),
		'description'           => __( 'Portafolio para el Sitio Web', 'ksk_agency' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', 'custom-fields', 'page-attributes' , 'genesis-cpt-archives-settings', 'genesis-seo', 'genesis-scripts', 'genesis-layouts', 'genesis-rel-author' ),
		'rewrite'            => array( 'slug' => 'proyecto' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 6,
        'menu_icon'             => 'dashicons-welcome-learn-more',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'taxonomies'  => array( 'category', 'tag' ),
	);
	register_post_type( 'ksk_agency', $args );

}
add_action( 'init', 'ksk_agency_post_type', 0 );