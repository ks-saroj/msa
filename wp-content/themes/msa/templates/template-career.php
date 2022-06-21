<?php
/**
 * Template Name: Career
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package msa
 */

get_header();
$post_id = getIdBySlug('careers', 'page');
$post_body = get_field('post', $post_id);
$image = get_field('custom_thumbnail', $post_id);
?>
    <main id="page-career" class="site-main">
        <?php

        //  Section Hero Start
        get_template_part( 'template-parts/section', 'hero' );
        //  Section Hero End

        ?>
        <section class="career-section ks-spt ks-spb">
            <div class="container">
                <div class="career-flex">
                    <figure class="mb-0 career--image-container career--flex-item">
                        <img class="cover-image img-fluid" src="<?php echo $image['url'] ?>" alt="image">
                    </figure>

                    <div class="career--text career--flex-item">
                        <?php echo $post_body ?>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php
get_footer();