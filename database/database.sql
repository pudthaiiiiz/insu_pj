-- phpMyAdmin SQL Dump
-- version 4.4.1.1
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jun 01, 2015 at 08:10 PM
-- Server version: 5.5.42
-- PHP Version: 5.6.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `insure_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_package_year`
--

CREATE TABLE `tbl_package_year` (
  `yId` int(11) NOT NULL,
  `yName` int(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_package_year`
--

INSERT INTO `tbl_package_year` (`yId`, `yName`) VALUES
(2, 2015);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_package_year`
--
ALTER TABLE `tbl_package_year`
  ADD PRIMARY KEY (`yId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_package_year`
--
ALTER TABLE `tbl_package_year`
  MODIFY `yId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;-- phpMyAdmin SQL Dump
-- version 4.4.1.1
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jun 01, 2015 at 08:10 PM
-- Server version: 5.5.42
-- PHP Version: 5.6.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `insure_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_package_year`
--

CREATE TABLE `tbl_package_year` (
  `yId` int(11) NOT NULL,
  `yName` int(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_package_year`
--

INSERT INTO `tbl_package_year` (`yId`, `yName`) VALUES
(2, 2015);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_package_year`
--
ALTER TABLE `tbl_package_year`
  ADD PRIMARY KEY (`yId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_package_year`
--
ALTER TABLE `tbl_package_year`
  MODIFY `yId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;