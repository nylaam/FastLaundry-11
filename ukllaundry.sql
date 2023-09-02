-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Sep 2023 pada 04.22
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ukllaundry`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id` int(11) NOT NULL,
  `id_transaksi` int(11) DEFAULT NULL,
  `id_paket` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `detail_transaksi`
--

INSERT INTO `detail_transaksi` (`id`, `id_transaksi`, `id_paket`, `qty`) VALUES
(1, 1, 16, 1),
(2, 1, 15, 2),
(3, 2, 16, 2),
(4, 3, 16, 1),
(5, 3, 15, 2),
(6, 4, 16, 1),
(7, 5, 14, 1),
(8, 5, 16, 2),
(9, 6, 14, 1),
(10, 6, 15, 1),
(11, 6, 16, 1),
(12, 6, 17, 1),
(13, 7, 16, 2),
(14, 7, 15, 3),
(15, 8, 15, 1),
(16, 8, 17, 4),
(17, 9, 17, 1),
(18, 10, 14, 2),
(19, 11, 15, 122),
(20, 12, 16, 2000),
(21, 13, 15, 3),
(22, 14, 14, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `alamat` text NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `tlp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`id`, `nama`, `alamat`, `jenis_kelamin`, `tlp`) VALUES
(1, 'Sheila Joe', 'Kepanjen', 'Laki-laki', '0812'),
(4, 'Shidiq', 'Tulungagung', 'Laki-laki', '0815'),
(5, 'Adi', 'Kediri', 'Perempuan', '0811'),
(6, 'Zalfa', 'Malang', 'Perempuan', '0819'),
(7, 'Rain', 'Ngunut', 'Perempuan', '0817'),
(8, 'Rafi', 'Pagak', 'Laki-laki', '0813'),
(9, 'Ahmad', 'Malang', 'Laki-laki', ' 0889'),
(10, 'Reyhan', 'Malang', 'Laki-laki', '08923'),
(13, 'Shindy', 'Nganjuk', 'Perempuan', '08452');

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket`
--

CREATE TABLE `paket` (
  `id` int(11) NOT NULL,
  `jenis` enum('Seragam','Selimut','Bed Cover','Kaos') NOT NULL,
  `harga` int(11) NOT NULL,
  `foto` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `paket`
--

INSERT INTO `paket` (`id`, `jenis`, `harga`, `foto`) VALUES
(14, 'Kaos', 20000, 'laundry.png'),
(15, 'Selimut', 12000, 'laundry-basket.png'),
(16, 'Bed Cover', 35000, 'laundry (1).png'),
(17, 'Seragam', 14000, 'laundry (2).png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `id_member` int(11) DEFAULT NULL,
  `tgl` date NOT NULL,
  `batas_waktu` date NOT NULL,
  `tgl_bayar` date NOT NULL,
  `status` enum('baru','proses','selesai','diambil') NOT NULL,
  `dibayar` enum('dibayar','belum_dibayar') NOT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id`, `id_member`, `tgl`, `batas_waktu`, `tgl_bayar`, `status`, `dibayar`, `id_user`) VALUES
(1, 5, '2022-10-18', '2022-10-20', '2022-10-18', 'diambil', 'dibayar', 8),
(2, 7, '2022-10-19', '2022-10-21', '2022-10-19', 'diambil', 'dibayar', 8),
(3, 1, '2022-10-19', '2022-10-21', '2022-10-19', 'diambil', 'dibayar', 8),
(4, 8, '2022-10-19', '2022-10-21', '2022-10-19', 'diambil', 'dibayar', 8),
(5, 5, '2022-10-19', '2022-10-21', '2022-10-19', 'diambil', 'dibayar', 8),
(6, 13, '2022-10-20', '2022-10-22', '2022-10-20', 'diambil', 'dibayar', 8),
(7, 4, '2022-10-20', '2022-10-22', '2022-10-20', 'diambil', 'dibayar', 18),
(8, 13, '2022-10-20', '2022-10-22', '2022-10-20', 'diambil', 'dibayar', 8),
(9, 9, '2022-10-20', '2022-10-22', '2022-10-20', 'diambil', 'dibayar', 8),
(10, 7, '2022-10-20', '2022-10-22', '2022-10-20', 'diambil', 'dibayar', 8),
(11, 9, '2022-10-20', '2022-10-22', '2022-10-20', 'diambil', 'dibayar', 8),
(12, 9, '2022-10-20', '2022-10-22', '2022-10-20', 'diambil', 'dibayar', 8),
(13, 6, '2022-10-25', '2022-10-27', '2022-10-25', 'diambil', 'dibayar', 8),
(14, 9, '2023-09-01', '2023-09-03', '2023-09-01', 'diambil', 'dibayar', 19);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` text NOT NULL,
  `role` enum('admin','kasir','owner') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `role`) VALUES
(8, 'Risha Nafijha', 'fijasha', 'caf1a3dfb505ffed0d024130f58c5cfa', 'admin'),
(12, 'Lila', 'Kalila', '2e99bf4e42962410038bc6fa4ce40d97', 'kasir'),
(16, 'hanu', 'hanu123', '81dc9bdb52d04dc20036dbd8313ed055', 'owner'),
(18, 'Kayka', 'Kayla', '827ccb0eea8a706c4c34a16891f84e7b', 'kasir'),
(19, 'Ziska', 'ziskafa', '827ccb0eea8a706c4c34a16891f84e7b', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `paket`
--
ALTER TABLE `paket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
