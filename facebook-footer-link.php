<?php
/**
 * Plugin name: Facebook Footer Link
 * Description: Adds a Facebook profile linke to the end of posts.
 * Version: 1.0
 * Author: Julian Tapping
 */

/* Exit if Accessed Directly */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/* Global Options Variable */
$ffl_options = get_option( 'ffl_settings' );

/* Load Scripts */
require_once( plugin_dir_path( __FILE__ ) . '/includes/facebook-footer-link-scripts.php' );

/* Load Content */
require_once( plugin_dir_path( __FILE__ ) . '/includes/facebook-footer-link-content.php' );

if ( is_admin() ) {

	/* Load Settings */
	require_once( plugin_dir_path( __FILE__ ) . '/includes/facebook-footer-link-settings.php' );
}