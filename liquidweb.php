<?php
/**
 * Plugin Name:       Liquid Web Managed WordPress
 * Plugin URI:        http://liquidweb.com/wordpress
 * Description:       This plugin is used by Liquid Web Heroic&reg; Support to help us manage your WordPress site.
 * Version:           0.0.1
 * Author:            Liquid Web Inc.
 * Author URI:        http://liquidweb.com
 */
// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}
add_action('wp_footer', 'lw_display_canary');
function lw_display_canary() {
  # md5 "This is a canary in a coal mine."
  echo '<!-- This is a comment placed to ensure that the whole page has rendered. eedc1142a130167de1cd2dcf24247e11 -->';
}
