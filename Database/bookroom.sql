-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 21, 2019 at 02:53 PM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookroom`
--

CREATE TABLE IF NOT EXISTS `bookroom` (
  `id` int(20) NOT NULL,
  `uname` varchar(10) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `rooms` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookroom`
--

INSERT INTO `bookroom` (`id`, `uname`, `checkin`, `checkout`, `rooms`) VALUES
(0, 'venkanna', '2018-10-16', '2018-10-24', 1),
(0, 'venkanna', '0000-00-00', '0000-00-00', 0),
(0, 'venkanna', '0000-00-00', '0000-00-00', 0),
(0, 'venkanna', '0000-00-00', '0000-00-00', 0),
(0, 'venkanna', '2018-10-03', '2018-10-04', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
