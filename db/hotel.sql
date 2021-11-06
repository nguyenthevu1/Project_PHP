-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2021 at 05:21 AM
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
(37, 39, '2021-11-06 03:56:59', 'Khá ổn', 4),
(38, 40, '2021-11-06 03:57:34', 'tuyệt vời', 5);

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
(230, 104, 'uploads/outdoor swimming pool resized.jpg.thumb.1920.1920.jpg'),
(231, 104, 'uploads/outdoor swimming pool resized.jpg.thumb.1920.1920.jpgpool_outdoorresized.jpg.thumb.1920.1920.jpg'),
(234, 103, 'uploads/5977812000-roo-ltha.jpg.thumb.1920.1920 (1).jpgltha.jpg.thumb.1920.1920 (2).jpgltha.jpg.thumb.1920.1920.jpgthumb.1920.1920 (1).jpg'),
(235, 105, 'uploads/0-wed-ltsg.jpg.thumb.1024.1024.jpg'),
(236, 105, 'uploads/0-wed-ltsg.jpg.thumb.1024.1024.jpg190819-3-2000-wed-ltse.jpg.thumb.1920.1920.jpg'),
(237, 105, 'uploads/0-wed-ltsg.jpg.thumb.1024.1024.jpg190819-3-2000-wed-ltse.jpg.thumb.1920.1920.jpgltvl.jpg.thumb.1024.1024.jpg'),
(238, 105, 'uploads/0-wed-ltsg.jpg.thumb.1024.1024.jpg190819-3-2000-wed-ltse.jpg.thumb.1920.1920.jpgltvl.jpg.thumb.1024.1024.jpgltwo.jpg.thumb.1024.1024.jpg'),
(239, 105, 'uploads/0-wed-ltsg.jpg.thumb.1024.1024.jpg190819-3-2000-wed-ltse.jpg.thumb.1920.1920.jpgltvl.jpg.thumb.1024.1024.jpgltwo.jpg.thumb.1024.1024.jpgwed-ltst.jpg.thumb.1024.1024.jpg'),
(240, 106, 'uploads/ha.jpg.thumb.1920.1920.jpg'),
(241, 106, 'uploads/ha.jpg.thumb.1920.1920.jpgmee-ltha.jpg.thumbs.1920.1920.jpg'),
(247, 108, 'uploads/180928-3-2000-roo-ltha.jpg.thumb.1920.1920.jpg'),
(248, 108, 'uploads/180928-3-2000-roo-ltha.jpg.thumb.1920.1920.jpg180928-4-2000-roo-ltha.jpg.thumb.1920.1920.jpg'),
(249, 108, 'uploads/180928-3-2000-roo-ltha.jpg.thumb.1920.1920.jpg180928-4-2000-roo-ltha.jpg.thumb.1920.1920.jpgha.jpg.thumb.1920.1920 (2).jpg'),
(250, 108, 'uploads/180928-3-2000-roo-ltha.jpg.thumb.1920.1920.jpg180928-4-2000-roo-ltha.jpg.thumb.1920.1920.jpgha.jpg.thumb.1920.1920 (2).jpgnoi-hotel.jpg.thumb.1920.1920.jpg'),
(251, 109, 'uploads/180921-1-2000-roo-ltha.jpg.thumb.1920.1920.jpg'),
(252, 109, 'uploads/180921-1-2000-roo-ltha.jpg.thumb.1920.1920.jpg180921-2-2000-roo-ltha.jpg.thumb.1920.1920 (1).jpg'),
(253, 109, 'uploads/180921-1-2000-roo-ltha.jpg.thumb.1920.1920.jpg180921-2-2000-roo-ltha.jpg.thumb.1920.1920 (1).jpg180921-3-2000-roo-ltha.jpg.thumb.1920.1920.jpg'),
(254, 109, 'uploads/180921-1-2000-roo-ltha.jpg.thumb.1920.1920.jpg180921-2-2000-roo-ltha.jpg.thumb.1920.1920 (1).jpg180921-3-2000-roo-ltha.jpg.thumb.1920.1920.jpgoo-ltha.jpg.thumb.1920.1920.jpg'),
(255, 110, 'uploads/acc-hanoi-hotel.jpg.thumb.1920.1920.jpg'),
(256, 110, 'uploads/acc-hanoi-hotel.jpg.thumb.1920.1920.jpganoi-hotel.jpg.thumb.1920.1920.jpg'),
(257, 110, 'uploads/acc-hanoi-hotel.jpg.thumb.1920.1920.jpganoi-hotel.jpg.thumb.1920.1920.jpgel.jpg.thumb.1920.1920.jpg'),
(258, 110, 'uploads/acc-hanoi-hotel.jpg.thumb.1920.1920.jpganoi-hotel.jpg.thumb.1920.1920.jpgel.jpg.thumb.1920.1920.jpgi-hotel.jpg.thumb.1920.1920.jpg'),
(263, 112, 'uploads/000-roo-ltha.jpg.thumb.1920.1920.jpg'),
(264, 112, 'uploads/000-roo-ltha.jpg.thumb.1920.1920.jpg00-roo-ltha.jpg.thumb.1920.1920.jpg'),
(265, 112, 'uploads/000-roo-ltha.jpg.thumb.1920.1920.jpg00-roo-ltha.jpg.thumb.1920.1920.jpg3-2000-roo-ltha.jpg.thumb.1920.1920.jpg'),
(266, 112, 'uploads/000-roo-ltha.jpg.thumb.1920.1920.jpg00-roo-ltha.jpg.thumb.1920.1920.jpg3-2000-roo-ltha.jpg.thumb.1920.1920.jpg7-1-2000-roo-ltha.jpg.thumb.1920.1920.jpg');

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
(102, 8, 'Trung tâm thể dục thể thao', '0', 'Với tổng diện tích 1,680m2, trung tâm thể dục thể thao của khách sạn Holiday Crown bao gồm: phòng gym, phòng tập yoga, đường tập golf trong nhà, phòng tắm hơi, bể sục jacuzzi, sân bóng rổ, đường dạo bộ, và đặc biệt là bể bơi ngoài trời.', ''),
(103, 9, 'Phòng Deluxe Suite', '8460000', 'Dù cho ở bất cứ phòng Suite nào nằm trong các tầng từ 53 đến 61 của khách sạn Holiday Crown, khách hàng cũng có thể tận hưởng tầm nhìn bao quát toàn thành phố. Với việc sử dụng hệ thống điều hoà 4 ống độc đáo, khách sạn Lotte Hà Nội bảo đảm đem lại cho khách hàng không khí mát lành gần gũi với thiên nhiên và những giờ phút nghỉ ngơi thoải mái.\r\n\r\n. Hai hãng thiết kế nội thất Wilson & Associates và HBA đã tạo ra hai phong cách thiết kế Á -Âu riêng biệt nhằm đáp ứng nhu cầu đa dạng của khách hàng.', 'Suite'),
(104, 8, 'Bể bơi Ngoài trời', '00000', 'Lặn xuống làn nước trong sạch, tận hưởng bầu không khí trong lành, cảm nhận ánh nắng ấm áp và lắng nghe những thanh âm của Hà Nội ở gần hơn bao giờ hết tại bể bơi ngoài trời trên tầng 7 của Holiday Crown. Giờ thì quý khách sẽ yêu thích bơi lội hơn bao giờ hết.\r\n*Vui lòng lưu ý rằng bể bơi đóng cửa vào Thứ Hai đầu tiên hàng tháng để vệ sinh và bảo trì.', ''),
(105, 10, 'Tiệc cưới', '0000', 'Đằng sau một đám cưới với những phút giây rạng rỡ, niềm vui và sự hài lòng chắc chắn phải là một kế hoạch chỉn chu và tỉ mỉ cũng như đội ngũ nhân viên tận tình và giàu kinh nghiệm trong nhiều lĩnh vực. Holiday Crown xin được chia sẻ tất cả những mong muốn cùng bạn và đưa đám cưới trong mơ của bạn trở thành hiện thực', ''),
(106, 10, 'Hội nghị', '0000', 'Crystal Ballroom - phòng họp có diện tích lớn nhất tại khách sạn Holiday Crown có khả năng phục vụ tới 900 khách (hoặc 1,200 khách khi kết hợp khu vực sảnh chờ 300m2. Với nội thất tối tân và hệ thống âm thanh ánh sáng đạt tầm nghệ thuật, Crystal Ballroom chính là lựa chọn hoàn hảo cho các buổi hội thảo và đám cưới. Crystal Ballroom có thể được chia thành ba phòng nhỏ với vách ngăn di động nhằm phục vụ các loại hình sự kiện đa dạng.', ''),
(108, 9, 'Phòng Deluxe', '4230000', 'Club Floor là không gian riêng biệt dành cho những doanh nhân tìm kiếm một nơi làm việc yên tĩnh. Đội ngũ nhân viên thông minh, dịch vụ đáng tin cậy, các thiết kế đơn giản mà hiệu quả, và dịch vụ ăn uống cao cấp chính là những lý do bạn nên chọn để ở lại Club Floor.', 'Phòng club'),
(109, 9, 'Phòng Deluxe', '3290000', 'Tại tất cả các phòng Deluxe nằm từ tầng 40 đến tầng 53 của toà nhà Holiday Crown, khách hàng đều có thể tận hưởng tầm nhìn tuyệt đẹp bao quát thành phố Hà Nội. Các tiện nghi cao cấp bao gồm hệ thống điều hoà độc đáo với 4 ống sẽ bảo đảm cho khách hàng những giờ phút nghỉ ngơi thoải mái tại khách sạn.\r\n\r\n.Hai hãng thiết kế nội thất Wilson Associates và HBA đã tạo ra hai phong cách thiết kế Á -Âu riêng biệt nhằm đáp ứng nhu cầu đa dạng của khách hàng.', 'Tiêu chuẩn'),
(110, 9, 'Phòng Presidential Suite', '21385000', 'Khách hàng cũng có thể tận hưởng tầm nhìn bao quát toàn thành phố. Với việc sử dụng hệ thống điều hoà 4 ống độc đáo, khách sạn Holiday Crown bảo đảm đem lại cho khách hàng không khí mát lành gần gũi với thiên nhiên và những giờ phút nghỉ ngơi thoải mái.\r\n\r\n. Hai hãng thiết kế nội thất Wilson & Associates và HBA đã tạo ra hai phong cách thiết kế Á -Âu riêng biệt nhằm đáp ứng nhu cầu đa dạng của khách hàng.', 'Suite'),
(112, 9, 'Phòng Premier Suite', '14335000', 'Khách hàng cũng có thể tận hưởng tầm nhìn bao quát toàn thành phố. Với việc sử dụng hệ thống điều hoà 4 ống độc đáo, khách sạn Holiday CrwonHà Nội bảo đảm đem lại cho khách hàng không khí mát lành gần gũi với thiên nhiên và những giờ phút nghỉ ngơi thoải mái.\r\n\r\n. Hai hãng thiết kế nội thất Wilson & Associates và HBA đã tạo ra hai phong cách thiết kế Á -Âu riêng biệt nhằm đáp ứng nhu cầu đa dạng của khách hàng.', 'Suite');

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

