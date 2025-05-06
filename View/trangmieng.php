<?php
include "../Model/sanpham.php"; // Import lớp sanpham

$sanpham = new sanpham(); // Tạo đối tượng lớp sanpham
$result = $sanpham->select_danhmuc("Trangmieng"); // Truy vấn sản phẩm theo danh mục "banhtrang"
?>
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
            <div class="col-3">
                <div style="margin-top: 50px;">
                    <div style="width: 275px;height: 40px; background-color: #681c1c; color: white; font-size: 25px; text-align: center; font-weight: bold;">Thực đơn</div>
                        <ul type="none" style="border:1px solid #301414; width: 275px; ">
                            <li style="margin-top: 10px;" >
                                <a href="banhtrang.html" style="color: #722c29; text-decoration: none; font-size: 23px; font-weight: 500; ">Bánh Tráng</a>
                            </li>
                            <li style="margin-top: 20px;">
                                <a href="salad.html" style="color: #722c29; text-decoration: none; font-size: 23px; font-weight: 500;">Salad - Rau</a>
                            </li>
                            <li style="margin-top: 20px;">
                                <a href="#" style="color: #722c29; text-decoration: none; font-size: 23px; font-weight: 500;">Món ăn nhẹ</a>
                            </li>
                            <li style="margin-top: 20px;">
                                <a href="#" style="color: #722c29; text-decoration: none; font-size: 23px; font-weight: 500;">Món gà - chim - lợn</a>
                            </li>
                            <li style="margin-top: 20px;">
                                <a href="#" style="color: #722c29; text-decoration: none; font-size: 23px; font-weight: 500;">Món cá</a>
                            </li>
                            <li style="margin-top: 20px;">
                                <a href="#" style="color: #722c29; text-decoration: none; font-size: 23px; font-weight: 500;">Đồ uống-Tráng miệng</a>
                            </li>
                        </ul>
                       
                </div>
            </div>
            <div class="col-9">
                <div style="color: #bd784e; font-size: 40px; font-weight: 500; text-align: center; margin-top: 50px; margin-bottom: 10px;">Đồ uống-Tráng miệng</div>
                <div class="container">
                    <div class="row">
                        <?php
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                if ($row['danhmuc'] == "Trangmieng") {
                                    echo '
                                    <div class="col-4" style="overflow: hidden; margin-bottom: 30px;">
                                        <div class="image-container2">
                                            <img src="../Upload/' . $row['hinhanh'] . '" alt="' . htmlspecialchars($row['tensp']) . '" class="zoom" style="width: 300px; height: 300px; object-fit: cover;">
                                        </div>
                                        <div class="product-info" style="text-align: center; margin-top: 5px; color: #a17a6d;">Đồ uống-Tráng miệng</div>
                                        <div class="product-info" style="color: #bd784e; font-size: 19px; font-weight: bolder; text-align: center;">' . htmlspecialchars($row['tensp']) . '</div>
                                        <div class="product-info" style="text-align: center; color: #33524b; font-size: 19px; font-weight: bolder;">' . number_format($row['gia'], 0, ',', '.') . ' ₫</div>
                                        <center class="product-buttons">
                                            <button style="width: 100px; height: 30px; background-color: #601d1b; color: white; font-size: 18px; font-weight: bold; border: none;">Đặt món</button>
                                            <button style="width: 100px; height: 30px; background-color: #33522d; color: white; font-size: 18px; font-weight: bold; border: none;">Chi tiết</button>
                                        </center>
                                    </div>';
                                }
                            }
                        } else {
                            echo '<div class="col-12" style="text-align: center; font-size: 20px; color: #722c29;">Không có sản phẩm nào trong danh mục này.</div>';
                        }
                        ?>
                    </div>
                </div>
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