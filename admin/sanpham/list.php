<!-- thêm danh mục -->
<section class="khungaddm">
    <div class="tieude">
        <h1>Danh sách sản phẩm</h1>
    </div>
    <div class="form-group">
    <form action="index.php?act=listsp" method="post">
        <input type="text" name="kyw" placeholder="Tìm kiếm" id="">
        <select name="ma_danh_muc" id="">
            <option value="0" selected>Tất cả</option>
            <?php
            foreach ($listdanhmuc as $danhmuc) {
                extract($danhmuc);
                echo '<option value="' . $ma_danhmuc . '">' . $ten_danhmuc . '</option>';
            }
            ?>
        </select>
        <input type="submit" name="listok" value="Tìm kiếm">
    </form></div>
    <table class="table">
        <tr>
            <th>Mã Sản phẩm</th>
            <th>Tên sản phẩm </th>
            <th>Hình</th>
            <th>Mô tả</th>
            <th>Lượt xem</th>
            <th>Thao tác</th>
        </tr>
        <?php
        foreach ($listsanpham as $sanpham) {
            extract($sanpham);
            $suasp = "index.php?act=suasp&ma_sanpham=" . $ma_sanpham;
            $xoasp = "index.php?act=xoasp&ma_sanpham=" . $ma_sanpham;
            $hinhpath = "../upload/" . $hinh;
            if (is_file($hinhpath)) {
                $hinh = "<img src = '" . $hinhpath . "' height = '80' >";
            } else {
                $hinh = "no photo";
            }
            echo '<tr>
                            <td>' . $ma_sanpham . '</td>
                            <td>' . $ten_sanpham . '</td>
                            <td>' . $hinh . '</td>
                            <td>' . $mota . '</td>
                            <td>' . $luotxem . '</td>
                            <td><a href="' . $suasp . '"><input type="button" value="Sửa"></a> <a href="' . $xoasp . '"><input type="button" value="Xóa"></a> <a href="index.php?act=addsp"><input type="button" value="Nhập thêm" /></a></td>
                        </tr>';
        }
        ?>
    </table>
</section>
<!-- end thêm danh mục -->