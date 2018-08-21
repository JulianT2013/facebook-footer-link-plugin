<?php
/**
 * Created by PhpStorm.
 * User: Julian
 * Date: 21/08/2018
 * Time: 2:01 PM
 */

/**
 * @param $content Post content
 *
 * @return string
 */
function ffl_add_footer( $content ) {

	global $ffl_options;

	$footer_output = '<hr />';
	$footer_output .= '<div class="footer-content">';
	$footer_output .= '<span class="dashicons dashicons-facebook"></span> Find me on 
						<a href="' . $ffl_options['facebook-url'] . '" target="_blank" style="color:' . $ffl_options['link_colour'] . ';">Facebook</a>';
	$footer_output .= '</div>';

	if ( $ffl_options['show_in_feed'] ) {
		if ( is_single() || is_home() && $ffl_options['enable'] ) {
			return $content . $footer_output;
		}
	} else {
		if ( is_single() && $ffl_options['enable'] ) {
			return $content . $footer_output;
		}
	}

	return $content;
}

add_filter( 'the_content', 'ffl_add_footer' );