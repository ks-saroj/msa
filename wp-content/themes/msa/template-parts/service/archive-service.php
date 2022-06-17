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
<section class="services-total-project section-padding-top">
    <div class="container">
        <div class="img-flex-container">
            <?php
            $turn = 'long';
            $count = 0;
            $row = 0;
            while ( $the_query->have_posts() ) :
                $the_query->the_post();
//                $thumbnail_url = get_the_post_thumbnail_url('', 'full');
                $custom_thumbnail = get_field('custom_thumbnail');
//                if ($count % 2){
//                    $content_position = 'left';
//                }else{
//                    $content_position = 'right';
//                }
            ?>
            <div class="image-item <?php echo $turn; ?>" data-aos="fade-up" data-aos-duration="800">
                    <div class="boxes">
                        <a href="<?php the_permalink(); ?>">
                            <div class="image-box">
                                <div class="iner" style="background: url(<?php echo $custom_thumbnail['url']; ?>);"> </div>
                            </div>
                        </a>
                        <h4><a class="primary-link-color text-decoration-none" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                    </div>
            </div>
            <?php
//                if($count % 2 == 0){
//                    if($turn === 'long'){
//                        $turn = 'short';
//                    }else{
//                        $turn = 'long';
//                    }
//                    $count++;
//                }else{
//                    $count = 0;
//                }
//                $row++;
//                $count++;
            endwhile;
            ?>

        </div>
    </div>
</section>
<?php
endif;
wp_reset_postdata();
?>