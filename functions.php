<?php

    require_once 'inc/Twitter.php';

    add_filter('xmlrpc_enabled', '__return_false');
    remove_action('wp_head', 'rsd_link'); //removes EditURI/RSD (Really Simple Discovery) link.
    remove_action('wp_head', 'wlwmanifest_link'); //removes wlwmanifest (Windows Live Writer) link.
    remove_action('wp_head', 'wp_generator'); //removes meta name generator.
    remove_action('wp_head', 'wp_shortlink_wp_head'); //removes shortlink.
    remove_action( 'wp_head', 'feed_links', 2 ); //removes feed links.
    remove_action('wp_head', 'feed_links_extra', 3 );  //removes comments feed. 

    //remove wp version
    function theme_remove_version() {
        return '';
    }
    add_filter('the_generator', 'theme_remove_version');



    function impact_files() {
        // Fonts
        wp_enqueue_style('impact-font-awesome', '//use.fontawesome.com/releases/v5.0.13/css/all.css');
        wp_enqueue_style('impact-play', get_theme_file_uri('/fonts/Play.css'));
        //_enqueue_style('impact-fut', get_theme_file_uri('/fonts/Fut.css'));

        // CSS
        wp_enqueue_style('impact-bootstrap', get_theme_file_uri('/css/bootstrap.min.css'));
        wp_enqueue_style('impact-landing', get_theme_file_uri('/css/landing.css'));
        wp_enqueue_style('impact-main-style', get_stylesheet_uri());

        // JavaScript
        wp_enqueue_script('impact-jquery-javascript', get_theme_file_uri('/js/jquery-1.12.4.min.js'));
        wp_enqueue_script('impact-bootstrap-javascript', get_theme_file_uri('/js/bootstrap.min.js'),[],false,true);
        wp_enqueue_script('impact-landing-javascript', get_theme_file_uri('/js/landing.js'),[],false,true);
    }

    add_action('wp_enqueue_scripts', 'impact_files');


    function impact_features() {
        // Menus
        register_nav_menu('header-services-menu', 'Header Services Menu');
        register_nav_menu('header-news-menu', 'Header News Menu');

        //Courier Navigator Links

        // Tags
        add_theme_support('title-tag');
    }

    add_action('after_setup_theme', 'impact_features');

    // function wpb_widgets_init() {
 
    //     register_sidebar( array(
    //         'name'          => 'Custom Header Widget Area',
    //         'id'            => 'custom-header-widget',
    //         'before_widget' => '<div class="chw-widget">',
    //         'after_widget'  => '</div>',
    //         'before_title'  => '<h2 class="chw-title">',
    //         'after_title'   => '</h2>',
    //     ) );
     
    // }
    // add_action( 'widgets_init', 'wpb_widgets_init' );
    