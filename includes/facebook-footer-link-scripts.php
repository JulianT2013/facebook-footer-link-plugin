<?php
/**
 * Created by PhpStorm.
 * User: Julian
 * Date: 21/08/2018
 * Time: 12:57 PM
 */

/* Add Scrips */
function ffl_add_scripts( ) {
	wp_enqueue_style( 'ffl-main-style', plugins_url() . '/facebook-footer-link/css/styles.css' );
	wp_enqueue_script( 'main-script', plugins_url() . 'facebook-footer-link/js/main.js');
}

add_action( 'wp_enqueue_scripts', 'ffl_add_scripts' );