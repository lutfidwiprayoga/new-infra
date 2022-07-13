-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Jul 2022 pada 05.22
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
-- Database: `tracking_infra`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `branches`
--

CREATE TABLE `branches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ns_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `branches`
--

INSERT INTO `branches` (`id`, `ns_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'Jember', NULL, NULL),
(2, 2, 'Jember', NULL, NULL),
(3, 3, 'Jember', NULL, NULL),
(4, 4, 'Jember', NULL, NULL),
(5, 5, 'Jember', NULL, NULL),
(6, 6, 'Jember', NULL, NULL),
(7, 31, 'Lamongan', NULL, NULL),
(8, 11, 'Lamongan', NULL, NULL),
(9, 12, 'Lamongan', NULL, NULL),
(10, 14, 'Lamongan', NULL, NULL),
(11, 17, 'Lamongan', NULL, NULL),
(12, 7, 'Madiun', NULL, NULL),
(13, 8, 'Madiun', NULL, NULL),
(14, 9, 'Madiun', NULL, NULL),
(15, 10, 'Madiun', NULL, NULL),
(16, 16, 'Madiun', NULL, NULL),
(17, 13, 'Madiun', NULL, NULL),
(18, 18, 'Madiun', NULL, NULL),
(19, 15, 'Madiun', NULL, NULL),
(20, 22, 'Malang', NULL, NULL),
(21, 23, 'Malang', NULL, NULL),
(22, 24, 'Malang', NULL, NULL),
(23, 19, 'Malang', NULL, NULL),
(24, 20, 'Malang', NULL, NULL),
(25, 21, 'Malang', NULL, NULL),
(26, 42, 'Sidoarjo', NULL, NULL),
(27, 25, 'Sidoarjo', NULL, NULL),
(28, 26, 'Sidoarjo', NULL, NULL),
(29, 27, 'Sidoarjo', NULL, NULL),
(30, 28, 'Surabaya', NULL, NULL),
(31, 29, 'Surabaya', NULL, NULL),
(32, 30, 'Surabaya', NULL, NULL),
(33, 32, 'Surabaya', NULL, NULL),
(34, 33, 'Surabaya', NULL, NULL),
(35, 34, 'Surabaya', NULL, NULL),
(36, 35, 'Surabaya', NULL, NULL),
(37, 36, 'Surabaya', NULL, NULL),
(38, 37, 'Surabaya', NULL, NULL),
(39, 38, 'Surabaya', NULL, NULL),
(40, 39, 'Surabaya', NULL, NULL),
(41, 40, 'Surabaya', NULL, NULL),
(42, 41, 'Surabaya', NULL, NULL),
(43, 43, 'Surabaya', NULL, NULL),
(44, 44, 'Surabaya', NULL, NULL),
(45, 45, 'Surabaya', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `site_id` bigint(20) UNSIGNED DEFAULT NULL,
  `city_id` bigint(20) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitude` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latitude` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `cities`
--

INSERT INTO `cities` (`id`, `site_id`, `city_id`, `name`, `longitude`, `latitude`, `created_at`, `updated_at`) VALUES
(1, 4, 1, 'Banyuwangi', '114.3711', '-8.2095', NULL, NULL),
(2, 6, 2, 'Jember', '113.7025', '-8.1711', NULL, NULL),
(3, 10, 3, 'Lumajang', '113.2213', '-8.1367', NULL, NULL),
(4, 20, 4, 'Situbondo', '114.0046', '-7.7069', NULL, NULL),
(5, 3, 5, 'Bojonegoro', '111.8752', '-7.1557', NULL, NULL),
(6, 5, 6, 'Gresik', '112.6566', '-7.1649', NULL, NULL),
(7, 15, 7, 'Ngawi', '111.4457', '-7.4067', NULL, NULL),
(8, 2, 8, 'Bondowoso', '113.8218', '-7.9147', NULL, NULL),
(9, 7, 9, 'Jombang', '112.2379', '-7.5395', NULL, NULL),
(10, 8, 10, 'Kediri', '112.0070', '-7.8136', NULL, NULL),
(11, 16, 11, 'Kediri', '112.0070', '-7.8136', NULL, NULL),
(12, 11, 12, 'Madiun', '111.5253', '-7.6317', NULL, NULL),
(13, 12, 13, 'Magetan', '111.3320', '-7.6562', NULL, NULL),
(14, 14, 14, 'Nganjuk', '111.9033', '-7.6076', NULL, NULL),
(15, 17, 15, 'Ponorogo', '111.4618', '-7.8729', NULL, NULL),
(16, 9, 16, 'Malang', '112.6365', '-7.9793', NULL, NULL),
(17, 29, 17, 'Malang', '112.6365', '-7.9793', NULL, NULL),
(18, 24, 18, 'Tulungagung', '111.8994', '-8.0662', NULL, NULL),
(19, 13, 19, 'Mojokerto', '112.4319', '-7.4638', NULL, NULL),
(20, 18, 20, 'Pasuruan', '112.9094', '-7.6428', NULL, NULL),
(21, 37, 21, 'Pasuruan', '112.9094', '-7.6428', NULL, NULL),
(22, 19, 22, 'Sidoarjo', '112.7190', '-7.4469', NULL, NULL),
(23, 21, 23, 'Sumenep', '113.8651', '-7.0150', NULL, NULL),
(24, 22, 24, 'Sampang', '113.2498', '-7.2058', NULL, NULL),
(25, 25, 25, 'Surabaya', '112.7506', '-7.2515', NULL, NULL),
(26, 26, 26, 'Surabaya', '112.7506', '-7.2515', NULL, NULL),
(27, 23, 27, 'Surabaya', '112.7506', '-7.2515', NULL, NULL),
(28, 27, 28, 'Bangkalan', '112.7348', '-7.0409', NULL, NULL),
(29, 31, 29, 'Lamongan', '112.4155', '-7.1241', NULL, NULL),
(30, 32, 30, 'Tuban', '112.0667', '-6.9019', NULL, NULL),
(31, 30, 31, 'Batu', '112.5268', '-7.8721', NULL, NULL),
(32, 28, 32, 'Pamekasan', '113.4901', '-7.1649', NULL, NULL),
(33, 34, 33, 'Trenggalek', '111.7076', '-8.0524', NULL, NULL),
(34, 35, 34, 'Blitar', '112.1661', '-8.0990', NULL, NULL),
(35, 36, 35, 'Pacitan', '111.1058', '-8.1976', NULL, NULL),
(36, 33, 36, 'Probolinggo', '113.2172', '-7.7467', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `distrik_operations`
--

CREATE TABLE `distrik_operations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `city_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `distrik_operations`
--

INSERT INTO `distrik_operations` (`id`, `city_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 28, 'Bangkalan', NULL, NULL),
(2, 24, 'Bangkalan', NULL, NULL),
(3, 1, 'Banyuwangi', NULL, NULL),
(4, 4, 'Banyuwangi', NULL, NULL),
(5, 2, 'Jember', NULL, NULL),
(6, 8, 'Jember', NULL, NULL),
(7, 14, 'Kediri', NULL, NULL),
(8, 10, 'Kediri', NULL, NULL),
(9, 11, 'Kediri', NULL, NULL),
(10, 9, 'Kediri', NULL, NULL),
(11, 29, 'Lamongan', NULL, NULL),
(12, 30, 'Lamongan', NULL, NULL),
(13, 12, 'Madiun', NULL, NULL),
(14, 5, 'Madiun', NULL, NULL),
(15, 16, 'Malang', NULL, NULL),
(16, 17, 'Malang', NULL, NULL),
(17, 31, 'Malang', NULL, NULL),
(18, 32, 'Pamekasan', NULL, NULL),
(19, 23, 'Pamekasan', NULL, NULL),
(20, 20, 'Pasuruan', NULL, NULL),
(21, 21, 'Pasuruan', NULL, NULL),
(22, 15, 'Ponorogo', NULL, NULL),
(23, 13, 'Ponorogo', NULL, NULL),
(24, 7, 'Ponorogo', NULL, NULL),
(25, 35, 'Ponorogo', NULL, NULL),
(26, 3, 'Probolinggo', NULL, NULL),
(27, 36, 'Probolinggo', NULL, NULL),
(28, 25, 'Surabaya Utara', NULL, NULL),
(29, 25, 'Surabaya Barat', NULL, NULL),
(30, 25, 'Surabaya Timur', NULL, NULL),
(31, 25, 'Surabaya Selatan', NULL, NULL),
(32, 26, 'Surabaya Utara', NULL, NULL),
(33, 26, 'Surabaya Barat', NULL, NULL),
(34, 26, 'Surabaya Timur', NULL, NULL),
(35, 26, 'Surabaya Selatan', NULL, NULL),
(36, 27, 'Surabaya Utara', NULL, NULL),
(37, 27, 'Surabaya Barat', NULL, NULL),
(38, 27, 'Surabaya Timur', NULL, NULL),
(39, 27, 'Surabaya Selatan', NULL, NULL),
(40, 6, 'Surabaya Utara', NULL, NULL),
(41, 22, 'Surabaya Selatan', NULL, NULL),
(42, 18, 'Tulungagung', NULL, NULL),
(43, 33, 'Tulungagung', NULL, NULL),
(44, 34, 'Tulungagung', NULL, NULL),
(45, 19, 'Pasuruan', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `fotogrids`
--

CREATE TABLE `fotogrids` (
  `id` bigint(20) NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `infra_types`
--

CREATE TABLE `infra_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tp_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `infra_types`
--

INSERT INTO `infra_types` (`id`, `tp_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'Combat Relocation', NULL, NULL),
(2, 8, 'B2S', NULL, NULL),
(3, 9, 'B2S', NULL, NULL),
(4, 12, 'B2S', NULL, NULL),
(5, 10, 'Collo TP', NULL, NULL),
(6, 5, 'Collo TP', NULL, NULL),
(7, 4, 'Collo TP', NULL, NULL),
(8, 11, 'Collo TP', NULL, NULL),
(9, 12, 'Collo TP', NULL, NULL),
(10, 13, 'Collo TP', NULL, NULL),
(11, 3, 'Collo TP', NULL, NULL),
(12, 2, 'Collo TP', NULL, NULL),
(13, 6, 'Collo TP', NULL, NULL),
(14, 7, 'Collo TP', NULL, NULL);

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_04_04_093635_create_traffic_table', 1),
(6, '2022_04_04_100025_create_simple_progres_table', 1),
(7, '2022_04_04_144111_create_progres_hqs_table', 1),
(8, '2022_04_04_144553_create_progres_regions_table', 1),
(9, '2022_04_04_144829_create_site_ids_table', 1),
(10, '2022_04_04_145434_create_cities_table', 1),
(11, '2022_04_04_145919_create_branches_table', 1),
(12, '2022_04_07_112232_create_network_services_table', 1),
(13, '2022_04_07_112516_create_distrik_operations_table', 1),
(14, '2022_04_10_124840_create_infra_types_table', 1),
(15, '2022_04_10_141818_create_tower_providers_table', 1),
(16, '2022_04_20_022536_create_new_infras_table', 1),
(17, '2022_04_21_131948_create_targetbulanberjalans_table', 1),
(18, '2022_05_11_134452_create_fotogrids_table', 1),
(19, '2022_05_25_033638_create_notifikasis_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `network_services`
--

CREATE TABLE `network_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `do_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `network_services`
--

INSERT INTO `network_services` (`id`, `do_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 26, 'Jember', NULL, NULL),
(2, 27, 'Jember', NULL, NULL),
(3, 3, 'Jember', NULL, NULL),
(4, 4, 'Jember', NULL, NULL),
(5, 5, 'Jember', NULL, NULL),
(6, 6, 'Jember', NULL, NULL),
(7, 7, 'Lamongan', NULL, NULL),
(8, 8, 'Lamongan', NULL, NULL),
(9, 9, 'Lamongan', NULL, NULL),
(10, 10, 'Lamongan', NULL, NULL),
(11, 11, 'Lamongan', NULL, NULL),
(12, 12, 'Lamongan', NULL, NULL),
(13, 13, 'Madiun', NULL, NULL),
(14, 14, 'Madiun', NULL, NULL),
(15, 22, 'Madiun', NULL, NULL),
(16, 23, 'Madiun', NULL, NULL),
(17, 24, 'Madiun', NULL, NULL),
(18, 25, 'Madiun', NULL, NULL),
(19, 42, 'Madiun', NULL, NULL),
(20, 43, 'Madiun', NULL, NULL),
(21, 44, 'Madiun', NULL, NULL),
(22, 15, 'Malang', NULL, NULL),
(23, 16, 'Malang', NULL, NULL),
(24, 17, 'Malang', NULL, NULL),
(25, 20, 'Malang', NULL, NULL),
(26, 21, 'Malang', NULL, NULL),
(27, 45, 'Malang', NULL, NULL),
(28, 28, 'Surabaya Utara', NULL, NULL),
(29, 32, 'Surabaya Utara', NULL, NULL),
(30, 36, 'Surabaya Utara', NULL, NULL),
(31, 40, 'Surabaya Utara', NULL, NULL),
(32, 1, 'Surabaya Utara', NULL, NULL),
(33, 2, 'Surabaya Utara', NULL, NULL),
(34, 18, 'Surabaya Utara', NULL, NULL),
(35, 19, 'Surabaya Utara', NULL, NULL),
(36, 30, 'Surabaya Utara', NULL, NULL),
(37, 34, 'Surabaya Utara', NULL, NULL),
(38, 38, 'Surabaya Utara', NULL, NULL),
(39, 31, 'Surabaya Selatan', NULL, NULL),
(40, 35, 'Surabaya Selatan', NULL, NULL),
(41, 39, 'Surabaya Selatan', NULL, NULL),
(42, 41, 'Surabaya Selatan', NULL, NULL),
(43, 29, 'Surabaya Selatan', NULL, NULL),
(44, 33, 'Surabaya Selatan', NULL, NULL),
(45, 37, 'Surabaya Selatan', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `new_infras`
--

CREATE TABLE `new_infras` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `batch` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `program_hq` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_id_plan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_name_plan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_id_actual` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_name_actual` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitude` double(8,2) DEFAULT NULL,
  `lotitude` double(8,2) DEFAULT NULL,
  `alamat_site` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `do` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ns` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `branch` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tower_provider` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `infra_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `progress_regional` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `progress_hq` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `simple_progress` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target_bulan_berjalan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `issue` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `target_rfi_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `target_rfi_week` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kkst_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sla_rfc_b2s` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sla_rfi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `drm_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rfi_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `oa_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `target_oa_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `target_oa_week` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `month_oa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trm_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `capex_eqp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `capex_trm` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `antena_height` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remarks` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `new_infras`
--

INSERT INTO `new_infras` (`id`, `batch`, `program_hq`, `site_id_plan`, `site_name_plan`, `site_id_actual`, `site_name_actual`, `longitude`, `lotitude`, `alamat_site`, `do`, `ns`, `city`, `branch`, `tower_provider`, `infra_type`, `progress_regional`, `progress_hq`, `simple_progress`, `target_bulan_berjalan`, `issue`, `target_rfi_date`, `target_rfi_week`, `kkst_date`, `sla_rfc_b2s`, `sla_rfi`, `drm_date`, `rfi_date`, `oa_date`, `target_oa_date`, `target_oa_week`, `month_oa`, `trm_type`, `capex_eqp`, `capex_trm`, `antena_height`, `remarks`, `foto`, `created_at`, `updated_at`) VALUES
(276, 'CO 2021', 'Order 2021-Part of 700', 'LMJ197', 'PASRUJAMBEPASRUJAMBE7', 'BWI472', 'GENTENGKEMBIRITAN2', 114.17, -8.36, 'Dn. Krajan 1 RT003/RW004, Kel. Kembiritan, Kec. Genteng, Kab. Banyuwangi', 'Banyuwangi', 'Jember', 'BANYUWANGI', 'Jember', 'PTI', 'Collo TP', '13. ON AIR', 'ON AIR', 'ON AIR', 'DONE ON AIR (April)', 'no issue (sudah OA)', 'DONE', 'DONE', '17-03-2022', NULL, '26-04-2022', '29-04-2021', NULL, '05-04-2022', 'DONE', 'DONE', 'April', 'RTN Redeploy', 'CP1A 2021 Settlement 3', 'Not Yet Presales / PO', '', NULL, 'BWI472.jpeg', '2022-06-26 07:48:16', '2022-06-26 07:48:16'),
(277, 'CO 2021', 'Order 2021-Part of 700', 'TBN255', 'SARINGEMBATSINGGAHAN', 'BJO304', 'KEPOH BARUTURIGEDE1', 112.07, -7.17, 'DUSUN TURI, RT.005 RW.001, DESA TURIGEDE, KEC. KEPOHBARU, KAB. BOJONEGORO', 'Madiun', 'Madiun', 'Bojonegoro', 'Lamongan', 'LSP', 'Collo TP', '13. ON AIR', 'ON AIR', 'ON AIR', 'DONE ON AIR (April)', 'no issue (sudah OA)', 'DONE', 'DONE', '17-03-2022', NULL, '26-04-2022', '19-03-2021', NULL, '02-04-2022', 'DONE', 'DONE', 'April', 'RTN Redeploy', 'CP1B 2021 Settlement 7', 'Not Yet Presales / PO', '', NULL, 'BJO304.jpeg', '2022-06-26 07:48:16', '2022-06-26 07:48:16'),
(278, 'CO 2021', 'Order 2021-Part 249', 'MGT152', 'SETRENBENDO', 'MDU295', 'PILANGKENCENGNGALE1', 111.62, -7.48, NULL, 'Madiun', 'Madiun', 'Madiun', 'Madiun', 'CMI', 'Collo TP', '13. ON AIR', 'ON AIR', 'ON AIR', 'DONE ON AIR (April)', 'no issue (sudah OA)', 'DONE', 'DONE', '17-03-2022', NULL, '26-04-2022', '24-06-2022', NULL, '11-04-2022', 'DONE', 'DONE', 'April', 'RTN Redeploy', 'CP1B 2021 New Infra Cherry Pick', 'Not Yet Presales / PO', '', NULL, 'MDU295.jpeg', '2022-06-26 07:48:16', '2022-06-26 07:48:16'),
(279, 'CO 2021', 'Order 2021-Part of 1875', 'MGT091', 'BELOTANBENDO', 'MDU296', 'MADIUNSIRAPAN1', 111.59, -7.59, 'Jl. Raya Dimong RT09/RW01, Ds. Dimong, Kec. Madiun, Kab. Madiun', 'Madiun', 'Madiun', 'Madiun', 'Madiun', 'PTI', 'Collo TP', '11. LV MONITORING', 'ON AIR', 'ON AIR', 'DONE ON AIR (April)', 'no issue (sudah OA)', 'DONE', 'DONE', '17-03-2022', NULL, '26-04-2022', '24-06-2022', NULL, '17-04-2022', 'DONE', 'DONE', 'April', 'FO Telkom', 'CP 2 2021 Uplift Batch 2', 'Metro-E', '', NULL, 'MDU296.jpeg', '2022-06-26 07:48:16', '2022-06-26 07:48:16'),
(280, 'CO 2021', 'Order 2021-Part of 1875', 'KED453', 'SUMBERAGUNGWATES', 'KED453', 'SUMBERAGUNGWATES', 112.09, -7.87, 'Dsn. Winong RT.04 RW.04, Ds. Sidomulyo, Kec. Wates, Kab. Kediri', 'Kediri', 'Lamongan', 'Kediri', 'Madiun', 'DMT', 'B2S', '13. ON AIR', 'ON AIR', 'ON AIR', 'DONE ON AIR (Januari)', 'no issue (sudah OA)', 'DONE', 'DONE', '20-08-2021', '19-10-2021', '18-12-2021', '24-06-2022', NULL, '04-01-2022', 'DONE', 'DONE', 'January', 'FO Telkom', 'CP 2 2021 Uplift Batch 2', 'Metro-E', '', NULL, 'KED453.jpeg', '2022-06-26 07:48:16', '2022-06-26 07:48:16'),
(281, 'CO 2021', 'Order 2021-Part of 1875', 'MJO301', 'MOJOREJOPUNGGING', 'MJO301', 'MOJOREJOPUNGGING', 112.56, -7.58, 'Dsn. Beringin RT.001 RW. 002,Ds. Mojorejo, Kec. Pungging, Kab. Mojokerto', 'Pasuruan', 'Malang', 'Mojokerto', 'Sidoarjo', 'DMT', 'B2S', '13. ON AIR', 'ON AIR', 'ON AIR', 'DONE ON AIR (Maret)', 'no issue (sudah OA)', 'DONE', 'DONE', '20-08-2021', '19-10-2021', '18-12-2021', '24-06-2022', NULL, '25-03-2022', 'DONE', 'DONE', 'March', 'FO Telkom', 'CP 2 2021 Uplift Batch 2', 'Metro-E', '', NULL, 'MJO301.jpeg', '2022-06-26 07:48:16', '2022-06-26 07:48:16'),
(282, 'CO 2021', 'Order 2021-Part of 1875', 'MGT155', 'KROWELEMBEYAN', 'MGT155', 'KROWELEMBEYAN', 111.37, -7.73, 'Dsn.Krowe RT.03 RW.04, Ds. Krowe, Kec. Lembeyan, Kab. Magetan', 'Ponorogo', 'Madiun', 'Magetan', 'Madiun', 'DMT', 'B2S', '13. ON AIR', 'ON AIR', 'ON AIR', 'DONE ON AIR (Februari)', 'no issue (sudah OA)', 'DONE', 'DONE', '09-09-2021', '08-11-2021', '07-01-2022', '24-06-2022', NULL, '13-02-2022', 'DONE', 'DONE', 'February', 'FO Telkom', 'CP 2 2021 Uplift Batch 2', 'Metro-E', '', NULL, 'MGT155.jpeg', '2022-06-26 07:48:16', '2022-06-26 07:48:16'),
(283, 'CO 2021', 'Order 2021-Part of 1875', 'MGT193', 'SELOTINATAHNGARIBOYO', 'MGT193', 'SELOTINATAHNGARIBOYO', 111.32, -7.70, 'Jl. Erlangga RT.012 RW.03, Ds.Selotinatah, Kec. Ngariboyo, Kab. Magetan', 'Ponorogo', 'Madiun', 'Magetan', 'Madiun', 'DMT', 'B2S', '13. ON AIR', 'ON AIR', 'ON AIR', 'DONE ON AIR (Januari)', 'no issue (sudah OA)', 'DONE', 'DONE', '09-09-2021', '08-11-2021', '07-01-2022', '24-06-2022', NULL, '23-01-2022', 'DONE', 'DONE', 'January', 'FO Telkom', 'CP 2 2021 Uplift Batch 2', 'Metro-E', '', NULL, 'MGT193.jpeg', '2022-06-26 07:48:16', '2022-06-26 07:48:16'),
(284, 'CO 2021', 'Order 2021-Combat Permanenization', 'LMG257', 'LAMONGANMARINEINDUSTRI', 'SIT147', 'SUMBERKOLAKPANARUKAN', 113.99, -7.73, NULL, 'Banyuwangi', 'Jember', 'Situbondo', 'Jember', 'DMT', 'B2S', '11. LV MONITORING', 'ON AIR', 'ON AIR', 'DONE OA (July)', 'no issue (Sudah OA)', 'DONE', 'DONE', '17-03-2022', '16-05-2022', '15-07-2022', '24-06-2022', '05-07-2022', '05-07-2022', 'DONE', 'DONE', 'July', 'FO TELKOM', 'CP 2 2021 Uplift Batch 2', 'Metro-E', NULL, NULL, 'SIT147.jpeg', '2022-06-26 07:48:16', '2022-07-06 01:21:25'),
(285, 'CO 2021', 'Order 2021-Combat Permanenization', 'PSN448', 'SAMPOERNAPASURUAN', 'PSN448', 'SAMPOERNAPASURUAN', NULL, NULL, 'Pasuruan', 'Pasuruan', 'Malang', 'PASURUAN', 'Sidoarjo', 'DMT', 'B2S', '04. BAN/BAK', 'SITAC', 'NY RFI', 'Pesimis', 'Belum RFI', '25-06-2022', '25', '17-03-2022', '16-05-2022', '15-07-2022', NULL, NULL, NULL, '30-06-2022', '26', 'June', 'RTN REDEPLOY', 'CP 2 2021 Uplift Batch 2', 'Not Yet Presales / PO', '', NULL, NULL, '2022-06-26 07:48:16', '2022-06-26 07:48:16'),
(286, 'CO 2021', 'Order 2021-Combat Permanenization', 'SDA595', 'LEMUJUTKREMBUNG', 'SDA595', 'LEMUJUTKREMBUNG', 112.61, -7.50, NULL, 'Sidoarjo', 'Surabaya Selatan', 'SIDOARJO', 'Sidoarjo', 'DMT', 'B2S', '13. ON AIR', 'ON AIR', 'ON AIR', 'DONE ON AIR (Februari)', 'no issue (sudah OA)', 'DONE', 'DONE', '04-02-2022', '05-04-2022', '04-06-2022', '24-06-2022', NULL, '28-02-2022', 'DONE', 'DONE', 'February', 'RTN Redeploy', 'CP 2 2021 Uplift Batch 2', 'Support Settlemant 5 2021', '', NULL, 'SDA595.jpeg', '2022-06-26 07:48:16', '2022-06-26 07:48:16'),
(287, 'CO 2021', 'Order 2021-Part of 1875', 'NJK206', 'NGETOSNGETOS8', 'NJK206', 'NGETOSNGETOS8', 111.84, -7.70, 'Dusun Selopuro RT.02 RW.06 Desa Ngetos Kecamatan Ngetos Kabupaten Nganjuk, Propinsi Jawa Timur', 'Kediri', 'Lamongan', 'NGANJUK', 'Madiun', 'PTI', 'Collo TP', '13. ON AIR', 'ON AIR', 'ON AIR', 'DONE ON AIR (Februari)', 'no issue (sudah OA)', 'DONE', 'DONE', '16-12-2021', NULL, '25-01-2022', '24-06-2022', NULL, '05-02-2022', 'DONE', 'DONE', 'February', 'FO Telkom', 'CP 2 2021 Uplift Batch 2', 'Metro-E', '', NULL, 'NJK206.jpeg', '2022-06-26 07:48:16', '2022-06-26 07:48:16'),
(288, 'CO 2021', 'Order 2021-Part of 1875', 'COF007', 'NGEMBEHDLANGGU', 'COF007', 'GUNUNGRONGGOTAJINAN', 112.70, -8.05, 'ARGOMULYO 1 RT 011 RW 002 DESA GUNUNGRONGGO KEC.TAJINAN, KAB MALANG', 'Malang', 'Malang', 'Malang', 'Malang', 'Telkom Infra', 'Combat Relocation', '12. CONNECTED', 'ON AIR', 'ON AIR', 'DONE ON AIR (Februari)', 'no issue (sudah OA)', 'DONE', 'DONE', '08-10-2021', NULL, NULL, '24-06-2022', NULL, '15-02-2022', 'DONE', 'DONE', 'February', 'RTN Redeploy', 'Support New Infra Part 1875 non Collo', 'Support New Infra Part 1875 non Collo', '', NULL, NULL, '2022-06-26 07:48:16', '2022-06-26 07:48:16'),
(289, 'CO 2021', 'Order 2021-Part of 1875', 'COF022', 'COMBATTRIWUNGKIDUL', 'COF983', 'MBAHDJOE-PLAOSANSARANGAN', NULL, NULL, 'Magetan', 'Ponorogo', 'Madiun', 'Magetan', 'Madiun', 'Telkom Infra', 'Combat Relocation', '04. BAN/BAK', 'SITAC', 'NY RFI', 'Pesimis', 'Belum RFI', '20-06-2022', '25', '08-10-2021', NULL, NULL, NULL, NULL, NULL, '30-06-2022', '26', 'June', 'RTN REDEPLOY', 'Support New Infra Part 1875 non Collo', 'Support New Infra Part 1875 non Collo', '', NULL, NULL, '2022-06-26 07:48:16', '2022-06-26 07:48:16'),
(290, 'CO 2021', 'Order 2021-Part of 1875', 'COF068', 'CENTONGGONDANG', 'COF068', 'JABONTEGALPUNGGING', 112.58, -7.51, 'Ds.Jabontegal RT.003/001. Kec Pungging. Kab.Mojokerto', 'Pasuruan', 'Malang', 'Mojokerto', 'Sidoarjo', 'Telkom Infra', 'Combat Relocation', '12. CONNECTED', 'ON AIR', 'ON AIR', 'DONE ON AIR (Februari)', 'no issue (sudah OA)', 'DONE', 'DONE', '08-10-2021', NULL, NULL, '24-06-2022', NULL, '26-02-2022', 'DONE', 'DONE', 'February', 'RTN Redeploy', 'Support New Infra Part 1875 non Collo', 'Support New Infra Part 1875 non Collo', '', NULL, 'COF068.jpeg', '2022-06-26 07:48:16', '2022-06-26 07:48:16'),
(291, 'CO 2021', 'Order 2021-Part of 1875', 'COF025', 'SUMBERAGUNGPESANGGARAN7', 'COF025', 'CENTONGGONDANG', 112.52, -7.62, 'Mojokerto', 'Pasuruan', 'Malang', 'Mojokerto', 'Sidoarjo', 'Telkom Infra', 'Combat Relocation', '12. CONNECTED', 'ON AIR', 'ON AIR', 'DONE ON AIR (April)', 'no issue (sudah OA)', 'DONE', 'DONE', '08-10-2021', NULL, NULL, '24-06-2022', NULL, '07-04-2022', 'DONE', 'DONE', 'April', 'RTN Redeploy', 'Support New Infra Part 1875 non Collo', 'Support New Infra Part 1875 non Collo', '', NULL, 'COF025.jpeg', '2022-06-26 07:48:16', '2022-06-26 07:48:16'),
(292, 'CO 2021', 'Order 2021-Part of 1875', 'COF230', 'KEDUNGASRITEGALDLIMO', 'COF230', 'KEDUNGASRITEGALDLIMO', 114.33, -8.53, 'Kp.Persen RT/RW 13/03 Desa.Kedungsari Kec.Tegaldlimo Kab.Banyuwangi', 'Banyuwangi', 'Jember', 'Malang', 'Malang', 'Telkom Infra', 'Combat Relocation', '12. CONNECTED', 'ON AIR', 'ON AIR', 'DONE ON AIR (Februari)', 'no issue (sudah OA)', 'DONE', 'DONE', '08-10-2021', NULL, NULL, '24-06-2022', NULL, '20-02-2022', 'DONE', 'DONE', 'February', 'RTN Redeploy', 'Support New Infra Part 1875 non Collo', 'Support New Infra Part 1875 non Collo', '', NULL, NULL, '2022-06-26 07:48:16', '2022-06-26 07:48:16'),
(293, 'CO 2021', 'Order 2021-Part of 1875', 'COF066', 'BANJARANYARKRAS', 'COF066', 'BANJARANYARKRAS', 111.98, -7.95, 'Kp.Boro Rt/Rw 03/03 Ds.Banjaranyar Rt/Rw 03/03. Kec Kras. Kab.Kediri Jawa Timur', 'Kediri', 'Lamongan', 'Kediri', 'Madiun', 'Telkom Infra', 'Combat Relocation', '12. CONNECTED', 'ON AIR', 'ON AIR', 'DONE ON AIR (Januari)', 'no issue (sudah OA)', 'DONE', 'DONE', '08-10-2021', NULL, NULL, '24-06-2022', NULL, '11-01-2022', 'DONE', 'DONE', 'January', 'RTN Redeploy', 'Support New Infra Part 1875 non Collo', 'Support New Infra Part 1875 non Collo', '', NULL, 'COF066.jpeg', '2022-06-26 07:48:16', '2022-06-26 07:48:16'),
(294, 'CO 2021', 'Order 2021-Part of 1875', 'COF001', 'KARANGPATIHANJAMBONPONOROGO', 'COF001', 'KOWANGSEMANDING', 112.08, -6.95, 'Dusun Sendang Pancur RT002/RW005 Desa Genaharjo Kec. Semanding Kabupaten Tuban', 'Lamongan', 'Lamongan', 'Tuban', 'Lamongan', 'Telkom Infra', 'Combat Relocation', '12. CONNECTED', 'ON AIR', 'ON AIR', 'DONE ON AIR (Februari)', 'no issue (sudah OA)', 'DONE', 'DONE', '08-10-2021', NULL, NULL, '24-06-2022', NULL, '18-02-2022', 'DONE', 'DONE', 'February', 'RTN Redeploy', 'Support New Infra Part 1875 non Collo', 'Support New Infra Part 1875 non Collo', '', NULL, NULL, '2022-06-26 07:48:16', '2022-06-26 07:48:16'),
(295, 'CO 2021', 'Order 2021-Part of 1875', 'COF027', 'COMBATCRUISERDPL', 'COF060', 'DUDUKSAMPEYANWADAK', 112.52, -7.12, 'Gresik', 'Surabaya Utara', 'Surabaya Utara', 'Gresik', 'Lamongan', 'Telkom Infra', 'Combat Relocation', '11. LV MONITORING', 'ON AIR', 'ON AIR', 'DONE ON AIR (April)', 'no issue (sudah OA)', 'DONE', 'DONE', '08-10-2021', NULL, NULL, '24-06-2022', NULL, '28-04-2022', 'DONE', 'DONE', 'April', 'RTN Redeploy', 'Support New Infra Part 1875 non Collo', 'Support New Infra Part 1875 non Collo', '', NULL, 'COF060.jpeg', '2022-06-26 07:48:16', '2022-06-26 07:48:16'),
(296, 'CO 2021', 'Order 2021-Part of 1875', 'COF026', 'COMBATSENGONJOMBANG', 'COF122', 'GUNUNGANYARSOKO', 111.97, -7.07, 'Tuban', 'Lamongan', 'Lamongan', 'Tuban', 'Lamongan', 'Telkom Infra', 'Combat Relocation', '12. CONNECTED', 'ON AIR', 'ON AIR', 'DONE OA (June)', 'no issue (Sudah OA)', 'DONE', 'DONE', '08-10-2021', NULL, NULL, '24-06-2022', NULL, '14-06-2022', 'DONE', 'DONE', 'June', 'RTN REDEPLOY', 'Support New Infra Part 1875 non Collo', 'Support New Infra Part 1875 non Collo', '', NULL, 'COF122.jpeg', '2022-06-26 07:48:16', '2022-06-26 07:48:16'),
(297, 'CO 2021', 'Order 2021-Part of 1875', 'COF067', 'JABONTEGALPUNGGING', 'COF067', 'KLODANNGETOS', NULL, NULL, 'Nganjuk', 'Kediri', 'Lamongan', 'Nganjuk', 'Madiun', 'Telkom Infra', 'Combat Relocation', '07. RFC', 'RFC', 'NY RFI', 'Optimis', 'Belum RFI', '24-05-2022', '21', '08-10-2021', NULL, NULL, '24-06-2022', NULL, NULL, '31-05-2022', '22', 'May', 'RTN REDEPLOY', 'Support New Infra Part 1875 non Collo', 'Support New Infra Part 1875 non Collo', '', NULL, NULL, '2022-06-26 07:48:16', '2022-06-26 07:48:16'),
(298, 'CO 2021', 'Order 2021-Part of 1875', 'COF953', 'COMBATBALEREJO', 'COF953', 'GROGOLGROGOL', 111.96, -7.76, 'Grogol Kec. Grogol Kab. Kediri Jawa Timur', 'Kediri', 'Lamongan', 'Kediri', 'Madiun', 'Telkom Infra', 'Combat Relocation', '12. CONNECTED', 'ON AIR', 'ON AIR', 'DONE ON AIR (Maret)', 'no issue (sudah OA)', 'DONE', 'DONE', '08-10-2021', NULL, NULL, '24-06-2022', NULL, '08-03-2022', 'DONE', 'DONE', 'March', 'RTN Redeploy', 'Support New Infra Part 1875 non Collo', 'Support New Infra Part 1875 non Collo', '', NULL, 'COF953.jpeg', '2022-06-26 07:48:16', '2022-06-26 07:48:16'),
(299, 'CO 2021', 'Order 2021-Part of 1875', 'COF059', 'SEMBUNGREJOPLUMPANGTUBAN', 'COF059', 'SIMBARINGINKUTOREJO', 112.53, -7.60, 'Simbaringin RT1 RW3, Kec Kutorejo, Kab Mojokerto', 'Pasuruan', 'Malang', 'Mojokerto', 'Sidoarjo', 'Telkom Infra', 'Combat Relocation', '12. CONNECTED', 'ON AIR', 'ON AIR', 'DONE ON AIR (Januari)', 'no issue (sudah OA)', 'DONE', 'DONE', '08-10-2021', NULL, NULL, '24-06-2022', NULL, '21-01-2022', 'DONE', 'DONE', 'January', 'RTN Redeploy', 'Support New Infra Part 1875 non Collo', 'Support New Infra Part 1875 non Collo', '', NULL, 'COF059.jpeg', '2022-06-26 07:48:16', '2022-06-26 07:48:16'),
(300, 'CO 2021', 'Order 2021-Part of 1875', 'COF008', 'GUNUNGRONGGOTAJINAN', 'COF008', 'GESIKANPAKEL', NULL, NULL, 'Tulungagung', 'Tulungagung', 'Madiun', 'Tulungagung', 'Malang', 'Telkom Infra', 'Combat Relocation', '11. LV MONITORING', 'ON AIR', 'ON AIR', 'DONE OA (June)', 'no issue (Sudah OA)', 'DONE', 'DONE', '08-10-2021', NULL, NULL, '24-06-2022', NULL, '18-06-2022', 'DONE', 'DONE', 'June', 'RTN REDEPLOY', 'Support New Infra Part 1875 non Collo', 'Support New Infra Part 1875 non Collo', '', 'update 20 Juni', 'COF008.jpeg', '2022-06-26 07:48:16', '2022-06-26 07:48:16'),
(301, 'CO 2021', 'Order 2021-Part of 1875', 'COF024', 'COMBATAPACHE', 'COF024', 'SUWALUHBALONG BENDO', NULL, NULL, 'Sidoarjo', 'Surabaya Selatan', 'Surabaya Selatan', 'Sidoarjo', 'Sidoarjo', 'Telkom Infra', 'Combat Relocation', '01. SURVEY', 'SURVEY', 'NY RFI', 'Pesimis', 'Belum RFI', '20-06-2022', '25', '08-10-2021', NULL, NULL, '24-06-2022', NULL, NULL, '30-06-2022', '26', 'June', 'RTN REDEPLOY', 'Support New Infra Part 1875 non Collo', 'Support New Infra Part 1875 non Collo', '', NULL, NULL, '2022-06-26 07:48:16', '2022-06-26 07:48:16'),
(302, 'CO 2021', 'Order 2021-Part of 1875', 'COF002', 'PADANGTRUCUKBOJONEGORO', 'COF002', 'PESANGGRAHANKUTOREJO', 112.54, -7.56, 'Dusun Mojojejer RT 3 RW 4, Desa Pesanggrahan, Kec Kutorejo, Kab Mojokerto', 'Pasuruan', 'Malang', 'Mojokerto', 'Sidoarjo', 'Telkom Infra', 'Combat Relocation', '12. CONNECTED', 'ON AIR', 'ON AIR', 'DONE ON AIR (Januari)', 'no issue (sudah OA)', 'DONE', 'DONE', '08-10-2021', NULL, NULL, '24-06-2022', NULL, '21-01-2022', 'DONE', 'DONE', 'January', 'RTN Redeploy', 'Support New Infra Part 1875 non Collo', 'Support New Infra Part 1875 non Collo', '', NULL, 'COF002.jpeg', '2022-06-26 07:48:16', '2022-06-26 07:48:16'),
(303, 'CO 2021', 'Order 2021-Part of 1875', 'COF070', 'PUCANGANOMJAMBESARIDARUSSHOLAH', 'COF070', 'BLARUBADAS', 112.22, -7.69, 'Dusun Batan RT 2 RW 1, Desa Blaru, Kec Badas, Kab Kediri', 'Kediri', 'Lamongan', 'Kediri', 'Madiun', 'Telkom Infra', 'Combat Relocation', '12. CONNECTED', 'ON AIR', 'ON AIR', 'DONE ON AIR (Februari)', 'no issue (sudah OA)', 'DONE', 'DONE', '08-10-2021', NULL, NULL, '24-06-2022', NULL, '11-02-2022', 'DONE', 'DONE', 'February', 'RTN Redeploy', 'Support New Infra Part 1875 non Collo', 'Support New Infra Part 1875 non Collo', '', NULL, 'COF070.jpeg', '2022-06-26 07:48:16', '2022-06-26 07:48:16'),
(304, 'CO 2021', 'Order 2021-Part of 1875', 'COF976', 'COMBATKALIGLAGAH', 'COF972', 'ROWO TENGAHSUMBER BARU', 113.38, -8.16, 'Kel Sumber Rejo , Kec Sumber Baru, Kab Jember', 'Jember', 'Jember', 'JEMBER', 'Jember', 'Telkom Infra', 'Combat Relocation', '12. CONNECTED', 'ON AIR', 'ON AIR', 'DONE ON AIR (Februari)', 'no issue (sudah OA)', 'DONE', 'DONE', '08-10-2021', NULL, NULL, '24-06-2022', NULL, '22-02-2022', 'DONE', 'DONE', 'February', 'RTN Redeploy', 'Support New Infra Part 1875 non Collo', 'Support New Infra Part 1875 non Collo', '', NULL, 'COF972.jpeg', '2022-06-26 07:48:16', '2022-06-26 07:48:16'),
(305, 'CO 2021', 'Order 2021-Part of 1875', 'COF994', 'COMBATPTPNXIIZEELANDIATANGGUL', 'COF994', 'PUCUNG KIDULBOYOLANGU', NULL, NULL, 'Tulungagung', 'Tulungagung', 'Madiun', 'Tulungagung', 'Malang', 'Telkom Infra', 'Combat Relocation', '06. REKOM/PERIZINAN', 'SITAC', 'NY RFI', 'Pesimis', 'Belum RFI', '10-07-2022', '27', '08-10-2021', NULL, NULL, '24-06-2022', NULL, NULL, '26-06-2022', '25', 'July', 'RTN REDEPLOY', 'Support New Infra Part 1875 non Collo', 'Support New Infra Part 1875 non Collo', NULL, NULL, NULL, '2022-06-26 07:48:16', '2022-06-26 08:33:20'),
(306, 'CO 2021', 'Order 2021-Part of 1875', 'COF069', 'LEMUJUTKREMBUNG', 'COF069', 'KARANGTENGAHKANDANGAN', 112.24, -7.73, 'Kediri', 'Kediri', 'Lamongan', 'KEDIRI', 'Madiun', 'Telkom Infra', 'Combat Relocation', '12. CONNECTED', 'ON AIR', 'ON AIR', 'DONE ON AIR (Maret)', 'no issue (sudah OA)', 'DONE', 'DONE', '08-10-2021', NULL, NULL, '24-06-2022', NULL, '30-03-2022', 'DONE', 'DONE', 'March', 'RTN Redeploy', 'Support New Infra Part 1875 non Collo', 'Support New Infra Part 1875 non Collo', '', NULL, 'COF069.jpeg', '2022-06-26 07:48:16', '2022-06-26 07:48:16'),
(307, 'CO 2021', 'Order 2021-Part of 1875', 'COF019', 'COMBATJUANDATIMUR', 'COF019', 'KENDALKENDAL', 111.30, -7.57, 'Kendal Kendal, Kab Ngawi', 'Ponorogo', 'Madiun', 'Ngawi', 'Lamongan', 'Telkom Infra', 'Combat Relocation', '12. CONNECTED', 'ON AIR', 'ON AIR', 'DONE ON AIR (Maret)', 'no issue (sudah OA)', 'DONE', 'DONE', '08-10-2021', NULL, NULL, '24-06-2022', NULL, '08-03-2022', 'DONE', 'DONE', 'March', 'RTN Redeploy', 'Support New Infra Part 1875 non Collo', 'Support New Infra Part 1875 non Collo', '', NULL, 'COF019.jpeg', '2022-06-26 07:48:16', '2022-06-26 07:48:16'),
(308, 'CO 2021', 'Order 2021-Combat Permanenization', 'KED459', 'BOGOWONTOKEDIRI', 'KED459', 'BOGOWONTOKEDIRI', 112.05, -7.80, NULL, 'Kediri', 'Lamongan', 'Kediri', 'Madiun', 'DMT', 'B2S', '13. ON AIR', 'ON AIR', 'ON AIR', 'DONE ON AIR (Maret)', 'no issue (sudah OA)', 'DONE', 'DONE', '22-12-2021', '20-02-2022', '21-04-2022', '24-06-2022', NULL, '02-03-2022', 'DONE', 'DONE', 'March', 'FO Telkom', 'CP 2 2021 Uplift', 'Metro-E', '', NULL, 'KED459.jpeg', '2022-06-26 07:48:16', '2022-06-26 07:48:16'),
(309, 'CO 2021', 'Special VIP - Permanenisasi Combat', 'BWI471', 'PONDOKMABADIULIHSAN', 'BWI471', 'PONDOKMABADIULIHSAN', 114.11, -8.41, 'Jl. KH.Achmad Musayyidi, Ds. Karangdoro, Kec. Tegalsari. Kab. Banyuwangi', 'Banyuwangi', 'Banyuwangi', 'Banyuwangi', 'Jember', 'DMT', 'B2S', '13. ON AIR', 'ON AIR', 'ON AIR', 'DONE ON AIR (Februari)', 'no issue (sudah OA)', 'DONE', 'DONE', '10-12-2021', '08-02-2022', '09-04-2022', '24-06-2022', NULL, '09-02-2022', 'DONE', 'DONE', 'February', 'FO Telkom', 'CAPEX RAN NEW INFRA PERMANENISASI COMBAT PONDOK MABADI’UL IHSAN JAWA TIMUR 2021', 'Metro-E', '', NULL, 'BWI471.jpeg', '2022-06-26 07:48:16', '2022-06-26 07:48:16'),
(310, 'KKST 2022', 'New Infra Batch#1 - 2022', 'KPJ001', 'WAJAKDADAPAN', 'KPJ001', 'WAJAKDADAPAN', 112.75, -8.13, NULL, 'Malang', 'Malang', 'MALANG', 'Malang', 'PTI', 'Collo TP', '12. CONNECTED', 'ON AIR', 'ON AIR', 'DONE ON AIR (Maret)', 'no issue (sudah OA)', 'DONE', 'DONE', '21-01-2022', NULL, '02-03-2022', '24-06-2022', NULL, '13-03-2022', 'DONE', 'DONE', 'March', 'RTN Redeploy', 'CP 2 2022', 'BOQ Redeploy IP MW Jatim Area Support New Infra Part 400 2022', '', NULL, 'KPJ001.jpeg', '2022-06-26 07:48:16', '2022-06-26 07:48:16'),
(311, 'KKST 2022', 'New Infra Batch#1 - 2022', 'SYX002', 'KREMBANGANPERAK BARAT', 'SYX002', 'KREMBANGANPERAK BARAT', 112.72, -7.23, NULL, 'Surabaya Utara', 'Surabaya Utara', 'Surabaya', 'Surabaya', 'PTI', 'Collo TP', '11. LV MONITORING', 'ON AIR', 'ON AIR', 'DONE ON AIR (Maret)', 'no issue (sudah OA)', 'DONE', 'DONE', '21-01-2022', NULL, '02-03-2022', '24-06-2022', NULL, '08-03-2022', 'DONE', 'DONE', 'March', 'FO Telkom', 'CP 2 2022', 'Metro-E', '', NULL, 'SYX002.jpeg', '2022-06-26 07:48:16', '2022-06-26 07:48:16'),
(312, 'KKST 2022', 'New Infra Batch#1 - 2022', 'SYX004', 'TAMBAKSARIKAPASMADYA BARU', 'SYX004', 'TAMBAKSARIKAPASMADYA BARU', 112.76, -7.24, NULL, 'Surabaya Timur', 'Surabaya Utara', 'Surabaya', 'Surabaya', 'PTI', 'Collo TP', '12. CONNECTED', 'ON AIR', 'ON AIR', 'DONE ON AIR (Maret)', 'no issue (sudah OA)', 'DONE', 'DONE', '21-01-2022', NULL, '02-03-2022', '24-06-2022', NULL, '16-03-2022', 'DONE', 'DONE', 'March', 'FO Telkom', 'CP 2 2022', 'Metro-E', '', NULL, 'SYX004.jpeg', '2022-06-26 07:48:16', '2022-06-26 07:48:16'),
(313, 'KKST 2022', 'New Infra Batch#1 - 2022', 'SYX003', 'WIYUNGBABATAN', 'SYX003', 'WIYUNGBABATAN', 112.68, -7.33, NULL, 'Surabaya Barat', 'Surabaya Selatan', 'Surabaya', 'Surabaya', 'ACOM', 'Collo TP', '12. CONNECTED', 'ON AIR', 'ON AIR', 'DONE ON AIR (Maret)', 'no issue (sudah OA)', 'DONE', 'DONE', '21-01-2022', NULL, '02-03-2022', '24-06-2022', NULL, '04-03-2022', 'DONE', 'DONE', 'March', 'FO Telkom', 'CP 2 2022', 'Metro-E', '', NULL, 'SYX003.jpeg', '2022-06-26 07:48:16', '2022-06-26 07:48:16'),
(314, 'KKST 2022', 'New Infra Batch#1 - 2022', 'SDA654', 'KRIANWATUGOLONG', 'SDA654', 'KRIANWATUGOLONG', 112.60, -7.38, NULL, 'Sidoarjo', 'Surabaya Selatan', 'SIDOARJO', 'Sidoarjo', 'ACOM', 'Collo TP', '12. CONNECTED', 'ON AIR', 'ON AIR', 'DONE ON AIR (Februari)', 'no issue (sudah OA)', 'DONE', 'DONE', '21-01-2022', NULL, '02-03-2022', '24-06-2022', NULL, '28-02-2022', 'DONE', 'DONE', 'February', 'FO Telkom', 'CP 2 2022', 'Metro-E', '', NULL, 'SDA654.jpeg', '2022-06-26 07:48:16', '2022-06-26 07:48:16'),
(315, 'KKST 2022', 'New Infra Batch#1 - 2022', 'SYX005', 'KENJERANBULAK BANTENG', 'SYX005', 'KENJERANBULAK BANTENG', 112.76, -7.21, NULL, 'Surabaya Utara', 'Surabaya Utara', 'Surabaya', 'Surabaya', 'STP', 'Collo TP', '12. CONNECTED', 'ON AIR', 'ON AIR', 'DONE ON AIR (Maret)', 'no issue (sudah OA)', 'DONE', 'DONE', '21-01-2022', NULL, '02-03-2022', '24-06-2022', NULL, '05-03-2022', 'DONE', 'DONE', 'March', 'FO Telkom', 'CP 2 2022', 'Metro-E', '', NULL, 'SYX005.jpeg', '2022-06-26 07:48:16', '2022-06-26 07:48:16'),
(316, 'KKST 2022', 'New Infra Batch#1 - 2022', 'KPJ002', 'PAKISSEKARPURO', 'KPJ002', 'PAKISSEKARPURO', 112.68, -7.97, NULL, 'Malang', 'Malang', 'MALANG', 'Malang', 'CMI', 'Collo TP', '12. CONNECTED', 'ON AIR', 'ON AIR', 'DONE ON AIR (Maret)', 'no issue (sudah OA)', 'DONE', 'DONE', '21-01-2022', NULL, '02-03-2022', '24-06-2022', NULL, '03-03-2022', 'DONE', 'DONE', 'March', 'FO Telkom', 'CP 2 2022', 'Metro-E', '', NULL, 'KPJ002.jpeg', '2022-06-26 07:48:16', '2022-06-26 07:48:16'),
(317, 'KKST 2022', 'New Infra Batch#1 - 2022', 'SDA653', 'KRIANKEMASAN', 'SDA653', 'KRIANKEMASAN', 112.59, -7.40, NULL, 'Sidoarjo', 'Surabaya Selatan', 'SIDOARJO', 'Sidoarjo', 'TBG', 'Collo TP', '12. CONNECTED', 'ON AIR', 'ON AIR', 'DONE ON AIR (Februari)', 'no issue (sudah OA)', 'DONE', 'DONE', '21-01-2022', NULL, '02-03-2022', '24-06-2022', NULL, '24-02-2022', 'DONE', 'DONE', 'February', 'FO Telkom', 'CP 2 2022', 'Metro-E', '', NULL, 'SDA653.jpeg', '2022-06-26 07:48:16', '2022-06-26 07:48:16'),
(318, 'KKST 2022', 'New Infra Batch#1 - 2022', 'PRO220', 'NGEBELSEMPU', 'PRO220', 'NGEBELSEMPU', 111.61, -7.79, NULL, 'Ponorogo', 'Madiun', 'Ponorogo', 'Madiun', 'TBG', 'B2S', '11. LV MONITORING', 'ON AIR', 'ON AIR', 'DONE ON AIR (April)', 'no issue (sudah OA)', 'DONE', 'DONE', '16-02-2022', '17-04-2022', '16-06-2022', '24-06-2022', NULL, '21-04-2022', 'DONE', 'DONE', 'April', 'RTN Redeploy', 'CP 2 2022', 'BOQ Redeploy IP MW Jatim Area Support New Infra Part 400 2022', '62', NULL, 'PRO220.jpeg', '2022-06-26 07:48:16', '2022-06-26 07:48:16'),
(319, 'KKST 2022', 'New Infra Batch#1 - 2022', 'SPG186', 'TORJUNKRAMPON', 'SPG186', 'TORJUNKRAMPON', 113.18, -7.16, 'Jl. Raya Krampon Plakaran , Ds Krampon Kec Torjun, Kab Sampang', 'Bangkalan', 'Surabaya Utara', 'Sampang', 'Surabaya', 'TBG', 'B2S', '12. CONNECTED', 'ON AIR', 'ON AIR', 'DONE ON AIR (Maret)', 'no issue (sudah OA)', 'DONE', 'DONE', '16-02-2022', '17-04-2022', '16-06-2022', '24-06-2022', NULL, '28-03-2022', 'DONE', 'DONE', 'March', 'RTN Redeploy', 'CP 2 2022', 'Plan Presales Support New Infra Part 400 B2S 2022', '62', NULL, 'SPG186.jpeg', '2022-06-26 07:48:16', '2022-06-26 07:48:16'),
(320, 'KKST 2022', 'New Infra Batch#1 - 2022', 'BDO138', 'TLOGOSARIGUNOSARI', 'BDO138', 'TLOGOSARIGUNOSARI', 113.98, -7.99, NULL, 'Jember', 'Jember', 'Bondowoso', 'Jember', 'TBG', 'B2S', '12. CONNECTED', 'ON AIR', 'ON AIR', 'DONE ON AIR (April)', 'no issue (sudah OA)', 'DONE', 'DONE', '16-02-2022', '17-04-2022', '16-06-2022', '24-06-2022', NULL, '02-04-2022', 'DONE', 'DONE', 'April', 'RTN Redeploy', 'CP 2 2022', 'BOQ Redeploy IP MW Jatim Area Support New Infra Part 400 2022', '62', NULL, 'BDO138.jpeg', '2022-06-26 07:48:16', '2022-06-26 07:48:16'),
(321, 'KKST 2022', 'New Infra Batch#1 - 2022', 'NJK247', 'NGRONGGOTBANJAR SARI', 'NJK247', 'NGRONGGOTBANJAR SARI', 112.07, -7.68, 'Dusun Banjarsari RT02 RW04 Desa Banjarsari Kecamatan Ngronggot Kabupaten Nganjuk', 'Kediri', 'Lamongan', 'Nganjuk', 'Madiun', 'TBG', 'B2S', '12. CONNECTED', 'ON AIR', 'ON AIR', 'DONE ON AIR (Maret)', 'no issue (sudah OA)', 'DONE', 'DONE', '16-02-2022', '17-04-2022', '16-06-2022', '24-06-2022', NULL, '23-03-2022', 'DONE', 'DONE', 'March', 'RTN Redeploy', 'CP 2 2022', 'Plan Presales Support New Infra Part 400 B2S 2022', '52', NULL, 'NJK247.jpeg', '2022-06-26 07:48:16', '2022-06-26 07:48:16'),
(322, 'KKST 2022', 'New Infra Batch#1 - 2022', 'NWI237', 'SINEKAUMAN', 'NWI237', 'SINEKAUMAN', 111.19, -7.47, 'Bendo, rt 003 rw 002, Desa Kauman, Kec. Sine, Kab. Ngawi', 'Ponorogo', 'Madiun', 'Ngawi', 'Lamongan', 'TBG', 'B2S', '12. CONNECTED', 'ON AIR', 'ON AIR', 'DONE ON AIR (Maret)', 'no issue (sudah OA)', 'DONE', 'DONE', '16-02-2022', '17-04-2022', '16-06-2022', '24-06-2022', NULL, '23-03-2022', 'DONE', 'DONE', 'March', 'RTN Redeploy', 'CP 2 2022', 'BOQ Redeploy IP MW Jatim Area Support New Infra Part 400 2022', '62', NULL, 'NWI237.jpeg', '2022-06-26 07:48:16', '2022-06-26 07:48:16'),
(323, 'KKST 2022', 'New Infra Batch#1 - 2022', 'GSK419', 'TAMBAKTANJUNGORI', 'GSK419', 'TAMBAKTANJUNGORI', 112.67, -5.74, 'Dsn Pegarangan Rt.001 Rw.005 Desa Tanjungori Kec.Tambak Kab.Gresik', 'Surabaya Utara', 'Surabaya Utara', 'Gresik', 'Lamongan', 'TBG', 'B2S', '12. CONNECTED', 'ON AIR', 'ON AIR', 'DONE ON AIR (Maret)', 'no issue (sudah OA)', 'DONE', 'DONE', '16-02-2022', '17-04-2022', '16-06-2022', '24-06-2022', NULL, '31-03-2022', 'DONE', 'DONE', 'March', 'FO Telkom', 'CP 2 2022', 'Metro-E', '62', NULL, 'GSK419.jpeg', '2022-06-26 07:48:16', '2022-06-26 07:48:16'),
(324, 'KKST 2022', 'New Infra Batch#1 - 2022', 'LMJ227', 'KUNIRJATIGONO', 'LMJ227', 'KUNIRJATIGONO', 113.22, -8.24, 'Dusun Kebunbayur Rt 37 Rw 09 Desa Jatigono Kecamatan Kunir Kabupaten Lumajang', 'Probolinggo', 'Jember', 'Lumajang', 'Jember', 'TBG', 'B2S', '12. CONNECTED', 'ON AIR', 'ON AIR', 'DONE ON AIR (Maret)', 'no issue (sudah OA)', 'DONE', 'DONE', '16-02-2022', '17-04-2022', '16-06-2022', '24-06-2022', NULL, '25-03-2022', 'DONE', 'DONE', 'March', 'FO Telkom', 'CP 2 2022', 'Metro-E', '52', NULL, 'LMJ227.jpeg', '2022-06-26 07:48:16', '2022-06-26 07:48:16'),
(325, 'KKST 2022', 'New Infra Batch#1 - 2022', 'PAE001', 'GURAHTAMBAKREJO', 'PAE001', 'GURAHTAMBAKREJO', 112.13, -7.81, 'Jl. Beringin RT 03 RW 06, Desa Tambakrejo, Kec. Gurah, Kab. Kediri', 'Kediri', 'Lamongan', 'Kediri', 'Madiun', 'DMT', 'B2S', '12. CONNECTED', 'ON AIR', 'ON AIR', 'DONE ON AIR (Maret)', 'no issue (sudah OA)', 'DONE', 'DONE', '16-02-2022', '17-04-2022', '16-06-2022', '24-06-2022', NULL, '31-03-2022', 'DONE', 'DONE', 'March', 'RTN Redeploy', 'CP 2 2022', 'BOQ Redeploy IP MW Jatim Area Support New Infra Part 400 2022', '62', NULL, 'PAE001.jpeg', '2022-06-26 07:48:16', '2022-06-26 07:48:16'),
(326, 'KKST 2022', 'New Infra Batch#1 - 2022', 'PAE002', 'MOJOKRANDING', 'PAE002', 'MOJOKRANDING', 111.94, -7.95, 'Dsn. Mayan RT 07 RW 02, Desa Kranding, Kec. Mojo, Kab. Kediri', 'Kediri', 'Lamongan', 'Kediri', 'Madiun', 'DMT', 'B2S', '12. CONNECTED', 'ON AIR', 'ON AIR', 'DONE ON AIR (Maret)', 'no issue (sudah OA)', 'DONE', 'DONE', '16-02-2022', '17-04-2022', '16-06-2022', '24-06-2022', NULL, '17-03-2022', 'DONE', 'DONE', 'March', 'RTN Redeploy', 'CP 2 2022', 'BOQ Redeploy IP MW Jatim Area Support New Infra Part 400 2022', '52', NULL, 'PAE002.jpeg', '2022-06-26 07:48:16', '2022-06-26 07:48:16'),
(327, 'KKST 2022', 'New Infra Batch#1 - 2022', 'SMP265', 'KALIANGETKALIMOOK', 'SMP265', 'KALIANGETKALIMOOK', 113.91, -7.04, 'JL. RAYA KALIANGET RT,006 RW,006 Dusun, Temor Lorong Desa Kalimo\'ok Kecamatan Kalianget, Kab. Sumenep', 'Pamekasan', 'Surabaya Utara', 'Sumenep', 'Surabaya', 'DMT', 'B2S', '12. CONNECTED', 'ON AIR', 'ON AIR', 'DONE ON AIR (Maret)', 'no issue (sudah OA)', 'DONE', 'DONE', '16-02-2022', '17-04-2022', '16-06-2022', '24-06-2022', NULL, '31-03-2022', 'DONE', 'DONE', 'March', 'RTN Redeploy', 'CP 2 2022', 'BOQ Redeploy IP MW Jatim Area Support New Infra Part 400 2022', '52', NULL, 'SMP265.jpeg', '2022-06-26 07:48:16', '2022-06-26 07:48:16'),
(328, 'KKST 2022', 'New Infra Batch#1 - 2022', 'GSK420', 'MENGANTIBOBOH', 'GSK420', 'MENGANTIBOBOH', 112.57, -7.26, 'JL. Bendungan RT.005 RW.002 Desa Putat Lor Kec. Menganti Gresik', 'Surabaya Utara', 'Surabaya Utara', 'Gresik', 'Lamongan', 'DMT', 'B2S', '12. CONNECTED', 'ON AIR', 'ON AIR', 'DONE ON AIR (Maret)', 'no issue (sudah OA)', 'DONE', 'DONE', '16-02-2022', '17-04-2022', '16-06-2022', '24-06-2022', NULL, '31-03-2022', 'DONE', 'DONE', 'March', 'FO Telkom', 'CP 2 2022', 'Metro-E', '52', NULL, 'GSK420.jpeg', '2022-06-26 07:48:16', '2022-06-26 07:48:16'),
(329, 'KKST 2022', 'New Infra Batch#1 - 2022', 'JBR565', 'JENGGAWAHKERTONEGORO', 'JBR565', 'JENGGAWAHKERTONEGORO', 113.61, -8.30, 'DUSUN KERTONEGORKUTARA RT 08 RW 02 DESA, KERTONEGORO KEC, JENGGAWAH KAB, JEMBER', 'Jember', 'Jember', 'Jember', 'Jember', 'DMT', 'B2S', '11. LV MONITORING', 'ON AIR', 'ON AIR', 'DONE ON AIR (May)', 'no issue (sudah OA)', 'DONE', 'DONE', '16-02-2022', '17-04-2022', '16-06-2022', '24-06-2022', NULL, '01-05-2022', 'DONE', 'DONE', 'May', 'FO Telkom', 'CP 2 2022', 'Metro-E', '52', NULL, 'JBR565.jpeg', '2022-06-26 07:48:16', '2022-06-26 07:48:16'),
(330, 'KKST 2022', 'New Infra Batch#1 - 2022', 'MDU327', 'SAWAHANPUCANGREJO', 'MDU327', 'SAWAHANPUCANGREJO', NULL, NULL, NULL, 'Madiun', 'Madiun', 'Madiun', 'Madiun', 'DMT', 'B2S', '11. LV MONITORING', 'ON AIR', 'ON AIR', 'DONE OA (June)', 'no issue (Sudah OA)', 'DONE', 'DONE', '16-02-2022', '17-04-2022', '16-06-2022', '24-06-2022', NULL, '21-06-2022', 'DONE', 'DONE', 'June', 'RTN REDEPLOY', 'CP 2 2022', 'Plan Presales Support New Infra Part 400 B2S 2022', '62', 'update 20 Juni', 'MDU327.jpeg', '2022-06-26 07:48:16', '2022-06-26 07:48:16'),
(331, 'KKST 2022', 'New Infra Batch#1 - 2022', 'SMP266', 'ARJASAANGON ANGON', 'SMP266', 'ARJASAANGON ANGON', 115.30, -6.86, 'Jl. RAYA ANGON ANGON, DESA ANGON ANGON, KEC. ARJASA, KAB. SUMENEP', 'Pamekasan', 'Surabaya Utara', 'Sumenep', 'Surabaya', 'DMT', 'B2S', '12. CONNECTED', 'ON AIR', 'ON AIR', 'DONE ON AIR (Maret)', 'no issue (sudah OA)', 'DONE', 'DONE', '16-02-2022', '17-04-2022', '16-06-2022', '24-06-2022', NULL, '27-03-2022', 'DONE', 'DONE', 'March', 'FO Telkom', 'CP 2 2022', 'Metro-E', '42', NULL, 'SMP266.jpeg', '2022-06-26 07:48:16', '2022-06-26 07:48:16'),
(332, 'KKST 2022', 'New Infra Batch#1 - 2022', 'SPG185', 'OMBENRAPA DAYA', 'SPG185', 'OMBENRAPA DAYA', 113.33, -7.09, 'Dsn. Angsokah RT.09 RW.09, Kel. Rapa Daya, Kec. Omben, Kab. Sampang', 'Bangkalan', 'Surabaya Utara', 'Sampang', 'Surabaya', 'DMT', 'B2S', '11. LV MONITORING', 'ON AIR', 'ON AIR', 'DONE OA (May)', 'no issue (Sudah OA)', 'DONE', 'DONE', '16-02-2022', '17-04-2022', '16-06-2022', NULL, NULL, '21-05-2022', 'DONE', 'DONE', 'May', 'RTN REDEPLOY', 'CP 2 2022', 'Plan Presales Support New Infra Part 400 B2S 2022', '62', NULL, 'SPG185.jpeg', '2022-06-26 07:48:16', '2022-06-26 07:48:16'),
(333, 'KKST 2022', 'New Infra Batch#1 - 2022', 'TAG278', 'KAUMANBOLOREJO', 'TAG278', 'KAUMANBOLOREJO', 111.86, -8.05, 'jl. Wilis RT 30 RW 11 Desa Bulurejo Kec Kauman Tulungagung', 'Tulungagung', 'Madiun', 'Tulungagung', 'Malang', 'TBG', 'B2S', '01. SURVEY', 'SURVEY', 'NY RFI', 'Pesimis', 'Belum RFI', '24-06-2022', NULL, '14-06-2022', '13-08-2022', '12-10-2022', '24-06-2022', NULL, NULL, '24-06-2022', NULL, 'August', 'RTN Redeploy', 'CP 2 2022', 'Plan Presales Support New Infra Part 400 B2S 2022', '42', NULL, NULL, '2022-06-26 07:48:16', '2022-06-26 07:48:16'),
(334, 'Site Recovery', 'Site Recovery', 'MLG333', 'JOYOGRANDRELOC', 'MLG333', 'JOYOGRANDRELOC', 112.59, -7.94, NULL, 'Malang', 'Malang', 'Malang', 'Malang', 'TBG', 'Collo TP', '13. ON AIR', 'ON AIR', 'ON AIR', 'DONE ON AIR (Februari)', 'no issue (sudah OA)', 'DONE', 'DONE', '15-07-2021', NULL, NULL, '24-06-2022', NULL, '24-06-2022', 'DONE', 'DONE', 'February', NULL, NULL, NULL, '', NULL, NULL, '2022-06-26 07:48:16', '2022-06-26 07:48:16'),
(335, 'Site Recovery', 'Site Recovery', 'SBX332', 'UNAIRKAMPUSC', 'SBX332', 'UNAIRKAMPUSC', 112.78, -7.27, NULL, 'Surabaya Timur', 'Surabaya Utara', 'Surabaya', 'SUrabaya', 'GMT', 'B2S', '13. ON AIR', 'ON AIR', 'ON AIR', 'DONE ON AIR (Februari)', 'no issue (sudah OA)', 'DONE', 'DONE', '30-01-2020', NULL, NULL, '24-06-2022', NULL, '24-06-2022', 'DONE', 'DONE', 'February', NULL, NULL, NULL, '', NULL, 'SBX332.jpeg', '2022-06-26 07:48:16', '2022-06-26 07:48:16'),
(336, 'Site Recovery', 'Site Recovery', 'MDU294', 'CARUBANRELOC', 'MDU294', 'CARUBANRELOC', 111.66, -7.55, NULL, 'Madiun', 'Madiun', 'Madiun', 'Madiun', 'IBS', 'Collo TP', '13. ON AIR', 'ON AIR', 'ON AIR', 'DONE ON AIR (Februari)', 'no issue (sudah OA)', 'DONE', 'DONE', '07-12-2021', NULL, NULL, '24-06-2022', NULL, '24-06-2022', 'DONE', 'DONE', 'February', NULL, NULL, NULL, '', NULL, NULL, '2022-06-26 07:48:16', '2022-06-26 07:48:16'),
(337, 'Site Recovery', 'Site Recovery', 'TAG174', 'BESOLERELOK', 'TAG174', 'BESOLERELOK', 111.81, -8.23, NULL, 'Tulungagung', 'Madiun', 'Tulungagung', 'Malang', 'EBT', 'Collo TP', '13. ON AIR', 'ON AIR', 'ON AIR', 'DONE ON AIR (Februari)', 'no issue (sudah OA)', 'DONE', 'DONE', '28-12-2020', NULL, NULL, '24-06-2022', NULL, '24-06-2022', 'DONE', 'DONE', 'February', NULL, NULL, NULL, '', NULL, NULL, '2022-06-26 07:48:16', '2022-06-26 07:48:16'),
(338, 'Site Recovery', 'Site Recovery', 'PSN437', 'PURWOSARIMALANGRELOC', 'PSN437', 'PURWOSARIMALANGRELOC', 112.73, -7.77, NULL, 'Pasuruan', 'Malang', 'Pasuruan', 'Sidoarjo', 'PTI', 'Collo TP', '13. ON AIR', 'ON AIR', 'ON AIR', 'DONE ON AIR (Maret)', 'no issue (sudah OA)', 'DONE', 'DONE', '31-12-2021', NULL, NULL, '24-06-2022', NULL, '24-06-2022', 'DONE', 'DONE', 'March', NULL, NULL, NULL, '', NULL, NULL, '2022-06-26 07:48:16', '2022-06-26 07:48:16'),
(339, 'Site Recovery', 'Site Recovery', 'SDA599', 'HASANBAJURIRELOC', 'SDA599', 'HASANBAJURIRELOC', 112.78, -7.35, NULL, 'Sidoarjo', 'Surabaya Selatan', 'Sidoarjo', 'Sidoarjo', 'PTI', 'Collo TP', '13. ON AIR', 'ON AIR', 'ON AIR', 'DONE ON AIR (Maret)', 'no issue (sudah OA)', 'DONE', 'DONE', '18-11-2021', NULL, NULL, '24-06-2022', NULL, '24-06-2022', 'DONE', 'DONE', 'March', NULL, NULL, NULL, '', NULL, NULL, '2022-06-26 07:48:16', '2022-06-26 07:48:16'),
(340, 'Site Recovery', 'Site Recovery', 'JMB234', 'COMJOMBANGRELOC', 'JMB234', 'COMJOMBANGRELOC', 112.24, -7.53, NULL, 'Kediri', 'Lamongan', 'Jombang', 'Madiun', 'TBG', 'Collo TP', '13. ON AIR', 'ON AIR', 'ON AIR', 'DONE ON AIR (Maret)', 'no issue (sudah OA)', 'DONE', 'DONE', '07-03-2022', NULL, NULL, '24-06-2022', NULL, '24-06-2022', 'DONE', 'DONE', 'March', NULL, NULL, NULL, '', NULL, NULL, '2022-06-26 07:48:16', '2022-06-26 07:48:16'),
(341, 'Site Recovery', 'Site Recovery', 'MLG104', 'PasarLawangReloc', 'MLG104', 'PasarLawangReloc', 112.69, -7.83, NULL, 'Malang', 'Malang', 'Malang', 'Malang', 'PTI', 'Collo TP', '13. ON AIR', 'ON AIR', 'ON AIR', 'DONE ON AIR (Maret)', 'no issue (sudah OA)', 'DONE', 'DONE', '11-02-2022', NULL, NULL, '24-06-2022', NULL, '24-06-2022', 'DONE', 'DONE', 'March', NULL, NULL, NULL, '', NULL, NULL, '2022-06-26 07:48:16', '2022-06-26 07:48:16'),
(342, 'Site Recovery', 'Site Recovery', 'NJK042', 'PLNNGANJUKRELOC', 'NJK042', 'PLNNGANJUKRELOC', 111.90, -7.61, 'Jl. Sawah Payaman Barat PDAM RT01/RW03, Kel. Payaman, Kec. Nganjuk, Kab. Nganjuk', 'Kediri', 'Lamongan', 'Nganjuk', 'Madiun', 'PTI', 'Collo TP', '10. RFI', 'RFI', 'RFI', 'Optimis', 'Belum RFI', '20-05-2022', '20', '12-04-2022', NULL, NULL, '24-06-2022', '13-05-2022', NULL, '31-05-2022', '22', 'May', NULL, NULL, NULL, '', NULL, NULL, '2022-06-26 07:48:16', '2022-06-26 07:48:16'),
(343, 'Site Recovery', 'Site Recovery', 'SBX220', 'VILLA BUKIT REGENCY 1', 'SBX220', 'VILLA BUKIT REGENCY 1', 112.67, -7.30, 'JALAN PAKUWON INDAH BLOK AB 4 /31 LONTAR BARAT,LIDAH WETAN ,KEC. LAKARSANTRI SURABAYA JATIM', 'Surabaya Barat', 'Surabaya Selatan', 'Surabaya', 'Surabaya', 'ABL', 'Collo TP', '13. ON AIR', 'ON AIR', 'ON AIR', 'DONE OA (May)', 'no issue (Sudah OA)', 'DONE', 'DONE', '12-04-2022', NULL, '22-05-2022', '24-06-2022', NULL, '18-05-2022', 'DONE', 'DONE', 'May', 'FO TELKOM', NULL, NULL, '', NULL, 'SBX220.jpeg', '2022-06-26 07:48:16', '2022-06-26 07:48:16'),
(344, 'Site Recovery', 'Site Recovery', 'BLR316', 'WLINGIBLITARRELOK', 'BLR316', 'WLINGIBLITARRELOK', NULL, NULL, NULL, 'Madiun', 'Madiun', 'Blitar', 'Malang', 'GMT', 'Collo TP', '08. CME OG', 'CME', 'NY RFI', 'Optimis', 'Belum RFI', '25-05-2022', '21', '12-04-2022', NULL, NULL, '24-06-2022', NULL, NULL, '31-05-2022', '22', 'May', NULL, NULL, NULL, '', NULL, NULL, '2022-06-26 07:48:16', '2022-06-26 07:48:16'),
(345, 'Site Recovery', 'Site Recovery', 'PRO219', 'PONOROGORELOC2', 'PRO219', 'PONOROGORELOC2', 111.47, -7.87, NULL, 'Ponorogo', 'Madiun', 'Ponorogo', 'Madiun', 'PTI', 'Collo TP', '13. ON AIR', 'ON AIR', 'ON AIR', 'DONE OA (May)', 'no issue (Sudah OA)', 'DONE', 'DONE', '29-01-2022', NULL, '10-03-2022', '24-06-2022', NULL, '13-05-2022', 'DONE', 'DONE', 'May', NULL, NULL, NULL, '', NULL, 'PRO2019.jpeg', '2022-06-26 07:48:16', '2022-06-26 07:48:16'),
(346, 'Site Recovery', 'Site Recovery', 'SIT161', 'SITUBONDO4RELOC', 'SIT161', 'SITUBONDO4RELOC', 114.01, -7.70, NULL, 'Banyuwangi', 'Jember', 'Situbondo', 'Jember', 'DMT', 'Mini Macro', '01. SURVEY', 'SURVEY', 'NY RFI', 'Pesimis', 'Belum RFI', '25-07-2022', '30', '14-05-2022', NULL, NULL, '24-06-2022', NULL, NULL, '31-07-2022', '30', 'Jul', NULL, NULL, NULL, '', NULL, NULL, '2022-06-26 07:48:16', '2022-06-26 07:48:16'),
(347, 'KKST 2022', 'Special Program - WIN JAVA', 'JMB252', 'PLANDAANTONDOWULAN1', 'JMB252', 'PLANDAANTONDOWULAN1', 112.20, -7.43, NULL, 'Kediri', 'Lamongan', 'Jombang', 'Madiun', 'DMT', 'Collo TP', '11. LV MONITORING', 'ON AIR', 'ON AIR', 'DONE OA (April)', 'no issue (Sudah OA)', 'DONE', 'DONE', '06-06-2022', NULL, '16-07-2022', '24-06-2022', NULL, '15-06-2022', 'DONE', 'DONE', 'June', 'FO TELKOM', 'CP 2022 - Win Java', 'Metro-E', '48', '40/130/210/310', 'JMB252.jpeg', '2022-06-26 07:48:16', '2022-06-26 07:48:16'),
(348, 'KKST 2022', 'Special Program - WIN JAVA', 'JMB255', 'NGUSIKANKETAPANG KUNING1', 'JMB255', 'NGUSIKANKETAPANG KUNING1', 112.33, -7.44, NULL, 'Kediri', 'Lamongan', 'Jombang', 'Madiun', 'DMT', 'Collo TP', '11. LV MONITORING', 'ON AIR', 'ON AIR', 'DONE OA (June)', 'no issue (Sudah OA)', 'DONE', 'DONE', '06-06-2022', NULL, '16-07-2022', '24-06-2022', NULL, '15-06-2022', 'DONE', 'DONE', 'June', 'FO TELKOM', 'CP 2022 - Win Java', 'Metro-E', '48', '0/60/200/310', 'JMB255.jpeg', '2022-06-26 07:48:16', '2022-06-26 07:48:16'),
(349, 'KKST 2022', 'Special Program - WIN JAVA', 'JMB259', 'KEPANJENJOMBANG', 'JMB259', 'KEPANJENJOMBANG', 112.24, -7.55, NULL, 'Kediri', 'Lamongan', 'Jombang', 'Madiun', 'TBG', 'Collo TP', '11. LV MONITORING', 'ON AIR', 'ON AIR', 'DONE OA (June)', 'no issue (Sudah OA)', 'DONE', 'DONE', '07-06-2022', NULL, '17-07-2022', '24-06-2022', NULL, '19-06-2022', 'DONE', 'DONE', 'June', 'FO TELKOM', 'CP 2022 - Win Java', 'Metro-E', '51', '0/90/170/290', 'JMB259.jpeg', '2022-06-26 07:48:16', '2022-06-26 07:48:16'),
(350, 'KKST 2022', 'Special Program - WIN JAVA', 'PAE003', 'PUNCUMANGGIS2', 'PAE003', 'PUNCUMANGGIS2', 112.22, -7.81, NULL, 'Kediri', 'Lamongan', 'Kediri', 'Madiun', 'TBG', 'Collo TP', '11. LV MONITORING', 'ON AIR', 'ON AIR', 'DONE OA (June)', 'no issue (Sudah OA)', 'DONE', 'DONE', '07-06-2022', NULL, '17-07-2022', '24-06-2022', NULL, '21-06-2022', 'DONE', 'DONE', 'June', 'FO TELKOM', 'CP 2022 - Win Java', 'Metro-E', '50', '0/80/170', 'PAE003.jpeg', '2022-06-26 07:48:16', '2022-06-26 07:48:16'),
(351, 'KKST 2022', 'Special Program - WIN JAVA', 'MJO317', 'GEDEKBANDUNG2', 'MJO317', 'GEDEKBANDUNG2', 112.39, -7.44, NULL, 'Pasuruan', 'Malang', 'Mojokerto', 'Sidoarjo', 'TBG', 'Collo TP', '11. LV MONITORING', 'ON AIR', 'ON AIR', 'DONE OA (June)', 'no issue (Sudah OA)', 'DONE', 'DONE', '07-06-2022', NULL, '17-07-2022', '24-06-2022', NULL, '20-06-2022', 'DONE', 'DONE', 'June', 'FO TELKOM', 'CP 2022 - Settlement 5', 'Metro-E', '50', 'update 20 Juni', 'MJO317.jpeg', '2022-06-26 07:48:16', '2022-06-26 07:48:16'),
(352, 'KKST 2022', 'Special Program - WIN JAVA', 'PAE012', 'MOJOMAESAN1', 'PAE012', 'MOJOMAESAN1', 111.94, -7.93, NULL, 'Kediri', 'Lamongan', 'Kediri', 'Madiun', 'PTI', 'Collo TP', '11. LV MONITORING', 'ON AIR', 'ON AIR', 'DONE OA (June)', 'no issue (sudah OA)', 'DONE', 'DONE', '08-06-2022', NULL, '18-07-2022', NULL, '21-06-2022', '01-01-1970', 'DONE', 'DONE', 'June', 'FO TELKOM', 'CP 2022 - Settlement 5', 'Metro-E', '59', NULL, NULL, '2022-06-26 07:48:16', '2022-06-26 07:48:16'),
(353, 'KKST 2022', 'Special Program - WIN JAVA', 'JMB253', 'MOJOWARNOGONDEK1', 'JMB253', 'MOJOWARNOGONDEK1', 112.28, -7.63, NULL, 'Kediri', 'Lamongan', 'Jombang', 'Madiun', 'PTI', 'Collo TP', '11. LV MONITORING', 'ON AIR', 'ON AIR', 'DONE OA (June)', 'no issue (sudah OA)', 'DONE', 'DONE', '08-06-2022', NULL, '18-07-2022', NULL, '01-01-1970', '01-01-1970', 'DONE', 'DONE', 'June', 'FO TELKOM', 'CP 2022 - Win Java', 'Metro-E', '42', NULL, NULL, '2022-06-26 07:48:16', '2022-06-26 07:48:16'),
(354, 'KKST 2022', 'Special Program - WIN JAVA', 'JMB256', 'KUDUSIDOKATON1', 'JMB256', 'KUDUSIDOKATON1', 112.27, -7.43, NULL, 'Kediri', 'Lamongan', 'Jombang', 'Madiun', 'PTI', 'Collo TP', '11. LV MONITORING', 'ON AIR', 'ON AIR', 'DONE OA (June)', 'no issue (Sudah OA)', 'DONE', 'DONE', '08-06-2022', NULL, '18-07-2022', '24-06-2022', '23-06-2022', '26-06-2022', 'DONE', 'DONE', 'June', 'FO TELKOM', 'CP 2022 - Win Java', 'Metro-E', '69', NULL, 'JMB256.jpeg', '2022-06-26 07:48:16', '2022-06-26 20:16:33'),
(355, 'KKST 2022', 'Special Program - WIN JAVA', 'PAE004', 'RINGINREJOSRIKATON1', 'PAE004', 'RINGINREJOSRIKATON1', 112.01, -7.98, NULL, 'Kediri', 'Lamongan', 'Kediri', 'Madiun', 'PTI', 'Collo TP', '11. LV MONITORING', 'ON AIR', 'ON AIR', 'DONE OA (June)', 'no issue (Sudah OA)', 'DONE', 'DONE', '08-06-2022', NULL, '18-07-2022', NULL, NULL, '22-06-2022', 'DONE', 'DONE', 'June', 'FO TELKOM', 'CP 2022 - Win Java', 'Metro-E', '42.4', NULL, 'PAE004.jpeg', '2022-06-26 07:48:16', '2022-06-26 07:48:16'),
(356, 'KKST 2022', 'Special Program - WIN JAVA', 'PAE005', 'RINGINREJONAMBAKAN1', 'PAE005', 'RINGINREJONAMBAKAN1', 112.01, -7.96, NULL, 'Kediri', 'Lamongan', 'Kediri', 'Madiun', 'PTI', 'Collo TP', '11. LV MONITORING', 'ON AIR', 'ON AIR', 'DONE OA (June)', 'no issue (Sudah OA)', 'DONE', 'DONE', '08-06-2022', NULL, '18-07-2022', NULL, NULL, '22-06-2022', 'DONE', 'DONE', 'June', 'FO TELKOM', 'CP 2022 - Win Java', 'Metro-E', '44', NULL, 'PAE005.jpeg', '2022-06-26 07:48:16', '2022-06-26 07:48:16'),
(357, 'KKST 2022', 'Special Program - WIN JAVA', 'PAE006', 'PLEMAHANPAYAMAN1', 'PAE006', 'PLEMAHANPAYAMAN1', 112.14, -7.71, NULL, 'Kediri', 'Lamongan', 'Kediri', 'Madiun', 'PTI', 'Collo TP', '11. LV MONITORING', 'ON AIR', 'ON AIR', 'DONE OA (April)', 'no issue (Sudah OA)', 'DONE', 'DONE', '08-06-2022', NULL, '18-07-2022', '24-06-2022', '22-06-2022', '29-06-2022', 'DONE', 'DONE', 'June', 'FO TELKOM', 'CP 2022 - Win Java', 'Metro-E', '49', NULL, 'PAE006.jpeg', '2022-06-26 07:48:16', '2022-06-29 07:50:47'),
(358, 'KKST 2022', 'Special Program - WIN JAVA', 'PAE007', 'TERTEKPARE', 'PAE007', 'TERTEKPARE', 112.21, -7.76, NULL, 'Kediri', 'Lamongan', 'Kediri', 'Madiun', 'PTI', 'Collo TP', '11. LV MONITORING', 'ON AIR', 'ON AIR', 'DONE OA (June)', 'no issue (sudah OA)', 'DONE', 'DONE', '08-06-2022', NULL, '18-07-2022', '24-06-2022', '22-06-2022', '01-01-1970', 'DONE', 'DONE', 'June', 'FO TELKOM', 'CP 2022 - Win Java', 'Metro-E', '50', NULL, NULL, '2022-06-26 07:48:16', '2022-06-26 07:48:16'),
(359, 'KKST 2022', 'Special Program - WIN JAVA', 'PAE009', 'KRASNYAWANGAN1', 'PAE009', 'KRASNYAWANGAN1', 111.95, -7.97, NULL, 'Kediri', 'Lamongan', 'Kediri', 'Madiun', 'PTI', 'Collo TP', '11. LV MONITORING', 'ON AIR', 'ON AIR', 'DONE OA (June)', 'no issue (Sudah OA)', 'DONE', 'DONE', '08-06-2022', NULL, '18-07-2022', '24-06-2022', NULL, '23-06-2022', 'DONE', 'DONE', 'June', 'FO TELKOM', 'CP 2022 - Win Java', 'Metro-E', '51', NULL, NULL, '2022-06-26 07:48:16', '2022-06-26 07:48:16'),
(360, 'KKST 2022', 'Special Program - WIN JAVA', 'JMB254', 'JOGO ROTOSAWIJI1', 'JMB254', 'JOGO ROTOSAWIJI1', 112.28, -7.58, NULL, 'Kediri', 'Lamongan', 'Jombang', 'Madiun', 'CMI', 'Collo TP', '11. LV MONITORING', 'ON AIR', 'ON AIR', 'DONE OA (June)', 'no issue (sudah OA)', 'DONE', 'DONE', '10-06-2022', NULL, '20-07-2022', NULL, '22-06-2022', '01-01-1970', 'DONE', 'DONE', 'June', 'FO TELKOM', 'CP 2022 - Win Java', 'Metro-E', '41', NULL, NULL, '2022-06-26 07:48:16', '2022-06-26 07:48:16'),
(361, 'KKST 2022', 'Special Program - WIN JAVA', 'JMB257', 'BARENGKEBONDALEM1', 'JMB257', 'BARENGKEBONDALEM1', 112.28, -7.71, NULL, 'Kediri', 'Lamongan', 'Jombang', 'Madiun', 'CMI', 'Collo TP', '11. LV MONITORING', 'ON AIR', 'ON AIR', 'DONE OA (June)', 'no issue (sudah OA)', 'DONE', 'DONE', '10-06-2022', NULL, '20-07-2022', NULL, '01-01-1970', '01-01-1970', 'DONE', 'DONE', 'June', 'FO TELKOM', 'CP 2022 - Win Java', 'Metro-E', '40', NULL, NULL, '2022-06-26 07:48:16', '2022-06-26 07:48:16'),
(362, 'KKST 2022', 'Special Program - WIN JAVA', 'JMB258', 'PERAKSUMBERAGUNG1', 'JMB258', 'PERAKSUMBERAGUNG1', 112.15, -7.60, NULL, 'Kediri', 'Lamongan', 'Jombang', 'Madiun', 'CMI', 'Collo TP', '11. LV MONITORING', 'ON AIR', 'ON AIR', 'DONE OA (June)', 'no issue (Sudah OA)', 'DONE', 'DONE', '10-06-2022', NULL, '20-07-2022', NULL, '01-01-1970', '23-06-2022', 'DONE', 'DONE', 'June', 'FO TELKOM', 'CP 2022 - Win Java', 'Metro-E', '41', NULL, NULL, '2022-06-26 07:48:16', '2022-06-26 07:48:16'),
(363, 'KKST 2022', 'Special Program - WIN JAVA', 'PAE008', 'TERTEKPARE1', 'PAE008', 'TERTEKPARE1', 112.21, -7.78, NULL, 'Kediri', 'Lamongan', 'Kediri', 'Madiun', 'CMI', 'Collo TP', '11. LV MONITORING', 'ON AIR', 'ON AIR', 'DONE OA (June)', 'no issue (sudah OA)', 'DONE', 'DONE', '10-06-2022', NULL, '20-07-2022', NULL, '23-06-2022', '01-01-1970', 'DONE', 'DONE', 'June', 'FO TELKOM', 'CP 2022 - Win Java', 'Metro-E', '41', NULL, NULL, '2022-06-26 07:48:16', '2022-06-26 07:48:16'),
(364, 'KKST 2022', 'Special Program - WIN JAVA', 'MJO323', 'KEMLAGIMOJOREJO1', 'MJO323', 'KEMLAGIMOJOREJO1', NULL, NULL, NULL, 'Pasuruan', 'Malang', 'Mojokerto', 'Sidoarjo', 'DMT', 'B2S', '11. LV MONITORING', 'ON AIR', 'ON AIR', 'DONE OA (July)', 'no issue (Sudah OA)', 'DONE', 'DONE', '10-06-2022', '09-08-2022', '08-10-2022', '24-06-2022', '01-07-2022', '01-07-2022', 'DONE', 'DONE', 'July', 'FO TELKOM', 'CP 2022 - Settlement 5', 'Metro-E', NULL, NULL, 'MJO323.jpeg', '2022-06-26 07:48:16', '2022-07-03 20:28:28'),
(365, 'KKST 2022', 'Special Program - WIN JAVA', 'MJO322', 'JETISJETIS2', 'MJO322', 'JETISJETIS2', NULL, NULL, NULL, 'Pasuruan', 'Malang', 'Mojokerto', 'Sidoarjo', 'DMT', 'B2S', '01. SURVEY', 'SURVEY', 'NY RFI', 'Optimis', 'Belum RFI', NULL, NULL, '10-06-2022', '09-08-2022', '08-10-2022', NULL, NULL, NULL, '09-10-2022', '40', 'October', 'FO TELKOM', 'CP 2022 - Settlement 5', 'Metro-E', '', NULL, NULL, '2022-06-26 07:48:16', '2022-06-26 07:48:16'),
(366, 'KKST 2022', 'Special Program - WIN JAVA', 'PAE011', 'KEPUNGDAMARWULAN2', 'PAE011', 'KEPUNGDAMARWULAN2', NULL, NULL, NULL, 'Kediri', 'Lamongan', 'Kediri', 'Madiun', 'DMT', 'B2S', '15. DROP', 'DROP', 'DROP/HOLD', 'DROP', 'DROP', 'DROP', 'DROP', '10-06-2022', '09-08-2022', '08-10-2022', '24-06-2022', 'DROP', 'DROP', 'DROP', 'DROP', 'DROP', 'FO TELKOM', 'CP 2022 - Settlement 5', 'Metro-E', '', NULL, NULL, '2022-06-26 07:48:16', '2022-06-26 07:48:16');
INSERT INTO `new_infras` (`id`, `batch`, `program_hq`, `site_id_plan`, `site_name_plan`, `site_id_actual`, `site_name_actual`, `longitude`, `lotitude`, `alamat_site`, `do`, `ns`, `city`, `branch`, `tower_provider`, `infra_type`, `progress_regional`, `progress_hq`, `simple_progress`, `target_bulan_berjalan`, `issue`, `target_rfi_date`, `target_rfi_week`, `kkst_date`, `sla_rfc_b2s`, `sla_rfi`, `drm_date`, `rfi_date`, `oa_date`, `target_oa_date`, `target_oa_week`, `month_oa`, `trm_type`, `capex_eqp`, `capex_trm`, `antena_height`, `remarks`, `foto`, `created_at`, `updated_at`) VALUES
(367, 'KKST 2022', 'Special Program - WIN JAVA', 'MJO321', 'GEDEKBATANKRAJAN1', 'MJO321', 'GEDEKBATANKRAJAN1', NULL, NULL, NULL, 'Pasuruan', 'Malang', 'Mojokerto', 'Sidoarjo', 'DMT', 'B2S', '05. IW OG', 'SITAC', 'NY RFI', 'Pesimis', 'Belum RFI', NULL, NULL, '10-06-2022', '09-08-2022', '08-10-2022', NULL, NULL, NULL, '09-10-2022', '40', 'October', 'FO TELKOM', 'CP 2022 - Settlement 5', 'Metro-E', '', NULL, NULL, '2022-06-26 07:48:16', '2022-06-26 07:48:16'),
(368, 'KKST 2022', 'Special Program - WIN JAVA', 'MJO313', 'PACETSUMBERKEMBAR1', 'MJO313', 'PACETSUMBERKEMBAR1', NULL, NULL, NULL, 'Pasuruan', 'Malang', 'Mojokerto', 'Sidoarjo', 'DMT', 'B2S', '05. IW OG', 'SITAC', 'NY RFI', 'Pesimis', 'Belum RFI', NULL, NULL, '10-06-2022', '09-08-2022', '08-10-2022', NULL, NULL, NULL, '09-10-2022', '40', 'October', 'FO TELKOM', 'CP 2022 - Settlement 5', 'Metro-E', '', NULL, NULL, '2022-06-26 07:48:16', '2022-06-26 07:48:16'),
(369, 'KKST 2022', 'Special Program - WIN JAVA', 'MJO312', 'BANGSALSUMBERWONO1', 'MJO312', 'BANGSALSUMBERWONO1', NULL, NULL, NULL, 'Pasuruan', 'Malang', 'Mojokerto', 'Sidoarjo', 'DMT', 'B2S', '04. BAN/BAK', 'SITAC', 'NY RFI', 'Pesimis', 'Belum RFI', NULL, NULL, '10-06-2022', '09-08-2022', '08-10-2022', NULL, NULL, NULL, '09-10-2022', '40', 'October', 'FO TELKOM', 'CP 2022 - Settlement 5', 'Metro-E', '', NULL, NULL, '2022-06-26 07:48:16', '2022-06-26 07:48:16'),
(370, 'KKST 2022', 'Special Program - WIN JAVA', 'JMB262', 'NGOROSIDOWAREK2', 'JMB262', 'NGOROSIDOWAREK2', NULL, NULL, NULL, 'Kediri', 'Lamongan', 'Jombang', 'Madiun', 'DMT', 'B2S', '15. DROP', 'DROP', 'DROP/HOLD', 'DROP', 'DROP', 'DROP', 'DROP', '10-06-2022', '09-08-2022', '08-10-2022', '24-06-2022', 'DROP', 'DROP', 'DROP', 'DROP', 'DROP', 'FO TELKOM', 'CP 2022 - Settlement 5', 'Metro-E', '', NULL, NULL, '2022-06-26 07:48:16', '2022-06-26 07:48:16'),
(371, 'KKST 2022', 'Special Program - WIN JAVA', 'JMB260', 'GUDOMEJOYOLOSARI1', 'JMB260', 'GUDOMEJOYOLOSARI1', NULL, NULL, NULL, 'Kediri', 'Lamongan', 'Jombang', 'Madiun', 'DMT', 'B2S', '11. LV MONITORING', 'ON AIR', 'ON AIR', 'DONE OA (July)', 'no issue (Sudah OA)', 'DONE', 'DONE', '10-06-2022', '09-08-2022', '08-10-2022', '11-07-2022', '09-07-2022', '09-07-2022', 'DONE', 'DONE', 'July', 'FO TELKOM', 'CP 2022 - Settlement 5', 'Metro-E', NULL, NULL, 'JMB260.jpeg', '2022-06-26 07:48:16', '2022-07-10 19:56:16'),
(372, 'KKST 2022', 'Special Program - WIN JAVA', 'MJO319', 'KEMLAGIMOJOKUMPUL1', 'MJO319', 'KEMLAGIMOJOKUMPUL1', NULL, NULL, NULL, 'Pasuruan', 'Malang', 'Mojokerto', 'Sidoarjo', 'DMT', 'B2S', '11. LV MONITORING', 'ON AIR', 'ON AIR', 'DONE OA (July)', 'no issue (Sudah OA)', 'DONE', 'DONE', '10-06-2022', '09-08-2022', '08-10-2022', '04-07-2022', '02-07-2022', '02-07-2022', 'DONE', 'DONE', 'July', 'FO TELKOM', 'CP 2022 - Settlement 5', 'Metro-E', NULL, NULL, 'MJO319.jpeg', '2022-06-26 07:48:16', '2022-07-03 20:29:43'),
(373, 'KKST 2022', 'Special Program - WIN JAVA', 'PAE013', 'PUNCUASMOROBANGUN1', 'PAE013', 'PUNCUASMOROBANGUN1', NULL, NULL, NULL, 'Kediri', 'Lamongan', 'Kediri', 'Madiun', 'DMT', 'B2S', '01. SURVEY', 'SURVEY', 'NY RFI', 'Pesimis', 'Belum RFI', NULL, NULL, '10-06-2022', '09-08-2022', '08-10-2022', NULL, NULL, NULL, '09-10-2022', '40', 'October', 'FO TELKOM', 'CP 2022 - Settlement 5', 'Metro-E', '', NULL, NULL, '2022-06-26 07:48:16', '2022-06-26 07:48:16'),
(374, 'KKST 2022', 'Special Program - WIN JAVA', 'MJO314', 'KEMLAGIMOJOPILANG1', 'MJO314', 'KEMLAGIMOJOPILANG1', NULL, NULL, NULL, 'Pasuruan', 'Malang', 'Mojokerto', 'Sidoarjo', 'TBG', 'B2S', '05. IW OG', 'SITAC', 'NY RFI', 'Pesimis', 'Belum RFI', '26-07-2022', '30', '10-06-2022', '09-08-2022', '08-10-2022', NULL, NULL, NULL, '28-07-2022', '30', 'July', 'FO TELKOM', 'CP 2022 - Settlement 5', 'Metro-E', '', NULL, NULL, '2022-06-26 07:48:16', '2022-06-26 07:48:16'),
(375, 'KKST 2022', 'Special Program - WIN JAVA', 'MJO318', 'TRAWASPENANGGUNGAN1', 'MJO318', 'TRAWASPENANGGUNGAN1', NULL, NULL, NULL, 'Pasuruan', 'Malang', 'Mojokerto', 'Sidoarjo', 'TBG', 'B2S', '11. LV MONITORING', 'ON AIR', 'ON AIR', 'DONE OA (July)', 'no issue (Sudah OA)', 'DONE', 'DONE', '10-06-2022', '09-08-2022', '08-10-2022', '24-06-2022', '08-07-2022', '08-07-2022', 'DONE', 'DONE', 'July', 'FO TELKOM', 'CP 2022 - Settlement 5', 'Metro-E', NULL, NULL, 'MJO318.jpeg', '2022-06-26 07:48:16', '2022-07-10 19:55:16'),
(376, 'KKST 2022', 'Special Program - WIN JAVA', 'JMB263', 'MEGALUHTURI PINGGIR2', 'JMB263', 'MEGALUHTURI PINGGIR2', NULL, NULL, NULL, 'Kediri', 'Lamongan', 'Jombang', 'Madiun', 'TBG', 'B2S', '06. REKOM/PERIZINAN', 'SITAC', 'NY RFI', 'Optimis', 'Belum RFI', '26-07-2022', '30', '10-06-2022', '09-08-2022', '08-10-2022', NULL, NULL, NULL, '28-07-2022', '30', 'July', 'FO TELKOM', 'CP 2022 - Settlement 5', 'Metro-E', '', NULL, NULL, '2022-06-26 07:48:16', '2022-06-26 07:48:16'),
(377, 'KKST 2022', 'Special Program - WIN JAVA', 'MJO311', 'PACETWARUGUNUNG1', 'MJO311', 'PACETWARUGUNUNG1', NULL, NULL, NULL, 'Pasuruan', 'Malang', 'Mojokerto', 'Sidoarjo', 'TBG', 'B2S', '05. IW OG', 'SITAC', 'NY RFI', 'Pesimis', 'Belum RFI', '02-08-2022', '31', '10-06-2022', '09-08-2022', '08-10-2022', NULL, NULL, NULL, '04-08-2022', '31', 'August', 'FO TELKOM', 'CP 2022 - Settlement 5', 'Metro-E', '', NULL, NULL, '2022-06-26 07:48:16', '2022-06-26 07:48:16'),
(378, 'KKST 2022', 'Special Program - WIN JAVA', 'MJO315', 'KEMLAGIMOJOGEBANG2', 'MJO315', 'KEMLAGIMOJOGEBANG2', NULL, NULL, NULL, 'Pasuruan', 'Malang', 'Mojokerto', 'Sidoarjo', 'TBG', 'B2S', '12. CONNECTED', 'ON AIR', 'ON AIR', 'DONE OA (July)', 'no issue (Sudah OA)', 'DONE', 'DONE', '10-06-2022', '09-08-2022', '08-10-2022', '05-07-2022', '04-07-2022', '04-07-2022', 'DONE', 'DONE', 'July', 'FO TELKOM', 'CP 2022 - Settlement 5', 'Metro-E', NULL, NULL, 'MJO315.jpeg', '2022-06-26 07:48:16', '2022-07-04 23:10:50'),
(379, 'KKST 2022', 'Special Program - WIN JAVA', 'PAE014', 'PURWOASRIJANTOK1', 'PAE014', 'PURWOASRIJANTOK1', NULL, NULL, NULL, 'Kediri', 'Lamongan', 'Kediri', 'Madiun', 'TBG', 'B2S', '05. IW OG', 'SITAC', 'NY RFI', 'Pesimis', 'Belum RFI', '02-08-2022', '31', '10-06-2022', '09-08-2022', '08-10-2022', NULL, NULL, NULL, '04-08-2022', '31', 'July', 'FO TELKOM', 'CP 2022 - Settlement 5', 'Metro-E', '', NULL, NULL, '2022-06-26 07:48:16', '2022-06-26 07:48:16'),
(380, 'KKST 2022', 'Special Program - WIN JAVA', 'MJO316', 'NGOROSUKOANYAR1', 'MJO316', 'NGOROSUKOANYAR1', NULL, NULL, NULL, 'Pasuruan', 'Malang', 'Mojokerto', 'Sidoarjo', 'TBG', 'B2S', '05. IW OG', 'SITAC', 'NY RFI', 'Pesimis', 'Belum RFI', '26-07-2022', '30', '10-06-2022', '09-08-2022', '08-10-2022', '24-06-2022', NULL, NULL, '28-07-2022', '30', 'July', 'FO TELKOM', 'CP 2022 - Settlement 5', 'Metro-E', '', NULL, NULL, '2022-06-26 07:48:16', '2022-06-26 07:48:16'),
(381, 'KKST 2022', 'Special Program - WIN JAVA', 'MJO320', 'DAWAR BLANDONGJATIROWO1', 'MJO320', 'DAWAR BLANDONGJATIROWO1', NULL, NULL, NULL, 'Pasuruan', 'Malang', 'Mojokerto', 'Sidoarjo', 'TBG', 'B2S', '05. IW OG', 'SITAC', 'NY RFI', 'Pesimis', 'Belum RFI', '26-07-2022', '30', '10-06-2022', '09-08-2022', '08-10-2022', NULL, NULL, NULL, '28-07-2022', '30', 'July', 'FO TELKOM', 'CP 2022 - Settlement 5', 'Metro-E', '', NULL, NULL, '2022-06-26 07:48:16', '2022-06-26 07:48:16'),
(382, 'KKST 2022', 'Special Program - WIN JAVA', 'JMB261', 'MOJOWARNOGROBOGAN2', 'JMB261', 'MOJOWARNOGROBOGAN2', NULL, NULL, NULL, 'Kediri', 'Lamongan', 'Jombang', 'Madiun', 'TBG', 'B2S', '05. IW OG', 'SITAC', 'NY RFI', 'Pesimis', 'Belum RFI', NULL, NULL, '10-06-2022', '09-08-2022', '08-10-2022', '24-06-2022', NULL, NULL, '28-07-2022', '30', 'July', 'FO TELKOM', 'CP 2022 - Settlement 5', 'Metro-E', '', NULL, NULL, '2022-06-26 07:48:16', '2022-06-26 07:48:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `notifikasis`
--

CREATE TABLE `notifikasis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `traffic_id` bigint(20) UNSIGNED DEFAULT NULL,
  `read` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `notifikasis`
--

INSERT INTO `notifikasis` (`id`, `user_id`, `traffic_id`, `read`, `created_at`, `updated_at`) VALUES
(1, 1, 305, 1, '2022-06-26 08:33:20', '2022-07-04 03:48:02'),
(2, 1, 354, 1, '2022-06-26 08:45:06', '2022-07-04 03:47:59'),
(3, 1, 354, 1, '2022-06-26 20:15:51', '2022-07-04 03:47:56'),
(4, 1, 354, 1, '2022-06-26 20:16:33', '2022-07-04 03:47:52'),
(5, 1, 357, 1, '2022-06-29 07:50:27', '2022-07-04 03:47:49'),
(6, 1, 357, 1, '2022-06-29 07:50:47', '2022-07-04 03:47:45'),
(7, 1, 364, 1, '2022-07-03 20:25:12', '2022-07-04 03:47:42'),
(8, 1, 364, 1, '2022-07-03 20:27:38', '2022-07-04 03:47:40'),
(9, 1, 364, 1, '2022-07-03 20:28:28', '2022-07-04 03:47:37'),
(10, 1, 372, 1, '2022-07-03 20:29:12', '2022-07-04 03:47:34'),
(11, 1, 372, 1, '2022-07-03 20:29:43', '2022-07-04 03:47:31'),
(12, 1, 378, 1, '2022-07-04 23:10:07', '2022-07-06 01:19:35'),
(13, 1, 378, 1, '2022-07-04 23:10:50', '2022-07-06 01:19:33'),
(14, 1, 284, 1, '2022-07-06 01:20:52', '2022-07-10 19:50:14'),
(15, 1, 284, 1, '2022-07-06 01:21:25', '2022-07-10 19:50:11'),
(16, 1, 375, 1, '2022-07-10 19:52:34', '2022-07-10 19:56:36'),
(17, 1, 375, 1, '2022-07-10 19:54:14', '2022-07-10 19:56:34'),
(18, 1, 375, 1, '2022-07-10 19:55:16', '2022-07-10 19:56:32'),
(19, 1, 371, 1, '2022-07-10 19:55:40', '2022-07-10 19:56:29'),
(20, 1, 371, 1, '2022-07-10 19:56:16', '2022-07-10 19:56:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `progres_hqs`
--

CREATE TABLE `progres_hqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `simple_progress_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `progres_hqs`
--

INSERT INTO `progres_hqs` (`id`, `simple_progress_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'HOLD', NULL, NULL),
(2, 1, 'DROP', NULL, NULL),
(3, 2, 'WAITING KOM/KKST', NULL, NULL),
(4, 2, 'SURVEY', NULL, NULL),
(5, 2, 'DRM', NULL, NULL),
(6, 2, 'CANCEL', NULL, NULL),
(7, 2, 'SITAC', NULL, NULL),
(8, 2, 'RFC', NULL, NULL),
(9, 2, 'CME', NULL, NULL),
(10, 4, 'RFI', NULL, NULL),
(11, 3, 'ON AIR', NULL, NULL),
(12, 5, 'RE-KOM/KKST', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `progres_regions`
--

CREATE TABLE `progres_regions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `simple_progress_id` bigint(20) UNSIGNED DEFAULT NULL,
  `progress_hq_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `progres_regions`
--

INSERT INTO `progres_regions` (`id`, `simple_progress_id`, `progress_hq_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '14. HOLD', NULL, NULL),
(2, 1, 2, '15. DROP', NULL, NULL),
(3, 2, 3, '00. WAITING KOM/KKST', NULL, NULL),
(4, 2, 4, '01. SURVEY', NULL, NULL),
(5, 2, 5, '02. DRM', NULL, NULL),
(6, 2, 6, '03. CANCEL', NULL, NULL),
(7, 2, 7, '04. BAN/BAK', NULL, NULL),
(8, 2, 7, '05. IW OG', NULL, NULL),
(9, 2, 7, '06. REKOM/PERIZINAN', NULL, NULL),
(10, 2, 8, '07. RFC', NULL, NULL),
(11, 2, 9, '08. CME OG', NULL, NULL),
(12, 2, 9, '09. PLN CONECCTION', NULL, NULL),
(13, 4, 10, '10. RFI', NULL, NULL),
(14, 3, 11, '11. LV MONITORING', NULL, NULL),
(15, 3, 11, '12. CONNECTED', NULL, NULL),
(16, 3, 11, '13. ON AIR', NULL, NULL),
(17, 5, 12, '16. RE-KOM/KKST', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `simple_progres`
--

CREATE TABLE `simple_progres` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `simple_progres`
--

INSERT INTO `simple_progres` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'DROP/HOLD', NULL, NULL),
(2, 'NY RFI', NULL, NULL),
(3, 'ON AIR', NULL, NULL),
(4, 'RFI', NULL, NULL),
(5, 'RE-KOM/KKST', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `site_ids`
--

CREATE TABLE `site_ids` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `site_ids`
--

INSERT INTO `site_ids` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'COF', NULL, NULL),
(2, 'BDO', NULL, NULL),
(3, 'BJO', NULL, NULL),
(4, 'BWI', NULL, NULL),
(5, 'GSK', NULL, NULL),
(6, 'JBR', NULL, NULL),
(7, 'JMB', NULL, NULL),
(8, 'KED', NULL, NULL),
(9, 'KPJ', NULL, NULL),
(10, 'LMJ', NULL, NULL),
(11, 'MDU', NULL, NULL),
(12, 'MGT', NULL, NULL),
(13, 'MJO', NULL, NULL),
(14, 'NJK', NULL, NULL),
(15, 'NWI', NULL, NULL),
(16, 'PAE', NULL, NULL),
(17, 'PRO', NULL, NULL),
(18, 'PSN', NULL, NULL),
(19, 'SDA', NULL, NULL),
(20, 'SIT', NULL, NULL),
(21, 'SMP', NULL, NULL),
(22, 'SPG', NULL, NULL),
(23, 'SYX', NULL, NULL),
(24, 'TAG', NULL, NULL),
(25, 'SBY', NULL, NULL),
(26, 'SBX', NULL, NULL),
(27, 'BKN', NULL, NULL),
(28, 'PMN', NULL, NULL),
(29, 'MLG', NULL, NULL),
(30, 'BTU', NULL, NULL),
(31, 'LMG', NULL, NULL),
(32, 'TBN', NULL, NULL),
(33, 'PBO', NULL, NULL),
(34, 'TGK', NULL, NULL),
(35, 'BLR', NULL, NULL),
(36, 'PCN', NULL, NULL),
(37, 'BGL', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `targetbulanberjalans`
--

CREATE TABLE `targetbulanberjalans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `simple_progress_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tower_providers`
--

CREATE TABLE `tower_providers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tower_providers`
--

INSERT INTO `tower_providers` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Telkom Infra', NULL, NULL),
(2, 'PTI', NULL, NULL),
(3, 'LSP', NULL, NULL),
(4, 'CMI', NULL, NULL),
(5, 'ACOM', NULL, NULL),
(6, 'STP', NULL, NULL),
(7, 'TBG', NULL, NULL),
(8, 'DMT', NULL, NULL),
(9, 'TBG', NULL, NULL),
(10, 'ABL', NULL, NULL),
(11, 'EBT', NULL, NULL),
(12, 'GMT', NULL, NULL),
(13, 'IBS', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `traffic`
--

CREATE TABLE `traffic` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `batch` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `program_hq` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_id_plan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_name_plan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_id_actual` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_name_actual` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitude` double(8,2) DEFAULT NULL,
  `lotitude` double(8,2) DEFAULT NULL,
  `alamat_site` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `do` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ns` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `branch` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tower_provider` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `infra_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `progress_regional` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `progress_hq` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `simple_progress` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target_bulan_berjalan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `issue` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `target_rfi_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `target_rfi_week` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kkst_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sla_rfc_b2s` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sla_rfi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `drm_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rfi_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `oa_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `target_oa_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `target_oa_week` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `month_oa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trm_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `capex_eqp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `capex_trm` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `antena_height` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remarks` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `level`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'lutfidwiprayoga', 'admin', 'upikbanyuwangi123@gmail.com', NULL, '$2y$10$F4wfkarKkdvIL5.KyzMpweQxT1fu4wPzNO/9jW0dGn1K6vF1bKikO', NULL, '2022-06-26 07:29:51', '2022-06-26 07:29:51');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `distrik_operations`
--
ALTER TABLE `distrik_operations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `infra_types`
--
ALTER TABLE `infra_types`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `network_services`
--
ALTER TABLE `network_services`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `new_infras`
--
ALTER TABLE `new_infras`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `notifikasis`
--
ALTER TABLE `notifikasis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `progres_hqs`
--
ALTER TABLE `progres_hqs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `progres_regions`
--
ALTER TABLE `progres_regions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `simple_progres`
--
ALTER TABLE `simple_progres`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `site_ids`
--
ALTER TABLE `site_ids`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `targetbulanberjalans`
--
ALTER TABLE `targetbulanberjalans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tower_providers`
--
ALTER TABLE `tower_providers`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `traffic`
--
ALTER TABLE `traffic`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `branches`
--
ALTER TABLE `branches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT untuk tabel `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `distrik_operations`
--
ALTER TABLE `distrik_operations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `infra_types`
--
ALTER TABLE `infra_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `network_services`
--
ALTER TABLE `network_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT untuk tabel `new_infras`
--
ALTER TABLE `new_infras`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=386;

--
-- AUTO_INCREMENT untuk tabel `notifikasis`
--
ALTER TABLE `notifikasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `progres_hqs`
--
ALTER TABLE `progres_hqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `progres_regions`
--
ALTER TABLE `progres_regions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `simple_progres`
--
ALTER TABLE `simple_progres`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `site_ids`
--
ALTER TABLE `site_ids`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT untuk tabel `targetbulanberjalans`
--
ALTER TABLE `targetbulanberjalans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tower_providers`
--
ALTER TABLE `tower_providers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `traffic`
--
ALTER TABLE `traffic`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
