<main class="main">
    <?php
    include('phantrang/phantrang_dichvu.php');
    ?>

    <body data-spy="scroll" data-target="#category-list">
        <div class="page-wrapper">
            <main class="main">
                <div class="container-fluid">
                    <div class="category-banner-container">
                        <div class="banner category-banner p-0" style="background-color: #f4f4f4;">
                            <figure>
                                <img src="hinhmenu/background/banner-sanpham.jpg" alt="banner" width="1685"
                                    height="262">
                            </figure>
                        </div>
                    </div>

                    <nav aria-label="breadcrumb" class="breadcrumb-nav mb-0">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="trang-chu">Trang Chủ</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Danh Mục Sản Phẩm</li>
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

                        <div class="row">
                            <div class="col-lg-9 main-content shop-content">
                                <nav class="toolbox sticky-header" data-sticky-options="{'mobile': true}">
                                    <div class="toolbox-left">
                                        <a href="#" class="sidebar-toggle"><svg data-name="Layer 3" id="Layer_3"
                                                viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                                <line x1="15" x2="26" y1="9" y2="9" class="cls-1"></line>
                                                <line x1="6" x2="9" y1="9" y2="9" class="cls-1"></line>
                                                <line x1="23" x2="26" y1="16" y2="16" class="cls-1"></line>
                                                <line x1="6" x2="17" y1="16" y2="16" class="cls-1"></line>
                                                <line x1="17" x2="26" y1="23" y2="23" class="cls-1"></line>
                                                <line x1="6" x2="11" y1="23" y2="23" class="cls-1"></line>
                                                <path
                                                    d="M14.5,8.92A2.6,2.6,0,0,1,12,11.5,2.6,2.6,0,0,1,9.5,8.92a2.5,2.5,0,0,1,5,0Z"
                                                    class="cls-2"></path>
                                                <path d="M22.5,15.92a2.5,2.5,0,1,1-5,0,2.5,2.5,0,0,1,5,0Z" class="cls-2">
                                                </path>
                                                <path d="M21,16a1,1,0,1,1-2,0,1,1,0,0,1,2,0Z" class="cls-3"></path>
                                                <path
                                                    d="M16.5,22.92A2.6,2.6,0,0,1,14,25.5a2.6,2.6,0,0,1-2.5-2.58,2.5,2.5,0,0,1,5,0Z"
                                                    class="cls-2"></path>
                                            </svg>
                                            <span>Filter</span>
                                        </a>

                                        <div class="toolbox-item toolbox-sort">
                                            <label>Tìm Kiếm:</label>
                                            <div class="select-custom">
                                                <select name="orderby" class="form-control" onchange="location = this.value;">
                                                    <option selected="selected">Chọn loại</option>
                                                    <option value="sanpham/do-doi">Đồ Đôi</option>
                                                    <option value="sanpham/do-cho-gia-dinh">Đồ Cho Gia Đình</option>
                                                    <option value="sanpham/ao-thun-form-rong">Áo Thun Form Rộng</option>
                                                    <option value="sanpham/ao-thun-nu">Áo Thun Nữ</option>
                                                    <option value="sanpham/quan-ngan">Quần Ngắn</option>
                                                    <option value="sanpham/quan-dai">Quần Dài</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="toolbox-right">
                                        <div class="toolbox-item layout-modes">
                                            <a href="demo19-shop.html" class="layout-btn btn-grid active" title="Grid">
                                                <i class="icon-mode-grid"></i>
                                            </a>
                                            <a href="category-list.html" class="layout-btn btn-list" title="List">
                                                <i class="icon-mode-list"></i>
                                            </a>
                                        </div>
                                    </div>
                                </nav>
                                <div class="row product-ajax-grid">
                                    <?php
                                    require('db.php');
                                    $p = new pager;
                                    $limit = 5;
                                    $start = $p->findStart($limit);
                                    $count = @mysqli_num_rows(mysqli_query($link, "SELECT*FROM tin_dichvu"));
                                    $pages = $p->findPages($count, $limit);
                                    $sql = mysqli_query($link, "SELECT * FROM tin_dichvu  ORDER BY  id DESC limit  $start,$limit");
                                    while ($row = mysqli_fetch_array($sql)) {
                                        $link_hinh = "HinhCTSP/Hinhdichvu/$row[hinhanh]";
                                        $id = "$row[id]";
                                        $tieude_en = "$row[tieude_en]";
                                        $tieude = "$row[tieude]";
                                        $title = "$row[title]";
                                        $mota = "$row[mota]";
                                        $ngay = "$row[ngay]";
                                        $url = $row['linkurl'];
                                        $link = str_replace("?", "", strtolower("chitiet/$url"));
                                    ?>
                                        <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                            <div class="product-default inner-quickview inner-icon">
                                                <figure>
                                                    <a href="<?php echo "$link"; ?>s">
                                                        <img src="<?php echo "$link_hinh"; ?>"
                                                            width="205" height="205" alt="product">
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
                                                        <p class="product-title" style="color: #000;">
                                                            <a href="<?php echo "$link"; ?>"><?php echo "$tieude_en"; ?></a>
                                                        </p>
                                                        <a href="wishlist.html" title="Wishlist" class="btn-icon-wish"><i
                                                                class="icon-heart"></i></a>
                                                    </div>
                                                    <div class="ratings-container">
                                                        <div class="product-ratings">
                                                            <span class="ratings" style="width:100%"></span>
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="product-price"><?php echo $title; ?> vnđ</span>
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
                            <div class="sidebar-overlay"></div>
                            <aside class="sidebar-shop col-lg-3 order-lg-first mobile-sidebar">
                                <?php
                                include('menu_trai/leftsanpham.php');
                                ?>
                            </aside>
                        </div>
                    </div>
                    <div class="mb-4"></div>
                </div>
            </main>
        </div>
    </body>