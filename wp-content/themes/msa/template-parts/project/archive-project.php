<?php
$args = array(
    'post_status' => 'publish',
    'orderby' => 'publish_date',
    'post_type' => 'projects',
    'order' => 'DESC',
);
$the_query = new WP_Query($args);

$all_terms = get_terms([
    'taxonomy' => 'projects-categories',
    'hide_empty' => false,
]);
?>
    <section class="archive-project ks-spt ks-spb ks-smb">
            <div class="d-flex justify-content-center ks-smb filter-box">
                <label for=""></label>
                <select name="filter_by" class="form-control" id="projectFilter">
                    <option value="">Filter by...</option>
                    <?php
                    foreach ($all_terms as $v):
                        ?>
                        <option value="<?php echo $v->slug; ?>"><?php echo $v->name; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <?php
//             The Loop
                        if ($the_query->have_posts()) :
                            ?>
                            <div class="project-scrollBox" id="scrollBox">
                                <div class="container project-box-container" id="ajax-projects">
                                    <?php
                                    $i = 0;
                                    while ($the_query->have_posts()) :
                                        $the_query->the_post();
                                        $custom_thumbnail = get_field('custom_thumbnail');
                                        $terms = get_the_terms(get_the_ID(), 'projects-categories');
                                        $terms = join(' ', wp_list_pluck($terms, 'slug'));
                                        ?>
                                        <div class="project-box">
                                            <div class="
                                            <?php echo $terms; ?>">

                                                <a href="<?php the_permalink(); ?>">
                                                    <figure class="mb-0">
                                                        <img src="<?php echo $custom_thumbnail['url'] ?>"
                                                             class="img-fluid cover-image w-100" alt="">
                                                    </figure>
                                                </a>
                                                <a href="<?php the_permalink(); ?>">
                                                    <h2 class="post-title mb-0"><?php the_title(); ?></h2>
                                                </a>
                                            </div>
                                        </div>
                                    <?php
                                    $i= $i+1;
                                    endwhile;
                                    ?>
                                    <div class="project-load-more">
                                        <button class="ks-btn ks-btn-dark" id="load_more_projects_btn">Load More</button>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
    </section>
<?php
wp_reset_postdata();
?>