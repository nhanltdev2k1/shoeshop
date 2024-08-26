<header class="header">
    <div class="header-middle sticky-header" data-sticky-options="{ 'mobile': true }">
        <div class="container-fluid">
            <div class="header-left">
                <button class="mobile-menu-toggler mr-2" type="button">
                    <i class="fas fa-bars"></i>
                </button>
                <a href="trang-chu" class="logo">
                    <img src="hinhmenu/logo/logo.png" alt="Porto Logo" width="200" height="44" style="padding-left: 15px;">
                </a>
            </div><!-- End .header-left -->

            <div class="header-right justify-content-end">
                <nav class="main-nav">
                    <ul class="menu">
                        <li class="active">
                            <a href="trang-chu">Trang Chủ</a>
                        </li>
                        <li><a href="gioithieu/tong-quan-thong-tin-website">Giới Thiệu</a></li>
                        <li>
                            <a href="danhmuc">Sản Phẩm</a>
                            <div class="megamenu megamenu-fixed-width">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <ul class="submenu">
                                            <?php
                                            require('db.php');
                                            $tv1 = "SELECT * FROM loai_ma_sanpham ORDER BY id ASC LIMIT 3";
                                            $tv_11 = mysqli_query($link, $tv1);
                                            while ($tv_21 = mysqli_fetch_array($tv_11)) {
                                                $id = $tv_21['id'];
                                                $thuocloai = $tv_21['thuocloai'];
                                                $name_url = strtolower($tv_21['name_url']); // Chuyển đổi name_url thành chữ thường
                                            ?>
                                                <li><a href="sanpham/<?php echo $name_url; ?>"><?php echo $thuocloai; ?></a></li>
                                            <?php } ?>
                                        </ul>
                                    </div><!-- End .col-lg-4 -->

                                    <div class="col-lg-4">
                                        <ul class="submenu">
                                            <?php
                                            require('db.php');
                                            $tv1 = "SELECT * FROM loai_tin_dichvu ORDER BY id ASC LIMIT 3,6";
                                            $tv_11 = mysqli_query($link, $tv1);
                                            while ($tv_21 = mysqli_fetch_array($tv_11)) {
                                                $id = $tv_21['id'];
                                                $thuocloai = $tv_21['thuocloai'];
                                                $name_url = strtolower($tv_21['name_url']); // Chuyển đổi name_url thành chữ thường
                                            ?>
                                                <li><a href="sanpham/<?php echo $name_url; ?>"><?php echo $thuocloai; ?></a></li>
                                            <?php } ?>
                                        </ul>
                                    </div><!-- End .col-lg-4 -->

                                    <div class="col-lg-4 p-0">
                                        <div class="menu-banner menu-banner-2">
                                            <figure>
                                                <img src="hinhmenu/images/menu-banner.jpg" alt="Menu banner"
                                                    class="product-promo" width="380" height="250">
                                            </figure>
                                            <i>OFF</i>
                                            <div class="banner-content">
                                                <p>
                                                    <span class="">Sale</span><br />
                                                    <b class="">50%</b>
                                                </p>
                                            </div>
                                            <a href="category.html" class="btn btn-sm btn-dark">SHOP NOW</a>
                                        </div>
                                    </div><!-- End .col-lg-4 -->
                                </div><!-- End .row -->
                            </div><!-- End .megamenu -->
                        </li>
                        <li><a href="tintuc/">Tin Tức</a></li>
                        <li><a href="lien-he">Liên Hệ</a></li>

                    </ul>
                </nav>

                <a href="login.html" class="header-icon" title="login"><i class="icon-user-2"></i></a>

                <a href="wishlist.html" class="header-icon" title="Wishlist"><i
                        class="icon-wishlist-2"></i><span class="badge-circle">2</span></a>
                <div class="header-icon header-search header-search-popup header-search-category text-right">
                    <a href="#" class="search-toggle" role="button"><i class="icon-magnifier"></i></a>
                    <form action="#" method="get">
                        <div class="header-search-wrapper">
                            <input type="search" class="form-control" name="q" id="q" placeholder="Tìm kiếm nhanh..."
                                required>
                            <div class="select-custom">
                                <select id="cat" name="cat">
                                    <option value="">Tất Cả Sản Phẩm</option>
                                    <option value="12">- Đồ Đôi</option>
                                    <option value="13">- Đồ Cho Gia Đình</option>
                                    <option value="66">- Áo Thun Form Rộng</option>
                                    <option value="67">- Áo Thun Nữ</option>
                                    <option value="21">- Quần Ngắn</option>
                                    <option value="22">- Quần Dài</option>
                                </select>
                            </div>
                            <button class="btn icon-magnifier p-0" title="search" type="submit"></button>
                        </div>
                    </form>
                </div>

                <div class="dropdown cart-dropdown">
                    <a href="#" title="Cart" class="dropdown-toggle dropdown-arrow cart-toggle" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                        <i class="minicart-icon"></i>
                        <span class="cart-count badge-circle">0</span>
                    </a>
                    <div class="cart-overlay"></div>
                    <div class="dropdown-menu mobile-cart">
                        <a href="#" title="Close (Esc)" class="btn-close">×</a>
                        <div class="dropdownmenu-wrapper custom-scrollbar">
                            <div class="dropdown-cart-header">Giỏ Hàng</div>
                            <div class="dropdown-cart-action">
                                <a href="#" class="btn btn-gray btn-block view-cart">Xem Chi Tiết
                                    Cart</a>
                                <a href="#" class="btn btn-dark btn-block">Thanh Toán</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End .header-right -->
        </div><!-- End .container-fluid -->
    </div><!-- End .header-middle -->
