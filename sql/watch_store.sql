-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 05, 2022 at 05:44 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `watch_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_email` varchar(50) NOT NULL,
  `customer_firstname` varchar(30) NOT NULL,
  `customer_lastname` varchar(50) NOT NULL,
  `customer_phone` varchar(20) NOT NULL,
  `SA_id_number` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_email`, `customer_firstname`, `customer_lastname`, `customer_phone`, `SA_id_number`) VALUES
('goahsvdhs@gmail.com', 'grammm', 'lastjjannd', '749209184', '63-25982dhbcb8'),
('grant@gmail.com', 'Grant', 'Hearn', '749209184', '63-2598296S63'),
('granth@gmail.com', 'Grant', 'Hearn', '749209184', '67-7564893g5'),
('mwohvunghhdsn@gmail.com', 'Ngonissjs3', 'Mwoyounazvoshyssf', '749209184897', '268373633774gg'),
('mwoyounahyssn@gmail.com', 'Ngoniada', 'an jjaxbjcbjcb', '749209184', '26837363338'),
('Mwoyounazvon@gmail.com', 'Ngoni', 'Mwoyounazvo', '749209184', '63-2598296S63'),
('mwoyounfjfjhfb@gmail.com', 'Ngonnccmn', 'Mwoyhdgdgghd', '7492091639', '63-259740943h'),
('mwoyounghhdsn@gmail.com', 'Ngonissjs', 'Mwoyounazvoshyss', '74920918489', '268373633774g'),
('mwoyounhhsjbvon@gmail.com', 'Ngoniwugdywd', 'Mwoyounazvgvdsjhj', '74920918464', '63-2598296S63gs7'),
('sharongdgd@gmail.com', 'earphons', 'laptop', '0749288492', '63-259827389'),
('sharonk@gmail.com', 'sharon', 'pier', '7123456789', '67-7564893dg6');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `order_id` int(11) NOT NULL,
  `product_id` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `customer_email` varchar(50) NOT NULL,
  `product_id` smallint(6) NOT NULL,
  `product_name` varchar(30) NOT NULL,
  `product_price` decimal(6,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` smallint(6) NOT NULL,
  `product_name` varchar(30) NOT NULL,
  `product_price` decimal(6,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_price`) VALUES
(1, 'Rolex AIR-KING Oyster', '115300'),
(2, 'Tissot Gentleman Powermatic ', '13141'),
(3, 'Samsung Galaxy Smartwatch', '2355'),
(4, 'Huawei Watch GT 2 Sport', '2739'),
(5, 'Apple Watch Series 7', '9249'),
(6, 'Ladies Anne Klein Crystal  ', '3000'),
(7, 'TAG HEUER CALIBRE E4', '34400'),
(8, 'NIXON 51-30 CHRONO GOLD', '10000'),
(9, 'AUDEMARS PIGUET ROYAL OAK', '990900'),
(10, 'FULLY ICED OUT DIAMOND WATCH', '12000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_email`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
