<!-- filepath: c:\xampp\htdocs\Project1\Admin\add_user.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Người Dùng</title>
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
            <h3>Thêm Người Dùng</h3>
            <form action="../Controller/add_user.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="txtusername" class="form-label">Tên Người Dùng</label>
                    <input type="text" class="form-control" id="txtusername" name="txtusername" placeholder="Nhập tên người dùng" required>
                </div>
                <div class="mb-3">
                    <label for="txtemail" class="form-label">Email</label>
                    <input type="email" class="form-control" id="txtemail" name="txtemail" placeholder="Nhập email" required>
                </div>
                <div class="mb-3">
                    <label for="txtpass" class="form-label">Mật Khẩu</label>
                    <input type="password" class="form-control" id="txtpass" name="txtpass" placeholder="Nhập mật khẩu" required>
                </div>
                <div class="mb-3">
                    <label for="txtaddress" class="form-label">Địa Chỉ</label>
                    <input type="text" class="form-control" id="txtaddress" name="txtaddress" placeholder="Nhập địa chỉ">
                </div>
                <div class="mb-3">
                    <label for="txtavatar" class="form-label">Ảnh Đại Diện</label>
                    <input type="file" class="form-control" id="txtavatar" name="txtavatar">
                </div>
                <div class="mb-3">
                    <label for="txtgender" class="form-label">Giới Tính</label>
                    <select class="form-control" id="txtgender" name="txtgender">
                        <option value="M">Nam</option>
                        <option value="F">Nữ</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-submit w-100" name="txtadd_user">Thêm Người Dùng</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>