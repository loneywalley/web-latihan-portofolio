-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2021 at 12:35 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buybooks`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `idAnggota` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `alamat` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`idAnggota`, `nama`, `username`, `password`, `email`, `alamat`) VALUES
('A001', 'yushinta prassanty', 'yusicantik', 'yusicantik', 'yushinta@student.ub.ac.id', 'Babatan 3E/9 Wiyung-Surabaya'),
('A002', 'Cinta', 'cintaku123', 'cintaku123', 'cloudsgirl92@gmail.com', 'Babatan 3E/9 Wiyung-Surabaya'),
('A003', 'akuuu ', 'aliuuuuu', 'aliuuuuu', 'officialkingdompetshop@gmail.c', 'Babatan 3E/9 Wiyung-Surabaya');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `kodeBuku` varchar(10) NOT NULL,
  `judul` varchar(250) NOT NULL,
  `penerbit` varchar(30) NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `sinopsis` varchar(5000) NOT NULL,
  `gambar` varchar(300) NOT NULL,
  `harga` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`kodeBuku`, `judul`, `penerbit`, `pengarang`, `kategori`, `sinopsis`, `gambar`, `harga`) VALUES
('BK001', 'a', 'BBBBBBBBB', 'AAAAAAAAAAA', 'aaaaaaaaaaaaaaaaaaaa', 'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA', 'https://i.postimg.cc/VvYw3Kxh/cover3.jpg', '$55'),
('BK003', 'cccc', 'BBBBBBBBB', 'AAAAAAAAAAA', 'aaaaaaaaaaaaaaaaaaaa', 'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA', 'https://i.postimg.cc/VvYw3Kxh/cover3.jpg', '$55'),
('BK002', 'aab', 'BBBBBBBBB', 'AAAAAAAAAAA', 'aaaaaaaaaaaaaaaaaaaa', 'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA', 'https://i.postimg.cc/VvYw3Kxh/cover3.jpg', '$55'),
('BK002', 'ccdd', 'BBBBBBBBB', 'AAAAAAAAAAA', 'aaaaaaaaaaaaaaaaaaaa', 'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA', 'https://i.postimg.cc/VvYw3Kxh/cover3.jpg', '$55');

-- --------------------------------------------------------

--
-- Table structure for table `buku2`
--

CREATE TABLE `buku2` (
  `id` int(11) NOT NULL,
  `kodeBuku` varchar(10) NOT NULL,
  `judul` varchar(250) NOT NULL,
  `penerbit` varchar(30) NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `sinopsis` varchar(5000) NOT NULL,
  `gambar` varchar(300) NOT NULL,
  `harga` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku2`
--

INSERT INTO `buku2` (`id`, `kodeBuku`, `judul`, `penerbit`, `pengarang`, `kategori`, `sinopsis`, `gambar`, `harga`) VALUES
(1, 'BK001', 'cccc', 'BBBBBBBBB', 'AAAAAAAAAAA', 'aaaaaaaaaaaaaaaaaaaa', 'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA', 'https://i.postimg.cc/VvYw3Kxh/cover3.jpg', '$55'),
(4, 'BK001', 'dcdc', '', 'zzxx', '', '', 'https://d1csarkz8obe9u.cloudfront.net/posterpreviews/action-thriller-book-cover-design-template-3675ae3e3ac7ee095fc793ab61b812cc_screen.jpg?ts=1588152105', '$15');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `idPetugas` varchar(10) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `email` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`idPetugas`, `nama`, `email`, `username`, `password`) VALUES
('P001', 'ADMIN1', 'admin1@gmail.com', 'ADMIN1', 'ADMIN1');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `idTransaksi` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kodeBuku` varchar(10) NOT NULL,
  `judul` varchar(250) NOT NULL,
  `harga` varchar(15) NOT NULL,
  `alamat` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`idTransaksi`, `nama`, `kodeBuku`, `judul`, `harga`, `alamat`) VALUES
('2', 'cintaku123', '', 'dcdc', '$15', ''),
('3', 'cintaku123', 'BK001', 'cccc', '$55', ''),
('4', 'cintaku123', 'BK001', 'cccc', '$55', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`idAnggota`);

--
-- Indexes for table `buku2`
--
ALTER TABLE `buku2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`idPetugas`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`idTransaksi`),
  ADD KEY `kodeBuku` (`kodeBuku`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku2`
--
ALTER TABLE `buku2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
