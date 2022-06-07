-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2022 at 07:17 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `runtah`
--

-- --------------------------------------------------------

--
-- Table structure for table `jenis_sampah`
--

CREATE TABLE `jenis_sampah` (
  `id_sampah` int(11) NOT NULL,
  `berat_sampah` text NOT NULL,
  `nama_sampah` varchar(255) NOT NULL,
  `foto_Sampah` varchar(255) NOT NULL,
  `harga_sampah` text NOT NULL,
  `slug` varchar(255) NOT NULL,
  `jenis_sampah` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jenis_sampah`
--

INSERT INTO `jenis_sampah` (`id_sampah`, `berat_sampah`, `nama_sampah`, `foto_Sampah`, `harga_sampah`, `slug`, `jenis_sampah`, `created_at`, `updated_at`) VALUES
(1, '12', '1213456786', '1641562602_d66dd2807e5c7901908e.png', '1000', '1213456786', '1', '2022-01-07 07:36:43', '2022-01-07 07:36:43'),
(2, '1212', 'Kertas', '1641562877_824f5ed3b8ed32619be7.png', '1000', 'kertas', '1', '2022-01-07 07:41:17', '2022-01-07 07:41:17'),
(3, '12', 'kantong belanja', '1641562902_a4628fd7dab529558a17.png', '1000', 'kantong-belanja', '2', '2022-01-07 07:41:42', '2022-01-07 07:41:42'),
(4, '12', 'cd bekas', '1641562955_cdc46b24c381cc896614.png', '100', 'cd-bekas', '2', '2022-01-07 07:42:35', '2022-01-07 07:42:35'),
(5, '12', 'botol aqua', '1641562977_1c048f72835d015aeb9a.png', '100', 'botol-aqua', '5', '2022-01-07 07:42:57', '2022-01-07 07:42:57'),
(6, '12', 'Gelas plastik ', '1641563317_d432bb090bd1fd4d4549.png', '12', 'gelas-plastik', '5', '2022-01-07 07:48:37', '2022-01-07 07:48:37'),
(7, '12', 'gelas cup', '1641563411_f567d570b52b99641cc1.png', '121', 'gelas-cup', '5', '2022-01-07 07:50:11', '2022-01-07 07:50:11');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id_level` int(11) NOT NULL,
  `nama_level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id_level`, `nama_level`) VALUES
(2, 'Admin'),
(3, 'Petugas'),
(4, 'Users');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` int(11) UNSIGNED NOT NULL,
  `order_code` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_user` int(11) NOT NULL,
  `nama_pemesan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL DEFAULT 0,
  `invoice_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invoice_token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_pembayaran` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `konfirmasi_pemesanan` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sampahyangdijual`
--

CREATE TABLE `sampahyangdijual` (
  `id_sampahYangdijual` int(11) NOT NULL,
  `nama_jenis_sampah` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sampahyangdijual`
--

INSERT INTO `sampahyangdijual` (`id_sampahYangdijual`, `nama_jenis_sampah`, `created_at`, `updated_at`) VALUES
(1, 'koran', '2022-01-07 07:43:59', '2022-01-07 07:43:59'),
(2, 'Plastik', '2022-01-07 07:43:59', '2022-01-07 07:43:59'),
(3, 'ban', '2022-01-07 07:44:48', '2022-01-07 07:44:48'),
(4, 'logam', '2022-01-07 07:44:48', '2022-01-07 07:44:48'),
(5, 'botol', '2022-01-07 07:45:22', '2022-01-07 07:45:22'),
(6, 'buku', '2022-01-07 07:45:22', '2022-01-07 07:45:22'),
(7, 'electronic', '2022-01-07 07:46:03', '2022-01-07 07:46:03');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `id_level` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `alamat_user` text NOT NULL,
  `TTL` date NOT NULL,
  `no_telp` char(12) NOT NULL,
  `rekening_sampah` char(20) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `id_level`, `username`, `email`, `password`, `foto`, `slug`, `alamat_user`, `TTL`, `no_telp`, `rekening_sampah`, `created_at`, `updated_at`) VALUES
(1, 4, 'adhinugroho', 'adhin@gmail.com', '$2y$10$HS3iQUTRxC7W2mhbwQM/Ge.iC93QSYMZd6Vc/zofZ96.voXlpSV8O', '', 'adhinugroho', '', '0000-00-00', '', 'RN/76915172', '2022-01-03 01:10:18', '2022-01-03 01:10:18'),
(2, 2, 'adhinugroho', 'Adhinugroo@gmail.com', '$2y$10$k175vOaiTzzmYZcJhzmEc.DN.6wJXcX7fOFHELyCsJg51/n95QThK', '', 'adhinugroho', '', '0000-00-00', '', 'RN/11380135', '2022-01-03 20:28:36', '2022-01-03 20:28:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jenis_sampah`
--
ALTER TABLE `jenis_sampah`
  ADD PRIMARY KEY (`id_sampah`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `sampahyangdijual`
--
ALTER TABLE `sampahyangdijual`
  ADD PRIMARY KEY (`id_sampahYangdijual`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jenis_sampah`
--
ALTER TABLE `jenis_sampah`
  MODIFY `id_sampah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sampahyangdijual`
--
ALTER TABLE `sampahyangdijual`
  MODIFY `id_sampahYangdijual` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
