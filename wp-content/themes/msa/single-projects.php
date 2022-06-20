<?php

get_header();
$overview = get_field('overview');
$scope_of_works = get_field('scope');
$client = get_field('client');
$project_gallery = CFS()->get('gallery');
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
        <section class="project-section ks-smb ks-smt">
            <div class="container">
                <h2 class="section-title">Chapel Rd, Bankstown, St. Felix Primary School, New Pedestrian Crossing</h2>
                <div class="project-slider--container">
                    <div class="arrows left prev3"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/angle-left.png" class="img-fluid" alt=""/></div>
                    <div class="arrows right next3"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/angle-right.png" class="img-fluid" alt=""/></div>
                        <div id="project-slider">
                            <?php
                            if($project_gallery):
                                foreach ($project_gallery as $item):
                                    ?>
                            <figure class="mb-0 project-slider--image-container">
                                <img src="<?php echo $item['image']; ?>" alt="<?php echo $item['image']; ?>"
                                     class="img-fluid cover-image">
                            </figure>
                            <?php
                            endforeach;
                        endif;
                        ?>
                        </div>
                </div>
                <div class="project-content-flex">
                    <div class="single-project--flex-item">
                        <h2 class="single-project--subtitle">
                            OverView:
                        </h2>
                        <p class="single-project--text">
                            <?php echo nl2br(htmlspecialchars_decode($overview)); ?>                        </p>
                    </div>
                    <div class="single-project--flex-item">
                        <h2 class="single-project--subtitle">
                            Scope of Works
                        </h2>
                        <p class="single-project--text">
                            <?php echo htmlspecialchars_decode($scope_of_works); ?>
                        </p>
                    </div>
                    <div class="single-project--flex-item">
                        <h2 class="single-project--subtitle">
                           Client:
                        </h2>
                        <figure class="mb-0">
                            <img src="<?php echo $client['url']; ?>" alt="<?php echo $client['alt']; ?>"
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