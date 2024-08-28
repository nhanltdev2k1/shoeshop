<div class="top-slider owl-carousel owl-theme slide-animate show-nav-hover" data-toggle="owl" data-owl-options="{
                'items' : 1,
                'margin' : 0,
                'nav': true,
                'navText': [ '<i class=icon-left-open-big>', '<i class=icon-right-open-big>' ],
                'dots': false
            }">
  <?php
  require('db.php');
  $tv = "select * from thuong_mai order by id ASC limit 0,3";
  $tv_1 = mysqli_query($link, $tv);
  $a_tv_1 = mysqli_query($link, $tv);
  ?>
  <?php
  while ($tv_2 = mysqli_fetch_array($tv_1)) {
    $link_hinh = "HinhCTSP/$tv_2[hinhanh]";
    $id = "$tv_2[id]";
    $tieude = "$tv_2[tieude]";
    $mota = "$tv_2[mota]";
    $ngay = "$tv_2[ngay]";
  ?>
    <div class="home-slide" style="background-image: url('HinhCTSP/<?php echo $tv_2["hinhanh"]; ?>');">

    </div>
  <?php } ?>
</div>
<section class="info-section row row-joined no-border appear-animate" data-animation-name="fadeIn" data-animation-delay="100">
  <div class="col-sm-6 col-xl-3">
    <div class="info-box info-box-icon-left">
      <i class="icon-shipping"></i>

      <div class="info-box-content">
        <p style="color: #000; font-weight: bold;">MIỄN PHÍ VẬN CHUYỂN &amp; HOÀN TRẢ</p>
        <p class="font2">Miễn phí vận chuyển cho tất cả đơn hàng trên 199vnđ.</p>
      </div>
    </div>
  </div>

  <div class="col-sm-6 col-xl-3">
    <div class="info-box info-box-icon-left">
      <i class="icon-money"></i>

      <div class="info-box-content">
        <p style="color: #000; font-weight: bold;">ĐẢM BẢO HOÀN TIỀN</p>
        <p class="font2">Đảm bảo hoàn tiền 100%.</p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-xl-3">
    <div class="info-box info-box-icon-left">
      <i class="icon-support"></i>

      <div class="info-box-content">
        <p style="color: #000; font-weight: bold;">HỖ TRỢ TRỰC TUYẾN 24/7</p>
        <p class="font2">Chúng tôi sẵn sàng hỗ trợ bạn bất kỳ lúc nào, suốt 24/7.</p>
      </div>
    </div>
  </div>

  <div class="col-sm-6 col-xl-3">
    <div class="info-box info-box-icon-left">
      <i class="icon-secure-payment"></i>
      <div class="info-box-content">
        <p style="color: #000; font-weight: bold;">THANH TOÁN BẢO MẬT</p>
        <p class="font2">Thanh toán an toàn với mã hóa bảo mật tối đa.</p>
      </div>
    </div>
  </div>
</section>