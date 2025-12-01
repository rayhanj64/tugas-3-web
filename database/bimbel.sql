-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:8111
-- Generation Time: Dec 01, 2025 at 08:50 PM
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
-- Database: `bimbel`
--

-- --------------------------------------------------------

--
-- Table structure for table `pendaftar`
--

CREATE TABLE `pendaftar` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` enum('Laki-laki','Perempuan') NOT NULL,
  `paket` enum('Paket Reguler','Paket Intensif','Paket Supercamp') NOT NULL,
  `fasilitas` set('Modul Cetak Lengkap','Modul PDF','Video Rekaman Kelas','Grup Diskusi Telegram') NOT NULL,
  `cabang` enum('Jakarta Pusat','Yogyakarta','Aceh','Surabaya','Makassar') NOT NULL,
  `metode_pembayaran` enum('Transfer','E-Wallet','Tunai') NOT NULL,
  `catatan` text NOT NULL,
  `price1` int(11) NOT NULL COMMENT 'harga paket',
  `price2` int(11) NOT NULL COMMENT 'harga fasilitas',
  `price3` int(11) NOT NULL COMMENT 'harga cabang',
  `price4` int(11) NOT NULL COMMENT 'harga metode pembayaran',
  `tax` int(11) NOT NULL COMMENT 'maksud tax & taxes apaan kk, gapaham tak anggap tax itu biaya pendaftaran tak samain persis',
  `taxes` int(11) NOT NULL COMMENT 'tax 10% dari total paket, fasilitas, dan cabang',
  `total_biaya` int(11) NOT NULL,
  `tanggal_daftar` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pendaftar`
--

INSERT INTO `pendaftar` (`id`, `nama`, `email`, `gender`, `paket`, `fasilitas`, `cabang`, `metode_pembayaran`, `catatan`, `price1`, `price2`, `price3`, `price4`, `tax`, `taxes`, `total_biaya`, `tanggal_daftar`) VALUES
(16, 'avewqf', 'qfqfqfqf@qq', 'Laki-laki', 'Paket Supercamp', 'Modul Cetak Lengkap,Modul PDF,Video Rekaman Kelas,Grup Diskusi Telegram', 'Makassar', 'Transfer', 'paling mahal yoo', 1000000, 190000, 115000, 3000, 3000, 130500, 1438500, '2025-12-02'),
(17, 'tes tanpa paket', 'a@a', 'Perempuan', '', 'Modul PDF,Video Rekaman Kelas,Grup Diskusi Telegram', 'Yogyakarta', 'Tunai', 'tes tanpa paket', 0, 140000, 80000, 0, 0, 22000, 0, '2025-12-02'),
(18, 'tes tanpa fasilitasss', 'e@a', 'Laki-laki', 'Paket Reguler', '', 'Makassar', 'Tunai', 'testyyy', 500000, 0, 115000, 0, 0, 61500, 676500, '2025-12-02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pendaftar`
--
ALTER TABLE `pendaftar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
