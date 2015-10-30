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
-- Table structure for table `faq`
--

CREATE TABLE IF NOT EXISTS `faq` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  `category` varchar(255) NOT NULL,
  `submitted_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `content`, `category`, `submitted_on`) VALUES
(1, 'coordinator" can refer to a position within an organization or business with significant responsibilities for acting as a liaison between guides and students in the begining of a projectand information sources, which requires by students or guides.</br><br />\n    \n    Before making any project students can learn a few steps which might be helpful for developing their projects.Here we are providing some guidelines for students to follow while developing the project.<br /><br />', 'better_technology', '2014-06-06 06:09:11'),
(4, 'coordinator" can refer to a position within an organization or business with significant responsibilities for acting as a liaison between guides and students in the begining of a projectand information sources, which requires by students or guides.</br><br />', 'automation', '2014-06-06 05:57:20'),
(5, 'coordinator" can refer to a position within an organization or business with significant responsibilities for acting as a liaison between guides and students in the begining of a projectand information sources, which requires by students or guides.</br><br />', 'project_idea', '2014-06-06 05:57:29'),
(6, 'Guide" is a person who leads others to more abstract goals such as knowledge or wisdom.Guide should be a proffessor or Asst. proffessor of this college,and must be a registered guide in our website.<br /><br />\n    Students who wants to develop a project,can register here and get the guides, suggestions about their projects and can ask their queries. For asking any query student must be registered here.<br /><br />\n    Before making any project students can learn a few steps which might be helpful for developing their projects.Here we are providing some guidelines for students to follow while developing the project.<br /><br />', 'best_projects', '2014-06-06 05:57:00'),
(7, '<li>spam</li><br>\r\n<li>online processing</li>', 'list_of_projects', '0000-00-00 00:00:00'),
(8, '<li>routing</li><br>\r\n<li>aeroscopic</li><br>\r\n<li>google</li><br>\r\n<li>search</li>', 'college_project', '0000-00-00 00:00:00'),
(9, 'Guide" is a person who leads others to more abstract goals such as knowledge or wisdom.Guide should be a proffessor or Asst. <br /><br />proffessor of this college,and must be a registered guide in our website.<br /><br />\n    Students who wants to develop a project,can register here and get the guides, suggestions about their projects and can ask their queries. For asking any query student must be registered here.', 'project_guidance', '2014-06-06 06:09:34');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
