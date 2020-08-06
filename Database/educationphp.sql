-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2015 at 06:16 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `educationphp`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `srno` int(11) NOT NULL AUTO_INCREMENT,
  `schoolid` varchar(20) NOT NULL,
  `username` varchar(40) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`srno`),
  UNIQUE KEY `schoolid` (`schoolid`,`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`srno`, `schoolid`, `username`, `pass`, `status`) VALUES
(1, '02071995', 'VIVEK', '123456', ''),
(2, '1231115', 'SURYA', '1123', 'Active'),
(3, '2231115', 'Prem', '1234', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE IF NOT EXISTS `result` (
  `srno` int(11) NOT NULL AUTO_INCREMENT,
  `schoolid` varchar(20) NOT NULL,
  `board` varchar(20) NOT NULL,
  `examtype` varchar(30) NOT NULL,
  `class` int(11) NOT NULL,
  `studentname` varchar(30) NOT NULL,
  `roll` varchar(30) NOT NULL,
  `fathername` varchar(30) NOT NULL,
  `hindi` int(11) NOT NULL,
  `english` int(11) NOT NULL,
  `maths` int(11) NOT NULL,
  `sanskrit` int(11) NOT NULL,
  `socialstudies` int(11) NOT NULL,
  `science` int(11) NOT NULL,
  PRIMARY KEY (`srno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`srno`, `schoolid`, `board`, `examtype`, `class`, `studentname`, `roll`, `fathername`, `hindi`, `english`, `maths`, `sanskrit`, `socialstudies`, `science`) VALUES
(1, '1231115', 'R.B.S.E.', 'I Unit', 1, 'VIVEK', '2', 'RAKESH', 40, 45, 46, 47, 39, 35),
(2, '1231115', 'R.B.S.E.', 'I Unit', 1, 'AKASH', '3', 'RAKESH', 50, 1, 1, 1, 50, 50),
(3, '1231115', 'R.B.S.E.', 'I Unit', 1, 'NAVIN', '4', 'MOHAN', 33, 3, 3, 3, 3, 3),
(4, '1231115', 'R.B.S.E.', 'I Unit', 1, 'PREM', '5', 'HARSHAY', 20, 15, 15, 10, 9, 7),
(5, '1231115', 'R.B.S.E.', 'I Unit', 1, 'VIVEK', '2', 'RAKESH', 40, 45, 46, 47, 39, 35),
(6, '1231115', 'R.B.S.E.', 'I Unit', 1, 'AKASH', '3', 'RAKESH', 50, 1, 1, 1, 50, 50),
(7, '1231115', 'R.B.S.E.', 'I Unit', 1, 'NAVIN', '4', 'MOHAN', 33, 3, 3, 3, 3, 3),
(8, '1231115', 'R.B.S.E.', 'I Unit', 1, 'PREM', '5', 'HARSHAY', 20, 15, 15, 10, 9, 7);

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE IF NOT EXISTS `school` (
  `srno` int(11) NOT NULL AUTO_INCREMENT,
  `schoolname` text NOT NULL,
  `directorname` text NOT NULL,
  `contact` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `schooltype` text NOT NULL,
  `board` text NOT NULL,
  `schoolid` int(10) NOT NULL,
  `username` varchar(40) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `photo` varchar(70) NOT NULL,
  PRIMARY KEY (`srno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`srno`, `schoolname`, `directorname`, `contact`, `email`, `schooltype`, `board`, `schoolid`, `username`, `pass`, `photo`) VALUES
(1, 'KVM', 'SP', '8295603159', 'SURYAPRAKASHNEHRA@GMAIL.COM', 'Primary', 'R.B.S.E.', 1231115, 'SURYA', '1123', ''),
(2, 'NanoHard Institute of Technology', 'Vivek ', '8816885917', 'bindal.vivek@yahoo.in', 'sr. Secondary', 'C.B.S.E.', 2231115, 'Prem', '1234', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
