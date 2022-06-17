<?php

get_header();
?>
    <main id="single-projects" class="site-main">
        <?php

        //  Section Hero Start
        get_template_part( 'template-parts/section', 'hero' );
        //  Section Hero End

        // Content Service Starts
        get_template_part( 'template-parts/project/content', 'project' );
        // Content Service Starts

        // Section Projects Starts
        get_template_part( 'template-parts/section', 'project' );
        // Section Projects Ends

        ?>
    </main>

<?php
get_footer();