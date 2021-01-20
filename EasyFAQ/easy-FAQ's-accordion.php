<?php
/**
 * Plugin Name: Easy FAQ's Accordion
 * Plugin URI:
 * Description: Plugin for making frequently asked question section by shortcode and accordian with easy manner by using [EFAQ question="" answer = ""] in your page.
 * Version:1.0
 * Author: Vaibhav Gangrade
 * Author URI:
 */
if (!defined('ABSPATH')) exit;
include_once (ABSPATH . 'wp-admin/includes/plugin.php'); //calling core files of plugin
include_once ('libraries.php'); //css/js files
include_once ('faq-shortcode.php'); //calling shortcode in plugin
