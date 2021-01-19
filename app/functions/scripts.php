<?php

$version = '1.0.0';

/**
 * Loading scripts on footer
 */
function custom_js() {
  if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {
    wp_register_script('vendor-js', get_template_directory_uri() .'/assets/dist/js/vendor.js', [], $version, true);
    wp_enqueue_script('vendor-js');
  }
}

// add_action('wp_enqueue_scripts', 'custom_js');


/**
 * Loading styles
 */
function custom_css() {
  wp_register_style('vendor-css', get_template_directory_uri() .'/assets/dist/css/vendor.css', [], $version);
  wp_enqueue_style('vendor-css');
}

// add_action('wp_enqueue_scripts', 'custom_css');