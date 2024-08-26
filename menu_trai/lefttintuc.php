<div class="sidebar-wrapper" data-sticky-sidebar-options='{"offsetTop": 72}'>
    <div class="widget widget-categories">
        <p class="widget-title">Sản phẩm Hot Nhất Hiện Nay</p>
        <ul class="list">
            <?php
            require('db.php');
            $tv1 = "SELECT * FROM loai_tin_dichvu ORDER BY id ASC";
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

    <div class="widget widget-post">
        <p class="widget-title">Bài Viết Gần Đây</p>
        <ul class="simple-post-list">
            <?php
            require('db.php');
            $p = new pager;
            $limit = 3;
            $start = $p->findStart($limit);
            $count = @mysqli_num_rows(mysqli_query($link, "SELECT*FROM tin_tintuc"));
            $pages = $p->findPages($count, $limit);
            $sql = mysqli_query($link, "SELECT * FROM tin_tintuc  ORDER BY  id DESC limit 3");
            // hi?n th? DL

            while ($row = mysqli_fetch_array($sql)) {
                $id = $row['id'];
                $ten = $row['ten'];
                $hinhanh = $row['hinhanh'];
                $tieude = $row['tieude'];
                $tieude_en = $row['tieude_en'];
                $mota = $row['mota'];
                $ngay = $row['ngay'];
                $url = $row['linkurl'];
                $link = str_replace("?", "", strtolower("thongtin/$url"));
            ?>
                <li>
                    <div class="post-info">
                        <a href="<?php echo "$link"; ?>"><?php echo "$tieude_en"; ?></a>
                        <div class="post-meta"><?php echo "$ngay"; ?></div>
                    </div>
                </li>
            <?php } ?>
        </ul>
    </div>

    <div class="widget">
        <p class="widget-title">Tags</p>
        <div class="tagcloud">
            <a href="sanpham/do-doi">Set Đồ Đôi Hot</a>
            <a href="sanpham/do-nu">Đồ Nữ Hot Trend</a>
        </div>
    </div>
</div>