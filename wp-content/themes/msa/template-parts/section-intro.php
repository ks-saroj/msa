<?php
$post_id = getIdBySlug('section-intro','sections');
$intro_gallery = CFS()->get('gallery',$post_id);
$content = apply_filters('the_content', get_post_field('post_content', $post_id));
if(is_front_page()):
?>
<section class="section-one section-intro">
    <div class="container">
        <div class="row">
            <div class="col-md-6 my-auto">
                <div class="left-box" data-aos="fade-up" data-aos-duration="1600">
                    <p>
                        <?php echo $content; ?>
                    </p>
                    <div class="intro-client-image">
                        <?php
                        foreach ($intro_gallery as $item):
                            ?>
                            <img src="<?php echo $item["image"]; ?>" class="img-fluid" alt=""/>
                        <?php
                        endforeach;
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6 my-auto">
                <div class="right-box" data-aos="fade-up" data-aos-duration="2200">
                    <?php echo get_the_post_thumbnail($post_id, 'full', ['class' => 'img-fluid', 'width' => '100%']); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php else: ?>
<section class="section-intro">
    <div class="container">
        <div class="row">
            <div class="col-md-7 my-auto">
                <div class="left-box">
                    <p>
                        <?php echo $content; ?>
                    </p>
                </div>
            </div>
            <div class="col-md-5 my-auto">
                <div class="intro-client-image">
                    <?php
                    foreach ($intro_gallery as $item):
                        ?>
                        <img src="<?php echo $item["image"]; ?>" class="img-fluid" alt=""/>
                    <?php
                    endforeach;
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>