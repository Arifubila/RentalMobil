-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2025 at 07:49 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rentalmobil_arifubila`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mobil_arif`
--

CREATE TABLE `tbl_mobil_arif` (
  `no_plat_arif` varchar(10) NOT NULL,
  `nama_mobil_arif` varchar(25) NOT NULL COMMENT 'Avanza,\r\nBrio, Pajero,',
  `brand_mobil_arif` varchar(25) NOT NULL COMMENT 'Honda,Toyota,\r\nSuzuki, Bmw',
  `tipe_transmisi_arif` varchar(10) NOT NULL COMMENT 'Manual / Matic'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_mobil_arif`
--

INSERT INTO `tbl_mobil_arif` (`no_plat_arif`, `nama_mobil_arif`, `brand_mobil_arif`, `tipe_transmisi_arif`) VALUES
('Z123UU', 'Porsche 911', 'Porsche', 'Manual'),
('Z123XE', 'Mercedes-Benz G-Class', 'Mercedes-Benz', 'Automatic'),
('Z123XF', 'Rolls-Royce Phantom', 'Rolls-Royce', 'Automatic'),
('Z123XX', 'Nissan GT-R', 'Nissan', 'Manual'),
('Z123XY', 'Toyota Supra', 'Toyota', 'Manual');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pelanggan_arif`
--

CREATE TABLE `tbl_pelanggan_arif` (
  `nik_ktp_arif` varchar(16) NOT NULL,
  `nama_arif` varchar(35) NOT NULL,
  `no_hp_arif` varchar(15) NOT NULL,
  `alamat_arif` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_pelanggan_arif`
--

INSERT INTO `tbl_pelanggan_arif` (`nik_ktp_arif`, `nama_arif`, `no_hp_arif`, `alamat_arif`) VALUES
('2096512567213', 'Baskara Putri', '08745231141', 'Jl. WaraWiri'),
('765432123456', 'Noel Galagher', '08362312', 'Jl. Washington Dc'),
('9865478921', 'Ariana Grande', '085434512', 'Jl. Sillicon Valley'),
('98765456271', 'Justin Bieber', '0874567123', 'Jl. New York');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rental_arif`
--

CREATE TABLE `tbl_rental_arif` (
  `no_trx_arif` varchar(20) NOT NULL,
  `nik_ktp_arif` varchar(16) NOT NULL,
  `no_plat_arif` varchar(10) NOT NULL,
  `tgl_rental_arif` date NOT NULL,
  `jam_rental_arif` time NOT NULL,
  `harga_arif` int(11) NOT NULL COMMENT 'Harga Per hari',
  `lama_arif` int(11) NOT NULL COMMENT 'Lama Per hari',
  `total_bayar_arif` int(11) NOT NULL COMMENT 'Harga * Lama'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_rental_arif`
--

INSERT INTO `tbl_rental_arif` (`no_trx_arif`, `nik_ktp_arif`, `no_plat_arif`, `tgl_rental_arif`, `jam_rental_arif`, `harga_arif`, `lama_arif`, `total_bayar_arif`) VALUES
('TRX-20250103082939', 'Noel Galagher', 'Nissan', '2025-01-03', '12:00:00', 300000, 5, 1500000),
('TRX-20250103101458', 'Ariana Grande', 'Rolls-Royc', '2025-01-03', '21:55:00', 500000, 5, 2500000),
('TRX-20250103101536', 'Justin Bieber', 'Porsche', '2025-01-03', '01:00:00', 600000, 4, 2400000),
('TRX-20250103101616', 'Baskara Putri', 'Mercedes-B', '2025-01-03', '22:22:00', 300000, 4, 1200000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_arif`
--

CREATE TABLE `tbl_user_arif` (
  `id_user_arif` int(11) NOT NULL COMMENT 'Auto Increment',
  `username_arif` varchar(35) NOT NULL,
  `password_arif` varchar(100) NOT NULL,
  `nama_lengkap_arif` varchar(35) NOT NULL,
  `level_arif` varchar(5) NOT NULL COMMENT 'admin/user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user_arif`
--

INSERT INTO `tbl_user_arif` (`id_user_arif`, `username_arif`, `password_arif`, `nama_lengkap_arif`, `level_arif`) VALUES
(4, 'arif', 'd9b1d7db4cd6e70935368a1efb10e377', 'arifubila', 'admin'),
(5, 'bill', '202cb962ac59075b964b07152d234b70', 'Billy', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_mobil_arif`
--
ALTER TABLE `tbl_mobil_arif`
  ADD PRIMARY KEY (`no_plat_arif`);

--
-- Indexes for table `tbl_pelanggan_arif`
--
ALTER TABLE `tbl_pelanggan_arif`
  ADD PRIMARY KEY (`nik_ktp_arif`);

--
-- Indexes for table `tbl_rental_arif`
--
ALTER TABLE `tbl_rental_arif`
  ADD PRIMARY KEY (`no_trx_arif`);

--
-- Indexes for table `tbl_user_arif`
--
ALTER TABLE `tbl_user_arif`
  ADD PRIMARY KEY (`id_user_arif`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_user_arif`
--
ALTER TABLE `tbl_user_arif`
  MODIFY `id_user_arif` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Auto Increment', AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
