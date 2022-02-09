<?php

add_theme_support('title-tag');
add_theme_support('post-thumbnails');

function diament_custom_scripts() {
  // CSS
  wp_enqueue_style('index_css', get_theme_file_uri('/dist/index.css'));

  // JS
  wp_enqueue_script('fontawesome', 'https://kit.fontawesome.com/dcea29da01.js');
  wp_enqueue_script('index_js', get_theme_file_uri('/dist/index.js'), null, null, true);

  if ( is_front_page() ) {
    wp_enqueue_script('frontpage_js', get_theme_file_uri('/dist/frontpage.js'), null, null, true);
  }

  if ( is_page_template('page-oferty-pracy.php') ) {
    wp_enqueue_script('jobOffers_js', get_theme_file_uri('/dist/jobOffers.js'), null, null, true);
  }
}

add_action('wp_enqueue_scripts', 'diament_custom_scripts');

// Includes
include('inc/custom-post-types.php');