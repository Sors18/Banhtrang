<?php
include "../Model/user.php";
session_start();

if (isset($_POST['txtlog'])) {
    if (empty($_POST['txtname']) || empty($_POST['txtpass'])) {
        echo "<script>alert('Vui lòng nhập đủ thông tin!'); window.location.href = '../View/login.php';</script>";
    } else {
        $model = new data_account();
        $tmp = $model->sl_username($_POST['txtname']);
        $tmp = $tmp->fetch_assoc();

        if ($tmp && $_POST['txtpass'] === $tmp['pass']) {
            // Lưu thông tin vào session
            $_SESSION['user_name'] = $tmp['username'];
            $_SESSION['type'] = $tmp['type']; // Lấy type từ cơ sở dữ liệu
            $_SESSION['id_user'] = $tmp['id_user']; // Lưu id_user để sử dụng sau

            // Kiểm tra quyền admin
            if ($_SESSION['type'] == 1) {
                echo "<script>window.location.href = '../Admin/dashboard.php';</script>";
            } else {
                echo "<script>window.location.href = '../View/Trangchu.php';</script>";
            }
        } else {
            echo "<script>alert('Sai tên đăng nhập hoặc mật khẩu!'); window.location.href = '../View/login.php';</script>";
        }
    }
}
?>