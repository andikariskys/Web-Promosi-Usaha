-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2022 at 04:57 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webpkl`
--

CREATE DATABASE IF NOT EXISTS `webpkl`;
USE `webpkl`;

-- --------------------------------------------------------

--
-- Table structure for table `tb_data_usaha`
--

CREATE TABLE `tb_data_usaha` (
  `id_promosi` int(11) NOT NULL,
  `id_pengiklan` int(11) NOT NULL,
  `nama_usaha` varchar(50) NOT NULL,
  `foto` varchar(225) NOT NULL,
  `nama_pengiklan` varchar(50) NOT NULL,
  `deskripsi` varchar(250) NOT NULL,
  `lokasi` varchar(150) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_whatsapp` varchar(15) NOT NULL,
  `status` varchar(8) NOT NULL,
  `persetujuan` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_data_usaha`
--

INSERT INTO `tb_data_usaha` (`id_promosi`, `id_pengiklan`, `nama_usaha`, `foto`, `nama_pengiklan`, `deskripsi`, `lokasi`, `alamat`, `no_whatsapp`, `status`, `persetujuan`) VALUES
(2, 3, 'Toko Pakaian-Klambi', 'toko_baju.jpg', 'Dapid', 'Toko pakaian terlengkap dan termurah', 'Karanganyar', 'Jl. Utara Paris', '6288123456789', 'Tutup', 'Diterima'),
(3, 1, 'Cafe Aestetic Orliando Syariep', 'cafe_simpel1.jpg', 'Syarief', 'No Desc', 'Tawangmangu', 'Jl. Kenangan No.201', '88886677666', 'Buka', 'Diterima'),
(8, 3, 'Cilok Programmer', 'cilok.jpg', 'Ayu Tong Tong', 'Cilok Murah Lezat', 'Jumantono', 'Jl. Nggak Pulang-Pulang', '6281122334455', 'Buka', 'Diterima'),
(9, 1, 'Kedai Boba Bobok', 'boba.jpg', 'Tonggone Tonggoku', 'No Desc', 'Karangpandan', 'Jl. Mulu Nggak Nikah-Nikah', '6287654321012', 'Tutup', 'Diterima'),
(12, 3, 'Roti Goreng', 'roti.jpg', 'Admin Ganteng', 'Roti ini digoreng pakai mentega, buka dibakar', '', 'Dawung, Matesih, Karanganyar', '6282432431267', 'buka', 'Diterima');

-- --------------------------------------------------------

--
-- Table structure for table `tb_login`
--

CREATE TABLE `tb_login` (
  `id_login` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `role_id` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_login`
--

INSERT INTO `tb_login` (`id_login`, `nama`, `username`, `email`, `password`, `foto`, `role_id`) VALUES
(1, 'Anak Bapak dan Ibuk', 'anakbapakibuk', 'abdi@gemail.chom', 'anbadib', NULL, 2),
(2, 'Admin Ganteng', 'adminganteng', 'admgtg@yahuut.com', 'adgtg123', 'admin1.jpg', 1),
(3, 'Andika', 'andikarisky', 'andikarisky313@gmail.com', 'risky', NULL, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_penilaian`
--

CREATE TABLE `tb_penilaian` (
  `id_penilaian` int(11) NOT NULL,
  `id_promosi` int(11) NOT NULL,
  `id_login` int(11) NOT NULL,
  `deskripsi_penilaian` text NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_penilaian`
--

INSERT INTO `tb_penilaian` (`id_penilaian`, `id_promosi`, `id_login`, `deskripsi_penilaian`, `jumlah`) VALUES
(1, 3, 3, 'Disini tempatnya enak.', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tb_variasi`
--

CREATE TABLE `tb_variasi` (
  `id` int(11) NOT NULL,
  `id_promosi` int(11) NOT NULL,
  `variasi_produk` varchar(255) NOT NULL,
  `harga_variasi` int(11) NOT NULL,
  `foto` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_variasi`
--

INSERT INTO `tb_variasi` (`id`, `id_promosi`, `variasi_produk`, `foto`) VALUES
(8, 3, 'Kopi Kapal Api', 8000 , 'kopi.jpg'),
(9, 3, 'Kentang Goreng', 10000 , 'kentang.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_data_usaha`
--
ALTER TABLE `tb_data_usaha`
  ADD PRIMARY KEY (`id_promosi`);

--
-- Indexes for table `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`id_login`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `tb_penilaian`
--
ALTER TABLE `tb_penilaian`
  ADD PRIMARY KEY (`id_penilaian`);

--
-- Indexes for table `tb_variasi`
--
ALTER TABLE `tb_variasi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_data_usaha`
--
ALTER TABLE `tb_data_usaha`
  MODIFY `id_promosi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_penilaian`
--
ALTER TABLE `tb_penilaian`
  MODIFY `id_penilaian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_variasi`
--
ALTER TABLE `tb_variasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
