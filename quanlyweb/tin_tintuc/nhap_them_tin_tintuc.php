<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Nhập Thêm Danh Mục Sản Phẩm</title>
  <script type="text/javascript" src="fckeditor/fckeditor.js"></script>
  <style type="text/css">
    <!--
    body,
    td,
    th {
      /*font-family: Verdana, Arial, Helvetica, sans-serif;
	background-color:#FFFFFF;*/
    }

    .style3 {
      color: #FF0000;
      font-weight: bold;
    }

    .doichu {
      color: #0000FF;
      text-decoration: none;
    }

    A:hover {
      color: #00FF66
    }
    -->
  </style>

  <script type="text/javascript">
    function checkInput() {
      var isOk = true;
      // if(document.tt_mh.txt_masp.value=="")
      //{
      //  alert("Hãy nhập mã sản phẩm");
      // isOk = false;
      // }
      if (document.tt_mh.txt_sanpham.value == "") {
        alert("Hãy nhập tên sản phẩm");
        isOk = false;
      }
      if (document.tt_mh.txt_hinhanh.value == "") {
        alert("Hãy nhập thông tin hình ảnh sản phẩm");
        isOk = false;
      }

      return isOk;
    }
  </script>

  <script type="text/javascript">
    function chuyen_avc(value) {
      //alert("chao");
      var link = "?p=12&macdinh=" + value;
      window.location = link;
    }
  </script>
</head>

