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
        wp_enqueue_style('impact-play', get_theme_file_uri('/fonts/Play.css'));
        // CSS
        wp_enqueue_style('impact-bootstrap', get_theme_file_uri('/css/bootstrap.min.css'));
        wp_enqueue_style('impact-landing', get_theme_file_uri('/css/landing.css'));
        wp_enqueue_style('impact-fa1', get_theme_file_uri('/css/css/fontawesome.css'));
        wp_enqueue_style('impact-fa2', get_theme_file_uri('/css/css/brands.css'));
        wp_enqueue_style('impact-fa3', get_theme_file_uri('/css/css/solid.css'));
        
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
        // Tags
        add_theme_support('title-tag');
    }
    add_action('after_setup_theme', 'impact_features');

    // WPCF7 Repeatable Fields Plugin -- Filters for changing the attributes of the add and remove buttons.
    function impact_custom_add_button_atts($attributes) 
    {
        return array_merge($attributes, array(
            'text'                  => 'Add Piece',
            'additional_classes'    => 'wpcf7-submit'
        ));
    }
    add_filter('wpcf7_field_group_add_button_atts','impact_custom_add_button_atts');

    function impact_custom_remove_button_atts($attributes) 
    {
        return array_merge($attributes, array(
            'text'                  => 'Remove Piece',
            'additional_classes'    => 'wpcf7-submit'
        ));
    }
    add_filter('wpcf7_field_group_remove_button_atts','impact_custom_remove_button_atts');