<h1 style="font-size:0px; margin: 0px; height:0px; color:#fff; margin: 0px; padding: 0px;"><a href='https://lovestudiostore.xyz/'>Shop Thời Trang Nam Nữ Đà Nẵng</a></h1>
<h2 style="font-size:0px; margin: 0px; height:0px; color:#fff; margin: 0px; padding: 0px;"><a href='https://lovestudiostore.xyz/'>Shop Áo Thun Oversize Đà Nẵng</a></h2>
<h2 style="font-size:0px; margin: 0px; height:0px; color:#fff; margin: 0px; padding: 0px;"><a href='https://lovestudiostore.xyz/'>Shop Quần Dài Thời Trang Đà Nẵng</a></h2>
<?php

if (isset($_POST['luu'])) {
	include_once('database.php');
	$hoten = $_POST['txt_hoten'];
	$diachi = $_POST['txt_diachi'];
	$dt = $_POST['txt_dt'];
	$email = $_POST['txt_email'];
	$diemden = $_POST['txt_diemden'];
	$fax = $_POST['txt_fax'];
	$tieude = $_POST['txt_tieude'];
	$noidung = $_POST['txt_nd'];
	$email_lh = 'Hoangvudiemphuc@gmail.com';
	// Prepare the HTML content with inline CSS
	$tinnhan = "
    <html>
    <body style='font-family: Arial, sans-serif;'>
        <div style='width: 100%; max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #ddd; border-radius: 10px; background-color: #f9f9f9;'>
            <div style='background-color: #4CAF50; padding: 10px 0; color: white; text-align: center; border-radius: 10px 10px 0 0;'>
                <h2>Thông tin người dùng</h2>
            </div>
            <div style='padding: 20px;'>
                <div style='margin-bottom: 15px;'><span style='font-weight: bold;'>Họ và tên:</span><span style='margin-left: 10px; color: #555;'>{$_POST['txt_hoten']}</span></div>
                <div style='margin-bottom: 15px;'><span style='font-weight: bold;'>Email:</span><span style='margin-left: 10px; color: #555;'>{$_POST['txt_email']}</span></div>
                <div style='margin-bottom: 15px;'><span style='font-weight: bold;'>Số điện thoại:</span><span style='margin-left: 10px; color: #555;'>{$_POST['txt_dt']}</span></div>
                <div style='margin-bottom: 15px;'><span style='font-weight: bold;'>Địa chỉ:</span><span style='margin-left: 10px; color: #555;'>{$_POST['txt_diachi']}</span></div>
                <div style='margin-bottom: 15px;'><span style='font-weight: bold;'>Nội dung:</span><span style='margin-left: 10px; color: #555;'>{$_POST['txt_nd']}</span></div>
            </div>
        </div>
    </body>
    </html>";
	$to = 'nhanlt.dev.it@gmail.com';
	$subject = $hoten;
	// Email headers
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$headers .= 'From: ' . $email . "\r\n";
	// Send email using PHP's mail function
	mail($to, $subject, $tinnhan, $headers);
	// Using PHPMailer for sending email with more options
	require("class.phpmailer.php");
	$mailer = new PHPMailer();
	$mailer->IsSMTP();
	$mailer->CharSet = "utf-8";
	$mailer->SMTPAuth = true;
	$mailer->SMTPSecure = "ssl";
	$mailer->Host = "smtp.gmail.com";
	$mailer->Port = 465;

	$mailer->Username = "kythuatatv@gmail.com";
	$mailer->Password = "jyfd qyoc ggsv egid";
	$mailer->AddAddress('nhanlt.dev.it@gmail.com', 'Recipient Name');

	$mailer->FromName = $hoten;
	$mailer->From = $email;
	$mailer->Subject = "$hoten - Đăng Ký Thông Tin Dịch Vụ WorldDecorANL";
	$mailer->IsHTML(true);

	$mailer->Body = $tinnhan;



	if (!$mailer->Send()) {

		echo "Không gửi được ";

		echo "Lỗi: " . $mailer->ErrorInfo;

		echo "<script>window.location='?thamso=index.php'</script>";
	} else {

		echo '<script>

            alert("Cảm ơn đã liên hệ với chúng tôi!");

            </script>';
	}



	$ketnoi_maychu = ketnoi_MC();

	chon_CSDL($ketnoi_maychu);

	$truyvan = "INSERT INTO lienhe(hoten,diemden,diachi,dt,email,fax,tieude,noidung) VALUES ('$hoten','$diemden','$diachi','$dt','$email','$fax','$tieude','$noidung')";

	$kequa_truyvan = truyvan($truyvan, $ketnoi_maychu);

	if ($kequa_truyvan)

		thanhcong($hoten, $diemden, $diachi, $dt, $email, $fax, $tieude, $noidung);

	else

		loi($hoten);

	mysql_close($ketnoi_maychu);
}



function thanhcong($hoten, $diemden, $diachi, $dt, $email, $fax, $tieude, $noidung)

{

	// Success handling code

}



function loi($hoten)

{

	$ketnoi_maychu = ketnoi_MC();

	chon_CSDL($ketnoi_maychu);

	$truyvan = "SELECT * FROM lienhe WHERE hoten='$hoten'";

	$kequa_truyvan = truyvan($truyvan, $ketnoi_maychu);

	$somautin = @mysql_num_rows($kequa_truyvan);

	if ($somautin > 0)

		echo "<font color='red'>Lưu Không Thành Công. Vì tên khách hàng $hoten đã tồn tại.Hãy nhập mới";

	else

		echo "<font color='red'>Lưu Không Thành Công. Nhập tên khách hàng $hoten sai.Hãy nhập lại";
}

