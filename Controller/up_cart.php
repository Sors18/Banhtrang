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
    
        
    $_SESSION['alert'] = [
                'title' => 'Sửa sản phẩm thành công!',
                'icon' => 'success'
                ];
}
}
header('Location: ../View/cart.php#start_view');
?>