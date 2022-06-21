<?php
/**
 * Template Name: About
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package msa
 */

get_header();
$post_id = getIdBySlug('about-us', 'page');
$partner_gallery = CFS()->get('about_meta', $post_id);
$title = CFS()->get('title', $post_id);
$about_us_posts = CFS()->get('about_posts', $post_id);
$about_contents = CFS()->get('content', $post_id);
$slogan = get_field('slogan', $post_id);
$author = get_field('author', $post_id);
?>
    <main id="page-about" class="site-main">
        <?php
        //  Section Hero Start
        get_template_part( 'template-parts/section', 'hero' );
        //  Section Hero End


        //  Section Intro Start
//        get_template_part( 'template-parts/section', 'intro' );
        //  Section Intro End
        ?>
<!--        Section about content Start-->
        <section class="section-about-content ks-spt">
            <div class="container">
                <h2 class="section-title"><?php echo $title ?></h2>
                <article>
                    <?php foreach($about_contents as  $k => $content): ?>
                    <div class="about-content-flex <?php echo $k%2 ==0? '':'reverse' ?>">
                        <div class="about-content--flex-item about-content--text">
                            <?php echo $content['body'] ?>
                        </div>
                        <figure class="about-content--flex-item about-content--image-container mb-0">
                            <img class="img-fluid cover-image" src="<?php echo $content['image'] ?>" alt="image">
                        </figure>
                    </div>
                    <?php endforeach ?>
                </article>
            </div>
        </section>
<!--        Section about content End-->
        <?php
        //  Section Intro Start
                get_template_part( 'template-parts/section', 'counter' );
        //  Section Intro End

        ?>
<!--        Section objective start       -->
        <section class="objective-section ks-spt">
            <div class="container">
                <?php foreach($about_us_posts as $k => $post): ?>
                <div class="single-objective">
                    <h2 class="section-title"> <?php echo $post['title'] ?></h2>
                    <div class="objective-flex <?php echo $k%2 ==0?'reverse':''?> ">
                        <div class="objective-flex--item">
                            <div class="objective--text">
                        <?php echo $post['body'] ?>
                           </div>
                        </div>
                        <figure class="objective-flex--item objective--image-container mb-0">
                            <img class="img-fluid cover-image" src="   <?php echo $post['image'] ?>" alt="mission">
                        </figure>
                    </div>
                </div>
               <?php endforeach ?>
            </div>
        </section>
<!--        Section objective End         -->

        <!--        Section slogan start       -->
        <section class="slogan-section ks-spt">
            <div class="container">
                <h2 class="section-title slogan-section--title">“<?php echo $slogan ?>”</h2>
                <h3 class="slogan-section--subtitle">-<?php echo $author ?></h3>
            </div>
        </section>
        <!--        Section slogan End         -->

        <?php
        //  Section Intro Start
        get_template_part( 'template-parts/section', 'partner' );
        //  Section Intro End

        ?>
    </main>

<?php
get_footer();