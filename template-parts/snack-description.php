<?php

/** Adds a new shortcode for Snack Description and registers it to theh WPBakery plugin */

if (!class_exists('Icon_Snack_Description_Shortcode')) {
  class Icon_Snack_Description_Shortcode
  {
    /**
     * Main constructor
     */
    public function __construct()
    {
      // Registers the shortcode in WordPress
      add_shortcode('icon_snack_description', __CLASS__ . '::output');

      // Map shortcode to WPBakery so you can access it in the builder
      if (function_exists('vc_lean_map')) {
        vc_lean_map('icon_snack_description', __CLASS__ . '::map');
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
      if (have_rows('product_description')) {
        $font_size = get_field('product_description_font_size'); // Get the font-size field value
        $font_size_unit = 'px';
        $font_size_full = $font_size . $font_size_unit;

        echo '<h2 id="product-ingredients" style="font-size: ' . esc_attr($font_size_full) . '">';

        // Loop through rows of data
        while (have_rows('product_description')) : the_row();
          // Display a sub field value
          $text = get_sub_field('description_text');
          echo '<span class="line" style="font-size: ' . esc_attr($font_size_full) . '!important;">' . esc_html($text) . '</span>';
        endwhile;

        echo '</h2>';
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
        'name' => esc_html__('Snack Description', 'vs-text-domain'),
        'base' => 'icon_snack_description',
        'category' => esc_html__('ACF Supported', 'vs-text-domain'),
      );
    }
  }
}
new Icon_Snack_Description_Shortcode();
