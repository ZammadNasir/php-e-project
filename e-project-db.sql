-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2023 at 10:44 PM
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
(51, 'Spikey drop earrings', 7000, 'earrings7.jpg', 6);

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
  MODIFY `orderId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

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
