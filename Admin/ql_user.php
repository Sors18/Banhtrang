<!-- filepath: c:\xampp\htdocs\Project1\Admin\ql_user.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý Người Dùng</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            background-color: #f9f9f9;
        }
        .table-responsive {
            margin: 30px auto;
            margin-left: 150px; /* Đẩy bảng sang phải để vừa với sidebar */
            max-width: 2000px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        .table th {
            background-color: #701c1c;
            color: white;
            text-transform: uppercase;
        }
        .table img {
            border-radius: 50%;
            object-fit: cover;
        }
        .btn-action {
            display: inline-block;
            padding: 5px 10px;
            border-radius: 4px;
            text-decoration: none;
            color: white;
        }
        .btn-delete {
            background-color: #dc3545;
        }
        .btn-delete:hover {
            background-color: #c82333;
        }
        .btn-update {
            background-color: #007bff;
        }
        .btn-update:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <?php include "navbar.php"; ?>
    <div class="container">
        <div class="table-responsive">
            <h2 class="text-center mb-4">Quản Lý Người Dùng</h2>
            <?php
                include('../Model/user.php');
                $model = new data_account();
                $users = $model->select();
            ?>
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Loại</th>
                        <th>Địa chỉ</th>
                        <th>Avatar</th>
                        <th>Giới tính</th>
                        <th colspan="2" class="text-center">Hành động</th>
                    </tr>
                </thead>
                <tbody>
                <?php while ($user = mysqli_fetch_assoc($users)) { ?>
                    <tr>
                        <td><?php echo htmlspecialchars($user['id_user']); ?></td>
                        <td><?php echo htmlspecialchars($user['username']); ?></td>
                        <td><?php echo htmlspecialchars($user['email']); ?></td>
                        <td><?php echo htmlspecialchars($user['type'] == '1' ? 'Admin' : 'User');?></td>
                        <td><?php echo htmlspecialchars($user['address']); ?></td>
                        <td>
                            <img src="../Upload/<?php echo htmlspecialchars($user['avatar']); ?>" width="50px" height="50px">
                        </td>
                        <td><?php echo htmlspecialchars($user['gender'] == 'M' ? 'Nam' : 'Nữ'); ?></td>
                        <td>
                            <a href="../Controller/delete_user.php?del=<?php echo $user['id_user']; ?>" 
                               class="btn-action btn-delete"
                               onclick="return confirm('Bạn có chắc chắn muốn xóa người dùng này?');">
                               Xóa
                            </a>
                        </td>
                        <td>
                            <a href="update_user.php?up=<?php echo $user['id_user']; ?>" 
                               class="btn-action btn-update"
                               onclick="return confirm('Bạn có muốn sửa thông tin người dùng này?');">
                               Sửa
                            </a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>