<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package hongminh
 */
?>

</div><!-- #content -->

<footer id="footer" class="site-footer" role="contentinfo">
    <div class="holder">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="left-side-top fadeInLeft cp_load">
                        <div class="left-box-1">
                            <h4>Phụ Kiện</h4>
                            <ul>
                                <li class="active"><a href="#">Cặp và Ví</a></li>
                                <li><a href="#">Trang Sức</a></li>
                                <li><a href="#">Giày và Váy</a></li>
                                <li><a href="#">Quần áo</a></li>
                                <li><a href="#">Phụ Kiện</a></li>
                                <li><a href="#">Xu Hường và Thương Hiệu</a></li>
                            </ul>
                        </div>
                        <div class="left-box-1 pull-right">
                            <h4>Brands</h4>
                            <ul>
                                <li class="active"><a href="#">Cặp và Ví</a></li>
                                <li><a href="#">Trang Sức</a></li>
                                <li><a href="#">Giày và Váy</a></li>
                                <li><a href="#">Quần áo</a></li>
                                <li><a href="#">Phụ Kiện</a></li>
                                <li><a href="#">Xu Hường và Thương Hiệu</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="left-side-bottom fadeInDownBig cp_load">
                        <h5>Tin Tức</h5>
                        <ul class="lb-album">
                            <li>
                                <div class="frame-box">
                                    <div class="thumb"><a href="#image-1"><img
                                                src="<?php echo get_template_directory_uri(); ?>./images/recent-post-img-1.jpg"
                                                alt="img"></a>

                                        <div class="caption">
                                            <h5>Latest Collection</h5>
                                        </div>
                                        <div class="lb-overlay" id="image-1"><a href="#page" class="lb-close">x
                                                Close</a> <img
                                                src="<?php echo get_template_directory_uri(); ?>./images/recent-post-img-1-big.jpg"
                                                alt="img"></div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="frame-box">
                                    <div class="thumb"><a href="#image-1"><img
                                                src="<?php echo get_template_directory_uri(); ?>./images/recent-post-img-2.jpg"
                                                alt="img"></a>

                                        <div class="caption">
                                            <h5>Latest Collection</h5>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="frame-box">
                                    <div class="thumb"><a href="#image-1"><img
                                                src="<?php echo get_template_directory_uri(); ?>./images/recent-post-img-3.jpg"
                                                alt="img"></a>

                                        <div class="caption">
                                            <h5>Latest Collection</h5>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-area fadeInRight cp_load">
                        <div class="form-area-inner">
                            <div class="left">
                                <h4>Đăng Nhập</h4>
                                <strong class="title">Vui lòng nhập đầy đủ<br>
                                    thông tin</strong>

                                <form class="form-signin">
                                    <label>Tên Đăng Nhập</label>
                                    <input type="text" class="form-control" placeholder="Username" required>
                                    <label>Mật Khẩu</label>
                                    <input type="password" class="form-control" placeholder="Password" required>
                                    <label class="checkbox">
                                        <input type="checkbox" value="remember-me">
                                        <span>Nhớ Mật Khẩu</span> </label>
                                    <button class="btn btn-login" type="submit">Đăng Nhập</button>
                                </form>
                            </div>
                            <div class="right">
                                <h4>Đăng Nhập bằng</h4>
                                <strong class="title">Mạng Xã Hội.<br>
                                </strong>
                                <ul class="social-link">
                                    <li class="fb"><a href="#"><strong>Đăng Nhập with facebook</strong><span><i
                                                    class="fa fa-facebook"></i></span></a></li>
                                    <li class="tw"><a href="#"><strong>Đăng Nhập with twitter</strong><span><i
                                                    class="fa fa-twitter"></i></span></a></li>
                                    <li class="gp"><a href="#"><strong>Đăng Nhập with google</strong><span><i
                                                    class="fa fa-google-plus"></i></span></a></li>
                                </ul>
                                <div class="credit-card"><img
                                        src="<?php echo get_template_directory_uri(); ?>./images/credit-card-img.png" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Lower Footer Start-->
    <div class="lower-footer">
        <div class="toy-box"></div>
        <div class="container">
            <div class="row">
                <div class="inner">
                    <h5>Liên Hệ</h5>

                    <div class="aero-plane-section"><strong class="location"><i class="fa fa-location-arrow"></i>52
                            Hồ Tùng Mậu-Cầu Giấy-Hà Nội </strong> <strong class="phone"><i
                                class="fa fa-phone"></i>Tell : 3783 5509 - 3783 5510</strong> <a href="#" class="email"><i
                                class="fa fa-envelope"></i>nfo@omedia.vn</a></div>
                    <div class="copyrights"><strong class="copy">&copy; 2014. Bản Quyền thuộc OMEDIA.<br>
                            Phát triển bởi: <a href="#" class="link">Omedia.vn</a></strong></div>
                    <p id="back-top"><a href="#top"><span></span></a></p>
                </div>
            </div>
        </div>
    </div>
    <!--Lower Footer End-->
</footer><!-- #colophon -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=true"></script>

<?php wp_footer(); ?>
</div> <!-- #wrapper -->
</body>
</html>
