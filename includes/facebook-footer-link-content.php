<?php
/**
 * Created by PhpStorm.
 * User: Julian
 * Date: 21/08/2018
 * Time: 2:01 PM
 */

function ffl_add_footer( $content ) {

	$footer_output = '<hr />';
	$footer_output .= '<div class="footer-content">';
	$footer_output .= '<span class="dashicons dash-icons-facebook"></span> <a href="https://facebook.com" target="_blank">Find me on Facebook</a>';
	$footer_output .= '</div>';

	return $content . $footer_output;
}

add_filter( 'the_content', 'ffl_add_footer' );