-- phpMyAdmin SQL Dump
-- version 4.4.1.1
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jul 16, 2015 at 11:00 PM
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
  `cusInvite` varchar(100) NOT NULL,
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
  `cusCreateAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  MODIFY `cusId` int(11) NOT NULL AUTO_INCREMENT;