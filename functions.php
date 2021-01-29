<?php
//Adds script and stylesheets
function starter_files() {
    wp_enqueue_script('jquery');
    wp_enqueue_script('font-awesome', "https://kit.fontawesome.com/f66db0731b.js", NULL,1.0);
    wp_enqueue_script('bootstrap-js', "https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js", NULL,1.0);
    wp_enqueue_script('bootstrap-jquery', "https://code.jquery.com/jquery-3.3.1.slim.min.js", NULL,1.0);
    // wp_enqueue_script('bootstrap-popper', "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js", NULL,1.0);
    wp_enqueue_style('dolphin-styles', get_theme_file_uri() . '/build/css/style.min.css', NULL, 1.0);
    wp_enqueue_style('fonts', "https://fonts.googleapis.com/css2?family=Alegreya+Sans:wght@300;700&family=Jost:wght@700&family=Mallanna&display=swap");
}

add_action('wp_enqueue_scripts', 'starter_files');

//Adds theme support - ex: title tag
function starter_features() {

    //Nav Menus
    register_nav_menu('header-menu', 'Header Menu');
    register_nav_menu('footer-menu', 'Footer Menu');

    add_theme_support('title-tag');
    
    //Stupid Proof Gutenburg Editor
    // Disable Gutenberg Custom Colors
    add_theme_support( 'disable-custom-colors' );

    // Disable Gutenberg Custom Gradients
    add_theme_support( 'disable-custom-gradients' );

    add_theme_support( 'editor-color-palette', array(
        array(
            'name'  => __( 'Grey', 'dolphingaming' ),
            'slug'  => 'grey',
            'color'	=> '#CBCCC6',
        ),
      array(
            'name'	=> __( 'Almost Black', 'dolphingaming' ),
            'slug'	=> 'almost-black',
            'color'	=> '#171717',
        ),
        array(
            'name'  => __( 'Dolphin Gold', 'dolphingaming' ),
            'slug'  => 'dolphin-gold',
            'color'	=> '#C3922E',
        ),
        array(
            'name'  => __( 'Red', 'dolphingaming' ),
            'slug'  => 'red',
            'color' => '#FF5959',
        ),
        array(
            'name'  => __( 'White', 'dolphingaming' ),
            'slug'  => 'white',
            'color' => '#FFF',
        )
    ) );
}

add_action('after_setup_theme', 'starter_features');

?>