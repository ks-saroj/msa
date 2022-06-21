<?php
get_header();
?>
    <main id="page-service" class="site-main">
        <?php

        //  Section Hero Start
        get_template_part( 'template-parts/section', 'hero' );
        //  Section Hero End

        // Content Service Starts
        get_template_part( 'template-parts/service/content-service' );
        // Content Service End
?>


        <?php
        // Section Partner Starts
        get_template_part( 'template-parts/section', 'partner' );
        // Section Partner Ends

        // Section Service Starts
        get_template_part( 'template-parts/section', 'service',array(
                'show_counter'  => true,
                'show_slider'   => true
        ) );
        // Section Service Ends
        ?>
    </main>

<?php
get_footer();