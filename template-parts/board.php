<?php
/**
 * Adds new shortcode "vs_board" and registers it to
 * the Visual Composer plugin
 *
 */
if ( ! class_exists( 'MyPrefix_Say_Hello_Shortcode' ) ) {

    class MyPrefix_Say_Hello_Shortcode {

        /**
         * Main constructor
         */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'vs_board', __CLASS__ . '::output' );

            // Map shortcode to WPBakery so you can access it in the builder
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'vs_board', __CLASS__ . '::map' );
            }

        }

        /**
         * Shortcode output
         */
        public static function output( $atts, $content = null ) {

            // Extract shortcode attributes (based on the vc_lean_map function - see next function)
            $atts = vc_map_get_attributes( 'vs_board', $atts );


            // Define output and open element div.
            $output = '<div class="my-hello-element">';

            // Display custom heading if enabled and set.
            if ( isset( $atts['show_heading'] )
                && 'yes' === $atts['show_heading']
                && ! empty( $atts['heading'] )
            ) {
                $output .= '<h2 class="my-hello-element__heading">' . esc_html( $atts['heading'] ) . '</h2>';
            }

            // Display content.
            $output .= '<div class="my-hello-element__content">';
            if ( $content ) {
                $output .= wp_kses_post( $content );
            } else {
                $output .= 'Hello';
            }
            $output .= '</div>';

            // Close element.
            $output .= '</div>';


            $frame = wp_get_attachment_image_src($atts['frame'], size: 'full')['0'];
            $logo = wp_get_attachment_image_src($atts['logo'], size: 'full')['0'];
            $image_1 = wp_get_attachment_image_src($atts['image_1'], size: 'full')['0'];
            $image_2 = wp_get_attachment_image_src($atts['image_2'], size: 'full')['0'];
            $image_3 = wp_get_attachment_image_src($atts['image_3'], size: 'full')['0'];
            $image_4 = wp_get_attachment_image_src($atts['image_4'], size: 'full')['0'];
            $image_5 = wp_get_attachment_image_src($atts['image_5'], size: 'full')['0'];
            $image_6 = wp_get_attachment_image_src($atts['image_6'], size: 'full')['0'];
            $image_7 = wp_get_attachment_image_src($atts['image_7'], size: 'full')['0'];
            $image_8 = wp_get_attachment_image_src($atts['image_8'], size: 'full')['0'];

//            $link_text_1 = $atts['link_text_1'];
            $link_image_1 = wp_get_attachment_image_src($atts['link_image_1'], size: 'full')['0'];
            $link_1 = vc_build_link($atts['link_1'])['url'];
            $link_image_2 = wp_get_attachment_image_src($atts['link_image_2'], size: 'full')['0'];
            $link_2 = vc_build_link($atts['link_2'])['url'];
            $link_image_3 = wp_get_attachment_image_src($atts['link_image_3'], size: 'full')['0'];
            $link_3 = vc_build_link($atts['link_3'])['url'];




            $output = '<div class="impact-board">';

                $output .= '<div class="board-logo-link">';
                    $output .= '<div class="board-logo"><img src="' . $logo . '"></div>';
                    $output .= '<a href="' . $link_1 . '"><div class="board-link board-link-1"><img src="' . $link_image_1 . '"></div></a>';
                $output .= '</div>';

                $output .= '<div class="board-frame board-1" style="background-image: url(' . $frame . ')">';
                    $output .= '<div class="board-frame-inner"></div>';
                    $output .= '<div class="board-pin"></div>';
                    $output .= '<div class="board-frame-image" style="background-image: url(' . $image_1 . ')"></div>';
                    $output .= '<div class="board-frame-text brice-black-semicondensed">' . $atts['caption_1'] . '</div>';
                $output .= '</div>';

                $output .= '<div class="board-frame board-2" style="background-image: url(' . $frame . ')">';
                    $output .= '<div class="board-frame-inner"></div>';
                    $output .= '<div class="board-pin"></div>';
                    $output .= '<div class="board-frame-image" style="background-image: url(' . $image_2 . ')"></div>';
                    $output .= '<div class="board-frame-text brice-black-semicondensed">' . $atts['caption_2'] . '</div>';
                $output .= '</div>';

                $output .= '<div class="board-frame board-3" style="background-image: url(' . $frame . ')">';
                    $output .= '<div class="board-frame-inner"></div>';
                    $output .= '<div class="board-pin"></div>';
                    $output .= '<div class="board-frame-image" style="background-image: url(' . $image_3 . ')"></div>';
                    $output .= '<div class="board-frame-text brice-black-semicondensed">' . $atts['caption_3'] . '</div>';
                $output .= '</div>';


                $output .= '<a href="' . $link_2 . '"><div class="board-link board-link-2"><img src="' . $link_image_2 . '"></div></a>';

                $output .= '<div class="board-frame board-4" style="background-image: url(' . $frame . ')">';
                    $output .= '<div class="board-frame-inner"></div>';
                    $output .= '<div class="board-pin"></div>';
                    $output .= '<div class="board-frame-image" style="background-image: url(' . $image_4 . ')"></div>';
                    $output .= '<div class="board-frame-text brice-black-semicondensed">' . $atts['caption_4'] . '</div>';
                $output .= '</div>';

                $output .= '<div class="board-frame board-5" style="background-image: url(' . $frame . ')">';
                    $output .= '<div class="board-frame-inner"></div>';
                    $output .= '<div class="board-pin"></div>';
                    $output .= '<div class="board-frame-image" style="background-image: url(' . $image_5 . ')"></div>';
                    $output .= '<div class="board-frame-text brice-black-semicondensed">' . $atts['caption_5'] . '</div>';
                $output .= '</div>';

                $output .= '<div class="board-poster board-6"">';
                    $output .= '<img class="board-poster-image" src="' . $image_6 . '">';
                $output .= '</div>';


                $output .= '<a href="' . $link_3 . '"><div class="board-link board-link-3"><img src="' . $link_image_3 . '"></div></a>';

                $output .= '<div class="board-poster board-7"">';
                    $output .= '<img class="board-poster-image" src="' . $image_7 . '">';
                $output .= '</div>';

                $output .= '<div class="board-poster board-8"">';
                    $output .= '<img class="board-poster-image" src="' . $image_8 . '">';
                $output .= '</div>';


            $output .= '</div>';

            // Return output
            return $output;

        }

        /**
         * Map shortcode to WPBakery
         *
         * This is an array of all your settings which become the shortcode attributes ($atts)
         * for the output. See the link below for a description of all available parameters.
         *
         * @since 1.0.0
         * @link  https://kb.wpbakery.com/docs/inner-api/vc_map/
         */
        public static function map() {
            return array(
                'name'        => esc_html__( 'Impact Board', 'locale' ),
                'description' => esc_html__( 'Shows the impact board', 'locale' ),
                'base'        => 'vs_board',
                'params'      => array(

                    array(
                        'type'       => 'attach_image',
                        'heading'    => esc_html__( 'Frame', 'locale' ),
                        'param_name' => 'frame',
                    ),
                    array(
                        'type'       => 'attach_image',
                        'heading'    => esc_html__( 'Logo', 'locale' ),
                        'param_name' => 'logo',
                    ),
                    array(
                        'type'       => 'attach_image',
                        'heading'    => esc_html__( 'Image 1', 'locale' ),
                        'param_name' => 'image_1',
                    ),
                    array(
                        'type'       => 'textfield',
                        'heading'    => esc_html__( 'Caption 1', 'locale' ),
                        'param_name' => 'caption_1',
                    ),

                    array(
                        'type'       => 'attach_image',
                        'heading'    => esc_html__( 'Image 2', 'locale' ),
                        'param_name' => 'image_2',
                    ),
                    array(
                        'type'       => 'textfield',
                        'heading'    => esc_html__( 'Caption 2', 'locale' ),
                        'param_name' => 'caption_2',
                    ),

                    array(
                        'type'       => 'attach_image',
                        'heading'    => esc_html__( 'Image 3', 'locale' ),
                        'param_name' => 'image_3',
                    ),
                    array(
                        'type'       => 'textfield',
                        'heading'    => esc_html__( 'Caption 3', 'locale' ),
                        'param_name' => 'caption_3',
                    ),
                    array(
                        'type'       => 'attach_image',
                        'heading'    => esc_html__( 'Image 4', 'locale' ),
                        'param_name' => 'image_4',
                    ),
                    array(
                        'type'       => 'textfield',
                        'heading'    => esc_html__( 'Caption 4', 'locale' ),
                        'param_name' => 'caption_4',
                    ),

                    array(
                        'type'       => 'attach_image',
                        'heading'    => esc_html__( 'Image 5', 'locale' ),
                        'param_name' => 'image_5',
                    ),
                    array(
                        'type'       => 'textfield',
                        'heading'    => esc_html__( 'Caption 5', 'locale' ),
                        'param_name' => 'caption_5',
                    ),



                    array(
                        'type'       => 'attach_image',
                        'heading'    => esc_html__( 'Image 6', 'locale' ),
                        'param_name' => 'image_6',
                    ),
                    array(
                        'type'       => 'attach_image',
                        'heading'    => esc_html__( 'Image 7', 'locale' ),
                        'param_name' => 'image_7',
                    ),
                    array(
                        'type'       => 'attach_image',
                        'heading'    => esc_html__( 'Image 8', 'locale' ),
                        'param_name' => 'image_8',
                    ),


//                    array(
//                        'type'       => 'textfield',
//                        'heading'    => esc_html__( 'Link Text 1', 'locale' ),
//                        'param_name' => 'link_text_1',
//                    ),

                    array(
                        'type'       => 'attach_image',
                        'heading'    => esc_html__( 'Link Image 1', 'locale' ),
                        'param_name' => 'link_image_1',
                    ),
                    array(
                        'type'       => 'vc_link',
                        'heading'    => esc_html__( 'Link 1', 'locale' ),
                        'param_name' => 'link_1',
                    ),
                    array(
                        'type'       => 'attach_image',
                        'heading'    => esc_html__( 'Link Image 2', 'locale' ),
                        'param_name' => 'link_image_2',
                    ),
                    array(
                        'type'       => 'vc_link',
                        'heading'    => esc_html__( 'Link 2', 'locale' ),
                        'param_name' => 'link_2',
                    ),
                    array(
                        'type'       => 'attach_image',
                        'heading'    => esc_html__( 'Link Image 3', 'locale' ),
                        'param_name' => 'link_image_3',
                    ),
                    array(
                        'type'       => 'vc_link',
                        'heading'    => esc_html__( 'Link 3', 'locale' ),
                        'param_name' => 'link_3',
                    ),




//                    array(
//                        'type'       => 'dropdown',
//                        'heading'    => esc_html__( 'Show Heading?', 'locale' ),
//                        'param_name' => 'show_heading',
//                        'value'      => array(
//                            esc_html__( 'No', 'locale' )  => 'no',
//                            esc_html__( 'Yes', 'locale' ) => 'yes',
//                        ),
//                    ),
//                    array(
//                        'type'       => 'textfield',
//                        'heading'    => esc_html__( 'Heading', 'locale' ),
//                        'param_name' => 'heading',
//                        'dependency' => array( 'element' => 'show_heading', 'value' => 'yes' ),
//                    ),
//                    array(
//                        'type'       => 'textarea_html',
//                        'heading'    => esc_html__( 'Custom Text', 'locale' ),
//                        'param_name' => 'content',
//                    ),
                ),
            );
        }

    }

}
new MyPrefix_Say_Hello_Shortcode;