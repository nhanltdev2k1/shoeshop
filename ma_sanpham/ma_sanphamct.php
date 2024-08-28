<h1 style="font-size:0px; margin: 0px; height:0px; color:#fff; margin: 0px; padding: 0px;"><a href='https://hypestore.site/'>Mua Nike Chính Hãng Ở Đà Nẵng</a></h1>
<h2 style="font-size:0px; margin: 0px; height:0px; color:#fff; margin: 0px; padding: 0px;"><a href='https://hypestore.site/'>Giày Bóng Rổ Chính Hãng Tại Đà Nẵng</a></h2>
<h2 style="font-size:0px; margin: 0px; height:0px; color:#fff; margin: 0px; padding: 0px;"><a href='https://hypestore.site/'>Shop Giày Air Force 1 Giá Tốt Ở Đà Nẵng</a></h2>
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
            $page_list .= "<li><a href='sanpham/" . $_GET['url'] . "&page=1' title='Trang đầu'><i class='fa fa-backward'></i></a></li>";
            $page_list .= "<li><a href='sanpham/" . $_GET['url'] . "&page=" . ($curpage - 1) . "' title='Về trang trước'><i class='fa fa-arrow-left'></i></a></li>";
        }

        // Display a maximum of 3 page links
        $startPage = max(1, $curpage - 1);
        $endPage = min($pages, $curpage + 1);

        for ($i = $startPage; $i <= $endPage; $i++) {
            if ($i == $curpage) {
                $page_list .= "<li><b>" . $i . "</b></li>";
            } else {
                $page_list .= "<li><a href='sanpham/" . $_GET['url'] . "&page=" . $i . "' title='Trang " . $i . "'><font color='red'>" . $i . "</font></a></li>";
            }
        }

        // Next and Last buttons
        if ($curpage < $pages) {
            $page_list .= "<li><a href='sanpham/" . $_GET['url'] . "&page=" . ($curpage + 1) . "' title='Đến trang sau'><i class='fa fa-arrow-right'></i></a></li>";
            $page_list .= "<li><a href='sanpham/" . $_GET['url'] . "&page=" . $pages . "' title='Trang cuối'><i class='fa fa-forward'></i></a></li>";
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
            $next_prev = "<a href=\"?p=danhsach_masanpham&page=" . ($curpage - 1) . "\">Back</a>";
        }
        $next_prev .= "|";
        if (($curpage + 1) > $page) {
            $next_prev .= "Next";
        } else {
            $next_prev = "<a href=\"?p=danhsach_masanpham&page=" . ($curpage + 1) . "\">Next</a>";
        }
        return $next_prev;
    }
}
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
                                    <?php
                                    require('db.php');
                                    $did = $_GET["url"];
                                    $tv = "select * from loai_ma_sanpham where name_url='" . $_GET['url'] . "' order by id ";
                                    $tv_1 = mysqli_query($link, $tv);
                                    $a_tv_1 = mysqli_query($link, $tv);
                                    $tv_2 = mysqli_fetch_array($tv_1);
                                    $id = $tv_2['id'];
                                    $ten = "$tv_2[thuocloai]";
                                    ?>
                                    <li class="breadcrumb-item"><a href="trang-chu">Trang Chủ</a></li>
                                    <li class="breadcrumb-item"><a href="danhmuc">Trang Chủ</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><?php echo ucwords($ten); ?></li>
                                </ol>
                            </nav>
                            <div class="home-slide banner-cat d-flex align-items-center mb-3" style="background-image: url('hinhmenu/banner/banner-sanpham.webp');">
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
                                    <div>
                                        <?php
                                        $display = 20;
                                        $p = new pager;
                                        $limit = 12;
                                        $start = $p->findStart($limit);
                                        $count = mysqli_num_rows(mysqli_query($link, "SELECT * FROM ma_sanpham WHERE thuocloai = '$id'"));
                                        $pages = $p->findPages($count, $limit);
                                        $resui = mysqli_query($link, "SELECT * FROM ma_sanpham WHERE thuocloai = '$id' ORDER BY id DESC LIMIT $start, $limit");
                                        $stt = 0; // Initialize counter

                                        while ($row = mysqli_fetch_object($resui)) {
                                            $product_id = $row->id; // Avoid using $id for both query and loop
                                            $thuocloai = $row->thuocloai;
                                            $tieude = $row->tieude;
                                            $mota = $row->mota;
                                            $tieude_en = $row->tieude_en;
                                            $gia = $row->gia;
                                            $gia_formatted = number_format($gia, 0, ',', '.');
                                            $ngay = $row->ngay;
                                            $url = $row->linkurl;
                                            $hinhanh = "HinhCTSP/Hinhsanpham/" . $row->hinhanh;
                                            $link = str_replace("?", "", strtolower("chitiet/$url"));

                                            // Start a new row every 4 items
                                            if ($stt % 4 == 0) {
                                                echo "<div class='row'>";
                                            }

                                            echo "
                                                <div class='col-6 col-md-4 col-xl-3'>
                                                    <div class='product-default inner-quickview inner-icon'>
                                                        <figure>
                                                            <a href='$link'>
                                                                <img src='$hinhanh' width='265' height='265' alt='product' />
                                                            </a>
                                                            <div class='btn-icon-group'>
                                                                <a href='#' class='btn-icon btn-add-cart product-type-simple'><i class='icon-shopping-cart'></i></a>
                                                            </div>
                                                        </figure>
                                                        <div class='product-details'>
                                                            <div class='category-wrap'>
                                                                <div class='category-list'>
                                                                    <a href='#' class='product-category'>Hype Store</a>
                                                                </div>
                                                                <a href='#' class='btn-icon-wish'><i class='icon-wishlist-2'></i></a>
                                                            </div>
                                                            <p class='product-title'><a href='$link'>$tieude</a></p>
                                                            <div class='ratings-container'>
                                                                <div class='product-ratings'>
                                                                    <span class='ratings' style='width:100%'></span>
                                                                    <span class='tooltiptext tooltip-top'></span>
                                                                </div>
                                                            </div>
                                                            <div class='price-box'>
                                                                <span class='product-price'>$gia_formatted vnđ</span>
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
                                    </div>

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