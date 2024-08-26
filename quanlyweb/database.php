<?php

function ketnoi_MC()

{

  $loi = "Không thể kết nối với máy chủ" . mysqli_error();

  $ketnoi_maychu = @mysqli_connect('localhost', 'root', '', 'shoeshop');





  if (!$ketnoi_maychu) {

    echo $loi;
  }

  return $ketnoi_maychu;
}



function chon_CSDL($ketnoi_MC)

{

  $CSDL = mysqli_select_db($ketnoi_MC, 'shoeshop');

  return $CSDL;
}



function truyvan($ketnoi_MC, $SQL)

{

  $cautruyvan = $SQL;

  $ketqua = mysqli_query($ketnoi_MC, $cautruyvan);

  return $ketqua;
}
