-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2020 at 09:06 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sinisa`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_karyawan` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_karyawan`, `nama`, `alamat`, `email`, `username`, `password`) VALUES
('E311', 'Nurin', 'Patrang', 'nurin@gmail.com', 'nurin_', '123');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` varchar(5) NOT NULL,
  `nama_barang` varchar(20) NOT NULL,
  `stok` int(11) NOT NULL,
  `tanggal_sewa` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `stok`, `tanggal_sewa`) VALUES
('SA001', 'Traktor', 5, '2020-01-20'),
('SA002', 'Penyemprot pestisida', 5, '2020-01-20'),
('SA003', 'Penyedot air', 5, '2020-01-15'),
('SA004', 'Pelebur tanah', 5, '2020-01-17'),
('SA005', 'Penggiling padi', 5, '2020-01-17');

-- --------------------------------------------------------

--
-- Table structure for table `penyuluhan`
--

CREATE TABLE `penyuluhan` (
  `nik` varchar(16) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nama_instansi` varchar(30) NOT NULL,
  `status` varchar(20) NOT NULL,
  `tanggal_input` date NOT NULL,
  `tanggal_output` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sewa`
--

CREATE TABLE `sewa` (
  `nik` varchar(16) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telepon` varchar(14) NOT NULL,
  `nama_barang` varchar(20) NOT NULL,
  `id_barang` varchar(5) NOT NULL,
  `tanggal` date NOT NULL,
  `lama_sewa` int(11) NOT NULL,
  `asal` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `nik` varchar(16) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `nama_barang` (`nama_barang`);

--
-- Indexes for table `penyuluhan`
--
ALTER TABLE `penyuluhan`
  ADD PRIMARY KEY (`nik`),
  ADD KEY `nama` (`nama`);

--
-- Indexes for table `sewa`
--
ALTER TABLE `sewa`
  ADD PRIMARY KEY (`nik`),
  ADD KEY `nama` (`nama`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`nik`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `penyuluhan`
--
ALTER TABLE `penyuluhan`
  ADD CONSTRAINT `penyuluhan_ibfk_1` FOREIGN KEY (`nama`) REFERENCES `user` (`nik`);

--
-- Constraints for table `sewa`
--
ALTER TABLE `sewa`
  ADD CONSTRAINT `sewa_ibfk_1` FOREIGN KEY (`nama`) REFERENCES `user` (`nik`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
