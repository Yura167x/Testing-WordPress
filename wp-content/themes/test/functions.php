<?php

function test_scripts() {

    wp_enqueue_style( 
        'test-reboot', 
        get_template_directory_uri() . '/libs/bootstrap-reboot/bootstrap-reboot.min.css'
    );

    wp_enqueue_style( 'test-main', get_stylesheet_uri() );

    wp_enqueue_style( 'test-gfonts', 'https://fonts.googleapis.com/css?family=Fira+Sans|Playfair+Display:400,700|Poppins:300&amp;subset=cyrillic-ext' );
    
    wp_enqueue_style( 
        'test-fontSpartan', 
        get_template_directory_uri() . '/fonts/league-spartan/league-spartan.css' 
    );





}

add_action( 'wp_enqueue_scripts', 'test_scripts' );



add_action('init', 'register_post_types');
function register_post_types(){

    $cptArgsArray = array(
        'labels'              => array(
            'name'                => 'Картинки',
            'singular_name'       => 'Картинка',
            'add_new'             => 'Добавить новую',
            'add_new_item'        => 'Добавить новую картинку',
            'edit_item'           => 'Редактировать картинку',
            'new_item'            => 'Новая картинка',
            'view_item'           => 'Посмотреть картинку',
            'search_items'        => 'Найти картинку',
            'not_found'           => 'Картинок не найдено',
            'not_found_in_trash'  => 'В корзине картинок не найдено',
            'parent_item_colon'   => '',
            'menu_name'           => 'Картинки',

        ),
        'public'               => true,
        'public_queryable'     => true,
        'show_ui'              => true,
        'show_in_menu'         => true,
        'query_var'            => true,
        'rewrite'              => true,
        'capability_type'      => 'post',
        'has_archive'          => true,
        'hierarchical'         => false,
        'menu_position'        => null,
        'suports'              => array(
            'title',
            //'editor',
            //'author',
            'thumbnail',
            //'excerpt',
            //'coments'
            )
    );

    register_post_type('pictures', $cptArgsArray);

    
        }

        

add_theme_support( 'post-thumbnails');

if (function_exists('add_image_size') ){
    add_image_size('picture-slider', 225, 400, true);
}