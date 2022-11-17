<?php

function university_post_types() {

  //Event post type
  register_post_type('event', [
    'show_in_rest' => true,
    'supports' => array('title', 'editor', 'excerpt'),
    'rewrite' => array('slug' => 'events'),
    'has_archive' => true,
    'public' => true,
    'labels' => array(
      'name' => 'Events',
      'add_new_item' => 'Add New Event',
      'edit_item' => 'Edit Event',
      'all_items' => 'All Events',
      'singular_name' => 'Event'
    ),
    'menu_icon' => 'dashicons-calendar'
  ]);

  //Program post type
  register_post_type('program', [
    'show_in_rest' => true,
    'supports' => array('title', 'editor'),
    'rewrite' => array('slug' => 'programs'),
    'has_archive' => true,
    'public' => true,
    'labels' => array(
      'name' => 'Programs',
      'add_new_item' => 'Add New Program',
      'edit_item' => 'Edit Program',
      'all_items' => 'All Programs',
      'singular_name' => 'Program'
    ),
    'menu_icon' => 'dashicons-awards' //taken from wordoress dashicons website
  ]);

//Professor post type
register_post_type('professor', [
  'supports' => ['title', 'editor', 'thumbnail'],// adds featured-image in wp-admin
  'public' => true,
  'show_in_rest' => true,//makes have wp-admin new view
  'labels' => [
    'name' => 'Professors',
    'add_new_item' => 'Add New Professor',
    'edit_item' => 'Edit Professor',
    'all_items' => 'All Professors',
    'singular_name' => 'Professor'
],
  'menu_icon' => 'dashicons-welcome-learn-more' //taken from worddress dashicons website
]);


}

add_action('init', 'university_post_types');
