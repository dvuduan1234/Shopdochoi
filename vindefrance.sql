-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2018 at 04:26 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vindefrance`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `userid` int(50) NOT NULL,
  `user` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`userid`, `user`, `email`, `pass`) VALUES
(1, 'abc', '', '123'),
(2, 'abc', '', '123'),
(3, 'Bertrand Robbe', '', '123'),
(4, 'Admin', '', '1234'),
(5, 'abc', '', '123'),
(6, 'abc', '', '123');

-- --------------------------------------------------------

--
-- Table structure for table `catalogy`
--

CREATE TABLE `catalogy` (
  `Catid` int(50) NOT NULL,
  `Catname` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catalogy`
--

INSERT INTO `catalogy` (`Catid`, `Catname`) VALUES
(1, 'Bordeaux\'s Wine '),
(2, '       Bourgogne\'s Wine');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Productid` int(11) NOT NULL,
  `Catid` int(11) NOT NULL,
  `Productname` varchar(200) NOT NULL,
  `Price` varchar(200) NOT NULL,
  `Image` varchar(200) NOT NULL,
  `Description` varchar(2000) NOT NULL,
  `Discount` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Productid`, `Catid`, `Productname`, `Price`, `Image`, `Description`, `Discount`) VALUES
(1, 1, 'Bordeaux Coulot', '82', '\\tenten\\images\\11.jpg', 'Bordeaux wine is any wine produced in the Bordeaux region of southwest France. Bordeaux is centered on the city of Bordeaux, on the Garonne River. To the north of the city the Dordogne River joins the Garonne forming the broad estuary called the Gironde and covering the whole area of the Gironde department,with a total vineyard area of over 120,000 hectares,[1] making it the largest wine growing area in France. Average vintages produce over 700 million bottles of Bordeaux wine, ranging from large quantities of everyday table wine, to some of the most expensive and prestigious wines in the world. The vast majority of wine produced in Bordeaux is red (sometimes called claret in Britain), with sweet white wines (most notably Sauternes), dry whites, and (in much smaller quantities) rose and sparkling wines (Cremant de Bordeaux) collectively making up the remainder. Bordeaux wine is made by more than 8,500 producers or chateaux. There are 54 appellations of Bordeaux wine.', 12),
(2, 2, 'Meursault-Charmes', '44', '\\tenten\\images\\22.jpg', 'RA Bordeaux wine is any wine produced in the Bordeaux region of southwest France. Bordeaux is centered on the city of Bordeaux, on the Garonne River. To the north of the city the Dordogne River joins the Garonne forming the broad estuary called the Gironde and covering the whole area of the Gironde department,with a total vineyard area of over 120,000 hectares,[1] making it the largest wine growing area in France. Average vintages produce over 700 million bottles of Bordeaux wine, ranging from large quantities of everyday table wine, to some of the most expensive and prestigious wines in the world. The vast majority of wine produced in Bordeaux is red (sometimes called claret in Britain), with sweet white wines (most notably Sauternes), dry whites, and (in much smaller quantities) rose and sparkling wines (Cremant de Bordeaux) collectively making up the remainder. Bordeaux wine is made by more than 8,500 producers or chateaux. There are 54 appellations of Bordeaux wine.', 20),
(3, 1, 'Medium  Boxdeau', '25', '\\tenten\\images\\33.jpg', 'Bordeaux wine is any wine produced in the Bordeaux region of southwest France. Bordeaux is centered on the city of Bordeaux, on the Garonne River. To the north of the city the Dordogne River joins the Garonne forming the broad estuary called the Gironde and covering the whole area of the Gironde department,with a total vineyard area of over 120,000 hectares,[1] making it the largest wine growing area in France. Average vintages produce over 700 million bottles of Bordeaux wine, ranging from large quantities of everyday table wine, to some of the most expensive and prestigious wines in the world. The vast majority of wine produced in Bordeaux is red (sometimes called claret in Britain), with sweet white wines (most notably Sauternes), dry whites, and (in much smaller quantities) rose and sparkling wines (Cremant de Bordeaux) collectively making up the remainder. Bordeaux wine is made by more than 8,500 producers or chateaux. There are 54 appellations of Bordeaux wine.', 20),
(4, 1, 'Chateau Garreau', '80', '\\tenten\\images\\44.jpg', 'Bordeaux wine is any wine produced in the Bordeaux region of southwest France. Bordeaux is centered on the city of Bordeaux, on the Garonne River. To the north of the city the Dordogne River joins the Garonne forming the broad estuary called the Gironde and covering the whole area of the Gironde department,with a total vineyard area of over 120,000 hectares,[1] making it the largest wine growing area in France. Average vintages produce over 700 million bottles of Bordeaux wine, ranging from large quantities of everyday table wine, to some of the most expensive and prestigious wines in the world. The vast majority of wine produced in Bordeaux is red (sometimes called claret in Britain), with sweet white wines (most notably Sauternes), dry whites, and (in much smaller quantities) rose and sparkling wines (Cremant de Bordeaux) collectively making up the remainder. Bordeaux wine is made by more than 8,500 producers or chateaux. There are 54 appellations of Bordeaux wine.', 15),
(10, 2, 'Chablis Vieilles', '45', '\\tenten\\images\\88.jpg', 'Red wine is a type of wine made from dark-colored (black) grape varieties. The actual color of the wine can range from intense violet, typical of young wines, through to brick red for mature wines and brown for older red wines. The juice from most purple grapes is greenish-white, the red color coming from anthocyan pigments (also called anthocyanins) present in the skin of the grape; exceptions are the relatively uncommon teinturier varieties, which produce a red-colored juice. Much of the red-wine production process therefore involves extraction of color and flavor components from the grape skin.', 15),
(11, 2, 'Laurent-Perrier ', '98', '\\tenten\\images\\22.jpg', 'Red wine is a type of wine made from dark-colored (black) grape varieties. The actual color of the wine can range from intense violet, typical of young wines, through to brick red for mature wines and brown for older red wines. The juice from most purple grapes is greenish-white, the red color coming from anthocyan pigments (also called anthocyanins) present in the skin of the grape; exceptions are the relatively uncommon teinturier varieties, which produce a red-colored juice. Much of the red-wine production process therefore involves extraction of color and flavor components from the grape skin.', 30),
(12, 2, 'Veuve Clicquot Brut ', '55', '\\tenten\\images\\44.jpg', 'Red wine is a type of wine made from dark-colored (black) grape varieties. The actual color of the wine can range from intense violet, typical of young wines, through to brick red for mature wines and brown for older red wines. The juice from most purple grapes is greenish-white, the red color coming from anthocyan pigments (also called anthocyanins) present in the skin of the grape; exceptions are the relatively uncommon teinturier varieties, which produce a red-colored juice. Much of the red-wine production process therefore involves extraction of color and flavor components from the grape skin.', 12),
(13, 2, 'Meursault-Dijon', '45', '\\tenten\\images\\88.jpg', 'Red wine is a type of wine made from dark-colored (black) grape varieties. The actual color of the wine can range from intense violet, typical of young wines, through to brick red for mature wines and brown for older red wines. The juice from most purple grapes is greenish-white, the red color coming from anthocyan pigments (also called anthocyanins) present in the skin of the grape; exceptions are the relatively uncommon teinturier varieties, which produce a red-colored juice. Much of the red-wine production process therefore involves extraction of color and flavor components from the grape skin.', 15);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `catalogy`
--
ALTER TABLE `catalogy`
  ADD PRIMARY KEY (`Catid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Productid`),
  ADD KEY `Catid` (`Catid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `userid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `catalogy`
--
ALTER TABLE `catalogy`
  MODIFY `Catid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `Productid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `catalogy`
--
ALTER TABLE `catalogy`
  ADD CONSTRAINT `catalogy_ibfk_1` FOREIGN KEY (`Catid`) REFERENCES `product` (`Catid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
