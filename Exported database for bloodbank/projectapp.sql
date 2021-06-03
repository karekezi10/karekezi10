-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2021 at 05:25 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `bloodstores`
--

CREATE TABLE `bloodstores` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name1` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood_group1` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `volume1` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bloodstores`
--

INSERT INTO `bloodstores` (`id`, `name1`, `blood_group1`, `volume1`, `created_at`, `updated_at`) VALUES
(1, 'Gustave Karekezi', 'O-', '1.4', '2021-06-01 15:20:52', '2021-06-01 15:20:52'),
(2, 'Manzi Alex', 'O+', '0.9', '2021-06-01 15:22:52', '2021-06-01 15:22:52'),
(3, 'Manzi Alex', 'O+', '0.9', '2021-06-01 15:34:07', '2021-06-01 15:34:07'),
(4, 'Janathan Shiragahinda', 'B+', '1.3', '2021-06-03 21:32:18', '2021-06-03 21:32:18'),
(5, '--', 'O+', '1.3', '2021-06-03 21:33:26', '2021-06-03 21:33:26'),
(6, '--', 'O+', '1.3', '2021-06-03 21:35:28', '2021-06-03 21:35:28'),
(7, '--', 'O+', '1.3', '2021-06-03 21:37:49', '2021-06-03 21:37:49'),
(8, '--', 'O+', '1.3', '2021-06-03 21:40:37', '2021-06-03 21:40:37'),
(9, 'Mukunzi Gustave', 'O+', '1.3', '2021-06-03 21:41:24', '2021-06-03 21:41:24'),
(10, 'Mukunzi Gustave', 'O+', '1.3', '2021-06-03 21:42:06', '2021-06-03 21:42:06'),
(11, 'Manzi Alex', 'B+', '1.3', '2021-06-03 21:42:15', '2021-06-03 21:42:15'),
(12, 'Manzi Alex', 'B+', '1.3', '2021-06-03 21:43:29', '2021-06-03 21:43:29'),
(13, 'Manzi Alex', 'O-', '1.4', '2021-06-03 21:43:36', '2021-06-03 21:43:36'),
(14, 'Muhimpundu Dallia', 'B+', '1.3', '2021-06-03 21:49:54', '2021-06-03 21:49:54');

-- --------------------------------------------------------

--
-- Table structure for table `blood_inventories`
--

CREATE TABLE `blood_inventories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blood_group` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `volume` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `donor_id` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `request_id` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blood_inventories`
--

INSERT INTO `blood_inventories` (`id`, `blood_group`, `volume`, `status`, `donor_id`, `request_id`, `created_at`, `updated_at`) VALUES
(1, 'O+', '1.2', 'aproved', '1', '9', '2021-06-03 14:38:00', '2021-06-03 14:38:00'),
(2, 'B+', '1.2', 'aproved', '1', '1', '2021-06-03 14:38:14', '2021-06-03 14:38:14'),
(3, 'O+', '1.2', 'aproved', '3', '3', '2021-06-03 21:50:33', '2021-06-03 21:50:33');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_05_22_061308_create_projects_table', 1),
(5, '2021_05_22_121246_create_blood_inventories_table', 1),
(6, '2021_05_31_112711_create_bloodstores_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `fname`, `lname`, `age`, `email`, `phone`, `address`, `created_at`, `updated_at`) VALUES
(2, 'Manzi', 'Alex', '32', 'manzi@alex.com', '0978888800', 'gicumbi', '2021-06-01 15:22:34', '2021-06-01 17:52:41'),
(3, 'Mukunzi', 'Gustave', '22', 'dallia@admin.com', '0978888800', 'tumba', '2021-06-03 14:31:10', '2021-06-03 21:48:27'),
(4, 'Muhimpundu', 'Dallia', '21', 'dallia@admin.com', '0786979551', 'gicumbi2', '2021-06-03 14:32:03', '2021-06-03 21:30:09'),
(5, 'jonathan', 'gustav', '32', 'mukunzi@gmail.com', '09788888', 'kigali', '2021-06-03 21:31:37', '2021-06-03 21:31:37');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'gustave', 'gustave@gmail.com', NULL, '1234567890', NULL, NULL, NULL),
(2, 'gustave', 'karekezi@gmail.com', NULL, '$2y$10$LRd02peK8f6HKme2T2Aqcu8W/3ta9Ixc2rqtyG6heQJrJ6njmRZH.', NULL, '2021-06-01 15:19:02', '2021-06-01 15:19:02'),
(3, 'dallia', 'dallia@admin.com', NULL, '$2y$10$z4W4T1r6JZflcVBSZRKdP.P6sz1mXQZCYlnAGknpuxwKkcJfd2Vqy', NULL, '2021-06-03 12:33:54', '2021-06-03 12:33:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bloodstores`
--
ALTER TABLE `bloodstores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blood_inventories`
--
ALTER TABLE `blood_inventories`
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
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
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
-- AUTO_INCREMENT for table `bloodstores`
--
ALTER TABLE `bloodstores`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `blood_inventories`
--
ALTER TABLE `blood_inventories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
