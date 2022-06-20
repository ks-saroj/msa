<?php
/**
 * Template Name: Career
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package msa
 */

get_header();
?>
    <main id="page-career" class="site-main">
        <?php

        //  Section Hero Start
        get_template_part( 'template-parts/section', 'hero' );
        //  Section Hero End

        ?>

        <section class="career-section">
            <div class="container">
                <div class="career-flex">
                    <div class="career--flex-item">
                        <div class="carrer--text">
                            <p>
                                MSA Civil and Communication is a dynamic and progressive organisation. As our company expands, we provide our staff with excellent opportunities and career paths, and the training needed to reach their individual aspirations.
                            </p>
                            <p>
                                Our people work together as a team to deliver exceptional projects.
                            </p>
                            <p>
                                As a highly regarded Infrastructure builder, MSA Civil and Communication is constantly delivering high-quality outcomes for our clients. Infrastructure building is an exciting industry, where the attitude, skill, and diligence of individuals can make a real difference.
                            </p>
                            <p>
                                We are often looking for people pursuing careers, ranging from on-site and construction (Senior project managers, site managers, foremen, or labourers) to office-based (contract administrators, estimators, finance, cadet, or undergraduates)
                            </p>
                            <p>
                                We are always on the lookout for enthusiastic people to join MSA Civil and Communication, if you’d like the opportunity to be part of our team, send your resume to info@msabuilding.com.au
                            </p>
                        </div>
                    </div>
                    <div class="career--flex-item">
                        <figure class="mb-0 career--image">
                            <img class="cover-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/career/image.png" alt="image">
                        </figure>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php
get_footer();