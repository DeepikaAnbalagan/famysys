<?php
function my_theme_enqueue_styles() {
   $parent_style = 'twentytwentyone-style'; 
   $child_style = 'twentytwentyone-child-style';
   wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
   wp_enqueue_style( $child_style, get_stylesheet_uri() );
}

//custom menu 
function wpb_custom_new_menu() {
	register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
  }
  add_action( 'init', 'wpb_custom_new_menu' );

  //footer custom widget
  function wpb_widgets_init() {
 
    register_sidebar( array(
        'name'          => 'custom footer address',
        'id'            => 'footeraddress',
        'before_widget' => '<div class="chw-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="chw-title">',
        'after_title'   => '</h2>',
     ) );
 
}
add_action( 'widgets_init', 'wpb_widgets_init' );



 // Feature section Custom Post Type
 function Chooseus_init() {
   // set up product labels
   $labels = array(
       'name' => 'Chooseus',
       'singular_name' => 'Chooseus',
       'add_new' => 'Add New Chooseus',
       'add_new_item' => 'Add New Chooseus',
       'edit_item' => 'Edit Chooseus',
       'new_item' => 'New Chooseus',
       'all_items' => 'All Chooseus',
       'view_item' => 'View Chooseus',
       'search_items' => 'Search Chooseus',
       'not_found' =>  'No Chooseus Found',
       'not_found_in_trash' => 'No Chooseus found in Trash', 
       'parent_item_colon' => '',
       'menu_name' => 'Chooseus',
   );
   
   // register post type
   $args = array(
       'labels' => $labels,
       'public' => true,
       'has_archive' => true,
       'show_ui' => true,
       'capability_type' => 'post',
       'hierarchical' => false,
       'rewrite' => array('slug' => 'Chooseus'),
       'query_var' => true,
       'menu_icon' => 'dashicons-editor-customchar',
       'supports' => array(
           'title',
           'editor',
           'excerpt',
           'trackbacks',
           'custom-fields',
           'comments',
           'revisions',
           'thumbnail',
           'author',
           'page-attributes'
       )
   );
   register_post_type( 'Chooseus', $args );
   
   // register taxonomy
   register_taxonomy('Chooseus_category', 'Chooseus', array('hierarchical' => true, 'label' => 'category', 'query_var' => true, 'rewrite' => array( 'slug' => 'Chooseus-category' )));
}
add_action( 'init', 'Chooseus_init' );
//end




// Aboutus section Custom Post Type
function AboutUs_init() {
   // set up product labels
   $labels = array(
       'name' => 'AboutUs',
       'singular_name' => 'AboutUs',
       'add_new' => 'Add New AboutUs',
       'add_new_item' => 'Add New AboutUs',
       'edit_item' => 'Edit AboutUs',
       'new_item' => 'NewAboutUs',
       'all_items' => 'All AboutUs',
       'view_item' => 'View AboutUs',
       'search_items' => 'Search AboutUs',
       'not_found' =>  'No AboutUs Found',
       'not_found_in_trash' => 'No AboutUs found in Trash', 
       'parent_item_colon' => '',
       'menu_name' => 'AboutUs',
   );
   
   // register post type
   $args = array(
       'labels' => $labels,
       'public' => true,
       'has_archive' => true,
       'show_ui' => true,
       'capability_type' => 'post',
       'hierarchical' => false,
       'rewrite' => array('slug' => 'AboutUs'),
       'query_var' => true,
       'menu_icon' => 'dashicons-editor-customchar',
       'supports' => array(
           'title',
           'editor',
           'excerpt',
           'trackbacks',
           'custom-fields',
           'comments',
           'revisions',
           'thumbnail',
           'author',
           'page-attributes'
       )
   );
   register_post_type( 'AboutUs', $args );
   
   // register taxonomy
   register_taxonomy('AboutUs_category', 'AboutUs', array('hierarchical' => true, 'label' => 'category', 'query_var' => true, 'rewrite' => array( 'slug' => 'AboutUs-category' )));
}
add_action( 'init', 'AboutUs_init' );
//end

