<?php
$post_id = getIdBySlug('section-about','sections');
$logo_image = CFS()->get('logo_image',$post_id);
$about_content = apply_filters('the_content', get_post_field('post_content', $post_id));
?>

<section class="client-section section-about">
    <div class="circel2">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/circle2.png" class="img-fluid" alt="" />
    </div>
    <div class="container">
        <div class="row right-extended-row">
            <div class="col-md-12 pr-md-0">
                <div class="iner">
                    <div class="top-box" data-aos="fade-up" data-aos-duration="1600">
                        <div class="row">
                            <div class="col-lg-9 col-md-10">
                                <h2>
                                    <?php echo get_field('section_title',$post_id); ?>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="middle-box" data-aos="fade-up" data-aos-duration="2200">
                        <div class="row">
                            <div class="col-lg-3 col-md-4">
                                <h2><?php echo get_field('section_subtitle',$post_id); ?></h2>
                            </div>
                            <div class="col-lg-9 col-md-8">
                                <p>
                                    <?php echo $about_content; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="bottom-box" data-aos="fade-up" data-aos-duration="1800">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="about-logo-row">
                                    <?php
                                    foreach ($logo_image as $item):
                                        ?>
                                        <div class="about-logo-item" >
                                            <img src="<?php echo $item['logo']; ?>" class="img-fluid covered-image about-logos" alt="" />
                                        </div>
                                    <?php
                                    endforeach;
                                    ?>
                                </div>
                            </div>
                            <?php if(!is_page_template('templates/template-about.php')): ?>
                            <div class="col-md-4 mt-auto right-btn" data-aos="fade-up" data-aos-duration="2400">
                                <a href="<?php echo get_field('section_button_link',$post_id); ?>" class="primary-btn btn-light-blue">
                                    <?php echo get_field('section_button_text',$post_id); ?>
                                    <span class="fa fa-long-arrow-right"></span>
                                </a>
                            </div>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>