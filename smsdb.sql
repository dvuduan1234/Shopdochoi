-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2018 at 06:24 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `catalogue`
--

CREATE TABLE `catalogue` (
  `cId` int(10) UNSIGNED NOT NULL,
  `cName` varchar(50) DEFAULT NULL,
  `cDescription` varchar(200) DEFAULT NULL,
  `lastModifiedBy` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catalogue`
--

INSERT INTO `catalogue` (`cId`, `cName`, `cDescription`, `lastModifiedBy`) VALUES
(1, 'MilkTea', '', 1),
(3, 'Macchiato', '', 1),
(4, 'Fresh Fruit Tea', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `iId` varchar(10) NOT NULL,
  `iName` varchar(50) DEFAULT NULL,
  `iDescription` varchar(300) DEFAULT NULL,
  `iPrice` int(10) UNSIGNED DEFAULT NULL,
  `iStatus` varchar(20) DEFAULT NULL,
  `iSize` varchar(20) DEFAULT NULL,
  `iImage` varchar(300) DEFAULT NULL,
  `catalogueId` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`iId`, `iName`, `iDescription`, `iPrice`, `iStatus`, `iSize`, `iImage`, `catalogueId`) VALUES
('1', 'Tr&agrave; Sá»¯a Ho&agrave;ng Gia', '&aacute;idiassdasdsa', 4000000555, 'New', 'M,L', '1.jpg', 1),
('10', 'Tr&agrave; Xanh Kem Ph&ocirc; Mai', '', 50000, 'New', 'M,L', '10.jpg', 3),
('11', 'XueShan11', '', 60000, 'New', 'M,L', '11.jpg', 1),
('12', 'XueShan15', '', 40000, 'B&aacute;n Cháº¡y', 'M,L', '12.jpg', 1),
('2', 'Tr&agrave; Sá»¯a Vá»‹ Nh&agrave;i', 'duan', 40000, 'New', 'M,L', '2.jpg', 1),
('3', 'Tr&agrave; Sá»¯a Panda', '', 40000, 'Hot', 'M,L', '3.jpg', 1),
('4', 'Tr&agrave; Sá»¯a Rau C&acirc;u', '', 45000, 'Hot', 'M,L', '4.jpg', 1),
('5', 'Tr&agrave; Xanh Xo&agrave;i', '', 40000, 'B&aacute;n Cháº¡y', 'M,L', '5.png', 4),
('6', 'Tr&agrave; Sakura Ng&acirc;n NhÄ©', '', 45000, 'Hot', 'M,L', '6.png', 3),
('8', 'Há»“ng Tr&agrave; Viá»‡t Quáº¥t', '', 45000, 'New', 'M,L', '8.jpg', 3),
('9', 'Há»“ng Tr&agrave; Kem Ph&ocirc; Mai', '', 50000, 'B&aacute;n Cháº¡y', 'M,L', '9.jpg', 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uId` int(10) UNSIGNED NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `status` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uId`, `username`, `password`, `status`) VALUES
(1, 'admin', '026c4451e62e6e9bb0aa6e8b30da2ae5', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catalogue`
--
ALTER TABLE `catalogue`
  ADD PRIMARY KEY (`cId`),
  ADD KEY `lastModifiedBy` (`lastModifiedBy`),
  ADD KEY `cName` (`cName`(7));

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`iId`),
  ADD KEY `iName` (`iName`(10)),
  ADD KEY `catalogueId` (`catalogueId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uId`),
  ADD KEY `username` (`username`(10));

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catalogue`
--
ALTER TABLE `catalogue`
  MODIFY `cId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `catalogue`
--
ALTER TABLE `catalogue`
  ADD CONSTRAINT `catalogue_ibfk_1` FOREIGN KEY (`lastModifiedBy`) REFERENCES `user` (`uId`);

--
-- Constraints for table `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `item_ibfk_1` FOREIGN KEY (`catalogueId`) REFERENCES `catalogue` (`cId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
