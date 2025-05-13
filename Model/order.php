<?php
include("connect.php");

class order {
    // Lấy tất cả đơn hàng
    public function sl_order() {
        global $conn;
        $sql = "SELECT * FROM donhang";
        $run = mysqli_query($conn, $sql);
        return $run;
    }

    // Lấy đơn hàng theo ID
    public function sl_id($id) {
        global $conn;
        $sql = "SELECT * FROM donhang WHERE id_donhang = '$id'";
        $run = mysqli_query($conn, $sql);
        return $run;
    }

    // Thêm đơn hàng mới
    public function add_order($hoten, $diachi, $sdt, $trangthai, $user_id) {
        global $conn;
        $time = date('Y-m-d H:i:s'); // Lấy thời gian hiện tại
        $sql = "INSERT INTO donhang (hoten, diachi, sdt, trangthai, user_id, Time)
                VALUES ('$hoten', '$diachi', '$sdt', '$trangthai', '$user_id', '$time')";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
   
    // Cập nhật trạng thái đơn hàng
    public function update_trangthai1($id_donhang) {
        global $conn;
        $sql = "UPDATE donhang SET trangthai = 'Đang vận chuyển' WHERE id_donhang = '$id_donhang'";
        $run = mysqli_query($conn, $sql);
        return $run;
    }

    public function update_trangthai2($id_donhang) {
        global $conn;
        $sql = "UPDATE donhang SET trangthai = 'Hoàn thành' WHERE id_donhang = '$id_donhang'";
        $run = mysqli_query($conn, $sql);
        return $run;
    }

    // Lấy đơn hàng theo user_id
    public function order_infor_idkh($user_id) {
        global $conn;
        $sql = "SELECT * FROM donhang WHERE user_id = '$user_id'";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
    public function tinhTongTienDonHang($id_donhang) {
    global $conn; // Sử dụng kết nối cơ sở dữ liệu toàn cục

    $sql = "
        SELECT cart.Soluong, sanpham.gia
        FROM cart
        JOIN sanpham ON cart.id_sanpham = sanpham.id_sanpham
        WHERE cart.donhang = '$id_donhang'
    ";

    $run = mysqli_query($conn, $sql);
    $tong = 0;

    if ($run) {
        while ($row = mysqli_fetch_assoc($run)) {
            $tong += $row['gia'] * $row['Soluong'];
        }
    }

    return $tong;
}
    // Lấy ID đơn hàng mới nhất
    public function sl_id_donhang() {
        global $conn;
        $sql = "SELECT MAX(id_donhang) AS max_id FROM donhang";
        $run = mysqli_query($conn, $sql);
        if ($run) {
            $row = mysqli_fetch_assoc($run);
            return $row['max_id'];
        } else {
            return null;
        }
    }

    // Báo cáo doanh thu theo ngày
    public function revenueByDay($date) {
        global $conn;
        $sql = "
            SELECT SUM(cart.soluong * sanphams.gia) AS TongTien
            FROM donhang
            JOIN cart ON donhang.id_donhang = cart.donhang
            JOIN sanphams ON cart.sanpham_id = sanphams.id
            WHERE DATE(donhang.Time) = '$date'
            AND donhang.trangthai != 'Chờ xác nhận'
            AND donhang.trangthai != 'Đang vận chuyển'";
        return mysqli_query($conn, $sql);
    }

    // Báo cáo doanh thu theo tháng
    public function revenueByMonth($month) {
        global $conn;
        $sql = "
            SELECT SUM(cart.soluong * sanphams.gia) AS TongTien
            FROM donhang
            JOIN cart ON donhang.id_donhang = cart.donhang
            JOIN sanphams ON cart.sanpham_id = sanphams.id
            WHERE DATE_FORMAT(donhang.Time, '%Y-%m') = '$month'
            AND donhang.trangthai != 'Chờ xác nhận'
            AND donhang.trangthai != 'Đang vận chuyển'";
        return mysqli_query($conn, $sql);
    }

    // Báo cáo doanh thu theo năm
    public function revenueByYear($year) {
        global $conn;
        $sql = "
            SELECT SUM(cart.soluong * sanphams.gia) AS TongTien
            FROM donhang
            JOIN cart ON donhang.id_donhang = cart.donhang
            JOIN sanphams ON cart.sanpham_id = sanphams.id
            WHERE YEAR(donhang.Time) = '$year'
            AND donhang.trangthai != 'Chờ xác nhận'
            AND donhang.trangthai != 'Đang vận chuyển'";
        return mysqli_query($conn, $sql);
    }

    public function chitietdonhang($id_donhang) {
        global $conn;
        $sql = "SELECT 
                    donhang.id_donhang,
                    donhang.hoten,
                    donhang.diachi,
                    donhang.sdt,
                    donhang.trangthai,
                    donhang.user_id,
                    donhang.Time,
                    cart.id_cart,
                    cart.Soluong,
                    sanpham.id_sanpham AS id_sanpham,
                    sanpham.gia,
                    sanpham.hinhanh,
                    sanpham.tensp,
                    sanpham.danhmuc,
                    sanpham.mota
                FROM donhang
                JOIN cart ON donhang.id_donhang = cart.donhang
                JOIN sanpham ON cart.id_sanpham = sanpham.id_sanpham
                WHERE donhang.id_donhang = '$id_donhang'";
        
        return mysqli_query($conn, $sql);
    }
}
?>