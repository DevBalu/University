-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2016 at 04:45 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shipping`
--

-- --------------------------------------------------------

--
-- Table structure for table `addressreceiver`
--

CREATE TABLE `addressreceiver` (
  `cReceiver` varchar(30) NOT NULL,
  `ipr` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `addressreceiver`
--

INSERT INTO `addressreceiver` (`cReceiver`, `ipr`) VALUES
('9999999999', '9999999999'),
('9999999999', '9999999999'),
('1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `addresssender`
--

CREATE TABLE `addresssender` (
  `cSender` varchar(30) NOT NULL,
  `ips` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `addresssender`
--

INSERT INTO `addresssender` (`cSender`, `ips`) VALUES
('999999999999', '9999999999'),
('999999999999', '9999999999'),
('1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `general`
--

CREATE TABLE `general` (
  `width` varchar(40) NOT NULL,
  `height` varchar(40) NOT NULL,
  `massa` varchar(40) NOT NULL,
  `price` varchar(40) NOT NULL,
  `sfn` varchar(40) NOT NULL,
  `sln` varchar(40) NOT NULL,
  `smail` varchar(40) NOT NULL,
  `smob` varchar(40) NOT NULL,
  `rfn` varchar(40) NOT NULL,
  `rln` varchar(40) NOT NULL,
  `rmail` varchar(40) NOT NULL,
  `rmob` varchar(40) NOT NULL,
  `cSender` varchar(40) NOT NULL,
  `ips` varchar(40) NOT NULL,
  `cReceiver` varchar(40) NOT NULL,
  `ipr` varchar(40) NOT NULL,
  `departureDate` varchar(40) NOT NULL,
  `deliveryTime` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `general`
--

INSERT INTO `general` (`width`, `height`, `massa`, `price`, `sfn`, `sln`, `smail`, `smob`, `rfn`, `rln`, `rmail`, `rmob`, `cSender`, `ips`, `cReceiver`, `ipr`, `departureDate`, `deliveryTime`) VALUES
('997987', '987', '987', '987', '98', '7', '987', '987', '98', '7', '897', '89', '987', '987', '7', '987', '987', '987');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `width` varchar(20) NOT NULL,
  `height` varchar(20) NOT NULL,
  `massa` varchar(20) NOT NULL,
  `price` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`width`, `height`, `massa`, `price`) VALUES
('1231', '42342', '23423452', '23452'),
('111111', '111111', '1111111', '11111111'),
('2222', '22222', '2222', '22222'),
('999999999', '999999', '99999999', '99999999999'),
('1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `receiver`
--

CREATE TABLE `receiver` (
  `rfn` varchar(20) NOT NULL,
  `rln` varchar(20) NOT NULL,
  `rmail` varchar(20) NOT NULL,
  `rmob` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `receiver`
--

INSERT INTO `receiver` (`rfn`, `rln`, `rmail`, `rmob`) VALUES
('9999999999', '999999999', '99999999999', '9999999999'),
('9999999999', '999999999', '99999999999', '9999999999'),
('1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `sender`
--

CREATE TABLE `sender` (
  `sfn` int(11) NOT NULL,
  `sln` int(11) NOT NULL,
  `smail` int(11) NOT NULL,
  `smob` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sender`
--

INSERT INTO `sender` (`sfn`, `sln`, `smail`, `smob`) VALUES
(2147483647, 999999999, 2147483647, 2147483647),
(2147483647, 999999999, 2147483647, 2147483647),
(1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `timedelivery`
--

CREATE TABLE `timedelivery` (
  `departureDate` varchar(30) NOT NULL,
  `deliveryTime` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `timedelivery`
--

INSERT INTO `timedelivery` (`departureDate`, `deliveryTime`) VALUES
('798', '798'),
('798', '798'),
('9999999999', '99999999999'),
('9999999999', '99999999999'),
('1', '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
