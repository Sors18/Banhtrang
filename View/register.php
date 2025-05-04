<!-- filepath: c:\xampp\htdocs\Project1\View\register.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Ký</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="CSS/dinhdang.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f4e3; /* Màu nền */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .register-container {
            background-color: #601d1b; /* Màu nâu */
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 400px;
            color: white;
        }
        .register-container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #fefddb; /* Màu vàng nhạt */
        }
        .btn-primary {
            width: 100%;
            background-color: #3a5c33; /* Màu xanh đậm */
            border: none;
        }
        .btn-primary:hover {
            background-color: #2b4425; /* Màu xanh tối hơn */
        }
        .login-link {
            text-align: center;
            margin-top: 10px;
        }
        .login-link a {
            color: #fefddb; /* Màu vàng nhạt */
            text-decoration: none;
        }
        .login-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    
    <div class="register-container">
        <h2>Đăng Ký</h2>
        <form action="../Controller/dangky.php" method="POST">
            <div class="mb-3">
                <label for="txtname" class="form-label">Tên đăng nhập</label>
                <input type="text" class="form-control" id="txtname" name="txtname" placeholder="Nhập tên đăng nhập" required>
            </div>
            <div class="mb-3">
                <label for="txtpass" class="form-label">Mật khẩu</label>
                <input type="password" class="form-control" id="txtpass" name="txtpass" placeholder="Nhập mật khẩu" required>
            </div>
            <div class="mb-3">
                <label for="txtpassconfirm" class="form-label">Xác nhận mật khẩu</label>
                <input type="password" class="form-control" id="txtpassconfirm" name="txtpassconfirm" placeholder="Nhập lại mật khẩu" required>
            </div>
            <button type="submit" class="btn btn-primary" name="txtregister">Đăng Ký</button>
        </form>
        <div class="login-link">
            <p>Đã có tài khoản? <a href="login.php">Đăng nhập ngay</a></p>
        </div>
    </div>
</body>
</html>