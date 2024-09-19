<?php
/*
Plugin Name:  WP Parent Page Search
Plugin URI:   https://github.com/ozgurozbek
Description:  This plugin adds the search functionality to parent page selector. It only works on non-block editors, as they already have their own search bars.
Version:      1.1
Author:       Ozgur Ozbek
Author URI:   https://github.com/ozgurozbek
License:      MIT
License URI:  https://opensource.org/license/mit
*/

function pps_enqueue_scripts($hook) {
    // Load only on the page editing screen
    if ($hook !== 'post.php' && $hook !== 'post-new.php') {
        return;
    }

    // Enqueue JavaScript
    wp_enqueue_script('pps-script', plugins_url('/js/pps-script.js', __FILE__), array('jquery'), '1.0', true);

    // Enqueue CSS
    wp_enqueue_style('pps-style', plugins_url('/css/pps-style.css', __FILE__));
}
add_action('admin_enqueue_scripts', 'pps_enqueue_scripts');

/* NO PAGE VERSION
function pps_enqueue_scripts($hook) {
    // Load only on the page editing screen for 'page' post type
    if (($hook !== 'post.php' && $hook !== 'post-new.php') || get_post_type() !== 'page') {
        return;
    }

    // Enqueue JavaScript
    wp_enqueue_script('pps-script', plugins_url('/js/pps-script.js', __FILE__), array('jquery'), '1.0', true);

    // Enqueue CSS
    wp_enqueue_style('pps-style', plugins_url('/css/pps-style.css', __FILE__));
}
add_action('admin_enqueue_scripts', 'pps_enqueue_scripts');
*/
?>