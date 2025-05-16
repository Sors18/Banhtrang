<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="CSS/dinhdang.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <style>
    footer{
        background-color: #601d1b;
          margin-top: 50px;
    }
  </style>
</head>
<body>

  <?php include('navbar.php'); ?>         
    <div class="slideshow-container">

      <!-- Full-width images with number and caption text -->
      <div class="mySlides fade">
        <img src="Media/banner1.png" style="width:100%">
      </div>
    
      <div class="mySlides fade">
        <img src="Media/banner2.jpg" style="width:100%">
      </div>
    
      <div class="mySlides fade">
        <img src="Media/banner3.jpg" style="width:100%">
      </div>
    
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>

      <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
      </div>
    </div>
    <br> 
    
    <iframe width="1349" height="780" src="https://www.youtube.com/embed/RVscyu-2ivc" title="Khai trương 01/07- Ưu đãi 17% Deal Vàng Mừng Tuần Lễ Khai Trương" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>


  <div style="background-color: #2b4425; color: white; font-size: 30px; font-weight: bold; width: 270px; height: 70px; text-align: center; margin-left: 8.5%; padding-top: 10px; margin-top: 2%; margin-bottom: 2%; border-radius: 20px;">Món mới</div>
  <div class="container">
    <div class="row justify-content-center">
        <?php
        include_once("../Model/sanpham.php");
        $sp = new sanpham();
        $result = $sp->select();
        $count = 0;
        while ($row = mysqli_fetch_assoc($result)) {
            if ($count >= 4) break;
        ?>
            <div class="col-md-3 mb-4 d-flex flex-column align-items-center">
                <a href="chitietsp.php?id=<?php echo $row['id_sanpham']; ?>#start_view" style="text-decoration: none;">
                    <img src="../Upload/<?php echo htmlspecialchars($row['hinhanh']); ?>" 
                         alt="<?php echo htmlspecialchars($row['tensp']); ?>" 
                         style="height: 250px; width: 250px; object-fit: cover; border-radius: 20px;">
                    <div style="color: #bd784e; font-weight: bold; text-align: center; margin-top: 10px; font-size: 20px;">
                        <?php echo htmlspecialchars($row['tensp']); ?>
                    </div>
                </a>
            </div>
        <?php 
            $count++;
        } 
        ?>
    </div>
</div>
  <div>
    <div style="border: none; border-top: 30px solid #601d1b; width: 100%; margin-top: 100px; margin-bottom: 10px;"></div>
    <div style="border: none; border-top: 10px solid #2b4425; background-color: #2b4425; width: 100%;"></div>
  </div>
  <div style="background-color: #601d1b; color: #fefddb; font-weight: bold; height: 50px; width: 200px; text-align: center; margin: 20px auto; padding-top: 10px; border-radius: 10px; font-size: 20px;">
    Thực đơn
  </div>
  <div class="container" style="margin-top: 30px;">
    <div class="row">
        <div class="col-4">
            <a href="banhtrang.php" style="text-decoration: none;">
                <img src="Media/Group-7-1.png" style="width: 360px; height: 600px;">
                <div style="color: #bd784e; text-align: center; font-size: 28px; font-weight: bold; text-transform: uppercase;">
                    Bánh tráng
                </div>
            </a>
        </div>
        <div class="col-8">
            <div class="row">
                <div class="col-6">
                    <a href="salad.php" style="text-decoration: none;">
                        <img src="Media/Group-8-1.png" style="width: 360px; height: 250px;">
                        <div style="color: #bd784e; text-align: center; font-size: 28px; font-weight: bold; text-transform: uppercase; margin-top: 10px;">
                            Rau – Salad
                        </div>
                    </a>
                </div>
                <div class="col-6">
                    <a href="gachimlon.php" style="text-decoration: none;">
                        <img src="Media/Group-10-1.png" style="width: 360px; height: 250px;">
                        <div style="color: #bd784e; text-align: center; font-size: 28px; font-weight: bold; text-transform: uppercase; margin-top: 10px;">
                            Món gà
                        </div>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <a href="monca.php" style="text-decoration: none;">
                        <img src="Media/monca-1.png" style="width: 360px; height: 250px; margin-top: 40px;">
                        <div style="color: #bd784e; text-align: center; font-size: 28px; font-weight: bold; text-transform: uppercase; margin-top: 10px;">
                            Món cá
                        </div>
                    </a>
                </div>
                <div class="col-6">
                    <a href="monannhe.php" style="text-decoration: none;">
                        <img src="Media/monnhe1.jpg" style="width: 360px; height: 250px; border-radius: 15px; margin-top: 40px;">
                        <div style="color: #bd784e; text-align: center; font-size: 28px; font-weight: bold; text-transform: uppercase; margin-top: 10px;">
                            Món ăn nhẹ
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="margin-top: 30px;">
        <div class="col-4">
            <a href="trangmieng.php" style="text-decoration: none;">
                <img src="Media/Group-14-1.png" style="width: 350px; height: 350px;">
            </a>
        </div>
        <div class="col-4">
            <a href="trangmieng.php" style="text-decoration: none;">
                <img src="Media/Group-15-1.png" style="width: 350px; height: 350px;">
            </a>
        </div>
        <div class="col-4">
            <a href="trangmieng.php" style="text-decoration: none;">
                <img src="Media/Group-16-1.png" style="width: 350px; height: 350px;">
            </a>
        </div>
    </div>
    <div style="color: #bd784e; text-align: center; font-size: 28px; font-weight: bold; text-transform: uppercase;">
        Đồ uống – Tráng miệng
    </div>
  </div>


  