// services section Custom Post Type
function  Services_init() {
   // set up product labels
   $labels = array(
       'name' => 'Services',
       'singular_name' => 'Services',
       'add_new' => 'Add New Services',
       'add_new_item' => 'Add New Services',
       'edit_item' => 'Edit Services',
       'new_item' => 'New Services',
       'all_items' => 'All Services',
       'view_item' => 'View Services',
       'search_items' => 'Search Services',
       'not_found' =>  'No Services Found',
       'not_found_in_trash' => 'No Services found in Trash', 
       'parent_item_colon' => '',
       'menu_name' => 'Services',
   );
   
   // register post type
   $args = array(
       'labels' => $labels,
       'public' => true,
       'has_archive' => true,
       'show_ui' => true,
       'capability_type' => 'post',
       'hierarchical' => false,
       'rewrite' => array('slug' => 'Services'),
       'query_var' => true,
       'menu_icon' => 'dashicons-editor-customchar',
       'supports' => array(
           'title',
           'editor',
           'excerpt',
           'trackbacks',
           'custom-fields',
           'comments',
           'revisions',
           'thumbnail',
           'author',
           'page-attributes'
       )
   );
   register_post_type( 'Services', $args );
   
   // register taxonomy
   register_taxonomy('Services_category', 'services', array('hierarchical' => true, 'label' => 'category', 'query_var' => true, 'rewrite' => array( 'slug' => 'Services-category' )));
}
add_action( 'init', 'Services_init' );


//end


//testimonial section Custom Post Type
function Testimonials_init() {
   // set up product labels
   $labels = array(
       'name' => 'Testimonials',
       'singular_name' => 'Testimonials',
       'add_new' => 'Add New Testimonials',
       'add_new_item' => 'Add New Testimonials',
       'edit_item' => 'Edit Testimonials',
       'new_item' => 'New Testimonials',
       'all_items' => 'All Testimonials',
       'view_item' => 'View Testimonials',
       'search_items' => 'Search Testimonials',
       'not_found' =>  'No Testimonials Found',
       'not_found_in_trash' => 'No Testimonials found in Trash', 
       'parent_item_colon' => '',
       'menu_name' => 'Testimonials',
   );
   
   // register post type
   $args = array(
       'labels' => $labels,
       'public' => true,
       'has_archive' => true,
       'show_ui' => true,
       'capability_type' => 'post',
       'hierarchical' => false,
       'rewrite' => array('slug' => 'Testimonials'),
       'query_var' => true,
       'menu_icon' => 'dashicons-editor-customchar',
       'supports' => array(
           'title',
           'editor',
           'excerpt',
           'trackbacks',
           'custom-fields',
           'comments',
           'revisions',
           'thumbnail',
           'author',
           'page-attributes'
       )
   );
   register_post_type( 'Testimonials', $args );
   
   // register taxonomy
   register_taxonomy('Testimonials_category', 'Testimonials', array('hierarchical' => true, 'label' => 'category', 'query_var' => true, 'rewrite' => array( 'slug' => 'Testimonials-category' )));
}
add_action( 'init', 'Testimonials_init' );

//end


//ourteam section Custom Post Type
function ourteam_init() {
   // set up product labels
   $labels = array(
       'name' => 'Ourteam',
       'singular_name' => 'Ourteam',
       'add_new' => 'Add New ourteam',
       'add_new_item' => 'Add New Ourteam',
       'edit_item' => 'Edit Ourteam',
       'new_item' => 'New Ourteam',
       'all_items' => 'All Ourteam',
       'view_item' => 'View Ourteam',
       'search_items' => 'Search Ourteam',
       'not_found' =>  'No Ourteam  Found',
       'not_found_in_trash' => 'No Ourteam found in Trash', 
       'parent_item_colon' => '',
       'menu_name' => 'Ourteam',
   );
   
   // register post type
   $args = array(
       'labels' => $labels,
       'public' => true,
       'has_archive' => true,
       'show_ui' => true,
       'capability_type' => 'post',
       'hierarchical' => false,
       'rewrite' => array('slug' => 'Ourteam'),
       'query_var' => true,
       'menu_icon' => 'dashicons-editor-customchar',
       'supports' => array(
           'title',
           'editor',
           'excerpt',
           'trackbacks',
           'custom-fields',
           'comments',
           'revisions',
           'thumbnail',
           'author',
           'page-attributes'
       )
   );
   register_post_type( 'Ourteam', $args );
   
   // register taxonomy
   register_taxonomy('Ourteam_category', 'Ourteam', array('hierarchical' => true, 'label' => 'category', 'query_var' => true, 'rewrite' => array( 'slug' => 'Ourteam-category' )));
}
add_action( 'init', 'Ourteam_init' );

