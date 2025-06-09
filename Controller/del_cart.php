<?php
include("../Model/cart.php");
session_start();

if (isset($_POST['txtdel'])) {
    $user_id = $_SESSION['user_name'] ?? null;
    $pro_id = $_POST['id_cart'] ?? null;

    if ($user_id && $pro_id) {
        $cart = new cart();
        $result = $cart->delete_pro_in_cart($user_id, $pro_id);

         $_SESSION['alert'] = [
                'title' => 'Xóa sản phẩm thành công!',
                'icon' => 'success'
                ];
}
}
header('Location: ../View/cart.php#start_view');
?>