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


function avs_theme_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Sidebar', 'avs_theme' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Add widgets here to appear in your sidebar.', 'avs_theme' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Content Bottom 1', 'avs_theme' ),
        'id'            => 'sidebar-2',
        'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'avs_theme' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Content Bottom 2', 'avs_theme' ),
        'id'            => 'sidebar-3',
        'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'avs_theme' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'avs_theme_widgets_init' );

