<?php
$args = array(
    'post_status' => 'publish',
    'orderby' => 'publish_date',
    'post_type' => 'services',
    'order' => 'DESC',
    'posts_per_page' => '-1',
);
$the_query = new WP_Query($args);

// The Loop
if ($the_query->have_posts()) :
    ?>

    <section class="archive-service ks-spt ks-spb" data-parallax="scroll"
             data-image-src="<?php echo get_template_directory_uri(); ?>/assets/images/archive-service.png">
        <div class="container">
            <div class="service-box-container">
                <?php
                while ($the_query->have_posts()) :
                    $the_query->the_post();
                    $custom_thumbnail = get_field('custom_thumbnail');
                    ?>
                    <div class="service-box">
                        <a href="<?php the_permalink(); ?>">
                            <figure>
                                <img src="<?php echo $custom_thumbnail['url'] ?>" class="img-fluid cover-image w-100" alt="">
                            </figure>
                        </a>
                        <a href="<?php the_permalink(); ?>">
                            <h2 class="post-title"><?php the_title(); ?></h2>
                        </a>
                    </div>

                <?php
                endwhile;
                ?>

            </div>
        </div>
    </section>

<?php
endif;
wp_reset_postdata();
?>

