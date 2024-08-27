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
                                <a href="hinhmenu/banner/banner-giay.webp">
                                    <figure>
                                        <img src="hinhmenu/banner/banner-giay.webp" width="265" height="265" alt="Category Banner" />
                                    </figure>
                                </a>
                            </div>
                        </div>
                        <div class="grid-item col-6 col-lg-3 height-x1">
                            <div class="product-category">
                                <figure>
                                    <img src="hinhmenu/banner/banner-dark.jpg" width="265" height="265" alt="Category Banner" />
                                </figure>

                                <div class="category-content content-white">
                                    <h3>GIÀY NỮ</h3>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item col-6 col-lg-3 height-x1">
                            <div class="product-category">
                                <a href="hinhmenu/banner/Giay-nu.webp">
                                    <figure>
                                        <img src="hinhmenu/banner/Giay-nu.webp" width="265" height="265" alt="Category Banner" />
                                    </figure>
                                </a>
                            </div>
                        </div>
                        <div class="grid-item col-6 col-lg-3 height-x1">
                            <div class="product-category">
                                <figure>
                                    <img src="hinhmenu/banner/banner-dark.jpg" width="265" height="265" alt="Category Banner" />
                                </figure>

                                <div class="category-content content-white">
                                    <h3>GIÀY NAM</h3>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item col-6 col-lg-3 height-x1">
                            <div class="product-category">
                                <a href="hinhmenu/banner/Giay-nam.webp">
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
    </div>


</body>


<!-- Mirrored from portotheme.com/html/porto_ecommerce/demo32.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Aug 2024 01:35:04 GMT -->

</html>