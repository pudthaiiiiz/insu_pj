-- phpMyAdmin SQL Dump
-- version 4.4.1.1
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Aug 23, 2015 at 10:29 PM
-- Server version: 5.5.42
-- PHP Version: 5.6.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `insure_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slide_main`
--

CREATE TABLE `tbl_slide_main` (
  `slId` int(11) NOT NULL,
  `slTitle` varchar(80) NOT NULL,
  `slImage` varchar(100) NOT NULL,
  `slDes` varchar(300) NOT NULL,
  `slLink` varchar(120) NOT NULL,
  `slLinkName` varchar(80) NOT NULL,
  `slCreateAt` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_slide_main`
--

INSERT INTO `tbl_slide_main` (`slId`, `slTitle`, `slImage`, `slDes`, `slLink`, `slLinkName`, `slCreateAt`) VALUES
(1, 's1', '1438227610.png', '', '', '', '2015-07-30 10:40:10'),
(2, 's2', '1440341819.png', '', '', '', '2015-08-23 21:56:59'),
(3, 's3', '1440342366.png', '', '', '', '2015-08-23 22:06:06'),
(4, 's4', '1440342712.png', '', '', '', '2015-08-23 22:11:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_slide_main`
--
ALTER TABLE `tbl_slide_main`
  ADD PRIMARY KEY (`slId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_slide_main`
--
ALTER TABLE `tbl_slide_main`
  MODIFY `slId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
