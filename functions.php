<?php
function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
   }
   add_filter('upload_mimes', 'cc_mime_types');
   
//Adds script and stylesheets
function starter_files() {
    wp_enqueue_script('jquery');
    wp_enqueue_script('font-awesome', "https://kit.fontawesome.com/f66db0731b.js", NULL,1.0);

    wp_enqueue_script('bootstrap-popper', "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js", NULL,1.0);
    wp_enqueue_script('bootstrap-js', "https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js", NULL,1.0);

    wp_enqueue_script('bootstrap-jquery', "https://code.jquery.com/jquery-3.6.0.min.js", NULL,1.0);
    wp_enqueue_script('bootstrap-ui', "https://code.jquery.com/ui/1.12.1/jquery-ui.min.js", NULL,1.0);

    //Swiper JS
    wp_enqueue_script('swiper-js', "https://unpkg.com/swiper/swiper-bundle.min.js", NULL,1.0);
    wp_enqueue_style('swiper-css', "https://unpkg.com/swiper/swiper-bundle.min.css", NULL,1.0);

    wp_enqueue_script('custom-js', get_theme_file_uri() . '/build/js/custom.min.js', NULL,1.0);
    wp_enqueue_style('jquery-ui-css', "https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css", NULL, 1.0);
    wp_enqueue_style('jquery-ui-smooth-css', "https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/theme.min.css", NULL, 1.0);

    wp_enqueue_style('animate-css', "https://unpkg.com/aos@2.3.1/dist/aos.css", NULL, 1.0);
    wp_enqueue_script('animate-js', 'https://unpkg.com/aos@2.3.1/dist/aos.js', NULL,1.0);

    wp_enqueue_style('dolphin-styles', get_theme_file_uri() . '/build/css/style.min.css', NULL, 1.0);
    wp_enqueue_style('fonts', "https://fonts.googleapis.com/css2?family=Mallanna&display=swap");
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

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Dolphin Settings',
		'menu_title'	=> 'Dolphin Settings',
		'menu_slug' 	=> 'doplin-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
        'position' => '2.1',
        'icon_url' => 'dashicons-money-alt',
	));
	
}

add_filter('acf/format_value/type=number', 'fix_number', 30, 3);
function fix_number($value, $post_id, $field) {
  $value = number_format($value);
  if($value == 0) {
      return '/';
  }
  return $value;
}

add_action( 'admin_init', 'my_remove_admin_menus' );
function my_remove_admin_menus() {
    remove_menu_page( 'edit-comments.php' );
}

?>