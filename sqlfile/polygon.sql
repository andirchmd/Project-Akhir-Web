-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2022 at 12:54 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `polygon`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id_user`, `nama`, `email`, `username`, `password`) VALUES
(1, 'Andi', 'andi@gmail.com', 'Andi', '$2y$10$KCYSBYnzhP9RVfeP3MCtoOUg5L/EHZtK/NiR6KQbr.vNUKOw.JsaC'),
(2, 'ihsan', 'ihsan@gmail.com', 'ihsan', '$2y$10$62/NudAVJMXUeZYixUfP/OU/SoYkmIHvuSGTZJ.zRYm.JOt7xOtx2');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id_pembelian` int(11) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `total_bayar` int(255) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `email_pembeli` varchar(255) NOT NULL,
  `alamat_pembeli` varchar(255) NOT NULL,
  `nomor_cc` int(255) NOT NULL,
  `tanggal_transaksi` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`id_pembelian`, `nama_produk`, `total_bayar`, `nama_lengkap`, `email_pembeli`, `alamat_pembeli`, `nomor_cc`, `tanggal_transaksi`) VALUES
(1, 'Mountain Bike Siskiu T7', 24000000, 'Andi Rachmad Triandika Rusli', 'andi@gmail.com', 'Jalan Mana Saja', 2147483647, '2022-11-14 11:26:37');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id_product` int(11) NOT NULL,
  `nama_product` varchar(255) NOT NULL,
  `harga_product` int(255) NOT NULL,
  `gambar_product` varchar(255) NOT NULL,
  `waktu_up` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_product`, `nama_product`, `harga_product`, `gambar_product`, `waktu_up`) VALUES
(4, 'Road Bike polygon Helios A8X', 60000000, 'Road Bike polygon Helios A8X.png', '2022-11-14 15:26:15'),
(5, 'Mountain Bike Siskiu T7', 24000000, 'Muntain Bike Siskiu T7.png', '2022-11-14 08:27:50'),
(6, 'E-bike path E5 GENT', 50500000, 'E-bike path E5 GENT.png', '2022-11-14 15:28:35'),
(7, 'Adventure bike BEND R2', 44000000, 'Adventure bike BEND R2.png', '2022-11-14 15:29:23');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_login`
--

CREATE TABLE `riwayat_login` (
  `id_riwayat` int(11) NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `waktu_login` datetime NOT NULL,
  `waktu_logout` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `riwayat_login`
--

INSERT INTO `riwayat_login` (`id_riwayat`, `nama_user`, `waktu_login`, `waktu_logout`) VALUES
(2, 'Andi', '2022-11-14 15:02:45', '2022-11-14 17:25:28'),
(3, 'Andi', '2022-11-14 15:04:58', '2022-11-14 17:25:28'),
(4, 'Andi', '2022-11-14 15:11:35', '2022-11-14 17:25:28'),
(5, 'Andi', '2022-11-14 15:24:57', '2022-11-14 17:25:28'),
(6, 'Andi', '2022-11-14 16:49:10', '2022-11-14 17:25:28'),
(7, 'ihsan', '2022-11-14 16:49:43', '2022-11-14 17:09:44'),
(8, 'ihsan', '2022-11-14 16:50:51', '2022-11-14 17:09:44'),
(9, 'ihsan', '2022-11-14 16:54:06', '2022-11-14 17:09:44'),
(10, 'Andi', '2022-11-14 16:54:25', '2022-11-14 17:25:28'),
(11, 'ihsan', '2022-11-14 16:56:45', '2022-11-14 17:09:44'),
(12, 'ihsan', '2022-11-14 17:02:59', '2022-11-14 17:09:44'),
(13, 'ihsan', '2022-11-14 17:04:24', '2022-11-14 17:09:44'),
(14, 'ihsan', '2022-11-14 17:09:38', '2022-11-14 17:09:44'),
(15, 'Andi', '2022-11-14 17:10:20', '2022-11-14 17:25:28'),
(16, 'Andi', '2022-11-14 17:17:24', '2022-11-14 17:25:28'),
(17, 'Andi', '2022-11-14 17:24:17', '2022-11-14 17:25:28'),
(18, 'Andi', '2022-11-14 17:29:53', '2022-11-14 17:31:45'),
(19, 'Andi', '2022-11-14 17:31:51', '2022-11-14 17:32:21'),
(20, 'ihsan', '2022-11-14 17:32:27', '2022-11-14 17:32:31'),
(21, 'Andi', '2022-11-14 17:32:35', '2022-11-14 17:34:00'),
(22, 'ihsan', '2022-11-14 17:52:12', '2022-11-14 17:52:43'),
(23, 'Andi', '2022-11-14 17:52:47', '2022-11-14 17:55:40'),
(24, 'ihsan', '2022-11-14 17:57:27', '2022-11-14 18:27:39'),
(25, 'Andi', '2022-11-14 18:27:45', '2022-11-14 18:37:37'),
(26, 'ihsan', '2022-11-14 18:37:41', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_pembelian`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`);

--
-- Indexes for table `riwayat_login`
--
ALTER TABLE `riwayat_login`
  ADD PRIMARY KEY (`id_riwayat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id_pembelian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `riwayat_login`
--
ALTER TABLE `riwayat_login`
  MODIFY `id_riwayat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
