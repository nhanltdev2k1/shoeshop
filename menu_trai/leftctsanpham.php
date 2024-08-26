<div class="sidebar-wrapper">
    <div class="widget widget-info">
        <ul>
            <li>
                <i class="icon-shipped"></i>
                <p class="h4-left">MIỄN PHÍ<br />VẬN CHUYỂN</p>
            </li>
            <li>
                <i class=" icon-us-dollar"></i>
                <p class="h4-left">ĐẢM BẢO HOÀN TIỀN<br />100%</p>
            </li>
            <li>
                <i class="icon-online-support"></i>
                <p class="h4-left">HỖ TRỢ TRỰC TUYẾN<br />24/7</p>
            </li>
        </ul>

    </div>

    <div class="widget">
        <div class="maga-sale-container custom-maga-sale-container" style="background-color: #f9f9fb;">
            <figure class="mega-image">
                <img src="hinhmenu/banner/banner-sidebar.jpg" class="w-100" alt="Banner Desc">
            </figure>

            <div class="mega-content">
                <div class="mega-price-box">
                    <span class="price-big">50</span>
                    <span class="price-desc"><em>%</em>OFF</span>
                </div>

                <div class="mega-desc">
                    <p class="mega-title line-height-1 mb-1 ls-n-10">MEGA SALE</p>
                    <span class="mega-subtitle line-height-1">HURRY UP!</span>
                </div>
            </div>
        </div>
    </div>
    <!-- End .widget -->

    <div class="widget widget-featured">
        <p class="widget-title">SẢN PHẨM NỖI BẬT</p>

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
                    $link_hinh = "HinhCTSP/HinhSanPham/$row[hinhanh]";
                    $id = "$row[id]";
                    $tieude_en = "$row[tieude_en]";
                    $tieude = "$row[tieude]";
                    $gia = "$row[gia]";
                    $gia_formatted = number_format($gia, 0, ',', '.');
                    $mota = "$row[mota]";
                    $ngay = "$row[ngay]";
                    $url = $row['linkurl'];
                    $title = $row['title'];
                    $link = str_replace("?", "", strtolower("chitiet/$url"));
                ?>
                    <div class="product-default left-details product-widget">
                        <figure>
                            <a href="<?php echo "$link"; ?>">
                                <img src="<?php echo "$link_hinh"; ?>" width="75" height="75" alt="product" />
                            </a>
                        </figure>
                        <div class="product-details">
                            <div class="product-title"> <a href="<?php echo "$link"; ?>"><?php echo "$tieude"; ?></a> </div>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:60%"></span>
                                    <!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <!-- End .product-ratings -->
                            </div>
                            <!-- End .product-container -->
                            <div class="price-box">
                                <span class="product-price"><?php echo "$gia"; ?> vnđ</span>
                            </div>
                            <!-- End .price-box -->
                        </div>
                        <!-- End .product-details -->
                    </div>
                <?php } ?>
            </div>
            <!-- End .featured-col -->
        </div>
        <!-- End .widget-body -->
    </div>
    <!-- End .widget -->
</div>