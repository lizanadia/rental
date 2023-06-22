-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Jun 2023 pada 15.22
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rental`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_bank`
--

CREATE TABLE `tbl_bank` (
  `id_bank` int(11) NOT NULL,
  `nama_bank` varchar(20) NOT NULL,
  `nomor_rekening` varchar(25) NOT NULL,
  `nama_nasabah` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_bank`
--

INSERT INTO `tbl_bank` (`id_bank`, `nama_bank`, `nomor_rekening`, `nama_nasabah`) VALUES
(1, 'BCA', '12345678921', 'ADMIN RENTAL'),
(2, 'MANDIRI', '78777886765', 'ADMIN RENTAL'),
(7, 'BNI', '23342342423', 'Rental Mobil');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kontak`
--

CREATE TABLE `tbl_kontak` (
  `id_kontak` int(11) NOT NULL,
  `nama_kontak` varchar(30) NOT NULL,
  `email_kontak` varchar(30) NOT NULL,
  `subject_kontak` varchar(255) DEFAULT NULL,
  `pesan_kontak` text DEFAULT NULL,
  `tanggal_laporan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_kontak`
--

INSERT INTO `tbl_kontak` (`id_kontak`, `nama_kontak`, `email_kontak`, `subject_kontak`, `pesan_kontak`, `tanggal_laporan`) VALUES
(22, 'Zainul', 'zainularifin2897@gmail.com', 'Tolong tambahkan Warna mobil di halaman detail', 'Tolong Min di proses,Terima kasih', 'Sunday, 12-02-2023  06:27:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_merek`
--

CREATE TABLE `tbl_merek` (
  `id_merek` int(11) NOT NULL,
  `kode_merek` varchar(50) NOT NULL,
  `nama_merek` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_merek`
--

INSERT INTO `tbl_merek` (`id_merek`, `kode_merek`, `nama_merek`) VALUES
(9, 'PLG', 'Polygon');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pelanggan`
--

CREATE TABLE `tbl_pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama_pelanggan` varchar(128) NOT NULL,
  `email_pelanggan` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `gambar_pelanggan` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL,
  `status` int(1) NOT NULL,
  `upload_ktp` varchar(50) DEFAULT NULL,
  `nik_ktp` int(16) NOT NULL,
  `nama_ktp` varchar(128) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `rt_rw` varchar(11) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `provinsi` varchar(128) NOT NULL,
  `kecamatan` varchar(128) NOT NULL,
  `pekerjaan` varchar(128) NOT NULL,
  `tempat_lahir` varchar(128) NOT NULL,
  `tanggal_lahir` varchar(11) NOT NULL,
  `jenis_kelamin` varchar(9) NOT NULL,
  `berlaku_hingga` varchar(128) NOT NULL,
  `gol_darah` varchar(2) NOT NULL,
  `kabupaten_kota` varchar(128) NOT NULL,
  `kelurahan_des` varchar(128) NOT NULL,
  `kewarganegaraan` varchar(128) NOT NULL,
  `status_perkawinan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_pelanggan`
--

INSERT INTO `tbl_pelanggan` (`id_pelanggan`, `nama_pelanggan`, `email_pelanggan`, `password`, `gambar_pelanggan`, `is_active`, `status`, `upload_ktp`, `nik_ktp`, `nama_ktp`, `agama`, `rt_rw`, `alamat`, `provinsi`, `kecamatan`, `pekerjaan`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `berlaku_hingga`, `gol_darah`, `kabupaten_kota`, `kelurahan_des`, `kewarganegaraan`, `status_perkawinan`) VALUES
(20, 'liza', 'lizanadli9@gmail.com', 'liza1', 'default.jpg', 1, 1, NULL, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_sepeda`
--

CREATE TABLE `tbl_sepeda` (
  `id_sepeda` int(11) NOT NULL,
  `id_type` int(11) NOT NULL,
  `id_merek` int(11) NOT NULL,
  `nama_kendaraan` varchar(128) NOT NULL,
  `warna` varchar(50) NOT NULL,
  `tahun` int(4) NOT NULL,
  `status` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `deskripsi` varchar(128) NOT NULL,
  `slug` varchar(228) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_sepeda`
--

INSERT INTO `tbl_sepeda` (`id_sepeda`, `id_type`, `id_merek`, `nama_kendaraan`, `warna`, `tahun`, `status`, `harga`, `gambar`, `deskripsi`, `slug`) VALUES
(1, 33, 9, 'SEPEDA GUNUNG POLYGON MONARCH MYT', 'Kuning', 2019, '1', 20, 'ebbef61a526a24ded8789508a3a931e8.jpg', 'Ukuran ban: 26', 'sepeda-gunung-polygon-monarch-myt');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_token`
--

CREATE TABLE `tbl_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_type`
--

CREATE TABLE `tbl_type` (
  `id_type` int(11) NOT NULL,
  `kode_type` varchar(20) NOT NULL,
  `nama_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tbl_type`
--

INSERT INTO `tbl_type` (`id_type`, `kode_type`, `nama_type`) VALUES
(33, 'GNG', 'Gunung');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `level_user` int(1) NOT NULL,
  `status_user` int(1) NOT NULL,
  `photo_user` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `email`, `password`, `level_user`, `status_user`, `photo_user`) VALUES
(1, 'admin1', 'admin@gmail.com', '12345', 1, 1, '4e6540a6be8d3298d91b1c8984f97f75.jpeg'),
(5, 'user', 'user@gmail.com', '12345', 2, 1, '4b883a8a36c00eac7a7e69307e231bfc.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `test`
--

CREATE TABLE `test` (
  `id_order` int(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `status_message` varchar(50) NOT NULL,
  `gross_amount` int(20) NOT NULL,
  `bank` varchar(28) NOT NULL,
  `va_number` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `test`
--

INSERT INTO `test` (`id_order`, `nama`, `email`, `status_message`, `gross_amount`, `bank`, `va_number`) VALUES
(797289331, 'TAS PUMA', 'zainularifin2897@gmail.com', 'Transaksi sedang diproses', 100000, 'bca', '92611931072'),
(1511231572, 'JAM Tangan Test', 'arifin281297@gmail.com', 'Transaksi sedang diproses', 88000, 'bca', '92611426668');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `id_sepeda` int(11) NOT NULL,
  `tanggal_rental` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `harga` varchar(120) NOT NULL,
  `berapa_hari` varchar(128) NOT NULL,
  `sub_total` varchar(128) NOT NULL,
  `status_pembayaran` int(11) DEFAULT NULL,
  `total_bayar` int(120) DEFAULT NULL,
  `atas_nama_pelanggan` varchar(128) DEFAULT NULL,
  `nama_bank_pelanggan` varchar(128) DEFAULT NULL,
  `nomor_rekening_pelanggan` varchar(128) DEFAULT NULL,
  `bukti_pembayaran` varchar(120) DEFAULT NULL,
  `tanggal_pengembalian` date DEFAULT NULL,
  `status_pengembalian` varchar(50) DEFAULT NULL,
  `total_denda` int(120) DEFAULT NULL,
  `status_rental` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_pelanggan`, `id_sepeda`, `tanggal_rental`, `tanggal_kembali`, `harga`, `berapa_hari`, `sub_total`, `status_pembayaran`, `total_bayar`, `atas_nama_pelanggan`, `nama_bank_pelanggan`, `nomor_rekening_pelanggan`, `bukti_pembayaran`, `tanggal_pengembalian`, `status_pengembalian`, `total_denda`, `status_rental`) VALUES
(74, 2, 56, '2023-02-08', '2023-02-08', '200000', '1', '200000', 3, 200000, 'ari', 'BCA', '12345678887', 'cc972cfed949cebab29afba9acaf12b5.jpg', '2023-02-08', '1', 0, '1'),
(76, 19, 56, '2023-02-13', '2023-02-13', '200000', '1', '200000', 3, 200000, 'Zainul', 'BCA', '37746647373', '8f04ae0dc00da929ef1176c5b9196131.jpg', '2023-02-13', '1', 0, '1');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_bank`
--
ALTER TABLE `tbl_bank`
  ADD PRIMARY KEY (`id_bank`);

--
-- Indeks untuk tabel `tbl_kontak`
--
ALTER TABLE `tbl_kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indeks untuk tabel `tbl_merek`
--
ALTER TABLE `tbl_merek`
  ADD PRIMARY KEY (`id_merek`);

--
-- Indeks untuk tabel `tbl_pelanggan`
--
ALTER TABLE `tbl_pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indeks untuk tabel `tbl_sepeda`
--
ALTER TABLE `tbl_sepeda`
  ADD PRIMARY KEY (`id_sepeda`);

--
-- Indeks untuk tabel `tbl_token`
--
ALTER TABLE `tbl_token`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_type`
--
ALTER TABLE `tbl_type`
  ADD PRIMARY KEY (`id_type`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id_order`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_bank`
--
ALTER TABLE `tbl_bank`
  MODIFY `id_bank` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tbl_kontak`
--
ALTER TABLE `tbl_kontak`
  MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `tbl_merek`
--
ALTER TABLE `tbl_merek`
  MODIFY `id_merek` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tbl_pelanggan`
--
ALTER TABLE `tbl_pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `tbl_sepeda`
--
ALTER TABLE `tbl_sepeda`
  MODIFY `id_sepeda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_token`
--
ALTER TABLE `tbl_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `tbl_type`
--
ALTER TABLE `tbl_type`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `test`
--
ALTER TABLE `test`
  MODIFY `id_order` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1511231573;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
