<?php
$post_id = getIdBySlug('section-blog','sections');
$args = array(
    'post_status' => 'publish',
    'orderby' => 'publish_date',
    'post_type' => 'post',
    'order' => 'DESC',
    'posts_per_page' => '2',
);
$the_query = new WP_Query($args);
// The Loop
if ($the_query->have_posts()) :
?>
<section class="blog-section ks-spb">
    <div class="container">
        <h2 class="section-title">Latest News & Industry Insights</h2>
        <div class="blog-grid">
            <?php
            while ( $the_query->have_posts() ) :
            $the_query->the_post();
            $custom_thumbnail = get_field('custom_thumbnail');
            ?>
            <div class="blog-box">
                <a href="">
                    <figure>
                        <img src="<?php echo $custom_thumbnail['url']; ?>"
                             class="img-fluid cover-image" alt="">
                    </figure>
                </a>
                <a href="#">
                    <h3 class="post-title"><?php echo the_title(); ?></h3>
                </a>
            </div>
            <?php
            endwhile;
            ?>
        </div>
    </div>
</section>
<?php endif ?>