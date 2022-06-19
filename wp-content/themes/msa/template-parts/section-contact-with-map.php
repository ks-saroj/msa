<?php
    $contact_section_id = getIdBySlug('section-contact','sections');
    $iframe_text = get_field( "map_iframe", $contact_section_id );
    $section_content = apply_filters('the_content', get_post_field('post_content', $contact_section_id));
?>

<section class="contact-with-map ks-spb">
    <div class="container">
        <h2 class="section-title">Start a project with us</h2>
        <div class="contact-grid">
            <div class="contact-form">
                <?php echo $section_content; ?>
            </div>
            <div class="google-map">
                <?php echo $iframe_text; ?>
            </div>
        </div>
    </div>
</section>