</body>
<footer>
  <div class="container">
    <div class="row">
      <div class="col-4">
        <div style="color:#fefddb; font-size: 25px; font-weight: bold; margin-top: 50px;">HỖ TRỢ KHÁCH HÀNG</div>
        <div style="color:#fefddb; font-size: 15px; margin-top: 10px;">
          1900.63.65.69 <br>
          T2 - CN: 10:30 - 22:00
        </div>
        <div style="color:white; font-size: 17px; margin-top: 10px;">Chính sách thanh toán hoàn tiền</div>
        <div style="color:white; font-size: 17px; margin-top: 10px;">Chính sách xử lý khiếu nại</div>
        <div style="color:white; font-size: 17px; margin-top: 10px;">Chính sách vận chuyển</div>
        <div style="color:white; font-size: 17px; margin-top: 10px;">Chính sách bảo mật</div>
      </div>
      <div class="col-4">
        <div style="color:white; font-size: 25px; font-weight: bold; margin-top: 50px;">Nhà hàng Bánh tráng Phú Cường</div>
        <div class="row">
          <div class="col-6">
            <div style="color:#fefddb; font-size: 17px; margin-top: 10px;">Giới thiệu</div>
            <div style="color:#fefddb; font-size: 17px; margin-top: 10px;">Menu</div>
            <div style="color:#fefddb; font-size: 17px; margin-top: 10px;">Đặt bàn</div>
          </div>
          <div class="col-6">
            <div style="color:#fefddb; font-size: 17px; margin-top: 10px;">Thông tin khuyến mãi</div>
            <div style="color:#fefddb; font-size: 17px; margin-top: 10px;">Tuyển dụng</div>
            <div style="color:#fefddb; font-size: 17px; margin-top: 10px;">Liên hệ</div>
          </div>
        </div>  
      </div>
      <div class="col-4">
        <div style="color:#fefddb; font-size: 25px; font-weight: bold; margin-top: 50px;">MẠNG XÃ HỘI</div>
        <img src="Media/nhung.png" style="margin-bottom: 10px;">
        <i class="fa-brands fa-facebook fa-2x" style="color:white; margin-right: 20px; margin-left: 70px;"></i>
        <i class="fa-solid fa-envelope fa-2x" style="color:white;  margin-right: 20px;"></i>
        <i class="fa-solid fa-phone fa-2x" style="color:white;  margin-right: 20px; margin-right: 20px;"></i>
        <i class="fa-brands fa-youtube fa-2x" style="color:white;  margin-right: 20px;"></i>
      </div>
    </div>
    <div class="row">
      <div class="col-4">
        <div style="color:#fefddb; font-size: 25px; font-weight: bold; margin-top: 50px;">CƠ SỞ 1:</div>
        <div style="color:#fefddb; font-size: 17px; margin-top: 10px;">
          * 42 Nguyên Hồng - Láng Hạ - Đống Đa - HN <br>
          * 024 3773 9846 - 09 3223 2299
        </div>
        <div style="color:#fefddb; font-size: 25px; font-weight: bold; margin-top: 50px;">CƠ SỞ 2:</div>
        <div style="color:#fefddb; font-size: 17px; margin-top: 10px; ">
          * 104 Yết Kiêu - Nguyễn Du - Hai Bà Trưng - HN <br>
          * 024 6277 8877 - 092 667 6996
        </div>
      </div>
      <div class="col-4">
        <div style="color:#fefddb; font-size: 25px; font-weight: bold; margin-top: 50px;">CƠ SỞ 3:</div>
        <div style="color:#fefddb; font-size: 17px; margin-top: 10px; ">
          * Tầng 1 - Tòa nhà Hồ Gươm Plaza - 102 Trần Phú (mặt đường Vũ Trọng Khánh) - Hà Đông - HN <br>
          * 024 2244 6060 - 09 3344 6060
        </div>
        <div style="color:#fefddb; font-size: 25px; font-weight: bold; margin-top: 50px;">CƠ SỞ 4:</div>
        <div style="color:#fefddb; font-size: 17px; margin-top: 10px; ">
          * 100 Vũ Phạm Hàm - Cầu Giấy - HN <br>
          * 024 2266 6060 - 08 2266 6060
        </div>
      </div>
      <div class="col-4">
        <div style="color:#fefddb; font-size: 25px; font-weight: bold; margin-top: 50px;">CƠ SỞ 5:</div>
        <div style="color:#fefddb; font-size: 17px; margin-top: 10px;  ">
          * 340 Bà Triệu - Hai Bà Trưng - HN <br>
          * 024 3333 5533 - 0373 340 340
        </div>
        <div style="color:#fefddb; font-size: 25px; font-weight: bold; margin-top: 50px;">CƠ SỞ 6:</div>
        <div style="color:#fefddb; font-size: 17px; margin-top: 10px;  ">
          * 76 Nguyễn Chí Thanh - Đống Đa - HN <br>
          * 024 6288 6060 - 0901 01 7676
        </div>
      </div>
    </div>  
  </div>
</footer>
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
</html>