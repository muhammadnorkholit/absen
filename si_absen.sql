-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2022 at 04:37 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `si_absen`
--

-- --------------------------------------------------------

--
-- Table structure for table `absen`
--

CREATE TABLE `absen` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_siswa` bigint(20) UNSIGNED NOT NULL,
  `status` enum('hadir','sakit','ijin','tanpa keterangan','belum hadir') COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `absen`
--

INSERT INTO `absen` (`id`, `id_siswa`, `status`, `waktu`, `updated_at`) VALUES
(1, 1, 'hadir', '2022-11-30 01:14:15', NULL),
(2, 2, 'hadir', '2022-11-30 01:14:15', NULL),
(3, 3, 'belum hadir', '2022-11-30 01:14:15', NULL),
(4, 4, 'belum hadir', '2022-11-30 01:14:15', NULL),
(5, 5, 'belum hadir', '2022-11-30 01:14:15', NULL),
(6, 6, 'belum hadir', '2022-11-30 01:14:15', NULL),
(7, 7, 'belum hadir', '2022-11-30 01:14:15', NULL),
(8, 8, 'belum hadir', '2022-11-30 01:14:15', NULL),
(9, 9, 'belum hadir', '2022-11-30 01:14:15', NULL),
(10, 10, 'belum hadir', '2022-11-30 01:14:15', NULL),
(11, 11, 'belum hadir', '2022-11-30 01:14:15', NULL),
(12, 12, 'belum hadir', '2022-11-30 01:14:15', NULL),
(13, 13, 'belum hadir', '2022-11-30 01:14:15', NULL),
(14, 14, 'belum hadir', '2022-11-30 01:14:15', NULL),
(15, 15, 'belum hadir', '2022-11-30 01:14:15', NULL),
(16, 16, 'belum hadir', '2022-11-30 01:14:15', NULL),
(17, 17, 'belum hadir', '2022-11-30 01:14:15', NULL),
(18, 18, 'belum hadir', '2022-11-30 01:14:15', NULL),
(19, 19, 'belum hadir', '2022-11-30 01:14:15', NULL),
(20, 20, 'belum hadir', '2022-11-30 01:14:15', NULL),
(21, 21, 'belum hadir', '2022-11-30 01:14:15', NULL),
(22, 22, 'belum hadir', '2022-11-30 01:14:15', NULL),
(23, 23, 'belum hadir', '2022-11-30 01:14:15', NULL),
(24, 24, 'belum hadir', '2022-11-30 01:14:15', NULL),
(25, 691, 'belum hadir', '2022-11-30 02:16:49', NULL),
(26, 692, 'belum hadir', '2022-11-30 02:16:49', NULL),
(27, 693, 'belum hadir', '2022-11-30 02:16:49', NULL),
(28, 694, 'belum hadir', '2022-11-30 02:16:49', NULL),
(29, 695, 'belum hadir', '2022-11-30 02:16:49', NULL),
(30, 696, 'belum hadir', '2022-11-30 02:16:49', NULL),
(31, 697, 'belum hadir', '2022-11-30 02:16:49', NULL),
(32, 698, 'belum hadir', '2022-11-30 02:16:49', NULL),
(33, 699, 'belum hadir', '2022-11-30 02:16:49', NULL),
(34, 700, 'belum hadir', '2022-11-30 02:16:49', NULL),
(35, 701, 'belum hadir', '2022-11-30 02:16:49', NULL),
(36, 702, 'belum hadir', '2022-11-30 02:16:49', NULL),
(37, 703, 'belum hadir', '2022-11-30 02:16:49', NULL),
(38, 704, 'belum hadir', '2022-11-30 02:16:49', NULL),
(39, 705, 'belum hadir', '2022-11-30 02:16:49', NULL),
(40, 706, 'belum hadir', '2022-11-30 02:16:49', NULL),
(41, 707, 'belum hadir', '2022-11-30 02:16:49', NULL),
(42, 708, 'belum hadir', '2022-11-30 02:16:49', NULL),
(43, 709, 'belum hadir', '2022-11-30 02:16:49', NULL),
(44, 710, 'belum hadir', '2022-11-30 02:16:49', NULL),
(45, 711, 'belum hadir', '2022-11-30 02:16:49', NULL),
(46, 712, 'belum hadir', '2022-11-30 02:16:49', NULL),
(47, 713, 'belum hadir', '2022-11-30 02:16:49', NULL),
(48, 714, 'belum hadir', '2022-11-30 02:16:49', NULL),
(49, 715, 'belum hadir', '2022-11-30 02:16:49', NULL),
(50, 716, 'belum hadir', '2022-11-30 02:16:49', NULL),
(51, 717, 'belum hadir', '2022-11-30 02:16:49', NULL),
(52, 718, 'belum hadir', '2022-11-30 02:16:49', NULL),
(53, 719, 'belum hadir', '2022-11-30 02:16:49', NULL),
(54, 720, 'belum hadir', '2022-11-30 02:16:49', NULL),
(55, 251, 'belum hadir', '2022-11-30 02:29:51', NULL),
(56, 252, 'belum hadir', '2022-11-30 02:29:51', NULL),
(57, 253, 'belum hadir', '2022-11-30 02:29:51', NULL),
(58, 254, 'belum hadir', '2022-11-30 02:29:51', NULL),
(59, 255, 'belum hadir', '2022-11-30 02:29:51', NULL),
(60, 256, 'belum hadir', '2022-11-30 02:29:51', NULL),
(61, 257, 'belum hadir', '2022-11-30 02:29:51', NULL),
(62, 258, 'belum hadir', '2022-11-30 02:29:51', NULL),
(63, 259, 'belum hadir', '2022-11-30 02:29:51', NULL),
(64, 260, 'belum hadir', '2022-11-30 02:29:51', NULL),
(65, 261, 'belum hadir', '2022-11-30 02:29:51', NULL),
(66, 262, 'belum hadir', '2022-11-30 02:29:51', NULL),
(67, 263, 'belum hadir', '2022-11-30 02:29:51', NULL),
(68, 264, 'belum hadir', '2022-11-30 02:29:51', NULL),
(69, 265, 'belum hadir', '2022-11-30 02:29:51', NULL),
(70, 266, 'belum hadir', '2022-11-30 02:29:51', NULL),
(71, 267, 'belum hadir', '2022-11-30 02:29:51', NULL),
(72, 268, 'belum hadir', '2022-11-30 02:29:51', NULL),
(73, 269, 'belum hadir', '2022-11-30 02:29:51', NULL),
(74, 270, 'belum hadir', '2022-11-30 02:29:51', NULL),
(75, 271, 'belum hadir', '2022-11-30 02:29:51', NULL),
(76, 272, 'belum hadir', '2022-11-30 02:29:51', NULL),
(77, 273, 'belum hadir', '2022-11-30 02:29:51', NULL),
(78, 274, 'belum hadir', '2022-11-30 02:29:51', NULL),
(79, 275, 'belum hadir', '2022-11-30 02:29:51', NULL),
(80, 276, 'belum hadir', '2022-11-30 02:29:51', NULL),
(81, 277, 'belum hadir', '2022-11-30 02:29:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `guru` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id`, `guru`, `created_at`, `updated_at`) VALUES
(1, 'Drs. MALIK, M.Pd', '2022-11-29 06:34:13', '2022-11-29 06:34:13'),
(2, 'Dra. YAYUK SULISTYOWATI', '2022-11-29 06:34:13', '2022-11-29 06:34:13'),
(3, 'Drs. DIDIK CAHYONO', '2022-11-29 06:34:13', '2022-11-29 06:34:13'),
(4, 'Drs. SUPRIYADI', '2022-11-29 06:34:13', '2022-11-29 06:34:13'),
(5, 'AGUS WAHYUDI, S.Pd', '2022-11-29 06:34:13', '2022-11-29 06:34:13'),
(6, 'MOHAMAD AKSAN, S.Pd', '2022-11-29 06:34:13', '2022-11-29 06:34:13'),
(7, 'ENNY YURAIDA, S. Pd .MM', '2022-11-29 06:34:13', '2022-11-29 06:34:13'),
(8, 'EKO WAHYUDIANTO, S.Pd', '2022-11-29 06:34:13', '2022-11-29 06:34:13'),
(9, 'Drs. DWI ARIANTO, MM', '2022-11-29 06:34:13', '2022-11-29 06:34:13'),
(10, 'WIYONO, S.Pd', '2022-11-29 06:34:13', '2022-11-29 06:34:13'),
(11, 'SRI PURWATI, S.Pd', '2022-11-29 06:34:13', '2022-11-29 06:34:13'),
(12, 'MIMIK SURIPMIYATI, S.Pd', '2022-11-29 06:34:13', '2022-11-29 06:34:13'),
(13, 'HANIFAH HAMZAH, S.Kom', '2022-11-29 06:34:13', '2022-11-29 06:34:13'),
(14, 'IKA PUJI RAHAYU, S.Pd', '2022-11-29 06:34:13', '2022-11-29 06:34:13'),
(15, 'PRABANDARI BUDIYARTI, S.Pd', '2022-11-29 06:34:13', '2022-11-29 06:34:13'),
(16, 'SRI HASTUTI, SE', '2022-11-29 06:34:13', '2022-11-29 06:34:13'),
(17, 'DWI ANDRI HANDAYANI, S.Pd', '2022-11-29 06:34:13', '2022-11-29 06:34:13'),
(18, 'INDAH NURHAYATI, S.Pd', '2022-11-29 06:34:13', '2022-11-29 06:34:13'),
(19, 'ELLY FLORIDA, S.S', '2022-11-29 06:34:13', '2022-11-29 06:34:13'),
(20, 'SITI ANY MAYA SHULHAH, S.Sn, M.Pd', '2022-11-29 06:34:13', '2022-11-29 06:34:13'),
(21, 'ABDUR RASID, M.Pd', '2022-11-29 06:34:13', '2022-11-29 06:34:13'),
(22, 'CITRIA NILAM ASRI CIPTO WIJAYA, S.Pd', '2022-11-29 06:34:13', '2022-11-29 06:34:13'),
(23, 'NANANG DANI RASIDI, M.Pd', '2022-11-29 06:34:13', '2022-11-29 06:34:13'),
(24, 'ANING RETNO SUSANTI, S.E, MM, M.Pd', '2022-11-29 06:34:13', '2022-11-29 06:34:13'),
(25, 'DIAN KURNIAWAN, S.Sn', '2022-11-29 06:34:13', '2022-11-29 06:34:13'),
(26, 'NUR RAKHMI FAJRIYAH, S.Pd', '2022-11-29 06:34:13', '2022-11-29 06:34:13'),
(27, 'DINI TRIANA ARIMAMI, S.Pd', '2022-11-29 06:34:13', '2022-11-29 06:34:13'),
(28, 'YETTI AGUS KARTIKAWATI, S.Pd', '2022-11-29 06:34:13', '2022-11-29 06:34:13'),
(29, 'JUNIAWAN SETIANTO, S.Si', '2022-11-29 06:34:13', '2022-11-29 06:34:13'),
(31, 'LINA, S.Pd', '2022-11-29 06:34:13', '2022-11-29 06:34:13'),
(32, 'ROFIATUL FAUZIAH, M.Pd', '2022-11-29 06:34:13', '2022-11-29 06:34:13'),
(33, 'CHERIE NUGRAHENI, S.Pd', '2022-11-29 06:34:13', '2022-11-29 06:34:13'),
(34, 'NANANG KRISTANTO, SE', '2022-11-29 06:34:13', '2022-11-29 06:34:13'),
(35, 'AHMAD HAMAM AL FADIL, S.Ag', '2022-11-29 06:34:13', '2022-11-29 06:34:13'),
(36, 'NETTY SRIWIYANTI, SE', '2022-11-29 06:34:13', '2022-11-29 06:34:13'),
(37, 'OFRIDANINGSIH, S.AB', '2022-11-29 06:34:13', '2022-11-29 06:34:13'),
(38, 'AW. HENDRO PUTUT W., S.Sn', '2022-11-29 06:34:13', '2022-11-29 06:34:13'),
(39, 'NANANG SLAMET EKO APRILIANTO, S.Sn', '2022-11-29 06:34:13', '2022-11-29 06:34:13'),
(40, 'SISWA WARDANI, S.Pd', '2022-11-29 06:34:13', '2022-11-29 06:34:13'),
(41, 'NURKHAEFI ALVIAH, S.Pd', '2022-11-29 06:34:13', '2022-11-29 06:34:13'),
(42, 'MEILIDA ARGITASARI, S.Pd', '2022-11-29 06:34:13', '2022-11-29 06:34:13'),
(43, 'NUTRIYO, S.ST', '2022-11-29 06:34:13', '2022-11-29 06:34:13'),
(44, 'MOCH. YUSUF, S.E', '2022-11-29 06:34:13', '2022-11-29 06:34:13'),
(45, 'RIBUT PAIDI, S.Pd', '2022-11-29 06:34:13', '2022-11-29 06:34:13'),
(46, 'HENDRA KURNIAWAN, S.Pd', '2022-11-29 06:34:13', '2022-11-29 06:34:13'),
(47, 'INDHIROH FITRIANDINI, S.Pd', '2022-11-29 06:34:13', '2022-11-29 06:34:13'),
(48, 'ARIF FIRMANSYAH, ST, S.Sn', '2022-11-29 06:34:13', '2022-11-29 06:34:13'),
(49, 'AKHMAD SALEHUDIN, S.Ag.', '2022-11-29 06:34:13', '2022-11-29 06:34:13'),
(50, 'LINDA RATNASARI, S.Pd.', '2022-11-29 06:34:13', '2022-11-29 06:34:13'),
(51, 'MOH. GHANDY YUDHA, S.Pd.I', '2022-11-29 06:34:13', '2022-11-29 06:34:13'),
(52, 'NUNING EVANA, S.Pd.', '2022-11-29 06:34:13', '2022-11-29 06:34:13'),
(53, 'IDHA DAROJATIN, S.Pd.', '2022-11-29 06:34:13', '2022-11-29 06:34:13'),
(54, 'PEPI WICAKSONO ARAN DARMAWANSYAH, S.Sos', '2022-11-29 06:34:13', '2022-11-29 06:34:13'),
(55, 'MURSID, S.Kom', '2022-11-29 06:34:13', '2022-11-29 06:34:13'),
(56, 'ABDI RAHMAN AFANDI, S.Pd', '2022-11-29 06:34:13', '2022-11-29 06:34:13'),
(57, 'MUHAMMAD ABRORI, S.PdI', '2022-11-29 06:34:13', '2022-11-29 06:34:13'),
(58, 'SUCI YUNIATI, S.Sos', '2022-11-29 12:26:41', '2022-11-29 12:26:41'),
(59, 'DITA AGENG DEWANTI, S.Pd', '2022-11-29 12:26:41', '2022-11-29 12:26:41'),
(60, 'HENDRO SETYONO, S.Kom', '2022-11-29 12:26:41', '2022-11-29 12:26:41'),
(61, 'SITI MUDTRIKATUL UMAY', '2022-11-29 12:26:41', '2022-11-29 12:26:41'),
(62, 'SITI HASANAH BOLKIAH, S.Pd', '2022-11-29 12:26:41', '2022-11-29 12:26:41'),
(63, 'DENI PUTRA PRATAMA, S', '2022-11-29 12:26:41', '2022-11-29 12:26:41'),
(64, 'M. RIZQI HENDRIAN PRATAMA, S.Kom', '2022-11-29 12:26:41', '2022-11-29 12:26:41'),
(65, 'ANNIK DWI SUDARWATIK, S.Pd', '2022-11-29 12:26:41', '2022-11-29 12:26:41'),
(66, 'LINGGA ADHI PRAJA, ST, MM', '2022-11-29 12:26:41', '2022-11-29 12:26:41'),
(67, 'ZAKIYAH ILMI DARJAH, S.Pd', '2022-11-29 12:26:41', '2022-11-29 12:26:41'),
(68, 'SIFAUL MUNAWAROH, S.Pd', '2022-11-29 12:26:41', '2022-11-29 12:26:41'),
(69, 'BAMBANG EKO WITJAKSONO, S.Pd', '2022-11-29 12:26:41', '2022-11-29 12:26:41'),
(70, 'MOHAMMAD RIDWAN SAIDI, S.Pd.', '2022-11-29 12:26:41', '2022-11-29 12:26:41'),
(71, 'LEYSA GIATRI KIRANA, S.Psi.', '2022-11-29 12:26:41', '2022-11-29 12:26:41'),
(72, 'TRIANA HERI WIBOWO, S.Pd', '2022-11-29 12:26:41', '2022-11-29 12:26:41'),
(73, 'VETY WULANDARI, SPd.', '2022-11-29 12:26:41', '2022-11-29 12:26:41'),
(74, 'ACHMAD MUZAKKI, S.Pd.', '2022-11-29 12:26:41', '2022-11-29 12:26:41'),
(75, 'ARIF SUBAGYO, S.Pd.', '2022-11-29 12:26:41', '2022-11-29 12:26:41'),
(76, 'SITI CHOLIFAH, S.Pd.', '2022-11-29 12:26:41', '2022-11-29 12:26:41'),
(77, 'ACHMAD SOEGIANTO, S.Pd.', '2022-11-29 12:26:41', '2022-11-29 12:26:41'),
(78, 'Dra. FENNY', '2022-11-29 12:26:41', '2022-11-29 12:26:41'),
(79, 'HA\'IMRON, S.Pd.I', '2022-11-29 12:26:41', '2022-11-29 12:26:41'),
(80, 'DWI ATIKA FITRININGTIYAS, S.Pd', '2022-11-29 12:26:41', '2022-11-29 12:26:41'),
(81, 'RUSLAN HASIM, S.Pd', '2022-11-29 12:26:41', '2022-11-29 12:26:41'),
(82, 'DIMAS RISKYANTO, S.Pd', '2022-11-29 12:26:41', '2022-11-29 12:26:41'),
(83, 'AGUNG ROSARYA ELINDA, S.Pd', '2022-11-29 12:26:41', '2022-11-29 12:26:41'),
(84, 'RUFI INDRIANTI, S.Pd', '2022-11-29 12:26:41', '2022-11-29 12:26:41'),
(85, 'MEYTHA SURYANINGTARI, S.Pd', '2022-11-29 12:26:41', '2022-11-29 12:26:41'),
(86, 'MUHAMMAD SALEH, S.Sn', '2022-11-29 12:26:41', '2022-11-29 12:26:41'),
(87, 'DWI AYULIANDARI, S.Pd', '2022-11-29 12:26:41', '2022-11-29 12:26:41'),
(88, 'ARIEF DWI FEBRIANTO, S.Pd', '2022-11-29 12:26:41', '2022-11-29 12:26:41'),
(89, 'RICO ARDANANDA, S.Ds.', '2022-11-29 12:26:41', '2022-11-29 12:26:41');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jurusan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id`, `jurusan`, `created_at`, `updated_at`) VALUES
(1, 'REKAYASA PERANGKAT LUNAK', '2022-11-29 06:34:13', '2022-11-29 06:34:13'),
(2, 'AKUNTANSI', '2022-11-29 06:34:13', '2022-11-29 06:34:13'),
(3, 'MULTIMEDIA', '2022-11-29 06:34:13', '2022-11-29 06:34:13'),
(4, 'TEKNIK JARINGAN DAN KOMPUTER', '2022-11-29 06:34:13', '2022-11-29 06:34:13'),
(5, 'BISNIS DARING', '2022-11-29 06:34:13', '2022-11-29 06:34:13'),
(6, 'DESAIN KOMUNIKASI VISUAL', '2022-11-29 06:34:13', '2022-11-29 06:34:13'),
(7, 'LAYANAN PERBANKAN', '2022-11-29 06:34:13', '2022-11-29 06:34:13'),
(8, 'MANAJEMEN PERKANTORAN', '2022-11-29 06:34:13', '2022-11-29 06:34:13'),
(9, 'PRODUKSI DAN SIARAN PROGRAM TELEVISIK', '2022-11-29 06:34:13', '2022-11-29 06:34:13'),
(10, 'AKUNTANSI DAN KEUANGAN LEMBAGA', '2022-11-29 06:34:13', '2022-11-29 06:34:13'),
(11, 'BISNIS DARING DAN PEMASARAN', '2022-11-29 06:34:13', '2022-11-29 06:34:13'),
(12, 'OTOMATISASI DAN TATA KELOLA PERKANTORAN', '2022-11-29 06:34:13', '2022-11-29 06:34:13'),
(13, 'PERBANKAN DAN KEUANGAN MIKRO', '2022-11-29 06:34:13', '2022-11-29 06:34:13'),
(14, 'PRODUKSI FILM', '2022-11-29 06:34:13', '2022-11-29 06:34:13'),
(15, 'DESAIN KOMUNIKASI VISUAL', '2022-11-29 06:34:13', '2022-11-29 06:34:13');

-- --------------------------------------------------------

--
-- Table structure for table `link`
--

CREATE TABLE `link` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `link`
--

INSERT INTO `link` (`id`, `link`, `created_at`, `updated_at`) VALUES
(1, 'http://10.1.1.1', '2022-11-27 15:50:43', '2022-11-27 15:50:43');

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `id` int(11) NOT NULL,
  `nama_mapel` varchar(50) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`id`, `nama_mapel`, `updated_at`, `created_at`) VALUES
(1, 'Administrasi Infrastruktur Jaringan	', '2022-11-29 16:11:08', '2022-11-29 16:11:08'),
(2, 'Administrasi Pajak', '2022-11-29 16:11:09', '2022-11-29 16:11:09'),
(3, 'Administrasi Sistem jaringan	', '2022-11-29 16:11:09', '2022-11-29 16:11:09'),
(4, 'ADMINISTRASI TRANSAKSI', '2022-11-29 16:11:09', '2022-11-29 16:11:09'),
(5, 'Administrasi Umum	', '2022-11-29 16:11:09', '2022-11-29 16:11:09'),
(6, 'Akuntansi Dasar', '2022-11-29 16:11:09', '2022-11-29 16:11:09'),
(7, 'Akuntansi Keuangan', '2022-11-29 16:11:09', '2022-11-29 16:11:09'),
(8, 'Akuntansi Perbankan dan Keuangan Mikro', '2022-11-29 16:11:09', '2022-11-29 16:11:09'),
(9, 'Animasi', '2022-11-29 16:11:09', '2022-11-29 16:11:09'),
(10, 'Dasar Dasar PPLG', '2022-11-29 16:11:09', '2022-11-29 16:11:09'),
(11, 'Aplikasi Pengolah Angka/Spreadsheet', '2022-11-29 16:11:09', '2022-11-29 16:11:09'),
(12, 'Bahasa Indonesia', '2022-11-29 16:11:09', '2022-11-29 16:11:09'),
(13, 'Bahasa Inggris', '2022-11-29 16:11:09', '2022-11-29 16:11:09'),
(14, 'Bahasa Jawa	', '2022-11-29 16:11:09', '2022-11-29 16:11:09'),
(15, 'Bahasa Madura', '2022-11-29 16:11:09', '2022-11-29 16:11:09'),
(16, 'Basis Data', '2022-11-29 16:11:09', '2022-11-29 16:11:09'),
(17, 'Bisnis Online', '2022-11-29 16:11:09', '2022-11-29 16:11:09'),
(18, 'Dasar Desain Grafis', '2022-11-29 16:11:09', '2022-11-29 16:11:09'),
(19, 'Dasar Seni Audio Visual', '2022-11-29 16:11:09', '2022-11-29 16:11:09'),
(20, 'Dasar – dasar Kreatifitas', '2022-11-29 16:11:09', '2022-11-29 16:11:09'),
(21, 'Desain Grafis Percetakan', '2022-11-29 16:11:09', '2022-11-29 16:11:09'),
(22, 'Editing', '2022-11-29 16:11:09', '2022-11-29 16:11:09'),
(23, 'Editing Audio dan Video	', '2022-11-29 16:11:09', '2022-11-29 16:11:09'),
(24, 'Ekonomi Bisnis', '2022-11-29 16:11:09', '2022-11-29 16:11:09'),
(25, 'Etika Profesi', '2022-11-29 16:11:09', '2022-11-29 16:11:09'),
(26, 'Fisika', '2022-11-29 16:11:09', '2022-11-29 16:11:09'),
(27, 'IPA', '2022-11-29 16:11:09', '2022-11-29 16:11:09'),
(28, 'Kearsipan ', '2022-11-29 16:11:09', '2022-11-29 16:11:09'),
(29, 'Kimia', '2022-11-29 16:11:09', '2022-11-29 16:11:09'),
(30, 'Komputer Akuntansi', '2022-11-29 16:11:09', '2022-11-29 16:11:09'),
(31, 'Komputer dan Jaringan Dasar	', '2022-11-29 16:11:09', '2022-11-29 16:11:09'),
(32, 'Komunikasi bisnis', '2022-11-29 16:11:09', '2022-11-29 16:11:09'),
(33, 'Komunikasi Massa', '2022-11-29 16:11:09', '2022-11-29 16:11:09'),
(34, 'Korespondensi', '2022-11-29 16:11:09', '2022-11-29 16:11:09'),
(35, 'Layanan Lembaga Perbankan dan Keuangan Mikro', '2022-11-29 16:11:09', '2022-11-29 16:11:09'),
(36, 'Manajemen Produksi, Naskah dan Penyutradaraan', '2022-11-29 16:11:09', '2022-11-29 16:11:09'),
(37, 'Marketing', '2022-11-29 16:11:09', '2022-11-29 16:11:09'),
(38, 'Matematika', '2022-11-29 16:11:09', '2022-11-29 16:11:09'),
(39, 'Otomatisasi Tata Kelola Humas dan Keprotokolan', '2022-11-29 16:11:09', '2022-11-29 16:11:09'),
(40, 'Otomatisasi Tata Kelola Kepegawaian', '2022-11-29 16:11:09', '2022-11-29 16:11:09'),
(41, 'Otomatisasi Tata Kelola Keuangan', '2022-11-29 16:11:09', '2022-11-29 16:11:09'),
(42, 'Otomatisasi Tata Kelola Sarana dan Prasarana', '2022-11-29 16:11:09', '2022-11-29 16:11:09'),
(43, 'P. Akuntansi Per Jasa Dagang dan Manufaktur', '2022-11-29 16:11:09', '2022-11-29 16:11:09'),
(44, 'Pemodelan Perangkat Lunak', '2022-11-29 16:11:09', '2022-11-29 16:11:09'),
(45, 'Pemrograman Berorientasi Obyek', '2022-11-29 16:11:09', '2022-11-29 16:11:09'),
(46, 'Pemrograman Dasar', '2022-11-29 16:11:09', '2022-11-29 16:11:09'),
(47, 'Pemrograman Web dan Perangkat Bergerak', '2022-11-29 16:11:09', '2022-11-29 16:11:09'),
(48, 'Penataan Produk', '2022-11-29 16:11:09', '2022-11-29 16:11:09'),
(49, 'Pendidikan Agama dan Budi Pekerti', '2022-11-29 16:11:09', '2022-11-29 16:11:09'),
(50, 'Pendidikan Agama Katolik', '2022-11-29 16:11:09', '2022-11-29 16:11:09'),
(51, 'Pendidikan Agama Kristen', '2022-11-29 16:11:09', '2022-11-29 16:11:09'),
(52, 'Pendidikan Jasmani, Olah Raga, dan Kesehatan', '2022-11-29 16:11:09', '2022-11-29 16:11:09'),
(53, 'Pendidikan Pancasila dan Kewarganegaraan', '2022-11-29 16:11:09', '2022-11-29 16:11:09'),
(54, 'Pengelolaan Bisnis Ritel', '2022-11-29 16:11:09', '2022-11-29 16:11:09'),
(55, 'Pengelolaan Kas', '2022-11-29 16:11:09', '2022-11-29 16:11:09'),
(56, 'Perbankan Dasar', '2022-11-29 16:11:09', '2022-11-29 16:11:09'),
(57, 'Perencanaan Bisnis', '2022-11-29 16:11:09', '2022-11-29 16:11:09'),
(58, 'Praktikum Akuntansi Lembaga/Instansi Pemerintah', '2022-11-29 16:11:09', '2022-11-29 16:11:09'),
(59, 'Produk Kreatif dan Kewirausahaan', '2022-11-29 16:11:09', '2022-11-29 16:11:09'),
(60, 'Produksi Audio Visual', '2022-11-29 16:11:09', '2022-11-29 16:11:09'),
(61, 'Sejarah Indonesia', '2022-11-29 16:11:09', '2022-11-29 16:11:09'),
(62, 'Seni Budaya', '2022-11-29 16:11:09', '2022-11-29 16:11:09'),
(63, 'Simulasi dan Komunikasi Digital', '2022-11-29 16:11:09', '2022-11-29 16:11:09'),
(64, 'Sistem Komputer', '2022-11-29 16:11:09', '2022-11-29 16:11:09'),
(65, 'Tata Artistik', '2022-11-29 16:11:09', '2022-11-29 16:11:09'),
(66, 'Tata Kamera', '2022-11-29 16:11:09', '2022-11-29 16:11:09'),
(67, 'Tata Kamera, Pencahayaan dan Tata Suara', '2022-11-29 16:11:09', '2022-11-29 16:11:09'),
(68, 'Tata Suara', '2022-11-29 16:11:09', '2022-11-29 16:11:09'),
(69, 'Teknik animasi 2D dan 3D', '2022-11-29 16:11:09', '2022-11-29 16:11:09'),
(70, 'Teknologi jaringan Berbasis Luas (WAN)', '2022-11-29 16:11:09', '2022-11-29 16:11:09'),
(71, 'Teknologi layanan Jaringan', '2022-11-29 16:11:09', '2022-11-29 16:11:09'),
(72, 'Teknologi Perkantoran', '2022-11-29 16:11:09', '2022-11-29 16:11:09'),
(73, 'Tinjauan Seni', '2022-11-29 16:11:09', '2022-11-29 16:11:09'),
(74, 'Visual Effect', '2022-11-29 16:11:09', '2022-11-29 16:11:09'),
(75, 'Permodelan Perangkat Lunak dan Game', '2022-11-29 16:11:09', '2022-11-29 16:11:09');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_11_08_203454_create_jurusan_table', 1),
(6, '2022_11_08_204913_create_siswa_table', 1),
(7, '2022_11_08_204919_create_absen_table', 1),
(8, '2022_11_19_013123_create_link_table', 1),
(9, '2022_11_21_062748_create_guru_table', 1),
(10, '2022_11_8_204912_create_ruangan_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
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
-- Table structure for table `ruangan`
--

CREATE TABLE `ruangan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_ruangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_ruangan` int(11) NOT NULL,
  `teknisi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ruangan`
--

INSERT INTO `ruangan` (`id`, `nama_ruangan`, `no_ruangan`, `teknisi`, `created_at`, `updated_at`) VALUES
(1, 'LAB KKPI2', 1, 'ILHAM', '2022-11-29 06:34:13', '2022-11-29 06:34:13'),
(2, 'LAB KKPI3', 2, 'ANDI', '2022-11-29 06:34:13', '2022-11-29 06:34:13'),
(3, 'LAB KKPI4', 3, 'RENDI', '2022-11-29 06:34:13', '2022-11-29 06:34:13'),
(4, 'LAB AKL', 4, 'MU\'ID', '2022-11-29 06:34:13', '2022-11-29 06:34:13'),
(5, 'LAB OTKP', 5, 'YESI', '2022-11-29 06:34:13', '2022-11-29 06:34:13'),
(6, 'LAB RPL', 6, 'DENI', '2022-11-29 06:34:13', '2022-11-29 06:34:13'),
(7, 'LAB MM', 7, 'JUNED', '2022-11-29 06:34:13', '2022-11-29 06:34:13'),
(8, 'LAB LAN', 8, 'BAGUS', '2022-11-29 06:34:13', '2022-11-29 06:34:13'),
(9, 'LAB WAN', 9, 'TIO', '2022-11-29 06:34:13', '2022-11-29 06:34:13'),
(10, 'LAB KKPI5', 10, 'SAMSUL', '2022-11-29 06:34:13', '2022-11-29 06:34:13'),
(11, 'LAB KKPI6', 11, 'SALEH', '2022-11-29 06:34:13', '2022-11-29 06:34:13'),
(12, 'LAB PKM', 12, 'YUNI', '2022-11-29 06:34:13', '2022-11-29 06:34:13'),
(13, 'LAB BDP', 13, 'SULE', '2022-11-29 06:34:13', '2022-11-29 06:34:13');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nisn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas` enum('X','XI','XII') COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_kelas` enum('1','2','3','4','5') COLLATE utf8mb4_unicode_ci NOT NULL,
  `sesi` enum('1','2','3') COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_jurusan` bigint(20) UNSIGNED NOT NULL,
  `id_ruangan` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nama`, `nisn`, `kelas`, `no_kelas`, `sesi`, `id_jurusan`, `id_ruangan`, `created_at`, `updated_at`) VALUES
(1, 'ANY DWI YUNITA PUTRI', '0061270095', 'X', '1', '1', 8, 1, '2022-11-28 03:21:05', NULL),
(2, 'CITRA ULFIA ZAHRO', '0069803839', 'X', '1', '1', 8, 1, '2022-11-28 03:21:05', NULL),
(3, 'DESI INTAN ANGGRAENI', '0065244719', 'X', '1', '1', 8, 1, '2022-11-28 03:21:05', NULL),
(4, 'DIAH LESTARI ADININGSIH', '0062278328', 'X', '1', '1', 8, 1, '2022-11-28 03:21:05', NULL),
(5, 'DWI FEMMY NURIL ADINDA', '0073588717', 'X', '1', '1', 8, 1, '2022-11-28 03:21:05', NULL),
(6, 'FAIZ MAULANA ISHAQ', '0069248362', 'X', '1', '1', 8, 1, '2022-11-28 03:21:05', NULL),
(7, 'ITA APRILIA', '0061403732', 'X', '1', '1', 8, 1, '2022-11-28 03:21:05', NULL),
(8, 'JELITA DWI SEPTIANTI', '0052220552', 'X', '1', '1', 8, 1, '2022-11-28 03:21:05', NULL),
(9, 'KARINA NUR AINI', '0139410396', 'X', '1', '1', 8, 1, '2022-11-28 03:21:05', NULL),
(10, 'KHALIFAH SELA ARTANTI', '0063997730', 'X', '1', '1', 8, 1, '2022-11-28 03:21:05', NULL),
(11, 'LAILATUL MAGHFIROH', '0064641896', 'X', '1', '1', 8, 1, '2022-11-28 03:21:05', NULL),
(12, 'MOCHAMAD ZAINUR RIDWAN', '0072068150', 'X', '1', '1', 8, 1, '2022-11-28 03:21:05', NULL),
(13, 'MOCHAMMAD FARHAN SEPTIANSYAH', '0069355611', 'X', '1', '1', 8, 1, '2022-11-28 03:21:05', NULL),
(14, 'MOHAMMAD IQBAL HIBATULLAH', '0054026060', 'X', '1', '1', 8, 1, '2022-11-28 03:21:05', NULL),
(15, 'MUDRIKA SALSABILAH', '0077899721', 'X', '1', '1', 8, 1, '2022-11-28 03:21:05', NULL),
(16, 'NASHIFAH ROSYADAH FAIQ', '0064814512', 'X', '1', '1', 8, 1, '2022-11-28 03:21:05', NULL),
(17, 'NIDA PUTRI AAFIAH', '0063328131', 'X', '1', '1', 8, 1, '2022-11-28 03:21:05', NULL),
(18, 'NURAFNI LAILIYAH', '0064431860', 'X', '1', '1', 8, 1, '2022-11-28 03:21:05', NULL),
(19, 'QONITAH LAILAH HAADIAH RAMADHANI', '3065794987', 'X', '1', '1', 8, 1, '2022-11-28 03:21:05', NULL),
(20, 'RANIAH SAHDA MAUIZAH', '0064949397', 'X', '1', '1', 8, 1, '2022-11-28 03:21:05', NULL),
(21, 'REGINA PUTRI DWI MARDAH', '0062435310', 'X', '1', '1', 8, 1, '2022-11-28 03:21:05', NULL),
(22, 'RETA AULIA KARTIKA', '0072930148', 'X', '1', '1', 8, 1, '2022-11-28 03:21:05', NULL),
(23, 'REVA CITRA APRILIA', '0064220370', 'X', '1', '1', 8, 1, '2022-11-28 03:21:05', NULL),
(24, 'RIANG ANIS SORAYA', '0071967865', 'X', '1', '1', 8, 1, '2022-11-28 03:21:05', NULL),
(25, 'RINI PRATIWI SAHADATIN', '0065561644', 'X', '1', '1', 8, 2, '2022-11-28 03:21:05', NULL),
(26, 'SALSABILA RENATA TANTRI', '0064569939', 'X', '1', '1', 8, 2, '2022-11-28 03:21:05', NULL),
(27, 'SHOLEHATUN NUR AYU WULANDARI', '0083780220', 'X', '1', '1', 8, 2, '2022-11-28 03:21:05', NULL),
(28, 'SITI NURAINI', '0064489779', 'X', '1', '1', 8, 2, '2022-11-28 03:21:05', NULL),
(29, 'WENDY KURNIA DIRLIYANTIN', '0073849425', 'X', '1', '1', 8, 2, '2022-11-28 03:21:05', NULL),
(30, 'YENI SINTA WATI', '0062968149', 'X', '1', '1', 8, 2, '2022-11-28 03:21:05', NULL),
(31, 'YUNITA WULANSARI DEWI', '0075860439', 'X', '1', '1', 8, 2, '2022-11-28 03:21:05', NULL),
(32, 'ABDUL WAHAB SAHRONI', '0069724971', 'X', '2', '1', 8, 2, '2022-11-28 03:21:05', NULL),
(33, 'AMIRAH QONITA', '0064901153', 'X', '2', '1', 8, 2, '2022-11-28 03:21:05', NULL),
(34, 'ANA DWI WAHYUNI', '0066722304', 'X', '2', '1', 8, 2, '2022-11-28 03:21:05', NULL),
(35, 'AVRILIA DWI NUR AZIZAH', '0069551724', 'X', '2', '1', 8, 2, '2022-11-28 03:21:05', NULL),
(36, 'BELLA APRILIA', '0073211689', 'X', '2', '1', 8, 2, '2022-11-28 03:21:05', NULL),
(37, 'BINTANG RASYA ILHAMI PUTRA WIDAYANA', '0061492450', 'X', '2', '1', 8, 2, '2022-11-28 03:21:05', NULL),
(38, 'CANDRA NUR SEPTIANSYAH', '0068876737', 'X', '2', '1', 8, 2, '2022-11-28 03:21:05', NULL),
(39, 'CLAUDIA CLARA ARTA NOVIA ', '0065229684', 'X', '2', '1', 8, 2, '2022-11-28 03:21:05', NULL),
(40, 'DERYL WIDODO', '0063549937', 'X', '2', '1', 8, 2, '2022-11-28 03:21:05', NULL),
(41, 'DION AGUS PRAWOTO', '0063400999', 'X', '2', '1', 8, 2, '2022-11-28 03:21:05', NULL),
(42, 'ELISA DIANA', '0063548852', 'X', '2', '1', 8, 2, '2022-11-28 03:21:05', NULL),
(43, 'FADIL RHOMADHONA', '0062963329', 'X', '2', '1', 8, 2, '2022-11-28 03:21:05', NULL),
(44, 'FITRIYAH LUBIS', '0063543088', 'X', '2', '1', 8, 2, '2022-11-28 03:21:05', NULL),
(45, 'INDRI FITRIYANI', '0064405752', 'X', '2', '1', 8, 2, '2022-11-28 03:21:05', NULL),
(46, 'INTAN SUCI WARDANI', '0071936327', 'X', '2', '1', 8, 2, '2022-11-28 03:21:05', NULL),
(47, 'LASMI NINGSIH', '0065430140', 'X', '2', '1', 8, 2, '2022-11-28 03:21:05', NULL),
(48, 'LATFAN HABIBI', '0067511688', 'X', '2', '1', 8, 2, '2022-11-28 03:21:05', NULL),
(49, 'LIA NUR RAHMA', '0064610016', 'X', '2', '1', 8, 2, '2022-11-28 03:21:05', NULL),
(50, 'MAHARANI LAURA NUR AZIZAH', '0064089270', 'X', '2', '1', 8, 2, '2022-11-28 03:21:05', NULL),
(51, 'MEILIZA', '0062041202', 'X', '2', '1', 8, 2, '2022-11-28 03:21:05', NULL),
(52, 'MITA DUWI KARTIKA SARI', '0068480203', 'X', '2', '1', 8, 2, '2022-11-28 03:21:05', NULL),
(53, 'MOCHAMMAD ABDURROHIM', '0065769387', 'X', '2', '1', 8, 2, '2022-11-28 03:21:05', NULL),
(54, 'MOCHAMMAD RIZAL', '0067741697', 'X', '2', '1', 8, 2, '2022-11-28 03:21:05', NULL),
(55, 'MUHAMMAD NABIL', '0054191800', 'X', '2', '1', 8, 3, '2022-11-28 03:21:05', NULL),
(56, 'MUHAMMAD NURUL SETIAWAN', '0067469632', 'X', '2', '1', 8, 3, '2022-11-28 03:21:05', NULL),
(57, 'MUHAMMAD RIYADI IMANULLAH', '0069337961', 'X', '2', '1', 8, 3, '2022-11-28 03:21:05', NULL),
(58, 'NAYLA RIZKI FAROHAH', '0065152103', 'X', '2', '1', 8, 3, '2022-11-28 03:21:05', NULL),
(59, 'RAJEZ ALIYANDRIE HABIBIE', '0064774155', 'X', '2', '1', 8, 3, '2022-11-28 03:21:05', NULL),
(60, 'RIFKA AMELIA', '0076672854', 'X', '2', '1', 8, 3, '2022-11-28 03:21:05', NULL),
(61, 'ROVIQOTUS SA\'ADAH', '0063655748', 'X', '2', '1', 8, 3, '2022-11-28 03:21:05', NULL),
(62, 'YENI AINUR ROHMAH', '0069646419', 'X', '2', '1', 8, 3, '2022-11-28 03:21:05', NULL),
(63, 'ZAHROTUS SAINIAH', '0064523276', 'X', '2', '1', 8, 3, '2022-11-28 03:21:05', NULL),
(64, 'ABELIA MARTHA MULIA', '0076208521', 'X', '1', '1', 10, 3, '2022-11-28 03:21:05', NULL),
(65, 'AFIFAH WIDYA NUR ZAHIDAH', '0066602748', 'X', '1', '1', 10, 3, '2022-11-28 03:21:05', NULL),
(66, 'AHMAD GALANG RAMADHAN', '0085787353', 'X', '1', '1', 10, 3, '2022-11-28 03:21:05', NULL),
(67, 'AIRINA FEBRIANTI', '0062897980', 'X', '1', '1', 10, 3, '2022-11-28 03:21:05', NULL),
(68, 'ANDRE ANGGA SETYAWAN', '0062443527', 'X', '1', '1', 10, 3, '2022-11-28 03:21:05', NULL),
(69, 'ANDREAN PRASTYA', '0073737272', 'X', '1', '1', 10, 3, '2022-11-28 03:21:05', NULL),
(70, 'ANINDIA ANGGUN WAHYUDI', '0074055879', 'X', '1', '1', 10, 3, '2022-11-28 03:21:05', NULL),
(71, 'ANNISA ZALIFA AIRA DINAR FATHANI', '0067319556', 'X', '1', '1', 10, 3, '2022-11-28 03:21:05', NULL),
(72, 'ATIK MUSLIHAH', '0064374473', 'X', '1', '1', 10, 3, '2022-11-28 03:21:05', NULL),
(73, 'DESTI FEBRIANA PURWININGSIH', '0071775317', 'X', '1', '1', 10, 3, '2022-11-28 03:21:05', NULL),
(74, 'DIAN LIA KURNIAWATI', '0073700558', 'X', '1', '1', 10, 3, '2022-11-28 03:21:05', NULL),
(75, 'DINDA AYU', '0063329148', 'X', '1', '1', 10, 3, '2022-11-28 03:21:05', NULL),
(76, 'DWI SAFITRI', '0074042205', 'X', '1', '1', 10, 3, '2022-11-28 03:21:05', NULL),
(77, 'DYNA ANGGRAENIY', '0069827203', 'X', '1', '1', 10, 3, '2022-11-28 03:21:05', NULL),
(78, 'FANI YUNITA INDRIYANIS', '0075718783', 'X', '1', '1', 10, 3, '2022-11-28 03:21:05', NULL),
(79, 'HARIRO IRMAWATI', '0066063686', 'X', '1', '1', 10, 3, '2022-11-28 03:21:05', NULL),
(80, 'HERNILLA  YULIATEN', '0075210411', 'X', '1', '1', 10, 3, '2022-11-28 03:21:05', NULL),
(81, 'LALA BUNGA ISTIAN ', '0075822223', 'X', '1', '1', 10, 3, '2022-11-28 03:21:05', NULL),
(82, 'MUHAMMAD FAIDI', '0065888519', 'X', '1', '1', 10, 4, '2022-11-28 03:21:05', NULL),
(83, 'NAIFAH MAYSAROH', '0069364790', 'X', '1', '1', 10, 4, '2022-11-28 03:21:05', NULL),
(84, 'NATASYA BUNGA APRILIA', '0079292197', 'X', '1', '1', 10, 4, '2022-11-28 03:21:05', NULL),
(85, 'NIKEN MAULINA', '0073344804', 'X', '1', '1', 10, 4, '2022-11-28 03:21:05', NULL),
(86, 'NUR QURATUL NABILA ATIQOH', '0065910332', 'X', '1', '1', 10, 4, '2022-11-28 03:21:05', NULL),
(87, 'RENALITA ALYA NIRINA PUTRI MERRY', '0068994168', 'X', '1', '1', 10, 4, '2022-11-28 03:21:05', NULL),
(88, 'RENI ANGGRAENI EKA SAPUTRI', '0069233167', 'X', '1', '1', 10, 4, '2022-11-28 03:21:05', NULL),
(89, 'RIFAN BIMA WIRA SATRIAJI', '0071453745', 'X', '1', '1', 10, 4, '2022-11-28 03:21:05', NULL),
(90, 'SALSABILA ALIFIA PUTRI', '0075682860', 'X', '1', '1', 10, 4, '2022-11-28 03:21:05', NULL),
(91, 'SITI AISYATUN NABILLAH', '0072847044', 'X', '1', '1', 10, 4, '2022-11-28 03:21:05', NULL),
(92, 'SITI RAHMATUL KAMILA', '0068247172', 'X', '1', '1', 10, 4, '2022-11-28 03:21:05', NULL),
(93, 'SITI ROFIAH', '0055714553', 'X', '1', '1', 10, 4, '2022-11-28 03:21:05', NULL),
(94, 'VAVILATUL HASANAH', '0076230746', 'X', '1', '1', 10, 4, '2022-11-28 03:21:05', NULL),
(95, 'VITA INDAH KARTIKA', '0069775204', 'X', '1', '1', 10, 4, '2022-11-28 03:21:05', NULL),
(96, 'ADELIA AYUNA PUTRI', '0077506152', 'X', '2', '1', 10, 4, '2022-11-28 03:21:05', NULL),
(97, 'ADELINA EKA APRILIANDANI', '0069293761', 'X', '2', '1', 10, 4, '2022-11-28 03:21:05', NULL),
(98, 'AHMAD RAFFI MAULANA', '0078499119', 'X', '2', '1', 10, 4, '2022-11-28 03:21:05', NULL),
(99, 'AINUN FIRDAUS RAHMATILLA', '0079776868', 'X', '2', '1', 10, 4, '2022-11-28 03:21:05', NULL),
(100, 'ANGGUN PUSPITA ARIYANTI', '0063441480', 'X', '2', '1', 10, 4, '2022-11-28 03:21:05', NULL),
(101, 'ANNISA NADHIRA', '0062316652', 'X', '2', '1', 10, 4, '2022-11-28 03:21:05', NULL),
(102, 'AYU TASYANIA PUTRI', '0073146895', 'X', '2', '1', 10, 4, '2022-11-28 03:21:05', NULL),
(103, 'DARAYANI DINAN', '0072893484', 'X', '2', '1', 10, 4, '2022-11-28 03:21:05', NULL),
(104, 'DESTA ADI YULIANA', '0071729876', 'X', '2', '1', 10, 4, '2022-11-28 03:21:05', NULL),
(105, 'DINDA HILYATUL AULIA', '0061981930', 'X', '2', '1', 10, 4, '2022-11-28 03:21:05', NULL),
(106, 'DWI OLIVIA AINATUL NADIFAH', '0079175264', 'X', '2', '1', 10, 4, '2022-11-28 03:21:05', NULL),
(107, 'EKA SEPTYA ANGGRAINI', '0063676571', 'X', '2', '1', 10, 4, '2022-11-28 03:21:05', NULL),
(108, 'ELMI  NUR FADILAH', '0076103712', 'X', '2', '1', 10, 4, '2022-11-28 03:21:05', NULL),
(109, 'FIRNADIA LAILATUL FITRIAH', '0066994762', 'X', '2', '1', 10, 4, '2022-11-28 03:21:05', NULL),
(110, 'HALIMATUS SA\'DIYAH', '0069144876', 'X', '2', '1', 10, 4, '2022-11-28 03:21:05', NULL),
(111, 'JENY PUTRI ANDINI', '0063392859', 'X', '2', '1', 10, 4, '2022-11-28 03:21:05', NULL),
(112, 'MEISITA FAIZATUL UBKO', '0068623303', 'X', '2', '1', 10, 4, '2022-11-28 03:21:05', NULL),
(113, 'MOCHAMMAD RIFAL APRILIANTO', '0079840468', 'X', '2', '1', 10, 4, '2022-11-28 03:21:05', NULL),
(114, 'NAFILA AGUSTIN', '0061998517', 'X', '2', '1', 10, 4, '2022-11-28 03:21:05', NULL),
(115, 'NATASSYA AYU PERMATASARI', '0067411610', 'X', '2', '1', 10, 4, '2022-11-28 03:21:05', NULL),
(116, 'NOVITA SARI', '0065411511', 'X', '2', '1', 10, 4, '2022-11-28 03:21:05', NULL),
(117, 'PUTRI DEWI RARASATI', '0063634713', 'X', '2', '1', 10, 5, '2022-11-28 03:21:05', NULL),
(118, 'REZA ANDRYAN SYAH', '0078519415', 'X', '2', '1', 10, 5, '2022-11-28 03:21:05', NULL),
(119, 'RIANG RISKY MAULIDA', '0062999403', 'X', '2', '1', 10, 5, '2022-11-28 03:21:05', NULL),
(120, 'ROBIATUL HASSANAH', '0007091910', 'X', '2', '1', 10, 5, '2022-11-28 03:21:05', NULL),
(121, 'SALSABILA VERNANDA PUTRIE', '0078818842', 'X', '2', '1', 10, 5, '2022-11-28 03:21:05', NULL),
(122, 'SENDI PURNOMO', '0066961138', 'X', '2', '1', 10, 5, '2022-11-28 03:21:05', NULL),
(123, 'SERLY LINGGAWATI', '0061732126', 'X', '2', '1', 10, 5, '2022-11-28 03:21:05', NULL),
(124, 'SITI QOMARIAH', '0053186735', 'X', '2', '1', 10, 5, '2022-11-28 03:21:05', NULL),
(125, 'SITI SA\'DIYAH', '0078518520', 'X', '2', '1', 10, 5, '2022-11-28 03:21:05', NULL),
(126, 'SRI HANDAYANI', '0064112419', 'X', '2', '1', 10, 5, '2022-11-28 03:21:05', NULL),
(127, 'ZAFIRA DWI APRILIA', '0078158876', 'X', '2', '1', 10, 5, '2022-11-28 03:21:05', NULL),
(128, 'ZAVATIA RINDITA PRIYANI', '0068304895', 'X', '2', '1', 10, 5, '2022-11-28 03:21:05', NULL),
(129, 'AFIFA QUDSIA', '0072681626', 'X', '1', '1', 7, 5, '2022-11-28 03:21:05', NULL),
(130, 'AIDHA ANASYA SALFANINDIA', '0078705685', 'X', '1', '1', 7, 5, '2022-11-28 03:21:05', NULL),
(131, 'ANISA NUR RAMADHANI', '0067260200', 'X', '1', '1', 7, 5, '2022-11-28 03:21:05', NULL),
(132, 'CELSI OLIVIA', '0073445443', 'X', '1', '1', 7, 5, '2022-11-28 03:21:05', NULL),
(133, 'DINDA SAFITRI', '0067436850', 'X', '1', '1', 7, 5, '2022-11-28 03:21:05', NULL),
(134, 'DWI INTAN PERMADANI', '0064411082', 'X', '1', '1', 7, 5, '2022-11-28 03:21:05', NULL),
(135, 'FAIZAH LAILATUL JAMIL', '0067450431', 'X', '1', '1', 7, 5, '2022-11-28 03:21:05', NULL),
(136, 'FELANTIKA', '0073567482', 'X', '1', '1', 7, 5, '2022-11-28 03:21:05', NULL),
(137, 'FERDI FIRDAUS', '0073287291', 'X', '1', '1', 7, 5, '2022-11-28 03:21:05', NULL),
(138, 'HIKMATUL KHOIRIYAH', '0075871417', 'X', '1', '1', 7, 5, '2022-11-28 03:21:06', NULL),
(139, 'IMROATUL ALIFAH', '0064658997', 'X', '1', '1', 7, 5, '2022-11-28 03:21:06', NULL),
(140, 'JESITA NADIA PUTRI', '0072822014', 'X', '1', '1', 7, 5, '2022-11-28 03:21:06', NULL),
(141, 'JIHAN BASYARAHIL', '0063884670', 'X', '1', '1', 7, 5, '2022-11-28 03:21:06', NULL),
(142, 'KARIMAH', '0049806496', 'X', '1', '1', 7, 5, '2022-11-28 03:21:06', NULL),
(143, 'MUHAMMAD NOVAL ROMADHAN', '0062603168', 'X', '1', '1', 7, 5, '2022-11-28 03:21:06', NULL),
(144, 'NAILUL ILMA MA\'RIFAH', '0063416725', 'X', '1', '1', 7, 5, '2022-11-28 03:21:06', NULL),
(145, 'NEFRI DWI JUNIANTI', '0065148966', 'X', '1', '1', 7, 5, '2022-11-28 03:21:06', NULL),
(146, 'NINDIA FAISYA SALSAPRILIA', '0079006041', 'X', '1', '1', 7, 5, '2022-11-28 03:21:06', NULL),
(147, 'NOVALIA LUNA NUR AZIZAH', '0066258202', 'X', '1', '1', 7, 5, '2022-11-28 03:21:06', NULL),
(148, 'PINGKAN AYU FAROKAH', '0068983447', 'X', '1', '1', 7, 5, '2022-11-28 03:21:06', NULL),
(149, 'PUTRI ANGGRAENY', '0074487606', 'X', '1', '1', 7, 6, '2022-11-28 03:21:06', NULL),
(150, 'SAFIRA DWI RAMADANI', '0069700310', 'X', '1', '1', 7, 6, '2022-11-28 03:21:06', NULL),
(151, 'SELFIA DIAN AGUSTIN', '0074722247', 'X', '1', '1', 7, 6, '2022-11-28 03:21:06', NULL),
(152, 'SELVIA NUR AZIZAH', '0064691056', 'X', '1', '1', 7, 6, '2022-11-28 03:21:06', NULL),
(153, 'SURYO SUJONO', '0067474902', 'X', '1', '1', 7, 6, '2022-11-28 03:21:06', NULL),
(154, 'TARA SALSABILLA NAURAKMA PUTRI', '0066435435', 'X', '1', '1', 7, 6, '2022-11-28 03:21:06', NULL),
(155, 'WASYILATUL BARIROH', '3064783412', 'X', '1', '1', 7, 6, '2022-11-28 03:21:06', NULL),
(156, 'WINDY NAZA APRILIA', '0072033137', 'X', '1', '1', 7, 6, '2022-11-28 03:21:06', NULL),
(157, 'ZAHRA ISANDRIA', '0068842597', 'X', '1', '1', 7, 6, '2022-11-28 03:21:06', NULL),
(158, 'ZULAYKHA GHEIZA AZZAHRA', '0077533953', 'X', '1', '1', 7, 6, '2022-11-28 03:21:06', NULL),
(159, 'ACHMAD RAMADHANY', '0058329114', 'X', '1', '1', 5, 6, '2022-11-28 03:21:06', NULL),
(160, 'AFITA', '0078041530', 'X', '1', '1', 5, 6, '2022-11-28 03:21:06', NULL),
(161, 'AMILIA REGINA PUTRI', '0079774588', 'X', '1', '1', 5, 6, '2022-11-28 03:21:06', NULL),
(162, 'ARINA UTHOYBAH', '0067632832', 'X', '1', '1', 5, 6, '2022-11-28 03:21:06', NULL),
(163, 'DEWI INTAN NURAINI', '0067277506', 'X', '1', '1', 5, 6, '2022-11-28 03:21:06', NULL),
(164, 'EKA NOR PRATIWI', '0072733321', 'X', '1', '1', 5, 6, '2022-11-28 03:21:06', NULL),
(165, 'ELLO RASYA FIRANSYAH', '0069817533', 'X', '1', '1', 5, 6, '2022-11-28 03:21:06', NULL),
(166, 'INDAH DESMITA RAMADHANI', '3064818819', 'X', '1', '1', 5, 6, '2022-11-28 03:21:06', NULL),
(167, 'JAMILATUS ZAHRO', '0061767496', 'X', '1', '1', 5, 6, '2022-11-28 03:21:06', NULL),
(168, 'KARIN', '0065515557', 'X', '1', '1', 5, 6, '2022-11-28 03:21:06', NULL),
(169, 'MELYATUL JANIYAH', '0065611293', 'X', '1', '1', 5, 6, '2022-11-28 03:21:06', NULL),
(170, 'MOH. RIZALUL AMRI', '0069871804', 'X', '1', '1', 5, 6, '2022-11-28 03:21:06', NULL),
(171, 'MOHAMMAD IFDANI SAMSUL MU\'ARIF', '0066049791', 'X', '1', '1', 5, 6, '2022-11-28 03:21:06', NULL),
(172, 'MOHAMMAD PRAYOGI', '0069870395', 'X', '1', '1', 5, 6, '2022-11-28 03:21:06', NULL),
(173, 'MUHAMMAD ADIFAN', '0078707621', 'X', '1', '1', 5, 6, '2022-11-28 03:21:06', NULL),
(174, 'MUHAMMAD FIKRI MARDIANTO', '0066874351', 'X', '1', '1', 5, 6, '2022-11-28 03:21:06', NULL),
(175, 'MUHAMMAD HAIRUR ROFIQI', '0058007355', 'X', '1', '1', 5, 6, '2022-11-28 03:21:06', NULL),
(176, 'MUHAMMAD RADHO SAPUTRA', '0061684074', 'X', '1', '1', 5, 6, '2022-11-28 03:21:06', NULL),
(177, 'MUHAMMAD ZULHAN HASAN', '0055562321', 'X', '1', '1', 5, 6, '2022-11-28 03:21:06', NULL),
(178, 'RAFITA EWI AGUSTIN', '0064603461', 'X', '1', '1', 5, 7, '2022-11-28 03:21:06', NULL),
(179, 'RISKIANA OKTAVIA HALIZA', '0069517266', 'X', '1', '1', 5, 7, '2022-11-28 03:21:06', NULL),
(180, 'RISKIATUL HIDAYAH', '3064381295', 'X', '1', '1', 5, 7, '2022-11-28 03:21:06', NULL),
(181, 'SIFARATUL RAMADANI', '0069317237', 'X', '1', '1', 5, 7, '2022-11-28 03:21:06', NULL),
(182, 'SINTIA CIKA NABAWIYAH', '0071878053', 'X', '1', '1', 5, 7, '2022-11-28 03:21:06', NULL),
(183, 'SITI AMILIA PUTRI', '0074549860', 'X', '1', '1', 5, 7, '2022-11-28 03:21:06', NULL),
(184, 'SITI NABILA', '0061442268', 'X', '1', '1', 5, 7, '2022-11-28 03:21:06', NULL),
(185, 'SITI ROKAYAH AZZAHRO', '0069857643', 'X', '1', '1', 5, 7, '2022-11-28 03:21:06', NULL),
(186, 'VIJAYIDIR ROMADHAN', '0075441667', 'X', '1', '1', 5, 7, '2022-11-28 03:21:06', NULL),
(187, 'ADELIA SAFIRA', '0067841249', 'X', '2', '1', 5, 7, '2022-11-28 03:21:06', NULL),
(188, 'AHMAD ANDIKA', '0076523816', 'X', '2', '1', 5, 7, '2022-11-28 03:21:06', NULL),
(189, 'AHMAD DANI SAPUTRA', '0062628893', 'X', '2', '1', 5, 7, '2022-11-28 03:21:06', NULL),
(190, 'AHMAD KHOLIL ANAM', '0065717290', 'X', '2', '1', 5, 7, '2022-11-28 03:21:06', NULL),
(191, 'AHMAT ZAINOL WEFI', '0073625635', 'X', '2', '1', 5, 7, '2022-11-28 03:21:06', NULL),
(192, 'ANA FITRIA', '0078858098', 'X', '2', '1', 5, 7, '2022-11-28 03:21:06', NULL),
(193, 'ANGGA ARDIANSYAH', '0064103491', 'X', '2', '1', 5, 7, '2022-11-28 03:21:06', NULL),
(194, 'ANGGA AULY ZAKARIA', '0064971629', 'X', '2', '1', 5, 7, '2022-11-28 03:21:06', NULL),
(195, 'ANGGER ARY PRAYOGA', '0059237300', 'X', '2', '1', 5, 7, '2022-11-28 03:21:06', NULL),
(196, 'APRELIA PUTRI NUR CAHYADI', '0067297054', 'X', '2', '1', 5, 7, '2022-11-28 03:21:06', NULL),
(197, 'ARI DWIKI ANANTA', '0053899648', 'X', '2', '1', 5, 7, '2022-11-28 03:21:06', NULL),
(198, 'DHEALOVA ADITYA EKA RAMADHAN', '0067481221', 'X', '2', '1', 5, 7, '2022-11-28 03:21:06', NULL),
(199, 'ELSA DWI ISTIFIANA', '0069331349', 'X', '2', '1', 5, 7, '2022-11-28 03:21:06', NULL),
(200, 'FADILATUL MAULIDA', '0078239768', 'X', '2', '1', 5, 7, '2022-11-28 03:21:06', NULL),
(201, 'FARA DUWI ALYATI', '0062627800', 'X', '2', '1', 5, 7, '2022-11-28 03:21:06', NULL),
(202, 'FIRNANDA JANUARIS PUTRI', '0072862262', 'X', '2', '1', 5, 7, '2022-11-28 03:21:06', NULL),
(203, 'GALUH DIYANTI PERMATASARI', '0064356226', 'X', '2', '1', 5, 7, '2022-11-28 03:21:06', NULL),
(204, 'HOLISA AMALIA', '0078291702', 'X', '2', '1', 5, 8, '2022-11-28 03:21:06', NULL),
(205, 'IFTITAHUSSA\'ADAH', '0051251841', 'X', '2', '1', 5, 8, '2022-11-28 03:21:06', NULL),
(206, 'KAMILATUL QOMARIYAH', '0063345740', 'X', '2', '1', 5, 8, '2022-11-28 03:21:06', NULL),
(207, 'MOHAMMAD PRAYOGA', '0061489239', 'X', '2', '1', 5, 8, '2022-11-28 03:21:06', NULL),
(208, 'MOHAMMMAD TEGAR ANDHIKA PRATAMA', '0062144493', 'X', '2', '1', 5, 8, '2022-11-28 03:21:06', NULL),
(209, 'MUHAMMAD NAILUL CHOERI', '0071502942', 'X', '2', '1', 5, 8, '2022-11-28 03:21:06', NULL),
(210, 'MUHAMMAD ZAINURRAZIQIN', '0066001082', 'X', '2', '1', 5, 8, '2022-11-28 03:21:06', NULL),
(211, 'NAVINSA FEBIOLA', '0064586950', 'X', '2', '1', 5, 8, '2022-11-28 03:21:06', NULL),
(212, 'NURJIAH INDRIANTI', '0078326599', 'X', '2', '1', 5, 8, '2022-11-28 03:21:06', NULL),
(213, 'PIPIT NOVITASARI', '0078530523', 'X', '2', '1', 5, 8, '2022-11-28 03:21:06', NULL),
(214, 'PUTRI WULANDARI', '0066245689', 'X', '2', '1', 5, 8, '2022-11-28 03:21:06', NULL),
(215, 'RAHADI AFDALSYAH', '0043823120', 'X', '2', '1', 5, 8, '2022-11-28 03:21:06', NULL),
(216, 'RONI FERDIANTO', '0067316528', 'X', '2', '1', 5, 8, '2022-11-28 03:21:06', NULL),
(217, 'SELA AYU LESTARI', '0066188646', 'X', '2', '1', 5, 8, '2022-11-28 03:21:06', NULL),
(218, 'SITI AISAH', '0062112053', 'X', '2', '1', 5, 8, '2022-11-28 03:21:06', NULL),
(219, 'SITTI MUDMAINA', '0064441520', 'X', '2', '1', 5, 8, '2022-11-28 03:21:06', NULL),
(220, 'SYAIFUL BAHRI', '0067919477', 'X', '2', '1', 5, 8, '2022-11-28 03:21:06', NULL),
(221, 'TEGUH DWI RAMADHANI', '0065643925', 'X', '2', '1', 5, 8, '2022-11-28 03:21:06', NULL),
(222, 'ABDUL GAFUR', '0051815425', 'X', '1', '1', 4, 8, '2022-11-28 03:21:06', NULL),
(223, 'ACHMAD FAUZI', '0067293508', 'X', '1', '1', 4, 8, '2022-11-28 03:21:06', NULL),
(224, 'AHMAD DHANI FIRMANSYAH', '0065858475', 'X', '1', '1', 4, 8, '2022-11-28 03:21:06', NULL),
(225, 'AHMAD KAFABILLAH', '0078807510', 'X', '1', '1', 4, 8, '2022-11-28 03:21:06', NULL),
(226, 'AHMAD SIFAUL QALBI', '0076875547', 'X', '1', '1', 4, 8, '2022-11-28 03:21:06', NULL),
(227, 'AKBAR ILHAM DANI', '0066581436', 'X', '1', '1', 4, 8, '2022-11-28 03:21:06', NULL),
(228, 'ALFITO ILHAM MAULANA', '0072774095', 'X', '1', '1', 4, 8, '2022-11-28 03:21:06', NULL),
(229, 'BURHANUDIN ZULFI', '0067361016', 'X', '1', '1', 4, 9, '2022-11-28 03:21:06', NULL),
(230, 'DAMAR PUTRA PRATAMA BAHTIAR', '0066958198', 'X', '1', '1', 4, 9, '2022-11-28 03:21:06', NULL),
(231, 'DAVID APRILIAN ALVIS', '0072667169', 'X', '1', '1', 4, 9, '2022-11-28 03:21:06', NULL),
(232, 'DEDY PUTRA KURNIAWAN', '0065492568', 'X', '1', '1', 4, 9, '2022-11-28 03:21:06', NULL),
(233, 'DIKA RAMADHAN', '0065393308', 'X', '1', '1', 4, 9, '2022-11-28 03:21:06', NULL),
(234, 'FIKKRIH NUR RAHMAN SYAH', '0062842615', 'X', '1', '1', 4, 9, '2022-11-28 03:21:06', NULL),
(235, 'FIRMAN ADI YAKSA HIDAYATULLAH', '0068936099', 'X', '1', '1', 4, 9, '2022-11-28 03:21:06', NULL),
(236, 'HAMDANIL ARIFIN', '0079541148', 'X', '1', '1', 4, 9, '2022-11-28 03:21:06', NULL),
(237, 'IBROR YUSRON SUGIHARTO', '0061622128', 'X', '1', '1', 4, 9, '2022-11-28 03:21:06', NULL),
(238, 'IMAM ADI ARROKI', '0071323194', 'X', '1', '1', 4, 9, '2022-11-28 03:21:06', NULL),
(239, 'LOREN CHRISTIAN', '0078761050', 'X', '1', '1', 4, 9, '2022-11-28 03:21:06', NULL),
(240, 'MAULIDIYA TRI MALIYATI', '0078819350', 'X', '1', '1', 4, 9, '2022-11-28 03:21:06', NULL),
(241, 'MOCHAMMAD ALDI', '0063938312', 'X', '1', '1', 4, 9, '2022-11-28 03:21:06', NULL),
(242, 'MOCHAMMAD TIRMIDZI', '0041668734', 'X', '1', '1', 4, 9, '2022-11-28 03:21:06', NULL),
(243, 'MOHAMMAD RENO HABIBI', '0069356488', 'X', '1', '1', 4, 9, '2022-11-28 03:21:06', NULL),
(244, 'MUHAMMAD ALDO ALFIYANSYAH', '0073822006', 'X', '1', '1', 4, 9, '2022-11-28 03:21:06', NULL),
(245, 'MUHAMMAD ALTHAF ALFANSYAH', '0061607520', 'X', '1', '1', 4, 9, '2022-11-28 03:21:06', NULL),
(246, 'MUHAMMAD GHAZY AL JAHFAL', '0061079243', 'X', '1', '1', 4, 9, '2022-11-28 03:21:06', NULL),
(247, 'MUHAMMAD REZA DAYYAN RISMANTO', '0076467799', 'X', '1', '1', 4, 9, '2022-11-28 03:21:06', NULL),
(248, 'MUHAMMAD TAUFIQ BALAFIF', '0054703119', 'X', '1', '1', 4, 9, '2022-11-28 03:21:06', NULL),
(249, 'MUHAMMAD WILDAN TAWAGKAL', '0063001202', 'X', '1', '1', 4, 9, '2022-11-28 03:21:06', NULL),
(250, 'MUWAFIQUL HOBIR', '0066663203', 'X', '1', '1', 4, 9, '2022-11-28 03:21:06', NULL),
(251, 'ROKHIQIL BUDI WARDIANSYAH', '0074693882', 'X', '1', '1', 4, 10, '2022-11-28 03:21:06', NULL),
(252, 'TEGAR DWI ABDIL AZIZ', '0139590697', 'X', '1', '1', 4, 10, '2022-11-28 03:21:06', NULL),
(253, 'VIANDITA OKTAMELIA PUTRI', '0078279526', 'X', '1', '1', 4, 10, '2022-11-28 03:21:06', NULL),
(254, 'AHMAD RIVALDI CAHYONO', '0065840597', 'X', '2', '1', 4, 10, '2022-11-28 03:21:06', NULL),
(255, 'ALDO SAPUTRA', '0067561238', 'X', '2', '1', 4, 10, '2022-11-28 03:21:06', NULL),
(256, 'AMIRUTTAWAB HAIRUSSA\'I', '0072418091', 'X', '2', '1', 4, 10, '2022-11-28 03:21:06', NULL),
(257, 'ANGGA ISMA PRATAMA', '0079226200', 'X', '2', '1', 4, 10, '2022-11-28 03:21:06', NULL),
(258, 'BINTANG MAULANA', '0065933816', 'X', '2', '1', 4, 10, '2022-11-28 03:21:06', NULL),
(259, 'DERYL ASRILLAH PRAYUDHA', '0069046350', 'X', '2', '1', 4, 10, '2022-11-28 03:21:06', NULL),
(260, 'EKA ZULVA MUNAWAROH', '0075984675', 'X', '2', '1', 4, 10, '2022-11-28 03:21:06', NULL),
(261, 'GALANG MAYLINDO PRIBADI', '0075475939', 'X', '2', '1', 4, 10, '2022-11-28 03:21:06', NULL),
(262, 'IRZA AHMAD ABDILLAH', '0062304356', 'X', '2', '1', 4, 10, '2022-11-28 03:21:06', NULL),
(263, 'MAULANA RAFLI APRIANDI', '0051850042', 'X', '2', '1', 4, 10, '2022-11-28 03:21:06', NULL),
(264, 'MIRZA UCHMAL GANI', '0066295383', 'X', '2', '1', 4, 10, '2022-11-28 03:21:06', NULL),
(265, 'MOCHAMAD YAZID RAHMAN FADHILAH', '0062268329', 'X', '2', '1', 4, 10, '2022-11-28 03:21:06', NULL),
(266, 'MOCHAMMAD FARHAN ALFIRDAUS', '3062165418', 'X', '2', '1', 4, 10, '2022-11-28 03:21:06', NULL),
(267, 'MOHAMMAD FAREL HAIKAL AVIZ', '0074342717', 'X', '2', '1', 4, 10, '2022-11-28 03:21:06', NULL),
(268, 'MOHAMMAD FIRDAUS', '0077806993', 'X', '2', '1', 4, 10, '2022-11-28 03:21:06', NULL),
(269, 'MOHAMMAD HELMI SYARIF', '0065425557', 'X', '2', '1', 4, 10, '2022-11-28 03:21:06', NULL),
(270, 'MOHAMMAD NOVAL ALI ERFAN', '0065793354', 'X', '2', '1', 4, 10, '2022-11-28 03:21:06', NULL),
(271, 'MOHAMMAD ROZIK YULIANTO', '0072323641', 'X', '2', '1', 4, 10, '2022-11-28 03:21:06', NULL),
(272, 'MUCHAMMAD RIO RUFAMINJAS', '0063436100', 'X', '2', '1', 4, 10, '2022-11-28 03:21:06', NULL),
(273, 'MUHAMMAD DERBIAN DWI PUTRA', '0069816952', 'X', '2', '1', 4, 10, '2022-11-28 03:21:06', NULL),
(274, 'MUHAMMAD FEBRI', '0061648129', 'X', '2', '1', 4, 10, '2022-11-28 03:21:06', NULL),
(275, 'MUHAMMAD GIBRIL ANWAR', '0067043447', 'X', '2', '1', 4, 10, '2022-11-28 03:21:06', NULL),
(276, 'MUHAMMAD RAFI', '0062537198', 'X', '2', '1', 4, 10, '2022-11-28 03:21:06', NULL),
(277, 'MUHAMMAD YUINUS', '0058211306', 'X', '2', '1', 4, 10, '2022-11-28 03:21:06', NULL),
(278, 'MUKHAMMAD FARIZ FAIDZIN', '0067031192', 'X', '2', '1', 4, 11, '2022-11-28 03:21:06', NULL),
(279, 'NADA KAMILAH AMATULAH', '0075476606', 'X', '2', '1', 4, 11, '2022-11-28 03:21:06', NULL),
(280, 'NICOLA FATHORROSI', '0053668992', 'X', '2', '1', 4, 11, '2022-11-28 03:21:06', NULL),
(281, 'NOVAL ARIYANTO', '0073473343', 'X', '2', '1', 4, 11, '2022-11-28 03:21:06', NULL),
(282, 'NURULLAH', '0054377054', 'X', '2', '1', 4, 11, '2022-11-28 03:21:06', NULL),
(283, 'PRASETIYO ALFIANDI BUDIONO', '0068072915', 'X', '2', '1', 4, 11, '2022-11-28 03:21:06', NULL),
(284, 'SUNNY MUHLISON', '0076963385', 'X', '2', '1', 4, 11, '2022-11-28 03:21:06', NULL),
(285, 'SYAHRUL MUBAROQ', '0064472159', 'X', '2', '1', 4, 11, '2022-11-28 03:21:06', NULL),
(286, 'ACHMAD GALIH ADHYAKSA', '0079565597', 'X', '1', '1', 6, 11, '2022-11-28 03:21:06', NULL),
(287, 'ADAM ALAMSYAH QULDIBY', '0067434537', 'X', '1', '1', 6, 11, '2022-11-28 03:21:06', NULL),
(288, 'AHMAD DJUNAEDI HARYANTO', '0067854116', 'X', '1', '1', 6, 11, '2022-11-28 03:21:06', NULL),
(289, 'AHMAD NUR MUTTAQIEN', '0062788987', 'X', '1', '1', 6, 11, '2022-11-28 03:21:06', NULL),
(290, 'AKBAR BUDI PRASETYO', '0065666943', 'X', '1', '1', 6, 11, '2022-11-28 03:21:06', NULL),
(291, 'ALFYAN AN NAWAF', '0074133907', 'X', '1', '1', 6, 11, '2022-11-28 03:21:06', NULL),
(292, 'ALIFIA MAYLA RIFKI SAFIRA', '0071992796', 'X', '1', '1', 6, 11, '2022-11-28 03:21:06', NULL),
(293, 'BAYU ARIZONA MUKTI', '0053086842', 'X', '1', '1', 6, 11, '2022-11-28 03:21:06', NULL),
(294, 'BULAN ADELTA ZAPRILIA', '0072635807', 'X', '1', '1', 6, 11, '2022-11-28 03:21:06', NULL),
(295, 'DAFITO KESHA ENGGAR KUSUMO', '0065247301', 'X', '1', '1', 6, 11, '2022-11-28 03:21:06', NULL),
(296, 'DAVIN IHWAN PRAYOGI', '0067495748', 'X', '1', '1', 6, 11, '2022-11-28 03:21:06', NULL),
(297, 'DIANA AYU', '0069076561', 'X', '1', '1', 6, 11, '2022-11-28 03:21:06', NULL),
(298, 'DIMAS PUTRA ADITIA', '0072153572', 'X', '1', '1', 6, 11, '2022-11-28 03:21:06', NULL),
(299, 'FAUZIAH FARA SAFITRI ', '0068216876', 'X', '1', '1', 6, 11, '2022-11-28 03:21:06', NULL),
(300, 'JAMILA', '0063296415', 'X', '1', '1', 6, 11, '2022-11-28 03:21:06', NULL),
(301, 'JONI FERNANDO', '0064595878', 'X', '1', '1', 6, 11, '2022-11-28 03:21:06', NULL),
(302, 'JUSTIN MOSES PRAYOGO ', '0073721716', 'X', '1', '1', 6, 11, '2022-11-28 03:21:06', NULL),
(303, 'MOHAMMAD DAYROBI FABIANTARA', '0073360669', 'X', '1', '1', 6, 11, '2022-11-28 03:21:06', NULL),
(304, 'MOHAMMAD SAMSUL ARIFIN', '0078978322', 'X', '1', '1', 6, 11, '2022-11-28 03:21:06', NULL),
(305, 'MUHAMMAD FAIZAL FAHREZY', '0069443304', 'X', '1', '1', 6, 12, '2022-11-28 03:21:06', NULL),
(306, 'MUHAMMAD KAFKA AULIYA', '0079019875', 'X', '1', '1', 6, 12, '2022-11-28 03:21:06', NULL),
(307, 'MUHAMMAD PRAYOGA WIJAYA', '0061482476', 'X', '1', '1', 6, 12, '2022-11-28 03:21:06', NULL),
(308, 'MUHAMMAD RIFQI MAULANA', '0073950235', 'X', '1', '1', 6, 12, '2022-11-28 03:21:06', NULL),
(309, 'SATRIO RIFKI ANDIKA', '0065517015', 'X', '1', '1', 6, 12, '2022-11-28 03:21:06', NULL),
(310, 'SEPTIAN BUDI RAMADHAN', '0063525966', 'X', '1', '1', 6, 12, '2022-11-28 03:21:06', NULL),
(311, 'VALEN REKSA ADY ANGGARA', '0072374728', 'X', '1', '1', 6, 12, '2022-11-28 03:21:06', NULL),
(312, 'VERISCHA SALSABILLA RAIHANUUN', '0077031374', 'X', '1', '1', 6, 12, '2022-11-28 03:21:06', NULL),
(313, 'YANUARIEL PANCA DARMAWAN', '0072073873', 'X', '1', '1', 6, 12, '2022-11-28 03:21:06', NULL),
(314, 'ACHMADI ABDUL MUIS', '0076377450', 'X', '2', '1', 6, 12, '2022-11-28 03:21:06', NULL),
(315, 'AHMAD FAKHRI MAULANA', '0068941133', 'X', '2', '1', 6, 12, '2022-11-28 03:21:06', NULL),
(316, 'AHMAD FAUZI', '0066297710', 'X', '2', '1', 6, 12, '2022-11-28 03:21:06', NULL),
(317, 'AHMAT ALDI FATURULLAH', '0074424821', 'X', '2', '1', 6, 12, '2022-11-28 03:21:06', NULL),
(318, 'AJMAL JAMIL', '0064953521', 'X', '2', '1', 6, 12, '2022-11-28 03:21:06', NULL),
(319, 'ALVIN NUR ROCHMAN', '0069029132', 'X', '2', '1', 6, 12, '2022-11-28 03:21:06', NULL),
(320, 'ANGGITARIO FIRDAUZI', '0061259294', 'X', '2', '1', 6, 12, '2022-11-28 03:21:06', NULL),
(321, 'DAFA MUKTASIM NAWAWI', '0061115947', 'X', '2', '1', 6, 12, '2022-11-28 03:21:06', NULL),
(322, 'DANI ARIO', '0068932154', 'X', '2', '1', 6, 12, '2022-11-28 03:21:06', NULL),
(323, 'ELISA TRIANDIKA DEWI', '0079397191', 'X', '2', '1', 6, 12, '2022-11-28 03:21:06', NULL),
(324, 'FAHRENZY ADITYA SAPUTRA', '0068839032', 'X', '2', '1', 6, 12, '2022-11-28 03:21:06', NULL),
(325, 'FEMILLIA AZZUHRA PUTRI', '0076414980', 'X', '2', '1', 6, 12, '2022-11-28 03:21:06', NULL),
(326, 'IZA EKA PRATIWI', '0064182859', 'X', '2', '1', 6, 12, '2022-11-28 03:21:06', NULL),
(327, 'JAVA EKA BHIMANTARA', '0065664298', 'X', '2', '1', 6, 12, '2022-11-28 03:21:06', NULL),
(328, 'MOHAMAD ROBIT MAULANA FALAH', '0055409261', 'X', '2', '1', 6, 12, '2022-11-28 03:21:06', NULL),
(329, 'MOHAMMAD ANZILATUL PASHA RAMADANI', '0068285814', 'X', '2', '1', 6, 12, '2022-11-28 03:21:06', NULL),
(330, 'MUHAMMAD ABDUL WAFI', '0069077391', 'X', '2', '1', 6, 12, '2022-11-28 03:21:06', NULL),
(331, 'MUHAMMAD AFRIZA ABDILLAH', '0061961782', 'X', '2', '1', 6, 13, '2022-11-28 03:21:06', NULL),
(332, 'MUHAMMAD GATAN FATHOR ROZAKI ', '0068741540', 'X', '2', '1', 6, 13, '2022-11-28 03:21:06', NULL),
(333, 'MUHAMMAD NUR FADIL', '0065102325', 'X', '2', '1', 6, 13, '2022-11-28 03:21:06', NULL),
(334, 'MUHAMMAD RENDI', '3062223888', 'X', '2', '1', 6, 13, '2022-11-28 03:21:06', NULL),
(335, 'MUHAMMAD SUWARNO', '0063853140', 'X', '2', '1', 6, 13, '2022-11-28 03:21:06', NULL),
(336, 'RENDI PRANATA', '0065364854', 'X', '2', '1', 6, 13, '2022-11-28 03:21:06', NULL),
(337, 'SAEFAN ALI AZZARKASI', '0069481768', 'X', '2', '1', 6, 13, '2022-11-28 03:21:06', NULL),
(338, 'SYAUQI MUBAROK', '0055277804', 'X', '2', '1', 6, 13, '2022-11-28 03:21:06', NULL),
(339, 'SYECH ILHAM SULTAN FAHREZI', '0063615504', 'X', '2', '1', 6, 13, '2022-11-28 03:21:06', NULL),
(340, 'ULFI NADIA PUTRI', '0067579605', 'X', '2', '1', 6, 13, '2022-11-28 03:21:06', NULL),
(341, 'URWAH AL WUTSQA', '0071261321', 'X', '2', '1', 6, 13, '2022-11-28 03:21:06', NULL),
(342, 'ZAKARIA ZUHDI AHMAD', '0066094080', 'X', '2', '1', 6, 13, '2022-11-28 03:21:06', NULL),
(343, 'ABDUL MUSLIH', '0063050279', 'X', '1', '1', 1, 13, '2022-11-28 03:21:06', NULL),
(344, 'ACHMAD FAUZAN', '0061600993', 'X', '1', '1', 1, 13, '2022-11-28 03:21:06', NULL),
(345, 'ADITYA ANDREW PUTRA', '0068414752', 'X', '1', '1', 1, 13, '2022-11-28 03:21:06', NULL),
(346, 'ALFAREZA WILDANANG HERMAWAN', '0063175561', 'X', '1', '1', 1, 13, '2022-11-28 03:21:06', NULL),
(347, 'ANGELINA AMELIA PUTRI', '0065666508', 'X', '1', '1', 1, 13, '2022-11-28 03:21:06', NULL),
(348, 'BAREP ADHIYASTA', '0066760746', 'X', '1', '1', 1, 13, '2022-11-28 03:21:06', NULL),
(349, 'DEVA LOVADANI PUTRA', '0065863413', 'X', '1', '1', 1, 13, '2022-11-28 03:21:06', NULL),
(350, 'FALIH RAHMATULLAH PRATAMA', '0061978393', 'X', '1', '1', 1, 13, '2022-11-28 03:21:06', NULL),
(351, 'FATHIR GATAN ALIBI', '0067273927', 'X', '1', '1', 1, 13, '2022-11-28 03:21:06', NULL),
(352, 'FRIYANDANA DAVA FIRMANSYAH', '0066855378', 'X', '1', '1', 1, 13, '2022-11-28 03:21:06', NULL),
(353, 'GANDI WIBISONO', '0065309203', 'X', '1', '1', 1, 13, '2022-11-28 03:21:06', NULL),
(354, 'GILANG DHARMA TECTONA', '0071186619', 'X', '1', '1', 1, 13, '2022-11-28 03:21:06', NULL),
(355, 'HARIS RAHMAN KURNIAWAN', '0066848265', 'X', '1', '1', 1, 13, '2022-11-28 03:21:06', NULL),
(356, 'INDRA SAPUTRA', '0062593554', 'X', '1', '1', 1, 13, '2022-11-28 03:21:06', NULL),
(357, 'MISSIY HADIYANTORO', '0076272420', 'X', '1', '1', 1, 13, '2022-11-28 03:21:06', NULL),
(358, 'MOH. AKHIF FIRMANSYAH', '3079603556', 'X', '1', '1', 1, 13, '2022-11-28 03:21:06', NULL),
(359, 'MOH. RIFQI NUR ARIFILLAH', '0061474077', 'X', '1', '1', 1, 13, '2022-11-28 03:21:06', NULL),
(360, 'MOHAMMAD FANY NASYITH AINUL YAKIN', '0063306475', 'X', '1', '1', 1, 13, '2022-11-28 03:21:06', NULL),
(361, 'MOHAMMAD ILYAS HIDAYATULLAH', '0068248686', 'X', '1', '2', 1, 1, '2022-11-28 03:21:06', NULL),
(362, 'MUHAMMAD ADITYA INSAN FADHILA', '0063933927', 'X', '1', '2', 1, 1, '2022-11-28 03:21:06', NULL),
(363, 'MUHAMMAD DWI FAUZAN', '0071531418', 'X', '1', '2', 1, 1, '2022-11-28 03:21:06', NULL),
(364, 'MUHAMMAD DZAKI SYARIF', '0063847376', 'X', '1', '2', 1, 1, '2022-11-28 03:21:06', NULL),
(365, 'MUHAMMAD FAREL DAFI SAPUTRA', '0065995468', 'X', '1', '2', 1, 1, '2022-11-28 03:21:06', NULL),
(366, 'MUHAMMAD IRFAN AR RAFI', '0066910855', 'X', '1', '2', 1, 1, '2022-11-28 03:21:06', NULL),
(367, 'MUHAMMAD NOFAL', '0056191987', 'X', '1', '2', 1, 1, '2022-11-28 03:21:06', NULL),
(368, 'MUHAMMAT LUKMANUL HAKIM ZAINUL MUSTAFA', '0069449387', 'X', '1', '2', 1, 1, '2022-11-28 03:21:06', NULL),
(369, 'NERU ANGGARA', '0068420332', 'X', '1', '2', 1, 1, '2022-11-28 03:21:06', NULL),
(370, 'NIKITA TIARA DWI MAULIDIA', '0071906006', 'X', '1', '2', 1, 1, '2022-11-28 03:21:06', NULL),
(371, 'RAFLIAN FIRDAUS MAULANI', '0061725146', 'X', '1', '2', 1, 1, '2022-11-28 03:21:06', NULL),
(372, 'RAZAN TEGAR AFANDI', '0069744059', 'X', '1', '2', 1, 1, '2022-11-28 03:21:06', NULL),
(373, 'RESKY ARSYIE AL-DANIAL', '0069422076', 'X', '1', '2', 1, 1, '2022-11-28 03:21:06', NULL),
(374, 'RIZKY MUTIARA FITRI', '0064129042', 'X', '1', '2', 1, 1, '2022-11-28 03:21:06', NULL),
(375, 'SATRIA ALHAN ILAFI', '0062108670', 'X', '1', '2', 1, 1, '2022-11-28 03:21:06', NULL),
(376, 'SYAUQI UWAIMIR BAHRUM PUTRA', '0074797724', 'X', '1', '2', 1, 1, '2022-11-28 03:21:06', NULL),
(377, 'TOTOK PRIANTONO AL RAMADANI', '0069469815', 'X', '1', '2', 1, 1, '2022-11-28 03:21:06', NULL),
(378, 'WILLY SURYO ANTAREDHA', '0065141998', 'X', '1', '2', 1, 1, '2022-11-28 03:21:06', NULL),
(379, 'AHMAD ABU RIZAL ALGIFARI', '0073233060', 'X', '1', '2', 9, 1, '2022-11-28 03:21:06', NULL),
(380, 'AHMAD BAIHAKI ISTIANDI', '0067474754', 'X', '1', '2', 9, 1, '2022-11-28 03:21:06', NULL),
(381, 'ANAS ABYAN PASHA', '0074562391', 'X', '1', '2', 9, 1, '2022-11-28 03:21:06', NULL),
(382, 'ANGEL NAISILLA AZIMA', '0065672318', 'X', '1', '2', 9, 1, '2022-11-28 03:21:06', NULL),
(383, 'ARIF RIFA\'I', '0051563176', 'X', '1', '2', 9, 1, '2022-11-28 03:21:06', NULL),
(384, 'DIMAS ERFANDI', '0069033457', 'X', '1', '2', 9, 1, '2022-11-28 03:21:06', NULL),
(385, 'FEBRIANTO FALANTINO', '0074877063', 'X', '1', '2', 9, 2, '2022-11-28 03:21:06', NULL),
(386, 'FITRA BAYU RAMADANI', '0055302422', 'X', '1', '2', 9, 2, '2022-11-28 03:21:06', NULL),
(387, 'HOTIP USMAN', '9631461358', 'X', '1', '2', 9, 2, '2022-11-28 03:21:06', NULL),
(388, 'MAULIDYA ELZA FIANDATIAR', '0072142682', 'X', '1', '2', 9, 2, '2022-11-28 03:21:06', NULL),
(389, 'MOHAMMAD FARIS FAUZAN AKBAR', '0067192701', 'X', '1', '2', 9, 2, '2022-11-28 03:21:06', NULL),
(390, 'MOHAMMAD RENDY PRAKOSO', '0069046229', 'X', '1', '2', 9, 2, '2022-11-28 03:21:06', NULL),
(391, 'MOHAMMAD SOFYAN HALILI', '0074334553', 'X', '1', '2', 9, 2, '2022-11-28 03:21:06', NULL),
(392, 'MUHAMMAD ANGGA PUTRA PRATAMA', '0062407045', 'X', '1', '2', 9, 2, '2022-11-28 03:21:06', NULL),
(393, 'MUHAMMAD MUSLEH ROMADONI', '0048486577', 'X', '1', '2', 9, 2, '2022-11-28 03:21:06', NULL),
(394, 'MUHAMMAD NORRENDRA', '0063188478', 'X', '1', '2', 9, 2, '2022-11-28 03:21:06', NULL),
(395, 'MUHAMMAD RIZKI', '0079491373', 'X', '1', '2', 9, 2, '2022-11-28 03:21:06', NULL),
(396, 'MUHAMMAD SHOFAREL IHSAN', '0068987026', 'X', '1', '2', 9, 2, '2022-11-28 03:21:06', NULL),
(397, 'MUHAMMAD WIRANTO', '0065674303', 'X', '1', '2', 9, 2, '2022-11-28 03:21:06', NULL),
(398, 'MUHAMMAD ZACKY FIRDIANSYAH', '0076232338', 'X', '1', '2', 9, 2, '2022-11-28 03:21:06', NULL),
(399, 'NAZWA ALYA PUTRI', '0068505703', 'X', '1', '2', 9, 2, '2022-11-28 03:21:06', NULL),
(400, 'NIA DITA RAHAYU', '0067140644', 'X', '1', '2', 9, 2, '2022-11-28 03:21:06', NULL),
(401, 'SHODIQ MAHMUDI', '0073086035', 'X', '1', '2', 9, 2, '2022-11-28 03:21:06', NULL),
(402, 'SURYA ABRORI', '0077992194', 'X', '1', '2', 9, 2, '2022-11-28 03:21:06', NULL),
(403, 'ADELIA EKA PUJIANTO', '0062960707', 'XI', '1', '2', 12, 2, '2022-11-28 03:21:06', NULL),
(404, 'AISYAH SULISTIA NINGSIH', '0061385376', 'XI', '1', '2', 12, 2, '2022-11-28 03:21:06', NULL),
(405, 'AMANDA DWI CAHYANING WULANDARI', '0053874354', 'XI', '1', '2', 12, 2, '2022-11-28 03:21:06', NULL),
(406, 'ANGGY FARADINA', '0052324318', 'XI', '1', '2', 12, 2, '2022-11-28 03:21:06', NULL),
(407, 'CANTIKA DWI WARDANI', '0057433964', 'XI', '1', '2', 12, 2, '2022-11-28 03:21:06', NULL),
(408, 'CHANTIKA MAY SHINTA', '0057257385', 'XI', '1', '2', 12, 2, '2022-11-28 03:21:06', NULL),
(409, 'DANANG SEPTA KURNIAWAN', '0052541872', 'XI', '1', '2', 12, 2, '2022-11-28 03:21:06', NULL),
(410, 'DWI RATIH EKA SEPTIANI', '0055657951', 'XI', '1', '2', 12, 2, '2022-11-28 03:21:06', NULL),
(411, 'FENI FILIANA ARIF', '0054346938', 'XI', '1', '2', 12, 2, '2022-11-28 03:21:06', NULL),
(412, 'FINA ATIKATUN GONITA', '0079664072', 'XI', '1', '2', 12, 2, '2022-11-28 03:21:06', NULL),
(413, 'GITA DWI ANDINI', '0057888438', 'XI', '1', '2', 12, 2, '2022-11-28 03:21:06', NULL),
(414, 'HAIRATUN NISAH', '0065838569', 'XI', '1', '2', 12, 2, '2022-11-28 03:21:06', NULL),
(415, 'INTAN LAILATUS SIFANAH', '0058389350', 'XI', '1', '2', 12, 3, '2022-11-28 03:21:06', NULL),
(416, 'ISTIANA', '0053923355', 'XI', '1', '2', 12, 3, '2022-11-28 03:21:06', NULL),
(417, 'MAULIDEA ROFIATUL JANNAH', '0066798931', 'XI', '1', '2', 12, 3, '2022-11-28 03:21:06', NULL),
(418, 'MUHAMMAD FERDIYANTO', '0055537992', 'XI', '1', '2', 12, 3, '2022-11-28 03:21:06', NULL),
(419, 'MUHAMMAD NUKIL ALFARIZI', '0058664740', 'XI', '1', '2', 12, 3, '2022-11-28 03:21:06', NULL),
(420, 'NAJWA ROSYIDAH ZAHROTUL HAYAT', '0068979064', 'XI', '1', '2', 12, 3, '2022-11-28 03:21:06', NULL),
(421, 'NOVENTIA AYU RAISYA PUTRI BAITURRAHMAN', '3057165211', 'XI', '1', '2', 12, 3, '2022-11-28 03:21:06', NULL),
(422, 'PUTRI KARTIKA SELVRIYANTI', '0057556986', 'XI', '1', '2', 12, 3, '2022-11-28 03:21:06', NULL),
(423, 'RAFI RAHMAD FIRMANSYACH', '0061817435', 'XI', '1', '2', 12, 3, '2022-11-28 03:21:06', NULL),
(424, 'RIANA', '0052422360', 'XI', '1', '2', 12, 3, '2022-11-28 03:21:06', NULL),
(425, 'SARI WILADATUS SALIMAH', '0044315070', 'XI', '1', '2', 12, 3, '2022-11-28 03:21:06', NULL),
(426, 'SITI AULIA ASHFAHANY', '0057321676', 'XI', '1', '2', 12, 3, '2022-11-28 03:21:06', NULL),
(427, 'SITI RAMADATUS SAVINA', '0061187115', 'XI', '1', '2', 12, 3, '2022-11-28 03:21:06', NULL),
(428, 'SUTA NADHIF ADIWANGSA', '0057379794', 'XI', '1', '2', 12, 3, '2022-11-28 03:21:06', NULL),
(429, 'SYALSABILA KHOIRUN NISA', '0052799696', 'XI', '1', '2', 12, 3, '2022-11-28 03:21:06', NULL),
(430, 'VANESA TRIYA CALISTA', '0051320008', 'XI', '1', '2', 12, 3, '2022-11-28 03:21:06', NULL),
(431, 'WINDA PUTRI AGUSTIN', '0056993926', 'XI', '1', '2', 12, 3, '2022-11-28 03:21:06', NULL),
(432, 'YOEPIE DIAN PERMADANI', '0053827479', 'XI', '1', '2', 12, 3, '2022-11-28 03:21:06', NULL),
(433, 'ABDUL ADNAN', '0058478004', 'XI', '1', '2', 10, 3, '2022-11-28 03:21:06', NULL),
(434, 'ALFI SYARIFATUL HASANAH', '0057248731', 'XI', '1', '2', 10, 3, '2022-11-28 03:21:06', NULL),
(435, 'ANGGUN TRI HARTINI', '0065147623', 'XI', '1', '2', 10, 3, '2022-11-28 03:21:06', NULL),
(436, 'ANI RAHMAWATI', '0054102724', 'XI', '1', '2', 10, 3, '2022-11-28 03:21:06', NULL),
(437, 'BUNGA HELDA ANGEL RISKA', '0053631226', 'XI', '1', '2', 10, 3, '2022-11-28 03:21:06', NULL),
(438, 'DELA SEPTIARINI', '0045363745', 'XI', '1', '2', 10, 3, '2022-11-28 03:21:06', NULL),
(439, 'DIANA PUTRI MAHARANI', '0058766503', 'XI', '1', '2', 10, 3, '2022-11-28 03:21:06', NULL),
(440, 'ELVINA FITRIH', '0058319315', 'XI', '1', '2', 10, 3, '2022-11-28 03:21:06', NULL),
(441, 'FENDI MAULANA', '0058547483', 'XI', '1', '2', 10, 3, '2022-11-28 03:21:06', NULL),
(442, 'GINA FITRATUL MUNTAZAH', '0054790135', 'XI', '1', '2', 10, 4, '2022-11-28 03:21:06', NULL),
(443, 'HALIMATUS SA\'DIYAH', '0056901088', 'XI', '1', '2', 10, 4, '2022-11-28 03:21:06', NULL),
(444, 'JAMILATUS SYARIFAH', '0061558215', 'XI', '1', '2', 10, 4, '2022-11-28 03:21:06', NULL),
(445, 'KHILDA ROSIDA', '0054374750', 'XI', '1', '2', 10, 4, '2022-11-28 03:21:06', NULL),
(446, 'MAIDA PUTRI FATIMATUZZAHRO', '0056456440', 'XI', '1', '2', 10, 4, '2022-11-28 03:21:06', NULL),
(447, 'MUHAMMAD AFANDI PRATAMA', '0059773709', 'XI', '1', '2', 10, 4, '2022-11-28 03:21:06', NULL),
(448, 'MUHAMMAD RAMA KALAMULLAH', '0052794556', 'XI', '1', '2', 10, 4, '2022-11-28 03:21:06', NULL),
(449, 'NABILA AGUSTIN KHOIRUNIKA', '0055611039', 'XI', '1', '2', 10, 4, '2022-11-28 03:21:06', NULL),
(450, 'NAJWA NUR HASANAH', '0066054004', 'XI', '1', '2', 10, 4, '2022-11-28 03:21:06', NULL),
(451, 'NICO SETYAWAN', '0058139270', 'XI', '1', '2', 10, 4, '2022-11-28 03:21:06', NULL),
(452, 'NOVIA ZIQNA FIRDAUSY', '0069848786', 'XI', '1', '2', 10, 4, '2022-11-28 03:21:06', NULL),
(453, 'RATIH WINDI YUNIASIE', '0061723551', 'XI', '1', '2', 10, 4, '2022-11-28 03:21:06', NULL),
(454, 'RIFKI NUR AKBAR JUNAIDI', '0051095622', 'XI', '1', '2', 10, 4, '2022-11-28 03:21:06', NULL),
(455, 'RISMA NUR KHALISAH', '0063519590', 'XI', '1', '2', 10, 4, '2022-11-28 03:21:06', NULL),
(456, 'RIZKI AZIZAH SALSABILA', '0051906550', 'XI', '1', '2', 10, 4, '2022-11-28 03:21:06', NULL),
(457, 'SALWAH SABRINA', '0051706234', 'XI', '1', '2', 10, 4, '2022-11-28 03:21:06', NULL),
(458, 'SITA NURHALISAH', '0069494999', 'XI', '1', '2', 10, 4, '2022-11-28 03:21:06', NULL),
(459, 'SITI INDRIYANI', '0065183680', 'XI', '1', '2', 10, 4, '2022-11-28 03:21:06', NULL),
(460, 'SUCI ROMADIYAH MAKMUR', '0056956532', 'XI', '1', '2', 10, 4, '2022-11-28 03:21:06', NULL),
(461, 'TITA AGUSTINA AULIA RAHMAN', '0051356190', 'XI', '1', '2', 10, 4, '2022-11-28 03:21:06', NULL),
(462, 'VINA ANDINI', '0053388417', 'XI', '1', '2', 10, 4, '2022-11-28 03:21:06', NULL),
(463, 'AGIS HOIRUN NISA\'', '0067581410', 'XI', '2', '2', 10, 4, '2022-11-28 03:21:06', NULL),
(464, 'AHMAD ABU RIZAL ALGIFARI', '0053648904', 'XI', '2', '2', 10, 4, '2022-11-28 03:21:06', NULL),
(465, 'AHMAD DANIL', '0039309314', 'XI', '2', '2', 10, 4, '2022-11-28 03:21:06', NULL),
(466, 'ALFIA NURUZZ YADAH', '0059654014', 'XI', '2', '2', 10, 4, '2022-11-28 03:21:06', NULL),
(467, 'ANGIE SEPTIANING TIAS', '0066313513', 'XI', '2', '2', 10, 4, '2022-11-28 03:21:06', NULL),
(468, 'ARIL NURAINI', '0061117804', 'XI', '2', '2', 10, 4, '2022-11-28 03:21:06', NULL),
(469, 'CHAIRUNEISA FEBITRI CAHYANI', '0065797277', 'XI', '2', '2', 10, 4, '2022-11-28 03:21:06', NULL),
(470, 'DHEA AMANDA SAFITRI MAULANI', '0056600611', 'XI', '2', '2', 10, 4, '2022-11-28 03:21:06', NULL),
(471, 'DINY DWI AFDHOLUL LAILY', '0058408431', 'XI', '2', '2', 10, 4, '2022-11-28 03:21:06', NULL),
(472, 'DUWI DARMAWAN', '0058663212', 'XI', '2', '2', 10, 4, '2022-11-28 03:21:06', NULL),
(473, 'FIFIN NURUL ISNAINI', '0052965594', 'XI', '2', '2', 10, 4, '2022-11-28 03:21:06', NULL),
(474, 'GITA ABELIA NAJWA', '0057641857', 'XI', '2', '2', 10, 4, '2022-11-28 03:21:06', NULL),
(475, 'HILYAH FAIRUSIYAH', '0064145125', 'XI', '2', '2', 10, 4, '2022-11-28 03:21:06', NULL),
(476, 'JIHAN ZAHIROH WAHYUNI', '0057160445', 'XI', '2', '2', 10, 4, '2022-11-28 03:21:06', NULL),
(477, 'LATHIFATUL INTAN', '0062113082', 'XI', '2', '2', 10, 5, '2022-11-28 03:21:06', NULL),
(478, 'MAISAROH GAFERLI SAFITRI ADANI', '0056722856', 'XI', '2', '2', 10, 5, '2022-11-28 03:21:06', NULL),
(479, 'MOHAMMAD WAFI', '0057883618', 'XI', '2', '2', 10, 5, '2022-11-28 03:21:06', NULL),
(480, 'MUHAMMAD AZRIEL WAHYU RAMADHAN', '0055267636', 'XI', '2', '2', 10, 5, '2022-11-28 03:21:06', NULL),
(481, 'MUHAMMAD WILDAN', '0051408006', 'XI', '2', '2', 10, 5, '2022-11-28 03:21:06', NULL),
(482, 'NADIAH ZEHRO', '0056554511', 'XI', '2', '2', 10, 5, '2022-11-28 03:21:06', NULL),
(483, 'NINDI WARDAH KAMELIA', '0068456022', 'XI', '2', '2', 10, 5, '2022-11-28 03:21:06', NULL),
(484, 'NURUL FADILAH IRFANIA RAHAYU', '0056925915', 'XI', '2', '2', 10, 5, '2022-11-28 03:21:06', NULL),
(485, 'PUJI ANDAYANI', '0051864563', 'XI', '2', '2', 10, 5, '2022-11-28 03:21:06', NULL),
(486, 'RAHMAT EKA PRASETIYO', '0053937958', 'XI', '2', '2', 10, 5, '2022-11-28 03:21:06', NULL),
(487, 'RINDI OKTAVIA RAMADHANI', '0051998801', 'XI', '2', '2', 10, 5, '2022-11-28 03:21:06', NULL),
(488, 'RIZKI AMALIA', '0059729916', 'XI', '2', '2', 10, 5, '2022-11-28 03:21:06', NULL),
(489, 'ROSSA RIDIA DAMAYANTI', '0069015819', 'XI', '2', '2', 10, 5, '2022-11-28 03:21:06', NULL),
(490, 'SHELY LATANZIL', '0069625061', 'XI', '2', '2', 10, 5, '2022-11-28 03:21:06', NULL),
(491, 'SITI HOLIFAH', '0063105896', 'XI', '2', '2', 10, 5, '2022-11-28 03:21:06', NULL),
(492, 'SITTI NUR FAISAH', '0051303299', 'XI', '2', '2', 10, 5, '2022-11-28 03:21:06', NULL),
(493, 'TIARA MUTIAH JUWITA PUTRI', '0053157987', 'XI', '2', '2', 10, 5, '2022-11-28 03:21:06', NULL),
(494, 'ZINDA DWI APRILIA', '0058357930', 'XI', '2', '2', 10, 5, '2022-11-28 03:21:06', NULL),
(495, 'AHMAD SUBASTIAR IVANDY', '0055044693', 'XI', '1', '2', 13, 5, '2022-11-28 03:21:06', NULL),
(496, 'AINI NOR AFRIYANTI', '0064940081', 'XI', '1', '2', 13, 5, '2022-11-28 03:21:06', NULL),
(497, 'AURA YOGI OKTAVIANTI', '3053259568', 'XI', '1', '2', 13, 5, '2022-11-28 03:21:06', NULL),
(498, 'CAMILIA FAUZIYAH', '0061007089', 'XI', '1', '2', 13, 5, '2022-11-28 03:21:06', NULL),
(499, 'CINDY DWI RAMADHONA', '0055615179', 'XI', '1', '2', 13, 5, '2022-11-28 03:21:06', NULL),
(500, 'DELLA NATALIA MARGARETA', '0053576305', 'XI', '1', '2', 13, 5, '2022-11-28 03:21:06', NULL),
(501, 'DWI AYU KURNIAWAN', '0068395324', 'XI', '1', '2', 13, 5, '2022-11-28 03:21:06', NULL),
(502, 'DWI SAPTA HARNAWI', '0059402615', 'XI', '1', '2', 13, 5, '2022-11-28 03:21:06', NULL),
(503, 'EMILIA INSAN KAMILAH', '3057173832', 'XI', '1', '2', 13, 5, '2022-11-28 03:21:06', NULL),
(504, 'FITRI ANDRIYANI', '0062143155', 'XI', '1', '2', 13, 5, '2022-11-28 03:21:06', NULL),
(505, 'GRISNAYA AULIA HERIANTO', '0053186322', 'XI', '1', '2', 13, 5, '2022-11-28 03:21:06', NULL),
(506, 'ICHA AYUDYA FEBIANTI', '0062770338', 'XI', '1', '2', 13, 5, '2022-11-28 03:21:06', NULL),
(507, 'LAILY AZZAHRO SUPRAPTI', '0063605308', 'XI', '1', '2', 13, 5, '2022-11-28 03:21:06', NULL),
(508, 'MASYARUH HUSNOL KHOTIMAH', '0048481792', 'XI', '1', '2', 13, 5, '2022-11-28 03:21:06', NULL),
(509, 'MUHAMMAD AFIFANDI FIRMANSYAH', '0054964387', 'XI', '1', '2', 13, 6, '2022-11-28 03:21:06', NULL),
(510, 'NAVIZAH ADILA AYU', '0054534044', 'XI', '1', '2', 13, 6, '2022-11-28 03:21:06', NULL),
(511, 'PUTRI LEGINA NABILA SUHEIMY', '0062730936', 'XI', '1', '2', 13, 6, '2022-11-28 03:21:06', NULL),
(512, 'RENITA WAHYUNI PUTRI', '0057368568', 'XI', '1', '2', 13, 6, '2022-11-28 03:21:06', NULL),
(513, 'REVALIA PUTRI AGUSTINA', '0054143581', 'XI', '1', '2', 13, 6, '2022-11-28 03:21:06', NULL),
(514, 'SIFANIA SEPTIARINI', '0069567744', 'XI', '1', '2', 13, 6, '2022-11-28 03:21:06', NULL),
(515, 'SULISTIANA NINGSIH', '0053342404', 'XI', '1', '2', 13, 6, '2022-11-28 03:21:06', NULL),
(516, 'VALENTINO CHRISTIAN GUNAWAN', '0056789987', 'XI', '1', '2', 13, 6, '2022-11-28 03:21:06', NULL),
(517, 'ZALVA ZAHRIYA CHANIVA', '0058326983', 'XI', '1', '2', 13, 6, '2022-11-28 03:21:06', NULL),
(518, 'AFNUR NADILA', '0044950701', 'XI', '2', '2', 13, 6, '2022-11-28 03:21:06', NULL),
(519, 'AMALIYA NUR SALSABILLAH', '0052901261', 'XI', '2', '2', 13, 6, '2022-11-28 03:21:06', NULL),
(520, 'ANGGA FIRNANDO', '0062128602', 'XI', '2', '2', 13, 6, '2022-11-28 03:21:06', NULL),
(521, 'AVI DATUL HOIROH', '0063321255', 'XI', '2', '2', 13, 6, '2022-11-28 03:21:06', NULL),
(522, 'CHELSEA MARGARETHA OLIVIA WULANDARI', '0061583280', 'XI', '2', '2', 13, 6, '2022-11-28 03:21:06', NULL),
(523, 'DEA PUTRI AUREZATUL MAQFIROTH', '0054027016', 'XI', '2', '2', 13, 6, '2022-11-28 03:21:06', NULL),
(524, 'DINI AULIA BAHRI', '0067005654', 'XI', '2', '2', 13, 6, '2022-11-28 03:21:06', NULL),
(525, 'DWI PUTRI INDAH WAHYUNI', '0051033048', 'XI', '2', '2', 13, 6, '2022-11-28 03:21:06', NULL),
(526, 'FIRDA SEPTIAWATI', '0057898948', 'XI', '2', '2', 13, 6, '2022-11-28 03:21:06', NULL),
(527, 'FITRIYAH SHAFARINA EKA PUTRI', '0065026410', 'XI', '2', '2', 13, 6, '2022-11-28 03:21:06', NULL),
(528, 'HILMIYANTI', '0054431154', 'XI', '2', '2', 13, 6, '2022-11-28 03:21:06', NULL),
(529, 'KARINATUD DINIAH', '0058064794', 'XI', '2', '2', 13, 6, '2022-11-28 03:21:06', NULL),
(530, 'LATIFAH', '3055268327', 'XI', '2', '2', 13, 6, '2022-11-28 03:21:06', NULL),
(531, 'MERY MAHARANI AGUSTIN', '0057656590', 'XI', '2', '2', 13, 6, '2022-11-28 03:21:06', NULL),
(532, 'MOHAMMAD PURWADIANSYAH', '0055748654', 'XI', '2', '2', 13, 6, '2022-11-28 03:21:06', NULL),
(533, 'PUTRI ASIH', '0054106251', 'XI', '2', '2', 13, 6, '2022-11-28 03:21:06', NULL),
(534, 'QIQI AMELIA', '0055029656', 'XI', '2', '2', 13, 6, '2022-11-28 03:21:06', NULL),
(535, 'RETA', '0057054361', 'XI', '2', '2', 13, 6, '2022-11-28 03:21:06', NULL),
(536, 'RIANDINI TRISNAWATY', '0054518674', 'XI', '2', '2', 13, 6, '2022-11-28 03:21:06', NULL),
(537, 'SHYEROLINE MARIETTA LESMANA', '0065285696', 'XI', '2', '2', 13, 6, '2022-11-28 03:21:06', NULL);
INSERT INTO `siswa` (`id`, `nama`, `nisn`, `kelas`, `no_kelas`, `sesi`, `id_jurusan`, `id_ruangan`, `created_at`, `updated_at`) VALUES
(538, 'SITI NURHALISA', '0059069370', 'XI', '2', '2', 13, 7, '2022-11-28 03:21:06', NULL),
(539, 'UNSIATUL MAFRUROH', '0048047848', 'XI', '2', '2', 13, 7, '2022-11-28 03:21:06', NULL),
(540, 'ABHISTA FARREL KAROMAH HIBATULLAH', '0063547266', 'XI', '1', '2', 1, 7, '2022-11-28 03:21:06', NULL),
(541, 'AHMAD ABDILLAH FAZA', '0058404369', 'XI', '1', '2', 1, 7, '2022-11-28 03:21:06', NULL),
(542, 'ALIF ZAKY LUTFIANSYAH', '0055911821', 'XI', '1', '2', 1, 7, '2022-11-28 03:21:06', NULL),
(543, 'ARIL BENI SETIAWAN', '0053218284', 'XI', '1', '2', 1, 7, '2022-11-28 03:21:06', NULL),
(544, 'CHELO TASNIM HARYONO', '0065665455', 'XI', '1', '2', 1, 7, '2022-11-28 03:21:06', NULL),
(545, 'DAVA FARANEZAR', '0056997002', 'XI', '1', '2', 1, 7, '2022-11-28 03:21:06', NULL),
(546, 'DIMAS REGA ADIWIJAYA', '0054081655', 'XI', '1', '2', 1, 7, '2022-11-28 03:21:06', NULL),
(547, 'HARIS MOCHAMMAD ISHAK', '0069086093', 'XI', '1', '2', 1, 7, '2022-11-28 03:21:06', NULL),
(548, 'LUQMANAYA WAHIDAN SUTANTO', '0058406647', 'XI', '1', '2', 1, 7, '2022-11-28 03:21:06', NULL),
(549, 'MOHAMMAD DAVILAH AKBAR', '0043408629', 'XI', '1', '2', 1, 7, '2022-11-28 03:21:06', NULL),
(550, 'MOHAMMAD RAYHAN ZHIDAD', '0066908027', 'XI', '1', '2', 1, 7, '2022-11-28 03:21:06', NULL),
(551, 'MUHAMMAD GUFRON', '0044971753', 'XI', '1', '2', 1, 7, '2022-11-28 03:21:06', NULL),
(552, 'MUHAMMAD IKROM', '0064807502', 'XI', '1', '2', 1, 7, '2022-11-28 03:21:06', NULL),
(553, 'MUHAMMAD IRFAN UBAIDILLAH', '0062422081', 'XI', '1', '2', 1, 7, '2022-11-28 03:21:06', NULL),
(554, 'MUHAMMAD MAHRUS', '0055841851', 'XI', '1', '2', 1, 7, '2022-11-28 03:21:06', NULL),
(555, 'PUTRA ADITYA PERKASA', '0043568101', 'XI', '1', '2', 1, 7, '2022-11-28 03:21:06', NULL),
(556, 'RADHITIA PRATAMA EFFENDY', '0053652403', 'XI', '1', '2', 1, 7, '2022-11-28 03:21:06', NULL),
(557, 'RAYA GHANIYYA YUDA', '0067362875', 'XI', '1', '2', 1, 7, '2022-11-28 03:21:06', NULL),
(558, 'RISKI YANTONO AVIS', '0057454902', 'XI', '1', '2', 1, 7, '2022-11-28 03:21:06', NULL),
(559, 'RIZKY', '0069938069', 'XI', '1', '2', 1, 7, '2022-11-28 03:21:06', NULL),
(560, 'SITI QOMARIATUL MAULIDIA', '0053262980', 'XI', '1', '2', 1, 7, '2022-11-28 03:21:06', NULL),
(561, 'TABINA FAISA PRIBADI', '0068627439', 'XI', '1', '2', 1, 7, '2022-11-28 03:21:06', NULL),
(562, 'TEGUH WICHAKSONO', '0055818174', 'XI', '1', '2', 1, 7, '2022-11-28 03:21:06', NULL),
(563, 'WILDAN ZAKI AMALI', '0055162169', 'XI', '1', '2', 1, 7, '2022-11-28 03:21:06', NULL),
(564, 'YUVIAR NUZUL RAMADHANI', '0055416829', 'XI', '1', '2', 1, 8, '2022-11-28 03:21:06', NULL),
(565, 'ACHMAD ABDILLAH', '0066098207', 'XI', '2', '2', 1, 8, '2022-11-28 03:21:06', NULL),
(566, 'AKSIN LABIBUS SAID', '0056668212', 'XI', '2', '2', 1, 8, '2022-11-28 03:21:06', NULL),
(567, 'ANANTA WIDAYANI', '0064343214', 'XI', '2', '2', 1, 8, '2022-11-28 03:21:06', NULL),
(568, 'ARIF HIDAYATULLAH', '0059316753', 'XI', '2', '2', 1, 8, '2022-11-28 03:21:06', NULL),
(569, 'BIMA SATRIA PERMANA', '0068460028', 'XI', '2', '2', 1, 8, '2022-11-28 03:21:06', NULL),
(570, 'DAFANSYAH GILANG RAMADHAN', '0057870419', 'XI', '2', '2', 1, 8, '2022-11-28 03:21:06', NULL),
(571, 'DIMAS NURYADI SAPUTRA', '0067558773', 'XI', '2', '2', 1, 8, '2022-11-28 03:21:06', NULL),
(572, 'GALANG SAMUDRA EFENDI', '0055622207', 'XI', '2', '2', 1, 8, '2022-11-28 03:21:06', NULL),
(573, 'IMAM MUSTAQIM', '0055452858', 'XI', '2', '2', 1, 8, '2022-11-28 03:21:06', NULL),
(574, 'LUQMANUL HAKIM', '0055133474', 'XI', '2', '2', 1, 8, '2022-11-28 03:21:06', NULL),
(575, 'MOHAMMAD RADIT FIRMANZAH', '3058219190', 'XI', '2', '2', 1, 8, '2022-11-28 03:21:06', NULL),
(576, 'MUHAMMAD BAGAS RANDIYANTO', '0057723861', 'XI', '2', '2', 1, 8, '2022-11-28 03:21:06', NULL),
(577, 'MUHAMMAD IBNU AQIL', '0067123274', 'XI', '2', '2', 1, 8, '2022-11-28 03:21:06', NULL),
(578, 'MUHAMMAD ILMI RIZAL WARDANA SAFARI', '0054187658', 'XI', '2', '2', 1, 8, '2022-11-28 03:21:06', NULL),
(579, 'MUHAMMAD KABID GHITHRAF', '0066473243', 'XI', '2', '2', 1, 8, '2022-11-28 03:21:06', NULL),
(580, 'MUHAMMAD ZIDANE PUTRA DESWANTO', '0058596118', 'XI', '2', '2', 1, 8, '2022-11-28 03:21:06', NULL),
(581, 'RADHIT AUNULLAH ASSAJID', '0052342178', 'XI', '2', '2', 1, 8, '2022-11-28 03:21:06', NULL),
(582, 'RAFI AGUS LAKSONO', '0051247856', 'XI', '2', '2', 1, 8, '2022-11-28 03:21:06', NULL),
(583, 'RENO MUJIO RAHMAN', '0032803713', 'XI', '2', '2', 1, 8, '2022-11-28 03:21:06', NULL),
(584, 'RIVANDO PUTRA PRATAMA', '0051178317', 'XI', '2', '2', 1, 8, '2022-11-28 03:21:06', NULL),
(585, 'SITI RAUDATUL JANNAH', '0062048806', 'XI', '2', '2', 1, 8, '2022-11-28 03:21:06', NULL),
(586, 'SULTAN FACHRI AZIZ', '0053629109', 'XI', '2', '2', 1, 8, '2022-11-28 03:21:06', NULL),
(587, 'WILDAN AL AZIZ', '0067310766', 'XI', '2', '2', 1, 8, '2022-11-28 03:21:06', NULL),
(588, 'YOANRE LOUIS ALPHANABIUS HAZIRAN PERMADI', '0069386357', 'XI', '2', '2', 1, 8, '2022-11-28 03:21:06', NULL),
(589, 'ZASKIA AFRINA KHALIQ', '0068204415', 'XI', '2', '2', 1, 9, '2022-11-28 03:21:06', NULL),
(590, 'ADELIA OKTARINA', '0045969433', 'XII', '1', '2', 12, 9, '2022-11-28 03:21:06', NULL),
(591, 'ADHISTIAN NAZILAH', '0053643994', 'XII', '1', '2', 12, 9, '2022-11-28 03:21:06', NULL),
(592, 'ANANDA RIZQI BUDI PRATAMA', '0047253093', 'XII', '1', '2', 12, 9, '2022-11-28 03:21:06', NULL),
(593, 'ARDIYANTO ANSORI', '0044490147', 'XII', '1', '2', 12, 9, '2022-11-28 03:21:06', NULL),
(594, 'BENEDICTHA HASYA CANTIKA RACHMATILLA', '0044647294', 'XII', '1', '2', 12, 9, '2022-11-28 03:21:06', NULL),
(595, 'DIAN LILIANA', '0042843907', 'XII', '1', '2', 12, 9, '2022-11-28 03:21:06', NULL),
(596, 'DICKI SATRIO WIJAKSONO', '0043650986', 'XII', '1', '2', 12, 9, '2022-11-28 03:21:06', NULL),
(597, 'DITA AINUN PUTRI KOMARIYAH', '0048944905', 'XII', '1', '2', 12, 9, '2022-11-28 03:21:06', NULL),
(598, 'ELIATUS ZIADAH', '0043005163', 'XII', '1', '2', 12, 9, '2022-11-28 03:21:06', NULL),
(599, 'EZRA KRISMANKA URBANI', '0046850400', 'XII', '1', '2', 12, 9, '2022-11-28 03:21:06', NULL),
(600, 'FARREL EZZA KUSUMA FAHREZY', '0048538223', 'XII', '1', '2', 12, 9, '2022-11-28 03:21:06', NULL),
(601, 'FINDI DEWI NOVITA SARI', '0049024792', 'XII', '1', '2', 12, 9, '2022-11-28 03:21:06', NULL),
(602, 'HIKMATUL KHAROMAH', '0048312166', 'XII', '1', '2', 12, 9, '2022-11-28 03:21:06', NULL),
(603, 'IMELIA PRATIWI JULIANTI', '0046825412', 'XII', '1', '2', 12, 9, '2022-11-28 03:21:06', NULL),
(604, 'LAILA NUR HIKMA', '0052887209', 'XII', '1', '2', 12, 9, '2022-11-28 03:21:06', NULL),
(605, 'LINDA FEBRIYANTI', '0049516744', 'XII', '1', '2', 12, 9, '2022-11-28 03:21:06', NULL),
(606, 'MARETA DWI LESTARI', '0054312223', 'XII', '1', '2', 12, 9, '2022-11-28 03:21:06', NULL),
(607, 'MAULANA HAIRUL WAHIDI', '0049428025', 'XII', '1', '2', 12, 9, '2022-11-28 03:21:06', NULL),
(608, 'MOHAMMAD RIKO FERNANDO', '0047072135', 'XII', '1', '2', 12, 9, '2022-11-28 03:21:06', NULL),
(609, 'MUHAMMAD NUR BASTIAN KHOLILULLAH', '0053641955', 'XII', '1', '2', 12, 9, '2022-11-28 03:21:06', NULL),
(610, 'NADIYA IKA YULIANTI', '0042067148', 'XII', '1', '2', 12, 9, '2022-11-28 03:21:06', NULL),
(611, 'NING TYAS DEVI JULIARTI', '0047871418', 'XII', '1', '2', 12, 10, '2022-11-28 03:21:06', NULL),
(612, 'NOFITA SARI', '0049173985', 'XII', '1', '2', 12, 10, '2022-11-28 03:21:06', NULL),
(613, 'NUR SHARIKA', '0047940888', 'XII', '1', '2', 12, 10, '2022-11-28 03:21:06', NULL),
(614, 'PUTRI SOFIATUL MAULA', '0043105452', 'XII', '1', '2', 12, 10, '2022-11-28 03:21:06', NULL),
(615, 'REVALDI RIKIYONO', '0047677446', 'XII', '1', '2', 12, 10, '2022-11-28 03:21:06', NULL),
(616, 'SAFIRATUL HASANAH', '0042043137', 'XII', '1', '2', 12, 10, '2022-11-28 03:21:06', NULL),
(617, 'SILFI WULANDARI', '0057191758', 'XII', '1', '2', 12, 10, '2022-11-28 03:21:06', NULL),
(618, 'SITI AINUR ROHMAH', '0046367013', 'XII', '1', '2', 12, 10, '2022-11-28 03:21:06', NULL),
(619, 'SITI UMI KULSUM', '0044152443', 'XII', '1', '2', 12, 10, '2022-11-28 03:21:06', NULL),
(620, 'SITTI LUTVIAH', '0043885988', 'XII', '1', '2', 12, 10, '2022-11-28 03:21:06', NULL),
(621, 'TUTIYA MARINA', '0049076290', 'XII', '1', '2', 12, 10, '2022-11-28 03:21:06', NULL),
(622, 'WIDIA SAPUTRI DEWI', '0048891487', 'XII', '1', '2', 12, 10, '2022-11-28 03:21:06', NULL),
(623, 'ADELIA AMANDA PUTRI NUR WAHYUDI', '0052556188', 'XII', '2', '2', 12, 10, '2022-11-28 03:21:06', NULL),
(624, 'ADELIA TATIK DWI OKTAVIANA', '0051373253', 'XII', '2', '2', 12, 10, '2022-11-28 03:21:06', NULL),
(625, 'AININ MASRUROH', '0044468130', 'XII', '2', '2', 12, 10, '2022-11-28 03:21:06', NULL),
(626, 'ASMAUL JANNATUL FITRI', '0047919688', 'XII', '2', '2', 12, 10, '2022-11-28 03:21:06', NULL),
(627, 'DELA AYU LUHING PRIYANTI', '0055197986', 'XII', '2', '2', 12, 10, '2022-11-28 03:21:06', NULL),
(628, 'DENI YADI', '0047552464', 'XII', '2', '2', 12, 10, '2022-11-28 03:21:06', NULL),
(629, 'DINDA AURORANDIS ADENIA', '0045192016', 'XII', '2', '2', 12, 10, '2022-11-28 03:21:06', NULL),
(630, 'DWINDRI NUR ANGGRAINI', '0045768678', 'XII', '2', '2', 12, 10, '2022-11-28 03:21:06', NULL),
(631, 'ELVIRA NUR AMINAH', '0060070670', 'XII', '2', '2', 12, 10, '2022-11-28 03:21:06', NULL),
(632, 'FAHIR ABDUL HALIK', '0039218512', 'XII', '2', '2', 12, 10, '2022-11-28 03:21:06', NULL),
(633, 'FEBRI YANTI', '0056283288', 'XII', '2', '2', 12, 10, '2022-11-28 03:21:06', NULL),
(634, 'FIRDA NURAINI', '0043827104', 'XII', '2', '2', 12, 10, '2022-11-28 03:21:06', NULL),
(635, 'IMELDA DEA PITALOKA', '0049343101', 'XII', '2', '2', 12, 10, '2022-11-28 03:21:06', NULL),
(636, 'JEFRI RASIO', '0045281797', 'XII', '2', '2', 12, 10, '2022-11-28 03:21:06', NULL),
(637, 'KHAIRUN NISA\'', '0045701064', 'XII', '2', '2', 12, 10, '2022-11-28 03:21:06', NULL),
(638, 'LAILATUL AULIA', '0048319161', 'XII', '2', '2', 12, 11, '2022-11-28 03:21:06', NULL),
(639, 'LOLITA SEPTIA EKA SAPUTRI', '0046922737', 'XII', '2', '2', 12, 11, '2022-11-28 03:21:06', NULL),
(640, 'MOHAMMAD FADIL ZAENI', '0055176709', 'XII', '2', '2', 12, 11, '2022-11-28 03:21:06', NULL),
(641, 'MUHAMMAD BIRRIL', '0045718364', 'XII', '2', '2', 12, 11, '2022-11-28 03:21:06', NULL),
(642, 'MUHAMMAD RAIHAN MUHTAROMI', '0058584481', 'XII', '2', '2', 12, 11, '2022-11-28 03:21:06', NULL),
(643, 'MURTASIYATUN NAMIRAH', '0045289365', 'XII', '2', '2', 12, 11, '2022-11-28 03:21:06', NULL),
(644, 'NADIA STEFANI FEBRIANTI', '0056139244', 'XII', '2', '2', 12, 11, '2022-11-28 03:21:06', NULL),
(645, 'NAVISA SALSABILLA', '0066793485', 'XII', '2', '2', 12, 11, '2022-11-28 03:21:06', NULL),
(646, 'NOFI AYU RAMADANI', '0046938437', 'XII', '2', '2', 12, 11, '2022-11-28 03:21:06', NULL),
(647, 'NOVI RAHMAWATI', '0044969596', 'XII', '2', '2', 12, 11, '2022-11-28 03:21:06', NULL),
(648, 'PUTRI DWI ANDITA', '0049619240', 'XII', '2', '2', 12, 11, '2022-11-28 03:21:06', NULL),
(649, 'RENI TRI ANGGRAENI', '0058192749', 'XII', '2', '2', 12, 11, '2022-11-28 03:21:06', NULL),
(650, 'SEPTI TRIA ANANDA', '0047810307', 'XII', '2', '2', 12, 11, '2022-11-28 03:21:06', NULL),
(651, 'SINTA APRILIANI WULANDARI', '0045252585', 'XII', '2', '2', 12, 11, '2022-11-28 03:21:06', NULL),
(652, 'SITTI AYU WULANDARI', '0058344703', 'XII', '2', '2', 12, 11, '2022-11-28 03:21:06', NULL),
(653, 'WASIFATUL KARIMA', '0027569427', 'XII', '2', '2', 12, 11, '2022-11-28 03:21:06', NULL),
(654, 'YULI ANGGA TRI WAHYUDA', '0038607079', 'XII', '2', '2', 12, 11, '2022-11-28 03:21:06', NULL),
(655, 'ABEL AGUSTIN ANGGERAINI', '0054457226', 'XII', '1', '2', 10, 11, '2022-11-28 03:21:06', NULL),
(656, 'ANDINI', '0046046849', 'XII', '1', '2', 10, 11, '2022-11-28 03:21:06', NULL),
(657, 'ANGGA ARIGUSTI PRATAMA', '0046740561', 'XII', '1', '2', 10, 11, '2022-11-28 03:21:06', NULL),
(658, 'ARDILA HOLIFAH', '0051471767', 'XII', '1', '2', 10, 11, '2022-11-28 03:21:06', NULL),
(659, 'AYU PURNAMASARI', '0049966637', 'XII', '1', '2', 10, 11, '2022-11-28 03:21:06', NULL),
(660, 'DESY RIZKIYANI NURHALIZAH', '0049386528', 'XII', '1', '2', 10, 11, '2022-11-28 03:21:06', NULL),
(661, 'DEWI AYU SETIAWATI', '0046369604', 'XII', '1', '2', 10, 11, '2022-11-28 03:21:06', NULL),
(662, 'DIMAS PUTRA ADI PURNOMO', '0046798620', 'XII', '1', '2', 10, 11, '2022-11-28 03:21:06', NULL),
(663, 'DWI LUTVITA SARI', '0047223878', 'XII', '1', '2', 10, 11, '2022-11-28 03:21:06', NULL),
(664, 'DWI TRIYATI NURANI', '0045957576', 'XII', '1', '2', 10, 11, '2022-11-28 03:21:06', NULL),
(665, 'FEBY IRA SAFITRI', '0049721493', 'XII', '1', '2', 10, 12, '2022-11-28 03:21:06', NULL),
(666, 'GINA PUTRI EKA SUGIANTO', '0047074387', 'XII', '1', '2', 10, 12, '2022-11-28 03:21:06', NULL),
(667, 'HESTIANA', '0046781217', 'XII', '1', '2', 10, 12, '2022-11-28 03:21:06', NULL),
(668, 'JOVINTA DELLA INKA PUTRI', '0046131261', 'XII', '1', '2', 10, 12, '2022-11-28 03:21:06', NULL),
(669, 'JULIANTO NUGROHO', '0049257402', 'XII', '1', '2', 10, 12, '2022-11-28 03:21:06', NULL),
(670, 'KARIMAH ALYATUR ROSIDAH', '0044027079', 'XII', '1', '2', 10, 12, '2022-11-28 03:21:06', NULL),
(671, 'LIVIA SARI', '0051398011', 'XII', '1', '2', 10, 12, '2022-11-28 03:21:06', NULL),
(672, 'MOHAMMAD LUTFI', '0057317812', 'XII', '1', '2', 10, 12, '2022-11-28 03:21:06', NULL),
(673, 'MUTHIAH NAILA SALSABILA', '0067935648', 'XII', '1', '2', 10, 12, '2022-11-28 03:21:06', NULL),
(674, 'NIKEN AYU PURBALARAS', '0049650904', 'XII', '1', '2', 10, 12, '2022-11-28 03:21:06', NULL),
(675, 'PUTRI AINUR ROHIMAH', '0059261049', 'XII', '1', '2', 10, 12, '2022-11-28 03:21:06', NULL),
(676, 'RAHADIAN MOCHAMMAD GUSTI REZA', '0055040375', 'XII', '1', '2', 10, 12, '2022-11-28 03:21:06', NULL),
(677, 'RETA YOLANDA WULANDARI', '0051404552', 'XII', '1', '2', 10, 12, '2022-11-28 03:21:06', NULL),
(678, 'RINDA MUFEGA', '0045479561', 'XII', '1', '2', 10, 12, '2022-11-28 03:21:06', NULL),
(679, 'SINTA DWI AGUSTINA', '0042904362', 'XII', '1', '2', 10, 12, '2022-11-28 03:21:06', NULL),
(680, 'SITI FITRIYAH', '0045436798', 'XII', '1', '2', 10, 12, '2022-11-28 03:21:06', NULL),
(681, 'SITI NURAFIFAH', '0057456613', 'XII', '1', '2', 10, 12, '2022-11-28 03:21:06', NULL),
(682, 'SITI SYAFA KAMILA', '0042783411', 'XII', '1', '2', 10, 12, '2022-11-28 03:21:06', NULL),
(683, 'SITI YAFIAH AFAF', '0049875560', 'XII', '1', '2', 10, 12, '2022-11-28 03:21:06', NULL),
(684, 'TIA SUKMA AGUSTIN', '0048278781', 'XII', '1', '2', 10, 12, '2022-11-28 03:21:06', NULL),
(685, 'WARDATUL ASFIYAKH', '0056257813', 'XII', '1', '2', 10, 12, '2022-11-28 03:21:06', NULL),
(686, 'YESA MARIA SAFA', '0045817066', 'XII', '1', '2', 10, 12, '2022-11-28 03:21:06', NULL),
(687, 'ADITA WAHYUNINGTYAS TRISNOWATI', '0053822156', 'XII', '2', '2', 10, 12, '2022-11-28 03:21:06', NULL),
(688, 'AHMAD DENI VIRMANSYAH', '3044173094', 'XII', '2', '2', 10, 12, '2022-11-28 03:21:06', NULL),
(689, 'ANGGI INAYATUR ROHMATILLAH', '0057971159', 'XII', '2', '2', 10, 12, '2022-11-28 03:21:06', NULL),
(690, 'ANIS NUR DIANA SAFITRI', '0031009746', 'XII', '2', '2', 10, 12, '2022-11-28 03:21:06', NULL),
(691, 'ARINA SABILA HUSNA', '0041529281', 'XII', '2', '2', 10, 13, '2022-11-28 03:21:06', NULL),
(692, 'AYU SALSABILA', '0054366687', 'XII', '2', '2', 10, 13, '2022-11-28 03:21:06', NULL),
(693, 'CELVIN DWI SEPTIAN', '0057491343', 'XII', '2', '2', 10, 13, '2022-11-28 03:21:06', NULL),
(694, 'DEVINA NUR SHAROOF', '0055592922', 'XII', '2', '2', 10, 13, '2022-11-28 03:21:06', NULL),
(695, 'DEWI INDRIANI', '0047679182', 'XII', '2', '2', 10, 13, '2022-11-28 03:21:06', NULL),
(696, 'DWI SASI SUKMANINGTIAS', '0045252911', 'XII', '2', '2', 10, 13, '2022-11-28 03:21:06', NULL),
(697, 'ERVIN LAILATUL FEBRIANTI', '0052060639', 'XII', '2', '2', 10, 13, '2022-11-28 03:21:06', NULL),
(698, 'FINDANI AZZAHRAH', '0045015615', 'XII', '2', '2', 10, 13, '2022-11-28 03:21:06', NULL),
(699, 'HELMIATUN HASANAH', '0042449094', 'XII', '2', '2', 10, 13, '2022-11-28 03:21:06', NULL),
(700, 'IMELDA AGUSTIN', '0043106144', 'XII', '2', '2', 10, 13, '2022-11-28 03:21:06', NULL),
(701, 'IQBAL FIRDIYANSYAH', '0058585982', 'XII', '2', '2', 10, 13, '2022-11-28 03:21:06', NULL),
(702, 'KAMILIYA', '0043309435', 'XII', '2', '2', 10, 13, '2022-11-28 03:21:06', NULL),
(703, 'KHAIRUN NISA JANUAR DANIS', '0052922449', 'XII', '2', '2', 10, 13, '2022-11-28 03:21:06', NULL),
(704, 'MAULINA APRILIA RAHMAWATI', '0043008167', 'XII', '2', '2', 10, 13, '2022-11-28 03:21:06', NULL),
(705, 'MUHAMMAD ZAIROSI', '0038220957', 'XII', '2', '2', 10, 13, '2022-11-28 03:21:06', NULL),
(706, 'NADIA PRAWITHA DEWI', '0046961707', 'XII', '2', '2', 10, 13, '2022-11-28 03:21:06', NULL),
(707, 'NUR AINI INDI PRATIWI', '0043831300', 'XII', '2', '2', 10, 13, '2022-11-28 03:21:06', NULL),
(708, 'REINITA NUR AZIZAH', '0052938271', 'XII', '2', '2', 10, 13, '2022-11-28 03:21:06', NULL),
(709, 'RIKA EKA AULIA', '0056063221', 'XII', '2', '2', 10, 13, '2022-11-28 03:21:06', NULL),
(710, 'RITA YUNIA SARI', '0045566588', 'XII', '2', '2', 10, 13, '2022-11-28 03:21:06', NULL),
(711, 'SITI AISAH', '0045958810', 'XII', '2', '2', 10, 13, '2022-11-28 03:21:06', NULL),
(712, 'SITI HALIMAH', '0048996426', 'XII', '2', '2', 10, 13, '2022-11-28 03:21:06', NULL),
(713, 'SITI NURKHALISA APRILIA KARTIKA SARI', '0042868375', 'XII', '2', '2', 10, 13, '2022-11-28 03:21:06', NULL),
(714, 'SITI WAHIDAH HAIRUN NISA', '0031802799', 'XII', '2', '2', 10, 13, '2022-11-28 03:21:06', NULL),
(715, 'TYAS DRAS DISTIS TIANA', '0055392124', 'XII', '2', '2', 10, 13, '2022-11-28 03:21:06', NULL),
(716, 'WIJIATI', '0048070012', 'XII', '2', '2', 10, 13, '2022-11-28 03:21:06', NULL),
(717, 'YULI DENIANTO', '0059131446', 'XII', '2', '2', 10, 13, '2022-11-28 03:21:06', NULL),
(718, 'AZURA FEBRY KUSUMAWARDANI', '0054751305', 'XII', '1', '2', 13, 13, '2022-11-28 03:21:06', NULL),
(719, 'BABUN HIDAYANTI', '0053761590', 'XII', '1', '2', 13, 13, '2022-11-28 03:21:06', NULL),
(720, 'CAHYA NABILA MUKHLISA PUTRI', '0043145898', 'XII', '1', '2', 13, 13, '2022-11-28 03:21:06', NULL),
(721, 'CAMELIATUL AINI', '0049604763', 'XII', '1', '3', 13, 1, '2022-11-28 03:21:06', NULL),
(722, 'CINDI ARISTA SARI', '0048859095', 'XII', '1', '3', 13, 1, '2022-11-28 03:21:06', NULL),
(723, 'DELA ULFA ELISA AINI', '0041848098', 'XII', '1', '3', 13, 1, '2022-11-28 03:21:06', NULL),
(724, 'DEWI ANGGIANI', '0044883370', 'XII', '1', '3', 13, 1, '2022-11-28 03:21:06', NULL),
(725, 'DHESTIN CANTIKA MULIA ANERAY', '0041110460', 'XII', '1', '3', 13, 1, '2022-11-28 03:21:06', NULL),
(726, 'DIAN LESTARI', '0053047312', 'XII', '1', '3', 13, 1, '2022-11-28 03:21:06', NULL),
(727, 'DINA USWATUN HASANAH', '0048218494', 'XII', '1', '3', 13, 1, '2022-11-28 03:21:06', NULL),
(728, 'DWI ERINA SEPTIA', '0045212693', 'XII', '1', '3', 13, 1, '2022-11-28 03:21:06', NULL),
(729, 'FARADILA AYU LESTARI', '0047798204', 'XII', '1', '3', 13, 1, '2022-11-28 03:21:06', NULL),
(730, 'FATIMATUS ZAHRO', '0058435161', 'XII', '1', '3', 13, 1, '2022-11-28 03:21:06', NULL),
(731, 'FIRANI YUNIAR', '0058658176', 'XII', '1', '3', 13, 1, '2022-11-28 03:21:06', NULL),
(732, 'IKA ARSITA', '0041062805', 'XII', '1', '3', 13, 1, '2022-11-28 03:21:06', NULL),
(733, 'IMELIA ZAHROTUL AWALIYAH', '0055868819', 'XII', '1', '3', 13, 1, '2022-11-28 03:21:06', NULL),
(734, 'INTAN SOVIA TRI HANDAYANI', '0053744258', 'XII', '1', '3', 13, 1, '2022-11-28 03:21:06', NULL),
(735, 'KEVIN ADISTIAH', '0045293143', 'XII', '1', '3', 13, 1, '2022-11-28 03:21:06', NULL),
(736, 'LOVI EKA BARETHA', '0047308039', 'XII', '1', '3', 13, 1, '2022-11-28 03:21:06', NULL),
(737, 'MARTHA SAFIRA', '0046530649', 'XII', '1', '3', 13, 1, '2022-11-28 03:21:06', NULL),
(738, 'MUHAMMAD ROFIK AL FARISI', '0047239350', 'XII', '1', '3', 13, 1, '2022-11-28 03:21:06', NULL),
(739, 'MUHAMMAD UBAYDILLAH', '0047769196', 'XII', '1', '3', 13, 1, '2022-11-28 03:21:06', NULL),
(740, 'NABILA NURLITASARI', '0053494907', 'XII', '1', '3', 13, 1, '2022-11-28 03:21:06', NULL),
(741, 'NANDA MAUDHATUL FITRIA SHELSABILLA', '0045192010', 'XII', '1', '3', 13, 1, '2022-11-28 03:21:06', NULL),
(742, 'NANDINI RIFDA EKA YULISTIA', '0055729805', 'XII', '1', '3', 13, 1, '2022-11-28 03:21:06', NULL),
(743, 'NAYSILA PUTRI SAFIRA', '0048272854', 'XII', '1', '3', 13, 1, '2022-11-28 03:21:06', NULL),
(744, 'NING INDAH KUMALASARI', '0049817070', 'XII', '1', '3', 13, 1, '2022-11-28 03:21:06', NULL),
(745, 'NINIS AGUSTINA', '0025297637', 'XII', '1', '3', 13, 2, '2022-11-28 03:21:06', NULL),
(746, 'NUR ASIYAH AYU WULANDARI', '0045800416', 'XII', '1', '3', 13, 2, '2022-11-28 03:21:06', NULL),
(747, 'PUTRI LARASSATI', '0048646713', 'XII', '1', '3', 13, 2, '2022-11-28 03:21:06', NULL),
(748, 'ROBIATUS SOLEHAH', '0042209676', 'XII', '1', '3', 13, 2, '2022-11-28 03:21:06', NULL),
(749, 'ROFIATUL HASANAH', '0052580611', 'XII', '1', '3', 13, 2, '2022-11-28 03:21:06', NULL),
(750, 'SISKA FEBRIYANTI', '0058055946', 'XII', '1', '3', 13, 2, '2022-11-28 03:21:06', NULL),
(751, 'SRI WAHYUNI UTAMI', '0054204907', 'XII', '1', '3', 13, 2, '2022-11-28 03:21:06', NULL),
(752, 'VINA IQOMATURROHMAH', '0045226890', 'XII', '1', '3', 13, 2, '2022-11-28 03:21:06', NULL),
(753, 'AFREZA RADHITYA BRAMASTA', '0058706040', 'XII', '1', '3', 11, 2, '2022-11-28 03:21:06', NULL),
(754, 'AMILIA FEBINA ZAHROTUNNISA', '0056147928', 'XII', '1', '3', 11, 2, '2022-11-28 03:21:06', NULL),
(755, 'ANDRIANTO', '0035021420', 'XII', '1', '3', 11, 2, '2022-11-28 03:21:06', NULL),
(756, 'ARIEL GUSTI HIDAYAT', '0056212145', 'XII', '1', '3', 11, 2, '2022-11-28 03:21:06', NULL),
(757, 'AYU WULANDARI', '0042168523', 'XII', '1', '3', 11, 2, '2022-11-28 03:21:06', NULL),
(758, 'DANI SAPUTRA', '0064276973', 'XII', '1', '3', 11, 2, '2022-11-28 03:21:06', NULL),
(759, 'DELA NUR AINI', '0043863035', 'XII', '1', '3', 11, 2, '2022-11-28 03:21:06', NULL),
(760, 'DESITA ANGRAINI NURHASANAH', '0043002547', 'XII', '1', '3', 11, 2, '2022-11-28 03:21:06', NULL),
(761, 'EKA FERDIAN SYAH', '0049404385', 'XII', '1', '3', 11, 2, '2022-11-28 03:21:06', NULL),
(762, 'EKO DONI SETYAWAN', '0049115897', 'XII', '1', '3', 11, 2, '2022-11-28 03:21:06', NULL),
(763, 'EMILIA AGUSTIN', '0045816107', 'XII', '1', '3', 11, 2, '2022-11-28 03:21:06', NULL),
(764, 'EVA MARDHIATUN NISA', '0046967365', 'XII', '1', '3', 11, 2, '2022-11-28 03:21:06', NULL),
(765, 'FATHOR RANGGA', '0047010646', 'XII', '1', '3', 11, 2, '2022-11-28 03:21:06', NULL),
(766, 'INDRI AURA AFRILIA', '0055482960', 'XII', '1', '3', 11, 2, '2022-11-28 03:21:06', NULL),
(767, 'LAELATUL KODRIAH', '0045953399', 'XII', '1', '3', 11, 2, '2022-11-28 03:21:06', NULL),
(768, 'MISBAHUL ANAM', '0048603668', 'XII', '1', '3', 11, 2, '2022-11-28 03:21:06', NULL),
(769, 'MOHAMMAD AFRIZAL AKBAR', '0053521523', 'XII', '1', '3', 11, 2, '2022-11-28 03:21:06', NULL),
(770, 'MUHAMMAD ALDY JANUAR', '0056006212', 'XII', '1', '3', 11, 2, '2022-11-28 03:21:06', NULL),
(771, 'MUHAMMAD FAREL BASORI', '0051500778', 'XII', '1', '3', 11, 2, '2022-11-28 03:21:06', NULL),
(772, 'MUHAMMAD HIMAWAN IQBAL', '0052201419', 'XII', '1', '3', 11, 2, '2022-11-28 03:21:06', NULL),
(773, 'NABILA TRI INSIYAH', '0035923958', 'XII', '1', '3', 11, 2, '2022-11-28 03:21:06', NULL),
(774, 'NURUL HAKIKI', '0033809883', 'XII', '1', '3', 11, 2, '2022-11-28 03:21:06', NULL),
(775, 'PRITA DWI ARI WINANTA', '0053080939', 'XII', '1', '3', 11, 3, '2022-11-28 03:21:06', NULL),
(776, 'PUTRI TANTRI AYU', '0049805428', 'XII', '1', '3', 11, 3, '2022-11-28 03:21:06', NULL),
(777, 'REVY AULIA PUTRI', '0055282812', 'XII', '1', '3', 11, 3, '2022-11-28 03:21:06', NULL),
(778, 'SELLA OKTAFIA', '0034348762', 'XII', '1', '3', 11, 3, '2022-11-28 03:21:06', NULL),
(779, 'SHELA TITANIA', '0055233752', 'XII', '1', '3', 11, 3, '2022-11-28 03:21:06', NULL),
(780, 'SIFAUL RAHMANIAH', '0059425946', 'XII', '1', '3', 11, 3, '2022-11-28 03:21:06', NULL),
(781, 'SITI FITRIYAH', '0042246336', 'XII', '1', '3', 11, 3, '2022-11-28 03:21:06', NULL),
(782, 'SURO DWI SUKARYADI', '0033845563', 'XII', '1', '3', 11, 3, '2022-11-28 03:21:06', NULL),
(783, 'USWATUL HASANAH', '0044733809', 'XII', '1', '3', 11, 3, '2022-11-28 03:21:06', NULL),
(784, 'WIDATUL HASANAH', '0042989452', 'XII', '1', '3', 11, 3, '2022-11-28 03:21:06', NULL),
(785, 'AGUS WAHYUDI', '0046125648', 'XII', '2', '3', 11, 3, '2022-11-28 03:21:06', NULL),
(786, 'ANISA PUTRI VALENTINA', '0055115444', 'XII', '2', '3', 11, 3, '2022-11-28 03:21:06', NULL),
(787, 'ANUGRAH ADE AJI FIRDAUS', '0056609251', 'XII', '2', '3', 11, 3, '2022-11-28 03:21:06', NULL),
(788, 'AYU APRILIA DWI FEBRIANTI', '0042581992', 'XII', '2', '3', 11, 3, '2022-11-28 03:21:06', NULL),
(789, 'BEILLA NOVINDA MARDHATILAH SARI', '0048034562', 'XII', '2', '3', 11, 3, '2022-11-28 03:21:06', NULL),
(790, 'CANDRA ROIHAN SETIA', '3051304545', 'XII', '2', '3', 11, 3, '2022-11-28 03:21:06', NULL),
(791, 'DECKY HENDRAWAN JHONIARTO', '0061795379', 'XII', '2', '3', 11, 3, '2022-11-28 03:21:06', NULL),
(792, 'DELA PUSPITA', '0054155708', 'XII', '2', '3', 11, 3, '2022-11-28 03:21:06', NULL),
(793, 'DIFA AGUSTIN', '0041929010', 'XII', '2', '3', 11, 3, '2022-11-28 03:21:06', NULL),
(794, 'EKA YULI ROHMATUL AZISAH', '0043995618', 'XII', '2', '3', 11, 3, '2022-11-28 03:21:06', NULL),
(795, 'ENGGAR ADI SAPUTRA', '0054680661', 'XII', '2', '3', 11, 3, '2022-11-28 03:21:06', NULL),
(796, 'ERFIN AMRILLAH', '0054083478', 'XII', '2', '3', 11, 3, '2022-11-28 03:21:06', NULL),
(797, 'FENTY FEBRIANTY', '0056903366', 'XII', '2', '3', 11, 3, '2022-11-28 03:21:06', NULL),
(798, 'FERI MARDIANSYAH', '0046930248', 'XII', '2', '3', 11, 3, '2022-11-28 03:21:06', NULL),
(799, 'HALIMATUS SAKDIA', '0067350825', 'XII', '2', '3', 11, 3, '2022-11-28 03:21:06', NULL),
(800, 'JINANI FIRDAUSIAH', '0069213776', 'XII', '2', '3', 11, 3, '2022-11-28 03:21:06', NULL),
(801, 'LAILATUL SILSILAH', '3048012602', 'XII', '2', '3', 11, 3, '2022-11-28 03:21:06', NULL),
(802, 'MOCH. FEBRIYAN', '0042242814', 'XII', '2', '3', 11, 4, '2022-11-28 03:21:06', NULL),
(803, 'MOHAMMAD ANDRIE FERIANTO', '3044022794', 'XII', '2', '3', 11, 4, '2022-11-28 03:21:06', NULL),
(804, 'MUHAMMAD FARHAN MAULANA', '0056201921', 'XII', '2', '3', 11, 4, '2022-11-28 03:21:06', NULL),
(805, 'MUHAMMAD REZA WIJAYANTO', '0047816256', 'XII', '2', '3', 11, 4, '2022-11-28 03:21:06', NULL),
(806, 'NADIA ARI SYANDI', '0058705797', 'XII', '2', '3', 11, 4, '2022-11-28 03:21:06', NULL),
(807, 'NURGITA APRILIA', '0056943461', 'XII', '2', '3', 11, 4, '2022-11-28 03:21:06', NULL),
(808, 'PUTRI AYU APRILIA', '0058463861', 'XII', '2', '3', 11, 4, '2022-11-28 03:21:06', NULL),
(809, 'RANI ASMARANI', '0055622716', 'XII', '2', '3', 11, 4, '2022-11-28 03:21:06', NULL),
(810, 'RENGGA TRI WIJAYA', '0045263773', 'XII', '2', '3', 11, 4, '2022-11-28 03:21:06', NULL),
(811, 'SAKDIYAH', '0051710341', 'XII', '2', '3', 11, 4, '2022-11-28 03:21:06', NULL),
(812, 'SAVIRA MEILINDA SARI', '0056544312', 'XII', '2', '3', 11, 4, '2022-11-28 03:21:06', NULL),
(813, 'SEPTI AMALIA', '0047766236', 'XII', '2', '3', 11, 4, '2022-11-28 03:21:06', NULL),
(814, 'SHELFI WULANDARI', '0053492854', 'XII', '2', '3', 11, 4, '2022-11-28 03:21:06', NULL),
(815, 'SINTA EKA APRILIA', '0057419646', 'XII', '2', '3', 11, 4, '2022-11-28 03:21:06', NULL),
(816, 'SITI NURUL JANNAH', '0047355064', 'XII', '2', '3', 11, 4, '2022-11-28 03:21:06', NULL),
(817, 'UBAIDILLAH', '0053541044', 'XII', '2', '3', 11, 4, '2022-11-28 03:21:06', NULL),
(818, 'WINDA RAMADHANI', '3040512772', 'XII', '2', '3', 11, 4, '2022-11-28 03:21:06', NULL),
(819, 'AHMAD RISQI ', '0044601681', 'XII', '3', '3', 11, 4, '2022-11-28 03:21:06', NULL),
(820, 'AISYATUR RIDHA', '0042107400', 'XII', '3', '3', 11, 4, '2022-11-28 03:21:06', NULL),
(821, 'APRILIA MARIA ULFA', '0027149671', 'XII', '3', '3', 11, 4, '2022-11-28 03:21:06', NULL),
(822, 'ARIEF RACHMAN SYAH', '0060074198', 'XII', '3', '3', 11, 4, '2022-11-28 03:21:06', NULL),
(823, 'AYU NUR ISTIQOMAH', '0051761231', 'XII', '3', '3', 11, 4, '2022-11-28 03:21:06', NULL),
(824, 'CINTA SALSABILA', '0048053709', 'XII', '3', '3', 11, 4, '2022-11-28 03:21:06', NULL),
(825, 'COKRO YUDHA KUSUMA', '0046241737', 'XII', '3', '3', 11, 4, '2022-11-28 03:21:06', NULL),
(826, 'DESI ADELIA NINGTYAS', '0046799826', 'XII', '3', '3', 11, 4, '2022-11-28 03:21:06', NULL),
(827, 'DIMAS RISKI MAULANA', '0045229853', 'XII', '3', '3', 11, 4, '2022-11-28 03:21:06', NULL),
(828, 'DWI OKTAVIANA', '0046552651', 'XII', '3', '3', 11, 4, '2022-11-28 03:21:06', NULL),
(829, 'EMI SHERLIANA LARAS SAPUTRI', '0025294263', 'XII', '3', '3', 11, 4, '2022-11-28 03:21:06', NULL),
(830, 'ERVIN ROSITA WARDATUL AINI', '0044231279', 'XII', '3', '3', 11, 4, '2022-11-28 03:21:06', NULL),
(831, 'FARAKIANZAH PERDANA PUTRA', '0046480134', 'XII', '3', '3', 11, 4, '2022-11-28 03:21:06', NULL),
(832, 'FITRIYAH', '1234567891', 'XII', '3', '3', 11, 4, '2022-11-28 03:21:06', NULL),
(833, 'INDRA FIRMANDA', '0048976539', 'XII', '3', '3', 11, 4, '2022-11-28 03:21:06', NULL),
(834, 'JUANA', '0045920863', 'XII', '3', '3', 11, 4, '2022-11-28 03:21:06', NULL),
(835, 'MOCHAMMAD HUMAIDI', '0045350970', 'XII', '3', '3', 11, 4, '2022-11-28 03:21:06', NULL),
(836, 'MUHAMMAD AGUNG APRIANTO', '0046062533', 'XII', '3', '3', 11, 4, '2022-11-28 03:21:06', NULL),
(837, 'MUHAMMAD EGY', '0047164889', 'XII', '3', '3', 11, 5, '2022-11-28 03:21:06', NULL),
(838, 'MUHAMMAD FATHOR RASI', '0033760068', 'XII', '3', '3', 11, 5, '2022-11-28 03:21:06', NULL),
(839, 'MUHAMMAD SLAMET WIJAKSONO', '0057570056', 'XII', '3', '3', 11, 5, '2022-11-28 03:21:06', NULL),
(840, 'NABILA FIRDAUS', '0047860118', 'XII', '3', '3', 11, 5, '2022-11-28 03:21:06', NULL),
(841, 'NADIA MARETA ANGGRAINI', '0058061159', 'XII', '3', '3', 11, 5, '2022-11-28 03:21:06', NULL),
(842, 'NURUL QOMARIYAH', '3047335766', 'XII', '3', '3', 11, 5, '2022-11-28 03:21:06', NULL),
(843, 'PUTRI NANDA AMILIA', '0049033019', 'XII', '3', '3', 11, 5, '2022-11-28 03:21:06', NULL),
(844, 'RONI ISKANDAR', '0041486433', 'XII', '3', '3', 11, 5, '2022-11-28 03:21:06', NULL),
(845, 'SEVIAH MARDIYAH ROHMI', '0053612790', 'XII', '3', '3', 11, 5, '2022-11-28 03:21:06', NULL),
(846, 'SHERLLY MARATUL HASANAH', '0044545741', 'XII', '3', '3', 11, 5, '2022-11-28 03:21:06', NULL),
(847, 'SITI FAISZATI AMINI', '0048926512', 'XII', '3', '3', 11, 5, '2022-11-28 03:21:06', NULL),
(848, 'SITI RAUDATUL HASANAH', '0058333035', 'XII', '3', '3', 11, 5, '2022-11-28 03:21:06', NULL),
(849, 'VIDIA LAILATUS ZAHRO', '0051189102', 'XII', '3', '3', 11, 5, '2022-11-28 03:21:06', NULL),
(850, 'ZAHRATUL NISAH', '0057240491', 'XII', '3', '3', 11, 5, '2022-11-28 03:21:06', NULL),
(851, 'ABDUL KAFI', '0056579610', 'XII', '1', '3', 4, 5, '2022-11-28 03:21:06', NULL),
(852, 'ABDULLAH ABDUL KADIR AL HAMID', '0057440698', 'XII', '1', '3', 4, 5, '2022-11-28 03:21:06', NULL),
(853, 'ADE TANANTO SETIAWAN', '0037201389', 'XII', '1', '3', 4, 5, '2022-11-28 03:21:06', NULL),
(854, 'AGUNG HADI PRASETYO', '0051142968', 'XII', '1', '3', 4, 5, '2022-11-28 03:21:06', NULL),
(855, 'AHMAD FADIL SAPUTRA', '0045530135', 'XII', '1', '3', 4, 5, '2022-11-28 03:21:06', NULL),
(856, 'AHMAD RIVAL NUR WAHYUDIANTO', '0036289715', 'XII', '1', '3', 4, 5, '2022-11-28 03:21:06', NULL),
(857, 'AKBAR MAULIDI RISKIAWAN', '0045212668', 'XII', '1', '3', 4, 5, '2022-11-28 03:21:06', NULL),
(858, 'ALI ZAENAL ABIDIN', '3023344434', 'XII', '1', '3', 4, 5, '2022-11-28 03:21:06', NULL),
(859, 'ANDIK RAHMAT SUGIARTO', '0045135393', 'XII', '1', '3', 4, 5, '2022-11-28 03:21:06', NULL),
(860, 'ANWAR NURIST', '0035565689', 'XII', '1', '3', 4, 5, '2022-11-28 03:21:06', NULL),
(861, 'ARDIANSAH DWI YULIANTO', '0037325172', 'XII', '1', '3', 4, 5, '2022-11-28 03:21:06', NULL),
(862, 'FERDIO DWI SYAPUTRA', '0049365112', 'XII', '1', '3', 4, 5, '2022-11-28 03:21:06', NULL),
(863, 'FIKRI SOFI', '0043020804', 'XII', '1', '3', 4, 5, '2022-11-28 03:21:06', NULL),
(864, 'HELMI SIDDIKI', '0042202414', 'XII', '1', '3', 4, 5, '2022-11-28 03:21:06', NULL),
(865, 'MAMLUATUL INAYAH', '0058226277', 'XII', '1', '3', 4, 5, '2022-11-28 03:21:06', NULL),
(866, 'MARS FANDA HABDI SAPUTRA', '0039885598', 'XII', '1', '3', 4, 5, '2022-11-28 03:21:06', NULL),
(867, 'MOHAMAD ROFIQI', '0033044338', 'XII', '1', '3', 4, 5, '2022-11-28 03:21:06', NULL),
(868, 'MOHAMMAD AKBAR FIRMAN WAHID', '0047617404', 'XII', '1', '3', 4, 5, '2022-11-28 03:21:06', NULL),
(869, 'MOHAMMAD FARHAN ARIZONA', '0046914249', 'XII', '1', '3', 4, 6, '2022-11-28 03:21:06', NULL),
(870, 'MUHAMAD AZKA MUHTADI WAJHILLAH', '0058912981', 'XII', '1', '3', 4, 6, '2022-11-28 03:21:06', NULL),
(871, 'MUHAMAD ZAINUL UMAM', '0059125569', 'XII', '1', '3', 4, 6, '2022-11-28 03:21:06', NULL),
(872, 'MUHAMMAD ANSORY', '3048786707', 'XII', '1', '3', 4, 6, '2022-11-28 03:21:06', NULL),
(873, 'MUHAMMAD DICKA HENDRIYANTO', '0051471759', 'XII', '1', '3', 4, 6, '2022-11-28 03:21:06', NULL),
(874, 'MUHAMMAD HAFIFUDDIN SUHUD', '0041466294', 'XII', '1', '3', 4, 6, '2022-11-28 03:21:06', NULL),
(875, 'MUHAMMAD IZZAT AL AYYUBI', '0047383255', 'XII', '1', '3', 4, 6, '2022-11-28 03:21:06', NULL),
(876, 'MUHAMMAD SAYFUDIN', '0047452835', 'XII', '1', '3', 4, 6, '2022-11-28 03:21:06', NULL),
(877, 'MUHAMMAD ZALAHUDIN WAHID', '0043977737', 'XII', '1', '3', 4, 6, '2022-11-28 03:21:06', NULL),
(878, 'RAHMAD ZAINUR ARIFIN', '0057103788', 'XII', '1', '3', 4, 6, '2022-11-28 03:21:06', NULL),
(879, 'RAIHAN GILANG SAPUTRA', '0057314925', 'XII', '1', '3', 4, 6, '2022-11-28 03:21:06', NULL),
(880, 'SAFIUDIN', '0053011744', 'XII', '1', '3', 4, 6, '2022-11-28 03:21:06', NULL),
(881, 'TRI FEBRI ADIYANTO', '0029833500', 'XII', '1', '3', 4, 6, '2022-11-28 03:21:06', NULL),
(882, 'TRIO MAULANA ADITYA APRIYANTO', '0051010099', 'XII', '1', '3', 4, 6, '2022-11-28 03:21:06', NULL),
(883, 'WAHYU NIKITA CHAIRUNNISA', '0041443962', 'XII', '1', '3', 4, 6, '2022-11-28 03:21:06', NULL),
(884, 'WALDI GUSTIAR IZZUL VIKRI', '0039625812', 'XII', '1', '3', 4, 6, '2022-11-28 03:21:06', NULL),
(885, 'ABDUL WAHID ATTAMIMI', '0049542662', 'XII', '2', '3', 4, 6, '2022-11-28 03:21:06', NULL),
(886, 'ADAM BAHTIAR', '0049369692', 'XII', '2', '3', 4, 6, '2022-11-28 03:21:06', NULL),
(887, 'ADITYA EKA PRASETYA', '0055519934', 'XII', '2', '3', 4, 6, '2022-11-28 03:21:06', NULL),
(888, 'AHMAD BAIHAKI', '3046290780', 'XII', '2', '3', 4, 6, '2022-11-28 03:21:06', NULL),
(889, 'AHMAD LUTFI', '0053384171', 'XII', '2', '3', 4, 6, '2022-11-28 03:21:06', NULL),
(890, 'AHMAD ZUHAIR YUSUF', '0044031526', 'XII', '2', '3', 4, 6, '2022-11-28 03:21:06', NULL),
(891, 'ALDIAN SYAHRIL', '0042887106', 'XII', '2', '3', 4, 6, '2022-11-28 03:21:06', NULL),
(892, 'AMINUDIN', '0052285547', 'XII', '2', '3', 4, 6, '2022-11-28 03:21:06', NULL),
(893, 'ANGGA PUTRA PERMATA', '0056641741', 'XII', '2', '3', 4, 6, '2022-11-28 03:21:06', NULL),
(894, 'DEVITA FAUZIAH', '0047824617', 'XII', '2', '3', 4, 6, '2022-11-28 03:21:06', NULL),
(895, 'DHIMAS MAULANA FIRMANSYAH', '0054232076', 'XII', '2', '3', 4, 6, '2022-11-28 03:21:06', NULL),
(896, 'FARAH SALSABILA ROHMA', '0057404056', 'XII', '2', '3', 4, 6, '2022-11-28 03:21:06', NULL),
(897, 'FAUZAN ABDILLAH IBRAHIMI', '0044588192', 'XII', '2', '3', 4, 6, '2022-11-28 03:21:06', NULL),
(898, 'FIKRI FIRMANSYAH', '0045355487', 'XII', '2', '3', 4, 7, '2022-11-28 03:21:06', NULL),
(899, 'HAFIZH VIRGIAWAN ADIWIDYA', '0045212691', 'XII', '2', '3', 4, 7, '2022-11-28 03:21:06', NULL),
(900, 'MARIO SERAF MARANTIKA', '0055362875', 'XII', '2', '3', 4, 7, '2022-11-28 03:21:06', NULL),
(901, 'MOCHAMMAD JEFRI WIJAYA', '0047533925', 'XII', '2', '3', 4, 7, '2022-11-28 03:21:06', NULL),
(902, 'MOHAMMAD FAIZAL FANANI', '0044045117', 'XII', '2', '3', 4, 7, '2022-11-28 03:21:06', NULL),
(903, 'MOHAMMAD SHOVIAN HABIBURRAHMAN', '0057008246', 'XII', '2', '3', 4, 7, '2022-11-28 03:21:06', NULL),
(904, 'MUHAMAD FAUZAN', '3031448132', 'XII', '2', '3', 4, 7, '2022-11-28 03:21:06', NULL),
(905, 'MUHAMMAD AFANDI', '0042466897', 'XII', '2', '3', 4, 7, '2022-11-28 03:21:06', NULL),
(906, 'MUHAMMAD ALVANI MUBAROQ', '0052724631', 'XII', '2', '3', 4, 7, '2022-11-28 03:21:06', NULL),
(907, 'MUHAMMAD BIN ABDILLAH HAMADAH', '0057521166', 'XII', '2', '3', 4, 7, '2022-11-28 03:21:06', NULL),
(908, 'MUHAMMAD FATAH AL AQIL', '3057366948', 'XII', '2', '3', 4, 7, '2022-11-28 03:21:06', NULL),
(909, 'MUHAMMAD HASAN KAMIL', '0039287015', 'XII', '2', '3', 4, 7, '2022-11-28 03:21:06', NULL),
(910, 'MUHAMMAD RIDWAN', '0046869565', 'XII', '2', '3', 4, 7, '2022-11-28 03:21:06', NULL),
(911, 'MUHAMMAD SAHROFI', '0046195336', 'XII', '2', '3', 4, 7, '2022-11-28 03:21:06', NULL),
(912, 'MUHAMMAD ZAINURI', '0048735309', 'XII', '2', '3', 4, 7, '2022-11-28 03:21:06', NULL),
(913, 'RAHMAT JUNAYDI', '0046955523', 'XII', '2', '3', 4, 7, '2022-11-28 03:21:06', NULL),
(914, 'ROKHID HASYIM ASHARY', '0032566822', 'XII', '2', '3', 4, 7, '2022-11-28 03:21:06', NULL),
(915, 'TRI WULANDARI', '0048489530', 'XII', '2', '3', 4, 7, '2022-11-28 03:21:06', NULL),
(916, 'TRIMADA BACHTIAR', '0043205099', 'XII', '2', '3', 4, 7, '2022-11-28 03:21:06', NULL),
(917, 'VITO ZACKY ZAFRIZAL', '0058167657', 'XII', '2', '3', 4, 7, '2022-11-28 03:21:06', NULL),
(918, 'YANUAR LUKMAN HAKIM', '0051260449', 'XII', '2', '3', 4, 7, '2022-11-28 03:21:06', NULL),
(919, 'ACHMAD GHANIIY FEBRIANTO', '0056385652', 'XII', '1', '3', 3, 7, '2022-11-28 03:21:06', NULL),
(920, 'AGIL AFRIANTO', '0051556390', 'XII', '1', '3', 3, 7, '2022-11-28 03:21:06', NULL),
(921, 'AHMAD WIDAD', '0053252097', 'XII', '1', '3', 3, 7, '2022-11-28 03:21:06', NULL),
(922, 'ANGELYNA REKARHISMA MARSAKA NOVANTOSO', '0058728376', 'XII', '1', '3', 3, 7, '2022-11-28 03:21:06', NULL),
(923, 'ARIL BAHTIAR', '0056701640', 'XII', '1', '3', 3, 7, '2022-11-28 03:21:06', NULL),
(924, 'ARINI AMALIAH PUTRI', '0046654518', 'XII', '1', '3', 3, 8, '2022-11-28 03:21:06', NULL),
(925, 'BAGUS TIAR DWI CAHYO', '0042063458', 'XII', '1', '3', 3, 8, '2022-11-28 03:21:06', NULL),
(926, 'BELLA TUTIK MUSTIKA', '0047432102', 'XII', '1', '3', 3, 8, '2022-11-28 03:21:06', NULL),
(927, 'BIMA CAESAR ALFARABI', '0045139204', 'XII', '1', '3', 3, 8, '2022-11-28 03:21:06', NULL),
(928, 'DERA DIAH ALFIANA', '0046375911', 'XII', '1', '3', 3, 8, '2022-11-28 03:21:06', NULL),
(929, 'DEVAN BAGUS EFRIYANSYAH', '0053043267', 'XII', '1', '3', 3, 8, '2022-11-28 03:21:06', NULL),
(930, 'DEWI NUR CINTA PUTRI', '0049244209', 'XII', '1', '3', 3, 8, '2022-11-28 03:21:06', NULL),
(931, 'DWI ULFA YUSRIAH', '0047218843', 'XII', '1', '3', 3, 8, '2022-11-28 03:21:06', NULL),
(932, 'FEBY YUSI NANDHA SURAHMAT', '0052241248', 'XII', '1', '3', 3, 8, '2022-11-28 03:21:06', NULL),
(933, 'FIRDAUS YOGIAGUSTIN', '0045893237', 'XII', '1', '3', 3, 8, '2022-11-28 03:21:06', NULL),
(934, 'IVAN AFANDI', '3030170233', 'XII', '1', '3', 3, 8, '2022-11-28 03:21:06', NULL),
(935, 'KUN MAULANA HIDAYATULLAH', '0045571389', 'XII', '1', '3', 3, 8, '2022-11-28 03:21:06', NULL),
(936, 'NADIA NUR AFIFAH', '0052221045', 'XII', '1', '3', 3, 8, '2022-11-28 03:21:06', NULL),
(937, 'RAIHAN HANIF', '0041464639', 'XII', '1', '3', 3, 8, '2022-11-28 03:21:06', NULL),
(938, 'REYHAN FERGIANANDA APRIDIYANTO', '0044675461', 'XII', '1', '3', 3, 8, '2022-11-28 03:21:06', NULL),
(939, 'ROSTIA AMANDA GUSAMARTHA', '0055913425', 'XII', '1', '3', 3, 8, '2022-11-28 03:21:06', NULL),
(940, 'RYAN ADI SAPUTRA', '0043953665', 'XII', '1', '3', 3, 8, '2022-11-28 03:21:06', NULL),
(941, 'SAPTIA HIDAYATUL JANNAH', '0054844074', 'XII', '1', '3', 3, 8, '2022-11-28 03:21:06', NULL),
(942, 'SAVINA DWI AGNEZYA WULANDARI', '0048793461', 'XII', '1', '3', 3, 8, '2022-11-28 03:21:06', NULL),
(943, 'SHOKHIBUL HIKAM', '0047718477', 'XII', '1', '3', 3, 8, '2022-11-28 03:21:06', NULL),
(944, 'TEUKU MUHAMMAD FIRMANSYAH PUTRA RAMADHAN', '0045646003', 'XII', '1', '3', 3, 8, '2022-11-28 03:21:06', NULL),
(945, 'VICKY HARDIYANSAH', '0058708357', 'XII', '1', '3', 3, 8, '2022-11-28 03:21:06', NULL),
(946, 'WAHYU PRABOWO PUTRA', '0054605823', 'XII', '1', '3', 3, 8, '2022-11-28 03:21:06', NULL),
(947, 'ACHMAD SHENDY UBAYDILLAH', '0051352932', 'XII', '2', '3', 3, 8, '2022-11-28 03:21:06', NULL),
(948, 'AHMAD IRGI AFGIAN SYAH', '0038033618', 'XII', '2', '3', 3, 8, '2022-11-28 03:21:06', NULL),
(949, 'AILSA FEBRY ANGGRAINI', '0047313708', 'XII', '2', '3', 3, 9, '2022-11-28 03:21:06', NULL),
(950, 'ALAUDIN AL ATHARI', '0049606559', 'XII', '2', '3', 3, 9, '2022-11-28 03:21:06', NULL),
(951, 'ANANDA ADITYA FIRMANSYAH', '0041743427', 'XII', '2', '3', 3, 9, '2022-11-28 03:21:06', NULL),
(952, 'ANISA LIYANTI', '0045603515', 'XII', '2', '3', 3, 9, '2022-11-28 03:21:06', NULL),
(953, 'ARJUNDA VIRGO AL FIZHAM', '0045015660', 'XII', '2', '3', 3, 9, '2022-11-28 03:21:06', NULL),
(954, 'AYU DEWI HARTINI', '0048925476', 'XII', '2', '3', 3, 9, '2022-11-28 03:21:06', NULL),
(955, 'BAKIR ZAINI', '0049163027', 'XII', '2', '3', 3, 9, '2022-11-28 03:21:06', NULL),
(956, 'CATHERINA PUTRI HUTABARAT', '0048580026', 'XII', '2', '3', 3, 9, '2022-11-28 03:21:06', NULL),
(957, 'DENI KUSUMA', '0059039448', 'XII', '2', '3', 3, 9, '2022-11-28 03:21:06', NULL),
(958, 'DESI WULANDARI', '0038536730', 'XII', '2', '3', 3, 9, '2022-11-28 03:21:06', NULL),
(959, 'DIMAS APRILIAN WAHYU PRATAMA', '0044563623', 'XII', '2', '3', 3, 9, '2022-11-28 03:21:06', NULL),
(960, 'DWI AYU RATNA DEWI', '0058531776', 'XII', '2', '3', 3, 9, '2022-11-28 03:21:06', NULL),
(961, 'FANI ADELIA PUTRI', '0043656905', 'XII', '2', '3', 3, 9, '2022-11-28 03:21:06', NULL),
(962, 'GEVIRA EDIS DWI FEBRIAN', '0054779268', 'XII', '2', '3', 3, 9, '2022-11-28 03:21:06', NULL),
(963, 'HAIRUL ANAM', '0057802669', 'XII', '2', '3', 3, 9, '2022-11-28 03:21:06', NULL),
(964, 'HASTIAN SULTAN WIBISONO', '0052415821', 'XII', '2', '3', 3, 9, '2022-11-28 03:21:06', NULL),
(965, 'ISMAIL GUSTY BINTANG PRATAMA', '0044721310', 'XII', '2', '3', 3, 9, '2022-11-28 03:21:06', NULL),
(966, 'JULIANTO PRATAMA PUTRA', '0047572132', 'XII', '2', '3', 3, 9, '2022-11-28 03:21:06', NULL),
(967, 'MOCHAMMAD NUR RIZQI PRATAMA', '0052537526', 'XII', '2', '3', 3, 9, '2022-11-28 03:21:06', NULL),
(968, 'MUHAMMAD HENDRIK IRVAN ZHIDNI', '0046905666', 'XII', '2', '3', 3, 9, '2022-11-28 03:21:06', NULL),
(969, 'MUHAMMAD UBAIDILLAH AZMI FIRDAUS', '0052477470', 'XII', '2', '3', 3, 9, '2022-11-28 03:21:06', NULL),
(970, 'RAKAN FAJRIYANTO', '0046084166', 'XII', '2', '3', 3, 9, '2022-11-28 03:21:06', NULL),
(971, 'RAYHAN SYAHDANA WICAKSONO', '0057004273', 'XII', '2', '3', 3, 10, '2022-11-28 03:21:06', NULL),
(972, 'SAFA PUTRI ASZAHRO', '0045326525', 'XII', '2', '3', 3, 10, '2022-11-28 03:21:06', NULL),
(973, 'SARIFAH MUTIARA FATIMAH', '0051758369', 'XII', '2', '3', 3, 10, '2022-11-28 03:21:06', NULL),
(974, 'SEPTIO ADITYA CANDRA', '0045862031', 'XII', '2', '3', 3, 10, '2022-11-28 03:21:06', NULL),
(975, 'TEUKU MUHAMMAD PASYA WIRASATYA', '0054479605', 'XII', '2', '3', 3, 10, '2022-11-28 03:21:06', NULL),
(976, 'TIARA SUSAN FUADYAH', '0057931420', 'XII', '2', '3', 3, 10, '2022-11-28 03:21:06', NULL),
(977, 'WAHYU ANANDA', '0047920653', 'XII', '2', '3', 3, 10, '2022-11-28 03:21:06', NULL),
(978, 'ACHMAD BAYU AL GHOZALI', '0046795176', 'XII', '1', '3', 1, 10, '2022-11-28 03:21:06', NULL),
(979, 'ADAM BARIERA', '0057778762', 'XII', '1', '3', 1, 10, '2022-11-28 03:21:06', NULL),
(980, 'ADITIA FIRMANSYAH', '0041703191', 'XII', '1', '3', 1, 10, '2022-11-28 03:21:06', NULL),
(981, 'AHMAD UBAIDILLAH', '0047726419', 'XII', '1', '3', 1, 10, '2022-11-28 03:21:06', NULL),
(982, 'ARIEL FARHAN FAHREZI', '0051693557', 'XII', '1', '3', 1, 10, '2022-11-28 03:21:06', NULL),
(983, 'DICKY MAULIA EKA SAPUTRA', '0058468157', 'XII', '1', '3', 1, 10, '2022-11-28 03:21:06', NULL),
(984, 'DIMAS AHMADIYANTO', '0049334036', 'XII', '1', '3', 1, 10, '2022-11-28 03:21:06', NULL),
(985, 'ELISA OKTAVIANA', '0044765904', 'XII', '1', '3', 1, 10, '2022-11-28 03:21:06', NULL),
(986, 'FIRMAN ADIANSYAH', '0052632128', 'XII', '1', '3', 1, 10, '2022-11-28 03:21:06', NULL),
(987, 'HAYDAR REZA FIRDAUS', '0045041166', 'XII', '1', '3', 1, 10, '2022-11-28 03:21:06', NULL),
(988, 'IMELDA ALIFATUNNUR', '0049488243', 'XII', '1', '3', 1, 10, '2022-11-28 03:21:06', NULL),
(989, 'IVAN VARENDURI', '0046592632', 'XII', '1', '3', 1, 10, '2022-11-28 03:21:06', NULL),
(990, 'KATOH ABI MANYU SAPUTRA', '0047062759', 'XII', '1', '3', 1, 10, '2022-11-28 03:21:06', NULL),
(991, 'MOCHAMMAD HENGKY DWI SEPTYAN', '0049570035', 'XII', '1', '3', 1, 10, '2022-11-28 03:21:06', NULL),
(992, 'MUCH. RIZKY BRILIANTO', '0045831850', 'XII', '1', '3', 1, 10, '2022-11-28 03:21:06', NULL),
(993, 'MUHAMMAD AIDAN BAZMUL', '0045836933', 'XII', '1', '3', 1, 10, '2022-11-28 03:21:06', NULL),
(994, 'MUHAMMAD DIMAS HARDIYANTO', '0047485251', 'XII', '1', '3', 1, 10, '2022-11-28 03:21:06', NULL),
(995, 'MUHAMMAD IVAN AVANSYAH', '0043974270', 'XII', '1', '3', 1, 10, '2022-11-28 03:21:06', NULL),
(996, 'MUHAMMAD NOR KHOLIT', '0048672784', 'XII', '1', '3', 1, 10, '2022-11-28 03:21:06', NULL),
(997, 'MUHAMMAD ZAFIL', '0038301341', 'XII', '1', '3', 1, 10, '2022-11-28 03:21:06', NULL),
(998, 'NASHWA FAJRI LUSYYANA', '3058993705', 'XII', '1', '3', 1, 11, '2022-11-28 03:21:06', NULL),
(999, 'NURUL HADI', '0047238783', 'XII', '1', '3', 1, 11, '2022-11-28 03:21:06', NULL),
(1000, 'RENDY WAHYU WARDANA', '0053000404', 'XII', '1', '3', 1, 11, '2022-11-28 03:21:06', NULL),
(1001, 'RYAN MAULANA', '0055739364', 'XII', '1', '3', 1, 11, '2022-11-28 03:21:06', NULL),
(1002, 'SAVEMA AURELIANDARU IRAWAN', '0053637549', 'XII', '1', '3', 1, 11, '2022-11-28 03:21:06', NULL),
(1003, 'SELDI ADI PURWANTO', '0047044943', 'XII', '1', '3', 1, 11, '2022-11-28 03:21:06', NULL),
(1004, 'SITTI KHOTIJAH', '0054610739', 'XII', '1', '3', 1, 11, '2022-11-28 03:21:06', NULL),
(1005, 'TAMPAN OKTAVIAND', '0044145697', 'XII', '1', '3', 1, 11, '2022-11-28 03:21:06', NULL),
(1006, 'ULFANIYAH', '0043970870', 'XII', '1', '3', 1, 11, '2022-11-28 03:21:06', NULL),
(1007, 'YANUAR ANTAMA SAIYA', '0041687682', 'XII', '1', '3', 1, 11, '2022-11-28 03:21:06', NULL),
(1008, 'ZAKIA DAHLIA KUMALASARI', '0044355395', 'XII', '1', '3', 1, 11, '2022-11-28 03:21:06', NULL),
(1009, 'ACHMAD ZIDAN', '0045389180', 'XII', '2', '3', 1, 11, '2022-11-28 03:21:06', NULL),
(1010, 'ADI GUNAWAN', '0048034789', 'XII', '2', '3', 1, 11, '2022-11-28 03:21:06', NULL),
(1011, 'AHMAD JA\'FAR SHODIQ', '0044928751', 'XII', '2', '3', 1, 11, '2022-11-28 03:21:06', NULL),
(1012, 'ARI FAHURRAHMAN', '0034642047', 'XII', '2', '3', 1, 11, '2022-11-28 03:21:06', NULL),
(1013, 'DHEDEN SANDIKA', '0045483496', 'XII', '2', '3', 1, 11, '2022-11-28 03:21:06', NULL),
(1014, 'DIMAS ADITYA DERMAWAN', '0044087942', 'XII', '2', '3', 1, 11, '2022-11-28 03:21:06', NULL),
(1015, 'EFRILIANSAH PUTRA MAUALANA', '0056224016', 'XII', '2', '3', 1, 11, '2022-11-28 03:21:06', NULL),
(1016, 'FAIKATUL HIKMAH', '0056740739', 'XII', '2', '3', 1, 11, '2022-11-28 03:21:06', NULL),
(1017, 'FERDIANSYAH LUKMANA', '0054384263', 'XII', '2', '3', 1, 11, '2022-11-28 03:21:06', NULL),
(1018, 'GILANG WAGYANT NARENDRA', '0049750394', 'XII', '2', '3', 1, 11, '2022-11-28 03:21:06', NULL),
(1019, 'IKG WISNU SATRYO NUGROHO', '0037313734', 'XII', '2', '3', 1, 11, '2022-11-28 03:21:06', NULL),
(1020, 'MAULANA ALI MUBAROK', '0056232307', 'XII', '2', '3', 1, 11, '2022-11-28 03:21:06', NULL),
(1021, 'MAULITA APRILIANTI', '0055723279', 'XII', '2', '3', 1, 11, '2022-11-28 03:21:06', NULL),
(1022, 'MOCHAMMAD RIZKI FEBRIAN', '0051401455', 'XII', '2', '3', 1, 11, '2022-11-28 03:21:06', NULL),
(1023, 'MOHAMMAD IMRON', '0052156021', 'XII', '2', '3', 1, 11, '2022-11-28 03:21:06', NULL),
(1024, 'MUHAMMAD ADE MARSA', '0044746685', 'XII', '2', '3', 1, 11, '2022-11-28 03:21:06', NULL),
(1025, 'MUHAMMAD AKRAM GHATAFF', '0055188756', 'XII', '2', '3', 1, 12, '2022-11-28 03:21:06', NULL),
(1026, 'MUHAMMAD IQBAL ILYAS', '0045133845', 'XII', '2', '3', 1, 12, '2022-11-28 03:21:06', NULL),
(1027, 'MUHAMMAD KAVIN', '0056106946', 'XII', '2', '3', 1, 12, '2022-11-28 03:21:06', NULL),
(1028, 'MUHAMMAD RIZAL ARIFIN PUTRA', '0044409487', 'XII', '2', '3', 1, 12, '2022-11-28 03:21:06', NULL),
(1029, 'MUHAMMAD ZAUKI', '0046027880', 'XII', '2', '3', 1, 12, '2022-11-28 03:21:06', NULL),
(1030, 'NINDI SEPVIA WINDAYANTI', '0055324447', 'XII', '2', '3', 1, 12, '2022-11-28 03:21:06', NULL),
(1031, 'RAFLI FIRMANSYAH', '0051524315', 'XII', '2', '3', 1, 12, '2022-11-28 03:21:06', NULL),
(1032, 'RISKI ALIFFATUR RAHMAN', '0051820513', 'XII', '2', '3', 1, 12, '2022-11-28 03:21:06', NULL),
(1033, 'SANDHY DWI HARYANTO', '0045014563', 'XII', '2', '3', 1, 12, '2022-11-28 03:21:06', NULL),
(1034, 'SITI NURHALIMAH', '0023385591', 'XII', '2', '3', 1, 12, '2022-11-28 03:21:06', NULL),
(1035, 'SONI IRMANSYAH', '0033727452', 'XII', '2', '3', 1, 12, '2022-11-28 03:21:06', NULL),
(1036, 'TANANDA SERLIAND GADISYAH HANDOKO', '0056980487', 'XII', '2', '3', 1, 12, '2022-11-28 03:21:06', NULL),
(1037, 'VIRGO WARDHANA', '0044899797', 'XII', '2', '3', 1, 12, '2022-11-28 03:21:06', NULL),
(1038, 'YOLANDA EKA WICAKSONO', '0042046047', 'XII', '2', '3', 1, 12, '2022-11-28 03:21:06', NULL),
(1039, 'ZARA SAFIRA', '0078534956', 'XII', '2', '3', 1, 12, '2022-11-28 03:21:06', NULL),
(1040, 'ADITYA', '0047163920', 'XII', '1', '3', 9, 12, '2022-11-28 03:21:06', NULL),
(1041, 'AHMAD RAFLI ALFARIZI', '0043149169', 'XII', '1', '3', 9, 12, '2022-11-28 03:21:06', NULL),
(1042, 'AHMAD ZAYYADI', '0056395750', 'XII', '1', '3', 9, 12, '2022-11-28 03:21:06', NULL),
(1043, 'AJIB ZAUHUDI', '0054171125', 'XII', '1', '3', 9, 12, '2022-11-28 03:21:06', NULL),
(1044, 'AKBAR IMAM RAHMATULLAH', '0036061835', 'XII', '1', '3', 9, 12, '2022-11-28 03:21:06', NULL),
(1045, 'ALDY EKO HARYANTO', '0049957845', 'XII', '1', '3', 9, 12, '2022-11-28 03:21:06', NULL),
(1046, 'ALIF RIFLI ABDILLAH', '0046053208', 'XII', '1', '3', 9, 12, '2022-11-28 03:21:06', NULL),
(1047, 'BAHTIAR PRASETYA WIDIAWAN', '0053556036', 'XII', '1', '3', 9, 12, '2022-11-28 03:21:06', NULL),
(1048, 'DELA ARDISTIKA', '0054658646', 'XII', '1', '3', 9, 12, '2022-11-28 03:21:06', NULL),
(1049, 'IRA HAWA HABSYIAHWATI', '0045187239', 'XII', '1', '3', 9, 12, '2022-11-28 03:21:06', NULL),
(1050, 'ISWATUR RAFI\'AH', '0052519804', 'XII', '1', '3', 9, 12, '2022-11-28 03:21:06', NULL),
(1051, 'MAHFIROH MAUDI RIMBASARI', '0056066032', 'XII', '1', '3', 9, 13, '2022-11-28 03:21:06', NULL),
(1052, 'MOHAMMAD ABDUL GANI MUTTAQIN', '0028502143', 'XII', '1', '3', 9, 13, '2022-11-28 03:21:06', NULL),
(1053, 'MUHAMMAD FARHAN BARLAMAN ANSORRULLAH', '0044973308', 'XII', '1', '3', 9, 13, '2022-11-28 03:21:06', NULL),
(1054, 'MUHAMMAD NASRIL IRHAM ALDIANSYAH', '0052893078', 'XII', '1', '3', 9, 13, '2022-11-28 03:21:06', NULL),
(1055, 'MUHAMMAD NURUL HAFIFI', '0054357037', 'XII', '1', '3', 9, 13, '2022-11-28 03:21:06', NULL),
(1056, 'MUHAMMAD YUDA ARIF FIRMANSYAH', '0025459068', 'XII', '1', '3', 9, 13, '2022-11-28 03:21:06', NULL),
(1057, 'MUSRIATUL JANNAH', '0047547213', 'XII', '1', '3', 9, 13, '2022-11-28 03:21:06', NULL),
(1058, 'NIXON SUPIAN LENTONIUS', '0057448697', 'XII', '1', '3', 9, 13, '2022-11-28 03:21:06', NULL),
(1059, 'RAMADANI', '0032889429', 'XII', '1', '3', 9, 13, '2022-11-28 03:21:06', NULL),
(1060, 'RINTANA ABELA SOFIYA', '0049526179', 'XII', '1', '3', 9, 13, '2022-11-28 03:21:06', NULL),
(1061, 'RIZKY RAMADHAN', '0034785459', 'XII', '1', '3', 9, 13, '2022-11-28 03:21:06', NULL),
(1062, 'SUBAHUL KARIMAH', '0047526095', 'XII', '1', '3', 9, 13, '2022-11-28 03:21:06', NULL),
(1063, 'UMIYATUN MUAYYADAH', '0051325225', 'XII', '1', '3', 9, 13, '2022-11-28 03:21:06', NULL);
INSERT INTO `siswa` (`id`, `nama`, `nisn`, `kelas`, `no_kelas`, `sesi`, `id_jurusan`, `id_ruangan`, `created_at`, `updated_at`) VALUES
(1064, 'YAYANG DWI DARMAWAN', '0055481282', 'XII', '1', '3', 9, 13, '2022-11-28 03:21:06', NULL),
(1065, 'ZAINURRAHMAN', '0046550152', 'XII', '1', '3', 9, 13, '2022-11-28 03:21:06', NULL),
(1066, 'ADAM RAHMAT ANDIKA', '0045974787', 'XII', '1', '3', 14, 13, '2022-11-28 03:21:06', NULL),
(1067, 'GUNAWAN TRI WAHYUDI', '0033169119', 'XII', '1', '3', 14, 13, '2022-11-28 03:21:06', NULL),
(1068, 'HAYYAN TAUHIDY', '0044930268', 'XII', '1', '3', 14, 13, '2022-11-28 03:21:06', NULL),
(1069, 'IGARIA', '0049159023', 'XII', '1', '3', 14, 13, '2022-11-28 03:21:06', NULL),
(1070, 'JOFIAN JOKO YULISTIONO', '0048557192', 'XII', '1', '3', 14, 13, '2022-11-28 03:21:06', NULL),
(1071, 'M. NICCO ANDRIANO', '0049185369', 'XII', '1', '3', 14, 13, '2022-11-28 03:21:06', NULL),
(1072, 'MOCHAMMAD DODIK FIRMANSAH', '0043848301', 'XII', '1', '3', 14, 13, '2022-11-28 03:21:06', NULL),
(1073, 'MOHAMMAD HASBI DWI FEBRIYANTO', '0048268146', 'XII', '1', '3', 14, 13, '2022-11-28 03:21:06', NULL),
(1074, 'MUHAMMAD AFRISA MAULIDI', '0052953416', 'XII', '1', '3', 14, 13, '2022-11-28 03:21:06', NULL),
(1075, 'MUHAMMAD WAFI RIJLI NUROH', '0046363571', 'XII', '1', '3', 14, 13, '2022-11-28 03:21:06', NULL),
(1076, 'PRYALDO AL-MUBASYSYIROT', '0048426437', 'XII', '1', '3', 14, 13, '2022-11-28 03:21:06', NULL),
(1077, 'SUNIATUL HASANAH', '0036164358', 'XII', '1', '3', 14, 13, '2022-11-28 03:21:06', NULL),
(1078, 'TAUFIKUR ROHMAN', '0058755508', 'XII', '1', '3', 14, 13, '2022-11-28 03:21:06', NULL),
(1079, 'ZAIDAN ABDILLAH RAFFIF', '0045731259', 'XII', '1', '3', 14, 13, '2022-11-28 03:21:06', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1, 'labkkpi2', '$2y$10$aJX8y4zpeL/5PxPQAfmnge.z6VSlJIbm9isaSdBGMd09jjY9DWhle', NULL, '2022-11-29 06:34:12', '2022-11-29 06:34:12', 'teknisi'),
(2, 'labkkpi3', '$2y$10$R1xvXoT/.2lqmqmKSg6s5OKoEgKA6tmbAJ9o5Hr20Jxx/IYVy5e82', NULL, '2022-11-29 06:34:12', '2022-11-29 06:34:12', 'teknisi'),
(3, 'labkkpi4', '$2y$10$mj4nF6kLlHFv8KRb/rj8SeRl84ypdwH9j3/d5tn5Gg0qCKPXInQKO', NULL, '2022-11-29 06:34:12', '2022-11-29 06:34:12', 'teknisi'),
(4, 'labakl', '$2y$10$s7WGr0ZrdUwk2F8CbZyQyuWvZGXyTR.tubhO61PTOnYfe6Ispvt1i', NULL, '2022-11-29 06:34:12', '2022-11-29 06:34:12', 'teknisi'),
(5, 'labotkp', '$2y$10$WsjY6XXT1Lq0nPt8vZ1queAxlynmkN12MTabi8dWLhPcCd5fMpgTG', NULL, '2022-11-29 06:34:12', '2022-11-29 06:34:12', 'teknisi'),
(6, 'labrpl', '$2y$10$vuL0aTU9bzFzxprjJm4MrugMkdKuCBtqDr3XshIPgWxBYek.rygLK', NULL, '2022-11-29 06:34:12', '2022-11-29 06:34:12', 'teknisi'),
(7, 'labmm', '$2y$10$Hgq2YWHmPSDuypYR.MZdQeFw56CWFbxiFo8DZcFOZkE31UOgASNc6', NULL, '2022-11-29 06:34:12', '2022-11-29 06:34:12', 'teknisi'),
(8, 'lablan', '$2y$10$q7XPYHMVnskdWAgEZyHeIO95BKUNqfqylFuvxSINJkybuJ67.ZC7q', NULL, '2022-11-29 06:34:12', '2022-11-29 06:34:12', 'teknisi'),
(9, 'labwan', '$2y$10$5JD48snK31tpHt51DULD/.hizmdUG9mPQ5904qkxX8/SzCzvOYH/C', NULL, '2022-11-29 06:34:12', '2022-11-29 06:34:12', 'teknisi'),
(10, 'labkkpi5', '$2y$10$4MhOZPLk5GyZn89sCMGXCeh5S9RtXIgiA0d7zH819r7gLKCg4jMyK', NULL, '2022-11-29 06:34:12', '2022-11-29 06:34:12', 'teknisi'),
(11, 'labkkpi6', '$2y$10$JSy5CfmriXe3CpaIv83peO/5eA0tWn.y6J7HN9hnn5xVNFJZfyCcG', NULL, '2022-11-29 06:34:12', '2022-11-29 06:34:12', 'teknisi'),
(12, 'labpkm', '$2y$10$A.QQy9/8aBl5t0BbOc3P7.Zc1KNON9vOT8uaVAxWHBJuKG70BzUmS', NULL, '2022-11-29 06:34:12', '2022-11-29 06:34:12', 'teknisi'),
(13, 'labbdp', '$2y$10$uOg9X.QE80oAUxVglbkqUuGzs9fOj.9FtBfjM64DhfzeLJsVPGILC', NULL, '2022-11-29 06:34:13', '2022-11-29 06:34:13', 'teknisi'),
(14, 'admin123', '$2y$10$sw3c0MwlFp7Rfw5frhCF5OJEg3hmsdndp2TxnKvakLLNzaGKAi9wy', NULL, '2022-11-29 06:35:46', '2022-11-29 06:35:46', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `waktu`
--

CREATE TABLE `waktu` (
  `id` int(11) NOT NULL,
  `waktu_awal` varchar(10) NOT NULL,
  `waktu_akhir` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `waktu`
--

INSERT INTO `waktu` (`id`, `waktu_awal`, `waktu_akhir`) VALUES
(1, '07.00', '08.00'),
(2, '08.00', '09.00'),
(3, '09.15', '10.15'),
(4, '10.15', '11.15'),
(5, '09.00', '10.00'),
(6, '10.00', '11.00'),
(7, '11.45', '12.45'),
(9, '12.45', '13.45'),
(10, '08.30', '09.30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absen`
--
ALTER TABLE `absen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `absen_id_siswa_foreign` (`id_siswa`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `link`
--
ALTER TABLE `link`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `ruangan`
--
ALTER TABLE `ruangan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `siswa_id_jurusan_foreign` (`id_jurusan`),
  ADD KEY `id_ruangan` (`id_ruangan`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- Indexes for table `waktu`
--
ALTER TABLE `waktu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absen`
--
ALTER TABLE `absen`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `link`
--
ALTER TABLE `link`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mapel`
--
ALTER TABLE `mapel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ruangan`
--
ALTER TABLE `ruangan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1080;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `waktu`
--
ALTER TABLE `waktu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `absen`
--
ALTER TABLE `absen`
  ADD CONSTRAINT `absen_id_siswa_foreign` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`id_ruangan`) REFERENCES `ruangan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
