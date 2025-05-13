<?php
include("../Model/cart.php");
session_start();

if (isset($_POST['txtup'])) {
    $user_id = $_SESSION['user_name'] ?? null;
    $cart_id = $_POST['id_cart'] ?? null;
    $quantity = $_POST['txtsl'] ?? null;
    if ($user_id && $cart_id && $quantity) {
        $cart = new cart();
        $result = $cart->capnhatgiohang($user_id, $cart_id, $quantity);
    
        if ($result) {
            // Show success alert and redirect
            echo "<script>
                alert('Cập nhật giỏ hàng thành công!');
                window.location.href = '../View/cart.php';
            </script>";
        } else {
            // Show error alert and redirect
            echo "<script>
                alert('Cập nhật giỏ hàng thất bại!');
                window.location.href = '../View/cart.php';
            </script>";
        }
    } else {
        // Show invalid input alert and redirect
        echo "<script>
            alert('Dữ liệu không hợp lệ!');
            window.location.href = '../View/cart.php';
        </script>";
    }
} else {
    // Redirect back to the cart page if accessed incorrectly
    header("Location: ../View/cart.php");

}
?>