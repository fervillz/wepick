<?php 

// Register Custom Post Type
function function_how_it_work() {

	$labels = array(
		'name'                  => _x( 'How It Works', 'Post Type General Name', 'wepick' ),
		'singular_name'         => _x( 'How It Work', 'Post Type Singular Name', 'wepick' ),
		'menu_name'             => __( 'How It Works', 'wepick' ),
		'name_admin_bar'        => __( 'How It Work', 'wepick' ),
		'archives'              => __( 'Item Archives', 'wepick' ),
		'parent_item_colon'     => __( 'Parent Item:', 'wepick' ),
		'all_items'             => __( 'All Items', 'wepick' ),
		'add_new_item'          => __( 'Add New Item', 'wepick' ),
		'add_new'               => __( 'Add New', 'wepick' ),
		'new_item'              => __( 'New Item', 'wepick' ),
		'edit_item'             => __( 'Edit Item', 'wepick' ),
		'update_item'           => __( 'Update Item', 'wepick' ),
		'view_item'             => __( 'View Item', 'wepick' ),
		'search_items'          => __( 'Search Item', 'wepick' ),
		'not_found'             => __( 'Not found', 'wepick' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'wepick' ),
		'featured_image'        => __( 'Featured Image', 'wepick' ),
		'set_featured_image'    => __( 'Set featured image', 'wepick' ),
		'remove_featured_image' => __( 'Remove featured image', 'wepick' ),
		'use_featured_image'    => __( 'Use as featured image', 'wepick' ),
		'insert_into_item'      => __( 'Insert into item', 'wepick' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'wepick' ),
		'items_list'            => __( 'Items list', 'wepick' ),
		'items_list_navigation' => __( 'Items list navigation', 'wepick' ),
		'filter_items_list'     => __( 'Filter items list', 'wepick' ),
	);
	$args = array(
		'label'                 => __( 'How It Work', 'wepick' ),
		'description'           => __( 'How It Work Description', 'wepick' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', ),
		'hierarchical'          => true,
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
	register_post_type( 'how_it_work', $args );

}
add_action( 'init', 'function_how_it_work', 0 ); ?>

