<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar with Submenu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }
        .sidebar {
            width: 200px;
            height: 100vh;
            background-color: #f4f4f4;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
            position: fixed;
            top: 0;
            left: 0;
            display: flex;
            flex-direction: column;
            padding: 20px;
        }
        .sidebar .logo {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: #ccc;
            margin-bottom: 20px;
        }
        .sidebar .menu-item {
            margin-bottom: 15px;
        }
        .sidebar .menu-item a {
            text-decoration: none;
            color: #333;
            font-size: 16px;
            display: flex;
            align-items: center;
            padding: 10px;
            border-radius: 8px;
            transition: background-color 0.3s ease;
            cursor: pointer;
        }
        .sidebar .menu-item a:hover {
            background-color: #e0e0e0;
        }
        .sidebar .menu-item i {
            margin-right: 10px;
            font-size: 18px;
        }
        .sidebar .submenu {
            display: none; /* Ẩn submenu mặc định */
            margin-left: 20px;
            margin-top: 10px;
        }
        .sidebar .submenu a {
            font-size: 14px;
            color: #555;
            text-decoration: none;
            display: block;
            margin-bottom: 5px;
        }
        .sidebar .submenu a:hover {
            color: #333;
        }
    </style>
    <script>
        function toggleSubmenu(id) {
            const submenu = document.getElementById(id);
            if (submenu.style.display === "block") {
                submenu.style.display = "none";
            } else {
                submenu.style.display = "block";
            }
        }
    </script>
</head>
<body>
   
    <div class="sidebar">
        <a href="dashboard.php" >
            <img src="../Upload/images.jpg" class="logo">
        </a>
        <div class="menu-item">
            <a onclick="toggleSubmenu('submenu-products')"><i class="fa fa-box" style="margin-right: 5px;"></i> Sản phẩm </a>
            <div class="submenu" id="submenu-products">
                <a href="ql_sp.php">Danh sách sản phẩm</a>
                <a href="themsanpham.php">Thêm sản phẩm</a>
            </div>
        </div>
        <div class="menu-item">
            <a onclick="toggleSubmenu('submenu-customers')"><i class="fa fa-users" style="margin-right: 5px;"></i> Khách hàng</a>
            <div class="submenu" id="submenu-customers">
                <a href="ql_user.php">Danh sách khách hàng</a>
                <a href="themuser.php">Thêm khách hàng</a>
            </div>
        </div>
        <div class="menu-item">
            <a onclick="toggleSubmenu('submenu-orders')"><i class="fa fa-store" style="margin-right: 5px;"></i> Đơn hàng</a>
            <div class="submenu" id="submenu-orders">
                <a href="ql_donhang.php">Danh sách đơn hàng</a>
            </div>
        </div>
        <div class="menu-item">
            <a onclick="toggleSubmenu('submenu-revenue')"><i class="fa fa-chart-line" style="margin-right: 5px;"></i> Doanh thu</a>
            <div class="submenu" id="submenu-revenue">
                <a href="baocao.php">Báo cáo doanh thu</a>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>
</html>