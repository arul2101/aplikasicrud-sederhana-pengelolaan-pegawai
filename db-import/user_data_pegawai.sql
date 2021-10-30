-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2021 at 08:31 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `latihan`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_data_pegawai`
--

CREATE TABLE `user_data_pegawai` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_data_pegawai`
--

INSERT INTO `user_data_pegawai` (`id`, `username`, `password`) VALUES
(5, 'arul2101', '$2y$10$Jlz8nV8GLvsjSmiL6YJwSeAWdxR/mU5qYIatJJ2PxfUKAAtbT5F/y'),
(6, 'admin', '$2y$10$zMBCJtic.n5bBwaJVw06p.rcdXcDRP7TRjhfsommMt3WLGCZpFQiK'),
(7, 'anwar', '$2y$10$CsXcBMAvv0IL/h3kynfkiuCaWQBbY0bC6R3Dp4o.Ir0G7Nzv4OdZu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_data_pegawai`
--
ALTER TABLE `user_data_pegawai`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_data_pegawai`
--
ALTER TABLE `user_data_pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
