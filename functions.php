<?php function NewTheme_resources(){
	wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'NewTheme_resources');

//Register Nav Menus

register_nav_menus(array(
	'primary' => __( 'Primary Menu'),
	'footer' => __( 'Footer Menu'),

	));

// get top level
function get_top_id() {

	global $post;
	if ($post->post_parent) {
		$top = array_reverse(get_post_ancestors($post->ID));
		return $top[0];

	}

	return $post->ID;
}