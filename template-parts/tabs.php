<?php
add_action('vc_after_init', 'render_tabs');

function render_tabs()
{
  // Get the parameters of the vc_tab shortcode
  $shortcode_params = vc_get_shortcode('vc_tta');

  // Find the 'style' parameter
  foreach ($shortcode_params['params'] as &$param) {
    if ($param['param_name'] == 'style') {
      // Add a new style to the 'style' parameter
      $param['value']['New Style'] = 'new_style';
      break;
    }
  }

  // Update the vc_tab shortcode with the new parameter
  vc_map_update('vc_tab', $shortcode_params);
}
