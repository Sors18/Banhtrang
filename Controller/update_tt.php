<?php
    include("../Model/order.php");

    if (isset($_POST['id']) && is_numeric($_POST['id']) && isset($_POST['action'])) {
        $id = intval($_POST['id']);
        $action = $_POST['action'];
        $model = new order();

        if ($action == 'xacnhan') {
            $model->update_trangthai1($id); // Đang vận chuyển
        } else if ($action == 'hoanthanh') {
            $model->update_trangthai2($id); // Hoàn thành
        }
    }

    header("Location: ../Admin/ql_donhang.php");
    exit();
?>