-- phpMyAdmin SQL Dump
-- version 4.4.1.1
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jul 25, 2015 at 05:24 AM
-- Server version: 5.5.42
-- PHP Version: 5.6.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `insure_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_attachment`
--

CREATE TABLE `tbl_attachment` (
  `atcId` int(11) NOT NULL,
  `atcFile` varchar(100) NOT NULL,
  `userToken` text NOT NULL,
  `atcCreateAt` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_attachment`
--

INSERT INTO `tbl_attachment` (`atcId`, `atcFile`, `userToken`, `atcCreateAt`) VALUES
(2, '1437774771.jpg', '34856905a305ec510aadb211cab19cb155a7d8553a0db7.05992641', '2015-07-25 04:52:52'),
(3, '1437775121.jpg', '34856905a305ec510aadb211cab19cb155a7d8553a0db7.05992641', '2015-07-25 04:58:41'),
(4, '1437775142.jpg', '34856905a305ec510aadb211cab19cb155a7d8553a0db7.05992641', '2015-07-25 04:59:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_attachment`
--
ALTER TABLE `tbl_attachment`
  ADD PRIMARY KEY (`atcId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_attachment`
--
ALTER TABLE `tbl_attachment`
  MODIFY `atcId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;