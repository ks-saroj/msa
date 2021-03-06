<?php
$page_title = get_field('page_title');
if (empty($page_title)) {
    $page_title = get_the_title();
}
$section_class = "";
if (is_page_template('templates/template-about.php')) {
    $section_class = 'about-hero-section';
}
$thumbnail_url = get_the_post_thumbnail_url('', 'full');
$video_button_text = get_field('video_button_text');
?>
    <style>
        .hero-section::before {
            background: url(<?php echo $thumbnail_url; ?>) center center no-repeat;
        }
    </style>
<?php
$video_id = get_field('video_id');
$vimeo_video_link = get_field('vimeo_video_link');
if (is_front_page() && $video_id != ''):
    ?>
    <section class="hero-section <?php echo $section_class; ?>">
<!--        <div class="embed-responsive embed-responsive-16by9 desktop-video">-->
<!--            <iframe-->
<!--                    src="https://player.vimeo.com/video/--><?php //echo $video_id ?><!--?background=1&autoplay=1&amp;modestbranding=1&amp;showinfo=0"-->
<!--                    frameborder="0"-->
<!--                    allow="autoplay; fullscreen; picture-in-picture"-->
<!--                    allowfullscreen-->
<!--            ></iframe>-->
<!--        </div>-->
        <!-- full screen video on mobile starts-->
        <div class="full-video-div mobile-video">
            <div id="hero-section-overlay"></div>
            <video preload="auto" autoplay="" loop="" muted="" playsinine="" playsinline="">
                <source src="<?php echo $vimeo_video_link; ?>" type="video/mp4">
            </video>
        </div>
        <!-- full screen video on mobile ends-->

        <div class="hero-section-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-12">
                        <div data-aos="fade-down" data-aos-duration="800" class="left-box aos-init aos-animate">
                            <h2 class="hero-section-title">
                                <?php echo htmlspecialchars_decode($page_title); ?>
                            </h2>
                            <?php if ($video_button_text): ?>
                                <a href="#" class="primary-btn video-btn" data-toggle="modal"
                                   data-src="<?php echo $data_src; ?>">
                                    <?php echo get_field('video_button_text'); ?>
                                    <span class="fa fa-long-arrow-right"></span>
                                </a>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
endif;
?>