<?php
/**
 * Template Name: Community
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

        // Section Community Starts
        get_template_part( 'template-parts/section', 'community' );
        // Section Community Starts
        ?>
    </main>

<?php
get_footer();