<body>
    <div class="page-wrapper">
        <main class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-2cols col-lg-3">
                        <div class="sidebar-overlay"></div>
                        <div class="sidebar-toggle custom-sidebar-toggle"><i class="fas fa-sliders-h"></i></div>
                        <aside class="sidebar-shop mobile-sidebar">
                            <?php
                            include('menu_trai/leftsanpham.php');
                            ?>
                        </aside>
                    </div>
                    <div class="col-xl-8cols col-lg-6 col-md-8">
                        <div class="container p-0">
                            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                                <ol class="breadcrumb">
                                    <?php
                                    require('db.php');
                                    $id = $_GET['url'];
                                    $tv = "select * from ma_sanpham where linkurl like '%" . $id . "%' order by id ";
                                    $tv_1 = mysqli_query($link, $tv);
                                    $a_tv_1 = mysqli_query($link, $tv);
                                    $tv_2 = mysqli_fetch_array($tv_1);
                                    $thuocloai = "$tv_2[thuocloai]";
                                    $ten = "$tv_2[tieude]";
                                    ?>
                                    <li class="breadcrumb-item"><a href="trang-chu">Trang Chủ</a></li>
                                    <li class="breadcrumb-item"><a href="trang-chu">Trang Chủ</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><?php echo "$ten" ?></li>
                                </ol>
                            </nav>
                            <?php
                            include_once("phan_trang.php");
                            require('db.php');
                            $p = new pager;
                            $limit = 1;
                            $start = $p->findStart($limit);
                            $count = mysqli_num_rows(mysqli_query($link, "SELECT * FROM ma_sanpham"));
                            $pages = $p->findPages($count, $limit);
                            $id = $_REQUEST["url"];
                            $result = mysqli_query($link, "SELECT * FROM ma_sanpham WHERE linkurl LIKE '%" . $id . "%' ORDER BY id DESC LIMIT $start, $limit");
                            if (mysqli_num_rows($result) != 0) {
                                echo "<table width='100%' border='0' align='left'>";
                                $stt = 0;
                                while ($row = mysqli_fetch_object($result)) {
                                    $ngay = $row->ngay;
                                    $thuocloai = $row->thuocloai;
                                    $tieude = doikyty($row->tieude);
                                    $tieude_en = doikyty($row->tieude_en);
                                    $gia = doikyty($row->gia);
                                    $gia_formatted = number_format($gia, 0, ',', '.');
                                    $noidung = doikyty($row->noidung);
                                    $mota = doikyty($row->mota);
                                    $facebook = $row->facebook;
                                    $tukhoa = $row->tukhoa;
                                    $url = khongdau($row->tieude);
                                    $link = "tu-van-$url-$id";
                                    $link_hinh = "HinhCTSP/HinhSanPham/" . $row->hinhanh;

                                    if ($stt % 2 == 0) {
                                        echo "<tr>";
                                    }
                            ?>
                                    <div class="product-single-container product-single-default">
                                        <div class="row">

                                            <div class="col-md-6 product-single-gallery">
                                                <div class="product-slider-container">
                                                    <div class="label-group">
                                                        <div class="product-label label-hot">HOT</div>
                                                    </div>
                                                    <div class="product-single-carousel owl-carousel owl-theme show-nav-hover">
                                                        <div class="product-item">
                                                            <img class="product-single-image"
                                                                src="<?php echo $link_hinh; ?>"
                                                                data-zoom-image="<?php echo $link_hinh; ?>"
                                                                width="468" height="468" alt="product" />
                                                        </div>
                                                    </div>
                                                    <span class="prod-full-screen">
                                                        <i class="icon-plus"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-6 product-single-details">
                                                <h1 class="product-title"><?php echo $tieude; ?></h1>
                                                <div class="ratings-container">
                                                    <div class="product-ratings">
                                                        <span class="ratings" style="width:60%"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="#" class="rating-link">( 6 Bình luận )</a>
                                                </div>
                                                <hr class="short-divider">
                                                <div class="price-box">
                                                    <span class="product-price"><?php echo $gia_formatted; ?> vnđ</span>
                                                </div><!-- End .price-box -->

                                                <div class="product-desc">
                                                    <p>
                                                        <?php echo $mota; ?>
                                                    </p>
                                                </div><!-- End .product-desc -->

                                                <ul class="single-info-list">
                                                    <!---->
                                                    <li>
                                                        Xuất Xứ:
                                                        <strong>Việt Nam</strong>
                                                    </li>

                                                    <li>
                                                        Loại Hàng:
                                                        <strong>
                                                            <a href="#" class="product-category"><?php echo $thuocloai; ?></a>
                                                        </strong>
                                                    </li>
                                                </ul>

                                                <div class="product-filters-container">
                                                    <div class="product-single-filter">
                                                        <label class="font2 pb-2">Color:</label>
                                                        <ul class="config-size-list config-img-list">
                                                            <li>
                                                                <a href="#" style="background-color: #6085a5;"></a>
                                                                <span>Indego</span>
                                                            </li>
                                                            <li>
                                                                <a href="#" style="background-color: #333;"></a>
                                                                <span>Đen</span>
                                                            </li>
                                                            <li>
                                                                <a href="#" style="background-color: #0188cc;"></a>
                                                                <span>Xanh lam</span>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="product-single-filter">
                                                        <label class="font2">Size Giày:</label>
                                                        <ul class="config-size-list">
                                                            <li><a href="javascript:;"
                                                                    class="d-flex align-items-center justify-content-center">37</a>
                                                            </li>
                                                            <li class=""><a href="javascript:;"
                                                                    class="d-flex align-items-center justify-content-center">38</a>
                                                            </li>
                                                            <li class=""><a href="javascript:;"
                                                                    class="d-flex align-items-center justify-content-center">39</a>
                                                            </li>
                                                            <li class=""><a href="javascript:;"
                                                                    class="d-flex align-items-center justify-content-center">40</a>
                                                            </li>
                                                            <li class=""><a href="javascript:;"
                                                                    class="d-flex align-items-center justify-content-center">41</a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="product-single-filter">
                                                        <label></label>
                                                        <a class="font1 text-uppercase clear-btn" href="#">Xoá hết</a>
                                                    </div>
                                                    <!---->
                                                </div>

                                                <div class="product-action">
                                                    <div class="product-single-qty">
                                                        <input class="horizontal-quantity form-control" type="text">
                                                    </div>
                                                    <a href="https://zalo.me/0989886734" class="btn-dark add-cart mr-2"
                                                        title="Add to Cart">Mua Ngay</a>
                                                </div>

                                                <hr class="divider mb-0 mt-0">

                                                <div class="product-single-share mb-2">
                                                    <label class="sr-only">Chia Sẻ:</label>

                                                    <div class="social-icons mr-2">
                                                        <a href="#" class="social-icon social-facebook icon-facebook"
                                                            target="_blank" title="Facebook"></a>
                                                        <a href="#" class="social-icon social-twitter icon-twitter"
                                                            target="_blank" title="Twitter"></a>
                                                        <a href="#" class="social-icon social-linkedin fab fa-linkedin-in"
                                                            target="_blank" title="Linkedin"></a>
                                                        <a href="#" class="social-icon social-gplus fab fa-google-plus-g"
                                                            target="_blank" title="Google +"></a>
                                                        <a href="#" class="social-icon social-mail icon-mail-alt"
                                                            target="_blank" title="Mail"></a>
                                                    </div>
                                                    <a href="wishlist.html" class="btn-icon-wish add-wishlist"
                                                        title="Add to Wishlist"><i class="icon-wishlist-2"></i><span>Add to
                                                            Wishlist</span></a>
                                                </div>
                                            </div>

                                        </div><!-- End .row -->
                                    </div><!-- End .product-single-container -->
                                    <div class="product-single-tabs">
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="product-tab-desc" data-toggle="tab"
                                                    href="#product-desc-content" role="tab" aria-controls="product-desc-content"
                                                    aria-selected="false">Thông Tin Chi Tiết</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="product-tab-reviews" data-toggle="tab"
                                                    href="#product-reviews-content" role="tab" aria-controls="product-reviews-content"
                                                    aria-selected="false">Bình Luận</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="product-tab-size" data-toggle="tab"
                                                    href="#product-size-content" role="tab" aria-controls="product-size-content"
                                                    aria-selected="true">Hướng Dẫn Thanh Toán</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="product-desc-content" role="tabpanel"
                                                aria-labelledby="product-tab-desc">
                                                <div class="product-desc-content">
                                                    <p><?php echo $noidung; ?></p>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="product-reviews-content" role="tabpanel"
                                                aria-labelledby="product-tab-reviews">
                                                <div class="product-reviews-content">
                                                    <div class="comment-list">
                                                        <div class="comments">
                                                            <?php
                                                            include_once("phan_trang.php");
                                                            require('db.php');
                                                            $tv = "select * from gioi_thieu order by id=9 desc limit 0,1";
                                                            $tv_1 = mysqli_query($link, $tv);
                                                            $a_tv_1 = mysqli_query($link, $tv);
                                                            ?>
                                                            <?php
                                                            while ($tv_2 = mysqli_fetch_array($tv_1)) {
                                                                $link_hinh = "HinhCTSP/$tv_2[hinhanh]";
                                                                $id = "$tv_2[id]";
                                                                $tieude = "$tv_2[tieude]";
                                                                $mota = "$tv_2[mota]";
                                                                $title = "$tv_2[title]";
                                                                $ngay = "$tv_2[ngay]";

                                                            ?>
                                                                <figure class="img-thumbnail">
                                                                    <img src="HinhCTSP/<?php echo $tv_2["hinhanh"]; ?>" alt="author" width="80"
                                                                        height="80">
                                                                </figure>
                                                                <div class="comment-block">
                                                                    <div class="comment-header">
                                                                        <div class="comment-arrow"></div>

                                                                        <div class="ratings-container float-sm-right">
                                                                            <div class="product-ratings">
                                                                                <span class="ratings" style="width:60%"></span>
                                                                                <!-- End .ratings -->
                                                                                <span class="tooltiptext tooltip-top"></span>
                                                                            </div><!-- End .product-ratings -->
                                                                        </div>

                                                                        <span class="comment-by">
                                                                            <strong><?php echo "$tieude"; ?></strong>
                                                                        </span>
                                                                    </div>

                                                                    <div class="comment-content">
                                                                        <p><?php echo "$mota"; ?></p>
                                                                    </div>
                                                                </div>
                                                            <?php } ?>
                                                        </div>
                                                    </div>

                                                    <div class="divider"></div>

                                                    <div class="add-product-review">
                                                        <div class="form-group">
                                                            <label>Bình luận <span class="required">*</span></label>
                                                            <textarea cols="5" rows="6"
                                                                class="form-control form-control-sm"></textarea>
                                                        </div><!-- End .form-group -->


                                                        <div class="row">
                                                            <div class="col-md-6 col-xl-12">
                                                                <div class="form-group">
                                                                    <label>Họ và tên <span class="required">*</span></label>
                                                                    <input type="text" class="form-control form-control-sm"
                                                                        required>
                                                                </div><!-- End .form-group -->
                                                            </div>

                                                            <div class="col-md-6 col-xl-12">
                                                                <div class="form-group">
                                                                    <label>Email <span class="required">*</span></label>
                                                                    <input type="text" class="form-control form-control-sm"
                                                                        required>
                                                                </div><!-- End .form-group -->
                                                            </div>

                                                            <div class="col-md-12">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input"
                                                                        id="save-name" />
                                                                    <label class="custom-control-label mb-0"
                                                                        for="save-name">Lưu tên, email và trang web của tôi trên trình duyệt này cho lần bình luận tiếp theo.</label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <input type="submit" class="btn btn-primary" value="Submit">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="product-size-content" role="tabpanel"
                                            aria-labelledby="product-tab-size">
                                            <div class="product-size-content">

                                            </div>
                                        </div>
                                    </div>
                        </div>
                <?php
                                    $stt++;
                                }
                                echo "</table>";
                            }
                ?>
                    </div>
                </div>

                <div class="col-xl-2cols col-lg-3 col-md-4">
                    <aside class="sidebar-product d-block">
                        <?php
                        include('menu_trai/rightsanpham.php');
                        ?>
                    </aside><!-- End .col-md-3 -->
                </div>
            </div>

            <div class="products-section pt-0">
                <h2 class="section-title ls-10">SẢN PHẨM LIÊN QUAN</h2>

                <div class="products-slider owl-carousel owl-theme dots-top dots-small 5col" data-owl-options="{
                        'dots': true
                    }">
                    <?php
                    include_once("phan_trang.php");
                    require('db.php');

                    // Ensure $thuocloai is defined
                    $thuocloai = isset($thuocloai) ? $thuocloai : 0; // Default to 0 or appropriate value
                    $p = new pager;
                    $limit = 6;
                    $start = $p->findStart($limit);

                    // Query to count the total number of records
                    $count_query = mysqli_query($link, "SELECT * FROM ma_sanpham WHERE thuocloai = " . $thuocloai);
                    $count = mysqli_num_rows($count_query);
                    $pages = $p->findPages($count, $limit);

                    // Query to get products
                    $sql = mysqli_query($link, "SELECT * FROM (SELECT * FROM ma_sanpham WHERE thuocloai = $thuocloai ORDER BY id DESC LIMIT 100) AS latest_20 ORDER BY RAND() LIMIT 9");

                    // Error handling
                    if (!$sql) {
                        echo "Error: " . mysqli_error($link);
                    }

                    // Store IDs of related posts
                    $related_ids = [];

                    // Display data
                    while ($tv_2 = mysqli_fetch_array($sql)) {
                        $link_hinh = "HinhCTSP/Hinhsanpham/" . $tv_2['hinhanh'];
                        $id = $tv_2['id'];
                        $related_ids[] = $id;
                        $tieude_en = $tv_2['tieude_en'];
                        $tieude = $tv_2['tieude'];
                        $gia = $tv_2['gia'];
                        $gia_formatted = number_format($gia, 0, '.', '.');
                        $mota = $tv_2['mota'];
                        $ngay = $tv_2['ngay'];
                        $url = $tv_2['linkurl'];
                        $link = str_replace("?", "", strtolower("chitiet/$url"));
                    ?>
                        <div class="product-default inner-quickview inner-icon">
                            <figure>
                                <a href="demo32-product.html">
                                    <img src="<?php echo "$link_hinh"; ?>" width="265"
                                        height="265" alt="product" />
                                </a>
                                <div class="btn-icon-group">
                                    <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                            class="icon-shopping-cart"></i></a>
                                </div>
                                <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                    View</a>
                            </figure>
                            <div class="product-details">
                                <div class="category-wrap">
                                    <div class="category-list">
                                        <a href="demo32-shop.html" class="product-category">category</a>
                                    </div>
                                    <a href="wishlist.html" title="Wishlist" class="btn-icon-wish"><i
                                            class="icon-heart"></i></a>
                                </div>
                                <h3 class="product-title">
                                    <a href="demo32-product.html">Black Shoes</a>
                                </h3>
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:100%"></span>
                                        <!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div><!-- End .product-ratings -->
                                </div><!-- End .product-container -->
                                <div class="price-box">
                                    <span class="old-price">$90.00</span>
                                    <span class="product-price">$70.00</span>
                                </div><!-- End .price-box -->
                            </div><!-- End .product-details -->
                        </div>
                    <?php } ?>
                </div><!-- End .products-slider -->
            </div><!-- End .products-section -->
    </div>
    </main><!-- End .main -->

    <footer class="footer" data-appear-animation="fadeIn" data-appear-animation-delay="0"
        data-appear-animation-duration="1s">
        <div class="footer-top bg-dark">
            <div class="container d-flex align-items-center justify-content-between flex-wrap">
                <div class="widget-newsletter pl-3 d-md-flex align-items-center">
                    <div class="widget-newsletter-info">
                        <h5 class="widget-newsletter-title text-uppercase m-b-1 text-white">SIGN UP TO NEWSLETTER
                        </h5>
                        <p class="widget-newsletter-content font2 mb-0">Get all the latest information..</p>
                    </div>
                    <form action="#" class="mb-0">
                        <div class="footer-submit-wrapper d-flex  mt-2 mb-1 mt-md-0 mb-md-0">
                            <input type="email" class="form-control bg-dark" placeholder="Enter your e-mail address"
                                size="40" required>
                            <button type="submit" class="btn btn-dark btn-sm">Submit</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="porto-content-box">
                <h4>20$ OFF</h4>
                <h3>GOPORTO</h3>
                <span>USE COUPONS</span>

                <a href="javascript:;" class="box-close">×</a>
            </div>
        </div>
        <div class="container">
            <div class="footer-middle">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="info-box info-box-icon-left text-white justify-content-start">
                            <i class="icon-shipping"></i>

                            <div class="info-box-content">
                                <h4>FREE SHIPPING &amp; RETURN</h4>
                                <p class="font2">Free shipping on all orders over $99.</p>
                            </div><!-- End .info-box-content -->
                        </div><!-- End .info-box -->

                        <div class="info-box info-box-icon-left text-white justify-content-start">
                            <i class="icon-money"></i>

                            <div class="info-box-content">
                                <h4>MONEY BACK GUARANTEE</h4>
                                <p class="font2">100% money back guarantee</p>
                            </div><!-- End .info-box-content -->
                        </div><!-- End .info-box -->

                        <div class="info-box info-box-icon-left text-white justify-content-start">
                            <i class="icon-support"></i>

                            <div class="info-box-content">
                                <h4>LIVE SUPPORT</h4>
                                <p class="font2">Lorem ipsum dolor sit amet.</p>
                            </div><!-- End .info-box-content -->
                        </div><!-- End .info-box -->
                    </div>
                    <div class="col-md-6 col-lg-2">
                        <div class="widget">
                            <h3 class="widget-title">Account</h3>
                            <div class="widget-content">
                                <ul>
                                    <li><a href="dashboard.html">My Account</a></li>
                                    <li><a href="#">Track Your Order</a></li>
                                    <li><a href="#">Payment Methods</a></li>
                                    <li><a href="#">Shipping Guide</a></li>
                                    <li><a href="#">FAQs</a></li>
                                    <li><a href="#">Product Support</a></li>
                                    <li><a href="#">Privacy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="widget">
                            <h3 class="widget-title">About</h3>
                            <div class="widget-content">
                                <ul>
                                    <li><a href="about.html">About Porto</a></li>
                                    <li><a href="#">Our Guarantees</a></li>
                                    <li><a href="#">Terms And Conditions</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Return Policy</a></li>
                                    <li><a href="#">Intellectual Property Claims</a></li>
                                    <li><a href="#">Site Map</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="widget-group">
                            <div class="widget mb-3">
                                <h3 class="widget-title">Follow Us</h3>
                                <div class="widget-content">
                                    <div class="social-icons ml-1">
                                        <a href="#" class="social-icon social-facebook" target="_blank"
                                            title="Facebook">
                                            <i class="icon-facebook"></i>
                                        </a>
                                        <a href="#" class="social-icon social-twitter" target="_blank"
                                            title="Twitter">
                                            <i class="icon-twitter"></i>
                                        </a>
                                        <a href="#" class="social-icon social-instagram" target="_blank"
                                            title="instagram">
                                            <i class="icon-instagram"></i>
                                        </a>

                                        <a href="#" class="social-icon social-linkedin" target="_blank"
                                            title="Linkedin">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="widget">
                                <h3 class="widget-title">Payment Methods</h3>
                                <div class="widget-content">
                                    <img src="assets/images/demoes/demo32/payments_long.png" alt="payment image"
                                        width="201" height="31">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom flex-column flex-sm-row">
                <p>Porto eCommerce. © 2021. All Rights Reserved</p>
                <ul>
                    <li><a href="#">Affiliates</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms & Conditions</a></li>
                </ul>
            </div>
        </div>
    </footer><!-- End .footer -->
    </div><!-- End .page-wrapper -->

    <div class="loading-overlay">
        <div class="bounce-loader">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>

    <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

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
                                <a href="wishlist.html">Wishlist</a>
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
                    <li><a href="wishlist.html">My Wishlist</a></li>
                    <li><a href="cart.html">Cart</a></li>
                    <li><a href="login.html" class="login-link">Log In</a></li>
                </ul>
            </nav><!-- End .mobile-nav -->

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
        </div><!-- End .mobile-menu-wrapper -->
    </div><!-- End .mobile-menu-container -->


</body>