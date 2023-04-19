<?php

/**
 * Theme setup.
 */

namespace App;

use function Roots\bundle;

/**
 * Register the theme assets.
 *
 * @return void
 */
add_action('wp_enqueue_scripts', function () {
    bundle('app')->enqueue();
}, 100);

/**
 * Register the theme assets with the block editor.
 *
 * @return void
 */
add_action('enqueue_block_editor_assets', function () {
    bundle('editor')->enqueue();
}, 100);

/**
 * Register the initial theme setup.
 *
 * @return void
 */
add_action('after_setup_theme', function () {
    /**
     * Enable features from the Soil plugin if activated.
     *
     * @link https://roots.io/plugins/soil/
     */
    add_theme_support('soil', [
        'clean-up',
        'nav-walker',
        'nice-search',
        'relative-urls',
    ]);

    /**
     * Disable full-site editing support.
     *
     * @link https://wptavern.com/gutenberg-10-5-embeds-pdfs-adds-verse-block-color-options-and-introduces-new-patterns
     */
    remove_theme_support('block-templates');

    /**
     * Register the navigation menus.
     *
     * @link https://developer.wordpress.org/reference/functions/register_nav_menus/
     */
    register_nav_menus([
        'primary_navigation' => __('Primary Navigation', 'sage'),
    ]);

    /**
     * Disable the default block patterns.
     *
     * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#disabling-the-default-block-patterns
     */
    remove_theme_support('core-block-patterns');

    /**
     * Enable plugins to manage the document title.
     *
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#title-tag
     */
    add_theme_support('title-tag');

    /**
     * Enable post thumbnail support.
     *
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support('post-thumbnails');

    /**
     * Enable responsive embed support.
     *
     * @link https://developer.wordpress.org/block-editor/how-to-guides/themes/theme-support/#responsive-embedded-content
     */
    add_theme_support('responsive-embeds');
    
    // Add styles to gutenberg
    add_action('after_setup_theme', function () {
        add_theme_support('editor-styles');
        add_editor_style(asset('app.css'));
    });

    /**
     * Enable HTML5 markup support.
     *
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#html5
     */
    add_theme_support('html5', [
        'caption',
        'comment-form',
        'comment-list',
        'gallery',
        'search-form',
        'script',
        'style',
    ]);

    /**
     * Enable selective refresh for widgets in customizer.
     *
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#customize-selective-refresh-widgets
     */
    add_theme_support('customize-selective-refresh-widgets');
    add_theme_support( 'align-wide' );

}, 20);

/**
 * Register the theme sidebars.
 *
 * @return void
 */
add_action('widgets_init', function () {
    $config = [
        'before_widget' => '<section class="widget %1$s %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ];

    register_sidebar([
        'name' => __('Primary', 'sage'),
        'id' => 'sidebar-primary',
    ] + $config);

    register_sidebar([
        'name' => __('Footer', 'sage'),
        'id' => 'sidebar-footer',
    ] + $config);
    
    register_sidebar([
        'name' => __('Secondary Footer', 'sage'),
        'id' => 'sidebar-secondary-footer',
    ] + $config);
});

add_action( 'init',  __NAMESPACE__ . '\\create_team_taxonomies' );
function create_team_taxonomies() 
{
  // Add new taxonomy, make it hierarchical (like categories)
  $labels = array(
    'name' => _x( 'Categories', 'taxonomy general name' ),
    'singular_name' => _x( 'Category', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Categories' ),
    'all_items' => __( 'All Categories' ),
    'parent_item' => __( 'Parent Category' ),
    'parent_item_colon' => __( 'Parent Category:' ),
    'edit_item' => __( 'Edit Category' ), 
    'update_item' => __( 'Update Category' ),
    'add_new_item' => __( 'Add New Category' ),
    'new_item_name' => __( 'New Category Name' ),
    'menu_name' => __( 'Categories' ),
  );    

  register_taxonomy('team-category','team', array(
    'public'=>true,
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    ));
}


// CPT "Team" registration
add_action('init',  __NAMESPACE__ . '\\Team_custom_init');
function Team_custom_init() 
{
  $labels = array(
    'name' => _x('Team Member', 'post type general name'),
    'singular_name' => _x('Team Member', 'post type singular name'),
    'add_new' => _x('Add New', 'Person'),
    'add_new_item' => __('Add New Person'),
    'edit_item' => __('Edit Person'),
    'new_item' => __('New Person'),
    'view_item' => __('View Person'),
    'search_items' => __('Search Team Member'),
    'not_found' =>  __('No Team Member found'),
    'not_found_in_trash' => __('No Team Member found in Trash'), 
    'parent_item_colon' => '',
    'menu_name' => 'Team'
  );
  
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => array( 'slug' => 'team' ),
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => null,
    'menu_icon' => 'dashicons-universal-access',
    'supports' => array('title','editor','thumbnail','custom-fields'),
    'taxonomies' => array('team-category')
  ); 
  register_post_type('team',$args);
}

add_action( 'init',  __NAMESPACE__ . '\\create_portfolio_taxonomies' );
function create_portfolio_taxonomies() 
{
  // Add new taxonomy, make it hierarchical (like categories)
  $labels = array(
    'name' => _x( 'Categories', 'taxonomy general name' ),
    'singular_name' => _x( 'Category', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Categories' ),
    'all_items' => __( 'All Categories' ),
    'parent_item' => __( 'Parent Category' ),
    'parent_item_colon' => __( 'Parent Category:' ),
    'edit_item' => __( 'Edit Category' ), 
    'update_item' => __( 'Update Category' ),
    'add_new_item' => __( 'Add New Category' ),
    'new_item_name' => __( 'New Category Name' ),
    'menu_name' => __( 'Categories' ),
  );    

  register_taxonomy('portfolio-category','portfolio', array(
    'public'=>true,
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    ));
}


// CPT "Portfolio" registration
add_action('init',  __NAMESPACE__ . '\\portfolio_custom_init');
function portfolio_custom_init() 
{
  $labels = array(
    'name' => _x('Company', 'post type general name'),
    'singular_name' => _x('Company', 'post type singular name'),
    'add_new' => _x('Add New', 'Company'),
    'add_new_item' => __('Add New Company'),
    'edit_item' => __('Edit Company'),
    'new_item' => __('New Company'),
    'view_item' => __('View Company'),
    'search_items' => __('Search Company'),
    'not_found' =>  __('No Company found'),
    'not_found_in_trash' => __('No Company found in Trash'), 
    'parent_item_colon' => '',
    'menu_name' => 'Portfolio'
  );
  
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => array( 'slug' => 'portfolio' ),
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => null,
    'menu_icon' => 'dashicons-store',
    'supports' => array('title','editor','thumbnail','custom-fields'),
    'taxonomies' => array('portfolio-category', 'tags')
  ); 
  register_post_type('portfolio',$args);
}