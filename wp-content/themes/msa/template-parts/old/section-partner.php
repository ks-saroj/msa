<?php
$post_id = getIdBySlug('section-partner','sections');
$partner_gallery = CFS()->get('gallery',$post_id);
$section_title = get_field('section_title',$post_id);
if(is_singular('services')){
//    TODO:: ADD THIS FIELD TO SINGLE PROJECT META
    $section_title = "Our Clients";
}
?>
<section class="partnerships-section section-padding-top">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2 class="light-blue" data-aos="fade-up" data-aos-duration="1600"><?php echo $section_title; ?></h2>
                <p data-aos="fade-up" data-aos-duration="2200"><?php echo get_field('section_subtitle',$post_id); ?></p>
            </div>
            <div class="col-md-12">
                <div class="partner-logo" id="partner-logo" data-aos="fade-up" data-aos-duration="2600">
                    <?php
                    foreach ($partner_gallery as $item):
                        ?>
                            <img src="<?php echo $item['image']; ?>" class="img-fluid" alt="" />
                    <?php
                    endforeach;
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>