<?php


// enqueue styles for child theme
// @ https://digwp.com/2016/01/include-styles-child-theme/
function enqueue_styles() {
	
	//enqueue child styles
	wp_enqueue_style('child-styles', get_stylesheet_directory_uri() .'/style.css');
	// enqueue parent styles
	wp_enqueue_style('parent-theme', get_template_directory_uri() .'/style.css');

	wp_enqueue_style('font-awesome', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
	// enqueue child styles
	wp_enqueue_style('react-styles', get_stylesheet_directory_uri() . '/static/css/main.f0a78df4.chunk.css');
	
}
add_action('wp_enqueue_scripts', 'enqueue_styles');


add_action( 'wp_enqueue_scripts', 'my_enqueue_theme_js' );
function my_enqueue_theme_js() {

	wp_enqueue_script(
	  'my-theme-frontend',
	  get_stylesheet_directory_uri() . '/build/index.js',
	  ['wp-element'],
	  time(), // Change this to null for production
	  true
	);

}