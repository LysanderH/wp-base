<?php
/**
 * Custom post type
 */

register_post_type('trip', [
    'label' => 'voyage',
    'labels' => [
        'name' => 'Voyages',
        'singular_name' => 'Voyage',
        'add_new' => 'Ajouter nouveau',
        'add_new_item' => 'Ajouter un nouveau voyage'
    ],
    'description' => 'Les récits de voyage que j’ai vécu',
    'public' => true,
    'menu_position' => 5,
    'menu_icon' => 'dashicons-palmtree',
    'supports' => ['thumbnail', 'title', 'editor', 'excerpt']
]);