<?php 
/*=======================================================================*/
//  Post Type jobs
/*=======================================================================*/
add_action('init', 'register_jobs');
function register_jobs(){
	$labels = array(
		'name' => _x('Jobs', 'post type general name'),
		'singular_name' => _x('Jobs', 'post type singular name'),
		'add_new' => _x('Add New', 'Jobs'),
		'add_new_item' => __('LATEST UPCOMING JOBS'),
		'edit_item' => __('Edit jobs'),
		'new_item' => __('New jobs'),
		'view_item' => __('View jobs'),
		'search_items' => __('Search jobs'),
		'not_found' =>  __('Nothing found'),
		'not_found_in_trash' => __('Nothing found in Trash'),
		'parent_item_colon' => ''

					);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		//'events_icon' => get_stylesheet_directory_uri() . '/images/slider-icon.png',
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		//'events_position' => '',
		'supports' => array('title','editor','thumbnail')
				);
	register_post_type('jobs' , $args);


}
?>