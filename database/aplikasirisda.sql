-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2021 at 04:05 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aplikasirisda`
--

-- --------------------------------------------------------

--
-- Table structure for table `nasabah`
--

CREATE TABLE `nasabah` (
  `id` int(11) NOT NULL,
  `noktp` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nohp` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `kota` varchar(255) NOT NULL,
  `tmptlahir` varchar(255) NOT NULL,
  `tgllahir` date NOT NULL,
  `penghasilan` varchar(255) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nasabah`
--

INSERT INTO `nasabah` (`id`, `noktp`, `nama`, `nohp`, `alamat`, `kota`, `tmptlahir`, `tgllahir`, `penghasilan`, `pekerjaan`) VALUES
(1, '321654987', 'Dian Rahmadani', '082256964453', 'Jalan Bumi Mas Raya', 'Banjarmasin', 'Tarakan', '1998-01-02', '13000000', 'CEO');

-- --------------------------------------------------------

--
-- Table structure for table `nasabahlunas`
--

CREATE TABLE `nasabahlunas` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nohp` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `norekening` varchar(255) NOT NULL,
  `pinjaman` varchar(255) NOT NULL,
  `jangkawaktu` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nasabahlunas`
--

INSERT INTO `nasabahlunas` (`id`, `nama`, `nohp`, `alamat`, `norekening`, `pinjaman`, `jangkawaktu`, `status`) VALUES
(3, 'Dian Rahmadani', '082256964453', 'Banjarmasin', '8020119980', '25000000', '24 Bulan', 'Belum Lunas');

-- --------------------------------------------------------

--
-- Table structure for table `nasabahmenunggak`
--

CREATE TABLE `nasabahmenunggak` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nohp` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `norekening` varchar(255) NOT NULL,
  `pinjaman` varchar(255) NOT NULL,
  `tgljatuhtempo` date NOT NULL,
  `angsuran` varchar(255) NOT NULL,
  `jumlahmenunggak` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nasabahmenunggak`
--

INSERT INTO `nasabahmenunggak` (`id`, `nama`, `nohp`, `alamat`, `norekening`, `pinjaman`, `tgljatuhtempo`, `angsuran`, `jumlahmenunggak`) VALUES
(3, 'Dian Rahmadani', '082256964453', 'Banjarmasin', '8020119980', '25000000', '2023-03-13', '15', '20000000'),
(4, 'dian', '082256964453', 'banjarmasin', '8080336648', '20000000', '2021-03-19', '15', '400000'),
(5, 'sdfsdfsdf', '876865343', 'dfgfdgdf', '5464564', '10000000', '2021-03-26', '15', '4000000');

-- --------------------------------------------------------

--
-- Table structure for table `peminjamperbulan`
--

CREATE TABLE `peminjamperbulan` (
  `id` int(11) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nohp` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `jeniskelamin` varchar(255) NOT NULL,
  `statuskawin` varchar(255) NOT NULL,
  `norekening` varchar(255) NOT NULL,
  `angsuran` varchar(255) NOT NULL,
  `pinjaman` varchar(255) NOT NULL,
  `tglpencairan` date NOT NULL,
  `jangkawaktu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peminjamperbulan`
--

INSERT INTO `peminjamperbulan` (`id`, `nik`, `nama`, `nohp`, `alamat`, `jeniskelamin`, `statuskawin`, `norekening`, `angsuran`, `pinjaman`, `tglpencairan`, `jangkawaktu`) VALUES
(7, '16630074', 'Dian Rahmadani', '082256964453', 'Banjarmasin', 'Laki-laki', 'Belum Kawin', '8020119980', '10', '25000000', '2021-03-13', '24 Bulan'),
(8, '16630071', 'Ardi Ramadani Zarkoni', '082256964452', 'Banjarmasin Tengah', 'Laki-laki', 'Belum Kawin', '8020116652', '10', '45000000', '2021-03-16', '60 Bulan');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `nama`, `username`, `email`, `password`) VALUES
(1, 'Risda Roosyantie', 'risdaroosy', 'risdaroosy@gmail.com', '$2y$10$axYi/7CseJV/6R1D0Ue/ruf3IoAPnhVxB/xs1NpTXG2a/nTpIw5EO');

-- --------------------------------------------------------

--
-- Table structure for table `struk`
--

CREATE TABLE `struk` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `norekening` varchar(255) NOT NULL,
  `pinjaman` varchar(255) NOT NULL,
  `jangkawaktu` varchar(255) NOT NULL,
  `tgljatuhtempo` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `struk`
--

INSERT INTO `struk` (`id`, `nama`, `alamat`, `norekening`, `pinjaman`, `jangkawaktu`, `tgljatuhtempo`) VALUES
(3, 'Dian Rahmadani', 'Banjarmasin', '8020119980', '25000000', '24 Bulan', '2021-03-13');

-- --------------------------------------------------------

--
-- Table structure for table `tandaterimaagunan`
--

CREATE TABLE `tandaterimaagunan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nohp` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `images` varchar(255) DEFAULT NULL,
  `keterangansurat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tandaterimaagunan`
--

INSERT INTO `tandaterimaagunan` (`id`, `nama`, `nohp`, `alamat`, `images`, `keterangansurat`) VALUES
(4, 'Dian Rahmadani', '082256964453', 'Banjarmasin', '1375614878_Diagram Konteks.png', 'Surat Menikah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nasabah`
--
ALTER TABLE `nasabah`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `noktp` (`noktp`);

--
-- Indexes for table `nasabahlunas`
--
ALTER TABLE `nasabahlunas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nasabahmenunggak`
--
ALTER TABLE `nasabahmenunggak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peminjamperbulan`
--
ALTER TABLE `peminjamperbulan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`,`email`);

--
-- Indexes for table `struk`
--
ALTER TABLE `struk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tandaterimaagunan`
--
ALTER TABLE `tandaterimaagunan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nasabah`
--
ALTER TABLE `nasabah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `nasabahlunas`
--
ALTER TABLE `nasabahlunas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `nasabahmenunggak`
--
ALTER TABLE `nasabahmenunggak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `peminjamperbulan`
--
ALTER TABLE `peminjamperbulan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `struk`
--
ALTER TABLE `struk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tandaterimaagunan`
--
ALTER TABLE `tandaterimaagunan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
