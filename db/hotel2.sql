-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2021 at 06:15 PM
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
  `userId` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `comment` text COLLATE utf8_vietnamese_ci NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`cmtId`, `userId`, `date`, `comment`, `rating`) VALUES
(15, 28, '2021-11-03 10:15:43', 'ga', 0),
(16, 28, '2021-11-03 10:17:57', 'g', 0),
(17, 29, '2021-11-03 10:19:29', '12', 0),
(18, 32, '2021-11-03 15:32:14', 'tuyệt vời!!', 5);

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
(173, 82, 'uploads/180921-1-2000-roo-ltha.jpg.thumb.1920.1920.jpg'),
(174, 82, 'uploads/180921-1-2000-roo-ltha.jpg.thumb.1920.1920.jpg180921-2-2000-roo-ltha.jpg.thumb.1920.1920 (1).jpg'),
(175, 82, 'uploads/180921-1-2000-roo-ltha.jpg.thumb.1920.1920.jpg180921-2-2000-roo-ltha.jpg.thumb.1920.1920 (1).jpg180921-3-2000-roo-ltha.jpg.thumb.1920.1920.jpg'),
(176, 82, 'uploads/180921-1-2000-roo-ltha.jpg.thumb.1920.1920.jpg180921-2-2000-roo-ltha.jpg.thumb.1920.1920 (1).jpg180921-3-2000-roo-ltha.jpg.thumb.1920.1920.jpg180928-3-2000-roo-ltha.jpg.thumb.1920.1920.jpg'),
(177, 83, 'uploads/180921-1-2000-roo-ltha.jpg.thumb.1920.1920.jpg'),
(178, 83, 'uploads/180921-1-2000-roo-ltha.jpg.thumb.1920.1920.jpg180921-2-2000-roo-ltha.jpg.thumb.1920.1920 (1).jpg'),
(179, 83, 'uploads/180921-1-2000-roo-ltha.jpg.thumb.1920.1920.jpg180921-2-2000-roo-ltha.jpg.thumb.1920.1920 (1).jpg180921-3-2000-roo-ltha.jpg.thumb.1920.1920.jpg'),
(180, 83, 'uploads/180921-1-2000-roo-ltha.jpg.thumb.1920.1920.jpg180921-2-2000-roo-ltha.jpg.thumb.1920.1920 (1).jpg180921-3-2000-roo-ltha.jpg.thumb.1920.1920.jpg180928-3-2000-roo-ltha.jpg.thumb.1920.1920.jpg');

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
(76, 10, 'test', '5600000', 0, 'test', 'Tiêu chuẩn'),
(82, 9, 'ad', '8460000', 0, 'đá', 'Tiêu chuẩn'),
(83, 9, 'ad', '8460000', 0, 'đá', 'Tiêu chuẩn');

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
(31, 'nguyenthevu2602@gmail.com', '0376192789', '$2y$10$qCcbL6n.LcOrXRC48x8hf.GWZQS3i9VxxKBxjcw/soxYrn9gi0r82', 'nguyễn thế vũ', 0, '../admin/uploads/01057192.jpg', '77a5390a896039f93902112e075b712f', 1, '2021-11-03 16:45:32', 1),
(36, 'thevu2468@gmail.com', '0376192789', '$2y$10$GH4z6R8SfxU2lDIMavRyC.IOFLQUjnqOteL./P3.W3qrhTyjLmJYi', 'nguyễn thế', 1, 'uploads/incognito.png', '', 1, '2021-11-03 17:13:46', 1);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `catId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `cmtId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `img_product`
--
ALTER TABLE `img_product`
  MODIFY `imgId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=181;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `producttaken`
--
ALTER TABLE `producttaken`
  MODIFY `proTakenId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

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
