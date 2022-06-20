<?php

get_header();
$featured_projects = get_field('featured_project');
?>
    <main id="page-service" class="site-main">
        <?php

        //  Section Hero Start
        get_template_part( 'template-parts/section', 'hero' );
        //  Section Hero End

        // Content Service Starts
//        get_template_part( 'template-parts/service/content', 'service' );
        // Content Service End
?>
<!--        Featured Service Starts      -->
        <div class="featured-service-section ks-spt">
            <div class="container">
                <div class="featured-service--flex">
                    <div class="featured-service--item">
                        <p class="featured-service--text">
                            MSA understands the importance of this item as it is the most comprehensive type of road project that the Council undertakes. MSA provides full services in completing these works from the demolition stage to concrete installation and handover.
                        </p>
                        <button class="ks-btn ks-btn-dark">
                            <span class="arrow-light"> Start A Project With Us</span>
                        </button>
                    </div>
                    <?php if( $featured_projects ): ?>
                    <div class="featured-service--item">
                        <h2 class="section-title featured-service--title">
                            Featured Project
                        </h2>
                        <?php
                        foreach( $featured_projects as $post ):
                            // Setup this post for WP functions (variable must be named $post).
                            setup_postdata($post);
                            $project_thumbnail = get_field('custom_thumbnail',$post);
                            ?>
                      <a href="<?php the_permalink(); ?>">  <figure class="featured-section--image-container">
                            <img src="<?php echo $project_thumbnail['url'] ?>" alt="featured project"
                            class="img-fluid cover-image">
                        </figure></a>
                    <a href="<?php the_permalink(); ?>">  <h2 class="featured-service--subtitle"><?php the_title(); ?></h2></a>
                           <?php endforeach ?>
                            </div>
                        <?php endif ?>
                </div>
            </div>
        </div>
<!--        Content Service Ends        -->

        <?php
        // Section Partner Starts
        get_template_part( 'template-parts/section', 'partner' );
        // Section Partner Ends

        // Section Service Starts
        get_template_part( 'template-parts/section', 'service',array(
                'show_counter'  => true,
                'show_slider'   => true
        ) );
        // Section Service Ends
        ?>
    </main>

<?php
get_footer();