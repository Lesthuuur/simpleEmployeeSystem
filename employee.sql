-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Oct 24, 2024 at 02:57 PM
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
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `user_type`) VALUES
(1, 'admin', 'admin', '2024-10-24 05:00:09');

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
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `employee_number`, `first_name`, `surname`, `department`, `email`, `phone`, `username`, `password`, `date_created`, `date_updated`) VALUES
(1, 'EMP001', 'John', 'Doe', 'HR', 'johndoe@example.com', '1234567890', 'johndoe', 'password123', '2024-10-24 07:25:28', '2024-10-24 07:25:28'),
(2, 'EMP002', 'Jane', 'Smith', 'IT', 'janesmith@example.com', '0987654321', 'janesmith', 'password456', '2024-10-24 07:25:28', '2024-10-24 07:25:28'),
(3, 'EMP003', 'Alice', 'Johnson', 'Finance', 'alicejohnson@example.com', '1122334455', 'alicejohnson', 'password789', '2024-10-24 07:25:28', '2024-10-24 07:25:28'),
(4, 'EMP004', 'Bob', 'Williams', 'Marketing', 'bobwilliams@example.com', '2233445566', 'bobwilliams', 'passwordabc', '2024-10-24 07:25:28', '2024-10-24 07:25:28'),
(5, 'EMP005', 'Charlie', 'Brown', 'Sales', 'charliebrown@example.com', '3344556677', 'charliebrown', 'passworddef', '2024-10-24 07:25:28', '2024-10-24 07:25:28');

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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employee_number` (`employee_number`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
