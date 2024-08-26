<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="author" content="Ngữ Á Châu">
  <meta name="robots" content="index, follow">
  <meta name="distribution" content="global">
  <meta name="search-engines" content="www.google.com, www.google.co.uk, www.altaVista.com, www.aol.com, www.infoseek.com, www.excite.com, www.hotbot.com, www.lycos.com, www.magellan.com, www.cnet.com, www.voila.com, www.google.fr, www.yahoo.fr, www.yahoo.com, www.alltheweb.com, www.msn.com, www.netscape.com, www.nomade.com">
  <title>Thanh Huong</title>
  <link rel="shortcut icon" href="Hinh/copy.ico">
  <style>
    body,
    td,
    th {
      font-family: Verdana, Arial, Helvetica, sans-serif;
    }

    .style3 {
      color: #FF0000;
      font-weight: bold;
    }

    .doichu {
      color: #0000FF;
      text-decoration: none;
    }

    a:hover {
      color: #00FF66;
    }
  </style>
  <script src="tinymce/jscripts/tiny_mce/tiny_mce.js"></script>
  <script src="tinymce/text.js"></script>
  <script src="https://cdn.ckeditor.com/ckeditor4/4.19.1/standard/ckeditor.js"></script>
  <script>
    function checkInput() {
      var isOk = true;
      if (document.tt_mh.txt_tensp.value == "") {
        alert("Hãy nhập tên sản phẩm");
        isOk = false;
      }
      if (document.tt_mh.txt_hinhanh.value == "") {
        alert("Hãy nhập thông tin hình ảnh sản phẩm");
        isOk = false;
      }
      if (document.tt_mh.txt_giaban.value == "") {
        alert("Hãy nhập giá bán của sản phẩm");
        isOk = false;
      }
      return isOk;
    }
  </script>
</head>

