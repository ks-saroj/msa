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


<?php
$post_id = getIdBySlug('section-footer','sections');
$sponsors = CFS()->get('gallery',$post_id);
$custom_logo_id = get_theme_mod( 'custom_logo' );
$custom_logo = wp_get_attachment_url( $custom_logo_id );
$head_office =  nl2br(htmlspecialchars_decode(get_option('msa_head_office')));
$linkedin =  nl2br(htmlspecialchars_decode(get_option('msa_head_office')));

// Section Sticky Form Starts
get_template_part( 'template-parts/section-sticky-form' );
// Section Sticky Form Ends
?>

<footer>
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
                    <p>Copyright <?php echo date('Y') . ' ' . get_bloginfo('name'); ?> &nbsp; | &nbsp;
                        <?php
                        wp_nav_menu( array(
                            'theme_location'    => 'footer-menu',
                            'menu_class'        => 'footer-navigation',
                            'menu_id'           => 'footer-navigation',
//                            'container'         => 'nav',
                            'depth'             => 3,
                        ) );
                        ?>
<!--                        <a-->
<!--                                href="https://msa.themarketingco-staging.com/privacy-policy/">Privacy Policy</a> &nbsp;-->
<!--                        |-->
<!--                        &nbsp;-->
<!--                        <a href="https://msa.themarketingco-staging.com/terms-and-conditions/">Terms & Conditions</a>-->
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
