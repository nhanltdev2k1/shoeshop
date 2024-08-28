<h1 style="font-size:0px; margin: 0px; height:0px; color:#fff; margin: 0px; padding: 0px;"><a href='https://hypestore.site/'>Shop Bán Jordan Chính Hãng Ở Đà Nẵng</a></h1>
<h2 style="font-size:0px; margin: 0px; height:0px; color:#fff; margin: 0px; padding: 0px;"><a href='https://hypestore.site/'>Địa Điểm Bán Giày MLB Ở Đà Nẵng</a></h2>
<h2 style="font-size:0px; margin: 0px; height:0px; color:#fff; margin: 0px; padding: 0px;"><a href='https://hypestore.site/'>Shop Converse Chính Hãng Tại Đà Nẵng</a></h2>

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
                                    <li class="breadcrumb-item"><a href="danhmuc">Danh Mục</a></li>
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
                                                <p class="product-title"><?php echo $tieude; ?></p>
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
                                                </div>
                                                <div class="product-desc">
                                                    <p>
                                                        <?php echo $mota; ?>
                                                    </p>
                                                </div>
                                                <ul class="single-info-list">
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
                                                                                <span class="tooltiptext tooltip-top"></span>
                                                                            </div>
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

                                                        <input type="submit" class="btn btn-primary" value="Gửi Ngay">

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
                <p class="h2-section-title">SẢN PHẨM LIÊN QUAN</p>

                <div class="products-slider owl-carousel owl-theme dots-top dots-small 5col" data-owl-options="{
                        'dots': true
                    }">
                    <?php
                    include_once("phan_trang.php");
                    require('db.php');
                    $thuocloai = isset($thuocloai) ? $thuocloai : 0;
                    $p = new pager;
                    $limit = 6;
                    $start = $p->findStart($limit);
                    $count_query = mysqli_query($link, "SELECT * FROM ma_sanpham WHERE thuocloai = " . $thuocloai);
                    $count = mysqli_num_rows($count_query);
                    $pages = $p->findPages($count, $limit);
                    $sql = mysqli_query($link, "SELECT * FROM (SELECT * FROM ma_sanpham WHERE thuocloai = $thuocloai ORDER BY id DESC LIMIT 100) AS latest_20 ORDER BY RAND() LIMIT 9");
                    if (!$sql) {
                        echo "Error: " . mysqli_error($link);
                    }
                    $related_ids = [];
                    while ($tv_2 = mysqli_fetch_array($sql)) {
                        $link_hinh = "HinhCTSP/Hinhsanpham/" . $tv_2['hinhanh'];
                        $id = $tv_2['id'];
                        $related_ids[] = $id;
                        $tieude_en = $tv_2['tieude_en'];
                        $tieude = $tv_2['tieude'];
                        $gia = $tv_2['gia'];
                        $gia_formatted = number_format($gia, 0, '.', '.');
                        $mota_han = $tv_2['mota_han'];
                        $mota_han_formatted = number_format($mota_han, 0, ',', '.');
                        $mota = $tv_2['mota'];
                        $ngay = $tv_2['ngay'];
                        $url = $tv_2['linkurl'];
                        $link = str_replace("?", "", strtolower("chitiet/$url"));
                    ?>
                        <div class="product-default inner-quickview inner-icon">
                            <figure>
                                <a href="<?php echo "$link"; ?>">
                                    <img src="<?php echo "$link_hinh"; ?>" width="265"
                                        height="265" alt="product" />
                                </a>
                                <div class="btn-icon-group">
                                    <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                            class="icon-shopping-cart"></i></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <div class="category-wrap">
                                    <div class="category-list">
                                        <a href="demo32-shop.html" class="product-category">Nổi Bật</a>
                                    </div>
                                    <a href="wishlist.html" title="Wishlist" class="btn-icon-wish"><i
                                            class="icon-heart"></i></a>
                                </div>
                                <p class="product-title">
                                    <a href="<?php echo "$link"; ?>"><?php echo "$tieude"; ?></a>
                                </p>
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:100%"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                </div>
                                <div class="price-box">
                                    <span class="old-price"><?php echo "$mota_han_formatted"; ?></span>
                                    <span class="product-price"><?php echo "$gia_formatted"; ?></span>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
    </div>
    </main>

    </div>
</body>