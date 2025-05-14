<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi Tiết Đơn Hàng</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
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
    </style>
</head>
<body>
    <?php
        include("../Model/order.php");
        $id = $_GET['id'];
        $order = new order();
        $data = $order->chitietdonhang($id);
    ?>
    <table class="table-ttdh">
        <thead>
            <tr>
                <th>Hình Ảnh</th>
                <th>Tên Sản Phẩm</th>
                <th>Đơn Giá</th>
                <th>Số Lượng</th>
                <th>Thành Tiền</th>
                <th>Địa Chỉ</th>
                <th>Số Điện Thoại</th>
                <th>Thời Gian Đặt Hàng</th>
            </tr>
        </thead>
        <?php
        $tong = 0;
        foreach ($data as $row) { 
            $thanhtien = $row['gia'] * $row['Soluong'];
            $tong += $thanhtien;
        ?>
            <tr>
                <td><img src="../Upload/<?php echo $row['hinhanh']; ?>" width="80"></td>
                <td><?php echo $row['tensp']; ?></td>
                <td>
                    <?php 
                        echo number_format($row['gia'], 0, ',', '.') ."₫";

                    ?> 
            
            
                </td>
                <td><?php echo $row['Soluong']; ?></td>
                <td>
                    <?php 
                    
                      echo number_format($thanhtien, 0, ',', '.') ."₫";
                
                    ?> 
                </td>
                <td><?php echo $row['diachi']; ?></td>
                <td><?php echo $row['sdt']; ?></td>
                <td><?php echo $row['Time']; ?></td>
            </tr>
        <?php } ?>
    </tbody>
        <tfoot>
            <tr class="total-row">
                <th colspan="4">Tổng Tiền:</th>
                <td colspan="1" class="tong"><?php echo number_format($tong, 0, ',', '.'); ?> ₫ </td>
                <td colspan="3"><a class="btn btn-danger" href="ql_donhang.php">Quay Lại</a></td>
            </tr>
        </tfoot>
    </table>
</body>
</html>