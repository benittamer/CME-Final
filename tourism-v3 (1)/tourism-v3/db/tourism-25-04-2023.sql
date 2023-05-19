-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2023 at 04:17 PM
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

--
-- Dumping data for table `tbl_booking`
--

INSERT INTO `tbl_booking` (`id`, `booking_on`, `Starting_date`, `ending_date`, `user_id`, `package_id`, `no_of_people`) VALUES
(1, '2023-04-11 10:04:06', '2023-04-13', '2023-04-28', 1, 3, 2),
(2, '2023-04-11 10:04:40', '2023-04-22', '2023-04-21', 2, 1, 2),
(3, '2023-04-19 10:04:58', '2023-04-06', '2023-05-02', 3, 1, 1),
(4, '2023-04-19 10:04:26', '2023-04-06', '2023-05-02', 4, 1, 1),
(5, '2023-04-25 03:04:51', '2023-04-25', '2023-04-19', 5, 22, 2);

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
  `description` varchar(1000) NOT NULL,
  `content` varchar(2500) NOT NULL,
  `day-night` varchar(25) NOT NULL,
  `banner` varchar(100) NOT NULL,
  `overview` varchar(2500) NOT NULL,
  `max_people` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_packages`
--

INSERT INTO `tbl_packages` (`id`, `package_name`, `Destination`, `Origin`, `Days`, `Status`, `amount`, `description`, `content`, `day-night`, `banner`, `overview`, `max_people`) VALUES
(1, 'bengalure-mumbai-2d', 'mumbai', 'bengalure', 2, 2, 10000, '', '', '', '', '', 0),
(2, 'bengalure-mumbai-5d', 'mumbai', 'bengalure', 5, 2, 13000, '', '', '', '', '', 0),
(3, 'kerala-goa-3d', 'goa', 'kerala', 3, 2, 6000, '', '', '', '', '', 0),
(4, 'kerala-goa-5d', 'goa', 'kerala', 5, 2, 8000, '', '', '', '', '', 0),
(5, 'kerala-delhi-5d', 'delhi', 'kerala', 5, 2, 15000, '', '', '', '', '', 0),
(6, 'kerala-delhi-8d', 'delhi', 'kerala', 8, 2, 18000, '', '', '', '', '', 0),
(7, 'bengalure-kashmir-6d', 'kashmir', 'kerala', 6, 2, 18000, '', '', '', '', '', 0),
(8, 'bengalure-kashmir-10d', 'kashmir', 'kerala', 10, 2, 20000, '', '', '', '', '', 0),
(9, 'kerala-himachal pradesh-6d', 'himachal pradesh', 'kerala', 6, 2, 16000, '', '', '', '', '', 0),
(10, 'kerala-himachal pradesh-8d', 'himachal pradesh', 'kerala', 8, 2, 19000, '', '', '', '', '', 0),
(11, 'kerala-rajasthan-6d', 'rajasthan', 'kerala', 6, 2, 14000, '', '', '', '', '', 0),
(12, 'kerala-rajasthan-8d', 'rajasthan', 'kerala', 8, 2, 16000, '', '', '', '', '', 0),
(13, 'kerala-dubai-7d', 'dubai', 'kerala', 7, 2, 24000, '', '', '', '', '', 0),
(14, 'kerala-dubai-10d', 'dubai', 'kerala', 10, 2, 28000, '', '', '', '', '', 0),
(15, 'kerala-usa-15d', 'usa', 'kerala', 15, 2, 250000, '', '', '', '', '', 0),
(16, 'kerala-usa-30d', 'usa', 'kerala', 30, 2, 450000, '', '', '', '', '', 0),
(17, 'kerala-france-10d', 'france', 'kerala', 10, 2, 150000, '', '', '', '', '', 0),
(18, 'kerala-france-15d', 'france', 'kerala', 15, 2, 200000, '', '', '', '', '', 0),
(19, 'kerala-italy-10d', 'italy', 'kerala', 10, 2, 130000, '', '', '', '', '', 0),
(20, 'kerala-italy-15d', 'italy', 'kerala', 15, 2, 190000, '', '', '', '', '', 0),
(22, 'Mysore', 'Mysore', '', 7, 1, 3000, 'Plan your trip with us and travel around the world with the most affordable packages!', '\r\n                  <h3 class=\"h3 card-title\">MYSORE!!!!!</h3>\r\n\r\n                  <p class=\"card-text\">\r\n                    Mysore (or Mysuru), a city in India\'s southwestern Karnataka state, was the capital of the Kingdom of Mysore from 1399 to 1947. In its center is opulent Mysore Palace, seat of the former ruling Wodeyar dynasty. The palace blends Hindu, Islamic, Gothic and Rajput styles. Mysore is also home to the centuries-old Devaraja Market, filled with spices, silk and sandalwood.\r\n                  </p>', '7D/6N', 'mysore.jpg', 'Mysore (or Mysuru), a city in India\'s southwestern Karnataka state, was the capital of the Kingdom of Mysore from 1399 to 1947. In its center is opulent Mysore Palace, seat of the former ruling Wodeyar dynasty. The palace blends Hindu, Islamic, Gothic and Rajput styles. Mysore is also home to the centuries-old Devaraja Market, filled with spices, silk and sandalwood.', 5),
(23, 'Ooty', 'Ooty', '', 4, 1, 5000, 'Plan your trip with us and travel around the world with the most affordable packages! ', '<h3 class=\"h3 card-title\">HAVE A GREAT EXPERIENCE IN QUEEN OF HILLS!!!!!</h3>\r\n<p class=\"card-text\">\r\n                    Ooty, also known as Udhagamandalam, is a hill station in the state of Tamil Nadu, in southern India. Surrounded by trees, central Ooty Lake is a huge artificial expanse of water with pleasure boats. On the slopes of nearby Elk Hill, the Rose Garden is home to over 2,000 varieties of roses. The Government Botanical Garden, created in the 19th century, features ferns, orchids and a prehistoric, fossilized tree.\r\n                  </p>', '4D/3N', 'ooty.jpg', ' Ooty, also known as Udhagamandalam, is a hill station in the state of Tamil Nadu, in southern India. Surrounded by trees, central Ooty Lake is a huge artificial expanse of water with pleasure boats. On the slopes of nearby Elk Hill, the Rose Garden is home to over 2,000 varieties of roses. The Government Botanical Garden, created in the 19th century, features ferns, orchids and a prehistoric, fossilized tree.', 15),
(24, 'Rameshwaram', 'Rameshwaram', '', 10, 1, 7000, 'Plan your trip with us and travel around the world with the most affordable packages! ', '<h3 class=\"h3 card-title\">RAMEESHWARAM!!!!!</h3>\r\n<p class=\"card-text\">\r\n                    Rameswaram is a town on Pamban Island, in the southeast Indian state of Tamil Nadu. It’s known for Ramanathaswamy Temple, a Hindu pilgrimage site with ornate corridors, huge sculpted pillars and sacred water tanks. Devotees bathe in the waters of Agni Theertham, off the beach east of the temple. Gandamadana Parvatham is a hill with island views. A chakra (wheel) here is said to bear an imprint of Lord Rama’s feet.\r\n\r\n                  </p>', '9D/10N', 'rames.jpeg', 'Rameswaram is a town on Pamban Island, in the southeast Indian state of Tamil Nadu. It’s known for Ramanathaswamy Temple, a Hindu pilgrimage site with ornate corridors, huge sculpted pillars and sacred water tanks. Devotees bathe in the waters of Agni Theertham, off the beach east of the temple. Gandamadana Parvatham is a hill with island views. A chakra (wheel) here is said to bear an imprint of Lord Rama’s feet.', 25);

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
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `First_name`, `Last_name`, `Phone`, `Email`, `age`, `gender`) VALUES
(1, 'sidan', 'test', 1234567989, 0, 20, 'male'),
(2, 'asam', 'khalil', 953735272, 0, 20, 'male'),
(3, 'ereqw', 'waedwe', 2147483647, 0, 22, 'male'),
(4, 'ereqw', 'waedwe', 2147483647, 0, 22, 'male'),
(5, 'ggg', 'gccc', 23432432, 0, 11, 'male');

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
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_packages`
--
ALTER TABLE `tbl_packages`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT COMMENT 'PK, auto increment', AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
