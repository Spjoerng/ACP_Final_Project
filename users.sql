-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2024 at 05:11 AM
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
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `reset_token` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `name`, `email`, `reset_token`) VALUES
(1, 'admin', 'adminpass', 'admin', 'ryanherrison19@gmail.com', NULL),
(2, '25-00001', 'password', 'Michael Reeves', '25-00001@gmail.com', NULL),
(3, '24-00001', 'password', 'Pokimane', '24-00001@gmail.com', NULL),
(4, '23-30849', 'password', 'Qhris Lora Otalla', '23-30849@gmail.com', NULL),
(5, '22-00001', 'password', 'Ludwig', '22-00001@gmail.com', NULL),
(6, '21-00001', 'password', 'Lilypichu', '21-00001@gmail.com', NULL),
(7, '21-02023', 'password', 'Pricess Jordan', '21-020232@gmail.com', NULL),
(8, '22-02023', 'password', 'Kris Jenner', '22-020232@gmail.com', NULL),
(9, '23-02023', 'password', 'Steven Espaldon', '23-020232@gmail.com', NULL),
(10, '24-02023', 'password', 'Pricess Anne', '24-020232@gmail.com', NULL);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
