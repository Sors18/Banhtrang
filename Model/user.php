<?php

include "connect.php";
class data_account {
    public function select() {
        global $conn;
        $sql = "SELECT id_user, username, pass FROM user_inf";
        $run = mysqli_query($conn, $sql);
        return $run;
    }

    public function sl_id($id) {
        global $conn;
        $sql = "SELECT id_user, username, pass FROM user_inf WHERE id_user = '$id'";
        $run = mysqli_query($conn, $sql);
        return $run;
    }

    public function insert_account($name, $pass) {
        global $conn;
        $sql = "INSERT INTO user_inf(username, pass, user_type) VALUES('$name', '$pass', '0')";
        $run = mysqli_query($conn, $sql);
        return $run;
    }

    public function sl_username($name) {
        global $conn;
        $sql = "SELECT id_user, username, pass FROM user_inf WHERE username = '$name'";
        $run = mysqli_query($conn, $sql);
        return $run;
    }

    public function update_pass($name, $newpass) {
        global $conn;
        $sql = "UPDATE user_inf SET pass = '$newpass' WHERE username = '$name'";
        $run = mysqli_query($conn, $sql);
        return $run;
    }

    public function del_profile($id) {
        global $conn;
        $sql = "DELETE FROM user_inf WHERE id_user = '$id'";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
}

?>