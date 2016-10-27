-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 27, 2016 at 03:41 PM
-- Server version: 5.6.33-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `quanlyvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `calendar`
--

CREATE TABLE IF NOT EXISTS `calendar` (
  `calendarid` int(4) NOT NULL AUTO_INCREMENT,
  `calendardate` datetime NOT NULL,
  `workingstart` time NOT NULL,
  `workingfinish` time NOT NULL,
  `calendartype` varchar(50) NOT NULL,
  `calendarstatus` varchar(50) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `useroffice` varchar(50) NOT NULL,
  `userteam` varchar(50) NOT NULL,
  `userlevel` int(4) NOT NULL,
  `days` double NOT NULL,
  `ampm` varchar(50) NOT NULL,
  `note` varchar(255) NOT NULL,
  `notestatus` varchar(50) NOT NULL,
  `ip` varchar(50) NOT NULL,
  `approverid` varchar(50) NOT NULL,
  `creatorid` varchar(50) NOT NULL,
  `updaterid` varchar(50) NOT NULL,
  `insertdate` datetime NOT NULL,
  `updatedate` datetime NOT NULL,
  PRIMARY KEY (`calendarid`),
  KEY `index_calendardate` (`calendardate`) USING BTREE,
  KEY `index_userid` (`userid`) USING BTREE,
  KEY `index_useroffice` (`useroffice`) USING BTREE,
  KEY `index_calendartype` (`calendartype`) USING BTREE
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=305181 ;

--
-- Dumping data for table `calendar`
--

INSERT INTO `calendar` (`calendarid`, `calendardate`, `workingstart`, `workingfinish`, `calendartype`, `calendarstatus`, `userid`, `useroffice`, `userteam`, `userlevel`, `days`, `ampm`, `note`, `notestatus`, `ip`, `approverid`, `creatorid`, `updaterid`, `insertdate`, `updatedate`) VALUES
(305180, '2016-10-27 00:00:00', '00:00:00', '00:00:00', 'ANNUAL_LEAVE', 'APPROVED', 'Hugo', 'VN', 'RISDVN', 4, 0.5, 'PM', 'Personal issue', 'NEW_REQUEST', '118.69.244.74', 'Richardho', 'Hugo', 'Richardho', '2016-04-27 08:52:19', '2016-04-27 09:29:03');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` varchar(250) DEFAULT NULL,
  `username` varchar(250) DEFAULT NULL,
  `email` varchar(250) NOT NULL,
  `pasword_salt` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `level` int(11) DEFAULT NULL,
  `updated` datetime NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `userid`, `username`, `email`, `pasword_salt`, `password`, `level`, `updated`, `created`) VALUES
(1, 'hugo', 'hugo', 'phamthehien291991@gmail.com', '77284a2e38e0182b2bf89d3dcde143ce', '5f80f0221b04fbad6a033a4b33a7b9e9', 0, '2016-10-24 00:00:00', '2016-10-24 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
