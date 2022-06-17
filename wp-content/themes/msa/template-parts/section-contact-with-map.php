<?php
    $contact_section_id = getIdBySlug('section-contact','sections');
    $iframe_text = get_field( "map_iframe", $contact_section_id );
    $section_content = apply_filters('the_content', get_post_field('post_content', $contact_section_id));
?>

<section class="contact-with-map ks-spt">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="contact-form">
                    <?php echo $section_content; ?>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="google-map">
                    <?php echo $iframe_text; ?>
                </div>
            </div>
        </div>
    </div>
</section>