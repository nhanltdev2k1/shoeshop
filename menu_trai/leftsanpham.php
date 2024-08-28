<div class="sidebar-wrapper" data-sticky-sidebar-options='{"offsetTop": 72}'>
    <div class="header-bottom w-100 ml-0 position-relative d-lg-block d-none">
        <nav class="main-nav w-100">
            <ul class="menu no-superfish w-100">
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

    <div class="category-widget">
        <div class="widget">
            <p class="widget-title">
                <a data-toggle="collapse" href="#widget-body-2" role="button" aria-expanded="true" aria-controls="widget-body-2">HÃNG GIÀY</a>
            </p>

            <div class="collapse show" id="widget-body-2">
                <div class="widget-body">
                    <ul class="cat-list">
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
            </div>
        </div>
        <div class="widget widget-price">
            <p class="widget-title">
                <a data-toggle="collapse" href="#widget-body-3" role="button" aria-expanded="true" aria-controls="widget-body-3">Lọc Theo Giá</a>
            </p>

            <div class="collapse show" id="widget-body-3">
                <div class="widget-body">
                    <form action="#">
                        <div class="price-slider-wrapper">
                            <div id="price-slider"></div>
                        </div>
                        <div class="filter-price-action d-flex align-items-center justify-content-between flex-wrap pb-0">
                            <div class="filter-price-text">
                                Giá Cả:
                                <span id="filter-price-range" class="mr-3"></span>
                            </div>
                            <button type="submit" class="btn btn-primary font2">Lọc</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="widget widget-brand">
            <p class="widget-title">
                <a data-toggle="collapse" href="#widget-body-7" role="button" aria-expanded="true" aria-controls="widget-body-7">Yêu Thích</a>
            </p>

            <div class="collapse show" id="widget-body-7">
                <div class="widget-body pb-0">
                    <ul class="cat-list">
                        <li><a href="#">Hot Trend</a></li>
                        <li><a href="#">Bán Chạy</a></li>
                        <li><a href="#">Phụ Kiện</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="widget widget-color">
            <p class="widget-title">
                <a data-toggle="collapse" href="#widget-body-6" role="button" aria-expanded="true" aria-controls="widget-body-6">Màu Sắc</a>
            </p>
            <div class="collapse show" id="widget-body-6">
                <div class="widget-body">
                    <ul class="config-swatch-list flex-column">
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
            </div>
        </div>

        <div class="widget widget-size">
            <p class="widget-title">
                <a data-toggle="collapse" href="#widget-body-5" role="button" aria-expanded="true" aria-controls="widget-body-5">Sizes Giày</a>
            </p>
            <div class="collapse show" id="widget-body-5">
                <div class="widget-body">
                    <ul class="cat-list">
                        <li><a href="#">37</a></li>
                        <li><a href="#">38</a></li>
                        <li><a href="#">39</a></li>
                        <li><a href="#">40</a></li>
                        <li><a href="#">41</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>