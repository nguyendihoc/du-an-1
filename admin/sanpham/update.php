<?php

if (is_array($sanpham)) {
  extract($sanpham);
}

$hinhpath = "../upload/" . $hinh;
if (is_file($hinhpath)) {
  $hinh = "<img src = '" . $hinhpath . "' height = '80' >";
} else {
  $hinh = "no photo";
}
?>

<!-- thêm danh mục -->
<section class="khungaddm">
    <div class="tieude">
        <h1>Cập nhật sản phẩm</h1>
    </div>
    <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <select name="ma_danh_muc" id="">
          <option value="0" selected>Tất cả</option>
          <?php
          foreach ($listdanhmuc as $danhmuc) {
            if ($ma_danh_muc == $danhmuc['ma_danhmuc']) $s="selected"; else $s="";
              echo '<option value="'.$danhmuc['ma_danhmuc'].'" '.$s.'>' . $danhmuc['ten_danhmuc'] . '</option>';
          }
          ?>
        </select>

      </div>
      <div class="form-group">
        Tên sản phẩm <br>
        <input type="text" name="ten_sanpham" value="<?= $ten_sanpham; ?>">
      </div>
      <div class="form-group ">
        Hình<br>
        <input type="file" name="hinh"><br>
        <?= $hinh; ?>
      </div>
      <div class="form-group">
        Mô tả <br>
        <textarea name="mota" cols="30" rows="10">
        <?= $mota; ?>
        </textarea>
      </div>
      <div class="form-group ">
        <input type="hidden" name="ma_sanpham" value="<?= $ma_sanpham; ?>">
        <input type="submit" name="capnhat" value="Cập nhật">
        <input type="reset" value="Nhập lại">
        <a href="index.php?act=listsp"><input type="button" value="Danh sách"></a>
      </div>
      <?php
      if (isset($thongbao) && ($thongbao != ""))
        echo $thongbao; ?>
    </form>
</section>
<!-- end thêm danh mục -->