<?php

function woomisha() {
    wp_enqueue_style('fonts-google-style', get_template_directory_uri() . 'https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,800',[],'2023');
    wp_enqueue_style('fonts-style', get_template_directory_uri() . 'https://fonts.googleapis.com/css?family=Playfair+Display',[],'2023');


    wp_enqueue_style('bootstrap-style', get_template_directory_uri() . '/assets/css/vendor/bootstrap.min.css',[],'2023','all');
    wp_enqueue_style('font-awesome-style', get_template_directory_uri() . '/assets/css/vendor/font-awesome.css',[],'2023','all');
    wp_enqueue_style('dl-icon-style', get_template_directory_uri() . '/assets/css/vendor/dl-icon.css',[],'2023','all');
    wp_enqueue_style('helper-style', get_template_directory_uri() . '/assets/css/helper.min.css',[],'2023','all');
    wp_enqueue_style('plugins-style', get_template_directory_uri() . '/assets/css/plugins.css',[],'2023','all');
    wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/style.css',[],'2023','all');

   
    wp_enqueue_script('jquery-js',  get_template_directory_uri() . '/assets/js/jquery-3.3.1.min.js',[],'2023',true);
    wp_enqueue_script('bootstrap-js',  get_template_directory_uri() . '/assets/js/bootstrap.min.js',[],'2023',true);
    wp_enqueue_script('plugins-js',  get_template_directory_uri() . '/assets/js/plugins.js',['jquery-js'],'2023',true);
    wp_enqueue_script('script-js',  get_template_directory_uri() . '/assets/js/scripts.js',[],'2023',true);
   
}
add_action('wp_enqueue_scripts', 'woomisha');

function wooMishaMenu() {
    register_nav_menus([
        'menu-header' => 'Меню в шапке'
    ]);

    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
    add_theme_support('woocommerce');//ВКЛЮЧАЕМ ПОДДЕРЖКУ woocomerce
}
add_action('after_setup_theme', 'wooMishaMenu');



// function mishawoo_widgets_init() {
// 	register_sidebar(
// 		array(
// 			'name'          => esc_html__( 'Сайдбар'),
// 			'id'            => 'sidebar-catalog',
// 			'description'   => esc_html__( 'Add widgets here'),
// 			'before_widget' => '<div class="single-sidebar-wrap">',
// 			'after_widget'  => ' </div>',
// 			'before_title'  => '<h2 class="sidebar-title">',
// 			'after_title'   => '</h2>',
// 		)
// 	);

// }
// add_action( 'widgets_init', 'mishawoo_widgets_init' );



require_once get_template_directory() . '/inc/woocommerce-hooks.php';