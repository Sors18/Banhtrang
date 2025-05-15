<!-- filepath: c:\xampp\htdocs\Project1\Admin\update_sp.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa Sản Phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            background-color: #f9f9f9;
        }
        .form-container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .form-container h3 {
            text-align: center;
            color: #701c1c;
            margin-bottom: 20px;
        }
        .btn-submit {
            background-color: #701c1c;
            border-color: #701c1c;
            color: white;
        }
        .btn-submit:hover {
            background-color: #5a1515;
            border-color: #5a1515;
        }
    </style>
</head>
<body>
    <?php include "navbar.php"; ?>
    <div class="container">
        <div class="form-container">
            <h3>Sửa Sản Phẩm</h3>
            <?php
                include "../Model/sanpham.php"; 
                $id = $_GET['up'];
                $model = new sanpham();
                $sl = $model->select_id($id);
                $sl = $sl->fetch_assoc();
            ?>
            <form action="../Controller/update_sp.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="txtid" value="<?php echo $sl['id_sanpham'] ?>">
                <div class="mb-3">
                    <label for="txtdanhmuc" class="form-label">Danh Mục Sản Phẩm</label>
                    <select class="form-control" name="txtdanhmuc" id="txtdanhmuc">
                        <option value="Banhtrang" <?php if (trim($sl['danhmuc']) == 'Bánh tráng') echo 'selected'; ?>>Bánh tráng</option>
                        <option value="Salad" <?php if (trim($sl['danhmuc']) == 'Salad-Rau') echo 'selected'; ?>>Salad-Rau</option>
                        <option value="Monannhe" <?php if (trim($sl['danhmuc']) == 'Món ăn nhẹ') echo 'selected'; ?>>Món ăn nhẹ</option>
                        <option value="Mongachimlon" <?php if (trim($sl['danhmuc']) == 'Món gà-chim-lợn') echo 'selected'; ?>>Món gà-chim-lợn</option>
                        <option value="Monca" <?php if (trim($sl['danhmuc']) == 'Món cá') echo 'selected'; ?>>Món cá</option>
                        <option value="Trangmieng" <?php if (trim($sl['danhmuc']) == 'Đồ uống - Tráng miệng') echo 'selected'; ?>>Đồ uống - Tráng miệng</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="txtten" class="form-label">Tên Sản Phẩm</label>
                    <input type="text" class="form-control" id="txtten" name="txtten" placeholder="Nhập tên sản phẩm" value="<?php echo htmlspecialchars($sl['tensp']); ?>" required>
                </div>
                <div class="mb-3">
                    <label for="txthinh" class="form-label">Hình Ảnh</label>
                    <input type="file" class="form-control" id="txthinh" name="txthinh">
                </div>
                <div class="mb-3">
                    <label for="txtgia" class="form-label">Giá (VNĐ)</label>
                    <input type="number" class="form-control" id="txtgia" name="txtgia" placeholder="Nhập giá sản phẩm" value="<?php echo $sl['gia']; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="txtmota" class="form-label">Mô Tả</label>
                    <textarea class="form-control" id="txtmota" name="txtmota" rows="4" placeholder="Nhập mô tả sản phẩm"><?php echo htmlspecialchars($sl['mota']); ?></textarea>
                </div>
                <button type="submit" class="btn btn-submit w-100" name="txtupdate_id">Sửa Sản Phẩm</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>