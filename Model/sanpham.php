<?php
include("connect.php");

class sanpham {
    // Thêm sản phẩm mới
    public function insert($danhmuc, $tensp, $gia, $hinhanh, $mota) {
        global $conn;
        $sql = "INSERT INTO sanpham (danhmuc, tensp, gia, hinhanh, mota)
                VALUES ('$danhmuc', '$tensp', '$gia', '$hinhanh', '$mota')";
        $run = mysqli_query($conn, $sql);
        return $run;
    }

    // Lấy tất cả sản phẩm
    public function select() {
        global $conn;
        $sql = "SELECT * FROM sanpham";
        $run = mysqli_query($conn, $sql);
        return $run;
    }

    public function select_id($id) {
        global $conn;
        $sql = "SELECT * FROM sanpham where id_sanpham = '$id'";
        $run = mysqli_query($conn, $sql);
        return $run;
    }

    // Lấy sản phẩm theo tên
    public function select_namepro($tensp) {
        global $conn;
        $sql = "SELECT * FROM sanpham WHERE tensp = '$tensp'";
        $run = mysqli_query($conn, $sql);
        return $run;
    }

    // Lấy sản phẩm theo danh mục
    public function select_danhmuc($danhmuc) {
        global $conn;
        $sql = "SELECT * FROM sanpham WHERE danhmuc = '$danhmuc'";
        $run = mysqli_query($conn, $sql);
        return $run;
    }

    // Lấy sản phẩm không bao gồm một ID cụ thể
    public function select_notin_id($danhmuc, $id) {
        global $conn;
        $sql = "SELECT * FROM sanpham WHERE danhmuc = '$danhmuc' AND id_sanpham != '$id'";
        $run = mysqli_query($conn, $sql);
        return $run;
    }

    // Tìm kiếm sản phẩm theo tên hoặc giá
    public function select_find($ten) {
        global $conn;
        $sql = "SELECT * FROM sanpham WHERE tensp LIKE '%$ten%' OR gia = '$ten'";
        $run = mysqli_query($conn, $sql);
        return $run;
    }

    // Xóa sản phẩm theo ID
    public function delete_product($id) {
        global $conn;
        $sql = "DELETE FROM sanpham WHERE id_sanpham = '$id'";
        $run = mysqli_query($conn, $sql);
        return $run;
    }

    // Cập nhật sản phẩm
    public function update_product($id, $danhmuc, $tensp, $gia, $hinhanh, $mota) {
        global $conn;
        $sql = "UPDATE sanpham 
                SET danhmuc = '$danhmuc', tensp = '$tensp', gia = '$gia', hinhanh = '$hinhanh', mota = '$mota' 
                WHERE id_sanpham = '$id'";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
}
?>