<?php

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function msa_widgets_init() {
    register_sidebar(
        array(
            'name'          => esc_html__( 'Sidebar', 'msa' ),
            'id'            => 'sidebar-1',
            'description'   => esc_html__( 'Add widgets here.', 'msa' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
    register_sidebar(
        array(
            'name'          => esc_html__( 'Footer Widget 1', 'msa' ),
            'id'            => 'footer-widget-1',
            'description'   => esc_html__( 'Add widgets here.', 'msa' ),
            'before_widget' => '<div id="%1$s" class="boxes widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
    register_sidebar(
        array(
            'name'          => esc_html__( 'Footer Widget 2', 'msa' ),
            'id'            => 'footer-widget-2',
            'description'   => esc_html__( 'Add widgets here.', 'msa' ),
            'before_widget' => '<div id="%1$s" class="boxes widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
    register_sidebar(
        array(
            'name'          => esc_html__( 'Footer Widget 3', 'msa' ),
            'id'            => 'footer-widget-3',
            'description'   => esc_html__( 'Add widgets here.', 'msa' ),
            'before_widget' => '<div id="%1$s" class="boxes widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}
add_action( 'widgets_init', 'msa_widgets_init' );


