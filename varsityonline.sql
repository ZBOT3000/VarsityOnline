-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 10, 2019 at 03:53 PM
-- Server version: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `varsityonline`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
CREATE TABLE IF NOT EXISTS `courses` (
  `CID` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(30) NOT NULL,
  `courses` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'pending',
  PRIMARY KEY (`CID`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`CID`, `user_id`, `courses`, `status`) VALUES
(28, '13', 'ComputerScience', 'pending'),
(29, '13', 'MathematicsOfFinance', 'pending'),
(30, '13', 'ComputerScience', 'pending'),
(31, '36', 'Mathematics of Finance', 'pending'),
(32, '36', 'Computer Science', 'accepted'),
(33, '36', 'Mathematics', 'rejected');

-- --------------------------------------------------------

--
-- Table structure for table `current_academics`
--

DROP TABLE IF EXISTS `current_academics`;
CREATE TABLE IF NOT EXISTS `current_academics` (
  `CA_ID` int(10) NOT NULL AUTO_INCREMENT,
  `USER_ID` int(11) NOT NULL,
  `SCHOOL_NAME` varchar(50) DEFAULT NULL,
  `CURRENT_GRADE` varchar(4) DEFAULT NULL,
  `HOME_LAN` varchar(20) DEFAULT NULL,
  `HOME_LAN_MARK` varchar(4) DEFAULT NULL,
  `FA_LAN` varchar(20) DEFAULT NULL,
  `FA_LAN_MARK` varchar(4) DEFAULT NULL,
  `MATH_SUBJ` varchar(20) DEFAULT NULL,
  `MATH_SUBJ_MARK` varchar(4) DEFAULT NULL,
  `SUBJ1` varchar(20) DEFAULT NULL,
  `SUBJ1_MARK` varchar(4) DEFAULT NULL,
  `SUBJ2` varchar(20) DEFAULT NULL,
  `SUBJ2_MARK` varchar(4) DEFAULT NULL,
  `SUBJ3` varchar(20) DEFAULT NULL,
  `SUBJ3_MARK` varchar(4) DEFAULT NULL,
  `LO_MARK` varchar(4) DEFAULT NULL,
  `STATUS` varchar(10) DEFAULT 'Completed',
  PRIMARY KEY (`CA_ID`),
  UNIQUE KEY `USER_ID_2` (`USER_ID`),
  UNIQUE KEY `USER_ID` (`USER_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `current_academics`
--

INSERT INTO `current_academics` (`CA_ID`, `USER_ID`, `SCHOOL_NAME`, `CURRENT_GRADE`, `HOME_LAN`, `HOME_LAN_MARK`, `FA_LAN`, `FA_LAN_MARK`, `MATH_SUBJ`, `MATH_SUBJ_MARK`, `SUBJ1`, `SUBJ1_MARK`, `SUBJ2`, `SUBJ2_MARK`, `SUBJ3`, `SUBJ3_MARK`, `LO_MARK`, `STATUS`) VALUES
(57, 35, 'St Benedicts', '12', 'English', '60', 'Afrikaans', '75', 'Mathematics', '81', 'Physical Science', '87', 'Life Sciences', '83', 'Geography', '89', '80', 'Completed'),
(58, 36, 'St Benedicts', '12', 'English', '72', 'Afrikaans', '71', 'Mathematics', '97', 'Information Technolo', '86', 'Business Studies', '89', 'Physical Science', '88', '90', 'Completed'),
(60, 37, 'St Johns', '11', 'Zulu', '97', 'Afrikaans', '85', 'Mathematics', '100', 'Physical Science', '97', 'Design', '97', 'Dance Studies', '97', '97', 'Completed'),
(62, 38, 'St Johns', '12', 'English', '68', 'Afrikaans', '59', 'Mathematics', '71', 'Civil Technology', '86', 'Geography', '75', 'History', '63', '70', 'Completed'),
(68, 43, 'St Johns', '12', 'English', '80', 'Afrikaans', '78', 'Mathematics', '57', 'Hospitality', '63', 'Dramatic Arts', '92', 'Physical Science', '85', '95', 'Completed'),
(70, 13, 'St Benedicts', '12', 'English', '78', 'English', '98', 'Mathematics', '76', 'Consumer Studies', '87', 'Design', '97', 'Dramatic Arts', '65', '98', 'Completed');

-- --------------------------------------------------------

--
-- Table structure for table `demographics`
--

DROP TABLE IF EXISTS `demographics`;
CREATE TABLE IF NOT EXISTS `demographics` (
  `DEMO_ID` int(10) NOT NULL AUTO_INCREMENT,
  `USER_ID` int(10) NOT NULL,
  `ID_NUMBER` varchar(30) DEFAULT NULL,
  `CELLPHONE` varchar(30) DEFAULT NULL,
  `GENDER` varchar(10) DEFAULT NULL,
  `DOB` varchar(59) DEFAULT NULL,
  `CITIZEN` varchar(5) DEFAULT NULL,
  `RACE` varchar(30) DEFAULT NULL,
  `STATUS` varchar(10) NOT NULL DEFAULT 'Completed',
  PRIMARY KEY (`DEMO_ID`),
  UNIQUE KEY `USER_ID` (`USER_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `demographics`
--

INSERT INTO `demographics` (`DEMO_ID`, `USER_ID`, `ID_NUMBER`, `CELLPHONE`, `GENDER`, `DOB`, `CITIZEN`, `RACE`, `STATUS`) VALUES
(10, 38, '97075715084', '609940465', 'Male', '1997-06-01', 'Yes', 'Black', 'Completed'),
(9, 36, '97075715084', '0609940465', 'Male', '1997-07-04', 'Yes', 'Black', 'Completed'),
(13, 0, '', '', '', '', '', '', 'Completed'),
(12, 43, '9854786231256', '074852963', 'Male', '1998-05-05', 'Yes', 'White', 'Completed');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

DROP TABLE IF EXISTS `faculty`;
CREATE TABLE IF NOT EXISTS `faculty` (
  `USER_ID` int(50) NOT NULL,
  `FACUL_ID` int(50) NOT NULL,
  `FACUL_NAME` varchar(100) NOT NULL,
  PRIMARY KEY (`USER_ID`,`FACUL_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `parentaldetails`
--

DROP TABLE IF EXISTS `parentaldetails`;
CREATE TABLE IF NOT EXISTS `parentaldetails` (
  `PG_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Guardian` text,
  `Gname` text,
  `Gsurname` text,
  `Address` text,
  `Address2` text,
  `City` text,
  `State` text,
  `Zip` int(11) DEFAULT NULL,
  `User_ID` int(11) NOT NULL,
  `STATUS` varchar(20) NOT NULL DEFAULT 'Completed',
  PRIMARY KEY (`PG_ID`),
  UNIQUE KEY `PG_ID` (`PG_ID`),
  UNIQUE KEY `User_ID` (`User_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parentaldetails`
--

INSERT INTO `parentaldetails` (`PG_ID`, `Guardian`, `Gname`, `Gsurname`, `Address`, `Address2`, `City`, `State`, `Zip`, `User_ID`, `STATUS`) VALUES
(3, 'Step Father', 'Lungile', 'Mngomezulu', '29 Pongola street Brackendowns', '', 'Alberton', 'Gauteng', 1448, 29, 'Completed'),
(5, 'Father', 'dgfdsg', 'fdghg', 'fdsgdsf', '', 'sadgfds', 'Northen Cape', 1213, 31, 'Completed'),
(8, 'Mother', 'Lungile Mngomezulu', 'Mngomezulu', '29 Pongola street Brackendowns', '', 'Alberton', 'Gauteng', 1448, 13, 'Completed'),
(7, 'Father', 'Lungile Mngomezulu', 'Mngomezulu', '29 Pongola street Brackendowns', '', 'Alberton', 'Gauteng', 1448, 33, 'Completed'),
(9, 'Mother', 'Thabo Nkabinde', 'Nkabinde', '80 Jorissen Street', '', 'Johhanesburg', 'Gauteng', 2001, 36, 'Completed'),
(10, '', '', '', '', '', '', '', 0, 0, 'Completed'),
(11, 'Step Mother', 'cindy', 'dandy', '80 Jorissen Street', '501', 'Johhanesburg', 'Gauteng', 2001, 43, 'Completed');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE IF NOT EXISTS `register` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(40) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `name` varchar(40) DEFAULT NULL,
  `surname` varchar(40) DEFAULT NULL,
  `token` varchar(10) DEFAULT NULL,
  `tokenexpire` datetime DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`user_id`, `email`, `username`, `password`, `name`, `surname`, `token`, `tokenexpire`) VALUES
(13, 'test@gmail', '13Test', 'test', 'Test', 'test', NULL, NULL),
(29, 'joy@gmail.com', '29joy', '123', 'joy', 'joy', NULL, NULL),
(30, 'Lungilemngo@gmail.com', '30lungile', '123456789', 'lungile', 'mngomezulu', NULL, NULL),
(31, '577677@students.wits.ac.za', '31Kellen', 'Cay363len', 'Kellen', 'Mashia', NULL, NULL),
(32, 'bophelomohlala@gmail.com', '32Bophelo', '12345678', 'Bophelo', 'Mohlala', NULL, NULL),
(33, 'ag@gmail.com', '33Ag', '12345', 'Ag', 'Mngomezulu', NULL, NULL),
(34, 'khanyi@gmail.com', '34khanyi', '12345', 'khanyi', 'khanyi', NULL, NULL),
(35, 'ks@gmail.com', '35Khanyi', 'ks123', 'Khanyi', 'Sixhaxa', NULL, NULL),
(36, '1316769@students.wits.ac.za', '36Joy', '123456789', 'Joy', 'Nkabinde', NULL, NULL),
(37, 'mngomezuluntuthuko@gmail.com', '37hd', 'tttt', 'hd', 's', NULL, NULL),
(38, 'jgnkabinde@gmail.com', '38fun', '112233', 'fun', 'Nkabinde', NULL, NULL),
(43, '131679@students.wits.ac.za', '43Fred', '123456', 'Fred', 'Dapper', NULL, NULL),
(45, 'filesystem@dispostable.com', '45filesystem', 'filesystem', 'filesystem', 'filesystem', NULL, NULL),
(46, 'thab@gmail.com', '46Thab', '1', 'Thab', 'thab', NULL, NULL),
(47, 'mj@gmail.com', '47mj', '123', 'mj', 'mj', NULL, NULL),
(48, 'bafana@gmail.com', '48bafana', '123', 'bafana', 'bafana', NULL, NULL),
(49, 'allanseb15@gmail.com', '49Allan', '123', 'Allan', 'Sebothoma', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `schooldetails`
--

DROP TABLE IF EXISTS `schooldetails`;
CREATE TABLE IF NOT EXISTS `schooldetails` (
  `SD_ID` int(10) NOT NULL AUTO_INCREMENT,
  `FACULTY` varchar(50) DEFAULT NULL,
  `OPT1` text,
  `OPT2` text,
  `OPT3` text,
  `USER_ID` int(10) NOT NULL,
  PRIMARY KEY (`SD_ID`),
  UNIQUE KEY `USER_ID` (`USER_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schooldetails`
--

INSERT INTO `schooldetails` (`SD_ID`, `FACULTY`, `OPT1`, `OPT2`, `OPT3`, `USER_ID`) VALUES
(19, 'SCIENCE', 'ActuarialScience', 'ComputationalAndAppliedMathematics', 'ComputerScience', 36),
(20, 'SCIENCE', ' Chemistry', 'Physics', 'ComputationalAndAppliedMathematics', 38),
(21, 'SCIENCE', ' Chemistry', 'ComputerScience', 'MathematicsOfFinance', 13),
(22, 'SCIENCE', ' Chemistry', 'Physics', 'ComputationalAndAppliedMathematics', 43),
(25, 'SCIENCE', 'ComputationalAndAppliedMathematics', ' Chemistry', 'Mathematics', 0);

-- --------------------------------------------------------

--
-- Table structure for table `submittions`
--

DROP TABLE IF EXISTS `submittions`;
CREATE TABLE IF NOT EXISTS `submittions` (
  `USER_ID` int(10) NOT NULL,
  `DATE` date NOT NULL,
  `VALUE` int(3) NOT NULL,
  PRIMARY KEY (`USER_ID`),
  UNIQUE KEY `USER_ID` (`USER_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `submittions`
--

INSERT INTO `submittions` (`USER_ID`, `DATE`, `VALUE`) VALUES
(36, '2019-05-08', 3),
(43, '2019-05-08', 3);

-- --------------------------------------------------------

--
-- Table structure for table `uct`
--

DROP TABLE IF EXISTS `uct`;
CREATE TABLE IF NOT EXISTS `uct` (
  `UCT_ID` int(10) NOT NULL AUTO_INCREMENT,
  `FACULTY` varchar(50) NOT NULL,
  `COURSE` varchar(50) NOT NULL,
  `APS` int(11) NOT NULL,
  `INTEREST` text NOT NULL,
  PRIMARY KEY (`UCT_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uct`
--

INSERT INTO `uct` (`UCT_ID`, `FACULTY`, `COURSE`, `APS`, `INTEREST`) VALUES
(1, 'Science', 'Computer Science', 660, 'Technology'),
(2, 'Science', 'Physics', 660, 'Space and all things small'),
(3, 'Science', 'Mathematics', 660, 'Mathematics'),
(4, 'Science', 'Biochemistry', 660, 'Medical field'),
(5, 'Science', 'Astrophysics', 660, 'Space and all things small'),
(6, 'Engineering', 'Civil Engineering', 500, 'Cars and Automotives'),
(7, 'Engineering', 'Electrical Engineering', 500, 'Cars and Automotives'),
(8, 'Engineering', 'Mechanical Engineering', 510, 'Cars and Automotives'),
(9, 'Engineering', 'Chemical Engineering', 510, 'Chemistry'),
(10, 'Engineering', 'Mechatronic', 510, 'Cars and Automotives'),
(11, 'Commerce', 'Business Science', 480, 'Accounting and Finance and Money'),
(12, 'Commerce', 'Actuarial', 500, 'Mathematics'),
(13, 'Commerce', 'Accounting', 480, 'Accounting and Finance and Money'),
(14, 'Commerce', 'Economics', 480, 'Accounting and Finance and Money'),
(15, 'Commerce', 'Information System', 480, 'Technology'),
(16, 'Humanities', 'Fine Arts', 380, 'Acting'),
(17, 'Humanities', 'Theatre & Performance', 380, 'Acting'),
(18, 'Humanities', 'Social Science ', 450, 'Social Work'),
(19, 'Humanities', 'Social Work', 450, 'Social Work'),
(20, 'Humanities', 'Music', 380, 'Music and Instruments');

-- --------------------------------------------------------

--
-- Table structure for table `uct_application`
--

DROP TABLE IF EXISTS `uct_application`;
CREATE TABLE IF NOT EXISTS `uct_application` (
  `UCTAPP_ID` int(11) NOT NULL AUTO_INCREMENT,
  `COURSE1` text NOT NULL,
  `COURSE2` text NOT NULL,
  `COURSE3` text NOT NULL,
  `USER_ID` int(10) NOT NULL,
  PRIMARY KEY (`UCTAPP_ID`),
  UNIQUE KEY `UCTAPP_ID` (`UCTAPP_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uct_application`
--

INSERT INTO `uct_application` (`UCTAPP_ID`, `COURSE1`, `COURSE2`, `COURSE3`, `USER_ID`) VALUES
(1, 'Computer Science', 'Physics', 'Biochemistry', 13);

-- --------------------------------------------------------

--
-- Table structure for table `uj`
--

DROP TABLE IF EXISTS `uj`;
CREATE TABLE IF NOT EXISTS `uj` (
  `UJ_ID` int(11) NOT NULL,
  `FACULTY` varchar(255) NOT NULL,
  `COURSE` varchar(255) NOT NULL,
  `APS` int(11) NOT NULL,
  `INTEREST` text NOT NULL,
  PRIMARY KEY (`UJ_ID`),
  UNIQUE KEY `UJ_ID` (`UJ_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uj`
--

INSERT INTO `uj` (`UJ_ID`, `FACULTY`, `COURSE`, `APS`, `INTEREST`) VALUES
(1, 'Science', 'APPLIED MATHEMATICS\r\nAND\r\nCOMPUTER SCIENCE', 31, 'Technology'),
(2, 'Science', 'BIOCHEMISTRY\r\nAND BOTANY', 30, 'Medical field'),
(3, 'Science', 'MATHEMATICS AND\r\nMATHEMATICAL\r\nSTATISTICS\r\n(WITH FINANCIAL\r\nORIENTATION)', 33, 'Mathematics'),
(4, 'Science', 'ZOOLOGY AND\r\nBIOCHEMISTRY', 30, 'Animals'),
(5, 'Science', 'PHYSICS AND\r\nMATHEMATICS', 31, 'Mathematics');

-- --------------------------------------------------------

--
-- Table structure for table `uj_application`
--

DROP TABLE IF EXISTS `uj_application`;
CREATE TABLE IF NOT EXISTS `uj_application` (
  `UJAPP_ID` int(11) NOT NULL AUTO_INCREMENT,
  `COURSE1` text NOT NULL,
  `COURSE2` text NOT NULL,
  `COURSE3` text NOT NULL,
  `USER_ID` int(11) NOT NULL,
  PRIMARY KEY (`UJAPP_ID`),
  UNIQUE KEY `USER_ID` (`USER_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uj_application`
--

INSERT INTO `uj_application` (`UJAPP_ID`, `COURSE1`, `COURSE2`, `COURSE3`, `USER_ID`) VALUES
(1, 'MATHEMATICS AND MATHEMATICAL STATISTICS (WITH FINANCIAL ORIENTATION)', 'APPLIED MATHEMATICS AND COMPUTER SCIENCE', 'ZOOLOGY AND BIOCHEMISTRY', 13);

-- --------------------------------------------------------

--
-- Table structure for table `up`
--

DROP TABLE IF EXISTS `up`;
CREATE TABLE IF NOT EXISTS `up` (
  `UP_ID` int(10) NOT NULL AUTO_INCREMENT,
  `FACULTY` varchar(50) NOT NULL,
  `COURSE` varchar(50) NOT NULL,
  `APS` int(11) NOT NULL,
  `INTEREST` text NOT NULL,
  PRIMARY KEY (`UP_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `up`
--

INSERT INTO `up` (`UP_ID`, `FACULTY`, `COURSE`, `APS`, `INTEREST`) VALUES
(1, 'SCIENCE', 'CHEMISTRY', 34, 'Chemistry'),
(2, 'SCIENCE', 'MATHS OF FINANCE', 30, 'Mathematics'),
(3, 'SCIENCE', 'APPLIED MATHEMATICS', 34, 'Mathematics'),
(4, 'SCIENCE', 'COMPUTER SCIENCE', 30, 'Technology'),
(5, 'SCIENCE', 'BIOLOGICAL SCIENCE', 32, 'Medical field'),
(6, 'SCIENCE', 'PHYSICAL SCIENCE', 34, 'Space and all things small'),
(7, 'HUMANITIES', 'POLITICAL SCIENCE', 30, 'Economics'),
(8, 'HUMANITIES', 'FINE ARTS', 30, 'Acting'),
(9, 'HUMANITIES', 'LANGUAGES', 30, 'Reading'),
(10, 'HUMANITIES', 'LAW', 30, 'Public speaking'),
(21, 'HUMANITIES', 'PHILOSOPHY', 32, 'Problem solving'),
(22, 'HUMANITIES', 'POLITICS', 32, 'Politics'),
(25, 'HUMANITIES', 'SOCIAL WORK', 32, 'Social Work'),
(29, 'HUMANITIES', 'MUSIC AND DRAMA', 32, 'Music and Instruments');

-- --------------------------------------------------------

--
-- Table structure for table `up_application`
--

DROP TABLE IF EXISTS `up_application`;
CREATE TABLE IF NOT EXISTS `up_application` (
  ` UPAPP_ID` int(11) NOT NULL AUTO_INCREMENT,
  `COURSE1` text NOT NULL,
  `COURSE2` text NOT NULL,
  `COURSE3` text NOT NULL,
  `USER_ID` int(11) NOT NULL,
  PRIMARY KEY (` UPAPP_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `up_application`
--

INSERT INTO `up_application` (` UPAPP_ID`, `COURSE1`, `COURSE2`, `COURSE3`, `USER_ID`) VALUES
(1, 'Applied Mathematics', 'Computer Science', 'Mathematics of Finance', 13);

-- --------------------------------------------------------

--
-- Table structure for table `wits`
--

DROP TABLE IF EXISTS `wits`;
CREATE TABLE IF NOT EXISTS `wits` (
  `WITS_ID` int(10) NOT NULL AUTO_INCREMENT,
  `FACULTY` varchar(50) NOT NULL,
  `COURSE` varchar(50) NOT NULL,
  `APS` int(11) NOT NULL,
  `INTEREST` text NOT NULL,
  PRIMARY KEY (`WITS_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wits`
--

INSERT INTO `wits` (`WITS_ID`, `FACULTY`, `COURSE`, `APS`, `INTEREST`) VALUES
(1, 'Science', 'Computer Science', 40, 'Technology'),
(2, 'Science', 'Biological Sciences', 40, 'Medical field'),
(3, 'Science', 'Mathematics of Finance', 42, 'Mathematics'),
(4, 'Science', 'Astronomy', 43, 'Space and all things small'),
(5, 'Science', 'Nuclear Sciences', 43, 'Space and all things small'),
(6, 'Science', 'Chemistry', 43, 'Chemistry'),
(7, 'Engineering', 'Chemical Engineering', 42, 'Chemistry'),
(8, 'Engineering', 'Civil Engineering', 36, 'Cars and Automotives'),
(9, 'Engineering', 'Electrical Engineering', 36, 'Cars and Automotives'),
(10, 'Engineering', 'Mechanical Engineering', 40, 'Cars and Automotives'),
(11, 'Engineering', 'Mining Engineering', 40, 'Mining and Minerals'),
(12, 'Engineering', 'Aeronautical Engineering', 40, 'Space and all things small');

-- --------------------------------------------------------

--
-- Table structure for table `wits_application`
--

DROP TABLE IF EXISTS `wits_application`;
CREATE TABLE IF NOT EXISTS `wits_application` (
  `WITSAPP_ID` int(11) NOT NULL AUTO_INCREMENT,
  `COURSE1` text NOT NULL,
  `COURSE2` text NOT NULL,
  `COURSE3` text NOT NULL,
  `USER_ID` int(10) NOT NULL,
  PRIMARY KEY (`WITSAPP_ID`),
  UNIQUE KEY `USER_ID` (`USER_ID`),
  UNIQUE KEY `USER_ID_2` (`USER_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wits_application`
--

INSERT INTO `wits_application` (`WITSAPP_ID`, `COURSE1`, `COURSE2`, `COURSE3`, `USER_ID`) VALUES
(1, 'BSc-Biological Science', 'BSc-Geological Sciences', 'BSc-Acturial Sciences', 13),
(5, 'BSc-Computer Science', 'BSc-Mathematics of Finance', 'BSc-Nuclear Science and Engineering', 46),
(6, 'BSc-Biological Science', 'BSc-Computer Science', 'BSc-Mathematics of Finance', 49);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `current_academics`
--
ALTER TABLE `current_academics`
  ADD CONSTRAINT `CURRENT_ACADEMICS_ibfk_1` FOREIGN KEY (`USER_ID`) REFERENCES `register` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
