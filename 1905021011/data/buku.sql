-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Okt 2020 pada 14.08
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detailbuku`
--

CREATE TABLE `detailbuku` (
  `id` int(10) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `kode` char(4) NOT NULL,
  `penulis` varchar(200) NOT NULL,
  `tahun_terbit` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `detailbuku`
--

INSERT INTO `detailbuku` (`id`, `judul`, `kode`, `penulis`, `tahun_terbit`) VALUES
(1, 'Matematika Dasar', '1101', 'Ermanda', '2003'),
(2, 'Matematika Diskrit', '1102', 'Widi Astuti', '2002');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `detailbuku`
--
ALTER TABLE `detailbuku`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `detailbuku`
--
ALTER TABLE `detailbuku`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
