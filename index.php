<?php
session_start();
ini_set('display_errors', '0');
date_default_timezone_set('Asia/Saigon');
include("db.php");
include("ham/ham.php");
include("ham/catchuoi.php");
include("ngon_ngu/chon.php");
include("title_meta/title_meta.php");
?>
<!DOCTYPE html>
<html lang="en">
<base href="http://localhost:8080/shoeshop/">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo $title_meta; ?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link href="hinhmenu/icon/icon-lovestudio.png" rel="shortcut icon" />
	<link rel="canonical" href="https://lovestudiostore.xyz/" />
	<meta name="twitter:card" content="https://lovestudiostore.xyz/<?php echo $_SERVER['REQUEST_URI']; ?>" />
	<meta name="keywords" content="<?php echo $key; ?>" />
	<meta name="description" content="<?php echo $dis; ?>" />
	<meta property="og:url" content="https://lovestudiostore.xyz/<?php echo $_SERVER['REQUEST_URI']; ?>" />
	<meta property="og:type" content="website" />
	<meta property="og:image:alt" content="https://lovestudiostore.xyz/<?php echo $product['tieude']; ?>" />
	<meta property="og:title" content="https://lovestudiostore.xyz/<?php echo $product['tieude']; ?>" />
	<meta property="og:description" content="https://lovestudiostore.xyz/<?php echo $product['mota']; ?>" />
	<meta property="og:image" content="<?php echo $img; ?>" />
	<meta property="og:updated_time" content="1578214368" />
	<meta property="og:image" content="https://lovestudiostore.xyz/hinhmenu/logo/logo.png" />
	<meta property="og:description" content="<?php echo $dis; ?>" />


	<link rel="icon" type="image/x-icon" href="assets/images/icons/favicon.png">


	<script>
		WebFontConfig = {
			google: {
				families: ['Open+Sans:300,400,600,700,800', 'Poppins:300,400,500,600,700']
			}
		};
		(function(d) {
			var wf = d.createElement('script'),
				s = d.scripts[0];
			wf.src = 'assets/js/webfont.js';
			wf.async = true;
			s.parentNode.insertBefore(wf, s);
		})(document);
	</script>

	<!-- Plugins CSS File -->
	<link rel="stylesheet" href="siteshoeshop/assets/css/bootstrap.min.css">

	<!-- Main CSS File -->
	<link rel="stylesheet" href="siteshoeshop/assets/css/demo32.min.css">
	<link rel="stylesheet" type="text/css" href="siteshoeshop/assets/vendor/fontawesome-free/css/all.min.css">

	<script type="application/ld+json">
		{
			"@context": "http://schema.org",
			"@type": "WebSite",
			"name": "shop love studio",
			"url": "https://lovestudiostore.xyz"
		}
	</script>
</head>

