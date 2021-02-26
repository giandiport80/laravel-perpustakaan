-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2021 at 12:49 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori_id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `penulis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stok` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `kategori_id`, `judul`, `keterangan`, `penulis`, `stok`, `status`, `created_at`, `updated_at`) VALUES
(4, 9, 'Laravel Dasar', 'Belajar Laravel dasar', 'Gian Nurwana S.Kom', 22, 1, '2020-09-22 13:38:51', '2020-09-25 03:57:55'),
(5, 3, 'Biologi', 'Biologi SMA', 'Gian Nurwana M.Kom', 13, 1, '2020-09-22 13:41:49', '2020-09-25 03:58:17'),
(6, 9, 'React JS dasar', 'belajar React Js dasar', 'Prawito Hudoro', 15, 1, '2020-09-22 13:52:33', '2020-09-25 03:58:03'),
(7, 9, 'Belajar MySQL', 'Belajar MySQL untuk pemula', 'Sandika Galih', 25, 1, '2020-09-23 09:00:04', '2020-09-25 03:58:09'),
(8, 9, 'Vue JS', 'Fundamental Vue JS', 'Evan You', 14, 1, '2020-09-25 03:59:15', '2020-09-25 14:33:21');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama`, `slug`, `created_at`, `updated_at`) VALUES
(3, 'Pendidikan', 'pendidikan', '2020-09-20 06:29:28', '2020-09-20 06:29:28'),
(9, 'Teknologi', 'teknologi', '2020-09-20 06:50:22', '2020-09-20 06:50:22'),
(10, 'Manajemen', 'manajemen', '2020-09-21 07:13:57', '2020-09-21 07:13:57'),
(11, 'Sains', 'sains', '2020-09-21 07:14:06', '2020-09-21 07:14:06'),
(12, 'Pemerintahan', 'pemerintahan', '2020-09-21 07:14:14', '2020-09-21 07:14:14');

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
(4, '2020_09_20_061226_create_kategori_table', 2),
(5, '2020_09_21_063532_create_buku_table', 3),
(6, '2020_09_21_185443_add_status_to_buku', 4),
(9, '2020_09_21_193940_create_peminjaman_table', 5),
(10, '2020_09_22_211110_add_status_to_peminjaman_table', 6),
(11, '2020_09_24_151649_add_role_to_users', 7);

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
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `buku_id` bigint(20) UNSIGNED NOT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id`, `user_id`, `buku_id`, `status`, `created_at`, `updated_at`) VALUES
(19, 1, 7, 2, '2020-09-23 13:41:36', '2020-09-23 13:41:51'),
(20, 4, 7, 2, '2020-09-24 14:43:31', '2020-09-25 03:57:43'),
(21, 4, 6, 1, '2020-09-24 14:43:33', '2020-09-25 14:32:43'),
(22, 4, 5, 1, '2020-09-24 14:47:36', '2020-09-25 14:32:41'),
(23, 7, 8, 2, '2020-09-25 03:59:58', '2020-09-25 14:33:21'),
(24, 4, 8, 2, '2020-09-25 14:31:45', '2020-09-25 14:33:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'gian', 'gian@gmail.com', NULL, '$2y$10$21fhvlesQxAiZo.pYtrIxuBmdlzxZThXLkvBuOFuzmH5QhWW9uPXy', NULL, '2020-09-19 22:04:34', '2020-09-19 22:04:34'),
(4, 'user', 'andi', 'andi@gmail.com', NULL, '$2y$10$XbXEkPMhTp2G9.WrphO4nuIIoLmHgN6pw4u9OG56Zh/te6ypDfk2W', NULL, '2020-09-24 08:51:51', '2020-09-24 08:51:51'),
(5, 'user', 'dina', 'dina@gmail.com', NULL, '$2y$10$U6zMY8OhLNd89shlKuu41.52YZxAHOp4cZTIspqSK8BGaQWYqnGTm', NULL, '2020-09-24 08:51:57', '2020-09-24 08:51:57'),
(6, 'user', 'lukman', 'lukman@gmail.com', NULL, '$2y$10$6og/vMV96lbOUjJXfEh7/eJOycG1sSdZQuB9kayTvOMGlRK83qLR2', NULL, '2020-09-24 08:52:11', '2020-09-24 08:52:11'),
(7, 'user', 'indah', 'indah@gmail.com', NULL, '$2y$10$R6NLF6NjgqIqjUr8SvtSFuSqN5AjRqRq57otekC9dOlmdgS9I9tfq', NULL, '2020-09-24 08:52:39', '2020-09-24 08:52:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`),
  ADD KEY `buku_kategori_id_foreign` (`kategori_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
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
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `buku`
--
ALTER TABLE `buku`
  ADD CONSTRAINT `buku_kategori_id_foreign` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