--
-- Dumping data for table `producttaken`
--

INSERT INTO `producttaken` (`proTakenId`, `userId`, `productId`, `people`, `floor`, `total`, `dateStart`, `dateEnd`) VALUES
(21, 39, 103, 2, 10, '50760000', '2021-11-08', '2021-11-11');

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
(36, 'thevu2468@gmail.com', '0376192789', '$2y$10$hxJzyhLlexyjsRNiLqLkOOhHWf..0OcOcuL74bWK2QSt.7kQgvgqi', 'Nguyễn Thế Vũ', 1, '../admin/uploads/incognito.png', '', 1, '2021-11-06 03:52:01', 1),
(39, 'nguyenthevu2602@gmail.com', '0123456789', '$2y$10$dsj6cx7n0ElnmBO/QWESTe8oSt9xFtK3kYbPOCT93fk.f05kAYrNS', 'Thế Vũ', 0, '../admin/uploads/incognito.png', 'e37c963b18a98812d55515bcd3ed7eb8', 1, '2021-11-06 03:53:23', 0),
(40, 'vuthe2602@gmail.com', '0123456789', '$2y$10$Crg.KYRIxGGW/uPOhlftBOI3mHVecPSnLjKlVq3/JEzH3PqUWlkeC', 'Vũ', 0, '../admin/uploads/01057192.jpg', 'daaba148cf1458f1ad6eb501b990464a', 1, '2021-11-06 03:51:01', 0),
(41, 'satthumaulanh@gmail.com', '0123456789', '$2y$10$OLqQ.1olczJrISntouaowOa9/IpWV97JBbh6uU9cEPmt5hHQNj9Py', 'Lương Chí Thành', 1, '../admin/uploads/incognito.png', '', 1, '2021-11-06 03:46:31', 0);

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
  MODIFY `cmtId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `img_product`
--
ALTER TABLE `img_product`
  MODIFY `imgId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=267;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `producttaken`
--
ALTER TABLE `producttaken`
  MODIFY `proTakenId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

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
