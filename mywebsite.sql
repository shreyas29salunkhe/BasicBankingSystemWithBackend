-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 24, 2021 at 05:54 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mywebsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `balance` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `firstname`, `lastname`, `email`, `balance`) VALUES
(1, 'Harmanpreet', 'Kaur', 'harmanpreet@gmail.com', 670000),
(2, 'Smriti', 'Mandhana', 'smriti@gmail.com', 780000),
(3, 'Poonam', 'Yadav', 'poonam@gmail.com', 678000),
(4, 'Mithali', 'Raj', 'mithali@gmail.com', 800000),
(5, 'Jhulan', 'Goswami', 'jhulan@gmail.com', 682000),
(6, 'Deepti', 'Sharma', 'deepti@gmail.com', 759000),
(7, 'Punam', 'Raut', 'punam@gmail.com', 870000),
(8, 'Rajeshwari', 'Gayakwad', 'rajeshwari@gmail.com', 859000),
(9, 'Shafali', 'Verma', 'shafali@gmail.com', 690000),
(10, 'Radha', 'Yadav', 'radha@gmail.com', 708000);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
