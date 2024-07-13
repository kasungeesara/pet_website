-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2023 at 08:08 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pet`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `subject`, `email`, `message`) VALUES
(8, 'geesara', 'seen', 'fightshadow38@gmail.com', 'tttttttt');

-- --------------------------------------------------------

--
-- Table structure for table `feedtb`
--

CREATE TABLE `feedtb` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `feedback` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `logtb`
--

CREATE TABLE `logtb` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logtb`
--

INSERT INTO `logtb` (`id`, `email`, `password`) VALUES
(1, 'kasun@gmail.com', '1234'),
(2, 'fightshadow38@gmail.com', 'ddddddddd'),
(3, 'kasunkarunanayaka2002@gmail.com', 'hhhhhhhhhhhh');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`id`, `fname`, `lname`, `city`, `email`, `password`) VALUES
(1, 'kasun', 'geesara', 'galle', 'kasunkarunanayaka2002@gmail.com', 'html'),
(2, 'kasun', 'karunanayaka', 'ambalangoda', 'kasunkarunanayaka2002@gmail.com', '12345'),
(3, 'kasun', 'karunanayaka', 'ambalangoda', 'kasunkarunanayaka2002@gmail.com', '456'),
(4, 'nANKJ', 'sbbs', 'galle', 'kasunkarunanayaka239@gmail.com', 'saJBSJjskj'),
(5, 'ddddddddd', 'wwwwwwwwwwww', '333333333', 'a@d.b', '1234'),
(6, '', '', '', '', ''),
(7, 'kasun', 'karunanayaka', 'galle', 'kasun@gmail.com', 'ddddd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedtb`
--
ALTER TABLE `feedtb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logtb`
--
ALTER TABLE `logtb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `feedtb`
--
ALTER TABLE `feedtb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `logtb`
--
ALTER TABLE `logtb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reg`
--
ALTER TABLE `reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
