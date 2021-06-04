-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 10, 2021 at 08:10 PM
-- Server version: 5.1.33
-- PHP Version: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `calendar_db`
--
CREATE DATABASE `calendar_db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `calendar_db`;

-- --------------------------------------------------------

--
-- Table structure for table `sched_tb`
--

CREATE TABLE IF NOT EXISTS `sched_tb` (
  `sched_id` int(255) NOT NULL AUTO_INCREMENT,
  `approved` varchar(10000) DEFAULT NULL,
  `title` varchar(1000) DEFAULT NULL,
  `division` varchar(1000) DEFAULT NULL,
  `co_host_person` varchar(1000) DEFAULT NULL,
  `contact_email` varchar(1000) DEFAULT NULL,
  `start_date` varchar(1000) DEFAULT NULL,
  `start_time` varchar(1000) DEFAULT NULL,
  `end_date` varchar(1000) DEFAULT NULL,
  `end_time` varchar(1000) DEFAULT NULL,
  `meeting_id` varchar(1000) DEFAULT NULL,
  `password` varchar(1000) DEFAULT NULL,
  `others` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`sched_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `sched_tb`
--

INSERT INTO `sched_tb` (`sched_id`, `approved`, `title`, `division`, `co_host_person`, `contact_email`, `start_date`, `start_time`, `end_date`, `end_time`, `meeting_id`, `password`, `others`) VALUES
(1, 'YES', 'Training of Trainers on WildALERT System', 'Planning and Management Division', 'Milner M. Macarandang', 'mmmacarandang@gmail.com', '2021-03-11', '08:00', '2021-03-12', '14:00', NULL, NULL, NULL),
(2, 'NO', 'SFFI Annual Convention ', 'NGP', 'Milner M. Macarandang', 'mmmacarandang@gmail.com', '2021-03-15', '09:00', '2021-03-16', '15:00', NULL, NULL, NULL);
