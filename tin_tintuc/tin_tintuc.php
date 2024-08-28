    <h1 style="font-size:0px; margin: 0px; height:0px; color:#fff; margin: 0px; padding: 0px;"><a href='https://hypestore.site/'>Mua Nike Chính Hãng Ở Đà Nẵng</a></h1>
    <h2 style="font-size:0px; margin: 0px; height:0px; color:#fff; margin: 0px; padding: 0px;"><a href='https://hypestore.site/'>Giày Bóng Rổ Chính Hãng Tại Đà Nẵng</a></h2>
    <h2 style="font-size:0px; margin: 0px; height:0px; color:#fff; margin: 0px; padding: 0px;"><a href='https://hypestore.site/'>Shop Giày Air Force 1 Giá Tốt Ở Đà Nẵng</a></h2>
    <?php
    include('phantrang/phantrang_tintuc.php');
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
                                include('menu_trai/lefttintuc.php');
                                ?>
                            </aside>
                        </div>

                        <div class="col-xl-8cols col-lg-6 col-md-8">
                            <div class="container p-0">
                                <nav aria-label="breadcrumb" class="breadcrumb-nav">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="trang-chu">Trang Chủ</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Tin Tức</li>
                                    </ol>
                                </nav>
                                <div class="home-slide banner-cat d-flex align-items-center mb-3" style="background-image: url('hinhmenu/banner/banner-tintuc.webp');">

                                </div>

                                <div class="container" style="padding-top: 50px;">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="blog-section row">
                                                <?php
                                                //include_once("phan_trang.php");
                                                require('db.php');
                                                // $ketnoi_maychu = ketnoi_MC();
                                                //chon_CSDL($ketnoi_maychu);
                                                $p = new pager;
                                                $limit = 12;
                                                $start = $p->findStart($limit);
                                                $count = @mysqli_num_rows(mysqli_query($link, "SELECT*FROM tin_tintuc"));
                                                $pages = $p->findPages($count, $limit);
                                                $sql = mysqli_query($link, "SELECT * FROM tin_tintuc  ORDER BY  id DESC limit  $start,$limit");
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
                                                $pagelist = $p->pageList($_GET['page'], $pages);
                                                echo $pagelist;
                                                echo "</div>"
                                                ?>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-2cols col-lg-3 col-md-4">
                            <aside class="sidebar-product d-block">
                                <?php
                                include('menu_trai/righttintuc.php');
                                ?>
                            </aside>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </body>

    </html>