// -end-


//contact address widget
function web_init() {
 
    register_sidebar( array(
        'name'          => 'custom address',
        'id'            => 'customaddress',
        'before_widget' => '<div class="chw-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="chw-title">',
        'after_title'   => '</h2>',
     ) );
 
}
add_action( 'widgets_init', 'web_init' );

// --end--




//blog section Custom Post Type
function Blog_init() {
    // set up product labels
    $labels = array(
        'name' => 'Blog',
        'singular_name' => 'Blog',
        'add_new' => 'Add New Blog',
        'add_new_item' => 'Add New Blog',
        'edit_item' => 'Edit Blog',
        'new_item' => 'New Blog',
        'all_items' => 'All Blog',
        'view_item' => 'View Blog',
        'search_items' => 'Search Blog',
        'not_found' =>  'No Blog  Found',
        'not_found_in_trash' => 'No Blog found in Trash', 
        'parent_item_colon' => '',
        'menu_name' => 'Blog',
    );
    
    // register post type
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'Blog'),
        'query_var' => true,
        'menu_icon' => 'dashicons-editor-customchar',
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'trackbacks',
            'custom-fields',
            'comments',
            'revisions',
            'thumbnail',
            'author',
            'page-attributes'
        )
    );
    register_post_type( 'Blog', $args );
    
    // register taxonomy
    register_taxonomy('Blog_category', 'Blog', array('hierarchical' => true, 'label' => 'category', 'query_var' => true, 'rewrite' => array( 'slug' => 'Blog-category' )));
 }
 add_action( 'init', 'Blog_init' );
 //end




 //Projects section Custom Post Type
function Projects_init() {
    // set up product labels
    $labels = array(
        'name' => 'Projects',
        'singular_name' => 'Projects',
        'add_new' => 'Add New Projects',
        'add_new_item' => 'Add New Projects',
        'edit_item' => 'Edit Projects',
        'new_item' => 'New Projects',
        'all_items' => 'All Projects',
        'view_item' => 'View Projects',
        'search_items' => 'Search Projects',
        'not_found' =>  'No Projects  Found',
        'not_found_in_trash' => 'No Projects found in Trash', 
        'parent_item_colon' => '',
        'menu_name' => 'Projects',
    );
    
    // register post type
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'Projects'),
        'query_var' => true,
        'menu_icon' => 'dashicons-editor-customchar',
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'trackbacks',
            'custom-fields',
            'comments',
            'revisions',
            'thumbnail',
            'author',
            'page-attributes'
        )
    );
    register_post_type( 'Projects', $args );
    
    // register taxonomy
    register_taxonomy('Projects_category', 'Projects', array('hierarchical' => true, 'label' => 'category', 'query_var' => true, 'rewrite' => array( 'slug' => 'Projects-category' )));
 }
 add_action( 'init', 'Projects_init' );





 function wpdocs_get_paginated_links( $query ) {
    // When we're on page 1, 'paged' is 0, but we're counting from 1,
    // so we're using max() to get 1 instead of 0
    $currentPage = max( 1, get_query_var( 'paged', 1 ) );
 
    // This creates an array with all available page numbers, if there
    // is only *one* page, max_num_pages will return 0, so here we also
    // use the max() function to make sure we'll always get 1
    $pages = range( 1, max( 1, $query->max_num_pages ) );
 
    // Now, map over $pages and return the page number, the url to that
    // page and a boolean indicating whether that number is the current page
    return array_map( function( $page ) use ( $currentPage ) {
        return ( object ) array(
            "isCurrent" => $page == $currentPage,
            "page" => $page,
            "url" => get_pagenum_link( $page )
        );
    }, $pages );
}