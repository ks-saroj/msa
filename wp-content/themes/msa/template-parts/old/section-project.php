<?php
$post_id = getIdBySlug('section-projects','sections');
$section_button_text = get_field('section_button_text',$post_id);
$args = array(
    'post_status' => 'publish',
    'orderby' => 'publish_date',
    'post_type' => 'projects',
    'order' => 'ASC',
    'posts_per_page' => '-1',
);

    if (is_singular('projects')) {
//        $section_title = 'Other Work';
        $args['post__not_in'] = array(get_the_ID());
    }
//    else {
////        $section_title = get_field('section_title', $post_id);
//    }

$the_query = new WP_Query($args);

// The Loop
if ($the_query->have_posts()) :

    ?>

    <section class="featured-section section-margin-top">
        <div class="circel3"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/circle3.png" class="img-fluid"  alt=""></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="top-box">
                        <div class="row">
                            <div class="col-md-9">
                                <div data-aos="fade-up" data-aos-duration="1600">
                                    <?php if( !is_singular('projects')): ?>
                                    <h2 class="dark-blue"><?php echo get_field('section_title',$post_id); ?></h2>
                                    <?php endif; ?>
                                    <h3><?php echo get_field('section_subtitle',$post_id); ?></h3>

                                </div>
                            </div>
                            <div class="col-md-3 mt-auto">
                                <div class="right-btn" data-aos="fade-up" data-aos-duration="2000">
                                    <?php //if($section_button_text): ?>
<!--                                        <a href="--><?php //echo get_field('section_button_link',$post_id); ?><!--" class="primary-btn">-->
<!--                                            --><?php //echo get_field('section_button_text',$post_id); ?>
<!--                                            <span class="fa fa-long-arrow-right"></span>-->
<!--                                        </a>-->
                                    <?php //endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row right-extended-row">
                <div class="col-lg-12">
                    <div class="slider-box">
                        <div class="row" id="featured-slider">
                            <?php
                            while ( $the_query->have_posts() ) :
                                $the_query->the_post();
                                $custom_thumbnail = get_field('custom_thumbnail');
                                ?>

                                <div class="col-md-6">
                                    <div class="boxes">
                                        <div class="image-box">
                                            <a class="grabbing-pointer" href="<?php the_permalink(); ?>" >
                                                <div class="img-overlay">
                                                    <div class="overlay-text"><?php the_excerpt(); ?></div>
                                                </div>
                                                <img src="<?php echo $custom_thumbnail['url']; ?>" class="img-fluid" alt="" />
                                            </a>
                                        </div>
                                        <div class="items" data-aos="fade-up" data-aos-duration="2400">
                                            <h4><a href="<?php the_permalink(); ?>" class="text-white text-decoration-none"><?php the_title(); ?></a></h4>
                                            <p><?php echo get_field('council') ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            endwhile;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="arrows-box">
                <span class="fa fa-long-arrow-left prev1"></span>
                <span class="fa fa-long-arrow-right next1"></span>
            </div>
        </div>
    </section>

<?php
endif;
wp_reset_postdata();
?>