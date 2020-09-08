<?php 
the_post_thumbnail();
the_post_thumbnail('thumbnail');       // Thumbnail (por defecto 150px x 150px max)
the_post_thumbnail('medium');          // Media resolución (por defecto 300px x 300px max)
the_post_thumbnail('large');           // Alta resolución (por defecto 640px x 640px max)
the_post_thumbnail('full');            // Resolución original de la imagen (sin modificar)

add_theme_support( 'post-thumbnails' );
the_post_thumbnail( array(100,100) ); 


/*******truncar cantidad de palabras******/
function excerpt($limit) {
	$excerpt = explode(' ', get_the_excerpt(), $limit);
	if (count($excerpt)>=$limit) {
		array_pop($excerpt);
		$excerpt = implode(" ",$excerpt).'...';
	} else {
		$excerpt = implode(" ",$excerpt);
	}
	$excerpt = preg_replace('`[[^]]*]`','',$excerpt);
	return $excerpt;
}
/*******truncar cantidad de palabras******/




// Register Custom Banner Home
function Banner() {

	$labels = array(
		'name'                  => _x( 'Banner ', 'Post Type General Name', 'nivel' ),
		'singular_name'         => _x( 'Banner', 'Post Type Singular Name', 'nivel' ),
		'menu_name'             => __( 'Banner', 'nivel' ),
		'name_admin_bar'        => __( 'Banner', 'nivel' ),
		'archives'              => __( 'Archivo', 'nivel' ),
		'attributes'            => __( 'Atributos', 'nivel' ),
		'parent_item_colon'     => __( 'Artículo principal', 'nivel' ),
		'all_items'             => __( 'Todos los artículos', 'nivel' ),
		'add_new_item'          => __( 'Agregar ítem nuevo', 'nivel' ),
		'add_new'               => __( 'Añadir nuevo', 'nivel' ),
		'new_item'              => __( 'Nuevo artículo', 'nivel' ),
		'edit_item'             => __( 'Editar elemento', 'nivel' ),
		'update_item'           => __( 'Actualizar artículo', 'nivel' ),
		'view_item'             => __( 'Ver ítem', 'nivel' ),
		'view_items'            => __( 'Ver artículos', 'nivel' ),
		'search_items'          => __( 'Buscar artículo', 'nivel' ),
		'not_found'             => __( 'Extraviado', 'nivel' ),
		'not_found_in_trash'    => __( 'No se encuentra en la basura', 'nivel' ),
		'featured_image'        => __( 'Foto principal', 'nivel' ),
		'set_featured_image'    => __( 'Establecer imagen destacada', 'nivel' ),
		'remove_featured_image' => __( 'Remove featured image', 'nivel' ),
		'use_featured_image'    => __( 'Usar como imagen destacada', 'nivel' ),
		'insert_into_item'      => __( 'Insertar en el elemento', 'nivel' ),
		'uploaded_to_this_item' => __( 'Subido a este artículo', 'nivel' ),
		'items_list'            => __( 'Lista de artículos', 'nivel' ),
		'items_list_navigation' => __( 'Lista de elementos de navegación', 'nivel' ),
		'filter_items_list'     => __( 'Lista de elementos de filtro', 'nivel' ),
	);
	$args = array(
		'label'                 => __( 'Banner Home', 'nivel' ),
		'description'           => __( 'Post Type Description', 'nivel' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail' ),
		'taxonomies'            => array(  ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-images-alt2',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'Banner', $args );

}
add_action( 'init', 'Banner', 0 );


// Register Custom Banner Home
function Contacto() {

	$labels = array(
		'name'                  => _x( 'Contacto', 'Post Type General Name', 'nivel' ),
		'singular_name'         => _x( 'Contacto', 'Post Type Singular Name', 'nivel' ),
		'menu_name'             => __( 'Contacto', 'nivel' ),
		'name_admin_bar'        => __( 'Contacto', 'nivel' ),
		'archives'              => __( 'Archivo', 'nivel' ),
		'attributes'            => __( 'Atributos', 'nivel' ),
		'parent_item_colon'     => __( 'Artículo principal', 'nivel' ),
		'all_items'             => __( 'Todos los artículos', 'nivel' ),
		'add_new_item'          => __( 'Agregar ítem nuevo', 'nivel' ),
		'add_new'               => __( 'Añadir nuevo', 'nivel' ),
		'new_item'              => __( 'Nuevo artículo', 'nivel' ),
		'edit_item'             => __( 'Editar elemento', 'nivel' ),
		'update_item'           => __( 'Actualizar artículo', 'nivel' ),
		'view_item'             => __( 'Ver ítem', 'nivel' ),
		'view_items'            => __( 'Ver artículos', 'nivel' ),
		'search_items'          => __( 'Buscar artículo', 'nivel' ),
		'not_found'             => __( 'Extraviado', 'nivel' ),
		'not_found_in_trash'    => __( 'No se encuentra en la basura', 'nivel' ),
		'featured_image'        => __( 'Foto principal', 'nivel' ),
		'set_featured_image'    => __( 'Establecer imagen destacada', 'nivel' ),
		'remove_featured_image' => __( 'Remove featured image', 'nivel' ),
		'use_featured_image'    => __( 'Usar como imagen destacada', 'nivel' ),
		'insert_into_item'      => __( 'Insertar en el elemento', 'nivel' ),
		'uploaded_to_this_item' => __( 'Subido a este artículo', 'nivel' ),
		'items_list'            => __( 'Lista de artículos', 'nivel' ),
		'items_list_navigation' => __( 'Lista de elementos de navegación', 'nivel' ),
		'filter_items_list'     => __( 'Lista de elementos de filtro', 'nivel' ),
	);
	$args = array(
		'label'                 => __( 'Contacto', 'nivel' ),
		'description'           => __( 'Post Type Description', 'nivel' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail', 'editor' ),
		'taxonomies'            => array(  ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-list-view',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'Contacto', $args );

}
add_action( 'init', 'Contacto', 0 );




// Register Custom Banner Home
function Nosotros() {

	$labels = array(
		'name'                  => _x( 'Nosotros', 'Post Type General Name', 'nivel' ),
		'singular_name'         => _x( 'Nosotros', 'Post Type Singular Name', 'nivel' ),
		'menu_name'             => __( 'Nosotros', 'nivel' ),
		'name_admin_bar'        => __( 'Nosotros', 'nivel' ),
		'archives'              => __( 'Archivo', 'nivel' ),
		'attributes'            => __( 'Atributos', 'nivel' ),
		'parent_item_colon'     => __( 'Artículo principal', 'nivel' ),
		'all_items'             => __( 'Todos los artículos', 'nivel' ),
		'add_new_item'          => __( 'Agregar ítem nuevo', 'nivel' ),
		'add_new'               => __( 'Añadir nuevo', 'nivel' ),
		'new_item'              => __( 'Nuevo artículo', 'nivel' ),
		'edit_item'             => __( 'Editar elemento', 'nivel' ),
		'update_item'           => __( 'Actualizar artículo', 'nivel' ),
		'view_item'             => __( 'Ver ítem', 'nivel' ),
		'view_items'            => __( 'Ver artículos', 'nivel' ),
		'search_items'          => __( 'Buscar artículo', 'nivel' ),
		'not_found'             => __( 'Extraviado', 'nivel' ),
		'not_found_in_trash'    => __( 'No se encuentra en la basura', 'nivel' ),
		'featured_image'        => __( 'Foto principal', 'nivel' ),
		'set_featured_image'    => __( 'Establecer imagen destacada', 'nivel' ),
		'remove_featured_image' => __( 'Remove featured image', 'nivel' ),
		'use_featured_image'    => __( 'Usar como imagen destacada', 'nivel' ),
		'insert_into_item'      => __( 'Insertar en el elemento', 'nivel' ),
		'uploaded_to_this_item' => __( 'Subido a este artículo', 'nivel' ),
		'items_list'            => __( 'Lista de artículos', 'nivel' ),
		'items_list_navigation' => __( 'Lista de elementos de navegación', 'nivel' ),
		'filter_items_list'     => __( 'Lista de elementos de filtro', 'nivel' ),
	);
	$args = array(
		'label'                 => __( 'Nosotros', 'nivel' ),
		'description'           => __( 'Post Type Description', 'nivel' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail', 'editor' ),
		'taxonomies'            => array(  ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-list-view',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'Nosotros', $args );

}
add_action( 'init', 'Nosotros', 0 );



function my_theme_setup() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'my_theme_setup' );

add_action( 'after_setup_theme', 'yourtheme_setup' );

function yourtheme_setup() {


add_theme_support( 'wc-product-gallery-slider' );
} 
