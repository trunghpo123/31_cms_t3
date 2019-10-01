<?php
/**
 * Plugin Name: Test Add Email New
 * Author: Minh Tien
 * Version: 1.0.0
 */

function myguten_enqueue()
{
    wp_enqueue_script(
        'myguten-script',
        plugins_url('myguten.js', __FILE__),
        array( 'wp-blocks', 'wp-element', 'wp-components' )
    );


    // Gather post data.
//     $my_post = array(
//     'post_email'    => 'My eeeeemail',
//     'post_title'    => 'My post',
//     'post_content'  => 'This is my post.',
//     'post_status'   => 'publish',
//     'post_author'   => 1,
//     'post_category' => array( 8,39 )
// );
 
//     // Insert the post into the database.
//     wp_insert_post($my_post);
}
add_action('enqueue_block_editor_assets', 'myguten_enqueue');
