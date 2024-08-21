-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 01 Jul 2024 pada 09.39
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pakar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `basis_kasus`
--

CREATE TABLE `basis_kasus` (
  `id_basis_kasus` int(11) NOT NULL,
  `kd_penyakit` varchar(50) NOT NULL,
  `id_gejala` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `basis_kasus`
--

INSERT INTO `basis_kasus` (`id_basis_kasus`, `kd_penyakit`, `id_gejala`) VALUES
(96, 'P002', 18),
(97, 'P002', 19),
(98, 'P002', 21),
(99, 'P002', 22),
(100, 'P002', 27),
(101, 'P002', 29),
(102, 'P002', 30),
(103, 'P002', 33),
(104, 'P003', 13),
(105, 'P003', 14),
(106, 'P003', 16),
(107, 'P003', 18),
(108, 'P003', 19),
(109, 'P003', 23),
(110, 'P003', 24),
(111, 'P003', 33),
(112, 'P003', 34);

-- --------------------------------------------------------

--
-- Struktur dari tabel `gejala`
--

CREATE TABLE `gejala` (
  `id_gejala` int(11) NOT NULL,
  `kd_gejala` varchar(50) NOT NULL,
  `nm_gejala` varchar(50) NOT NULL,
  `bobot` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gejala`
--

INSERT INTO `gejala` (`id_gejala`, `kd_gejala`, `nm_gejala`, `bobot`) VALUES
(13, 'G001', 'Demam', 1),
(14, 'G002', 'Diare', 1),
(15, 'G003', 'Degisrasi', 1),
(16, 'G004', 'Depresi Hebat', 1),
(17, 'G005', 'Batuk berdahak kuning', 3),
(18, 'G006', 'Sesak nafas ', 3),
(19, 'G007', 'Nyeri di dada', 3),
(20, 'G008', 'Panas naik turun', 3),
(21, 'G009', 'Demam ', 3),
(22, 'G010', 'Nafsu makan berkurang', 3),
(23, 'G011', 'Bersin di pagi hari', 3),
(24, 'G012', 'Mual', 3),
(25, 'G013', 'Perut terasa sakit ', 3),
(26, 'G014', 'Radang paru', 3),
(27, 'G015', 'Berat badan turun', 5),
(28, 'G016', 'Demam lebih seminggu', 5),
(29, 'G017', 'Batuk berdarah', 5),
(30, 'G018', 'Keringat malam', 5),
(32, 'G020', 'Menggigil ', 5),
(33, 'G021', 'Badan lemah ', 5),
(34, 'G022', 'Muntah ', 5),
(35, 'G023', 'Luka pada selaput hidung', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_konsultasi`
--

CREATE TABLE `hasil_konsultasi` (
  `id_konsultasi` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `konsultasi` int(10) NOT NULL,
  `id_gejala` int(3) NOT NULL,
  `bobot` int(3) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hasil_konsultasi`
--

INSERT INTO `hasil_konsultasi` (`id_konsultasi`, `id_user`, `konsultasi`, `id_gejala`, `bobot`, `waktu`) VALUES
(237, 4, 5, 26, 3, '2018-01-03 04:36:08'),
(236, 4, 5, 25, 3, '2018-01-03 04:36:08'),
(235, 4, 5, 19, 3, '2018-01-03 04:36:08'),
(234, 4, 5, 18, 3, '2018-01-03 04:36:08'),
(233, 4, 5, 17, 3, '2018-01-03 04:36:08'),
(232, 4, 5, 16, 1, '2018-01-03 04:36:08'),
(231, 4, 5, 15, 1, '2018-01-03 04:36:08'),
(230, 4, 5, 14, 1, '2018-01-03 04:36:08'),
(229, 4, 5, 13, 1, '2018-01-03 04:36:08'),
(228, 4, 4, 17, 3, '2018-01-03 04:35:48'),
(227, 4, 4, 16, 1, '2018-01-03 04:35:48'),
(226, 4, 4, 15, 1, '2018-01-03 04:35:48'),
(225, 4, 4, 14, 1, '2018-01-03 04:35:48'),
(224, 4, 4, 13, 1, '2018-01-03 04:35:48'),
(223, 4, 3, 26, 3, '2017-12-20 15:14:58'),
(222, 4, 3, 25, 3, '2017-12-20 15:14:58'),
(221, 4, 3, 15, 1, '2017-12-20 15:14:58'),
(220, 4, 3, 14, 1, '2017-12-20 15:14:58'),
(219, 4, 3, 13, 1, '2017-12-20 15:14:58'),
(218, 4, 2, 17, 3, '2017-12-16 12:35:18'),
(217, 4, 2, 16, 1, '2017-12-16 12:35:18'),
(216, 4, 2, 15, 1, '2017-12-16 12:35:18'),
(215, 4, 2, 14, 1, '2017-12-16 12:35:18'),
(214, 4, 2, 13, 1, '2017-12-16 12:35:18'),
(213, 4, 1, 18, 3, '2017-12-16 03:52:46'),
(212, 4, 1, 17, 3, '2017-12-16 03:52:46'),
(211, 4, 1, 15, 1, '2017-12-16 03:52:46'),
(210, 4, 1, 14, 1, '2017-12-16 03:52:46'),
(209, 4, 1, 13, 1, '2017-12-16 03:52:46'),
(238, 5, 6, 14, 1, '2022-02-11 04:59:57'),
(239, 5, 6, 15, 1, '2022-02-11 04:59:57'),
(240, 5, 6, 17, 3, '2022-02-11 04:59:57'),
(241, 5, 6, 21, 3, '2022-02-11 04:59:57'),
(242, 5, 6, 22, 3, '2022-02-11 04:59:57'),
(243, 5, 6, 26, 3, '2022-02-11 04:59:57'),
(244, 5, 6, 27, 5, '2022-02-11 04:59:57'),
(245, 5, 7, 13, 1, '2022-02-11 05:11:58'),
(246, 5, 7, 15, 1, '2022-02-11 05:11:58'),
(247, 5, 7, 18, 3, '2022-02-11 05:11:58'),
(248, 5, 7, 23, 3, '2022-02-11 05:11:58'),
(249, 5, 7, 24, 3, '2022-02-11 05:11:58'),
(250, 5, 7, 29, 5, '2022-02-11 05:11:58'),
(251, 5, 7, 30, 5, '2022-02-11 05:11:58'),
(252, 5, 8, 13, 1, '2022-02-11 05:16:03'),
(253, 5, 8, 14, 1, '2022-02-11 05:16:03'),
(254, 5, 8, 15, 1, '2022-02-11 05:16:03'),
(255, 5, 8, 20, 3, '2022-02-11 05:16:03'),
(256, 5, 8, 21, 3, '2022-02-11 05:16:03'),
(257, 5, 8, 24, 3, '2022-02-11 05:16:03'),
(258, 5, 8, 25, 3, '2022-02-11 05:16:03'),
(259, 5, 8, 27, 5, '2022-02-11 05:16:03'),
(260, 5, 8, 29, 5, '2022-02-11 05:16:03'),
(261, 5, 9, 13, 1, '2022-02-13 10:26:45'),
(262, 5, 9, 15, 1, '2022-02-13 10:26:45'),
(263, 5, 9, 16, 1, '2022-02-13 10:26:45'),
(264, 5, 9, 27, 5, '2022-02-13 10:26:45'),
(265, 5, 9, 28, 5, '2022-02-13 10:26:45'),
(266, 5, 9, 29, 5, '2022-02-13 10:26:45'),
(267, 5, 9, 30, 5, '2022-02-13 10:26:45'),
(268, 5, 9, 32, 5, '2022-02-13 10:26:45'),
(269, 5, 9, 33, 5, '2022-02-13 10:26:45'),
(270, 5, 10, 13, 1, '2022-12-04 13:17:08'),
(271, 5, 10, 14, 1, '2022-12-04 13:17:08'),
(272, 5, 10, 27, 5, '2022-12-04 13:17:08'),
(273, 5, 10, 28, 5, '2022-12-04 13:17:08'),
(274, 5, 10, 29, 5, '2022-12-04 13:17:08'),
(275, 5, 10, 30, 5, '2022-12-04 13:17:08'),
(276, 5, 10, 32, 5, '2022-12-04 13:17:08'),
(277, 5, 10, 33, 5, '2022-12-04 13:17:08'),
(278, 5, 11, 17, 3, '2022-12-04 13:38:03'),
(279, 5, 11, 18, 3, '2022-12-04 13:38:03'),
(280, 5, 11, 19, 3, '2022-12-04 13:38:03'),
(281, 5, 11, 20, 3, '2022-12-04 13:38:03'),
(282, 6, 12, 13, 1, '2023-01-11 12:39:36'),
(283, 6, 12, 16, 1, '2023-01-11 12:39:36'),
(284, 6, 12, 20, 3, '2023-01-11 12:39:36'),
(285, 6, 12, 22, 3, '2023-01-11 12:39:36'),
(286, 6, 12, 23, 3, '2023-01-11 12:39:36'),
(287, 6, 12, 24, 3, '2023-01-11 12:39:36'),
(288, 6, 12, 25, 3, '2023-01-11 12:39:36'),
(289, 6, 12, 35, 5, '2023-01-11 12:39:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keterangan`
--

CREATE TABLE `keterangan` (
  `id_keterangan` int(10) NOT NULL,
  `id_konsultasi` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nilai` double NOT NULL,
  `kd_penyakit` varchar(5) NOT NULL,
  `tgl_konsultasi` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `keterangan`
--

INSERT INTO `keterangan` (`id_keterangan`, `id_konsultasi`, `nama`, `nilai`, `kd_penyakit`, `tgl_konsultasi`) VALUES
(26, 10, 'dayat', 0.73333333333333, 'P004', '2022-12-04 13:17:10'),
(27, 11, 'dayat', 0.36363636363636, 'P001', '2022-12-04 13:38:05'),
(28, 12, 'genim aja', 0.43478260869565, '', '2023-01-11 12:39:38'),
(29, 12, 'genim aja', 0.43478260869565, '', '2023-01-11 12:40:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `id_user` int(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nm_lengkap` varchar(255) NOT NULL,
  `jns_kelamin` varchar(10) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`id_user`, `username`, `password`, `nm_lengkap`, `jns_kelamin`, `alamat`, `no_hp`, `pekerjaan`) VALUES
(4, 'jihan', 'jihan123', 'Jihan Yulianda', 'P', 'Padang', '082281548701', 'Mahasiswa'),
(5, 'dayat', 'dayat', 'dayat', 'L', 'padang', '08289289898', 'mahasiswa'),
(6, 'genim', 'genim', 'genim aja', 'L', 'padang', '8934294243', 'guru');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyakit`
--

CREATE TABLE `penyakit` (
  `kd_penyakit` varchar(50) NOT NULL,
  `id_admin` int(20) NOT NULL,
  `nm_penyakit` varchar(50) NOT NULL,
  `ket` text NOT NULL,
  `solusi` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penyakit`
--

INSERT INTO `penyakit` (`kd_penyakit`, `id_admin`, `nm_penyakit`, `ket`, `solusi`) VALUES
('P001', 1, 'Gingivitis ', '-', 'Bawa Ke Dokter '),
('P002', 1, 'Karies Gigi', '-', 'Vaksinasi'),
('P003', 1, 'Trench Mouth ', '-', 'Bawa Ke dokter ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `basis_kasus`
--
ALTER TABLE `basis_kasus`
  ADD PRIMARY KEY (`id_basis_kasus`);

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`id_gejala`);

--
-- Indexes for table `hasil_konsultasi`
--
ALTER TABLE `hasil_konsultasi`
  ADD PRIMARY KEY (`id_konsultasi`);

--
-- Indexes for table `keterangan`
--
ALTER TABLE `keterangan`
  ADD PRIMARY KEY (`id_keterangan`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`kd_penyakit`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `basis_kasus`
--
ALTER TABLE `basis_kasus`
  MODIFY `id_basis_kasus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;
--
-- AUTO_INCREMENT for table `gejala`
--
ALTER TABLE `gejala`
  MODIFY `id_gejala` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `hasil_konsultasi`
--
ALTER TABLE `hasil_konsultasi`
  MODIFY `id_konsultasi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=290;
--
-- AUTO_INCREMENT for table `keterangan`
--
ALTER TABLE `keterangan`
  MODIFY `id_keterangan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_user` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
