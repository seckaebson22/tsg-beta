<?php

// Register Custom Post Type
function register_cpt_post_type() {

	$labels = array(
			'name'                => _x( 'Projects', 'Post Type General Name', 'text_domain' ),
			'singular_name'       => _x( 'Project', 'Post Type Singular Name', 'text_domain' ),
			'menu_name'           => __( 'Projects', 'text_domain' ),
			'parent_item_colon'   => __( 'Parent Project:', 'text_domain' ),
			'all_items'           => __( 'All Projects', 'text_domain' ),
			'view_item'           => __( 'View Project', 'text_domain' ),
			'add_new_item'        => __( 'Add New Project', 'text_domain' ),
			'add_new'             => __( 'Add New', 'text_domain' ),
			'edit_item'           => __( 'Edit Project', 'text_domain' ),
			'update_item'         => __( 'Update Project', 'text_domain' ),
			'search_items'        => __( 'Search Project', 'text_domain' ),
			'not_found'           => __( 'Not found', 'text_domain' ),
			'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
	);
	$args = array(
			'label'               => __( 'Projects', 'text_domain' ),
			'description'         => __( 'Post Type Description', 'text_domain' ),
			'labels'              => $labels,
			'supports'            => array( 'title', 'editor', 'thumbnail' ),
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => 5,
			'can_export'          => true,
			'has_archive'         => true,
			'menu_icon'				=> 'dashicons-media-document',
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'rewrite'               => array(
				'slug'                  => 'projects',
				'with_front'            => true,
			),
			'capability_type'     => 'page',
	);
	register_post_type( 'project', $args );

}

// Hook into the 'init' action
add_action( 'init', 'register_cpt_post_type', 0 );
