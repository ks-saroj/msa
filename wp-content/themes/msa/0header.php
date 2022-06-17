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

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'msa' ); ?></a>

	<header id="masthead" class="site-header">

<!--		<div class="site-branding">-->
<!--			--><?php
//			the_custom_logo();
//			if ( is_front_page() && is_home() ) :
//				?>
<!--				<h1 class="site-title"><a href="--><?php //echo esc_url( home_url( '/' ) ); ?><!--" rel="home">--><?php //bloginfo( 'name' ); ?><!--</a></h1>-->
<!--				--><?php
//			else :
//				?>
<!--				<p class="site-title"><a href="--><?php //echo esc_url( home_url( '/' ) ); ?><!--" rel="home">--><?php //bloginfo( 'name' ); ?><!--</a></p>-->
<!--				--><?php
//			endif;
//			$msa_description = get_bloginfo( 'description', 'display' );
//			if ( $msa_description || is_customize_preview() ) :
//				?>
<!--				<p class="site-description">--><?php //echo $msa_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?><!--</p>-->
<!--			--><?php //endif; ?>
<!--		</div> -->
<!-- .site-branding -->
<!---->
<!--		<nav id="site-navigation" class="main-navigation">-->
<!--			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">--><?php //esc_html_e( 'Primary Menu', 'msa' ); ?><!--</button>-->
<!--			--><?php
//			wp_nav_menu(
//				array(
//					'theme_location' => 'menu-1',
//					'menu_id'        => 'primary-menu',
//				)
//			);
//			?>
<!--		</nav>-->
        <!-- #site-navigation -->

        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-5 my-auto">
                    <div class="row">
                        <div class="col-lg-12 my-auto">
                            <div class="logo"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" class="img-fluid" alt="" /></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-7 my-auto d-block d-lg-none">
                    <div class="top-action-btn">
                        <a href="tel:02 9597 3879" class="primary-btn">(02) 9597 3879 <span class="fa fa-long-arrow-right"></span></a>
                    </div>
                    <div class="device-nav" id="nav-icon">
                        <span class="fa fa-bars icon"></span>
                    </div>
                </div>
                <div class="col-lg-6 my-auto">
                    <div class="row">
                        <div class="col-lg-12 navigation my-auto">
                            <nav>
                                <ul>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Our Services</a></li>
                                    <li><a href="#">Our Projects</a></li>
                                    <li><a href="#">Community</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6 my-auto d-none d-lg-block">
                    <div class="top-action-btn">
                        <a href="tel:02 9597 3879" class="primary-btn">(02) 9597 3879 <span class="fa fa-long-arrow-right"></span></a>
                    </div>
                </div>
            </div>
        </div>


	</header><!-- #masthead -->
