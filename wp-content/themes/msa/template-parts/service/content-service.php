<?php
$featured_projects = get_field('featured_project');

?>
<div class="featured-service-section ks-spt">
    <div class="container">
        <div class="featured-service--flex">
            <div class="featured-service--item">
                <div class="featured-service--text">
                    <div class="service-content">
                        <?php the_content(); ?>
                    </div>
                    <div class="start-project-btn">
                        <button class="ks-btn ks-btn-dark mt-4">
                            <a class="no-decoration" href="/contact/"><span class="arrow-light">
                                    <?php if ($post->post_name === 'emergency-works'): ?>
                                        Contact Us
                                    <?php else: ?>
                                        Start a Project With Us
                                    <?php endif; ?>
                                </span></a>
                        </button>
                    </div>
                </div>

            </div>
            <?php if ($featured_projects): ?>
                <div class="featured-service--item">
                    <h2 class="section-title featured-service--title">
                        Featured Project
                    </h2>
                    <?php
                    foreach ($featured_projects as $post):
                        // Setup this post for WP functions (variable must be named $post).
                        setup_postdata($post);
                        $project_thumbnail = get_field('custom_thumbnail', $post);
                        ?>
                        <a href="<?php the_permalink(); ?>">
                            <figure class="featured-section--image-container">
                                <img src="<?php echo $project_thumbnail['url'] ?>" alt="featured project"
                                     class="img-fluid cover-image">
                            </figure>
                        </a>
                        <a href="<?php the_permalink(); ?>"><h2
                                    class="featured-service--subtitle"><?php the_title(); ?></h2></a>
                    <?php endforeach ?>
                </div>
            <?php endif ?>
        </div>
    </div>
</div>
