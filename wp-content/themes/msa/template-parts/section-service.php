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
<section class="service-section ks-spt ks-spb parallax-section" data-parallax="scroll"
         data-image-src="<?php echo get_template_directory_uri(); ?>/assets/images/service-bg.png"
         xstyle="background: url('<?php echo get_template_directory_uri(); ?>/assets/images/service-bg.png')">
    <div class="container">
        <h2 class="section-title">Services</h2>

        <div class="service-slider">
            <?php
            $cnt = 0;
            while ( $the_query->have_posts() ) :
            $the_query->the_post();
            $custom_thumbnail = get_field('custom_thumbnail');
//            if($cnt % 2 === 0){
//                $cnt = 0;
//            }
//            $duration = 1600 + $cnt*800;
            ?>
            <div class="slider-box">
                <figure>
                    <img class="img-fluid cover-image" src="<?php echo $custom_thumbnail['url']; ?>"
                         alt="<?php echo the_title(); ?>">
                </figure>
                <h3 class="service-title"><?php echo the_title(); ?></h3>
            </div>
                <?php
//                $cnt++;
            endwhile;
            ?>

        </div>
        <div class="slider-arrow-box">
            <span class="next"><img class="img-fluid cover-image"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/angle-right.png"
                                    alt=""></span>
        </div>
    </div>
</section>
<?php endif ?>