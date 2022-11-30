<?php
wp_enqueue_style('style_ban_gov', get_stylesheet_uri());

wp_enqueue_style('style_boot', get_template_directory_uri().'/css/bootstrap.min.css');


wp_enqueue_script( 'script-js', get_template_directory_uri() . '/JS/bootstrap.bundle.min.js', array(), '1.0.0', true );

add_theme_support('custom-logo');

?>