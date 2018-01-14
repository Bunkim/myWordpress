<?php 
	add_filter('show_admin_bar' , '__return_false');
	function my_portfolio_style() {
		wp_enqueue_style( 'my_style', get_stylesheet_uri() );
		wp_enqueue_style( 'my_style1', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css' );
	};
	add_action( 'wp_enqueue_scripts', 'my_portfolio_style');

	function my_portfolio_script() {
		wp_enqueue_script('my_script', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js');
	};
	add_action( 'wp_enqueue_scripts', 'my_portfolio_script');

// Remove Admin Bar
add_filter('show_admin_bar', '__return_false');

function new_theme_setup() {
	add_theme_support( 'post-thumbnails' );
  
  register_nav_menus( array(
		'main-menu' => esc_html__( 'Primary', 'awesome-human' ),
	) );
};
add_action( 'after_setup_theme', 'new_theme_setup');




function new_theme_widgets_init() {
	register_sidebar( array(
		'name'          => 'Sidebar',
		'id'            => 'sidebar-1',
		'description'   => 'Add widgets here.'
	) );
}
add_action( 'widgets_init', 'new_theme_widgets_init' );


function get_post_data($postId) {
 global $wpdb;
 return $wpdb->get_results("SELECT * FROM $wpdb->posts WHERE ID=$postId");
}

add_theme_support( 'post-thumbnails' ); 

add_filter( 'post_thumbnail_html', 'my_post_image_html', 10, 3 );

function my_post_image_html( $html, $post_id, $post_image_id ) {

  $html = '<a href="' . get_permalink( $post_id ) . '" title="' . esc_attr( get_post_field( 'post_title', $post_id ) ) . '">' . $html . '</a>';
  return $html;

}



function get_excerpt(){
$excerpt = get_the_content();
$excerpt = preg_replace(" ([.*?])",'',$excerpt);
$excerpt = strip_shortcodes($excerpt);
$excerpt = strip_tags($excerpt);
$excerpt = substr($excerpt, 0, 150);
$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
$excerpt = trim(preg_replace( '/s+/', '', $excerpt));
return $excerpt;
}



