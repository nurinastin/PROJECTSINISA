-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Jan 2020 pada 00.39
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.11

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
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_barang` varchar(5) NOT NULL,
  `nama_barang` varchar(20) NOT NULL,
  `stok` int(11) NOT NULL,
  `tanggal_sewa` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `stok`, `tanggal_sewa`) VALUES
('SA001', 'Traktor', 5, '0000-00-00'),
('SA002', 'Penyemprot Hama', 5, '0000-00-00'),
('SA003', 'Penyedot Air', 5, '0000-00-00'),
('SA004', 'Pelebur Tanah', 5, '0000-00-00'),
('SA005', 'Penggiling Padi', 5, '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyuluhan`
--

CREATE TABLE `penyuluhan` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nama_instansi` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  `tanggal_input` date NOT NULL,
  `tanggal_output` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penyuluhan`
--

INSERT INTO `penyuluhan` (`id`, `nama`, `nama_instansi`, `status`, `tanggal_input`, `tanggal_output`) VALUES
(6, 'fikri', 'satu', '', '2020-01-10', '2020-01-23'),
(7, 'nina', 'joss', '', '2020-01-10', '2020-01-17'),
(8, 'jbyt', 'uigrd', '', '2020-01-10', '2020-02-01'),
(10, 'nana', 'jojo', '', '2020-01-11', '2020-01-31'),
(11, 'nira', 'lululu', '', '2020-01-11', '2020-01-30'),
(12, 'wow', 'hmm', '', '2020-01-11', '2020-01-26'),
(13, 'harum', 'huuuhh', '', '2020-01-11', '2020-01-25'),
(14, 'Nurinda', 'loala', '', '2020-01-12', '2020-02-19'),
(15, '', '', '', '2020-01-12', '2020-09-16'),
(16, '', '', '', '2020-01-12', '2020-01-19'),
(17, '', '', '', '2020-01-12', '2020-12-18'),
(19, '', '', '', '0000-00-00', '0000-00-00'),
(20, 'faizal', 'POLIJE', '', '2020-01-12', '2020-01-21'),
(21, 'dewi', 'daramuda', '', '2020-01-12', '2020-02-22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sewa`
--

CREATE TABLE `sewa` (
  `nik` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_telepon` varchar(14) NOT NULL,
  `nama_barang` varchar(20) NOT NULL,
  `id_barang` varchar(5) NOT NULL,
  `tanggal_sewa` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `asal` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nik`, `nama`, `alamat`, `username`, `password`, `level`) VALUES
(1, '12345678910', 'nurin', 'Jember', 'nurin', 'nurin123', 'admin'),
(2, '112233445566', 'puput', 'Probolinggo', 'puput', 'puput123', 'user'),
(4, '234567891112', 'kanisa', 'JEMBER', 'kanisa', 'kanisa123', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `nama_barang` (`nama_barang`);

--
-- Indeks untuk tabel `penyuluhan`
--
ALTER TABLE `penyuluhan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sewa`
--
ALTER TABLE `sewa`
  ADD PRIMARY KEY (`nik`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `penyuluhan`
--
ALTER TABLE `penyuluhan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
