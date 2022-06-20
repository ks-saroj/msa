<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package msa
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0" <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'msa' ); ?></a>

	<header id="masthead" class="site-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-5 my-auto">
                    <div class="row">
                        <div class="col-lg-12 my-auto">
                            <?php
                            $logo = get_theme_mod( 'custom_logo' );
                            $image = wp_get_attachment_image_src( $logo , 'full' );
                            ?>
                            <div class="logo">
                                <?php the_custom_logo(); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-7 my-auto d-block d-lg-none">
                    <div class="device-nav" id="nav-icon">
                        <span class="fa fa-bars icon"></span>
                    </div>
                </div>
                <div class="col-lg-10 xpx-lg-0">
                    <div class="row">
                        <div class="col-lg-12 navigation ml-auto">
                            <?php
                            wp_nav_menu( array(
                                'theme_location'    => 'primary-menu',
                                'menu_class'        => 'main-navigation',
                                'menu_id'           => 'site-navigation',
                                'container'         => 'nav',
                                'depth'             => 3,
                                'walker'            => new WP_Bootstrap_Navwalker(),
                            ) );
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>


	</header><!-- #masthead -->
