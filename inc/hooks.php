<?php

add_action('init', 'run_initialization');

/**
 *
 */
function run_initialization(){

    global $main_nav, $related_links;

    $main_nav = wp_get_nav_menu_items(2);

    $related_links = wp_get_nav_menu_items(3);

//    dd($main_nav);

}


function get_main_nav(){

    return wp_get_nav_menu_items(2);

}

