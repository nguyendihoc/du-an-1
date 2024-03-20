<div class="container">
        <div class="boxtrai row">
        <div class="row mb">
            <?php
            extract($onesp);
            ?>
            <div class="boxtitle"><?=$ten_sanpham?></div>
            <div class="hinh_spct">
              <?php
              $hinh=$img_path.$hinh;
              echo '<div class="row mb spct"><img src="'.$hinh.'" width="250px" ></div>';//echo nháy đơn
              echo $mota;
               ?>
                        
            </div>
          </div>
          <div class="boxphai row mb">
             <!-- thêm mới -->
          <div class="row mb">
            <div class="boxtitle">Chọn size:</div>
            <select class="form-select" name="size" id="size">
                <option value="S">Size S</option>
                <option value="M">Size M</option>
                <option value="L">Size L</option>
            </select>
        </div>

        <div class="row mb">
            <div class="boxtitle">Chọn màu:</div>
            <select name="color" id="color">
                <option value="Red">Đỏ</option>
                <option value="Blue">Xanh</option>
                <option value="Green">Lục</option>
            </select>
        </div>

        <div class="row mb">
            <button onclick="buyNow()">Mua Ngay</button> <br>
            <button onclick="addToCart()">Thêm vào Giỏ Hàng</button>
        </div>
        <!-- them mới -->
          </div>
          
          </div>
        <div class="phanduoi">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
          <script>
            $(document).ready(function(){
            $("#binhluan").load("view/binhluan/binhluanform.php", {idpro: <?=$id?>});
            });
          </script> 
          <div class="row" id="binhluan">
 
          </div>
          <div class="row mb">
            <div class="boxtitle">SẢN PHẨM CÙNG LOẠI</div>
            <div class="row boxcontent">
              <?php
              foreach ($sp_cung_loai as $sp_cung_loai) {
                extract($sp_cung_loai);
                $linksp="index.php?act=sanphamct&ma_sanpham=".$ma_sanpham;
                echo '<li><a href="'.$linksp.'">'.$ten_sanpham.'</a></li>';
              }
              ?>
            </div>
          </div>
        </div>
      </div>