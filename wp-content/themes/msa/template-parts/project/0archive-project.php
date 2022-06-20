<?php
$args = array(
    'post_status' => 'publish',
    'orderby' => 'publish_date',
    'post_type' => 'projects',
    'order' => 'DESC',
    'posts_per_page' => '-1',
);
$the_query = new WP_Query($args);

// The Loop
if ($the_query->have_posts()) :
?>
<section class="completed-project">
    <div class="container">
        <div class="row">
    <?php
    while ( $the_query->have_posts() ) :
        $the_query->the_post();
        $custom_thumbnail = get_field('custom_thumbnail');
        ?>
            <div class="col-md-4 col-sm-6 col-12">
                <div class="boxes">
                    <div class="image-box" data-aos="fade-up" data-aos-duration="800">
                        <a href="<?php the_permalink(); ?>">
                            <div class="img-overlay">
                                <div class="overlay-text"><?php the_excerpt(); ?></div>
                            </div>
                            <img
                                src="<?php echo $custom_thumbnail['url']; ?>"
                                class="img-fluid cover-image"
                                alt="<?php echo $custom_thumbnail['alt']; ?>"
                            />
                        </a>
                    </div>
                    <h4><a class="primary-link-color text-decoration-none" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                </div>
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