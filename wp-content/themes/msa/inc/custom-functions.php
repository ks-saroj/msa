<?php
/**
 * returns id by slug
 * @param $slug
 * @return int
 */
function getIdBySlug($slug, $post_type = 'post'){
//    return url_to_postid( site_url($slug) );
    if ( $post = get_page_by_path( $slug, OBJECT, $post_type ) ){
        $id = $post->ID;
    }else{
        $id = 0;
    }
    return $id;
}

//Enable excerpt on pages
add_action( 'init', 'msa_add_excerpts_to_pages' );
function msa_add_excerpts_to_pages() {
    add_post_type_support( 'page', 'excerpt' );
}

/**
 * social profile setting register starts
 */
add_filter('admin_init', 'msa_contact_handle');
function msa_contact_handle()
{
    /*Contact Number*/
    register_setting('general', 'msa_contact', 'esc_attr');
    add_settings_field('msa_contact', '<label for="msa_contact">'.__('Contact Number' , 'msa_contact' ).'</label>' , 'msa_contact_register_fields_html', 'general');

    /*Contact Email Address*/
    register_setting('general', 'msa_contact_email', 'esc_attr');
    add_settings_field('msa_contact_email', '<label for="msa_contact_email">'.__('Contact Email' , 'msa_contact_email' ).'</label>' , 'msa_contact_email_register_fields_html', 'general');

//    /*Facebook*/
//    register_setting('general', 'msa_facebook', 'esc_attr');
//    add_settings_field('msa_facebook', '<label for="msa_facebook">'.__('Facebook Handle' , 'msa_facebook' ).'</label>' , 'msa_facebook_register_fields_html', 'general');
//
//    /*Instagram*/
//    register_setting('general', 'msa_instagram', 'esc_attr');
//    add_settings_field('msa_instagram', '<label for="msa_instagram">'.__('Instagram Handle' , 'msa_instagram' ).'</label>' , 'msa_instagram_register_fields_html', 'general');

    /*Linkedin*/
    register_setting('general', 'msa_linkedin', 'esc_attr');
    add_settings_field('msa_linkedin', '<label for="msa_linkedin">'.__('Linkedin Handle' , 'msa_linkedin' ).'</label>' , 'msa_linkedin_register_fields_html', 'general');

    /*Head Office*/
    register_setting('general', 'msa_head_office', 'esc_attr');
    add_settings_field('msa_head_office', '<label for="msa_head_office">'.__('Head Office' , 'msa_head_office' ).'</label>' , 'msa_head_office_register_fields_html', 'general');

    /*Postal*/
    register_setting('general', 'msa_postal', 'esc_attr');
    add_settings_field('msa_postal', '<label for="msa_postal">'.__('Postal' , 'msa_postal' ).'</label>' , 'msa_postal_register_fields_html', 'general');


}
function msa_contact_register_fields_html()
{
    $value_contact = get_option( 'msa_contact', '' );
    echo '<input type="text" id="msa_contact" class="regular-text" name="msa_contact" value="' . $value_contact . '" />';
}
function msa_contact_email_register_fields_html()
{
    $value_contact_email = get_option( 'msa_contact_email', '' );
    echo '<input type="text" id="msa_contact_email" class="regular-text" name="msa_contact_email" value="' . $value_contact_email . '" />';
}
//function msa_facebook_register_fields_html()
//{
//    $value_facebook = get_option( 'msa_facebook', '' );
//    echo '<input type="text" id="msa_facebook" class="regular-text" name="msa_facebook" placeholder="example: themarketingco" value="' . $value_facebook . '" />';
//}
//function msa_instagram_register_fields_html()
//{
//    $value_instagram = get_option( 'msa_instagram', '' );
//    echo '<input type="text" id="msa_instagram" class="regular-text" name="msa_instagram" placeholder="example: the_marketing_co" value="' . $value_instagram . '" />';
//}
function msa_linkedin_register_fields_html()
{
    $value_linkedin = get_option( 'msa_linkedin', '' );
    echo '<input type="text" id="msa_linkedin" class="regular-text" name="msa_linkedin" placeholder="example: company/the-marketing-co/" value="' . $value_linkedin . '" />';
}
function msa_head_office_register_fields_html()
{
    $value_head_office = get_option( 'msa_head_office', '' );
    echo '<textarea id="msa_head_office" class="regular-text" name="msa_head_office">'.$value_head_office.'</textarea>';
}
function msa_postal_register_fields_html()
{
    $value_postal = get_option( 'msa_postal', '' );
    echo '<textarea id="msa_postal" class="regular-text" name="msa_postal">'.$value_postal.'</textarea>';
}

/**
 * inline color css function
 * will use value from wordpress customizer
 */
