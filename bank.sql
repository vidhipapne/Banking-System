-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 20, 2020 at 01:55 PM
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
-- Database: `bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `name` varchar(100) NOT NULL,
  `account` bigint(11) NOT NULL,
  `balance` decimal(10,2) NOT NULL,
  `email` varchar(100) NOT NULL,
  `cust_id` int(6) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`cust_id`)
) ENGINE=MyISAM AUTO_INCREMENT=107 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`name`, `account`, `balance`, `email`, `cust_id`) VALUES
('Shalini Sharma', 78421574189, '38000.00', 'shalini@gmail.com', 1),
('Rajan Sharma', 14784753269, '52000.00', 'rajan@gmail.com', 2),
('Rahul Goyal', 18746874651, '90000.00', 'rahul@gmail.com', 3),
('Kartik Shah', 25878496417, '30000.00', 'kartik@gmail.com', 4),
('Ashika Kulkarni', 74785963214, '20000.00', 'ashika@gmail.com', 5);

-- --------------------------------------------------------

--
-- Table structure for table `transfers`
--

DROP TABLE IF EXISTS `transfers`;
CREATE TABLE IF NOT EXISTS `transfers` (
  `trans_id` int(6) NOT NULL AUTO_INCREMENT,
  `sender` varchar(100) NOT NULL,
  `senderAc` bigint(11) NOT NULL,
  `reciever` varchar(100) NOT NULL,
  `recieverAc` bigint(11) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  PRIMARY KEY (`trans_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transfers`
--

INSERT INTO `transfers` (`trans_id`, `sender`, `senderAc`, `reciever`, `recieverAc`, `amount`) VALUES
(1, 'Shalini Sharma', 78421574189, 'Rajan Sharma', 14784753269, '1000.00'),
(2, 'Shalini Sharma', 78421574189, 'Rajan Sharma', 14784753269, '1000.00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
