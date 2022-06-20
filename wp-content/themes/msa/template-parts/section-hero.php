<?php
$page_title = get_field('page_title');
if(is_archive()){
    $page_title = get_the_archive_title();
}
if(empty($page_title)){
    $page_title = get_the_title();
}

$section_class = "";
if(is_page_template( 'templates/template-about.php' )){
    $section_class = 'about-hero-section';
}
$thumbnail_url = get_the_post_thumbnail_url('','full');
if(empty($thumbnail_url)){
    $thumbnail_url = get_template_directory_uri().'/assets/images/default-header-bg.png';
}
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
                <div class="col-lg-8 col-12">
                    <div data-aos="fade-down" data-aos-duration="800" class="left-box aos-init aos-animate">
                        <h2 class="hero-section-title">
                            <?php
                            if($page_title):
                                echo htmlspecialchars_decode($page_title);
                            else:
                                esc_html_e('Oops! This page can&rsquo;t be found.', 'msa');
                            endif;
                            ?>
                        </h2>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>