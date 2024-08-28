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
                    <div class="col-xl-8cols col-lg-6 col-md-10">
                        <div class="container p-0">
                            <nav aria-label="breadcrumb" class="breadcrumb-nav">
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
                            <div class="container" style="padding-top: 50px;">
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
                                                        <h1 class='h1-tukhoa'></i><a href='$link'>$tieude</a></h1>
                                                            <h2 class='h2-tukhoa-1'> $tieude_en</h2>
                                                            <p class='p-tukhoa'> <i>$mota </i></p>
                                                            <div class='div-tukhoa-1'>
                                                            <a href='$link'> $hinhanh </a></div>
                                                            <div class='div-tukhoa-2'>
                                                            $noidung
                                                            </div>
                                                            <h2 class='h2-tukhoa-2'></i><a href='$link'>$tukhoa</a></h2>
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
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>