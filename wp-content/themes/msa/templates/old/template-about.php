<?php
/**
 * Template Name: About
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package msa
 */

get_header();
?>
    <main id="page-about" class="site-main">
        <?php

        //  Section Hero Start
        get_template_part( 'template-parts/section', 'hero' );
        //  Section Hero End

        //  Section Intro Start
        get_template_part( 'template-parts/section', 'intro' );
        //  Section Intro End

        // Section Service Starts
        get_template_part( 'template-parts/section', 'service',array(
            'show_counter'  => true,
            'show_slider'   => false
        ) );
        // Section Service Starts

        // Content About Starts
        get_template_part( 'template-parts/about/content', 'about' );
        // Content About Starts

        // Content Gallery Starts
        get_template_part( 'template-parts/gallery/content', 'gallery' );
        // Content Gallery Starts

        // Section About Starts
        get_template_part( 'template-parts/section', 'about' );
        // Section About Ends

        // Section Partner Starts
        get_template_part( 'template-parts/section', 'partner' );
        // Section Partner Ends

        ?>
    </main>

<?php
get_footer();