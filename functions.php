<?php

function animalCrossingTheme_resources(){
    wp_enqueue_script('js', get_theme_file_uri('/js/scripts-bundled.js'),NULL,'1.0',true);
    wp_enqueue_style('customfont', '//fonts.googleapis.com/css?family=Slabo+27px');
    wp_enqueue_style('fontawesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('style2', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts','animalCrossingTheme_resources');

function animalcrossing_features(){
    add_theme_support('title-tag');
    register_nav_menu('headerNavLocation', 'Header Nav Location');
    register_nav_menu('footerLocationOne','Footer Location One');
    register_nav_menu('footerLocationTwo','Footer Location Two');
}

add_action('after_setup_theme','animalcrossing_features');

?>