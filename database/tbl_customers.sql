-- phpMyAdmin SQL Dump
-- version 4.0.10.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 01, 2015 at 03:43 AM
-- Server version: 5.1.68
-- PHP Version: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `seygecom_insu`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customers`
--

CREATE TABLE IF NOT EXISTS `tbl_customers` (
  `cusId` int(11) NOT NULL AUTO_INCREMENT,
  `cusFullname` varchar(80) NOT NULL,
  `cusAdrs` text NOT NULL,
  `cusPhone` varchar(10) NOT NULL,
  `cusEmail` varchar(80) NOT NULL,
  `cusUsername` varchar(16) NOT NULL,
  `cusPassword` varchar(150) NOT NULL,
  `cusToken` text NOT NULL,
  `cusIdCard` int(13) NOT NULL,
  `cusLevel` int(11) NOT NULL,
  `oldCompany` varchar(100) NOT NULL,
  `oldInsurance` varchar(100) NOT NULL,
  `oldRegister` varchar(100) NOT NULL,
  `cusCreateAt` datetime NOT NULL,
  PRIMARY KEY (`cusId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_customers`
--

INSERT INTO `tbl_customers` (`cusId`, `cusFullname`, `cusAdrs`, `cusPhone`, `cusEmail`, `cusUsername`, `cusPassword`, `cusToken`, `cusIdCard`, `cusLevel`, `oldCompany`, `oldInsurance`, `oldRegister`, `cusCreateAt`) VALUES
(2, 'pudthai pichet', '123/zzzz', '0959356049', 'pudthaiiii@gmail.com', 'pudthai', '55c3b5386c486feb662a0785f340938f518d547f', '4da210603ad12e519341ceeb96f6de28556b4a97280240.26549340', 0, 0, '', '0', '', '2015-06-01 00:53:27'),
(3, 'pichet Kunjai', '123434', '0959356049', 'pudthaiiii@gmail.com', 'pudthaiiii', '10470c3b4b1fed12c3baac014be15fac67c6e815', '8138ef59051cd99c7681e9275dbd2d26556b56c4ea9732.81761580', 0, 0, '', '0', '', '2015-06-13 01:45:24'),
(4, '11111', '1111', '1111', '111@1111.111', '111', '3be0ff98032936bc7f9df51c5685ee5f2dd6ccee', '2ba9db39c729092c76d3b36020fef758557b548804a511.06632136', 111111, 1, '', '0', '', '2015-06-13 04:52:07'),
(5, '11111', '1111', '1111', '111@1111.111', '111', '3be0ff98032936bc7f9df51c5685ee5f2dd6ccee', '57ebd50267c4a9e4b8366a5a63bb6c01557b54b0a4f815.82799378', 111111, 1, '', '0', '', '2015-06-13 04:52:48'),
(6, '11111', '1111', '1111', '111@1111.111', '111', '3be0ff98032936bc7f9df51c5685ee5f2dd6ccee', '6c33067a115b1a1bd78c929b433e52cf557b54c068d396.60589036', 111111, 1, '', '0', '', '2015-06-13 04:53:04');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
