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
            $_SESSION['user_name'] = $_POST['txtname'];
            if ($_SESSION['user_name'] === 'admin') {
                echo "<script>window.location.href = '#';</script>";
            } else {
                echo "<script>window.location.href = '../View/Trangchu.php';</script>";
            }
        } else {
            echo "<script>window.location.href = '../View/login.php';</script>";
        }
    }
}
?>