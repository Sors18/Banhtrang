<?php
   $id=$_GET['del'];
   include('../Model/sanpham.php');
    $model=new sanpham();
    $delete=$model->delete_product($id);
        if($delete) echo "<script> alert('Xóa sản phẩm thành công')
                        window.location='../Admin/ql_sp.php'</script>";
        else echo "<script>alert('Chưa thực thi được')</script>";
?>