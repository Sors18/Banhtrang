<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }
        .sidebar {
            width: 250px;
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
        }
        .sidebar .menu-item a:hover {
            background-color: #e0e0e0;
        }
        .sidebar .menu-item i {
            margin-right: 10px;
            font-size: 18px;
        }
        .sidebar .submenu {
            margin-left: 20px;
            margin-top: 10px;
        }
        .sidebar .submenu a {
            font-size: 14px;
            color: #555;
        }
        .badge {
            background-color: #ff6b6b;
            color: white;
            font-size: 12px;
            padding: 2px 6px;
            border-radius: 12px;
            margin-left: auto;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <div class="logo"></div>
        <div class="menu-item">
            <a href="#"><i class="fa fa-box" style="margin-right: 5px;"></i> Sản phẩm </a>
        </div>
        <div class="menu-item">
            <a href="#"><i class="fa fa-users" style="margin-right: 5px;"></i> Khách hàng</a>
        </div>
        <div class="menu-item">
            <a href="#"><i class="fa fa-store" style="margin-right: 5px;"></i> Đơn hàng</a>
        </div>
        <div class="menu-item">
            <a href="#"><i class="fa fa-chart-line" style="margin-right: 5px;"></i> Doanh thu</a>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>
</html>