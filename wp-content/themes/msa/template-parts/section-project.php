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
<section class="project-section ks-spt ks-spb" data-parallax="scroll"
         data-image-src="<?php echo get_template_directory_uri(); ?>/assets/images/project-bg.png">
        <div class="container">
        <h2 class="section-title">Portfolio</h2>
        <div class="project-slider">
            <?php
            while ( $the_query->have_posts() ) :
            $the_query->the_post();
            $custom_thumbnail = get_field('custom_thumbnail');
            ?>
            <div class="slider-box">
                <figure>
                    <img class="img-fluid cover-image" src="<?php echo $custom_thumbnail['url']; ?>" alt="Service 1">
                </figure>
                <h3 class="project-title"><?php echo the_title(); ?></h3>
            </div>
            <?php
            endwhile;
            ?>
        </div>
        <div class="slider-arrow-box">
            <span class="next"><img class="img-fluid cover-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/angle-right.png" alt=""></span>
        </div>
    </div>
</section>
<?php endif ?>