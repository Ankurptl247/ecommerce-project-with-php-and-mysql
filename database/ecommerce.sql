-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2024 at 07:31 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(10) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `fname`, `lname`, `email`, `password`) VALUES
(3, '', 'patel', 'a@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(10) NOT NULL,
  `img` varchar(200) NOT NULL,
  `pname` varchar(300) NOT NULL,
  `dprice` int(50) NOT NULL,
  `oprice` int(50) NOT NULL,
  `categories` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `img`, `pname`, `dprice`, `oprice`, `categories`) VALUES
(1, 'electronic-store-category-image-02.jpg', '5G Unlocked Smartphone,12GB RAM+256GB Storage120Hz Fluid Display Hasselblad Quad Camera 65W Ultra Fast Charge 50W Wireless Charge', 1299, 1000, 'm'),
(3, 'electronic-store-category-image-01.jpg', 'Home Speaker 500: Smart Bluetooth Speaker with Alexa Voice Control Built-In, White', 499, 299, 's'),
(4, 'electronic-store-category-image-03.jpg', '13 Ultrabook Gaming Laptop: Intel Core i7-1165G7 4 Core, NVIDIA GeForce GTX 1650 Ti Max-Q, 13.3″ 1080p 120Hz, 16GB RAM, 512GB SSD, CNC Aluminum, Chroma RGB, Thunderbolt 4', 15000, 10000, 'l'),
(5, 'electronic-store-category-image-08.jpg', 'X80J 55 Inch TV: 4K Ultra HD LED Smart Google TV with Dolby Vision HDR', 15999, 12999, 's'),
(6, 'electronic-store-category-image-07.jpg', 'Full-Automatic Compact Washer with Wheels, 1.6 cu. ft, 11 lbs capacity with 6 Wash Programs Washer', 2999, 2000, 'h'),
(7, 'electronic-store-category-image-05.jpg', '0.9 Cubic Feet Capacity 900 Watts Kitchen Essentials for the Countertop Stainless Steel', 599, 499, 'h'),
(8, 'electronic-store-product-image-12-300x300.jpg', 'Compact Pulsator Washer for Clothes, .9 Cubic ft. Tub, White, BPAB10WH', 30000, 25999, 'h'),
(9, 'electronic-store-product-image-20-300x300.jpg', 'Android Tablet 10.5” LCD Screen 64GB Storage Long-Lasting Battery Kids Content Smart Switch Expandable Memory', 5999, 3999, 't'),
(10, 'electronic-store-product-image-17-300x300.jpg', '14″ FHD Ultrabook (400 nits) with 10th Gen Intel i7-10510U Processor up to 4.90 GHz, 1 TB PCIe SSD, 16GB RAM, and Windows 11 Pro', 12999, 10999, ''),
(11, 'electronic-store-product-image-18-300x300.jpg', '13 Ultrabook Gaming Laptop: Intel Core i7-1165G7 4 Core, NVIDIA GeForce GTX 1650 Ti Max-Q, 13.3″ 1080p 120Hz, 16GB RAM, 512GB SSD, CNC Aluminum, Chroma RGB, Thunderbolt 4', 29999, 15999, 'l'),
(12, 'electronic-store-product-image-19-300x300.jpg', '15.6″ FHD Display Laptop – Intel i7 – Intel HD Graphics 6000 , Webcam, WiFi, Bluetooth, HDMI, Windows 11,Grey', 16999, 14999, 'l'),
(14, 'electronic-store-product-image-17-300x300.jpg', '14″ FHD Ultrabook (400 nits) with 10th Gen Intel i7-10510U Processor up to 4.90 GHz, 1 TB PCIe SSD, 16GB RAM, and Windows 11 Pro', 12999, 10999, 'l'),
(15, 'electronic-store-product-gallery-image-19-300x300.jpg', 'iphone 17 pro max', 2999, 1999, 'm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
