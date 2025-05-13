<?php
include("../Model/cart.php");
session_start();

if (isset($_POST['txtdel'])) {
    $user_id = $_SESSION['user_name'] ?? null;
    $pro_id = $_POST['id_cart'] ?? null;

    if ($user_id && $pro_id) {
        $cart = new cart();
        $result = $cart->delete_pro_in_cart($user_id, $pro_id);

        if ($result) {
            // Show success alert and redirect
            echo "<script>
                alert('Xóa sản phẩm khỏi giỏ hàng thành công!');
                window.location.href = '../View/cart.php';
            </script>";
        } else {
            // Show error alert and redirect
            echo "<script>
                alert('Xóa sản phẩm khỏi giỏ hàng thất bại!');
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