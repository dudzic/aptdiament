<?php

function diament_job_offers_cpt() {
  $labels = [
    'name'                => _x( 'Oferty pracy', 'Post Type General Name', 'diament' ),
    'singular_name'       => _x( 'Oferta pracy', 'Post Type Singular Name', 'diament' ),
    'menu_name'           => __( 'Oferty pracy', 'diament' ),
    'parent_item_colon'   => __( 'Nadrzędna Oferta', 'diament' ),
    'all_items'           => __( 'Wszystkie Oferty', 'diament' ),
    'view_item'           => __( 'Zobacz Ofertę', 'diament' ),
    'add_new_item'        => __( 'Dodaj nową Ofertę', 'diament' ),
    'add_new'             => __( 'Dodaj nową', 'diament' ),
    'edit_item'           => __( 'Edytuj Ofertę', 'diament' ),
    'update_item'         => __( 'Aktualizuj Ofertę', 'diament' ),
    'search_items'        => __( 'Szukaj Ofert', 'diament' ),
    'not_found'           => __( 'Nie znaleziono', 'diament' ),
    'not_found_in_trash'  => __( 'Nie znaleziono w Koszu', 'diament' ),
  ];

  $args = [
    'label'               => __( 'jobs', 'diament' ),
    'description'         => __( 'Dostępne oferty pract', 'diament' ),
    'labels'              => $labels,
    // Features this CPT supports in Post Editor
    'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail' ),
    // You can associate this CPT with a taxonomy or custom taxonomy. 
    /* A hierarchical CPT is like Pages and can have
    * Parent and child items. A non-hierarchical CPT
    * is like Posts.
    */ 
    'hierarchical'        => false,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 5,
    'menu_icon'           => 'dashicons-portfolio',
    'can_export'          => true,
    'has_archive'         => false,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'capability_type'     => 'post',
    'show_in_rest'        => true,
    'rewrite'             => ['slug' => 'oferty-pracy']
  ];

  register_post_type('jobs', $args);
}

add_action('init', 'diament_job_offers_cpt', 0);