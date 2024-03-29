-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2019 at 04:09 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mitrais`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_test`
--

CREATE TABLE IF NOT EXISTS `user_test` (
`UserId` int(11) NOT NULL,
  `MobileNumber` varchar(15) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `MonthBirth` varchar(2) NOT NULL,
  `DateBirth` varchar(2) NOT NULL,
  `YearBirth` varchar(4) NOT NULL,
  `Gender` enum('Male','Female') NOT NULL,
  `Email` varchar(150) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_test`
--

INSERT INTO `user_test` (`UserId`, `MobileNumber`, `FirstName`, `LastName`, `MonthBirth`, `DateBirth`, `YearBirth`, `Gender`, `Email`) VALUES
(11, '+6281290301094', 'Danar', 'Seno', '3', '27', '1988', 'Male', 'danarwidoseno@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_test`
--
ALTER TABLE `user_test`
 ADD PRIMARY KEY (`UserId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_test`
--
ALTER TABLE `user_test`
MODIFY `UserId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
