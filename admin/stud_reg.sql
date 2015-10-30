-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2014 at 10:20 AM
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
-- Table structure for table `stud_reg`
--

CREATE TABLE IF NOT EXISTS `stud_reg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_name` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `leader name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `l_cid` varchar(10) NOT NULL,
  `l_contact` varchar(255) NOT NULL,
  `l_email` varchar(255) NOT NULL,
  `l_marks` int(11) NOT NULL,
  `l_smarks` int(11) NOT NULL,
  `l_pmarks` int(11) NOT NULL,
  `mem2_name` varchar(255) NOT NULL,
  `mem2_c_id` varchar(10) NOT NULL,
  `mem2_contact` varchar(255) NOT NULL,
  `mem2_email` varchar(255) NOT NULL,
  `mem2_marks` int(11) NOT NULL,
  `mem2_smarks` int(11) NOT NULL,
  `mem2_pmarks` int(11) NOT NULL,
  `mem3_name` varchar(255) NOT NULL,
  `mem3_c_id` varchar(10) NOT NULL,
  `mem3_contact` varchar(255) NOT NULL,
  `mem3_email` varchar(255) NOT NULL,
  `mem3_marks` int(11) NOT NULL,
  `mem3_smarks` int(11) NOT NULL,
  `mem3_pmarks` int(11) NOT NULL,
  `mem4_name` varchar(255) NOT NULL,
  `mem4_c_id` varchar(10) NOT NULL,
  `mem4_contact` varchar(255) NOT NULL,
  `mem4_email` varchar(255) NOT NULL,
  `mem4_marks` int(11) NOT NULL,
  `mem4_smarks` int(11) NOT NULL,
  `mem4_pmarks` int(11) NOT NULL,
  `mem5_name` varchar(255) NOT NULL,
  `mem5_c_id` varchar(10) NOT NULL,
  `mem5_contact` varchar(255) NOT NULL,
  `mem5_email` varchar(255) NOT NULL,
  `mem5_marks` int(11) NOT NULL,
  `mem5_smarks` int(11) NOT NULL,
  `mem5_pmarks` int(11) NOT NULL,
  `team_mem` int(11) NOT NULL,
  `ssid` varchar(255) NOT NULL,
  `guide` varchar(255) NOT NULL,
  `technology` varchar(255) NOT NULL,
  `synopsis` varchar(50) NOT NULL,
  `1week` varchar(20) NOT NULL,
  `2week` varchar(20) NOT NULL,
  `3week` varchar(20) NOT NULL,
  `4week` varchar(20) NOT NULL,
  `5week` varchar(20) NOT NULL,
  `report` varchar(50) NOT NULL,
  `database` varchar(50) NOT NULL,
  `project` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `stud_reg`
--

INSERT INTO `stud_reg` (`id`, `project_name`, `branch`, `leader name`, `category`, `l_cid`, `l_contact`, `l_email`, `l_marks`, `l_smarks`, `l_pmarks`, `mem2_name`, `mem2_c_id`, `mem2_contact`, `mem2_email`, `mem2_marks`, `mem2_smarks`, `mem2_pmarks`, `mem3_name`, `mem3_c_id`, `mem3_contact`, `mem3_email`, `mem3_marks`, `mem3_smarks`, `mem3_pmarks`, `mem4_name`, `mem4_c_id`, `mem4_contact`, `mem4_email`, `mem4_marks`, `mem4_smarks`, `mem4_pmarks`, `mem5_name`, `mem5_c_id`, `mem5_contact`, `mem5_email`, `mem5_marks`, `mem5_smarks`, `mem5_pmarks`, `team_mem`, `ssid`, `guide`, `technology`, `synopsis`, `1week`, `2week`, `3week`, `4week`, `5week`, `report`, `database`, `project`) VALUES
(1, 'SPAM', 'CS', 'Aditya Verma', 'Team Leader', '10IT37', '9024761882', 'adityaverma512@gmail.com', 200, 80, 120, 'Himani Sikarwar', '10it24', '9024761882', 'himanisikarwarhs@gmail.com', 200, 80, 120, 'Priyanka Saxena', '10IT46', '9024761882', 'priyankasaxena2081991@gmail.com', 200, 80, 120, 'Usman Ali', '10it64', '9024761882', 'usmanalikhan64@gmail.com', 200, 80, 120, '', '', '', '', 0, 0, 0, 4, 'aditya', 'Dinesh khunteta', 'PHP', 'New Doc 21.pdf', 'New Doc 22.pdf', 'New Doc 23.pdf', 'New Doc 24.pdf', 'New Doc 25.pdf', '', 'downloaded (1).pdf', '', ''),
(2, 'BSR', 'CS', 'saloni', 'team leader', '10it36', '9024761882', 'himanisikarwarhs@gmail.com', 0, 0, 0, 'urmila', '10it65', '9024761882', 'urmila@gmail.com', 0, 0, 0, 'suresh', '10it43', '9024761882', 'suresh@gmail.com', 0, 0, 0, '', '', '', '', 0, 0, 0, '', '', '', '', 0, 0, 0, 3, '', '', 'PHP', 'New Doc 21.pdf', '', '', '', '', '', '', '', ''),
(3, 'Online Reservation', 'CS', 'khushi', 'team leader', '10it23', '9024761882', 'priyankasaxena2081991@gmail.com', 187, 78, 109, 'neha', '10it76', '9024761882', 'ne@gmail.com', 199, 79, 120, 'surya', '10it45', '9024761882', 'surya@gmail.com', 190, 78, 112, '', '', '', '', 0, 0, 0, '', '', '', '', 0, 0, 0, 3, '123', 'Dinesh khunteta', 'PHP', 'New Doc 22.pdf', '', '', '', '', '', '', '', ''),
(4, 'BSR', 'CS', 'saloni', 'team leader', '10it36', '9024761882', 'himanisikarwarhs@gmail.com', 0, 0, 0, 'urmila', '10it65', '9024761882', 'urmila@gmail.com', 0, 0, 0, 'suresh', '10it43', '9024761882', 'suresh@gmail.com', 0, 0, 0, '', '', '', '', 0, 0, 0, '', '', '', '', 0, 0, 0, 3, '', '', 'PHP', 'New Doc 24.pdf', '', '', '', '', '', '', '', ''),
(5, 'Online Reservation', 'CS', 'khushi', 'team leader', '10it23', '9024761882', 'priyankasaxena2081991@gmail.com', 0, 0, 0, 'neha', '10it76', '9024761882', 'ne@gmail.com', 0, 0, 0, 'surya', '10it45', '9024761882', 'surya@gmail.com', 0, 0, 0, '', '', '', '', 0, 0, 0, '', '', '', '', 0, 0, 0, 3, '123', '', 'PHP', 'New Doc 22.pdf', '', '', '', '', '', '', '', ''),
(6, 'Reservation', 'CS', 'tarun', 'team leader', '10it35', '', 'a@gmail.com', 191, 78, 113, 'rakesh', '10it', '9509701824', 'b@gmail.com', 190, 76, 114, 'Rohit', '10it46', '8546254625', 'd@gmail.com', 173, 58, 115, '', '', '', '', 0, 0, 0, '', '', '', '', 0, 0, 0, 3, 'verma', 'Dinesh khunteta', 'PHP', '', '', '', '', 'New Doc 23.pdf', '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
