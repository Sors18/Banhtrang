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
        .table {
            margin-top: 20px;
            background-color: #FFF5D7;
        }
        .table thead {
            background-color: #701c1c;
            color: #fff;
        }
        .table tbody tr:hover {
            background-color: #ffe4e1;
            transition: background-color 0.3s ease;
        }
        .btn-info {
            background-color: #d2a679; /* Màu nâu nhạt */
            border-color: #d2a679;
            color: white;
        }
        .btn-info:hover {
            background-color: #b38b6d; /* Màu nâu nhạt đậm hơn khi hover */
            border-color: #b38b6d;
            color: white;
        }
        h2 {
            color: #701c1c;
        }
    </style>
</head>
<body>
<div id="wrapper">
    <!-- NAV TOP -->
    <!-- NAV SIDE -->
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <h2 class="text-center mb-4">Quản Lý Đơn Hàng</h2>
                <table class="table table-striped table-bordered table-hover text-center">
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
                                <a href="../Admin/order_inf.php?id=<?php echo $row['id_donhang']; ?>" class="btn btn-info btn-sm">
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
</body>
</html>