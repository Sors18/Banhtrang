<?php
include "connect.php";
class data_account{
    public function select(){
        global $conn;
        $sql = "SELECT*FROM user_inf";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
    public function sl_id($id){
        global $conn;
        $sql = "SELECT*FROM user_inf where id_user = '$id'";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
    
    public function insert_account($name,$pass){
        global $conn;
        $sql = "INSERT INTO user_inf(username,pass)
                values('$name','$pass')";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
    public function sl_username($name){
        global $conn;
        $sql = "SELECT*FROM user_inf where username = '$name'";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
    public function update_pass($name, $newpass){
        global $conn;
        $sql = " UPDATE user_inf SET pass = '$newpass' WHERE username = '$name' ";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
    public function update_profile($username, $address, $avatar, $gender,  $email ){
        global $conn;
        $sql = "UPDATE user_inf 
                SET address = '$address', avatar = '$avatar', gender = '$gender', email = '$email' 
                WHERE username = '$username'";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
    public function del_profile($id){
        global $conn;
        $sql = "delete from user_inf 
                WHERE id_user = '$id' ";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
    public function update_profile_id($id, $address, $avatar, $gender,  $email,$pass ){
        global $conn;
        $sql = "UPDATE user_inf 
                SET address = '$address', avatar = '$avatar', gender = '$gender',  email = '$email', pass = '$pass'
                WHERE id_user = '$id'";
        $run = mysqli_query($conn, $sql);
        return $run;
    }

}

?>