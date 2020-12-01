-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 24 Jun 2019 pada 17.14
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id_admin` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `nama`, `password`) VALUES
(1, 'admin1', 'admin1', 'f865b53623b121fd34ee5426c792e5c33af8c227'),
(2, 'tesadmin', 'tes', 'd033e22ae348aeb5660fc2140aec35850c4da997');

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE IF NOT EXISTS `buku` (
`id_buku` int(11) NOT NULL,
  `judul_buku` text NOT NULL,
  `isbn` text NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `penerbit` varchar(256) NOT NULL,
  `kota_terbit` varchar(50) NOT NULL,
  `tahun_terbit` int(11) NOT NULL,
  `jlh_halaman` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id_buku`, `judul_buku`, `isbn`, `pengarang`, `penerbit`, `kota_terbit`, `tahun_terbit`, `jlh_halaman`) VALUES
(3, 'Ternak Lele', '198231239', 'agung rahmawan', 'penerbit', 'jakarta', 1998, '2019');

-- --------------------------------------------------------

--
-- Struktur dari tabel `donatur`
--

CREATE TABLE IF NOT EXISTS `donatur` (
`id_donatur` int(11) NOT NULL,
  `nama_donatur` varchar(50) NOT NULL,
  `jenis_sumbangan` text NOT NULL,
  `alamat_donatur` text NOT NULL,
  `hp_donatur` text NOT NULL,
  `pekerjaan_donatur` text NOT NULL,
  `jlh_sumbangan` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `donatur`
--

INSERT INTO `donatur` (`id_donatur`, `nama_donatur`, `jenis_sumbangan`, `alamat_donatur`, `hp_donatur`, `pekerjaan_donatur`, `jlh_sumbangan`) VALUES
(1, 'Budi', 'BUKU TEKNOLOGI', 'Jalan Budiman', '08888888888', 'Wiraswasta', 50),
(2, 'Edward', 'Doa', 'Medan', '081243560988', 'Pemulung', 1),
(3, 'seline', 'nilai a', 'medan', '08080', 'aslab', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`) VALUES
(8, 'Arief Lasmono', 'alcantara', 'dd610c9178eab91dd555bda3982c3451e0dd7687'),
(9, 'hafiz', 'hafiz', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(10, 'team', 'team', 'd25187dc137f35c88bc80ec8c3ffbdb17b5eb873'),
(11, 'username', 'nama', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
 ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `donatur`
--
ALTER TABLE `donatur`
 ADD PRIMARY KEY (`id_donatur`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `donatur`
--
ALTER TABLE `donatur`
MODIFY `id_donatur` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
