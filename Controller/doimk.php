<?php
session_start();
include("../Model/user.php");

// Kiểm tra xem người dùng đã đăng nhập chưa
if (!isset($_SESSION['user_name'])) {
    header("Location: login.php");
    exit();
}

// Lấy dữ liệu từ form
$currentPassword = $_POST['currentPassword'] ?? '';
$newPassword = $_POST['newPassword'] ?? '';
$confirmPassword = $_POST['confirmPassword'] ?? '';

// Kiểm tra các trường không được để trống
if (empty($currentPassword) || empty($newPassword) || empty($confirmPassword)) {
    die("Vui lòng điền đầy đủ thông tin.");
}

// Kiểm tra mật khẩu mới và xác nhận mật khẩu có khớp không
if ($newPassword !== $confirmPassword) {
    die("Mật khẩu mới và xác nhận mật khẩu không khớp.");
}

// Lấy thông tin người dùng từ cơ sở dữ liệu
$userModel = new data_account();
$userName = $_SESSION['user_name'];
$userData = $userModel->sl_username($userName);

if ($userData && $userData->num_rows > 0) {
    $user = $userData->fetch_assoc();

    // Kiểm tra mật khẩu hiện tại có đúng không
    if ($user['pass'] !== $currentPassword) {
        echo "<script>alert('Mật khẩu hiện tại không đúng.'); window.history.back();</script>";
        exit();
    }

    // Cập nhật mật khẩu mới
    $updateResult = $userModel->update_pass($userName, $newPassword);
    if ($updateResult) {
        echo "<script>alert('Đổi mật khẩu thành công.'); window.location.href = '../View/Trangchu.php';</script>";
    } else {
        echo "<script>alert('Đổi mật khẩu thất bại. Vui lòng thử lại.'); window.history.back();</script>";
    }
} else {
    echo "<script>alert('Người dùng không tồn tại.'); window.history.back();</script>";
}
?>