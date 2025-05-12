<?php
include "../Model/sanpham.php"; // Import lớp sanpham

$sanpham = new sanpham(); // Tạo đối tượng lớp sanpham
$result = $sanpham->select_danhmuc("Banhtrang"); // Truy vấn sản phẩm theo danh mục "Banhtrang"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bánh Tráng</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="CSS/dinhdang.css">
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
            <!-- Sidebar -->
            <div class="col-3">
                <div style="margin-top: 50px;">
                    <div style="width: 275px; height: 40px; background-color: #681c1c; color: white; font-size: 25px; text-align: center; font-weight: bold;">Thực đơn</div>
                    <ul type="none" style="border:1px solid #301414; width: 275px;">
                        <li style="margin-top: 10px;">
                            <a href="banhtrang.html" style="color: #722c29; text-decoration: none; font-size: 23px; font-weight: 500;">Bánh Tráng</a>
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
                            <a href="#" style="color: #722c29; text-decoration: none; font-size: 23px; font-weight: 500;">Đồ uống - Tráng miệng</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Main Content -->
            <div class="col-9">
                <div style="color: #bd784e; font-size: 40px; font-weight: 500; text-align: center; margin-top: 50px; margin-bottom: 10px;">Bánh Tráng</div>
                <div class="container">
                    <div class="row">
                        <?php
                        if ($result->num_rows > 0) {
                            $count = 0;
                            while ($row = $result->fetch_assoc()) {
                                $count++;
                        ?>
                        <div class="col-4" style="overflow: hidden; margin-bottom: 30px;">
                            <div class="image-container2">
                                <img src="../Upload/<?php echo $row['hinhanh']; ?>" alt="<?php echo htmlspecialchars($row['tensp']); ?>" class="zoom" style="width: 300px; height: 300px; object-fit: cover;">
                            </div>
                            <div class="product-info" style="text-align: center; margin-top: 5px; color: #a17a6d;">Bánh Tráng</div>
                            <div class="product-info" style="color: #bd784e; font-size: 19px; font-weight: bolder; text-align: center;"><?php echo htmlspecialchars($row['tensp']); ?></div>
                            <div class="product-info" style="text-align: center; color: #33524b; font-size: 19px; font-weight: bolder;"><?php echo number_format($row['gia'], 0, ',', '.'); ?> ₫</div>
                            <center class="product-buttons">
                                <button style="width: 100px; height: 30px; background-color: #601d1b; color: white; font-size: 18px; font-weight: bold; border: none;">Đặt món</button>
                                <a href="chitietsp.php?id=<?php echo $row['id_sanpham']; ?>#start_view" style="text-decoration: none;">
                                    <button style="width: 100px; height: 30px; background-color: #33522d; color: white; font-size: 18px; font-weight: bold; border: none;">Chi tiết</button>
                                </a>
                            </center>
                        </div>
                        <?php 
                                if ($count % 3 == 0) {
                                    echo '</div><div class="row mt-5">';
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
    <?php include('footer.php'); ?>
</body>
</html>