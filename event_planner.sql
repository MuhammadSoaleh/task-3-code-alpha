-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2024 at 11:42 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `event planner`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(100) NOT NULL,
  `tag` varchar(225) NOT NULL,
  `location` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `image`, `name`, `price`, `tag`, `location`) VALUES
(1, '369727889_133202833190103_1643921655625945940_n.jpg', 'Birthday Party', 6500, '20% OFF', '11-A'),
(2, 'DeWatermark.ai_1713254513432.jpg', 'Weeding', 150000, 'PREMIUM', '11-B'),
(3, 'b2.jpg', 'Wedding', 100000, 'AFFORDABLE', '11-C'),
(4, 'download.png', 'BED DECCORATION', 6500, 'PREMIUM', '11-D');

-- --------------------------------------------------------

--
-- Table structure for table `event orginizer`
--

CREATE TABLE `event orginizer` (
  `id` int(225) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rigistration`
--

CREATE TABLE `rigistration` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address_1` varchar(555) NOT NULL,
  `address_2` varchar(555) NOT NULL,
  `city` varchar(225) NOT NULL,
  `state` varchar(322) NOT NULL,
  `zip` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rigistration`
--

INSERT INTO `rigistration` (`id`, `firstname`, `lastname`, `email`, `password`, `address_1`, `address_2`, `city`, `state`, `zip`) VALUES
(1, '[muhammad]', '[MISBAH]', '[msoaleh63@outlook.com]', '[34638546]', '[B1-106 2 floor skylineapartment powerhousechorangi]', '[354638]', '[KARACHI]', '[SINDH]', 0),
(2, '[muhammad]', '[MISBAH]', '[msoaleh63@outlook.com]', '[gcdhrf]', '[B1-106 2 floor skylineapartment powerhousechorangi]', '[fxdhrtd]', '[KARACHI]', '[SINDH]', 0),
(3, '[muhammad]', '[MISBAH]', '[msoaleh63@outlook.com]', '[jyfgtutuf]', '[B1-106 2 floor skylineapartment powerhousechorangi]', '[jk,gikiy]', '[KARACHI]', '[SINDH]', 0),
(4, '[muhammad]', '[MISBAH]', '[msoaleh63@outlook.com]', '[j dfyrhfedth]', '[B1-106 2 floor skylineapartment powerhousechorangi]', '[lyui8ktgyikh]', '[KARACHI]', '[SINDH]', 0),
(5, '[muhammad]', '[MISBAH]', '[msoaleh63@outlook.com]', '[i7tyiyhg]', '[B1-106 2 floor skylineapartment powerhousechorangi]', '[tjgftftjh]', '[KARACHI]', '[SINDH]', 0),
(6, '[muhammad]', '[MISBAH]', '[msoaleh63@outlook.com]', '[gyghuklhukgk]', '[B1-106 2 floor skylineapartment powerhousechorangi]', '[hvhbgvhgkhg]', '[KARACHI]', '[SINDH]', 0),
(7, 'muhammad', 'MISBAH', 'msoaleh63@outlook.com', 'jvfgjyuj', 'B1-106 2 floor skylineapartment powerhousechorangi', 'jhguyjg', 'KARACHI', 'SINDH', 75850);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event orginizer`
--
ALTER TABLE `event orginizer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rigistration`
--
ALTER TABLE `rigistration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `event orginizer`
--
ALTER TABLE `event orginizer`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rigistration`
--
ALTER TABLE `rigistration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
