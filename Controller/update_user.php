<?php
include "../Model/user.php";

if (isset($_POST['txtupdate_user'])) {
    $id = $_POST['txtid'];
    $username = $_POST['txtusername'];
    $email = $_POST['txtemail'];
    $pass = $_POST['txtpass'];
    $address = $_POST['txtaddress'];
    $gender = $_POST['txtgender'];

    // Xử lý upload ảnh đại diện
    $avatar = '';
    if (isset($_FILES['txtavatar']) && $_FILES['txtavatar']['error'] == 0) {
        $target_dir = "../Upload/";
        $avatar = basename($_FILES['txtavatar']['name']);
        $target_file = $target_dir . $avatar;

        // Kiểm tra và di chuyển file upload
        if (!move_uploaded_file($_FILES['txtavatar']['tmp_name'], $target_file)) {
            echo "<script>alert('Không thể upload ảnh đại diện!');</script>";
            $avatar = ''; // Nếu upload thất bại, giữ nguyên giá trị cũ
        }
    } else {
        // Nếu không upload ảnh mới, giữ nguyên ảnh cũ
        $model = new data_account();
        $user = $model->sl_id($id)->fetch_assoc();
        $avatar = $user['avatar'];
    }

    // Cập nhật thông tin người dùng
    $model = new data_account();
    $result = $model->update_profile_id($id, $address, $avatar, $gender, $email, $pass);

    if ($result) {
        echo "<script>alert('Cập nhật thông tin người dùng thành công!');</script>";
        echo "<script>window.location.href = '../Admin/ql_user.php';</script>";
    } else {
        echo "<script>alert('Cập nhật thông tin người dùng thất bại!');</script>";
    }
} else {
    echo "<script>alert('Không có dữ liệu để cập nhật!');</script>";
    echo "<script>window.location.href = '../Admin/ql_user.php';</script>";
}
?>