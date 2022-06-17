<?php
/**
 * Template Name: Contact
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

        // Section Contact Starts
        get_template_part( 'template-parts/section', 'contact' );
        // Section Contact Starts
        ?>
    </main>

<?php
get_footer();