<?php
    $overview = get_field('overview');
    $scope_of_works = get_field('scope');
    $client = get_field('client');
    $project_gallery = CFS()->get('gallery');

?>

<section class="project-section section-padding-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="project-slider">
                    <div class="arrows left prev3"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/left-arrow.png" class="img-fluid" alt=""/></div>
                    <div class="arrows right next3"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/right-arrow.png" class="img-fluid" alt=""/></div>
                    <div id="project-slider">
                        <?php
                        if($project_gallery):
                        foreach ($project_gallery as $item):
                            ?>
                            <img src="<?php echo $item['image']; ?>" class="img-fluid" alt="<?php echo $item['caption']; ?>" />
                        <?php
                        endforeach;
                        endif;
                        ?>
                    </div>
                </div>
                <div class="main-box">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="boxes">
                                <h2 class="dark-blue">Overview:</h2>
                                <p>
                                    <?php echo nl2br(htmlspecialchars_decode($overview)); ?>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="boxes">
                                <h2 class="dark-blue">Scope of Works:</h2>
                                <?php echo htmlspecialchars_decode($scope_of_works); ?>
                            </div>
                        </div>
                        <?php  if(isset($client['url'])): ?>
                        <div class="col-md-3">
                            <div class="boxes">
                                <h2 class="dark-blue">Client</h2>
                                <div class="logo">
                                    <img src="<?php echo $client['url']; ?>" class="img-fluid" alt="<?php echo $client['alt']; ?>">
                                </div>
                            </div>
                        </div>
                        <?php  endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>