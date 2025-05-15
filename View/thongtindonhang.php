<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông Tin Đơn Hàng</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="CSS/dinhdang.css">
<style>
        .table-ttdh {
            width: 90%;
            margin: 30px auto;
            border-collapse: collapse;
            background-color: #FFF5D7;
            font-family: Arial, sans-serif;
            font-size: 14px;
            color: #333;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .table-ttdh th, .table-ttdh td {
            padding: 12px 15px;
            text-align: center;
            border: 1px solid #e0e0e0;
        }

        .table-ttdh th {
            background-color: #701c1c; /* Màu đỏ đậm */
            color: #FFF;
            font-weight: bold;
            text-transform: uppercase;
        }

        .table-ttdh tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .table-ttdh tr:hover {
            background-color: #ffe4e1;
            transition: background-color 0.3s ease;
        }

        .table-ttdh .total-row th {
            background-color: #701c1c; /* Màu đỏ đậm */
            color: #FFF;
            font-size: 16px;
            font-weight: bold;
        }

        .table-ttdh .total-row .tong {
            font-size: 16px;
            font-weight: bold;
            color: #701c1c; /* Màu đỏ đậm */
        }

        .btn-brown {
            background-color: #701c1c; /* Màu nâu */
            border-color: #8B4513;
            color: white;
        }
        .btn-brown:hover {
            background-color:rgb(139, 30, 30); /* Màu nâu đậm hơn khi hover */
            border-color: #5A2E0C;
            color:white;
        }
    </style>
</head>
<body>
    <?php
        include("navbar.php");
        include("../Model/order.php");

        $order = new order();
        $user_identify = $_SESSION['user_name'] ?? session_id();

        // Lấy thông tin đơn hàng của người dùng
        $order_inf = $order->order_infor_idkh($user_identify);
        
    ?>

    <div class="container mt-5">
        <h2 class="text-center mb-4">Thông Tin Đơn Hàng</h2>
        <table class="table table-bordered">
            <table class="table-ttdh">
                    <thead>
                        <tr>
                            <th>Họ và Tên</th>
                            <th>Địa Chỉ</th>
                            <th>Số Điện Thoại</th>
                            <th>Tổng Tiền</th>
                            <th>Thời Gian Đặt Hàng</th>
                            <th>Trạng Thái</th>
                            <th>Chi Tiết</th>
                        </tr>
                    </thead>
            <tbody>
                <?php if ($order_inf && $order_inf->num_rows > 0): ?>
                    <?php while ($row = $order_inf->fetch_assoc()): ?>
                        <?php 
                            // Tính tổng tiền cho từng đơn hàng
                            $tongTien = $order->tinhTongTienDonHang($row['id_donhang']); 
                        ?>
                        <tr>
                            <td><?php echo htmlspecialchars($row['hoten']); ?></td>
                            <td><?php echo htmlspecialchars($row['diachi']); ?></td>
                            <td><?php echo htmlspecialchars($row['sdt']); ?></td>
                            <td><?php echo number_format($tongTien, 0, ',', '.'); ?> ₫</td>
                            <td><?php echo htmlspecialchars($row['Time']); ?></td>
                            <td><?php echo htmlspecialchars($row['trangthai']); ?></td>
                            <td>
                                <a href="order_inf.php?id=<?php echo $row['id_donhang']; ?>" class="btn btn-brown btn-sm">
                                    Xem Chi Tiết
                                </a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="7" class="text-center">Không có đơn hàng nào.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

 
</body>
</html>