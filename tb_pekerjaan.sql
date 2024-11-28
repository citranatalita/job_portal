-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2024 at 02:56 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job_portall`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_pekerjaan`
--

CREATE TABLE `tb_pekerjaan` (
  `pekerjaan_id` int(11) NOT NULL,
  `nama_pekerjaan` varchar(100) NOT NULL,
  `nama_perusahaan` varchar(60) DEFAULT NULL,
  `alamat` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pekerjaan`
--

INSERT INTO `tb_pekerjaan` (`pekerjaan_id`, `nama_pekerjaan`, `nama_perusahaan`, `alamat`) VALUES
(7, 'Photographer', 'The Daily Bugle', 'jln asyaafrika');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_pekerjaan`
--
ALTER TABLE `tb_pekerjaan`
  ADD PRIMARY KEY (`pekerjaan_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_pekerjaan`
--
ALTER TABLE `tb_pekerjaan`
  MODIFY `pekerjaan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
