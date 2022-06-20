<?php
$args = array(
    'post_status' => 'publish',
    'orderby' => 'publish_date',
    'post_type' => 'projects',
    'order' => 'DESC',
    'posts_per_page' => '-1',
);
$the_query = new WP_Query($args);

// The Loop
if ($the_query->have_posts()) :
?>
<section class="archive-project ks-spt ks-spb ks-smb" data-parallax="scroll"
         data-image-src="<?php echo get_template_directory_uri(); ?>/assets/images/archive-project.png">
    <div class="container">
        <div class="d-flex justify-content-center ks-smb filter-box">
            <label for=""></label>
            <select name="filter_by" class="form-control" id="">
                    <option value="">Filter by...</option>
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
            </select>
        </div>

        <div class="project-box-container">
            <?php
            while ($the_query->have_posts()) :
                $the_query->the_post();
                $custom_thumbnail = get_field('custom_thumbnail');
                ?>
                <div class="project-box">
                    <a href="<?php the_permalink(); ?>">
                        <figure class="mb-0">
                            <img src="<?php echo $custom_thumbnail['url'] ?>" class="img-fluid cover-image w-100" alt="">
                        </figure>
                    </a>
                    <a href="<?php the_permalink(); ?>">
                        <h2 class="post-title mb-0"><?php the_title(); ?></h2>
                    </a>
                </div>
            <?php
            endwhile;
            ?>
        </div>
    </div>
</section>
<?php
endif;
wp_reset_postdata();
?>