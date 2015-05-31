-- phpMyAdmin SQL Dump
-- version 4.4.1.1
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jun 01, 2015 at 03:42 AM
-- Server version: 5.5.42
-- PHP Version: 5.6.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `insure_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customers`
--

CREATE TABLE `tbl_customers` (
  `cusId` int(11) NOT NULL,
  `cusFullname` varchar(80) NOT NULL,
  `cusAdrs` text NOT NULL,
  `cusPhone` varchar(10) NOT NULL,
  `cusEmail` varchar(80) NOT NULL,
  `cusUsername` varchar(16) NOT NULL,
  `cusPassword` varchar(150) NOT NULL,
  `cusToken` text NOT NULL,
  `cusCreateAt` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_customers`
--

INSERT INTO `tbl_customers` (`cusId`, `cusFullname`, `cusAdrs`, `cusPhone`, `cusEmail`, `cusUsername`, `cusPassword`, `cusToken`, `cusCreateAt`) VALUES
(1, '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(2, 'pudthai pichet', '123/zzzz', '0959356049', 'pudthaiiii@gmail.com', 'pudthai', '55c3b5386c486feb662a0785f340938f518d547f', '4da210603ad12e519341ceeb96f6de28556b4a97280240.26549340', '2015-06-01 00:53:27'),
(3, 'pichet Kunjai', '123434', '0959356049', 'pudthaiiii@gmail.com', 'pudthaiiii', '10470c3b4b1fed12c3baac014be15fac67c6e815', '8138ef59051cd99c7681e9275dbd2d26556b56c4ea9732.81761580', '2015-06-01 01:45:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_customers`
--
ALTER TABLE `tbl_customers`
  ADD PRIMARY KEY (`cusId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_customers`
--
ALTER TABLE `tbl_customers`
  MODIFY `cusId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;