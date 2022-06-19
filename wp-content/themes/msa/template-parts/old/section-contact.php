

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
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3310.319709133756!2d151.14217011478064!3d-33.93290432981923!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12b09f6b5ce653%3A0x87d256d273878d64!2s10%20Loftus%20St%2C%20Turrella%20NSW%202205%2C%20Australia!5e0!3m2!1sen!2s!4v1633843589766!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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