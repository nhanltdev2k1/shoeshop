<?php

	chong_pha_hoai();

?>

<?php

	//$xacdinh_dangnhap="khong";

	$kd=$_SESSION[$ten_danh_dau."ky_danh__quan_tri"];

	$mk=$_SESSION[$ten_danh_dau."mat_khau__quan_tri"];

	$tv="select count(*) from thongtin_quantri where ky_danh='$kd' and mat_khau='$mk'";

	$tv_1=mysqli_query($link,$tv);

	$tv_2=mysqli_fetch_row($tv_1);

	if($tv_2[0]!=0)

	{

		$xacdinh_dangnhap="co";

	}

	else

	{

		$xacdinh_dangnhap="khong";

	}

?>