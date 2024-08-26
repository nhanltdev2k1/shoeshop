<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <META NAME="Search Engines" CONTENT="www.google.com, www.google.co.uk, www.altaVista.com, www.aol.com, www.infoseek.com, www.excite.com, www.hotbot.com, www.lycos.com, www.magellan.com, www.cnet.com, www.voila.com, www.google.fr, www.yahoo.fr, www.yahoo.com, www.alltheweb.com, www.msn.com, www.netscape.com, www.nomade.com">
  <META NAME="ROBOTS" CONTENT="INDEX, FOLLOW">
  <META NAME="author" CONTENT="Ngữ Á Châu">
  <META NAME="distribution" content="global">
  <link rel="shortcut icon" href="Hinh/copy.ico">
  <title>Thanh Huong</title>
  <script type="text/javascript" src="fckeditor/fckeditor.js"></script>
  <style type="text/css">
    <!--
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

    A:hover {
      color: #00FF66
    }
    -->
  </style>
  <script type="text/javascript" src="tinymce/jscripts/tiny_mce/tiny_mce.js"></script>
  <script type="text/javascript" src="tinymce/text.js"></script>
  <script type="text/javascript">
    function checkInput() {
      var isOk = true;
      // if(document.tt_mh.txt_masp.value=="")
      //{
      //  alert("Hãy nhập mã sản phẩm");
      // isOk = false;
      // }
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
  <table width="61%" height="530" border="1" bordercolor="#0000FF" style="border-collapse:collapse">
    <tr>
      <td width="206" height="22">
        <div align="center"><strong>Thông Báo </strong></div>
      </td>
      <td width="202">
        <div align="center"><strong>Hướng Dẫn </strong></div>
      </td>
    </tr>
    <tr>
      <td height="112" valign="top">
        <?php
        if (isset($_POST["luu"])) {
            $today2 = date("D");
            $today = date("d");
            $today1 = date("m");
            $today3 = date("Y");
            $chuoi = " $today/$today1/$today3 ";
            include "db.php";
            $id = $_REQUEST["id"];
            $tentaptin = $_FILES["txt_hinhanh"]["name"];
            if ($tentaptin == "") {
                $tentaptin = $_POST["txt_hinhanh_hide"];
            }
            $tenlogo = $_FILES["txt_logo"]["name"];
            if ($tenlogo == "") {
                $tenlogo = $_POST["txt_logo_hide"];
            }
            $tenhinhab = $_FILES["txt_hinhab"]["name"];
            if ($tenhinhab == "") {
                $tenhinhab = $_POST["txt_hinhab_hide"];
            }
            $tenhinhabc = $_FILES["txt_hinhabc"]["name"];
            if ($tenhinhabc == "") {
                $tenhinhabc = $_POST["txt_hinhabc_hide"];
            }
            $tenhinhabcd = $_FILES["txt_hinhabcd"]["name"];
            if ($tenhinhabcd == "") {
                $tenhinhabcd = $_POST["txt_hinhabcd_hide"];
            }
            $tenhinhqcab = $_FILES["txt_hinhqcab"]["name"];
            if ($tenhinhqcab == "") {
                $tenhinhqcab = $_POST["txt_hinhqcab_hide"];
            }
            $tenhinhqcabc = $_FILES["txt_hinhqcabc"]["name"];
            if ($tenhinhqcabc == "") {
                $tenhinhqcabc = $_POST["txt_hinhqcabc_hide"];
            }
            $tenhinhndab = $_FILES["txt_hinhndab"]["name"];
            if ($tenhinhndab == "") {
                $tenhinhndab = $_POST["txt_hinhndab_hide"];
            }
            $tenhinhndabc = $_FILES["txt_hinhndabc"]["name"];
            if ($tenhinhndabc == "") {
                $tenhinhndabc = $_POST["txt_hinhndabc_hide"];
            }
            $tenhinhndabcd = $_FILES["txt_hinhndabcd"]["name"];
            if ($tenhinhndabcd == "") {
                $tenhinhndabcd = $_POST["txt_hinhndabcd_hide"];
            }
            $tenhinhspab = $_FILES["txt_hinhspab"]["name"];
            if ($tenhinhspab == "") {
                $tenhinhspab = $_POST["txt_hinhspab_hide"];
            }
            $tenhinhspabc = $_FILES["txt_hinhspabc"]["name"];
            if ($tenhinhspabc == "") {
                $tenhinhspabc = $_POST["txt_hinhspabc_hide"];
            }
            $tenhinhspabcd = $_FILES["txt_hinhspabcd"]["name"];
            if ($tenhinhspabcd == "") {
                $tenhinhspabcd = $_POST["txt_hinhspabcd_hide"];
            }
            $khuyenmai = $_POST["khuyenmai"];
            $trangthai = $_POST["trangthai"];
            $loai = $_POST["thuocloai"];
            $danhmuc = $_POST["danhmuc"];
            $trangchu = $_POST["trangchu"];
            $sao = $_POST["sao"];
            $mota = $_POST["mota"];
            $mota_en = $_POST["mota_en"];
            $sort = $_POST["sort"];
            $luotxem = $_POST["luotxem"];
            $chuthich = str_replace("'", "", $_POST["chuthich"]);
            $chuthichab = str_replace("'", "", $_POST["chuthichab"]);
            $chuthichabc = str_replace("'", "", $_POST["chuthichabc"]);
            $chuthichabcd = str_replace("'", "", $_POST["chuthichabcd"]);
            $chuthichabcde = str_replace("'", "", $_POST["chuthichabcde"]);
            $noidung = str_replace("'", "", $_POST["txt_noidung"]);
            $noidung_en = str_replace("'", "", $_POST["txt_noidung_en"]);
            $tieude = str_replace("'", "", $_POST["tieude"]);
            $gia = str_replace("'", "", $_POST["gia"]);
            $tieude_en = str_replace("'", "", $_POST["tieude_en"]);
            $masanpham = str_replace("'", "", $_POST["masanpham"]);
            $size = $_POST["size"];
            $trangthai_en = str_replace("'", "", $_POST["trangthai_en"]);
            $noidung_china = str_replace("'", "", $_POST["txt_noidung_china"]);
            $tieude_china = str_replace("'", "", $_POST["tieude_china"]);
            $mota_china = str_replace("'", "", $_POST["mota_china"]);
            $trangthai_china = str_replace("'", "", $_POST["trangthai_china"]);
            $noidung_han = str_replace("'", "", $_POST["txt_noidung_han"]);
            $tieude_han = str_replace("'", "", $_POST["tieude_han"]);
            $mota_han = str_replace("'", "", $_POST["mota_han"]);
            $trangthai_han = str_replace("'", "", $_POST["trangthai_han"]);
            $noidung_nhat = str_replace("'", "", $_POST["txt_noidung_nhat"]);
            $tieude_nhat = str_replace("'", "", $_POST["tieude_nhat"]);
            $mota_nhat = str_replace("'", "", $_POST["mota_nhat"]);
            $trangthai_nhat = str_replace("'", "", $_POST["trangthai_nhat"]);
            $noidung_nga = str_replace("'", "", $_POST["txt_noidung_nga"]);
            $noidung_my = str_replace("'", "", $_POST["txt_noidung_my"]);
            $noidung_anh = str_replace("'", "", $_POST["txt_noidung_anh"]);
            $noidung_phap = str_replace("'", "", $_POST["txt_noidung_phap"]);
            $linkurl = strtolower(khongdau(str_replace("'", "", $_POST["tieude"])));
            upload($loai, $danhmuc, $tentaptin, $tieude, $mota, $gia, $mota_han, $mota_en, $masanpham, $tieude_han, $tieude_nhat, $tieude_china, $trangthai_nhat, $trangthai_china, $trangchu, $sao, $noidung, $linkurl, $id);
        }
        function upload($loai, $danhmuc, $tentaptin, $tieude, $mota, $gia, $mota_han, $mota_en, $masanpham, $tieude_han, $tieude_nhat, $tieude_china, $trangthai_nhat, $trangthai_china, $trangchu, $sao, $noidung, $linkurl, $id)
        {
            require "db.php";
            //$ketnoi_maychu = ketnoi_MC();
            //chon_CSDL($ketnoi_maychu);
            $truyvan = "update  ma_sanpham set  thuocloai='$loai',danhmuc='$danhmuc',hinhanh='$tentaptin',tieude='$tieude',mota='$mota',gia='$gia',mota_han='$mota_han',mota_en='$mota_en',masanpham='$masanpham',tieude_han='$tieude_han',tieude_nhat='$tieude_nhat',tieude_china='$tieude_china',trangthai_nhat='$trangthai_nhat',trangthai_china='$trangthai_china',trangchu='$trangchu',star='$sao',noidung='$noidung',linkurl='$linkurl'  where id='$id'";
            //$truyvan = "update ma_sanpham set noidung='".$noidung."',hinhanh='".$tentaptin."',tieude='".$tieude."'  where id=".$id."";
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
                echo "Upload thành công.Bạn thử lại xem";
                echo "<script>window.location='quan_tri.php?p=danhsach_masanpham&page=" . $_GET["page"] . "'</script>";
            } else {
                echo "Upload không thành công.Bạn thử lại xem";
            }
            //  mysqli_close($ketnoi_maychu);
        }
        function dichuyen_taptin_vaothumuc($tentaptin)
        {
            $thumuctam_chuataptin = $_FILES["txt_hinhanh"]["tmp_name"];
            if (move_uploaded_file($thumuctam_chuataptin, "../HinhCTSP/HinhSanPham/$tentaptin")) {
                echo "Chúc mừng bạn Upload thành công thông tin";
            } else {
                xoataptin($tentaptin);
                echo "Chúc mừng bạn Upload thành công thông tin";
            }
        }
        function xoataptin($tentaptin, $link)
        {
            // Assuming the filename is mapped to an ID, you would normally query the ID here.
            // This example assumes $tentaptin is the ID directly.

            // Sanitize the input to prevent SQL injection
            $tentaptin = mysqli_real_escape_string($link, $tentaptin);

            // Prepare the SQL query
            $truyvan = "DELETE FROM maykhoanda WHERE id = '$tentaptin'";

            // Execute the query
            $ketqua_truyvan = mysqli_query($link, $truyvan);

            // Check if the query was successful
            if ($ketqua_truyvan) {
                echo "Record deleted successfully.";
            } else {
                echo "Error deleting record: " . mysqli_error($link);
            }
        }
        ?>

      </td>
      <td valign="top" align="left">
        <p><span class="style3">1.</span> <em><strong>Hình ảnh phải nhập đúng kích cở (300x400) hoặc hình lớn hơn một ít, tránh tình trạng nhập vào hình có kích thước nhỏ hơn vì khi bung ra nó sẽ bị nhòe hình. Tốt nhất nên để hình ở định dạng .jpg </strong></em><br />
          <br />
          <br />
      </td>
    </tr>
    <tr>
      <td height="203" colspan="2" align="center" valign="top">
        <?php
        include "db.php";
        $id = $_REQUEST["id"];
        $result = mysqli_query($link, "SELECT * FROM ma_sanpham where id like '$id' ");
        $row_dulieu_sua = mysqli_fetch_array($result);
        $tieude = $row_dulieu_sua["tieude"];
        $gia = $row_dulieu_sua["gia"];
        $tieude_en = $row_dulieu_sua["tieude_en"];
        $tieude_nhat = $row_dulieu_sua["tieude_nhat"];
        $tieude_china = $row_dulieu_sua["tieude_china"];
        $tieude_han = $row_dulieu_sua["tieude_han"];

        $mota = $row_dulieu_sua["mota"];

        $mota_en = $row_dulieu_sua["mota_en"];

        $trangchu = $row_dulieu_sua["trangchu"];

        $trangthai = $row_dulieu_sua["trangthai"];

        $khuyenmai = $row_dulieu_sua["khuyenmai"];

        $trangthai_en = $row_dulieu_sua["trangthai_en"];

        $masanpham = $row_dulieu_sua["masanpham"];

        $size = $row_dulieu_sua["size"];
        $luotxem = $row_dulieu_sua["luotxem"];

        $hinhanh = $row_dulieu_sua["hinhanh"];

        $logo = $row_dulieu_sua["logo"];

        $hinhab = $row_dulieu_sua["hinhab"];

        $hinhabc = $row_dulieu_sua["hinhabc"];

        $hinhabcd = $row_dulieu_sua["hinhabcd"];

        $hinhqcab = $row_dulieu_sua["hinhqcab"];

        $hinhqcabc = $row_dulieu_sua["hinhqcabc"];

        $hinhndab = $row_dulieu_sua["hinhndab"];

        $hinhndabc = $row_dulieu_sua["hinhndabc"];

        $hinhndabcd = $row_dulieu_sua["hinhndabcd"];

        $hinhspab = $row_dulieu_sua["hinhspab"];

        $hinhspabc = $row_dulieu_sua["hinhspabc"];

        $hinhspabcd = $row_dulieu_sua["hinhspabcd	"];

        $mota_china = $row_dulieu_sua["mota_china"];

        $mota_han = $row_dulieu_sua["mota_han"];

        $mota_nhat = $row_dulieu_sua["mota_nhat"];

        $chuthich = $row_dulieu_sua["chuthich"];

        $chuthichab = $row_dulieu_sua["chuthichab"];

        $chuthichabc = $row_dulieu_sua["chuthichabc"];

        $chuthichabcd = $row_dulieu_sua["chuthichabcd"];

        $chuthichabcde = $row_dulieu_sua["chuthichabcde"];

        $trangthai = $row_dulieu_sua["trangthai"];

        $trangthai_en = $row_dulieu_sua["trangthai_en"];

        $trangthai_china = $row_dulieu_sua["trangthai_china"];

        $trangthai_han = $row_dulieu_sua["trangthai_han"];

        $trangthai_nhat = $row_dulieu_sua["trangthai_nhat"];

        $sort = $row_dulieu_sua["sort"];

        $noidung = $row_dulieu_sua["noidung"];

        $noidung_en = $row_dulieu_sua["noidung_en"];

        $noidung_china = $row_dulieu_sua["noidung_china"];
        $noidung_han = $row_dulieu_sua["noidung_han"];
        $noidung_nhat = $row_dulieu_sua["noidung_nhat"];
        $noidung_nga = $row_dulieu_sua["noidung_nga"];
        $noidung_my = $row_dulieu_sua["noidung_my"];
        $noidung_anh = $row_dulieu_sua["noidung_anh"];
        $noidung_phap = $row_dulieu_sua["noidung_phap"];
        ?>



        <form action='' method='post' enctype='multipart/form-data' name='tt_mh' id='tt_mh' onsubmit='return checkInput();'>

          <table width='97%' border='1' bordercolor='black' style='border-collapse:collapse'>



            <tr>

              <td>Chọn danh mục</td>

              <td>

                <select name="danhmuc">

                  <?php
                  require "db.php";
                  $sql = mysqli_query($link, "SELECT * FROM danhmuc ORDER BY id asc");
                  $selectd = "";
                  while ($row = mysqli_fetch_array($sql)) {
                      if ($row["id"] == (int) @$_GET["danhmuc"]) {
                          $selectd = "selected";
                      } else {
                          $selectd = "";
                      } ?>

                    <option value="<?php echo $row["id"]; ?>" <?php echo $selectd; ?>><?php echo $row["tieude"]; ?></option>



                  <?php
                  }
                  ?>

                </select>



              </td>

            </tr>
            <tr>

              <td>Thuộc loại</td>

              <td>

                <select name="thuocloai">

                  <?php
                  require "db.php";
                  $sql = mysqli_query($link, "SELECT * FROM loai_ma_sanpham ORDER BY id asc");
                  $selectd = "";
                  while ($row = mysqli_fetch_array($sql)) {
                      if ($row["id"] == (int) @$_GET["thuocloai"]) {
                          $selectd = "selected";
                      } else {
                          $selectd = "";
                      } ?>

                    <option value="<?php echo $row["id"]; ?>" <?php echo $selectd; ?>><?php echo $row["thuocloai"]; ?></option>

                  <?php
                  }
                  ?>

                </select>



              </td>

            </tr>

            <tr>

              <td width="126">
                <div align="left"><strong>Hình ảnh</strong></div>
              </td>

              <td width="333">
                <div align="left">

                  <label>

                    <input name="txt_hinhanh" type="file" id="txt_hinhanh" size="40" />

                    <input name="txt_hinhanh_hide" type="hidden" id="txt_hinhanh" value="<?php echo "$hinhanh"; ?>" size="40" />

                  </label>

                  <br />

                  <?php echo "<img src='../HinhCTSP/HinhSanPham/$hinhanh' width='60' height='50' />"; ?>
                </div>
              </td>

            </tr>

            <tr>

              <td>
                <div align="left"><strong>Tên Sản Phẩm</strong></div>
              </td>

              <td>
                <div align="left">

                  <input name="tieude" type="text" id="tieude" value="<?php echo "$tieude"; ?>" size="70" />

                </div>
              </td>

            </tr>



            <tr>

              <td valign="top">
                <div align="left"><strong>Mô Tả </strong> </div>
              </td>

              <td>
                <div align="left">

                  <label></label>

                  <textarea name="mota" cols="50" id="masp"><?php echo "$mota"; ?></textarea>

                </div>
              </td>

            </tr>
            <!--  <tr>

		   <td><div align="left"><strong>Mã sản phẩm</strong> </div></td>

          <td><div align="left">

            <label>

              <textarea name="masanpham" cols="50" id="masp"><?php echo "$masanpham"; ?></textarea>

            </label>

          </div></td>

        </tr>-->

            <tr>

              <td>
                <div align="left"><strong>Giá bán</strong></div>
              </td>

              <td>
                <div align="left">

                  <input name="gia" type="text" id="gia" value="<?php echo "$gia"; ?>" size="70" />

                </div>
              </td>

            </tr>

            <tr>

              <td valign="top">
                <div align="left"><strong>Giá gốc </strong> </div>
              </td>

              <td>
                <div align="left">

                  <input name="mota_han" type="text" id="masp" value="<?php echo "$mota_han"; ?>" size="70" />

                </div>
              </td>

            </tr>

            <tr>

              <td valign="top">
                <div align="left"><strong>Thương Hiệu </strong> </div>
              </td>

              <td>
                <div align="left">

                  <input name="masanpham" type="text" id="masp" value="<?php echo "$masanpham"; ?>" size="70" />

                </div>
              </td>

            </tr>

            <tr>

              <td valign="top">
                <div align="left"><strong>Khuyến mãi</strong> </div>
              </td>

              <td>
                <div align="left">


                  <input name="mota_en" type="text" id="gia" value="<?php echo "$mota_en"; ?>" size="70" />

                </div>
              </td>

            </tr>

            <tr>

              <td valign="top">
                <div align="left"><strong>Sale chữ</strong> </div>
              </td>

              <td>
                <div align="left">

                  <input name="tieude_han" type="text" id="gia" value="<?php echo "$tieude_han"; ?>" size="70" />

                </div>
              </td>

            </tr>
            <tr>

              <td valign="top">
                <div align="left"><strong>Hot </strong> </div>
              </td>

              <td>
                <div align="left">

                  <input name="tieude_nhat" type="text" id="gia" value="<?php echo "$tieude_nhat"; ?>" size="70" />

                </div>
              </td>

            </tr>
            <tr>

              <td valign="top">
                <div align="left"><strong>New </strong> </div>
              </td>

              <td>
                <div align="left">

                  <input name="tieude_china" type="text" id="gia" value="<?php echo "$tieude_china"; ?>" size="70" />

                </div>
              </td>

            </tr>


            <tr>

              <td>
                <div align="left"><strong>Từ khóa 1 </strong></div>
              </td>

              <td>
                <div align="left">

                  <input name="trangthai_nhat" type="text" id="masp" value="<?php echo "$trangthai_nhat"; ?>" size="70" />

                </div>
              </td>

            </tr>

            <tr>

              <td>
                <div align="left"><strong>Từ khóa 2</strong></div>
              </td>

              <td>
                <div align="left">

                  <input name="trangthai_china" type="text" id="masp" value="<?php echo "$trangthai_china"; ?>" size="70" />

                </div>
              </td>

            </tr>







            <!--
         <tr>

		   <td><div align="left"><strong>Size</strong> </div></td>

          <td><div align="left">

            <label>



              <textarea name="size" cols="50" id="masp"><?php echo "$size"; ?></textarea>

            </label>

          </div></td>

        </tr>

            <tr>

          <td width="126"><div align="left"><strong>Hình K.sạn 02</strong></br><font style='color:#f00;'>900px x auto </font></div></td>

          <td width="333"><div align="left">

            <label>

              <input name="txt_hinhqcab" type="file" id="txt_hinhqcab" size="40" />

              <input name="txt_hinhqcab_hide" type="hidden" id="txt_hinhqcab"  value="<?php echo "$hinhqcab"; ?>" size="40" />

              </label>

            <br />

            <?php echo "<img src='../HinhCTSP/$hinhqcab' width='60' height='50' />"; ?> </div></td>

        </tr>

               <tr>

          <td width="126"><div align="left"><strong>Hình K.sạn 03</strong></br><font style='color:#f00;'>900px x auto </font></div></td>

          <td width="333"><div align="left">

            <label>

              <input name="txt_hinhqcabc" type="file" id="txt_hinhqcabc" size="40" />

              <input name="txt_hinhqcabc_hide" type="hidden" id="txt_hinhqcabc"  value="<?php echo "$hinhqcabc"; ?>" size="40" />

              </label>

            <br />

            <?php echo "<img src='../HinhCTSP/$hinhqcabc' width='60' height='50' />"; ?> </div></td>

        </tr>


              <tr>

        <td><div align="left"><strong>Chú Thích ND2</strong></div></td>

          <td><div align="left">

            <input name="trangthai_nhat" type="text" id="tieude" value="<?php echo "$trangthai_nhat"; ?>" size="70" />

            </div></td>

        </tr>

               <tr>

          <td width="126"><div align="left"><strong>Hình K.sạn 04</strong></br><font style='color:#f00;'>900px x auto </font></div></td>

          <td width="333"><div align="left">

            <label>

              <input name="txt_hinhndab" type="file" id="txt_hinhndab" size="40" />

              <input name="txt_hinhndab_hide" type="hidden" id="txt_hinhndab"  value="<?php echo "$hinhndab"; ?>" size="40" />

              </label>

            <br />

            <?php echo "<img src='../HinhCTSP/$hinhndab' width='60' height='50' />"; ?> </div></td>

        </tr>

                <tr>

        <td><div align="left"><strong>Chú Thích 04</strong></div></td>

          <td><div align="left">

             <input name="chuthichab" type="text" id="tieude" value="<?php echo "$chuthichabcde"; ?>" size="70" />

            </div></td>

        </tr>



                  <tr>

          <td width="126"><div align="left"><strong>Hình K.sạn 05</strong></br><font style='color:#f00;'>900px x auto </font></div></td>

          <td width="333"><div align="left">

            <label>

              <input name="txt_hinhndabc" type="file" id="txt_hinhndabc" size="40" />

              <input name="txt_hinhndabc_hide" type="hidden" id="txt_hinhndabc"  value="<?php echo "$hinhndabc"; ?>" size="40" />

              </label>

            <br />

            <?php echo "<img src='../HinhCTSP/$hinhndabc' width='60' height='50' />"; ?> </div></td>

        </tr>



               <tr>

        <td><div align="left"><strong>Chú Thích 06</strong></div></td>

          <td><div align="left">

            <input name="chuthichabc" type="text" id="tieude" value="<?php echo "$chuthichabcde"; ?>" size="70" />

            </div></td>

        </tr>





                  <tr>

          <td width="126"><div align="left"><strong>Hình K.sạn 06</strong></br><font style='color:#f00;'>900px x auto </font></div></td>

          <td width="333"><div align="left">

            <label>

              <input name="txt_hinhndabcd" type="file" id="txt_hinhndabcd" size="40" />

              <input name="txt_hinhndabcd_hide" type="hidden" id="txt_hinhndabcd"  value="<?php echo "$hinhndabcd"; ?>" size="40" />

              </label>

            <br />

            <?php echo "<img src='../HinhCTSP/$hinhndabcd' width='60' height='50' />"; ?> </div></td>

        </tr>

             <tr>

        <td><div align="left"><strong>Chú Thích 06</strong></div></td>

          <td><div align="left">

           <input name="chuthichabcd" type="text" id="tieude" value="<?php echo "$chuthichabcde"; ?>" size="70" />

            </div></td>

        </tr>



          <tr>

          <td width="126"><div align="left"><strong>Hình K.sạn 07</strong></br><font style='color:#f00;'>900px x auto </font></div></td>

          <td width="333"><div align="left">

            <label>

              <input name="txt_hinhabc" type="file" id="txt_hinhabc" size="40" />

              <input name="txt_hinhabc_hide" type="hidden" id="txt_hinhabc"  value="<?php echo "$hinhabc"; ?>" size="40" />

              </label>

            <br />

            <?php echo "<img src='../HinhCTSP/$hinhabc' width='60' height='50' />"; ?> </div></td>

        </tr>

             <tr>

        <td><div align="left"><strong>Chú Thích 07</strong></div></td>

          <td><div align="left">

            <input name="chuthichabcde" type="text" id="tieude" value="<?php echo "$chuthichabcde"; ?>" size="70" />

            </div></td>

        </tr>

         <tr>

          <td width="126"><div align="left"><strong>Hình K.sạn 08</strong></br><font style='color:#f00;'>900px x auto </font></div></td>

          <td width="333"><div align="left">

            <label>

              <input name="txt_hinhspab" type="file" id="txt_hinhspab" size="40" />

              <input name="txt_hinhspab_hide" type="hidden" id="txt_hinhspab"  value="<?php echo "$hinhspab"; ?>" size="40" />

              </label>

            <br />

            <?php echo "<img src='../HinhCTSP/$hinhspab' width='60' height='50' />"; ?> </div></td>

        </tr>

        <tr>

          <td width="126"><div align="left"><strong>Hình K.sạn 09</strong></br><font style='color:#f00;'>900px x auto </font></div></td>

          <td width="333"><div align="left">

            <label>

              <input name="txt_hinhspabc" type="file" id="txt_hinhspabc" size="40" />

              <input name="txt_hinhspabc_hide" type="hidden" id="txt_hinhspabc"  value="<?php echo "$hinhspabc"; ?>" size="40" />

              </label>

            <br />

            <?php echo "<img src='../HinhCTSP/$hinhspabc' width='60' height='50' />"; ?> </div></td>

        </tr>

        <tr>

          <td width="126"><div align="left"><strong>Hình K.sạn 10</strong></br><font style='color:#f00;'>900px x auto </font></div></td>

          <td width="333"><div align="left">

            <label>

              <input name="txt_hinhab" type="file" id="txt_hinhab" size="40" />

              <input name="txt_hinhab_hide" type="hidden" id="txt_hinhab"  value="<?php echo "$hinhab"; ?>" size="40" />

              </label>

            <br />

            <?php echo "<img src='../HinhCTSP/$hinhab' width='60' height='50' />"; ?> </div></td>

        </tr>

        <tr>

        <tr>

          <td width="126"><div align="left"><strong>Hình K.sạn 11</strong></br><font style='color:#f00;'>900px x auto </font></div></td>

          <td width="333"><div align="left">

            <label>

              <input name="txt_logo" type="file" id="txt_logo" size="40" />

              <input name="txt_logo_hide" type="hidden" id="txt_logo"  value="<?php echo "$logo"; ?>" size="40" />

              </label>

            <br />

            <?php echo "<img src='../HinhCTSP/$logo' width='60' height='50' />"; ?> </div></td>

        </tr>

          <td width="126"><div align="left"><strong>Hình K.sạn 12</strong></br><font style='color:#f00;'>900px x auto </font></div></td>

          <td width="333"><div align="left">

            <label>

              <input name="txt_hinhabcd" type="file" id="txt_hinhabc" size="40" />

              <input name="txt_hinhabcd_hide" type="hidden" id="txt_hinhabc"  value="<?php echo "$hinhabcd"; ?>" size="40" />

              </label>

            <br />

            <?php echo "<img src='../HinhCTSP/$hinhabcd' width='60' height='50' />"; ?> </div></td>

        </tr>
                -->


            <tr>
              <td>
                <div align="left"><strong>Trang chủ</strong></div>
              </td>

              <td align="left"><label>

                  <?php if ($row_dulieu_sua["trangchu"] == "1") {
                      $a_1 = "selected";

                      $a_2 = "";
                  } else {
                      $a_1 = "";

                      $a_2 = "selected";
                  } ?>

                  <select name="trangchu" id="trangchu">

                    <option value="1" <?php echo $a_1; ?>>Có </option>

                    <option value="2" <?php echo $a_2; ?>>Không</option>

                  </select>

                </label></td>

            </tr>
            <tr>

              <td>
                <div align="left"><strong>Sao</strong></div>
              </td>

              <td align="left"><label>

                  <select name="sao" id="select3">

                    <option value="4"> 4 Sao</option>
                    <option value="3"> 3 Sao</option>

                    <option value="5"> 5 Sao</option>

                  </select>

                </label></td>

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
            <td height="28">
              <div align="center"></div>
            </td>

            <td>

              <div align="left">

                <input name="luu" style="width:100px; color:#FF0000" type="submit" id="luu" value="Lưu Lại" />

              </div>
            </td>

    </tr>

  </table>

  </form>
  </td>

  </tr>

  </table>

</body>
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