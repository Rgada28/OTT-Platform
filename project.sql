-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2021 at 07:26 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` bigint(10) NOT NULL,
  `choice` varchar(20) NOT NULL,
  `amount` int(11) DEFAULT NULL,
  `day` int(20) NOT NULL,
  `month` varchar(50) NOT NULL,
  `year` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `name`, `email`, `contact`, `choice`, `amount`, `day`, `month`, `year`) VALUES
(10, 'sachin', 's@gmail.com', 7896541256, 'Debit', 1200, 1, 'January', 2001),
(11, 'raj', 'r@gmail.com', 7350352290, 'Credit', 400, 1, 'January', 2001),
(12, 'sam', 'sa@gmail.com', 6359874521, 'Debit', 400, 1, 'Februray', 2001),
(13, 'ram', 'ra@gmail.com', 8789456456, 'Debit', 200, 1, 'April', 2001),
(14, 'tanmay', 't@gmail.com', 9874563215, 'Debit', 400, 1, 'January', 2002);

-- --------------------------------------------------------

--
-- Table structure for table `students_login`
--

CREATE TABLE `students_login` (
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `age` int(10) NOT NULL,
  `country` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students_login`
--

INSERT INTO `students_login` (`username`, `email`, `password`, `age`, `country`) VALUES
('sachin', 's@gmail.com', 's', 22, 'india'),
('raj', 'r@gmail.com', 'r', 23, 'india'),
('sam', 'sa@gmail', 'sa', 22, 'australia');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
