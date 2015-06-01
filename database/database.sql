-- phpMyAdmin SQL Dump
-- version 4.4.1.1
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jun 01, 2015 at 08:23 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `tbl_package_brand`
--

CREATE TABLE `tbl_package_brand` (
  `bId` int(11) NOT NULL,
  `bName` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_package_level`
--

CREATE TABLE `tbl_package_level` (
  `lvId` int(11) NOT NULL,
  `lvType` int(11) NOT NULL,
  `lvPrice` int(11) NOT NULL,
  `lvGroup` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_package_series`
--

CREATE TABLE `tbl_package_series` (
  `sId` int(11) NOT NULL,
  `sName` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_package_type`
--

CREATE TABLE `tbl_package_type` (
  `tId` int(11) NOT NULL,
  `tName` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
-- Indexes for table `tbl_customers`
--
ALTER TABLE `tbl_customers`
  ADD PRIMARY KEY (`cusId`);

--
-- Indexes for table `tbl_package_brand`
--
ALTER TABLE `tbl_package_brand`
  ADD PRIMARY KEY (`bId`);

--
-- Indexes for table `tbl_package_level`
--
ALTER TABLE `tbl_package_level`
  ADD PRIMARY KEY (`lvId`);

--
-- Indexes for table `tbl_package_series`
--
ALTER TABLE `tbl_package_series`
  ADD PRIMARY KEY (`sId`);

--
-- Indexes for table `tbl_package_type`
--
ALTER TABLE `tbl_package_type`
  ADD PRIMARY KEY (`tId`);

--
-- Indexes for table `tbl_package_year`
--
ALTER TABLE `tbl_package_year`
  ADD PRIMARY KEY (`yId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_customers`
--
ALTER TABLE `tbl_customers`
  MODIFY `cusId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_package_brand`
--
ALTER TABLE `tbl_package_brand`
  MODIFY `bId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_package_level`
--
ALTER TABLE `tbl_package_level`
  MODIFY `lvId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_package_series`
--
ALTER TABLE `tbl_package_series`
  MODIFY `sId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_package_type`
--
ALTER TABLE `tbl_package_type`
  MODIFY `tId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_package_year`
--
ALTER TABLE `tbl_package_year`
  MODIFY `yId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;-- phpMyAdmin SQL Dump
-- version 4.4.1.1
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jun 01, 2015 at 08:23 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `tbl_package_brand`
--

CREATE TABLE `tbl_package_brand` (
  `bId` int(11) NOT NULL,
  `bName` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_package_level`
--

CREATE TABLE `tbl_package_level` (
  `lvId` int(11) NOT NULL,
  `lvType` int(11) NOT NULL,
  `lvPrice` int(11) NOT NULL,
  `lvGroup` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_package_series`
--

CREATE TABLE `tbl_package_series` (
  `sId` int(11) NOT NULL,
  `sName` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_package_type`
--

CREATE TABLE `tbl_package_type` (
  `tId` int(11) NOT NULL,
  `tName` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
-- Indexes for table `tbl_customers`
--
ALTER TABLE `tbl_customers`
  ADD PRIMARY KEY (`cusId`);

--
-- Indexes for table `tbl_package_brand`
--
ALTER TABLE `tbl_package_brand`
  ADD PRIMARY KEY (`bId`);

--
-- Indexes for table `tbl_package_level`
--
ALTER TABLE `tbl_package_level`
  ADD PRIMARY KEY (`lvId`);

--
-- Indexes for table `tbl_package_series`
--
ALTER TABLE `tbl_package_series`
  ADD PRIMARY KEY (`sId`);

--
-- Indexes for table `tbl_package_type`
--
ALTER TABLE `tbl_package_type`
  ADD PRIMARY KEY (`tId`);

--
-- Indexes for table `tbl_package_year`
--
ALTER TABLE `tbl_package_year`
  ADD PRIMARY KEY (`yId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_customers`
--
ALTER TABLE `tbl_customers`
  MODIFY `cusId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_package_brand`
--
ALTER TABLE `tbl_package_brand`
  MODIFY `bId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_package_level`
--
ALTER TABLE `tbl_package_level`
  MODIFY `lvId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_package_series`
--
ALTER TABLE `tbl_package_series`
  MODIFY `sId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_package_type`
--
ALTER TABLE `tbl_package_type`
  MODIFY `tId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_package_year`
--
ALTER TABLE `tbl_package_year`
  MODIFY `yId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;