<?php
$post_id = getIdBySlug('section-blog','sections');
$service_counter = CFS()->get('counter',$post_id);
$args = array(
    'post_status' => 'publish',
    'orderby' => 'publish_date',
    'post_type' => 'post',
    'order' => 'DESC',
    'posts_per_page' => '2',
);
$the_query = new WP_Query($args);

// The Loop
if ($the_query->have_posts()) :
?>
<section class="news-section section-blog section-padding-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2><?php echo get_field('section_title',$post_id); ?></h2>
            </div>
        </div>
        <div class="row">
        <?php
        $cnt = 0;
        while ( $the_query->have_posts() ) :
            $the_query->the_post();
            $custom_thumbnail = get_field('custom_thumbnail');
            if($cnt % 2 === 0){
                $cnt = 0;
            }
            $duration = 1600 + $cnt*800;
            ?>
                <div class="col-md-6" data-aos="fade-up" data-aos-duration="<?php echo $duration; ?>">
                    <div class="boxes">
                        <div class="image-box">
                            <img src="<?php echo $custom_thumbnail['url']; ?>" class="img-fluid" alt="" />
                        </div>
                        <h3><?php the_title(); ?></h3>
                        <a href="#" class="primary-btn"><?php echo get_field('section_button_text',$post_id); ?><span class="fa fa-long-arrow-right"></span></a>
                    </div>
                </div>
            <?php
            $cnt++;
            endwhile;
            ?>
        </div>
    </div>
</section>
<?php
endif;
wp_reset_postdata();
?>