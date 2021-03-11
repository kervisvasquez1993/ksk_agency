<?php
// Register Custom Post Type
function ksk_agency_perfil() {

	$labels = array(
		'name'                  => _x( 'perfil', 'Post Type General Name', 'ksk_agency' ),
		'singular_name'         => _x( 'Perfil', 'Post Type Singular Name', 'ksk_agency' ),
		'menu_name'             => __( 'perfil', 'ksk_agency' ),
		'name_admin_bar'        => __( 'Perfil', 'ksk_agency' ),
		'archives'              => __( 'Archivo', 'ksk_agency' ),
		'attributes'            => __( 'Atributos', 'ksk_agency' ),
		'parent_item_colon'     => __( 'Perfil Padre', 'ksk_agency' ),
		'all_items'             => __( 'Todas Las perfil', 'ksk_agency' ),
		'add_new_item'          => __( 'Agregar Perfil', 'ksk_agency' ),
		'add_new'               => __( 'Agregar Perfil', 'ksk_agency' ),
		'new_item'              => __( 'Nueva Perfil', 'ksk_agency' ),
		'edit_item'             => __( 'Editar Perfil', 'ksk_agency' ),
		'update_item'           => __( 'Actualizar Perfil', 'ksk_agency' ),
		'view_item'             => __( 'Ver Perfil', 'ksk_agency' ),
		'view_items'            => __( 'Ver perfil', 'ksk_agency' ),
		'search_items'          => __( 'Buscar Perfil', 'ksk_agency' ),
		'not_found'             => __( 'No Encontrado', 'ksk_agency' ),
		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'ksk_agency' ),
		'featured_image'        => __( 'Imagen Destacada', 'ksk_agency' ),
		'set_featured_image'    => __( 'Guardar Imagen destacada', 'ksk_agency' ),
		'remove_featured_image' => __( 'Eliminar Imagen destacada', 'ksk_agency' ),
		'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'ksk_agency' ),
		'insert_into_item'      => __( 'Insertar en Perfil', 'ksk_agency' ),
		'uploaded_to_this_item' => __( 'Agregado en Perfil', 'ksk_agency' ),
		'items_list'            => __( 'Lista de perfil', 'ksk_agency' ),
		'items_list_navigation' => __( 'Navegación de perfil', 'ksk_agency' ),
		'filter_items_list'     => __( 'Filtrar perfil', 'ksk_agency' ),
	);
	$args = array(
		'label'                 => __( 'perfil', 'ksk_agency' ),
		'description'           => __( 'perfil para el Sitio Web', 'ksk_agency' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 7,
        'menu_icon'             => 'dashicons-admin-users',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'perfil', $args );

}
add_action( 'init', 'ksk_agency_perfil', 0 );

function ksk_agency_testimoniales() {

	$labels = array(
		'name'                  => _x( 'Testimoniales', 'Post Type General Name', 'ksk_agency' ),
		'singular_name'         => _x( 'Testimonial', 'Post Type Singular Name', 'ksk_agency' ),
		'menu_name'             => __( 'Testimoniales', 'ksk_agency' ),
		'name_admin_bar'        => __( 'Testimonial', 'ksk_agency' ),
		'archives'              => __( 'Archivo', 'ksk_agency' ),
		'attributes'            => __( 'Atributos', 'ksk_agency' ),
		'parent_item_colon'     => __( 'Testimonial Padre', 'ksk_agency' ),
		'all_items'             => __( 'Todas Las Testimoniales', 'ksk_agency' ),
		'add_new_item'          => __( 'Agregar Testimonial', 'ksk_agency' ),
		'add_new'               => __( 'Agregar Testimonial', 'ksk_agency' ),
		'new_item'              => __( 'Nueva Testimonial', 'ksk_agency' ),
		'edit_item'             => __( 'Editar Testimonial', 'ksk_agency' ),
		'update_item'           => __( 'Actualizar Testimonial', 'ksk_agency' ),
		'view_item'             => __( 'Ver Testimonial', 'ksk_agency' ),
		'view_items'            => __( 'Ver Testimoniales', 'ksk_agency' ),
		'search_items'          => __( 'Buscar Testimonial', 'ksk_agency' ),
		'not_found'             => __( 'No Encontrado', 'ksk_agency' ),
		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'ksk_agency' ),
		'featured_image'        => __( 'Imagen Destacada', 'ksk_agency' ),
		'set_featured_image'    => __( 'Guardar Imagen destacada', 'ksk_agency' ),
		'remove_featured_image' => __( 'Eliminar Imagen destacada', 'ksk_agency' ),
		'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'ksk_agency' ),
		'insert_into_item'      => __( 'Insertar en Testimonial', 'ksk_agency' ),
		'uploaded_to_this_item' => __( 'Agregado en Testimonial', 'ksk_agency' ),
		'items_list'            => __( 'Lista de Testimoniales', 'ksk_agency' ),
		'items_list_navigation' => __( 'Navegación de Testimoniales', 'ksk_agency' ),
		'filter_items_list'     => __( 'Filtrar Testimoniales', 'ksk_agency' ),
	);
	$args = array(
		'label'                 => __( 'Testimoniales', 'ksk_agency' ),
		'description'           => __( 'Testimoniales para el Sitio Web', 'ksk_agency' ),
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
add_action( 'init', 'ksk_agency_testimoniales', 0 );

?>