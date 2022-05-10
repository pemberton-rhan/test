<?php

/**
	Plugin Name: SmarTours - CPT
	Description: This is a simple plugin for creating custom post types.
	Author: Rhan Pemberton
**/

/* Custom post types
-------------------------------------------------------------- */

function cptui_register_my_cpts() {

	// Post Type: Tours.

	$labels = [
		"name" => __( "Tours", "smartours-cpt" ),
		"singular_name" => __( "Tour", "smartours-cpt" ),
	];

	$args = [
		"label" => __( "Tours", "smartours-cpt" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"menu_icon" => 'dashicons-admin-site-alt',
		"menu_position" => 5,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => [ "slug" => "tours", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "revisions", "custom-fields" ],
		"taxonomies" => [ "post_tag" ],
		"show_in_graphql" => false,
	];

	register_post_type( "tours", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );

/* Taxonomies
-------------------------------------------------------------- */

function cptui_register_my_taxes() {

	/**
	 * Taxonomy: Types.
	 */

	$labels = [
		"name" => __( "Types", "smartours-cpt" ),
		"singular_name" => __( "Type", "smartours-cpt" ),
	];

	
	$args = [
		"label" => __( "Types", "smartours-cpt" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => false,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'tour_types', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"show_tagcloud" => false,
		"rest_base" => "tour_types",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"rest_namespace" => "wp/v2",
		"show_in_quick_edit" => false,
		"sort" => false,
		"show_in_graphql" => false,
	];
	register_taxonomy( "tour_types", [ "tours" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes' );


