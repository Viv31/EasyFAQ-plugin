<?php
//calling admin jquery
if (!function_exists('EFAQ_load_admin_js'))
{
    function EFAQ_load_admin_js()
    {
        //adding jquery
        wp_enqueue_script(array(
            'jquery'
        ));
    }
    add_action('wp_enqueue_scripts', 'EFAQ_load_admin_js');

}

//Register our custom css and js files
if (!function_exists('EFAQ_register_script'))
{
    add_action('init', 'EFAQ_register_script');
    function EFAQ_register_script()
    {
        wp_register_script('bootstrap_js', plugins_url('assets/js/bootstrap.min.js', __FILE__) , array(
            'jquery'
        ) , '4.6.0');
        wp_register_style('boostrap_css', plugins_url('assets/css/bootstrap-min.css', __FILE__) , false, '4.6.0', 'all');
        wp_register_style('custom_css', plugins_url('assets/css/style.css', __FILE__) , false, '1.0.0', 'all');
    }

}

// use the registered jquery and style above
if (!function_exists('EFAQ_enqueue_style'))
{

    add_action('wp_enqueue_scripts', 'EFAQ_enqueue_style');
    function EFAQ_enqueue_style()
    {
        wp_enqueue_script('bootstrap_js');
        wp_enqueue_style('boostrap_css');
        wp_enqueue_style('custom_css');
    }

}

?>