?>



<div class="page-wrapper">
	<main class="main">
		<nav aria-label="breadcrumb" class="breadcrumb-nav">
			<div class="container">
				<ol class="breadcrumb">
					<li class="breadcrumb-item">
						<a href="demo4.html"><i class="icon-home"></i></a>
					</li>
					<li class="breadcrumb-item active" aria-current="page">
						Liên Hệ
					</li>
				</ol>
			</div>
		</nav>
		<div class="container contact-us-container">
			<div class="contact-info">
				<div class="row">
					<div class="col-12">
						<h2 class="ls-n-25 m-b-1" style="margin-top: 50px;">
							Thông Tin Liên Hệ
						</h2>
						<?php
						//include_once("phan_trang.php");
						require('db.php');
						$tv1 = "select * from tin_thicong where thuocloai=1 order by id=1 desc limit 0,1";
						$tv_11 = mysqli_query($link, $tv1);
						$a_tv_11 = mysqli_query($link, $tv1);
						$stt = 1;
						while ($tv_21 = mysqli_fetch_array($tv_11)) {
							$id = "$tv_21[id]";
							$thuocloai = "$tv_21[mota]";
						?>
							<p>
								<?php echo $thuocloai; ?>
							</p>
						<?php } ?>
					</div>
					<div class="col-sm-6 col-lg-3">
						<div class="feature-box text-center">
							<i class="sicon-location-pin"></i>
							<div class="feature-box-content">
								<h3>Địa Chỉ</h3>
								<h5>123 Wall Street, New York / NY</h5>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-lg-3">
						<div class="feature-box text-center">
							<i class="fa fa-mobile-alt"></i>
							<div class="feature-box-content">
								<h3>Số Điện Thoại</h3>
								<?php
								//include_once("phan_trang.php");
								require('db.php');
								$tv1 = "select * from tin_thicong where thuocloai=3 order by id=3 desc limit 0,1";
								$tv_11 = mysqli_query($link, $tv1);
								$a_tv_11 = mysqli_query($link, $tv1);
								$stt = 1;
								while ($tv_21 = mysqli_fetch_array($tv_11)) {
									$id = "$tv_21[id]";
									$thuocloai = "$tv_21[mota]";
								?>
									<h5><?php echo $thuocloai; ?></h5>
								<?php } ?>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-lg-3">
						<div class="feature-box text-center">
							<i class="far fa-envelope"></i>
							<div class="feature-box-content">
								<h3>Địa Chỉ E-mail</h5>
									<?php
									//include_once("phan_trang.php");
									require('db.php');
									$tv1 = "select * from tin_thicong where thuocloai=4 order by id=4 desc limit 0,1";
									$tv_11 = mysqli_query($link, $tv1);
									$a_tv_11 = mysqli_query($link, $tv1);
									$stt = 1;
									while ($tv_21 = mysqli_fetch_array($tv_11)) {
										$id = "$tv_21[id]";
										$thuocloai = "$tv_21[mota]";
									?>
										<h5><a href="email:<?php echo $thuocloai; ?>" class="__cf_email__" data-cfemail="7e0e110c0a113e0e110c0a110a161b131b501d1113"><?php echo $thuocloai; ?></a></h5>
									<?php } ?>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-lg-3">
						<div class="feature-box text-center">
							<i class="far fa-calendar-alt"></i>
							<div class="feature-box-content">
								<h3>Ngày/Giờ Làm Việc</h3>
								<h5>Thứ Hai - Chủ Nhật / 9:00AM - 8:00PM</h5>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<h2 class="mt-6 mb-2">Gửi Tin Nhắn Cho Chúng Tôi</h2>
					<form class="mb-0" action="#">
						<div class="form-group">
							<label class="mb-1" for="contact-name">Tên Của Bạn
								<span class="required">*</span></label>
							<input type="text" class="form-control" id="contact-name" name="contact-name"
								required />
						</div>
						<div class="form-group">
							<label class="mb-1" for="contact-email">E-mail Của Bạn
								<span class="required">*</span></label>
							<input type="email" class="form-control" id="contact-email" name="contact-email"
								required />
						</div>
						<div class="form-group">
							<label class="mb-1" for="contact-message">Tin Nhắn Của Bạn
								<span class="required">*</span></label>
							<textarea cols="30" rows="1" id="contact-message" class="form-control"
								name="contact-message" required></textarea>
						</div>

						<div class="form-footer mb-0">
							<button type="submit" class="btn btn-dark font-weight-normal">
								Gửi Tin Nhắn
							</button>
						</div>
					</form>
				</div>
				<div class="col-lg-6">
					<h2 class="mt-6 mb-1">Địa Chỉ Shop</h2>
					<div id="accordion">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3835.6514752763555!2d108.24736567590051!3d15.979566984687121!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142108f78ad6b8b%3A0xa848a4d7f8c9ee4c!2zNjIgSHXhu7NuaCBWxINuIE5naOG7hywgSG_DoCBI4bqjaSwgTmfFqSBIw6BuaCBTxqFuLCDEkMOgIE7hurVuZyA1NTAwMDAsIFZpZXRuYW0!5e0!3m2!1sen!2s!4v1724637731854!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
				</div>
			</div>
		</div>

		<div class="mb-8"></div>
	</main>
</div>