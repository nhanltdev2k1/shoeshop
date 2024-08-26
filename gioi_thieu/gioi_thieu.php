<main class="main">
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
                $page_list .= "<li><a href=tintuc/bantin/page=1 'title=\Trang đầu\><i class='fa fa-backward'></i></a></li>";
                $page_list .= "<li><a href=tintuc/bantin/page=" . ($curpage - 1) . " title=\'Về trang trước\'><i class='fa fa-arrow-left'></i></a></li>";
            }
            // Display a maximum of 3 page links
            $startPage = max(1, $curpage - 1);
            $endPage = min($pages, $curpage + 1);

            for ($i = $startPage; $i <= $endPage; $i++) {
                if ($i == $curpage) {
                    $page_list .= "<li><b>" . $i . "</b></li>";
                } else {
                    $page_list .= "<li><a href=tintuc/bantin/page=" . $i . " title=\'Trang " . $i . "'><font color='red'>" . $i . "</font></a></li>";
                }
            }
            // Next and Last buttons
            if ($curpage < $pages) {
                $page_list .= "<li><a href=tintuc/bantin/page=" . ($curpage + 1) . " title=\'Đến trang sau\'><i class='fa fa-arrow-right'></i></a></li>";
                $page_list .= "<li><a href=tintuc/bantin/page=" . $pages . " title=\'Trang cuối\'><i class='fa fa-forward'></i></a></li>";
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

                $next_prev = "<a href=\"?p=ds_gioi_thieu&page=" . ($curpage - 1) . "\">Back</a>";
            }
            $next_prev .= "|";
            if (($curpage + 1) > $page) {
                $next_prev .= "Next";
            } else {
                $next_prev = "<a href=\"?p=ds_gioi_thieu&page=" . ($curpage + 1) . "\">Next</a>";
            }
            return $next_prev;
        }
    }
    ?>
    <div class="container-fluid">
        <div class="category-banner-container">
            <div class="banner category-banner p-0" style="background-color: #f4f4f4;">
                <figure>
                    <img src="hinhmenu/background/banner-tintuc.jpg" alt="banner" width="1685"
                        height="262">
                </figure>
            </div>
        </div>

        <nav aria-label="breadcrumb" class="breadcrumb-nav mb-50">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="demo19.html">Trang Chủ</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tin Tức</li>
            </ol>
        </nav>
    </div>
    <div class="container" style="padding-top: 50px;">
        <div class="row">
            <div class="col-lg-9">
                <div class="blog-section row">
                    <?php
                    //include_once("phan_trang.php");
                    require('db.php');
                    // $ketnoi_maychu = ketnoi_MC();
                    //chon_CSDL($ketnoi_maychu);
                    $p = new pager;
                    $limit = 3;
                    $start = $p->findStart($limit);
                    $count = @mysqli_num_rows(mysqli_query($link, "SELECT*FROM gioi_thieu"));
                    $pages = $p->findPages($count, $limit);
                    $sql = mysqli_query($link, "SELECT * FROM gioi_thieu  ORDER BY  id DESC limit  $start,$limit");
                    // hi?n th? DL
                    while ($row = mysqli_fetch_array($sql)) {
                        $id = $row['id'];
                        $ten = $row['ten'];
                        $hinhanh = $row['hinhanh'];
                        $tieude = doikyty("$row[tieude]");
                        $tieude_en = doikyty("$row[tieude_en]");
                        $mota = doikyty("$row[mota]");
                        $ngay = $row['ngay'];
                        $url = $row['linkurl'];
                        $link = str_replace("?", "", strtolower("thongtin/$url"));
                    ?>
                        <div class="col-md-6 col-lg-4">
                            <article class="post">
                                <div class="post-media">
                                    <a href="<?php echo "$link"; ?>">
                                        <img src="HinhCTSP/HinhTinTuc/<?php echo $row["hinhanh"]; ?>" alt="<?php echo "$tieude_en"; ?>" width="225"
                                            height="280">
                                    </a>
                                    <div class="post-date">
                                        <span class="day"><?php echo "$ngay"; ?></span>
                                    </div>
                                </div>
                                <div class="post-body">
                                    <p class="post-title">
                                        <a href="<?php echo "$link"; ?>"><?php echo "$tieude_en"; ?></a>
                                    </p>
                                    <div class="post-content">
                                        <p><?php echo "$mota"; ?></p>
                                    </div>
                                </div>
                            </article>
                        </div>
                    <?php } ?>
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

            <div class="sidebar-toggle custom-sidebar-toggle">
                <i class="fas fa-sliders-h"></i>
            </div>
            <div class="sidebar-overlay"></div>
            <aside class="sidebar mobile-sidebar col-lg-3">
                <?php
                include('menu_trai/lefttintuc.php');
                ?>
            </aside><!-- End .col-lg-3 -->
        </div><!-- End .row -->
    </div><!-- End .container -->
</main><!-- End .main -->