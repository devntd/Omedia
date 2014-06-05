<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package hongminh
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!-- image preloader -->
<div id="cp-image-preloader"></div>
<!-- image preloader -->

<!-- Universal preloader -->
<div id="cp-preloader">
    <div class="preloader"><img src="./images/ajax.png" alt="cp-preloader"
                                class="cp-preloader-preloader"/> <span id="percentage">0 %</span></div>
</div>
<!-- Universal preloader -->

<div id="page" class="hfeed site">
    <a class="skip-link screen-reader-text" href="#content"><?php _e('Skip to content', 'hongminh'); ?></a>

    <header id="masthead" class="site-header" role="banner">
        <div class="site-branding">
            <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"
                                      rel="home"><?php bloginfo('name'); ?></a></h1>

            <h2 class="site-description"><?php bloginfo('description'); ?></h2>
        </div>

        <nav id="site-navigation" class="main-navigation" role="navigation">
            <button class="menu-toggle"><?php _e('Primary Menu', 'hongminh'); ?></button>
            <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
        </nav>
        <!-- #site-navigation -->
    </header>
    <!-- #masthead -->

    <div id="content" class="site-content">
