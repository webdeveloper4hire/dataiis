-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 08, 2015 at 12:49 PM
-- Server version: 5.1.33
-- PHP Version: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `database`
--
CREATE DATABASE `database` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `database`;

-- --------------------------------------------------------

--
-- Table structure for table `table1`
--

CREATE TABLE IF NOT EXISTS `table1` (
  `table1_id` int(255) unsigned NOT NULL AUTO_INCREMENT,
  `tb1_colunm1` varchar(1000) DEFAULT NULL,
  `tb1_colunm2` varchar(1000) DEFAULT NULL,
  `tb1_colunm3` varchar(1000) DEFAULT NULL,
  `tb1_colunm4` varchar(1000) DEFAULT NULL,
  `tb1_colunm5` varchar(1000) DEFAULT NULL,
  `tb1_colunm6` varchar(1000) DEFAULT NULL,
  `tb1_colunm7` varchar(1000) DEFAULT NULL,
  `tb1_colunm8` varchar(1000) DEFAULT NULL,
  `tb1_colunm9` varchar(1000) DEFAULT NULL,
  `tb1_colunm10` varchar(1000) DEFAULT NULL,
  `tb1_colunm11` varchar(1000) DEFAULT NULL,
  `tb1_colunm12` varchar(1000) DEFAULT NULL,
  `tb1_colunm13` varchar(1000) DEFAULT NULL,
  `tb1_colunm14` varchar(1000) DEFAULT NULL,
  `tb1_colunm15` varchar(1000) DEFAULT NULL,
  `tb1_colunm16` varchar(1000) DEFAULT NULL,
  `tb1_colunm17` varchar(1000) DEFAULT NULL,
  `tb1_colunm18` varchar(1000) DEFAULT NULL,
  `tb1_colunm19` varchar(1000) DEFAULT NULL,
  `tb1_colunm20` varchar(1000) DEFAULT NULL,
  `tb1_colunm21` varchar(1000) DEFAULT NULL,
  `tb1_colunm22` varchar(1000) DEFAULT NULL,
  `tb1_colunm23` varchar(1000) DEFAULT NULL,
  `tb1_colunm24` varchar(1000) DEFAULT NULL,
  `tb1_colunm25` varchar(1000) DEFAULT NULL,
  `tb1_colunm26` varchar(1000) DEFAULT NULL,
  `tb1_colunm27` varchar(1000) DEFAULT NULL,
  `tb1_colunm28` varchar(1000) DEFAULT NULL,
  `tb1_colunm29` varchar(1000) DEFAULT NULL,
  `tb1_colunm30` varchar(1000) DEFAULT NULL,
  `tb1_colunm31` varchar(255) DEFAULT NULL,
  `tb1_colunm32` varchar(255) DEFAULT NULL,
  `tb1_colunm33` varchar(255) DEFAULT NULL,
  `tb1_colunm34` varchar(255) DEFAULT NULL,
  `tb1_colunm35` varchar(255) DEFAULT NULL,
  `tb1_colunm36` varchar(255) DEFAULT NULL,
  `tb1_colunm37` varchar(255) DEFAULT NULL,
  `tb1_colunm38` varchar(255) DEFAULT NULL,
  `tb1_colunm39` varchar(255) DEFAULT NULL,
  `tb1_colunm40` varchar(255) DEFAULT NULL,
  `tb1_colunm41` varchar(255) DEFAULT NULL,
  `tb1_colunm42` varchar(255) DEFAULT NULL,
  `tb1_colunm43` varchar(255) DEFAULT NULL,
  `tb1_colunm44` varchar(255) DEFAULT NULL,
  `tb1_colunm45` varchar(255) DEFAULT NULL,
  `tb1_colunm46` varchar(255) DEFAULT NULL,
  `tb1_colunm47` varchar(255) DEFAULT NULL,
  `tb1_colunm48` varchar(255) DEFAULT NULL,
  `tb1_colunm49` varchar(255) DEFAULT NULL,
  `tb1_colunm50` varchar(255) DEFAULT NULL,
  `tb1_colunm51` varchar(255) DEFAULT NULL,
  `tb1_colunm52` varchar(255) DEFAULT NULL,
  `tb1_colunm53` varchar(255) DEFAULT NULL,
  `tb1_colunm54` varchar(255) DEFAULT NULL,
  `tb1_colunm55` varchar(255) DEFAULT NULL,
  `tb1_colunm56` varchar(255) DEFAULT NULL,
  `tb1_colunm57` varchar(255) DEFAULT NULL,
  `tb1_colunm58` varchar(255) DEFAULT NULL,
  `tb1_colunm59` varchar(255) DEFAULT NULL,
  `tb1_colunm60` varchar(255) DEFAULT NULL,
  `tb1_colunm61` varchar(255) DEFAULT NULL,
  `tb1_colunm62` varchar(255) DEFAULT NULL,
  `tb1_colunm63` varchar(255) DEFAULT NULL,
  `tb1_colunm64` varchar(255) DEFAULT NULL,
  `tb1_colunm65` varchar(255) DEFAULT NULL,
  `tb1_colunm66` varchar(255) DEFAULT NULL,
  `tb1_colunm67` varchar(255) DEFAULT NULL,
  `tb1_colunm68` varchar(255) DEFAULT NULL,
  `tb1_colunm69` varchar(255) DEFAULT NULL,
  `tb1_colunm70` varchar(255) DEFAULT NULL,
  `tb1_colunm71` varchar(255) DEFAULT NULL,
  `tb1_colunm72` varchar(255) DEFAULT NULL,
  `tb1_colunm73` varchar(255) DEFAULT NULL,
  `tb1_colunm74` varchar(255) DEFAULT NULL,
  `tb1_colunm75` varchar(255) DEFAULT NULL,
  `tb1_colunm76` varchar(255) DEFAULT NULL,
  `tb1_colunm77` varchar(255) DEFAULT NULL,
  `tb1_colunm78` varchar(255) DEFAULT NULL,
  `tb1_colunm79` varchar(255) DEFAULT NULL,
  `tb1_colunm80` varchar(255) DEFAULT NULL,
  `tb1_colunm81` varchar(255) DEFAULT NULL,
  `tb1_colunm82` varchar(255) DEFAULT NULL,
  `tb1_colunm83` varchar(255) DEFAULT NULL,
  `tb1_colunm84` varchar(255) DEFAULT NULL,
  `tb1_colunm85` varchar(255) DEFAULT NULL,
  `tb1_colunm86` varchar(255) DEFAULT NULL,
  `tb1_colunm87` varchar(255) DEFAULT NULL,
  `tb1_colunm88` varchar(255) DEFAULT NULL,
  `tb1_colunm89` varchar(255) DEFAULT NULL,
  `tb1_colunm90` varchar(255) DEFAULT NULL,
  `tb1_colunm91` varchar(255) DEFAULT NULL,
  `tb1_colunm92` varchar(255) DEFAULT NULL,
  `tb1_colunm93` varchar(255) DEFAULT NULL,
  `tb1_colunm94` varchar(255) DEFAULT NULL,
  `tb1_colunm95` varchar(255) DEFAULT NULL,
  `tb1_colunm96` varchar(255) DEFAULT NULL,
  `tb1_colunm97` varchar(255) DEFAULT NULL,
  `tb1_colunm98` varchar(255) DEFAULT NULL,
  `tb1_colunm99` varchar(255) DEFAULT NULL,
  `tb1_colunm100` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`table1_id`),
  KEY `table1_id` (`table1_id`),
  FULLTEXT KEY `tb1_colunm7` (`tb1_colunm7`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41842 ;

-- --------------------------------------------------------

--
-- Table structure for table `table2`
--

CREATE TABLE IF NOT EXISTS `table2` (
  `table2_id` int(255) unsigned NOT NULL AUTO_INCREMENT,
  `tb2_colunm1` varchar(1000) DEFAULT NULL,
  `tb2_colunm2` varchar(1000) DEFAULT NULL,
  `tb2_colunm3` varchar(1000) DEFAULT NULL,
  `tb2_colunm4` varchar(1000) DEFAULT NULL,
  `tb2_colunm5` varchar(1000) DEFAULT NULL,
  `tb2_colunm6` varchar(1000) DEFAULT NULL,
  `tb2_colunm7` varchar(1000) DEFAULT NULL,
  `tb2_colunm8` varchar(1000) DEFAULT NULL,
  `tb2_colunm9` varchar(1000) DEFAULT NULL,
  `tb2_colunm10` varchar(1000) DEFAULT NULL,
  `tb2_colunm11` varchar(1000) DEFAULT NULL,
  `tb2_colunm12` varchar(1000) DEFAULT NULL,
  `tb2_colunm13` varchar(1000) DEFAULT NULL,
  `tb2_colunm14` varchar(1000) DEFAULT NULL,
  `tb2_colunm15` varchar(1000) DEFAULT NULL,
  `tb2_colunm16` varchar(1000) DEFAULT NULL,
  `tb2_colunm17` varchar(1000) DEFAULT NULL,
  `tb2_colunm18` varchar(1000) DEFAULT NULL,
  `tb2_colunm19` varchar(1000) DEFAULT NULL,
  `tb2_colunm20` varchar(1000) DEFAULT NULL,
  `tb2_colunm21` varchar(1000) DEFAULT NULL,
  `tb2_colunm22` varchar(1000) DEFAULT NULL,
  `tb2_colunm23` varchar(1000) DEFAULT NULL,
  `tb2_colunm24` varchar(1000) DEFAULT NULL,
  `tb2_colunm25` varchar(1000) DEFAULT NULL,
  `tb2_colunm26` varchar(1000) DEFAULT NULL,
  `tb2_colunm27` varchar(1000) DEFAULT NULL,
  `tb2_colunm28` varchar(1000) DEFAULT NULL,
  `tb2_colunm29` varchar(1000) DEFAULT NULL,
  `tb2_colunm30` varchar(1000) DEFAULT NULL,
  `tb2_colunm31` varchar(255) DEFAULT NULL,
  `tb2_colunm32` varchar(255) DEFAULT NULL,
  `tb2_colunm33` varchar(255) DEFAULT NULL,
  `tb2_colunm34` varchar(255) DEFAULT NULL,
  `tb2_colunm35` varchar(255) DEFAULT NULL,
  `tb2_colunm36` varchar(255) DEFAULT NULL,
  `tb2_colunm37` varchar(255) DEFAULT NULL,
  `tb2_colunm38` varchar(255) DEFAULT NULL,
  `tb2_colunm39` varchar(255) DEFAULT NULL,
  `tb2_colunm40` varchar(255) DEFAULT NULL,
  `tb2_colunm41` varchar(255) DEFAULT NULL,
  `tb2_colunm42` varchar(255) DEFAULT NULL,
  `tb2_colunm43` varchar(255) DEFAULT NULL,
  `tb2_colunm44` varchar(255) DEFAULT NULL,
  `tb2_colunm45` varchar(255) DEFAULT NULL,
  `tb2_colunm46` varchar(255) DEFAULT NULL,
  `tb2_colunm47` varchar(255) DEFAULT NULL,
  `tb2_colunm48` varchar(255) DEFAULT NULL,
  `tb2_colunm49` varchar(255) DEFAULT NULL,
  `tb2_colunm50` varchar(255) DEFAULT NULL,
  `tb2_colunm51` varchar(255) DEFAULT NULL,
  `tb2_colunm52` varchar(255) DEFAULT NULL,
  `tb2_colunm53` varchar(255) DEFAULT NULL,
  `tb2_colunm54` varchar(255) DEFAULT NULL,
  `tb2_colunm55` varchar(255) DEFAULT NULL,
  `tb2_colunm56` varchar(255) DEFAULT NULL,
  `tb2_colunm57` varchar(255) DEFAULT NULL,
  `tb2_colunm58` varchar(255) DEFAULT NULL,
  `tb2_colunm59` varchar(255) DEFAULT NULL,
  `tb2_colunm60` varchar(255) DEFAULT NULL,
  `tb2_colunm61` varchar(255) DEFAULT NULL,
  `tb2_colunm62` varchar(255) DEFAULT NULL,
  `tb2_colunm63` varchar(255) DEFAULT NULL,
  `tb2_colunm64` varchar(255) DEFAULT NULL,
  `tb2_colunm65` varchar(255) DEFAULT NULL,
  `tb2_colunm66` varchar(255) DEFAULT NULL,
  `tb2_colunm67` varchar(255) DEFAULT NULL,
  `tb2_colunm68` varchar(255) DEFAULT NULL,
  `tb2_colunm69` varchar(255) DEFAULT NULL,
  `tb2_colunm70` varchar(255) DEFAULT NULL,
  `tb2_colunm71` varchar(255) DEFAULT NULL,
  `tb2_colunm72` varchar(255) DEFAULT NULL,
  `tb2_colunm73` varchar(255) DEFAULT NULL,
  `tb2_colunm74` varchar(255) DEFAULT NULL,
  `tb2_colunm75` varchar(255) DEFAULT NULL,
  `tb2_colunm76` varchar(255) DEFAULT NULL,
  `tb2_colunm77` varchar(255) DEFAULT NULL,
  `tb2_colunm78` varchar(255) DEFAULT NULL,
  `tb2_colunm79` varchar(255) DEFAULT NULL,
  `tb2_colunm80` varchar(255) DEFAULT NULL,
  `tb2_colunm81` varchar(255) DEFAULT NULL,
  `tb2_colunm82` varchar(255) DEFAULT NULL,
  `tb2_colunm83` varchar(255) DEFAULT NULL,
  `tb2_colunm84` varchar(255) DEFAULT NULL,
  `tb2_colunm85` varchar(255) DEFAULT NULL,
  `tb2_colunm86` varchar(255) DEFAULT NULL,
  `tb2_colunm87` varchar(255) DEFAULT NULL,
  `tb2_colunm88` varchar(255) DEFAULT NULL,
  `tb2_colunm89` varchar(255) DEFAULT NULL,
  `tb2_colunm90` varchar(255) DEFAULT NULL,
  `tb2_colunm91` varchar(255) DEFAULT NULL,
  `tb2_colunm92` varchar(255) DEFAULT NULL,
  `tb2_colunm93` varchar(255) DEFAULT NULL,
  `tb2_colunm94` varchar(255) DEFAULT NULL,
  `tb2_colunm95` varchar(255) DEFAULT NULL,
  `tb2_colunm96` varchar(255) DEFAULT NULL,
  `tb2_colunm97` varchar(255) DEFAULT NULL,
  `tb2_colunm98` varchar(255) DEFAULT NULL,
  `tb2_colunm99` varchar(255) DEFAULT NULL,
  `tb2_colunm100` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`table2_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=79360 ;

-- --------------------------------------------------------

--
-- Table structure for table `table3`
--

CREATE TABLE IF NOT EXISTS `table3` (
  `table3_id` int(255) unsigned NOT NULL AUTO_INCREMENT,
  `tb3_colunm1` varchar(1000) DEFAULT NULL,
  `tb3_colunm2` varchar(1000) DEFAULT NULL,
  `tb3_colunm3` varchar(1000) DEFAULT NULL,
  `tb3_colunm4` varchar(1000) DEFAULT NULL,
  `tb3_colunm5` varchar(1000) DEFAULT NULL,
  `tb3_colunm6` varchar(1000) DEFAULT NULL,
  `tb3_colunm7` varchar(1000) DEFAULT NULL,
  `tb3_colunm8` varchar(1000) DEFAULT NULL,
  `tb3_colunm9` varchar(1000) DEFAULT NULL,
  `tb3_colunm10` varchar(1000) DEFAULT NULL,
  `tb3_colunm11` varchar(1000) DEFAULT NULL,
  `tb3_colunm12` varchar(1000) DEFAULT NULL,
  `tb3_colunm13` varchar(1000) DEFAULT NULL,
  `tb3_colunm14` varchar(1000) DEFAULT NULL,
  `tb3_colunm15` varchar(1000) DEFAULT NULL,
  `tb3_colunm16` varchar(1000) DEFAULT NULL,
  `tb3_colunm17` varchar(1000) DEFAULT NULL,
  `tb3_colunm18` varchar(1000) DEFAULT NULL,
  `tb3_colunm19` varchar(1000) DEFAULT NULL,
  `tb3_colunm20` varchar(1000) DEFAULT NULL,
  `tb3_colunm21` varchar(1000) DEFAULT NULL,
  `tb3_colunm22` varchar(1000) DEFAULT NULL,
  `tb3_colunm23` varchar(1000) DEFAULT NULL,
  `tb3_colunm24` varchar(1000) DEFAULT NULL,
  `tb3_colunm25` varchar(1000) DEFAULT NULL,
  `tb3_colunm26` varchar(1000) DEFAULT NULL,
  `tb3_colunm27` varchar(1000) DEFAULT NULL,
  `tb3_colunm28` varchar(1000) DEFAULT NULL,
  `tb3_colunm29` varchar(1000) DEFAULT NULL,
  `tb3_colunm30` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`table3_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `table4`
--

CREATE TABLE IF NOT EXISTS `table4` (
  `table4_id` int(255) unsigned NOT NULL AUTO_INCREMENT,
  `tb4_colunm1` varchar(1000) DEFAULT NULL,
  `tb4_colunm2` varchar(1000) DEFAULT NULL,
  `tb4_colunm3` varchar(1000) DEFAULT NULL,
  `tb4_colunm4` varchar(1000) DEFAULT NULL,
  `tb4_colunm5` varchar(1000) DEFAULT NULL,
  `tb4_colunm6` varchar(1000) DEFAULT NULL,
  `tb4_colunm7` varchar(1000) DEFAULT NULL,
  `tb4_colunm8` varchar(1000) DEFAULT NULL,
  `tb4_colunm9` varchar(1000) DEFAULT NULL,
  `tb4_colunm10` varchar(1000) DEFAULT NULL,
  `tb4_colunm11` varchar(1000) DEFAULT NULL,
  `tb4_colunm12` varchar(1000) DEFAULT NULL,
  `tb4_colunm13` varchar(1000) DEFAULT NULL,
  `tb4_colunm14` varchar(1000) DEFAULT NULL,
  `tb4_colunm15` varchar(1000) DEFAULT NULL,
  `tb4_colunm16` varchar(1000) DEFAULT NULL,
  `tb4_colunm17` varchar(1000) DEFAULT NULL,
  `tb4_colunm18` varchar(1000) DEFAULT NULL,
  `tb4_colunm19` varchar(1000) DEFAULT NULL,
  `tb4_colunm20` varchar(1000) DEFAULT NULL,
  `tb4_colunm21` varchar(1000) DEFAULT NULL,
  `tb4_colunm22` varchar(1000) DEFAULT NULL,
  `tb4_colunm23` varchar(1000) DEFAULT NULL,
  `tb4_colunm24` varchar(1000) DEFAULT NULL,
  `tb4_colunm25` varchar(1000) DEFAULT NULL,
  `tb4_colunm26` varchar(1000) DEFAULT NULL,
  `tb4_colunm27` varchar(1000) DEFAULT NULL,
  `tb4_colunm28` varchar(1000) DEFAULT NULL,
  `tb4_colunm29` varchar(1000) DEFAULT NULL,
  `tb4_colunm30` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`table4_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `table5`
--

CREATE TABLE IF NOT EXISTS `table5` (
  `table5_id` int(255) unsigned NOT NULL AUTO_INCREMENT,
  `tb5_colunm1` varchar(1000) DEFAULT NULL,
  `tb5_colunm2` varchar(1000) DEFAULT NULL,
  `tb5_colunm3` varchar(1000) DEFAULT NULL,
  `tb5_colunm4` varchar(1000) DEFAULT NULL,
  `tb5_colunm5` varchar(1000) DEFAULT NULL,
  `tb5_colunm6` varchar(1000) DEFAULT NULL,
  `tb5_colunm7` varchar(1000) DEFAULT NULL,
  `tb5_colunm8` varchar(1000) DEFAULT NULL,
  `tb5_colunm9` varchar(1000) DEFAULT NULL,
  `tb5_colunm10` varchar(1000) DEFAULT NULL,
  `tb5_colunm11` varchar(1000) DEFAULT NULL,
  `tb5_colunm12` varchar(1000) DEFAULT NULL,
  `tb5_colunm13` varchar(1000) DEFAULT NULL,
  `tb5_colunm14` varchar(1000) DEFAULT NULL,
  `tb5_colunm15` varchar(1000) DEFAULT NULL,
  `tb5_colunm16` varchar(1000) DEFAULT NULL,
  `tb5_colunm17` varchar(1000) DEFAULT NULL,
  `tb5_colunm18` varchar(1000) DEFAULT NULL,
  `tb5_colunm19` varchar(1000) DEFAULT NULL,
  `tb5_colunm20` varchar(1000) DEFAULT NULL,
  `tb5_colunm21` varchar(1000) DEFAULT NULL,
  `tb5_colunm22` varchar(1000) DEFAULT NULL,
  `tb5_colunm23` varchar(1000) DEFAULT NULL,
  `tb5_colunm24` varchar(1000) DEFAULT NULL,
  `tb5_colunm25` varchar(1000) DEFAULT NULL,
  `tb5_colunm26` varchar(1000) DEFAULT NULL,
  `tb5_colunm27` varchar(1000) DEFAULT NULL,
  `tb5_colunm28` varchar(1000) DEFAULT NULL,
  `tb5_colunm29` varchar(1000) DEFAULT NULL,
  `tb5_colunm30` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`table5_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users_tb`
--

CREATE TABLE IF NOT EXISTS `users_tb` (
  `user_id` int(255) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(1000) DEFAULT NULL,
  `password` varchar(1000) DEFAULT NULL,
  `email` varchar(1000) DEFAULT NULL,
  `group_id` varchar(1000) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `middlename` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `birthdate` varchar(255) DEFAULT NULL,
  `contactnumber` varchar(255) DEFAULT NULL,
  `civilstatus` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `division` varchar(255) DEFAULT NULL,
  `details` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=61 ;
