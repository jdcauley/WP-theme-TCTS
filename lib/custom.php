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

// Variable Excerpt Length

function excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }
  $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
  return $excerpt;
}

function fw_stripe($atts, $content = null) {
    extract(shortcode_atts(array('background' => '', 'color' => ''), $atts));
   return '</div></div></main><div class="fw-stripe" style="color: '.$color.'; background: '.$background.';"><div class="container">' . do_shortcode($content) . '</div></div><div class="wrap container"><div class="content row"><main class="main col-sm-12">';
}
add_shortcode('stripe', 'fw_stripe');
