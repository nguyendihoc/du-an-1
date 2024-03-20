<!-- dây là trang san pham -->
<div class="khungaddm1">
            <div class="boxtitle">SẢN PHẨM <strong><?=$ten_danhmuc?></strong></div> 
            <div class="boxcontent">
              <?php
              $i=0;
              foreach ($dssp as $sp) {
                extract($sp);
                $linksp="index.php?act=sanphamct&ma_sanpham=".$ma_sanpham;
                $hinh=$img_path.$hinh;
                if(($i==2)||($i==5)||($i==8)||($i==11)){
                    $mr="";
                }else{
                    $mr="mr";
                }
                echo '<div class="boxsp '.$mr.'">
                <div class="row img"><a href="'.$linksp.'"><img src="'.$hinh.'" alt="" /></a></div>
                <a href="'.$linksp.'">'.$ten_sanpham.'</a>
              </div>';
              $i+=1;
            }
               ?>
            </div>
      </div>
