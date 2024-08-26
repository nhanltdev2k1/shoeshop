<body>
    <div class="page-wrapper">
        <main class="home main">
            <div class="container">
                <section class="featured-section text-center appear-animate" data-animation-name="fadeIn" data-animation-delay="100">
                    <div class="section-title">
                        <div class="divide-txt">
                            <div class="divide-line"></div>
                            <span><strong>MẪU GIÀY</strong> HOT TREND</span>
                            <div class="divide-line"></div>
                        </div>
                        <h3 class="section-subtitle">Shop Giày Hype Store tự hào mang đến cho bạn những sản phẩm giày hot trend nhất, cập nhật nhanh chóng các xu hướng thời trang mới nhất. Chúng tôi cam kết cung cấp các sản phẩm chất lượng cao với giá cả cạnh tranh và dịch vụ chăm sóc khách hàng tận tâm.</h3>
                    </div>

                    <div class="row text-left product-ajax-grid">
                        <?php
                        require('db.php');
                        $tv = "SELECT * FROM (SELECT * FROM ma_sanpham WHERE noibat=1 ORDER BY id DESC LIMIT 100) as recent_news ORDER BY RAND() LIMIT 10";
                        $tv_1 = mysqli_query($link, $tv);
                        $a_tv_1 = mysqli_query($link, $tv);
                        ?>
                        <?php
                        while ($row = mysqli_fetch_array($tv_1)) {
                            $link_hinh = "HinhCTSP/HinhSanPham/$row[hinhanh]";
                            $id = "$row[id]";
                            $tieude_en = "$row[tieude_en]";
                            $tieude = "$row[tieude]";
                            $mota = "$row[mota]";
                            $ngay = "$row[ngay]";
                            $url = $row['linkurl'];
                            $gia = "$row[gia]";
                            $gia_formatted = number_format($gia, 0, ',', '.');
                            $mota_han = "$row[mota_han]";
                            $mota_han_formatted = number_format($mota_han, 0, ',', '.');
                            $link = str_replace("?", "", strtolower("chitiet/$url"));
                        ?>
                            <div class="col-6 col-md-3">
                                <div class="product-default inner-quickview inner-icon">
                                    <figure>
                                        <a href="<?php echo "$link"; ?>">
                                            <img src="<?php echo "$link_hinh"; ?>" width="265" height="265" alt="<?php echo "$tieude"; ?>" />
                                        </a>
                                        <div class="btn-icon-group">
                                            <a href="#" title="Add To Cart" class="btn-icon btn-add-cart product-type-simple"><i
                                                    class="icon-shopping-cart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <div class="category-wrap">
                                            <div class="category-list">
                                                <a href="#" class="product-category">Hot</a>
                                            </div>
                                            <a href="#" title="Add to Wishlist" class="btn-icon-wish"><i
                                                    class="icon-heart"></i></a>
                                        </div>
                                        <h3 class="product-title"> <a href="<?php echo "$link"; ?>"><?php echo "$tieude"; ?></a> </h3>
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:100%"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                        </div>
                                        <div class="price-box">
                                            <span class="old-price"><?php echo "$mota_han_formatted"; ?> vnđ</span>
                                            <span class="product-price"><?php echo "$gia_formatted"; ?> vnđ</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </section>

                <section class="category-section text-center appear-animate" data-animation-name="fadeIn" data-animation-delay="100">
                    <div class="section-title">
                        <div class="divide-txt">
                            <div class="divide-line"></div>
                            <span><strong>BỘ SƯU TẬP</strong> MÙA HÈ</span>
                            <div class="divide-line"></div>
                        </div>
                        <h3 class="section-subtitle">Khám phá những sản phẩm mới nhất, hoàn hảo cho mùa hè này</h3>
                    </div>

                    <div class="row grid">
                        <div class="grid-item col-lg-6">
                            <div class="product-category">
                                <a href="demo32-shop.html">
                                    <figure>
                                        <img src="hinhmenu/banner/banner-giay.webp" width="265" height="265" alt="Category Banner" />
                                    </figure>
                                </a>
                            </div>
                        </div>
                        <div class="grid-item col-6 col-lg-3 height-x1">
                            <div class="product-category">
                                <a href="demo32-shop.html">
                                    <figure>
                                        <img src="hinhmenu/banner/banner-dark.jpg" width="265" height="265" alt="Category Banner" />
                                    </figure>

                                    <div class="category-content content-white">
                                        <h3>GIÀY NỮ</h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="grid-item col-6 col-lg-3 height-x1">
                            <div class="product-category">
                                <a href="demo32-shop.html">
                                    <figure>
                                        <img src="hinhmenu/banner/Giay-nu.webp" width="265" height="265" alt="Category Banner" />
                                    </figure>
                                </a>
                            </div>
                        </div>
                        <div class="grid-item col-6 col-lg-3 height-x1">
                            <div class="product-category">
                                <a href="demo32-shop.html">
                                    <figure>
                                        <img src="hinhmenu/banner/banner-dark.jpg" width="265" height="265" alt="Category Banner" />
                                    </figure>

                                    <div class="category-content content-white">
                                        <h3>GIÀY NAM</h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="grid-item col-6 col-lg-3 height-x1">
                            <div class="product-category">
                                <a href="demo32-shop.html">
                                    <figure>
                                        <img src="hinhmenu/banner/Giay-nam.webp" width="265" height="265" alt="Category Banner" />
                                    </figure>
                                </a>
                            </div>
                        </div>
                        <div class="col-1 grid-col-sizer"></div>
                    </div>
                </section>

                <section class="best-product-section appear-animate" data-animation-name="fadeIn" data-animation-delay="100">
                    <div class="section-title">
                        <div class="divide-txt">
                            <div class="divide-line"></div>
                            <span><strong>MẪU GIÀY</strong> BÁN CHẠY NHẤT</span>
                            <div class="divide-line"></div>
                        </div>
                        <h3 class="section-subtitle">Cập nhật ngay những mẫu giày hot nhất được săn đón nhiều nhất</h3>
                    </div>

                    <div class="product-panel owl-carousel owl-theme show-nav-hover mb-0" data-toggle="owl" data-owl-options="{
                        'margin' : 20,
                        'items' : 2,
                        'nav' : true,
                        'dots' : false,
                        'navText': [ '<i class=icon-left-open-big>', '<i class=icon-right-open-big>' ],
                        'responsive' : {
                            '768' : {
                                'items' : 3
                            }
                        }
                    }">
                        <?php
                        require('db.php');
                        $tv = "SELECT * FROM (SELECT * FROM ma_sanpham WHERE chay=1 ORDER BY id DESC LIMIT 100) as recent_news ORDER BY RAND() LIMIT 10";
                        $tv_1 = mysqli_query($link, $tv);
                        $a_tv_1 = mysqli_query($link, $tv);
                        ?>
                        <?php
                        while ($row = mysqli_fetch_array($tv_1)) {
                            $link_hinh = "HinhCTSP/HinhSanPham/$row[hinhanh]";
                            $id = "$row[id]";
                            $tieude_en = "$row[tieude_en]";
                            $tieude = "$row[tieude]";
                            $mota = "$row[mota]";
                            $ngay = "$row[ngay]";
                            $url = $row['linkurl'];
                            $gia = "$row[gia]";
                            $gia_formatted = number_format($gia, 0, ',', '.');
                            $mota_han = "$row[mota_han]";
                            $mota_han_formatted = number_format($mota_han, 0, ',', '.');
                            $link = str_replace("?", "", strtolower("chitiet/$url"));
                        ?>
                            <div class="product-default inner-quickview inner-icon">
                                <figure>
                                    <a href="<?php echo "$link"; ?>">
                                        <img src="<?php echo "$link_hinh"; ?>" width="360" height="360" alt="<?php echo "$tieude"; ?>" />
                                    </a>

                                    <div class="btn-icon-group">
                                        <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                                class="icon-shopping-cart"></i></a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                            <a href="#" class="product-category">Bán Chạy</a>
                                        </div>
                                        <a href="#" title="Wishlist" class="btn-icon-wish"><i
                                                class="icon-heart"></i></a>
                                    </div>
                                    <h3 class="product-title"> <a href="<?php echo "$link"; ?>"><?php echo "$tieude"; ?></a> </h3>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                    </div>
                                    <div class="price-box">
                                        <span class="old-price"><?php echo "$mota_han_formatted"; ?> vnđ</span>
                                        <span class="product-price"><?php echo "$gia_formatted"; ?> vnđ</span>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </section>
                <section class="featured-section text-center appear-animate" data-animation-name="fadeIn" data-animation-delay="100">
                    <div class="section-title">
                        <div class="divide-txt">
                            <div class="divide-line"></div>
                            <span><strong>PHỤ KIỆN</strong> CHÍNH HÃNG</span>
                            <div class="divide-line"></div>
                        </div>
                        <h3 class="section-subtitle">Shop Giày Hype Store tự hào mang đến những phụ kiện chính hãng chất lượng hàng đầu.</h3>
                    </div>
                    <div class="row text-left product-ajax-grid">
                        <?php
                        require('db.php');
                        $tv = "SELECT * FROM (SELECT * FROM ma_sanpham WHERE km=1 ORDER BY id DESC LIMIT 100) as recent_news ORDER BY RAND() LIMIT 10";
                        $tv_1 = mysqli_query($link, $tv);
                        $a_tv_1 = mysqli_query($link, $tv);
                        ?>
                        <?php
                        while ($row = mysqli_fetch_array($tv_1)) {
                            $link_hinh = "HinhCTSP/HinhSanPham/$row[hinhanh]";
                            $id = "$row[id]";
                            $tieude_en = "$row[tieude_en]";
                            $tieude = "$row[tieude]";
                            $mota = "$row[mota]";
                            $ngay = "$row[ngay]";
                            $url = $row['linkurl'];
                            $gia = "$row[gia]";
                            $gia_formatted = number_format($gia, 0, ',', '.');
                            $mota_han = "$row[mota_han]";
                            $mota_han_formatted = number_format($mota_han, 0, ',', '.');
                            $link = str_replace("?", "", strtolower("chitiet/$url"));
                        ?>
                            <div class="col-6 col-md-3">
                                <div class="product-default inner-quickview inner-icon">
                                    <figure>
                                        <a href="<?php echo "$link"; ?>">
                                            <img src="<?php echo "$link_hinh"; ?>" width="265" height="265" alt="<?php echo "$tieude"; ?>" />
                                        </a>
                                        <div class="btn-icon-group">
                                            <a href="#" title="Add To Cart" class="btn-icon btn-add-cart product-type-simple"><i
                                                    class="icon-shopping-cart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <div class="category-wrap">
                                            <div class="category-list">
                                                <a href="#" class="product-category">Hot</a>
                                            </div>
                                            <a href="#" title="Add to Wishlist" class="btn-icon-wish"><i
                                                    class="icon-heart"></i></a>
                                        </div>
                                        <h3 class="product-title"> <a href="<?php echo "$link"; ?>"><?php echo "$tieude"; ?></a> </h3>
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:100%"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                        </div>
                                        <div class="price-box">
                                            <span class="old-price"><?php echo "$mota_han_formatted"; ?> vnđ</span>
                                            <span class="product-price"><?php echo "$gia_formatted"; ?> vnđ</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </section>
                <div class="partners-carousel owl-carousel owl-theme appear-animate" data-animation-name="fadeIn" data-animation-delay="100" data-toggle="owl" data-owl-options="{
                    'margin' : 0,
                    'nav' : false,
                    'dots' : false,
                    'loop' : false,
                    'items' : 2,
                    'responsive' : {
                        '576' : {
                            'items' : 3
                        },
                        '768' : {
                            'items' : 4
                        },
                        '992' : {
                            'items' : 5
                        },
                        '1200' : {
                            'items' : 6
                        }
                    }
                }" data-appear-animation="fadeIn" data-appear-animation-delay="0" data-appear-animation-duration="1s">
                    <?php
                    //include_once("phan_trang.php");
                    require('db.php');
                    $tv = "select * from doi_tac order by id ASC limit 0,2";
                    $tv_1 = mysqli_query($link, $tv);
                    $a_tv_1 = mysqli_query($link, $tv);
                    ?>
                    <?php
                    while ($tv_2 = mysqli_fetch_array($tv_1)) {
                        $link_hinh = "HinhCTSP/$tv_2[hinhanh]";
                        $id = "$tv_2[id]";
                        $tieude = "$tv_2[tieude]";
                        $mota = "$tv_2[mota]";
                        $ngay = "$tv_2[ngay]";
                    ?>
                        <img src="HinhCTSP/<?php echo $tv_2["hinhanh"]; ?>" alt="<?php echo "$tieude"; ?>" width="140" height="60">
                    <?php } ?>
                </div>
            </div>
        </main>
        <!-- End .main -->

        <!-- End .footer -->
    </div>
    <!-- End .page-wrapper -->

    <div class="loading-overlay">
        <div class="bounce-loader">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>

    <div class="mobile-menu-overlay"></div>
    <!-- End .mobil-menu-overlay -->

    <div class="mobile-menu-container">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="fa fa-times"></i></span>
            <nav class="mobile-nav">
                <ul class="mobile-menu">
                    <li><a href="demo32.html">Home</a></li>
                    <li>
                        <a href="demo32-shop.html">Categories</a>
                        <ul>
                            <li><a href="category.html">Full Width Banner</a></li>
                            <li><a href="category-banner-boxed-slider.html">Boxed Slider Banner</a></li>
                            <li><a href="category-banner-boxed-image.html">Boxed Image Banner</a></li>
                            <li><a href="https://www.portotheme.com/html/porto_ecommerce/category-sidebar-left.html">Left Sidebar</a></li>
                            <li><a href="category-sidebar-right.html">Right Sidebar</a></li>
                            <li><a href="category-off-canvas.html">Off Canvas Filter</a></li>
                            <li><a href="category-horizontal-filter1.html">Horizontal Filter 1</a></li>
                            <li><a href="category-horizontal-filter2.html">Horizontal Filter 2</a></li>
                            <li><a href="#">List Types</a></li>
                            <li><a href="category-infinite-scroll.html">Ajax Infinite Scroll<span
                                        class="tip tip-new">New</span></a></li>
                            <li><a href="category.html">3 Columns Products</a></li>
                            <li><a href="category-4col.html">4 Columns Products</a></li>
                            <li><a href="category-5col.html">5 Columns Products</a></li>
                            <li><a href="category-6col.html">6 Columns Products</a></li>
                            <li><a href="category-7col.html">7 Columns Products</a></li>
                            <li><a href="category-8col.html">8 Columns Products</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="demo32-product.html">Products</a>
                        <ul>
                            <li>
                                <a href="#" class="nolink">PRODUCT PAGES</a>
                                <ul>
                                    <li><a href="product.html">SIMPLE PRODUCT</a></li>
                                    <li><a href="product-variable.html">VARIABLE PRODUCT</a></li>
                                    <li><a href="product.html">SALE PRODUCT</a></li>
                                    <li><a href="product.html">FEATURED & ON SALE</a></li>
                                    <li><a href="product-sticky-info.html">WIDTH CUSTOM TAB</a></li>
                                    <li><a href="product-sidebar-left.html">WITH LEFT SIDEBAR</a></li>
                                    <li><a href="product-sidebar-right.html">WITH RIGHT SIDEBAR</a></li>
                                    <li><a href="product-addcart-sticky.html">ADD CART STICKY</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="nolink">PRODUCT LAYOUTS</a>
                                <ul>
                                    <li><a href="product-extended-layout.html">EXTENDED LAYOUT</a></li>
                                    <li><a href="product-grid-layout.html">GRID IMAGE</a></li>
                                    <li><a href="product-full-width.html">FULL WIDTH LAYOUT</a></li>
                                    <li><a href="product-sticky-info.html">STICKY INFO</a></li>
                                    <li><a href="product-sticky-both.html">LEFT & RIGHT STICKY</a></li>
                                    <li><a href="product-transparent-image.html">TRANSPARENT IMAGE</a></li>
                                    <li><a href="product-center-vertical.html">CENTER VERTICAL</a></li>
                                    <li><a href="#">BUILD YOUR OWN</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Pages<span class="tip tip-hot">Hot!</span></a>
                        <ul>
                            <li>
                                <a href="#">Wishlist</a>
                            </li>
                            <li>
                                <a href="cart.html">Shopping Cart</a>
                            </li>
                            <li>
                                <a href="checkout.html">Checkout</a>
                            </li>
                            <li>
                                <a href="dashboard.html">Dashboard</a>
                            </li>
                            <li>
                                <a href="login.html">Login</a>
                            </li>
                            <li>
                                <a href="forgot-password.html">Forgot Password</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="blog.html">Blog</a></li>
                    <li>
                        <a href="#">Elements</a>
                        <ul class="custom-scrollbar">
                            <li><a href="element-accordions.html">Accordion</a></li>
                            <li><a href="element-alerts.html">Alerts</a></li>
                            <li><a href="element-animations.html">Animations</a></li>
                            <li><a href="element-banners.html">Banners</a></li>
                            <li><a href="element-buttons.html">Buttons</a></li>
                            <li><a href="element-call-to-action.html">Call to Action</a></li>
                            <li><a href="element-countdown.html">Count Down</a></li>
                            <li><a href="element-counters.html">Counters</a></li>
                            <li><a href="element-headings.html">Headings</a></li>
                            <li><a href="element-icons.html">Icons</a></li>
                            <li><a href="element-info-box.html">Info box</a></li>
                            <li><a href="element-posts.html">Posts</a></li>
                            <li><a href="element-products.html">Products</a></li>
                            <li><a href="element-product-categories.html">Product Categories</a></li>
                            <li><a href="element-tabs.html">Tabs</a></li>
                            <li><a href="element-testimonial.html">Testimonials</a></li>
                        </ul>
                    </li>
                </ul>

                <ul class="mobile-menu mt-2 mb-2">
                    <li class="border-0">
                        <a href="#">
                            Special Offer!
                        </a>
                    </li>
                    <li class="border-0">
                        <a href="https://1.envato.market/DdLk5" target="_blank">
                            Buy Porto!
                            <span class="tip tip-hot">Hot</span>
                        </a>
                    </li>
                </ul>

                <ul class="mobile-menu">
                    <li><a href="login.html">My Account</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="#">My Wishlist</a></li>
                    <li><a href="cart.html">Cart</a></li>
                    <li><a href="login.html" class="login-link">Log In</a></li>
                </ul>
            </nav>
            <!-- End .mobile-nav -->

            <form class="search-wrapper mb-2" action="#">
                <input type="text" class="form-control mb-0" placeholder="Search..." required />
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
        <!-- End .mobile-menu-wrapper -->
    </div>
    <!-- End .mobile-menu-container -->

    <div class="newsletter-popup mfp-hide bg-img" id="newsletter-popup-form" style="background: #f1f1f1 no-repeat center/cover url(assets/images/newsletter_popup_bg.jpg)">
        <div class="newsletter-popup-content">
            <img src="assets/images/logo-black.png" alt="Logo" class="logo-newsletter" width="111" height="44">
            <h2>Subscribe to newsletter</h2>

            <p>
                Subscribe to the Porto mailing list to receive updates on new arrivals, special offers and our promotions.
            </p>

            <form action="#">
                <div class="input-group">
                    <input type="email" class="form-control" id="newsletter-email" name="newsletter-email" placeholder="Your email address" required />
                    <input type="submit" class="btn btn-primary" value="Submit" />
                </div>
            </form>
            <div class="newsletter-subscribe">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" value="0" id="show-again" />
                    <label for="show-again" class="custom-control-label">
                        Don't show this popup again
                    </label>
                </div>
            </div>
        </div>
        <!-- End .newsletter-popup-content -->

        <button title="Close (Esc)" type="button" class="mfp-close">
            ×
        </button>
    </div>
    <!-- End .newsletter-popup -->

    <div class="sticky-navbar">
        <div class="sticky-info">
            <a href="demo32.html">
                <i class="icon-home"></i>Home
            </a>
        </div>
        <div class="sticky-info">
            <a href="demo32-shop.html" class="">
                <i class="icon-bars"></i>Categories
            </a>
        </div>
        <div class="sticky-info">
            <a href="#" class="">
                <i class="icon-wishlist-2"></i>Wishlist
            </a>
        </div>
        <div class="sticky-info">
            <a href="login.html" class="">
                <i class="icon-user-2"></i>Account
            </a>
        </div>
        <div class="sticky-info">
            <a href="cart.html" class="">
                <i class="icon-shopping-cart position-relative">
                    <span class="cart-count badge-circle">3</span>
                </i>Cart
            </a>
        </div>
    </div>


</body>


<!-- Mirrored from portotheme.com/html/porto_ecommerce/demo32.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Aug 2024 01:35:04 GMT -->

</html>