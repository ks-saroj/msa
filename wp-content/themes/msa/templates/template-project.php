<?php
/**
 * Template Name: Project
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

        // Archive Project Starts
        get_template_part( 'template-parts/project/archive', 'project' );
        // Archive Project Starts

        ?>

    </main>

<?php
get_footer();