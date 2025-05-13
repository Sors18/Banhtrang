-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 13, 2025 lúc 06:08 PM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `banhtrang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id_cart` int(11) NOT NULL,
  `id_user` varchar(200) DEFAULT NULL,
  `id_sanpham` int(11) DEFAULT NULL,
  `Soluong` int(11) DEFAULT NULL,
  `donhang` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id_cart`, `id_user`, `id_sanpham`, `Soluong`, `donhang`) VALUES
(14, 'Sors1', 4, 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `id_donhang` int(11) NOT NULL,
  `hoten` varchar(100) DEFAULT NULL,
  `diachi` varchar(250) DEFAULT NULL,
  `sdt` varchar(20) DEFAULT NULL,
  `trangthai` varchar(50) DEFAULT NULL,
  `user_id` varchar(50) DEFAULT NULL,
  `Time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`id_donhang`, `hoten`, `diachi`, `sdt`, `trangthai`, `user_id`, `Time`) VALUES
(1, 'Phuc', 'HN', '369', 'Chờ xác nhận', 'Sors1', '2025-05-13 16:39:56');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sanpham` int(11) NOT NULL,
  `danhmuc` varchar(250) DEFAULT NULL,
  `tensp` varchar(250) DEFAULT NULL,
  `gia` varchar(250) DEFAULT NULL,
  `hinhanh` varchar(250) DEFAULT NULL,
  `mota` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id_sanpham`, `danhmuc`, `tensp`, `gia`, `hinhanh`, `mota`) VALUES
