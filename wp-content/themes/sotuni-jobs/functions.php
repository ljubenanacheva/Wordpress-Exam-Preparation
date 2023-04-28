<?php
/**
 * This function takes care of handling the assets with enqueue
 */
function softuni_assets (){
    wp_enqueue_style( 'softuni-jobs', get_stylesheet_directory_uri() . '/assets/css/master.css', array(), '0.1.0');
}
add_action( 'wp_enqueue_scripts', 'softuni_assets' );