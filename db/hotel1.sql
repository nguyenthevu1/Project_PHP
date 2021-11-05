-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2021 at 04:29 PM
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
(29, 40, '2021-11-05 15:11:41', 'đâsd', 5),
(30, 40, '2021-11-05 15:11:50', 'đâsdá', 5),
(31, 36, '2021-11-05 15:13:12', 'áđấ', 5),
(32, 39, '2021-11-05 15:14:27', 'haha', 4),
(33, 39, '2021-11-05 15:14:38', 'gaga', 1);

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
(222, 102, 'uploads/ac-hanoi-hotel.jpg.thumb.1920.1920.jpg'),
(223, 102, 'uploads/ac-hanoi-hotel.jpg.thumb.1920.1920.jpgjpag.thumb.1920.1920.jpg'),
(224, 102, 'uploads/ac-hanoi-hotel.jpg.thumb.1920.1920.jpgjpag.thumb.1920.1920.jpgjpg.thumb.1920.1920.jpg'),
(225, 102, 'uploads/ac-hanoi-hotel.jpg.thumb.1920.1920.jpgjpag.thumb.1920.1920.jpgjpg.thumb.1920.1920.jpgthumb.1920.1920.jpg'),
(226, 103, 'uploads/2000-roo-ltha.jpg.thumb.1920.1920 (1).jpg'),
(227, 103, 'uploads/2000-roo-ltha.jpg.thumb.1920.1920 (1).jpgltha.jpg.thumb.1920.1920 (2).jpg'),
(228, 103, 'uploads/2000-roo-ltha.jpg.thumb.1920.1920 (1).jpgltha.jpg.thumb.1920.1920 (2).jpgltha.jpg.thumb.1920.1920.jpg'),
(229, 103, 'uploads/2000-roo-ltha.jpg.thumb.1920.1920 (1).jpgltha.jpg.thumb.1920.1920 (2).jpgltha.jpg.thumb.1920.1920.jpgthumb.1920.1920 (1).jpg'),
(230, 104, 'uploads/outdoor swimming pool resized.jpg.thumb.1920.1920.jpg'),
(231, 104, 'uploads/outdoor swimming pool resized.jpg.thumb.1920.1920.jpgpool_outdoorresized.jpg.thumb.1920.1920.jpg');

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
(102, 8, 'Trung tâm thể dục thể thao', '0', 'Với tổng diện tích 1,680m2, trung tâm thể dục thể thao của khách sạn Lotte Hà Nội bao gồm: phòng gym, phòng tập yoga, đường tập golf trong nhà, phòng tắm hơi, bể sục jacuzzi, sân bóng rổ, đường dạo bộ, và đặc biệt là bể bơi ngoài trời.', ''),
(103, 9, 'Phòng Deluxe Suite', '8460000', 'Dù cho ở bất cứ phòng Suite nào nằm trong các tầng từ 53 đến 61 của khách sạn Lotte Hà Nội, khách hàng cũng có thể tận hưởng tầm nhìn bao quát toàn thành phố. Với việc sử dụng hệ thống điều hoà 4 ống độc đáo, khách sạn Lotte Hà Nội bảo đảm đem lại cho khách hàng không khí mát lành gần gũi với thiên nhiên và những giờ phút nghỉ ngơi thoải mái.\r\n\r\n. Hai hãng thiết kế nội thất Wilson & Associates và HBA đã tạo ra hai phong cách thiết kế Á -Âu riêng biệt nhằm đáp ứng nhu cầu đa dạng của khách hàng.', 'Suite'),
(104, 8, 'Bể bơi Ngoài trời', '0', '\r\nLặn xuống làn nước trong sạch, tận hưởng bầu không khí trong lành, cảm nhận ánh nắng ấm áp và lắng nghe những thanh âm của Hà Nội ở gần hơn bao giờ hết tại bể bơi ngoài trời trên tầng 7 của Lotte Hotel Hanoi. Giờ thì quý khách sẽ yêu thích bơi lội hơn bao giờ hết.\r\n*Vui lòng lưu ý rằng bể bơi đóng cửa vào Thứ Hai đầu tiên hàng tháng để vệ sinh và bảo trì.', '');

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
(36, 'thevu2468@gmail.com', '0376192789', '$2y$10$h82jyMISTlb3o6pfpKQ.Lu.J.2NcJvgJJv7hapTSmREEALrBKBJP6', 'Nguyễn Thế ', 0, '../admin/uploads/incognito.png', '', 1, '2021-11-05 15:23:28', 1),
(39, 'nguyenthevu2602@gmail.com', '0123456789', '$2y$10$7kGkBKqA.e3zbRHCXMjk0ONhy/s0XHmWRQZRyKb6TxoEpRCYz1pIa', 'Vũ', 1, 'uploads/incognito.png', 'e37c963b18a98812d55515bcd3ed7eb8', 1, '2021-11-05 15:22:11', 0),
(40, 'vuthe2602@gmail.com', '0986226801', '$2y$10$Crg.KYRIxGGW/uPOhlftBOI3mHVecPSnLjKlVq3/JEzH3PqUWlkeC', 'Nguyễn Thế Vũ', 0, '../admin/uploads/01057192.jpg', 'daaba148cf1458f1ad6eb501b990464a', 1, '2021-11-05 14:57:28', 0);

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
  MODIFY `catId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `cmtId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `img_product`
--
ALTER TABLE `img_product`
  MODIFY `imgId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=232;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `producttaken`
--
ALTER TABLE `producttaken`
  MODIFY `proTakenId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

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
