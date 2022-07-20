<?php

/**
 * Enqueue scripts and styles.
 */
function msa_scripts() {
    $uri                =   get_theme_file_uri();
    $ver                =   KS_DEV_MODE ? time() : _S_VERSION;

    //register_style
    wp_register_style('msa-font-awesome',$uri . '/assets/css/font-awesome.min.css', [], $ver);
    wp_register_style( 'msa-theme-font', $uri . '/assets/css/fonts.css', [], $ver );
    wp_register_style( 'msa-bootstrap', $uri . '/assets/css/bootstrap.min.css', [], $ver );
    wp_register_style( 'msa-slick', $uri . '/assets/css/slick.css', [], $ver );
    wp_register_style( 'msa-slick-theme', $uri . '/assets/css/slick-theme.css', [], $ver );
    wp_register_style( 'msa-aos', $uri . '/assets/css/aos.css', [], $ver );
    wp_register_style( 'msa-magnific-pop-up', $uri . '/assets/css/magnific-popup.css', [], $ver );
    wp_register_style( 'msa-theme', $uri . '/assets/css/theme.css', [], $ver );
    wp_register_style( 'msa-style',  get_stylesheet_uri(), array(), $ver );

    //enqueue style
    wp_enqueue_style( 'msa-font-awesome' );
    wp_enqueue_style( 'msa-theme-font' );
    wp_enqueue_style( 'msa-bootstrap' );
    wp_enqueue_style( 'msa-slick' );
    wp_enqueue_style( 'msa-slick-theme' );
    wp_enqueue_style( 'msa-aos' );
    wp_enqueue_style( 'msa-magnific-pop-up' );
    wp_enqueue_style( 'msa-theme' );
    wp_enqueue_style( 'msa-style' );
//    wp_style_add_data( 'msa-style', 'rtl', 'replace' );


    //register script
    wp_enqueue_script("jquery");

    wp_register_script( 'msa-navigation', $uri . '/assets/js/navigation.js', [], $ver, true );
    wp_register_script( 'msa-popper', $uri . '/assets/js/popper.min.js', ['jquery'], $ver, true );
    wp_register_script( 'msa-bootstrap', $uri . '/assets/js/bootstrap.min.js', ['jquery'], $ver, true );
    wp_register_script( 'msa-slick', $uri . '/assets/js/slick.min.js', ['jquery'], $ver, true );
    wp_register_script( 'msa-parallax', $uri . '/assets/js/parallax.min.js', ['jquery'], $ver, true );
    wp_register_script( 'msa-aos', $uri . '/assets/js/aos.js', ['jquery'], $ver, true );
    wp_register_script( 'msa-image-loaded', $uri . '/assets/js/imagesloaded.pkgd.min.js', ['jquery'], $ver, true );
    wp_register_script( 'msa-masonry', $uri . '/assets/js/masonry.pkgd.min.js', ['jquery'], $ver, true );
    wp_register_script( 'msa-magnific-pop-up', $uri . '/assets/js/jquery.magnific-popup.js', ['jquery'], $ver, true );
    wp_register_script( 'msa-scripts', $uri . '/assets/js/scripts.js', ['jquery'], $ver, true );


    //enqueue script
    wp_enqueue_script('msa-navigation');
    wp_enqueue_script('msa-popper');
    wp_enqueue_script('msa-bootstrap');
    wp_enqueue_script('msa-slick');
    wp_enqueue_script('msa-parallax');
    wp_enqueue_script('msa-aos');
    wp_enqueue_script('msa-image-loaded');
    wp_enqueue_script('msa-masonry');
    wp_enqueue_script('msa-magnific-pop-up');
    wp_enqueue_script('msa-scripts');

    //load more script starts
    wp_register_script( 'msa-load-more', get_template_directory_uri() . '/assets/js/load-more.js', array('jquery'), $ver, true );
    wp_enqueue_script('msa-load-more');
    wp_localize_script( 'msa-load-more', 'ajax_posts', array(
        'ajaxurl' => admin_url( 'admin-ajax.php' ),
        'noposts' => __('No older posts found', 'msa'),
    ));
    //load more script ends


    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'msa_scripts' );