<body>
  <table width="780" height="297" border="1" style="border-collapse:collapse">

    <tr>
      <td width="400" height="22">
        <div align="center"><strong>Thông Báo </strong></div>
      </td>
      <td width="469">
        <div align="center"><strong>Hướng Dẫn </strong></div>
      </td>
    </tr>
    <tr>
      <td height="99" valign="top">


        <?php


        /*$today2 = date("y") ;*/

        if (isset($_POST['luu'])) {
          $today2 = date("D");
          $today = date("d");
          $today1 = date("m");
          $today3 = date("Y");
          /*if($today2=='Mon')
		$thu='Thứ 2';
	if($today2=='Tue')
		$thu='Thứ 3';
	if($today2=='Wed')
		$thu='Thứ 4';
	if($today2=='Thu')
		$thu='Thứ 5';
	if($today2=='Fri')
		$thu='Thứ 6';
	if($today2=='Sat')
		$thu='Thứ 7';
	if($today2=='Sun')
		$thu='Chủ Nhật';*/
          $chuoi = " $today/$today1/$today3 ";
          require('database.php');
          require('db.php');
          $file_name = $_FILES['txt_hinhanh']['name'];
          $file_hinhqcab = $_FILES['txt_hinhqcab']['name'];
          $file_hinhqcabc = $_FILES['txt_hinhqcabc']['name'];
          $file_hinhndab = $_FILES['txt_hinhndab']['name'];
          $file_hinhndabc = $_FILES['txt_hinhndabc']['name'];
          $file_hinhndabcd = $_FILES['txt_hinhndabcd']['name'];
          $random_digit = rand(0000, 9999);
          //$tentaptin = $random_digit . $file_name;
          //$tenhinhqcab = $random_digit . $file_hinhqcab;
          $tentaptin = $_FILES['txt_hinhanh']['name'];
          $tenhinhqcab = $_FILES['txt_hinhqcab']['name'];
          $tenhinhqcabc = $random_digit . $file_hinhqcabc;
          $tenhinhndab = $random_digit . $file_hinhndab;
          $tenhinhndabc = $random_digit . $file_hinhndabc;
          $tenhinhndabcd = $random_digit . $file_hinhndabcd;
          $noidung = str_replace("'", "", $_POST['txt_noidung']);
          $tieude = str_replace("'", "", $_POST['tieude']);
          $mota = str_replace("'", "", $_POST['mota']);
          $trangchu = $_POST['trangchu'];
          $thuocloai = $_POST['cap_do'];
          $noidung_en = str_replace("'", "", $_POST['txt_noidung_en']);
          $tieude_en = str_replace("'", "", $_POST['tieude_en']);
          $mota_en = str_replace("'", "", $_POST['mota_en']);
          $title = str_replace("'", "", $_POST['title']);
          $tukhoa = str_replace("'", "", $_POST['tukhoa']);
          $facebook = str_replace("'", "", $_POST['facebook']);
          $linkurl = strtolower(khongdau(str_replace("'", "", $_POST['tieude_en'])));
          $xem = str_replace("'", "", $_POST['xem']);
          $nguon = str_replace("'", "", $_POST['nguon']);

          upload($noidung, $tentaptin, $tenhinhqcab, $tenhinhqcabc, $tenhinhndab, $tenhinhndabc, $tenhinhndabcd, $tieude, $mota, $chuoi, $trangchu, $thuocloai, $noidung_en, $tieude_en, $mota_en, $title, $tukhoa, $facebook, $linkurl, $ngay, $xem, $nguon);
        }

        function upload($noidung, $tentaptin, $tenhinhqcab, $tenhinhqcabc, $tenhinhndab, $tenhinhndabc, $tenhinhndabcd, $tieude, $mota, $chuoi, $trangchu, $thuocloai, $noidung_en, $tieude_en, $mota_en, $title, $tukhoa, $facebook, $linkurl, $ngay, $xem, $nguon)
        {
          //$ketnoi_maychu = ketnoi_MC();
          //chon_CSDL($ketnoi_maychu);
          include("db.php");
          $truyvan = "INSERT INTO tin_tintuc (`id` ,`hinhanh`, `hinhqcab`, `hinhqcabc`, `hinhndab`, `hinhndabc`, `hinhndabcd`, `noidung` ,`mota` , `ngay`,`tieude`, `trangchu`, `thuocloai`,`noidung_en`, `tieude_en`, `mota_en`, `title`, `tukhoa`, `facebook`, `linkurl`, `xem`, `nguon` ) VALUES (NULL, '$tentaptin', '$tenhinhqcab', '$tenhinhqcabc', '$tenhinhndab', '$tenhinhndabc', '$tenhinhndabcd', '$noidung', '$mota', '$chuoi', '$tieude', '$trangchu', '$thuocloai', '$noidung_en', '$tieude_en', '$mota_en', '$title', '$tukhoa', '$facebook', '$linkurl', '$xem', '$nguon')";

          //$ketqua_truyvan = truyvan($truyvan, $ketnoi_maychu);
          $ketqua_truyvan = mysqli_query($link, $truyvan);
          if ($ketqua_truyvan) {
            if ($tentaptin != '') {
              dichuyen_taptin_vaothumuc($tentaptin);
            }
            if ($tenhinhqcab != '') {
              dichuyen_hinhqcab_vaothumuc($tenhinhqcab);
            }
            //dichuyen_hinhqcabc_vaothumuc($tenhinhqcabc);
            //dichuyen_hinhndab_vaothumuc($tenhinhndab);
            //dichuyen_hinhndabc_vaothumuc($tenhinhndabc);
            //dichuyen_hinhndabcd_vaothumuc($tenhinhndabcd);
            echo "Upload thành công";
          } else {
            echo "Upload không thành công.Bạn thử lại xem";
          }
          //mysqli_close($ketnoi_maychu);
        }

        function dichuyen_taptin_vaothumuc($tentaptin)
        {
          $thumuctam_chuataptin = $_FILES['txt_hinhanh']['tmp_name'];
          if (move_uploaded_file($thumuctam_chuataptin, "../HinhCTSP/HinhTinTuc/$tentaptin"))
            echo "Chúc mừng bạn Upload thành công";
          else {
            xoataptin($tentaptin);
            echo "Không thể copy tập tin  $tentaptin vào thư mục tài liệu";
          }
        }

        function dichuyen_hinhqcab_vaothumuc($tenhinhqcab)
        {
          $thumuctam_chuataptin = $_FILES['txt_hinhqcab']['tmp_name'];
          if (move_uploaded_file($thumuctam_chuataptin, "../HinhCTSP/HinhTinTuc/$tenhinhqcab"))
            echo "Chúc mừng bạn Upload thành công";
          else {
            xoataptin($tenhinhqcab);
            echo "Không thể copy tập tin  $tenhinhqcab vào thư mục tài liệu";
          }
        }

        function dichuyen_hinhqcabc_vaothumuc($tenhinhqcabc)
        {
          $thumuctam_chuataptin = $_FILES['txt_hinhqcabc']['tmp_name'];
          if (move_uploaded_file($thumuctam_chuataptin, "../HinhCTSP/HinhTinTuc/$tenhinhqcabc"))
            echo "Chúc mừng bạn Upload thành công";
          else {
            xoataptin($tenhinhqcabc);
            echo "Không thể copy tập tin  $tenhinhqcabc vào thư mục tài liệu";
          }
        }

        function dichuyen_hinhndab_vaothumuc($tenhinhndab)
        {
          $thumuctam_chuataptin = $_FILES['txt_hinhndab']['tmp_name'];
          if (move_uploaded_file($thumuctam_chuataptin, "../HinhCTSP/HinhTinTuc/$tenhinhndab"))
            echo "Chúc mừng bạn Upload thành công";
          else {
            xoataptin($tenhinhndab);
            echo "Không thể copy tập tin  $tenhinhndab vào thư mục tài liệu";
          }
        }

        function dichuyen_hinhndabc_vaothumuc($tenhinhndabc)
        {
          $thumuctam_chuataptin = $_FILES['txt_hinhndabc']['tmp_name'];
          if (move_uploaded_file($thumuctam_chuataptin, "../HinhCTSP/HinhTinTuc/$tenhinhndabc"))
            echo "Chúc mừng bạn Upload thành công";
          else {
            xoataptin($tenhinhndabc);
            echo "Không thể copy tập tin  $tenhinhndabc vào thư mục tài liệu";
          }
        }

        function dichuyen_hinhndabcd_vaothumuc($tenhinhndabcd)
        {
          $thumuctam_chuataptin = $_FILES['txt_hinhndabcd']['tmp_name'];
          if (move_uploaded_file($thumuctam_chuataptin, "../HinhCTSP/HinhTinTuc/$tenhinhndabcd"))
            echo "Chúc mừng bạn Upload thành công";
          else {
            xoataptin($tenhinhndabcd);
            echo "Không thể copy tập tin  $tenhinhndabcd vào thư mục tài liệu";
          }
        }
        function xoataptin($tentaptin)
        {
          //$ketnoi_maychu = ketnoi_MC();
          //chon_CSDL($ketnoi_maychu);
          $masotaptin = mysqli_insert_id();
          $truyvan = "DELETE FROM maykhoanda WHERE id = $masotaptin ";
          //$ketqua_truyvan = truyvan($truyvan, $ketnoi_maychu);
          $ketqua_truyvan = mysqli_query($link, $truyvan);
        }
        ?>
        <?php

        include('db.php');


        //$noi_dung=str_replace("\d","",$noi_dung);
        //echo $noi_dung;echo"<hr>";

        function hop_option()
        {
          include('db.php');
          $tv = "select * from loai_tin_tintuc ORDER BY id ASC";
          $tv_1 = mysqli_query($link, $tv);
          echo "<select name=\"cap_do\">";
          echo "<option value=\"\">--- Chọn loại tin tức---</option>";
          while ($tv_2 = mysqli_fetch_array($tv_1)) {
            echo "<option value=" . $tv_2['id'] . ">";
            echo $tv_2['thuocloai'];
            echo "</option>";
          }
          echo "</select>";
        }
        ?>

      </td>
      <td valign="top">
        <p><br />

          <span class="style3">1. </span><em><strong>Hình đưa vào phải đúng kích cở (200x203)hoặc lớn hơn một ít cũng được, không được quá lớn sẽ làm lỗi hình tốt nhất nên thêm hình vào ở định dạng .jpg</strong></em><br />
          <br />
      </td>
    </tr>
    <tr>
      <td height="80" colspan="2" align="center" valign="top">
        <form action="" method="post" enctype="multipart/form-data" name="tt_mh" id="tt_mh" onsubmit="return checkInput();">
          <table width="100%" border="1" bordercolor="black" style="border-collapse:collapse; border-color:#FF0000">
            <tr>
              <td width="121">
                <div align="left"><strong>Chọn loại tin tức </strong></div>
              </td>
              <td width="476">
                <div align="left">
                  <?php hop_option(); ?>
                </div>
              </td>
            </tr>
            <tr>
            <tr>
              <td width="142" align="left" valign="top">
                <div align="left"><strong>Hình ảnh</strong><br /> KT 800 X 500 PX </div>
              </td>
              <td width="610">
                <div align="left">
                  <label>
                    <input name="txt_hinhanh" type="file" id="txt_hinhanh" size="70" />
                  </label>
                </div>
              </td>
            </tr>



            <tr>
              <td>
                <div align="left"><strong>Tiêu đề</strong> </div>
              </td>
              <td>
                <div align="left">
                  <label>
                    <input name="tieude_en" type="text" id="tieude_en" size="90" maxlength="70" />
                  </label>
                </div>
              </td>
            </tr>

            <tr>
              <td valign="top">
                <div align="left"><strong>Mô tả Ngắn</strong> </div>
              </td>
              <td>
                <div align="left">
                  <label></label>

                  <textarea name="mota" id="textarea" cols="70" rows="5" maxlength="260"></textarea>
                </div>
              </td>
            </tr>



            <tr>
              <td>
                <div align="left"><strong>Từ khóa 1 </strong> </div>
              </td>
              <td>
                <div align="left">

                  <label>
                    <input name="tieude" type="text" id="tieude" size="90" maxlength="160" />
                  </label>
                </div>
              </td>
            </tr>


            <tr>
              <td>
                <div align="left"><strong>Từ khóa 2 </strong> </div>
              </td>
              <td>
                <div align="left">

                  <label>
                    <input name="tukhoa" type="text" id="tukhoa" size="90" maxlength="160" />
                  </label>
                </div>
              </td>
            </tr>

            <tr>
              <td>
                <div align="left"><strong>Hình ảnh 01</strong>
                  <font style='color:#063;'>900px x auto </font>
                </div>
              </td>
              <td>
                <div align="left">
                  <label>
                    <input name="txt_hinhndab" type="file" id="txt_hinhndab" size="50" />
                  </label>
                </div>
              </td>
            </tr>



            <tr>
              <td height="auto" valign="top">
                <div align="left"><strong>Nội dung chi tiết</strong></div>
              </td>
              <td>
                <div align="left">
                  <textarea name="txt_noidung" id="content_vi"><?php echo $noidung; ?></textarea>
                </div>
              </td>
            </tr>

            <!-- <tr>
          <td><div align="left"><strong>Hình NDung 02</strong> <font style='color:#063;'>900px x auto </font></div></td>
          <td><div align="left">
            <label>
            <input name="txt_hinhndabc" type="file" id="txt_hinhndabc" size="50" />
            </label>
          </div></td>
        </tr>

            <tr>
          <td><div align="left"><strong>Mô tả hình02</strong> </div></td>
          <td><div align="left">
              <label>
              <input name="mota_en" type="text" id="mota_en" size="90"  maxlength="70"/>
              </label>
          </div></td>
        </tr>

         	 <tr>
          <td><div align="left"><strong>Hình NDung 03</strong> <font style='color:#063;'>900px x auto </font></div></td>
          <td><div align="left">
            <label>
            <input name="txt_hinhndabcd" type="file" id="txt_hinhndabcd" size="50" />
            </label>
          </div></td>
        </tr>
           <tr>
          <td><div align="left"><strong>Mô tả hình03</strong> </div></td>
          <td><div align="left">
              <label>
              <input name="tukhoa" type="text" id="tukhoa" size="90"  maxlength="70"/>
              </label>
          </div></td>
        </tr>

       <tr>
          <td height="40" valign="top"><div align="left"><strong>Nội dung tổng hợp</strong></div>          </td>
          <td><div align="left">
              <script type="text/javascript">
										var oFCKeditor = new FCKeditor('txt_noidung_en');
										oFCKeditor.BasePath = "fckeditor/";
										oFCKeditor.Width	= 700 ;
										oFCKeditor.Height	= 300 ;
										oFCKeditor.Value=="";
										oFCKeditor.Config["EnterMode"]		= "br" ;
										oFCKeditor.Create();
										document.getElementById('xEnter').value = "br" ;
										//document.getElementById("noidung").value=jljl;
									</script>
          </div></td>
        </tr>
        -->
            <tr>
              <td>
                <div align="right"></div>
              </td>
              <td>
                <div align="left">
                  <input name="luu" type="submit" id="luu" value="Lưu Lại" />
                </div>
              </td>
            </tr>
          </table>
        </form>
      </td>
    </tr>
  </table>
</body>
<script type="text/javascript">
  var editor = CKEDITOR.replace('content_vi', {
    uiColor: '#e7e7e7',
    language: 'en',
    skin: 'moono',
    width: 'auto',
    height: 350,
    filebrowserImageBrowseUrl: 'ckfinder/ckfinder.html?Type=Images',
    filebrowserFlashBrowseUrl: 'ckfinder/ckfinder.html?Type=Flash',
    filebrowserImageUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
    filebrowserFlashUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
  });
</script>

</html>