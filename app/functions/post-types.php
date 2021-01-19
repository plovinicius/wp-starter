<?php

/**
 * Load custom post types
 */
function do_init_custom_post_types() {

  #region Example
  register_post_type('example',
    [
      'labels' => [
        'name' => __('Example', 'wp-starter'),
        'singular_name' => __('Example', 'wp-starter'),
        'add_new' => __('Add new', 'wp-starter'),
        'add_new_item' => __('Add new item', 'wp-starter'),
        'edit' => __('Edit', 'wp-starter'),
        'edit_item' => __('Edit item', 'wp-starter'),
        'new_item' => __('Edit item', 'wp-starter'),
        'view' => __('View', 'wp-starter'),
        'view_item' => __('View item', 'wp-starter'),
        'search_items' => __('Search item', 'wp-starter'),
        'not_found' => __('Not found', 'wp-starter'),
        'not_found_in_trash' => __('Not found in trash', 'wp-starter')
      ],
      'public' => true,
      'hierarchical' => false,
      'has_archive' => false,
      'menu_icon' => 'dashicons-media-document',
      'supports' => [
        'title', 'thumbnail', 'excerpt', 'editor'
      ],
      'can_export' => true
    ]);
  #endregion

}

// add_action('init', 'do_init_custom_post_types');