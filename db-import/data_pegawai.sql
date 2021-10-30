-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2021 at 08:28 AM
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
-- Table structure for table `data_pegawai`
--

CREATE TABLE `data_pegawai` (
  `id` int(11) NOT NULL,
  `nama_pegawai` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `nik` char(8) NOT NULL,
  `tanggal_masuk` varchar(30) NOT NULL,
  `gaji` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_pegawai`
--

INSERT INTO `data_pegawai` (`id`, `nama_pegawai`, `jabatan`, `nik`, `tanggal_masuk`, `gaji`) VALUES
(2, 'Ismoyo', 'Data Entry', '31770023', '2021-01-08', 3000000),
(4, 'Egi Sulandri', 'Data Entry', '31770059', '2020-12-03', 3500000),
(5, 'Muhammad Yanuarullah Assidiq', 'Back End Developer', '31770001', '2021-03-16', 5000000),
(6, 'Adi Noviandika', 'Head System Engineer', '31770094', '2020-01-03', 6000000),
(7, 'Irfan', 'Data Entry', '31770126', '2021-02-02', 3000000),
(8, 'Robet', 'Data Entry', '31770526', '2021-03-15', 3000000),
(9, 'Rizal Saputra', 'Data Entry', '31770193', '2021-03-15', 3000000),
(10, 'Asri', 'Customer Service', '31770527', '2021-01-04', 3000000),
(12, 'Liana', 'Customer Service', '31770937', '2020-09-03', 3000000),
(14, 'Ferhad', 'Infrastruture Engineer', '31770979', '2019-02-05', 4000000),
(15, 'Aula', 'IT Support', '31771527', '2020-03-04', 3800000),
(16, 'Adit', 'IT Support', '31779827', '2021-01-06', 3800000),
(17, 'Muhammad Idris', 'Finance Controller', '31778927', '2012-01-03', 5800000),
(18, 'Syauqi', 'Account Executive', '31770009', '2016-07-23', 4500000),
(19, 'Anisah', 'Customer Service', '31770111', '2020-02-01', 3000000),
(20, 'Wulandari', 'Customer Service', '31770997', '2016-06-03', 3500000),
(21, 'Andhika Zulfikar', 'Head System Engineer', '31770377', '2017-01-05', 5000000),
(22, 'Mamat', 'Office Boy', '31767377', '2016-11-02', 3000000),
(23, 'Indriani', 'Receptionist', '32690377', '2015-07-03', 3800000),
(24, 'Dudung', 'Sortir', '31660523', '2017-11-08', 3000000),
(25, 'Ilyas Ramadhan', 'Sortir', '31570820', '2019-02-20', 3000000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_pegawai`
--
ALTER TABLE `data_pegawai`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_pegawai`
--
ALTER TABLE `data_pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
