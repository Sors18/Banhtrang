<!-- filepath: c:\xampp\htdocs\Project1\View\banhtrang.php -->
<?php
include "../Model/sanpham.php"; // Import lớp sanpham

$sanpham = new sanpham(); // Tạo đối tượng lớp sanpham
$result = $sanpham->select_danhmuc("Banhtrang"); // Truy vấn sản phẩm theo danh mục "banhtrang"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bánh Tráng</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <style>
        footer {
            background-color: #601d1b;
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <?php include('navbar.php'); ?>
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
                        <div style="width: 275px;height: 40px; background-color: #681c1c; color: white; font-size: 25px; text-align: center; font-weight: bold;">Xem gần đây</div>
                        <div>
                            <div class="row">
                                <div class="col-4">
                                    <img src="Media/banhtrangcuonboto.jpg" style="width: 70px; height: 70px; margin-top: 10px;">
                                </div>
                                <div class="col-8">
                                    <div style="margin-top: 5px; color: #722c29; font-size: 20px; font-weight: bold;">Bánh tráng cuốn Bò tơ</div>
                                    <div style="font-weight: bold;">165.000 ₫ – 170.000 ₫</div>
                                </div>
                            </div>
                            
                        </div>
                </div>
            </div>
            <div class="col-9">
                <div style="color: #bd784e; font-size: 40px; font-weight: 500; text-align: center; margin-top: 30px; margin-bottom: 10px;">Bánh Tráng</div>
                <div class="container">
                    <div class="row">
                        <?php
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                // Chỉ hiển thị nếu danh mục là "Bánh tráng"
                                if ($row['danhmuc'] == "Banhtrang") {
                                    echo '
                                    <div class="col-4" style="overflow: hidden; margin-bottom: 10px;">
                                        <div class="image-container2">
                                            <img src="../Upload/' . $row['hinhanh'] . '" alt="' . htmlspecialchars($row['tensp']) . '" class="zoom" style="width: 100%; height: 200px; object-fit: cover;">
                                        </div>
                                        <div style="text-align: center; margin-top: 10px; color: #a17a6d;">Bánh Tráng</div>
                                        <div style="color: #bd784e; font-size: 19px; font-weight: bolder; text-align: center;">' . htmlspecialchars($row['tensp']) . '</div>
                                        <div style="text-align: center; color: #33524b; font-size: 19px; font-weight: bolder;">' . number_format($row['gia'], 0, ',', '.') . ' ₫</div>
                                        <center>
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
    <!-- Footer -->
</footer>
</html>