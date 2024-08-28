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
</div>