function ks_generate_theme_option_css(){

    $highlighted_color = get_theme_mod('msa_highlighted_color');
    if(!empty($highlighted_color)):
        ?>
        <style type="text/css" id="fk-theme-option-css">

            .primary-link-color,
            /*.hero-section h2,*/
            /*.partnerships-section h2,*/
            /*.featured-section h2,*/
            .featured-section .arrows-box span,
            /*.services-section h2,*/
            /*.services-section h3,*/
            /*.news-section h2,*/
            .completed-project h2,
            .completed-project .boxes h4,
            /*.project-section h2,*/
            .about-total-project h2,
            .about-total-project .boxes h4,
            .services-section-one h2,
            .services-section-one h3,
            .services-total-project .boxes h4,
            /*.community-section h2,*/
            .contact-section h2{
                color: <?php echo $highlighted_color; ?> !important;
            }

            .contact-section .right-box button{
                border-color: <?php echo $highlighted_color; ?> !important;
            }

            .primary-btn, header,
            .client-section .iner::before,
            .featured-section::after,
            .services-section .slider-action .arrows-btn,
            #return-to-top,
            .contact-section .right-box button,
            footer,
            .sticky-form-title{
                background-color: <?php echo $highlighted_color; ?> !important;
            }

        </style>
    <?php
    endif;

    //btn color
    $secondary_color = get_theme_mod('msa_secondary_color');
    if(!empty($secondary_color)):
        ?>
        <style type="text/css">
            .services-section,
            .featured-section::before,
            #page-about .service-text-section,
            .contact-section .right-box{
                background: <?php echo $secondary_color; ?> !important;
            }
            .hero-section{
                background-color: <?php echo $secondary_color; ?> !important;
            }
        </style>
    <?php
    endif;


    //tertiary color
    $tertiary_color = get_theme_mod('msa_tertiary_color');
    if(!empty($tertiary_color)):
        ?>
        <style type="text/css">
            .primary-btn.btn-light-blue {
                background-color: <?php echo $tertiary_color; ?> !important;
            }

        </style>
    <?php
    endif;

}

//add_action( 'wp_head', 'ks_generate_theme_option_css' );



//load more projects via ajax
function more_project_ajax(){
    $posts_per_page = (isset($_POST["post_per_page"])) ? $_POST["post_per_page"] : 3;
    $page = (isset($_POST['projectPageNumber'])) ? $_POST['projectPageNumber'] : 0;
    header("Content-Type: text/html");

    $args = array(
        'posts_per_page'     =>     $posts_per_page,
        'post_status'        =>     'publish',
        'orderby'            =>     'publish_date',
        'post_type'          =>     'projects',
        'order'              =>     'DESC',
        'paged'              =>     $page,
    );
    $out = [];

    $loop = new WP_Query($args);
    if ($loop -> have_posts()) :  while ($loop -> have_posts()) : $loop -> the_post();
        $custom_thumbnail = get_field('custom_thumbnail');
        $terms = get_the_terms(get_the_ID(), 'projects-categories');
        $terms = join(' ', wp_list_pluck($terms, 'slug'));

       $out[] = '<div class="'.$terms.'">'.
                    '<a href="'.get_the_permalink().'">'.
                        '<figure class="mb-0">'.
                            '<img src="'.$custom_thumbnail['url'].'" class="img-fluid cover-image w-100" alt="">'.
                        '</figure>'.
                    '</a>'.
                    '<a href="'.get_the_permalink().'">'.
                        '<h2 class="post-title mb-0">'.get_the_title().'</h2>'
                    .'</a>'
                .'</div>';
    endwhile;
    endif;
    if ( $page == $loop->max_num_pages ) {
        $hide_load_more = TRUE;
    }
    wp_reset_postdata();
    $resp = [
        'data'              => $out,
        'hide_load_more'  => $hide_load_more ?? NULL,
    ];
    echo json_encode($resp);
    exit();
}

add_action('wp_ajax_nopriv_more_project_ajax', 'more_project_ajax');
add_action('wp_ajax_more_project_ajax', 'more_project_ajax');

//load more services via ajax
function more_service_ajax(){
    $postsp_er_page = (isset($_POST["post_per_page"])) ? $_POST["post_per_page"] : 5;
    $page = (isset($_POST['projectPageNumber'])) ? $_POST['projectPageNumber'] : 0;
    header("Content-Type: text/html");

    $args = array(
        'post_status'       => 'publish',
        'orderby'           => 'publish_date',
        'post_type'         => 'services',
        'order'             => 'DESC',
        'posts_per_page'    =>  5,
        'paged'             =>  $page,
    );

    $out = [];

    $loop = new WP_Query($args);
    if ($loop -> have_posts()) :  while ($loop -> have_posts()) : $loop -> the_post();
        $custom_thumbnail = get_field('custom_thumbnail');
        $out[] = '<div>'.
                        '<a href="'.get_the_permalink().'">'.
                            '<figure>'.
                                '<img src="'.$custom_thumbnail['url'].'" class="img-fluid cover-image w-100" alt="">'.
                            '</figure>'.
                        '</a>'.
                        '<a href="'.get_the_permalink().'">'.
                            '<h2 class="post-title">'.get_the_title().'</h2>'.
                        '</a>'.
                '</div>';
    endwhile;
    endif;
    if ( $page == $loop->max_num_pages ) {
        $hide_load_more = TRUE;
    }
    wp_reset_postdata();
    $resp = [
        'data'              => $out,
        'hide_load_more'  => $hide_load_more ?? NULL,
    ];
    echo json_encode($resp);
    exit();
}

add_action('wp_ajax_nopriv_more_service_ajax', 'more_service_ajax');
add_action('wp_ajax_more_service_ajax', 'more_service_ajax');

