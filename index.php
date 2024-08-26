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