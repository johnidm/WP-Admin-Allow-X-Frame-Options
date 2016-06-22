<?php
/*
Plugin Name: WP Admin Allow X-Frame-Options
Plugin URI: https://github.com/johnidm/wp-admin-allow-x-frame-options
Description: Allow to embed WP admin pages in the iframe HTML tag
Author: Johni Douglas Marangon
Version: 0.0.1
Author URI: http://johnidouglas.com
License: GPLv2+
Text Domain: wp-admin-allow-x-frame-options
*/

remove_action( 'login_init', 'send_frame_options_header', 10, 0 );
remove_action( 'admin_init', 'send_frame_options_header', 10, 0 );

add_action( 'login_init', 'send_origin_frame_options_header', 10, 0 );
add_action( 'admin_init', 'send_origin_frame_options_header', 10, 0 );

function send_origin_frame_options_header() {
    $origin = $_SERVER['HTTP_HOST'];
    @header( 'X-Frame-Options: ' . $origin );
}

?>