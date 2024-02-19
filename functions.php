<?php

    // Includes
    require get_template_directory() . '/includes/widgets.php';

    function fitness360_setup() {
        // Imagenes Destacadas
        add_theme_support('post-thumbnails');

        // Titulos para SEO
        add_theme_support('title-tag');
    }

    add_action('after_setup_theme', 'fitness360_setup');

    function fitness360_menus() {
        register_nav_menus(array(
            'menu-principal' => __('Menu Principal', 'fitness360')
        ));
    }

    add_action('init', 'fitness360_menus'); 

    function fitness360_scripts_styles(){
        wp_enqueue_style('normalize', 'https://necolas.github.io/normalize.css/8.0.1/normalize.css', array(), '8.0.1');
        wp_enqueue_style('style', get_stylesheet_uri(), array('normalize'), '1.0.0');
    }

    add_action('wp_enqueue_scripts', 'fitness360_scripts_styles');

    // Definir zona de widgets
    function fitness360_widgets() {
        register_sidebar(array(
            'name' => 'Sidebar 1',
            'id' => 'sidebar_1',
            'before_widget' =>  '<div class="widget">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="text-center text-primary">',
            'after_title' =>  '</h3>',
        ));

        register_sidebar(array(
            'name' => 'Sidebar 2',
            'id' => 'sidebar_2',
            'before_widget' =>  '<div class="widget">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="text-center text-primary">',
            'after_title' =>  '</h3>',
        ));
    }

    add_action('widgets_init', 'fitness360_widgets');