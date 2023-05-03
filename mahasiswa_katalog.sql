-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2023 at 10:49 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahasiswa_katalog`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `photo`, `token`, `created_at`, `updated_at`) VALUES
(1, 'Fauzul Fikri', 'Fauzul@gmail.com', '$2y$10$it/WZXZ27MRXKNZ4B7lYMOnxgetDpuvuGWuDczpaHB4l0jJVEE0wC', 'admin.jpg', '', NULL, '2023-04-03 21:23:10');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
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
(5, '2023_04_03_080553_create_admins_table', 1),
(6, '2023_04_04_075506_add_position_to_users_table', 2),
(8, '2023_04_04_080601_create_talents_table', 3),
(9, '2023_04_07_182241_add_nim_to_users_table', 4),
(10, '2023_04_11_031759_create_students_table', 5),
(11, '2023_04_11_041758_add_name_to_students_table', 6),
(12, '2023_05_03_072411_create_table_sub_talent', 7),
(13, '2023_05_03_073015_create_sub_talent_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id_students` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `nim` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tahun_masuk` varchar(255) NOT NULL,
  `no_telp` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id_students`, `name`, `nim`, `photo`, `jurusan`, `alamat`, `tahun_masuk`, `no_telp`, `deskripsi`, `token`, `created_at`, `updated_at`) VALUES
(1, 'Jamal', '', 'user.jpg', '', '', '', '', '', NULL, '2023-04-11 21:36:52', '2023-04-11 21:36:52'),
(2, 'Bedu', '21076011', '', '', '', '', '', '', NULL, '2023-04-12 01:44:58', '2023-04-12 01:44:58'),
(3, 'Jamal', '21076011', '20230414040748.jpg', 'Teknik', 'Gang Merak', '2020', '081254765672', 'sdsfdsfsdf', NULL, '2023-04-13 21:07:50', '2023-04-13 21:07:50'),
(4, 'Raja', '21076011', '20230502045351.jpg', 'Teknik', 'Gang Bangau', '2020', '081254765672', 'tetrtrtrtr', NULL, '2023-05-01 21:53:51', '2023-05-01 21:53:51');

-- --------------------------------------------------------

--
-- Table structure for table `sub_talent`
--

CREATE TABLE `sub_talent` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_kategori` varchar(255) NOT NULL,
  `nama_bakat` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_talent`
--

INSERT INTO `sub_talent` (`id`, `id_kategori`, `nama_bakat`, `created_at`, `updated_at`) VALUES
(1, '1', 'Pemrograman Java', NULL, NULL),
(2, '1', 'Pemrograman C', NULL, NULL),
(3, '1', 'Pemrograman PHP', NULL, NULL),
(4, '1', 'Pemrograman Jaringan', NULL, NULL),
(5, '1', 'Pemrograman Ruby', NULL, NULL),
(6, '2', 'Seni Pahat', NULL, NULL),
(7, '2', 'Menyanyi', NULL, NULL),
(8, '2', 'Menggambar', NULL, NULL),
(9, '2', 'Acting', NULL, NULL),
(10, '2', 'Seni Ukir', NULL, NULL),
(11, '3', 'Bidan', NULL, NULL),
(12, '3', 'Dokter', NULL, NULL),
(13, '3', 'Ilmu Gizi', NULL, NULL),
(14, '3', 'Farmasi', NULL, NULL),
(15, '3', 'Perawat', NULL, NULL),
(16, '4', 'Manajemen', NULL, NULL),
(17, '4', 'Kepegawaian', NULL, NULL),
(18, '4', 'Keuangan', NULL, NULL),
(19, '4', 'Tata Usaha', NULL, NULL),
(20, '4', 'Hubungan Masyarakat', NULL, NULL),
(21, '5', 'Industri Perhotelan', NULL, NULL),
(22, '5', 'Front Office', NULL, NULL),
(23, '5', 'Housekeeping', NULL, NULL),
(24, '5', 'Laundry', NULL, NULL),
(25, '5', 'Food and Beverage', NULL, NULL),
(26, '6', 'Wedding Manager', NULL, NULL),
(27, '6', 'Front Office Manager', NULL, NULL),
(28, '6', 'F&B Manager', NULL, NULL),
(29, '6', 'Room Sales Manager', NULL, NULL),
(30, '6', 'Event Coordinator', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `talents`
--

CREATE TABLE `talents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `talents`
--

INSERT INTO `talents` (`id`, `kategori`, `created_at`, `updated_at`) VALUES
(1, 'Komputer dan Jaringan', NULL, NULL),
(2, 'Kesenian', NULL, NULL),
(3, 'Kesehatan', NULL, NULL),
(4, 'Administrasi', NULL, NULL),
(5, 'Perhotelan', NULL, NULL),
(6, 'Pariwisata', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(9, 'intan', 'intan@gmail.com', '$2y$10$YZnx4uhLqc5RjTAQWPE/0.qKOfs3FoBiXYDb1qx708IgsmaPSEtBW', '2023-04-10 02:05:54', '2023-04-10 02:41:30'),
(10, 'Haikal', 'haikal@gmail.com', '$2y$10$ZFW/zC9zKQ4hcbrTZq.xue4v3tlZNwf8TiAU19ZLU/AFPwunaJrRq', '2023-04-10 02:06:25', '2023-04-10 02:06:25'),
(12, 'zafia', 'zafia@gmail.com', '$2y$10$THM3pRFijcnwbOU0I8o/9eY4tO.tXvy2pyD.2jwrdpltsjTzUqj7y', '2023-04-10 02:35:42', '2023-04-10 02:35:42'),
(13, 'Raja', 'raja@gmail.com', '$2y$10$tHWTFPIX3xpb6Krb4AmZmueLjEP8gQ4/IZBVWw/u.E8fxKKnvpnbm', '2023-04-10 22:07:45', '2023-04-10 22:07:45'),
(14, 'Jamal', 'Jamal@gmail.com', '$2y$10$CSPkwxdzxE.QdroCovjB3uEDgwfSloQn9J0C/9MyT2znYe6NfsHMC', '2023-04-11 21:36:53', '2023-04-11 21:36:53'),
(15, 'Bedu', 'bedu@gmail.com', '$2y$10$Sdi.6zBG/LxZwWQYrknuz.snHPQRRbjhK1MTcQoJEtGyfKp6GJnry', '2023-04-12 01:44:59', '2023-04-12 01:44:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id_students`);

--
-- Indexes for table `sub_talent`
--
ALTER TABLE `sub_talent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `talents`
--
ALTER TABLE `talents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id_students` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sub_talent`
--
ALTER TABLE `sub_talent`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `talents`
--
ALTER TABLE `talents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
