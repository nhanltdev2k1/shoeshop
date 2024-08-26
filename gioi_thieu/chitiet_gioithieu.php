<body>
    <div class="page-wrapper">
        <div class="top-notice bg-primary text-white">
            <img src="hinhmenu/background/banner-tintuc.jpg" alt="Promo Image" class="promo-image">
            <button title="Close (Esc)" type="button" class="mfp-close">×</button>

        </div><!-- End .top-notice -->

        <main class="main">
            <main class="main">
                <nav aria-label="breadcrumb" class="breadcrumb-nav mb-50">
                    <ol class="breadcrumb">
                        <?php
                        require('db.php');
                        //$id = intval(preg_replace('/[^a-z0-9]+/i', '', $_GET["id"]));
                        $id = $_GET['url'];
                        $tv = "select * from gioi_thieu where linkurl like '%" . $id . "%' order by id ";
                        $tv_1 = mysqli_query($link, $tv);
                        $a_tv_1 = mysqli_query($link, $tv);
                        $tv_2 = mysqli_fetch_array($tv_1);
                        $thuocloai = "$tv_2[thuocloai]";
                        $ten = "$tv_2[tieude]";
                        ?>
                        <li class="breadcrumb-item"><a href="trang-chu">Trang Chủ</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo "$ten" ?></li>
                    </ol>
                </nav>

                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <article class="post single">
                                <div class="post-body">
                                    <?php
                                    include_once("phan_trang.php");
                                    require('db.php');
                                    //require('database.php');
                                    //$ketnoi_maychu = ketnoi_MC();
                                    //chon_CSDL($ketnoi_maychu);
                                    $p = new pager;
                                    $limit = 1;
                                    $start = $p->findStart($limit);
                                    $count = mysqli_num_rows(mysqli_query($link, "SELECT*FROM gioi_thieu"));
                                    $pages = $p->findPages($count, $limit);
                                    $id = $_REQUEST["url"];
                                    $result = mysqli_query($link, "SELECT * FROM gioi_thieu where linkurl like '%" . $id . "%' order by id desc limit $start,$limit");
                                    // hiển thị DL
                                    if (mysqli_num_rows($result) <> 0) {
                                        echo " <table width='100%' border='0' align='left'>";
                                        $stt = 0;
                                        while ($row = mysqli_fetch_object($result)) {
                                            $ngay = $row->ngay;
                                            $thuocloai = $row->thuocloai;
                                            $tieude = doikyty($row->tieude);
                                            $noidung = doikyty($row->noidung);
                                            $mota = doikyty($row->mota);
                                            $tieude_en = doikyty($row->tieude_en);
                                            $facebook = $row->facebook;
                                            $tukhoa = $row->tukhoa;
                                            $url = khongdau($row->tieude);
                                            $link = "thong-tin-$url-$id";
                                            $hinhanh = "HinhCTSP/HinhTinTuc/" . $row->hinhanh;
                                            $hinhanh = "<img src='$hinhanh'  text-align: center; alt='$tieude' title='$tieude'  >  ";
                                            if ($stt % 2 == 0) {
                                                echo "<tr>";
                                            }
                                            echo "<td align='left' width='100%'>";
                                            echo "<table align='left' width='100%'>";
                                            echo "<div >
                                        <h1 style='padding: 0px;margin: 0px;font-size: 0px;line-height: 0px;color: #fff;'></i><a href='$link'>$tieude</a></h1>
                                            <h2 style='font-size: 24px;
                                            font-weight: bold;
                                            margin-top: 30px;
                                            margin-bottom: 15px;
                                            line-height: 35px;'> $tieude_en</h2>
                                            <p style='font-size: 16px;line-height: 29px;font-weight: bold;'> <i>$mota </i></p>
                                            <div style='padding:20px; text-align: center; font-family:'Arial', sans-serif;'>
                                            <a href='$link'> $hinhanh </a></div>
                                            <div style='padding-bottom: 40px; font-size: 18px; font-family:'Arial', sans-serif; '>
                                            $noidung
                                            </div>
                                            <h2 style='padding: 0px;margin: 0px;font-size: 0px;line-height: 0px;color: #fff;'></i><a href='$link'>$tukhoa</a></h2>
                                        </div>";
                                            echo " </table>";
                                            echo "</td>";
                                            $stt = $stt + 1;

                                            if ($stt % 1 == 0) {
                                                echo "</tr>";
                                            }
                                        }
                                        echo " </table>";
                                    }
                                    ?>
                                </div>
                            </article>
                        </div><!-- End .col-lg-9 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </main><!-- End .main -->
    </div><!-- End .page-wrapper -->




</body>


<!-- Mirrored from portotheme.com/html/porto_ecommerce/single.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Aug 2024 01:42:12 GMT -->

</html>