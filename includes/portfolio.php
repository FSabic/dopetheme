<?php

// Register Custom Post Type Portfolio
function create_portfolio_cpt() {

	$labels = array(
		'name' => _x( 'Portfolios', 'Post Type General Name', 'doptheme' ),
		'singular_name' => _x( 'Portfolio', 'Post Type Singular Name', 'doptheme' ),
		'menu_name' => _x( 'Portfolios', 'Admin Menu text', 'doptheme' ),
		'name_admin_bar' => _x( 'Portfolio', 'Add New on Toolbar', 'doptheme' ),
		'archives' => __( 'Portfolio Archives', 'doptheme' ),
		'attributes' => __( 'Portfolio Attributes', 'doptheme' ),
		'parent_item_colon' => __( 'Parent Portfolio:', 'doptheme' ),
		'all_items' => __( 'All Portfolios', 'doptheme' ),
		'add_new_item' => __( 'Add New Portfolio', 'doptheme' ),
		'add_new' => __( 'Add New', 'doptheme' ),
		'new_item' => __( 'New Portfolio', 'doptheme' ),
		'edit_item' => __( 'Edit Portfolio', 'doptheme' ),
		'update_item' => __( 'Update Portfolio', 'doptheme' ),
		'view_item' => __( 'View Portfolio', 'doptheme' ),
		'view_items' => __( 'View Portfolios', 'doptheme' ),
		'search_items' => __( 'Search Portfolio', 'doptheme' ),
		'not_found' => __( 'Not found', 'doptheme' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'doptheme' ),
		'featured_image' => __( 'Featured Image', 'doptheme' ),
		'set_featured_image' => __( 'Set featured image', 'doptheme' ),
		'remove_featured_image' => __( 'Remove featured image', 'doptheme' ),
		'use_featured_image' => __( 'Use as featured image', 'doptheme' ),
		'insert_into_item' => __( 'Insert into Portfolio', 'doptheme' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Portfolio', 'doptheme' ),
		'items_list' => __( 'Portfolios list', 'doptheme' ),
		'items_list_navigation' => __( 'Portfolios list navigation', 'doptheme' ),
		'filter_items_list' => __( 'Filter Portfolios list', 'doptheme' ),
	);
	$args = array(
		'label' => __( 'Portfolio', 'doptheme' ),
		'description' => __( '', 'doptheme' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-tablet',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'author'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'portfolio', $args );

}
add_action( 'init', 'create_portfolio_cpt', 0 );

function register_portfolio_taxonomy(){
	$args = array(
		'public'=>true,
		'label'=>'Portfolio type',
		'rewrite'=>false,
		'supports'=>array('title','editor','author','thumbnail','excerpt')
	);
	register_taxonomy('portfolio_type', 'portfolio', $args);
}
add_action('init', 'register_portfolio_taxonomy');