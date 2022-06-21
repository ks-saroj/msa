<?php
$post_id = getIdBySlug('section-about','sections');
$content = get_post_field('post_content', $post_id);
$section_title = get_field('section_title',$post_id);
 $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), 'full' );
//?>
<section class="about-section ks-spb ks-spt">
    <div class="container">
        <div class="about-grid-container">
            <div class="left-grid">
                <?php if($image): ?> 
                <figure>
                    <img src="<?php echo $image[0] ?>" class="img-fluid cover-image" alt="">
                </figure>
                 <?php endif ?> 
            </div>
            <div class="right-grid">
                <span class="horizontal-title-bar"></span>
                <h2 class="section-title"><?php echo $section_title; ?></h2>
                 <?php  echo htmlspecialchars_decode($content) ?>
            </div>
        </div>
    </div>
</section>