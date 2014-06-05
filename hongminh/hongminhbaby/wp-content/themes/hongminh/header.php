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

    <?php wp_head(); ?>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<body <?php body_class(); ?>>
<!-- image preloader -->
<div id="cp-image-preloader"></div>
<!-- image preloader -->

<!-- Universal preloader -->
<div id="cp-preloader">
    <div class="preloader"><img src="<?php echo get_template_directory_uri(); ?>./images/ajax.png" alt="cp-preloader"
                                class="cp-preloader-preloader"/> <span id="percentage">0 %</span></div>
</div>
<!-- Universal preloader -->


<!--Wrapper Start-->
<div id="wrapper">



        <!--Header Start-->
        <header id="header">
            <!--Head Top Start-->
            <section id="head-top">
                <div class="container">
                    <div class="row">
                        <div class="pull-left"><strong class="time">11:45 pm, 27 July, 2012.</strong></div>
                        <div class="pull-right top-right">
                            <ul>
                                <li><a href="#">Tài Khoảnt</a></li>
                                <li class="wishlist"><a href="#">Ưa Thích</a></li>
                                <li class="checkout"><a href="#">Thanh Toán</a></li>
                                <li class="login"><a href="#">Đăng Nhập</a></li>
                                <li class="search"><a class="basic" href="#"><i class="fa fa-search"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!--Head Top Start-->
            <!--Logo Section Start-->
            <section class="logo-section">
                <div class="container">
                    <div class="row">
                        <div class="ribbon-box"><a href="index.html" class="logo">HỒNG MINH BABY</a></div>
                    </div>
                </div>
            </section>
            <!--Logo Section End-->

            <!--Navigarion Start-->
            <div class="nav-bar">
                <div class="navbar navbar-default navbar-static-top" role="navigation">
                    <div class="container">
                        <div class="row">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse"
                                        data-target=".navbar-collapse"><span class="sr-only">Điều Hướng</span> <span
                                        class="icon-bar"></span> <span class="icon-bar"></span> <span
                                        class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="navbar-collapse collapse padding-none">
                                <ul id="nav" class="nav navbar-nav">
                                    <li class="active"><a href="index.html">Trang Chủ</a></li>
                                    <li><a href="about.html">Thông Tin</a>
                                        <ul>
                                            <li><a href="services.html">Dịch Vụ</a></li>
                                            <li><a href="faq.html">Faq's</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Sản Phẩm</a>
                                        <ul>
                                            <li><a href="categories.html">Chuyên Mục</a></li>
                                            <li><a href="product.html">Sản Phẩm</a></li>
                                            <li><a href="product-detail.html">Chi Tiết Sản Phẩm</a></li>
                                            <li><a href="product-listing.html">Danh Sách Sản Phẩm</a></li>
                                            <li><a href="cart.html">Giỏ Hàng</a></li>
                                            <li><a href="checkout.html">Thanh Toán</a></li>
                                            <li><a href="outlet-location.html">Địa Chỉ</a></li>
                                            <li><a href="wishlist.html">Ưa Thích</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#"><span class="empty"></span></a></li>
                                    <li><a href="blog.html">Tin Tức</a>
                                        <ul>
                                            <li><a href="blog-detail.html">Chi Tiết Bài Viết</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Bộ Sưu Tập</a>
                                        <ul>
                                            <li><a href="gallery-two-column.html">Bộ Sưu Tập 2</a></li>
                                            <li><a href="gallery-three-column.html">Bộ Sưu Tập 3</a></li>
                                            <li><a href="gallery-four-column.html">Bộ Sưu Tập 4</a></li>
                                            <li><a href="testimonials.html">Đối Tác</a></li>
                                            <li><a href="password-protected.html">Mật Khẩu</a></li>
                                            <li><a href="404.html">404</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Liên Hệ</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Navigarion End-->
        </header>
        <!--Header End-->




