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

  //custom widget
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
 function chooseus_init() {
   // set up product labels
   $labels = array(
       'name' => 'chooseus',
       'singular_name' => 'chooseus',
       'add_new' => 'Add New chooseus',
       'add_new_item' => 'Add Newchooseus',
       'edit_item' => 'Edit chooseus',
       'new_item' => 'New chooseus',
       'all_items' => 'All chooseus',
       'view_item' => 'View chooseus',
       'search_items' => 'Search chooseus',
       'not_found' =>  'No chooseus Found',
       'not_found_in_trash' => 'No chooseus found in Trash', 
       'parent_item_colon' => '',
       'menu_name' => 'chooseus',
   );
   
   // register post type
   $args = array(
       'labels' => $labels,
       'public' => true,
       'has_archive' => true,
       'show_ui' => true,
       'capability_type' => 'post',
       'hierarchical' => false,
       'rewrite' => array('slug' => 'chooseus'),
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
   register_post_type( 'chooseus', $args );
   
   // register taxonomy
   register_taxonomy('chooseus_category', 'chooseus', array('hierarchical' => true, 'label' => 'category', 'query_var' => true, 'rewrite' => array( 'slug' => 'chooseus-category' )));
}
add_action( 'init', 'chooseus_init' );
//end




// Aboutus section Custom Post Type
function aboutus_init() {
   // set up product labels
   $labels = array(
       'name' => 'aboutus',
       'singular_name' => 'aboutus',
       'add_new' => 'Add New aboutus',
       'add_new_item' => 'Add New aboutus',
       'edit_item' => 'Edit aboutus',
       'new_item' => 'New aboutus',
       'all_items' => 'All aboutus',
       'view_item' => 'View aboutus',
       'search_items' => 'Search aboutus',
       'not_found' =>  'No aboutus Found',
       'not_found_in_trash' => 'No aboutus found in Trash', 
       'parent_item_colon' => '',
       'menu_name' => 'aboutus',
   );
   
   // register post type
   $args = array(
       'labels' => $labels,
       'public' => true,
       'has_archive' => true,
       'show_ui' => true,
       'capability_type' => 'post',
       'hierarchical' => false,
       'rewrite' => array('slug' => 'aboutus'),
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
   register_post_type( 'aboutus', $args );
   
   // register taxonomy
   register_taxonomy('aboutus_category', 'aboutus', array('hierarchical' => true, 'label' => 'category', 'query_var' => true, 'rewrite' => array( 'slug' => 'aboutus-category' )));
}
add_action( 'init', 'aboutus_init' );
//end

// services section Custom Post Type
function services_init() {
   // set up product labels
   $labels = array(
       'name' => 'services',
       'singular_name' => 'services',
       'add_new' => 'Add New services',
       'add_new_item' => 'Add New services',
       'edit_item' => 'Edit services',
       'new_item' => 'New services',
       'all_items' => 'All services',
       'view_item' => 'View services',
       'search_items' => 'Search services',
       'not_found' =>  'No services Found',
       'not_found_in_trash' => 'No services found in Trash', 
       'parent_item_colon' => '',
       'menu_name' => 'services',
   );
   
   // register post type
   $args = array(
       'labels' => $labels,
       'public' => true,
       'has_archive' => true,
       'show_ui' => true,
       'capability_type' => 'post',
       'hierarchical' => false,
       'rewrite' => array('slug' => 'services'),
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
   register_post_type( 'services', $args );
   
   // register taxonomy
   register_taxonomy('services_category', 'services', array('hierarchical' => true, 'label' => 'category', 'query_var' => true, 'rewrite' => array( 'slug' => 'services-category' )));
}
add_action( 'init', 'services_init' );


//end


//testimonial section Custom Post Type
function testimonials_init() {
   // set up product labels
   $labels = array(
       'name' => 'testimonials',
       'singular_name' => 'testimonials',
       'add_new' => 'Add New testimonials',
       'add_new_item' => 'Add New testimonials',
       'edit_item' => 'Edit testimonials',
       'new_item' => 'New testimonials',
       'all_items' => 'All testimonials',
       'view_item' => 'View testimonials',
       'search_items' => 'Search testimonials',
       'not_found' =>  'No testimonials Found',
       'not_found_in_trash' => 'No testimonials found in Trash', 
       'parent_item_colon' => '',
       'menu_name' => 'testimonials',
   );
   
   // register post type
   $args = array(
       'labels' => $labels,
       'public' => true,
       'has_archive' => true,
       'show_ui' => true,
       'capability_type' => 'post',
       'hierarchical' => false,
       'rewrite' => array('slug' => 'testimonials'),
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
   register_post_type( 'testimonials', $args );
   
   // register taxonomy
   register_taxonomy('testimonials_category', 'testimonials', array('hierarchical' => true, 'label' => 'category', 'query_var' => true, 'rewrite' => array( 'slug' => 'testimonials-category' )));
}
add_action( 'init', 'testimonials_init' );

//end


//ourteam section Custom Post Type
function ourteam_init() {
   // set up product labels
   $labels = array(
       'name' => 'ourteam',
       'singular_name' => 'ourteam',
       'add_new' => 'Add New ourteam',
       'add_new_item' => 'Add New ourteam',
       'edit_item' => 'Edit ourteam',
       'new_item' => 'New ourteam',
       'all_items' => 'All ourteam',
       'view_item' => 'View ourteam',
       'search_items' => 'Search ourteam',
       'not_found' =>  'No ourteam  Found',
       'not_found_in_trash' => 'No ourteam found in Trash', 
       'parent_item_colon' => '',
       'menu_name' => 'ourteam',
   );
   
   // register post type
   $args = array(
       'labels' => $labels,
       'public' => true,
       'has_archive' => true,
       'show_ui' => true,
       'capability_type' => 'post',
       'hierarchical' => false,
       'rewrite' => array('slug' => 'ourteam'),
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
   register_post_type( 'ourteam', $args );
   
   // register taxonomy
   register_taxonomy('ourteam_category', 'ourteam', array('hierarchical' => true, 'label' => 'category', 'query_var' => true, 'rewrite' => array( 'slug' => 'ourteam-category' )));
}
add_action( 'init', 'ourteam_init' );