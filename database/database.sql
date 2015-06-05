-- phpMyAdmin SQL Dump
-- version 4.4.1.1
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jun 06, 2015 at 05:36 AM
-- Server version: 5.5.42
-- PHP Version: 5.6.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `insure_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_package_main`
--

CREATE TABLE `tbl_package_main` (
  `mId` int(11) NOT NULL,
  `mDetail` text NOT NULL,
  `mYear` int(11) NOT NULL,
  `mBrand` int(11) NOT NULL,
  `mSeries` int(11) NOT NULL,
  `mLevel` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_package_main`
--

INSERT INTO `tbl_package_main` (`mId`, `mDetail`, `mYear`, `mBrand`, `mSeries`, `mLevel`) VALUES
(1, '2.0i 4doors EL Sports Auto 5speed', 2014, 31, 1, 0),
(2, '2.0i 4doors EL Sports Auto 5speed (Navigation System)', 2014, 31, 1, 0),
(3, '2.0i 4doors Hybrid i-VTEC Auto', 2014, 31, 1, 0),
(4, '2.0i 4doors Hybrid TECH i-VTEC Auto', 2014, 31, 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_package_main`
--
ALTER TABLE `tbl_package_main`
  ADD PRIMARY KEY (`mId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_package_main`
--
ALTER TABLE `tbl_package_main`
  MODIFY `mId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;