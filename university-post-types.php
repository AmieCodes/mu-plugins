<?php function university_post_types() {
    register_post_type('event', ['public' => true,
    'show_in_rest' => true,
    'labels' => ['name' => 'Events', //this array edits how the event labels show in wp admin
            'add_new_item' => 'Add New Event',
            'edit_item' => 'Edit Event',
            'all_items' => 'All Events',
            'singular_name' => 'Event'
            ],
        'menu_icon' => 'dashicons-calendar-alt'
    ]);
}

add_action('init', 'university_post_types' );
