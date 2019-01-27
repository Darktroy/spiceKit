-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 25, 2019 at 07:41 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `SpiceKitchen`
--

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `galleryId` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`galleryId`, `created_at`, `updated_at`, `image`) VALUES
(3, '2019-01-24 10:17:00', '2019-01-24 10:17:00', 'menuItems1548332220.png'),
(4, '2019-01-25 14:59:29', '2019-01-25 14:59:29', 'menuItems1548435569.png'),
(5, '2019-01-25 14:59:47', '2019-01-25 14:59:47', 'menuItems1548435587.png'),
(6, NULL, NULL, 'g01.jpg'),
(7, NULL, NULL, 'g02.jpg'),
(8, NULL, NULL, 'g03.jpg'),
(9, NULL, NULL, 'g05.jpg'),
(10, NULL, NULL, 'g06.jpg'),
(11, NULL, NULL, 'g07.jpg'),
(12, NULL, NULL, 'g08.jpg'),
(13, NULL, NULL, 'g09.jpg'),
(14, NULL, NULL, 'g10.jpg'),
(15, NULL, NULL, 'g11.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `menuItemsId` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menutypeId` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `itemDescription` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`menuItemsId`, `created_at`, `updated_at`, `image`, `title`, `menutypeId`, `itemDescription`, `price`) VALUES
(1, NULL, '2019-01-24 05:22:44', NULL, 'title test 2 up', '1', 'description ,efokmjv test', 5),
(2, '2019-01-24 07:38:45', '2019-01-24 07:38:45', 'menuItems1548322725.png', 'title 2', '1', 'item description 2', 23),
(3, '2019-01-24 07:39:52', '2019-01-24 07:39:52', 'menuItems1548322792.png', 'title ..3', '1', 'item description 3', 14),
(4, '2019-01-24 07:40:06', '2019-01-24 07:40:06', 'menuItems1548322806.png', 'title 4', '2', 'item description 4', 52),
(5, '2019-01-24 07:40:27', '2019-01-24 07:40:27', 'menuItems1548322827.png', 'title 5', '2', 'item description 5', 8),
(11, '2019-01-24 07:41:30', '2019-01-24 07:41:30', 'menuItems1548322890.png', 'title ..test 11', '2', 'item description testitem description testitem description testitem description test 11', 30),
(12, '2019-01-24 07:38:45', '2019-01-24 07:38:45', 'menuItems1548322725.png', 'title 2 menu type 3', '3', 'item description 2', 23),
(14, '2019-01-24 07:40:06', '2019-01-24 07:40:06', 'menuItems1548322806.png', 'title 4 menu type 3', '3', 'item description 4', 52),
(20, '2019-01-24 07:41:30', '2019-01-24 07:41:30', 'menuItems1548322890.png', 'title ..test 10 menu type 3', '3', 'item description testitem description testitem description testitem  menu type 3 description test 10', 46);

-- --------------------------------------------------------

--
-- Table structure for table `menu_types`
--

CREATE TABLE `menu_types` (
  `menuTypeId` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_types`
--

INSERT INTO `menu_types` (`menuTypeId`, `created_at`, `updated_at`, `name`) VALUES
(1, NULL, NULL, 'Left Menu'),
(2, NULL, NULL, 'Middle Menu'),
(3, NULL, NULL, 'Right Menu');

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
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_01_23_045945_create_menu_types_table', 2),
(3, '2019_01_23_050557_create_menu_items_table', 3),
(4, '2019_01_23_050823_create_galleries_table', 3);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
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
(1, 'test', 'test@test.com', NULL, '$2y$10$HHCQcZHGyPmhzPkSLuMc3OMgLkjgJ76WNsv/WPp6zC7pwUc29yztC', 'UWfoFfcdiiVdWKQSNCZwM2fcDedKXwoobteCVMbjPFAWcqVeULkKc54I7C8O', '2019-01-23 03:35:59', '2019-01-23 03:35:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`galleryId`);

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`menuItemsId`);

--
-- Indexes for table `menu_types`
--
ALTER TABLE `menu_types`
  ADD PRIMARY KEY (`menuTypeId`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `galleryId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `menuItemsId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `menu_types`
--
ALTER TABLE `menu_types`
  MODIFY `menuTypeId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
