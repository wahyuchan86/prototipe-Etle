-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2023 at 11:02 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `etle`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `namalengkap` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `namalengkap`, `username`, `password`, `email`, `level`) VALUES
(1, 'Chandra Wahyu', 'channw', 'kkk123', 'ans@gmail.com', 'user'),
(2, 'admin etle', 'admin', 'admin00', 'admin.etle@gmail.com', 'admin'),
(3, 'chandra wahyu', 'wahyuchan', '1010', '1@gmail.com', 'user'),
(4, 'el123', 'elaja', 'masukweb', '123@gmail.com', 'user'),
(5, 'chandra wahyu', 'chandra', '12345', 'ans@gmail.com', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `formulir`
--

CREATE TABLE `formulir` (
  `id` int(10) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jeniskelamin` varchar(50) NOT NULL,
  `nopol` varchar(50) NOT NULL,
  `jeniskendaraan` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `nosim` varchar(50) NOT NULL,
  `nohp` varchar(50) NOT NULL,
  `denda` varchar(10) NOT NULL,
  `bukti` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `formulir`
--

INSERT INTO `formulir` (`id`, `kode`, `nama`, `jeniskelamin`, `nopol`, `jeniskendaraan`, `alamat`, `pekerjaan`, `nosim`, `nohp`, `denda`, `bukti`) VALUES
(10, '', 'CHANDRA WAHYU KUSUMA', 'Laki - Laki', 'AA1244', 'Bus', 'kjaks', 'klklk', 'm02291', '090921', '', ''),
(11, '', 'Gunawan Adi', 'Perempuan', 'AD1003', 'Sepeda Motor', 'jkjk', 'klklk', 'n00012', '090921', '50000', ''),
(12, '', 'CHANDRA WAHYU KUSUMA', 'Laki - Laki', 'B0019', 'Bus', 'jkjk', 'klklk', 'n00012', '090921', '50000', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `formulir`
--
ALTER TABLE `formulir`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `formulir`
--
ALTER TABLE `formulir`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