(3, 'Banhtrang', 'Bánh tráng thịt Heo quay', '169000', 'Banh-trang-thit-heo-quay-600x600.jpg', 'Nguyên liệu chính của món này chính là thịt ba chỉ Heo quay. Lớp da vàng ươm, nỏ bóng giòn bì. Lớp thịt ba chỉ mềm ngọt thịt. Khi ăn ta cuốn cùng các loại của quả như dứa, cà rốt, dưa chuột, xoài xanh thái chỉ. Cùng các loại rau gia vị như lá cóc, tí'),
(4, 'Banhtrang', 'Bánh tráng thịt Heo hấp', '159000', 'Banh-trang-thit-heo-hap-600x600.jpg', 'Nguyên liệu gồm: \r\nThịt Heo ba chỉ  hấp, \r\nBún tươi (bún rối),\r\nTỏi, ớt, đường, sả, chanh tươi,\r\nBánh tráng cuốn, bánh tráng ướt,\r\nMuối, bột ngọt, mắm nêm nguyên chất.\r\nCác loại rau cuốn như xà lách, dưa chuột, cà rốt, rau thơm… (linh hoạt thay đổi t'),
(5, 'Banhtrang', 'Bánh tráng cuốn Bò tơ', '179000', 'Banh-trang-cuon-bo-to-600x600.jpg', 'Thịt bò tơ chắc, tươi ngon, hương vị đặc trưng được lát mỏng. Cuốn cùng các loại rau gia vị và củ quả. Chấm với nước tương được pha chế theo công thức bí mật. Chắc chắn sẽ mang đến cho thực khách một bữa ăn thú vị.        '),
(6, 'Banhtrang', 'Bánh tráng cuốn Bò lá lốt', '169000', 'Banh-trang-cuon-bo-la-lot-600x600.jpg', 'Chả thịt Bò quấn lá lốt béo ngậy thơm nhức mũi. Cuốn cùng các loại rau gia vị. Chấm nước mắm nêm chuẩn vị miền Trung sẽ chinh phục bất cứ thực khách khó tính nào.        '),
(7, 'Salad', 'Bí nụ non xào tỏi', '109000', 'Bi-nu-non-xao-toi-600x600.jpg', '        '),
(8, 'Salad', 'Salad rau càng cua', '159000', 'Salad-rau-cang-cua-600x600.jpg', '        '),
(9, 'Salad', 'Salad Rong biển trứng Tôm', '109000', 'Salad-rong-bien-trung-tom-600x599.jpg', 'Salad có vị giòn ngon, hơi có mùi tanh của Rong biển. Khi kết hợp với trứng Tôm tạo nên một hương vị thơm ngon rất khó tả.        '),
(10, 'Salad', 'Nộm ngó Sen tai Lợn Tôm', '125000', 'Nom-ngo-sen-tai-lon-tom-600x600.jpg', '      Nộm Ngó Sen tai Lợn Tôm là món ăn khai vị rất thú vị. Tai Lợn giòn sần sật. Ngó Sen là loại rau rất tốt cho sức khỏe. Có chứa nhiều asparagin, là một loại amino acid không tự sản xuất được trong cơ thể. Hoạt chất này có vai trò quan trọng trong'),
(11, 'Salad', 'Nộm Miến hải sản sốt Thái', '169000', 'Nom-mien-hai-san-xot-thai-600x600.jpg', 'Nộm miến hải sản sốt Thái là món ăn rất phù hợp đối với những người muốn giảm cân. Món ăn này có vị chua chua cay cay. Sợi miến dai dai. Sứa tươi giòn giòn. Thịt Tôm Sú ngọt đậm, mực tươi sần sật.        '),
(12, 'Salad', 'Nộm Sứa', '95000', 'Nom-sua-600x593.jpg', 'Nộm Sứa rất thích hợp làm món khai vị. Món ăn này bổ mát. Chữa chứng huyết, huyết ứ nhiệt nổi mụn, đau đầu chóng mặt tăng huyết áp, ho đờm, táo bón và các chứng liên quan nhức mỏi huyết ứ đều tốt.        '),
(13, 'Monannhe', 'Đậu hũ non hải sản sốt nấm', '189000', 'Dau-hu-non-hai-san-sot-nam-600x600.jpg', 'Đậu hũ non hải sản sốt nấm gồm tôm, mực đậu hũ và các loại nấm. Đây là món ăn lạ và thú vị cung cấp nhiều chất Protein.        '),
(14, 'Monannhe', 'Đậu hũ non rang muối', '95000', 'Dau-hu-non-rang-muoi-600x600.jpg', 'Đậu hũ non rang muối: Vị ngậy của ruốc tôm là sự kết hợp với đậu hũ non mềm mịn tuyệt vời khiến người ăn không thể nào quên được        '),
(15, 'Monannhe', 'Nem nấm hải sản', '179000', 'Nem-nam-hai-san-600x600.jpg', 'Nem nấm hải sản: là món ăn giàu kẽm và sắt. Đây là những chất dinh dưỡng rất tốt để cải thiện các vấn đề xấu của căn bệnh thiếu máu. Ngoài ra, nó cũng giúp cho mái tóc của các bạn thêm khỏe và đẹp hơn.        '),
(16, 'Monannhe', 'Nem Ốc', '149000', 'Nem-oc-600x600.jpg', 'Thịt Ốc Nhồi được băm nhỏ trộn cùng Tôm tươi, thịt Heo xay, mộc nhĩ, nấm hương, cà rốt, miến dong… Khi được chiên xong vỏ nem giòn rụm, nhân ngọt thơm và có chút dai sần sật từ ốc, kết hợp với nước chấm mắm chua ngọt sẽ khiến bạn ngỡ ngàng.        '),
(17, 'Monannhe', 'Khoai Tây chiên', '59000', 'Khoai-tay-chien-600x600.jpg', 'Khoai Tây chiên cung cấp lượng chất béo khá lớn. Trong 100g Khoai Tây chiên chứa khoảng 150 calo và nhiều thành phần dinh dưỡng khác. Bao gồm 4 gam chất béo, 282mg natri, 21g carbohydrate, 2g chất xơ và 2g protein.        '),
(18, 'Monannhe', 'Ngô chiên bơ', '59000', 'Ngo-chien-bo-600x600.jpg', 'Trong 100g ngô có khoảng 1.2g chất béo, 2.7g chất xơ, 3.2g đường. Cung cấp năng lượng cho bạn 170 calo. Ngoài ra Ngô còn cung cấp các vitamin như  A, canxi, vitamin C, Magie.        '),
(19, 'Mongachimlon', 'Gà hấp mắm nửa con', '285000', 'ga-hap-mam-600x600.jpg', 'Gà mái ta hấp với nước mắm cốt và các loại gia vị như hạt tiêu, tỏi, ớt…        '),
(20, 'Mongachimlon', 'Chim Câu quay', '179000', 'Chim-cau-quay-600x600.jpg', 'Thịt chim Câu chứa nhiều chất dinh dưỡng. Đặc biệt hàm lượng protein (chất đạm) cao lên đến 24%. Nhưng lại chứa ít chất béo, nhất là cholesterol chỉ khoảng 0,3%. Món ăn từ chim Câu có tác dụng tăng cường khí huyết, kích thích tiêu hóa, bồi bổ ngũ tạn'),
(21, 'Mongachimlon', 'Chân giò Heo muối chiên giòn', '255000', 'Chan-gio-heo-muoi-chien-gion-600x599.jpg', 'Chân giò Heo muối chiên giòn: có lớp bì giòn vàng ươm, phần thịt lại dai ngon vô cùng, thấm đều hương vị của sả ớt và muối ướp.        '),
(22, 'Mongachimlon', 'Dồi Heo nướng', '135000', 'Doi-heo-nuong-600x600.jpg', 'Khi ăn ta cảm nhận được vị ngon của thịt nạc, vị dai dai của lòng non, vị giòn sần sật của sụn non, vị ngậy bùi của đỗ xanh. Món Dồi Heo nướng thơm ngon và hấp dẫn ăn kèm với các loại rau thơm gi vị đi kèm như lá mơ lông, húng quế, húng chó, giếng, x'),
(23, 'Mongachimlon', 'Chim Câu xúc phồng tôm', '155000', 'Chim-cau-xuc-phong-tom.jpg', 'Chim Câu xúc phồng tôm là món ăn chơi thú vị. Phồng tôm chiên giòn tan. Thịt chim Bồ Câu ngọt bổ dưỡng được băm nhỏ xào với rau răm, ớt, hành lá rất đậm vị.        '),
(24, 'Mongachimlon', 'Chân Gà chiên mắm', '149000', 'Chan-ga-chien-mam-600x598.jpg', 'Chân Gà chiên mắm: có vị đậm đà của nước mắm, chân Gà ăn dai, giòn. Chân Gà có màu vàng đậm, nước sốt sánh quện sẽ rất ngon và bắt mắt.        '),
(25, 'Monca', 'Cá lăng hấp xì dầu', '215000', 'Ca-lang-hap-xi-dau-600x600.jpg', '        '),
(26, 'Monca', 'Cá Lăng nướng sa tế TomYum', '225000', 'Ca-lang-nuong-sate-tomyum.jpg', 'Cá Lăng nướng sa tế Tom Yum\r\n\r\nBún tươi\r\n\r\nBánh tráng khô và ướt\r\n\r\nDứa, Cà rốt, dưa chuột, rau diếp, thì là        '),
(27, 'Monca', 'Lẩu cá Lăng măng cay', '460000', 'Lau-ca-lang-mang-cay-600x600.jpg', 'Cá Lăng sông với thịt màu trắng, dai béo, thơm ngọt. Nồi nước dùng từ xương lợn, kết hợp với vị chua của măng, vị cay của ớt hiểm. Mùi thơm của thì là, hành lá sẽ tạo cho bạn một bữa ăn ngon miệng.        '),
(28, 'Monca', 'Cá Trắm giòn trộn cay', '199000', 'Ca-tram-gion-tron-cay-600x600.jpg', 'Cá Trắm giòn trộn cay: thịt cá Trắm giòn ngọt hòa cùng vị chua thanh của chanh, cay nhẹ của ớt. Cùng với một chút hăng của hành thực sự là món ăn đáng cho bạn thưởng thức        '),
(29, 'Monca', 'Cá Lăng hấp chanh', '225000', 'Ca-lang-hap-chanh-600x600.jpg', 'Cá Lăng hấp chanh là món ăn lạ miệng. Thịt cá Lăng trắng, ngon, dai nhiều chất dinh dưỡng.        '),
(30, 'Monca', 'Cá Kèo nướng muối ớt', '165000', 'ca-keo-nuong-muoi-ot-2-600x600.jpg', 'Tuy là món ăn dân dã nhưng món cá Kèo nướng muối ớt lại chinh phục thực khách bởi hương vị cay nồng đặc trưng, thơm ngon.        '),
(31, 'Trangmieng', 'Hoa quả thập cẩm', '120000', 'Hoa-qua-thap-cam-600x600.jpg', 'Hoa quả thập cẩm        '),
(32, 'Trangmieng', 'Hoa quả Dưa hấu', '70000', 'Hoa-qua-dua-hau-600x600.jpg', 'Hoa quả Dưa hấu        '),
(33, 'Trangmieng', 'Nước Dưa hấu ép', '45000', 'Nuoc-ep-dua-hau-600x600.jpg', 'Nước Dưa hấu ép        '),
(34, 'Trangmieng', 'Nước Dứa ép', '45000', 'Nuoc-ep-dua-600x600.jpg', 'Nước Dứa ép        '),
(35, 'Trangmieng', 'Kem chocolate', '28000', 'Kem-socola-600x600.jpg', 'Kem socola        '),
(36, 'Trangmieng', 'Kem Dừa', '28000', 'Kem-dua-600x600.jpg', 'Kem Dừa        ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_inf`
--

CREATE TABLE `user_inf` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `pass` varchar(100) DEFAULT NULL,
  `user_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `user_inf`
--

INSERT INTO `user_inf` (`id_user`, `username`, `pass`, `user_type`) VALUES
(1, 'Sors1', '12345', 0),
(3, 'phuc1', '1', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_cart`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id_donhang`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sanpham`);

--
-- Chỉ mục cho bảng `user_inf`
--
ALTER TABLE `user_inf`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id_donhang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT cho bảng `user_inf`
--
ALTER TABLE `user_inf`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
