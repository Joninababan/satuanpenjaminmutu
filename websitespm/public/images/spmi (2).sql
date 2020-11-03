-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Agu 2020 pada 09.59
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
  `instansi_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `inisial` varchar(45) DEFAULT NULL,
  `desc` text,
  `kepala` int(11) DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `deleted_at` datetime DEFAULT NULL,
  `deleted_by` varchar(32) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` varbinary(32) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `inst_unit`
--

INSERT INTO `inst_unit` (`unit_id`, `instansi_id`, `name`, `inisial`, `desc`, `kepala`, `deleted`, `deleted_at`, `deleted_by`, `updated_at`, `updated_by`, `created_at`, `created_by`) VALUES
(55, 4, 'Satuan Pengawas Internal', 'SPI', 'Unit Untuk Mengawasi Proses Yang berjalan di Instansi IT Del', 118, 0, NULL, NULL, '2018-01-26 10:27:30', 0x6a6f6e617468616e2e74616d62756e, '2018-01-26 10:27:01', 'jonathan.tambun'),
(56, 4, 'Satuan Penjaminan Mutu', 'SPM', 'Unit yang bertanggung jawab dalam penjaminan mutu instansi IT Del', 136, 0, NULL, NULL, '2018-01-26 10:31:16', 0x6a6f6e617468616e2e74616d62756e, '2018-01-26 10:31:16', 'jonathan.tambun'),
(57, 4, 'Direktorat Pendidikan', 'DP', 'Unit yang bertanggung jawab dalam bidang akademik atau pendidikan di Instansi IT Del', 87, 0, NULL, NULL, '2018-01-26 10:32:58', 0x6a6f6e617468616e2e74616d62756e, '2018-01-26 10:32:58', 'jonathan.tambun'),
(58, 4, 'Pusat Pengembangan Karir dan Alumni', 'PPKA', 'Unit ini bertanggung jawab dalam bidang pengembangan karir di IT Del dan hubungan Instansi IT Del dengan alumni.', 91, 0, NULL, NULL, '2018-01-26 10:34:23', 0x6a6f6e617468616e2e74616d62756e, '2018-01-26 10:34:23', 'jonathan.tambun'),
(59, 4, 'UPT Pusat Bahasa', 'UPT-B', 'Unit ini bertanggung jawab dalam pengembangan bahasa di instansi IT Del', 92, 0, NULL, NULL, '2018-01-26 10:35:54', 0x6a6f6e617468616e2e74616d62756e, '2018-01-26 10:35:54', 'jonathan.tambun'),
(60, 4, 'UPT Perpustakaan', 'UPT-P', 'Unit ini bertanggung jawab dalam pelayanan perpustakaan di instansi IT Del', 93, 0, NULL, NULL, '2018-01-26 10:36:47', 0x6a6f6e617468616e2e74616d62756e, '2018-01-26 10:36:47', 'jonathan.tambun'),
(61, 4, 'UPT Pembelajaran Sains dan Matematika ', 'UPT-PSM', 'Unit ini bertanggung jawab dalam pengembangan ilmu pengetahuan dibidang sains dan matematika di Instansi IT Del', 94, 0, NULL, NULL, '2018-01-26 10:38:30', 0x6a6f6e617468616e2e74616d62756e, '2018-01-26 10:38:30', 'jonathan.tambun'),
(62, 4, 'UPT Teknologi Informasi dan Komunikasi', 'UPT-TIK', 'Unit ini bertanggung jawab dalam pengembangan ilmu pengetahuan dalam bidang teknologi dan informasi di Instansi IT Del.', 95, 0, NULL, NULL, '2018-01-26 10:40:04', 0x6a6f6e617468616e2e74616d62756e, '2018-01-26 10:40:04', 'jonathan.tambun'),
(63, 4, 'Pusat Perencanaan', 'PP', 'Unit ini bertanggung jawab untuk mengatur perencanaan perencanaan terkait pengembangan Instansi IT Del', 105, 0, NULL, NULL, '2018-01-26 10:43:08', 0x6a6f6e617468616e2e74616d62756e, '2018-01-26 10:43:08', 'jonathan.tambun'),
(64, 4, 'Direktorat Keuangan dan Akuntansi', 'DKA', 'Unit ini bertangggung jawab untuk mengkoordinasikan keuangan dan akuntansi di instansi IT Del', 96, 0, NULL, NULL, '2018-01-26 10:44:31', 0x6a6f6e617468616e2e74616d62756e, '2018-01-26 10:44:31', 'jonathan.tambun'),
(65, 4, 'Pusat Modal Manusia', 'PMM', 'Unit untuk mengelola sumber daya manusia di IT Del', 137, 0, NULL, NULL, '2020-01-31 14:40:48', 0x636f7269, '2018-01-26 10:47:54', 'jonathan.tambun'),
(66, 4, 'Pusat Fasilitas', 'PF', 'Unit yang bertanggung jawab untuk pengelolaan fasilitas di IT Del', 97, 0, NULL, NULL, '2018-01-26 10:48:54', 0x6a6f6e617468616e2e74616d62756e, '2018-01-26 10:48:54', 'jonathan.tambun'),
(67, 4, 'UPT Kantin', 'UPT-K', 'Unit ini bertanggung jawab untuk  mengelola kantin IT Del', 138, 0, NULL, NULL, '2018-01-26 10:51:37', 0x6a6f6e617468616e2e74616d62756e, '2018-01-26 10:51:37', 'jonathan.tambun'),
(68, 4, 'UPT Klinik', 'UPT-Kl', 'Unit ini bertanggung jawab untuk mengelola klinik IT Del', 139, 0, NULL, NULL, '2018-01-26 10:52:39', 0x6a6f6e617468616e2e74616d62756e, '2018-01-26 10:52:39', 'jonathan.tambun'),
(69, 4, 'Lembaga Penelitian dan Pengabdian Kepada Masyarakat ', 'LPPM', 'Unit ini bertanggung jawab untuk penelitian dan pengabdian kepada masyarakat oleh instansi IT Del', 106, 0, NULL, NULL, '2018-01-26 10:54:43', 0x6a6f6e617468616e2e74616d62756e, '2018-01-26 10:54:43', 'jonathan.tambun'),
(70, 4, 'Lembaga Kemitraan dan Hubungan Masyarakat', 'LKHM', 'Unit ini bertanggung jawab dalam mengurus kemitraan dan hubungan masyarakat  IT Del', 107, 0, NULL, NULL, '2018-01-26 10:56:00', 0x6a6f6e617468616e2e74616d62756e, '2018-01-26 10:56:00', 'jonathan.tambun'),
(71, 4, 'Pusat Inovasi dan Usaha', 'PIU', 'Unit ini bertanggung jawab dalam pengembangan usaha dan inovasi di instansi IT Del', 108, 0, NULL, NULL, '2018-01-26 10:59:57', 0x6a6f6e617468616e2e74616d62756e, '2018-01-26 10:59:57', 'jonathan.tambun'),
(72, 4, 'Pusat Penelitian dan Pengembangan', 'PPP', 'Unit ini bertanggung jawab dalam penelitian dan pengembangan instansi IT Del', 140, 0, NULL, NULL, '2018-01-26 11:00:57', 0x6a6f6e617468616e2e74616d62756e, '2018-01-26 11:00:57', 'jonathan.tambun'),
(73, 4, 'UPT Inkubator Bisnis', 'UPT-IB', 'Unit yang menyelenggarakan inkubasi terhadap bisnis baru yang sedang berkembang di IT Del', 141, 0, NULL, NULL, '2018-01-26 11:03:46', 0x6a6f6e617468616e2e74616d62756e, '2018-01-26 11:03:46', 'jonathan.tambun'),
(74, 4, 'Fakultas Teknologi Informatika dan Elektro', 'FTIE', 'Fakultas Teknologi Informatika dan Elektro', 109, 0, NULL, NULL, '2018-01-26 11:05:48', 0x6a6f6e617468616e2e74616d62756e, '2018-01-26 11:05:48', 'jonathan.tambun'),
(75, 4, 'Fakultas Bioteknologi', 'FB', 'Fakultas Bioteknologi', 110, 0, NULL, NULL, '2018-01-26 11:06:22', 0x6a6f6e617468616e2e74616d62756e, '2018-01-26 11:06:22', 'jonathan.tambun'),
(76, 4, 'Fakultas Teknologi Industri', 'FTI', 'Fakultas Teknologi Industri', 111, 0, NULL, NULL, '2018-01-26 11:07:11', 0x6a6f6e617468616e2e74616d62756e, '2018-01-26 11:07:11', 'jonathan.tambun'),
(77, 4, 'Senat Fakultas FTIE', 'SF FTIE', 'Senat Fakultas FTIE', 119, 0, NULL, NULL, '2018-01-26 11:08:08', 0x6a6f6e617468616e2e74616d62756e, '2018-01-26 11:08:08', 'jonathan.tambun'),
(78, 4, 'Senat Akademik', 'SA', 'Senat Akademik IT Del', 81, 0, NULL, NULL, '2018-01-26 11:10:23', 0x6a6f6e617468616e2e74616d62756e, '2018-01-26 11:10:23', 'jonathan.tambun'),
(79, 4, 'Gugus Jaminan Mutu FTIE', 'GJMFTIE', 'Gugus Jaminan Mutu FTIE', 120, 0, NULL, NULL, '2018-01-26 11:11:34', 0x6a6f6e617468616e2e74616d62756e, '2018-01-26 11:11:34', 'jonathan.tambun'),
(80, 4, 'Program Studi Sarjana Informatika', 'S1TI', 'Program Studi Sarjana Informatika', 115, 0, NULL, NULL, '2020-02-04 11:01:18', 0x636f7269, '2018-01-26 11:12:33', 'jonathan.tambun'),
(81, 4, 'Gugus Bidang Kajian S1TI', 'GBKS1TI', 'Gugus Bidang Kajian S1TI', 121, 0, NULL, NULL, '2018-01-26 11:13:34', 0x6a6f6e617468616e2e74616d62756e, '2018-01-26 11:13:34', 'jonathan.tambun'),
(82, 4, 'Program Studi Sarjana Sistem Informasi', 'S1SI', 'Program Studi Sarjana Sistem Informasi', 116, 0, NULL, NULL, '2018-01-26 11:14:19', 0x6a6f6e617468616e2e74616d62756e, '2018-01-26 11:14:19', 'jonathan.tambun'),
(83, 4, 'Gugus Bidang Kajian S1 Sistem Informasi', 'GBK SI', 'Gugus Bidang Kajian S1 Sistem Informasi', 122, 0, NULL, NULL, '2018-01-26 11:20:21', 0x6a6f6e617468616e2e74616d62756e, '2018-01-26 11:20:21', 'jonathan.tambun'),
(84, 4, 'Sarjana Teknik Elektro', 'S1TE', 'Sarjana Teknik Elektro', 117, 0, NULL, NULL, '2018-01-26 11:20:56', 0x6a6f6e617468616e2e74616d62756e, '2018-01-26 11:20:56', 'jonathan.tambun'),
(85, 4, 'Gugus Bidang Kajian S1 TE', 'GBK TE', 'Gugus Bidang Kajian S1 TE', 126, 0, NULL, NULL, '2018-01-26 11:21:46', 0x6a6f6e617468616e2e74616d62756e, '2018-01-26 11:21:46', 'jonathan.tambun'),
(86, 4, 'Program Studi Diploma IV Teknik Rekayasa Perangkat Lunak', 'D4TRPL', 'Program Studi Diploma IV Teknik Rekayasa Perangkat Lunak', 114, 0, NULL, NULL, '2020-02-04 10:58:48', 0x636f7269, '2018-01-26 11:22:43', 'jonathan.tambun'),
(87, 4, 'Gugus Bidang Kajian D4TI', 'GBK D4TI', 'Gugus Bidang Kajian D4TI', 125, 0, NULL, NULL, '2018-01-26 11:23:23', 0x6a6f6e617468616e2e74616d62756e, '2018-01-26 11:23:23', 'jonathan.tambun'),
(88, 4, 'Program Studi Diploma III Teknik Informatika', 'D3TI', 'Program Studi Diploma III Teknik Informatika', 113, 0, NULL, NULL, '2018-01-26 11:24:34', 0x6a6f6e617468616e2e74616d62756e, '2018-01-26 11:24:34', 'jonathan.tambun'),
(89, 4, 'Gugus Bidang Kajian D3TI', 'GBK D3TI', 'Gugus Bidang Kajian D3TI', 124, 0, NULL, NULL, '2018-01-26 11:25:09', 0x6a6f6e617468616e2e74616d62756e, '2018-01-26 11:25:09', 'jonathan.tambun'),
(90, 4, 'Program Studi Diploma III Teknik Komputer', 'D3TK', 'Program Studi Diploma III Teknik Komputer', 112, 0, NULL, NULL, '2018-01-26 11:26:08', 0x6a6f6e617468616e2e74616d62756e, '2018-01-26 11:26:08', 'jonathan.tambun'),
(91, 4, 'Gugus Bidang Kajian D3TK', 'GBKB D3TK', 'Gugus Bidang Kajian D3TK', 123, 0, NULL, NULL, '2018-01-26 11:26:51', 0x6a6f6e617468616e2e74616d62756e, '2018-01-26 11:26:51', 'jonathan.tambun'),
(92, 4, 'Senat Fakultas FB', 'SF FB', 'Senat Fakultas FB', 127, 0, NULL, NULL, '2018-01-26 11:27:35', 0x6a6f6e617468616e2e74616d62756e, '2018-01-26 11:27:35', 'jonathan.tambun'),
(93, 4, 'Gugus Jaminan Mutu FB', 'GJM FB', 'Gugus Jaminan Mutu FB', 128, 0, NULL, NULL, '2018-01-26 11:28:04', 0x6a6f6e617468616e2e74616d62756e, '2018-01-26 11:28:04', 'jonathan.tambun'),
(94, 4, 'Program Studi Sarjana Teknik Bioproses', 'TB', 'Program Studi Sarjana Teknik Bioproses', 129, 0, NULL, NULL, '2020-02-04 11:02:17', 0x636f7269, '2018-01-26 11:28:47', 'jonathan.tambun'),
(95, 4, 'Gugus Bidang Kajian TB', 'GBK TB', 'Gugus Bidang Kajian TB', 130, 0, NULL, NULL, '2018-01-26 11:29:36', 0x6a6f6e617468616e2e74616d62756e, '2018-01-26 11:29:36', 'jonathan.tambun'),
(96, 4, 'Senat Fakultas FTI', 'SF FTI', 'Senat Fakultas FTI', 131, 0, NULL, NULL, '2018-01-26 11:30:16', 0x6a6f6e617468616e2e74616d62756e, '2018-01-26 11:30:16', 'jonathan.tambun'),
(97, 4, 'Gugus Jaminan Mutu FTI', 'GJM FTI', 'Gugus Jaminan Mutu FTI', 132, 0, NULL, NULL, '2018-01-26 11:31:04', 0x6a6f6e617468616e2e74616d62756e, '2018-01-26 11:31:04', 'jonathan.tambun'),
(98, 4, 'Program Studi Sarjana Manajemen Rekayasa', 'S1MR', 'Program Studi Sarjana Manajemen Rekayasa', 133, 0, NULL, NULL, '2018-01-26 11:32:00', 0x6a6f6e617468616e2e74616d62756e, '2018-01-26 11:32:00', 'jonathan.tambun'),
(99, 4, 'Gugus Bidang Kajian S1MR', 'GBK MR', 'Gugus Bidang Kajian S1MR', 135, 0, NULL, NULL, '2018-01-26 11:32:51', 0x6a6f6e617468616e2e74616d62756e, '2018-01-26 11:32:51', 'jonathan.tambun'),
(100, 4, 'Direktorat Penelitian dan Pengabdian kepada Masyarakat', 'DPPM', 'Direktorat Penelitian dan Pengabdian kepada Masyarakat', 85, 1, '2018-07-19 08:43:40', 'melva.hutagalung', '2018-07-18 16:07:45', 0x6d656c76612e6875746167616c756e67, '2018-07-18 16:07:45', 'melva.hutagalung'),
(101, 4, 'Keasramaan', 'Keasramaan', 'Unit untuk memelihara keasramaan dan administrasi asrama.', 83, 1, '2018-10-09 14:24:45', 'if316024', '2018-10-08 17:29:10', 0x6966333136303234, '2018-10-08 17:29:10', 'if316024'),
(102, 4, 'Rektorat', 'Rek', 'Unit Rektorat', 82, 0, NULL, NULL, '2020-02-05 14:22:43', 0x636f7269, '2020-02-04 13:40:11', 'cori'),
(103, 4, 'Pendamping Asrama', 'PA', 'Pendamping Asrama', 157, 0, NULL, NULL, '2020-03-13 09:52:26', 0x6c6f7769736b612e73696d616e6a756e74616b, '2020-03-13 09:52:26', 'lowiska.simanjuntak');

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
  `name` varchar(45) DEFAULT NULL,
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

