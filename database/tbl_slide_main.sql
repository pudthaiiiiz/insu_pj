-- phpMyAdmin SQL Dump
-- version 4.4.1.1
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jun 22, 2015 at 02:02 AM
-- Server version: 5.5.42
-- PHP Version: 5.6.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  MODIFY `slId` int(11) NOT NULL AUTO_INCREMENT;