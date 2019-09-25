-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Sep 2019 pada 17.07
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `si_pegadaian`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `nasabah`
--

CREATE TABLE `nasabah` (
  `noidnasabah` varchar(21) NOT NULL,
  `namanasabah` varchar(35) NOT NULL,
  `jeniskelaminnasabah` varchar(11) NOT NULL,
  `tempatlahirnasabah` varchar(35) NOT NULL,
  `tanggallahirnasabah` date NOT NULL,
  `agamanasabah` varchar(7) NOT NULL,
  `pendidikannasabah` varchar(7) NOT NULL,
  `tanggalpendaftaran` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nasabah`
--

INSERT INTO `nasabah` (`noidnasabah`, `namanasabah`, `jeniskelaminnasabah`, `tempatlahirnasabah`, `tanggallahirnasabah`, `agamanasabah`, `pendidikannasabah`, `tanggalpendaftaran`) VALUES
('3', 'Hevn', 'Laki - Laki', 'Indramayu', '1995-10-28', 'Islam', 'S2', '2019-12-31'),
('4', 'Handika', 'Laki - Laki', 'Indramayu', '2019-08-14', 'Islam', 'S2', '2019-08-21'),
('5', 'Handika 24', 'Laki - Laki', 'Jakarta', '2019-08-15', 'Islam', 'S2', '2019-08-15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengajuan_pinjaman`
--

CREATE TABLE `pengajuan_pinjaman` (
  `idpengajuan` int(11) NOT NULL,
  `nopinjaman` varchar(16) NOT NULL,
  `tujuanpengajuan` varchar(11) NOT NULL,
  `besarpengajuan` int(11) NOT NULL,
  `jangkawaktupengajuan` int(11) NOT NULL,
  `tanggalpengajuan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengajuan_pinjaman`
--

INSERT INTO `pengajuan_pinjaman` (`idpengajuan`, `nopinjaman`, `tujuanpengajuan`, `besarpengajuan`, `jangkawaktupengajuan`, `tanggalpengajuan`) VALUES
(1, '3', 'Usaha', 10000000, 5, '2019-08-16'),
(3, '2', 'hajatan', 500000, 5, '2019-12-31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pinjaman`
--

CREATE TABLE `pinjaman` (
  `nopinjaman` varchar(16) NOT NULL,
  `besarpinjaman` int(11) NOT NULL,
  `barangjaminan` varchar(100) NOT NULL,
  `tanggalpinjaman` date NOT NULL,
  `tanggalberakhir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pinjaman`
--

INSERT INTO `pinjaman` (`nopinjaman`, `besarpinjaman`, `barangjaminan`, `tanggalpinjaman`, `tanggalberakhir`) VALUES
('1', 10000, 'Sepeda Motor', '2019-08-07', '2019-08-08'),
('2', 200000, 'Motor', '2019-12-31', '2019-12-31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(12) NOT NULL,
  `password` varchar(25) NOT NULL,
  `nama_user` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `password`, `nama_user`) VALUES
('admin', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `nasabah`
--
ALTER TABLE `nasabah`
  ADD PRIMARY KEY (`noidnasabah`);

--
-- Indeks untuk tabel `pengajuan_pinjaman`
--
ALTER TABLE `pengajuan_pinjaman`
  ADD PRIMARY KEY (`idpengajuan`);

--
-- Indeks untuk tabel `pinjaman`
--
ALTER TABLE `pinjaman`
  ADD PRIMARY KEY (`nopinjaman`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pengajuan_pinjaman`
--
ALTER TABLE `pengajuan_pinjaman`
  MODIFY `idpengajuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
