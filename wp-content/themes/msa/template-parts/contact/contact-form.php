<?php
    $iframe_text = get_field( "map_iframe", get_the_ID() );
?>

<section class="contact-section section-padding-top">
    <div class="container">
        <div class="row">
            <div class="col-md-7 pr">
                <div class="left-box">
                    <div class="top-box">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="boxes" data-aos="fade-up" data-aos-duration="800">
                                    <h2>Head Office</h2>
                                    <p>
                                        <?php echo nl2br(htmlspecialchars_decode(get_option('msa_head_office'))); ?>
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="boxes" data-aos="fade-up" data-aos-duration="800">
                                    <h2>Postal</h2>
                                    <p>
                                        <?php echo nl2br(htmlspecialchars_decode(get_option('msa_postal'))); ?>
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="boxes" data-aos="fade-up" data-aos-duration="800">
                                    <h2>Phone</h2>
                                    <p>
                                        <a href="tel:<?php echo htmlspecialchars_decode(get_option('msa_contact')); ?>"><?php echo htmlspecialchars_decode(get_option('msa_contact')); ?></a>
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="boxes" data-aos="fade-up" data-aos-duration="800">
                                    <h2>Email</h2>
                                    <p>
                                        <a href="mailto:<?php echo nl2br(htmlspecialchars_decode(get_option('msa_contact_email'))); ?>"><?php echo nl2br(htmlspecialchars_decode(get_option('msa_contact_email'))); ?></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="map-box" data-aos="fade-up" data-aos-duration="800">
                        <div class="map-container">
                            <?php echo $iframe_text; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 pl">
                <div class="right-box" data-aos="fade-up" data-aos-duration="800">
                    <h2>Start a project with us</h2>
                    <p>
                        For general enquiries or to request a quote, fill out our online form below and one of our representatives will be in touch within 24 hours.
                    </p>
                    <form action="#" method="post">
                        <?php the_content(); ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>