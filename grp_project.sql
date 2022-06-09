-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 04, 2021 at 03:27 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grp_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

DROP TABLE IF EXISTS `answers`;
CREATE TABLE IF NOT EXISTS `answers` (
  `Incident_number` int(20) NOT NULL AUTO_INCREMENT,
  `employee_id` varchar(60) NOT NULL,
  `customer_id` varchar(60) NOT NULL,
  `answer` varchar(400) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`Incident_number`),
  KEY `customer_id` (`customer_id`),
  KEY `employee_id` (`employee_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`Incident_number`, `employee_id`, `customer_id`, `answer`, `status`) VALUES
(6, 'Sankalpa ', 'Janani', 'Key board is working', 'assign'),
(8, 'Sankalpa ', 'Janani', 'Replace with new screen', 'assign');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `customer_id` varchar(20) NOT NULL COMMENT 'A01',
  `first_name` varchar(60) NOT NULL,
  `last_name` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `contact_no` int(20) NOT NULL,
  `address` varchar(60) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `first_name`, `last_name`, `email`, `contact_no`, `address`, `password`) VALUES
('Janani', 'JN', 'Janani', 'adsff', 3124134, 'abcdefgh', 'janani'),
('Sewmini', 'SW', 'Sewmini', 'sddaf', 124314, 'dfdfgdg', 'sewmini'),
('Thiwenika', 'TH', 'Thiwenika', 'sdfsaf', 3542352, 'efgsdgsdgg gsdg', 'thiwenika');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `employee_id` varchar(20) NOT NULL,
  `first_name` varchar(60) NOT NULL,
  `last_name` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `contact_no` int(20) NOT NULL,
  `address` varchar(70) NOT NULL,
  `password` varchar(20) NOT NULL,
  `date_joined` date NOT NULL,
  `position` varchar(20) NOT NULL,
  PRIMARY KEY (`employee_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_id`, `first_name`, `last_name`, `email`, `contact_no`, `address`, `password`, `date_joined`, `position`) VALUES
('Piyum', 'PSS', 'Piyum', 'dfdfgd', 423425, '3213124daDDZD D DSDSd', 'piyum1', '2021-01-29', 'Admin'),
('Sankalpa', 'PS', 'Sanka', 'vdsvs', 5555555, 'dsdwfreq afaefgefea', 'sankalpa', '2021-01-29', 'Employee'),
('Sew', 'SW', 'Sew', 'asfafa@gamil.com', 21313414, 'afggs rfedf343 rf', 'sew', '2021-02-02', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `incident`
--

DROP TABLE IF EXISTS `incident`;
CREATE TABLE IF NOT EXISTS `incident` (
  `incident_number` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` varchar(60) NOT NULL,
  `date` date NOT NULL,
  `problem` varchar(70) NOT NULL,
  `description` varchar(400) NOT NULL,
  PRIMARY KEY (`incident_number`),
  KEY `incident_ibfk_1` (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `incident`
--

INSERT INTO `incident` (`incident_number`, `customer_id`, `date`, `problem`, `description`) VALUES
(6, 'Janani', '2021-01-30', 'Key board', 'Keyboard is not working'),
(7, 'Sewmini', '2021-01-30', 'Monitor', 'Monitor is not working'),
(8, 'Janani', '2021-01-30', 'Monitor', 'Monitor has a color patch'),
(9, 'Janani', '2021-02-01', 'Monitor', 'monitor is not working'),
(10, 'Sewmini', '2021-02-04', 'test prob', 'help');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `post_id` int(20) NOT NULL AUTO_INCREMENT,
  `post_title` varchar(60) NOT NULL,
  `post_text` varchar(5000) NOT NULL,
  `post_create_time` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  `customer_id` varchar(60) NOT NULL,
  PRIMARY KEY (`post_id`),
  KEY `forum_ibfk_1` (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_title`, `post_text`, `post_create_time`, `customer_id`) VALUES
(1, 'test', 'help', '2021-02-04 09:51:23.927498', 'Sewmini'),
(2, 'test1', 'hello', '2021-02-04 09:56:37.389076', 'Sewmini'),
(3, 'final', 'dead', '2021-02-04 13:50:08.018461', 'Sewmini'),
(4, 'PHP not working', 'I tried creating a website but data is not passed to the table.', '2021-02-04 15:20:10.502195', 'Janani');

-- --------------------------------------------------------

--
-- Table structure for table `reply`
--

DROP TABLE IF EXISTS `reply`;
CREATE TABLE IF NOT EXISTS `reply` (
  `reply_id` int(11) NOT NULL AUTO_INCREMENT,
  `reply_owner` varchar(150) NOT NULL,
  `reply_text` text NOT NULL,
  `reply_create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `post_id` int(11) NOT NULL,
  PRIMARY KEY (`reply_id`),
  KEY `FOREIGN` (`post_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reply`
--

INSERT INTO `reply` (`reply_id`, `reply_owner`, `reply_text`, `reply_create_time`, `post_id`) VALUES
(1, 'Sewmini', 'hehe', '2021-02-04 10:01:09', 1),
(2, 'Sewmini', 'Rename the file then it will work. It Worked for me.', '2021-02-04 15:21:24', 4);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `answers_ibfk_2` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`employee_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `incident`
--
ALTER TABLE `incident`
  ADD CONSTRAINT `incident_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON UPDATE CASCADE;

--
-- Constraints for table `reply`
--
ALTER TABLE `reply`
  ADD CONSTRAINT `reply_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`post_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
