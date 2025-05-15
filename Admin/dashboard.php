<!-- filepath: c:\xampp\htdocs\Project1\Admin\dashboard.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            background-color: #f9f9f9;
        }
        .dashboard-container {
            margin: 50px auto;
            max-width: 1200px;
        }
        .card {
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: #701c1c;
            color: white;
            font-weight: bold;
        }
        .card-body {
            font-size: 16px;
        }
    </style>
</head>
<body>
    <div class="container dashboard-container">
        <h1 class="text-center mb-4">Quản Lý Hệ Thống</h1>
        <div class="row">
             <div class="col-md-4">
                <div class="card">
                    <div class="card-header text-center">
                        Thêm Sản Phẩm
                    </div>
                    <div class="card-body text-center">
                        <p>Thêm sản phẩm mới vào hệ thống.</p>
                        <a href="themsanpham.php" class="btn btn-primary">Thêm Ngay</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header text-center">
                        Quản Lý Sản Phẩm
                    </div>
                    <div class="card-body text-center">
                        <p>Sửa, xóa và quản lý sản phẩm.</p>
                        <a href="ql_sp.php" class="btn btn-primary">Xem Chi Tiết</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header text-center">
                        Quản Lý Người Dùng
                    </div>
                    <div class="card-body text-center">
                        <p>Quản lý thông tin người dùng.</p>
                        <a href="ql_user.php" class="btn btn-primary">Xem Chi Tiết</a>
                    </div>
                </div>
            </div>

        </div>
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header text-center">
                        Quản Lý Đơn Hàng
                    </div>
                    <div class="card-body text-center">
                        <p>Quản lý các đơn hàng của khách hàng.</p>
                        <a href="ql_donhang.php" class="btn btn-primary">Xem Chi Tiết</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header text-center">
                        Báo Cáo Doanh Thu
                    </div>
                    <div class="card-body text-center">
                        <p>Xem báo cáo doanh thu theo ngày, tháng, năm.</p>
                        <a href="baocao.php" class="btn btn-primary">Xem Chi Tiết</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header text-center">
                        Đăng Xuất
                    </div>
                    <div class="card-body text-center">
                        <p>Thoát khỏi hệ thống quản trị.</p>
                        <a href="../Controller/logout.php" class="btn btn-danger">Đăng Xuất</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>