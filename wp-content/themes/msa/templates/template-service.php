<?php
/**
 * Template Name: Service
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

        // Archive Service Starts
        get_template_part( 'template-parts/service/archive-service' );
        // Archive Service Starts

        // Section Partner Starts
        get_template_part( 'template-parts/section', 'partner' );
        // Section Partner Ends

        ?>
    </main>

<?php
get_footer();