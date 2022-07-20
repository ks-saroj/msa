<?php
$args = array(
    'post_status' => 'publish',
    'orderby' => 'publish_date',
    'post_type' => 'services',
    'order' => 'DESC',
//    'posts_per_page' => '-1',
);
$the_query = new WP_Query($args);

?>
<section class="archive-service ks-spt zks-spb parallax-section">
<?php if ($the_query->have_posts()) :
    ?>
        <div class="service-scrollBox" id="scrollBox">
            <div class="container service-box-container">
                <?php
                while ($the_query->have_posts()) :
                    $the_query->the_post();
                    $custom_thumbnail = get_field('custom_thumbnail');
                    ?>

                    <div class="service-box">
                        <a href="<?php the_permalink(); ?>">
                            <figure>
                                <img src="<?php echo $custom_thumbnail['url'] ?>" class="img-fluid cover-image w-100"
                                     alt="">
                            </figure>
                        </a>
                        <a href="<?php the_permalink(); ?>">
                            <h2 class="post-title"><?php the_title(); ?></h2>
                        </a>
                    </div>
                <?php
                endwhile;
                ?>
                <div class="service-load-more">
                    <button class="ks-btn ks-btn-dark" id="load_more_services_btn">Load More</button>
                </div>
            </div>
        </div>
<?php  endif; ?>
</section>
<?php
wp_reset_postdata();
?>

