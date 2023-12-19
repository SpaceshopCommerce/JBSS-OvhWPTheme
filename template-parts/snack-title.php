<?php

/** Adds new shortcode for Snack Title and registers it to the WPBakery plugin */

if (!class_exists('Icon_Snack_Title_Shortcode')) {
  class Icon_Snack_Title_Shortcode
  {
    /**
     * Main constructor
     */
    public function __construct()
    {
      // Registers the shortcode in WordPress
      add_shortcode('icon_snack_title', __CLASS__ . '::output');

      // Map shortcode to WPBakery so you can access it in the builder
      if (function_exists('vc_lean_map')) {
        vc_lean_map('icon_snack_title', __CLASS__ . '::map');
      }
    }

    /** 
     * Shortcode output 
     */
    public static function output($atts, $content = null)
    {
      // Start output buffering
      ob_start();

      // Check if the repeater field exists
      if (have_rows('product_display_title')) {
        echo '<h1 id="product-title">';

        // Loop through rows of data
        while (have_rows('product_display_title')) : the_row();
          // Display a sub field value
          $text = get_sub_field('text');
          $font_family = get_sub_field('font_family');
          $line_height = get_sub_field('line_height');
          $top_offset = get_sub_field('top_offset');
          $size_value = get_sub_field('font_size');
          $size_unit = 'px';
          $size_full = $size_value . $size_unit;

          $style = "font-size: " . esc_attr($size_full);
          if ($line_height) {
            $style .= "; line-height: " . esc_attr($line_height) . "px";
          }
          if ($top_offset) {
            $style .= "; top: -" . esc_attr($top_offset) . "px";
          }

          echo '<span class="line font--' . esc_attr($font_family) . '" style="' . $style . '">' . esc_html($text) . '</span>';
        endwhile;

        echo '</h1>';
      }

      // Get the contents of the buffer and end buffering
      $output = ob_get_clean();

      return $output;
    }

    /** 
     * Map shortcode to VC
     */
    public static function map()
    {
      return array(
        'name' => esc_html__('Snack Title', 'vs-text-domain'),
        'base' => 'icon_snack_title',
        'category' => esc_html__('ACF Supported', 'vs-text-domain'),
      );
    }
  }
}

new Icon_Snack_Title_Shortcode();
