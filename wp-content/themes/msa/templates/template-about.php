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
                <div class="single-objective">
                    <h2 class="section-title">Our Mission</h2>
                    <div class="objective-flex">
                        <div class="objective-flex--item">
                            <div class="objective--text">
                                <p>MSA Civil and Communications endeavours to deliver high-quality projects with meticulous management, on schedule. We accomplish this by never compromising on our values and continuing to put our clients at the fore and relentlessly pursuing innovation in building techniques.</p>

                                <p>Our clients trust our transparency, integrity and reliability. We value our relationships so are never complacent in our reputation and strive to become a significant name in the Australian major market. That is our mission.</p>
                            </div>
                        </div>
                        <figure class="objective-flex--item objective--image-container mb-0">
                            <img class="img-fluid cover-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/about/mission.png" alt="mission">
                        </figure>
                    </div>
                </div>
                <div class="single-objective">
                    <h2 class="section-title">Our Value</h2>
                    <div class="objective-flex reverse">
                        <div class="objective-flex--item">
                            <div class="objective--text">
                                <p>
                                    We recognise the lasting and permanent presence of our work activities and strive to protect the environment by upholding effective and efficient environmental and sustainable practices as part of everyday business. Our employees are our greatest asset.
                                </p>
                                <p>
                                    Great teamwork allows White Construction to benefit from the combined strength of our individual talents, skills and expertise which are vital when tackling challenging construction projects. We measure, monitor, analyse and improve productivity, processes, tasks and ourselves to satisfy clients and our own high expectations.
                                </p>
                                <p>
                                    We work with enthusiasm, courtesy and intellect, and are driven to surpass what has already been achieved. We are not afraid to stand alone, especially when it is the right thing to do.
                                </p>
                            </div>
                        </div>
                        <figure class="objective-flex--item objective--image-container mb-0">
                            <img class="img-fluid cover-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/about/value.png" alt="mission">
                        </figure>
                    </div>
                </div>
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