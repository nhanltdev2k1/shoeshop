<div class="sidebar-wrapper">
    <div class="widget">
        <p class="widget-title">
            <a data-toggle="collapse" href="#widget-body-2" role="button"
                aria-expanded="true" aria-controls="widget-body-2">Loại </a>
        </p>

        <div class="collapse show" id="widget-body-2">
            <div class="widget-body">
                <ul class="cat-list">
                    <li>
                        <a href="sanpham/do-doi">
                            Đồ Đôi<span
                                class="products-count">(6)</span>
                        </a>
                    </li>
                    <li>
                        <a href="sanpham/do-cho-gia-dinh">
                            Đồ Cho Gia Đình<span
                                class="products-count">(6)</span>
                        </a>
                    </li>
                    <li>
                        <a href="sanpham/ao-thun-form-rong">
                            Áo Thun Form Rộng<span class="products-count">(6)</span>
                        </a>
                    </li>
                    <li>
                        <a href="sanpham/ao-thun-nu">
                            Áo Thun Nữ<span class="products-count">(6)</span>
                        </a>
                    </li>
                    <li>
                        <a href="sanpham/quan-ngan">
                            Quần Ngắn<span class="products-count">(6)</span>
                        </a>
                    </li>
                    <li>
                        <a href="anpham/quan-dai">
                            Quần Dài<span class="products-count">(6)</span>
                        </a>
                    </li>
                </ul>
            </div><!-- End .widget-body -->
        </div><!-- End .collapse -->
    </div><!-- End .widget -->

    <div class="widget">
        <p class="widget-title">
            <a data-toggle="collapse" href="#widget-body-3" role="button"
                aria-expanded="true" aria-controls="widget-body-3">Mức Giá</a>
        </p>

        <div class="collapse show" id="widget-body-3">
            <div class="widget-body pb-0">
                <form action="#">
                    <div class="price-slider-wrapper">
                        <div id="price-slider"></div><!-- End #price-slider -->
                    </div><!-- End .price-slider-wrapper -->

                    <div
                        class="filter-price-action d-flex align-items-center justify-content-between flex-wrap">
                        <div class="filter-price-text">
                            Giá:
                            <span id="filter-price-range"></span>
                        </div>

                        <button type="submit" class="btn btn-primary">Lọc</button>
                    </div><!-- End .filter-price-action -->
                </form>
            </div><!-- End .widget-body -->
        </div><!-- End .collapse -->
    </div><!-- End .widget -->

    <div class="widget widget-color">
        <p class="widget-title">
            <a data-toggle="collapse" href="#widget-body-4" role="button"
                aria-expanded="true" aria-controls="widget-body-4">Màu</a>
        </p>

        <div class="collapse show" id="widget-body-4">
            <div class="widget-body pb-0">
                <ul class="config-swatch-list">
                    <li class="active">
                        <a href="#" style="background-color: #000;"></a>
                    </li>
                    <li>
                        <a href="#" style="background-color: #0188cc;"></a>
                    </li>
                    <li>
                        <a href="#" style="background-color: #81d742;"></a>
                    </li>
                    <li>
                        <a href="#" style="background-color: #6085a5;"></a>
                    </li>
                    <li>
                        <a href="#" style="background-color: #ab6e6e;"></a>
                    </li>
                </ul>
            </div><!-- End .widget-body -->
        </div><!-- End .collapse -->
    </div><!-- End .widget -->

    <div class="widget widget-size">
        <p class="widget-title">
            <a data-toggle="collapse" href="#widget-body-5" role="button"
                aria-expanded="true" aria-controls="widget-body-5">Kích Thước</a>
        </p>

        <div class="collapse show" id="widget-body-5">
            <div class="widget-body">
                <ul class="config-size-list">
                    <li class="active"><a href="#">XL</a></li>
                    <li><a href="#">L</a></li>
                    <li><a href="#">M</a></li>
                    <li><a href="#">S</a></li>
                </ul>
            </div><!-- End .widget-body -->
        </div><!-- End .collapse -->
    </div><!-- End .widget -->

    <div class="widget widget-featured">
        <p class="widget-title">Sản Phẩm Yêu Thích</p>

        <div class="widget-body">
            <div class="featured-col">
                <?php
                require('db.php');
                $tv = "SELECT * FROM (SELECT * FROM ma_sanpham ORDER BY id DESC LIMIT 100) as recent_news ORDER BY RAND() LIMIT 3";
                $tv_1 = mysqli_query($link, $tv);
                $a_tv_1 = mysqli_query($link, $tv);
                ?>
                <?php
                while ($row = mysqli_fetch_array($tv_1)) {
                    $link_hinh = "HinhCTSP/Hinhdichvu/$row[hinhanh]";
                    $id = "$row[id]";
                    $tieude_en = "$row[tieude_en]";
                    $tieude = "$row[tieude]";
                    $mota = "$row[mota]";
                    $ngay = "$row[ngay]";
                    $url = $row['linkurl'];
                    $title = $row['title'];
                    $link = str_replace("?", "", strtolower("chitiet/$url"));
                ?>
                    <div class="product-default left-details product-widget">
                        <figure>
                            <a href="<?php echo "$link"; ?>">
                                <img src="<?php echo "$link_hinh"; ?>"
                                    width="75" height="75" alt="product" />
                            </a>
                        </figure>
                        <div class="product-details">
                            <p class="product-title">
                                <a href="<?php echo "$link"; ?>"><?php echo "$tieude_en"; ?></a>
                            </p>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:75%"></span>
                                    <!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div><!-- End .product-ratings -->
                            </div><!-- End .product-container -->
                            <div class="price-box">
                                <span class="product-price"><?php echo $title; ?> vnđ</span>
                            </div><!-- End .price-box -->
                        </div><!-- End .product-details -->
                    </div>
                <?php } ?>
            </div><!-- End .featured-col -->
        </div><!-- End .widget-body -->
    </div><!-- End .widget -->
</div><!-- End .sidebar-wrapper -->