-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2023 at 05:50 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tourism`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking`
--

CREATE TABLE `tbl_booking` (
  `id` int(25) NOT NULL,
  `booking_on` datetime NOT NULL,
  `Starting_date` date NOT NULL,
  `ending_date` date NOT NULL,
  `user_id` int(11) NOT NULL COMMENT 'foreign key(tbl_user)',
  `package_id` int(11) NOT NULL COMMENT 'foreign key(tbl_packages)',
  `no_of_people` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_packages`
--

CREATE TABLE `tbl_packages` (
  `id` int(25) NOT NULL COMMENT 'PK, auto increment',
  `package_name` varchar(100) NOT NULL COMMENT 'Package Name',
  `Destination` varchar(100) NOT NULL COMMENT 'To destination',
  `Origin` varchar(100) NOT NULL COMMENT 'From Origin',
  `Days` int(3) NOT NULL COMMENT 'Number of days',
  `Status` int(1) NOT NULL COMMENT '1- active 2- inactive',
  `amount` int(100) NOT NULL COMMENT 'amount',
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_packages`
--

INSERT INTO `tbl_packages` (`id`, `package_name`, `Destination`, `Origin`, `Days`, `Status`, `amount`, `description`) VALUES
(1, 'bengalure-mumbai-2d', 'mumbai', 'bengalure', 2, 1, 10000, ''),
(2, 'bengalure-mumbai-5d', 'mumbai', 'bengalure', 5, 1, 13000, ''),
(3, 'kerala-goa-3d', 'goa', 'kerala', 3, 1, 6000, ''),
(4, 'kerala-goa-5d', 'goa', 'kerala', 5, 1, 8000, ''),
(5, 'kerala-delhi-5d', 'delhi', 'kerala', 5, 1, 15000, ''),
(6, 'kerala-delhi-8d', 'delhi', 'kerala', 8, 1, 18000, ''),
(7, 'bengalure-kashmir-6d', 'kashmir', 'kerala', 6, 1, 18000, ''),
(8, 'bengalure-kashmir-10d', 'kashmir', 'kerala', 10, 1, 20000, ''),
(9, 'kerala-himachal pradesh-6d', 'himachal pradesh', 'kerala', 6, 1, 16000, ''),
(10, 'kerala-himachal pradesh-8d', 'himachal pradesh', 'kerala', 8, 1, 19000, ''),
(11, 'kerala-rajasthan-6d', 'rajasthan', 'kerala', 6, 1, 14000, ''),
(12, 'kerala-rajasthan-8d', 'rajasthan', 'kerala', 8, 1, 16000, ''),
(13, 'kerala-dubai-7d', 'dubai', 'kerala', 7, 1, 24000, ''),
(14, 'kerala-dubai-10d', 'dubai', 'kerala', 10, 1, 28000, ''),
(15, 'kerala-usa-15d', 'usa', 'kerala', 15, 1, 250000, ''),
(16, 'kerala-usa-30d', 'usa', 'kerala', 30, 1, 450000, ''),
(17, 'kerala-france-10d', 'france', 'kerala', 10, 1, 150000, ''),
(18, 'kerala-france-15d', 'france', 'kerala', 15, 1, 200000, ''),
(19, 'kerala-italy-10d', 'italy', 'kerala', 10, 1, 130000, ''),
(20, 'kerala-italy-15d', 'italy', 'kerala', 15, 1, 190000, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(15) NOT NULL,
  `First_name` varchar(50) NOT NULL,
  `Last_name` varchar(50) NOT NULL,
  `Phone` int(10) NOT NULL,
  `Email` int(50) NOT NULL,
  `age` int(100) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_packages`
--
ALTER TABLE `tbl_packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_packages`
--
ALTER TABLE `tbl_packages`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT COMMENT 'PK, auto increment', AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
