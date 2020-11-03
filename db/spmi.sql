-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Nov 2020 pada 12.17
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spmi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `inst_unit`
--

CREATE TABLE `inst_unit` (
  `unit_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `inisial` varchar(45) DEFAULT NULL,
  `desc` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `inst_unit`
--

INSERT INTO `inst_unit` (`unit_id`, `name`, `inisial`, `desc`) VALUES
(55, 'Satuan Pengawas Internal', 'SPI', 'Unit Untuk Mengawasi Proses Yang berjalan di Instansi'),
(56, 'Satuan Penjaminan Mutu', 'SPM', 'Unit yang bertanggung jawab dalam penjaminan mutu\r\n'),
(69, 'Lembaga Penelitian dan Pengabdian Kepada Masyarakat ', 'LPPM', 'Unit ini bertanggung jawab untuk penelitian dan pengabdian kepada masyarakat oleh instansi\r\n'),
(70, 'Lembaga Kemitraan dan Hubungan Masyarakat', 'LKHM', 'Unit ini bertanggung jawab dalam mengurus kemitraan dan hubungan masyarakat  '),
(74, 'Fakultas Teknologi Informatika dan Elektro', 'FTIE', 'Fakultas Teknologi Informatika dan Elektro'),
(75, 'Fakultas Bioteknologi', 'FB', 'Fakultas Bioteknologi'),
(76, 'Fakultas Teknologi Industri', 'FTI', 'Fakultas Teknologi Industri'),
(77, 'Senat Fakultas FTIE', 'SF FTIE', 'Senat Fakultas FTIE'),
(78, 'Senat Akademik', 'SA', 'Senat Akademik IT Del'),
(79, 'Gugus Jaminan Mutu FTIE', 'GJMFTIE', 'Gugus Jaminan Mutu FTIE'),
(80, 'Program Studi Sarjana Informatika', 'S1TI', 'Program Studi Sarjana Informatika'),
(81, 'Gugus Bidang Kajian S1TI', 'GBKS1TI', 'Gugus Bidang Kajian S1TI'),
(82, 'Program Studi Sarjana Sistem Informasi', 'S1SI', 'Program Studi Sarjana Sistem Informasi'),
(83, 'Gugus Bidang Kajian S1 Sistem Informasi', 'GBK SI', 'Gugus Bidang Kajian S1 Sistem Informasi'),
(84, 'Sarjana Teknik Elektro', 'S1TE', 'Sarjana Teknik Elektro'),
(85, 'Gugus Bidang Kajian S1 TE', 'GBK TE', 'Gugus Bidang Kajian S1 TE'),
(86, 'Program Studi Diploma IV Teknik Rekayasa Perangkat Lunak', 'D4TRPL', 'Program Studi Diploma IV Teknik Rekayasa Perangkat Lunak'),
(87, 'Gugus Bidang Kajian D4TI', 'GBK D4TI', 'Gugus Bidang Kajian D4TI'),
(88, 'Program Studi Diploma III Teknik Informatika', 'D3TI', 'Program Studi Diploma III Teknik Informatika'),
(89, 'Gugus Bidang Kajian D3TI', 'GBK D3TI', 'Gugus Bidang Kajian D3TI'),
(90, 'Program Studi Diploma III Teknik Komputer', 'D3TK', 'Program Studi Diploma III Teknik Komputer'),
(91, 'Gugus Bidang Kajian D3TK', 'GBKB D3TK', 'Gugus Bidang Kajian D3TK'),
(92, 'Senat Fakultas FB', 'SF FB', 'Senat Fakultas FB'),
(93, 'Gugus Jaminan Mutu FB', 'GJM FB', 'Gugus Jaminan Mutu FB'),
(94, 'Program Studi Sarjana Teknik Bioproses', 'TB', 'Program Studi Sarjana Teknik Bioproses'),
(95, 'Gugus Bidang Kajian TB', 'GBK TB', 'Gugus Bidang Kajian TB'),
(96, 'Senat Fakultas FTI', 'SF FTI', 'Senat Fakultas FTI'),
(97, 'Gugus Jaminan Mutu FTI', 'GJM FTI', 'Gugus Jaminan Mutu FTI'),
(98, 'Program Studi Sarjana Manajemen Rekayasa', 'S1MR', 'Program Studi Sarjana Manajemen Rekayasa'),
(99, 'Gugus Bidang Kajian S1MR', 'GBK MR', 'Gugus Bidang Kajian S1MR'),
(100, 'Direktorat Penelitian dan Pengabdian kepada Masyarakat', 'DPPM', 'Direktorat Penelitian dan Pengabdian kepada Masyarakat'),
(101, 'Keasramaan', 'Keasramaan', 'Unit untuk memelihara keasramaan dan administrasi asrama.'),
(102, 'Rektorat', 'Rek', 'Unit Rektorat'),
(103, 'Pendamping Asrama', 'PA', 'Pendamping Asrama');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(24, '2014_10_12_000000_create_users_table', 1),
(25, '2014_10_12_100000_create_password_resets_table', 1),
(26, '2020_07_18_192201_create_spmi_dokumens_table', 1),
(27, '2020_07_19_162150_update_users_table_add_api_token_field', 1),
(28, '2020_07_19_183009_create_dokumens_table', 1),
(29, '2020_07_21_082329_create_audits_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `nama` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `role`
--

INSERT INTO `role` (`id`, `nama`) VALUES
(0, 'user'),
(1, 'admin'),
(2, 'spi'),
(3, 'rektor');

-- --------------------------------------------------------

--
-- Struktur dari tabel `spmi_daftar_tilik`
--

CREATE TABLE `spmi_daftar_tilik` (
  `daftar_tilik_id` int(11) NOT NULL,
  `inst_unit` int(11) DEFAULT NULL,
  `laporan_id` int(11) DEFAULT NULL,
  `referensi` varchar(255) DEFAULT NULL,
  `Pernyataan` varchar(255) DEFAULT NULL,
  `catatan_khusus` varchar(255) DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_by` varchar(32) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` varchar(32) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `spmi_laporan_unit`
--

CREATE TABLE `spmi_laporan_unit` (
  `laporan_unit_id` int(11) NOT NULL,
  `inst_unit` int(11) DEFAULT NULL,
  `nama_laporan` varchar(191) DEFAULT NULL,
  `tujuan` text,
  `kegiatan_rutin` text,
  `kegiatan_non_rutin` text,
  `serapan_anggaran` text,
  `pemasukan_dana` text,
  `keterangan_dana` text,
  `evaluasi_kegiatan` text,
  `rencana_kerja_bulan_berikutnya` text,
  `hambatan` text,
  `upaya_mengatasi_hambatan` text,
  `kesimpulan_dan_saran` text,
  `unggah_dokumen` varchar(255) DEFAULT NULL,
  `opsi` int(11) DEFAULT '3',
  `created_at` datetime DEFAULT NULL,
  `created_by` varchar(191) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `spmi_opsi`
--

CREATE TABLE `spmi_opsi` (
  `opsi_id` int(11) NOT NULL,
  `nama_opsi` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `spmi_opsi`
--

INSERT INTO `spmi_opsi` (`opsi_id`, `nama_opsi`) VALUES
(1, 'Y'),
(2, 'N'),
(3, 'NULL');

-- --------------------------------------------------------

--
-- Struktur dari tabel `spmi_revisi_laporan_unit`
--

CREATE TABLE `spmi_revisi_laporan_unit` (
  `spmi_revisi_laporan_unit_id` int(11) NOT NULL,
  `laporan_unit_id` int(11) DEFAULT NULL,
  `komentar` text,
  `unggah_dokumen` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `inst_unit` int(11) DEFAULT NULL,
  `akun_id` int(11) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(11) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `inst_unit`, `akun_id`, `name`, `email`, `password`, `role_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 69, 1, 'Unit', 'user@gmail.com', '$2y$10$Me2hoELAx.FKEMdcPfRz0e3GrSvWAgikZy8fb1AA6u9khuHHISqSi', 0, 'gy3GaSBb4mafSZmnDZzDZptRjxnZRxJf2svwwTEwIkDyLlc9VjSoAnTnV5TA', '2020-07-22 21:18:47', '2020-07-22 21:18:47'),
