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



//  // Custom Post Type
//  function chooseus_init() {
//    // set up product labels
//    $labels = array(
//        'name' => 'chooseus',
//        'singular_name' => 'chooseus',
//        'add_new' => 'Add New chooseus',
//        'add_new_item' => 'Add Newchooseus',
//        'edit_item' => 'Edit chooseus',
//        'new_item' => 'New chooseus',
//        'all_items' => 'All chooseus',
//        'view_item' => 'View chooseus',
//        'search_items' => 'Search chooseus',
//        'not_found' =>  'No chooseus Found',
//        'not_found_in_trash' => 'No chooseus found in Trash', 
//        'parent_item_colon' => '',
//        'menu_name' => 'chooseus',
//    );
   
//    // register post type
//    $args = array(
//        'labels' => $labels,
//        'public' => true,
//        'has_archive' => true,
//        'show_ui' => true,
//        'capability_type' => 'post',
//        'hierarchical' => false,
//        'rewrite' => array('slug' => 'chooseus'),
//        'query_var' => true,
//        'menu_icon' => 'dashicons-editor-customchar',
//        'supports' => array(
//            'title',
//            'editor',
//            'excerpt',
//            'trackbacks',
//            'custom-fields',
//            'comments',
//            'revisions',
//            'thumbnail',
//            'author',
//            'page-attributes'
//        )
//    );
//    register_post_type( 'chooseus', $args );
   
//    // register taxonomy
//    register_taxonomy('chooseus_category', 'chooseus', array('hierarchical' => true, 'label' => 'category', 'query_var' => true, 'rewrite' => array( 'slug' => 'chooseus-category' )));
// }
// add_action( 'init', 'chooseus_init' );