--
-- Dumping data untuk tabel `spmi_daftar_tilik`
--

INSERT INTO `spmi_daftar_tilik` (`daftar_tilik_id`, `inst_unit`, `laporan_id`, `name`, `referensi`, `Pernyataan`, `catatan_khusus`, `deleted`, `deleted_at`, `deleted_by`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(2, 55, 2, 'test', 'Standar 1.1', 'Minta Keputusan Senat Akademik No. 001/IT Del/SA/SK/KUR/VIII/14', 'Cek bukti kontrol Kaprodi memastikan setiap matakuliah memiliki RPS yang memuat butir 3', NULL, NULL, NULL, '2020-08-18 06:13:43', NULL, '2020-08-18 06:13:43', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `spmi_laporan_unit`
--

CREATE TABLE `spmi_laporan_unit` (
  `laporan_unit_id` int(11) NOT NULL,
  `inst_unit` int(11) DEFAULT NULL,
  `nama_laporan` varchar(191) DEFAULT NULL,
  `kegiatan_rutin` text,
  `kegiatan_non_rutin` text,
  `serapan_anggaran` text,
  `pemasukan_dana` text,
  `evaluasi_kegiatan` text,
  `rencana_kerja_bulan_berikutnya` text,
  `unggah_dokumen` varchar(255) DEFAULT NULL,
  `opsi` int(11) DEFAULT NULL,
  `status_id` int(11) NOT NULL DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `spmi_laporan_unit`
--

INSERT INTO `spmi_laporan_unit` (`laporan_unit_id`, `inst_unit`, `nama_laporan`, `kegiatan_rutin`, `kegiatan_non_rutin`, `serapan_anggaran`, `pemasukan_dana`, `evaluasi_kegiatan`, `rencana_kerja_bulan_berikutnya`, `unggah_dokumen`, `opsi`, `status_id`, `created_at`, `updated_at`) VALUES
(2, 69, 'Laporan UPT bahasa Inggris', 'test', 'test', 'test', 'trese', 'teset', 'tese', '11317013_DIII Teknologi Informasi.pdf', 2, 1, '2020-08-18 05:42:14', '2020-08-18 06:14:35');

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
(2, 'N');

-- --------------------------------------------------------

--
-- Struktur dari tabel `spmi_revisi_laporan_unit`
--

CREATE TABLE `spmi_revisi_laporan_unit` (
  `spmi_revisi_laporan_unit_id` int(11) NOT NULL,
  `laporan_unit_id` int(11) NOT NULL,
  `komentar` text NOT NULL,
  `unggah_dokumen` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `spmi_revisi_laporan_unit`
--

INSERT INTO `spmi_revisi_laporan_unit` (`spmi_revisi_laporan_unit_id`, `laporan_unit_id`, `komentar`, `unggah_dokumen`, `created_at`, `updated_at`) VALUES
(2, 2, 'sudah diperbaiki', '11317013_DIII Teknologi Informasi.pdf', '2020-08-18 06:20:45', '2020-08-18 06:20:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `spmi_status`
--

CREATE TABLE `spmi_status` (
  `status_id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `spmi_status`
--

INSERT INTO `spmi_status` (`status_id`, `nama`) VALUES
(1, 'Sedang berjalan'),
(3, 'Sudah disetujui');

-- --------------------------------------------------------

--
-- Struktur dari tabel `spmi_usulan_atau_saran`
--

CREATE TABLE `spmi_usulan_atau_saran` (
  `usulan_atau_saran_id` int(11) NOT NULL,
  `usulan_atau_saran` varchar(255) DEFAULT NULL,
  `lokasi_id` int(11) DEFAULT NULL,
  `pic_Penyelesaian` varchar(255) DEFAULT NULL,
  `tindak_lanjut` varchar(255) DEFAULT NULL,
  `desc` varchar(255) DEFAULT NULL,
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
(1, 69, 1, 'user', 'user@gmail.com', '$2y$10$Me2hoELAx.FKEMdcPfRz0e3GrSvWAgikZy8fb1AA6u9khuHHISqSi', 0, 'R9IYO6BjXGM3vh1lcur6LQwp23x62IzEMtA0YvVYkgcxq0gsW0oJP5suhhth', '2020-07-22 21:18:47', '2020-07-22 21:18:47'),
(2, 56, 2, 'admin', 'spmiadmin@gmail.com', '$2y$10$kJHxZkRQrXVMS8QZUlPZK.fKFPN2m6ALrbabopFhFARNWs/WlsTu2', 1, '2TU2mtUJMrQ9AprXVeqA4wrA6QeVIZ5dKMQuTLS0WjdnnBmZLNGxzjNPaoCw', '2020-07-22 21:23:25', '2020-07-22 21:23:25'),
(5, 55, 0, 'spi', 'spi@gmail.com', '$2y$10$cy5AHhQNublxyuzwBFavaeMVUA08wHBRI8/N6jTQy/YA/3GTUsenC', 2, 'VCdsunCJM8RdQU9AgsiCb7eB6laP8dmy5IsbPUNH34BP3BwbQ2XZB3EJMUWI', '2020-07-23 06:11:52', '2020-07-23 06:11:52'),
(6, NULL, NULL, 'rektor', 'rektor@gmail.com', '$2y$10$dsNA7/V9SiyaTXdJ6hJJueyFn5usN7mbslPhhRFJhtFWB0oN3eRlO', 3, 'USNT5y1ftN1GnU0Bm0ZHvWIVWSomkon985yGTvhbcMRjIKGpWfHs0RQJAOaj', '2020-08-01 01:30:11', '2020-08-01 01:30:11');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `inst_unit`
--
ALTER TABLE `inst_unit`
  ADD PRIMARY KEY (`unit_id`),
  ADD KEY `FK_unit_struktur_jabatan_idx` (`kepala`),
  ADD KEY `FK_unit_instansi_idx` (`instansi_id`),
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
  ADD KEY `status_id` (`status_id`),
  ADD KEY `opsi` (`opsi`);

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
-- Indeks untuk tabel `spmi_status`
--
ALTER TABLE `spmi_status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indeks untuk tabel `spmi_usulan_atau_saran`
--
ALTER TABLE `spmi_usulan_atau_saran`
  ADD PRIMARY KEY (`usulan_atau_saran_id`),
  ADD KEY `fk_usulan_atau_saran_lokasi` (`lokasi_id`);

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
  MODIFY `daftar_tilik_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `spmi_laporan_unit`
--
ALTER TABLE `spmi_laporan_unit`
  MODIFY `laporan_unit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `spmi_opsi`
--
ALTER TABLE `spmi_opsi`
  MODIFY `opsi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `spmi_revisi_laporan_unit`
--
ALTER TABLE `spmi_revisi_laporan_unit`
  MODIFY `spmi_revisi_laporan_unit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `spmi_status`
--
ALTER TABLE `spmi_status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `spmi_usulan_atau_saran`
--
ALTER TABLE `spmi_usulan_atau_saran`
  MODIFY `usulan_atau_saran_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `inst_unit`
--
ALTER TABLE `inst_unit`
  ADD CONSTRAINT `FK_unit_instansi` FOREIGN KEY (`instansi_id`) REFERENCES `inst_instansi` (`instansi_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_unit_struktur_jabatan` FOREIGN KEY (`kepala`) REFERENCES `inst_struktur_jabatan` (`struktur_jabatan_id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
  ADD CONSTRAINT `spmi_laporan_unit_ibfk_1` FOREIGN KEY (`status_id`) REFERENCES `spmi_status` (`status_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `spmi_laporan_unit_ibfk_2` FOREIGN KEY (`opsi`) REFERENCES `spmi_opsi` (`opsi_id`);

--
-- Ketidakleluasaan untuk tabel `spmi_revisi_laporan_unit`
--
ALTER TABLE `spmi_revisi_laporan_unit`
  ADD CONSTRAINT `spmi_revisi_laporan_unit_ibfk_1` FOREIGN KEY (`laporan_unit_id`) REFERENCES `spmi_laporan_unit` (`laporan_unit_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `spmi_usulan_atau_saran`
--
ALTER TABLE `spmi_usulan_atau_saran`
  ADD CONSTRAINT `fk_usulan_atau_saran_lokasi` FOREIGN KEY (`lokasi_id`) REFERENCES `mref_r_lokasi` (`lokasi_id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
