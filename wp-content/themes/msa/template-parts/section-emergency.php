<?php
$post_id = getIdBySlug('section-emergency','sections');
$content = get_post_field('post_content', $post_id);
$button_text = get_field('section_button_text',$post_id);
//?>
<section class="emergency-section ks-smb ks-smt" >
    <div class="background-overlay"></div>
    <div class="container h-100">
        <div class="emergency-text-container">
            <h2 class="emergency-text"> <?php  echo htmlspecialchars_decode($content) ?></h2>
            <a href="tel:<?php echo $button_text ?>" class="ks-btn ks-btn-light">
                <span><?php echo $button_text ?></span>
            </a>
        </div>
    </div>
</section>