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
    // Section Contact With Map Starts
//    get_template_part( 'template-parts/section-sticky-form' );
    // Section Contact With Map Ends
    ?>

    <footer>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-md-8 my-auto">
                            <p>Copyright <?php echo date('Y').' '. get_bloginfo('name'); ?>  &nbsp; | &nbsp; <a href="https://msa.themarketingco-staging.com/privacy-policy/">Privacy Policy</a> &nbsp; | &nbsp; <a href="https://msa.themarketingco-staging.com/terms-and-conditions/">Terms & Conditions</a></p>
                        </div>
                        <div class="col-md-4 my-auto">
                            <p class="website">
                                Website by <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tmc_logo.png" class="img-fluid" alt="" />
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
