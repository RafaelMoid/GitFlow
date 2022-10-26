<?php

add_theme_support('post-thumbnails');

// Register Custom Post Type Projetos
function custom_post_type_projetos() {

	$labels = array(
		'name'                  => _x( 'Projetos', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Projeto', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Projetos', 'text_domain' ),
		'name_admin_bar'        => __( 'Projetos', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'Todos projetos', 'text_domain' ),
		'add_new_item'          => __( 'Adicionar novo projeto', 'text_domain' ),
		'add_new'               => __( 'Adicionar novo', 'text_domain' ),
		'new_item'              => __( 'Novo projeto', 'text_domain' ),
		'edit_item'             => __( 'Editar projeto', 'text_domain' ),
		'update_item'           => __( 'Atualizar projeto', 'text_domain' ),
		'view_item'             => __( 'Ver projeto', 'text_domain' ),
		'view_items'            => __( 'Ver projetos', 'text_domain' ),
		'search_items'          => __( 'Buscar projetos', 'text_domain' ),
		'not_found'             => __( 'Não encontrado', 'text_domain' ),
		'not_found_in_trash'    => __( 'Não encontrado na lixeira', 'text_domain' ),
		'featured_image'        => __( 'Imagem destaque', 'text_domain' ),
		'set_featured_image'    => __( 'Definir Imagem destaque', 'text_domain' ),
		'remove_featured_image' => __( 'Remover Imagem destaque', 'text_domain' ),
		'use_featured_image'    => __( 'Usar como Imagem destaque', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Projeto', 'text_domain' ),
		'description'           => __( 'Descrição do projeto', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => true,
        'supports'              => array('title', 'editor', 'thumbnail', 'excerpt'),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'projetos', $args );

}
add_action( 'init', 'custom_post_type_projetos', 0 );

?>