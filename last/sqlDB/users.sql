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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(40) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `number`) VALUES
(1, 'srujan', 'srujan@gmail.com', '916281603690', '12'),
(2, 'srujan', 'srujan@gmail.com', '123456', '12'),
(3, 'srujan', '6281603690@13', '123456', '12'),
(4, 'srujan', 'srujan@gmail.com', '12', '123456'),
(5, 'ram', 'srujanpanthula90@gmail.com', '', '6281603690'),
(6, 'srujan', 'srujanpanthula90@gmail.com', '12', '6281603690'),
(7, 'vasanth', 'panthulasrujan@gmail.com', '1Srujan@0144', '6281603690'),
(8, 'vasanth', 'panthulasrujan@gmail.com', 'srujan@123', '6281603690'),
(9, 'srujan', 'srujan@gmail.com', '123', '6281603690'),
(10, 'panthula srujan', 'srujanpanthula90@gmail.com', 'Srujan@0144', '6281603690'),
(11, 'hi', 'panthulasrujan@gmail.com', '12', '12345678'),
(12, 'ram', 'panthulasrujan@gmail.com', '12', '123'),
(13, 'venn', 'ramram@gmail.com', 'srujan@0144', '6281603690'),
(14, 'venn', 'ramram@gmail.com', 'srujan@0144', '6281603690'),
(15, 'ramanu', 'panthulasrujan@gmail.com', '123', '6281603690');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
