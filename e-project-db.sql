-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2023 at 10:40 PM
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
-- Database: `e-project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `name`, `email`, `password`, `created_at`) VALUES
(8, 'random', 'random@gmail.com', '123', '2023-10-08 20:04:07'),
(9, 'ik', 'ik@gmail.com', '987', '2023-10-09 19:04:45');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `product_id` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` int(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `name`, `address`, `email`, `number`, `password`) VALUES
(1, 'asad', '', 'asad@gmail.com', -1234, 'asad123'),
(2, 'fahad', '', 'fahad@gmail.com', 123908123, 'fahad123');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(20) NOT NULL,
  `message` varchar(255) NOT NULL,
  `messagetime` time DEFAULT curtime()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`firstname`, `lastname`, `email`, `phone`, `message`, `messagetime`) VALUES
('amir', 'ali', 'amir@gmail.com', 123431567, 'this is message ifs for testing purpose', '01:05:46'),
('babar', 'azam', 'babar@gmail.com', 2147483647, 'this message is from babar azam', '01:15:29');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `Name` varchar(255) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `WorkPhoneNo` int(255) DEFAULT NULL,
  `CellNo` int(255) DEFAULT NULL,
  `DateOfBirth` varchar(255) DEFAULT NULL,
  `Remarks` varchar(255) DEFAULT NULL,
  `orderId` int(11) NOT NULL,
  `ProductId` int(11) DEFAULT NULL,
  `CustomerId` int(11) DEFAULT NULL,
  `TotalProducts` varchar(255) DEFAULT NULL,
  `TotalPrice` int(255) DEFAULT NULL,
  `OrderTime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`Name`, `Address`, `Email`, `WorkPhoneNo`, `CellNo`, `DateOfBirth`, `Remarks`, `orderId`, `ProductId`, `CustomerId`, `TotalProducts`, `TotalPrice`, `OrderTime`) VALUES
('cas', 'sdasd', 'sadasd@sdasd', 2312312, 12312312, 'axsdafs', 'sdasdasascc f f asf adfs', 38, 85, 1, '85) Moisturizing Cream(2)', 6400, '2023-10-23 19:33:47');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(50) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_category` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_price`, `product_image`, `product_category`) VALUES
(1, 'Ring two Tone my side', 3600, 'ring2.jpg', 9),
(2, 'Ring two Tone your side', 1200, 'ring3.jpg', 9),
(3, 'Ring silver oval black', 4400, 'ring4.jpg', 9),
(4, 'Ring silver oval red', 1200, 'ring5.jpg', 9),
(5, 'Ring plain circle', 5000, 'ring6.jpg', 9),
(6, 'Ring Interlinked', 4500, 'ring7.jpg', 9),
(7, 'Ring Band Encraved', 2300, 'ring8.jpg', 9),
(8, 'Ring cross band', 6000, 'ring9.jpg', 9),
(9, 'Ring roman counting', 1500, 'ring8.jpg', 9),
(10, 'Ring stainless steel', 3500, 'ring10.jpg', 9),
(11, 'Classing thick band ring', 6000, 'ring11.jpg', 9),
(12, 'Thick brush ring', 8000, 'ring12.jpg', 9),
(13, 'Fashionable silver ring chain', 3000, 'bracelet2.jpg', 8),
(14, 'Bracelet shiny silver', 5600, 'bracelet3.jpg', 8),
(15, 'Heavy silver chain bracelet', 4500, 'bracelet4.jpg', 8),
(16, 'Thick silver chain bracelet', 2300, 'bracelet5.jpg', 8),
(17, 'Wheat silver chain', 7000, 'bracelet6.jpg', 8),
(18, 'Bracelet shiny black', 6000, 'bracelet7.jpg', 8),
(19, 'Byzantine silver chain', 3500, 'bracelet9.jpg', 8),
(20, 'Silver cable chain', 1200, 'bracelet10.jpg', 8),
(21, 'Fashinable gold link chain', 1500, 'bracelet11.jpg', 8),
(22, 'Modern silver bar chain', 5500, 'bracelet12.jpg', 8),
(23, 'Delicate thin silver chain', 9000, 'necklace3.jpg', 10),
(24, 'Delicate cable silver chain', 6000, 'necklace4.jpg', 10),
(25, 'Thick curb silver chain', 4500, 'necklace5.jpg', 10),
(26, 'Fresh linked silver chain', 6700, 'necklace6.jpg', 10),
(27, 'Domed silver chain', 3400, 'necklace8.jpg', 10),
(28, 'Twisted silver chain', 12000, 'necklace8.jpg', 10),
(29, 'Dainty gold link chain', 3000, 'necklace9.jpg', 10),
(30, 'Moder rolo silver chain', 1400, 'necklace10.jpg', 10),
(31, 'Curl silver chain', 1700, 'necklace11.jpg', 10),
(32, 'Oval drop set', 1200, 'pendants3.jpg', 7),
(33, 'Green oval drop set', 4000, 'pendants4.jpg', 7),
(34, 'Swirl green drop pandent set', 6000, 'pendants5.jpeg', 7),
(35, 'Swirl purple drop pandent set', 4000, 'pendants6.jpeg', 7),
(36, 'Swirl red drop pandent set', 4000, 'pendatns7.jpeg', 7),
(37, 'Swirl champange drop pandent set', 12000, 'pendants11.jpeg', 7),
(38, 'Drop heart pandent set', 11000, 'pendants12.jpeg', 7),
(39, 'Tendy pendant set', 18000, 'pendants9.jpeg', 7),
(40, 'STUD pendant set', 4500, 'pendants10.jpeg', 7),
(41, 'new pandent set', 8000, 'pendants12.jpeg', 7),
(42, 'Open ring pearl earring', 3000, 'earrings2.jpg', 6),
(43, 'Emeral cut earrings', 3200, 'earrings3.jpg', 6),
(44, 'Wreath inspired earrings', 1200, 'earrings4.jpg', 6),
(45, 'Encrusted drop earrings', 5400, 'earrings4.jpg', 6),
(46, 'Bunched leav earrings', 6500, 'earrings5.jpg', 6),
(47, 'Scallpod drop earrings', 3400, 'earrings6.jpg', 6),
(48, 'Ornate marquise earrings', 5400, 'earrings8.jpg', 6),
(49, 'Pearl stud earrings', 6500, 'earrings9.jpg', 6),
(50, 'Fern post earrings', 2300, 'earrings11.jpg', 6),
(51, 'Spikey drop earrings', 7000, 'earrings7.jpg', 6),
(52, 'Dark Temptation', 1500, 'perfume1.jpg', 5),
(53, 'Mystic Noir', 1500, 'perfume2.jpg', 5),
(54, 'Fresh Breeze', 1500, 'perfume3.jpg', 5),
(55, 'Velvet Musk', 1500, 'perfume4.jpg', 5),
(56, 'Steel Essence', 1500, 'perfume5.jpg', 5),
(57, 'Midnight Elixir', 1500, 'perfume6.jpg', 5),
(58, 'Oceanic Drift', 1500, 'perfume7.jpg', 5),
(59, 'Urban Legend', 1500, 'perfume8.jpg', 5),
(60, 'Woodland Whispers', 1500, 'perfume9.jpg', 5),
(61, 'Royal Blaze', 1500, 'perfume10.jpg', 5),
(63, 'Foundation', 5000, 'makeup1.jpg', 1),
(64, 'Lipstick', 3500, 'makeup2.jpg', 1),
(65, 'Mascara', 2000, 'makeup3.jpg', 1),
(66, 'Eyeshadow Palette', 7200, 'makeup4.jpg', 1),
(67, 'Blush', 4500, 'makeup5.jpg', 1),
(68, 'Concealer', 3900, 'makeup6.jpg', 1),
(69, 'Eyeliner', 2800, 'makeup7.jpg', 1),
(70, 'Floral Elegance', 5500, 'w-perfume1.jpg', 4),
(71, 'Romantic Bloom', 4800, 'w-perfume2.jpg', 4),
(72, 'Exquisite Orchid', 6700, 'w-perfume3.jpg', 4),
(73, 'Velvet Petals', 4200, 'w-perfume4.jpg', 4),
(74, 'Garden Fantasy', 5900, 'w-perfume5.jpg', 4),
(75, 'Sensual Desires', 7300, 'w-perfume6.jpg', 4),
(76, 'Enchanted Rose', 5100, 'w-perfume7.jpg', 4),
(77, 'Glamourous Nights', 6200, 'w-perfume8.jpg', 4),
(78, 'Hydrating Shampoo', 2500, 'haircare1.jpg', 3),
(79, 'Repairing Conditioner', 2200, 'haircare2.jpg', 3),
(80, 'Styling Gel', 1800, 'haircare3.jpg', 3),
(81, 'Argan Oil Serum', 3200, 'haircare4.jpg', 3),
(82, 'Curl Enhancing Cream', 2700, 'haircare5.jpg', 3),
(83, 'Anti-Frizz Spray', 2000, 'haircare6.jpg', 3),
(84, 'Volumizing Mousse', 2300, 'haircare7.jpg', 3),
(85, 'Moisturizing Cream', 3200, 'skincare1.jpg', 2),
(86, 'Cleansing Foam', 2400, 'skincare2.jpg', 2),
(87, 'Serum', 2900, 'skincare3.jpg', 2),
(88, 'Sunscreen Lotion', 2100, 'skincare4.jpg', 2),
(89, 'Anti-Aging Eye Cream', 3500, 'skincare5.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `category_id` int(50) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`category_id`, `category_name`) VALUES
(1, 'makeup'),
(2, 'skincare'),
(3, 'Haircare'),
(4, 'ladies perfumes'),
(5, 'mens perfumes'),
(6, 'earrings'),
(7, 'pandents'),
(8, 'bracelets'),
(9, 'rings'),
(10, 'necklace');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderId`),
  ADD KEY `ProductId` (`ProductId`),
  ADD KEY `CustomerId` (`CustomerId`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `product_category` (`product_category`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `category_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`ProductId`) REFERENCES `products` (`product_id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`CustomerId`) REFERENCES `customers` (`customer_id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`product_category`) REFERENCES `product_categories` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
