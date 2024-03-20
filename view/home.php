
<div class="#">
    <div class="#">
        <div class="row">
            <div class="khungbanner" alt="banner">
                <!-- Slideshow container -->
                <div class="slideshow-container">
                    <!-- Full-width images with number and caption text -->
                    <div class="mySlides fade">
                        <div class="numbertext">1 / 3</div>
                        <img src="images/banner1.jpg" style="width:100%">
                        <div class="text">Đồ Luxury</div>
                    </div>
                    <div class="mySlides fade">
                        <div class="numbertext">2 / 3</div>
                        <img src="images/banner2.jpg" style="width:100%">
                        <div class="text">Đồ tồi</div>
                    </div>
                    <div class="mySlides fade">
                        <div class="numbertext">3 / 3</div>
                        <img src="images/banner3.jpg" style="width:100%">
                        <div class="text">Đồ đểu</div>
                    </div>
                    <!-- Next and previous buttons -->
                    
                </div>
                
            </div>
        </div>
    </div>
</div>

<!-- phần thân -->
<div class="container">
    <h3>Sản Phẩm Mới</h3>
    <div class="product-grid">
        <?php 
        $i=0;
        $spnew = loadall_sanpham_home();
        foreach ($spnew as $sp) {
            extract($sp);
            $linksp="index.php?act=sanphamct&ma_sanpham=".$ma_sanpham;
            $hinh=$img_path.$hinh;
            
            echo '<div class="boxsp">
                <div class="row img">
                    <a href="'.$linksp.'"><img src="'.$hinh.'" alt="" /></a>
                </div> 
                <a href="'.$linksp.'" class="tensanpham">'.$ten_sanpham.'</a>
                <div class="row btnaddtocart">
                    <form action="index.php?act=addtocart" method="post">
                        <input type="hidden" name="ma_sanpham" value="'.$ma_sanpham.'">
                        <input type="hidden" name="ten_sanpham" value="'.$ten_sanpham.'">
                        <input type="hidden" name="hinh" value="'.$hinh.'">
                        
                        <center><input type="submit" name="addtocart" value="Add to cart"></center>
                    </form>
                </div>
            </div>';
            $i+=1;
        }
        ?>
    </div>
</div>
