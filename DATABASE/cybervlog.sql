-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2024 at 01:41 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cybervlog`
--

-- --------------------------------------------------------

--
-- Table structure for table `rf_rank`
--

CREATE TABLE `rf_rank` (
  `rank_id` int(10) NOT NULL,
  `code` varchar(50) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rf_signatory`
--

CREATE TABLE `rf_signatory` (
  `sig_id` int(10) NOT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `middlename` varchar(50) DEFAULT NULL,
  `suffix` varchar(50) DEFAULT NULL,
  `rank_id` int(10) DEFAULT NULL,
  `position` varchar(50) DEFAULT NULL,
  `signature` blob DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rf_unit`
--

CREATE TABLE `rf_unit` (
  `unit_id` int(10) NOT NULL,
  `code` varchar(50) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_regular`
--

CREATE TABLE `tb_regular` (
  `reg_id` int(10) NOT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `designation` varchar(50) DEFAULT NULL,
  `position` varchar(50) DEFAULT NULL,
  `rank` varchar(50) DEFAULT NULL,
  `unit` varchar(50) DEFAULT NULL,
  `organization` varchar(50) NOT NULL,
  `contact_no` bigint(15) DEFAULT NULL,
  `purpose_visit` varchar(255) DEFAULT NULL,
  `time_in` time DEFAULT NULL,
  `time_out` time DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `user_id` int(10) NOT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `serial_no` varchar(50) DEFAULT NULL,
  `rank_id` int(10) DEFAULT NULL,
  `unit_id` int(10) DEFAULT NULL,
  `user_role` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`user_id`, `fullname`, `serial_no`, `rank_id`, `unit_id`, `user_role`, `username`, `password`, `created_at`, `updated_at`, `deleted_at`) VALUES
(0, 'John Doe', '123456789', 1, 1, 'Admin', 'johndoe', 'password123', '2024-06-03 22:33:15', '2024-06-03 22:33:15', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_vip`
--

CREATE TABLE `tb_vip` (
  `vip_id` int(10) NOT NULL,
  `fullname` varchar(50) DEFAULT NULL,
  `designation` varchar(50) DEFAULT NULL,
  `position` varchar(50) NOT NULL,
  `rank` varchar(50) DEFAULT NULL,
  `unit` varchar(50) DEFAULT NULL,
  `organization` varchar(50) NOT NULL,
  `contact_no` bigint(15) DEFAULT NULL,
  `purpose_visit` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `signature` longblob DEFAULT NULL,
  `images` longblob DEFAULT NULL,
  `time_in` time DEFAULT NULL,
  `time_out` time DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rf_rank`
--
ALTER TABLE `rf_rank`
  ADD PRIMARY KEY (`rank_id`);

--
-- Indexes for table `rf_signatory`
--
ALTER TABLE `rf_signatory`
  ADD PRIMARY KEY (`sig_id`);

--
-- Indexes for table `rf_unit`
--
ALTER TABLE `rf_unit`
  ADD PRIMARY KEY (`unit_id`);

--
-- Indexes for table `tb_regular`
--
ALTER TABLE `tb_regular`
  ADD PRIMARY KEY (`reg_id`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tb_vip`
--
ALTER TABLE `tb_vip`
  ADD PRIMARY KEY (`vip_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_regular`
--
ALTER TABLE `tb_regular`
  MODIFY `reg_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `tb_vip`
--
ALTER TABLE `tb_vip`
  MODIFY `vip_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
