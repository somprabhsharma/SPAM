-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2014 at 07:21 PM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `spam_student_list`
--

CREATE TABLE IF NOT EXISTS `spam_student_list` (
  `S.No.` int(11) NOT NULL AUTO_INCREMENT,
  `College No.` varchar(255) NOT NULL,
  `Category` varchar(255) NOT NULL,
  `Name of Student` varchar(255) NOT NULL,
  PRIMARY KEY (`S.No.`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=72 ;

--
-- Dumping data for table `spam_student_list`
--

INSERT INTO `spam_student_list` (`S.No.`, `College No.`, `Category`, `Name of Student`) VALUES
(1, '10EC01', 'EC', 'Abhishek Garg '),
(2, '10EC02', 'EC', 'Abhishek Kumar Sharma'),
(3, '10EC04', 'EC', 'Ajay Poshak '),
(4, '10EC05', 'EC', 'Akash Yadav'),
(5, '10EC06', 'EC', 'Alok Kumar '),
(6, '10CS09', 'CS', 'Anil Nangaliya '),
(7, '10CS10', 'CS', 'Animesh Udawat'),
(8, '10CS11', 'CS', 'Ankit Agrawal '),
(9, '10CS12', 'CS', 'Ankit Kumar Agarwal '),
(10, '10CS13', 'CS', 'Ashish Meena '),
(11, '10EI14', 'EIC', 'Ashutosh Mali '),
(12, '10EII15', 'EIC', 'Badruddin '),
(13, '10EI16', 'EIC', 'Bhupendra Singh Panwar'),
(14, '10EI17', 'EIC', 'Chandra Mohan Sharma '),
(15, '10EI18', 'EIC', 'Daulat Ram'),
(16, '10EE20', 'EEE', 'Durgesh Kumar Meena '),
(17, '10EE21', 'EEE', 'Harshvardhan Vyas '),
(18, '10EE22', 'EEE', 'Hemant Kumar Garg '),
(19, '10EE23', 'EEE', 'Hemraj Gurjar '),
(20, '10IT24', 'IT', 'Himani Sikarwar '),
(21, '10EE25', 'EEE', 'Himanshu Gupta '),
(22, '10CE26', 'Civil', 'Himanshu Saini '),
(23, '10CE27', 'Civil', 'Karun Singh'),
(24, '10CE28', 'Civil', 'Kaushal Kishor '),
(25, '10IT29', 'IT', 'Khushboo Bariya '),
(26, '10CE30', 'Civil', 'Madan Lal Sharma '),
(27, '10CE31', 'Civil', 'Madhu Sudan Gupta '),
(28, '10ME33', 'Mechanical', 'Mahendra Kumar Jakhar '),
(29, '10ME34', 'Mechanical', 'Manish Chouhan '),
(30, '10ME36', 'Mechanical', 'Narendra Jain'),
(31, '10IT37', 'IT', 'Nathu Ram '),
(32, '10EE38', 'EEE', 'Navit Gaur '),
(33, '10IT39', 'IT', 'Neha Lala '),
(34, '10EE40', 'EEE', 'Nirmal Singh Rathore '),
(35, '10ME42', 'Mechanical', 'Pankaj Singhal '),
(36, '10EE43', 'EEE', 'Pavan Kumar Shringi '),
(37, '10EE44', 'EEE', 'Piyush Mittal '),
(38, '10IT45', 'IT', 'Priyanka Charan '),
(39, '10IT46', 'IT', 'Priyanka Saxena'),
(40, '10EE47', 'EEE', 'Ram Kunwar '),
(41, '10EI50', 'EIC', 'Rohit Singh Rawat'),
(42, '10EI51', 'EIC', 'Sagar Sethi'),
(43, '10EI52', 'EIC', 'Saloni Sharma '),
(44, '10EI53', 'EIC', 'Satya Narayan Nagar '),
(45, '10EC54', 'EC', 'Shilpa Mandara '),
(46, '10EC55', 'EC', 'Somraj Meena '),
(47, '10EC56', 'EC', 'Surendra Singh '),
(48, '10EC57', 'EC', 'Suresh Kumar '),
(49, '10CS59', 'CS', 'Surya Pratap Dikshit '),
(50, '10CS60', 'CS', 'Tajendra Sharma '),
(51, '10CS62', 'CS', 'Tushar Chaurasia '),
(52, '10CS63', 'CS', 'Urmila Gugarwal '),
(53, '10IT64', 'IT', 'Usman Ali Khan '),
(54, '10CS65', 'CS', 'Vivek Kumar '),
(55, '10EC66', 'EC', 'Vivek Sharma '),
(56, '10IT67', 'IT', 'Abhishek Mishra'),
(57, '10CE68', 'Civil', 'Amit Aggarwal'),
(58, '10CE69', 'Civil', 'Avdhesh Kumar Sharma'),
(59, '10CE70', 'Civil', 'Bhagirath Maheshwari'),
(60, '10CE71', 'Civil', 'Jitendra Singh Rajput'),
(61, '10IT72', 'IT', 'Keshav Kumar Jangid'),
(62, '10EI73', 'EIC', 'Mahavir Singh'),
(63, '10IT74', 'IT', 'Prashant Vashishtha'),
(64, '10ME75', 'Mechanical', 'Rajendra Prasad'),
(65, '10ME76', 'Mechanical', 'Rambabu'),
(66, '10CE77', 'Civil', 'Ram Niwas Bhaskar'),
(67, '10ME78', 'Mechanical', 'Rima Deb'),
(68, '10ME79', 'Mechanical', 'Shivdev'),
(69, '10ME80', 'Mechanical', 'Tejas Pareek'),
(70, '10ME81', 'Mechanical', 'Vikram Singh Rathore');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
