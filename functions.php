<?php
/* Custom functions code goes here. */
require_once 'template-parts/board.php';

// The proper way to enqueue GSAP script in WordPress
// wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer );
function theme_gsap_script()
{
  wp_enqueue_style('maincss', get_stylesheet_directory_uri() . '/css/styles.css?v=' . time(), array(), false, 'all');
  wp_enqueue_style('snack-titles-css', get_stylesheet_directory_uri() . '/css/snack-titles.css?v=' . time(), array(), false, 'all');



  if (is_page('home')) {
    // The core GSAP library
    wp_enqueue_script('gsap-js', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js', array(), false, true);
    // ScrollTrigger - with gsap.js passed as a dependency
    wp_enqueue_script('gsap-st', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/ScrollTrigger.min.js', array('gsap-js'), false, true);
    // Your animation code file - with gsap.js passed as a dependency
    wp_enqueue_script('gsap-js2', get_stylesheet_directory_uri() . '/js/app.js', array('gsap-js'), false, true);
  }

  if (is_page('home-v2')) {
    // The core GSAP library
    wp_enqueue_script('gsap-js', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js', array(), false, true);
    // ScrollTrigger - with gsap.js passed as a dependency
    wp_enqueue_script('gsap-st', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/ScrollTrigger.min.js', array('gsap-js'), false, true);
    // Your animation code file - with gsap.js passed as a dependency
    wp_enqueue_script('gsap-js2', get_stylesheet_directory_uri() . '/js/app2.js', array('gsap-js'), false, true);
  }
}
add_action('wp_enqueue_scripts', 'theme_gsap_script');


// create new snack post type
function create_snack_post_type()
{
  register_post_type(
    'snack',
    array(
      'labels' => array(
        'name' => __('Snacks'),
        'singular_name' => __('Snack'),
      ),
      'public' => true,
      'has_archive' => false,
      'rewrite' => array('slug' => 'snacks'),
      'show_in_rest' => true,
      'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
    )
  );
}

add_action('init', 'create_snack_post_type');


//    function add_css(){
//        wp_enqueue_style( 'maincss', get_template_directory_uri() . '/css/styles.css?v='.time(), array(), false, 'all' );
//    }
//add_action( 'wp_enqueue_styles', 'add_css' );