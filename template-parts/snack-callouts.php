<?php

/** Adds new shortcode for Snack Calouts and registers it to the WPBakery plugin */

if (!class_exists('Icon_Snack_Callouts_Shortcode')) {
  class Icon_Snack_Callouts_Shortcode
  {
    /**
     * Main constructor
     */
    public function __construct()
    {
      // Registers the shortcode in WordPress
      add_shortcode('icon_snack_callouts', __CLASS__ . '::output');

      // Map shortcode to WPBakery so you can access it in the builder
      if (function_exists('vc_lean_map')) {
        vc_lean_map('icon_snack_callouts', __CLASS__ . '::map');
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
      if (have_rows('product_callouts')) {
        echo '<div id="snack-facts" class="callouts g-cols wpb_row us_custom_32ba380c via_flex valign_top type_default stacking_default">';

        // Loop through rows of data
        while (have_rows('product_callouts')) : the_row();
          // Display a sub field value
          $text = get_sub_field('callout_text');
          $icon = get_sub_field('icon');
          echo '<div class="callout"><img class="callout-icon" src="' . esc_url($icon['url']) . '" alt="' . esc_attr($icon['alt']) . '"><p>' . esc_html($text) . '</p></div>';
        endwhile;

        echo '</div>';
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
        'name' => esc_html__('Snack Callouts', 'vs-text-domain'),
        'base' => 'icon_snack_callouts',
        'category' => esc_html__('ACF Supported', 'vs-text-domain'),
      );
    }
  }
}

new Icon_Snack_Callouts_Shortcode();
