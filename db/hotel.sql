-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2021 at 03:46 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `catId` int(11) NOT NULL,
  `catName` varchar(50) COLLATE utf8_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`catId`, `catName`) VALUES
(8, 'Dịch vụ'),
(9, 'Phòng ở'),
(10, 'Hội Thảo & Tiệc');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `cmtId` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `comment` text DEFAULT NULL,
  `rating` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`cmtId`, `userId`, `date`, `comment`, `rating`) VALUES
(8, 38, '2021-11-04 13:30:12', 'ga', 0),
(9, 38, '2021-11-04 13:30:15', 'ga22', 0);

-- --------------------------------------------------------

--
-- Table structure for table `img_product`
--

CREATE TABLE `img_product` (
  `imgId` int(11) NOT NULL,
  `productId` int(11) DEFAULT NULL,
  `img` varchar(200) COLLATE utf8_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `img_product`
--

INSERT INTO `img_product` (`imgId`, `productId`, `img`) VALUES
(209, 97, 'uploads/3251-8-2000-din-ltha.jpg.thumb.1920.1920.jpg180921-1-2000-roo-ltha.jpg.thumb.1920.1920.jpg'),
(210, 97, 'uploads/3251-8-2000-din-ltha.jpg.thumb.1920.1920.jpg180921-1-2000-roo-ltha.jpg.thumb.1920.1920.jpg4868.jpg_wh860.jpg'),
(211, 97, 'uploads/3251-8-2000-din-ltha.jpg.thumb.1920.1920.jpg180921-1-2000-roo-ltha.jpg.thumb.1920.1920.jpg4868.jpg_wh860.jpg180921-1-2000-roo-ltha.jpg.thumb.1920.1920.jpg180921-2-2000-roo-ltha.jpg.thumb.1920.'),
(216, 100, 'uploads/2.jpg'),
(217, 100, 'uploads/2.jpg180928-4-2000-roo-ltha.jpg.thumb.1920.1920.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productId` int(11) NOT NULL,
  `catId` int(11) DEFAULT NULL,
  `productName` varchar(100) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `price` varchar(50) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `content` text COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `level` varchar(20) COLLATE utf8_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productId`, `catId`, `productName`, `price`, `content`, `level`) VALUES
(93, 9, 'Phòng Deluxe', '2000000', 'Tại tất cả các phòng Deluxe nằm từ tầng 40 đến tầng 53 của toà nhà Lotte, khách hàng đều có thể tận hưởng tầm nhìn tuyệt đẹp bao quát thành phố Hà Nội. Các tiện nghi cao cấp bao gồm hệ thống điều hoà độc đáo với 4 ống sẽ bảo đảm cho khách hàng những giờ phút nghỉ ngơi thoải mái tại khách sạn.\r\n\r\n.Hai hãng thiết kế nội thất Wilson Associates và HBA đã tạo ra hai phong cách thiết kế Á -Âu riêng biệt nhằm đáp ứng nhu cầu đa dạng của khách hàng.', 'Tiêu chuẩn'),
(94, 9, 'Phòng Deluxe', '2000000', 'Tại tất cả các phòng Deluxe nằm từ tầng 40 đến tầng 53 của toà nhà Lotte, khách hàng đều có thể tận hưởng tầm nhìn tuyệt đẹp bao quát thành phố Hà Nội. Các tiện nghi cao cấp bao gồm hệ thống điều hoà độc đáo với 4 ống sẽ bảo đảm cho khách hàng những giờ phút nghỉ ngơi thoải mái tại khách sạn.\r\n\r\n.Hai hãng thiết kế nội thất Wilson Associates và HBA đã tạo ra hai phong cách thiết kế Á -Âu riêng biệt nhằm đáp ứng nhu cầu đa dạng của khách hàng.', 'Tiêu chuẩn'),
(97, 9, 'Phòng Deluxe', '2000000', 'Tại tất cả các phòng Deluxe nằm từ tầng 40 đến tầng 53 của toà nhà Lotte, khách hàng đều có thể tận hưởng tầm nhìn tuyệt đẹp bao quát thành phố Hà Nội. Các tiện nghi cao cấp bao gồm hệ thống điều hoà độc đáo với 4 ống sẽ bảo đảm cho khách hàng những giờ phút nghỉ ngơi thoải mái tại khách sạn.\r\n\r\n.Hai hãng thiết kế nội thất Wilson Associates và HBA đã tạo ra hai phong cách thiết kế Á -Âu riêng biệt nhằm đáp ứng nhu cầu đa dạng của khách hàng.', 'Tiêu chuẩn'),
(100, 9, 'Phòng Deluxe', '3000000', 'Club Floor là không gian riêng biệt dành cho những doanh nhân tìm kiếm một nơi làm việc yên tĩnh. Đội ngũ nhân viên thông minh, dịch vụ đáng tin cậy, các thiết kế đơn giản mà hiệu quả, và dịch vụ ăn uống cao cấp chính là những lý do bạn nên chọn để ở lại Club Floor.', 'Phòng club');

-- --------------------------------------------------------

--
-- Table structure for table `producttaken`
--

CREATE TABLE `producttaken` (
  `proTakenId` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `productId` int(11) DEFAULT NULL,
  `people` int(10) NOT NULL,
  `floor` int(11) NOT NULL,
  `total` char(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `dateStart` date NOT NULL,
  `dateEnd` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `email` varchar(100) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `phone` char(16) COLLATE utf8_vietnamese_ci NOT NULL,
  `passWord` varchar(100) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `fullName` varchar(100) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `isAdmin` tinyint(1) NOT NULL DEFAULT 0,
  `avatarUser` varchar(50) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `vkey` varchar(125) COLLATE utf8_vietnamese_ci NOT NULL,
  `status` int(11) DEFAULT 0,
  `timeRegister` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `email`, `phone`, `passWord`, `fullName`, `isAdmin`, `avatarUser`, `vkey`, `status`, `timeRegister`, `role`) VALUES
(36, 'thevu2468@gmail.com', '0376192789', '$2y$10$BjbIhcFNRJ7P9ehsxa079.yrLpMNgG0lVGse7gwXag.ITHeyK4iH2', 'nguyễn thế vũ', 1, 'uploads/incognito.png', '', 1, '2021-11-04 08:03:44', 1),
(38, 'vuthe2602@gmail.com', '0376192789', '$2y$10$XC.j7vDzZWJe3QqgvvEdweO6xNfVvhHCLnxvYPDOslzrhKywbEYYK', 'Thế Vũ', 0, '../admin/uploads/incognito.png', '7388ad72f7c3078d922fcab3677b7ae1', 1, '2021-11-04 02:36:48', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`catId`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`cmtId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `img_product`
--
ALTER TABLE `img_product`
  ADD PRIMARY KEY (`imgId`),
  ADD KEY `productId` (`productId`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productId`),
  ADD KEY `catId` (`catId`);

--
-- Indexes for table `producttaken`
--
ALTER TABLE `producttaken`
  ADD PRIMARY KEY (`proTakenId`),
  ADD KEY `userId` (`userId`),
  ADD KEY `productId` (`productId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `catId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `cmtId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `img_product`
--
ALTER TABLE `img_product`
  MODIFY `imgId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=218;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `producttaken`
--
ALTER TABLE `producttaken`
  MODIFY `proTakenId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`);

--
-- Constraints for table `img_product`
--
ALTER TABLE `img_product`
  ADD CONSTRAINT `img_product_ibfk_1` FOREIGN KEY (`productId`) REFERENCES `product` (`productId`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`catId`) REFERENCES `categories` (`catId`);

--
-- Constraints for table `producttaken`
--
ALTER TABLE `producttaken`
  ADD CONSTRAINT `producttaken_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`),
  ADD CONSTRAINT `producttaken_ibfk_2` FOREIGN KEY (`productId`) REFERENCES `product` (`productId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
