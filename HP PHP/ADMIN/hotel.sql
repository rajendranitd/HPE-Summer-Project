-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 15, 2017 at 07:10 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hotel`
--
CREATE DATABASE IF NOT EXISTS `hotel` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `hotel`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'rahul', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `hotel_detail`
--

CREATE TABLE IF NOT EXISTS `hotel_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hotelcode` varchar(30) NOT NULL,
  `hotelname` varchar(100) NOT NULL,
  `hotellocation` varchar(100) NOT NULL,
  `i_name` varchar(200) NOT NULL,
  `i_path` varchar(100) NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `hotel_detail`
--

INSERT INTO `hotel_detail` (`id`, `hotelcode`, `hotelname`, `hotellocation`, `i_name`, `i_path`, `creationDate`) VALUES
(5, '4', 'Oberoi', 'Mumbai', 'Hydrangeas.jpg', 'images/_Hydrangeas.jpg', '2017-04-15 18:55:02'),
(6, '12', 'Alpha', 'Dubai', 'Jellyfish.jpg', 'images/_Jellyfish.jpg', '2017-04-15 19:03:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
