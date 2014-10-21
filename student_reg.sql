-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Oct 21, 2014 at 03:02 AM
-- Server version: 5.5.34
-- PHP Version: 5.5.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `student_reg`
--

-- --------------------------------------------------------

--
-- Table structure for table `name_tbl`
--

CREATE TABLE `name_tbl` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Fname` varchar(30) NOT NULL,
  `Lname` varchar(30) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `name_tbl`
--

INSERT INTO `name_tbl` (`Id`, `Fname`, `Lname`) VALUES
(1, 'Magona', 'Eliane'),
(2, 'Babajide', 'Samson'),
(3, 'Kevin', 'Janvier'),
(4, 'Elvine', 'Chinabalire'),
(5, 'Janvier', 'Chinabalire'),
(6, 'Florence', 'Nalugo'),
(7, 'Medard', 'Chinabalire'),
(8, 'kevin', 'hacker'),
(9, 'Seth', 'Habigirimana');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
