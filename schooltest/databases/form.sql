-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 25, 2024 at 08:50 PM
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
-- Database: `form`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `date` datetime NOT NULL,
  `ip_address` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `subject`, `message`, `date`, `ip_address`) VALUES
(1, 'Phone Htut Khaung', 'phonehtutkhaung.xom@gmail.com', 'bar nyar', 'hi', '0000-00-00 00:00:00', '::1'),
(2, 'Phone Htut Khaung', 'phonehtutkhaung.xom@gmail.com', 'bar nyar', 'hi', '2024-02-25 17:46:56', '::1'),
(3, 'Phone Htut Khaung', 'phonehtutkhaung.xom@gmail.com', 'bar nyar', 'hi', '2024-02-25 17:56:41', '::1'),
(4, 'Phone Htut Khaung', 'phonehtutkhaung.xom@gmail.com', 'bar nyar', 'hi', '2024-02-25 17:57:20', '::1'),
(5, 'Phone Htut Khaung', 'phonehtutkhaung.xom@gmail.com', 'bar nyar', 'hi', '2024-02-25 17:57:22', '::1'),
(6, 'Phone Htut Khaung', 'phonehtutkhaung.xom@gmail.com', 'bar nyar', 'hi', '2024-02-25 18:00:12', '::1'),
(7, 'Phone Htut Khaung', 'phonehtutkhaung.xom@gmail.com', 'bar nyar', 'hi', '2024-02-25 18:01:42', '::1'),
(8, 'Phone Htut Khaung', 'phonehtutkhaung.xom@gmail.com', 'bar nyar', 'hi', '2024-02-25 18:01:54', '::1'),
(9, 'Phone Htut Khaung', 'phonehtutkhaung.xom@gmail.com', 'bar nyar', 'hi', '2024-02-25 18:02:07', '::1'),
(10, 'Phone Htut Khaung', 'phonehtutkhaung.xom@gmail.com', 'bar nyar', 'hi', '2024-02-25 18:03:58', '::1'),
(11, 'Phone Htut Khaung', 'phonehtutkhaung.xom@gmail.com', 'bar nyar', 'hi', '2024-02-25 18:06:28', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `display_name` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` enum('founder','Page Admin','Developer') NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `first_name`, `last_name`, `display_name`, `email`, `password`, `role`, `date_added`) VALUES
(1, 'Phone Htut', 'Khaung', 'Phone Htut Khaung', 'phonehtutkhaung@technologylearn.cloud', '943e2ab2d6d1e2fcc71026276d8356c1', 'founder', '2024-02-25 20:43:59');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `birth_date` date NOT NULL,
  `age` int(11) NOT NULL,
  `gender` enum('Male','Female','Other') NOT NULL,
  `os_version` varchar(50) NOT NULL,
  `start_date` datetime NOT NULL,
  `ip_address` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
