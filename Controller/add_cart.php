<?php
session_start();
include ("../Model/cart.php");

// Kiểm tra session
if (!isset($_SESSION['user_name'])) {
    echo "<script>alert('Bạn cần đăng nhập để thêm sản phẩm vào giỏ hàng!');</script>";
    echo "<script>window.location.href='../View/login.php';</script>";
    exit();
}

if (isset($_POST['txtsub'])) {
    $model = new cart();


    $sl = $model->sl_cart($_SESSION['user_name'], $_POST['id_pro']);

    if ($sl->num_rows == 0) {
        $add = $model->add_cart($_SESSION['user_name'], $_POST['id_pro'], $_POST['txtsl']); 
    } else {
        $update = $model->update_cart($_SESSION['user_name'], $_POST['id_pro'], $_POST['txtsl']); 

    if ($add || $update) {
        echo "<script>alert('Thêm sản phẩm vào giỏ hàng thành công!');</script>";
        echo "<script>window.location.href='../View/cart.php';</script>";
    } else {
        echo "<script>alert('Thêm sản phẩm vào giỏ hàng thất bại!');</script>";
        echo "<script>window.location.href='../View/banhtrang.php';</script>";
    }
}
}
?>