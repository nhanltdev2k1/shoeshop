<body data-spy="scroll" data-target="#category-list">
    <div class="page-wrapper">

        <main class="main">
            <div class="container-fluid">
                <nav aria-label="breadcrumb" class="breadcrumb-nav mb-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="demo19.html">Trang Chủ</a></li>
                        <li class="breadcrumb-item"><a href="demo19-shop.html">Danh Mục Sản Phẩm</a></li>
                        <?php
                        require('db.php');
                        //$id = intval(preg_replace('/[^a-z0-9]+/i', '', $_GET["id"]));
                        $id = $_GET['url'];
                        $tv = "select * from tin_dichvu where linkurl like '%" . $id . "%' order by id ";
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
                        $count = mysqli_num_rows(mysqli_query($link, "SELECT * FROM tin_dichvu"));
                        $pages = $p->findPages($count, $limit);
                        $id = $_REQUEST["url"];
                        $result = mysqli_query($link, "SELECT * FROM tin_dichvu WHERE linkurl LIKE '%" . $id . "%' ORDER BY id DESC LIMIT $start, $limit");

                        // Display data
                        if (mysqli_num_rows($result) != 0) {
                            echo "<table width='100%' border='0' align='left'>";
                            $stt = 0;
                            while ($row = mysqli_fetch_object($result)) {
                                $ngay = $row->ngay;
                                $thuocloai = $row->thuocloai;
                                $tieude = doikyty($row->tieude);
                                $tieude_en = doikyty($row->tieude_en);
                                $title = $row->title;
                                $noidung = doikyty($row->noidung);
                                $mota = doikyty($row->mota);
                                $facebook = $row->facebook;
                                $tukhoa = $row->tukhoa;
                                $url = khongdau($row->tieude);
                                $link = "tu-van-$url-$id";
                                $hinhanh = "HinhCTSP/Hinhdichvu/" . $row->hinhanh;
                                $hinhanh = "<img src='$hinhanh' text-align='center' alt='$tieude' title='$tieude'>";

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
                                                            <?php echo $hinhanh; ?>
                                                        </div>
                                                    </div>
                                                    <span class="prod-full-screen">
                                                        <i class="icon-plus"></i>
                                                    </span>
                                                </div>

                                            </div>

                                            <div class="col-md-6 product-single-details">
                                                <h1 class="product-title"><?php echo $tieude_en; ?></h1>

                                                <div class="ratings-container">
                                                    <div class="product-ratings">
                                                        <span class="ratings" style="width:60%"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="#" class="rating-link">(6 Bình luận)</a>
                                                </div>

                                                <hr class="short-divider">

                                                <div class="price-box">
                                                    <span class="product-price"><?php echo $title; ?> vnđ</span>
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
                                                    <a href="cart.html" class="btn btn-dark add-cart icon-shopping-cart mr-2" title="Add to Cart">Mua Ngay</a>
                                                    <a href="cart.html" class="btn btn-gray view-cart d-none">View cart</a>
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
                                                    <a href="wishlist.html" class="btn-icon-wish add-wishlist" title="Add to Wishlist"><i class="icon-wishlist-2"></i><span>Thêm Vào Yêu Thích</span></a>
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
                    <div class="products-section py-0">
                        <h2 class="section-title m-b-4">SẢN PHẨM LIÊN QUAN</h2>

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
                            $count_query = mysqli_query($link, "SELECT * FROM tin_dichvu WHERE thuocloai = " . $thuocloai);
                            $count = mysqli_num_rows($count_query);
                            $pages = $p->findPages($count, $limit);
                            $sql = mysqli_query($link, "SELECT * FROM (SELECT * FROM tin_dichvu WHERE thuocloai = $thuocloai ORDER BY id DESC LIMIT 100) AS latest_20 ORDER BY RAND() LIMIT 9");
                            // Error handling
                            if (!$sql) {
                                echo "Error: " . mysqli_error($link);
                            }
                            // Store IDs of related posts
                            $related_ids = [];
                            // Display data
                            while ($tv_2 = mysqli_fetch_array($sql)) {
                                $link_hinh = "HinhCTSP/Hinhdichvu/" . $tv_2['hinhanh'];
                                $id = $tv_2['id'];
                                $related_ids[] = $id;
                                $tieude_en = $tv_2['tieude_en'];
                                $tieude = $tv_2['tieude'];
                                $title = $tv_2['title'];
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
                                            <a href="3" class="btn-icon btn-add-cart product-type-simple"><i
                                                    class="icon-shopping-cart"></i></a>
                                            <a href="<?php echo "$link_hinh"; ?>" class="btn-icon btn-add-view"><i
                                                    class="fa fa-eye"></i></a>
                                            <a href="<?php echo "$link"; ?>" class="btn-icon btn-add-link"><i
                                                    class="fa fa-link"></i></a>
                                        </div>

                                    </figure>
                                    <div class="product-details">
                                        <div class="title-wrap">
                                            <h3 class="product-title">
                                                <a href="<?php echo "$link"; ?>"><?php echo "$tieude_en"; ?></a>
                                            </h3>
                                            <a href="wishlist.html" title="Add to Wishlist" class="btn-icon-wish"><i
                                                    class="icon-heart"></i></a>
                                        </div>
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:40%"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                        </div>
                                        <div class="price-box">
                                            <span class="product-price"><?php echo $title; ?> vnđ</span>
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