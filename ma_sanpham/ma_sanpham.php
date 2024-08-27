    <?php
    include('phantrang/phantrang_dichvu.php');
    ?>

    <body>
        <div class="page-wrapper">
            <main class="main pb-5">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-2cols col-lg-3">
                            <div class="sidebar-overlay"></div>
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
                                        <li class="breadcrumb-item"><a href="trang-chu">Trang Chủ</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Danh Mục Sản Phẩm</li>
                                    </ol>
                                </nav>
                                <div class="home-slide banner-cat d-flex align-items-center mb-3" style="background-image: url('assets/images/demoes/demo32/banners/category_banner.jpg');">
                                    <div class="slide-content">
                                        <div class="content-left">
                                            <div class="divide-txt">
                                                <span class="font2 ls-0">New Brown Collection</span>
                                                <div class="divide-line"></div>
                                            </div>
                                            <h2>Summer Sale</h2>
                                            <h3 class="ls-0">30% OFF</h3>
                                        </div>
                                        <div class="image-info-group">
                                            <a href="demo32-shop.html" class="btn mt-0">GET YOURS!</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="row products-group">
                                    <div class="col-lg-12">
                                        <nav class="toolbox sticky-header" data-sticky-options="{'mobile': true}">
                                            <div class="toolbox-left">
                                                <a href="#" class="sidebar-toggle">
                                                    <svg data-name="Layer 3" id="Layer_3" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                                        <line x1="15" x2="26" y1="9" y2="9" class="cls-1"></line>
                                                        <line x1="6" x2="9" y1="9" y2="9" class="cls-1"></line>
                                                        <line x1="23" x2="26" y1="16" y2="16" class="cls-1"></line>
                                                        <line x1="6" x2="17" y1="16" y2="16" class="cls-1"></line>
                                                        <line x1="17" x2="26" y1="23" y2="23" class="cls-1"></line>
                                                        <line x1="6" x2="11" y1="23" y2="23" class="cls-1"></line>
                                                        <path
                                                            d="M14.5,8.92A2.6,2.6,0,0,1,12,11.5,2.6,2.6,0,0,1,9.5,8.92a2.5,2.5,0,0,1,5,0Z"
                                                            class="cls-2"></path>
                                                        <path d="M22.5,15.92a2.5,2.5,0,1,1-5,0,2.5,2.5,0,0,1,5,0Z"
                                                            class="cls-2"></path>
                                                        <path d="M21,16a1,1,0,1,1-2,0,1,1,0,0,1,2,0Z" class="cls-3"></path>
                                                        <path
                                                            d="M16.5,22.92A2.6,2.6,0,0,1,14,25.5a2.6,2.6,0,0,1-2.5-2.58,2.5,2.5,0,0,1,5,0Z"
                                                            class="cls-2"></path>
                                                    </svg>
                                                    <span class="mb-0">Filter</span>
                                                </a>

                                                <div class="toolbox-item toolbox-sort">
                                                    <label>Lọc:</label>

                                                    <div class="select-custom">
                                                        <select name="orderby" class="form-control" onchange="if (this.value) window.location.href=this.value">
                                                            <option value="" selected="selected">Chọn loại</option>
                                                            <?php
                                                            require('db.php');
                                                            $tv1 = "SELECT * FROM loai_ma_sanpham ORDER BY id ASC";
                                                            $tv_11 = mysqli_query($link, $tv1);
                                                            while ($tv_21 = mysqli_fetch_array($tv_11)) {
                                                                $name_url = strtolower($tv_21['name_url']);
                                                                $thuocloai = $tv_21['thuocloai'];
                                                            ?>
                                                                <option value="sanpham/<?php echo $name_url; ?>"><?php echo $thuocloai; ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="toolbox-right">
                                                <div class="toolbox-item toolbox-show">
                                                    <label>Hiển Thị:</label>

                                                    <div class="select-custom">
                                                        <select name="count" class="form-control">
                                                            <option value="20">20</option>
                                                            <option value="32">32</option>
                                                            <option value="40">40</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="toolbox-item layout-modes">
                                                    <a href="#" class="layout-btn btn-grid active" title="Grid">
                                                        <i class="icon-mode-grid"></i>
                                                    </a>
                                                    <a href="#" class="layout-btn btn-list" title="List">
                                                        <i class="icon-mode-list"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </nav>

                                        <div class="row">
                                            <?php
                                            require('db.php');
                                            $p = new pager;
                                            $limit = 20;
                                            $start = $p->findStart($limit);
                                            $count = @mysqli_num_rows(mysqli_query($link, "SELECT*FROM ma_sanpham"));
                                            $pages = $p->findPages($count, $limit);
                                            $sql = mysqli_query($link, "SELECT * FROM ma_sanpham ORDER BY  id DESC limit  $start,$limit");
                                            while ($row = mysqli_fetch_array($sql)) {
                                                $link_hinh = "HinhCTSP/Hinhsanpham/$row[hinhanh]";
                                                $id = "$row[id]";
                                                $tieude_en = "$row[tieude_en]";
                                                $tieude = "$row[tieude]";
                                                $gia = "$row[gia]";
                                                $gia_formatted = number_format($gia, 0, ',', '.');
                                                $mota = "$row[mota]";
                                                $ngay = "$row[ngay]";
                                                $url = $row['linkurl'];
                                                $link = str_replace("?", "", strtolower("chitiet/$url"));
                                            ?>
                                                <div class="col-6 col-md-4 col-xl-3">
                                                    <div class="product-default inner-quickview inner-icon">
                                                        <figure>
                                                            <a href="<?php echo "$link"; ?>">
                                                                <img src="<?php echo "$link_hinh"; ?>" width="265" height="265" alt="product" />
                                                            </a>
                                                            <div class="btn-icon-group">
                                                                <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                                                        class="icon-shopping-cart"></i></a>
                                                            </div>
                                                        </figure>
                                                        <div class="product-details">
                                                            <div class="category-wrap">
                                                                <div class="category-list">
                                                                    <a href="#" class="product-category">Hype Store</a>
                                                                </div>
                                                                <a href="#" class="btn-icon-wish"><i
                                                                        class="icon-wishlist-2"></i></a>
                                                            </div>
                                                            <h3 class="product-title"> <a href="<?php echo "$link"; ?>"><?php echo "$tieude"; ?></a> </h3>
                                                            <div class="ratings-container">
                                                                <div class="product-ratings">
                                                                    <span class="ratings" style="width:100%"></span>
                                                                    <span class="tooltiptext tooltip-top"></span>
                                                                </div>
                                                            </div>
                                                            <div class="price-box">
                                                                <span class="product-price"><?php echo "$gia_formatted"; ?> vnđ</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        </div>
                                        <div class="bgphantranga">
                                            <?php
                                            echo "<div align='left' class='phantrang' style='float: left;width: 100%;text-align: right;'> &nbsp;&nbsp;&nbsp;&nbsp;Trang: ";
                                            $pagelist = $p->pageList($_GET['page'], $pages);
                                            echo $pagelist;
                                            echo "</div>"
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-2cols col-lg-3 col-md-4">
                            <aside class="sidebar-product d-block">
                                <?php
                                include('menu_trai/rightsanpham.php');
                                ?>
                            </aside>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </body>

    </html>