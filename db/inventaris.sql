-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 19 Jun 2022 pada 16.48
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventaris`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akar`
--

CREATE TABLE `akar` (
  `id_akar` int(5) NOT NULL,
  `kode_barang` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_alternatif` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gedung_a` float NOT NULL,
  `gedung_b` float NOT NULL,
  `gedung_c` float NOT NULL,
  `kondisi_barang` float NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `akar`
--

INSERT INTO `akar` (`id_akar`, `kode_barang`, `kode_alternatif`, `gedung_a`, `gedung_b`, `gedung_c`, `kondisi_barang`, `created_at`, `updated_at`) VALUES
(26, 'BR01', 'AL01', 100, 25, 25, 16, '2022-06-02 12:40:56', '2022-06-02 12:40:56'),
(27, 'BR02', 'AL02', 900, 225, 225, 36, '2022-06-02 12:41:20', '2022-06-02 12:41:20'),
(28, 'BR03', 'AL03', 4, 4, 0, 0, '2022-06-02 12:41:47', '2022-06-02 12:41:47'),
(29, 'BR04', 'AL04', 64, 9, 36, 0, '2022-06-02 12:42:20', '2022-06-02 12:42:20'),
(35, 'BR05', 'AL05', 16, 4, 1, 1, '2022-06-02 12:48:00', '2022-06-02 12:48:00'),
(36, 'BR06', 'AL06', 22500, 10000, 2500, 1849, '2022-06-02 12:49:28', '2022-06-02 12:49:28'),
(37, 'BR07', 'AL07', 40000, 5776, 10000, 10000, '2022-06-02 12:50:05', '2022-06-02 12:50:05'),
(38, 'BR08', 'AL08', 225, 25, 100, 25, '2022-06-02 12:50:34', '2022-06-02 12:50:34'),
(39, 'BR09', 'AL09', 900, 900, 900, 1, '2022-06-02 12:51:00', '2022-06-02 12:51:00'),
(40, 'BR10', 'AL10', 2500, 1225, 225, 4, '2022-06-02 12:51:54', '2022-06-02 12:51:54'),
(41, 'BR12', 'AL11', 100, 400, 1600, 2500, '2022-06-11 01:14:56', '2022-06-11 01:14:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `alternatif`
--

CREATE TABLE `alternatif` (
  `kode_alternatif` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_barang` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gedung_a` float NOT NULL,
  `gedung_b` float NOT NULL,
  `gedung_c` float NOT NULL,
  `kondisi_barang` float NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `alternatif`
--

INSERT INTO `alternatif` (`kode_alternatif`, `kode_barang`, `gedung_a`, `gedung_b`, `gedung_c`, `kondisi_barang`, `created_at`, `updated_at`) VALUES
('AL01', 'BR01', 10, 5, 5, 4, NULL, NULL),
('AL02', 'BR02', 30, 15, 15, 6, NULL, NULL),
('AL03', 'BR03', 2, 2, 0, 0, NULL, NULL),
('AL04', 'BR04', 8, 3, 6, 0, NULL, NULL),
('AL05', 'BR05', 4, 2, 1, 1, NULL, NULL),
('AL06', 'BR06', 150, 100, 50, 43, NULL, NULL),
('AL07', 'BR07', 200, 76, 100, 100, NULL, NULL),
('AL08', 'BR08', 15, 5, 10, 5, NULL, NULL),
('AL09', 'BR09', 30, 30, 30, 1, NULL, NULL),
('AL10', 'BR10', 50, 35, 15, 2, NULL, NULL),
('AL11', 'BR12', 10, 20, 40, 50, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `kode_barang` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_barang` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `lokasi` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(10) NOT NULL,
  `qty` int(3) NOT NULL,
  `total` int(15) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`kode_barang`, `nama_barang`, `tanggal`, `lokasi`, `harga`, `qty`, `total`, `created_at`, `updated_at`) VALUES
('BR01', 'Meja 1 Biro', '2022-06-03', 'Gedung A', 400000, 40, 16000000, NULL, NULL),
('BR02', 'meja 1/2 biro', '2022-06-03', 'Gedung B', 150000, 10, 1500000, NULL, NULL),
('BR03', 'meja meeting', '2022-06-03', 'Gedung C', 150000, 20, 3000000, NULL, NULL),
('BR04', 'Meja infocus', '2022-06-03', 'Gedung B', 400000, 4, 1600000, NULL, NULL),
('BR05', 'meja tamu', '2022-06-03', 'Gedung A', 400000, 3, 1200000, NULL, NULL),
('BR06', 'kursi kuliah cheetose', '2022-06-03', 'Gedung C', 600000, 4, 2400000, NULL, NULL),
('BR07', 'kursi kuliah kayu', '2022-06-03', 'Gedung A', 50000, 30, 1500000, NULL, NULL),
('BR08', 'infocus', '2022-06-03', 'Gedung B', 60000, 7, 420000, NULL, NULL),
('BR09', 'kursi futura', '2022-06-03', 'Gedung C', 150000, 4, 600000, NULL, NULL),
('BR10', 'kursi lipat', '2022-06-03', 'Gedung A', 150000, 10, 1500000, NULL, NULL),
('BR11', 'kursi sofa', '2022-06-03', '', 150000, 3, 450000, NULL, NULL),
('BR12', 'laptop assus', '2022-06-11', 'Gedung A', 4000000, 3, 12000000, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_moora`
--

CREATE TABLE `hasil_moora` (
  `id_moora` int(5) NOT NULL,
  `kode_barang` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_alternatif` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `hasil_moora`
--

INSERT INTO `hasil_moora` (`id_moora`, `kode_barang`, `kode_alternatif`, `created_at`, `updated_at`) VALUES
(32, 'BR01', 'AL01', '2022-06-02 12:40:56', '2022-06-02 12:40:56'),
(33, 'BR02', 'AL02', '2022-06-02 12:41:20', '2022-06-02 12:41:20'),
(34, 'BR03', 'AL03', '2022-06-02 12:41:47', '2022-06-02 12:41:47'),
(35, 'BR04', 'AL04', '2022-06-02 12:42:20', '2022-06-02 12:42:20'),
(41, 'BR05', 'AL05', '2022-06-02 12:48:00', '2022-06-02 12:48:00'),
(42, 'BR06', 'AL06', '2022-06-02 12:49:28', '2022-06-02 12:49:28'),
(43, 'BR07', 'AL07', '2022-06-02 12:50:05', '2022-06-02 12:50:05'),
(44, 'BR08', 'AL08', '2022-06-02 12:50:34', '2022-06-02 12:50:34'),
(45, 'BR09', 'AL09', '2022-06-02 12:51:01', '2022-06-02 12:51:01'),
(46, 'BR10', 'AL10', '2022-06-02 12:51:54', '2022-06-02 12:51:54'),
(47, 'BR12', 'AL11', '2022-06-11 01:14:56', '2022-06-11 01:14:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int(5) NOT NULL,
  `kode_kriteria` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kriteria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bobot` float NOT NULL,
  `jenis` varchar(7) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `kode_kriteria`, `nama_kriteria`, `bobot`, `jenis`, `created_at`, `updated_at`) VALUES
(1, 'C001', 'Gedung A', 0.25, 'benefit', '2022-05-18 23:54:29', '2022-05-27 10:31:04'),
(2, 'C002', 'Gedung B', 0.25, 'benefit', '2022-05-26 10:51:46', '2022-05-27 10:31:11'),
(3, 'C003', 'Gedung C', 0.35, 'benefit', '2022-05-27 10:30:08', '2022-05-27 10:31:26'),
(7, 'C004', 'kondisi barang', 0.15, 'cost', '2022-05-31 08:16:34', '2022-05-31 08:16:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(9, '2022_05_05_133858_kriteria', 4),
(10, '2022_04_08_144542_barang', 5),
(15, '2022_05_07_171459_alternatif', 9),
(19, '2022_04_10_150751_komentar', 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gander` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `avatar`, `username`, `password`, `gander`, `level`, `created_at`, `updated_at`) VALUES
(4, 'staff admin', '1654944480,jpg', 'admin2', '$2y$10$gzDFJxmyjDAH89TF.XcMOOpaN9eDdanKUrFcBTt.bD3vgeTWctCaS', 'L', 'admin', '2022-04-08 10:25:44', '2022-06-11 03:48:00'),
(5, 'GSD', '1654750927,png', 'GSD1', '$2y$10$ROyWaJKKhC.1EJt0fRtpxuOmsITFxC7WalWirUPmL9zTP0WjW6NkS', 'L', 'gsd', '2022-04-08 10:57:39', '2022-06-08 22:02:07'),
(6, 'Staff IT', '1654935453,png', 'itsd', '$2y$10$19jrsTju8M8BAmDZ23B5aOGZNrj721zNzNg/WJBh5YK126URWhkSu', 'L', 'it', '2022-04-08 10:58:21', '2022-06-11 01:17:33'),
(11, 'GSD2', '1654935208.png', 'GSD2', '$2y$10$DNPi0nuzMB3D9jDJFzHFFOzvpPKyT4pmutgiiUKragDVYUGzUSD3m', 'L', 'gsd', '2022-06-11 01:13:28', '2022-06-11 01:13:28');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akar`
--
ALTER TABLE `akar`
  ADD PRIMARY KEY (`id_akar`),
  ADD KEY `id_barang` (`kode_barang`),
  ADD KEY `kode_alternatif` (`kode_alternatif`),
  ADD KEY `kode_barang` (`kode_barang`);

--
-- Indeks untuk tabel `alternatif`
--
ALTER TABLE `alternatif`
  ADD PRIMARY KEY (`kode_alternatif`),
  ADD KEY `id_barang` (`kode_barang`),
  ADD KEY `kode_barang` (`kode_barang`);

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kode_barang`);

--
-- Indeks untuk tabel `hasil_moora`
--
ALTER TABLE `hasil_moora`
  ADD PRIMARY KEY (`id_moora`),
  ADD KEY `kode_barang` (`kode_barang`),
  ADD KEY `kode_alternatif` (`kode_alternatif`);

--
-- Indeks untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`),
  ADD UNIQUE KEY `nama_kriteria` (`nama_kriteria`),
  ADD KEY `kode_kriteria` (`kode_kriteria`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akar`
--
ALTER TABLE `akar`
  MODIFY `id_akar` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT untuk tabel `hasil_moora`
--
ALTER TABLE `hasil_moora`
  MODIFY `id_moora` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `akar`
--
ALTER TABLE `akar`
  ADD CONSTRAINT `akar_ibfk_1` FOREIGN KEY (`kode_barang`) REFERENCES `barang` (`kode_barang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `alternatif`
--
ALTER TABLE `alternatif`
  ADD CONSTRAINT `alternatif_ibfk_1` FOREIGN KEY (`kode_barang`) REFERENCES `barang` (`kode_barang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `hasil_moora`
--
ALTER TABLE `hasil_moora`
  ADD CONSTRAINT `hasil_moora_ibfk_1` FOREIGN KEY (`kode_barang`) REFERENCES `barang` (`kode_barang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hasil_moora_ibfk_2` FOREIGN KEY (`kode_alternatif`) REFERENCES `alternatif` (`kode_alternatif`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
