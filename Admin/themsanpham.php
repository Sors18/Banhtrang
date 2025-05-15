<!-- filepath: c:\xampp\htdocs\Project1\Admin\themsanpham.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Sản Phẩm</title>
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
            <h3>Thêm Sản Phẩm</h3>
            <form action="../Controller/add_sp.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="txtdanhmuc" class="form-label">Danh Mục Sản Phẩm</label>
                    <select class="form-control" name="txtdanhmuc" id="txtdanhmuc">
                        <option value="Banhtrang">Bánh tráng</option>
                        <option value="Salad">Salad-Rau</option>
                        <option value="Monannhe">Món ăn nhẹ</option>
                        <option value="Mongachimlon">Món gà-chim-lợn</option>
                        <option value="Monca">Món cá</option>
                        <option value="Trangmieng">Đồ uống - Tráng miệng</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="txtten" class="form-label">Tên Sản Phẩm</label>
                    <input type="text" class="form-control" id="txtten" name="txtten" placeholder="Nhập tên sản phẩm" required>
                </div>
                <div class="mb-3">
                    <label for="txthinh" class="form-label">Hình Ảnh</label>
                    <input type="file" class="form-control" id="txthinh" name="txthinh" required>
                </div>
                <div class="mb-3">
                    <label for="txtgia" class="form-label">Giá (VNĐ)</label>
                    <input type="number" class="form-control" id="txtgia" name="txtgia" placeholder="Nhập giá sản phẩm" required>
                </div>
                <div class="mb-3">
                    <label for="txtmota" class="form-label">Mô Tả</label>
                    <textarea class="form-control" id="txtmota" name="txtmota" rows="4" placeholder="Nhập mô tả sản phẩm"></textarea>
                </div>
                <button type="submit" class="btn btn-submit w-100" name="txtsub">Thêm Sản Phẩm</button>
            </form>
        </div>
    </div>
</body>
</html>