<!-- filepath: c:\xampp\htdocs\Project1\Admin\ql_donhang.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý Đơn Hàng</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            background-color: #f9f9f9;
        }
        .table-ttdh {
            width: calc(100% - 260px); /* Chiều rộng bảng trừ đi chiều rộng sidebar */
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

        .btn-brown {
        background-color: #8B4513; /* Màu nâu */
        border-color: #8B4513;
        color: white;
        }
        .btn-brown:hover {
            background-color: #5A2E0C; /* Màu nâu đậm hơn khi hover */
            border-color: #5A2E0C;
            color: white;
        }

        .sidebar {
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            background-color: #f4f4f4;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        }

        .content {
            margin-left: 250px; /* Đẩy nội dung sang phải để vừa với sidebar */
            padding: 20px;
        }
    </style>
</head>
<body>
<div class="sidebar">
    <!-- Sidebar content -->
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link" href="#">Sản phẩm</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Khách hàng</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Đơn hàng</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Doanh thu</a>
        </li>
    </ul>
</div>
<div class="content">
    <div id="wrapper">
        <!-- NAV TOP -->
        <!-- NAV SIDE -->
        <?php include("navbar.php"); ?>
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <h2 class="text-center mb-4">Quản Lý Đơn Hàng</h2>
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
                            <?php 
                                include("../Model/order.php");
                                $model = new order();
                                $orders = $model->sl_order();
                                foreach ($orders as $row) {
                                    $tongTien = $model->tinhTongTienDonHang($row['id_donhang']);
                            ?>
                            <tr>
                                <td><?php echo htmlspecialchars($row['hoten']); ?></td>
                                <td><?php echo htmlspecialchars($row['diachi']); ?></td>
                                <td><?php echo htmlspecialchars($row['sdt']); ?></td>
                                <td><?php echo number_format($tongTien, 0, ',', '.'); ?> ₫</td>
                                <td><?php echo htmlspecialchars($row['Time']); ?></td>
                                <td>
                                    <span class="badge 
                                        <?php 
                                            if ($row['trangthai'] == 'Chờ xác nhận') echo 'bg-warning';
                                            else if ($row['trangthai'] == 'Đang vận chuyển') echo 'bg-primary';
                                            else echo 'bg-success';
                                        ?>">
                                        <?php echo htmlspecialchars($row['trangthai']); ?>
                                    </span>
                                </td>
                                <td>
                                    <a href="../Admin/order_inf.php?id=<?php echo $row['id_donhang']; ?>" style="display: inline-block; padding: 8px 12px; background-color: #701c1c; color: white; text-decoration: none; border-radius: 4px; font-size: 14px; text-align: center;">
                                        Xem Chi Tiết
                                    </a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>