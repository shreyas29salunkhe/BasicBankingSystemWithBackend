-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 28, 2021 at 01:29 PM
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
-- Table structure for table `history`
--

DROP TABLE IF EXISTS `history`;
CREATE TABLE IF NOT EXISTS `history` (
  `Srno` int(10) NOT NULL AUTO_INCREMENT,
  `senderID` int(10) NOT NULL,
  `senderFname` varchar(20) NOT NULL,
  `senderLname` varchar(20) NOT NULL,
  `amountSent` double NOT NULL,
  `receiverID` int(10) NOT NULL,
  `receiverFname` varchar(20) NOT NULL,
  `receiverLname` varchar(20) NOT NULL,
  PRIMARY KEY (`Srno`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`Srno`, `senderID`, `senderFname`, `senderLname`, `amountSent`, `receiverID`, `receiverFname`, `receiverLname`) VALUES
(13, 109, 'Shafali', 'Verma', 200, 108, 'Rajeshwari', 'Gayakwad'),
(14, 109, 'Shafali', 'Verma', 200, 110, 'Radha', 'Yadav'),
(15, 104, 'Mithali', 'Raj', 200, 105, 'Jhulan', 'Goswami'),
(12, 110, 'Radha', 'Yadav', 200, 109, 'Shafali', 'Verma'),
(11, 109, 'Shafali', 'Verma', 200, 110, 'Radha', 'Yadav');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
