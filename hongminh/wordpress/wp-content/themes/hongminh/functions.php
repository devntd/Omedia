<?php
/**
 * hongminh functions and definitions
 *
 * @package hongminh
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if (!isset($content_width)) {
    $content_width = 640; /* pixels */
}

if (!function_exists('hongminh_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function hongminh_setup()
    {

        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on hongminh, use a find and replace
         * to change 'hongminh' to the name of your theme in all the template files
         */
        load_theme_textdomain('hongminh', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
         */
        //add_theme_support( 'post-thumbnails' );

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(array(
            'primary' => __('Primary Menu', 'hongminh'),
        ));

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
        ));

        /*
         * Enable support for Post Formats.
         * See http://codex.wordpress.org/Post_Formats
         */
        add_theme_support('post-formats', array(
            'aside', 'image', 'video', 'quote', 'link'
        ));

        // Setup the WordPress core custom background feature.
        add_theme_support('custom-background', apply_filters('hongminh_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));
    }
endif; // hongminh_setup
add_action('after_setup_theme', 'hongminh_setup');

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function hongminh_widgets_init()
{
    register_sidebar(array(
        'name' => __('Sidebar', 'hongminh'),
        'id' => 'sidebar-1',
        'description' => '',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h1 class="widget-title">',
        'after_title' => '</h1>',
    ));
}

add_action('widgets_init', 'hongminh_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function hongminh_scripts()
{
    wp_enqueue_style('hongminh-style', get_stylesheet_uri());

    //Add css hongminh
    wp_enqueue_style('basic', get_template_directory_uri() . '/css/basic.css', array(), '1.0.0');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '1.0.0');
    wp_enqueue_style('color-1', get_template_directory_uri() . '/css/color-1.css', array(), '1.0.0');
    wp_enqueue_style('cp_load', get_template_directory_uri() . '/css/cp_load.css', array(), '1.0.0');
    wp_enqueue_style('custom', get_template_directory_uri() . '/css/custom.css', array(), '1.0.0');
    wp_enqueue_style('easy-responsive', get_template_directory_uri() . '/css/easy-responsive.css', array(), '1.0.0');
    wp_enqueue_style('font-awesome.min', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '1.0.0');
    wp_enqueue_style('jquery.bxslider', get_template_directory_uri() . '/css/jquery.bxslider.css', array(), '1.0.0');
    wp_enqueue_style('jquery.mCustomScrollbar', get_template_directory_uri() . '/css/jquery.mCustomScrollbar.css', array(), '1.0.0');
    wp_enqueue_style('light-box', get_template_directory_uri() . '/css/light-box.css', array(), '1.0.0');
    wp_enqueue_style('prettyPhoto', get_template_directory_uri() . '/css/prettyPhoto.css', array(), '1.0.0');
    wp_enqueue_style('slider-range', get_template_directory_uri() . '/css/slider-range.css', array(), '1.0.0');


    // Add js hongminh
    wp_enqueue_script('hongminh-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true);
    wp_enqueue_script('hongminh-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true);

    wp_enqueue_script('basic', get_template_directory_uri() . '/js/basic.js', array(), '20140606', true);
    wp_enqueue_script('bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '20140606', true);
    wp_enqueue_script('cp_load', get_template_directory_uri() . '/js/cp_load.js', array(), '20140606', true);
    wp_enqueue_script('custom', get_template_directory_uri() . '/js/custom.js', array(), '20140606', true);
    wp_enqueue_script('cycle-slider', get_template_directory_uri() . '/js/cycle-slider.js', array(), '20140606', true);
    wp_enqueue_script('easy-slider.min', get_template_directory_uri() . '/js/easy-slider.min.js', array(), '20140606', true);
    wp_enqueue_script('jquery.bxslider.min', get_template_directory_uri() . '/js/jquery.bxslider.min.js', array(), '20140606', true);
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery.js', array(), '20140606', true);
    wp_enqueue_script('jquery.mCustomScrollbar', get_template_directory_uri() . '/js/jquery.mCustomScrollbar.js', array(), '20140606', true);
    wp_enqueue_script('jquery.simplemodal', get_template_directory_uri() . '/js/jquery.simplemodal.js', array(), '20140606', true);
    wp_enqueue_script('mas-jquery', get_template_directory_uri() . '/js/mas-jquery.js', array(), '20140606', true);
    wp_enqueue_script('mouse', get_template_directory_uri() . '/js/mouse.js', array(), '20140606', true);
    wp_enqueue_script('prettyph', get_template_directory_uri() . '/js/prettyph.js', array(), '20140606', true);
    wp_enqueue_script('respond', get_template_directory_uri() . '/js/respond.js', array(), '20140606', true);
    wp_enqueue_script('slider', get_template_directory_uri() . '/js/slider.js', array(), '20140606', true);
    wp_enqueue_script('underscore-min', get_template_directory_uri() . '/js/underscore-min.js', array(), '20140606', true);
    wp_enqueue_script('widget', get_template_directory_uri() . '/js/widget.js', array(), '20140606', true);


    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'hongminh_scripts');

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
