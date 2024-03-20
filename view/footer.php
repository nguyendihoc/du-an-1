<!-- Site footer -->
<footer class="footer">
          <div class="column">
              <p>"Đặt sự hài lòng của khách hàng là ưu tiên số một trong mọi suy nghĩ và hành động của mình" là tâm sự mỗi lần trải nghiệm dịch vụ tại FAUTGET! Chúng tôi luôn cống hiến tất cả trong từng sản phẩm để mang đến cho bạn những trải nghiệm tuyệt vời nhất!</p>
              <div class="contact-icons">
                  <a href="#"><i class="fa-brands fa-facebook"></i></a>
                  <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                  <a href="#"><i class="fa-brands fa-instagram"></i></a>
                  <a href="#"><i class="fa-brands fa-tiktok"></i></a>
                  <a href=""><i class="fa-brands fa-linkedin"></i></a>
              </div>
          </div>
          <div class="column">
              <p><img height="55" src="../image/logo.png" alt=""></p>
              <ul>
                  <li><a href="#">Giới thiệu</a></li>
                  <li><a href="#">Liên hệ</a></li>
                  <!-- Add other links here -->
              </ul>
          </div>
          <div class="column">
              <h3>HỖ TRỢ KHÁCH HÀNG</h3>
              <ul>
                  <li><a href="#">Hướng dẫn chọn size</a></li>
                  <li><a href="#">Chính sách Khách hàng thân thiết</a></li>
                  <!-- Add other support links here -->
              </ul>
          </div>
          
          <div class="column">
              <h3>CÔNG TY THỜI TRANG FAUTGET</h3>
              <p>Địa chỉ: Xuân Phương, Nam Từ Liêm, Hà Nội</p>
              <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.5580936830925!2d105.7303572750815!3d21.05036068060443!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31345458ee3d67ef%3A0x57dea4066941842!2zTmcuIDgwIMSQLiBYdcOibiBQaMawxqFuZywgUGjGsMahbmcgQ2FuaCwgTmFtIFThu6sgTGnDqm0sIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1710686116778!5m2!1svi!2s" width="400" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
              
              <!-- Add other contact information and payment method icons here -->
          </div>
          <div class="column">
              <h3>        </h3>
              <p>Thắc mắc đơn hàng: 0985 125 849. </p>
              <p>Email: nguyenttph455116@fpt.edu.com</p>
              <!-- Add other contact information and payment method icons here -->
          </div>
          <hr class="hr">
          <div class="copyright">
              © 2024 CÔNG TY CỔ PHẦN THỜI TRANG FAUTGET. All rights reserved.
          </div>
      </footer>
                
    </div>
  </body>
</html>
<!-- js cho slideshow -->
<script>
        let slideIndex = 0;
    showSlides();

    function showSlides() {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
    slides[slideIndex-1].style.display = "block";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
    </script>
