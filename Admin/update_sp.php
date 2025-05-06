<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Bootstrap Advance Admin Template</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">ORIGATO</a>
            </div>

            <div class="header-right">
                <a href="message-task.html" class="btn btn-info" title="New Message"><b>30 </b><i class="fa fa-envelope-o fa-2x"></i></a>
                <a href="message-task.html" class="btn btn-primary" title="New Task"><b>40 </b><i class="fa fa-bars fa-2x"></i></a>
                <a href="login.html" class="btn btn-danger" title="Logout"><i class="fa fa-exclamation-circle fa-2x"></i></a>
            </div>
        </nav>
        <div id="page-wrapper">
            <div id="page-inner" >
                <div style=" border: 2px solid black;">
            
            <?php
            include "../Model/sanpham.php"; 
            $id = $_GET['up'];
            $model = new sanpham();
            $sl = $model->select_id($id);
            $sl = $sl->fetch_assoc();
            ?>
    <form action="../Controller/update_sp.php" method="POST" enctype="multipart/form-data" class="p-3" style="background-color: #eeeeee;padding: 40px; ">
        <h3 style="text-align: center ; "> Thêm Sản Phẩm</h3>
        <div class="mb-3">
        <label for="tensp" class="form-label">Danh Mục sản phẩm</label>
        <input type="hidden" name="txtid" value="<?php echo $sl['id_sanpham']?>">
        <select class="form-control" name="txtdanhmuc">
            <option value="Banhtrang" <?php if (trim($sl['danhmuc']) == 'Bánh tráng') echo 'selected'; ?>>Bánh tráng</option>
            <option value="Salad" <?php if (trim($sl['danhmuc']) == 'Salad-Rau') echo 'selected'; ?>>Salad-Rau</option>
            <option value="Monannhe" <?php if (trim($sl['danhmuc']) == 'Món ăn nhẹ') echo 'selected'; ?>>Món ăn nhẹ</option>
            <option value="Mongachimlon" <?php if (trim($sl['danhmuc']) == 'Món gà-chim-lợn') echo 'selected'; ?>>Món gà-chim-lợn</option>
            <option value="Monca" <?php if (trim($sl['danhmuc']) == 'Món cá') echo 'selected'; ?>>Món cá</option>
            <option value="Trangmieng" <?php if (trim($sl['danhmuc']) == 'Đồ uống - Tráng miệng') echo 'selected'; ?>>Đồ uống - Tráng miệng</option>
        </select>
    </div>
    <div class="mb-3 mt-3">
            <label for="tensp" class="form-label">Tên sản phẩm</label>
            <input type="text" class="form-control" id="tensp" placeholder="Nhập tên sản phẩm" name="txtten" value="<?php echo $sl['tensp']?>">
        </div>
    <div class="mb-3">
        <label for="txthinh" class="form-label"><strong>Hình ảnh:</strong></label>
        <input type="file" class="form-control" id="txthinh" name="txthinh">
    </div>
    <div class="mb-3 mt-3">
            <label for="gia" class="form-label">Giá (VNĐ)</label>
            <input type="number" class="form-control" id="gia" placeholder="Nhập Giá" name="txtgia" value="<?php echo $sl['gia']?>">
    </div>
    <div class="mb-3 mt-3">
    <label for="mota" class="form-label">Mô tả</label>
    <textarea class="form-control" id="mota" name="txtmota"><?php echo htmlspecialchars($sl['mota']); ?></textarea>
</div>
    

    <button type="submit" class="btn btn-success" name="txtupdate_id" style="margin-left: 522px; margin-top: 20px;">Sửa sản phẩm</button>
</form>
    <a href="#" style="font-size:35px; color:blue"> <i class="bi bi-facebook"></i></a> 
              <a href="#" style="font-size:35px; color:brown"> <i class="bi bi-instagram"></i> </a>
              <a href="#" style="font-size:35px; color:brown"> <i class="bi bi-youtube"></i> </a>

            </div>
        </div>


    
    
    
    
    <script src="assets/js/jquery-1.10.2.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/jquery.metisMenu.js"></script>
    <script src="assets/js/custom.js"></script>
    


</body>
</html>
