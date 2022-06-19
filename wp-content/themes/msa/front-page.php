<?php
/**
 * The front-page template file
 *
 * This is the front page template file in a WordPress theme
 * It is used to display the front page of any site.
 * E.g., it is the landing page and have higher priority than any other page exists for the landing page.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package msa
 */

get_header();
?>
    <main id="front-page" class="site-main">

    <?php

    //  Section Hero Start
    get_template_part( 'template-parts/section', 'hero-front' );
    //  Section Hero End

    //  Section Hero Start
    get_template_part( 'template-parts/section-emergency');
    //  Section Hero End

    //  Section Hero Start
    get_template_part( 'template-parts/section-service');
    //  Section Hero End

    // Section About Starts
    get_template_part( 'template-parts/section-about' );
    // Section About Ends

    // Section Counter Starts
    get_template_part( 'template-parts/section-counter' );
    // Section Counter Ends

    // Section Partner Starts
    get_template_part( 'template-parts/section-partner' );
    // Section Partner Ends

    // Section Project Starts
    get_template_part( 'template-parts/section-project' );
    // Section Project Ends

    // Section Blog Starts
    get_template_part( 'template-parts/section-blog' );
    // Section Blog Ends

    // Section Contact With Map Starts
    get_template_part( 'template-parts/section-contact-with-map' );
    // Section Contact With Map Ends

//    // Section Service Starts
//    get_template_part( 'template-parts/section', 'service',array(
//        'show_counter'  => true,
//        'show_slider'   => true
//    ) );
//    // Section Service Starts
//
//
//    //  Section Intro Start
//    get_template_part( 'template-parts/section', 'intro' );
//    //  Section Intro End
//

//
//    // Section Partner Starts
//    get_template_part( 'template-parts/section', 'partner' );
//    // Section Partner Ends
//
//    // Section Projects Starts
//    get_template_part( 'template-parts/section', 'project' );
//    // Section Projects Ends
//
//

//


    ?>
    <?php get_template_part( 'template-parts/video/video', 'modal' ); ?>

    </main>


<?php
//get_sidebar();
get_footer();