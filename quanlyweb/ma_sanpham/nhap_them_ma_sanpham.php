<!DOCTYPE html
  PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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

      if (document.tt_mh.txt_gioithieu.value == "") {

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

</head>

<body>

  <table width="780" height="297" border="1" style="border-collapse:collapse">



    <tr>

      <td width="344" height="22">
        <div align="center"><strong>Thông Báo </strong></div>
      </td>

      <td width="420">
        <div align="center"><strong>Hướng Dẫn </strong></div>
      </td>

    </tr>

    <tr>

      <td height="99" valign="top">
        <?php
        if (isset($_POST['luu'])) {
          $today2 = date("D");
          $today = date("d");
          $today1 = date("m");
          $today3 = date("Y");
          $chuoi = " $today/$today1/$today3 ";
          require('db.php');
          $file_name = $_FILES['txt_hinhanh']['name'];
          $file_logo = $_FILES['txt_logo']['name'];
          $file_hinhab = $_FILES['txt_hinhab']['name'];
          $file_hinhabc = $_FILES['txt_hinhabc']['name'];
          $file_hinhabcd = $_FILES['txt_hinhabcd']['name'];
          $file_hinhqcab = $_FILES['txt_hinhqcab']['name'];
          $file_hinhqcabc = $_FILES['txt_hinhqcabc']['name'];
          $file_hinhndab = $_FILES['txt_hinhndab']['name'];
          $file_hinhndabc = $_FILES['txt_hinhndabc']['name'];
          $file_hinhndabcd = $_FILES['txt_hinhndabcd']['name'];
          $file_hinhspab = $_FILES['txt_hinhspab']['name'];
          $file_hinhspabc = $_FILES['txt_hinhspabc']['name'];
          $file_hinhspabcd = $_FILES['txt_hinhspabcd']['name'];
          $random_digit = rand(0000, 9999);
          $tentaptin = $random_digit . $file_name;
          $tenlogo = $random_digit . $file_logo;
          $tenhinhab = $random_digit . $file_hinhab;
          $tenhinhabc = $random_digit . $file_hinhabc;
          $tenhinhabcd = $random_digit . $file_hinhabcd;
          $tenhinhqcab = $random_digit . $file_hinhqcab;
          $tenhinhqcabc = $random_digit . $file_hinhqcabc;
          $tenhinhndab = $random_digit . $file_hinhndab;
          $tenhinhndabc = $random_digit . $file_hinhndabc;
          $tenhinhndabcd = $random_digit . $file_hinhndabcd;
          $tenhinhspab = $random_digit . $file_hinhspab;
          $tenhinhspabc = $random_digit . $file_hinhspabc;
          $tenhinhspabcd = $random_digit . $file_hinhspabcd;
          $noidung = str_replace("'", "", $_POST['txt_noidung']);
          $noidung_en = str_replace("'", "", $_POST['txt_noidung_en']);
          $tieude = str_replace("'", "", $_POST['tieude']);
          $tieude_en = str_replace("'", "", $_POST['tieude_en']);
          $masanpham = str_replace("'", "", $_POST['masanpham']);
          $trangthai_en = str_replace("'", "", $_POST['trangthai_en']);
          $trangthai = str_replace("'", "", $_POST['trangthai']);
          $gia = $_POST['gia'];
          $noidung_china = str_replace("'", "", $_POST['txt_noidung_china']);
          $tieude_china = str_replace("'", "", $_POST['tieude_china']);
          $mota_china = str_replace("'", "", $_POST['mota_china']);
          $trangthai_china = str_replace("'", "", $_POST['trangthai_china']);
          $noidung_han = str_replace("'", "", $_POST['txt_noidung_han']);
          $tieude_han = str_replace("'", "", $_POST['tieude_han']);
          $mota_han = str_replace("'", "", $_POST['mota_han']);
          $trangthai_han = str_replace("'", "", $_POST['trangthai_han']);
          $noidung_nhat = str_replace("'", "", $_POST['txt_noidung_nhat']);
          $tieude_nhat = str_replace("'", "", $_POST['tieude_nhat']);
          $mota_nhat = str_replace("'", "", $_POST['mota_nhat']);
          $trangthai_nhat = str_replace("'", "", $_POST['trangthai_nhat']);
          $noidung_phap = str_replace("'", "", $_POST['txt_noidung_phap']);
          $noidung_my = str_replace("'", "", $_POST['txt_noidung_my']);
          $noidung_anh = str_replace("'", "", $_POST['txt_noidung_anh']);
          $noidung_nga = str_replace("'", "", $_POST['txt_noidung_nga']);
          $thuocloai = $_POST['cap_do'];
          $danhmuc = $_POST['danhmuc'];
          $sao = $_POST['sao'];
          $mota = $_POST['mota'];
          $mota_en = $_POST['mota_en'];
          $trangchu = $_POST['trangchu'];
          $luotxem = $_POST['luotxem'];
          $linkurl = strtolower(khongdau(str_replace("'", "", $_POST['tieude'])));
          upload($thuocloai, $danhmuc, $tentaptin, $tieude, $mota, $gia, $mota_han, $mota_en, $masanpham, $tieude_han, $tieude_nhat, $tieude_china, $trangthai_nhat, $trangthai_china, $trangchu, $sao, $noidung, $linkurl);
        }
        function upload($thuocloai, $danhmuc, $tentaptin, $tieude, $mota, $gia, $mota_han, $mota_en, $masanpham, $tieude_han, $tieude_nhat, $tieude_china, $trangthai_nhat, $trangthai_china, $trangchu, $sao, $noidung, $linkurl)
        {
          require('db.php');
          //$ketnoi_maychu = ketnoi_MC();
          //chon_CSDL($ketnoi_maychu);
          $truyvan = "INSERT INTO ma_sanpham (thuocloai,danhmuc,hinhanh,tieude,mota,gia,mota_han,mota_en,masanpham,tieude_han,tieude_nhat,tieude_china,trangthai_nhat,trangthai_china,trangchu,star,noidung,linkurl) VALUES ('$thuocloai','$danhmuc','$tentaptin','$tieude','$mota','$gia','$mota_han','$mota_en','$masanpham','$tieude_han','$tieude_nhat','$tieude_china','$trangthai_nhat','$trangthai_china','$trangchu','$sao','$noidung','$linkurl')";
          $ketqua_truyvan = mysqli_query($link, $truyvan);
          if ($ketqua_truyvan) {
            dichuyen_taptin_vaothumuc($tentaptin);
            //dichuyen_logo_vaothumuc($tenlogo);
            //dichuyen_hinhab_vaothumuc($tenhinhab);
            //dichuyen_hinhabc_vaothumuc($tenhinhabc);
            //dichuyen_hinhabcd_vaothumuc($tenhinhabcd);
            //dichuyen_hinhqcab_vaothumuc($tenhinhqcab);
            //dichuyen_hinhqcabc_vaothumuc($tenhinhqcabc);
            //dichuyen_hinhndab_vaothumuc($tenhinhndab);
            //dichuyen_hinhndabc_vaothumuc($tenhinhndabc);
            //dichuyen_hinhndabcd_vaothumuc($tenhinhndabcd);
            //dichuyen_hinhspab_vaothumuc($tenhinhspab);
            //dichuyen_hinhspabc_vaothumuc($tenhinhspabc);
            //dichuyen_hinhspabcd_vaothumuc($tenhinhspabcd);
            echo "<script>window.location='quan_tri.php?p=danhsach_masanpham'</script>";
          } else {
            echo "Upload không thành công.Bạn thử lại xem";
          }
          //mysqli_close($ketnoi_maychu);
        }

        function dichuyen_taptin_vaothumuc($tentaptin)
        {
          $thumuctam_chuataptin = $_FILES['txt_hinhanh']['tmp_name'];
          if (move_uploaded_file($thumuctam_chuataptin, "../HinhCTSP/HinhSanPham/$tentaptin"))
            echo "Chúc mừng bạn Upload thành công";
          else {
            xoataptin($tentaptin);
            echo "Không thể copy tập tin  $tentaptin vào thư mục tài liệu";
          }
        }
        function dichuyen_logo_vaothumuc($tenlogo)
        {
          require('db.php');
          $thumuctam_chuataptin = $_FILES['txt_logo']['tmp_name'];
          if (move_uploaded_file($thumuctam_chuataptin, "../HinhCTSP/HinhSanPham/$tenlogo"))
            echo "Chúc mừng bạn Upload thành công";
          else {
            xoataptin($tenlogo);
            echo "Không thể copy tập tin  $tenlogo vào thư mục tài liệu";
          }
        }
        function xoataptin($tentaptin)
        {
          require('db.php');
          // Ensure $link is your valid connection variable
          global $link;
          // Sanitize the filename to prevent SQL injection
          $tentaptin = mysqli_real_escape_string($link, $tentaptin);
          // Prepare the DELETE statement
          $truyvan = "DELETE FROM ma_dichvu WHERE filename = '$tentaptin'";
          // Execute the DELETE query
          $ketqua_truyvan = mysqli_query($link, $truyvan);
          // Check for query execution success
          if ($ketqua_truyvan) {
            echo "File deleted successfully.";
          } else {
            echo "Error deleting file: " . mysqli_error($link);
          }
        }
        ?>
        <?php
        include('db.php');
        //$noi_dung=str_replace("\d","",$noi_dung);
        //echo $noi_dung;echo"<hr>";
        function hop_option()
        {
          include('db.php');
          $tv = "select * from loai_ma_sanpham ORDER BY id ASC";
          $tv_1 = mysqli_query($link, $tv);
          echo "<select name=\"cap_do\">";
          echo "<option value=\"\">--- Chọn loại HTPP---</option>";
          while ($tv_2 = mysqli_fetch_array($tv_1)) {
            echo "<option value=\"$tv_2[id]\" >";
            echo $tv_2['thuocloai'];
            echo "</option>";
          }
          echo "</select>";
        }
        function danhmuc_option()
        {
          include('db.php');
          $tv = "select * from danhmuc ORDER BY id ASC";
          $tv_1 = mysqli_query($link, $tv);
          echo "<select name=\"danhmuc\">";
          echo "<option value=\"\">--- Chọn loại HTPP---</option>";
          while ($tv_2 = mysqli_fetch_array($tv_1)) {
            echo "<option value=\"$tv_2[id]\" >";
            echo $tv_2['tieude'];
            echo "</option>";
          }
          echo "</select>";
        }
        ?>
      </td>
      <td valign="top">
        <p><br />
          <span class="style3">1. </span><em><strong>Hình đưa vào phải đúng kích cở (200x203)hoặc lớn hơn một ít cũng
              được, không được quá lớn sẽ làm lỗi hình tốt nhất nên thêm hình vào ở định dạng .jpg</strong></em><br />
          <br />
      </td>
    </tr>
    <tr>
      <td height="80" colspan="2" align="center" valign="top">
        <form action="" method="post" enctype="multipart/form-data" name="tt_mh" id="tt_mh"
          onsubmit="return checkInput();">
          <table width="100%" border="1" bordercolor="black" style="border-collapse:collapse; border-color:#FF0000">
            <tr>
              <td width="121">
                <div align="left"><strong>Chọn loại HTPP </strong></div>
              </td>
              <td width="476">
                <div align="left">
                  <?php hop_option(); ?>
                </div>
              </td>
            </tr>
            <tr>
              <td width="121">
                <div align="left"><strong>Chọn Danh mục </strong></div>
              </td>
              <td width="476">
                <div align="left">
                  <?php danhmuc_option(); ?>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div align="left"><strong>Hình ảnh</strong></br>900px x auto </div>
              </td>
              <td>
                <div align="left">
                  <label>
                    <input name="txt_hinhanh" type="file" id="txt_hinhanh" size="50" />
                  </label>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div align="left"><strong>Tên sản phẩm</strong> </div>
              </td>
              <td>
                <div align="left">
                  <label>
                    <input name="tieude" type="text" id="tieude" size="50" maxlength="70" />
                  </label>
                </div>
              </td>
            </tr>
            <tr>
            <tr>
              <td valign="top">
                <div align="left"><strong>Mô tả</strong> </div>
              </td>
              <td>
                <div align="left">
                  <label></label>
                  <textarea name="mota" id="textarea" cols="70" rows="5"></textarea>
                </div>
              </td>
            </tr>
            <!--  <tr>
           <td><div align="left"><strong> Mã sản phẩm</strong></div></td>
         <td><div align="left">
            <label>
             <input name="masanpham" type="text" id="tieude4" size="90"  maxlength="70"/>
             </label>
         </div></td>
       </tr>
     -->
            <tr>
              <td>
                <div align="left"><strong> Giá bán</strong></div>
              </td>
              <td>
                <div align="left">
                  <label>
                    <input name="gia" type="text" id="tieude" size="90" maxlength="70" />
                  </label>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div align="left"><strong> Giá gốc</strong></div>
              </td>
              <td>
                <div align="left">
                  <label>
                    <input name="mota_han" type="text" id="tieude" size="90" maxlength="70" />
                  </label>
                </div>
              </td>

            </tr>

            <tr>

              <td>
                <div align="left"><strong> Khuyến mãi</strong></div>
              </td>

              <td>
                <div align="left">

                  <label>

                    <input name="mota_en" type="text" id="tieude4" size="90" maxlength="70" />

                  </label>

                </div>
              </td>

            </tr>

            <tr>

              <td>
                <div align="left"><strong> Thương Hiệu</strong></div>
              </td>

              <td>
                <div align="left">

                  <label>

                    <input name="masanpham" type="text" id="tieude4" size="90" maxlength="70" />

                  </label>

                </div>
              </td>

            </tr>

            <tr>

              <td>
                <div align="left"><strong> Sale</strong></div>
              </td>

              <td>
                <div align="left">

                  <label>

                    <input name="tieude_han" type="text" id="tieude4" size="90" maxlength="70" />

                  </label>

                </div>
              </td>

            </tr>

            <tr>

              <td>
                <div align="left"><strong> Hot</strong></div>
              </td>

              <td>
                <div align="left">

                  <label>

                    <input name="tieude_nhat" type="text" id="tieude4" size="90" maxlength="70" />

                  </label>

                </div>
              </td>

            </tr>
            <tr>

              <td>
                <div align="left"><strong> New </strong></div>
              </td>

              <td>
                <div align="left">

                  <label>

                    <input name="tieude_china" type="text" id="tieude4" size="90" maxlength="70" />

                  </label>

                </div>
              </td>

            </tr>
            <tr>

              <td>
                <div align="left"><strong> Từ khóa 1 </strong></div>
              </td>

              <td>
                <div align="left">

                  <label>

                    <input name="trangthai_nhat" type="text" id="tieude4" size="90" maxlength="70" />

                  </label>

                </div>
              </td>

            </tr>

            <tr>

              <td>
                <div align="left"><strong> Từ khóa 2 </strong></div>
              </td>

              <td>
                <div align="left">

                  <label>

                    <input name="trangthai_china" type="text" id="tieude4" size="90" maxlength="70" />

                  </label>

                </div>
              </td>

            </tr>

            <tr>

              <td>

                <div align="left"><strong>Trang chủ</strong></div>
              </td>

              <td align="left"><label>

                  <select name="trangchu" id="select3">
                    <option value="1">Có </option>
                    <option value="2">Không</option>
                  </select>
                </label></td>
            </tr>
            <tr>
              <td>
                <div align="left"><strong>Sao</strong></div>
              </td>
              <td align="left"><label>
                  <select name="sao" id="select3">
                    <option value="1"> 1 Sao</option>
                    <option value="2"> 2 Sao</option>
                    <option value="3"> 3 Sao</option>
                    <option value="4"> 4 Sao</option>
                    <option value="5"> 5 Sao</option>
                  </select>

                </label></td>

            </tr>

            <tr>
              <td height="auto" valign="top">
                <div align="left"><strong>Nội dung chi tiết</strong></div>
              </td>
              <td>
                <div align="left">
                  <textarea name="txt_noidung" id="content_vi"><?php echo htmlspecialchars($noidung); ?></textarea>
                </div>
              </td>
            </tr>

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