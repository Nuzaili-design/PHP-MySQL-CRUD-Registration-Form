-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2024 at 08:47 PM
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
-- Database: `form`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `gender` enum('male','female','other') NOT NULL,
  `email` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `dob`, `gender`, `email`, `created_at`) VALUES
(18, 'Abdulaziz Ahmed', 'Alnuzaili', '1997-02-03', 'male', 'azoz3211azoz@gmail.com', '2024-12-17 17:07:47'),
(19, 'Mohammed Ahmed', 'Alnuzaili', '2002-08-31', 'male', 'Mohammed@gmail.com', '2024-12-17 17:08:44'),
(20, 'Mohammed fateh', 'Qershi', '2001-11-11', 'male', 'Qershi@gmail.com', '2024-12-17 17:09:33'),
(21, 'Monir Ahmed ', 'Farouq', '1996-07-16', 'male', 'Monir@gmail.com', '2024-12-17 17:10:58'),
(22, 'Hadi Ahmed', 'Albasara', '2000-02-16', 'male', 'Basara@gmail.com', '2024-12-17 17:11:53'),
(24, 'Ahmed Fawaz', 'British', '2003-05-05', 'male', 'British@gmail.com', '2024-12-17 17:13:28'),
(25, 'Yassen Waled', 'Noaman', '1999-06-22', 'male', 'Yassen@gmail.com', '2024-12-17 17:14:17'),
(26, 'Nizar Ahmed', 'Sohki', '1999-09-20', 'male', 'Nizar@gmail.com', '2024-12-17 17:15:04'),
(27, 'Abdulrahman Nasser', 'Tatari', '2005-02-09', 'male', 'Tatari@gmail.com', '2024-12-17 17:15:51'),
(28, 'Rati Narof', 'Mustafa', '1998-01-01', 'male', 'Rati@gmail.com', '2024-12-17 17:17:21');

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
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
