-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2021 at 08:15 AM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminId` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `password` varchar(150) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `fullName` varchar(100) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `avatarAdmin` varchar(100) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `role` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminId`, `email`, `password`, `fullName`, `avatarAdmin`, `role`) VALUES
(22, 'vunguyen2602@gmail.com', '$2y$10$m7HZiHWEG4gmQDnh.LPVn.yk9UE4r89dqcv50XZvgSCbMgmI7ZQqO', 'nguyễn thế vũ', 'uploads/incognito.png', 1),
(25, 'nguyenthevu2602@gmail.com', '$2y$10$dEo7e68N4ndTUksnTSIkL.PDoVVcq7n0ZnxhMxFg7m96xymMsic5S', 'Nguyễn Thế Vũ', 'uploads/incognito.png', 1);

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
  `userId` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `comment` text COLLATE utf8_vietnamese_ci NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`cmtId`, `userId`, `date`, `comment`, `rating`) VALUES
(4, 17, '2021-11-01 04:49:51', 'sdasda', 4),
(5, 17, '2021-11-01 04:53:57', 'haha', 4),
(6, 17, '2021-11-01 06:32:30', 'ađâs', 5),
(7, 17, '2021-11-01 06:35:33', 'dấdsa', 5),
(8, 17, '2021-11-01 07:15:34', 'adsadá', 4);

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
(125, 69, 'uploads/180921-1-2000-roo-ltha.jpg.thumb.1920.1920.jpg'),
(126, 69, 'uploads/180921-1-2000-roo-ltha.jpg.thumb.1920.1920.jpg180921-2-2000-roo-ltha.jpg.thumb.1920.1920 (1).jpg'),
(127, 69, 'uploads/180921-1-2000-roo-ltha.jpg.thumb.1920.1920.jpg180921-2-2000-roo-ltha.jpg.thumb.1920.1920 (1).jpg180921-3-2000-roo-ltha.jpg.thumb.1920.1920.jpg'),
(128, 69, 'uploads/180921-1-2000-roo-ltha.jpg.thumb.1920.1920.jpg180921-2-2000-roo-ltha.jpg.thumb.1920.1920 (1).jpg180921-3-2000-roo-ltha.jpg.thumb.1920.1920.jpg180928-3-2000-roo-ltha.jpg.thumb.1920.1920.jpg'),
(129, 70, 'uploads/180921-1-2000-roo-ltha.jpg.thumb.1920.1920.jpg'),
(130, 70, 'uploads/180921-1-2000-roo-ltha.jpg.thumb.1920.1920.jpg180921-2-2000-roo-ltha.jpg.thumb.1920.1920.jpg'),
(131, 70, 'uploads/180921-1-2000-roo-ltha.jpg.thumb.1920.1920.jpg180921-2-2000-roo-ltha.jpg.thumb.1920.1920.jpg180921-3-2000-roo-ltha.jpg.thumb.1920.1920.jpg'),
(132, 70, 'uploads/180921-1-2000-roo-ltha.jpg.thumb.1920.1920.jpg180921-2-2000-roo-ltha.jpg.thumb.1920.1920.jpg180921-3-2000-roo-ltha.jpg.thumb.1920.1920.jpg180928-4-2000-roo-ltha.jpg.thumb.1920.1920.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productId` int(11) NOT NULL,
  `catId` int(11) DEFAULT NULL,
  `productName` varchar(100) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `price` varchar(50) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `status` int(11) DEFAULT 0,
  `content` text COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `level` varchar(20) COLLATE utf8_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productId`, `catId`, `productName`, `price`, `status`, `content`, `level`) VALUES
(69, 9, 'sdấdá', '3290000', 0, 'dấdsad', 'Tiêu chuẩn'),
(70, 9, 'ádáđssa', '3290000', 0, 'đâsdá', 'Tiêu chuẩn');

-- --------------------------------------------------------

--
-- Table structure for table `producttaken`
--

CREATE TABLE `producttaken` (
  `proTakenId` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `productId` int(11) DEFAULT NULL,
  `dateStart` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `dateEnd` datetime DEFAULT NULL
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
  `avatarUser` varchar(50) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `status` int(11) DEFAULT 0,
  `timeRegister` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `email`, `phone`, `passWord`, `fullName`, `avatarUser`, `status`, `timeRegister`) VALUES
(17, 'nguyenthevu2602@gmail.com', '0376192789', '$2y$10$rqLcorPrR/HU.Bk1fzZy0eaM6f9g5sSSFJe.MiGPZScQv8d8.iUx6', 'Nguyễn Thế Vũ', 'uploads/incognito.png', 0, '2021-10-31 15:44:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`catId`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`cmtId`);

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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `catId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `cmtId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `img_product`
--
ALTER TABLE `img_product`
  MODIFY `imgId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `producttaken`
--
ALTER TABLE `producttaken`
  MODIFY `proTakenId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

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
