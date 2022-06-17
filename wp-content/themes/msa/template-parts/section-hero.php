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
    .hero-section::before{
        background: url(<?php echo $thumbnail_url; ?>) center center no-repeat;
    }
</style>
<section class="hero-section <?php echo $section_class; ?>">
    <div class="container">
        <div class="row">
            <div class="col-md-6 my-auto">
                <div data-aos="fade-down" data-aos-duration="800" class="left-box aos-init aos-animate">
                    <h2 class="hero-section-title">
                        <?php echo htmlspecialchars_decode($page_title); ?>
                    </h2>
                </div>
            </div>
            <div class="col-md-6 right-box d-block d-md-none" data-aos="zoom-in-right" data-aos-duration="800">
                <?php
                if ( has_post_thumbnail() ) :
                    the_post_thumbnail( 'full', array( 'class'  => 'img-fluid w-100' ) );
                endif;
                ?>
            </div>
        </div>
    </div>
</section>