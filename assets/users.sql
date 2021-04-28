-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2021 at 12:28 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mysql`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'isiraj', '$2y$10$VSFP8aSoDGMq9H8rFKIm1OEYj.2kcxxnlcD9wcisJAufBkNvJnODW', '2021-04-28 13:43:44'),
(2, 'Asad', '$2y$10$tqgBD1MGE.eQ7.mUGez4buEEZb0ZBIDTn9gZfred7HfnIHW4VVsTq', '2021-04-28 14:19:20'),
(3, 'siraj1', '$2y$10$YQe.b5oeiKlk.KzPO8/rfeIVkeTUNrYdiDV4Wpf0vPxysgD/rNJ6C', '2021-04-28 14:34:23'),
(4, 'Anns', '$2y$10$5u26qjmHn2DRIC6nn1miwuic5Cq4gbb4i0HXkk7EdhQiBBle0/m9.', '2021-04-28 16:23:22'),
(5, 'Asad Khalid', '$2y$10$EvLDceK1ambroh86brXkjum6iixDR.lNKd/PWR30qpi21dgsP4wLO', '2021-04-29 01:40:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
