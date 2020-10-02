-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 02, 2020 at 05:12 AM
-- Server version: 5.6.41-84.1
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ngtonlin_tesr`
--

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2020_10_01_162331_create_profiles_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `profile_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `profile_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `profile_name`, `profile_status`, `profile_type`, `created_at`, `updated_at`) VALUES
(2, 'Faizan', 'active', 'user', '2020-10-01 16:58:05', '2020-10-01 17:27:01'),
(3, 'Stone Mckee', 'active', 'admin', '2020-10-01 17:52:39', '2020-10-01 17:52:39'),
(4, 'Nicole Lowery', 'inactive', 'admin', '2020-10-01 17:53:56', '2020-10-01 17:53:56'),
(5, 'Octavius Levy', 'inactive', 'admin', '2020-10-01 17:54:41', '2020-10-01 17:54:41'),
(6, 'Tatum Cooley', 'inactive', 'user', '2020-10-01 17:55:12', '2020-10-01 17:55:12'),
(7, 'Victoria Stokes', 'inactive', 'user', '2020-10-01 17:55:38', '2020-10-01 17:55:38'),
(8, 'Yael Reid', 'active', 'user', '2020-10-01 17:56:16', '2020-10-01 17:56:16'),
(9, 'Michelle Callahan', 'inactive', 'user', '2020-10-01 17:56:26', '2020-10-01 17:56:26'),
(10, 'Honorato Pratt', 'inactive', 'admin', '2020-10-01 17:56:36', '2020-10-01 17:56:36'),
(11, 'Abraham Freeman', 'inactive', 'admin', '2020-10-01 17:56:45', '2020-10-01 17:56:45'),
(12, 'Yuri Gibbs', 'active', 'user', '2020-10-01 17:56:53', '2020-10-01 17:56:53'),
(13, 'Nolan Santos', 'inactive', 'user', '2020-10-01 17:57:02', '2020-10-02 17:03:44');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'admin',
  `expiration` date NOT NULL,
  `profile_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `fname`, `lname`, `email`, `status`, `type`, `expiration`, `profile_id`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mason Hicks', 'Faizan', 'Quail Duke', 'rixuruwesy@mailinator.com', 'active', 'admin', '2013-04-07', '0', NULL, '$2y$10$jA/u5zqKU3gGok1TL6UNXuHATciZxxPSDZrqXBdtc4H1YAtTUEdtK', NULL, '2020-10-01 14:07:47', '2020-10-01 15:56:47'),