<body>
	<div class="loading-overlay">
		<div class="bounce-loader">
			<div class="bounce1"></div>
			<div class="bounce2"></div>
			<div class="bounce3"></div>
		</div>
	</div>
	<div class="mobile-menu-overlay"></div>
	<div class="mobile-menu-container">
		<div class="mobile-menu-wrapper">
			<span class="mobile-menu-close"><i class="fa fa-times"></i></span>
			<nav class="mobile-nav">
				<ul class="mobile-menu">
					<li><a href="demo32.html">Trang Chủ</a></li>
					<li>
						<a href="gioithieu/tong-quan-thong-tin-website">Giới Thiệu</a>
					</li>
					<li>
						<a href="danhmuc/" class="sf-with-ul">Sản Phẩm</a>
						<div class="megamenu megamenu-fixed-width">
							<div class="row">
								<div class="col-lg-6">
									<ul class="submenu">
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
					</li>
					<li>
						<a href="tintuc/">Tin Tức - Sự Kiện</a>
					</li>
					<li>
						<a href="lien-he">Liên Hệ</a>
					</li>
					<ul class="mobile-menu">
						<li><a href="#">Tài Khoản</a></li>
						<li><a href="#">Yêu Thích</a></li>
						<li><a href="#">Giỏ Hàng</a></li>
						<li><a href="#" class="login-link">Đăng Nhập</a></li>
					</ul>
			</nav>
			<form class="search-wrapper mb-2" action="#">
				<input type="text" class="form-control mb-0" placeholder="Search..." required />
				<button class="btn icon-search text-white bg-transparent p-0" type="submit"></button>
			</form>
			<div class="social-icons">
				<a href="#" class="social-icon social-facebook icon-facebook" target="_blank">
				</a>
				<a href="#" class="social-icon social-twitter icon-twitter" target="_blank">
				</a>
				<a href="#" class="social-icon social-instagram icon-instagram" target="_blank">
				</a>
			</div>
		</div>
	</div>
	<div class="newsletter-popup mfp-hide bg-img" id="newsletter-popup-form" style="background: #f1f1f1 no-repeat center/cover url(hinhmenu/banner/hype-popup.jpg)">
		<div class="newsletter-popup-content">
			<img src="hinhmenu/logo/logo_hype.png" alt="Logo" class="logo-newsletter" width="111" height="44">
			<h2>Đăng ký nhận tin</h2>
			<p>
				Đăng ký danh sách gửi thư của Hype Store để nhận thông tin về các sản phẩm mới, ưu đãi đặc biệt và các chương trình khuyến mãi.
			</p>
			<form action="#">
				<div class="input-group">
					<input type="email" class="form-control" id="newsletter-email" name="newsletter-email" placeholder="Địa chỉ email của bạn" required />
					<input type="submit" class="btn btn-primary" value="Gửi" />
				</div>
			</form>
			<div class="newsletter-subscribe">
				<div class="custom-control custom-checkbox">
					<input type="checkbox" class="custom-control-input" value="0" id="show-again" />
					<label for="show-again" class="custom-control-label">
						Không hiển thị lại popup này
					</label>
				</div>
			</div>
		</div>
		<!-- End .newsletter-popup-content -->

		<button title="Đóng (Esc)" type="button" class="mfp-close">
			×
		</button>
	</div>

	<!-- End .newsletter-popup -->

	<div class="sticky-navbar">
		<div class="sticky-info">
			<a href="trang-chu">
				<i class="icon-home"></i>Trang chủ
			</a>
		</div>
		<div class="sticky-info">
			<a href="danhmuc" class="">
				<i class="icon-bars"></i>Sản Phẩm
			</a>
		</div>
		<div class="sticky-info">
			<a href="tintuc/" class="">
				<i class="icon-business-book"></i>Tin Tức
			</a>
		</div>
		<div class="sticky-info">
			<a href="lien-he" class="">
				<i class="icon-phone-1"></i>Liên Hệ
			</a>
		</div>
		<div class="sticky-info">
			<a href="#" class="">
				<i class="icon-user-2"></i>Tài Khoản
			</a>
		</div>

	</div>
	<?php
	include("xu_ly_post_get/xu_ly_post_get.php");
	?>

	<?php
	include('menutopdidong/menutopdidong.php');
	?>

	<?php
	include('side/side.php');
	?>

	<?php
	include('bienluan_phanthan.php');
	?>


	<?php
	include('jqueryfooter/footertc.php');

	?>


</body>
<a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>

<!-- Plugins JS File -->
<script src="siteshoeshop/assets/js/jquery.min.js"></script>
<script src="siteshoeshop/assets/js/bootstrap.bundle.min.js"></script>
<script src="siteshoeshop/assets/js/plugins.min.js"></script>
<script src="siteshoeshop/assets/js/optional/imagesloaded.pkgd.min.js"></script>
<script src="siteshoeshop/assets/js/optional/isotope.pkgd.min.js"></script>
<script src="siteshoeshop/assets/js/jquery.appear.min.js"></script>

<!-- Main JS File -->
<script src="siteshoeshop/assets/js/main.min.js"></script>

</html>