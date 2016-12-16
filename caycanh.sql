-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2016 at 11:24 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `caycanh`
--

-- --------------------------------------------------------

--
-- Table structure for table `ctdonhang`
--

CREATE TABLE `ctdonhang` (
  `id` int(11) NOT NULL,
  `donHangId` int(11) NOT NULL,
  `sanPhamId` int(11) NOT NULL,
  `soLuong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ctdonhang`
--

INSERT INTO `ctdonhang` (`id`, `donHangId`, `sanPhamId`, `soLuong`) VALUES
(7, 5, 8, 1),
(8, 5, 3, 1),
(9, 5, 2, 1),
(10, 6, 1, 3),
(11, 6, 12, 5),
(12, 6, 5, 9),
(13, 7, 11, 9),
(14, 7, 3, 4),
(15, 8, 15, 11),
(16, 8, 6, 8),
(17, 9, 1, 7),
(18, 9, 5, 13);

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `ngayDatHang` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ghiChu` varchar(255) DEFAULT NULL,
  `tinhTrang` varchar(50) DEFAULT 'Chưa xử lý'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `donhang`
--

INSERT INTO `donhang` (`id`, `userId`, `ngayDatHang`, `ghiChu`, `tinhTrang`) VALUES
(5, 25, '2016-12-02 00:00:00', '', 'Chưa xử lý'),
(6, 25, '2016-12-06 00:00:00', 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Đã hoàn tất'),
(7, 25, '2016-12-06 00:00:00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Chưa xử lý'),
(8, 25, '2016-12-06 17:47:16', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Chưa xử lý'),
(9, 26, '2016-12-11 10:53:48', 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Chưa xử lý');

-- --------------------------------------------------------

--
-- Table structure for table `hinh`
--

CREATE TABLE `hinh` (
  `id` int(11) NOT NULL,
  `sanPhamId` int(11) NOT NULL,
  `url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hinh`
--

INSERT INTO `hinh` (`id`, `sanPhamId`, `url`) VALUES
(1, 1, 'http://localhost/mt_sunflo/images/product/thap3tang.jpg'),
(2, 2, 'http://localhost/mt_sunflo/images/product/thap5tang.jpg'),
(3, 3, 'http://localhost/mt_sunflo/images/product/thap7tang.jpg'),
(4, 4, 'http://localhost/mt_sunflo/images/product/thap9tang.jpg'),
(5, 5, 'http://localhost/mt_sunflo/images/product/thap11tang.jpg'),
(6, 6, 'http://localhost/mt_sunflo/images/product/thuyen1.jpg'),
(7, 7, 'http://localhost/mt_sunflo/images/product/thuyen2.jpg'),
(8, 8, 'http://localhost/mt_sunflo/images/product/thuyen3.jpg'),
(9, 9, 'http://localhost/mt_sunflo/images/product/thuyen4.jpg'),
(10, 10, 'http://localhost/mt_sunflo/images/product/thuyen5.jpg'),
(11, 13, 'http://localhost/mt_sunflo/images/product/quat3.jpg'),
(12, 14, 'http://localhost/mt_sunflo/images/product/quat4.jpg'),
(13, 15, 'http://localhost/mt_sunflo/images/product/quat5.jpg'),
(14, 11, 'http://localhost/mt_sunflo/images/product/quat1.jpg'),
(15, 12, 'http://localhost/mt_sunflo/images/product/quat2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `hopthu`
--

CREATE TABLE `hopthu` (
  `id` int(11) NOT NULL,
  `nguoiGui` varchar(32) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tieuDe` varchar(255) NOT NULL,
  `noiDung` text NOT NULL,
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hopthu`
--

INSERT INTO `hopthu` (`id`, `nguoiGui`, `email`, `tieuDe`, `noiDung`, `time`) VALUES
(1, 'Minh', 'minhtd0107@gmail.com', 'message01', 'In hac habitasse platea dictumst. Cras id odio tellus, sed dignissim lacus!', '2016-12-06 19:11:32');

-- --------------------------------------------------------

--
-- Table structure for table `loai`
--

CREATE TABLE `loai` (
  `id` int(11) NOT NULL,
  `ten` varchar(30) NOT NULL,
  `moTa` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loai`
--

INSERT INTO `loai` (`id`, `ten`, `moTa`) VALUES
(1, 'Dạng tháp', NULL),
(2, 'Dạng thuyền', NULL),
(3, 'Dạng quạt', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `ten` varchar(50) NOT NULL,
  `loaiId` int(11) NOT NULL,
  `moTa` text,
  `gia` int(11) NOT NULL,
  `ngayRaMat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `luotMua` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `ten`, `loaiId`, `moTa`, `gia`, `ngayRaMat`, `luotMua`) VALUES
(1, 'Tháp 3 tầng', 1, NULL, 20000, '2016-09-30 17:00:00', 0),
(2, 'Tháp 5 tầng', 1, NULL, 30000, '2016-09-30 17:00:00', 4),
(3, 'Tháp 7 tầng', 1, NULL, 50000, '2016-10-03 17:00:00', 14),
(4, 'Tháp 9 tầng', 1, NULL, 70000, '2016-10-03 17:00:00', 0),
(5, 'Tháp 11 tầng', 1, NULL, 100000, '2016-10-03 17:00:00', 41),
(6, 'Thuyền 17cm', 2, NULL, 30000, '2016-10-03 17:00:00', 12),
(7, 'Thuyền 19cm', 2, NULL, 40000, '2016-10-06 17:00:00', 0),
(8, 'Thuyền 21cm', 2, NULL, 55000, '2016-10-06 17:00:00', 21),
(9, 'Thuyền 23cm', 2, NULL, 70000, '2016-10-10 17:00:00', 0),
(10, 'Thuyền 25cm', 2, NULL, 90000, '2016-10-11 17:00:00', 4),
(11, 'Quạt 15cm', 3, NULL, 25000, '2016-10-12 17:00:00', 0),
(12, 'Quạt 17cm', 3, NULL, 40000, '2016-10-23 17:00:00', 34),
(13, 'Quạt 19cm', 3, NULL, 60000, '2016-10-28 17:00:00', 0),
(14, 'Quạt 21cm', 3, NULL, 85000, '2016-11-03 17:00:00', 4),
(15, 'Quạt 23cm', 3, NULL, 100000, '2016-11-03 17:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(16) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` text NOT NULL,
  `dateOfBirth` date DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phoneNumber` varchar(16) DEFAULT NULL,
  `email` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `password`, `dateOfBirth`, `address`, `phoneNumber`, `email`) VALUES
(25, 'Minh', 'admin', 'c4ca4238a0b923820dcc509a6f75849b', NULL, NULL, NULL, 'minhtd0107@gmail.com'),
(26, '', 'thanhtuo0o', '5a8cc5594f16d4dd0dd11233884ae0ae', '0000-00-00', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ctdonhang`
--
ALTER TABLE `ctdonhang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hinh`
--
ALTER TABLE `hinh`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sanPhamId` (`sanPhamId`);

--
-- Indexes for table `hopthu`
--
ALTER TABLE `hopthu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `loaiId` (`loaiId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ctdonhang`
--
ALTER TABLE `ctdonhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `hinh`
--
ALTER TABLE `hinh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `hopthu`
--
ALTER TABLE `hopthu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `loai`
--
ALTER TABLE `loai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `hinh`
--
ALTER TABLE `hinh`
  ADD CONSTRAINT `FK_Hinh_SanPham` FOREIGN KEY (`sanPhamId`) REFERENCES `sanpham` (`id`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `FK_SanPham_Loai` FOREIGN KEY (`loaiId`) REFERENCES `loai` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
