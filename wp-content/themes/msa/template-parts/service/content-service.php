<?php
$featured_projects = get_field('featured_project');
?>
<section class="services-section-one section-padding-top">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="left-box">
                    <div class="row">
                        <div class="col-md-11">
                            <h2>How we do it.</h2>
                            <p>
                                <?php the_content(); ?>
                            </p>
                        </div>
                    </div>
                    <a href="#" class="primary-btn">
                        Start A Project With Us
                        <span class="fa fa-long-arrow-right"></span>
                    </a>
                </div>
            </div>
            <?php if( $featured_projects ): ?>
            <div class="col-md-6">
                <h2>Featured Project<h2>
                <?php
                foreach( $featured_projects as $post ):
                // Setup this post for WP functions (variable must be named $post).
                setup_postdata($post);
                $project_thumbnail = get_field('custom_thumbnail',$post);
                ?>
                <div class="row">
                    <div class="col-md-12 single-featured-project">
                        <div class="image-box">
                            <img src="<?php echo $project_thumbnail['url'] ?>" class="img-fluid" alt="" />
                        </div>
                        <a class="text-decoration-none" href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>
