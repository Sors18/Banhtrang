<!-- filepath: c:\xampp\htdocs\Project1\View\doimk.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đổi Mật Khẩu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            background-color: #f9f9f9;
        }
        .change-password-container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .change-password-container h2 {
            text-align: center;
            color: #701c1c;
            margin-bottom: 20px;
        }
        .btn-primary {
            background-color: #701c1c;
            border-color: #701c1c;
        }
        .btn-primary:hover {
            background-color: #5a1515;
            border-color: #5a1515;
        }
    </style>
</head>
<?php include("navbar.php"); ?>
<body>
    <div class="change-password-container">
        <h2>Đổi Mật Khẩu</h2>
        <form action="../Controller/doimk.php" method="POST">
            <div class="mb-3">
                <label for="currentPassword" class="form-label">Mật Khẩu Hiện Tại</label>
                <input type="password" class="form-control" id="currentPassword" name="currentPassword" required>
            </div>
            <div class="mb-3">
                <label for="newPassword" class="form-label">Mật Khẩu Mới</label>
                <input type="password" class="form-control" id="newPassword" name="newPassword" required>
            </div>
            <div class="mb-3">
                <label for="confirmPassword" class="form-label">Xác Nhận Mật Khẩu Mới</label>
                <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Đổi Mật Khẩu</button>
        </form>
    </div>
</body>
</html>