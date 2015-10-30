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
-- Table structure for table `synopsis`
--

CREATE TABLE IF NOT EXISTS `synopsis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  `instruction` text NOT NULL,
  `note` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `synopsis`
--

INSERT INTO `synopsis` (`id`, `content`, `instruction`, `note`) VALUES
(1, 'You have first login to your accout to submit your synopsis to coordinator of your respective branch.', '<li>Synopsis should be of 1 or 2 pages not more than it.</li><br>\n<li>Synopsis should be in proper format.</li><br>\n <li>Synosis must be contained of college logo,project description,team members information etc.</li><br>\n <li>It should be signed or must be approved by your guides otherwise it may be rejected.</li><br>\n    <li>synopsis submission to your coordinator will be your responsibility.</li><br>\n    <li>It should be submitted before last date.</li><br>\n    <li>Updation are taken place if necessary so students are need to be checked for updates daily.</li>', 'Please submit your synopsis till last date of submission');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
