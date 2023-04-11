<?php

function services_custom_post(){
    $servicesPost_label =array(
        'name'   =>             __('Services Post', 'textdomain'),
        'singular_name'   =>    __('Services Post', 'textdomain'),
        'add_new'   =>          __('Add Services Post', 'textdomain'),
        'add_new_item'   =>     __('Add New Services', 'textdomain'),
        'edit_item'   =>        __('Edit Services Post', 'textdomain'),
        'all_items'   =>        __('Services Post', 'textdomain'),
    );

    $servicesPost_args = array(
        'labels'   => $servicesPost_label,
        'public'   => true,
        'capability_type' => 'post',
        'show_ui'   => true,
         'taxonomies' => array ('post_tag' , 'category'),
         'supports' => array  ('title', 'editor' ,'thumbnail' , 'excerpt'),
    );

    register_post_type('servicesPost' , $servicesPost_args);
   
}

add_action('init', 'services_custom_post');

function card_custom_post(){
    $cardPost_label =array(
        'name'   =>             __('Card Post', 'textdomain'),
        'singular_name'   =>    __('Card Post', 'textdomain'),
        'add_new'   =>          __('Add Card Post', 'textdomain'),
        'add_new_item'   =>     __('Add New Card', 'textdomain'),
        'edit_item'   =>        __('Edit Card Post', 'textdomain'),
        'all_items'   =>        __('Card Post', 'textdomain'),
    );

    $cardPost_args = array(
        'labels'   => $cardPost_label,
        'public'   => true,
        'capability_type' => 'post',
        'show_ui'   => true,
         'taxonomies' => array ('post_tag' , 'category'),
         'supports' => array  ('title', 'editor' ,'thumbnail' , 'excerpt'),
    );

    register_post_type('cardPost' , $cardPost_args);
   
}

add_action('init', 'card_custom_post');

function cards_custom_post(){
    $cardsPost_label =array(
        'name'   =>             __('Cards Post', 'textdomain'),
        'singular_name'   =>    __('Cards Post', 'textdomain'),
        'add_new'   =>          __('Add Cards Post', 'textdomain'),
        'add_new_item'   =>     __('Add New Cards', 'textdomain'),
        'edit_item'   =>        __('Edit Cards Post', 'textdomain'),
        'all_items'   =>        __('Cards Post', 'textdomain'),
    );

    $cardsPost_args = array(
        'labels'   => $cardsPost_label,
        'public'   => true,
        'capability_type' => 'post',
        'show_ui'   => true,
         'taxonomies' => array ('post_tag' , 'category'),
         'supports' => array  ('title', 'editor' ,'thumbnail' , 'excerpt'),
    );

    register_post_type('cardsPost' , $cardsPost_args);
   
}

add_action('init', 'cards_custom_post');


function author_custom_post(){
    $authorPost_label =array(
        'name'   =>             __('Author Post', 'textdomain'),
        'singular_name'   =>    __('Author Post', 'textdomain'),
        'add_new'   =>          __('Add Author Post', 'textdomain'),
        'add_new_item'   =>     __('Add New Author', 'textdomain'),
        'edit_item'   =>        __('Edit Author Post', 'textdomain'),
        'all_items'   =>        __('Author Post', 'textdomain'),
    );

    $authorPost_args = array(
        'labels'   => $authorPost_label,
        'public'   => true,
        'capability_type' => 'post',
        'show_ui'   => true,
         'taxonomies' => array ('post_tag' , 'category'),
         'supports' => array  ('title', 'editor' ,'thumbnail' , 'excerpt'),
    );

    register_post_type('authorPost' , $authorPost_args);
   
}

add_action('init', 'author_custom_post');
