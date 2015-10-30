-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2014 at 10:11 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `spam`
--

-- --------------------------------------------------------

--
-- Table structure for table `guide_allocation`
--

CREATE TABLE IF NOT EXISTS `guide_allocation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  `submitted_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `guide_allocation`
--

INSERT INTO `guide_allocation` (`id`, `content`, `submitted_on`) VALUES
(1, 'Guide allocation to student is an fare processing in which guide is allocated to students according to their skills of programming.\n       <br /> <br />Students are allocated by their technology of projects.<br /><br />Guide which can understand this technology are given to that project and students under that project are allocated to that guide.\n       \n       <br /><br />Guide allocation to student is an fare processing in which guide is allocated to students.\n       <br /> <br />Students are allocated by their technology of projects.<br /><br />Guide which can understand this technology are given to that project and students under that project.', '2014-06-05 14:47:04'),
(5, 'Guide allocation to student is an fare processing in which guide is allocated to students according to their skills of programming. \n\nStudents are allocated by their technology of projects.\n\nGuide which can understand this technology are given to that project and students under that project are allocated to that guide. \n\nGuide allocation to student is an fare processing in which guide is allocated to students. \n\nStudents are allocated by their technology of projects.\n\nGuide which can understand this technology are given to that project and students under that project.', '2014-06-05 15:07:18');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
