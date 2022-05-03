-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 02, 2022 at 07:09 PM
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
-- Database: `primecore`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `surname` varchar(15) NOT NULL,
  `lastname` varchar(15) NOT NULL,
  `email` varchar(25) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(30) NOT NULL,
  `password` varchar(25) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `surname`, `lastname`, `email`, `gender`, `address`, `password`) VALUES
(1, 'Ogezo', 'Onoriode Cyril', 'admin', 'Male', 'Lagos', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`ID`, `firstname`, `lastname`, `email`, `phone`, `dob`, `gender`, `address`, `password`) VALUES
(1, 'Ephraim', 'Jeremiah', 'ephraimjeremaih64@gmail.com', '08062979549', '1994-12-10', 'Male', 'Lagos', '1'),
(2, 'Dan', 'Iheanacho', 'dan@gmail.com', '09808089', '2021-01-28', 'Male', 'Lagos', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `message` longtext NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`ID`, `name`, `email`, `phone`, `message`) VALUES
(7, 'Ephraim Jeremiah', 'ephraimjeremaih64@gmail.com', '08062979549', 'jubuuhihuijokpk,pklpk[kl[l]\r\nhuhihui;u'),
(8, 'Ephraim Jeremiah', 'ephraimjeremaih64@gmail.com', '08062979549', 'jihjiuiuiuiuiu');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `serial_no` varchar(20) NOT NULL,
  `manufacturer` varchar(30) NOT NULL,
  `product_id` varchar(20) NOT NULL,
  `model` varchar(30) NOT NULL,
  `supply` varchar(40) NOT NULL,
  `sold` varchar(35) NOT NULL,
  `date` varchar(15) NOT NULL,
  `student` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ID`, `serial_no`, `manufacturer`, `product_id`, `model`, `supply`, `sold`, `date`, `student`) VALUES
(2, '5CD6133LKO', 'Hewlett Packard (HP)', 'AV563U8NABA', 'STREAM 11 Pro', 'Base Point', 'DLHS Warri', '2020-11-06', 'Luck Eunice'),
(5, '5CD613O', 'Hewlett Packard (HP)', 'AV563U8NABA', 'STREAM 11 Pro', 'Base Point', 'DLHS Delta', '2021-10-25', ''),
(6, '5CD6133L', 'Hewlett Packard (HP)', 'AV563U8NABA', 'STREAM 11 Pro', 'Base Point', 'DLHS Delta', '2021-11-19', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