(2, 'jacksonberg', 'Mari Russell', 'Walter Gentry', 'mipit@mailinator.com', 'inactive', 'admin', '1974-09-13', '2', NULL, '$2y$10$TGO42QPv7DLnuoeymy9/mOK49asdLFqmUcNaMG/H4jxmO1jvrq4Lu', NULL, '2020-10-01 16:00:46', '2020-10-01 16:00:46'),
(4, 'Linda Mueller', 'Dane Ramsey', 'Constance Pittman', 'puqedake@mailinator.com', 'active', 'admin', '2016-10-11', '1', NULL, '$2y$10$GMQJQ5B5QGIpJNyIhFwRE.Xa9U4cdri8cV7MmbESIf9IgVZFAs1Ce', NULL, '2020-10-01 16:01:19', '2020-10-01 16:01:19'),
(7, 'superadmin', 'Super', 'Admin', 'super@admin.com', 'active', 'superadmin', '1996-10-19', '9', NULL, '$2y$10$sOqmOlxc2hiZmxzvODiGpems/.gQFESLWBBRgIY1v2Qq9h5AXhkWu', NULL, '2020-10-01 18:11:23', '2020-10-02 01:42:07'),
(8, 'Brian Calhoun', 'Kimberly Frye', 'Macy Miranda', 'pilifiqol@mailinator.com', 'inactive', 'admin', '1996-07-05', '1', NULL, '$2y$10$YJY0wmG6NEfwI5tNXT9gwO7l3zt/A60a7vWOVTvYb5kw.APyiFUnO', NULL, '2020-10-01 19:57:27', '2020-10-01 19:57:27'),
(9, 'Kendall Turner', 'Wyatt Wilcox', 'Ruth Burch', 'fikyme@mailinator.com', 'active', 'admin', '1981-08-07', '2', NULL, '$2y$10$A6UENOwA.Nh50VqPybrUguTtTwFDgeIhiLbulOOo.C/zoWOW3Aki.', NULL, '2020-10-01 20:04:50', '2020-10-01 20:04:50'),
(10, 'Ciara Henry', 'Nash Davis', 'Sebastian Joyner', 'fyquj@mailinator.com', 'active', 'admin', '2013-09-07', '9', NULL, '$2y$10$8fi5LPY/aXMzeH7qY8EyEOkxy6Pr1h1Cp0E.MdfICYyhTHGKfAVUu', NULL, '2020-10-02 00:32:24', '2020-10-02 00:32:24'),
(11, 'Taylor Gaines', 'Xavier Nunez', 'Audrey Cooke', 'laru@mailinator.com', 'active', 'admin', '2003-02-13', '7', NULL, '$2y$10$ZV/YpIWIeUJnG3M1F69RDeKgI5s7vGdDguQH74akjTFM1C9XpnIT.', NULL, '2020-10-02 01:21:07', '2020-10-02 01:21:07'),
(12, 'Lionel Fernandez', 'Liberty Benson', 'Fritz Everett', 'jyqorabidi@mailinator.com', 'active', 'user', '2017-09-26', '13', NULL, '$2y$10$ZdhZBMK/6Htu/iirsmEUoO8xijRw.wAznPRprbf9y6V6iX53MdQUq', NULL, '2020-10-02 01:22:25', '2020-10-02 01:22:25'),
(13, 'Dominic Pennington', 'Noel Mccall', 'Upton Jordan', 'vemuqyxo@mailinator.com', 'inactive', 'admin', '1993-12-20', '8', NULL, '$2y$10$Av.djdzXXazNY0UPWX18Xuletlc72OF4o3TzI12O8yO3Y/LRHSgrS', NULL, '2020-10-02 01:22:41', '2020-10-02 01:22:41'),
(14, 'Walter Anthony', 'Stuart Bartlett', 'Juliet Hardin', 'myzadobite@mailinator.com', 'inactive', 'admin', '2014-06-28', '12', NULL, '$2y$10$yj3XIGaS3l8oIdTBeHAQvOMvjAEGBq2g/5LNDq0clagU4Dg.v0SSO', NULL, '2020-10-02 01:56:57', '2020-10-02 01:56:57'),
(15, 'Erich Blair', 'Calvin Mccray', 'Jeanette Cote', 'qepawym@mailinator.com', 'inactive', 'user', '1993-10-27', '3', NULL, '$2y$10$L3HQ5DmE9sLZ8yJx67xUVuJTYovnrQ8Yyubl8rH7TT6PqWTNsGR7q', NULL, '2020-10-02 02:28:45', '2020-10-02 02:28:45'),
(16, 'Miranda Santiago', 'Ignacia Mcmillan', 'Mari Whitfield', 'conujeti@mailinator.com', 'active', 'user', '1975-09-05', '2', NULL, '$2y$10$IXzVhcOxpo9bJ601lHRHaO.moISvct/hA9eMObuDUCufKOs8pBsKO', NULL, '2020-10-02 02:28:57', '2020-10-02 02:28:57'),
(17, 'fyzan', 'Faizan', 'Khan', 'faizanarshadkhan@gmail.com', 'active', 'admin', '1984-05-09', '8', NULL, '$2y$10$1JEvVP0GRpe4swzj7HKlDuNAd7MSvsC8nYe2U1GDLWAtaUljBFi2O', NULL, '2020-10-02 02:30:55', '2020-10-02 16:58:00'),
(18, 'kashif', 'Kashif', 'Asghar', 'kashif-asghar@hotmail.com', 'active', 'admin', '2020-10-30', '13', NULL, '$2y$10$ob9qtzbKcKLaruetXmUIOOeNzSmZInu1ks.6QitiCa0T9qGlSrhYG', NULL, '2020-10-02 16:22:54', '2020-10-02 16:22:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
