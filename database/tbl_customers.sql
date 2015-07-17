-- phpMyAdmin SQL Dump
-- version 4.4.1.1
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jul 18, 2015 at 01:25 AM
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
  `cusInvite` varchar(100) DEFAULT NULL,
  `cusAdrs` text NOT NULL,
  `cusProvince` varchar(100) NOT NULL,
  `cusAmphur` varchar(100) NOT NULL,
  `cusDistrict` varchar(100) NOT NULL,
  `cusZipcode` varchar(20) NOT NULL,
  `cusPhone` varchar(10) NOT NULL,
  `cusEmail` varchar(80) NOT NULL,
  `cusUsername` varchar(16) NOT NULL,
  `cusPassword` varchar(150) NOT NULL,
  `cusToken` text NOT NULL,
  `cusIdCard` varchar(13) NOT NULL,
  `cusLevel` int(11) NOT NULL,
  `oldCompany` varchar(100) NOT NULL,
  `oldInsurance` varchar(100) NOT NULL,
  `oldRegister` varchar(100) NOT NULL,
  `cusCreateAt` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_customers`
--

INSERT INTO `tbl_customers` (`cusId`, `cusFullname`, `cusInvite`, `cusAdrs`, `cusProvince`, `cusAmphur`, `cusDistrict`, `cusZipcode`, `cusPhone`, `cusEmail`, `cusUsername`, `cusPassword`, `cusToken`, `cusIdCard`, `cusLevel`, `oldCompany`, `oldInsurance`, `oldRegister`, `cusCreateAt`) VALUES
(1, 'พิเชษฐ์ ขุนใจ', NULL, '123', '', '', '', '', '0959356049', 'pudthai@coolradio.in.th', 'pudthai', 'a346bc80408d9b2a5063fd1bddb20e2d5586ec30', '34856905a305ec510aadb211cab19cb155a7d8553a0db7.05992641', '2147483647', 1, 'วิริยะ', 'MERCEDES-BENZ', '0', '2015-07-16 23:14:13'),
(2, 'สมสี นามเท่ห์', 'พิเชษฐ์ ขุนใจ', '444', '', '', '', '', '9123123123', 'asad@sadas.asd', 'xxxxx', '51bc13d4c2a6f2d77bc1b28c66725321e4ce151d', '7612dbdf0e0ac714a79c299d3d00accb55a80262bdc958.35044574', '2147483647', 1, 'วิริยะ', 'AMC', '1', '2015-07-17 02:13:38');

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
  MODIFY `cusId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;