-- phpMyAdmin SQL Dump
-- version 4.4.1.1
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jun 13, 2015 at 04:37 AM
-- Server version: 5.5.42
-- PHP Version: 5.6.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `insure_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_administrator`
--

CREATE TABLE `tbl_administrator` (
  `admin_id` int(11) NOT NULL,
  `admin_username` varchar(16) NOT NULL,
  `admin_password` varchar(16) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_administrator`
--

INSERT INTO `tbl_administrator` (`admin_id`, `admin_username`, `admin_password`) VALUES
(1, 'admin', 'admin');

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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_contents`
--

INSERT INTO `tbl_contents` (`cId`, `cTitle`, `cDes`, `cDetail`, `cImage`, `cCreateAt`) VALUES
(1, 'Title Insurance broker 360', '<p>Dec</p>\r\n', '<p>Detail</p>\r\n', '1434142743.jpg', '2015-06-13 03:59:03'),
(2, 'Title Insurance broker 360', '<p>Dec</p>\r\n', '<p>Detail</p>\r\n', '1434142858.jpg', '2015-06-13 04:00:58'),
(3, 'Title Insurance broker 360', '<p>Dec</p>\r\n', '<p>Detail</p>\r\n', '1434142893.jpg', '2015-06-13 04:01:33'),
(4, 'xxxxx', '<p>xxxxx</p>\r\n', '<p>xxxxx</p>\r\n', '1434142949.jpg', '2015-06-13 04:02:29'),
(5, 'ssss', '<p>ssss</p>\r\n', '<p>ssss</p>\r\n', '1434143012.jpg', '2015-06-13 04:03:32'),
(6, 'ssss', '<p>ssss</p>\r\n', '<p>ssss</p>\r\n', '1434143124.jpg', '2015-06-13 04:05:24'),
(7, 'ssss', '<p>ssss</p>\r\n', '<p>ssss</p>\r\n', '1434143198.jpg', '2015-06-13 04:06:38'),
(8, 'ssss', '<p>ssss</p>\r\n', '<p>ssss</p>\r\n', '1434143337.jpg', '2015-06-13 04:08:57'),
(9, 'ssss', '<p>ssss</p>\r\n', '<p>ssss</p>\r\n', '1434143351.jpg', '2015-06-13 04:09:11'),
(10, 'ssss', '<p>ssss</p>\r\n', '<p>ssss</p>\r\n', '1434143467.jpg', '2015-06-13 04:11:07'),
(11, 'xxxx', '<p>xxxx</p>\r\n', '<p>xxxx</p>\r\n', '1434143629.jpg', '2015-06-13 04:13:49');

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
  `cusIdCard` int(13) NOT NULL,
  `cusLevel` int(11) NOT NULL,
  `cusCreateAt` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_customers`
--

INSERT INTO `tbl_customers` (`cusId`, `cusFullname`, `cusAdrs`, `cusPhone`, `cusEmail`, `cusUsername`, `cusPassword`, `cusToken`, `cusIdCard`, `cusLevel`, `cusCreateAt`) VALUES
(2, 'pudthai pichet', '123/zzzz', '0959356049', 'pudthaiiii@gmail.com', 'pudthai', '55c3b5386c486feb662a0785f340938f518d547f', '4da210603ad12e519341ceeb96f6de28556b4a97280240.26549340', 0, 0, '2015-06-01 00:53:27'),
(3, 'pichet Kunjai', '123434', '0959356049', 'pudthaiiii@gmail.com', 'pudthaiiii', '10470c3b4b1fed12c3baac014be15fac67c6e815', '8138ef59051cd99c7681e9275dbd2d26556b56c4ea9732.81761580', 0, 0, '2015-06-13 01:45:24');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_invoice`
--

CREATE TABLE `tbl_invoice` (
  `inId` int(11) NOT NULL,
  `inInsurance` int(11) NOT NULL,
  `inCustomers` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_package_brand`
--

CREATE TABLE `tbl_package_brand` (
  `bId` int(11) NOT NULL,
  `bName` varchar(200) NOT NULL,
  `bYear` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=90 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_package_brand`
--

INSERT INTO `tbl_package_brand` (`bId`, `bName`, `bYear`) VALUES
(1, 'ALFA ROMEO', 0),
(2, 'AMC', 0),
(3, 'ASTON MARTIN', 0),
(4, 'ATTHAM', 0),
(5, 'AUDI', 0),
(6, 'AUSTIN', 0),
(7, 'BENTLEY', 0),
(8, 'BMW', 0),
(9, 'BUFORI', 0),
(10, 'BUICK', 0),
(11, 'CADILLAC', 0),
(12, 'CHERY', 0),
(13, 'CHEVROLET', 0),
(14, 'CHRYSLER', 0),
(15, 'CITROEN', 0),
(16, 'DAEWOO', 0),
(17, 'DAIHATSU', 0),
(18, 'DELOREAN', 0),
(19, 'DEVA', 0),
(20, 'DFM', 0),
(21, 'DODGE', 0),
(22, 'FERRARI', 0),
(23, 'FIAT', 0),
(24, 'FORD', 0),
(25, 'FOTON', 0),
(26, 'GATSBY', 0),
(27, 'GMC', 0),
(28, 'HILLMAN', 0),
(29, 'HINO', 0),
(30, 'HOLDEN', 0),
(31, 'HONDA', 0),
(32, 'HUMMER', 0),
(33, 'HYUNDAI', 0),
(34, 'INFINITI', 0),
(35, 'ISUZU', 0),
(36, 'JAGUAR', 0),
(37, 'JEEP', 0),
(38, 'JINBEI', 0),
(39, 'JOYLONG', 0),
(40, 'JRD', 0),
(41, 'KIA', 0),
(42, 'LADA', 0),
(43, 'LAMBORGHINI', 0),
(44, 'LANCIA', 0),
(45, 'LAND ROVER', 0),
(46, 'LEXUS', 0),
(47, 'LINCOLN', 0),
(48, 'LOTUS', 0),
(49, 'MASERATI', 0),
(50, 'MAYBACH', 0),
(51, 'MAZDA', 0),
(52, 'MCLAREN', 0),
(53, 'MERCEDES-BENZ', 0),
(54, 'MG', 0),
(55, 'MINI', 0),
(56, 'MITSUBISHI', 0),
(57, 'MITSUOKA', 0),
(58, 'NAZA', 0),
(59, 'NISSAN', 0),
(60, 'NSU', 0),
(61, 'OLDSMOBILE', 0),
(62, 'OPEL', 0),
(63, 'PERODUA', 0),
(64, 'PEUGEOT', 0),
(65, 'PLYMOUTH', 0),
(66, 'PONTIAC', 0),
(67, 'PORSCHE', 0),
(68, 'PROTON', 0),
(69, 'RENAULT', 0),
(70, 'ROLLS-ROYCE', 0),
(71, 'ROVER', 0),
(72, 'RUF', 0),
(73, 'SAAB', 0),
(74, 'SEAT', 0),
(75, 'SHINERAY', 0),
(76, 'SKODA', 0),
(77, 'SMART', 0),
(78, 'SOKON', 0),
(79, 'SSANGYONG', 0),
(80, 'SUBARU', 0),
(81, 'SUZUKI', 0),
(82, 'TATA', 0),
(83, 'TESLA', 0),
(84, 'TOYOTA', 0),
(85, 'TRIUMPH', 0),
(86, 'VOLKSWAGEN', 0),
(87, 'VOLVO', 0),
(88, 'WIESMANN', 0),
(89, 'WULING', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_package_level`
--

CREATE TABLE `tbl_package_level` (
  `lvId` int(11) NOT NULL,
  `lvType` varchar(11) NOT NULL,
  `lvPrice` int(11) NOT NULL,
  `lvLimit` int(11) NOT NULL,
  `lvGroup` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_package_level`
--

INSERT INTO `tbl_package_level` (`lvId`, `lvType`, `lvPrice`, `lvLimit`, `lvGroup`) VALUES
(1, '1', 11000, 10, 1),
(2, '2', 7600, 15, 1),
(3, '3', 5800, 20, 1);

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

-- --------------------------------------------------------

--
-- Table structure for table `tbl_package_series`
--

CREATE TABLE `tbl_package_series` (
  `sId` int(11) NOT NULL,
  `sName` varchar(200) NOT NULL,
  `sYear` varchar(100) NOT NULL,
  `sBrand` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_package_series`
--

INSERT INTO `tbl_package_series` (`sId`, `sName`, `sYear`, `sBrand`) VALUES
(1, 'Accord', '2014,2013', 31),
(2, 'Brio', '2014,2013', 31),
(3, 'City', '2014,2013', 31),
(4, 'Civic', '2014,2013', 31),
(5, 'CR-V', '2014,2013', 31),
(6, 'CR-Z', '2014,2013', 31),
(7, 'Freed', '2014,2013', 31),
(8, 'HRV', '2014', 31),
(9, 'Jazz', '2014,2013', 31),
(10, 'Mobilio', '2014', 31),
(11, 'Odyssey', '2014,2013', 31),
(15, 'STEPWGN SPADA', '2013', 31);

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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_package_year`
--

INSERT INTO `tbl_package_year` (`yId`, `yName`) VALUES
(1, 2015),
(2, 2014),
(3, 2013),
(4, 2012),
(5, 2011),
(6, 2010),
(7, 2009),
(8, 2008),
(9, 2007),
(10, 2006);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_administrator`
--
ALTER TABLE `tbl_administrator`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_contents`
--
ALTER TABLE `tbl_contents`
  ADD PRIMARY KEY (`cId`);

--
-- Indexes for table `tbl_customers`
--
ALTER TABLE `tbl_customers`
  ADD PRIMARY KEY (`cusId`);

--
-- Indexes for table `tbl_invoice`
--
ALTER TABLE `tbl_invoice`
  ADD PRIMARY KEY (`inId`);

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
-- Indexes for table `tbl_package_main`
--
ALTER TABLE `tbl_package_main`
  ADD PRIMARY KEY (`mId`);

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
-- AUTO_INCREMENT for table `tbl_administrator`
--
ALTER TABLE `tbl_administrator`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_contents`
--
ALTER TABLE `tbl_contents`
  MODIFY `cId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tbl_customers`
--
ALTER TABLE `tbl_customers`
  MODIFY `cusId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_invoice`
--
ALTER TABLE `tbl_invoice`
  MODIFY `inId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_package_brand`
--
ALTER TABLE `tbl_package_brand`
  MODIFY `bId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=90;
--
-- AUTO_INCREMENT for table `tbl_package_level`
--
ALTER TABLE `tbl_package_level`
  MODIFY `lvId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_package_main`
--
ALTER TABLE `tbl_package_main`
  MODIFY `mId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_package_series`
--
ALTER TABLE `tbl_package_series`
  MODIFY `sId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tbl_package_type`
--
ALTER TABLE `tbl_package_type`
  MODIFY `tId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_package_year`
--
ALTER TABLE `tbl_package_year`
  MODIFY `yId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;