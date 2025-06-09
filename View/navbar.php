<?php
session_start();
$user_identify = isset($_SESSION['user_name']) ? $_SESSION['user_name'] : session_id();
?>
<?php
    include_once("../Model/cart.php"); // Sửa thành include_once
    $sl_sl = new cart();
    $cart_count = $sl_sl->sl_sl($user_identify);
    $_SESSION['cart_count'] = $cart_count; // Gán giá trị vào session

?>
<div style="background-color: #301414;" class="sticky-top">
    <div class="container">
        <div class="row">
            <div class="col-2">
                <a href="Trangchu.php" style="text-decoration: none;">
                    <img width="90px" src="media/logo.png" class="mt-2" style="margin-left: 40px;">
                </a>
            </div>
            <div class="col-8 d-flex justify-content-center">
                <div class="input-group my-5 justify-content-center" style="width: 500px;">
                    <form method="get" action="timkiem.php" style="display: flex; width: 100%;">
                        <div class="input-group" style="width: 100%;">
                            <span class="input-group-text bg-white border-end-0" style="border-radius: 25px 0 0 25px;">
                                <i class="fa-solid fa-magnifying-glass" style="color: #dc3545;"></i>
                            </span>
                            <input 
                                type="text" 
                                class="form-control border-start-0 border-end-0" 
                                name="q" 
                                placeholder="Tìm kiếm món ăn, đồ uống..." 
                                required 
                                style="border-radius: 0; box-shadow: none;"
                            >
                            <button 
                                class="btn btn-danger" 
                                type="submit" 
                                name="txtfind" 
                                style="border-radius: 0 25px 25px 0; font-weight: bold;"
                            >
                                Tìm kiếm
                            </button>
                        </div>
                    </form>
                </div>
            </div>  
            <div class="col-2">
                <a href="cart.php" style="text-decoration: none; position: relative;">
                    <h4 style="display: inline-block; color: white;" class="my-5">
                        <i class="fa-solid fa-cart-shopping" style="color: white; position: relative;"></i>
                        <span style="
                            position: absolute;
                            top: 10px;
                            right: -10px;
                            background: #dc3545;
                            color: white;
                            border-radius: 50%;
                            padding: 2px 8px;
                            font-size: 14px;
                            font-weight: bold;
                        ">
                            <?= isset($_SESSION['cart_count']) ? $_SESSION['cart_count'] : 0 ?>
                        </span>
                    </h4>
                </a>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-sm" style="background-color: #681c1c;">
        <div class="container" style="font-size: 19px; color: white;">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="gioithieu.php" style="color: white; margin-left: 17px; font-weight: bold;">Giới Thiệu</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" style="color: white; margin-left: 10px; font-weight: bold;">Thực Đơn</a>
                    <ul class="dropdown-menu dropdown-content">
                        <li><a class="dropdown-item" href="banhtrang.php" style="font-size: 19px; margin-bottom: 5px;">Bánh Tráng</a></li>
                        <li><a class="dropdown-item" href="salad.php" style="font-size: 19px; margin-bottom: 5px;">Salad-Rau</a></li>
                        <li><a class="dropdown-item" href="monannhe.php" style="font-size: 19px; margin-bottom: 5px;">Món ăn nhẹ</a></li>
                        <li><a class="dropdown-item" href="gachimlon.php" style="font-size: 19px; margin-bottom: 5px;">Món gà-chim-lợn</a></li>
                        <li><a class="dropdown-item" href="monca.php" style="font-size: 19px; margin-bottom: 5px;">Món cá</a></li>
                        <li><a class="dropdown-item" href="trangmieng.php" style="font-size: 19px; margin-bottom: 5px;">Đồ uống-Tráng miệng</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="tintuc.php" style="color: white; margin-left: 5px; font-weight: bold;">Tin Tức</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="tuyendung.php" style="color: white; margin-left: 5px; font-weight: bold;">Tuyển Dụng</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="lienhe.php" style="color: white; margin-left: 5px; font-weight: bold;">Liên Hệ</a>
                </li>
                <li class="dropdown" style="margin-top: 10px; margin-left: 300px;">
                    <button type="button" class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" style="color: white; background-color: #dc3545;">
                        <i class="fa-solid fa-user"></i>
                    </button>
                    <ul class="dropdown-menu">
                        <?php if (isset($_SESSION['user_name'])): ?>
                            <li><a class="dropdown-item">Xin chào, <?= htmlspecialchars($_SESSION['user_name']); ?></a></li>
                            <li><a class="dropdown-item" href="thongtindonhang.php">Thông tin đơn hàng</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="doimk.php">Đổi mật khẩu</a></li>
                            <li><a class="dropdown-item" href="../Controller/logout.php">Đăng xuất</a></li>
                        <?php else: ?>
                            <li><a class="dropdown-item" href="login.php">Đăng nhập</a></li>
                            <li><a class="dropdown-item" href="dangky.php">Đăng ký</a></li>
                        <?php endif; ?>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</div>