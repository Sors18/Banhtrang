<?php
include("../Model/sanpham.php"); // Kết nối đến model sản phẩm
include("navbar.php"); // Thanh điều hướng

// Lấy ID sản phẩm từ URL
$id = isset($_GET['id']) ? $_GET['id'] : 0;

// Tạo đối tượng model sản phẩm
$model = new sanpham();

// Lấy thông tin sản phẩm theo ID
$sl_id = $model->select_id($id);
$sl_id = $sl_id->fetch_assoc();

// Kiểm tra nếu sản phẩm không tồn tại
if (!$sl_id) {
    echo "<script>alert('Sản phẩm không tồn tại!'); window.location.href = 'index.php';</script>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi Tiết Sản Phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="CSS/dinhdang.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <!-- Hình ảnh sản phẩm -->
            <div class="col-5">
                <img src="../Upload/<?php echo $sl_id['hinhanh']; ?>" alt="<?php echo htmlspecialchars($sl_id['tensp']); ?>" class="img-fluid">
            </div>

            <!-- Thông tin sản phẩm -->
            <div class="col-7">
                <h2 style="color: brown; font-weight: 650;"><?php echo htmlspecialchars($sl_id['tensp']); ?></h2>
                <p><strong>Danh mục:</strong> <?php echo htmlspecialchars($sl_id['danhmuc']); ?></p>
                <p><strong>Giá:</strong> <span style="color: red;"><?php echo number_format($sl_id['gia'], 0, ',', '.'); ?> VNĐ</span></p>
                <p><strong>Mô tả:</strong> <?php echo htmlspecialchars($sl_id['mota']); ?></p>
                <form method="post" action="../Controller/add_cart.php">
                    <div class="input-group mb-3" style="width: 210px;">
                        <input type="hidden" name="id_pro" value="<?php echo $sl_id['id_sanpham']; ?>">
                        <input type="number" name="txtsl" class="form-control" value="1" min="1">
                        <button class="btn btn-danger" type="submit" style="background-color:#701c1c;" name="txtsub">Thêm vào giỏ hàng</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Sản phẩm liên quan -->
    <div class="container mt-5">
        <h4>Sản phẩm liên quan</h4>
        <div class="row">
            <?php
            // Lấy sản phẩm liên quan (cùng danh mục, khác ID)
            $related_products = $model->select_notin_id($sl_id['danhmuc'], $id);
            $count = 0;

            foreach ($related_products as $row) {
                $count++;
                ?>
                <div class="col-3">
                    <a href="chitietsp.php?id=<?php echo $row['id_sanpham']; ?>" class="text-decoration-none">
                        <div class="card" style="height: 100%; display: flex; flex-direction: column; justify-content: space-between;">
                            <img src="../Upload/<?php echo $row['hinhanh']; ?>" class="card-img-top" alt="<?php echo htmlspecialchars($row['tensp']); ?>" style="height: 250px; object-fit: cover;">
                            <div class="card-body">
                                <h5 class="card-title text-center" style="min-height: 48px;"><?php echo htmlspecialchars($row['tensp']); ?></h5>
                                <p class="text-center text-danger"><?php echo number_format($row['gia'], 0, ',', '.'); ?> VNĐ</p>
                            </div>
                        </div>
                    </a>
                </div>
                <?php
                if ($count == 4) break; // Hiển thị tối đa 4 sản phẩm liên quan
            }
            ?>
        </div>
    </div>

    <!-- <?php include("footer.php"); ?> -->
</body>
</html>