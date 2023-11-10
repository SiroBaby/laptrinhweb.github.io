-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2023 at 03:56 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dl_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitietdondathang`
--

CREATE TABLE `chitietdondathang` (
  `Ma_chi_tiet_DH` varchar(50) NOT NULL,
  `Ma_Sp` varchar(50) NOT NULL,
  `So_luong` int(10) NOT NULL,
  `Gia_SP` varchar(20) NOT NULL,
  `Thanh_tien` varchar(30) NOT NULL,
  `Ma_GH` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chitietdondathang`
--

INSERT INTO `chitietdondathang` (`Ma_chi_tiet_DH`, `Ma_Sp`, `So_luong`, `Gia_SP`, `Thanh_tien`, `Ma_GH`) VALUES
('900', 'TN502', 1, '118.000.000đ', '118.000.000đ', 120),
('901', 'TN502', 1, '118.000.000đ', '118.000.000đ', 120),
('902', 'TN3141', 3, '3.200.000đ', '9.600.000đ', 122),
('903', 'TN2188', 2, '69.000.000đ', '138.000.000đ', 123),
('904', 'TN2928', 2, '56.000.000đ', '112.000.000đ', 125),
('905', 'TN502', 1, '118.000.000đ', '118.000.000đ', 127),
('906', 'TN3264', 2, '73.000.000đ', '146.000.000đ', 129),
('907', 'NT5419', 10, '990.000đ', '9.900.000đ', 128),
('908', 'TN3264', 2, '73.000.000đ', '146.000.000đ', 129),
('909', 'TN3141', 3, '30.000.000đ', '90.000.000đ', 124);

-- --------------------------------------------------------

--
-- Table structure for table `chitietgiohang`
--

