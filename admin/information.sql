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
-- Table structure for table `information`
--

CREATE TABLE IF NOT EXISTS `information` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `website` text NOT NULL,
  `project` text NOT NULL,
  `technology` text NOT NULL,
  `submitted_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`id`, `website`, `project`, `technology`, `submitted_on`) VALUES
(1, 'This is a website developed to handle the project allocation management of project in colleges. ', 'The main aim of making this project is online solving of problems,providing guidance  to students.And make better communication between guides and the students.\n    <br /><br />The main aim of making this project is online solving of problems,providing guidance  to students.And make better communication between guides and the students.', 'Technology used to create this website is php which is an open source technology to create website. \n    </br><pre>For developing the project we use some advanced and most useful tools with PHP, which are as following:\n<ul> <li>Server- Apache </li>\n     <li>Presentation and mapping- HTML and CSS (designing)</li>\n <li>Database- MySql 5.5(PHP combined with MySQL are cross-platform)</li>\n <li>DreamWeaver CS5 as IDE</li>\n  <li>Testing-  Firebug 11.0</li></ul></pre>', '2014-06-06 04:20:46');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
