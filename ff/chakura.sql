-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 24, 2024 lúc 06:56 PM
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
-- Cơ sở dữ liệu: `chakura`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `checkout`
--

CREATE TABLE `checkout` (
  `order_id` int(6) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `phoneNumber` int(10) NOT NULL,
  `food` varchar(255) NOT NULL,
  `serving` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `paymentMethod` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(6) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `phoneNumber` int(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `userSubject` varchar(50) NOT NULL,
  `userMessage` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `contact`
--

INSERT INTO `contact` (`contact_id`, `fullname`, `phoneNumber`, `email`, `userSubject`, `userMessage`) VALUES
(1, 'Tuan Anh', 999999999, 'dqtanh.dhti15a22hn@sv.uneti.edu.vn', 'Inquiry', 'None');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(6) NOT NULL,
  `firstname` varchar(10) DEFAULT NULL,
  `secondname` varchar(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `userPassword` varchar(20) NOT NULL,
  `userType` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`customer_id`, `firstname`, `secondname`, `email`, `userName`, `userPassword`, `userType`) VALUES
(3, 'Natalie', 'Ndetei', 'talndetei567@gmail.com', 'Admin1', '123', 'Admin'),
(5, 'Aron', 'Cheru', 'aroncherz@gmail.com', 'Admin2', '123', 'Admin'),
(6, 'Trevs', 'Muthoks', 'trevmuth@gmail.com', 'User1', '123', 'User'),
(7, 'Joan', 'Chege', 'jchege@gmail.com', 'User2', '123', 'User'),
(11, 'Joseph', 'waweru', 'jchege@gmail.com', 'User3', '123', 'User'),
(12, 'Katana', 'Makamata', 'kamaka@gmail.com', 'User4', '123', 'User'),
(13, 'Paul', 'Ndetei', 'pndetei@yahoo.com', 'User5', '123', 'User'),
(14, 'Kavulani', 'Maureen', 'maukav@gmail.com', 'User6', '123', 'User'),
(15, 'Kanyau', 'Simon', 'kanysimo@gmail.com', 'User7', '123', 'User'),
(16, 'Nigel', 'Njongoro', 'nignjo@gmail.com', 'User8', '123', 'User'),
(17, 'She', 'Her', 'she@gmail.com', 'User9', '123', 'User'),
(18, 'leila', 'jane', 'leila@gmail.com', 'Customer1', '123', 'Customer'),
(19, 'Charlie', 'Fayaz', 'charlie@gmail.com', 'Customer2', '123', 'Customer'),
(20, 'Mulembe', 'Efem', 'mulem@gmail.com', 'Admin3', '123', 'Admin'),
(24, 'client', 'client', 'client@gmail.com', 'User11', '123', 'User'),
(27, 'client1', 'client1', 'client1@gmail.com', 'User12', '123', 'User'),
(28, 'client2', 'client2', 'client2@gmail.com', 'User12', '123', 'User'),
(29, 'admin1', 'admin1', 'admin1@gmail.com', 'Admin4', '123', 'Admin'),
(30, 'Xerxes', 'Flynn', 'jogopux@mailinator.com', 'paneboci', '12345', ''),
(31, 'Byron', 'Cross', 'rehes@mailinator.com', 'jiperyh', 'Jamie', ''),
(32, 'Raymond', 'Humphrey', 'weredux@mailinator.com', 'pijaw', '12345', ''),
(33, 'Karen', 'Nyamae', 'knyamae@gmail.com', 'knyamae', 'Godisable1', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menu`
--

CREATE TABLE `menu` (
  `food_id` int(11) NOT NULL,
  `food_name` varchar(40) NOT NULL,
  `food_price` float DEFAULT NULL,
  `food_image` varchar(100) DEFAULT NULL,
  `food_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `menu`
--

INSERT INTO `menu` (`food_id`, `food_name`, `food_price`, `food_image`, `food_description`) VALUES
(1, 'Sườn Nướng Xốt BBQ 500g', 80000, 'images/BBQ.jpg', 'Thành phần: sườn heo, xốt BBQ'),
(2, 'Cánh Giữa Gà Chiên Tỏi', 120000, 'images/Canhga.jpg', 'Thành phần: Cánh gà giữa, bột chiên gà, tỏi chiên, gia vị'),
(3, 'Gà Dakgangjang Sốt Tương Tỏi', 290000, 'images/GaDakgangjang.jpg', 'Thành phần: Cánh gà, đùi gà rút xương hoặc có xương hay ức gà, nước sốt gà'),
(4, 'Gà Dai Hấp 1/2 Con', 150000, 'images/Gahap.jpg', ' Thành phần: Gà, xả, lá chanh, gừng...rots.'),
(5, 'Gà Quay Mật Ong Nguyên Con', 500000, 'images/Gaquay.jpg', ' Thành phần: Gà nguyên con, lá móc mật, mật ong..'),
(6, 'Súp Bí đỏ Kem tươi & Thịt bò ăn kèm crou', 300000, 'images/sup.jpg', 'Súp Bí đỏ nấu với kem tươi và thịt bò băm'),
(7, 'Khoai tây chiên', 70000, 'images/khoaitay.jpg', 'Thành phần: Khoai tây, phô mai'),
(8, 'Spaghetti Creamy Marinara', 350000, 'images/spa.jpg', 'Thành phần: Spaghetti Hải sản (Tôm, Mực, Ngao) sốt Kem tươi béo ngậy'),
(9, 'Tenderloin Beef-steak Thăn Nội Bò Úc - k', 789000, 'images/steak.jpg', 'Thành phần: 130-150 gram thăn nội Bò Úc nhập khẩu được served cùng khoai chiên, rau vườn tươi, và các lựa chọn sốt tươi home-made cực ngon!'),
(10, 'Sườn Cừu cắt kiểu Pháp', 1000000, 'images/cuu.jpg', 'Thành phần: Sườn Cừu cắt kiểu Pháp 228k\r\n\r\n200-220g sườn cừu Úc ướp lá thơm áp chảo, ăn kèm sốt Sốt tuỳ chọn:\r\n\r\nKem nấm / Phomai/ Mù tạt Mật ong/ BBQ/ Tiêu xanh'),
(11, 'Nước ép Dưa hấu', 80000, 'images/nuocep.jpg', '         Nước ép dưa hấu'),
(12, 'PEPSI', 50000, 'images/pepsi.jpg', 'PEPSI CAN 330ML'),
(13, 'Soda', 89000, 'images/soda.jpg', '   Soda Nhiệt đới'),
(14, 'Trà Hoa quả Summer Breeze', 90000, 'images/tra.jpg', 'Trà Hoa quả Summer Breeze'),
(15, 'Coldbrew Sữa tươi', 120000, 'images/cold.jpg', 'Cafe Coldbrew Sữa tươi'),
(16, 'Aquafina chai', 50000, 'images/aqua.jpg', 'AQUAFINA 500ML');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `food_id` int(11) NOT NULL,
  `customer_id` int(6) NOT NULL,
  `quantity` int(11) NOT NULL,
  `Total` int(11) NOT NULL,
  `date_of_purchase` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`order_id`, `food_id`, `customer_id`, `quantity`, `Total`, `date_of_purchase`) VALUES
(1, 1, 6, 20, 1600000, '2024-04-23'),
(2, 2, 6, 3, 360000, '2024-04-23'),
(3, 8, 6, 5, 1050000, '2024-04-23'),
(4, 14, 24, 2, 180000, '2024-04-23'),
(5, 15, 24, 2, 240000, '2024-04-23'),
(6, 16, 28, 2, 100000, '2024-04-23'),
(7, 1, 32, 2, 2000000, '2024-04-23'),
(8, 2, 32, 2, 240000, '2024-04-23'),
(9, 2, 33, 1, 120000, '2024-04-23'),
(10, 4, 33, 5, 750000, '2024-04-23'),
(11, 1, 6, 1, 80000, '2024-04-23'),
(16, 1, 18, 1, 80000, '2024-04-24'),
(17, 2, 18, 1, 120000, '2024-04-24'),
(18, 1, 18, 1, 80000, '2024-04-24'),
(19, 2, 18, 1, 120000, '2024-04-24');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`order_id`);

--
-- Chỉ mục cho bảng `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`),
  ADD KEY `email` (`email`),
  ADD KEY `userName` (`userName`);

--
-- Chỉ mục cho bảng `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`food_id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `food_id` (`food_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `checkout`
--
ALTER TABLE `checkout`
  MODIFY `order_id` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT cho bảng `menu`
--
ALTER TABLE `menu`
  MODIFY `food_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `customer_id` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`),
  ADD CONSTRAINT `food_id` FOREIGN KEY (`food_id`) REFERENCES `menu` (`food_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
