<?php
    include('navbar.php'); 
    include("../Model/sanpham.php");
    include("../Model/cart.php");
    $cart = new cart();
    $product = new sanpham();

    $user_identify = $_SESSION['user_name'] ?? null;

    $sl_cart = $cart->sl_cart_user($user_identify);

    $total = 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="CSS/dinhdang.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        .cart-container {
            max-width: 1200px;
            margin: 50px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .cart-header {
            border-bottom: 2px solid #dee2e6;
            padding-bottom: 15px;
            margin-bottom: 20px;
        }
        .cart-item {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            border-bottom: 1px solid #dee2e6;
            padding-bottom: 15px;
        }
        .cart-item img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 5px;
        }
        .cart-item-details {
            flex: 1;
            margin-left: 20px;
        }
        .cart-item-details h5 {
            margin: 0;
            font-size: 18px;
        }
        .cart-item-details p {
            margin: 5px 0;
            color: #6c757d;
        }
        .cart-item-quantity {
            display: flex;
            align-items: center;
        }
        .cart-item-quantity button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            border-radius: 5px;
        }
        .cart-item-quantity input {
            width: 50px;
            text-align: center;
            margin: 0 10px;
            border: 1px solid #ced4da;
            border-radius: 5px;
        }
        .cart-item-price {
            font-size: 18px;
            font-weight: bold;
            color: #007bff;
        }
        .cart-summary {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .cart-summary h4 {
            margin-bottom: 20px;
        }
        .cart-summary p {
            display: flex;
            justify-content: space-between;
            margin: 10px 0;
        }
        .cart-summary button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .cart-summary button:hover {
            background-color: #0056b3;
        }
        .action-buttons {
            display: flex;
            gap: 10px;
        }
        .action-buttons button {
            border: none;
            background: none;
            cursor: pointer;
        }
        .action-buttons .update-btn {
            color: #007bff;
        }
        .action-buttons .delete-btn {
            color: #ff4d4d;
        }
    </style>
</head>
<body>
    <div class="container cart-container">
        <div class="row">
            <!-- Cart Items -->
            <div class="col-md-8">
                <div class="cart-header">
                    <h3>Giỏ hàng</h3>
                </div>
                <?php if ($sl_cart->num_rows > 0): ?>
                    <?php foreach($sl_cart as $row): 
                        $sl_pro = $product->select_id($row['id_sanpham']);
                        $sl_pro = $sl_pro->fetch_assoc();
                        $total += $sl_pro['gia'] * $row['Soluong'];
                    ?>
                        <div class="cart-item d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <img src="../Upload/<?php echo $sl_pro['hinhanh']; ?>" alt="Product Image" class="img-thumbnail" style="width: 100px; height: 100px; object-fit: cover;">
                                <div class="cart-item-details ms-3">
                                    <h5 class="mb-1"><?php echo $sl_pro['tensp']; ?></h5>
                                    <p class="mb-0 text-muted">Price: <?php echo number_format($sl_pro['gia'], 0, ',', '.'); ?> ₫</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <form action="../Controller/up_cart.php" method="POST" class="d-flex align-items-center me-3">
                                    <input type="hidden" name="id_cart" value="<?php echo $row['id_cart']; ?>">
                                    <input type="number" name="txtsl" class="form-control text-center" value="<?php echo htmlspecialchars($row['Soluong']); ?>" min="1" style="width: 60px;">
                                    <button type="submit" name="txtup" class="btn btn-primary btn-sm ms-2"><i class="fa-solid fa-rotate-left"></i></button>
                                </form>
                                <div class="cart-item-price me-3">
                                    <strong><?php echo number_format($sl_pro['gia'] * $row['Soluong'], 0, ',', '.'); ?> ₫</strong>
                                </div>
                                <form action="../Controller/del_cart.php" method="POST">
                                    <input type="hidden" name="id_cart" value="<?php echo $row['id_cart']; ?>">
                                    <button type="submit" name="txtdel" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                                </form>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <a href="#" class="btn btn-link mt-3">&larr; Tiếp tục mua hàng</a>
                <?php else: ?>
                    <p class="text-center text-muted">Giỏ hàng của bạn đang trống.</p>
                <?php endif; ?>
            </div>

            <!-- Cart Summary -->
            <div class="col-md-4">
                <div class="cart-summary">
                    <h4>Tổng tiền giỏ hàng</h4>
                    <p><span>Tiền sản phẩm:</span><span><?php echo number_format($total, 0, ',', '.'); ?> ₫</span></p>
                    <p><span>Tiền Shipping:</span><span><?php if($total==0){echo $total;} else{echo number_format(30000, 0, ',', '.'); } ?>₫</span></p>
                    <p><strong>Tổng:</strong><strong><?php  if($total==0){echo $total;} else{ echo number_format($total + 30000, 0, ',', '.');} ?> ₫</strong></p>
                   <form method="POST" >
                     <button class="btn btn-primary" type="submit" name="txtsub">Thanh toán</button>
                   </form>
                </div>
            </div>
        </div>
    </div>    
</body>
</html>
<?php 
if (isset($_POST['txtsub'])) {
    if ($total == 0) {
        echo "<script>alert('Đơn hàng trống');</script>";
    } else {
        echo "<script>window.location.href = 'thanhtoan.php';</script>";
    }
}
?>