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
<footer>

    <div class="top-footer">
        <div class="container">
            <div class="top-footer-grid">
                <div class="left-col">
                    <div class="footer-logo">
                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer-logo.png" class="img-fluid cover-image" alt="" /></a>
                    </div>
                    <div class="footer-sponsor">
                        <img src="http://msa.themarketingco-staging.com/wp-content/uploads/2021/10/IMS-Logo.png" class="img-fluid cover-image" alt="" />
                        <img src="http://msa.themarketingco-staging.com/wp-content/uploads/2021/10/JASANZ-RGB-with-URL.png" class="img-fluid cover-image" alt="" />
                        <img src="http://msa.themarketingco-staging.com/wp-content/uploads/2021/10/image035.png" class="img-fluid cover-image" alt="" />
                        <img src="http://msa.themarketingco-staging.com/wp-content/uploads/2021/10/Untitled-2.png" class="img-fluid cover-image" alt="" />
                    </div>
                </div>
                <div class="right-col">
                    <div class="office-location">
                        <h6 class="footer-widget-title">
                            MSA Civil Head Office
                        </h6>
                        <div class="office-address">
                            <p>
                                10 Loftus St,<br/>
                                Arncliffe NSW 2205 <br/>
                                (02) 9597 3879
                            </p>
                        </div>
                    </div>
                    <div class="social-profile-box">
                        <h6 class="footer-widget-title">
                            Connect with us on:
                        </h6>
                        <div>
                                <a href="#" target="_blank"> <i class="fa fa-linkedin-square" aria-hidden="true"></i> Linkedin</a>
                        </div>
                    </div>
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
