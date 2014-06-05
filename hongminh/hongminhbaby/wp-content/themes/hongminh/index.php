<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package hongminh
 */

get_header(); ?>
<!--Banner Start-->
<div class="" id="banner">
    <div class="holder">
        <div class="caption">
            <div class="text">
                <h1>Mùa Đông<span class="pink">Bộ Sưu Tập</span></h1>

                <p>Nullam ut lorem in arcu ornare available, but the<br>
                    majority have suffered alteration.</p>
                <strong class="price">$549.oo</strong> <a href="#" class="btn-now">Mua Ngay !</a></div>
        </div>
        <div class="banner-areo"><strong class="title">Một mùa hè sôi động hơn với những bộ trang phục in họa
                tiết trái dứa.</strong></div>
    </div>
    <div id="featured" class="flexslider et_slider_auto et_slider_speed_4200">
        <ul class="slides">
            <li class="slide">
                <div class="slider_image"><a href="#"><img
                            src="<?php echo get_template_directory_uri(); ?>./images/banner-img-1.jpg"
                            alt='img'/></a></div>
            </li>
            <li class="slide">
                <div class="slider_image"><a href="#"><img
                            src="<?php echo get_template_directory_uri(); ?>./images/banner-img-3.jpg"
                            alt='img'/></a></div>
            </li>
            <li class="slide">
                <div class="slider_image"><a href="#"><img
                            src="<?php echo get_template_directory_uri(); ?>./images/banner-img-2.jpg"
                            alt='img'/></a></div>
            </li>
        </ul>
        <div id="switcher">
            <div class="item">
                <div class="wrap active"><span class="image"> <img
                            src="<?php echo get_template_directory_uri(); ?>./images/banner-img-1-thumb.jpg"
                            alt='img'/> </span>
                </div>
            </div>
            <div class="item">
                <div class="wrap "><span class="image"> <img
                            src="<?php echo get_template_directory_uri(); ?>./images/banner-img-1-thumb-2.jpg"
                            alt='img'/></span>
                </div>
            </div>
            <div class="item">
                <div class="wrap "><span class="image"> <img
                            src="<?php echo get_template_directory_uri(); ?>./images/banner-img-1-thumb-3.jpg"
                            alt='img'/></span>
                </div>
            </div>
        </div>
        <!-- #switcher -->
    </div>
</div>
<!--Banner End-->
    <div id="main">

<?php get_footer(); ?>
