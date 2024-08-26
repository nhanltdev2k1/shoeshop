<?php

$thamso = $_GET['thamso'];
$did = $_GET["url"];
class pager
{
    function findStart($limit)
    {
        if (!isset($_GET['page']) || ($_GET['page'] == "1")) {
            $start = 0;
            $_GET['page'] = 1;
        } else {
            $start = ($_GET['page'] - 1) * $limit;
        }
        return $start;
    }

    function findPages($count, $limit)
    {
        $page = (($count % $limit) == 0) ? $count / $limit : floor($count / $limit) + 1;
        return $page;
    }

    function pageList($curpage, $pages)
    {
        $page_list = "<ul class='phantrang'>";

        // First and Previous buttons
        if ($curpage != 1) {
            $page_list .= "<li><a href='dichvu/" . $_GET['url'] . "&page=1' title='Trang đầu'><i class='fa fa-backward'></i></a></li>";
            $page_list .= "<li><a href='dichvu/" . $_GET['url'] . "&page=" . ($curpage - 1) . "' title='Về trang trước'><i class='fa fa-arrow-left'></i></a></li>";
        }

        // Display a maximum of 3 page links
        $startPage = max(1, $curpage - 1);
        $endPage = min($pages, $curpage + 1);

        for ($i = $startPage; $i <= $endPage; $i++) {
            if ($i == $curpage) {
                $page_list .= "<li><b>" . $i . "</b></li>";
            } else {
                $page_list .= "<li><a href='dichvu/" . $_GET['url'] . "&page=" . $i . "' title='Trang " . $i . "'><font color='red'>" . $i . "</font></a></li>";
            }
        }

        // Next and Last buttons
        if ($curpage < $pages) {
            $page_list .= "<li><a href='dichvu/" . $_GET['url'] . "&page=" . ($curpage + 1) . "' title='Đến trang sau'><i class='fa fa-arrow-right'></i></a></li>";
            $page_list .= "<li><a href='dichvu/" . $_GET['url'] . "&page=" . $pages . "' title='Trang cuối'><i class='fa fa-forward'></i></a></li>";
        }


        $page_list .= "</ul>";

        return $page_list;
    }

