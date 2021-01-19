<?php

/**
 * Register navigation menus
 */
function register_menu() {
  register_nav_menus([
    'header-menu' => 'Header Menu',
    'footer-menu' => 'Footer Menu',
    'extra-menu' => 'Extra Menu'
  ]);
}

add_action('init', 'register_menu');