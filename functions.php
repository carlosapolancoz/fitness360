<?php

    function fitness360_menus() {
        register_nav_menus(array(
            'menu-principal' => __('Menu Principal', 'fitness360')
        ));
    }

    add_action('init', 'fitness360_menus'); 

    function fitness360_scripts_styles(){
        wp_enqueue_style('style', get_stylesheet_uri(), array(), '1.0.0');
    }

    add_action('wp_enqueue_scripts', 'fitness360_scripts_styles');