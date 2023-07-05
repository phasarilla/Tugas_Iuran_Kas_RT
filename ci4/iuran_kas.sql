-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2022 at 03:54 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iuran_kas`
--

-- --------------------------------------------------------

--
-- Table structure for table `iuran`
--

CREATE TABLE `iuran` (
  `id` int(11) NOT NULL,
  `keterangan` tinytext DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `bulan` int(2) DEFAULT NULL,
  `tahun` year(4) DEFAULT NULL,
  `jumlah` int(12) DEFAULT NULL,
  `warga_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `iuran`
--

INSERT INTO `iuran` (`id`, `keterangan`, `tanggal`, `bulan`, `tahun`, `jumlah`, `warga_id`) VALUES
(1, 'LUNAS', '2022-07-01', 7, 2022, 90000, 1),
(2, 'KREDIT', '2022-07-08', 7, 2022, 50000, 2),
(3, 'LUNAS', '2022-07-01', 7, 2022, 90000, 3),
(5, 'LUNAS', '2022-06-26', 6, 2022, 90000, 5),
(6, 'KREDIT', '2022-06-29', 6, 2022, 30000, 6);

-- --------------------------------------------------------

--
-- Table structure for table `warga`
--

CREATE TABLE `warga` (
  `id` int(11) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `kelamin` enum('L','P') DEFAULT NULL,
  `alamat` tinytext DEFAULT NULL,
  `no_rumah` varchar(10) DEFAULT NULL,
  `status` enum('Aktif','Tidak Aktif') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `warga`
--

INSERT INTO `warga` (`id`, `nik`, `nama`, `kelamin`, `alamat`, `no_rumah`, `status`) VALUES
(1, '312010191', 'GUNAWAN', 'L', 'Cikarang,Bekasi', 'F8 No.12A', 'Aktif'),
(2, '312010192', 'PRASETYO', 'L', 'Cikarang,Bekasi', 'BLOK F-12', 'Aktif'),
(3, '312010193', 'SUKIRMAN', 'L', 'Cikarang,Bekasi', 'BLOK F-14', 'Aktif'),
(4, '312010194', 'ANDI SETYADI', 'L', 'Cikarang,Bekasi', 'BLOK F-15', 'Aktif'),
(5, '312010195', 'WIJI SUSANTO', 'L', 'Cikarang,Bekasi', 'BLOK F-16', 'Aktif'),
(6, '312010196', 'GUGUN', 'L', 'Cikarang,Bekasi', 'BLOK F-17', 'Tidak Aktif'),
(7, '312010197', 'SUCI', 'P', 'Cikarang,Bekasi', 'BLOK F-17', 'Tidak Aktif'),
(8, '312010198', 'UDIN', 'L', 'Cikarang,Bekasi', 'BLOK F-18', 'Aktif'),
(9, '312010199', 'ERVAN', 'L', 'Cikarang,Bekasi', 'BLOK F-19', 'Aktif'),
(10, '312010200', 'PONCO', 'L', 'Cikarang,Bekasi', 'BLOK F-20', 'Aktif'),
(11, '312010201', 'JUNAIDI SALAD', 'L', 'Cikarang,Bekasi', 'BLOK F-21', 'Tidak Aktif'),
(12, '312010202', 'FIRA', 'P', 'Cikarang,Bekasi', 'BLOK F-22', 'Tidak Aktif'),
(13, '312010203', 'MINDORIS', 'L', 'Cikarang,Bekasi', 'BLOK F-23', 'Aktif'),
(14, '312010204', 'SAMSUL', 'L', 'Cikarang,Bekasi', 'BLOK F-24', 'Aktif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `iuran`
--
ALTER TABLE `iuran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_warga_nama_dx` (`id`) USING BTREE,
  ADD KEY `fk_iuran_warga_idx` (`warga_id`);

--
-- Indexes for table `warga`
--
ALTER TABLE `warga`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `nik_UNIQUE` (`nik`) USING BTREE,
  ADD KEY `nama` (`nama`) USING BTREE;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `iuran`
--
ALTER TABLE `iuran`
  ADD CONSTRAINT `fk_iuran_warga_idx` FOREIGN KEY (`warga_id`) REFERENCES `warga` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
