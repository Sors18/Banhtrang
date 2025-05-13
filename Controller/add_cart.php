<?php
session_start();
include("../Model/cart.php");

// Kiểm tra session
if (!isset($_SESSION['user_name'])) {
    echo "<script>
        alert('Bạn cần đăng nhập để thêm sản phẩm vào giỏ hàng!');
        window.location.href='../View/login.php';
    </script>";
    exit();
}

if (isset($_POST['txtsub'])) {
    $user_id = $_SESSION['user_name'];
    $product_id = $_POST['id_pro'] ?? null;
    $quantity = $_POST['txtsl'] ?? 1;

    if ($product_id && $quantity > 0) {
        $cart = new cart();

        // Kiểm tra sản phẩm đã tồn tại trong giỏ hàng chưa
        $existing_product = $cart->sl_cart($user_id, $product_id);

        if ($existing_product->num_rows == 0) {
            // Thêm sản phẩm mới vào giỏ hàng
            $result = $cart->add_cart($user_id, $product_id, $quantity);
        } else {
            // Cập nhật số lượng sản phẩm trong giỏ hàng
            $result = $cart->update_cart($user_id, $product_id, $quantity);
        }

        if ($result) {
            echo "<script>
                alert('Thêm sản phẩm vào giỏ hàng thành công!');
                window.location.href='../View/cart.php';
            </script>";
        } else {
            echo "<script>
                alert('Thêm sản phẩm vào giỏ hàng thất bại!');
                window.location.href='../View/banhtrang.php';
            </script>";
        }
    } else {
        echo "<script>
            alert('Dữ liệu không hợp lệ!');
            window.location.href='../View/banhtrang.php';
        </script>";
    }
} else {
    // Chuyển hướng nếu truy cập không hợp lệ
    header("Location: ../View/banhtrang.php");
    exit();
}
?>