-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2021 at 11:18 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `notes_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `notes_gasta`
--

CREATE TABLE `notes_gasta` (
  `id` bigint(20) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `description` text NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime(6) NOT NULL,
  `updated_at` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notes_gasta`
--

INSERT INTO `notes_gasta` (`id`, `name`, `description`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(25, '112', 'asdasd', 1, 1, '2021-01-24 09:46:51.000000', '0000-00-00 00:00:00.000000'),
(29, '2asdas', 'asdasd', 2, 1, '2021-01-24 09:52:42.000000', '0000-00-00 00:00:00.000000'),
(30, '212', 'asd', 2, 1, '2021-01-24 09:53:10.000000', '0000-00-00 00:00:00.000000'),
(32, '1s', 'asd', 1, 1, '2021-01-24 10:08:44.000000', '0000-00-00 00:00:00.000000'),
(33, '13', 'asdfas', 2, 1, '2021-01-24 10:12:53.000000', '0000-00-00 00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `user_gasta`
--

CREATE TABLE `user_gasta` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_gasta`
--

INSERT INTO `user_gasta` (`id`, `fullname`, `username`, `password`) VALUES
(1, 'Mc Reagan Gasta', 'mckyboiii', '$2y$10$lTva6.fN58DFHgBhxWtF2esxSb4R9C/VXOMYiYxw1S/4s0wqXaUyC'),
(2, 'mcmc', 'mcmc', '$2y$10$N5PmKalvPQo8RoYlVQkAtuT5htGuGB7uC3wY9Pm4CMiPx1DGFReWG'),
(3, 'kobee', 'kobe', '$2y$10$vXS.utXS0mZTmU6U389knO1UhV9f6rzt/Vp8M3wrcOpYLEVQlGeCe'),
(4, 'michael jordan', 'mj', '$2y$10$Z8XE45GxfUoJufFINMjRgetj1BDRvRB0V5w9ougoih0zqaR/ZWREy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notes_gasta`
--
ALTER TABLE `notes_gasta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_gasta`
--
ALTER TABLE `user_gasta`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notes_gasta`
--
ALTER TABLE `notes_gasta`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `user_gasta`
--
ALTER TABLE `user_gasta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
