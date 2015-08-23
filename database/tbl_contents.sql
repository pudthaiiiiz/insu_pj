-- phpMyAdmin SQL Dump
-- version 4.4.1.1
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Aug 23, 2015 at 10:28 PM
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
-- Table structure for table `tbl_contents`
--

CREATE TABLE `tbl_contents` (
  `cId` int(11) NOT NULL,
  `cTitle` varchar(200) NOT NULL,
  `cDes` text NOT NULL,
  `cDetail` longtext NOT NULL,
  `cImage` text NOT NULL,
  `cCreateAt` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_contents`
--

INSERT INTO `tbl_contents` (`cId`, `cTitle`, `cDes`, `cDetail`, `cImage`, `cCreateAt`) VALUES
(1, '1', 'Descaption', '<p><span style="color:rgb(148, 148, 148); font-family:helvetica neue,helvetica,noto sans,sans-serif,arial,sans-serif; font-size:12px">Detail</span></p>\n', '1440342939.JPG', '2015-08-23 22:15:39'),
(2, '2', 'Descaption', '<p><span style="color:rgb(148, 148, 148); font-family:helvetica neue,helvetica,noto sans,sans-serif,arial,sans-serif; font-size:12px">Detail</span></p>\n', '1440342944.JPG', '2015-08-23 22:15:44'),
(3, '3', 'Descaption', '<p><span style="color:rgb(148, 148, 148); font-family:helvetica neue,helvetica,noto sans,sans-serif,arial,sans-serif; font-size:12px">Detail</span></p>\n', '1440342948.JPG', '2015-08-23 22:15:48'),
(4, '4', 'Descaption', '<p><span style="color:rgb(148, 148, 148); font-family:helvetica neue,helvetica,noto sans,sans-serif,arial,sans-serif; font-size:12px">Detail</span></p>\n', '1440342952.JPG', '2015-08-23 22:15:52'),
(5, '5', 'Descaption', '<p><span style="color:rgb(148, 148, 148); font-family:helvetica neue,helvetica,noto sans,sans-serif,arial,sans-serif; font-size:12px">Detail</span></p>\n', '1440342956.JPG', '2015-08-23 22:15:56'),
(6, '6', 'Descaption', '<p><span style="color:rgb(148, 148, 148); font-family:helvetica neue,helvetica,noto sans,sans-serif,arial,sans-serif; font-size:12px">Detail</span></p>\n', '1440342960.JPG', '2015-08-23 22:16:00'),
(7, '7', 'Descaption', '<p><span style="color:rgb(148, 148, 148); font-family:helvetica neue,helvetica,noto sans,sans-serif,arial,sans-serif; font-size:12px">Detail</span></p>\n', '1440342964.JPG', '2015-08-23 22:16:04'),
(8, '8', 'Descaption', '<p><span style="color:rgb(148, 148, 148); font-family:helvetica neue,helvetica,noto sans,sans-serif,arial,sans-serif; font-size:12px">Detail</span></p>\n', '1440342968.JPG', '2015-08-23 22:16:08'),
(9, '9', 'Descaption', '<p><span style="color:rgb(148, 148, 148); font-family:helvetica neue,helvetica,noto sans,sans-serif,arial,sans-serif; font-size:12px">Detail</span></p>\n', '1440342972.JPG', '2015-08-23 22:16:12'),
(10, '10', 'Descaption', '<p><span style="color:rgb(148, 148, 148); font-family:helvetica neue,helvetica,noto sans,sans-serif,arial,sans-serif; font-size:12px">Detail</span></p>\n', '1440342976.JPG', '2015-08-23 22:16:16'),
(11, '11', 'Descaption', '<p><span style="color:rgb(148, 148, 148); font-family:helvetica neue,helvetica,noto sans,sans-serif,arial,sans-serif; font-size:12px">Detail</span></p>\n', '1440342980.JPG', '2015-08-23 22:16:20'),
(12, '12', 'Descaption', '<p><span style="color:rgb(148, 148, 148); font-family:helvetica neue,helvetica,noto sans,sans-serif,arial,sans-serif; font-size:12px">Detail</span></p>\n', '1440342985.JPG', '2015-08-23 22:16:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_contents`
--
ALTER TABLE `tbl_contents`
  ADD PRIMARY KEY (`cId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_contents`
--
ALTER TABLE `tbl_contents`
  MODIFY `cId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
