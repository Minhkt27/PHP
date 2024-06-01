-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2024 at 07:27 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `product`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_danhmuc`
--

CREATE TABLE `tbl_danhmuc` (
  `id` tinyint(4) NOT NULL,
  `tendanhmuc` varchar(100) NOT NULL,
  `hienthi` int(10) DEFAULT NULL,
  `uutien` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_danhmuc`
--

INSERT INTO `tbl_danhmuc` (`id`, `tendanhmuc`, `hienthi`, `uutien`) VALUES
(2, 'Điện Thoại IPHONE', NULL, NULL),
(3, 'Điện Thoại SAMSUMG', NULL, NULL),
(4, 'Điện Thoại OPPO', NULL, NULL),
(5, 'Máy Tính Bảng', NULL, NULL),
(17, 'Điện Thoại LG', NULL, NULL),
(18, 'ĐIện Thoại SONY', NULL, NULL),
(20, 'Điện Thoại XIAOMI', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_khuyenmai`
--

CREATE TABLE `tbl_khuyenmai` (
  `id` tinyint(4) NOT NULL,
  `tenkhuyenmai` varchar(200) DEFAULT NULL,
  `muckhuyenmai` int(3) NOT NULL DEFAULT 10,
  `mucapdung` int(15) NOT NULL DEFAULT 10000000
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_khuyenmai`
--

INSERT INTO `tbl_khuyenmai` (`id`, `tenkhuyenmai`, `muckhuyenmai`, `mucapdung`) VALUES
(1, 'khuyến mại 10%', 10, 1000000),
(2, 'khuyến mại 15%', 15, 3000000),
(3, 'khuyến mại 20%', 20, 5000000),
(4, 'khuyến mại 5%', 5, 800000),
(5, 'khuyến mại 25%', 25, 7000000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `id` tinyint(4) NOT NULL,
  `tensanpham` varchar(100) NOT NULL,
  `img` varchar(200) DEFAULT NULL,
  `gia` int(11) NOT NULL,
  `soluong` int(11) NOT NULL DEFAULT 5,
  `id_danhmuc` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`id`, `tensanpham`, `img`, `gia`, `soluong`, `id_danhmuc`) VALUES
(5, 'IPhone 11 Pro Max', '../img/11promax.png', 7499000, 9, 2),
(6, 'IPhone 12 Pro', '../img/12pro.jpg', 8999000, 10, 2),
(7, 'IPhone 12 Pro max', '../img/12promax.png', 10000000, 10, 2),
(8, 'IPhone 13', '../img/13.jpg', 9500000, 10, 2),
(9, 'IPhone XS Max', '../img/xsmax.jpg', 6000000, 10, 2),
(10, 'IPhone 13 Pro max', '../img/Screenshot 2024-05-22 171554.png', 12000000, 10, 2),
(11, 'IPhone 14', '../img/Screenshot 2024-05-22 171715.png', 13000000, 10, 2),
(12, 'IPhone 15', '../img/Screenshot 2024-05-22 171731.png', 19000000, 10, 2),
(13, 'Samsung Galaxy S22', '../img/galaxis22.jpg', 3000000, 6, 3),
(14, 'Samsung Galaxy A05', '../img/a05.png', 3000000, 6, 3),
(15, 'Samsung Galaxy A54', '../img/a54.png', 3000000, 6, 3),
(16, 'Samsung Galaxy A55', '../img/a55.png', 3000000, 6, 3),
(17, 'Samsung Galaxy M34', '../img/m34.png', 3000000, 6, 3),
(18, 'Samsung Galaxy Note 20 Ultra', '../img/Samsung Galaxy Note 20 Ultra 5G.jpg', 3000000, 6, 3),
(19, 'Samsung Galaxy s21 Ultra', '../img/Samsung Galaxy s21 Ultra 5G.jpeg', 3000000, 6, 3),
(20, 'Samsung Galaxy Zip 21', '../img/Samsung Galaxy zip 21.png', 3000000, 6, 3),
(21, 'OPPO A15', '../img/a15.png', 5000000, 5, 4),
(22, 'OPPO A58s', '../img/a58s.png', 5000000, 5, 4),
(23, 'OPPO A77s', '../img/a77s.png', 5000000, 5, 4),
(24, 'OPPO F5', '../img/f5.jpg', 5000000, 5, 4),
(25, 'OPPO F7', '../img/f7.jpg', 5000000, 5, 4),
(26, 'OPPO F9', '../img/f9.jpg', 5000000, 5, 4),
(27, 'OPPO Reno 10', '../img/reno10.png', 5000000, 5, 4),
(28, 'LG V40', '../img/v40 thinq.png', 2500000, 5, 17),
(29, 'LG V50', '../img/v50.jpg', 2500000, 5, 17),
(30, 'LG Vietel 5G', '../img/vietel 5g.jpg', 2500000, 5, 17),
(31, 'LG V60', '../img/v60.jpg', 2500000, 5, 17),
(32, 'Sony Xperia 1', '../img/sony xperia 1.png', 6000000, 7, 18),
(33, 'Sony Xperia 5', '../img/sony xperia 5.png', 6000000, 7, 18),
(34, 'Sony Xperia 10', '../img/xper 10.png', 6000000, 7, 18),
(35, 'Sony ZX3', '../img/zx3.png', 6000000, 7, 18),
(36, 'Xiaomi Poco X6 Pro', '../img/poco x6 pro.png', 2000000, 10, 20),
(37, 'Xiaomi Redmi A3', '../img/redmi a3.png', 2000000, 10, 20),
(38, 'Xiaomi Redmi Note 12 Pro', '../img/redmi note 12pro.png', 2000000, 10, 20),
(39, 'Xiaomi Redmi Note 13 Pro', '../img/redmi note 13pro.png', 2000000, 10, 20),
(40, 'Ipard 4', '../img/ipad 4.png', 10000000, 3, 5),
(41, 'Ipard Air 2', '../img/ipad air2.png', 10000000, 3, 5),
(42, 'Ipard Gen6', '../img/ipad gen6.png', 10000000, 3, 5),
(43, 'Ipard Pro', '../img/iPad pro 9.7.jpg', 10000000, 3, 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` tinyint(4) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `lever` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `address`, `email`, `username`, `password`, `lever`) VALUES
(1, 'user1', 'hn', 'mingkt@', 'user1', '123', 0),
(2, 'minh', 'hn', NULL, 'admin', '123', 1),
(3, 'minh2', 'hn', 'minh43763@gmail.com', 'user2', '123', 0),
(4, 'user3', 'hn', 'minh43763@gmail.com', 'user3', '123', 0),
(5, 'minh nguẻn', 'hn', 'minh43763@gmail.com', 'user4', '123', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_khuyenmai`
--
ALTER TABLE `tbl_khuyenmai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_khuyenmai`
--
ALTER TABLE `tbl_khuyenmai`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
