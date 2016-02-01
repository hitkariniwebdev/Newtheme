<?php function NewTheme_resources(){
	wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'NewTheme_resources');

// get top level
function get_top_id() {

	global $post;
	if ($post->post_parent) {
		$top = array_reverse(get_post_ancestors($post->ID));
		return $top[0];

	}

	return $post->ID;
}

// Does page have children ?
function has_children() {
	global $post;

	$pages = get_pages('child_of='. $post->ID);
	return count($pages);
}

// customization of exceprt word count link
function custom_excerpt_length(){
	return 25;
}
add_filter('excerpt_length', 'custom_excerpt_length');

function learningWordPress_setup() {
	
	// Navigation Menus
	register_nav_menus(array(
		'primary' => __( 'Primary Menu'),
		'footer' => __( 'Footer Menu'),
	));
	
	// Add featured image support
	add_theme_support('post-thumbnails');
	add_image_size('small-thumbnail', 180, 120, true);
	add_image_size('banner-image', 920, 210, array('left', 'top'));
}

add_action('after_setup_theme', 'learningWordPress_setup');

/**
 * Add HTML5 theme support.
 */
function wpdocs_after_setup_theme() {
    add_theme_support( 'html5', array( 'search-form' ) );
}
add_action( 'after_setup_theme', 'wpdocs_after_setup_theme' );

// Add post format support
add_theme_support('post-formats', array('aside', 'gallery', 'link'));

// Widget enabled here
function widgetInit() {
	register_sidebar( array(
		'name' => 'Sidebar',
		'id' => 'sidebar1'
		));
	register_sidebar( array(
		'name' => 'Footer Area 1',
		'id' => 'footer1'
		));
}
add_action('widgets_init', 'widgetInit');