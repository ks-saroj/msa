<?php
    $sticky_form_id = getIdBySlug('section-sticky-form','sections');
    $sticky_form = apply_filters('the_content', get_post_field('post_content', $sticky_form_id));

?>
<div class="ks-sticky-form contact-form">
    <div class="sticky-form-title">
        Contact Us
    </div>
    <div class="sticky-form-body">
        <?php echo $sticky_form; ?>
    </div>
</div>