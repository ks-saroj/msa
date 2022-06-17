<?php
$show_counter = !isset($args['show_counter']) || $args['show_counter'];
$show_slider = !isset($args['show_slider']) || $args['show_slider'];


$post_id = getIdBySlug('section-service','sections');
$section_button_text = get_field('section_button_text',$post_id);
$service_counter = CFS()->get('counter',$post_id);
$args = array(
    'post_status' => 'publish',
    'orderby' => 'publish_date',
    'post_type' => 'services',
    'order' => 'ASC',
    'posts_per_page' => '-1',
);

$the_query = new WP_Query($args);

// The Loop
if ($the_query->have_posts()) :
    ?>
    <section class="services-section <?php echo is_page_template('templates/template-about.php')?'':'section-padding-top'; ?>">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <?php if($show_slider): ?>
                    <div class="middle-box">
                        <div class="row">
                            <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-duration="1600">
                                <h3 class="dark-blue"><?php echo get_field('section_title',$post_id); ?></h3>
                            </div>
                            <div class="col-lg-9 col-md-8" data-aos="fade-up" data-aos-duration="2200">
                                <p><?php echo get_field('section_subtitle',$post_id); ?></p>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>

                </div>
            </div>
        </div>

        <?php if($show_slider): ?>

        <div class="container">
            <div class="row right-extended-row">
                <div class="col-lg-12">
                    <div class="bottom-box">
                        <div class="row" id="featured-slider2">
                            <?php
                            while ( $the_query->have_posts() ) :
                                $the_query->the_post();
                                $custom_thumbnail = get_field('custom_thumbnail');
                                ?>
                                <div class="col-lg-3">
                                    <div class="boxes">
                                        <div class="image-box">
                                            <a class="grabbing-pointer" href="<?php the_permalink(); ?>">

                                            <div class="img-overlay">
                                                <div class="overlay-text"><?php the_excerpt(); ?></div>
                                            </div>
                                            <img src="<?php echo $custom_thumbnail['url']; ?>" class="img-fluid" alt="" />

                                            </a>
                                        </div>
                                        <h4><a href="<?php the_permalink(); ?>" class="text-decoration-none text-dark"><?php the_title(); ?></a></h4>
                                    </div>
                                </div>
                            <?php
                            endwhile;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container arrow-container">
            <div class="row">
                <div class="col-6 pl-sm-0 my-auto">
                    <div  data-aos="fade-up" data-aos-duration="1600">
                        <?php //if($section_button_text): ?>
<!--                            <a href="--><?php //echo get_field('section_button_link',$post_id); ?><!--" class="primary-btn">--><?php //echo get_field('section_button_text',$post_id); ?><!-- <span class="fa fa-long-arrow-right"></span></a>-->
                        <?php //endif; ?>
                    </div>
                </div>
                <div class="col-6 pr-sm-0 my-auto">


                </div>
            </div>
        </div>

        <?php endif; ?>

    </section>


    <section class="service-text-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php if($show_counter): ?>
                        <div class="top-box" id="xcounter">
                            <div class="row">
                                <?php
                                foreach ($service_counter as $k => $item):
                                    ?>
                                    <div class="col-sm-4" data-aos="fade-up" data-aos-duration="<?php echo ($k+1)*800; ?>">
                                        <div class="boxes">

                                            <?php if($item['icon']): ?>
                                            <figure class="mb-0">
                                                <img src="<?php echo $item['icon']; ?>" alt="" class="img-fluid cover-image service-icon">
                                            </figure>
                                            <?php endif; ?>

                                            <h2 class="dark-blue"><span class="count percent" data-count="500"><?php echo $item['count_value']; ?></span></h2>
                                            <p class="counter-description"><?php echo $item['count_description']; ?></p>
                                        </div>
                                    </div>
                                <?php
                                endforeach;
                                ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

<?php
endif;
wp_reset_postdata();
?>
