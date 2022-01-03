<?php
add_theme_support( 'post-thumbnails' );

 //=============Enable support for Post Formats==========
add_theme_support('post-formats', array('gallery', 'image', 'video','tags', 'link'));

  //============= Dynamic Search Form==============
add_theme_support('html5',array('search-form'));

//======== Custom Logo & Size ===========
add_theme_support( 'custom-logo');

function hasan_custom_logo_setup() {
 $defaults = array(
 'height'      => 50,
 'width'       => 180,
 'flex-height' => true,
 'flex-width'  => true,
 'header-text' => array( 'site-title', 'site-description' ),
 );
 add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'hasan_custom_logo_setup' );


//======== Single Image Size ===========
add_image_size( 'single-image', 400, 250, true );


//======== Most Popular Post View Count ===========
function count_post_visits() {
   if( is_single() ) {
      global $post;
      $views = get_post_meta( $post->ID, 'my_post_viewed', true );
      if( $views == '' ) {
         update_post_meta( $post->ID, 'my_post_viewed', '1' );
      } else {
         $views_no = intval( $views );
         update_post_meta( $post->ID, 'my_post_viewed', ++$views_no );
      }
   }
}
add_action( 'wp_head', 'count_post_visits' );

//================ Add Multiple sidebar Section ===================
function hasan_widgets_ini() {
  register_sidebar( array(
    'name'          => __( 'Ads In Header Right', 'textdomain' ),
    'id'            => 'main-header-ads',
    'description'   => __( 'Show Ads in Main Header Section', 'textdomain' ),
    'before_widget' => '<div class="main-header-ads">',
    'after_widget'  => '</div>',
) );
// ========Main Header Bottom Ads======

  register_sidebar( array(
    'name'          => __( 'First Footer Column', 'textdomain' ),
    'id'            => 'footer-first',
    'description'   => __( 'Left Column in Footer..', 'textdomain' ),
    'before_widget' => '<div class="footer-logo">',
    'after_widget'  => '</div>',
  ) );
  // ========First Footer Column ======

  register_sidebar( array(
    'name'          => __( 'Secound Footer Column', 'textdomain' ),
    'id'            => 'footer-secound',
    'description'   => __( 'Left-Midle Column in Footer...', 'textdomain' ),
    'before_widget' => '<div class="footer-text">',
    'after_widget'  => '</div>',
  ) );
  // ========Secound Footer Column======

  register_sidebar( array(
    'name'          => __( 'Third Footer Column', 'textdomain' ),
    'id'            => 'footer-third',
    'description'   => __( 'Right-Middle Column in Footer..', 'textdomain' ),
    'before_widget' => '<div class="footer-text">',
    'after_widget'  => '</div>',
  ) );
  // ========Third Footer Column======

  register_sidebar( array(
    'name'          => __( 'Fourth Footer Column', 'textdomain' ),
    'id'            => 'footer-fourth',
    'description'   => __( 'Right Column in Footer..', 'textdomain' ),
    'before_widget' => '<div class="footer-app">',
    'after_widget'  => '</div>',
  ) );
  // ========Fourth Footer Column======

  register_sidebar( array(
    'name'          => __( 'Copyright Section', 'textdomain' ),
    'id'            => 'footer-copyright',
    'description'   => __( 'Add our copyright text here..', 'textdomain' ),
    'before_widget' => '<div class="text-center copyright">',
    'after_widget'  => '</div>',
  ) );
  // ========Copyright Footer Column======
  
    register_sidebar( array(
    'name'          => __( 'Home First Sidebar', 'textdomain' ),
    'id'            => 'home-sidebar',
    'description'   => __( 'Customize Your Home Page Right Sidebar...', 'textdomain' ),
    'before_widget' => '<div class="main-sidebar my-2">',
    'after_widget'  => '</div>',
  ) );
  // ========Home Page Right Sidebar======

  register_sidebar( array(
    'name'          => __( 'Main Sidebar', 'textdomain' ),
    'id'            => 'main-sidebar',
    'description'   => __( 'Customize Your Main Right Sidebar...', 'textdomain' ),
    'before_widget' => '<div class="main-sidebar my-2">',
    'after_widget'  => '</div>',
  ) );
  // ========Main Right Sidebar======
  
  register_sidebar( array(
    'name'          => __( 'Post Page Left Sidebar', 'textdomain' ),
    'id'            => 'single-left-sidebar',
    'description'   => __( 'Post Page Left Sidebar Ads...', 'textdomain' ),
    'before_widget' => '<div class="lef-sidebar-ads">',
    'after_widget'  => '</div>',
  ) );
  // ========Single Left Sidebar Ads======
  
  register_sidebar( array(
    'name'          => __( 'Single Page Right Sidebar', 'textdomain' ),
    'id'            => 'single-right-sidebar',
    'description'   => __( 'Customize Your Main Right Sidebar...', 'textdomain' ),
    'before_widget' => '<div class="main-sidebar my-2">',
    'after_widget'  => '</div>',
  ) );
  // ========Single Right Sidebar======


}
add_action( 'widgets_init', 'hasan_widgets_ini' );