<?php 
include "../Model/user.php";

if (isset($_POST['txtregister'])) {
    $username = $_POST['txtname'];
    $password = $_POST['txtpass'];
    $passwordConfirm = $_POST['txtpassconfirm'];

    // Kiểm tra nếu các trường bị bỏ trống
    if (empty($username) || empty($password) || empty($passwordConfirm)) {
        echo "<script>alert('Vui lòng nhập đầy đủ thông tin!'); window.location.href = '../View/register.php';</script>";
        exit();
    }

    // Kiểm tra mật khẩu xác nhận
    if ($password !== $passwordConfirm) {
        echo "<script>alert('Mật khẩu xác nhận không khớp!'); window.location.href = '../View/register.php';</script>";
        exit();
    }

    // Kiểm tra xem tên đăng nhập đã tồn tại chưa
    $model = new data_account();
    $existingUser = $model->sl_username($username);
    if ($existingUser->num_rows > 0) {
        echo "<script>alert('Tên đăng nhập đã tồn tại!'); window.location.href = '../View/register.php';</script>";
        exit();
    }

    // Thêm tài khoản mới vào cơ sở dữ liệu
    $result = $model->insert_account($username, $password);
    if ($result) {
        echo "<script>alert('Đăng ký thành công!'); window.location.href = '../View/login.php';</script>";
    } else {
        echo "<script>alert('Đăng ký thất bại! Vui lòng thử lại.'); window.location.href = '../View/register.php';</script>";
    }
}
?>