(2, 56, 2, 'Spm', 'spmiadmin@gmail.com', '$2y$10$kJHxZkRQrXVMS8QZUlPZK.fKFPN2m6ALrbabopFhFARNWs/WlsTu2', 1, 'LZPX9i36cA82myOqtb9uBZu1H5lmkIvU2wGwhvkayaOuRquhqMXrnv4xMQPq', '2020-07-22 21:23:25', '2020-07-22 21:23:25'),
(5, 55, 0, 'Spi', 'spi@gmail.com', '$2y$10$cy5AHhQNublxyuzwBFavaeMVUA08wHBRI8/N6jTQy/YA/3GTUsenC', 2, 'HLB5hoGuYvetSzbXiP56mban0j3OO0auO10kyInwBmYP6ALEFbZbQSU2LjPF', '2020-07-23 06:11:52', '2020-07-23 06:11:52'),
(6, NULL, NULL, 'Rektor', 'rektor@gmail.com', '$2y$10$dsNA7/V9SiyaTXdJ6hJJueyFn5usN7mbslPhhRFJhtFWB0oN3eRlO', 3, 'OUaHxOkCQXiR2XZSYWtDXyUaHCl2gaAEIAxY7PA0BQoB7VqNcPE1jtRxmABO', '2020-08-01 01:30:11', '2020-08-01 01:30:11');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `inst_unit`
--
ALTER TABLE `inst_unit`
  ADD PRIMARY KEY (`unit_id`),
  ADD KEY `id` (`unit_id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `spmi_daftar_tilik`
--
ALTER TABLE `spmi_daftar_tilik`
  ADD PRIMARY KEY (`daftar_tilik_id`),
  ADD KEY `fk_spmi_daftar_tilik_user` (`inst_unit`),
  ADD KEY `spmi_daftar_tilik_ibfk_2` (`laporan_id`);

--
-- Indeks untuk tabel `spmi_laporan_unit`
--
ALTER TABLE `spmi_laporan_unit`
  ADD PRIMARY KEY (`laporan_unit_id`),
  ADD KEY `fk_spmi_laporan_unit_inst` (`inst_unit`),
  ADD KEY `opsi` (`opsi`),
  ADD KEY `created_by` (`created_by`);

--
-- Indeks untuk tabel `spmi_opsi`
--
ALTER TABLE `spmi_opsi`
  ADD PRIMARY KEY (`opsi_id`);

--
-- Indeks untuk tabel `spmi_revisi_laporan_unit`
--
ALTER TABLE `spmi_revisi_laporan_unit`
  ADD PRIMARY KEY (`spmi_revisi_laporan_unit_id`),
  ADD KEY `laporan_unit_id` (`laporan_unit_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `user_id` (`inst_unit`),
  ADD KEY `role_id` (`role_id`),
  ADD KEY `akun_id` (`akun_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `inst_unit`
--
ALTER TABLE `inst_unit`
  MODIFY `unit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `spmi_daftar_tilik`
--
ALTER TABLE `spmi_daftar_tilik`
  MODIFY `daftar_tilik_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `spmi_laporan_unit`
--
ALTER TABLE `spmi_laporan_unit`
  MODIFY `laporan_unit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `spmi_opsi`
--
ALTER TABLE `spmi_opsi`
  MODIFY `opsi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `spmi_revisi_laporan_unit`
--
ALTER TABLE `spmi_revisi_laporan_unit`
  MODIFY `spmi_revisi_laporan_unit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `spmi_daftar_tilik`
--
ALTER TABLE `spmi_daftar_tilik`
  ADD CONSTRAINT `spmi_daftar_tilik_ibfk_1` FOREIGN KEY (`inst_unit`) REFERENCES `users` (`inst_unit`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `spmi_daftar_tilik_ibfk_2` FOREIGN KEY (`laporan_id`) REFERENCES `spmi_laporan_unit` (`laporan_unit_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `spmi_laporan_unit`
--
ALTER TABLE `spmi_laporan_unit`
  ADD CONSTRAINT `fk_spmi_laporan_unit_inst` FOREIGN KEY (`inst_unit`) REFERENCES `inst_unit` (`unit_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `spmi_laporan_unit_ibfk_2` FOREIGN KEY (`opsi`) REFERENCES `spmi_opsi` (`opsi_id`);

--
-- Ketidakleluasaan untuk tabel `spmi_revisi_laporan_unit`
--
ALTER TABLE `spmi_revisi_laporan_unit`
  ADD CONSTRAINT `spmi_revisi_laporan_unit_ibfk_1` FOREIGN KEY (`laporan_unit_id`) REFERENCES `spmi_laporan_unit` (`laporan_unit_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`inst_unit`) REFERENCES `inst_unit` (`unit_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
