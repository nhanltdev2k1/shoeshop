<footer class="footer appear-animate" data-animation-name="fadeIn" data-animation-delay="100">
    <div class="footer-top bg-dark">
        <div class="container d-flex align-items-center justify-content-between flex-wrap">
            <div class="widget-newsletter pl-3 d-md-flex align-items-center">
                <div class="widget-newsletter-info">
                    <h5 class="widget-newsletter-title text-uppercase m-b-1 text-white">ĐĂNG KÝ NHẬN EMAIL</h5>
                    <p class="widget-newsletter-content font2 mb-0">Nhận tất cả thông tin mới nhất.</p>
                </div>
                <form action="#" class="mb-0">
                    <div class="footer-submit-wrapper d-flex mt-2 mb-1 mt-md-0 mb-md-0">
                        <input type="email" class="form-control bg-dark" placeholder="Nhập địa chỉ email của bạn" size="40" required>
                        <button type="submit" class="btn btn-dark btn-sm">Gửi</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="porto-content-box">
            <h3>GIẢM 20%</h3>
            <span>KHI MUA ONLINE</span>

            <a href="javascript:;" class="box-close">×</a>
        </div>
    </div>

    <div class="container">
        <div class="footer-middle">
            <div class="row">
                <div class="col-lg-4">
                    <div class="info-box info-box-icon-left text-white justify-content-start">
                        <i class="icon-shipping"></i>
                        <div class="info-box-content">
                            <h4>MIỄN PHÍ VẬN CHUYỂN &amp; TRẢ HÀNG</h4>
                            <p class="font2">Miễn phí vận chuyển cho tất cả đơn hàng trên 199.000 vnđ.</p>
                        </div>
                        <!-- End .info-box-content -->
                    </div>
                    <!-- End .info-box -->

                    <div class="info-box info-box-icon-left text-white justify-content-start">
                        <i class="icon-money"></i>

                        <div class="info-box-content">
                            <h4>CAM KẾT HOÀN TIỀN</h4>
                            <p class="font2">Cam kết hoàn tiền 100%</p>
                        </div>
                        <!-- End .info-box-content -->
                    </div>
                    <!-- End .info-box -->

                    <div class="info-box info-box-icon-left text-white justify-content-start">
                        <i class="icon-support"></i>

                        <div class="info-box-content">
                            <h4>HỖ TRỢ TRỰC TUYẾN</h4>
                            <p class="font2">Chúng tôi luôn sẵn sàng hỗ trợ bạn.</p>
                        </div>
                        <!-- End .info-box-content -->
                    </div>
                    <!-- End .info-box -->
                </div>

                <div class="col-md-6 col-lg-2">
                    <div class="widget">
                        <h3 class="widget-title">HÃNG GIÀY</h3>
                        <div class="widget-content">
                            <ul>
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
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="widget">
                        <h3 class="widget-title">Góc Tin Tức</h3>
                        <div class="widget-content">
                            <ul>
                                <?php
                                require('db.php');
                                $tv = "SELECT * FROM (SELECT * FROM tin_tintuc ORDER BY id DESC LIMIT 100) as recent_news ORDER BY RAND() LIMIT 3";
                                $tv_1 = mysqli_query($link, $tv);
                                ?>
                                <?php
                                while ($row = mysqli_fetch_array($tv_1)) {
                                    $link_hinh = "HinhCTSP/Hinhdichvu/$row[hinhanh]";
                                    $id = "$row[id]";
                                    $tieude_en = "$row[tieude_en]";
                                    $tieude = "$row[tieude]";
                                    $mota = "$row[mota]";
                                    $ngay = "$row[ngay]";
                                    $url = $row['linkurl'];
                                    $link = str_replace("?", "", strtolower("thongtin/$url"));
                                ?>
                                    <p class="p-text-footer"><a href="<?php echo "$link"; ?>"><?php echo "- $tieude_en"; ?></a></p><br>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="widget-group">
                        <div class="widget mb-3">
                            <h3 class="widget-title">Theo Dõi Chúng Tôi</h3>
                            <div class="widget-content">
                                <div class="social-icons ml-1">
                                    <a href="#" class="social-icon social-facebook" target="_blank" title="Facebook">
                                        <i class="icon-facebook"></i>
                                    </a>
                                    <a href="#" class="social-icon social-twitter" target="_blank" title="Twitter">
                                        <i class="icon-twitter"></i>
                                    </a>
                                    <a href="#" class="social-icon social-instagram" target="_blank" title="Instagram">
                                        <i class="icon-instagram"></i>
                                    </a>

                                    <a href="#" class="social-icon social-linkedin" target="_blank" title="LinkedIn">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="widget">
                            <h3 class="widget-title">Phương Thức Thanh Toán</h3>
                            <div class="widget-content">
                                <img src="hinhmenu/payments/payments_long.png" alt="payment image" width="201" height="31">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom flex-column flex-sm-row">
            <p>Porto eCommerce. © 2021. Tất cả quyền được bảo lưu</p>
            <ul>
                <?php
                //include_once("phan_trang.php");
                require('db.php');
                $tv = "select * from gioi_thieu order by id asc limit 0,4";
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
                    $link = str_replace("?", "", strtolower("gioithieu/$url"));
                ?>
                    <li><a href="<?php echo $link; ?>"><?php echo $tieude; ?></a></li>
                <?php } ?>

            </ul>
        </div>
    </div>
</footer>