    function nextprev($curpage, $page)
    {
        $next_prev = "";
        if (($curpage - 1) < 0 || ($curpage - 1) != 1) {
            $next_prev .= "Back";
        } else {
            $next_prev = "<a href=\"?p=ds_tin_dichvu&page=" . ($curpage - 1) . "\">Back</a>";
        }
        $next_prev .= "|";
        if (($curpage + 1) > $page) {
            $next_prev .= "Next";
        } else {
            $next_prev = "<a href=\"?p=ds_tin_dichvu&page=" . ($curpage + 1) . "\">Next</a>";
        }
        return $next_prev;
    }
}
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
                        <li class="breadcrumb-item"><a href="demo19.html">Trang Chủ</a></li>
                        <li class="breadcrumb-item"><a href="demo19.html">Danh Mục Sản Phẩm</a></li>
                        <?php
                        require('db.php');
                        $did = $_GET["url"];
                        $tv = "select * from loai_tin_dichvu where name_url='" . $_GET['url'] . "' order by id ";
                        $tv_1 = mysqli_query($link, $tv);
                        $a_tv_1 = mysqli_query($link, $tv);
                        $tv_2 = mysqli_fetch_array($tv_1);
                        $id = $tv_2['id'];
                        $ten = "$tv_2[thuocloai]";
                        ?>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo ucwords($ten); ?></li>
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
                    </div><!-- End .category-list -->
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
                                        </div><!-- End .select-custom -->
                                    </div><!-- End .toolbox-item -->
                                </div><!-- End .toolbox-left -->
                                <div class="toolbox-right">
                                    <div class="toolbox-item layout-modes">
                                        <a href="demo19-shop.html" class="layout-btn btn-grid active" title="Grid">
                                            <i class="icon-mode-grid"></i>
                                        </a>
                                        <a href="category-list.html" class="layout-btn btn-list" title="List">
                                            <i class="icon-mode-list"></i>
                                        </a>
                                    </div><!-- End .layout-modes -->
                                </div><!-- End .toolbox-right -->
                            </nav>
                            <div class="product-ajax-grid">
                                <?php
                                $display = 12;
                                $p = new pager;
                                $limit = 12;
                                $start = $p->findStart($limit);
                                $count = mysqli_num_rows(mysqli_query($link, "SELECT * FROM tin_dichvu WHERE thuocloai = " . $id . ""));
                                $pages = $p->findPages($count, $limit);
                                $resui = mysqli_query($link, "SELECT * FROM tin_dichvu WHERE thuocloai = '$id' ORDER BY id DESC LIMIT $start, $limit");
                                $stt = 0; // Initialize counter
                                while ($row = mysqli_fetch_object($resui)) {
                                    $id = $row->id;
                                    $thuocloai = $row->thuocloai;
                                    $tieude = $row->tieude;
                                    $mota = $row->mota;
                                    $tieude_en = $row->tieude_en;
                                    $title = $row->title;
                                    $ngay = $row->ngay;
                                    $url = $row->linkurl;
                                    $hinhanh = "HinhCTSP/Hinhdichvu/" . $row->hinhanh;
                                    $link = str_replace("?", "", strtolower("chitiet/$url"));

                                    // Start a new row every 4 items
                                    if ($stt % 4 == 0) {
                                        echo "<div class='row'>";
                                    }

                                    echo "
                                        <div class='col-12 col-md-4 col-lg-3 col-xl-5col'>
                                            <div class='product-default inner-quickview inner-icon'>
                                                <figure>
                                                    <a href='$link'>
                                                        <img src='$hinhanh' width='205' height='205' alt='product'>
                                                    </a>
                                                    <div class='btn-icon-group'>
                                                        <a href='3' class='btn-icon btn-add-cart product-type-simple'><i class='icon-shopping-cart'></i></a>
                                                        <a href='$hinhanh' class='btn-icon btn-add-view'><i class='fa fa-eye'></i></a>
                                                        <a href='$link' class='btn-icon btn-add-link'><i class='fa fa-link'></i></a>
                                                    </div>
                                                </figure>
                                                <div class='product-details'>
                                                    <div class='title-wrap'>
                                                        <p class='product-title' style='color: #000;'>
                                                            <a href='$link'>$tieude_en</a>
                                                        </p>
                                                        <a href='$link' title='Wishlist' class='btn-icon-wish'><i class='icon-heart'></i></a>
                                                    </div>
                                                    <div class='ratings-container'>
                                                        <div class='product-ratings'>
                                                            <span class='ratings' style='width:100%'></span><!-- End .ratings -->
                                                            <span class='tooltiptext tooltip-top'></span>
                                                        </div>
                                                    </div>
                                                    <div class='price-box'>
                                                        <span class='product-price'>$title vnđ</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>";
                                    $stt++;

                                    // Close the row after every 4 items
                                    if ($stt % 4 == 0) {
                                        echo "</div>";
                                    }
                                }

                                // Close any open row
                                if ($stt % 4 != 0) {
                                    echo "</div>";
                                }
                                ?>


                            </div><!-- End .row -->
                            <div class="bgphantranga">
                                <?php
                                echo "<div align='left' class='phantrang' style='float: left;width: 100%;text-align: right;'> &nbsp;&nbsp;&nbsp;&nbsp;Trang: ";
                                //echo $pagelist;
                                //echo $home['paging'];
                                $pagelist = $p->pageList($_GET['page'], $pages);
                                echo $pagelist;
                                echo "</div>"
                                ?>
                            </div>

                        </div><!-- End .col-lg-9 -->

                        <div class="sidebar-overlay"></div>
                        <aside class="sidebar-shop col-lg-3 order-lg-first mobile-sidebar">
                            <?php
                            include('menu_trai/leftsanpham.php');
                            ?>
                        </aside><!-- End .col-lg-3 -->
                    </div><!-- End .row -->
                </div>
                <div class="mb-4"></div>
            </div>
        </main><!-- End .main -->
    </div><!-- End .page-wrapper -->
</body>