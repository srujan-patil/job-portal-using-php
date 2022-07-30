-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 09, 2022 at 06:15 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobs`
--

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `cname` varchar(255) NOT NULL,
  `pos` varchar(255) NOT NULL,
  `Jdesc` varchar(255) NOT NULL,
  `skills` varchar(255) NOT NULL,
  `CTC` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`cname`, `pos`, `Jdesc`, `skills`, `CTC`) VALUES
('sry', '234', '', 'df', 'sf'),
('sry', '23', '', '13', '23'),
('ssf', 'af', '', 'asf', 'assf'),
('google', 'software developer', '', 'nt', '15LPA'),
('tcs', 'junior dev', '', 'c++,php,html', '23  LPA'),
('wipro', 'WEBDEV', '', 'php,html,css,js,python', '50LPA'),
('ss', 'round ', '', 'php,html,css,js,python', '23LPA'),
('sunny tech', 'content creator', '', 'passion', '9LPA'),
('ramanuja techs', 'waiter', '', 'no', '80LPA'),
('tea', 'tea maker', '', 'making of assam tea', '9LPA');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
