<?php
// Replaces the excerpt "Read More" text by a link
function new_excerpt_more($more) {
	global $post;
 return ' <a class="moretag" href="'. get_permalink($post->ID) . '">Read More</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');


function my_custom_sidebar() {
    register_sidebar(
        array (
            'name' => __( 'Custom', 'your-theme-domain' ),
            'id' => 'custom-side-bar',
            'description' => __( 'Custom Sidebar', 'your-theme-domain' ),
            'before_widget' => '<div class="widget-content">',
            'after_widget' => "</div>",
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        )
    );
}
add_action( 'widgets_init', 'my_custom_sidebar' );

function mortal_theme() {
	wp_enqueue_style( 'twentytwenty-child-load-fa', get_stylesheet_directory_uri() . '/assets/css/font-awesome.min.css');
}
add_action( 'wp_enqueue_scripts', 'mortal_theme' );