<?php

     // styles
    function geekhub_scripts() {
	    wp_enqueue_style( 'geekhub-styles', get_stylesheet_uri() );
    }

    add_action( 'wp_enqueue_scripts', 'geekhub_scripts' );

    // Nav Menu
    register_nav_menus(
       array(
           'main-menu' => 'Main Menu'
       )
    );

    add_theme_support( 'post-thumbnails' );


    function geekhub_customize_register( $wp_customize ) {
        $wp_customize->add_setting( 'header_logo' , array(  // Geekhub Logo
            'transport'   => 'refresh',
        ) );
        $wp_customize->add_setting( 'site_decsription' , array(  // Geekhub Logo
            'transport'   => 'refresh',
        ) );
        $wp_customize->add_setting( 'fb_link' , array(  // Facebook
            'transport'   => 'refresh',
        ) );
        $wp_customize->add_setting( 'vk_link' , array(  // Vkontakte
            'transport'   => 'refresh',
        ) );
        $wp_customize->add_setting( 'tw_link' , array(  // Twitter
            'transport'   => 'refresh',
        ) );
        $wp_customize->add_setting( 'yt_link' , array(  // YouTube
            'transport'   => 'refresh',
        ) );
        $wp_customize->add_setting( 'vimeo_link' , array(  // Vimeo
            'transport'   => 'refresh',
        ) );

        $wp_customize->add_section( 'logo_geekhub' , array(
            'title'      => __( 'GeekHub Logo', 'geekhub' ),
            'priority'   => 30,
        ) );
        $wp_customize->add_section( 'description' , array(
            'title'      => __( 'Site description', 'geekhub' ),
            'priority'   => 30,
        ) );
        $wp_customize->add_section( 'link_menu' , array(
            'title'      => __( 'Social links', 'geekhub' ),
            'priority'   => 30,
        ) );

        $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo', array(
            'label'        => __( 'Logo Image', 'geekhub' ),
            'section'    => 'logo_geekhub',
            'settings'   => 'header_logo',
        ) ) );
        $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'about', array(
            'label'        => __( 'About site', 'geekhub' ),
            'section'    => 'description',
            'settings'   => 'site_decsription',
        ) ) );
        $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fb', array(
            'label'        => __( 'Facebook link', 'geekhub' ),
            'section'    => 'link_menu',
            'settings'   => 'fb_link',
        ) ) );
        $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'vk', array(
            'label'        => __( 'Vkontakte link', 'geekhub' ),
            'section'    => 'link_menu',
            'settings'   => 'vk_link',
        ) ) );
        $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'tw', array(
            'label'        => __( 'Twitter link', 'geekhub' ),
            'section'    => 'link_menu',
            'settings'   => 'tw_link',
        ) ) );
        $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'yt', array(
            'label'        => __( 'YouTube link', 'geekhub' ),
            'section'    => 'link_menu',
            'settings'   => 'yt_link',
        ) ) );
        $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'vimeo', array(
            'label'        => __( 'Vimeo link', 'geekhub' ),
            'section'    => 'link_menu',
            'settings'   => 'vimeo_link',
        ) ) );
    }
    add_action( 'customize_register', 'geekhub_customize_register' );

    // Geekhub courses
    function courses() {
        $labels = array(
            'name'               => _x( 'Our Courses', 'post type general name' ),
            'singular_name'      => _x( 'Course', 'post type singular name' ),
            'add_new'            => _x( 'Add New', 'book' ),
            'add_new_item'       => __( 'Add New Course' ),
            'edit_item'          => __( 'Edit Course' ),
            'new_item'           => __( 'New Course' ),
            'all_items'          => __( 'All Courses' ),
            'view_item'          => __( 'View Courses' ),
            'search_items'       => __( 'Search Course' ),
            'not_found'          => __( 'No courses found' ),
            'not_found_in_trash' => __( 'No courses found in the Trash' ),
            'parent_item_colon'  => '',
            'menu_name'          => 'Courses'
        );
        $args = array(
            'labels'        => $labels,
            'description'   => 'Geekhub courses',
            'public'        => true,
            'menu_position' => 5,
            'supports'      => array( 'title', 'editor', 'thumbnail'),
        );
        register_post_type( 'Courses', $args );
    }
    add_action( 'init', 'courses' );

    // Geekhub team
    function team() {
        $labels = array(
            'name'               => _x( 'Our Team', 'post type general name' ),
            'singular_name'      => _x( 'Member', 'post type singular name' ),
            'add_new'            => _x( 'Add New', 'book' ),
            'add_new_item'       => __( 'Add New Course' ),
            'edit_item'          => __( 'Edit Member' ),
            'new_item'           => __( 'New Member' ),
            'all_items'          => __( 'All Members' ),
            'view_item'          => __( 'View Members' ),
            'search_items'       => __( 'Search Member' ),
            'not_found'          => __( 'No members found' ),
            'not_found_in_trash' => __( 'No members found in the Trash' ),
            'parent_item_colon'  => '',
            'menu_name'          => 'Team'
        );
        $args = array(
            'labels'        => $labels,
            'description'   => 'Geekhub Team',
            'public'        => true,
            'menu_position' => 5,
            'supports'      => array( 'title', 'editor', 'custom-fields', 'thumbnail'),
        );
        register_post_type( 'Team', $args );
    }
    add_action( 'init', 'team' );

    // Geekhub sponsors
    function sponsors() {
        $labels = array(
            'name'               => _x( 'Our Sponsors', 'post type general name' ),
            'singular_name'      => _x( 'Sponsor', 'post type singular name' ),
            'add_new'            => _x( 'Add New', 'book' ),
            'add_new_item'       => __( 'Add New Sponsor' ),
            'edit_item'          => __( 'Edit Sponsor' ),
            'new_item'           => __( 'New Sponsor' ),
            'all_items'          => __( 'All Sponsors' ),
            'view_item'          => __( 'View Sponsors' ),
            'search_items'       => __( 'Search Sponsor' ),
            'not_found'          => __( 'No sponsors found' ),
            'not_found_in_trash' => __( 'No sponsors found in the Trash' ),
            'parent_item_colon'  => '',
            'menu_name'          => 'Sponsors'
        );
        $args = array(
            'labels'        => $labels,
            'description'   => 'Geekhub sponsors',
            'public'        => true,
            'menu_position' => 5,
            'supports'      => array( 'title', 'thumbnail'),
        );
        register_post_type( 'Sponsors', $args );
    }
    add_action( 'init', 'sponsors' );

    function footer_widgets() {
        register_sidebar( array(
            'name' => 'Widgets',
            'class' => 'widgets',
            'before_widget' => '<li>',
            'after_widget' => '</li>',
        ) );
    }
    add_action( 'widgets_init', 'footer_widgets' );


