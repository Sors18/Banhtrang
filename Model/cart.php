<?php
    include ("connect.php");
    class cart {
        public function sl_cart_user($user_id) {
            global $conn;
            $sql = "SELECT * FROM cart WHERE id_user = '$user_id' AND donhang = 0";
            $run = mysqli_query($conn, $sql);
            return $run;
        }

        public function sl_cart($user_id, $pro_id) {
            global $conn;
            $sql = "SELECT * FROM cart WHERE id_user = '$user_id' AND id_sanpham = '$pro_id' AND donhang = 0";
            $run = mysqli_query($conn, $sql);
            return $run;
        }

        public function sl_sl($user_id) {
            global $conn;
            $sql = "SELECT SUM(Soluong) AS sl FROM cart WHERE id_user = '$user_id' AND donhang = 0";
            $run = mysqli_query($conn, $sql);
            if ($run) {
                $row = mysqli_fetch_assoc($run); 
                return $row['sl'] ?? 0; 
            } else {
                return 0; 
            }
        }

        public function add_cart($user_id, $pro_id, $SL) {
            global $conn;
            $sql = "INSERT INTO cart (id_user, id_sanpham, Soluong, donhang)
                    VALUES ('$user_id', '$pro_id', '$SL', 0)";
            $run = mysqli_query($conn, $sql);
            return $run;
        }

        public function update_cart($user_id, $pro_id, $SL) {
            global $conn;
            $sql = "UPDATE cart SET Soluong = Soluong + '$SL'
                    WHERE id_user = '$user_id' AND id_sanpham = '$pro_id'";
            $run = mysqli_query($conn, $sql);
            return $run;
        }

        public function delete_cart($id_cart) {
            global $conn;
            $sql = "DELETE FROM cart WHERE id_cart = '$id_cart'";
            $run = mysqli_query($conn, $sql);
            return $run;
        }

        public function delete_pro_in_cart($user_id, $id_cart) {
            global $conn;
            $sql = "DELETE FROM cart WHERE id_user = '$user_id' AND id_cart = '$id_cart'";
            $run = mysqli_query($conn, $sql);
            return $run;
        }

        public function update_donhang($id_donhang, $user_id) {
            global $conn;
            $sql = "UPDATE cart SET donhang = '$id_donhang' WHERE id_user = '$user_id' AND donhang = 0";
            $run = mysqli_query($conn, $sql);
            return $run;
        }

        public function capnhatgiohang($user_id, $cart_id, $sl) {
            global $conn;
            $sql = "UPDATE cart SET Soluong = '$sl' WHERE id_user = '$user_id' AND id_cart = '$cart_id'";
            $run = mysqli_query($conn, $sql);
            return $run;
        }
    }
?>