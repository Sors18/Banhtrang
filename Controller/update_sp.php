<?php
    include("../Model/sanpham.php");
    if(isset($_POST['txtupdate_id'])){
        $model = new sanpham();
        $sl_id = $model->select_id($_POST['txtid']);
        $sl_id = $sl_id->fetch_assoc();
        $old_img = $sl_id['hinhanh'];
        if(!empty($_FILES['txthinh']['name'])){
            move_uploaded_file($_FILES['txthinh']['tmp_name'],'../Upload/'.$_FILES['txthinh']['name']);
            $new_img = $_FILES['txthinh']['name'];
        }
        else{
            $new_img = $old_img;
        }
        $update = $model->update_product($_POST['txtid'],$_POST['txtdanhmuc'], $_POST['txtten'],  $_POST['txtgia'], $new_img, $_POST['txtmota'] );
        if($update){
            echo"<script>alert('Sửa thông tin thành công!');
            window.location.href = '../Admin/ql_sp.php';
            </script>";
        }
    }

?>