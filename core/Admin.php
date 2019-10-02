<?php

namespace RacunStudioIcarus;

class Admin
{
    public function start()
    {
        // add_action('admin_menu', [$this, 'addMenu']);
        // add_action('admin_init', [$this, 'addOptions']);
        add_action( 'init', [$this, 'addPostType'] );

        // (new CustomMeta('project', 'Options'))->field('text', 'Subtitle', 'subtitle')->start();
    }

    public function addPostType()
    {
        register_post_type( 'project',
        // CPT Options
            array(
                'labels' => array(
                    'name' => __( 'Projects' ),
                    'singular_name' => __( 'Project' ),
                    'add_new'               => __( 'Add New' ),
                    'add_new_item'          => __( 'Add New Project' ),
                    'new_item'              => __( 'New Project' ),
                    'edit_item'             => __( 'Edit Project' ),
                    'view_item'             => __( 'View Project' ),
                    'all_items'             => __( 'All Projects' ),
                ),
                'public'             => true,
                'publicly_queryable' => true,
                'show_ui'            => true,
                'show_in_menu'       => true,
                'query_var'          => true,
                'rewrite'            => array( 'slug' => 'project' ),
                'capability_type'    => 'post',
                'has_archive'        => true,
                'hierarchical'       => false,
                'menu_position'      => null,
                'supports'           => array( 'title', 'editor', 'thumbnail', 'comments' ),
            )
        );
        register_post_type( 'team',
        // CPT Options
            array(
                'labels' => array(
                    'name' => __( 'Teams' ),
                    'singular_name' => __( 'Team' ),
                    'add_new'               => __( 'Add New' ),
                    'add_new_item'          => __( 'Add New Team' ),
                    'new_item'              => __( 'New Team' ),
                    'edit_item'             => __( 'Edit Team' ),
                    'view_item'             => __( 'View Team' ),
                    'all_items'             => __( 'All Teams' ),
                ),
                'public'             => true,
                'publicly_queryable' => true,
                'show_ui'            => true,
                'show_in_menu'       => true,
                'query_var'          => true,
                'rewrite'            => array( 'slug' => 'team' ),
                'capability_type'    => 'post',
                'has_archive'        => true,
                'hierarchical'       => false,
                'menu_position'      => null,
                'supports'           => array( 'title', 'editor', 'thumbnail', 'comments' ),
            )
        );
    }

    public function addOptions()
    {
        register_setting('racunstudio-icarus-group', 'heading');
        add_settings_section('racunstudio-icarus-section', 'Landing page options', [$this, 'sectionTitle'], 'racunstudio-icarus');
        add_settings_field('racunstudio-icarus-heading', 'Heading', [$this, 'renderHeadingField'], 'racunstudio-icarus', 'racunstudio-icarus-section');
    }

    public function sectionTitle()
    {
        echo 'Default settings for RacunStudio Icarus Theme landing page';
    }

    public function addMenu()
    {
        add_menu_page(
            'RacunStudio Theme Options', 
            'RacunStudio', 
            'manage_options', 
            'racunstudio-icarus', 
            [
                $this, 'renderPage'
            ],
            'dashicons-heart'
        );
    }

    public function renderPage()
    {
        require get_template_directory() . '/views/admin-page.php';
    }

    public function renderHeadingField()
    {
        Helper::view('setting-fields/heading.php');
    }
}