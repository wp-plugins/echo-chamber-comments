<?php
/*
Plugin Name: Echo Chamber Comments
Description: Replace the WordPress comment system with a dummy comment system.
Version: 1.0
Author: Dave McHale
Author URI: http://www.binarytemplar.com
Plugin URI: http://www.binarytemplar.com/echo-chamber-comments
*/

function echo_chamber_comment_template( $comment_template ) {
    global $post;
    if ( !( is_singular() && ( have_comments() || 'open' == $post->comment_status ) ) ) {
        return;
    }

    return dirname(__FILE__) . '/inc/comments.php';
}
add_filter( "comments_template", "echo_chamber_comment_template" );