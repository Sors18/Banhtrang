
<?php
    include("../Model/order.php");

    // Kiểm tra xem tham số 'id' có tồn tại và hợp lệ không
    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        $id = intval($_GET['id']); // Ép kiểu để đảm bảo an toàn
        $model = new order();

        // Lấy thông tin đơn hàng theo ID
        $sl_id = $model->sl_id($id);
        if ($sl_id && $sl_id->num_rows > 0) {
            $sl_id = $sl_id->fetch_assoc();

            // Kiểm tra trạng thái hiện tại và cập nhật trạng thái mới
            if ($sl_id['trangthai'] == 'Chờ xác nhận') {
                $model->update_trangthai1($id);
            } else if ($sl_id['trangthai'] == 'Đang vận chuyển') {
                $model->update_trangthai2($id);
            }
        }
    }

    // Chuyển hướng về trang quản lý đơn hàng
    header("Location: ../Admin/ql_donhang.php");
    exit();
?>