<?php
/**
 * Template Name: Sustainability
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package msa
 */

get_header();
?>
    <main id="page-sustainablility" class="site-main">
        <?php
            //  Section Hero Start
            get_template_part( 'template-parts/section', 'hero' );
            //  Section Hero End
        ?>
        <div class="sustainability-section ks-spt">
            <div class="container">
                <div class="sustainability--top-flex">
                    <div class="sustainability--top-flex-item">
                        <h2 class="section-title sustainability--title">Environmental approach</h2>
                        <p class="sustainability--subtitle">MSA Civil & Communications Pty Ltd recognise the lasting and permanent presence of our work activities and strive to protect the environment by upholding effective and efficient environmental and sustainable practices as part of the everyday business, we operate an Environmental Management System developed and maintained in compliance with ISO14001: 2004 to assure Environmental work performed meets the Client’s and MSA Civil & Communications Pty Ltd.’s requirements. We approached Reduce, Reuse and Renew the recycling approach to minimise the impact and improve the environmental quality. Our environmental management system constantly approaching ways to reduce Carbon emissions to impact global wide.</p>
                    </div>
                    <figure class="sustainability--top-flex-item mb-0">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/sustainability/sustain.png" class="cover-image" alt="sustainability image"/>
                    </figure>
                </div>
                <div class="sustainability--bottom-flex">
                    <figure class="sustainability--bottom-flex-item mb-0">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/sustainability/cert.png" class="cover-image" alt="sustainability image"/>
                    </figure>
                    <div class="sustainability--bottom-flex-item">
                        <div>
                            <h2 class="section-title sustainability--title">Health and Safety at MSA</h2>
                            <p class="sustainability--subtitle">MSA Civil & Communications Pty Ltd is committed to making safety a top priority for all employees and contractors. We integrate safety and risk management into our daily operations, ensuring that it becomes a natural part of our operation’s culture, enhancing management/worker cooperation and providing long-term positive results. We operate on a Workers Health & Safety Management System developed and maintained in compliance with ISO 45001 and our Safety officer provides advice and support in the ongoing maintenance and improvement of health and safety company practices to assure Health and Safety at work performed and meet the Client’s and MSA Civil & Communications Pty Ltd.’s requirements. </p>
                        </div>
                        <div>
                            <h2 class="section-title sustainability--title">Quality Construction</h2>
                            <p class="sustainability--subtitle">MSA Civil & Communications Pty Ltd operates in the field of infrastructure which by its nature involves quality processes that need to be managed to ensure the quality delivery of our goods and services. We are in compliance with AS/NZS ISO 9001:2008 Quality Management Systems committed to meeting clients’ satisfaction through excellent performance. To achieve this vision, we continually strive not only to meet client expectations but to exceed them. We monitor our performance on all projects to enhance our processes, customer relationships and industry recognition.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

<?php
get_footer();