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
        register_nav_menu('header-destinations-menu', 'Header Destinations Menu');
        // Tags
        add_theme_support('title-tag');
    }
    add_action('after_setup_theme', 'impact_features');

    // -- WPCF7 Repeatable Fields Plugin - Add Button -- //
        function impact_custom_add_button_atts($attributes) 
    {
        // -- Change the attributes of the add button. -- //
        return array_merge($attributes, array(
            'text'                  => '+',
            'additional_classes'    => 'wpcf7-field-group-button-plus'
        ));
    }
    add_filter('wpcf7_field_group_add_button_atts','impact_custom_add_button_atts');

    // -- WPCF7 Repeatable Fields Plugin - Remove Button -- //
    function impact_custom_remove_button_atts($attributes) 
    {
        // -- Change the attributes of the remove button. -- //
        return array_merge($attributes, array(
            'text'                  => '-',
            'additional_classes'    => 'wpcf7-field-group-button-minus'
        ));
    }
    add_filter('wpcf7_field_group_remove_button_atts','impact_custom_remove_button_atts');
	
 // Add Blog Requirements -- Register Sidebar //
    add_theme_support( 'editor-styles' );
    add_theme_support( 'menus' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'align-wide' );
    set_post_thumbnail_size (380, 190);

    function blog_sidebar () {
        register_sidebar(
            array(
                'id' => 'blog_sidebar',
                'name' => __('Main Blog Sidebar'),
                'description' => __('All Sidebar Widgets for the Blog Section of the Webside will be shown here.'),
            )
        );
    }
    function blog_sidebar_search () {
        register_sidebar(
            array(
                'id' => 'blog_sidebar_search',
                'name' => __('Main Blog Sidebar Search'),
                'description' => __('The Sidebar Search.'),
            )
        );
    }
    add_action('widgets_init', 'blog_sidebar');
    add_action('widgets_init', 'blog_sidebar_search');