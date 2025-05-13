<?php
session_start();
include("../Model/cart.php");
include("../Model/order.php");

if (isset($_POST['txtsub'])) {
    // Kiểm tra nếu thông tin không đầy đủ
    if (empty($_POST['txthoten']) || empty($_POST['txtdiachi']) || empty($_POST['txtsdt'])) {
        echo "<script>
            alert('Vui lòng nhập đủ thông tin!');
            window.location.href = '../View/thanhtoan.php';
        </script>";
        exit();
    } else {
        $order = new order();
        $cart = new cart();
        $user_identify = isset($_SESSION['user_name']) ? $_SESSION['user_name'] : session_id();
        $hoten = $_POST['txthoten'];

        // Thêm đơn hàng mới
        $insert_order = $order->add_order($hoten, $_POST['txtdiachi'], $_POST['txtsdt'], 'Chờ xác nhận', $user_identify);

        // Cập nhật đơn hàng trong giỏ hàng
        if ($insert_order) {
            $cart->update_donhang($order->sl_id_donhang(), $user_identify);

            echo "<script>
                alert('Đặt hàng thành công!');
                window.location.href = '../View/thongtindonhang.php';
            </script>";
        } else {
            echo "<script>
                alert('Đặt hàng thất bại!');
                window.location.href = '../View/thanhtoan.php';
            </script>";
        }
    }
}
?>