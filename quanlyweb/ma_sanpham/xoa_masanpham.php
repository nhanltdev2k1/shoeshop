<?php
	$result=mysqli_query($link,"SELECT * FROM ma_sanpham WHERE id = '$_GET[id]' ");
   $row_dulieu_sua		=	mysqli_fetch_array($result);
    $hinhanh	=	$row_dulieu_sua['hinhanh'];
	$taptin="../Hinh CTSP/$hinhanh";
	unlink($taptin);
	
    $logo	=	$row_dulieu_sua['logo'];
	$taptinlogo="../Hinh CTSP/$logo";
	unlink($taptinlogo);
    
	$hinhab	=	$row_dulieu_sua['hinhab'];
	$taptinhinhab="../Hinh CTSP/$hinhab";
	unlink($taptinhinhab);
    
    	$hinhabc	=	$row_dulieu_sua['hinhabc'];
	$taptinhinhabc="../Hinh CTSP/$hinhabc";
	unlink($taptinhinhabc);
    
    	$hinhabcd	=	$row_dulieu_sua['hinhabcd'];
	$taptinhinhabcd="../Hinh CTSP/$hinhabcd";
	unlink($taptinhinhabcd);
    
    $hinhqcab	=	$row_dulieu_sua['hinhqcab'];
	$taptinhinhqcab="../Hinh CTSP/$hinhqcab";
	unlink($taptinhinhqcab);
    
    $hinhqcabc	=	$row_dulieu_sua['hinhqcabc'];
	$taptinhinhqcabc="../Hinh CTSP/$hinhqcabc";
	unlink($taptinhinhqcabc);
    
    $hinhndab	=	$row_dulieu_sua['hinhndab'];
	$taptinhinhndab="../Hinh CTSP/$hinhndab";
	unlink($taptinhinhndab);
    
    $hinhndabc	=	$row_dulieu_sua['hinhndabc'];
	$taptinhinhndabc="../Hinh CTSP/$hinhndabc";
	unlink($taptinhinhndabc);
    
    $hinhndabcd	=	$row_dulieu_sua['hinhndabcd'];
	$taptinhinhndabcd="../Hinh CTSP/$hinhndabcd";
	unlink($taptinhinhndabcd);
    
       $hinhspab	=	$row_dulieu_sua['hinhspab'];
	$taptinhinhspab="../Hinh CTSP/$hinhspab";
	unlink($taptinhinhspab);
    
          $hinhspabc	=	$row_dulieu_sua['hinhspabc'];
	$taptinhinhspabc="../Hinh CTSP/$hinhspabc";
	unlink($taptinhinhspabc);
	
	$chuoi="DELETE FROM ma_sanpham WHERE id = '$_GET[id]' ";
	mysqli_query($link,$chuoi);
		 echo "<form name='frm_dangnhap'>
			        <input type'hidden' name='chuyentrang' value='quan_tri.php?p=danhsach_masanpham'>
					</form>";
?>
<script type="text/javascript">
if(document.frm_dangnhap)
 {
   var trangcanchuyen = document.frm_dangnhap.chuyentrang.value;
   window.location = trangcanchuyen;
 }
</script>