<?php
/**
 * Created by IntelliJ IDEA.
 * User: joelmik
 * Date: 30/11/2016
 * Time: 12:04
 */

function catch_that_image() {
    global $post, $posts;
    $first_img = '';
    ob_start();
    ob_end_clean();
    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
    $first_img = $matches[1][0];

    if(empty($first_img)) {
        $first_img = "noimage";
    }
    return $first_img;
}


function register_my_menus() {
register_nav_menus(
array(
'Home' => __( 'Home' ),
'Diensten' => __( 'Diensten' ),
    'Over' => __( 'Over' ),
    'Contact' => __('Contact')
)
);
}
add_action( 'init', 'register_my_menus' );
