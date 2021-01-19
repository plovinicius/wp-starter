<?php

if (function_exists('register_sidebar')) {
  /**
   * Example sidebar area
   */
  register_sidebar([
    'name' => __('Example', 'wp-starter'),
    'description' => __('Example area', 'wp-starter'),
    'id' => 'example-sidebar',
    'before_widget' => '<div id="%1$s" class="%2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
  ]);
}
