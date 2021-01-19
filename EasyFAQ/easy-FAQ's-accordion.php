<?php 
/***
* Plugin Name: Easy FAQ's Accordion
* Plugin URI:
* Description: plugin for making frequently asked question section by shortcode and accordian with easy manner.
* Version:1.0
* Author: Vaibhav Gangrade
* Author URI:
*/

if(!defined('ABSPATH')){
	 exit;
}
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

//adding jquery 
function faq_load_admin_js() {
    wp_enqueue_script( array( 'jquery' ) );
}
add_action( 'wp_enqueue_scripts', 'faq_load_admin_js' );
add_action('init', 'register_script');

function register_script() {
    
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

//shortcode function
function EFAQ_section($attr){ 

	static $i=0; //checking how many times shortcode paste.
	$i++;
	//echo $i;
	$options = shortcode_atts(array(
	'question'=> 'question goes here?',
	'answer'=>'answer goews here'	
	),$attr);

$output_data ="<div id='accordion".$i."'><div class='card'><div class='card-header' id='headingOne' class='btn btn-primary' data-toggle='collapse' data-target='#collapseOne".$i."' aria-expanded='true' aria-controls='collapseOne'> $i)&nbsp;".$options['question']."<i class='fa fa-plus'></i></div>
<div id='collapseOne".$i."' class='collapse show' aria-labelledby='headingOne' data-parent='#accordion".$i."'>
      <div class='card-body'>
         ".$options['answer']."
      </div>
    </div>
  </div>";
return $output_data;
}

add_shortcode('EFAQ','EFAQ_section');

?>



