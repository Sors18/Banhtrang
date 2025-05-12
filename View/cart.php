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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="CSS/dinhdang.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffffff;
            margin: 0;
            padding: 0;
        }
        .container1 {
            display: flex;
            justify-content: space-between;
            padding: 20px;
            max-width: 1200px;
            margin: 50px auto;
            background-color: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .cart-items, .cart-summary {
            padding: 20px;
        }
        .cart-items {
            flex: 2;
        }
        .cart-summary {
            flex: 1;
            background-color: #f1f1f1;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .cart-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        .cart-header h2 {
            margin: 0;
        }
        .cart-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            border-bottom: 1px solid #ddd;
            padding-bottom: 10px;
        }
        .cart-item img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 5px;
        }
        .cart-item-details {
            flex: 1;
            margin-left: 20px;
        }
        .cart-item-details h4 {
            margin: 0;
            font-size: 16px;
        }
        .cart-item-details p {
            margin: 5px 0;
            font-size: 14px;
            color: #555;
        }
        .cart-item-quantity {
            display: flex;
            align-items: center;
        }
        .cart-item-quantity button {
            background-color: #ddd;
            color: #333;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            border-radius: 5px;
        }
        .cart-item-quantity input {
            width: 40px;
            text-align: center;
            margin: 0 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #fff;
            color: #333;
        }
        .cart-item-price {
            font-size: 18px;
            font-weight: bold;
            text-align: right;
            color: #007bff;
            width: 100px;
        }
        .cart-item-remove {
            background: none;
            border: none;
            color: #ff4d4d;
            cursor: pointer;
            font-size: 16px;
        }
        .cart-summary h3 {
            margin-bottom: 20px;
            font-size: 18px;
            color: #333;
        }
        .cart-summary p {
            display: flex;
            justify-content: space-between;
            margin: 10px 0;
            font-size: 16px;
            color: #555;
        }
        .cart-summary button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 20px;
        }
        .cart-summary button:hover {
            background-color: #0056b3;
        }
        .back-to-shop {
            display: inline-block;
            margin-top: 20px;
            color: #007bff;
            text-decoration: none;
        }
        .back-to-shop:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="container1">
        <!-- Cart Items -->
        <div class="cart-items">
            <div class="cart-header">
                <h2>Cart - 2 items</h2>
            </div>
            <?php
            foreach($sl_cart as $row){
                $sl_pro = $product->select_id($row['id_sanpham']);
                $sl_pro = $sl_pro->fetch_assoc();
            ?>
            <div class="cart-item"> 
                <img src="../Upload/<?php echo $sl_pro['hinhanh'];?>" alt="Product Image">
                <div class="cart-item-details">
                    <h4><?php echo $sl_pro['tensp'] ?></h4>
                </div>
                <div class="cart-item-quantity">
                    <button class="quantity-decrease" data-id="<?php echo $row['id_sanpham']; ?>">-</button>
                    <input type="number" class="quantity-input" data-id="<?php echo $row['id_sanpham']; ?>" value="<?php echo htmlspecialchars($row['Soluong']); ?>" min="1">
                    <button class="quantity-increase" data-id="<?php echo $row['id_sanpham']; ?>">+</button>
                </div>
                <div class="cart-item-price"><?php echo $sl_pro['gia'] ?></div>
                <button class="cart-item-remove"><i class="fas fa-trash"></i></button>
            </div>
            <?php
                }
            ?>
            
            <a href="#" class="back-to-shop">&larr; Back to shop</a>
        </div>

        <!-- Cart Summary -->
        <div class="cart-summary">
            <h3>Summary</h3>
            <p><span>Products</span> <span>$35.98</span></p>
            <p><span>Shipping</span> <span>Gratis</span></p>
            <p><span>Total amount (including VAT)</span> <span>$35.98</span></p>
            <button>GO TO CHECKOUT</button>
        </div>
    </div>
    <script>
    document.addEventListener('DOMContentLoaded', () => {
        // Xử lý tăng số lượng
        document.querySelectorAll('.quantity-increase').forEach(button => {
            button.addEventListener('click', () => {
                const productId = button.getAttribute('data-id');
                const input = document.querySelector(`.quantity-input[data-id="${productId}"]`);
                let quantity = parseInt(input.value);
                quantity++;
                input.value = quantity;

                // Gửi yêu cầu cập nhật số lượng qua AJAX
                updateQuantity(productId, quantity);
            });
        });

        // Xử lý giảm số lượng
        document.querySelectorAll('.quantity-decrease').forEach(button => {
            button.addEventListener('click', () => {
                const productId = button.getAttribute('data-id');
                const input = document.querySelector(`.quantity-input[data-id="${productId}"]`);
                let quantity = parseInt(input.value);
                if (quantity > 1) {
                    quantity--;
                    input.value = quantity;

                    // Gửi yêu cầu cập nhật số lượng qua AJAX
                    updateQuantity(productId, quantity);
                }
            });
        });

        // Xử lý thay đổi số lượng trực tiếp
        document.querySelectorAll('.quantity-input').forEach(input => {
            input.addEventListener('change', () => {
                const productId = input.getAttribute('data-id');
                let quantity = parseInt(input.value);
                if (quantity < 1) {
                    quantity = 1;
                    input.value = quantity;
                }

                // Gửi yêu cầu cập nhật số lượng qua AJAX
                updateQuantity(productId, quantity);
            });
        });

        // Hàm gửi yêu cầu cập nhật số lượng
        function updateQuantity(productId, quantity) {
            fetch('update_cart.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ productId, quantity }),
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    console.log('Cập nhật số lượng thành công');
                    // Cập nhật lại tổng giá nếu cần
                    location.reload();
                } else {
                    console.error('Cập nhật số lượng thất bại');
                }
            })
            .catch(error => {
                console.error('Lỗi khi gửi yêu cầu:', error);
            });
        }
    });
    </script>
</body>
</html>