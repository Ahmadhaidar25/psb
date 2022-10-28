-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 05 Jun 2022 pada 11.00
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
-- Database: `psb`
--

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2014_10_12_000000_create_users_table', 2),
(9, '2022_04_02_074124_alternatif', 4),
(12, '2022_04_14_155306_siswa', 6),
(13, '2022_03_19_090307_kriteria', 7),
(14, '2022_04_02_075111_normalisasi', 8),
(15, '2022_05_16_160134_akar_kuadrat', 9),
(16, '2022_05_18_065136_moora', 10),
(17, '2022_05_18_065145_smart', 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_akar`
--

CREATE TABLE `tb_akar` (
  `id_akar` int(5) NOT NULL,
  `id_siswa` int(10) NOT NULL,
  `kode_alternatif` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `absensi` float NOT NULL,
  `nilai_raport` float NOT NULL,
  `extrakulikuler` float NOT NULL,
  `jumlah_sertifikat` float NOT NULL,
  `sikap_ds` float NOT NULL,
  `sikap_ls` float NOT NULL,
  `prestasi_akademik` float NOT NULL,
  `prestasi_non_akademik` float NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_akar`
--

INSERT INTO `tb_akar` (`id_akar`, `id_siswa`, `kode_alternatif`, `absensi`, `nilai_raport`, `extrakulikuler`, `jumlah_sertifikat`, `sikap_ds`, `sikap_ls`, `prestasi_akademik`, `prestasi_non_akademik`, `created_at`, `updated_at`) VALUES
(70, 52, 'AL01', 4, 8100, 6400, 4, 5625, 7056, 10000, 6400, '2022-06-04 21:42:33', '2022-06-04 21:42:33'),
(71, 53, 'AL02', 9, 5625, 4900, 1, 6400, 8100, 3600, 6084, '2022-06-04 21:43:17', '2022-06-04 21:43:17'),
(72, 54, 'AL03', 0, 3600, 2500, 0, 4225, 6400, 6400, 8100, '2022-06-04 21:43:54', '2022-06-04 21:43:54'),
(73, 55, 'AL04', 1, 3025, 2025, 4, 3600, 8100, 4489, 7921, '2022-06-04 21:44:44', '2022-06-04 21:44:44'),
(74, 56, 'AL05', 0, 5625, 8100, 25, 6400, 3136, 7921, 4225, '2022-06-04 21:45:22', '2022-06-04 21:45:22'),
(75, 57, 'AL06', 16, 1600, 4761, 9, 7744, 3025, 8100, 6084, '2022-06-04 22:15:28', '2022-06-04 22:15:28'),
(76, 58, 'AL07', 0, 8100, 7569, 36, 7921, 6241, 6084, 4489, '2022-06-04 22:16:06', '2022-06-04 22:16:06'),
(77, 59, 'AL08', 0, 9025, 8100, 49, 8100, 10000, 10000, 7921, '2022-06-04 22:16:54', '2022-06-04 22:16:54'),
(78, 60, 'AL09', 4, 8100, 8100, 25, 7921, 4489, 6400, 4225, '2022-06-04 22:17:37', '2022-06-04 22:17:37'),
(79, 61, 'AL10', 0, 7921, 7396, 4, 6084, 8100, 1849, 4489, '2022-06-04 22:18:19', '2022-06-04 22:18:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_alternatif`
--

CREATE TABLE `tb_alternatif` (
  `kode_alternatif` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_siswa` int(10) NOT NULL,
  `absensi` int(11) NOT NULL,
  `nilai_raport` int(11) NOT NULL,
  `extrakulikuler` int(11) NOT NULL,
  `jumlah_sertifikat` int(11) NOT NULL,
  `sikap_ds` int(11) NOT NULL,
  `sikap_ls` int(11) NOT NULL,
  `prestasi_akademik` int(11) NOT NULL,
  `prestasi_non_akademik` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_alternatif`
--

INSERT INTO `tb_alternatif` (`kode_alternatif`, `id_siswa`, `absensi`, `nilai_raport`, `extrakulikuler`, `jumlah_sertifikat`, `sikap_ds`, `sikap_ls`, `prestasi_akademik`, `prestasi_non_akademik`, `created_at`, `updated_at`) VALUES
('AL01', 52, 2, 90, 80, 2, 75, 84, 100, 80, '2022-06-04 21:42:33', '2022-06-04 21:42:33'),
('AL02', 53, 3, 75, 70, 1, 80, 90, 60, 78, '2022-06-04 21:43:17', '2022-06-04 21:43:17'),
('AL03', 54, 0, 60, 50, 0, 65, 80, 80, 90, '2022-06-04 21:43:54', '2022-06-04 21:43:54'),
('AL04', 55, 1, 55, 45, 2, 60, 90, 67, 89, '2022-06-04 21:44:44', '2022-06-04 21:44:44'),
('AL05', 56, 0, 75, 90, 5, 80, 56, 89, 65, '2022-06-04 21:45:22', '2022-06-04 21:45:22'),
('AL06', 57, 4, 40, 69, 3, 88, 55, 90, 78, '2022-06-04 22:15:28', '2022-06-04 22:15:28'),
('AL07', 58, 0, 90, 87, 6, 89, 79, 78, 67, '2022-06-04 22:16:06', '2022-06-04 22:16:06'),
('AL08', 59, 0, 95, 90, 7, 90, 100, 100, 89, '2022-06-04 22:16:54', '2022-06-04 22:16:54'),
('AL09', 60, 2, 90, 90, 5, 89, 67, 80, 65, '2022-06-04 22:17:37', '2022-06-04 22:17:37'),
('AL10', 61, 0, 89, 86, 2, 78, 90, 43, 67, '2022-06-04 22:18:18', '2022-06-04 22:18:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_hasil_moora`
--

CREATE TABLE `tb_hasil_moora` (
  `id_moora` int(5) UNSIGNED NOT NULL,
  `kode_alternatif` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_siswa` int(5) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_hasil_moora`
--

INSERT INTO `tb_hasil_moora` (`id_moora`, `kode_alternatif`, `id_siswa`, `created_at`, `updated_at`) VALUES
(68, 'AL01', 52, '2022-06-04 21:42:33', '2022-06-04 21:42:33'),
(69, 'AL02', 53, '2022-06-04 21:43:17', '2022-06-04 21:43:17'),
(70, 'AL03', 54, '2022-06-04 21:43:54', '2022-06-04 21:43:54'),
(71, 'AL04', 55, '2022-06-04 21:44:44', '2022-06-04 21:44:44'),
(72, 'AL05', 56, '2022-06-04 21:45:22', '2022-06-04 21:45:22'),
(73, 'AL06', 57, '2022-06-04 22:15:28', '2022-06-04 22:15:28'),
(74, 'AL07', 58, '2022-06-04 22:16:06', '2022-06-04 22:16:06'),
(75, 'AL08', 59, '2022-06-04 22:16:54', '2022-06-04 22:16:54'),
(76, 'AL09', 60, '2022-06-04 22:17:37', '2022-06-04 22:17:37'),
(77, 'AL10', 61, '2022-06-04 22:18:19', '2022-06-04 22:18:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_hasil_smart`
--

CREATE TABLE `tb_hasil_smart` (
  `id_smart` int(5) UNSIGNED NOT NULL,
  `kode_alternatif` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_siswa` int(5) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_hasil_smart`
--

INSERT INTO `tb_hasil_smart` (`id_smart`, `kode_alternatif`, `id_siswa`, `created_at`, `updated_at`) VALUES
(54, 'AL01', 52, '2022-06-04 21:42:33', '2022-06-04 21:42:33'),
(55, 'AL02', 53, '2022-06-04 21:43:17', '2022-06-04 21:43:17'),
(56, 'AL03', 54, '2022-06-04 21:43:54', '2022-06-04 21:43:54'),
(57, 'AL04', 55, '2022-06-04 21:44:44', '2022-06-04 21:44:44'),
(58, 'AL05', 56, '2022-06-04 21:45:22', '2022-06-04 21:45:22'),
(59, 'AL06', 57, '2022-06-04 22:15:28', '2022-06-04 22:15:28'),
(60, 'AL07', 58, '2022-06-04 22:16:06', '2022-06-04 22:16:06'),
(61, 'AL08', 59, '2022-06-04 22:16:55', '2022-06-04 22:16:55'),
(62, 'AL09', 60, '2022-06-04 22:17:37', '2022-06-04 22:17:37'),
(63, 'AL10', 61, '2022-06-04 22:18:19', '2022-06-04 22:18:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kriteria`
--

CREATE TABLE `tb_kriteria` (
  `kode_kriteria` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kriteria` varchar(21) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis` varchar(7) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bobot` float NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_kriteria`
--

INSERT INTO `tb_kriteria` (`kode_kriteria`, `nama_kriteria`, `jenis`, `bobot`, `created_at`, `updated_at`) VALUES
('C1', 'Absensi', 'cost', 0.15, '2022-05-29 05:17:19', '2022-05-29 07:26:57'),
('C2', 'Nilai Raport', 'benefit', 0.25, '2022-05-29 05:27:06', '2022-05-29 07:22:54'),
('C3', 'Extrakulikuler', 'benefit', 0.1, '2022-05-29 05:27:58', '2022-05-29 07:23:30'),
('C4', 'Jumlah Sertifikat', 'benefit', 0.05, '2022-05-29 05:28:22', '2022-05-29 07:24:01'),
('C5', 'Sikap Didalam Sekolah', 'benefit', 0.05, '2022-05-29 07:25:03', '2022-05-29 07:25:03'),
('C6', 'Sikap Diluar Sekolah', 'benefit', 0.05, '2022-05-29 07:25:25', '2022-05-29 07:25:25'),
('C7', 'Prestasi Akademik', 'benefit', 0.2, '2022-05-29 07:25:58', '2022-05-29 21:44:05'),
('C8', 'Prestasi Non Akademik', 'benefit', 0.15, '2022-05-29 07:26:28', '2022-05-29 07:26:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id_siswa` int(10) NOT NULL,
  `nama_siswa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas` int(1) NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai_rapot` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_siswa`
--

INSERT INTO `tb_siswa` (`id_siswa`, `nama_siswa`, `kelas`, `jenis_kelamin`, `nilai_rapot`, `created_at`, `updated_at`) VALUES
(52, 'Faridah Hana', 7, 'perempuan', '90', '2022-06-03 10:20:30', '2022-06-03 10:20:30'),
(53, 'Indah Wulan Cipta S', 7, 'laki-laki', '75', '2022-06-03 10:21:16', '2022-06-03 10:21:16'),
(54, 'Meliana Azzahra R', 7, 'perempuan', '60', '2022-06-03 10:21:42', '2022-06-03 10:21:42'),
(55, 'Elsa Atha Salsabila', 7, 'perempuan', '55', '2022-06-03 10:22:03', '2022-06-03 10:22:03'),
(56, 'Sri Rahwati', 7, 'perempuan', '75', '2022-06-03 10:22:28', '2022-06-03 10:22:28'),
(57, 'Fahri Rizki S', 7, 'laki-laki', '40', '2022-06-03 10:23:45', '2022-06-03 10:23:45'),
(58, 'M. Azri Kurniawan', 7, 'laki-laki', '90', '2022-06-03 10:24:22', '2022-06-03 10:24:22'),
(59, 'Adillah Nurazizah', 7, 'perempuan', '95', '2022-06-03 10:24:56', '2022-06-03 10:24:56'),
(60, 'Syarifah', 7, 'perempuan', '90', '2022-06-03 10:25:18', '2022-06-03 10:25:18'),
(61, 'Fadli Fahrezi G', 7, 'laki-laki', '89', '2022-06-03 10:25:41', '2022-06-03 10:25:41'),
(62, 'Haura Salsabila', 7, 'perempuan', '100', '2022-06-03 10:26:05', '2022-06-03 10:26:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_utility`
--

CREATE TABLE `tb_utility` (
  `id_utility` int(5) NOT NULL,
  `id_siswa` int(10) NOT NULL,
  `kode_alternatif` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `absensi` int(11) NOT NULL,
  `nilai_raport` int(10) NOT NULL,
  `extrakulikuler` int(11) NOT NULL,
  `jumlah_sertifikat` int(11) NOT NULL,
  `sikap_ds` int(11) NOT NULL,
  `sikap_ls` int(11) NOT NULL,
  `prestasi_akademik` int(11) NOT NULL,
  `prestasi_non_akademik` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_utility`
--

INSERT INTO `tb_utility` (`id_utility`, `id_siswa`, `kode_alternatif`, `absensi`, `nilai_raport`, `extrakulikuler`, `jumlah_sertifikat`, `sikap_ds`, `sikap_ls`, `prestasi_akademik`, `prestasi_non_akademik`, `created_at`, `updated_at`) VALUES
(69, 52, 'AL01', 2, 90, 80, 2, 75, 84, 100, 80, '2022-06-04 21:42:33', '2022-06-04 21:42:33'),
(70, 53, 'AL02', 3, 75, 70, 1, 80, 90, 60, 78, '2022-06-04 21:43:17', '2022-06-04 21:43:17'),
(71, 54, 'AL03', 0, 60, 50, 0, 65, 80, 80, 90, '2022-06-04 21:43:54', '2022-06-04 21:43:54'),
(72, 55, 'AL04', 1, 55, 45, 2, 60, 90, 67, 89, '2022-06-04 21:44:44', '2022-06-04 21:44:44'),
(73, 56, 'AL05', 0, 75, 90, 5, 80, 56, 89, 65, '2022-06-04 21:45:22', '2022-06-04 21:45:22'),
(74, 57, 'AL06', 4, 40, 69, 3, 88, 55, 90, 78, '2022-06-04 22:15:28', '2022-06-04 22:15:28'),
(75, 58, 'AL07', 0, 90, 87, 6, 89, 79, 78, 67, '2022-06-04 22:16:06', '2022-06-04 22:16:06'),
(76, 59, 'AL08', 0, 95, 90, 7, 90, 100, 100, 89, '2022-06-04 22:16:54', '2022-06-04 22:16:54'),
(77, 60, 'AL09', 2, 90, 90, 5, 89, 67, 80, 65, '2022-06-04 22:17:37', '2022-06-04 22:17:37'),
(78, 61, 'AL10', 0, 89, 86, 2, 78, 90, 43, 67, '2022-06-04 22:18:19', '2022-06-04 22:18:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jk` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `password`, `jk`, `level`, `created_at`, `updated_at`) VALUES
(1, 'mutiara sri rusmanti', 'mutiara@gmail.com', '$2y$10$5Q.sPxeC93wot6AdJNUasOMe8ZC9TiarEH.ElsVgeB14nrhks4RCO', 'P', 'wali kelas', '2022-05-24 11:29:13', '2022-05-24 11:29:13'),
(2, 'Ahmad Haidar', 'haidar@gmail.com', '$2y$10$WNgtS/5nQQzL7OCN3nDrwOxv/ANzNWnp0s/7Hiwvwb1cfu83tAWDm', 'L', 'kesiswaan', '2022-05-24 11:30:20', '2022-05-24 11:30:48'),
(3, 'amirudin', 'amirudin@gmail.com', '$2y$10$fGxBjNd.wG3nLAmC8ObOjuWsBoBAsqzP.Ny14tcJKMoVQezn2IjCO', 'L', 'kesiswaan', '2022-05-29 12:04:32', '2022-05-30 10:50:15');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_akar`
--
ALTER TABLE `tb_akar`
  ADD PRIMARY KEY (`id_akar`),
  ADD KEY `id_siswa` (`id_siswa`),
  ADD KEY `id_siswa_2` (`id_siswa`),
  ADD KEY `id_siswa_3` (`id_siswa`),
  ADD KEY `kode_alternatif` (`kode_alternatif`);

--
-- Indeks untuk tabel `tb_alternatif`
--
ALTER TABLE `tb_alternatif`
  ADD PRIMARY KEY (`kode_alternatif`),
  ADD KEY `id_siswa` (`id_siswa`),
  ADD KEY `id_siswa_2` (`id_siswa`),
  ADD KEY `id_siswa_3` (`id_siswa`);

--
-- Indeks untuk tabel `tb_hasil_moora`
--
ALTER TABLE `tb_hasil_moora`
  ADD PRIMARY KEY (`id_moora`),
  ADD KEY `id_siswa` (`id_siswa`),
  ADD KEY `kode_alternatif` (`kode_alternatif`);

--
-- Indeks untuk tabel `tb_hasil_smart`
--
ALTER TABLE `tb_hasil_smart`
  ADD PRIMARY KEY (`id_smart`),
  ADD KEY `id_siswa` (`id_siswa`),
  ADD KEY `kode_alternatif` (`kode_alternatif`);

--
-- Indeks untuk tabel `tb_kriteria`
--
ALTER TABLE `tb_kriteria`
  ADD PRIMARY KEY (`kode_kriteria`);

--
-- Indeks untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indeks untuk tabel `tb_utility`
--
ALTER TABLE `tb_utility`
  ADD PRIMARY KEY (`id_utility`),
  ADD KEY `id_siswa` (`id_siswa`),
  ADD KEY `id_siswa_2` (`id_siswa`),
  ADD KEY `id_siswa_3` (`id_siswa`),
  ADD KEY `kode_alternatif` (`kode_alternatif`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `tb_akar`
--
ALTER TABLE `tb_akar`
  MODIFY `id_akar` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT untuk tabel `tb_hasil_moora`
--
ALTER TABLE `tb_hasil_moora`
  MODIFY `id_moora` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT untuk tabel `tb_hasil_smart`
--
ALTER TABLE `tb_hasil_smart`
  MODIFY `id_smart` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id_siswa` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT untuk tabel `tb_utility`
--
ALTER TABLE `tb_utility`
  MODIFY `id_utility` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_akar`
--
ALTER TABLE `tb_akar`
  ADD CONSTRAINT `tb_akar_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `tb_siswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_akar_ibfk_2` FOREIGN KEY (`kode_alternatif`) REFERENCES `tb_alternatif` (`kode_alternatif`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_alternatif`
--
ALTER TABLE `tb_alternatif`
  ADD CONSTRAINT `tb_alternatif_ibfk_2` FOREIGN KEY (`id_siswa`) REFERENCES `tb_siswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_hasil_moora`
--
ALTER TABLE `tb_hasil_moora`
  ADD CONSTRAINT `tb_hasil_moora_ibfk_1` FOREIGN KEY (`kode_alternatif`) REFERENCES `tb_alternatif` (`kode_alternatif`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_hasil_moora_ibfk_3` FOREIGN KEY (`id_siswa`) REFERENCES `tb_siswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_hasil_smart`
--
ALTER TABLE `tb_hasil_smart`
  ADD CONSTRAINT `tb_hasil_smart_ibfk_1` FOREIGN KEY (`kode_alternatif`) REFERENCES `tb_alternatif` (`kode_alternatif`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_hasil_smart_ibfk_2` FOREIGN KEY (`id_siswa`) REFERENCES `tb_siswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_utility`
--
ALTER TABLE `tb_utility`
  ADD CONSTRAINT `tb_utility_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `tb_siswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_utility_ibfk_3` FOREIGN KEY (`kode_alternatif`) REFERENCES `tb_alternatif` (`kode_alternatif`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
