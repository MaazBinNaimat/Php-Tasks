-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2023 at 09:42 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `students`
--

-- --------------------------------------------------------

--
-- Table structure for table `marksheet`
--

CREATE TABLE `marksheet` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `english` int(11) NOT NULL,
  `urdu` int(11) NOT NULL,
  `physics` int(11) NOT NULL,
  `chemistry` int(11) NOT NULL,
  `maths` int(11) NOT NULL,
  `obtain` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `percentage` varchar(255) NOT NULL,
  `grade` varchar(233) NOT NULL,
  `remarks` varchar(233) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `marksheet`
--

INSERT INTO `marksheet` (`id`, `name`, `english`, `urdu`, `physics`, `chemistry`, `maths`, `obtain`, `total`, `percentage`, `grade`, `remarks`) VALUES
(2, 'riaz', 56, 65, 65, 45, 54, 285, 500, '57', 'D', 'Done'),
(3, 'Maaz Bin Naimat', 80, 90, 70, 60, 70, 370, 500, '74', 'B', 'Nice'),
(4, 'marks', 32, 45, 54, 54, 4, 189, 500, '37.8', 'E', 'Need Work Hard'),
(5, 'ahmad', 87, 89, 91, 78, 99, 444, 500, '88.8', 'A', 'Greate Job'),
(6, 'ahmad', 87, 89, 91, 78, 99, 444, 500, '88.8', 'A', 'Greate Job'),
(7, 'ahmad', 87, 89, 91, 78, 99, 444, 500, '88.8', 'A', 'Greate Job'),
(8, 'ahmad', 87, 89, 91, 78, 99, 444, 500, '88.8', 'A', 'Greate Job');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(29) NOT NULL,
  `course` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `phone`, `course`) VALUES
(1, 'riaz', 'mamomaaz@gmail.com', 5443232, 'cpism'),
(2, 'Maaz Bin Naimat', 'maazbinnaimat@gmail.com', 544323244, 'dism');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `marksheet`
--
ALTER TABLE `marksheet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `marksheet`
--
ALTER TABLE `marksheet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
