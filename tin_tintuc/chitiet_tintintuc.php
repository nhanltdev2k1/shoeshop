<body>
    <div class="page-wrapper">
        <main class="main">
            <div class="container-fluid">
                <nav aria-label="breadcrumb" class="breadcrumb-nav mb-0">
                    <ol class="breadcrumb">
                        <?php
                        require('db.php');
                        //$id = intval(preg_replace('/[^a-z0-9]+/i', '', $_GET["id"]));
                        $id = $_GET['url'];
                        $tv = "select * from tin_tintuc where linkurl like '%" . $id . "%' order by id ";
                        $tv_1 = mysqli_query($link, $tv);
                        $a_tv_1 = mysqli_query($link, $tv);
                        $tv_2 = mysqli_fetch_array($tv_1);
                        $thuocloai = "$tv_2[thuocloai]";
                        $ten = "$tv_2[tieude]";
                        ?>
                        <li class="breadcrumb-item"><a href="trang-chu">Trang Chủ</a></li>
                        <li class="breadcrumb-item"><a href="tintuc/">Tin Tức</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo "$ten" ?></li>
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
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
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
                                $count = mysqli_num_rows(mysqli_query($link, "SELECT*FROM tin_tintuc"));
                                $pages = $p->findPages($count, $limit);
                                $id = $_REQUEST["url"];
                                $result = mysqli_query($link, "SELECT * FROM tin_tintuc where linkurl like '%" . $id . "%' order by id desc limit $start,$limit");
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
                                <?php
                                require('db.php');
                                $tv = "select * from gioi_thieu where id=9 order by id asc";
                                $tv_1 = mysqli_query($link, $tv);
                                $a_tv_1 = mysqli_query($link, $tv);
                                ?>
                                <?php
                                while ($tv_2 = mysqli_fetch_array($tv_1)) {
                                    $link_hinh = "HinhCTSP/$tv_2[hinhanh]";
                                    $id = "$tv_2[id]";
                                    $tieude_en = "$tv_2[tieude_en]";
                                    $tieude = "$tv_2[tieude]";
                                    $mota = "$tv_2[mota]";
                                    $ngay = "$tv_2[ngay]";
                                    $url = $tv_2['linkurl'];
                                    $link = str_replace("?", "", strtolower("gioithieu-$url"));
                                ?>
                                    <div class="post-author">
                                        <figure>
                                            <img src="<?php echo $link_hinh; ?>" alt="author">
                                        </figure>
                                        <div class="author-content">
                                            <div style="color: #08c; font-weight: bold; font-size: 16px;"><?php echo $tieude; ?></div>
                                            <p><?php echo $mota; ?></p>
                                        </div><!-- End .author.content -->
                                    </div><!-- End .post-author -->
                                <?php } ?>
                                <div class="post-share">
                                    <p class="d-flex align-items-center" style="font-weight: bold; font-size: 18px;">
                                        <i class="fas fa-share"></i>
                                        Chia Sẻ Bài Viết
                                    </p>

                                    <div class="social-icons">
                                        <a href="#" class="social-icon social-facebook" target="_blank"
                                            title="Facebook">
                                            <i class="icon-facebook"></i>
                                        </a>
                                        <a href="#" class="social-icon social-twitter" target="_blank" title="Twitter">
                                            <i class="icon-twitter"></i>
                                        </a>
                                        <a href="#" class="social-icon social-linkedin" target="_blank"
                                            title="Linkedin">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                        <a href="#" class="social-icon social-gplus" target="_blank" title="Google +">
                                            <i class="fab fa-google-plus-g"></i>
                                        </a>
                                        <a href="#" class="social-icon social-mail" target="_blank" title="Email">
                                            <i class="icon-mail-alt"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="comment-respond">
                                    <p style="font-weight: bold; font-size: 18px;">Để Lại Bình Luận Của Bạn</p>

                                    <form action="#">
                                        <p>Địa chỉ email và số điện thoại của bạn sẽ giữ riêng, không công khai. Các trường bắt buộc được đánh dấu *</p>

                                        <div class="form-group">
                                            <label>Bình luận</label>
                                            <textarea cols="30" rows="1" class="form-control" required></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label>Họ và tên</label>
                                            <input type="text" class="form-control" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" class="form-control" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Số điện thoại</label>
                                            <input type="url" class="form-control">
                                        </div>

                                        <div class="form-group-custom-control mb-2">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="save-name">
                                                <label class="custom-control-label" for="save-name">Lưu tên, email,
                                                    vàsố điện thoại của bạn trong trình duyệt này cho lần bình luận tiếp theo.</label>
                                            </div>
                                        </div>

                                        <div class="form-footer my-0">
                                            <button type="submit" class="btn btn-sm btn-primary">Gửi Bình Luận</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </article>

                        <hr class="mt-2 mb-1">

                        <div class="related-posts">
                            <p><strong style="text-transform: uppercase; font-size: 20px;">Tin Tức Nổi Bật</strong></p>
                            <div class="owl-carousel owl-theme related-posts-carousel" data-owl-options="{
								'dots': false
							}">

                                <?php
                                require('db.php');
                                $p = new pager;
                                $limit = 3;
                                $start = $p->findStart($limit);
                                $count = @mysqli_num_rows(mysqli_query($link, "SELECT*FROM tin_tintuc"));
                                $pages = $p->findPages($count, $limit);
                                $sql = mysqli_query($link, "SELECT * FROM tin_tintuc ORDER BY RAND() LIMIT 3");
                                // hi?n th? DL

                                while ($row = mysqli_fetch_array($sql)) {
                                    $id = $row['id'];
                                    $ten = $row['ten'];
                                    $hinhanh = $row['hinhanh'];
                                    $tieude = $row['tieude'];
                                    $tieude_en = $row['tieude_en'];
                                    $mota = $row['mota'];
                                    $ngay = $row['ngay'];
                                    $url = $row['linkurl'];
                                    $link = str_replace("?", "", strtolower("thongtin/$url"));
                                ?>
                                    <article class="post">
                                        <div class="post-media zoom-effect">
                                            <a href="<?php echo "$link"; ?>">
                                                <img src="HinhCTSP/HinhTinTuc/<?php echo $row["hinhanh"]; ?>" alt="Post">
                                            </a>
                                        </div>

                                        <div class="post-body">
                                            <p class="post-title">
                                                <a href="<?php echo "$link"; ?>"><?php echo "$tieude_en"; ?></a>
                                            </p>

                                            <div class="post-title">
                                                <p style="color: #777; font-size: 16px; font-weight: 100;"><?php echo "$mota"; ?></p>
                                                <a href="<?php echo "$link"; ?>" class="read-more">Xem Thêm <i
                                                        class="fas fa-angle-right"></i></a>
                                            </div><!-- End .post-content -->
                                        </div><!-- End .post-body -->
                                    </article>

                                <?php } ?>

                            </div><!-- End .owl-carousel -->
                        </div><!-- End .related-posts -->
                    </div><!-- End .col-lg-9 -->

                    <div class="sidebar-toggle custom-sidebar-toggle">
                        <i class="fas fa-sliders-h"></i>
                    </div>
                    <div class="sidebar-overlay"></div>
                    <aside class="sidebar mobile-sidebar col-lg-3" style="padding-top: 40px;">
                        <?php
                        include('menu_trai/lefttintuc.php');
                        ?>
                    </aside><!-- End .col-lg-3 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </main><!-- End .main -->
    </div><!-- End .page-wrapper -->




</body>

</html>