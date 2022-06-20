<?php

get_header();
?>
    <main id="single-projects" class="site-main">
        <?php

        //  Section Hero Start
//        get_template_part( 'template-parts/section', 'hero' );
        //  Section Hero End

        // Content Service Starts
//        get_template_part( 'template-parts/project/content', 'project' );
        // Content Service Starts
?>

<!--        Featured Project    -->
        <section class="project-section ks-smb ks-spb">
            <div class="container">
                <h2 class="section-title">Chapel Rd, Bankstown, St. Felix Primary School, New Pedestrian Crossing</h2>
                <div class="project-slider--container">
                    <div class="arrows left prev3"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/angle-left.png" class="img-fluid" alt=""/></div>
                    <div class="arrows right next3"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/angle-right.png" class="img-fluid" alt=""/></div>
                    <div id="project-slider">
                        <figure class="mb-0 project-slider--image-container">
                            <img src="<?php echo get_template_directory_uri()?>/assets/images/slider/slider.png" alt="featured image"
                                 class="img-fluid cover-image">
                        </figure>
                        <figure class="mb-0 project-slider--image-container">
                            <img src="<?php echo get_template_directory_uri()?>/assets/images/slider/n1.png" alt="featured image"
                                 class="img-fluid cover-image">
                        </figure>
                    </div>
                </div>
                <div class="project-content-flex">
                    <div class="single-project--flex-item">
                        <h2 class="single-project--subtitle">
                            OverView:
                        </h2>
                        <p class="single-project--text">
                            MSA Civil has delivered the Pedestrian Crossing at St Felix Primary School, Bankstown on behalf of the City of Canterbury Council.
                        </p>
                    </div>
                    <div class="single-project--flex-item">
                        <h2 class="single-project--subtitle">
                            Scope of Works
                        </h2>
                        <p class="single-project--text">
                            Demolition and installation of concrete K&G, Footpaths, Kerb ramps and Driveways.
                            Installation of concrete Threshold
                            Of installation Asphalt Road re-sheet
                            Installation of Signage and Line marking
                        </p>
                    </div>
                    <div class="single-project--flex-item">
                        <h2 class="single-project--subtitle">
                           Client:
                        </h2>
                        <figure class="mb-0">
                            <img src="<?php echo get_template_directory_uri()?>/assets/images/prooject_inner.png" alt="image"
                            class="img-fluid cover-image">
                        </figure>

                    </div>
                </div>
            </div>
        </section>
<!--        Featured  Project   -->



        <?php
        // Section Projects Starts
        get_template_part( 'template-parts/section', 'project' );
        // Section Projects Ends

        ?>
    </main>

<?php
get_footer();