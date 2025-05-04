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
  </div>
    <div class="container"> 
      <div class="row">
        <div class="col-6">
          <h2 style="color:#c58861; margin-top: 50px; font-weight: bold;">THÔNG TIN ĐẶT BÀN</h2>
          <p style="font-size: 20px; font-weight: 400;">( Vui lòng đặt bàn trước giờ dùng bữa ít nhất 1 tiếng, để đặt bàn nhanh nhất xin liên hệ Hotline:1900636569 ).</p>
          <form action="">
            <div style="margin-left: 15px; margin-top: 10px;">Họ tên(*)</div>
            <input type="text" name="tentxt" placeholder="Họ tên(*)" style="width: 650px; height: 40px; border-radius: 50px; border: none; padding: 15px; ">
            <div class="row">
              <div class="col-6">
                <div style="margin-left: 15px; margin-top: 10px;">Điện thoại di động(*)</div>
                <input type="text" name="dthtxt" placeholder="Điện thoại di động(*)" style="width: 320px; height: 40px; border-radius: 50px; border: none;padding: 15px;  ">
              </div>
              <div class="col-6">
                <div style="margin-left: 15px; margin-top: 10px;">Email</div>
                <input type="email"name="emailtxt" placeholder="Email" style="width: 320px; height: 40px; border-radius: 50px; border: none; padding: 15px; ">
              </div>
            </div>  
            <div style="margin-left: 15px; margin-top: 10px;">Vui lòng chọn nhà hàng(*)</div>
            <select name="CS" style="width: 650px; height: 40px; border-radius: 50px; border: none; padding-left: 15px; ">
              <option value="CS1">CS1: 42 Nguyên Hồng, Đống Đa</option>
              <option value="CS2">CS2: 104 Yết Kiêu, Hai Bà Trưng</option>
              <option value="CS3">CS3: 102 Trần Phú, Hà Đông</option>
              <option value="CS4">CS4: 100 Vũ Phạm Hàm, Cầu Giấy</option>
              <option value="CS5">CS5: 340 Bà Triệu, Hai Bà Trưng</option>
              <option value="CS6">CS6: 76 Nguyễn Chí Thanh, Đống Đa</option>
            </select>
            <div class="row">
              <div class="col-4">
                <div style="margin-left: 15px; margin-top: 10px;">Ngày đặt bàn(*)</div>
                <input type="date" name="lichdat" style="width: 216px; height: 40px; border-radius: 50px; border: none; padding-left: 15px;">
              </div>
              <div class="col-4">
                <div style="margin-left: 15px; margin-top: 10px;">Giờ(*)</div>
                <select name="gio" style="width: 216px; height: 40px; border-radius: 50px; border: none; padding-left: 15px;">
                  <option value="10h">10 Giờ</option>
                  <option value="11h">11 Giờ</option>
                  <option value="12h">12 Giờ</option>
                  <option value="17h">17 Giờ</option>
                  <option value="18h">18 Giờ</option>
                  <option value="19h">19 Giờ</option>
                  <option value="20h">20 Giờ</option>
                  <option value="21h">21 Giờ</option>
                </select>
              </div>
              <div class="col-4">
                <div style="margin-left: 15px; margin-top: 10px;">Phút(*)</div>
                <select name="phut" style="width: 216px; height: 40px; border-radius: 50px; border: none; padding-left: 15px;">
                  <option value="0p">00 Phút</option>
                  <option value="05p">05 Phút</option>
                  <option value="10p">10 Phút</option>
                  <option value="15p">15 Phút</option>
                  <option value="20p">20 Phút</option>
                  <option value="25p">25 Phút</option>
                  <option value="30p">30 Phút</option>
                  <option value="35p">35 Phút</option>
                  <option value="40p">40 Phút</option>
                  <option value="45p">45 Phút</option>
                  <option value="50p">50 Phút</option>
                  <option value="55p">55 Phút</option>
                </select>
              </div>
            </div>
          </form>
          <div style="margin-left: 15px; margin-top: 10px;">Số lượng khách(*)</div>
          <input type="text" name="soluongtxt" placeholder="Số lượng khách(*)" style="width: 650px; height: 40px; border-radius: 50px; border: none; padding: 15px;">
          <div style="margin-left: 15px; margin-top: 10px;">Yêu cầu thêm</div>
          <textarea type="textarea" name="yeucautxt" placeholder="Lời nhắn yêu cầu đặt bàn"  style="width: 650px; height: 120px; border-radius: 20px; border: none; resize: horizontal; max-width: 650px; padding: 15px;"></textarea>
          <center>
          <button style="color: white; font-weight: bolder; border: none; background-color: #601d1b; width:120px; height:40px; margin-top: 10px;">ĐẶT BÀN </button>
          </center>
        </div>    
        <div class="col-6"><img src="Media/datban.png" style="height: 500px; margin-top: 140px; margin-left: 50px;" ></div>
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