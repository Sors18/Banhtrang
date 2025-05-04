<?php
include ("../Model/sanpham.php");
if(isset($_POST['txtsub'])){
    if(empty($_POST['txtdanhmuc']) || empty($_POST['txtten']) || empty($_POST['txtgia']) || empty($_FILES['txthinh']['name']) || empty($_POST['txtmota']) ){
        echo "<script>alert('Vui Lòng nhập đủ thông tin');
             window.location.href = '../Admin/themsanpham.php';
            </script>"; 
    }
    else{
        $model = new sanpham();
        move_uploaded_file($_FILES['txthinh']['tmp_name'],'../Upload/'.$_FILES['txthinh']['name']);
        $sl = $model->select_namepro($_POST['txtten']);
        if($sl->num_rows == 0){
            $is = $model->insert($_POST['txtdanhmuc'], $_POST['txtten'], $_POST['txtgia'], $_FILES['txthinh']['name'],$_POST['txtmota']); 
            echo "<script>alert('Thêm thành công');
             window.location.href = '../Admin/themsanpham.php';
            </script>"; 
        }
        else{
            echo "<script>alert('Sản phẩm đã tồn tại');
            window.location.href = '../Admin/themsanpham.php';
           </script>";  
        } 
    }
}

?>