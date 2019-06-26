<?php 
/*
Plugin Name: Social WarFare Optimizer
Plugin URI: https://www.sertmedia.com
Description: This plugin only loads Social WarFare CSS & JavaScript On posts.
Version: 1.0
Author: SERT Media
Author URI: https://www.sertmedia.com
*/

function sertmedia_remove_social_warfare_junk() {
    if (! is_singular('post') ) {
          wp_dequeue_style('social-warfare-block-css');
          wp_dequeue_style('social_warfare');
          wp_dequeue_script('social_warfare_script');
		  add_filter( 'swp_header_html', '__return_false', PHP_INT_MAX );
     }
}     

add_action( 'wp_enqueue_scripts', 'sertmedia_remove_social_warfare_junk' );