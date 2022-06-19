<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package msa
 */

?>

<!--    <section class="top-footer section-padding-top">-->
<!--        <div class="container">-->
<!--            <div class="row">-->
<!--                <div class="col-md-6">-->
<!--                    <div class="boxes"  data-aos="fade-up" data-aos-duration="400">-->
<!--                        <div class="footer-logo">-->
<!--                            <a href="#"><img src="--><?php //echo get_template_directory_uri(); ?><!--/assets/images/footer-logo.png" class="img-fluid" alt="" /></a>-->
<!--                        </div>-->
<!--                        <div class="footer-sponsor">-->
<!--                            <img src="http://msa.themarketingco-staging.com/wp-content/uploads/2021/10/IMS-Logo.png" class="img-fluid" alt="" />-->
<!--                            <img src="http://msa.themarketingco-staging.com/wp-content/uploads/2021/10/JASANZ-RGB-with-URL.png" class="img-fluid" alt="" />-->
<!--							<img src="http://msa.themarketingco-staging.com/wp-content/uploads/2021/10/image035.png" class="img-fluid" alt="" />-->
<!--							<img src="http://msa.themarketingco-staging.com/wp-content/uploads/2021/10/Untitled-2.png" class="img-fluid" alt="" />-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-md-6">-->
<!--                    <div class="row justify-content-end">-->
<!--                        <div class="col-sm-5">-->
<!--                            <div class="boxes"  data-aos="fade-up" data-aos-duration="800">-->
<!--                                <h3>Building the present.<br /> Shaping the future.</h3>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="col-sm-5">-->
<!--                            <div class="boxes"  data-aos="fade-up" data-aos-duration="1200">-->
<!--                                <h4>MSA Civil Head Office</h4>-->
<!--                                <p>10 Loftus St,<br />Arncliffe NSW 2205<br /><a href="tel:02 9597 3879">(02) 9597 3879</a></p>-->
<!--                                <p>Connect with us on: <a href="https://au.linkedin.com/company/msa-civil-and-communications">LinkedIn</a></p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->

<?php
$post_id = getIdBySlug('section-footer','sections');
$sponsors = CFS()->get('gallery',$post_id);
$custom_logo_id = get_theme_mod( 'custom_logo' );
$custom_logo = wp_get_attachment_url( $custom_logo_id );
$head_office =  nl2br(htmlspecialchars_decode(get_option('msa_head_office')));
$linkedin =  nl2br(htmlspecialchars_decode(get_option('msa_head_office')));
?>

<footer class="ks-spt">

    <div class="top-footer">
        <div class="container">
            <div class="top-footer-grid">
                <div class="left-col">
                    <div class="footer-logo">
                        <a href="#"><img src="<?php echo $custom_logo ?>" class="img-fluid cover-image" alt="" /></a>
                    </div>
                    <div class="footer-sponsor">
                        <?php foreach($sponsors as $sponsor): ?>
                        <img src="<?php echo $sponsor['image']; ?>" class="img-fluid cover-image" alt="" />
                        <?php endforeach ?>
                    </div>
                </div>
                <div class="right-col">
                    <?php if($head_office): ?>
                    <div class="office-location">
                        <h6 class="footer-widget-title">
                            MSA Civil Head Office
                        </h6>
                        <div class="office-address">
                            <p>
                                <?php echo $head_office; ?>
                            </p>
                        </div>
                        <?php endif?>
                    </div>
                    <?php if($linkedin): ?>
                    <div class="social-profile-box">
                        <h6 class="footer-widget-title">
                            Connect with us on:
                        </h6>
                        <div>
                                <a href="<?php echo $linkedin; ?>" target="_blank"> <i class="fa fa-linkedin-square" aria-hidden="true"></i> Linkedin</a>
                        </div>
                    </div>
                    <?php endif?>
                </div>
            </div>
        </div>
    </div>

    <!--        Bottom Footer Row starts-->
    <div class="bottom-footer">
        <div class="container">
            <div class="bottom-footer-grid">
                <div class="left-col">
                    <p>Copyright <?php echo date('Y') . ' ' . get_bloginfo('name'); ?> &nbsp; | &nbsp; <a
                                href="https://msa.themarketingco-staging.com/privacy-policy/">Privacy Policy</a> &nbsp;
                        |
                        &nbsp;
                        <a href="https://msa.themarketingco-staging.com/terms-and-conditions/">Terms & Conditions</a>
                    </p>
                </div>
                <div class="right-col">
                    <p class="website">
                        Website by <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tmc_logo.png"
                                        class="img-fluid" alt=""/>
                    </p>
                </div>
            </div>
        </div>
    </div>

</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
