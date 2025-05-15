<?php
include("../Model/order.php");
$donhang = new order();
$result = null;
$label = "";
$tongTien = 0;

if (isset($_GET['type'])) {
    $type = $_GET['type'];

    switch ($type) {
        case 'day':
            $date = $_GET['date'];
            $result = $donhang->revenueByDay($date);
            $label = "Doanh thu ngày $date";
            break;

        case 'month':
            $month = $_GET['month'];
            $result = $donhang->revenueByMonth($month);
            $label = "Doanh thu tháng $month";
            break;

        case 'quarter':
            $quarter = $_GET['quarter'];
            $year = $_GET['quarter_year'];
            $result = $donhang->revenueByQuarter($year, $quarter);
            $label = "Doanh thu quý $quarter năm $year";
            break;

        case 'year':
            $year = $_GET['year'];
            $result = $donhang->revenueByYear($year);
            $label = "Doanh thu năm $year";
            break;
    }

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $tongTien = $row['TongTien'] ?? 0;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Báo cáo doanh thu</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <link href="assets/css/basic.css" rel="stylesheet">
    <link href="assets/css/custom.css" rel="stylesheet">
</head>
<body>
<div id="wrapper">
    <!-- NAVBAR -->
    <?php include "navbar.php"; ?>

    <!-- PAGE CONTENT -->
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="container mt-5" style="border: 1px solid black; background-color: #f8d7da; padding: 20px; max-width: 600px; margin: 50px auto;">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="text-center mb-4">Báo cáo doanh thu</h2>
                    </div>
                </div>

                <!-- Form chọn loại báo cáo -->
                <div class="row">
                    <div class="col-md-12">
                        <form method="GET" class="card p-4 shadow-sm">
                            <div class="form-group mb-3">
                                <label for="type" class="form-label">Loại báo cáo</label>
                                <select name="type" id="type" class="form-control" onchange="showInputs(this.value)">
                                    <option value="day" <?= isset($_GET['type']) && $_GET['type'] == 'day' ? 'selected' : '' ?>>Theo ngày</option>
                                    <option value="month" <?= isset($_GET['type']) && $_GET['type'] == 'month' ? 'selected' : '' ?>>Theo tháng</option>
                                    <option value="quarter" <?= isset($_GET['type']) && $_GET['type'] == 'quarter' ? 'selected' : '' ?>>Theo quý</option>
                                    <option value="year" <?= isset($_GET['type']) && $_GET['type'] == 'year' ? 'selected' : '' ?>>Theo năm</option>
                                </select>
                            </div>

                            <!-- Input theo ngày -->
                            <div id="input-day" class="form-group mb-3">
                                <label for="date" class="form-label">Chọn ngày</label>
                                <input type="date" id="date" name="date" class="form-control" value="<?= $_GET['date'] ?? '' ?>">
                            </div>

                            <!-- Input theo tháng -->
                            <div id="input-month" class="form-group mb-3" style="display:none;">
                                <label for="month" class="form-label">Chọn tháng</label>
                                <input type="month" id="month" name="month" class="form-control" value="<?= $_GET['month'] ?? '' ?>">
                            </div>

                            <!-- Input theo quý -->
                            <div id="input-quarter" class="form-group mb-3" style="display:none;">
                                <label for="quarter" class="form-label">Chọn quý</label>
                                <select id="quarter" name="quarter" class="form-select">
                                    <option value="1" <?= ($_GET['quarter'] ?? '') == 1 ? 'selected' : '' ?>>Quý 1</option>
                                    <option value="2" <?= ($_GET['quarter'] ?? '') == 2 ? 'selected' : '' ?>>Quý 2</option>
                                    <option value="3" <?= ($_GET['quarter'] ?? '') == 3 ? 'selected' : '' ?>>Quý 3</option>
                                    <option value="4" <?= ($_GET['quarter'] ?? '') == 4 ? 'selected' : '' ?>>Quý 4</option>
                                </select>
                                <label for="quarter_year" class="form-label mt-2">Chọn năm</label>
                                <input type="number" id="quarter_year" name="quarter_year" class="form-control" placeholder="Nhập năm" value="<?= $_GET['quarter_year'] ?? '' ?>">
                            </div>

                            <!-- Input theo năm -->
                            <div id="input-year" class="form-group mb-3" style="display:none;">
                                <label for="year" class="form-label">Chọn năm</label>
                                <input type="number" id="year" name="year" class="form-control" placeholder="Nhập năm" value="<?= $_GET['year'] ?? '' ?>">
                            </div>

                            <button type="submit" class="btn btn-primary w-100">Xem báo cáo</button>
                        </form>
                    </div>
                </div>

                <!-- Kết quả báo cáo -->
                <?php if (isset($_GET['type'])): ?>
                    <div class="row mt-5">
                        <div class="col-md-12">
                            <div class="card p-4 shadow-sm">
                                <p class="text-center">
                                    <strong><?= $label ?>:</strong> <?= number_format($tongTien, 0, ',', '.') ?> VNĐ
                                </p>
                                <?php if ($tongTien > 0): ?>
                                    <canvas id="doanhthuChart" width="800" height="500"></canvas>
                                <?php else: ?>
                                    <div class="alert alert-warning text-center mt-3">
                                        Không có dữ liệu.
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<!-- FOOTER -->

<!-- SCRIPTS -->
<script src="assets/js/jquery-1.10.2.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/jquery.metisMenu.js"></script>
<script src="assets/js/custom.js"></script>
<script>
function showInputs(type) {
    document.getElementById("input-day").style.display = type === "day" ? "block" : "none";
    document.getElementById("input-month").style.display = type === "month" ? "block" : "none";
    document.getElementById("input-quarter").style.display = type === "quarter" ? "block" : "none";
    document.getElementById("input-year").style.display = type === "year" ? "block" : "none";
}

// Hiển thị đúng input khi load lại trang
showInputs("<?= $_GET['type'] ?? 'day' ?>");
</script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
const ctx = document.getElementById('doanhthuChart').getContext('2d');
new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['<?= $label ?>'],
        datasets: [{
            label: 'Doanh thu (VNĐ)',
            data: [<?= $tongTien ?>],
            backgroundColor: 'rgba(54, 162, 235, 0.6)',
            borderColor: 'rgba(54, 162, 235, 1)',
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true,
                ticks: {
                    callback: function(value) {
                        return new Intl.NumberFormat('vi-VN').format(value);
                    }
                }
            }
        }
    }
});
</script>
</body>
</html>