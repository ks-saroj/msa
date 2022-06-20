<?php
/**
 * Template Name: Sustainability
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package msa
 */

get_header();
$post_id = getIdBySlug('sustainability', 'page');
$certificate = CFS()->get('certificate', $post_id);
$sustainability_contents = CFS()->get('contents', $post_id);
$post_title = get_field('title', $post_id);
$post_body = get_field('body', $post_id);
$image = get_field('image', $post_id);
?>
    <main id="page-sustainablility" class="site-main">
        <?php
            //  Section Hero Start
            get_template_part( 'template-parts/section', 'hero' );
            //  Section Hero End
        ?>
        <div class="sustainability-section ks-spt ks-spb">
            <div class="container">
                <div class="sustainability--top-flex">
                    <div class="sustainability--top-flex-item sustainability--top-flex-text-container">
                        <h2 class="section-title sustainability--title"><?php echo $post_title ?></h2>
                        <p class="sustainability--subtitle"><?php echo $post_body ?></p>
                    </div>
                    <figure class="sustainability--top-flex-item mb-0 sustainability--top-flex-image-container">
                        <img src="<?php  echo $image['url'] ?>" class="cover-image img-fluid" alt="sustainability image"/>
                    </figure>
                </div>
                <div class="sustainability--bottom-flex">
                    <figure class="sustainability--bottom-flex-item mb-0 sustainability--bottom-flex-image-container">
                        <img src="<?php echo $certificate ?>" class="cover-image img-fluid" alt="sustainability image"/>
                    </figure>
                    <div class="sustainability--bottom-flex-item sustainability--bottom-flex-text-container">
                        <?php foreach($sustainability_contents as $sustainability_content): ?>
                        <div>
                            <h2 class="section-title sustainability--title"><?php echo $sustainability_content['content_title'] ?></h2>
                            <p class="sustainability--subtitle"><?php echo $sustainability_content['content_body'] ?> </p>
                        </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
        </div>
    </main>

<?php
get_footer();