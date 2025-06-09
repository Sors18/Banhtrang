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

                $_SESSION['alert'] = [
                'title' => 'Thêm sản phẩm thành công!',
                'icon' => 'success'
                ];
            }
}
$_SESSION['cart_count'] = $cart->sl_sl($user_identify);
header('Location: ../View/chitietsp.php?id=' . $_POST['id_pro'] . '#start_view');
?>