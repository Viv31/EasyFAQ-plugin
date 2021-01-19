<?php
function faq_load_admin_js(){
	//adding jquery 
    wp_enqueue_script( array('jquery'));
}
add_action( 'wp_enqueue_scripts', 'faq_load_admin_js' );
add_action('init', 'register_script');
function register_script(){
    wp_register_script( 'bootstrap_js', plugins_url('assets/js/bootstrap.min.js', __FILE__), array('jquery'), '2.5.1' );
   wp_register_style( 'boostrap_css', plugins_url('assets/css/bootstrap-min.css', __FILE__), false, '1.0.0', 'all');
   wp_register_style( 'custom_css', plugins_url('assets/css/style.css', __FILE__), false, '1.0.0', 'all');
}
// use the registered jquery and style above
add_action('wp_enqueue_scripts', 'enqueue_style');
function enqueue_style(){
   wp_enqueue_script('bootstrap_js');
	wp_enqueue_style( 'boostrap_css' );
   wp_enqueue_style( 'custom_css' );
}
?>