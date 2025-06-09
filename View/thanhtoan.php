<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanh Toán</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="CSS/dinhdang.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
   <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        .checkout-container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .checkout-header {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-control {
            margin-bottom: 15px;
        }
        .btn-primary {
            width: 100%;
        }
        .total-container {
            margin-top: 20px;
            padding: 15px;
            background-color: #f1f1f1;
            border-radius: 5px;
            font-size: 18px;
            font-weight: bold;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container checkout-container">
        <div class="checkout-header">
            <h2>Thông Tin Thanh Toán</h2>
        </div>
        <form action="../Controller/dathang.php" method="POST">
            <div class="mb-3">
                <label for="fullname" class="form-label">Họ và Tên</label>
                <input type="text" class="form-control" name="txthoten" name="fullname" placeholder="Nhập họ và tên" required>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Địa Chỉ</label>
                <input type="text" class="form-control" name="txtdiachi" name="address" placeholder="Nhập địa chỉ" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Số Điện Thoại</label>
                <input type="tel" class="form-control" name="txtsdt" name="phone" placeholder="Nhập số điện thoại" required>
            </div>
             <div class="total-container">
                Tổng tiền: 
                <?php 
                    include("../Model/sanpham.php");
                    include("../Model/cart.php");
                    session_start();
                    $cart = new cart();
                    $product = new sanpham();

                    // Lấy thông tin người dùng
                    $user_identify = $_SESSION['user_name'] ?? session_id();
                    // Lấy danh sách sản phẩm trong giỏ hàng
                    $sl_cart = $cart->sl_cart_user($user_identify);
                    $total = 0;

                    // Tính tổng tiền
                    if ($sl_cart && $sl_cart->num_rows > 0) {
                        while ($row = $sl_cart->fetch_assoc()) {
                            $sl_pro = $product->select_id($row['id_sanpham']);
                            if ($sl_pro && $sl_pro->num_rows > 0) {
                                $sl_pro = $sl_pro->fetch_assoc();
                                $total += $sl_pro['gia'] * $row['Soluong'];
                            }
                        }
                    }

                    // Hiển thị tổng tiền
                    echo number_format($total, 0, ',', '.') . " ₫"; 
                ?>
            </div>
            <button type="submit" class="btn btn-primary mt-3" name="txtsub">Thanh Toán</button>
        </form>
    </div>
</body>
</html>