<body>
  <table width="780" height="360" border="1" bordercolor="#0000FF" style="border-collapse:collapse">
    <tr>
      <td width="478" height="22">
        <div align="center"><strong>Thông Báo </strong></div>
      </td>
      <td width="486">
        <div align="center"><strong>Hướng Dẫn </strong></div>
      </td>
    </tr>
    <tr>
      <td height="112" valign="top">
        <?php
        if (isset($_POST['luu'])) {
          $today2 = date("D");
          $today = date("d");
          $today1 = date("m");
          $today3 = date("Y");
          $chuoi = " $today/$today1/$today3 ";
          //include_once('database.php');
          include_once('db.php');
          $id = $_REQUEST["id"];
          $thuocloai = $_REQUEST["thuocloai"];
          $tentaptin =  $_FILES['txt_hinhanh']['name'];
          $fileup = '';
          if ($tentaptin != "") {
            $fileup = "`hinhanh` = '$tentaptin',";
          } else {
            $fileup = "";
          }
          $tenhinhqcab =  $_FILES['txt_hinhqcab']['name'];
          if ($tenhinhqcab == "") {
            $tenhinhqcab = $_POST['txt_hinhqcab_hide'];
          }
          $tenhinhqcabc =  $_FILES['txt_hinhqcabc']['name'];
          if ($tenhinhqcabc == "") {
            $tenhinhqcabc = $_POST['txt_hinhqcabc_hide'];
          }
          $tenhinhndab =  $_FILES['txt_hinhndab']['name'];
          if ($tenhinhndab == "") {
            $tenhinhndab = $_POST['txt_hinhndab_hide'];
          }
          $tenhinhndabc =  $_FILES['txt_hinhndabc']['name'];
          if ($tenhinhndabc == "") {
            $tenhinhndabc = $_POST['txt_hinhndabc_hide'];
          }
          $tenhinhndabcd =  $_FILES['txt_hinhndabcd']['name'];
          if ($tenhinhndabcd == "") {
            $tenhinhndabcd = $_POST['txt_hinhndabcd_hide'];
          }
          $noidung = mysqli_real_escape_string($link, $_POST['txt_noidung']);
          $tieude = mysqli_real_escape_string($link, $_POST['tieude']);
          $trangchu = $_POST['trangchu'];
          $mota = mysqli_real_escape_string($link, $_POST['mota']);
          $noidung_en = mysqli_real_escape_string($link, $_POST['txt_noidung_en']);
          $tieude_en = mysqli_real_escape_string($link, $_POST['tieude_en']);
          $mota_en = mysqli_real_escape_string($link, $_POST['mota_en']);
          $mota_en = mysqli_real_escape_string($link, $_POST['mota_en']);
          $title = mysqli_real_escape_string($link, $_POST['title']);
          $tukhoa = mysqli_real_escape_string($link, $_POST['tukhoa']);
          $facebook = mysqli_real_escape_string($link, $_POST['facebook']);
          $linkurl = mysqli_real_escape_string($link, $_POST['tieude_en']);
          $xem = $_POST['xem'];
          $nguon = $_POST['nguon'];
          $thuocloai = $_POST['thuocloai'];

          $truyvan = "UPDATE `tin_tintuc` SET $fileup
                    `thuocloai` = '$thuocloai',
                    `noidung` = '$noidung',
                    `trangchu` = '$trangchu',
                    `mota` = '$mota',
                    `tieude` = '$tieude',
                    `tukhoa` = '$tieude',
                    `tieude_en` = '$tieude_en',
                    `noidung_en` = '$noidung_en',
                    `mota_en` = '$mota_en' WHERE `id` = $id;";

          $result = mysqli_query($link, $truyvan);
          if ($result) {
            if ($fileup != '') {
              dichuyen_taptin_vaothumuc($tentaptin);
            }
            echo "Chúc mừng bạn Upload thành công thông tin";
          } else {
            echo "Upload không thành công. Bạn thử lại xem ";
          }
        }
        function dichuyen_taptin_vaothumuc($tentaptin)
        {
          $thumuctam_chuataptin = $_FILES['txt_hinhanh']['tmp_name'];
          if (move_uploaded_file($thumuctam_chuataptin, "../HinhCTSP/HinhTinTuc/$tentaptin")) {
            echo "Chúc mừng bạn Upload thành công thông tin ";
          } else {
            xoataptin($tentaptin);
            echo "Chúc mừng bạn Upload thành công thông tin";
          }
        }
        function xoataptin($tentaptin)
        {
          include_once('db.php');
          $truyvan = "DELETE FROM maykhoanda WHERE id = $masotaptin";
          mysqli_query($link, $truyvan);
        }
        ?>
      </td>
      <td valign="top" align="left">
        <p>
          <span class="style3">1.</span>
          <em><strong>Hình ảnh phải nhập đúng kích cở (300x400) hoặc hình lớn hơn một ít, tránh tình trạng nhập vào hình có kích thước nhỏ hơn vì khi bung ra nó sẽ bị nhòe hình. Tốt nhất nên để hình ở định dạng .jpg </strong></em><br /><br /><br />
        </p>
      </td>
    </tr>
    <tr>
      <td height="203" colspan="2" align="center" valign="top">
        <?php
        include('db.php');
        $id = $_REQUEST["id"];
        $result = mysqli_query($link, "SELECT * FROM tin_tintuc where id like '$id' ");
        $row_dulieu_sua    =  mysqli_fetch_array($result);
        $tieude          =  $row_dulieu_sua['tieude'];
        $mota          =  $row_dulieu_sua['mota'];
        $hinhanh          =  $row_dulieu_sua['hinhanh'];
        $hinhqcab          =  $row_dulieu_sua['hinhqcab'];
        $hinhqcabc          =  $row_dulieu_sua['hinhqcabc'];
        $hinhndab          =  $row_dulieu_sua['hinhndab'];
        $hinhndabc          =  $row_dulieu_sua['hinhndabc'];
        $hinhndabcd          =  $row_dulieu_sua['hinhndabcd'];
        $mota_en          =  $row_dulieu_sua['mota_en'];
        $noidung_en          =  $row_dulieu_sua['noidung_en'];
        $tieude_en          =  $row_dulieu_sua['tieude_en'];
        $title          =  $row_dulieu_sua['title'];
        $tukhoa          =  $row_dulieu_sua['tukhoa'];
        $nguon          =  $row_dulieu_sua['nguon'];
        $facebook          =  $row_dulieu_sua['facebook'];
        $linkurl          =  $row_dulieu_sua['linkurl'];
        $trangchu          =  $row_dulieu_sua['trangchu'];
        $noidung = $row_dulieu_sua['noidung'];
        $noidung_en = $row_dulieu_sua['noidung_en'];
        ?>
        <form action='' method='post' enctype='multipart/form-data' name='tt_mh' id='tt_mh' onsubmit='return checkInput();'>
          <table width='780' border='1' bordercolor='black' style='border-collapse:collapse'>
            <tr>
              <td>Chọn loại tin tức</td>
              <td>
                <?php
                $id = $_REQUEST["id"];
                $sq = mysqli_query($link, "SELECT * FROM tin_tintuc where id=" . $id . "");
                $loai = mysqli_fetch_array($sq);
                ?>
                <select name="thuocloai">
                  <?php
                  $selected = "";
                  $sql = mysqli_query($link, "SELECT * FROM loai_tin_tintuc ORDER BY id DESC");
                  while ($row = mysqli_fetch_array($sql)) {
                    if ($row['id'] == $loai['thuocloai']) {
                      $selected = "selected='selected'";
                    } else {
                      $selected = '';
                    }
                  ?>
                    <option value="<?= $row['id'] ?>" <?php echo $selected; ?>><?php echo $row['thuocloai'] ?></option>
                  <?php
                  }
                  ?>
                </select>
            </tr>
            <tr>
              <td width="162">
                <div align="left"><strong>Hình ảnh</strong> <br /> KT 800 X 500 PX </div>
              </td>
              <td width="644">
                <div align="left">
                  <label>
                    <input name="txt_hinhanh" type="file" id="txt_hinhanh" size="40" />
                    <input name="txt_hinhanh_hide" type="hidden" id="txt_hinhanh" value="<?php echo "$hinhanh"; ?>" size="40" />
                  </label>
                  <br /><?php echo "<img src='../HinhCTSP/HinhTinTuc/$hinhanh' width='60' height='50' />"; ?>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div align="left"><strong>Tên Công Trình</strong></div>
              </td>
              <td>
                <div align="left">
                  <label>
                    <input name="tieude_en" type="text" id="masp2" value="<?php echo "$tieude_en"; ?>" size="50" maxlength="70" />
                  </label>
                </div>
              </td>
            </tr>
            <td valign="top">
              <div align="left"><strong>Mô tả</strong> </div>
            </td>
            <td>
              <div align="left">
                <label></label>
                <textarea name="mota" cols="50" maxlength="260" id="masp"><?php echo "$mota"; ?> </textarea>
              </div>
            </td>
    </tr>
    <tr>
      <td>
        <div align="left"><strong>Từ khóa 1</strong></div>
      </td>
      <td>
        <div align="left">
          <label>
            <input name="tieude" type="text" id="masp2" value="<?php echo "$tieude"; ?>" size="50" maxlength="70" />
          </label>
        </div>
      </td>
    </tr>
    <tr>
      <td>
        <div align="left"><strong>Từ khóa 2</strong></div>
      </td>
      <td>
        <div align="left">
          <label>
            <input name="tukhoa" type="text" id="masp2" value="<?php echo "$tukhoa"; ?>" size="50" maxlength="170" />
          </label>
        </div>
      </td>
    </tr>
    <tr>
      <td>
        <div align="left"><strong>Nội dung</strong></div>
      </td>
      <td>
        <div align="left">
          <textarea name="txt_noidung" id="txt_noidung" rows="10" cols="50"><?php echo htmlspecialchars($noidung); ?></textarea>
        </div>
      </td>
    </tr>
    <tr>
      <td colspan="2">
        <div align="center">
          <input type="submit" name="luu" id="luu" value="Lưu" />
          <input type="reset" name="reset" id="reset" value="Nhập lại" />
        </div>
      </td>
    </tr>
  </table>
  <input type="hidden" name="id" value="<?php echo "$id"; ?>" />
  </form>
  </td>
  </tr>
  </table>
</body>
<!--<script src="https://cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>-->
<script>
  document.addEventListener('DOMContentLoaded', function() {
    CKEDITOR.replace('txt_noidung', {
      uiColor: '#e7e7e7',
      language: 'en',
      skin: 'moono',
      width: 'auto',
      height: 350,
      filebrowserImageBrowseUrl: 'ckfinder/ckfinder.html?Type=Images',
      filebrowserFlashBrowseUrl: 'ckfinder/ckfinder.html?Type=Flash',
      filebrowserImageUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
      filebrowserFlashUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
    });
  });
</script>



</html>