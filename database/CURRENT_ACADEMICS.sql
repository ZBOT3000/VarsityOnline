-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 19, 2019 at 12:32 PM
-- Server version: 5.5.38-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `d1434995`
--

-- --------------------------------------------------------

--
-- Table structure for table `CURRENT_ACADEMICS`
--

CREATE TABLE IF NOT EXISTS `CURRENT_ACADEMICS` (
  `USER_ID` int(11) NOT NULL,
  `SCHOOL_NAME` varchar(50) NOT NULL,
  `CURRENT_GRADE` int(2) NOT NULL,
  `HOME_LAN` varchar(20) NOT NULL,
  `HOME_LAN_MARK` int(3) NOT NULL,
  `FA_LAN` varchar(20) NOT NULL,
  `FA_LAN_MARK` int(3) NOT NULL,
  `MATH_SUBJ` varchar(20) NOT NULL,
  `MATH_SUBJ_MARK` int(3) NOT NULL,
  `SUBJ1` varchar(20) NOT NULL,
  `SUBJ1_MARK` int(3) NOT NULL,
  `SUBJ2` varchar(20) NOT NULL,
  `SUBJ2_MARK` int(3) NOT NULL,
  `SUBJ3` varchar(20) NOT NULL,
  `SUBJ3_MARK` int(3) NOT NULL,
  `LO_MARK` int(3) NOT NULL,
  KEY `USER_ID` (`USER_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `CURRENT_ACADEMICS`
--
ALTER TABLE `CURRENT_ACADEMICS`
  ADD CONSTRAINT `CURRENT_ACADEMICS_ibfk_1` FOREIGN KEY (`USER_ID`) REFERENCES `USERS` (`USER_ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
