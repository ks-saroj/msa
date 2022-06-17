<?php


class MSACustomPostTypes
{
    public static function init(){
        add_action('init',array(__CLASS__,'msa_register_taxonomy'));
        add_action('init',array(__CLASS__,'msa_register_custom_post_type'));
    }

    public static function msa_register_taxonomy(){
        register_taxonomy( 'projects-categories', 'projects', array(
            'labels' => array(
                'name'                      => _x( 'Project Categories', 'taxonomy general name', 'msa' ),
                'singular_name'             => _x( 'Project Category', 'taxonomy singular name', 'msa' ),
                'search_items'              => __( 'Search Project Categories', 'msa' ),
                'not_found'			        => __( 'No Project Categories Found', 'msa' ),
                'all_items'                 => __( 'All Project Categories', 'msa' ),
                'parent_item'               => __( 'Parent Project Categories', 'msa' ),
                'parent_item_colon'         => __( 'Parent Project Categories:', 'msa' ),
                'edit_item'                 => __( 'Edit Project Category', 'msa' ),
                'view_item'			        => __( 'View Project Category', 'msa' ),
                'update_item'               => __( 'Update Project Category', 'msa' ),
                'add_new_item'              => __( 'Add New Project Category', 'msa' ),
                'new_item_name'             => __( 'New Project Category Name', 'msa' ),
                'menu_name'                 => __( 'Project Category', 'msa' ),
                'choose_from_most_used'		=> __( 'Choose from the most used Project Categories', 'msa' ),
                'back_to_items'				=> __( '← Back to Project Categories', 'msa'  ),

            ),
            'public'		    => true,
            'show_ui'		    => true,
            'show_in_menu'	    => true,
            'show_in_rest'	    => true,
            'hierarchical'	    => true,
            'show_admin_column' => true,
            'query_var'         => true,
            'rewrite'           => array( 'slug' => 'work-category' ),
        ) );
    }

    public static function msa_register_custom_post_type(){

        //Register Custom Post Type Services starts
        register_post_type('services', array(
            'labels'              => array(
                'name'                => _x( 'Services', 'Post Type General Name', 'msa' ),
                'singular_name'       => _x( 'Service', 'Post Type Singular Name', 'msa' ),
                'menu_name'           => __( 'Services', 'msa' ),
                'parent_item_colon'   => __( 'Parent Service', 'msa' ),
                'all_items'           => __( 'All Services', 'msa' ),
                'view_item'           => __( 'View Service', 'msa' ),
                'add_new_item'        => __( 'Add New Service', 'msa' ),
                'add_new'             => __( 'Add New', 'msa' ),
                'edit_item'           => __( 'Edit Service', 'msa' ),
                'update_item'         => __( 'Update Service', 'msa' ),
                'search_items'        => __( 'Search Service', 'msa' ),
                'not_found'           => __( 'Not Found', 'msa' ),
                'not_found_in_trash'  => __( 'Not found in Trash', 'msa' ),
                'new_item'           => __( 'New Service' ),
            ),


            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields' ),
            // You can associate this CPT with a taxonomy or custom taxonomy.
//            'taxonomies'          => array( 'categories' ),
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 20,
            'can_export'          => true,
            'has_archive'         => false,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'post',
            'show_in_rest'        => true,
            'menu_icon'           => 'dashicons-megaphone',
            'query_var'           => true,
            'rewrite'             => array( 'slug' => 'services' ),

        ));
        //Register custom post type services ends

        //Register Custom Post Type Sections starts
        register_post_type('sections', array(
            'labels'              => array(
                'name'                => _x( 'Sections', 'Post Type General Name', 'msa' ),
                'singular_name'       => _x( 'Section', 'Post Type Singular Name', 'msa' ),
                'menu_name'           => __( 'Sections', 'msa' ),
                'parent_item_colon'   => __( 'Parent Section', 'msa' ),
                'all_items'           => __( 'All Sections', 'msa' ),
                'view_item'           => __( 'View Section', 'msa' ),
                'add_new_item'        => __( 'Add New Section', 'msa' ),
                'add_new'             => __( 'Add New', 'msa' ),
                'edit_item'           => __( 'Edit Section', 'msa' ),
                'update_item'         => __( 'Update Section', 'msa' ),
                'search_items'        => __( 'Search Section', 'msa' ),
                'not_found'           => __( 'Not Found', 'msa' ),
                'not_found_in_trash'  => __( 'Not found in Trash', 'msa' ),
                'new_item'           => __( 'New Section' ),
            ),


            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields' ),
            // You can associate this CPT with a taxonomy or custom taxonomy.
//            'taxonomies'          => array( 'genres' )
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 20,
            'can_export'          => true,
            'has_archive'         => false,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'post',
            'show_in_rest'        => true,
            'menu_icon'           => 'dashicons-open-folder',
            'query_var'           => true,
            'rewrite'             => array( 'slug' => 'sections' ),

        ));
        //Register custom post type Sections ends

        //Register Custom Post Type Projects starts
        register_post_type('projects', array(
            'labels'              => array(
                'name'                => _x( 'Projects', 'Post Type General Name', 'msa' ),
                'singular_name'       => _x( 'Project', 'Post Type Singular Name', 'msa' ),
                'menu_name'           => __( 'Projects', 'msa' ),
                'parent_item_colon'   => __( 'Parent Project', 'msa' ),
                'all_items'           => __( 'All Projects', 'msa' ),
                'view_item'           => __( 'View Project', 'msa' ),
                'add_new_item'        => __( 'Add New Project', 'msa' ),
                'add_new'             => __( 'Add New', 'msa' ),
                'edit_item'           => __( 'Edit Project', 'msa' ),
                'update_item'         => __( 'Update Project', 'msa' ),
                'search_items'        => __( 'Search Project', 'msa' ),
                'not_found'           => __( 'Not Found', 'msa' ),
                'not_found_in_trash'  => __( 'Not found in Trash', 'msa' ),
                'new_item'           => __( 'New Project' ),
            ),


            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields' ),
            // You can associate this CPT with a taxonomy or custom taxonomy.
//            'taxonomies'          => array( 'genres' )
            'hierarchical'        => true,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 20,
            'can_export'          => true,
            'has_archive'         => false,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'post',
            'show_in_rest'        => true,
            'menu_icon'           => 'dashicons-food',
            'query_var'           => true,
            'rewrite'             => array( 'slug' => 'projects' ),

        ));
        //Register custom post type Projects ends

    }
}
MSACustomPostTypes::init();