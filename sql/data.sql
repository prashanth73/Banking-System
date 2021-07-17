-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 17, 2021 at 11:36 AM
-- Server version: 8.0.21
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank`
--
CREATE DATABASE IF NOT EXISTS `bank` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `bank`;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Balance` int NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`Id`, `Name`, `Email`, `Balance`) VALUES
(1, 'Vishal', 'vishal@gmail.com', 39300),
(2, 'Ramesh', 'ramesh@gmail.com', 4400),
(3, 'Raghu', 'raghu@gmail.com', 30000),
(4, 'Vicky', 'vicky@gmail.com', 45880),
(5, 'Joey', 'joey32@gmail.com', 19900),
(6, 'Nathan', 'nathan54@gmail.com', 4000),
(7, 'Adam', 'adam99@gmail.com', 60300),
(8, 'Rahul', 'rahul@gmail.com', 90000),
(9, 'Sony', 'ammu@gmail.com', 2900),
(10, 'Navya', 'nayasri@gmail.com', 20000),
(11, 'Laxmi', 'laxmip@gmail.com', 35100),
(12, 'Chintu', 'chintu74@gmail.com', 90100),
(13, ' Ram ', ' ram32@gmail.com ', 8000),
(14, ' Lucky ', ' Lucky65@gmail.com ', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `transfers`
--

DROP TABLE IF EXISTS `transfers`;
CREATE TABLE IF NOT EXISTS `transfers` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `Sender_Name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `Receiver_Name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `Amount_sent` int NOT NULL,
  `datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `transfers`
--

INSERT INTO `transfers` (`Id`, `Sender_Name`, `Receiver_Name`, `Amount_sent`, `datetime`) VALUES
(1, 'Ramesh', 'Vishal', 2000, '2021-07-16 18:10:30'),
(2, 'Vishal', 'Nathan', 1000, '2021-07-16 18:11:06'),
(3, 'Joey', 'Laxmi', 100, '2021-07-16 18:40:37'),
(4, 'Ramesh', 'Vishal', 10, '2021-07-16 19:19:08'),
(5, 'Ramesh', 'Vishal', 22490, '2021-07-16 19:21:01'),
(6, 'Vishal', 'Ramesh', 4400, '2021-07-16 19:22:21'),
(7, 'Sony', 'Chintu', 100, '2021-07-16 19:22:58'),
(8, 'Vicky', 'Ravi', 2000, '2021-07-17 10:07:48'),
(9, 'Vishal', 'Adam', 300, '2021-07-17 13:08:48'),
(10, ' Lucky ', 'Vicky', 3000, '2021-07-17 13:28:46');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
