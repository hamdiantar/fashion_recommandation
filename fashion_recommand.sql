-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 17, 2024 at 09:27 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fashion_recommand`
--

-- --------------------------------------------------------

--
-- Table structure for table `clothing_designs`
--

CREATE TABLE `clothing_designs` (
  `id` int NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `image_url` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `description` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `clothing_designs`
--

INSERT INTO `clothing_designs` (`id`, `user_id`, `image_url`, `description`, `created_at`, `updated_at`) VALUES
(14, 4, 'uploads/image_669628222ecf7.png', NULL, '2024-07-16 04:58:26', '2024-07-16 04:58:26'),
(15, 4, 'uploads/image_669628222ecf7.png', NULL, '2024-07-16 04:58:26', '2024-07-16 04:58:26'),
(16, 4, 'uploads/image_669628222ecf7.png', NULL, '2024-07-16 04:58:26', '2024-07-16 04:58:26'),
(17, 4, 'uploads/image_669628222ecf7.png', NULL, '2024-07-16 04:58:26', '2024-07-16 04:58:26'),
(18, 4, 'uploads/image_66978c58dcdbf.png', NULL, '2024-07-17 06:18:16', '2024-07-17 06:18:16'),
(19, 4, 'uploads/image_66978cc683033.png', NULL, '2024-07-17 06:20:06', '2024-07-17 06:20:06');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
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

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Katell Le', 'hoholyq@mailinator.com', NULL, '$2y$10$cScHPjOTb79UtJ6jdUt63OQZGRLOBgYOdOfONgd0K2/.ae2/4/I2O', NULL, '2024-05-21 05:38:39', '2024-05-21 05:38:39'),
(2, 'Wilma Warren', 'jopapewum@mailinator.com', NULL, '$2y$10$VXwmbwPmIe1JOvPI1dmfxeXccDZ99ldiHXvFaOESGfQoy5gS6Ak8G', NULL, '2024-05-21 06:56:07', '2024-05-21 06:56:07'),
(3, 'Angelica Blevins', 'fikecyfyd@mailinator.com', NULL, '$2y$10$y5i8.qpwyzqVQ0ehTU1O.OiJ5G.FyFUTUtXEFBW8qIAh9uPWxFNsS', NULL, '2024-05-26 04:20:25', '2024-05-26 04:20:25'),
(4, 'Sara', 'sara@test.com', NULL, '$2y$10$d37tbstLNFy2R8dKbgbCA.d.e0gAoYd/n7knYmz4P4AtlApZaONk.', NULL, '2024-05-26 08:06:51', '2024-05-26 10:13:34'),
(5, 'Stella Watson', 'soxy@mailinator.com', NULL, '$2y$10$9TkPcZCE3SR0NDofZWuYqearpu6jnWELXyFzFbrbM4R0WuX.IlqGO', NULL, '2024-06-11 09:50:20', '2024-06-11 09:50:20'),
(6, 'Walter Brewer', 'jyhezozax@mailinator.com', NULL, '$2y$10$LzOKeJPnJYADcyMAGFUthOPVRfytQ7L.x.d3cutVeiGWTj8Dl7eU2', NULL, '2024-07-09 03:12:29', '2024-07-09 03:12:29'),
(7, 'Quamar Rowland', 'colu@mailinator.com', NULL, '$2y$10$e9teZ0kCKLexfNneHC.2Ru3YwYU6d7T/qEHODXWCWFxD/2vAH5zj2', NULL, '2024-07-16 04:41:48', '2024-07-16 04:41:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clothing_designs`
--
ALTER TABLE `clothing_designs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `clothing_designs`
--
ALTER TABLE `clothing_designs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `clothing_designs`
--
ALTER TABLE `clothing_designs`
  ADD CONSTRAINT `clothing_designs_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
