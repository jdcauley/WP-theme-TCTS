<?php
/**
 * Custom functions
 */

function custom_programs_posts() {
  register_post_type( 'programs',
		array(
			'labels' => array(
				'name' => __( 'Programs' ),
				'singular_name' => __( 'programs' )
			),
		'public' => true,
		'has_archive' => true,
		'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
		'taxonomies' => array('category'),
		)
	);
}
add_action( 'init', 'custom_programs_posts' );

function custom_physicians_posts() {
  register_post_type( 'physicians',
    array(
      'labels' => array(
        'name' => __( 'Physicians' ),
        'singular_name' => __( 'physicians' )
      ),
    'public' => true,
    'has_archive' => true,
    'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
    'taxonomies' => array('category'),
    )
  );
}
add_action( 'init', 'custom_physicians_posts' );
