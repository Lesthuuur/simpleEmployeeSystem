-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Oct 25, 2024 at 12:35 PM
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
-- Database: `employee`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user_num` varchar(10) NOT NULL,
  `user_type` varchar(20) DEFAULT 'admin',
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user_num`, `user_type`, `username`, `password`, `date_created`, `date_updated`) VALUES
(1, 'EMP001', 'admin', 'admin1', '$2y$10$K30YQ58e.5nmXiu5.dGZI.KgxkXhHtxQmBjINRPnfiDXiSb2/Ryya', '2024-10-25 04:16:00', '2024-10-25 09:40:51'),
(2, 'EMP002', 'admin123', 'admin2a', '$2y$10$7hFnnsk7j6qLQJT7VQX1hu0at3q6eSX/QNymS2IuJ8RyFYsX1fVpq', '2024-10-25 04:16:00', '2024-10-25 10:11:49'),
(4, '', 'ADMIN', 'lesthuuur', '$2y$10$Wn5FzlJszJ3FjawnSdOql.C6OSiCqSatBeEYehX8lYCBlOW19SSiK', '2024-10-25 08:21:43', '2024-10-25 09:43:07'),
(5, '', 'ADMIN', 'lesthuuur', '$2y$10$s4FOjCJjHPfK1M.hQuwTNOZCI4wsbfLjyF6wtAJ4zlW6.5mCpp85G', '2024-10-25 09:54:02', '2024-10-25 09:55:40'),
(6, '', 'ADMIN', 'jahhh', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', '2024-10-25 09:56:48', '2024-10-25 09:56:48'),
(7, '', 'ADMIN', 'bossing', '$2y$10$gsfoowbzZvk.QBtssTRHi.WePAw2qPGaQO8b6/erYj57XTrHZDzWe', '2024-10-25 10:13:03', '2024-10-25 10:13:26'),
(8, '', 'ADMIN', 'lesthuuur', '$2y$10$nHm1.ptt.57pVDHI7k0wyuPBu.fF6SpSjbQzSxNPyW95oQg4FXJAK', '2024-10-25 10:15:54', '2024-10-25 10:16:05'),
(9, '', 'ADMIN', 'lesthuuur', '240be518fabd2724ddb6f04eeb1da5967448d7e831c08c8fa822809f74c720a9', '2024-10-25 10:19:13', '2024-10-25 10:19:53');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `employee_number` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `employee_number`, `first_name`, `surname`, `department`, `email`, `phone`, `date_created`, `date_updated`) VALUES
(7, 'EMP004', 'Bob', 'Williams', 'IT', 'bob.williams@example.com', '2233445566', '2024-10-25 04:35:27', '2024-10-25 04:35:27'),
(10, 'EMP007', 'Jessica', 'Wilson', 'Finance', 'jessica.wilson@example.com', '5566778899', '2024-10-25 04:35:27', '2024-10-25 04:35:27'),
(11, 'EMP008', 'David', 'Miller', 'Operations', 'david.miller@example.com', '09156398159', '2024-10-25 04:35:27', '2024-10-25 10:07:18'),
(12, 'EMP009', 'Sarah', 'Taylor', 'Marketing', 'sarah.taylor@example.com', '7788990011', '2024-10-25 04:35:27', '2024-10-25 04:35:27'),
(13, 'EMP010', 'Chris', 'Anderson', 'IT', 'chris.anderson@example.com', '8899001122', '2024-10-25 04:35:27', '2024-10-25 04:35:27'),
(14, 'EMP011', 'Laura', 'Thomas', 'Operations', 'laura.thomas@example.com', '09152421411', '2024-10-25 04:35:27', '2024-10-25 10:07:32'),
(15, '', 'Lesther', 'Martinez', 'IT', 'ljgmartinez@yahoo.com', '09156398159', '2024-10-25 06:03:17', '2024-10-25 06:03:17'),
(16, 'EMP759', 'Joshua', 'Esguerra', 'ACCOUNTING', 'martinezlestherjohn23@gmail.com', '09156398159', '2024-10-25 06:05:21', '2024-10-25 06:05:21'),
(17, 'EMP555', 'Lesther John Greco', 'MARTINEZ', 'ACCOUNTING', 'alexis@gmail.com', '09156398159', '2024-10-25 09:58:02', '2024-10-25 09:58:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
