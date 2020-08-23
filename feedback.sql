-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2018 at 06:31 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `feedback`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `fdb_id` int(11) NOT NULL AUTO_INCREMENT,
  `tr_id` int(11) NOT NULL,
  `stu_id` int(11) NOT NULL,
  `teaching` varchar(10) NOT NULL,
  `syllabus` varchar(10) NOT NULL,
  `class_work` varchar(10) NOT NULL,
  `comments` varchar(30) NOT NULL,
  `stu_time` varchar(20) NOT NULL,
  `reply` varchar(50) NOT NULL,
  `tr_time` varchar(20) NOT NULL,
  PRIMARY KEY (`fdb_id`),
  UNIQUE KEY `fdb_id` (`fdb_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fdb_id`, `tr_id`, `stu_id`, `teaching`, `syllabus`, `class_work`, `comments`, `stu_time`, `reply`, `tr_time`) VALUES
(13, 1234, 36524, 'Excellent', 'Excellent', 'Excellent', '  good', '13-03-18', '', ''),
(14, 5678, 35983, 'Good', 'Average', 'Good', '  jyada load mat lia kro', '15-03-18', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `hod`
--

CREATE TABLE IF NOT EXISTS `hod` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `rank` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hod`
--

INSERT INTO `hod` (`id`, `name`, `rank`) VALUES
(33333, 'Siby Samuel', 'CS HOD'),
(112211, 'shubh', 'cs');

-- --------------------------------------------------------

--
-- Table structure for table `hod_login`
--

CREATE TABLE IF NOT EXISTS `hod_login` (
  `id` int(11) NOT NULL,
  `password` varchar(10) NOT NULL,
  `rank` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hod_login`
--

INSERT INTO `hod_login` (`id`, `password`, `rank`) VALUES
(33333, '33333', ''),
(112211, '112211', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `stu_id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `class` varchar(10) NOT NULL,
  `mentor_id` int(11) NOT NULL,
  `attendence` int(11) NOT NULL,
  PRIMARY KEY (`stu_id`),
  UNIQUE KEY `stu_id` (`stu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stu_id`, `name`, `class`, `mentor_id`, `attendence`) VALUES
(35983, 'shubham paraste', 'Bsc cs', 0, 0),
(36455, 'Shubham haldkar', 'B.Sc', 0, 0),
(36524, 'smriti', 'bsc', 1122, 56);

-- --------------------------------------------------------

--
-- Table structure for table `student_login`
--

CREATE TABLE IF NOT EXISTS `student_login` (
  `id` varchar(5) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_login`
--

INSERT INTO `student_login` (`id`, `password`) VALUES
('36524', '14/06/1997'),
('23423', 'wdsd'),
('454', '43543'),
('11111', '343'),
('36455', '01/09/1997'),
('35983', '3/12/1996');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `department` varchar(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `name`, `department`) VALUES
(1234, 'manish tiwari', 'cs'),
(5678, 'saroj junghare', 'cs');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_login`
--

CREATE TABLE IF NOT EXISTS `teacher_login` (
  `id` int(11) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_login`
--

INSERT INTO `teacher_login` (`id`, `password`) VALUES
(123, '123'),
(1234, '1234'),
(5678, '5678');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
