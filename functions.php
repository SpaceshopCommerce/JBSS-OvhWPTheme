<?php
/* Custom functions code goes here. */
require_once 'template-parts/board.php';
require_once 'template-parts/snack-title.php';
require_once 'template-parts/snack-description.php';
require_once 'template-parts/snack-callouts.php';
// The proper way to enqueue GSAP script in WordPress
// wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer );
function theme_gsap_script()
{
  wp_enqueue_style('maincss', get_stylesheet_directory_uri() . '/css/styles.css?v=' . time(), array(), false, 'all');
  // wp_enqueue_style('snack-titles-css', get_stylesheet_directory_uri() . '/css/snack-titles.css?v=' . time(), array(), false, 'all');
  wp_enqueue_style('snack-css', get_stylesheet_directory_uri() . '/css/snacks.css?v=' . time(), array(), false, 'all');

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

  // enqueue snacks.js
  wp_enqueue_script('snacks-js', get_stylesheet_directory_uri() . '/js/snacks.js', array(), false, true);
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

function set_color_variables()
{
  // Check if any of the fields have a value
  $foreground_color = get_field('foreground_color');
  $background_color = get_field('background_color');
  $page_background_color = get_field('page_background_color');

  // Start output only if any field has a value
  if ($foreground_color || $background_color || $page_background_color) {
    echo '<style>:root {';

    if ($foreground_color) {
      echo '--snack-foreground: ' . esc_attr($foreground_color) . ' !important;';
    }
    if ($background_color) {
      echo '--snack-background: ' . esc_attr($background_color) . '!important;';
    }
    if ($page_background_color) {
      echo '--snack-page-background: ' . esc_attr($page_background_color) . '!important;';
    }

    echo '}</style>';
  }
}

// Hook the function to an appropriate action, like wp_head
add_action('wp_head', 'set_color_variables');