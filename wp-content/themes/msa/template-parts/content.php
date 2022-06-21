<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package msa
 */

?>
<div class="container mt-5">
<article id="post-<?php the_ID(); ?>" <?php post_class('ks-spb ks-spt'); ?>>

    <div class="container pt-5">
        <div class="row">
            <div class="col-md-12">
                    <?php
                    the_content(
                        sprintf(
                            wp_kses(
                                /* translators: %s: Name of current post. Only visible to screen readers */
                                __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'msa' ),
                                array(
                                    'span' => array(
                                        'class' => array(),
                                    ),
                                )
                            ),
                            wp_kses_post( get_the_title() )
                        )
                    );

                    ?>
            </div>
        </div>
    </div>

</article><!-- #post-<?php the_ID(); ?> -->
</div>