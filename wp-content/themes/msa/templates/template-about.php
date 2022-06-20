<?php
/**
 * Template Name: About
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package msa
 */

get_header();
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
        <section class="section-about-content">
            <div class="container">
                <h2 class="section-title">About MSA Civil and Communications</h2>
                <article>
                    <div class="about-content">
                            <div class="about-content--text">
                                <p>MSA Civil and Communications Pty Ltd is an Australian owned Civil engineering company founded in 2011. Since then, the company has grown to become one of the most respected civil engineering companies in Sydney with over 50+ employees.  Our speciality is technical urban projects. With a range of skilled personnel and specialised plant, we have the flexibility, knowledge, and depth to deliver complex infrastructure projects and react quickly to changes in scope.</p>

                                <p>MSA Civil and Communication is known for its quality work. We are proud of our private ownership which gives us the flexibility to work with any partner. Our collaborative approach and a real desire to get things done help our customers and partners deliver the results they want each and every time. We offer clients a vertically integrated business structure. We’re the team people want on their side and our innovative approach to partnering has been recognised with prestigious accolades.</p>

                                <p>With safety, our approach is simple. No compromises – ever. If it cannot be done safely, we won’t do it. Our project and risk management regimes help us manage challenges and complexities. Putting projects and relationships first, we’re known for sorting out any problems that do arise, in person. We’re committed to quality.</p>
                            </div>
                        <figure class="about-content--image mb-0">
                            <img class="cover-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/about/about-bg.png" alt="image">
                        </figure>
                    </div>
                    <div class="about-content reverse">
                        <div class="about-content--text">
                            <p>Our attitude is to do it right the first time, every time. We’re AS/NZS ISO 9001, 45001 & 14001 certified across all our operations. Our collaborative approach to working with customers to determine their quality goals has been recognised with numerous awards.</p>

                            <p>We know our clients are under pressure to complete projects on time and within budget. That is why we are constantly evolving our design techniques, delivery methods and technology offering to complete projects quicker, more cost-effectively and with less environmental and community impact.</p>

                            <p>We are experts in working in partnership with Local Government Agencies across a diverse range of disciplines including Streetscape Upgrades, Concrete Kerb & Gutters, Concrete Footpaths, Stormwater Upgrades, Road Re-Construction, Road re-sheet, Parks & Landscapes, and minor restorations.</p>
                        </div>
                        <figure class="about-content--image mb-0">
                            <img class="cover-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/about/about-2.png" alt="image">
                        </figure>
                    </div>
                </article>
            </div>
        </section>
<!--        Section about content End-->
        <?php
        //  Section Intro Start
                get_template_part( 'template-parts/section', 'counter' );
        //  Section Intro End

        ?>
<!--        Section mission start       -->
        <section class="mission-section ks-spt">
            <div class="container">
                <h2 class="section-title">Our Mission</h2>
                <div class="mission-flex">
                    <div class="mission-flex--item">
                        <div class="mission--text">
                            <p>MSA Civil and Communications endeavours to deliver high-quality projects with meticulous management, on schedule. We accomplish this by never compromising on our values and continuing to put our clients at the fore and relentlessly pursuing innovation in building techniques.</p>

                            <p>Our clients trust our transparency, integrity and reliability. We value our relationships so are never complacent in our reputation and strive to become a significant name in the Australian major market. That is our mission.</p>

                        </div>
                    </div>
                    <figure class="mission-flex--item mission-image mb-0">
                        <img class="cover-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/about/mission.png" alt="mission">
                    </figure>
                </div>
            </div>
        </section>
<!--        Section mission End         -->

    <!--        Section value start       -->
        <section class="value-section">
            <div class="container">
                <h2 class="section-title">Our Value</h2>
                <div class="value-flex">
                    <figure class="value-flex--item value-image mb-0">
                        <img class="cover-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/about/value.png" alt="value">
                    </figure>
                    <div class="value-flex--item">
                        <div class="value--text">
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
                </div>
            </div>
        </section>
        <!--        Section value End         -->

        <!--        Section slogan start       -->
        <section class="slogan-section ks-spt">
            <div class="container">
                <h2 class="section-title slogan-section--title">“Our success begins with the satisfaction of our clients.”</h2>
                <h3 class="slogan-section--subtitle">-Managing Director</h3>
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