</header><!-- End .header -->
<div class="loading-overlay">
    <div class="bounce-loader">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
</div>
<div class="mobile-menu-overlay"></div>
<div class="mobile-menu-container">
    <div class="mobile-menu-wrapper">
        <span class="mobile-menu-close"><i class="fa fa-times"></i></span>
        <nav class="mobile-nav">
            <ul class="mobile-menu">
                <li><a href="trang-chu">Trang Chủ</a></li>
                <li><a href="gioithieu/">Giới Thiệu</a></li>
                <li>
                    <a href="danhmuc">Sản Phẩm</a>
                    <ul><?php
                        require('db.php');
                        $tv1 = "SELECT * FROM loai_tin_dichvu ORDER BY id ASC";
                        $tv_11 = mysqli_query($link, $tv1);
                        while ($tv_21 = mysqli_fetch_array($tv_11)) {
                            $id = $tv_21['id'];
                            $thuocloai = $tv_21['thuocloai'];
                            $name_url = strtolower($tv_21['name_url']);
                        ?>
                            <li><a href="sanpham/<?php echo $name_url; ?>"><?php echo $thuocloai; ?></a></li>
                        <?php } ?>
                    </ul>
                </li>
                <li><a href="tintuc/">Tin Tức</a></li>
                <li><a href="lien-he">Liên Hệ</a></li>
            </ul>
        </nav>
        <form class="search-wrapper mb-2" action="#">
            <input type="text" class="form-control mb-0" placeholder="Tìm kiếm..." required />
            <button class="btn icon-search text-white bg-transparent p-0" type="submit"></button>
        </form>
        <div class="social-icons">
            <a href="#" class="social-icon social-facebook icon-facebook" target="_blank">
            </a>
            <a href="#" class="social-icon social-twitter icon-twitter" target="_blank">
            </a>
            <a href="#" class="social-icon social-instagram icon-instagram" target="_blank">
            </a>
        </div>
    </div>
</div>
<div class="sticky-navbar">
    <div class="sticky-info">
        <a href="trang-chu">
            <i class="icon-home"></i>Trang Chủ
        </a>
    </div>
    <div class="sticky-info">
        <a href="danhmuc" class="">
            <i class="icon-bars"></i>Sản Phẩm
        </a>
    </div>
    <div class="sticky-info">
        <a href="#" class="">
            <i class="icon-wishlist-2"></i>Yêu Thích
        </a>
    </div>
    <div class="sticky-info">
        <a href="#" class="">
            <i class="icon-user-2"></i>Tài Khoản
        </a>
    </div>
    <div class="sticky-info">
        <a href="#" class="">
            <i class="icon-shopping-cart position-relative">
                <span class="cart-count badge-circle">3</span>
            </i>Giỏ Hàng
        </a>
    </div>
</div>
<!-- <div class="newsletter-popup mfp-hide bg-img" id="newsletter-popup-form"
    style="background: #f1f1f1 no-repeat center/cover url(hinhmenu/background/newsletter_popup_bg.jpg)">
    <div class="newsletter-popup-content">
        <img src="hinhmenu/logo/logo.png" alt="Logo" class="logo-newsletter" width="111" height="44">
        <p style="margin: 24px 0 5px;color: #313131;font-size: 1.8rem;font-weight: 700;text-transform: uppercase;">Đăng ký nhận tin tức</p>
        <p>
            Đăng ký vào danh sách gửi thư của Love Studio để nhận cập nhật về sản phẩm mới, ưu đãi đặc biệt và các chương trình khuyến mãi của chúng tôi.
        </p>
        <form action="#">
            <div class="input-group">
                <input type="email" class="form-control" id="newsletter-email" name="newsletter-email"
                    placeholder="Nhập địa chỉ Email..." required />
                <input type="submit" class="btn btn-primary" value="Gửi Ngay" />
            </div>
        </form>
        <div class="newsletter-subscribe">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" value="0" id="show-again" />
                <label for="show-again" class="custom-control-label">
                    Không hiển thị thông báo này nữa
                </label>
            </div>
        </div>
    </div>
    <button title="Close (Esc)" type="button" class="mfp-close">
        ×
    </button>
</div> -->