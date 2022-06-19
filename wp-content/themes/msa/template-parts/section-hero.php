<?php
$page_title = get_field('page_title');
if(empty($page_title)){
    $page_title = get_the_title();
}

$section_class = "";
if(is_page_template( 'templates/template-about.php' )){
    $section_class = 'about-hero-section';
}
$thumbnail_url = get_the_post_thumbnail_url('','full');
?>
<style>
    .hero-section{
        background-image: url(<?php echo $thumbnail_url; ?>);
    }
</style>
<section class="hero-section <?php echo $section_class; ?>">
    <div id="hero-section-overlay"></div>
    <div class="hero-section-text">
        <div class="container">
            <div class="row">
                <div class="col-md-8 my-auto">
                    <div data-aos="fade-down" data-aos-duration="800" class="left-box aos-init aos-animate">
                        <h2 class="hero-section-title">
                            <?php echo htmlspecialchars_decode($page_title); ?>
                        </h2>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>