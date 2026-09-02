-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2026 at 03:08 AM
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
-- Database: `laundry`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(20) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `hak_akses` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `hak_akses`) VALUES
(1, 'admin', '123', 1),
(2, 'admin1', '202cb962ac59075b964b07152d234b70', 2),
(3, 'admin2', '250cf8b51c773f3f8dc8b4be867a9a02', 3);

-- --------------------------------------------------------

--
-- Table structure for table `harga`
--

CREATE TABLE `harga` (
  `harga_per_kilo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `harga`
--

INSERT INTO `harga` (`harga_per_kilo`) VALUES
(500);

-- --------------------------------------------------------

--
-- Table structure for table `pakaian`
--

CREATE TABLE `pakaian` (
  `pakaian_id` int(11) NOT NULL COMMENT 'auto_increment',
  `transaksi_id` int(11) NOT NULL,
  `pakaian_jenis` varchar(225) NOT NULL,
  `pakaian_jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pakaian`
--

INSERT INTO `pakaian` (`pakaian_id`, `transaksi_id`, `pakaian_jenis`, `pakaian_jumlah`) VALUES
(1, 1, 'cutbray', 5),
(2, 2, 'skinyjeans', 2),
(3, 3, 'cardigan', 7),
(4, 4, 'henlytop', 5),
(5, 5, 'kaus', 2),
(6, 6, 'blouse', 1),
(7, 7, 'peplumblouse', 6),
(8, 8, 'camisoletop', 5),
(9, 9, 'maxidress', 6),
(10, 10, 'jumpsuitdenim', 11),
(11, 11, 'blazercrop', 2),
(12, 12, 'daster', 5),
(13, 13, 'kulot', 9),
(14, 14, 'hotpants', 6),
(15, 15, 'cargopants', 2),
(16, 16, 'boyfriendjeans', 4),
(17, 17, 'palazzosutra', 3),
(18, 18, 'paperbagpats', 15),
(19, 19, 'chinopans', 13),
(20, 20, 'flarejeans', 12);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `pelanggan_id` int(11) NOT NULL COMMENT 'auto_increment',
  `pelanggan_nama` varchar(255) NOT NULL,
  `pelanggan_hp` varchar(20) NOT NULL,
  `pelanggan_alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`pelanggan_id`, `pelanggan_nama`, `pelanggan_hp`, `pelanggan_alamat`) VALUES
(1, 'arya', '1', 'banyumanik'),
(2, 'soenghyon', '2', 'ngaliyan'),
(3, 'cha_eun_woo', '3', 'kalipancur'),
(4, 'sheril', '4', 'mangkang'),
(5, 'mutia', '5', 'meseteseh'),
(6, 'el', '6', 'salamsari'),
(7, 'cahaya', '7', 'kedungdowo'),
(8, 'azra', '8', 'gunungpati'),
(9, 'ivana', '9', 'jerakah'),
(10, 'rizka', '10', 'krapyak');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `transaksi_id` int(11) NOT NULL COMMENT 'auto_increment',
  `transaksi_tgl` date NOT NULL,
  `pelanggan_id` int(11) NOT NULL,
  `transaksi_harga` int(11) NOT NULL,
  `transaksi_berat` int(11) NOT NULL,
  `transaksi_tgl_selesai` date NOT NULL,
  `transaksi_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`transaksi_id`, `transaksi_tgl`, `pelanggan_id`, `transaksi_harga`, `transaksi_berat`, `transaksi_tgl_selesai`, `transaksi_status`) VALUES
(1, '0000-00-00', 5, 30000, 3, '0000-00-00', 1),
(2, '0000-00-00', 4, 50000, 6, '0000-00-00', 2),
(3, '0000-00-00', 1, 25000, 8, '0000-00-00', 3),
(4, '0000-00-00', 3, 25000, 9, '0000-00-00', 4),
(5, '0000-00-00', 6, 90000, 7, '0000-00-00', 5),
(6, '0000-00-00', 10, 85000, 13, '0000-00-00', 6),
(7, '0000-00-00', 2, 45000, 11, '0000-00-00', 7),
(8, '0000-00-00', 2, 21000, 1, '0000-00-00', 8),
(9, '0000-00-00', 7, 89000, 15, '0000-00-00', 9),
(10, '0000-00-00', 10, 56000, 13, '0000-00-00', 10),
(11, '0000-00-00', 7, 67000, 14, '0000-00-00', 11),
(12, '0000-00-00', 2, 77000, 8, '0000-00-00', 12),
(13, '0000-00-00', 1, 55000, 8, '0000-00-00', 13),
(14, '0000-00-00', 5, 75000, 5, '0000-00-00', 14),
(15, '0000-00-00', 8, 43000, 3, '0000-00-00', 15);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pakaian`
--
ALTER TABLE `pakaian`
  ADD PRIMARY KEY (`pakaian_id`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`pelanggan_id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`transaksi_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `transaksi_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'auto_increment', AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
