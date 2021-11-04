-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2021 at 02:10 PM
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
(1, 38, '2021-11-04 09:34:01', 'tuyệt vời', 5);

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
(180, 83, 'uploads/180921-1-2000-roo-ltha.jpg.thumb.1920.1920.jpg180921-2-2000-roo-ltha.jpg.thumb.1920.1920 (1).jpg180921-3-2000-roo-ltha.jpg.thumb.1920.1920.jpg180928-3-2000-roo-ltha.jpg.thumb.1920.1920.jpg'),
(181, 84, 'uploads/3251-8-2000-din-ltha.jpg.thumb.1920.1920.jpg'),
(182, 84, 'uploads/3251-8-2000-din-ltha.jpg.thumb.1920.1920.jpg211022-2-2000-din-ltha.jpg.thumb.1920.1920.jpg'),
(183, 84, 'uploads/3251-8-2000-din-ltha.jpg.thumb.1920.1920.jpg211022-2-2000-din-ltha.jpg.thumb.1920.1920.jpg211022-5-2000-din-ltha.jpg.thumb.1920.1920.jpg'),
(184, 84, 'uploads/3251-8-2000-din-ltha.jpg.thumb.1920.1920.jpg211022-2-2000-din-ltha.jpg.thumb.1920.1920.jpg211022-5-2000-din-ltha.jpg.thumb.1920.1920.jpgbar.jpg'),
(186, 86, 'uploads/190819-3-2000-wed-ltse.jpg.thumb.1920.1920.jpg'),
(187, 87, 'uploads/3251-8-2000-din-ltha.jpg.thumb.1920.1920.jpg'),
(188, 87, 'uploads/3251-8-2000-din-ltha.jpg.thumb.1920.1920.jpg180921-1-2000-roo-ltha.jpg.thumb.1920.1920.jpg'),
(191, 89, 'uploads/190819-3-2000-wed-ltse.jpg.thumb.1920.1920.jpg'),
(192, 89, 'uploads/190819-3-2000-wed-ltse.jpg.thumb.1920.1920.jpg211022-2-2000-din-ltha.jpg.thumb.1920.1920.jpg'),
(193, 89, 'uploads/190819-3-2000-wed-ltse.jpg.thumb.1920.1920.jpg211022-2-2000-din-ltha.jpg.thumb.1920.1920.jpg211022-5-2000-din-ltha.jpg.thumb.1920.1920.jpg'),
(194, 90, 'uploads/3251-8-2000-din-ltha.jpg.thumb.1920.1920.jpg'),
(195, 90, 'uploads/3251-8-2000-din-ltha.jpg.thumb.1920.1920.jpg180921-1-2000-roo-ltha.jpg.thumb.1920.1920.jpg'),
(196, 90, 'uploads/3251-8-2000-din-ltha.jpg.thumb.1920.1920.jpg180921-1-2000-roo-ltha.jpg.thumb.1920.1920.jpg180921-2-2000-roo-ltha.jpg.thumb.1920.1920.jpg'),
(197, 90, 'uploads/3251-8-2000-din-ltha.jpg.thumb.1920.1920.jpg180921-1-2000-roo-ltha.jpg.thumb.1920.1920.jpg180921-2-2000-roo-ltha.jpg.thumb.1920.1920.jpg180928-3-2000-roo-ltha.jpg.thumb.1920.1920.jpg'),
(198, 90, 'uploads/3251-8-2000-din-ltha.jpg.thumb.1920.1920.jpg180921-1-2000-roo-ltha.jpg.thumb.1920.1920.jpg180921-2-2000-roo-ltha.jpg.thumb.1920.1920.jpg180928-3-2000-roo-ltha.jpg.thumb.1920.1920.jpg211022-2-2'),
(199, 90, 'uploads/3251-8-2000-din-ltha.jpg.thumb.1920.1920.jpg180921-1-2000-roo-ltha.jpg.thumb.1920.1920.jpg180921-2-2000-roo-ltha.jpg.thumb.1920.1920.jpg180928-3-2000-roo-ltha.jpg.thumb.1920.1920.jpg211022-2-2'),
(200, 91, 'uploads/3251-8-2000-din-ltha.jpg.thumb.1920.1920.jpg'),
(201, 91, 'uploads/3251-8-2000-din-ltha.jpg.thumb.1920.1920.jpg211022-2-2000-din-ltha.jpg.thumb.1920.1920.jpg'),
(202, 91, 'uploads/3251-8-2000-din-ltha.jpg.thumb.1920.1920.jpg211022-2-2000-din-ltha.jpg.thumb.1920.1920.jpg211022-5-2000-din-ltha.jpg.thumb.1920.1920.jpg'),
(203, 91, 'uploads/3251-8-2000-din-ltha.jpg.thumb.1920.1920.jpg211022-2-2000-din-ltha.jpg.thumb.1920.1920.jpg211022-5-2000-din-ltha.jpg.thumb.1920.1920.jpgbar.jpg');

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
(82, 9, 'ad', '8460000', 0, 'đá', 'Tiêu chuẩn'),
(83, 9, 'ad', '8460000', 0, 'đá', 'Tiêu chuẩn'),
(84, 8, 'Top of Hanoi', '8460000', 0, 'Nằm trên tầng cao nhất của KHÁCH SẠN LOTTE HÀ NỘI là Top of Hanoi - nơi đảm bảo tầm nhìn không giới hạn của bạn ra toàn thành phố. Hãy thưởng thức các món ăn hiện đại, tận hưởng bầu không khí trẻ trung, và thả mình vào không gian thoáng đãng đến choáng ngợp của Hà Nội về đêm tại Top of Hanoi.', 'Tiêu chuẩn'),
(86, 10, 'Lễ cưới', '8460000', 0, 'Đằng sau một đám cưới với những phút giây rạng rỡ, niềm vui và sự hài lòng chắc chắn phải là một kế hoạch chỉn chu và tỉ mỉ cũng như đội ngũ nhân viên tận tình và giàu kinh nghiệm trong nhiều lĩnh vực. Lotte Hotel Hanoi xin được chia sẻ tất cả những mong muốn cùng bạn và đưa đám cưới trong mơ của bạn trở thành hiện thực.', 'Tiêu chuẩn'),
(87, 9, 'âds', '8460000', 0, 'đâs', 'Tiêu chuẩn'),
(89, 9, 'Top of Hanoi', '8460000', 0, 'đâs', 'Tiêu chuẩn'),
(90, 9, 'adsad', '8460000', 0, 'ádadá', 'Tiêu chuẩn'),
(91, 8, 'đấ', '8460000d', 0, 'dsdsđâsdá', 'Tiêu chuẩn');

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
  MODIFY `cmtId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `img_product`
--
ALTER TABLE `img_product`
  MODIFY `imgId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=204;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `producttaken`
--
ALTER TABLE `producttaken`
  MODIFY `proTakenId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

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
