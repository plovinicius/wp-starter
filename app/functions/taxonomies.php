<?php

/**
 * Load custom taxonomies
 */
function do_init_custom_taxonomies() {

  #region Example
  $labels = [
    'name'              => _x( 'Example', 'taxonomy general name', 'wp-starter' ),
    'singular_name'     => _x( 'Example', 'taxonomy singular name', 'wp-starter' ),
    'search_items'      => __( 'Search items', 'wp-starter' ),
    'all_items'         => __( 'All items', 'wp-starter' ),
    'parent_item'       => __( 'Parent item', 'wp-starter' ),
    'parent_item_colon' => __( 'Parent item:', 'wp-starter' ),
    'edit_item'         => __( 'Edit item', 'wp-starter' ),
    'update_item'       => __( 'Update item', 'wp-starter' ),
    'add_new_item'      => __( 'Add new item', 'wp-starter' ),
    'new_item_name'     => __( 'New item name', 'wp-starter' ),
    'menu_name'         => __( 'Example', 'wp-starter' ),
  ];

  $args = [
    'hierarchical'      => true,
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'rewrite'           => array( 'slug' => 'genre' ),
  ];

  /**
   * Register taxonomy
   *
   * @param String $taxonomy_name
   * @param Array $post_type_name
   * @param Array $args
   */
  register_taxonomy( 'example', ['example'] , $args );
  #endregion

}

// add_action( 'init', 'do_init_custom_taxonomies', 0 );