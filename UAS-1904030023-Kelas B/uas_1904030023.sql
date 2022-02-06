-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2022 at 04:52 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas_1904030023`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_anggota`
--

CREATE TABLE `tb_anggota` (
  `id` int(11) NOT NULL,
  `nim` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `tempat_lahir` varchar(45) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `prodi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_anggota`
--

INSERT INTO `tb_anggota` (`id`, `nim`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `prodi`) VALUES
(1, 1325000001, 'Bagas', 'tangerang', '2001-03-02', 'laki- laki', 'Teknik informatika'),
(3, 1325000002, 'Asep', 'Tangerang', '2000-02-04', 'Laki-laki', 'Teknik Informatika'),
(13, 1325000003, 'Putri', 'Tangerang', '2001-07-19', 'Perempuan', 'Teknik Industri'),
(14, 1325000004, 'Danu', 'Tangerang', '2001-10-18', 'Laki-laki', 'Teknik Informatika'),
(15, 1325000005, 'Arni Nuraini', 'Tangerang', '2000-09-12', 'Perempuan', 'Teknik Informatika');

-- --------------------------------------------------------

--
-- Table structure for table `tb_buku`
--

CREATE TABLE `tb_buku` (
  `id` int(11) NOT NULL,
  `nama_buku` varchar(40) NOT NULL,
  `nama_pengarang` varchar(45) NOT NULL,
  `penerbit` varchar(30) NOT NULL,
  `tahun_terbit` int(11) NOT NULL,
  `jumlah_halaman` varchar(15) NOT NULL,
  `nama_perpustakaan` varchar(40) NOT NULL,
  `alamat` varchar(45) NOT NULL,
  `foto_buku` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_buku`
--

INSERT INTO `tb_buku` (`id`, `nama_buku`, `nama_pengarang`, `penerbit`, `tahun_terbit`, `jumlah_halaman`, `nama_perpustakaan`, `alamat`, `foto_buku`) VALUES
(28, 'dearnathan', 'Erisca Febrianti', 'Best Media', 2016, '528 Halaman', 'Perpustakaan Nasional RI', 'Jalan Medan Merdeka Selatan No.11, Jakarta', 'foto2.jpg'),
(37, 'Laskar Pelangi', 'Andrea Hirata', 'Bintang Pustaka', 2005, '529 halaman', 'Perpustakaan Nasional RI', 'Jalan Medan Merdeka Selatan No.11, Jakarta ', 'foto3.jpg'),
(40, 'Sang Pemimpi', 'Andrea Hirata', 'Bentang Pustaka', 2006, '248 Halaman', 'Grahatama Pustaka Yogyakarta', 'Jl. Raya Janti,Kabupaten Bantul, Yogyakarta', 'foto1.jpg'),
(42, 'Cinta Brontosaurus', 'Raditya Dika', 'Gagas Media', 2006, '160 Halaman', 'Grahatama Pustaka Yogyakarta', 'Jl. Raya Janti,Kabupaten Bantul, Yogyakarta', 'foto4.jpg'),
(43, 'Sepatu Dahlan', 'Khrisna Pabhicara', 'Noura Books', 2012, '369 Halaman', 'Perpustakaan Freedom Institute', 'Wisma Bakrie, Jl. H. R. Rasuna Said. Jakarta', 'foto5.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_buku`
--
ALTER TABLE `tb_buku`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_buku`
--
ALTER TABLE `tb_buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
