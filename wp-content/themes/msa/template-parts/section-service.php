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
    <section class="service-section ks-spt ks-spb">
        <div class="container">
            <a class="no-decoration" href="/our-services/"><h2 class="section-title">Services</h2></a>

            <div class="service-slider">
                <?php
                $cnt = 0;
                while ($the_query->have_posts()) :
                    $the_query->the_post();
                    $custom_thumbnail = get_field('custom_thumbnail');
                    ?>
                    <div class="slider-box">
                        <a href="<?php the_permalink(); ?>">
                            <figure>
                                <img class="img-fluid cover-image" src="<?php echo $custom_thumbnail['url']; ?>"
                                     alt="<?php echo the_title(); ?>">
                            </figure>
                        </a>
                        <a class="no-decoration" href="<?php the_permalink(); ?>"><h3 class="service-title"><?php echo the_title(); ?></h3>
                        </a>
                    </div>
                <?php
                endwhile;
                ?>

            </div>
            <div class="slider-arrow-box">
            <span class="next">
                <img class="img-fluid cover-image"
                     src="<?php echo get_template_directory_uri(); ?>/assets/images/angle-right.png"
                     alt="">
            </span>
            </div>
        </div>
    </section>
<?php endif ?>