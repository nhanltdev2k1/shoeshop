<header class="home header header-transparent">
    <div class="header-top d-flex align-items-center">
        <div class="container">
            <div class="header-left mr-lg-0 mr-3 d-sm-flex d-none">
                <p class="mb-0">Giảm 10% khi mua sắm giày chính hãng tại Hype Store. - <a href="lien-he">Shop
                        Now!</a></p>
            </div>
            <div class="header-right">
                <ul class="d-lg-flex d-none">
                    <li><a href="#">Tài Khoản</a></li>
                    <li><a href="#">Yêu Thích</a></li>
                    <li><a href="#">Giỏ Hàng</a></li>
                    <li><a href="#">Đăng Nhập</a></li>
                </ul>

                <div class="header-dropdown ">
                    <a href="#">VNĐ</a>
                    <div class="header-menu">
                        <ul>
                            <li><a href="#">USD</a></li>
                            <li><a href="#">VNĐ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="header-dropdown mr-auto mr-sm-3 mr-md-0">
                    <a href="#"><i class="flag-vn flag"></i>VN</a>
                    <div class="header-menu">
                        <ul>
                            <li><a href="#"><i class="flag-vn flag mr-2"></i>VN</a>
                            </li>
                            <li><a href="#"><i class="flag-us flag mr-2"></i>Eng</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-middle sticky-header">
        <div class="container">
            <div class="header-left">
                <button class="mobile-menu-toggler" type="button">
                    <i class="fas fa-bars"></i>
                </button>
                <a href="trang-chu" class="logo">
                    <img src="hinhmenu/logo/logo_hype.png" alt="Hype Store">
                </a>
            </div>
            <div class="header-right">
                <div class="header-icon header-search header-search-popup header-search-category d-none d-sm-block">
                    <a href="#" class="search-toggle" role="button"><i class="icon-magnifier"></i></a>
                    <form action="#" method="get">
                        <div class="header-search-wrapper">
                            <input type="search" class="form-control" name="q" id="q" placeholder="sản phẩm bạn cần tìm..." required="">
                            <button class="btn icon-search-3" type="submit"></button>
                        </div>
                    </form>
                </div>
                <a href="#" class="header-icon header-icon-user" title="login"><i
                        class="icon-user-2"></i></a>
                <a href="#" class="header-icon" title="wishlist"><i class="icon-wishlist-2"></i></a>

                <div class="dropdown cart-dropdown">
                    <a href="#" title="Cart" class="dropdown-toggle dropdown-arrow cart-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                        <i class="minicart-icon"></i>
                        <span class="cart-count badge-circle">0</span>
                    </a>
                    <div class="cart-overlay"></div>
                    <div class="dropdown-menu mobile-cart">
                        <a href="#" title="Close (Esc)" class="btn-close">×</a>
                        <div class="dropdownmenu-wrapper custom-scrollbar">
                            <div class="dropdown-cart-header">Giỏ Hàng</div>
                            <div class="dropdown-cart-action">
                                <a href="#" class="btn btn-gray btn-block view-cart">Giỏ Hàng</a>
                                <a href="lien-he" class="btn btn-dark text-white btn-block">Thanh Toán</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header-bottom">
        <nav class="main-nav">
            <ul class="menu no-superfish">
                <li class="active">
                    <a href="trang-chu">Trang Chủ</a>
                </li>
                <li>
                    <a href="gioithieu/tong-quan-thong-tin-website">Giới Thiệu</a>
                </li>
                <li>
                    <a href="danhmuc" class="sf-with-ul">Sản Phẩm</a>
                    <div class="megamenu megamenu-fixed-width">
                        <div class="row">
                            <div class="col-lg-6">
                                <a href="#" class="nolink">Thương Hiệu</a>
                                <ul class="submenu">
                                    <?php
                                    require('db.php');
                                    $tv1 = "SELECT * FROM loai_ma_sanpham ORDER BY id ASC";
                                    $tv_11 = mysqli_query($link, $tv1);
                                    while ($tv_21 = mysqli_fetch_array($tv_11)) {
                                        $id = $tv_21['id'];
                                        $thuocloai = $tv_21['thuocloai'];
                                        $name_url = strtolower($tv_21['name_url']);
                                    ?>
                                        <li><a href="sanpham/<?php echo $name_url; ?>"><?php echo $thuocloai; ?></a></li>
                                    <?php } ?>
                                </ul>
                            </div>
                            <div class="col-lg-6 p-0">
                                <div class="menu-banner menu-banner-2">
                                    <figure>
                                        <img src="hinhmenu/banner/banner423702nc.webp" alt="Menu banner" class="product-promo">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="tintuc/">Tin Tức - Sự Kiện</a>
                </li>
                <li>
                    <a href="lien-he">Liên Hệ</a>
                </li>
            </ul>
        </nav>
    </div>
</header>