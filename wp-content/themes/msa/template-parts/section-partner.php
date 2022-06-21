<?php
$post_id = getIdBySlug('section-partner','sections');
$partners = CFS()->get('gallery',$post_id);
$section_title = get_field('section_title',$post_id);
$section_subtitle = get_field('section_subtitle',$post_id);
?>
<section class="partner-section ks-spb ks-spt">
    <div class="container">
        <h2 class="section-title"><?php echo $section_title; ?></h2>
        <p class="section-subtitle"><?php echo $section_subtitle; ?></p>
        <div class="partner-slider">
            <?php foreach($partners as $partner): ?>
            <div class="slider-box">
                <figure>
                    <img class="img-fluid cover-image" src="<?php echo $partner['image']; ?>" alt="Partner">
                </figure>
            </div>
            <?php
            endforeach;
            ?>
        </div>
    </div>
</section>