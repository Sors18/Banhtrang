<!-- filepath: c:\xampp\htdocs\Project1\Admin\ql_sp.php -->
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Quản Lý Sản Phẩm</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES -->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <style>
        .table img {
            border-radius: 8px;
            object-fit: cover;
        }
        body {
            font-family: 'Open Sans', sans-serif;
            background-color: #f9f9f9;
        }
        .table-ttdh {
            width: calc(100% - 260px); /* Chiều rộng bảng trừ đi chiều rộng sidebar */
            margin: 30px auto;
            margin-left: 240px; /* Đẩy bảng sang phải để vừa với sidebar */
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
    <?php include "navbar.php"; ?>
<div id="wrapper">
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <center><h2 class="text-center mb-4">Quản Lý Sản Phẩm</h2></center>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <?php
                                    include('../Model/sanpham.php');
                                    $model = new sanpham();
                                    $select = $model->select();
                                ?>
                                <table class="table-ttdh">
                                    <thead>
                                            <th>Danh mục</th>
                                            <th>Tên sản phẩm</th>
                                            <th>Giá</th>
                                            <th>Hình ảnh</th>
                                            <th>Mô tả</th>
                                            <th colspan="2" class="text-center">Hành động</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($select as $row) { ?>
                                        <tr>
                                            <td><?php echo htmlspecialchars($row['danhmuc']); ?></td>
                                            <td><?php echo htmlspecialchars($row['tensp']); ?></td>
                                            <td><?php echo number_format($row['gia'], 0, ',', '.'); ?> VNĐ</td>
                                            <td><img src="../Upload/<?php echo htmlspecialchars($row['hinhanh']); ?>" width="100px" height="100px"></td>
                                            <td><?php echo htmlspecialchars($row['mota']); ?></td>
                                            <td>
                                                <a href="../Controller/delete_sp.php?del=<?php echo $row['id_sanpham']; ?>" 
                                                   class="btn-action btn-delete"
                                                   onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này?');">
                                                   Xóa
                                                </a>
                                            </td>
                                            <td>
                                                <a href="update_sp.php?up=<?php echo $row['id_sanpham']; ?>" 
                                                   class="btn-action btn-update"
                                                   onclick="return confirm('Bạn có muốn sửa sản phẩm này?');">
                                                   Sửa
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
        </div>
    </div>
</div>

<script src="assets/js/jquery-1.10.2.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/jquery.metisMenu.js"></script>
<script src="assets/js/custom.js"></script>
</body>
</html>