CREATE TABLE `chitietgiohang` (
  `Ma_chi_tiet_GH` varchar(50) NOT NULL,
  `Ma_Sp` varchar(50) NOT NULL,
  `Gia_SP` varchar(20) NOT NULL,
  `So_luong` int(10) NOT NULL,
  `Thanh_tien` varchar(30) NOT NULL,
  `Tong_thanh_tien` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chitietgiohang`
--

INSERT INTO `chitietgiohang` (`Ma_chi_tiet_GH`, `Ma_Sp`, `Gia_SP`, `So_luong`, `Thanh_tien`, `Tong_thanh_tien`) VALUES
('A100', 'TN502', '118.000.000đ', 1, '118.000.000đ', '118.000.000đ'),
('A101', 'NT1110', '3.200.000đ', 5, '16.000.000đ', '16.000.000đ'),
('A102', 'NT1234', '3.200.000đ', 3, '9.600.000đ', '9.600.000đ'),
('A103', 'TN3141', '30.000.000đ', 3, '90.000.000đ', '90.000.000đ'),
('A104', 'TN2188', '69.000.000đ', 2, '138.000.000đ', '138.000.000đ'),
('A105', 'NT5419', '990.000đ', 10, '9.900.000đ', '9.900.000đ'),
('A106', 'TN2928', '56.000.000đ', 2, '112.000.000đ', '112.000.000đ'),
('A107', 'TN3264', '73.000.000đ', 2, '146.000.000đ', '146.000.000đ'),
('A108', 'TN3141', '15.000.000đ', 3, '45.000.000đ', '45.000.000đ'),
('A109', 'TN502', '118.000.000đ', 1, '118.000.000đ', '118.000.000đ');

-- --------------------------------------------------------

--
-- Table structure for table `danhmucsanpham`
--

CREATE TABLE `danhmucsanpham` (
  `Ma loai` int(10) NOT NULL,
  `Ten loai` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `danhmucsanpham`
--

INSERT INTO `danhmucsanpham` (`Ma loai`, `Ten loai`) VALUES
(101, 'Kim cương tự nhiên'),
(102, 'Kim cương nhân tạo');

-- --------------------------------------------------------

--
-- Table structure for table `dondathang`
--

CREATE TABLE `dondathang` (
  `Ma_DH` int(10) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `SDT` varchar(10) NOT NULL,
  `Ngay_lap` date NOT NULL,
  `Tinh_trang` varchar(50) NOT NULL,
  `Noi_nhan` varchar(50) NOT NULL,
  `Loai_VC` varchar(50) NOT NULL,
  `Tong_thanh_toan` varchar(30) NOT NULL,
  `Ma_chi_tiet_DH` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dondathang`
--

INSERT INTO `dondathang` (`Ma_DH`, `Username`, `SDT`, `Ngay_lap`, `Tinh_trang`, `Noi_nhan`, `Loai_VC`, `Tong_thanh_toan`, `Ma_chi_tiet_DH`) VALUES
(110, 'Nguyễn Văn Tèo', '0123456789', '2023-10-01', 'Đang giao', '123 Hàm Nghi -Tân phú -TPHCM', 'Giao hàng nhanh', '118.000.000đ', '900'),
(111, 'Trần Quỳnh Anh', '0987654321', '2023-10-09', 'Đã nhận', '258 Phạm Văn Đồng - Bình Thạnh -TPHCM', 'Giao hỏa tốc', '118.000.000đ', '901'),
(112, 'Mai Thành Công', '0246813579', '2023-10-05', 'Đang giao', '22 Quang Trung-Gò Vấp-TPHCM', 'Giao hàng nhanh', '9.600.000đ', '902'),
(113, 'Nguyễn Toàn Thắng', '0135792468', '2023-10-03', 'Đã nhận', '56 Đồng Đen-Tân Bình', 'Giao hàng nhanh', '138.000.000đ', '903'),
(114, 'Lý Thạch Sanh', '0123789456', '2023-10-06', 'Đang giao', '11 Lý Thường Kiệt-Q10-TPHCM', 'Giao hỏa tốc', '112.000.000đ', '904'),
(115, 'Nguyễn Văn Bé', '0456789123', '2023-10-12', 'Đang giao', '45 Phổ Quang-Phú Nhuận-TPHCM', 'Giao hàng nhanh', '118.000.000đ', '905'),
(116, 'Trần Thị Na', '0789456123', '2023-10-21', 'Đã nhận', '100 Nguyễn Thái Sơn-Gò Vấp-TPHCM', 'Giao hàng nhanh', '146.000.000đ', '906'),
(117, 'Lê Văn Tám', '0963852741', '2023-10-16', 'Đang giao', '46 Hoàng Hoa Thám-Bình Thạnh-TPHCM', 'Giao hỏa tốc', '9.900.000đ', '907'),
(118, 'Trần Lý Thông', '0741852963', '2023-10-23', 'Đã nhận', '56 Tô Ngọc Vân-Thủ Đức-TPHCM', 'Giao hàng nhanh', '146.000.000đ', '908'),
(119, 'Đậu Đại Học', '0852741963', '2023-10-19', 'Đã nhận', '10 Hoàng Thế Thiện-Q2-TPHCM', 'Giao hỏa tốc', '90.000.000đ', '909');

-- --------------------------------------------------------

--
-- Table structure for table `donvivanchuyen`
--

CREATE TABLE `donvivanchuyen` (
  `Loai_VC` varchar(50) NOT NULL,
  `SDT_DVVC` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donvivanchuyen`
--

INSERT INTO `donvivanchuyen` (`Loai_VC`, `SDT_DVVC`) VALUES
('Giao hàng nhanh', '0223665544'),
('Giao hỏa tốc', '0266487539');

-- --------------------------------------------------------

--
-- Table structure for table `giohang`
--

CREATE TABLE `giohang` (
  `Ma_GH` int(10) NOT NULL,
  `Ma_User` int(10) NOT NULL,
  `Ma_chi_tiet_GH` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `giohang`
--

INSERT INTO `giohang` (`Ma_GH`, `Ma_User`, `Ma_chi_tiet_GH`) VALUES
(120, 1, 'A100'),
(121, 2, 'A100'),
(122, 3, 'A102'),
(123, 3, 'A104'),
(124, 1, 'A103'),
(125, 9, 'A106'),
(126, 7, 'A107'),
(127, 10, 'A109'),
(128, 8, 'A105'),
(129, 6, 'A107');

-- --------------------------------------------------------

--
-- Table structure for table `lienhe`
--

CREATE TABLE `lienhe` (
  `Ma_LH` int(10) NOT NULL,
  `Ten_KH` varchar(50) NOT NULL,
  `Noi_dung` varchar(100) NOT NULL,
  `Ngay_gio` date NOT NULL,
  `Ma_User` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lienhe`
--

INSERT INTO `lienhe` (`Ma_LH`, `Ten_KH`, `Noi_dung`, `Ngay_gio`, `Ma_User`) VALUES
(11109, 'Trần Quỳnh Anh', 'Tôi muốn được tư vấn về loại kim cương tự nhiên square emerald ở cửa hàng', '2023-10-11', 7),
(11365, 'Lê Văn Tám', 'Hàng đã được giao chưa vậy store', '2023-10-19', 2),
(12345, 'Đậu Đại Học', 'Tôi muốn mua loại kim tự nhiên có giá trên 100tr để tặng người yêu. Nhờ Store có thể tư vấn cho ', '2023-10-10', 6),
(12365, 'Nguyễn Văn Trèo', 'Store có ship toàn quốc không', '2023-10-01', 1),
(12546, 'Lý Thạch Sanh', 'Tôi muốn được tư vấn về sản phẩm của store', '2023-10-04', 9),
(13244, 'Nguyễn Toàn Thắng', 'Tôi muốn được tư vấn về sản phẩm của store', '2023-10-15', 8),
(13526, 'Trần Thị Na', 'Đã nhận hàng. Hàng rất chất lượng', '2023-10-07', 4),
(14789, 'Trần Lý Thông', 'Tôi muốn được tư vấn về kim cương nhân tạo của store', '2023-10-15', 10),
(16235, 'Nguyễn Văn Bé', 'Tôi muốn được tư vấn về loại kim cương moissanite của store', '2023-10-18', 3),
(16548, 'Mai Thành Công ', 'Còn mẫu kim cương nhân tạo nào nữa không', '2023-10-09', 5);

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `Ma_Sp` varchar(50) NOT NULL,
  `Gia_SP` varchar(20) NOT NULL,
  `So_luong` int(10) NOT NULL,
  `Trong_luong` varchar(10) NOT NULL,
  `Mau_sac` varchar(10) NOT NULL,
  `Do_tinh_khiet` varchar(10) NOT NULL,
  `Kich_thuoc` varchar(50) NOT NULL,
  `Hinh_dang` varchar(20) NOT NULL,
  `Hinh_anh` mediumtext NOT NULL,
  `Ma_loai` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`Ma_Sp`, `Gia_SP`, `So_luong`, `Trong_luong`, `Mau_sac`, `Do_tinh_khiet`, `Kich_thuoc`, `Hinh_dang`, `Hinh_anh`, `Ma_loai`) VALUES
('NT1110', '3.200.000đ', 50, '2.0 carat', 'Green', 'FL', '8.1mm', 'Moissanite Round', 'https://trangsucdaquy.vn/wp-content/uploads/2022/07/Moigreen.jpg', 102),
('NT1234', '3.200.000đ', 50, '2.0 carat', 'Blue Grey', 'FL', '8.1.mm', 'Moissanite Round', 'https://trangsucdaquy.vn/wp-content/uploads/2022/07/MOi-xanh.jpg', 102),
('NT5419', '990.000đ', 50, '2.0 carat', 'D', 'FL', '8.1mm', 'Moissanite Round', 'https://trangsucdaquy.vn/wp-content/uploads/2021/06/81.jpg', 102),
('TN110', '9.000.000đ', 20, '0.31 carat', 'I', 'VV2', '5.98 x 3.46 x 2.38 mm', 'Pear', 'https://product.hstatic.net/200000268769/product/128_1__61c8866b932a4f0c8fa60d5aede92ab8_master.png', 101),
('TN2188', '69.000.000đ', 3, '0.50 carat', 'D', 'IF', '5.14 - 5.16 x 3.13 mm', 'Round', 'https://product.hstatic.net/200000268769/product/2188_2f48d82bcaac446b885d3e9296ae9c03_master.png', 101),
('TN2928', '56.000.000đ', 10, '2.7 carat', 'F', 'VS1', '9.68 x 6.67 mm', 'Emerald', 'https://product.hstatic.net/200000268769/product/78_ea859be866fc4d1a828c65f48250f9b3_master.jpg', 101),
('TN3141', '15.000.000đ', 5, '0.20 carat', 'D', 'IF', '3.81-3.83x 2.31m', 'Round', 'https://product.hstatic.net/200000268769/product/3141_72e43a72c33f441898c5e7f0b742094b_master.png\r\n', 101),
('TN3143', '30.000.000đ', 15, '0.83 carat', 'D', 'VVS1', '5.94 - 5.97 x 3.73 mm', 'Round', 'https://product.hstatic.net/200000268769/product/143_7b67cc39833e4550a5db2d5ae6de56de_master.jpg', 101),
('TN3264', '73.000.000đ', 7, '0.71 carat', 'F', 'VVS2', '5.40 - 6.38 x 3.71 mm', 'Heart', 'https://product.hstatic.net/200000268769/product/3264_cd73e2bfdbe14fb48848861af2c31bbf_master.png', 101),
('TN502', '118.000.000đ', 5, '1.01 carat', 'G', 'VVS2', '5.43 - 5.40 x 3.76 mm', 'Square Emerald', 'https://product.hstatic.net/200000268769/product/502__2__d519aa05a7624bbab523a85d4bc25dbc_master.png', 101);

-- --------------------------------------------------------

--
-- Table structure for table `thanhtoan`
--

CREATE TABLE `thanhtoan` (
  `Ma_TT` int(10) NOT NULL,
  `Ma_GH` int(10) NOT NULL,
  `Ma_Sp` varchar(50) NOT NULL,
  `So_luong_Sp` int(10) NOT NULL,
  `Gia_Sp` varchar(20) NOT NULL,
  `Thanh_tien` varchar(30) NOT NULL,
  `Hinh_anh` varchar(100) NOT NULL,
  `Phuong_thuc_TT` varchar(50) NOT NULL,
  `Thoi_gian_TT` datetime NOT NULL,
  `Tong_thanh_toan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Ma_User` int(10) NOT NULL,
  `SDT` varchar(10) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Role` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Ma_User`, `SDT`, `Username`, `Email`, `Password`, `Role`) VALUES
(1, '0123456789', 'Nguyễn Văn Tèo', 'teo123@gmail.com', '123456789', 1),
(2, '0987654321', 'Lê Văn Tám', 'levan8@gmail.com', 'lvt123456789', 1),
(3, '0246813579', 'Nguyễn Văn Bé ', 'bebebe@gmail.com', '246813579be', 1),
(4, '0135792468', 'Trần Thị Na', 'nana@gmail.com', 'nana7777777', 1),
(5, '0123789456', 'Mai Thành Công', 'thanhcong@gmail.com', 'thanhcong00000', 1),
(6, '0456789123', 'Đậu Đại Học', 'dh123@gamil.com', 'daihoc123123', 1),
(7, '0789456123', 'Trần Quỳnh Anh', 'qanh@gmail.com', 'qanh1593572468', 1),
(8, '0963852741', 'Nguyễn Toàn Thắng', 'winwin123@gmail.com', 'winwin255255255', 1),
(9, '0741852963', 'Lý Thạch Sanh', 'thachsanh123@gmail.com', 'thachsanh789456123', 1),
(10, '0852741963', 'Trần Lý Thông', 'thongthong224466@gmail.com', 'thongthong22446688', 1),
(11, '123', 'Emphét2k4', 'Emphet2k4@admin.com', 'Admin101010', 0),
(12, '123', 'PHB', 'Ben@admim.com', 'Admin101010', 0),
(13, '123', 'Lâm Như', 'LN@admin.com', 'Admin101010', 0),
(14, '123', 'HYHY', 'Hy@admin.com', 'Admin101010', 0),
(15, '123', 'ĐN', 'Ok@admin', 'Admin101010', 0),
(16, '123', 'Duyy', 'Duy@admin.com', 'Admin101010', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitietdondathang`
--
ALTER TABLE `chitietdondathang`
  ADD PRIMARY KEY (`Ma_chi_tiet_DH`),
  ADD KEY `Ma_Sp` (`Ma_Sp`),
  ADD KEY `chitietdondathang_ibfk_1` (`Ma_GH`);

--
-- Indexes for table `chitietgiohang`
--
ALTER TABLE `chitietgiohang`
  ADD PRIMARY KEY (`Ma_chi_tiet_GH`);

--
-- Indexes for table `danhmucsanpham`
--
ALTER TABLE `danhmucsanpham`
  ADD PRIMARY KEY (`Ma loai`);

--
-- Indexes for table `dondathang`
--
ALTER TABLE `dondathang`
  ADD PRIMARY KEY (`Ma_DH`),
  ADD KEY `Loai VC` (`Loai_VC`),
  ADD KEY `Ma_chi_tiet_DH` (`Ma_chi_tiet_DH`);

--
-- Indexes for table `donvivanchuyen`
--
ALTER TABLE `donvivanchuyen`
  ADD PRIMARY KEY (`Loai_VC`);

--
-- Indexes for table `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`Ma_GH`),
  ADD KEY `Mã KH` (`Ma_User`),
  ADD KEY `Ma_chi_tiet_GH` (`Ma_chi_tiet_GH`);

--
-- Indexes for table `lienhe`
--
ALTER TABLE `lienhe`
  ADD PRIMARY KEY (`Ma_LH`),
  ADD KEY `Mã KH` (`Ma_User`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`Ma_Sp`),
  ADD KEY `Mã loại` (`Ma_loai`);

--
-- Indexes for table `thanhtoan`
--
ALTER TABLE `thanhtoan`
  ADD PRIMARY KEY (`Ma_TT`),
  ADD KEY `Ma_GH` (`Ma_GH`),
  ADD KEY `Ma_Sp` (`Ma_Sp`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Ma_User`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `danhmucsanpham`
--
ALTER TABLE `danhmucsanpham`
  MODIFY `Ma loai` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `dondathang`
--
ALTER TABLE `dondathang`
  MODIFY `Ma_DH` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `lienhe`
--
ALTER TABLE `lienhe`
  MODIFY `Ma_LH` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16549;

--
-- AUTO_INCREMENT for table `thanhtoan`
--
ALTER TABLE `thanhtoan`
  MODIFY `Ma_TT` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Ma_User` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitietdondathang`
--
ALTER TABLE `chitietdondathang`
  ADD CONSTRAINT `chitietdondathang_ibfk_1` FOREIGN KEY (`Ma_GH`) REFERENCES `giohang` (`Ma_GH`),
  ADD CONSTRAINT `chitietdondathang_ibfk_3` FOREIGN KEY (`Ma_Sp`) REFERENCES `sanpham` (`Ma_Sp`);

--
-- Constraints for table `chitietgiohang`
--
ALTER TABLE `chitietgiohang`
  ADD CONSTRAINT `chitietgiohang_ibfk_1` FOREIGN KEY (`Ma_Sp`) REFERENCES `sanpham` (`Ma_Sp`);

--
-- Constraints for table `dondathang`
--
ALTER TABLE `dondathang`
  ADD CONSTRAINT `dondathang_ibfk_5` FOREIGN KEY (`Loai_VC`) REFERENCES `donvivanchuyen` (`Loai_VC`),
  ADD CONSTRAINT `dondathang_ibfk_6` FOREIGN KEY (`Ma_chi_tiet_DH`) REFERENCES `chitietdondathang` (`Ma_chi_tiet_DH`);

--
-- Constraints for table `giohang`
--
ALTER TABLE `giohang`
  ADD CONSTRAINT `giohang_ibfk_1` FOREIGN KEY (`Ma_User`) REFERENCES `user` (`Ma_User`),
  ADD CONSTRAINT `giohang_ibfk_2` FOREIGN KEY (`Ma_chi_tiet_GH`) REFERENCES `chitietgiohang` (`Ma_chi_tiet_GH`);

--
-- Constraints for table `lienhe`
--
ALTER TABLE `lienhe`
  ADD CONSTRAINT `lienhe_ibfk_1` FOREIGN KEY (`Ma_User`) REFERENCES `user` (`Ma_User`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`Ma_loai`) REFERENCES `danhmucsanpham` (`Ma loai`);

--
-- Constraints for table `thanhtoan`
--
ALTER TABLE `thanhtoan`
  ADD CONSTRAINT `thanhtoan_ibfk_1` FOREIGN KEY (`Ma_GH`) REFERENCES `giohang` (`Ma_GH`),
  ADD CONSTRAINT `thanhtoan_ibfk_2` FOREIGN KEY (`Ma_Sp`) REFERENCES `sanpham` (`Ma_Sp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
