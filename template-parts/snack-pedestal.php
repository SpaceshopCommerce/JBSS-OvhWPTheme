<?php
  /** Adds new shortcode for Snack Pedestal and registers it to the WPBakery Plugin */

if(!class_exists('Icon_Snack_Pedestal_Shortcode')) {
  class Icon_Snack_Pedestal_Shortcode
  {
    /**
     * Main constructor
     */
    public function __construct()
    {
      // Registers the shortcode in WordPress
      add_shortcode('icon_snack_pedestal', __CLASS__ . '::output');

      // Map shortcode to WPBakery so you can access it in the builder
      if (function_exists('vc_lean_map')) {
        vc_lean_map('icon_snack_pedestal', __CLASS__ . '::map');
      }
    }

    /**
     * Shortcode output
     */
    public static function output($atts, $content = null)
    {
      // Start output buffering
      ob_start();

      $product_category = get_field('product_category');

      // check product_category field and add default value if empty
      if (!$product_category) {
        $product_category = '';
      }
      echo '<div class="w-separator us_custom_c553b43d size_custom" id="pedestal" style="height:155px"><span class="pedestal__title"><span class="pedestal__title-label font--semi">Category: </span><span class="pedestal__title-value font--bold">' . $product_category . '</span> </span></div>';

      // Get the contents of the buffer and end buffering
      $output = ob_get_clean();

      return $output;
    }

    /**
     * Map shortcode to WPBakery
     */
    public static function map()
    {
      return array(
        'name' => esc_html__('Snack Pedestal', 'vs-text-domain'),
        'base' => 'icon_snack_pedestal',
        'category' => esc_html__('ACF Supported', 'vs-text-domain'),
      );
    }
  }
}

new Icon_Snack_Pedestal_Shortcode();