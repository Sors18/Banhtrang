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
   <img src="Media/TK-ANH-WEB-08-1400x474.jpg" alt="">
   <h1 style="text-align: center; color: #601d1b; margin-bottom:30px; margin-top: 20px;">Đăng ký tư vấn</h1> 

   <div class="container">
    <div class="row">
    <div class="col-4">
      <div class="row">
        <div style="width: 300px; height: 250px; border-radius: 15px; background-color: #eacba5;">
          <center>
          <div style="width: 270px; height: 230px; border-radius: 15px; background-color: #bd784d; margin-top: 10px;">
              <center>
                <i class="fa-regular fa-envelope" style="color: white; font-size: 70px; margin-top: 40px;"></i> <br>
                <div style="color: white; font-weight: bold; font-size: 25px; margin-top: 20px;">
                  Email:
                </div>
                <div style="color: white; font-size: 18px; margin-top: 10px;" >
                  info.btthpc@gmail.com
                </div>
              </center>
          </div>
          </center>
        </div>
      </div>
      <div class="row" style="margin-top: 20px;">
        <div style="width: 300px; height: 250px; border-radius: 15px; background-color: #eacba5;">
          <center>
          <div style="width: 270px; height: 230px; border-radius: 15px; background-color: #bd784d; margin-top: 10px;">
              <center>
                <i class="fa-solid fa-phone-volume" style="color: white; font-size: 70px; margin-top: 40px;"></i> <br>
                <div style="color: white; font-weight: bold; font-size: 25px; margin-top: 20px;" >
                  Hotline:
                </div>
                <div style="color: white; font-size: 18px; margin-top: 10px;">
                  1900.63.65.69
                </div>
              </center>
          </div>
          </center>
        </div>
      </div>
    </div>
    <div class="col-8" >
      <div style="color:#c58861; width: 800px; height: 520px; background-color: #eacba5 ; border-radius: 30px;" >
        <form action="">
          
          <div class="row" style="margin-left: 10px;">
            <div class="col-6">
              <div style="margin-left: 15px; margin-top: 10px; margin-top: 50px;">Họ tên(*)</div>
              <input type="text" name="tentxt" placeholder="Họ tên(*)" style="width: 320px; height: 50px; border-radius: 50px; border: none; padding: 15px; ">
            </div>
            <div class="col-6">
              <div style="margin-left: 15px; margin-top: 50px;">Điện thoại di động(*)</div>
              <input type="text" name="dthtxt" placeholder="Điện thoại di động(*)" style="width: 325px; height: 50px; border-radius: 50px; border: none;padding: 15px;  ">
            </div>
          </div>  
          <div class="row" style="margin-left: 10px;">
            <div class="col-6">
              <div style="margin-left: 15px; margin-top: 30px;">Email</div>
              <input type="email"name="emailtxt" placeholder="Email" style="width: 320px; height: 50px; border-radius: 50px; border: none; padding: 15px; ">
            </div>
            <div class="col-6">
              <div style="margin-left: 15px; margin-top: 30px;">Vui lòng chọn nhà hàng(*)</div>
              <select name="CS" style="width: 320px; height: 50px; border-radius: 50px; border: none; padding-left: 15px; ">
              <option value="CS1">CS1: 42 Nguyên Hồng, Đống Đa</option>
              <option value="CS2">CS2: 104 Yết Kiêu, Hai Bà Trưng</option>
              <option value="CS3">CS3: 102 Trần Phú, Hà Đông</option>
              <option value="CS4">CS4: 100 Vũ Phạm Hàm, Cầu Giấy</option>
              <option value="CS5">CS5: 340 Bà Triệu, Hai Bà Trưng</option>
              <option value="CS6">CS6: 76 Nguyễn Chí Thanh, Đống Đa</option>
              </select>
            </div>
          </div>
          <textarea type="textarea" name="yeucautxt" placeholder="Lời nhắn yêu cầu đặt bàn"  style="width: 720px; height: 120px; border-radius: 20px; border: none; resize: horizontal; max-width: 720px; padding: 15px; margin-left: 20px; margin-top: 50px;"></textarea><br>
          <center>
            <button style="color: white; font-weight: bolder; border: none; background-color: #33522d; width:120px; height:50px; margin-top: 30px; border-radius: 15px;">GỬI LIÊN HỆ</button>
          </center>
        </div>
    </div>
  </div>
</div>

<div class="container" style="margin-top: 40px;">
  <div class="row">
    <div class="col-4">
    <div class="row">
      <div style="width: 300px; height: 250px; border-radius: 15px; background-color: #eacba5; margin-top: 130px;">
        <center>
        <div style="width: 270px; height: 230px; border-radius: 15px; background-color: #bd784d; margin-top: 10px;">
            <center>
              <i class="fa-solid fa-location-dot" style="color: white; font-size: 70px; margin-top: 40px;"></i> <br>
              <div style="color: white; font-weight: bold; font-size: 30px; margin-top: 30px;">
                Địa chỉ:
              </div>
            </center>
        </div>
        </center>
      </div>
    </div>
    </div>
    <div class="col-8">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7448.830927019922!2d105.809868!3d21.016056!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab6152287a37%3A0x7390c50fdab6a36!2zQmHMgW5oIFRyYcyBbmcgUGh1zIEgQ8awxqHMgG5nIEPGoSBz4bufIDE!5e0!3m2!1svi!2sus!4v1731082379614!5m2!1svi!2sus" width="800px" height="500px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
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
</html>