-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2024 at 09:19 PM
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
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `libraries`
--

CREATE TABLE `libraries` (
  `id` int(11) NOT NULL,
  `library_name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `about` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `libraries`
--

INSERT INTO `libraries` (`id`, `library_name`, `location`, `about`, `image`) VALUES
(1, 'jhd', 'hvjj', 'yyjcv', 'WhatsApp Image 2024-03-21 at 12.58.54 PM.jpeg'),
(3, 'jyctejch', 'kcuyn', 'yufjvlg', '3.jpg'),
(4, 'Maulana Ajad Library', 'Mini Pakistan, Ranchi', 'Katlu can read hear.', '4.jpg'),
(5, 'Raj', 'Chodu', 'BokaChoda', '5.jpg'),
(6, 'Raj', 'Chodu', 'BokaChoda', '6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `slot`
--

CREATE TABLE `slot` (
  `slot_id` int(11) NOT NULL,
  `lib_id` int(11) NOT NULL,
  `s_start` time NOT NULL,
  `s_end` time NOT NULL,
  `capacity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slot`
--

INSERT INTO `slot` (`slot_id`, `lib_id`, `s_start`, `s_end`, `capacity`) VALUES
(1, 4, '08:00:00', '11:00:00', 50),
(2, 5, '08:00:00', '11:00:00', 30),
(3, 4, '11:00:00', '02:00:00', 20),
(4, 4, '02:00:00', '05:00:00', 30),
(5, 4, '05:00:00', '08:00:00', 50);

-- --------------------------------------------------------

--
-- Table structure for table `slot_order_detail`
--

CREATE TABLE `slot_order_detail` (
  `slot_dtl_id` int(11) NOT NULL,
  `slot_id` int(11) NOT NULL,
  `slot_order_date` datetime NOT NULL,
  `deleted` tinyint(1) DEFAULT 0,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stud`
--

CREATE TABLE `stud` (
  `stud_id` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `Phone_No.` varchar(10) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `User_Id` varchar(255) NOT NULL,
  `Password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stud`
--

INSERT INTO `stud` (`stud_id`, `Name`, `Address`, `Phone_No.`, `Email`, `User_Id`, `Password`) VALUES
(6, 'raj', 'kokar', '8971613523', 'raj23@gmail.com', 'raj123', '123456'),
(7, 'Shreyansh Prasad', 'Market Road, Ghaghra, dist. Gumla, Jharkhand', '950478916.', 'sshreyansh199@gmail.com', 'sprasa7', 'Target@3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `libraries`
--
ALTER TABLE `libraries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slot`
--
ALTER TABLE `slot`
  ADD PRIMARY KEY (`slot_id`),
  ADD KEY `lib_id` (`lib_id`);

--
-- Indexes for table `slot_order_detail`
--
ALTER TABLE `slot_order_detail`
  ADD PRIMARY KEY (`slot_dtl_id`),
  ADD UNIQUE KEY `slot_id` (`slot_id`,`slot_order_date`,`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `stud`
--
ALTER TABLE `stud`
  ADD PRIMARY KEY (`stud_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `libraries`
--
ALTER TABLE `libraries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `slot`
--
ALTER TABLE `slot`
  MODIFY `slot_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `slot_order_detail`
--
ALTER TABLE `slot_order_detail`
  MODIFY `slot_dtl_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stud`
--
ALTER TABLE `stud`
  MODIFY `stud_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `slot`
--
ALTER TABLE `slot`
  ADD CONSTRAINT `slot_ibfk_1` FOREIGN KEY (`lib_id`) REFERENCES `libraries` (`id`);

--
-- Constraints for table `slot_order_detail`
--
ALTER TABLE `slot_order_detail`
  ADD CONSTRAINT `slot_order_detail_ibfk_1` FOREIGN KEY (`slot_id`) REFERENCES `slot` (`slot_id`),
  ADD CONSTRAINT `slot_order_detail_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `stud` (`stud_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
