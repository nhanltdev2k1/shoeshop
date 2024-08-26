<h1 style="font-size:0px; margin: 0px; height:0px; color:#fff; margin: 0px; padding: 0px;"><a href='https://lovestudiostore.xyz/'>Shop Áo Thun Nữ Đẹp Đà Nẵng</a></h1>
<h2 style="font-size:0px; margin: 0px; height:0px; color:#fff; margin: 0px; padding: 0px;"><a href='https://lovestudiostore.xyz/'>Shop Quần Ngắn Nam Nữ Đà Nẵng</a></h2>
<h2 style="font-size:0px; margin: 0px; height:0px; color:#fff; margin: 0px; padding: 0px;"><a href='https://lovestudiostore.xyz/'>Shop Quần Dài Thời Trang Đà Nẵng</a></h2>

<body data-spy="scroll" data-target="#category-list">
    <div class="page-wrapper">
        <main class="main">
            <div class="container-fluid">
                <nav aria-label="breadcrumb" class="breadcrumb-nav mb-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="trang-chu">Trang Chủ</a></li>
                        <li class="breadcrumb-item"><a href="danhmuc">Danh Mục Sản Phẩm</a></li>
                        <?php
                        require('db.php');
                        //$id = intval(preg_replace('/[^a-z0-9]+/i', '', $_GET["id"]));
                        $id = $_GET['url'];
                        $tv = "select * from ma_sanpham where linkurl like '%" . $id . "%' order by id ";
                        $tv_1 = mysqli_query($link, $tv);
                        $a_tv_1 = mysqli_query($link, $tv);
                        $tv_2 = mysqli_fetch_array($tv_1);
                        $thuocloai = "$tv_2[thuocloai]";
                        $ten = "$tv_2[tieude_en]";
                        ?>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo "$ten" ?></li>
                    </ol>
                </nav>
            </div>

            <div class="main-container mt-3">
                <div class="container-fluid">
                    <div class="category-list mb-2 mb-md-0" id="category-list">
                        <ul class="nav category-list-nav">
                            <li class="nav-item green">
                                <a href="#cat-1" class="nav-link">
                                    <span class="cat-list-icon">
                                        <img src="hinhmenu/icon/couple.webp" alt="Shirt Icon" class="img-radius">
                                    </span>
                                    <span class="cat-list-text">Đồ Đôi</span>
                                </a>
                            </li>
                            <li class="nav-item orange">
                                <a href="#cat-2" class="nav-link">
                                    <span class="cat-list-icon">
                                        <img src="hinhmenu/icon/family.webp" alt="Shirt Icon" class="img-radius">
                                    </span>
                                    <span class="cat-list-text">Đồ Cho Gia Đình</span>
                                </a>
                            </li>
                            <li class="nav-item green">
                                <a href="#cat-3" class="nav-link">
                                    <span class="cat-list-icon">
                                        <img src="hinhmenu/icon/t-shirt.webp" alt="Shirt Icon" class="img-radius">
                                    </span>
                                    <span class="cat-list-text">Áo Thun Form Rộng</span>
                                </a>
                            </li>
                            <li class="nav-item yellow">
                                <a href="#cat-4" class="nav-link">
                                    <span class="cat-list-icon">
                                        <img src="hinhmenu/icon/t-shirt-girl.webp" alt="Shirt Icon" class="img-radius">
                                    </span>
                                    <span class="cat-list-text">Áo Thun Nữ</span>
                                </a>
                            </li>
                            <li class="nav-item gray">
                                <a href="#cat-5" class="nav-link">
                                    <span class="cat-list-icon">
                                        <img src="hinhmenu/icon/short.webp" alt="Shirt Icon" class="img-radius">
                                    </span>
                                    <span class="cat-list-text">Quần Ngắn</span>
                                </a>
                            </li>
                            <li class="nav-item lightblue">
                                <a href="#cat-6" class="nav-link">
                                    <span class="cat-list-icon">
                                        <img src="hinhmenu/icon/trouest.webp" alt="Shirt Icon" class="img-radius">
                                    </span>
                                    <span class="cat-list-text">Quần Dài</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                    <!-- End .category-list -->
                    <div class="row">
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

                        // Display data
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
                                <div class="col-lg-9 main-content product-sidebar-right mb-0">
                                    <div class="product-single-container product-single-default">

                                        <div class="row">
                                            <div class="col-md-6 product-single-gallery">
                                                <div class="product-slider-container">
                                                    <div class="product-single-carousel owl-carousel owl-theme show-nav-hover">
                                                        <div class="product-item">
                                                            <img class="product-single-image" src="<?php echo $link_hinh; ?>" data-zoom-image="<?php echo $link_hinh; ?>" width="468" height="468" alt="product" />
                                                        </div>
                                                    </div>
                                                    <!-- End .product-single-carousel -->
                                                    <span class="prod-full-screen">
                                                        <i class="icon-plus"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <!-- End .product-single-gallery -->


                                            <div class="col-md-6 product-single-details">
                                                <p class="product-title"><?php echo $tieude; ?></p>

                                                <div class="ratings-container">
                                                    <div class="product-ratings">
                                                        <span class="ratings" style="width:60%"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="#" class="rating-link">(6 Bình luận)</a>
                                                </div>

                                                <hr class="short-divider">

                                                <div class="price-box">
                                                    <span class="product-price"><?php echo $gia_formatted; ?> vnđ</span>
                                                </div>

                                                <div class="product-desc">
                                                    <p><?php echo $mota; ?></p>
                                                </div>
                                                <ul class="single-info-list">
                                                    <li>
                                                        Xuất Xứ: <strong>Việt Nam</strong>
                                                    </li>
                                                    <li>
                                                        PHÂN LOẠI:
                                                        <strong>
                                                            <a href="#" class="product-category"><?php echo $thuocloai; ?></a>
                                                        </strong>
                                                    </li>
                                                    <li>
                                                        TAGs:
                                                        <strong><a href="#" class="product-category">ĐỒ ĐÔI</a></strong>,
                                                        <strong><a href="#" class="product-category">ĐỒ CHO GIA ĐÌNH</a></strong>,
                                                        <strong><a href="#" class="product-category">ÁO THUN FORM RỘNG</a></strong>,
                                                        <strong><a href="#" class="product-category">ÁO THUN NỮ</a></strong>,
                                                        <strong><a href="#" class="product-category">QUẦN NGẮN</a></strong>,
                                                        <strong><a href="#" class="product-category">QUẦN DÀI</a></strong>,
                                                    </li>
                                                </ul>

                                                <div class="product-action">
                                                    <div class="product-single-qty">
                                                        <input class="horizontal-quantity form-control" type="text">
                                                    </div>
                                                    <a href="#" class="btn btn-dark add-cart icon-shopping-cart mr-2" title="Add to Cart">Mua Ngay</a>
                                                    <a href="lien-he" class="btn btn-gray view-cart d-none">Thanh Toán</a>
                                                </div>

                                                <hr class="divider mb-0 mt-0">

                                                <div class="product-single-share mb-2">
                                                    <label class="sr-only">Share:</label>

                                                    <div class="social-icons mr-2">
                                                        <a href="#" class="social-icon social-facebook icon-facebook" target="_blank" title="Facebook"></a>
                                                        <a href="#" class="social-icon social-twitter icon-twitter" target="_blank" title="Twitter"></a>
                                                        <a href="#" class="social-icon social-linkedin fab fa-linkedin-in" target="_blank" title="Linkedin"></a>
                                                        <a href="#" class="social-icon social-gplus fab fa-google-plus-g" target="_blank" title="Google +"></a>
                                                        <a href="#" class="social-icon social-mail icon-mail-alt" target="_blank" title="Mail"></a>
                                                    </div>
                                                    <a href="#" class="btn-icon-wish add-wishlist" title="Add to Wishlist"><i class="icon-wishlist-2"></i><span>Thêm Vào Yêu Thích</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product-single-tabs">
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="product-tab-desc" data-toggle="tab" href="#product-desc-content" role="tab" aria-controls="product-desc-content" aria-selected="true">Thông số chi tiết</a>
                                            </li>
                                        </ul>

                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="product-desc-content" role="tabpanel" aria-labelledby="product-tab-desc">
                                                <div class="product-desc-content">
                                                    <p><?php echo $noidung; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sidebar-overlay"></div>
                                <div class="sidebar-toggle custom-sidebar-toggle"><i class="fas fa-sliders-h"></i></div>
                                <aside class="sidebar-product col-lg-3 mobile-sidebar">
                                    <?php include('menu_trai/leftctsanpham.php'); ?>
                                </aside>

                        <?php
                                $stt++;
                            }
                            echo "</table>";
                        }
                        ?>

                    </div>
                    <!-- End .col-lg-9 -->

                    <div class="products-section py-0">
                        <p class="h2-section-title m-b-4">SẢN PHẨM LIÊN QUAN</p>

                        <div class="products-slider owl-carousel owl-theme dots-top dots-small" data-owl-options="{
                            'responsive': {
                                '1200': {
                                    'items': 5
                                }
                            } }">
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
                                        <a href="<?php echo "$link"; ?>">
                                            <img src="<?php echo "$link_hinh"; ?>" width="205" height="205" alt="<?php echo "$tieude_en"; ?>">
                                        </a>
                                        <div class="btn-icon-group">
                                            <a href="3" class="btn-icon btn-add-cart product-type-simple"><i class="icon-shopping-cart"></i></a>
                                            <a href="<?php echo "$link_hinh"; ?>" class="btn-icon btn-add-view"><i class="fa fa-eye"></i></a>
                                            <a href="<?php echo "$link"; ?>" class="btn-icon btn-add-link"><i class="fa fa-link"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <div class="title-wrap">
                                            <p class="product-title">
                                                <a href="<?php echo "$link"; ?>"><?php echo "$tieude"; ?></a>
                                            </p>
                                            <a href="#" title="Add to Wishlist" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                        </div>
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:40%"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                        </div>
                                        <div class="price-box">
                                            <span class="product-price"><?php echo $gia_formatted; ?> vnđ</span>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>